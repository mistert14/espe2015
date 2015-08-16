<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AdeCreneaux
 */
class AdeCreneaux
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $groupe;

    /**
     * @var string
     */
    private $ue;

    /**
     * @var integer
     */
    private $semestre;

    /**
     * @var string
     */
    private $comment;

    /**
     * @var integer
     */
    private $place;


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
     * Set groupe
     *
     * @param string $groupe
     * @return AdeCreneaux
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
     * Set ue
     *
     * @param string $ue
     * @return AdeCreneaux
     */
    public function setUe($ue)
    {
        $this->ue = $ue;

        return $this;
    }

    /**
     * Get ue
     *
     * @return string 
     */
    public function getUe()
    {
        return $this->ue;
    }

    /**
     * Set semestre
     *
     * @param integer $semestre
     * @return AdeCreneaux
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
     * Set comment
     *
     * @param string $comment
     * @return AdeCreneaux
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string 
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set place
     *
     * @param integer $place
     * @return AdeCreneaux
     */
    public function setPlace($place)
    {
        $this->place = $place;

        return $this;
    }

    /**
     * Get place
     *
     * @return integer 
     */
    public function getPlace()
    {
        return $this->place;
    }
}
