<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 *@ApiResource
 * @ORM\Entity
 */
class Product
{
    /**
     * @var int The entity Id
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var int id_client
     * @ORM\Column(type="integer")
     * @Assert\NotBlank
     */
    public $id_client;
    /**
     * @var string Date add
     *
     * @ORM\Column
     * @Assert\NotBlank
     */
    
    public $date_add = '';
    /**
     * @var string name
     *
     * @ORM\Column
     * @Assert\NotBlank
     */
    public $name = '';
    /**
     * @var string Date update
     *
     * @ORM\Column
     * @Assert\NotBlank
     */
    public $date_upd = '';

    /**
     * @var int Price
     * 
     * @ORM\Column
     * @Assert\NotBlank
     */
     public $price;

    /**
     * @var string Ean13 code
     *
     * @ORM\Column
     * @Assert\NotNull
     */
    public $ean13 = '';

    /**
     * @var string Reference
     *
     * @ORM\Column
     * @Assert\NotBlank
     */
    public $reference = '';

    /**
     * @var string Recolted at
     *
     * @ORM\Column
     * @Assert\NotBlank
     */
    public $recolted_at = '';
    
    
    public function getId(): ?int
    {
        return $this->id;
    }
}