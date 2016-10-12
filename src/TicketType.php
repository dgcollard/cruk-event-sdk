<?php

namespace Cruk\EventSdk;

class TicketType extends EWSObject {

  /**
   * @var string
   */
  private $id;

  /**
   * @var string
   */
  private $ticketTypeCode;

  /**
   * @var string
   */
  private $ticketTypeName;

  /**
   * @var CapacityGroup
   * @Assert\NotNull()
   */
  private $capacityGroup;

  /**
   * @var float Cost of the ticket in GBP
   */
  private $cost;

  /**
   * @var ArrayCollection|SalesChannel[] The sales channel
   */
  private $salesChannels;

  /**
   * @var \DateTime Created timestamp
   */
  private $created;

  /**
   * @var \DateTime Updated timestamp
   */
  private $updated;

  /**
   * @var ArrayCollection|Ticket[]
   */
  private $tickets;

  // @TODO: Remove once max / min is returned
  private $minTickets = 1;
  private $maxTickets = 10;
  private $description = 'The Golden Ticket (remove when returned by API)';

  /**
   * TicketType constructor.
   */
  public function __construct(EWSClient $client, $data)
  {
    $this->salesChannels = array();
    parent::__construct($client, $data);
  }

  /**
   * Get id
   *
   * @return string
   */
  public function getId()
  {
    return $this->id;
  }

  /**
   * Set ticketTypeCode
   */
  public function setTicketTypeCode($ticketTypeCode)
  {
    $this->ticketTypeCode = $ticketTypeCode;

    return $this;
  }

  /**
   * Get ticketTypeCode
   *
   * @return string
   */
  public function getTicketTypeCode()
  {
    return $this->ticketTypeCode;
  }


  /**
   * @return SalesChannel[]|
   */
  public function getSalesChannels()
  {
    return $this->salesChannels;
  }


  /**
   * Set minTickets
   */
  public function setMinTickets()
  {
    return $this->minTickets = 1;
  }

  /**
   * @return int
   */
  public function getMinTickets()
  {
    return $this->minTickets;
  }

  /**
   * @return int
   */
  public function getMaxTickets()
  {
    return $this->maxTickets;
  }

  /**
   * @return int
   */
  public function getDescription()
  {
    return $this->description;
  }

  /**
   * @param $salesChannels
   * @return TicketType
   */
  public function setSalesChannels($salesChannels = [])
  {
    $this->salesChannels = array();
    foreach ($salesChannels as $salesChannel) {
      $this->salesChannels[] = $salesChannel;
    }

    return $this;
  }

  /**
   * Set ticketTypeName
   *
   * @param string $ticketTypeName
   * @return TicketType
   */
  public function setTicketTypeName($ticketTypeName)
  {
    $this->ticketTypeName = $ticketTypeName;

    return $this;
  }

  /**
   * Get ticketTypeName
   *
   * @return string
   */
  public function getTicketTypeName()
  {
    return $this->ticketTypeName;
  }

  /**
   * Set capacityGroup
   *
   * @param CapacityGroup|null $capacityGroup
   * @return TicketType
   */
  public function setCapacityGroup(CapacityGroup $capacityGroup = null)
  {
    $this->capacityGroup = $capacityGroup;

    return $this;
  }

  /**
   * Get capacityGroup
   *
   * @return CapacityGroup
   */
  public function getCapacityGroup()
  {
    return $this->capacityGroup;
  }

  /**
   * Set cost
   *
   * @param float $cost
   * @return TicketType
   */
  public function setCost($cost)
  {
    $this->cost = $cost;

    return $this;
  }

  /**
   * Get cost
   *
   * @return float
   */
  public function getCost()
  {
    return $this->cost;
  }

  /**
   * @return \DateTime
   */
  public function getCreated()
  {
    return $this->created;
  }

  /**
   * @param \DateTime $created
   * @return TicketType
   */
  public function setCreated(\DateTime $created)
  {
    $this->created = $created;

    return $this;
  }

  /**
   * @return \DateTime
   */
  public function getUpdated()
  {
    return $this->updated;
  }

  /**
   * @param \DateTime $updated
   * @return TicketType
   */
  public function setUpdated(\DateTime $updated)
  {
    $this->updated = $updated;

    return $this;
  }

  /**
   * @return ArrayCollection|Ticket[]
   */
  public function getTickets()
  {
    return $this->tickets;
  }

  /**
   * Simple function to return the URI for loading the ticket types.
   *
   * @return string
   */
  public function getUri() {
    return $this->client->getPath() . "/ticket-types/{$this->id}";
  }

  public function setId($id) {
    $this->id = $id;
  }

  /**
   * Simple function to return the idKey of a class. This allows us to use
   * a common populate function across all objects/classes.
   */
  protected function getIdKey() {
    return 'id';
  }

  /**
   * Simple function to return the structure of the class. This defines how the
   * object should be built and delivered as an array.
   */
  protected function getArrayStructure() {
    return [
      'id',
      'ticketTypeCode',
      'ticketTypeName',
      'capacityGroup',
      'cost',
      'salesChannels',
      'created',
      'updated',
      'tickets',
    ];
  }

  /**
   * Simple function to return the URI for creating the Event.
   *
   * @return string
   */
  public function getCreateUri() {
    throw new EWSClientError('Unable to update ticket type directly');
  }
}
