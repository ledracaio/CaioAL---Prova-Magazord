# Como Executar

Passo a passo testado com um servidor local (localhost), pode vir a ocorrer problemas caso testado em qualquer coisa diferente.

1. Clone o repositório em uma pasta:
   git clone [https://github.com/ledracaio/CaioAugustoLedra-Prova-Magazord.git](https://github.com/ledracaio/CaioAugustoLedra-Prova-Magazord.git)
   Acesse a pasta onde foi relacionado o clone com cd CaioAugustoLedra-Prova-Magazord

2. Configure o banco de dados em config/config.php e execute o script 'create_sql.sql' no pgAdmin

3. Instale as dependências:
    Acesse o CMD na pasta onde foi realizado o clone;
    composer install

4. Inicie o servidor PHP:
    Inicie um servidor no CMD php -S localhost:8000 -t public
    Acesse a aplicação em http://localhost:8000.


# Informações persistentes
Para alterar algum registro, deve-se clicar em cima da informação que deseja alterar e clicar no botão que deve surgir. Só é possivel alterar uma linha de cada vez.

Excluir uma pessoa exclui os contatos relacionados a mesma.