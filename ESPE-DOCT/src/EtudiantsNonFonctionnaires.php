<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * EtudiantsNonFonctionnaires
 */
class EtudiantsNonFonctionnaires
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
     * @var \Groupes
     */
    private $idGroupe;


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
     * @return EtudiantsNonFonctionnaires
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
     * @return EtudiantsNonFonctionnaires
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
     * @return EtudiantsNonFonctionnaires
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
     * @return EtudiantsNonFonctionnaires
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
     * @return EtudiantsNonFonctionnaires
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
     * Set tp
     *
     * @param string $tp
     * @return EtudiantsNonFonctionnaires
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
     * @return EtudiantsNonFonctionnaires
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
     * @return EtudiantsNonFonctionnaires
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
     * Set idGroupe
     *
     * @param \Groupes $idGroupe
     * @return EtudiantsNonFonctionnaires
     */
    public function setIdGroupe(\Groupes $idGroupe = null)
    {
        $this->idGroupe = $idGroupe;

        return $this;
    }

    /**
     * Get idGroupe
     *
     * @return \Groupes 
     */
    public function getIdGroupe()
    {
        return $this->idGroupe;
    }
}
