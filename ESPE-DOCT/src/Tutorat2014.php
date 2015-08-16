<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Tutorat2014
 */
class Tutorat2014
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
     * @var integer
     */
    private $idPemf;

    /**
     * @var integer
     */
    private $idFormateur;

    /**
     * @var string
     */
    private $master2;

    /**
     * @var string
     */
    private $ue353a;


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
     * @return Tutorat2014
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
     * Set idPemf
     *
     * @param integer $idPemf
     * @return Tutorat2014
     */
    public function setIdPemf($idPemf)
    {
        $this->idPemf = $idPemf;

        return $this;
    }

    /**
     * Get idPemf
     *
     * @return integer 
     */
    public function getIdPemf()
    {
        return $this->idPemf;
    }

    /**
     * Set idFormateur
     *
     * @param integer $idFormateur
     * @return Tutorat2014
     */
    public function setIdFormateur($idFormateur)
    {
        $this->idFormateur = $idFormateur;

        return $this;
    }

    /**
     * Get idFormateur
     *
     * @return integer 
     */
    public function getIdFormateur()
    {
        return $this->idFormateur;
    }

    /**
     * Set master2
     *
     * @param string $master2
     * @return Tutorat2014
     */
    public function setMaster2($master2)
    {
        $this->master2 = $master2;

        return $this;
    }

    /**
     * Get master2
     *
     * @return string 
     */
    public function getMaster2()
    {
        return $this->master2;
    }

    /**
     * Set ue353a
     *
     * @param string $ue353a
     * @return Tutorat2014
     */
    public function setUe353a($ue353a)
    {
        $this->ue353a = $ue353a;

        return $this;
    }

    /**
     * Get ue353a
     *
     * @return string 
     */
    public function getUe353a()
    {
        return $this->ue353a;
    }
}
