<?php

namespace App;


use App\Interfaces\ActivationInterface;
use App\Interfaces\InscriptionInterface;

/**
 * Class AbstractUser
 * @package classes
 */
abstract class AbstractUser  implements ActivationInterface, InscriptionInterface {


    /**
     * Nom
     * @var
     */
    protected $nom;

    /**
     * Prenom
     * @var
     */
    protected $prenom;

    /**
     * Email
     * @var
     */
    protected $email;

    /**
     * Mdp
     * @var
     */
    protected $mdp;

    /**
     * Mdp
     * @var
     */
    protected $enabled;


    /**
     * Type de personnes
     */
    const TYPE = "Humain";


    /**
     * @return mixed
     */
    public abstract function getEnabled();

    /**
     * @param $enabled
     * @return mixed
     */
    public abstract function setEnabled($enabled);

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getMdp()
    {
        return $this->mdp;
    }

    /**
     * @param mixed $mdp
     */
    public function setMdp($mdp)
    {
        $this->mdp = $mdp;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * Is Banned User
     * @return mixed
     */
    public function getBanned()
    {
        // TODO: Implement getBanned() method.
    }

    /**
     * @param $banned
     * @return mixed
     */
    public function setBanned($banned)
    {
        // TODO: Implement setBanned() method.
    }

    /**
     * Is LOcked User
     * @return mixed
     */
    public function getLocked()
    {
        // TODO: Implement getLocked() method.
    }

    /**
     * @param $locked
     * @return mixed
     */
    public function setLocked($locked)
    {
        // TODO: Implement setLocked() method.
    }

    /**
     * Get DateTime when created User
     * @return mixed
     */
    public function getDateCreated()
    {
        // TODO: Implement getDateCreated() method.
    }

    /**
     * Set DateTime when created User
     * @param \DateTime $datetime
     * @return mixed
     */
    public function setDateCreated(\DateTime $datetime)
    {
        // TODO: Implement setDateCreated() method.
    }

    /**
     * Get DateTime when updated User
     * @return mixed
     */
    public function getDateUpdated()
    {
        // TODO: Implement getDateUpdated() method.
    }

    /**
     * Set DateTime when updated User
     * @param \DateTime $datetime
     * @return mixed
     */
    public function setDateUpdated(\DateTime $datetime)
    {
        // TODO: Implement setDateUpdated() method.
    }

    /**
     * To define echo $obj
     * @return mixed
     */
    public abstract function __toString();

        /**
     * Get all caracteristiques
     */
    public function getCaracteristiques(){
        echo "<h3>Toutes les caractéristiques de ".$this->nom."</h3>";

        echo "<ul>";

        foreach ($this as $attribut => $valeur)
        {
            echo '<li><strong>', $attribut, '</strong> => ', $valeur, '</li>';
        }

        echo "</ul>";
    }

}