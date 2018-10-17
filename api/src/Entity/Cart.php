<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 *@ApiResource
 * @ORM\Entity
 */
class Cart
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
     * @var string Date add
     *
     * @ORM\Column
     * @Assert\NotBlank
     */
    public $date_add = '';

    /**
     * @var string Date update
     *
     * @ORM\Column
     * @Assert\NotBlank
     */
    public $date_upd = '';

    /**
     * @var int Total
     * 
     * @ORM\Column
     * @Assert\NotBlank
     */
     public $total;

    /**
     * @var string Date invoice
     *
     * @ORM\Column
     * @Assert\NotBlank
     */
    public $invoice_date = '';

    /**
     * @var string Gender
     *
     * @ORM\Column
     * @Assert\NotBlank
     */
    public $customer_gender = '';

    /**
     * @var boolean is_ordered
     *
     * @ORM\Column
     * @Assert\NotBlank
     */
    public $is_order;

    /**
     * @var string payment mode
     *
     * @ORM\Column
     * @Assert\NotBlank
     */
    public $paiement_mode;

    
    
    public function getId(): ?int
    {
        return $this->id;
    }
}