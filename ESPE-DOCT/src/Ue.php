<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Ue
 */
class Ue
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $description;

    /**
     * @var integer
     */
    private $ects;

    /**
     * @var float
     */
    private $cm;

    /**
     * @var float
     */
    private $td;

    /**
     * @var float
     */
    private $tp;

    /**
     * @var integer
     */
    private $coeff;

    /**
     * @var string
     */
    private $controle;

    /**
     * @var string
     */
    private $cours;

    /**
     * @var integer
     */
    private $semestre;

    /**
     * @var integer
     */
    private $bloc;

    /**
     * @var integer
     */
    private $discipline;

    /**
     * @var string
     */
    private $responsable;


    /**
     * Get id
     *
     * @return string 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Ue
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
     * Set ects
     *
     * @param integer $ects
     * @return Ue
     */
    public function setEcts($ects)
    {
        $this->ects = $ects;

        return $this;
    }

    /**
     * Get ects
     *
     * @return integer 
     */
    public function getEcts()
    {
        return $this->ects;
    }

    /**
     * Set cm
     *
     * @param float $cm
     * @return Ue
     */
    public function setCm($cm)
    {
        $this->cm = $cm;

        return $this;
    }

    /**
     * Get cm
     *
     * @return float 
     */
    public function getCm()
    {
        return $this->cm;
    }

    /**
     * Set td
     *
     * @param float $td
     * @return Ue
     */
    public function setTd($td)
    {
        $this->td = $td;

        return $this;
    }

    /**
     * Get td
     *
     * @return float 
     */
    public function getTd()
    {
        return $this->td;
    }

    /**
     * Set tp
     *
     * @param float $tp
     * @return Ue
     */
    public function setTp($tp)
    {
        $this->tp = $tp;

        return $this;
    }

    /**
     * Get tp
     *
     * @return float 
     */
    public function getTp()
    {
        return $this->tp;
    }

    /**
     * Set coeff
     *
     * @param integer $coeff
     * @return Ue
     */
    public function setCoeff($coeff)
    {
        $this->coeff = $coeff;

        return $this;
    }

    /**
     * Get coeff
     *
     * @return integer 
     */
    public function getCoeff()
    {
        return $this->coeff;
    }

    /**
     * Set controle
     *
     * @param string $controle
     * @return Ue
     */
    public function setControle($controle)
    {
        $this->controle = $controle;

        return $this;
    }

    /**
     * Get controle
     *
     * @return string 
     */
    public function getControle()
    {
        return $this->controle;
    }

    /**
     * Set cours
     *
     * @param string $cours
     * @return Ue
     */
    public function setCours($cours)
    {
        $this->cours = $cours;

        return $this;
    }

    /**
     * Get cours
     *
     * @return string 
     */
    public function getCours()
    {
        return $this->cours;
    }

    /**
     * Set semestre
     *
     * @param integer $semestre
     * @return Ue
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

    /**
     * Set bloc
     *
     * @param integer $bloc
     * @return Ue
     */
    public function setBloc($bloc)
    {
        $this->bloc = $bloc;

        return $this;
    }

    /**
     * Get bloc
     *
     * @return integer 
     */
    public function getBloc()
    {
        return $this->bloc;
    }

    /**
     * Set discipline
     *
     * @param integer $discipline
     * @return Ue
     */
    public function setDiscipline($discipline)
    {
        $this->discipline = $discipline;

        return $this;
    }

    /**
     * Get discipline
     *
     * @return integer 
     */
    public function getDiscipline()
    {
        return $this->discipline;
    }

    /**
     * Set responsable
     *
     * @param string $responsable
     * @return Ue
     */
    public function setResponsable($responsable)
    {
        $this->responsable = $responsable;

        return $this;
    }

    /**
     * Get responsable
     *
     * @return string 
     */
    public function getResponsable()
    {
        return $this->responsable;
    }
}
