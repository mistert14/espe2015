<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Stagem1s1
 */
class Stagem1s1
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $idStage;

    /**
     * @var integer
     */
    private $idMat;

    /**
     * @var integer
     */
    private $idStudent;

    /**
     * @var string
     */
    private $matPemf;

    /**
     * @var string
     */
    private $remarque;


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
     * Set idStage
     *
     * @param integer $idStage
     * @return Stagem1s1
     */
    public function setIdStage($idStage)
    {
        $this->idStage = $idStage;

        return $this;
    }

    /**
     * Get idStage
     *
     * @return integer 
     */
    public function getIdStage()
    {
        return $this->idStage;
    }

    /**
     * Set idMat
     *
     * @param integer $idMat
     * @return Stagem1s1
     */
    public function setIdMat($idMat)
    {
        $this->idMat = $idMat;

        return $this;
    }

    /**
     * Get idMat
     *
     * @return integer 
     */
    public function getIdMat()
    {
        return $this->idMat;
    }

    /**
     * Set idStudent
     *
     * @param integer $idStudent
     * @return Stagem1s1
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
     * Set matPemf
     *
     * @param string $matPemf
     * @return Stagem1s1
     */
    public function setMatPemf($matPemf)
    {
        $this->matPemf = $matPemf;

        return $this;
    }

    /**
     * Get matPemf
     *
     * @return string 
     */
    public function getMatPemf()
    {
        return $this->matPemf;
    }

    /**
     * Set remarque
     *
     * @param string $remarque
     * @return Stagem1s1
     */
    public function setRemarque($remarque)
    {
        $this->remarque = $remarque;

        return $this;
    }

    /**
     * Get remarque
     *
     * @return string 
     */
    public function getRemarque()
    {
        return $this->remarque;
    }
}
