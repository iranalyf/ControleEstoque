create DATABASE controle_estoque;
use controle_estoque;

CREATE TABLE usuario
(
	idUsuario int not null auto_increment primary key,
	nome varchar(50) not null,
	email varchar(50) not null,
	senha varchar(30) not null
);

CREATE TABLE produto 
(
	idProduto int not null auto_increment primary key,
	nome varchar(100) not null,
	descricao varchar(200) not null,
	data_cadastro date not null,
	valor_unitario int not null,
	quantidade_estoque int not null
);

CREATE TABLE categoria_produto
(
	idProduto int not null primary key,
	descricao varchar(100) not null
);

CREATE TABLE fornecedor
(
	idFornecedor int not null auto_increment primary key,
	nome varchar(100) not null,
	cnpj bigint not null
);

ALTER TABLE categoria_produto ADD CONSTRAINT produto_categoriaproduto_fk
FOREIGN KEY (idProduto)
REFERENCES produto (idProduto)
