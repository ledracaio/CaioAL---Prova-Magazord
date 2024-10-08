<?php
namespace App\Controller;

use App\Entity\Pessoa;
use Doctrine\ORM\EntityManagerInterface;

class PessoaController {
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager) {
        $this->entityManager = $entityManager;
    }

    public function index() {
        $pessoas = $this->entityManager->getRepository(Pessoa::class)->findAll();
        include __DIR__ . '/../View/pessoa_list.php';
    }

    public function form($id = null) {
        $pessoa = null;
        if ($id) {
            $pessoa = $this->entityManager->find(Pessoa::class, $id);
        }
        include __DIR__ . '/../View/pessoa_form.php';
    }

    public function save($data) {
        if (isset($data['id']) && $data['id']) {
            $pessoa = $this->entityManager->find(Pessoa::class, $data['id']);
            if (!$pessoa) {
                throw new \Exception("Pessoa não encontrada");
            }
        } else {
            $pessoa = new Pessoa();
        }
        
        $pessoa->setNome($data['nome']);
        $pessoa->setCpf($data['cpf']);
        
        $this->entityManager->persist($pessoa);
        $this->entityManager->flush();
    
        header('Location: public\..\index.php');
    }
    

    public function delete($id) {
        $pessoa = $this->entityManager->find(Pessoa::class, $id);
        if ($pessoa) {
            $this->entityManager->remove($pessoa);
            $this->entityManager->flush();
        }
        header('Location: public\..\index.php');
    }
}