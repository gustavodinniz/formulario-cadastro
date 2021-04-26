CREATE DATABASE bancoDeDados;

USE bancoDeDados;

CREATE TABLE tabelaClientes(
id_cliente INT NOT NULL PRIMARY KEY,
nome_cliente VARCHAR(255) NOT NULL,
email_cliente VARCHAR(255) NOT NULL,
telefone_cliente VARCHAR(13) NOT NULL,
senha_cliente VARCHAR(255) NOT NULL,
data_nasci_cliente VARCHAR(10) NOT NULL
);

SELECT * FROM tabelaClientes;