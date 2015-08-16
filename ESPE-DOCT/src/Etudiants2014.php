<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Etudiants2014
 */
class Etudiants2014
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $titre;

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
    private $marital;

    /**
     * @var string
     */
    private $affectationEspe;

    /**
     * @var string
     */
    private $groupe;

    /**
     * @var string
     */
    private $tp;

    /**
     * @var integer
     */
    private $inscrit;

    /**
     * @var integer
     */
    private $presence;

    /**
     * @var string
     */
    private $pb;


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
     * Set titre
     *
     * @param string $titre
     * @return Etudiants2014
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Etudiants2014
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
     * @return Etudiants2014
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
     * Set marital
     *
     * @param string $marital
     * @return Etudiants2014
     */
    public function setMarital($marital)
    {
        $this->marital = $marital;

        return $this;
    }

    /**
     * Get marital
     *
     * @return string 
     */
    public function getMarital()
    {
        return $this->marital;
    }

    /**
     * Set affectationEspe
     *
     * @param string $affectationEspe
     * @return Etudiants2014
     */
    public function setAffectationEspe($affectationEspe)
    {
        $this->affectationEspe = $affectationEspe;

        return $this;
    }

    /**
     * Get affectationEspe
     *
     * @return string 
     */
    public function getAffectationEspe()
    {
        return $this->affectationEspe;
    }

    /**
     * Set groupe
     *
     * @param string $groupe
     * @return Etudiants2014
     */
    public function setGroupe($groupe)
    {
        $this->groupe = $groupe;

        return $this;
    }

    /**
     * Get groupe
     *
     * @return string 
     */
    public function getGroupe()
    {
        return $this->groupe;
    }

    /**
     * Set tp
     *
     * @param string $tp
     * @return Etudiants2014
     */
    public function setTp($tp)
    {
        $this->tp = $tp;

        return $this;
    }

    /**
     * Get tp
     *
     * @return string 
     */
    public function getTp()
    {
        return $this->tp;
    }

    /**
     * Set inscrit
     *
     * @param integer $inscrit
     * @return Etudiants2014
     */
    public function setInscrit($inscrit)
    {
        $this->inscrit = $inscrit;

        return $this;
    }

    /**
     * Get inscrit
     *
     * @return integer 
     */
    public function getInscrit()
    {
        return $this->inscrit;
    }

    /**
     * Set presence
     *
     * @param integer $presence
     * @return Etudiants2014
     */
    public function setPresence($presence)
    {
        $this->presence = $presence;

        return $this;
    }

    /**
     * Get presence
     *
     * @return integer 
     */
    public function getPresence()
    {
        return $this->presence;
    }

    /**
     * Set pb
     *
     * @param string $pb
     * @return Etudiants2014
     */
    public function setPb($pb)
    {
        $this->pb = $pb;

        return $this;
    }

    /**
     * Get pb
     *
     * @return string 
     */
    public function getPb()
    {
        return $this->pb;
    }
}
