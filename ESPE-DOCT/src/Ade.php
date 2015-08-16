<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Ade
 */
class Ade
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @var \DateTime
     */
    private $hDebut;

    /**
     * @var \DateTime
     */
    private $hFin;

    /**
     * @var integer
     */
    private $duree;

    /**
     * @var string
     */
    private $salle;

    /**
     * @var string
     */
    private $resume;

    /**
     * @var string
     */
    private $formateur;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $grpEtudiant;

    /**
     * @var string
     */
    private $ue;


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
     * Set date
     *
     * @param \DateTime $date
     * @return Ade
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set hDebut
     *
     * @param \DateTime $hDebut
     * @return Ade
     */
    public function setHDebut($hDebut)
    {
        $this->hDebut = $hDebut;

        return $this;
    }

    /**
     * Get hDebut
     *
     * @return \DateTime 
     */
    public function getHDebut()
    {
        return $this->hDebut;
    }

    /**
     * Set hFin
     *
     * @param \DateTime $hFin
     * @return Ade
     */
    public function setHFin($hFin)
    {
        $this->hFin = $hFin;

        return $this;
    }

    /**
     * Get hFin
     *
     * @return \DateTime 
     */
    public function getHFin()
    {
        return $this->hFin;
    }

    /**
     * Set duree
     *
     * @param integer $duree
     * @return Ade
     */
    public function setDuree($duree)
    {
        $this->duree = $duree;

        return $this;
    }

    /**
     * Get duree
     *
     * @return integer 
     */
    public function getDuree()
    {
        return $this->duree;
    }

    /**
     * Set salle
     *
     * @param string $salle
     * @return Ade
     */
    public function setSalle($salle)
    {
        $this->salle = $salle;

        return $this;
    }

    /**
     * Get salle
     *
     * @return string 
     */
    public function getSalle()
    {
        return $this->salle;
    }

    /**
     * Set resume
     *
     * @param string $resume
     * @return Ade
     */
    public function setResume($resume)
    {
        $this->resume = $resume;

        return $this;
    }

    /**
     * Get resume
     *
     * @return string 
     */
    public function getResume()
    {
        return $this->resume;
    }

    /**
     * Set formateur
     *
     * @param string $formateur
     * @return Ade
     */
    public function setFormateur($formateur)
    {
        $this->formateur = $formateur;

        return $this;
    }

    /**
     * Get formateur
     *
     * @return string 
     */
    public function getFormateur()
    {
        return $this->formateur;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Ade
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set grpEtudiant
     *
     * @param string $grpEtudiant
     * @return Ade
     */
    public function setGrpEtudiant($grpEtudiant)
    {
        $this->grpEtudiant = $grpEtudiant;

        return $this;
    }

    /**
     * Get grpEtudiant
     *
     * @return string 
     */
    public function getGrpEtudiant()
    {
        return $this->grpEtudiant;
    }

    /**
     * Set ue
     *
     * @param string $ue
     * @return Ade
     */
    public function setUe($ue)
    {
        $this->ue = $ue;

        return $this;
    }

    /**
     * Get ue
     *
     * @return string 
     */
    public function getUe()
    {
        return $this->ue;
    }
}
