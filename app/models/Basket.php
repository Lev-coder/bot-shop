<?php

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="baskets")
 */
class Basket
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private $id;

    /**
     * @OneToMany(targetEntity="User", mappedBy="id")
     */
    private $user_ids;

    /**
     * @OneToMany(targetEntity="Product", mappedBy="id")
     */
    private $product_id;
}