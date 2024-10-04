<?php
namespace App\Controller;

use App\Entity\Contato;
use App\Entity\Pessoa;
use Doctrine\ORM\EntityManagerInterface;

class ContatoController {
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager) {
        $this->entityManager = $entityManager;
    }

    public function form($pessoaId, $id = null) {
        $contato = null;
        if ($id) {
            $contato = $this->entityManager->find(Contato::class, $id);
        }
        include __DIR__ . '/../View/contato_form.php';
    }

    public function save($data) {
        $contato = new Contato();
        $contato->setTipo($data['tipo']);
        $contato->setDescricao($data['descricao']);
        
        $pessoa = $this->entityManager->find(Pessoa::class, $data['pessoa_id']);
        $contato->setPessoa($pessoa);

        $this->entityManager->persist($contato);
        $this->entityManager->flush();
        header('Location: /public/contato_list.php?pessoa_id=' . $data['pessoa_id']);
    }

    public function delete($id) {
        $contato = $this->entityManager->find(Contato::class, $id);
        if ($contato) {
            $this->entityManager->remove($contato);
            $this->entityManager->flush();
        }
        header('Location: /public/contato_list.php?pessoa_id=' . $contato->getPessoa()->getId());
    }

    public function index($pessoaId) {
        $pessoa = $this->entityManager->find(Pessoa::class, $pessoaId);
        $contatos = $pessoa->getContatos();
        include __DIR__ . '/../View/contato_list.php';
    }
}