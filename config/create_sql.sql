-- Criação da tabela pessoas
CREATE TABLE pessoas (
    id SERIAL PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    cpf VARCHAR(11) UNIQUE NOT NULL
);

-- Criação da tabela contatos
CREATE TABLE contatos (
    id SERIAL PRIMARY KEY,
    tipo VARCHAR(50) CHECK (tipo IN ('Telefone', 'Email')) NOT NULL,
    descricao VARCHAR(255) NOT NULL,
    pessoa_id INTEGER REFERENCES pessoas(id) ON DELETE CASCADE
);
