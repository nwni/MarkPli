CREATE DATABASE marketing;

USE marketing;

--CATALOGOS
--
--
CREATE TABLE clientes(
  id_cliente integer(10) PRIMARY KEY,
  nombre_cliente varchar(30),
  apellido_cliente varchar(30),
  nombre_negocio varchar(30),
  fecha_alta timestamp,
  fecha_baja timestamp
);

CREATE TABLE tipos_usuario(
  id_tipo integer(2) PRIMARY KEY,
  nombre_tipo varchar(20)
);
--
CREATE TABLE usuarios(
  id_usuario integer(10) PRIMARY KEY,
  nick_usuario varchar(30),
  contrasena_usuario varchar(30),
  fecha_alta timestamp,
  fecha_baja timestamp
);

--UN CLIENTE TIENE VARIOS USUARIOS
--Y VARIOS USUARIOS COMO UN GENERADOR O UN SOBRINITY
--PROPIO DE NUESTRA EMPRESA (QUE RENTEMOS) O QUE LE TRABAJE A 
--EMPRESAS QUE TRABAJEN CON NOSOTROS TIENEN VARIOS
--CLIENTES

CREATE TABLE clientes_usuarios(
  fid_cliente integer(10),
  fid_usuario integer(10),
  fid_tipo_usuario integer(10),
  CONSTRAINT FOREIGN KEY fk_cliente_usuario (fid_cliente)
    REFERENCES clientes(id_cliente),
  CONSTRAINT FOREIGN KEY fk_usuario_cliente (fid_usuario)
    REFERENCES usuarios(id_usuario),
  CONSTRAINT FOREIGN KEY fk_tipo_usuario (fid_tipo_usuario)
    REFERENCES tipos_usuario(id_tipo)
);

--LAS CAMPA;AS LAS GENERA EL SOBRINITY CON LA FID_CLIENTE QUE TIENE
CREATE TABLE campanas(
  id_campana integer(10) PRIMARY KEY,
  nombre_campana varchar(50),
  descripcion varchar(100),
  objetivos varchar(500),
  fid_cliente integer(10),
  CONSTRAINT FOREIGN KEY fk_cliente_campana (fid_cliente)
    REFERENCES clientes(id_cliente)
);

--UN GENERADOR PUEDE TENER MUCHAS CAMPA;AS
--Y UNA CAMPA;A PUEDE TENER MUCHOS GENERADORES
--EL GENERADOR ES UN USUARIO DE TIPO GENERADOR
--
--
--
CREATE TABLE campanas_generador(
  fid_generador integer(10),
  fid_campana integer(10),
  CONSTRAINT FOREIGN KEY fk_generador (fid_generador)
    REFERENCES usuarios(id_usuario),
  CONSTRAINT FOREIGN KEY fk_campana_generador (fid_campana)
    REFERENCES campanas(id_campana)  
);

--UN CONTENIDO TIENE UN GENERADOR, DADO QUE ES UNA FOTO
--UN CONTENIDO TIENE UNA CAMPANA, PUES SOLO TIENE UN TEMA
--UNA CAMPA;A Y UN GENERADOR TIENEN MUCHOS CONTENIDOS Y PASAN SU LLAVE
--
--
--
CREATE TABLE contenidos(
  id_contenido integer(10) PRIMARY KEY,
  nombre_contenido varchar(50),
  link_img varchar(50),
  fid_campana integer(10),
  fid_generador integer(10),
  CONSTRAINT FOREIGN KEY fk_campana_contenido (fid_campana)
    REFERENCES campanas(id_campana),
  CONSTRAINT FOREIGN KEY fk_generador_contenido (fid_generador)
    REFERENCES usuarios(id_usuario)
);

--UN POST TIENE UN SOBRINITY
--UN SOBRINITY TIENE VARIOS POSTS
CREATE TABLE posts(
  id_post integer(10) PRIMARY KEY,
  tipo varchar(20),
  tags varchar(300),
  hashtags varchar(500),
  descripcion varchar(2000),
  fid_contenido integer(10),
  fid_sobrinity integer(10),
  CONSTRAINT FOREIGN KEY fk_post_contenido (fid_contenido)
    REFERENCES contenidos(id_contenido),
  CONSTRAINT FOREIGN KEY fk_post_sobrinity (fid_sobrinity)
    REFERENCES usuarios(id_usuario)
);