<?php

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="users")
 */
class User
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $chat_id;

    /**
     * @ORM\Column(type="string")
     */
    private $name;

    /**
     * Many features have one product. This is the owning side.
     * @ManyToOne(targetEntity="Role", inversedBy="id")
     * @JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $role;

    /**
     * Many Users have Many Groups.
     * @ManyToMany(targetEntity="Product")
     * @JoinTable(name="baskets",
     *      joinColumns={@JoinColumn(name="user_id", referencedColumnName="id")},
     *      inverseJoinColumns={@JoinColumn(name="product_id", referencedColumnName="id")}
     *      )
     */
    private $products;
}