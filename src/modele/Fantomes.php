<?php
namespace Fantomes;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: 'fantomes')]
class Fantome {
    #[ORM\Id]
    #[ORM\Column(type: 'integer')]
    #[ORM\GeneratedValue]
    private $id;
    #[ORM\Column(type: 'string')]
    private $nom;
    #[ORM\Column(type: 'string')]
    private $couleur;


    public function getNom() {
        return $this->nom;
    }


    public function setNom($nom): void {
        $this->nom = $nom;
    }


    public function getCouleur() {
        return $this->couleur;
    }

 
    public function setCouleur($couleur): void {
        $this->couleur = $couleur;
    }


    public function getId() {
        return $this->id;
    }
}
?>