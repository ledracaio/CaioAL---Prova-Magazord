<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="contatos")
 */
class Contato {
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $tipo;

    /**
     * @ORM\Column(type="string")
     */
    private $descricao;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Pessoa", inversedBy="contatos")
     * @ORM\JoinColumn(nullable=false)
     */
    private $pessoa;

    public function getId() {
        return $this->id;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function setTipo($tipo): self {
        $this->tipo = $tipo;
        return $this;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function setDescricao($descricao): self {
        $this->descricao = $descricao;
        return $this;
    }

    public function setPessoa(?Pessoa $pessoa): self {
        $this->pessoa = $pessoa;
        return $this;
    }

    public function getPessoa(): ?Pessoa {
        return $this->pessoa;
    }
}
