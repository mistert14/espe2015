<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Stage2014
 */
class Stage2014
{
    /**
     * @var integer
     */
    private $id;

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
     * Set idMat
     *
     * @param integer $idMat
     * @return Stage2014
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
     * @return Stage2014
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
     * Set remarque
     *
     * @param string $remarque
     * @return Stage2014
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
