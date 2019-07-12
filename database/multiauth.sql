-- Geração de Modelo físico
-- Sql ANSI 2003 - brModelo.



CREATE TABLE STATUS_MATRICULA (
ID_STATUS_MATRICULA INTEGER AUTO_INCREMENT NOT NULL PRIMARY KEY,
NOME VARCHAR(200)
);

CREATE TABLE PACOTES (
ID_PACOTE INTEGER AUTO_INCREMENT NOT NULL PRIMARY KEY,
ID_CATEGORIA INTEGER,
NOME_PACOTE VARCHAR(200),
DESCRICAO VARCHAR(400),
DURACAO VARCHAR(100),
STATUS INTEGER,
ORDEM INTEGER
);

CREATE TABLE CURSOS (
ID_CURSO INTEGER AUTO_INCREMENT NOT NULL PRIMARY KEY,
DURACAO VARCHAR(100),
NOME_CURSO VARCHAR(200)
);

CREATE TABLE CATEGORIAS (
ID_CATEGORIA INTEGER AUTO_INCREMENT NOT NULL PRIMARY KEY,
NOME_CATEGORIA VARCHAR(200),
ORDEM INTEGER
);

CREATE TABLE IMAGENS (
ID_IMAGEM INTEGER AUTO_INCREMENT NOT NULL PRIMARY KEY,
NOME_IMAGEM VARCHAR(400)
);

CREATE TABLE COMMENTS (
ID_COMMENT INTEGER AUTO_INCREMENT NOT NULL PRIMARY KEY,
CONTEUDO VARCHAR(400)
);

CREATE TABLE POST (
ID_POST INTEGER AUTO_INCREMENT NOT NULL PRIMARY KEY,
CONTEUDO VARCHAR(400),
ID_CATEGORIA INTEGER,
id_user INTEGER,
FOREIGN KEY(ID_CATEGORIA) REFERENCES CATEGORIAS (ID_CATEGORIA)
);

CREATE TABLE ADMIN (
id_user INTEGER AUTO_INCREMENT NOT NULL PRIMARY KEY,
ACESSO INTEGER,
password VARCHAR(150),
email_veried_at VARCHAR(10),
remember_token VARCHAR(10),
name VARCHAR(200),
email VARCHAR(200)
);

CREATE TABLE ALUNO (
id_user INTEGER AUTO_INCREMENT NOT NULL PRIMARY KEY,
CPF VARCHAR(14),
RG VARCHAR(12),
NASCIMENTO VARCHAR(10),
SOBRENOME VARCHAR(200),
password VARCHAR(150),
email_veried_at VARCHAR(10),
remember_token VARCHAR(10),
name VARCHAR(200),
email VARCHAR(200)
);

CREATE TABLE HISTORICOS (
id_historico INTEGER AUTO_INCREMENT NOT NULL PRIMARY KEY,
historico VARCHAR(400)
);

CREATE TABLE ALUNO_HISTORICO (
id_historico_aluno INTEGER AUTO_INCREMENT NOT NULL PRIMARY KEY,
id_user INTEGER,
id_historico INTEGER,
FOREIGN KEY(id_user) REFERENCES ALUNO (id_user),
FOREIGN KEY(id_historico) REFERENCES HISTORICOS (id_historico)
);

CREATE TABLE COMMENTS_POST (
ID_POST_COMMENTS INTEGER AUTO_INCREMENT NOT NULL PRIMARY KEY,
STATUS INTEGER,
ID_COMMENT INTEGER,
ID_POST INTEGER,
id_user INTEGER,
FOREIGN KEY(ID_COMMENT) REFERENCES COMMENTS (ID_COMMENT),
FOREIGN KEY(ID_POST) REFERENCES POST (ID_POST),
FOREIGN KEY(id_user) REFERENCES ALUNO (id_user)
);

CREATE TABLE POST_IMAGENS (
ID_IMAGEM_POST INTEGER AUTO_INCREMENT NOT NULL PRIMARY KEY,
ID_POST INTEGER,
ID_IMAGEM INTEGER,
FOREIGN KEY(ID_POST) REFERENCES POST (ID_POST),
FOREIGN KEY(ID_IMAGEM) REFERENCES IMAGENS (ID_IMAGEM)
);

CREATE TABLE CURSO_MATRICULA (
ID_MATRICULA INTEGER AUTO_INCREMENT NOT NULL PRIMARY KEY,
ID_PACOTES_CURSOS INTEGER,
id_user INTEGER,
ID_STATUS_MATRICULA INTEGER,
FOREIGN KEY(id_user) REFERENCES ALUNO (id_user),
FOREIGN KEY(ID_STATUS_MATRICULA) REFERENCES STATUS_MATRICULA (ID_STATUS_MATRICULA)
);

CREATE TABLE Cursos_Pacotes (
ID_PACOTES_CURSOS INTEGER AUTO_INCREMENT NOT NULL PRIMARY KEY,
ID_CURSO INTEGER,
ID_PACOTE INTEGER,
FOREIGN KEY(ID_CURSO) REFERENCES CURSOS (ID_CURSO),
FOREIGN KEY(ID_PACOTE) REFERENCES PACOTES (ID_PACOTE)
);

ALTER TABLE PACOTES ADD FOREIGN KEY(ID_CATEGORIA) REFERENCES CATEGORIAS (ID_CATEGORIA);
ALTER TABLE POST ADD FOREIGN KEY(id_user) REFERENCES ADMIN (id_user);
ALTER TABLE CURSO_MATRICULA ADD FOREIGN KEY(ID_PACOTES_CURSOS) REFERENCES Cursos_Pacotes (ID_PACOTES_CURSOS)