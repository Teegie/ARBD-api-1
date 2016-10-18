<?php

namespace CinemaHD\Entities;

use Doctrine\ORM\EntityManager;

use Utils\Doctrine\AutoIncrementId;

/**
 * @Entity(repositoryClass="CinemaHD\Repositories\PeopleRepository")
 * @Table(name="People")
 * @HasLifecycleCallbacks
 */
class User implements \JsonSerializable
{
    use AutoIncrementID;

    /**
     * @Column(type="string", name="lastname", length=50, nullable=true)
     */
    protected $lastname;

    /**
     * @Column(type="string", name="firstname", length=50, nullable=true)
     */
    protected $firstname;

    /**
     * @Column(type="date", name="date_of_birth", nullable=true)
     */
    protected $date_of_birth;

    /**
     * @Column(
     *     type="string", name="title",
     *     columnDefinition="ENUM('Monsieur','Madame','Mademoiselle') DEFAULT NULL", nullable=true
     * )
     */
    protected $title;

    /**
     * @Column(type="string", name="nationality", length=50, nullable=true)
     */
    protected $nationality;

    /**
     * @Column(type="string", name="role", length=50, nullable=true)
     */
    protected $role;

    public function toArray()
    {
        return [
            "id"            => $this->getId(),
            "lastname"      => $this->getLastname(),
            "firstname"     => $this->getFirstname(),
            "date_of_birth" => $this->getDateOfBirth(),
            "role"          => $this->getRole(),
            "nationality"   => $this->getNationality()
            "email"         => $this->getEmail()
        ];
    }

    public function jsonSerialize()
    {
        return $this->toArray();
    }

// ------ Getters ------

    /**
     * Gets the value of lastname
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Gets the value of firstname
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Gets the value of date_of_birth
     *
     * @return date
     */
    public function getDateOfBirth()
    {
        return $this->date_of_birth;
    }

    /**
     * Gets the value of role
     *
     * @return string
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Gets the value of email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Gets the value of nationality
     *
     * @return string
     */
    public function getNationality()
    {
        return $this->nationality;
    }

// ------ Setters ------

    /**
     * Sets the value of lastname
     *
     * @param string $lastname
     *
     * @return self
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Sets the value of firstname
     *
     * @param string $firstname
     *
     * @return self
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Gets the value of date_of_birth
     *
     * @param date
     *
     * @return self
     */
    public function setDateOfBirth($birth_date)
    {
        $this->date_of_birth = $birth_date;

        return $this;
    }

    /**
     * Gets the value of title
     *
     * @param string $title
     *
     * @return self
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Gets the value of email
     *
     * @param string $email
     *
     * @return self
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Gets the value of nationality
     *
     * @param string $nationality
     *
     * @return self
     */
    public function setNationality($nationality)
    {
        $this->nationality = $nationality;

        return $this;
    }
}
