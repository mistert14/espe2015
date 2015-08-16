<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Annees
 */
class Annees
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $debutAnnee;

    /**
     * @var \DateTime
     */
    private $finAnnee;


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
     * Set debutAnnee
     *
     * @param \DateTime $debutAnnee
     * @return Annees
     */
    public function setDebutAnnee($debutAnnee)
    {
        $this->debutAnnee = $debutAnnee;

        return $this;
    }

    /**
     * Get debutAnnee
     *
     * @return \DateTime 
     */
    public function getDebutAnnee()
    {
        return $this->debutAnnee;
    }

    /**
     * Set finAnnee
     *
     * @param \DateTime $finAnnee
     * @return Annees
     */
    public function setFinAnnee($finAnnee)
    {
        $this->finAnnee = $finAnnee;

        return $this;
    }

    /**
     * Get finAnnee
     *
     * @return \DateTime 
     */
    public function getFinAnnee()
    {
        return $this->finAnnee;
    }
}
