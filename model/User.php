<?php
use Doctrine\ORM\Mapping\Entity as Entity;

namespace Model;
/** @Entity */
class Type_Annonce
{
    /** @Id @Column(type="integer") @GeneratedValue */
    private $id;
    
    /** @Column(type="string") */
    private $nom;
    
    /** @Column(type="string") */
    private $prenom;
   
    /** @Column(type="string") */
    private $password;
    
    /** @Column(type="string") */
    private $mail;
   
    /** @Column(type="string") */
    private $key;
    
    /** @Column(type="boolean") */
    private $activated;
    
    /**
     * @OneToMany(targetEntity="Annonce", mappedBy="user")
     */
    private $annonce;
    
    public function getId() {
        return $this->id;
    }

    public function getNom() {
        return $this->nom;
    }

    public function getPrenom() {
        return $this->prenom;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getMail() {
        return $this->mail;
    }

    public function getKey() {
        return $this->key;
    }

    public function getActivated() {
        return $this->activated;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function setMail($mail) {
        $this->mail = $mail;
    }

    public function setKey($key) {
        $this->key = $key;
    }

    public function setActivated($activated) {
        $this->activated = $activated;
    }


}
?>
