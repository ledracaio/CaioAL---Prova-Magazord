<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

/**
 * @ORM\Entity
 * @ORM\Table(name="pessoas")
 */
class Pessoa {
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $nome;

    /**
     * @ORM\Column(type="string", unique=true)
     */
    private $cpf;

    /**
     * @ORM\OneToMany(targetEntity="Contato", mappedBy="pessoa", cascade={"persist", "remove"})
     */
    private $contatos;

    public function __construct() {
        $this->contatos = new ArrayCollection();
    }

    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome): self {
        $this->nome = $nome;
        return $this;
    }

    public function getCpf() {
        return $this->cpf;
    }

    public function setCpf($cpf): self {
        $this->cpf = $cpf;
        return $this;
    }

    /**
     * @return Collection|Contato[]
     */
    public function getContatos(): Collection {
        return $this->contatos;
    }
}
