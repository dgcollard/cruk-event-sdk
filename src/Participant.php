<?php

namespace Cruk\EventSdk;

class Participant extends EWSObject
{
    /**
     * primaryParticipant
     *
     * @var boolean
     */
    private $primaryParticipant;

    /**
     * uniqueId
     *
     * @var string
     */
    private $uniqueId;

    /**
     * siebelId
     *
     * @var string
     */
    private $siebelId;

    /**
     * forename
     *
     * @var string
     */
    private $forename;

    /**
     * surname
     *
     * @var string
     */
    private $surname;

    /**
     * title
     *
     * @var string
     */
    private $title;

    /**
     * gender
     *
     * @var string
     */
    private $gender;

    /**
     * dob
     *
     * @var string
     */
    private $dob;

    /**
     * primaryDataSourceCode
     *
     * @var string
     */
    private $primaryDataSourceCode;

    /**
     * address
     *
     * TODO: Strip this out into a separate class, or at the very least tweak
     * this class to have accessors for each attribute of an address.
     *
     * @var array
     */
    private $address;

    /**
     * emailAddress
     *
     * @var string
     */
    private $emailAddress;

    /**
     * telephoneNumberLandline
     *
     * @var string
     */
    private $telephoneNumberLandline;

    /**
     * telephoneNumberMobile
     *
     * @var string
     */
    private $telephoneNumberMobile;

    /**
     * suppressions
     *
     * @var array
     */
    private $suppressions;

    /**
     * tshirtSizeCode
     *
     * @var string
     */
    private $tshirtSizeCode;

    /**
     * fundraisingUrl
     *
     * @var string
     */
    private $fundraisingUrl;

    /**
     * fundraisingTarget
     *
     * @var float
     */
    private $fundraisingTarget;

    /**
     * emergencyContactName
     *
     * @var string
     */
    private $emergencyContactName;

    /**
     * emergencyContactNumber
     *
     * @var string
     */
    private $emergencyContactNumber;

    /**
     * runningNumber
     *
     * @var integer
     */
    private $runningNumber;

    /**
     * cancerType
     *
     * @var string
     */
    private $cancerType;

    /**
     * motivation
     *
     * @var string
     */
    private $motivation;

    /**
     * event
     *
     * @var Event
     */
    private $event;

    /**
     * registration
     *
     * @var Registration
     */
    private $registration;

    /**
     * Participant constructor.
     * @param EWSClient $client
     * @param $data
     * @param Event $event
     * @param Registration $registration
     */
    public function __construct(EWSClient $client, $data, Event $event, Registration $registration)
    {
        $this->event = $event;
        $this->registration = $registration;
        parent::__construct($client, $data);
        return $this;
    }

    /**
     * @return Event
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * @param Event $event
     */
    public function setEvent(Event $event)
    {
        $this->event = $event;
    }

    /**
     * @return Registration
     */
    public function getRegistration()
    {
        return $this->registration;
    }

    /**
     * @param Registration $registration
     */
    public function setRegistration(Registration $registration)
    {
        $this->registration = $registration;
    }

    /**
     * @return boolean
     */
    public function getPrimaryParticipant()
    {
        return $this->primaryParticipant;
    }

    /**
     * @param boolean $primaryParticipant
     */
    public function setPrimaryParticipant($primaryParticipant)
    {
        $this->primaryParticipant = $primaryParticipant;
    }

    /**
     * @return string
     */
    public function getUniqueId()
    {
        return $this->uniqueId;
    }

    /**
     * @param string $uniqueId
     */
    public function setUniqueId($uniqueId)
    {
        $this->uniqueId = $uniqueId;
    }

    /**
     * @return string
     */
    public function getSiebelId()
    {
        return $this->siebelId;
    }

    /**
     * @param string $siebelId
     */
    public function setSiebelId($siebelId)
    {
        $this->siebelId = $siebelId;
    }

    /**
     * @return string
     */
    public function getForename()
    {
        return $this->forename;
    }

    /**
     * @param string $forename
     */
    public function setForename($forename)
    {
        $this->forename = $forename;
    }

    /**
     * @return string
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * @param string $surname
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @param string $gender
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    /**
     * @return string
     */
    public function getDob()
    {
        return $this->dob;
    }

    /**
     * @param string $dob
     */
    public function setDob($dob)
    {
        $this->dob = $dob;
    }

    /**
     * @return string
     */
    public function getPrimaryDataSourceCode()
    {
        return $this->primaryDataSourceCode;
    }

    /**
     * @param string $primaryDataSourceCode
     */
    public function setPrimaryDataSourceCode($primaryDataSourceCode)
    {
        $this->primaryDataSourceCode = $primaryDataSourceCode;
    }

    /**
     * @return array
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param array $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @return string
     */
    public function getEmailAddress()
    {
        return $this->emailAddress;
    }

    /**
     * @param string $emailAddress
     */
    public function setEmailAddress($emailAddress)
    {
        $this->emailAddress = $emailAddress;
    }

    /**
     * @return string
     */
    public function getTelephoneNumberLandline()
    {
        return $this->telephoneNumberLandline;
    }

    /**
     * @param string $telephoneNumberLandline
     */
    public function setTelephoneNumberLandline($telephoneNumberLandline)
    {
        $this->telephoneNumberLandline = $telephoneNumberLandline;
    }

    /**
     * @return string
     */
    public function getTelephoneNumberMobile()
    {
        return $this->telephoneNumberMobile;
    }

    /**
     * @param string $telephoneNumberMobile
     */
    public function setTelephoneNumberMobile($telephoneNumberMobile)
    {
        $this->telephoneNumberMobile = $telephoneNumberMobile;
    }

    /**
     * @return array
     */
    public function getSuppressions()
    {
        return $this->suppressions;
    }

    /**
     * @param array $suppressions
     */
    public function setSuppressions($suppressions)
    {
        $this->suppressions = $suppressions;
    }

    /**
     * @return string
     */
    public function getTshirtSizeCode()
    {
        return $this->tshirtSizeCode;
    }

    /**
     * @param string $tshirtSizeCode
     */
    public function setTshirtSizeCode($tshirtSizeCode)
    {
        $this->tshirtSizeCode = $tshirtSizeCode;
    }

    /**
     * @return string
     */
    public function getFundraisingUrl()
    {
        return $this->fundraisingUrl;
    }

    /**
     * @param string $fundraisingUrl
     */
    public function setFundraisingUrl($fundraisingUrl)
    {
        $this->fundraisingUrl = $fundraisingUrl;
        $this->fieldsToPatch['eventSpecific'] = 'fundraisingUrl';
    }

    /**
     * @return float
     */
    public function getFundraisingTarget()
    {
        return $this->fundraisingTarget;
    }

    /**
     * @param float $fundraisingTarget
     */
    public function setFundraisingTarget($fundraisingTarget)
    {
        $this->fundraisingTarget = $fundraisingTarget;
    }

    /**
     * @return string
     */
    public function getEmergencyContactName()
    {
        return $this->emergencyContactName;
    }

    /**
     * @param string $emergencyContactName
     */
    public function setEmergencyContactName($emergencyContactName)
    {
        $this->emergencyContactName = $emergencyContactName;
    }

    /**
     * @return string
     */
    public function getEmergencyContactNumber()
    {
        return $this->emergencyContactNumber;
    }

    /**
     * @param string $emergencyContactNumber
     */
    public function setEmergencyContactNumber($emergencyContactNumber)
    {
        $this->emergencyContactNumber = $emergencyContactNumber;
    }

    /**
     * @return int
     */
    public function getRunningNumber()
    {
        return $this->runningNumber;
    }

    /**
     * @param int $runningNumber
     */
    public function setRunningNumber($runningNumber)
    {
        $this->runningNumber = $runningNumber;
    }

    /**
     * @return string
     */
    public function getCancerType()
    {
        return $this->cancerType;
    }

    /**
     * @param string $cancerType
     */
    public function setCancerType($cancerType)
    {
        $this->cancerType = $cancerType;
    }

    /**
     * @return mixed
     */
    public function getMotivation()
    {
        return $this->motivation;
    }

    /**
     * @param mixed $motivation
     */
    public function setMotivation($motivation)
    {
        $this->motivation = $motivation;
    }

    /**
     * Simple function to return the idKey of a class. This allows us to use
     * a common populate function across all objects/classes.
     */
    protected function getIdKey()
    {
        return 'uniqueId';
    }

    /**
     * Simple function to return the URI that should be used to GET this object
     * from the EWS.
     */
    protected function getUri()
    {
        return $this->client->getPath() . "/events/{$this->event->getEventCode()}/registrations/{$this->registration->getRegistrationId()}/participantInfos/{$this->uniqueId}.json";
    }

    /**
     * Simple function to return the URI that should be used to POST/UPDATE this object
     * from the EWS.
     */
    protected function getCreateUri()
    {
        return $this->client->getPath() . "/events/{$this->event->getEventCode()}/registrations/{$this->registration->getRegistrationId()}/participantInfos.json";
    }

    /**
     * Simple function to return the structure of the class. This defines how the
     * object should be built and delivered as an array.
     */
    protected function getArrayStructure()
    {
        return [
            'primaryParticipant',
            'participant' => [
                'uniqueId',
                'siebelId',
                'forename',
                'surname',
                'title',
                'gender',
                'dob',
                'primaryDataSourceCode',
                'address',
                'emailAddress',
                'telephoneNumberLandline',
                'telephoneNumberMobile',
                'suppressions',
            ],
            'eventSpecific' => [
                'tshirtSizeCode',
                'fundraisingUrl',
                'fundraisingTarget',
                'emergencyContactName',
                'emergencyContactNumber',
                'runningNumber',
                'cancerType',
                'motivation',
            ],
        ];
    }
}