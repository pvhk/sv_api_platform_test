<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 *@ApiResource
 * @ORM\Entity
 */
class Company
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
     * @var string Company's name
     *
     * @ORM\Column
     * @Assert\NotBlank
     */
    public $name = '';
    
    
    
    public function getId(): ?int
    {
        return $this->id;
    }
}