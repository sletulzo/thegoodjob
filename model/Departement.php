<?php
use Doctrine\ORM\Mapping\Entity as Entity;

namespace Model;
/** @Entity */
class Departement
{
    /** @Id @Column(type="integer") @GeneratedValue */
    private $id;
    
    /** @Column(type="string") */
    private $name;
   
    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setName($name) {
        $this->name = $name;
    }


}
?>
