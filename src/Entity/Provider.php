<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProviderRepository")
 */
class Provider
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text", length=50)
     */
    private $name;

    /**
     * @ORM\Column(type="text", length=100)
     */
    private $email;

    /**
     * @ORM\Column(type="text", length=10)
     */
    private $phone;

    /**
     * @ORM\Column(type="string", columnDefinition="ENUM('Pista', 'Hotel','Complemento')")
     */
    private $type;

    /**
     * @ORM\Column(type="boolean")
     */
    private $active;

    /**
     * @ORM\Column(type="text")
     */
    private $date_created;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $last_update;

    // Getters & Setters
    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getPhone() {
        return $this->phone;
    }

    public function setPhone($phone) {
        $this->phone = $phone;
    }

    public function getType() {
        return $this->type;
    }

    public function setType($type) {
        $this->type = $type;
    }

    public function getActive() {
        return $this->active;
    }

    public function setActive($active) {
        $this->active = $active;
    }

    public function getDate_Created() {
        return $this->date_created;
    }

    public function setDate_Created($date_created) {
        $this->date_created = $date_created;
    }

    public function getLast_Update() {
        return $this->last_update;
    }

    public function setLast_Update($last_update) {
        $this->last_update = $last_update;
    }
}