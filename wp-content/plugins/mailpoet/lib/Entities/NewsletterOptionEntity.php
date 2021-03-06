<?php

namespace MailPoet\Entities;

if (!defined('ABSPATH')) exit;


use MailPoet\Doctrine\EntityTraits\AutoincrementedIdTrait;
use MailPoet\Doctrine\EntityTraits\CreatedAtTrait;
use MailPoet\Doctrine\EntityTraits\SafeToOneAssociationLoadTrait;
use MailPoet\Doctrine\EntityTraits\UpdatedAtTrait;
use MailPoetVendor\Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 * @ORM\Table(name="newsletter_option")
 */
class NewsletterOptionEntity {
  use AutoincrementedIdTrait;
  use CreatedAtTrait;
  use UpdatedAtTrait;
  use SafeToOneAssociationLoadTrait;


  /**
   * @ORM\Column(type="text")
   * @var string|null
   */
  private $value;

  /**
   * @ORM\ManyToOne(targetEntity="MailPoet\Entities\NewsletterEntity", inversedBy="options")
   * @var NewsletterEntity|null
   */
  private $newsletter;

  /**
   * @ORM\ManyToOne(targetEntity="MailPoet\Entities\NewsletterOptionFieldEntity")
   * @var NewsletterOptionFieldEntity
   */
  private $optionField;

  /**
   * @return string|null
   */
  public function getValue() {
    return $this->value;
  }

  /**
   * @param string|null $value
   */
  public function setValue($value) {
    $this->value = $value;
  }

  /**
   * @return NewsletterEntity|null
   */
  public function getNewsletter() {
    $this->safelyLoadToOneAssociation('newsletter');
    return $this->newsletter;
  }

  /**
   * @param NewsletterEntity $newsletter
   */
  public function setNewsletter($newsletter) {
    $this->newsletter = $newsletter;
  }

  /**
   * @return NewsletterOptionFieldEntity
   */
  public function getOptionField() {
    $this->safelyLoadToOneAssociation('optionField');
    return $this->optionField;
  }

  /**
   * @param NewsletterOptionFieldEntity $optionField
   */
  public function setOptionField($optionField) {
    $this->optionField = $optionField;
  }
}
