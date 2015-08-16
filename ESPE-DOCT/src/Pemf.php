<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Pemf
 */
class Pemf
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nom;

    /**
     * @var string
     */
    private $prenom;

    /**
     * @var string
     */
    private $ecoleNom;

    /**
     * @var string
     */
    private $ecoleMail;

    /**
     * @var string
     */
    private $circo;

    /**
     * @var string
     */
    private $decharge;

    /**
     * @var string
     */
    private $cycle;

    /**
     * @var string
     */
    private $niveau;

    /**
     * @var string
     */
    private $bloc5;

    /**
     * @var string
     */
    private $formateurEspe;


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
     * Set nom
     *
     * @param string $nom
     * @return Pemf
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     * @return Pemf
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set ecoleNom
     *
     * @param string $ecoleNom
     * @return Pemf
     */
    public function setEcoleNom($ecoleNom)
    {
        $this->ecoleNom = $ecoleNom;

        return $this;
    }

    /**
     * Get ecoleNom
     *
     * @return string 
     */
    public function getEcoleNom()
    {
        return $this->ecoleNom;
    }

    /**
     * Set ecoleMail
     *
     * @param string $ecoleMail
     * @return Pemf
     */
    public function setEcoleMail($ecoleMail)
    {
        $this->ecoleMail = $ecoleMail;

        return $this;
    }

    /**
     * Get ecoleMail
     *
     * @return string 
     */
    public function getEcoleMail()
    {
        return $this->ecoleMail;
    }

    /**
     * Set circo
     *
     * @param string $circo
     * @return Pemf
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
     * Set decharge
     *
     * @param string $decharge
     * @return Pemf
     */
    public function setDecharge($decharge)
    {
        $this->decharge = $decharge;

        return $this;
    }

    /**
     * Get decharge
     *
     * @return string 
     */
    public function getDecharge()
    {
        return $this->decharge;
    }

    /**
     * Set cycle
     *
     * @param string $cycle
     * @return Pemf
     */
    public function setCycle($cycle)
    {
        $this->cycle = $cycle;

        return $this;
    }

    /**
     * Get cycle
     *
     * @return string 
     */
    public function getCycle()
    {
        return $this->cycle;
    }

    /**
     * Set niveau
     *
     * @param string $niveau
     * @return Pemf
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
     * Set bloc5
     *
     * @param string $bloc5
     * @return Pemf
     */
    public function setBloc5($bloc5)
    {
        $this->bloc5 = $bloc5;

        return $this;
    }

    /**
     * Get bloc5
     *
     * @return string 
     */
    public function getBloc5()
    {
        return $this->bloc5;
    }

    /**
     * Set formateurEspe
     *
     * @param string $formateurEspe
     * @return Pemf
     */
    public function setFormateurEspe($formateurEspe)
    {
        $this->formateurEspe = $formateurEspe;

        return $this;
    }

    /**
     * Get formateurEspe
     *
     * @return string 
     */
    public function getFormateurEspe()
    {
        return $this->formateurEspe;
    }
}
