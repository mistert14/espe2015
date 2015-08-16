<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Groupes
 */
class Groupes
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $groupe;

    /**
     * @var string
     */
    private $affectationEspe;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set groupe
     *
     * @param string $groupe
     * @return Groupes
     */
    public function setGroupe($groupe)
    {
        $this->groupe = $groupe;

        return $this;
    }

    /**
     * Get groupe
     *
     * @return string 
     */
    public function getGroupe()
    {
        return $this->groupe;
    }

    /**
     * Set affectationEspe
     *
     * @param string $affectationEspe
     * @return Groupes
     */
    public function setAffectationEspe($affectationEspe)
    {
        $this->affectationEspe = $affectationEspe;

        return $this;
    }

    /**
     * Get affectationEspe
     *
     * @return string 
     */
    public function getAffectationEspe()
    {
        return $this->affectationEspe;
    }
}
