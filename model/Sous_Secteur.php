<?php
use Doctrine\ORM\Mapping\Entity as Entity;

namespace Model;
/** @Entity */
class Sous_Secteur
{
    /** @Id @Column(type="integer") @GeneratedValue */
    private $id;
    
    /** @Column(type="string") */
    private $title;
   
    /**
     * @OneToMany(targetEntity="Annonce", mappedBy="departement")
     */
    private $annonce;
    
    public function getId() {
        return $this->id;
    }

    public function getTitle() {
        return $this->title;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setTitle($title) {
        $this->title = $title;
    }
 
}
?>
