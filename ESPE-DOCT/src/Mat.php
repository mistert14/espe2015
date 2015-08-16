<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Mat
 */
class Mat
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $circo;

    /**
     * @var string
     */
    private $matNom;

    /**
     * @var string
     */
    private $matPrenom;

    /**
     * @var string
     */
    private $ecole;

    /**
     * @var string
     */
    private $ville;

    /**
     * @var string
     */
    private $niveau;

    /**
     * @var string
     */
    private $observation;

    /**
     * @var string
     */
    private $telEcole;

    /**
     * @var string
     */
    private $mailEcole;


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
     * Set circo
     *
     * @param string $circo
     * @return Mat
     */
    public function setCirco($circo)
    {
        $this->circo = $circo;

        return $this;
    }

    /**
     * Get circo
     *
     * @return string 
     */
    public function getCirco()
    {
        return $this->circo;
    }

    /**
     * Set matNom
     *
     * @param string $matNom
     * @return Mat
     */
    public function setMatNom($matNom)
    {
        $this->matNom = $matNom;

        return $this;
    }

    /**
     * Get matNom
     *
     * @return string 
     */
    public function getMatNom()
    {
        return $this->matNom;
    }

    /**
     * Set matPrenom
     *
     * @param string $matPrenom
     * @return Mat
     */
    public function setMatPrenom($matPrenom)
    {
        $this->matPrenom = $matPrenom;

        return $this;
    }

    /**
     * Get matPrenom
     *
     * @return string 
     */
    public function getMatPrenom()
    {
        return $this->matPrenom;
    }

    /**
     * Set ecole
     *
     * @param string $ecole
     * @return Mat
     */
    public function setEcole($ecole)
    {
        $this->ecole = $ecole;

        return $this;
    }

    /**
     * Get ecole
     *
     * @return string 
     */
    public function getEcole()
    {
        return $this->ecole;
    }

    /**
     * Set ville
     *
     * @param string $ville
     * @return Mat
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string 
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set niveau
     *
     * @param string $niveau
     * @return Mat
     */
    public function setNiveau($niveau)
    {
        $this->niveau = $niveau;

        return $this;
    }

    /**
     * Get niveau
     *
     * @return string 
     */
    public function getNiveau()
    {
        return $this->niveau;
    }

    /**
     * Set observation
     *
     * @param string $observation
     * @return Mat
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
     * Set telEcole
     *
     * @param string $telEcole
     * @return Mat
     */
    public function setTelEcole($telEcole)
    {
        $this->telEcole = $telEcole;

        return $this;
    }

    /**
     * Get telEcole
     *
     * @return string 
     */
    public function getTelEcole()
    {
        return $this->telEcole;
    }

    /**
     * Set mailEcole
     *
     * @param string $mailEcole
     * @return Mat
     */
    public function setMailEcole($mailEcole)
    {
        $this->mailEcole = $mailEcole;

        return $this;
    }

    /**
     * Get mailEcole
     *
     * @return string 
     */
    public function getMailEcole()
    {
        return $this->mailEcole;
    }
}
