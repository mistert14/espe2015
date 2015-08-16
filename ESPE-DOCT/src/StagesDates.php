<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * StagesDates
 */
class StagesDates
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $idGroupe;

    /**
     * @var string
     */
    private $du;

    /**
     * @var string
     */
    private $au;

    /**
     * @var string
     */
    private $observation;

    /**
     * @var integer
     */
    private $semestre;


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
     * Set idGroupe
     *
     * @param integer $idGroupe
     * @return StagesDates
     */
    public function setIdGroupe($idGroupe)
    {
        $this->idGroupe = $idGroupe;

        return $this;
    }

    /**
     * Get idGroupe
     *
     * @return integer 
     */
    public function getIdGroupe()
    {
        return $this->idGroupe;
    }

    /**
     * Set du
     *
     * @param string $du
     * @return StagesDates
     */
    public function setDu($du)
    {
        $this->du = $du;

        return $this;
    }

    /**
     * Get du
     *
     * @return string 
     */
    public function getDu()
    {
        return $this->du;
    }

    /**
     * Set au
     *
     * @param string $au
     * @return StagesDates
     */
    public function setAu($au)
    {
        $this->au = $au;

        return $this;
    }

    /**
     * Get au
     *
     * @return string 
     */
    public function getAu()
    {
        return $this->au;
    }

    /**
     * Set observation
     *
     * @param string $observation
     * @return StagesDates
     */
    public function setObservation($observation)
    {
        $this->observation = $observation;

        return $this;
    }

    /**
     * Get observation
     *
     * @return string 
     */
    public function getObservation()
    {
        return $this->observation;
    }

    /**
     * Set semestre
     *
     * @param integer $semestre
     * @return StagesDates
     */
    public function setSemestre($semestre)
    {
        $this->semestre = $semestre;

        return $this;
    }

    /**
     * Get semestre
     *
     * @return integer 
     */
    public function getSemestre()
    {
        return $this->semestre;
    }
}
