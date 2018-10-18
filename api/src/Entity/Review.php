<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 *@ApiResource
 * @ORM\Entity
 */
class Review
{   /**
    * @var int The entity Id
    *
    * @ORM\Id
    * @ORM\GeneratedValue
    * @ORM\Column(type="integer")
    */
   private $id;
   
   /**
     * @var int Product's id
     * 
     * 
     * @ORM\Column
     * @Assert\NotBlank
     */
    public $product_id;

    /**
     * @var string note
     * 
     * 
     * @ORM\Column
     * @Assert\NotBlank
     */
    public $note;

    /**
     * @var int Product's id
     * 
     * 
     * @ORM\Column
     * @Assert\NotBlank
     */
    public $text;

    public function getId(): ?int
    {
        return $this->id;
    }
}