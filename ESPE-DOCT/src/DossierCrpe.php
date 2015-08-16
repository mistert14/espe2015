<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * DossierCrpe
 */
class DossierCrpe
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $idStudent;

    /**
     * @var string
     */
    private $discipline;

    /**
     * @var string
     */
    private $creneau;


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
     * Set idStudent
     *
     * @param integer $idStudent
     * @return DossierCrpe
     */
    public function setIdStudent($idStudent)
    {
        $this->idStudent = $idStudent;

        return $this;
    }

    /**
     * Get idStudent
     *
     * @return integer 
     */
    public function getIdStudent()
    {
        return $this->idStudent;
    }

    /**
     * Set discipline
     *
     * @param string $discipline
     * @return DossierCrpe
     */
    public function setDiscipline($discipline)
    {
        $this->discipline = $discipline;

        return $this;
    }

    /**
     * Get discipline
     *
     * @return string 
     */
    public function getDiscipline()
    {
        return $this->discipline;
    }

    /**
     * Set creneau
     *
     * @param string $creneau
     * @return DossierCrpe
     */
    public function setCreneau($creneau)
    {
        $this->creneau = $creneau;

        return $this;
    }

    /**
     * Get creneau
     *
     * @return string 
     */
    public function getCreneau()
    {
        return $this->creneau;
    }
}
