<?php

namespace Cruk\EventSdk;

/**
 * @file
 *
 * Simple file to create the EWS interface that all other EWS classes will implement.
 */
abstract class EWSObject
{

    /** @var EWSClient */
    protected $client;

    /**
     * List of fields that have been updated. This allows us to use the patch function in a stupid way.
     *
     * @var array
     */
    protected $fieldsToPatch;

    /**
     * Create a new EWSObject
     *
     * @param EWSClient $client
     *   EWSClient which does all the HTTP requests for us.
     * @param mixed $data
     *   Either an ID, or an array to populate the object.
     */
    public function __construct(EWSClient $client, $data)
    {
        $this->fieldsToPatch = [];
        $this->client = $client;
        $this->populate($data);
        return $this;
    }

    /**
     * Populate an EWSClient Object with data sent through to us.
     *
     * @param mixed $data
     * @return EWSObject
     */
    protected function populate($data)
    {
        if (is_array($data)) {
            foreach ($data as $key => $value) {
                $value = $this->setValueFromKey($key, $value);
            }
        } elseif ($data) {
            $key = $this->getIdKey();
            $setter = 'set' . ucfirst($key);
            if (method_exists($this, $setter)) {
                $this->$setter($data);
                $this->load();
            }
        }
        return $this;
    }

    /**
     * Simple function to return the idKey of a class. This allows us to use
     * a common populate function across all objects/classes.
     *
     * @return string
     */
    abstract protected function getIdKey();

    /**
     * Load an object from the EWS and set the local variables.
     *
     * @return EWSObject
     */
    public function load()
    {
        $response = $this->client->requestJson('GET', $this->getUri());
        $this->populate($response);
        return $this;
    }

    /**
     * Simple function to return the URI that should be used to GET this object
     * from the EWS.
     *
     * @return string
     */
    abstract protected function getUri();

    /**
     * Create a new object on the EWS and set the local variables
     *
     * @return EWSObject
     */
    public function create()
    {
        $response = $this->client->requestJson('POST', $this->getCreateUri(), ['json' => $this->asArray()]);
        $this->populate($response);
        return $this;
    }

    /**
     * Simple function to return the URI that should be used to POST/UPDATE this object
     * from the EWS.
     *
     * @return string
     */
    abstract protected function getCreateUri();

    /**
     * Create an array that can be used to send to the EWS or simply to send to Drupal
     * or any other client.
     *
     * TODO: Convert this to use array_walk or to recurse. This currently only works with
     * two levels.
     *
     * @return array
     */
    public function asArray()
    {
        return $this->_asArray($this->getArrayStructure());
    }

    /**
     * Helper function to return an array of this object. This allows us to
     * filter the array for patch calls.
     *
     * @param $structure
     * @return array;
     */
    private function _asArray($structure)
    {
        $returnArray = [];
        foreach ($structure as $array_key => $key) {
            if (is_array($key)) {
                foreach ($key as $key2) {
                    $value = $this->getValueFromKey($key2);
                    if (!is_null($value)) {
                        $returnArray[$array_key][$key2] = $value;
                    }
                }
            } else {
                $value = $this->getValueFromKey($key);
                if (!is_null($value)) {
                    $returnArray[$key] = $value;
                }
            }
        }
        return $returnArray;
    }

    /**
     * Simple helper function to get a value from a key
     *
     * @param string $key
     * @return mixed
     */
    public function getValueFromKey($key)
    {
        $getter = 'get' . ucfirst($key);
        if (method_exists($this, $getter)) {
            return $this->$getter();
        }
        return null;
    }

    /**
     * Simple helper function to set a value from a key and value
     *
     * @param string $key
     * @param mixed $value
     * @return EWSObject
     */
    public function setValueFromKey($key, $value)
    {
        $setter = 'set' . ucfirst($key);
        if (method_exists($this, $setter)) {
            return $this->$setter($value);
        }
        return $this;
    }

    /**
     * Simple function to return the structure of the class. This defines how the
     * object should be built and delivered as an array.
     *
     * @return array
     */
    abstract protected function getArrayStructure();

    /**
     * Patch data to an existing object (effectively uses patch)
     *
     * @param mixed $data
     * @return EWSObject
     */
    public function patch($data = false)
    {
        if (!$data) {
            // We haven't been sent any data, so we attempt to build it based on the values of $fieldsToPatch
            $data = $this->_asArray($this->fieldsToPatch);
        }
        $this->fieldsToPatch = [];
        $response = $this->client->requestJson('PATCH', $this->getUri(), ['json' => $data]);
        $this->populate($response);
        return $this;
    }

    /**
     * Update an existing object
     *
     * @return EWSObject
     */
    public function update()
    {
        $response = $this->client->requestJson('PUT', $this->getUri(), ['json' => $this->asArray()]);
        $this->populate($response);
        return $this;
    }

    /**
     * @return EWSClient
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * @param EWSClient $client
     */
    public function setClient($client)
    {
        $this->client = $client;
    }
}
