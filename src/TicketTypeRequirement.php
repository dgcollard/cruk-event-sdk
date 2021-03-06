<?php

namespace Cruk\EventSdk;

class TicketTypeRequirement extends EWSObject {


  /**
   * @var string
   */
  private $id;

  /**
   * @var boolean
   */
  private $requireEmergencyContact;

  /**
   * @var boolean
   */
  private $requireFundraisingRestrictions;

  /**
   * @var boolean
   */
  private $requireMotivation;

  /**
   * @var boolean
   */
  private $requireFundraisingTarget;

  /**
   * @var boolean
   */
  private $requireMinimumFundraisingTarget;

  /**
   * @var float
   */
  private $minimumFundraisingTarget;

  /**
   * @var string
   */
  private $fundraisingTargetSupportingCopy;

  /**
   * @var boolean
   */
  private $requireParentalConsent;

  /**
   * @var boolean
   */
  private $requireParentalConsentContact;

  /**
   * @var string
   */
  private $requireEventKit;

    /**
     * @var boolean
     */
  private $requireTshirtName;

  /**
   * @var boolean
   */
  private $requireAgeRestriction;

  /**
   * @var string
   */
  private $ageRestrictionApplicableOn;

  /**
   * @var integer
   */
  private $minimumAge;

  /**
   * @var integer
   */
  private $maximumAge;

  /**
   * @var boolean
   */
  private $requireGender;

  /**
   * @var string
   */
  private $defaultGender;

  /**
   * @var boolean
   */
  private $requireTitle;


  /**
   * @var \DateTime Created timestamp
   */
  private $created;

  /**
   * @var \DateTime Updated timestamp
   */
  private $updated;

  /**
   * TicketType constructor.
   */
  public function __construct(EWSClient $client, $data, TicketType $ticketType) {
    parent::__construct($client, $data);
  }

  /**
   * Get id
   *
   * @return string
   */
  public function getId() {
    return $this->id;
  }

  /**
   * @return boolean
   */
  public function getRequireEmergencyContact() {
    return $this->requireEmergencyContact;
  }

  /**
   * @param boolean $requireEmergencyContact
   */
  public function setRequireEmergencyContact($requireEmergencyContact) {
    $this->requireEmergencyContact = $requireEmergencyContact;
  }

  /**
   * @return boolean
   */
  public function getRequireFundraisingRestrictions() {
    return $this->requireFundraisingRestrictions;
  }

  /**
   * @param boolean $requireFundraisingRestrictions
   */
  public function setRequireFundraisingRestrictions($requireFundraisingRestrictions) {
    $this->requireFundraisingRestrictions = $requireFundraisingRestrictions;
  }

  /**
   * @return boolean
   */
  public function getRequireMotivation() {
    return $this->requireMotivation;
  }

  /**
   * @param boolean $requireMotivation
   */
  public function setRequireMotivation($requireMotivation) {
    $this->requireMotivation = $requireMotivation;
  }

  /**
   * @return boolean
   */
  public function getRequireFundraisingTarget() {
    return $this->requireFundraisingTarget;
  }

  /**
   * @param boolean $requireFundraisingTarget
   */
  public function setRequireFundraisingTarget($requireFundraisingTarget) {
    $this->requireFundraisingTarget = $requireFundraisingTarget;
  }

  /**
   * @return boolean
   */
  public function getRequireMinimumFundraisingTarget() {
    return $this->requireMinimumFundraisingTarget;
  }

  /**
   * @param boolean $requireMinimumFundraisingTarget
   */
  public function setRequireMinimumFundraisingTarget($requireMinimumFundraisingTarget) {
    $this->requireMinimumFundraisingTarget = $requireMinimumFundraisingTarget;
  }

  /**
   * @return float
   */
  public function getMinimumFundraisingTarget() {
    return $this->minimumFundraisingTarget;
  }

  /**
   * @param float $minimumFundraisingTarget
   */
  public function setMinimumFundraisingTarget($minimumFundraisingTarget) {
    $this->minimumFundraisingTarget = $minimumFundraisingTarget;
  }

  /**
   * @return string
   */
  public function getFundraisingTargetSupportingCopy() {
    return $this->fundraisingTargetSupportingCopy;
  }

  /**
   * @param string $fundraisingTargetSupportingCopy
   */
  public function setFundraisingTargetSupportingCopy($fundraisingTargetSupportingCopy) {
    $this->fundraisingTargetSupportingCopy = $fundraisingTargetSupportingCopy;
  }

  /**
   * @return boolean
   */
  public function getRequireParentalConsent() {
    return $this->requireParentalConsent;
  }

  /**
   * @param boolean $requireParentalConsent
   */
  public function setRequireParentalConsent($requireParentalConsent) {
    $this->requireParentalConsent = $requireParentalConsent;
  }

  /**
   * @return mixed
   */
  public function getRequireParentalConsentContact() {
    return $this->requireParentalConsentContact;
  }

  /**
   * @param mixed $requireParentalConsentContact
   */
  public function setRequireParentalConsentContact($requireParentalConsentContact) {
    $this->requireParentalConsentContact = $requireParentalConsentContact;
  }

  /**
   * @return string
   */
  public function getRequireEventKit() {
    return $this->requireEventKit;
  }

  /**
   * @param string $requireEventKit
   */
  public function setRequireEventKit($requireEventKit) {
    $this->requireEventKit = $requireEventKit;
  }

    /**
     * @return bool
     */
    public function getRequireTshirtName()
    {
        return $this->requireTshirtName;
    }

    /**
     * @param bool $requireTshirtName
     */
    public function setRequireTshirtName($requireTshirtName)
    {
        $this->requireTshirtName = $requireTshirtName;
    }


  /**
   * @return boolean
   */
  public function getRequireAgeRestriction() {
    return $this->requireAgeRestriction;
  }

  /**
   * @param boolean $requireAgeRestriction
   */
  public function setRequireAgeRestriction($requireAgeRestriction) {
    $this->requireAgeRestriction = $requireAgeRestriction;
  }

  /**
   * @return string
   */
  public function getAgeRestrictionApplicableOn() {
    return $this->ageRestrictionApplicableOn;
  }

  /**
   * @param string $ageRestrictionApplicableOn
   */
  public function setAgeRestrictionApplicableOn($ageRestrictionApplicableOn) {
    $this->ageRestrictionApplicableOn = $ageRestrictionApplicableOn;
  }

  /**
   * @return int
   */
  public function getMinimumAge() {
    return $this->minimumAge;
  }

  /**
   * @param int $minimumAge
   */
  public function setMinimumAge($minimumAge) {
    $this->minimumAge = $minimumAge;
  }

  /**
   * @return int
   */
  public function getMaximumAge() {
    return $this->maximumAge;
  }

  /**
   * @param int $maximumAge
   */
  public function setMaximumAge($maximumAge) {
    $this->maximumAge = $maximumAge;
  }

  /**
   * @return \DateTime
   */
  public function getCreated() {
    return $this->created;
  }

  /**
   * @param \DateTime $created
   * @return Requirement
   */
  public function setCreated($created) {
    $this->created = $created;

    return $this;
  }

  /**
   * @return \DateTime
   */
  public function getUpdated() {
    return $this->updated;
  }

  /**
   * @param \DateTime $updated
   * @return TicketType
   */
  public function setUpdated($updated) {
    $this->updated = $updated;

    return $this;
  }

  /**
   * @return boolean
   */
  public function getRequireGender() {
    return $this->requireGender;
  }

  /**
   * @param boolean $requireGender
   */
  public function setRequireGender($requireGender) {
    $this->requireGender = $requireGender;
  }

  /**
   * @return string
   */
  public function getDefaultGender() {
    return $this->defaultGender;
  }

  /**
   * @param string $defaultGender
   */
  public function setDefaultGender($defaultGender) {
    $this->defaultGender = $defaultGender;
  }

  /**
   * @return boolean
   */
  public function getRequireTitle() {
    return $this->requireTitle;
  }

  /**
   * @param boolean $requireTitle
   */
  public function setRequireTitle($requireTitle) {
    $this->requireTitle = $requireTitle;
  }

  /**
   * Simple function to return the URI for loading the ticket types.
   *
   * @return string
   */
  public function getUri() {
    throw new EWSClientError('Unable to update ticket type requirement directly');
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
      'requireEmergencyContact',
      'requireFundraisingRestrictions',
      'requireParentalConsent',
      'requireParentalConsentContact',
      'requireMotivation',
      'requireFundraisingTarget',
      'requireMinimumFundraisingTarget',
      'minimumFundraisingTarget',
      'fundraisingTargetSupportingCopy',
      'requireEventKit',
      'requireTshirtName',
      'requireAgeRestriction',
      'ageRestrictionApplicableOn',
      'minimumAge',
      'maximumAge',
      'requireGender',
      'defaultGender',
      'requireTitle',
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
