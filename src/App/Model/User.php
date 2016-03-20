<?php
namespace App\Model;
/**
 * @Entity
 */
class User
{
    /**
     * @Id @Column(type="integer")
     * @GeneratedValue
     */
    private $id;

    /** @Column(type="text") */
    private $content;
}