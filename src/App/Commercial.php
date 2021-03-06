<?php

namespace App;

/**
 * Class Commercial
 * @package classes
 */
class Commercial extends User {


    /**
     * Point de vente
     * @var
     */
    protected $pointdevente;

    /**
     * Experience
     * @var
     */
    protected $experience;


    /**
     * Constructeur
     * @param $pointdevente
     * @param $experience
     */
    public function __construct($pointdevente, $experience){
        $this->pointdevente = $pointdevente;
        $this->experience = $experience;
    }



    /**
     * @return mixed
     */
    public function getExperience()
    {
        return $this->experience;
    }

    /**
     * @param mixed $experience
     */
    public function setExperience($experience)
    {
        $this->experience = $experience;
    }

    /**
     * @return mixed
     */
    public function getPointdevente()
    {
        return $this->pointdevente;
    }

    /**
     * @param mixed $pointdevente
     */
    public function setPointdevente($pointdevente)
    {
        $this->pointdevente = $pointdevente;
    }

    /**
     * Vendre un article
     * @param $article
     * @return string
     */
    public function vendre($article){

        return "Je vend l'article " . $article . "  dans le centre commercial "  . $this->pointdevente;
    }




} 