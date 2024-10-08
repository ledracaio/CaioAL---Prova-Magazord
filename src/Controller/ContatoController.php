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
        // Verifica se o ID do contato foi fornecido
        if (isset($data['id']) && $data['id']) {
            // Atualiza um contato existente
            $contato = $this->entityManager->find(Contato::class, $data['id']);
            if (!$contato) {
                // Tratar caso onde o contato não é encontrado (opcional)
                throw new \Exception("Contato não encontrado");
            }
        } else {
            // Cria um novo contato
            $contato = new Contato();
        }
        
        // Define os dados do contato
        $contato->setTipo($data['tipo']);
        $contato->setDescricao($data['descricao']);
    
        // Busca a pessoa associada
        $pessoa = $this->entityManager->find(Pessoa::class, $data['pessoa_id']);
        if ($pessoa) {
            $contato->setPessoa($pessoa);
        } else {
            // Tratar caso onde a pessoa não é encontrada (opcional)
            throw new \Exception("Pessoa não encontrada");
        }
    
        // Persiste o contato
        $this->entityManager->persist($contato);
        $this->entityManager->flush();
    
        // Redireciona após salvar
        header('Location: public\..\index_contato.php?pessoa_id=' . $data['pessoa_id']);
    }
    

    public function delete($id) {
        $contato = $this->entityManager->find(Contato::class, $id);
        if ($contato) {
            $this->entityManager->remove($contato);
            $this->entityManager->flush();
        }
        header('Location: public\..\index_contato.php?pessoa_id=' . $contato->getPessoa()->getId());
    }

    public function index($pessoaId) {
        $pessoa = $this->entityManager->find(Pessoa::class, $pessoaId);
        $contatos = $pessoa->getContatos();
        include __DIR__ . '/../View/contato_list.php';
    }
}