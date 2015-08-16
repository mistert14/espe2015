<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Distances
 */
class Distances
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $insee;

    /**
     * @var string
     */
    private $nom;

    /**
     * @var float
     */
    private $altitude;

    /**
     * @var string
     */
    private $codePostal;

    /**
     * @var float
     */
    private $longitudeRadian;

    /**
     * @var float
     */
    private $latitudeRadian;

    /**
     * @var integer
     */
    private $pop99;

    /**
     * @var float
     */
    private $surface;


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
     * Set insee
     *
     * @param string $insee
     * @return Distances
     */
    public function setInsee($insee)
    {
        $this->insee = $insee;

        return $this;
    }

    /**
     * Get insee
     *
     * @return string 
     */
    public function getInsee()
    {
        return $this->insee;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Distances
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
     * Set altitude
     *
     * @param float $altitude
     * @return Distances
     */
    public function setAltitude($altitude)
    {
        $this->altitude = $altitude;

        return $this;
    }

    /**
     * Get altitude
     *
     * @return float 
     */
    public function getAltitude()
    {
        return $this->altitude;
    }

    /**
     * Set codePostal
     *
     * @param string $codePostal
     * @return Distances
     */
    public function setCodePostal($codePostal)
    {
        $this->codePostal = $codePostal;

        return $this;
    }

    /**
     * Get codePostal
     *
     * @return string 
     */
    public function getCodePostal()
    {
        return $this->codePostal;
    }

    /**
     * Set longitudeRadian
     *
     * @param float $longitudeRadian
     * @return Distances
     */
    public function setLongitudeRadian($longitudeRadian)
    {
        $this->longitudeRadian = $longitudeRadian;

        return $this;
    }

    /**
     * Get longitudeRadian
     *
     * @return float 
     */
    public function getLongitudeRadian()
    {
        return $this->longitudeRadian;
    }

    /**
     * Set latitudeRadian
     *
     * @param float $latitudeRadian
     * @return Distances
     */
    public function setLatitudeRadian($latitudeRadian)
    {
        $this->latitudeRadian = $latitudeRadian;

        return $this;
    }

    /**
     * Get latitudeRadian
     *
     * @return float 
     */
    public function getLatitudeRadian()
    {
        return $this->latitudeRadian;
    }

    /**
     * Set pop99
     *
     * @param integer $pop99
     * @return Distances
     */
    public function setPop99($pop99)
    {
        $this->pop99 = $pop99;

        return $this;
    }

    /**
     * Get pop99
     *
     * @return integer 
     */
    public function getPop99()
    {
        return $this->pop99;
    }

    /**
     * Set surface
     *
     * @param float $surface
     * @return Distances
     */
    public function setSurface($surface)
    {
        $this->surface = $surface;

        return $this;
    }

    /**
     * Get surface
     *
     * @return float 
     */
    public function getSurface()
    {
        return $this->surface;
    }
}
