<?php
use Doctrine\ORM\Mapping\Entity as Entity;

namespace Model;
/** @Entity */
class Annonce
{
    /** @Id @Column(type="integer") @GeneratedValue */
    private $id;
    
    /** @Column(type="string") */
    private $title;
    
    /** @Column(type="string") */
    private $content;
    
    /** @Column(type="string", lenght="5") */
    private $cp;
    
    /** @Column(type="boolean") */
    private $validated;  
    
    /**
     * @ManyToOne(targetEntity="User", inversedBy="annonce")
     */
    private $user;
    
    /**
     * @ManyToOne(targetEntity="Region", inversedBy="annonce")
     */
    private $region;
    
    /**
     * @ManyToOne(targetEntity="Departement", inversedBy="annonce")
     */
    private $departement;
    
    /**
     * @ManyToOne(targetEntity="Sous_Secteur", inversedBy="annonce")
     */
    private $sous_secteur;
    
    /**
     * @ManyToOne(targetEntity="Type_Conrat")
     */
    private $type_contrat;
    
    public function getId() {
        return $this->id;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getContent() {
        return $this->content;
    }

    public function getCp() {
        return $this->cp;
    }

    public function getValidated() {
        return $this->validated;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function setContent($content) {
        $this->content = $content;
    }

    public function setCp($cp) {
        $this->cp = $cp;
    }

    public function setValidated($validated) {
        $this->validated = $validated;
    }


}
?>
