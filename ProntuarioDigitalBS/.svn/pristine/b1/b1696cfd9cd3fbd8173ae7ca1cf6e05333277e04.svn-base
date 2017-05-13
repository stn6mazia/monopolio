/*
SQLyog Community v9.61 
MySQL - 5.1.33-community : Database - pd_digital_teste
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`pd_digital_teste` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `pd_digital_teste`;

/*Table structure for table `contato` */

DROP TABLE IF EXISTS `contato`;

CREATE TABLE `contato` (
  `nome` varchar(50) NOT NULL,
  `telefone` varchar(25) NOT NULL
) ENGINE=CSV DEFAULT CHARSET=latin1;

/*Data for the table `contato` */

/*Table structure for table `funcionario` */

DROP TABLE IF EXISTS `funcionario`;

CREATE TABLE `funcionario` (
  `cod` decimal(3,0) NOT NULL,
  `nome` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`cod`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `funcionario` */

insert  into `funcionario`(`cod`,`nome`) values ('1','Rita '),('2','Daniel'),('3','Gerson'),('4','Alexandre'),('5','Washington'),('6','Bruno'),('7','Larissa'),('8','Jefferson'),('9','Joyce'),('10','Carlos');

/*Table structure for table `lageado` */

DROP TABLE IF EXISTS `lageado`;

CREATE TABLE `lageado` (
  `nome` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `lageado` */

/*Table structure for table `tb_acao` */

DROP TABLE IF EXISTS `tb_acao`;

CREATE TABLE `tb_acao` (
  `id_acao` int(11) NOT NULL AUTO_INCREMENT COMMENT 'identificador da acao ',
  `nom_acao` varchar(45) NOT NULL,
  `desc_acao` varchar(200) DEFAULT NULL COMMENT 'descricao da acao ',
  `dt_inclusao` date NOT NULL COMMENT 'data que a acao foi incluida',
  `dt_alteracao` date NOT NULL COMMENT 'data da ultima alteracao efetuada no registro',
  `flg_status_acao` tinyint(1) NOT NULL COMMENT 'flag que idetifica se a acao esta ativada no sistema, 1 - sim, 0 - nao.',
  PRIMARY KEY (`id_acao`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `tb_acao` */

insert  into `tb_acao`(`id_acao`,`nom_acao`,`desc_acao`,`dt_inclusao`,`dt_alteracao`,`flg_status_acao`) values (1,'Aplicar Medicacao','Aplicar no paciente Buscopan','2016-05-01','2016-05-21',1),(2,'Alta','Paciente em Condições de Ter Alta','2016-05-01','2016-05-21',2),(3,'Encaminhar Para Cirurgia','Paciente Necessita de Cirurgia Urgente','2016-05-01','2016-05-21',1),(4,'Pequena Cirurgia','Pequena cirurgia para retirada de pedra nos rins','2016-05-01','2016-05-21',3),(5,'Internação','Paciente precisa ser internado para tratar Pneumonia','2016-05-01','2016-05-21',2),(6,'Retorno','MArcar Retorno para acompanhamento','2016-05-01','2016-05-21',1);

/*Table structure for table `tb_acessa_log` */

DROP TABLE IF EXISTS `tb_acessa_log`;

CREATE TABLE `tb_acessa_log` (
  `dt_hora` date NOT NULL COMMENT 'data e hora que esta acao ocorreu.',
  `desc_acao` varchar(500) NOT NULL COMMENT 'descricao da acao efetuada',
  `id_usu_afetado` int(11) NOT NULL COMMENT 'identificador do ususario afetado por uma determinada acao no sistema',
  `id_log` int(11) NOT NULL AUTO_INCREMENT COMMENT 'identificador do log ',
  PRIMARY KEY (`id_log`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

/*Data for the table `tb_acessa_log` */

insert  into `tb_acessa_log`(`dt_hora`,`desc_acao`,`id_usu_afetado`,`id_log`) values ('0000-00-00','Mudança de Plantão',1,1),('0000-00-00','Promoção',2,2),('0000-00-00','Advertido',3,3),('0000-00-00','Suspenso',4,4),('0000-00-00','Demitido',5,5),('0000-00-00','Responsével Ortopedia',6,6),('0000-00-00','Responsével Pediatria',7,7),('0000-00-00','Secretário Presidencia',12,12),('0000-00-00','Nutricionista Chefe',13,13),('0000-00-00','Promoção',32,32);

/*Table structure for table `tb_acesso_operacao` */

DROP TABLE IF EXISTS `tb_acesso_operacao`;

CREATE TABLE `tb_acesso_operacao` (
  `dt_inclusao` date NOT NULL COMMENT 'data de inclusão do perfil',
  `dt_alteracao` date NOT NULL COMMENT 'data da ultima alteracao do perfil.',
  `flg_status_acesso_operacao` tinyint(1) NOT NULL,
  `id_operacao_sistema` int(11) NOT NULL,
  `id_acao` int(11) NOT NULL COMMENT 'identificador da acao ',
  `id_perfil` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_operacao_sistema`,`id_acao`),
  KEY `fk_tb_acesso_operacao_tb_operacao_sistema1` (`id_operacao_sistema`),
  KEY `tb_acesso_oper_tb_oper_sis_FK` (`id_operacao_sistema`),
  KEY `fk_tb_acesso_operacao_tb_acao` (`id_acao`),
  KEY `fk_tb_acesso_oper_tb_perfil_acesS` (`id_perfil`),
  CONSTRAINT `fk_tb_acesso_operacao_tb_acao1` FOREIGN KEY (`id_acao`) REFERENCES `tb_acao` (`id_acao`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_tb_acesso_operacao_tb_operacao_sistema1` FOREIGN KEY (`id_operacao_sistema`) REFERENCES `tb_operacao_sistema` (`id_operacao_sistema`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_tb_acesso_operacao_tb_perfil_acesso1` FOREIGN KEY (`id_perfil`) REFERENCES `tb_perfil_acesso` (`id_perfil`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `tb_acesso_operacao` */

insert  into `tb_acesso_operacao`(`dt_inclusao`,`dt_alteracao`,`flg_status_acesso_operacao`,`id_operacao_sistema`,`id_acao`,`id_perfil`) values ('2016-05-01','2016-05-21',1,1,3,1),('2016-05-01','2016-05-21',2,2,4,2),('2016-05-01','2016-05-21',3,3,5,3),('2016-05-01','2016-05-21',4,5,6,4);

/*Table structure for table `tb_audt_sistema` */

DROP TABLE IF EXISTS `tb_audt_sistema`;

CREATE TABLE `tb_audt_sistema` (
  `id_audt_sistma` int(11) NOT NULL AUTO_INCREMENT,
  `nom_tabela_alterada` varchar(50) DEFAULT NULL,
  `nom_coluna_alterada` varchar(50) DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `id_restro_alterado` int(11) DEFAULT NULL,
  `ds_valor_antigo` varchar(255) DEFAULT NULL,
  `ds_valor_novo` varchar(255) DEFAULT NULL,
  `ds_motivo_alteracao` varchar(255) DEFAULT NULL,
  `dt_alteracao` date DEFAULT NULL,
  PRIMARY KEY (`id_audt_sistma`)
) ENGINE=InnoDB AUTO_INCREMENT=52346 DEFAULT CHARSET=latin1;

/*Data for the table `tb_audt_sistema` */

insert  into `tb_audt_sistema`(`id_audt_sistma`,`nom_tabela_alterada`,`nom_coluna_alterada`,`id_usuario`,`id_restro_alterado`,`ds_valor_antigo`,`ds_valor_novo`,`ds_motivo_alteracao`,`dt_alteracao`) values (12345,'escolaridade','notas',1111,54321,'trezentos reais','trezentos e dez reais','reajuste de porcentagem','0000-00-00'),(22345,'prontuario','id prontuario',2222,64321,'um mil reais','um mil e dez reais','inflação','0000-00-00'),(32345,'consulta','id consulta',3333,98765,'trinta e três reais','quarenta e três reais','reajuste de dez porcento','0000-00-00'),(42345,'estado','descrição de estado',4444,1234,'dezoito reais e trinta centavos','vinte reais e trinta centavos','reajuste de transferência de RG','0000-00-00'),(52345,'estado civil','id estado civil',5555,84321,'cinquenta reais','trezentos e dez reais','desconto','0000-00-00');

/*Table structure for table `tb_bairro` */

DROP TABLE IF EXISTS `tb_bairro`;

CREATE TABLE `tb_bairro` (
  `id_bairro` int(11) NOT NULL AUTO_INCREMENT,
  `nom_bairro` varchar(45) NOT NULL,
  `id_cidade` int(11) NOT NULL,
  PRIMARY KEY (`id_bairro`),
  KEY `fk_tb_bairro_tb_cidade` (`id_cidade`),
  CONSTRAINT `fk_tb_bairro_tb_cidade` FOREIGN KEY (`id_cidade`) REFERENCES `tb_cidade` (`id_cidade`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=87 DEFAULT CHARSET=latin1;

/*Data for the table `tb_bairro` */

insert  into `tb_bairro`(`id_bairro`,`nom_bairro`,`id_cidade`) values (1,'Capão Redondo',10),(2,'Vila Maria',10),(3,'Penha',10),(4,'Limão',10),(5,'Santana',10),(6,'Liberdade',10),(7,'Grajaú',10),(8,'Interlagos',10),(9,'Pedreira',10),(10,'Vila Mariana',10),(11,'Vila Sofia',10),(12,'Santo Amaro',10),(13,'Morumbi',10),(14,'Alphaville',10),(15,'Paraíso',10),(16,'Vila Olímpia',10),(17,'Barra Funda',10),(18,'Jardim Ângela',10),(19,'Vila das Belezas',10),(20,'Campo Limpo',10),(50,'Gravidade',3),(69,'Venus',1),(86,'Jardim Branca Flor',2);

/*Table structure for table `tb_campus` */

DROP TABLE IF EXISTS `tb_campus`;

CREATE TABLE `tb_campus` (
  `id_campus` int(11) NOT NULL AUTO_INCREMENT COMMENT 'identificador do campus,',
  `nom_campus` varchar(45) NOT NULL COMMENT 'nome do campus.',
  PRIMARY KEY (`id_campus`),
  UNIQUE KEY `nom_campus_UNIQUE` (`nom_campus`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `tb_campus` */

insert  into `tb_campus`(`id_campus`,`nom_campus`) values (6,'Colegio'),(2,'Memorial'),(3,'Santo Amaro'),(1,'Vergueiro'),(4,'Vila Maria'),(5,'Vila prudente');

/*Table structure for table `tb_cidade` */

DROP TABLE IF EXISTS `tb_cidade`;

CREATE TABLE `tb_cidade` (
  `id_estado` int(11) NOT NULL AUTO_INCREMENT COMMENT 'identificador do estado da tb_estado.',
  `id_cidade` int(11) NOT NULL COMMENT 'identificador da cidade.',
  `nom_cidade` varchar(60) NOT NULL COMMENT 'nome da cidade.',
  PRIMARY KEY (`id_cidade`),
  KEY `fk_table1_tb_estado` (`id_estado`),
  CONSTRAINT `fk_table1_tb_estado1` FOREIGN KEY (`id_estado`) REFERENCES `tb_estado` (`id_estado`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=90 DEFAULT CHARSET=latin1;

/*Data for the table `tb_cidade` */

insert  into `tb_cidade`(`id_estado`,`id_cidade`,`nom_cidade`) values (2,1,'Meteoros'),(1,2,'Itapecerica da Serra'),(3,3,'Crateras'),(89,10,'São Paulo'),(89,11,'sao bernardo'),(2,12,'Boa vista');

/*Table structure for table `tb_consulta` */

DROP TABLE IF EXISTS `tb_consulta`;

CREATE TABLE `tb_consulta` (
  `id_log` int(11) NOT NULL AUTO_INCREMENT COMMENT 'identificador da id_log',
  `id_prontuario` int(11) NOT NULL,
  `dt_consulta` date NOT NULL,
  `desc_prescricao` varchar(255) DEFAULT NULL,
  `desc_comentario_consulta` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id_log`),
  KEY `fk_tb_cons_id_prontuario` (`id_prontuario`),
  CONSTRAINT `fk_tb_cons_id_prontuario` FOREIGN KEY (`id_prontuario`) REFERENCES `tb_paciente_contato` (`id_prontuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_consulta` */

/*Table structure for table `tb_contato` */

DROP TABLE IF EXISTS `tb_contato`;

CREATE TABLE `tb_contato` (
  `id_contato` int(11) NOT NULL AUTO_INCREMENT COMMENT 'identificador id_contato',
  `nom_recado` varchar(150) NOT NULL,
  `desc_email` varchar(70) NOT NULL,
  PRIMARY KEY (`id_contato`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `tb_contato` */

insert  into `tb_contato`(`id_contato`,`nom_recado`,`desc_email`) values (1,'Daniel','daan_car@hotmail.com'),(2,'Gerson','gersonsilvadonascimento@gmail.com'),(3,'Alexandre','alexandreoliveir2@outlook.com'),(4,'Washington','washington_costa@hotmail.com'),(5,'Bruno','bruno.siqueira@yahoo.com.br'),(6,'Larissa','lallee.giovana@gmail.com'),(7,'Jefferson','jeff.aug@hotmail.com'),(8,'Joyce','joysanto_2@outlook.com'),(9,'Carlos','carlos_hands@ig.com'),(10,'Rita','rita_baby@uol.com');

/*Table structure for table `tb_contato_responsavel` */

DROP TABLE IF EXISTS `tb_contato_responsavel`;

CREATE TABLE `tb_contato_responsavel` (
  `id_responsavel` int(11) NOT NULL AUTO_INCREMENT COMMENT 'identificador tb_contato_responsavel',
  `id_contato` int(11) NOT NULL,
  PRIMARY KEY (`id_responsavel`),
  KEY `fk_tb_cont_res_id_contato` (`id_contato`),
  CONSTRAINT `fk_tb_cont_res_id_contato` FOREIGN KEY (`id_contato`) REFERENCES `tb_contato` (`id_contato`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_contato_responsavel` */

/*Table structure for table `tb_contato_telefone` */

DROP TABLE IF EXISTS `tb_contato_telefone`;

CREATE TABLE `tb_contato_telefone` (
  `id_telefone` int(11) NOT NULL AUTO_INCREMENT COMMENT 'indentificador id_telefone',
  `id_contato` int(11) NOT NULL,
  PRIMARY KEY (`id_telefone`),
  KEY `fk_tb_cont_tel_id_contato` (`id_contato`),
  CONSTRAINT `fk_tb_cont_tel_id_contato` FOREIGN KEY (`id_contato`) REFERENCES `tb_contato` (`id_contato`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `tb_contato_telefone` */

insert  into `tb_contato_telefone`(`id_telefone`,`id_contato`) values (1,1),(2,2),(3,3),(4,4),(5,5),(6,6),(7,7),(8,8),(9,9),(10,10);

/*Table structure for table `tb_critica` */

DROP TABLE IF EXISTS `tb_critica`;

CREATE TABLE `tb_critica` (
  `id_erro` int(11) NOT NULL AUTO_INCREMENT,
  `desc_erro` varchar(100) NOT NULL,
  PRIMARY KEY (`id_erro`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `tb_critica` */

insert  into `tb_critica`(`id_erro`,`desc_erro`) values (1,'erro 1'),(2,'erro 2'),(3,'erro 3'),(4,'erro 4'),(5,'erro 5'),(6,'erro 6'),(7,'erro 7'),(8,'erro 8'),(9,'erro 9'),(10,'erro 10');

/*Table structure for table `tb_dados_prim_consulta` */

DROP TABLE IF EXISTS `tb_dados_prim_consulta`;

CREATE TABLE `tb_dados_prim_consulta` (
  `num_prontuario` int(11) NOT NULL AUTO_INCREMENT,
  `id_prim_consulta` int(11) NOT NULL,
  `tabag` int(11) DEFAULT NULL,
  `qt_tabag` int(11) DEFAULT NULL,
  `tmp_tabag` int(11) DEFAULT NULL,
  `dt_tabg_parou` int(11) DEFAULT NULL,
  `etilismo_uso` int(11) DEFAULT NULL,
  `qt_etilismo_cerveja` int(11) DEFAULT NULL,
  `qt_etilismo_vinho` int(11) DEFAULT NULL,
  `qt_etilismo_destilado` int(11) DEFAULT NULL,
  `dt_etilismo` int(11) DEFAULT NULL,
  `dt_etilismo_parou` int(11) DEFAULT NULL COMMENT 'esta tabela não esta sendo usada no momento',
  `hist_transf_sangue` int(11) DEFAULT NULL,
  `hist_transf_sangue_reacao` int(11) DEFAULT NULL,
  `hist_transf_sangue_reacao_qual` int(11) DEFAULT NULL,
  `sedentarismo` int(11) DEFAULT NULL,
  `diabetes` int(11) DEFAULT NULL,
  `hipertensao` int(11) DEFAULT NULL,
  `infarto_miocardio` int(11) DEFAULT NULL,
  PRIMARY KEY (`num_prontuario`,`id_prim_consulta`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

/*Data for the table `tb_dados_prim_consulta` */

insert  into `tb_dados_prim_consulta`(`num_prontuario`,`id_prim_consulta`,`tabag`,`qt_tabag`,`tmp_tabag`,`dt_tabg_parou`,`etilismo_uso`,`qt_etilismo_cerveja`,`qt_etilismo_vinho`,`qt_etilismo_destilado`,`dt_etilismo`,`dt_etilismo_parou`,`hist_transf_sangue`,`hist_transf_sangue_reacao`,`hist_transf_sangue_reacao_qual`,`sedentarismo`,`diabetes`,`hipertensao`,`infarto_miocardio`) values (1,39,1,4,0,0,1,2,3,6,2016,2,2,0,0,16,0,19,0),(2,33,1,4,0,0,1,2,3,6,2016,2,2,0,0,122,0,30,0),(3,38,1,4,0,0,1,2,3,6,2014,2,2,0,0,95,0,14,0),(4,34,1,4,0,0,1,2,3,6,2014,2,2,0,0,19,0,22,0),(5,37,1,4,0,0,1,2,3,6,2014,2,2,0,0,88,0,12,0),(6,30,1,4,0,0,1,2,3,6,2012,2,2,0,0,78,0,23,0),(8,31,1,4,0,0,1,2,3,6,2013,2,2,0,0,112,0,27,0),(10,35,1,4,0,0,1,2,3,6,2014,2,2,0,0,100,0,10,0),(11,36,1,4,0,0,1,2,3,6,2015,2,2,0,0,10,0,15,0),(12,32,1,4,0,0,1,2,3,6,2014,2,2,0,0,200,0,9,0);

/*Table structure for table `tb_delega_poder` */

DROP TABLE IF EXISTS `tb_delega_poder`;

CREATE TABLE `tb_delega_poder` (
  `id_usu_delega` int(11) NOT NULL AUTO_INCREMENT COMMENT 'este campo identifica os usuário que podem delegar poder. este é o id_usuario da tabela tb_usuario.',
  `id_permissao` int(11) NOT NULL COMMENT 'identifica quais poderes o podem ser delegados por um determinado usuário',
  `flg_status_delega` tinyint(1) NOT NULL COMMENT 'identifica se o usuario ainda pode delegar poder: 1 - delega  2 não delega.',
  PRIMARY KEY (`id_usu_delega`),
  KEY `fk_tb_delega_poder_tb_permissoes` (`id_permissao`),
  CONSTRAINT `fk_tb_delega_poder_tb_permissoes1` FOREIGN KEY (`id_permissao`) REFERENCES `tb_permissoes` (`id_permissao`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=latin1;

/*Data for the table `tb_delega_poder` */

insert  into `tb_delega_poder`(`id_usu_delega`,`id_permissao`,`flg_status_delega`) values (1,1,1),(2,2,2),(3,3,3),(4,4,4),(5,5,5),(6,6,6),(52,4,4);

/*Table structure for table `tb_documento_pessoa` */

DROP TABLE IF EXISTS `tb_documento_pessoa`;

CREATE TABLE `tb_documento_pessoa` (
  `id_documento_pessoa` int(11) NOT NULL AUTO_INCREMENT,
  `num_documento` varchar(45) NOT NULL,
  `dt_emissao` date NOT NULL,
  `dt_entrada` date NOT NULL,
  `dt_validade` date DEFAULT NULL,
  `desc_orgao_emissor` varchar(20) DEFAULT NULL,
  `id_pais` int(11) NOT NULL,
  `id_tipo_documento` int(11) NOT NULL,
  `id_pessoa` int(11) NOT NULL,
  PRIMARY KEY (`id_documento_pessoa`),
  KEY `fk_tb_reg_nacio_estrangeiro_tb_pais` (`id_pais`),
  KEY `fk_doc_tipo_doc_idx` (`id_tipo_documento`),
  KEY `fk_doc_pes_pessoa_idx` (`id_pessoa`),
  CONSTRAINT `fk_doc_pes_pessoa` FOREIGN KEY (`id_pessoa`) REFERENCES `tb_pessoa` (`id_pessoa`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_doc_tipo_doc` FOREIGN KEY (`id_tipo_documento`) REFERENCES `tb_tipo_documento` (`id_tipo_documento`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_tb_reg_nacio_estrangeiro_tb_pais1` FOREIGN KEY (`id_pais`) REFERENCES `tb_pais` (`id_pais`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

/*Data for the table `tb_documento_pessoa` */

insert  into `tb_documento_pessoa`(`id_documento_pessoa`,`num_documento`,`dt_emissao`,`dt_entrada`,`dt_validade`,`desc_orgao_emissor`,`id_pais`,`id_tipo_documento`,`id_pessoa`) values (1,'123456','2016-01-01','2016-01-01','0000-00-00','SSP/SP',1,1,1),(2,'321651','2016-03-01','2016-04-01','2020-03-01','SSP-MG',2,1,2),(3,'254621','2016-03-01','2016-04-01','2020-03-01','SSP-BA',3,2,3),(4,'452132','2016-03-01','2016-04-01','2020-03-01','SSP-RJ',3,3,4),(5,'132146','2016-03-01','2016-04-01','2020-03-01','SSP-PR',5,1,5),(6,'521651','2016-03-01','2016-04-01','2020-03-01','SSP-ES',1,2,6),(7,'452620','2016-03-01','2016-04-01','2020-03-01','SSP-PA',4,6,7),(8,'136264','2016-03-01','2016-04-01','2020-03-01','SSP-AM',5,2,8),(9,'421651','2016-03-01','2016-04-01','2020-03-01','SSP-BA',2,3,9),(10,'21652','2016-03-01','2016-04-01','2020-03-01','SSP-SP',8,1,10),(11,'151431','2016-03-01','2016-04-01','2020-03-01','SSP-MA',2,1,11),(12,'642512','2016-03-01','2016-04-01','2020-03-01','SSP-GO',3,2,12),(13,'425641','2016-03-01','2016-04-01','2020-03-01','SSP-GO',2,4,13);

/*Table structure for table `tb_endereco` */

DROP TABLE IF EXISTS `tb_endereco`;

CREATE TABLE `tb_endereco` (
  `id_endereco` int(11) NOT NULL AUTO_INCREMENT,
  `nom_logradouro` varchar(75) NOT NULL,
  `desc_tipo_logradouro` varchar(20) NOT NULL,
  `num_cep` char(9) NOT NULL,
  `id_bairro` int(11) NOT NULL,
  PRIMARY KEY (`id_endereco`),
  UNIQUE KEY `num_cep_UNIQUE` (`num_cep`),
  KEY `fk_tb_endereco_tb_bairro` (`id_bairro`),
  CONSTRAINT `fk_tb_endereco_tb_bairro1` FOREIGN KEY (`id_bairro`) REFERENCES `tb_bairro` (`id_bairro`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=659 DEFAULT CHARSET=latin1;

/*Data for the table `tb_endereco` */

insert  into `tb_endereco`(`id_endereco`,`nom_logradouro`,`desc_tipo_logradouro`,`num_cep`,`id_bairro`) values (251,'Rua Bartolomeu','Metropolitano','05457080',86),(352,'Rua Forte da Barra','alagada','05755090',13),(505,'Rua Estrela','Aereo','6855670',69),(525,'Rua Copo de Leite','Alagada','6855645',50),(537,'Rua Acacia','Metropolitana','6855615',86),(601,'Rua Paiva','urbano','05756080',10),(636,' Rua New York','aereo','05870480',69),(658,'Rua Jaracatiá','Urbano','05787060',14);

/*Table structure for table `tb_endereco_pessoa` */

DROP TABLE IF EXISTS `tb_endereco_pessoa`;

CREATE TABLE `tb_endereco_pessoa` (
  `id_pessoa` int(11) NOT NULL AUTO_INCREMENT,
  `id_endereco` int(11) NOT NULL,
  `dt_inclusao` date NOT NULL,
  `dt_alteracao` date NOT NULL,
  `num_end` varchar(10) NOT NULL,
  `desc_compl_endereco` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id_pessoa`,`id_endereco`),
  KEY `fk_tb_responsavel_has_tb_endereco_tb_responsavel` (`id_pessoa`),
  KEY `fk_tb_responsavel_has_tb_endereco_tb_endereco` (`id_endereco`),
  CONSTRAINT `fk_end_pesso_pessoa` FOREIGN KEY (`id_pessoa`) REFERENCES `tb_pessoa` (`id_pessoa`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_tb_responsavel_has_tb_endereco_tb_endereco1` FOREIGN KEY (`id_endereco`) REFERENCES `tb_endereco` (`id_endereco`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `tb_endereco_pessoa` */

insert  into `tb_endereco_pessoa`(`id_pessoa`,`id_endereco`,`dt_inclusao`,`dt_alteracao`,`num_end`,`desc_compl_endereco`) values (2,251,'2015-03-01','2016-03-01','120','Rua Alvorada'),(2,352,'2015-03-01','2016-03-01','120','Rua Forte da Barra'),(3,601,'2015-03-01','2016-03-01','235','Rua Paiva');

/*Table structure for table `tb_escolaridade` */

DROP TABLE IF EXISTS `tb_escolaridade`;

CREATE TABLE `tb_escolaridade` (
  `id_escolaridade` int(11) NOT NULL AUTO_INCREMENT,
  `nom_escolaridade` varchar(50) NOT NULL,
  PRIMARY KEY (`id_escolaridade`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

/*Data for the table `tb_escolaridade` */

insert  into `tb_escolaridade`(`id_escolaridade`,`nom_escolaridade`) values (1,'Bersário'),(2,'Creche'),(3,'Pré Primário'),(4,'Ensino Medio'),(5,'Ensino Técnico'),(6,'Ensino Superior');

/*Table structure for table `tb_estado` */

DROP TABLE IF EXISTS `tb_estado`;

CREATE TABLE `tb_estado` (
  `id_estado` int(11) NOT NULL AUTO_INCREMENT,
  `nom_uf` varchar(2) NOT NULL,
  `nom_estado` varchar(20) NOT NULL,
  `id_pais` int(11) NOT NULL,
  `nom_naturalidade` varchar(50) NOT NULL,
  PRIMARY KEY (`id_estado`),
  UNIQUE KEY `nom_uf_UNIQUE` (`nom_uf`),
  UNIQUE KEY `nom_estado_UNIQUE` (`nom_estado`),
  KEY `fk_tb_estado_tb_pais` (`id_pais`)
) ENGINE=InnoDB AUTO_INCREMENT=103 DEFAULT CHARSET=latin1;

/*Data for the table `tb_estado` */

insert  into `tb_estado`(`id_estado`,`nom_uf`,`nom_estado`,`id_pais`,`nom_naturalidade`) values (1,'JJ','Sampa',1,'Paulista'),(2,'SS','Juno',1,'Espaço'),(3,'TT','Moon',1,'Luatico'),(89,'SP','Sao Paulo',11,'Paulista'),(90,'MG','Belo Horizonte',14,'Mineiro'),(91,'RJ','Rio de Janeiro',33,'Rio de Janeiro'),(92,'RA','Alagoas',32,'Rio de Fevereiro'),(93,'RB','Bara',31,'Rio de Marco'),(94,'RC','Qualquer Linguica',30,'Rio de Abri'),(95,'RD','C',29,'Rio de Maio'),(96,'RE','D',28,'Rio de Junho'),(97,'RF','E',27,'Rio de Julho'),(98,'RG','F',26,'Rio de Agosto'),(99,'RH','G',25,'Rio de Setembro'),(100,'RI','H',24,'Rio de Outubro'),(101,'RO','I',23,'Rio de Novembro'),(102,'RK','J',22,'Rio de Dezembro');

/*Table structure for table `tb_estado_civil` */

DROP TABLE IF EXISTS `tb_estado_civil`;

CREATE TABLE `tb_estado_civil` (
  `id_estado_civil` int(11) NOT NULL AUTO_INCREMENT,
  `nom_estado_civil` varchar(50) NOT NULL,
  PRIMARY KEY (`id_estado_civil`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Data for the table `tb_estado_civil` */

insert  into `tb_estado_civil`(`id_estado_civil`,`nom_estado_civil`) values (1,'Casado (a)'),(2,'Solteiro (a)'),(3,'Viuvo (a)'),(4,'Separado (a)');

/*Table structure for table `tb_etnia` */

DROP TABLE IF EXISTS `tb_etnia`;

CREATE TABLE `tb_etnia` (
  `id_etnia` int(11) NOT NULL AUTO_INCREMENT,
  `nom_etnia` varchar(50) NOT NULL,
  PRIMARY KEY (`id_etnia`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

/*Data for the table `tb_etnia` */

insert  into `tb_etnia`(`id_etnia`,`nom_etnia`) values (1,'Branco'),(2,'Negro'),(3,'Pardo'),(4,'Amarelo'),(5,'Indígena');

/*Table structure for table `tb_genero` */

DROP TABLE IF EXISTS `tb_genero`;

CREATE TABLE `tb_genero` (
  `id_genero` int(11) NOT NULL AUTO_INCREMENT,
  `nom_genero` varchar(50) NOT NULL,
  PRIMARY KEY (`id_genero`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `tb_genero` */

insert  into `tb_genero`(`id_genero`,`nom_genero`) values (1,'Masculino'),(2,'Feminino'),(3,'Outros');

/*Table structure for table `tb_grau_parentesco` */

DROP TABLE IF EXISTS `tb_grau_parentesco`;

CREATE TABLE `tb_grau_parentesco` (
  `id_grau_parentesco` int(11) NOT NULL AUTO_INCREMENT,
  `nom_grau_parentesco` varchar(50) NOT NULL,
  PRIMARY KEY (`id_grau_parentesco`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COMMENT='	';

/*Data for the table `tb_grau_parentesco` */

insert  into `tb_grau_parentesco`(`id_grau_parentesco`,`nom_grau_parentesco`) values (1,'Pai'),(2,'Mãe'),(3,'Avô'),(4,'Avó'),(5,'Tio (a)'),(6,'Primo (a)'),(7,'Irmão'),(8,'Irmã');

/*Table structure for table `tb_grupo_acesso` */

DROP TABLE IF EXISTS `tb_grupo_acesso`;

CREATE TABLE `tb_grupo_acesso` (
  `id_grupo` int(11) NOT NULL AUTO_INCREMENT,
  `desc_grupo` varchar(50) NOT NULL,
  `dt_inclusao` date NOT NULL,
  `dt_alteracao` date DEFAULT NULL,
  `flg_status_grupo` tinyint(1) NOT NULL,
  `id_pessoa` int(11) DEFAULT NULL COMMENT 'Campo ID_PESSOA da tabela tb_pessoa.',
  PRIMARY KEY (`id_grupo`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `tb_grupo_acesso` */

insert  into `tb_grupo_acesso`(`id_grupo`,`desc_grupo`,`dt_inclusao`,`dt_alteracao`,`flg_status_grupo`,`id_pessoa`) values (1,'enfermagem','2016-03-20','2016-03-26',1,1),(2,'fisioterapia','2016-03-19','2016-03-19',2,2),(3,'nutrição','2016-05-20','2016-05-21',1,3),(4,'radiologia','2016-05-20','2016-05-21',3,4),(5,'pediatria','2016-05-20','2016-05-21',2,5),(6,'ortopedia','2016-05-20','2016-05-21',1,6);

/*Table structure for table `tb_imprime_paciente` */

DROP TABLE IF EXISTS `tb_imprime_paciente`;

CREATE TABLE `tb_imprime_paciente` (
  `num_prontuario` int(11) NOT NULL AUTO_INCREMENT,
  `id_log` int(11) DEFAULT NULL,
  `desc_especialidade` varchar(50) DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `qt_impressao` int(11) DEFAULT NULL,
  `dt_impressao` date NOT NULL,
  PRIMARY KEY (`num_prontuario`),
  KEY `fk_tb_imprime_paciente_TB_PACIENTE` (`num_prontuario`),
  CONSTRAINT `fk_tb_imprime_paciente_TB_PACIENTE` FOREIGN KEY (`num_prontuario`) REFERENCES `tb_paciente_old` (`num_prontuario`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_imprime_paciente` */

/*Table structure for table `tb_operacao_sistema` */

DROP TABLE IF EXISTS `tb_operacao_sistema`;

CREATE TABLE `tb_operacao_sistema` (
  `id_operacao_sistema` int(11) NOT NULL AUTO_INCREMENT,
  `nom_operacao_sistema` varchar(45) NOT NULL,
  `desc_operacao_sistema` varchar(225) DEFAULT NULL,
  `dt_inclusao` date NOT NULL,
  `dt_alteracao` date NOT NULL,
  `flg_status_operacao_sistema` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_operacao_sistema`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `tb_operacao_sistema` */

insert  into `tb_operacao_sistema`(`id_operacao_sistema`,`nom_operacao_sistema`,`desc_operacao_sistema`,`dt_inclusao`,`dt_alteracao`,`flg_status_operacao_sistema`) values (1,'Cirurgia','Contém Riscos','2016-05-01','2016-05-21',10),(2,'Pequena Cirurgia','Não Possui Riscos','2016-05-01','2016-05-21',1),(3,'Internação','Motivo não tão grave','2016-05-01','2016-05-21',2),(4,'Internação','Estado Grave','2016-05-01','2016-05-21',3),(5,'Angendamento','Agendamento de Primeira consulta','2016-05-01','2016-05-21',4),(6,'Retorno','Agendar Retorno','2016-05-01','2016-05-21',5),(7,'Alta','Paciênte Liberado','2016-05-01','2016-05-21',6),(8,'Observação','Paciente me observação pós cirurgia','2016-05-01','2016-05-21',7),(9,'Observação II','Paciente em observação pós medicação','2016-05-01','2016-05-21',8),(10,'Emergencia','Entrada de Emergencia','2016-05-01','2016-05-21',9);

/*Table structure for table `tb_paciente` */

DROP TABLE IF EXISTS `tb_paciente`;

CREATE TABLE `tb_paciente` (
  `num_prontuario` int(11) NOT NULL AUTO_INCREMENT COMMENT 'identificado do prontuario do paciente, cada paciente é identificado por este campo, um paciente nunca vai ter 2 prontuarios não importa a area de atendimento.',
  `dt_cadastro` date NOT NULL COMMENT 'data que foi realizado o cadastro do paciente, este campo nunca pode ser nulo.',
  `dt_alteracao` date DEFAULT NULL COMMENT 'data que o registro sofreu a ultima alteração, este campo pode ser nulo.',
  `nom_pai` varchar(70) CHARACTER SET latin1 DEFAULT NULL COMMENT 'nome completo do pai do paciente, este campo pode ser nulo.',
  `nom_mae` varchar(70) CHARACTER SET latin1 DEFAULT NULL COMMENT 'nome da mae do paciente ',
  `dt_nascimento` date DEFAULT NULL COMMENT 'data de nascimento do paciente no formato DD-MM-YYYY.',
  `id_naturalidade` int(11) DEFAULT NULL COMMENT 'campo da tabela tb_estado, identifica o estado onde o paciente nasceu.',
  `id_nacionalidade` int(11) DEFAULT NULL COMMENT 'campo da tabela tb_pais, identifica o pais de origem do paciente.',
  `id_genero` int(11) DEFAULT NULL,
  `id_etnia` int(11) DEFAULT NULL,
  `id_estado_civil` int(11) DEFAULT NULL,
  `id_escolaridade` int(11) DEFAULT NULL,
  `id_religiao` int(11) DEFAULT NULL,
  `desc_ocupacao` varchar(20) DEFAULT NULL,
  `id_renda_familiar` int(11) DEFAULT NULL,
  `nom_apelido` varchar(45) CHARACTER SET latin1 DEFAULT NULL COMMENT 'apelido do paciente caso não queira ser chamdo pelo nome.',
  `desc_origem` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `qt_tempo_sp` varchar(20) CHARACTER SET latin1 DEFAULT NULL COMMENT 'campo armazena a o periodo que o paciente esta em sao paulo, periodo em messes, somente numeros.',
  `qt_filhos` int(11) DEFAULT NULL COMMENT 'campo que armazena a quantidade de filho que o paciente possui.',
  `flg_necessita_acompanhante` tinyint(1) DEFAULT NULL COMMENT 'campo que identifica se o paciente necessita de acomapanhate, 1 - sim, 0 - nao.',
  `flg_autorizacao_veiculo` tinyint(1) DEFAULT NULL COMMENT 'campo que identiica se o paciente necessita de veiculo para se locomover, 1 - sim, 0 - nao ',
  `id_profissao` int(11) DEFAULT NULL COMMENT 'com da tabela tb_profissao.',
  `id_campus` int(11) NOT NULL COMMENT 'campus no qual o paciente foi cadastrado',
  `id_grupo` int(11) DEFAULT NULL,
  `desc_email` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  PRIMARY KEY (`num_prontuario`),
  KEY `id_campus` (`id_campus`),
  CONSTRAINT `tb_paciente_ibfk_1` FOREIGN KEY (`id_campus`) REFERENCES `tb_campus` (`id_campus`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `tb_paciente` */

/*Table structure for table `tb_paciente_contato` */

DROP TABLE IF EXISTS `tb_paciente_contato`;

CREATE TABLE `tb_paciente_contato` (
  `id_prontuario` int(11) NOT NULL COMMENT 'identificador id_prontuario',
  `id_contato` int(11) NOT NULL,
  PRIMARY KEY (`id_prontuario`),
  KEY `fk_tb_paci_id_contato` (`id_contato`),
  CONSTRAINT `fk_tb_paci_id_contato` FOREIGN KEY (`id_contato`) REFERENCES `tb_contato` (`id_contato`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_paciente_contato` */

insert  into `tb_paciente_contato`(`id_prontuario`,`id_contato`) values (104,5),(105,6),(106,7),(107,8),(108,9);

/*Table structure for table `tb_paciente_endereco` */

DROP TABLE IF EXISTS `tb_paciente_endereco`;

CREATE TABLE `tb_paciente_endereco` (
  `id_endereco` int(11) NOT NULL AUTO_INCREMENT COMMENT 'identificador da id_endereco',
  `id_prontuario` int(11) NOT NULL,
  PRIMARY KEY (`id_endereco`),
  KEY `fk_tb_pac_end_id_id_prontuario` (`id_prontuario`),
  CONSTRAINT `fk_tb_pac_end_id_id_prontuario` FOREIGN KEY (`id_prontuario`) REFERENCES `tb_paciente_contato` (`id_prontuario`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `tb_paciente_endereco` */

insert  into `tb_paciente_endereco`(`id_endereco`,`id_prontuario`) values (5,104),(6,105),(7,106),(8,107),(9,108);

/*Table structure for table `tb_paciente_old` */

DROP TABLE IF EXISTS `tb_paciente_old`;

CREATE TABLE `tb_paciente_old` (
  `num_prontuario` int(11) NOT NULL AUTO_INCREMENT COMMENT 'identificado do prontuario do paciente, cada paciente é identificado por este campo, um paciente nunca vai ter 2 prontuarios não importa a area de atendimento.',
  `dt_cadastro` date NOT NULL COMMENT 'data que foi realizado o cadastro do paciente, este campo nunca pode ser nulo.',
  `dt_alteracao` date DEFAULT NULL COMMENT 'data que o registro sofreu a ultima alteração, este campo pode ser nulo.',
  `nom_pai` varchar(70) DEFAULT NULL COMMENT 'nome completo do pai do paciente, este campo pode ser nulo.',
  `nom_mae` varchar(70) DEFAULT NULL COMMENT 'nome da mae do paciente ',
  `dt_nascimento` date DEFAULT NULL COMMENT 'data de nascimento do paciente no formato DD-MM-YYYY.',
  `id_naturalidade` int(11) DEFAULT NULL COMMENT 'campo da tabela tb_estado, identifica o estado onde o paciente nasceu.',
  `id_nacionalidade` int(11) DEFAULT NULL COMMENT 'campo da tabela tb_pais, identifica o pais de origem do paciente.',
  `id_genero` int(11) DEFAULT NULL,
  `id_etnia` int(11) DEFAULT NULL,
  `id_estado_civil` int(11) DEFAULT NULL,
  `id_escolaridade` int(11) DEFAULT NULL,
  `id_religiao` int(11) DEFAULT NULL,
  `desc_ocupacao` int(11) DEFAULT NULL,
  `id_renda_familiar` int(11) DEFAULT NULL,
  `sm_tempo_idade` char(5) DEFAULT NULL,
  `nom_apelido` varchar(45) DEFAULT NULL COMMENT 'apelido do paciente caso não queira ser chamdo pelo nome.',
  `desc_origem` varchar(45) DEFAULT NULL,
  `qt_tempo_sp` varchar(45) DEFAULT NULL COMMENT 'campo armazena a o periodo que o paciente esta em sao paulo, periodo em messes, somente numeros.',
  `desc_classe_tempo_sp` varchar(50) DEFAULT NULL,
  `qt_filhos` int(11) DEFAULT NULL COMMENT 'campo que armazena a quantidade de filho que o paciente possui.',
  `flg_necessita_acompanhate` tinyint(1) DEFAULT NULL COMMENT 'campo que identifica se o paciente necessita de acomapanhate, 1 - sim, 0 - nao.',
  `flg_acompanhate` tinyint(1) DEFAULT NULL COMMENT 'campo que identifica se o paciente possui acompanhante, 1 - sim, 0 - nao.',
  `flg_vaiculo` tinyint(1) DEFAULT NULL COMMENT 'campo que identiica se o paciente necessita de veiculo para se locomover, 1 - sim, 0 - nao ',
  `flg_menor_sem_documento` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'campo que identifica se o menor possui documento, 1 - possui 0 - nao possui.',
  `id_profissao` int(11) DEFAULT NULL COMMENT 'com da tabela tb_profissao.',
  `id_campus` int(11) NOT NULL COMMENT 'campus no qual o paciente foi cadastrado',
  `id_grupo` int(11) DEFAULT NULL,
  `desc_email` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`num_prontuario`),
  KEY `fk_TB_PACIENTE_tb_prifissao` (`id_profissao`),
  KEY `fk_tb_paciente_tb_campus` (`id_campus`),
  KEY `fk_tb_paciente_tb_grupo_acesso` (`id_grupo`),
  KEY `fk_tb_paciente_tb_pais` (`id_nacionalidade`),
  KEY `fk_tb_paciente_tb_estado` (`id_naturalidade`),
  KEY `fk_tb_paciente_tb_genero` (`id_genero`),
  KEY `fk_tb_paciente_tb_etnia` (`id_etnia`),
  KEY `fk_tb_paciente_tb_estado_civil` (`id_estado_civil`),
  KEY `fk_tb_paciente_tb_religiao` (`id_religiao`),
  KEY `fk_tb_paciente_tb_escolariadade` (`id_escolaridade`),
  KEY `fk_tb_paciente_tb_renda_familiar` (`id_renda_familiar`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Tabela armazena dados dos usuarios';

/*Data for the table `tb_paciente_old` */

/*Table structure for table `tb_paciente_telefone` */

DROP TABLE IF EXISTS `tb_paciente_telefone`;

CREATE TABLE `tb_paciente_telefone` (
  `id_paciente` int(11) NOT NULL AUTO_INCREMENT COMMENT 'identificador dA id_paciente',
  `id_telefone` int(11) NOT NULL,
  PRIMARY KEY (`id_paciente`),
  KEY `fk_tb_pac_tel_id_telefone` (`id_telefone`),
  CONSTRAINT `fk_tb_pac_tel_id_telefone` FOREIGN KEY (`id_telefone`) REFERENCES `tb_telefone` (`id_telefone`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `tb_paciente_telefone` */

insert  into `tb_paciente_telefone`(`id_paciente`,`id_telefone`) values (1,1),(2,2),(3,3),(4,4),(5,5),(6,6),(7,7),(8,8),(9,9),(10,10);

/*Table structure for table `tb_pais` */

DROP TABLE IF EXISTS `tb_pais`;

CREATE TABLE `tb_pais` (
  `id_pais` int(11) NOT NULL AUTO_INCREMENT,
  `nom_pais` varchar(75) NOT NULL,
  `sgl_pais` char(4) NOT NULL COMMENT 'sgl significa sigla',
  `nom_nacionalidade` varchar(50) NOT NULL,
  PRIMARY KEY (`id_pais`),
  UNIQUE KEY `nom_pais_UNIQUE` (`nom_pais`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

/*Data for the table `tb_pais` */

insert  into `tb_pais`(`id_pais`,`nom_pais`,`sgl_pais`,`nom_nacionalidade`) values (1,'Brasil','BRA','Brasileiro'),(2,'Argentina','ARG','Argentino'),(3,'Chile','CHI','Chileno'),(4,'Uruguai','URU','Uruguaio'),(5,'Bolívia','BOL','Boliviano'),(6,'Peru','PER','Peruano'),(7,'Paraguai','PAR','Paraguaio'),(8,'Venezuela','VEN','Venezuelano'),(9,'Colômbia','COL','Colombiano'),(10,'Equador','EQU','Equatoriano'),(11,'Japão','JP','japones');

/*Table structure for table `tb_papel` */

DROP TABLE IF EXISTS `tb_papel`;

CREATE TABLE `tb_papel` (
  `id_papel` int(11) NOT NULL AUTO_INCREMENT,
  `nom_papel` varchar(35) NOT NULL,
  `dt_inclusao` date NOT NULL,
  `dt_alteracao` date NOT NULL,
  `flg_status_papel` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_papel`),
  UNIQUE KEY `nom_papel_UNIQUE` (`nom_papel`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

/*Data for the table `tb_papel` */

insert  into `tb_papel`(`id_papel`,`nom_papel`,`dt_inclusao`,`dt_alteracao`,`flg_status_papel`) values (1,'xxxxxx','2015-04-25','2015-04-25',1),(2,'230','2016-07-22','2016-07-23',2),(3,'231','2016-07-23','2016-07-24',3),(4,'232','2016-05-23','2016-05-24',4),(5,'Ortopedista','2015-05-07','2016-05-07',1),(6,'Fisioterapeuta','2014-03-13','2016-01-14',3),(7,'Cirurgiao','2000-07-08','2011-03-06',1),(8,'Nutricionista','2006-12-01','2016-05-03',2),(9,'Dermatologista','2015-05-18','2017-01-01',6),(10,'Oftamologista','2016-01-01','2016-05-01',4),(11,'Pediatria','2001-05-07','2012-04-09',7),(12,'Enfermagem','2003-02-28','2013-05-07',1),(13,'Clinico Geral','2000-07-08','2010-03-05',5),(14,'Endocrinologista','2014-05-01','2015-01-01',5),(15,'Recepcionista','2000-07-08','2010-05-01',2);

/*Table structure for table `tb_perfil_acesso` */

DROP TABLE IF EXISTS `tb_perfil_acesso`;

CREATE TABLE `tb_perfil_acesso` (
  `id_perfil` int(11) NOT NULL AUTO_INCREMENT,
  `nom_perfil` varchar(45) NOT NULL,
  `desc_perfil` varchar(255) DEFAULT NULL,
  `dt_inclusao` date NOT NULL,
  `dt_alteracao` date NOT NULL,
  `flg_status_perfil_acesso` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_perfil`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `tb_perfil_acesso` */

insert  into `tb_perfil_acesso`(`id_perfil`,`nom_perfil`,`desc_perfil`,`dt_inclusao`,`dt_alteracao`,`flg_status_perfil_acesso`) values (1,'Analista Júnior','Limitado','2015-05-23','2016-06-05',1),(2,'Gerente de Projeto','Habilitado','2015-05-23','2016-06-05',2),(3,'Gerente de equipe','Habilitado','2015-05-23','2016-06-05',3),(4,'Estagiario','Negado','2015-05-23','2016-06-05',4);

/*Table structure for table `tb_perfil_grupo` */

DROP TABLE IF EXISTS `tb_perfil_grupo`;

CREATE TABLE `tb_perfil_grupo` (
  `dt_inclusao` date NOT NULL,
  `dt_alteracao` date NOT NULL,
  `flg_status_perfil_grupo` tinyint(1) NOT NULL,
  `id_grupo` int(11) NOT NULL,
  `id_perfil` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_grupo`,`id_perfil`),
  KEY `fk_tb_perfil_grupo_grupo_acesso1` (`id_grupo`),
  KEY `fk_tb_perfil_grupo_tb_perfil_acesso` (`id_perfil`),
  CONSTRAINT `fk_tb_perfil_grupo_grupo_acesso1` FOREIGN KEY (`id_grupo`) REFERENCES `tb_grupo_acesso` (`id_grupo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_tb_perfil_grupo_tb_perfil_acesso1` FOREIGN KEY (`id_perfil`) REFERENCES `tb_perfil_acesso` (`id_perfil`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `tb_perfil_grupo` */

insert  into `tb_perfil_grupo`(`dt_inclusao`,`dt_alteracao`,`flg_status_perfil_grupo`,`id_grupo`,`id_perfil`) values ('2016-04-20','2016-05-03',1,1,2),('2016-03-05','2016-04-06',2,2,3),('2016-02-13','2016-05-14',3,3,4);

/*Table structure for table `tb_permissoes` */

DROP TABLE IF EXISTS `tb_permissoes`;

CREATE TABLE `tb_permissoes` (
  `id_permissao` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador da permissao.',
  `nom_permissao` varchar(45) DEFAULT NULL COMMENT 'nome da operação que o usuario pode realizar dentro do sistema.',
  PRIMARY KEY (`id_permissao`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `tb_permissoes` */

insert  into `tb_permissoes`(`id_permissao`,`nom_permissao`) values (1,'Administrador'),(2,'Medico'),(3,'Atendentes'),(4,'TI'),(5,'Suporte'),(6,'Enfermeiro');

/*Table structure for table `tb_permissoes_concedidas` */

DROP TABLE IF EXISTS `tb_permissoes_concedidas`;

CREATE TABLE `tb_permissoes_concedidas` (
  `id_usu_delega` int(11) NOT NULL AUTO_INCREMENT COMMENT 'identificador do usuario que esta delegando o poder.',
  `id_usu_recebe` int(11) NOT NULL COMMENT 'identificador do usuario que este recebendo.',
  `id_permissao` int(11) NOT NULL COMMENT 'Permissão recebida pelo usuario.',
  `dt_inicio` date DEFAULT NULL COMMENT 'data de inicio da permissão.',
  `dt_fim` date DEFAULT NULL COMMENT 'data fim da permissao.',
  `des_motivo` varchar(250) DEFAULT NULL COMMENT 'descrição por esta permissao ter sido passada para o usuario.',
  PRIMARY KEY (`id_usu_delega`,`id_usu_recebe`),
  KEY `fk_tb_usuario_has_tb_delega_poder1_tb_delega_poder` (`id_usu_delega`),
  KEY `fk_tb_usuario_has_tb_delega_poder1_tb_usuario` (`id_usu_recebe`),
  KEY `fk_tb_permissoes_concedidas_tb_permissoes` (`id_permissao`),
  CONSTRAINT `fk_tb_permissoes_concedidas_tb_permissoes1` FOREIGN KEY (`id_permissao`) REFERENCES `tb_permissoes` (`id_permissao`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_tb_usuario_has_tb_delega_poder1_tb_delega_poder1` FOREIGN KEY (`id_usu_delega`) REFERENCES `tb_delega_poder` (`id_usu_delega`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_tb_usuario_has_tb_delega_poder1_tb_usuario1` FOREIGN KEY (`id_usu_recebe`) REFERENCES `tb_usuario` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=latin1;

/*Data for the table `tb_permissoes_concedidas` */

insert  into `tb_permissoes_concedidas`(`id_usu_delega`,`id_usu_recebe`,`id_permissao`,`dt_inicio`,`dt_fim`,`des_motivo`) values (52,6,2,'2016-05-10','2016-07-10','acesso ao sistema'),(52,7,2,'2016-02-04','2016-03-04','acesso ao sistema'),(52,8,6,'2016-03-05','2016-04-06','uso temporario'),(52,9,3,'2016-02-04','2016-03-04','uso temporario'),(52,10,2,'2016-01-24','2016-03-19','uso temporario');

/*Table structure for table `tb_pessoa` */

DROP TABLE IF EXISTS `tb_pessoa`;

CREATE TABLE `tb_pessoa` (
  `id_pessoa` int(11) NOT NULL AUTO_INCREMENT,
  `nom_pessoa` varchar(200) NOT NULL,
  `id_contato` int(11) DEFAULT NULL COMMENT 'O id_contato  é o id_pessoa.',
  PRIMARY KEY (`id_pessoa`),
  KEY `fk_tb_pessoa_tb_pessoa` (`id_contato`),
  CONSTRAINT `fk_tb_pessoa_tb_pessoa1` FOREIGN KEY (`id_contato`) REFERENCES `tb_pessoa` (`id_pessoa`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8;

/*Data for the table `tb_pessoa` */

insert  into `tb_pessoa`(`id_pessoa`,`nom_pessoa`,`id_contato`) values (1,'xxxxxxx',NULL),(2,'Rita',1),(3,'Alexandre',3),(4,'Washington',4),(5,'Bruno',5),(6,'Larissa',6),(7,'Jefferson',7),(8,'Joyce',8),(9,'Carlos',9),(10,'Marcelo',2),(11,'Alesandra',5),(12,'Renata',4),(13,'Rafaela',1),(31,'Daniel',1),(32,'Gerson',2),(52,'Jefferson Gomes',7);

/*Table structure for table `tb_profissao` */

DROP TABLE IF EXISTS `tb_profissao`;

CREATE TABLE `tb_profissao` (
  `id_profissao` int(11) NOT NULL AUTO_INCREMENT,
  `nom_profissao` varchar(50) NOT NULL,
  PRIMARY KEY (`id_profissao`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `tb_profissao` */

insert  into `tb_profissao`(`id_profissao`,`nom_profissao`) values (1,'teste'),(2,'teste2'),(3,'teste3');

/*Table structure for table `tb_reg_nacio_estrangeiro` */

DROP TABLE IF EXISTS `tb_reg_nacio_estrangeiro`;

CREATE TABLE `tb_reg_nacio_estrangeiro` (
  `id_reg_nacio_estrangeiro` int(11) NOT NULL AUTO_INCREMENT COMMENT 'identificador id_reg_nacio_estrangeiro',
  `id_pais` int(11) NOT NULL,
  `num_reg_nacio_estrageiro` varchar(45) NOT NULL,
  `dt_emissao` date NOT NULL,
  `dt_entrada` date NOT NULL,
  `dt_validade` date NOT NULL,
  `desc_orgao_emissor` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_reg_nacio_estrangeiro`),
  KEY `fk_tb_reg_nacio_etra_id_pais` (`id_pais`),
  CONSTRAINT `fk_tb_reg_nacio_etra_id_pais` FOREIGN KEY (`id_pais`) REFERENCES `tb_pais` (`id_pais`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `tb_reg_nacio_estrangeiro` */

insert  into `tb_reg_nacio_estrangeiro`(`id_reg_nacio_estrangeiro`,`id_pais`,`num_reg_nacio_estrageiro`,`dt_emissao`,`dt_entrada`,`dt_validade`,`desc_orgao_emissor`) values (1,5,'5526826845','2016-01-07','2016-02-05','2017-01-06','ssp');

/*Table structure for table `tb_registra_atividade` */

DROP TABLE IF EXISTS `tb_registra_atividade`;

CREATE TABLE `tb_registra_atividade` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `id_prontuario` int(11) NOT NULL,
  `id_oper_sistema` int(11) DEFAULT NULL,
  `id_acao` int(11) DEFAULT NULL,
  `dt_alteracao` date DEFAULT NULL,
  `id_log` int(11) NOT NULL,
  `dt_hora` date NOT NULL,
  PRIMARY KEY (`id_usuario`,`id_log`),
  KEY `fk_tb_registra_atividade_tb_acessa_log` (`id_log`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `tb_registra_atividade` */

insert  into `tb_registra_atividade`(`id_usuario`,`id_prontuario`,`id_oper_sistema`,`id_acao`,`dt_alteracao`,`id_log`,`dt_hora`) values (6,6,1,1,'2016-03-22',1,'2016-02-21'),(7,7,2,1,'2016-04-16',1,'2016-03-15'),(8,8,3,1,'2016-02-12',1,'2016-01-11'),(9,9,4,1,'2016-05-05',1,'2016-04-04'),(10,10,5,1,'2016-03-03',1,'2016-02-02');

/*Table structure for table `tb_registro_critica_incidente` */

DROP TABLE IF EXISTS `tb_registro_critica_incidente`;

CREATE TABLE `tb_registro_critica_incidente` (
  `id_registro_critica_incidente` int(11) NOT NULL AUTO_INCREMENT,
  `id_log` int(11) NOT NULL,
  `des_registro` varchar(500) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  PRIMARY KEY (`id_registro_critica_incidente`),
  KEY `fk_tb_regis_crit_incid_tb_usua` (`id_usuario`),
  CONSTRAINT `fk_tb_registro_critica_incidente_tb_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `tb_usuario` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_registro_critica_incidente` */

/*Table structure for table `tb_religiao` */

DROP TABLE IF EXISTS `tb_religiao`;

CREATE TABLE `tb_religiao` (
  `id_religiao` int(11) NOT NULL AUTO_INCREMENT,
  `nom_religiao` varchar(50) NOT NULL,
  PRIMARY KEY (`id_religiao`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

/*Data for the table `tb_religiao` */

insert  into `tb_religiao`(`id_religiao`,`nom_religiao`) values (1,'Catolico'),(2,'Evangelico'),(3,'Ateu'),(4,'Judeu'),(5,'Cristianismo'),(6,'Islamismo'),(7,'Espirita'),(8,'Budista'),(9,'Xintoista'),(10,'Hindu');

/*Table structure for table `tb_renda_familiar` */

DROP TABLE IF EXISTS `tb_renda_familiar`;

CREATE TABLE `tb_renda_familiar` (
  `id_renda_familiar` int(11) NOT NULL AUTO_INCREMENT,
  `nom_faixa_renda` varchar(50) NOT NULL,
  PRIMARY KEY (`id_renda_familiar`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `tb_renda_familiar` */

insert  into `tb_renda_familiar`(`id_renda_familiar`,`nom_faixa_renda`) values (1,'Classe baixa'),(2,'Classe media'),(3,'Classe Alta');

/*Table structure for table `tb_responsavel` */

DROP TABLE IF EXISTS `tb_responsavel`;

CREATE TABLE `tb_responsavel` (
  `id_tipo_responsavel` int(11) NOT NULL AUTO_INCREMENT,
  `id_grau_parentesco` int(11) NOT NULL,
  `id_veiculo` varchar(50) DEFAULT NULL COMMENT 'este campo vem da tabela tb_veiculo.',
  `num_prontuario` int(11) DEFAULT NULL,
  KEY `fk_responsavelPaciente_idx` (`num_prontuario`),
  KEY `fk_tb_responsavel_tb_tipo_responsavel` (`id_tipo_responsavel`),
  KEY `fk_tb_responsavel_tb_grau_parentesco` (`id_grau_parentesco`),
  CONSTRAINT `fk_responsavelPaciente` FOREIGN KEY (`num_prontuario`) REFERENCES `tb_paciente_old` (`num_prontuario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_tb_responsavel_tb_grau_parentesco1` FOREIGN KEY (`id_grau_parentesco`) REFERENCES `tb_grau_parentesco` (`id_grau_parentesco`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_tb_responsavel_tb_tipo_responsavel1` FOREIGN KEY (`id_tipo_responsavel`) REFERENCES `tb_tipo_responsavel` (`id_tipo_responsavel`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_responsavel` */

/*Table structure for table `tb_responsavel_endereco` */

DROP TABLE IF EXISTS `tb_responsavel_endereco`;

CREATE TABLE `tb_responsavel_endereco` (
  `id_responsavel` int(11) NOT NULL AUTO_INCREMENT COMMENT 'identificador id_responsavel',
  `id_endereco` int(11) NOT NULL,
  `dt_inclusao` date NOT NULL,
  `dt_alteracao` date NOT NULL,
  `num_end` varchar(20) NOT NULL,
  `desc_compl_endereco` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_responsavel`),
  KEY `fk_tb_resp_end_id_endereco` (`id_endereco`),
  CONSTRAINT `fk_tb_resp_end_id_endereco` FOREIGN KEY (`id_endereco`) REFERENCES `tb_endereco` (`id_endereco`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_responsavel_endereco` */

/*Table structure for table `tb_responsavel_paciente` */

DROP TABLE IF EXISTS `tb_responsavel_paciente`;

CREATE TABLE `tb_responsavel_paciente` (
  `id_responsavel` int(11) NOT NULL AUTO_INCREMENT COMMENT 'identificador id_responsavel',
  `id_prontuario` int(11) NOT NULL,
  `dt_inclusao` date NOT NULL,
  PRIMARY KEY (`id_responsavel`),
  KEY `fk_tb_resp_paci_id_prontuario` (`id_prontuario`),
  CONSTRAINT `fk_tb_resp_paci_id_prontuario` FOREIGN KEY (`id_prontuario`) REFERENCES `tb_paciente_contato` (`id_prontuario`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `tb_responsavel_paciente` */

insert  into `tb_responsavel_paciente`(`id_responsavel`,`id_prontuario`,`dt_inclusao`) values (1,104,'2016-03-22'),(2,105,'2016-04-29'),(3,106,'2016-03-17'),(4,107,'2016-05-06'),(5,108,'2016-02-12');

/*Table structure for table `tb_responsavel_telefone` */

DROP TABLE IF EXISTS `tb_responsavel_telefone`;

CREATE TABLE `tb_responsavel_telefone` (
  `id_responsavel` int(11) NOT NULL AUTO_INCREMENT COMMENT 'identificador id_responsavel',
  `id_telefone` int(11) NOT NULL,
  PRIMARY KEY (`id_responsavel`),
  KEY `fk_tb_resp_tel_id_telefone` (`id_telefone`),
  CONSTRAINT `fk_tb_resp_tel_id_telefone` FOREIGN KEY (`id_telefone`) REFERENCES `tb_telefone` (`id_telefone`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `tb_responsavel_telefone` */

insert  into `tb_responsavel_telefone`(`id_responsavel`,`id_telefone`) values (1,1),(2,1),(4,2),(3,3),(5,3);

/*Table structure for table `tb_sobre` */

DROP TABLE IF EXISTS `tb_sobre`;

CREATE TABLE `tb_sobre` (
  `id_sobre` int(7) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id_sobre`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Data for the table `tb_sobre` */

/*Table structure for table `tb_telefone` */

DROP TABLE IF EXISTS `tb_telefone`;

CREATE TABLE `tb_telefone` (
  `id_telefone` int(11) NOT NULL AUTO_INCREMENT COMMENT 'identificador id_telefone',
  `num_telefone` varchar(12) NOT NULL,
  `desc_tipo_telefone` varchar(12) NOT NULL,
  `num_ramal` varchar(4) DEFAULT NULL,
  `num_ddd` int(2) DEFAULT NULL,
  PRIMARY KEY (`id_telefone`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `tb_telefone` */

insert  into `tb_telefone`(`id_telefone`,`num_telefone`,`desc_tipo_telefone`,`num_ramal`,`num_ddd`) values (1,'5581-9966','Residencial',' ',11),(2,'9582-9966','Celular',' ',15),(3,'5583-9966','Residencial','12',11),(4,'5582-9966','Comercial','14',11),(5,'9683-9966','Celular',' ',15),(6,'3088','Celular','',14),(7,'9562-9966','Celular','',13),(8,'5573-9966','Residencial','16',22),(9,'5585-9966','Comercial','',17),(10,'9793-9966','Celular','',12);

/*Table structure for table `tb_tipo_documento` */

DROP TABLE IF EXISTS `tb_tipo_documento`;

CREATE TABLE `tb_tipo_documento` (
  `id_tipo_documento` int(11) NOT NULL AUTO_INCREMENT,
  `nom_tipo_documento` varchar(45) NOT NULL,
  PRIMARY KEY (`id_tipo_documento`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

/*Data for the table `tb_tipo_documento` */

insert  into `tb_tipo_documento`(`id_tipo_documento`,`nom_tipo_documento`) values (1,'RG'),(2,'Certidão de Nascimento'),(3,'CPF'),(4,'CNH'),(6,'Carteira de Trabalho');

/*Table structure for table `tb_tipo_responsavel` */

DROP TABLE IF EXISTS `tb_tipo_responsavel`;

CREATE TABLE `tb_tipo_responsavel` (
  `id_tipo_responsavel` int(11) NOT NULL AUTO_INCREMENT,
  `nom_tipo` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_tipo_responsavel`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

/*Data for the table `tb_tipo_responsavel` */

insert  into `tb_tipo_responsavel`(`id_tipo_responsavel`,`nom_tipo`) values (1,'Gerente'),(2,'Supervisor'),(3,'Master'),(4,'Sub-Gerente'),(5,'Enfermeiro'),(6,'Especialista'),(7,'Recepcionista'),(8,'Atendimento'),(10,'Triagem');

/*Table structure for table `tb_usuario` */

DROP TABLE IF EXISTS `tb_usuario`;

CREATE TABLE `tb_usuario` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `num_matricula_ra` varchar(12) NOT NULL,
  `flg_status_usuario` tinyint(1) NOT NULL,
  `dt_nasc` date NOT NULL,
  `dt_inclusao` date NOT NULL,
  `dt_validade_senha` date NOT NULL,
  `dt_alteracao` date DEFAULT NULL,
  `desc_email` varchar(50) DEFAULT NULL,
  `desc_senha` varchar(50) NOT NULL,
  `desc_delega_poder` varchar(50) DEFAULT NULL,
  `id_usu_sist` int(11) NOT NULL,
  `flg_tipo_usuario` tinyint(1) NOT NULL,
  `id_campus` int(11) NOT NULL,
  `id_papel` int(11) NOT NULL,
  `nom_mae` varchar(50) NOT NULL,
  `id_pessoa` int(11) DEFAULT NULL,
  `nom_usuario` varchar(50) NOT NULL,
  PRIMARY KEY (`id_usuario`),
  UNIQUE KEY `num_matricola_ra_UNIQUE` (`num_matricula_ra`),
  KEY `fk_tb_usuario_tb_campus` (`id_campus`),
  KEY `fk_tb_usuario_tb_papel` (`id_papel`),
  CONSTRAINT `fk_tb_usuario_tb_campus1` FOREIGN KEY (`id_campus`) REFERENCES `tb_campus` (`id_campus`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_tb_usuario_tb_papel1` FOREIGN KEY (`id_papel`) REFERENCES `tb_papel` (`id_papel`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_usuario_pessoa` FOREIGN KEY (`id_usuario`) REFERENCES `tb_pessoa` (`id_pessoa`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=latin1;

/*Data for the table `tb_usuario` */

insert  into `tb_usuario`(`id_usuario`,`num_matricula_ra`,`flg_status_usuario`,`dt_nasc`,`dt_inclusao`,`dt_validade_senha`,`dt_alteracao`,`desc_email`,`desc_senha`,`desc_delega_poder`,`id_usu_sist`,`flg_tipo_usuario`,`id_campus`,`id_papel`,`nom_mae`,`id_pessoa`,`nom_usuario`) values (1,'5257',119,'1995-07-23','2016-05-07','2016-05-14','2014-01-05','carlos@uninove.edu.br','PPK','Fisioterapeuta',7,0,4,6,'Adeilza',727860,'Carlos'),(2,'5249',111,'1993-03-27','2016-05-01','2016-05-01','2015-05-03','daniel@uninove.edu.br','6527','Resposavel Plantao',6385,0,3,8,'Ademilda',727853,'Daniel'),(3,'5251',113,'1993-03-27','2016-05-01','2016-05-01','2015-05-03','alexandre@uninove.edu.br','6529','Cirurgiao',2,0,3,1,'Marlene',727855,'Alexandre'),(4,'5252',114,'1993-08-15','2015-03-07','2016-06-15','2014-03-17','washington@uninove.edu.br','6969','Proctologista',0,0,4,2,'Lindalva',727856,'Washington'),(5,'5253',115,'1993-06-03','2016-05-07','2016-05-14','2014-01-05','bruno@uninove.edu.br','6970','Endocrinologista',6666,0,5,14,'Siqueira',727857,'Bruno'),(6,'2255664897',1,'1986-08-10','2016-03-23','2016-05-22','2016-04-22','joao@uninove.br','jo1234','Ortopedista',1,1,2,5,'Maria',10,'João Carlos'),(7,'2213485769',2,'1990-06-18','2016-02-23','2016-05-22','2016-04-22','luiscar@uninove.br','lu1234','Pediatria',2,2,3,11,'Joana',9,'Luis Carlos'),(8,'2737282019',3,'1992-03-02','2016-03-23','2016-05-22','2016-04-22','bernardo12@uninove.br','123456','Enfermagem',3,3,3,12,'Vera',11,'Bernardo'),(9,'2217834020',4,'1988-01-29','2016-01-23','2016-05-22','2016-04-22','mariana@uninove.br','228763','Recepcionista',4,4,4,15,'Maria',12,'Mariana'),(10,'2223832821',5,'1985-07-13','2016-02-23','2016-05-22','2016-04-22','poli@uninove.br','8461462','Fisioterapeuta',5,5,5,6,'Ana',16,'Poliana'),(11,'5254',116,'1993-03-30','2016-05-07','2016-05-14','2014-01-05','larissa@uninove.edu.br','6971','Pediatra',7,0,1,11,'Sei La',727857,'Larissa Giovana'),(12,'5255',117,'1997-12-28','2016-05-07','2016-05-14','2014-01-05','jefferson@uninove.edu.br','2812','Recepcionista',10,0,1,15,'Silvia',727858,'Jefferson'),(13,'5256',118,'1997-01-18','2016-05-07','2016-05-14','2014-01-05','joyce@uninove.edu.br','TEDDY','Nutricionista',8,0,1,8,'Edileuda',727859,'Joyce'),(32,'5250',112,'1993-03-23','2016-05-02','2016-05-02','2015-04-03','gerson@uninove.edu.br','6528','Resposavel Setor',6386,0,1,6,'Sandra',727854,'Gerson'),(52,'2534664897',7,'1988-07-10','2016-03-13','2016-05-22','2016-04-22','jeff@uninove.br','jeff02','TI',2,3,2,15,'Marcia',10,'Jefferson Gomes');

/*Table structure for table `tb_usuario_grupo_acesso` */

DROP TABLE IF EXISTS `tb_usuario_grupo_acesso`;

CREATE TABLE `tb_usuario_grupo_acesso` (
  `dt_inclusao` date DEFAULT NULL,
  `dt_alteracao` date DEFAULT NULL,
  `flg_status_usuario_grupo` tinyint(1) DEFAULT NULL,
  `id_grupo` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_grupo`,`id_usuario`),
  KEY `fk_tb_usuario_grupo_acesso_grupo_acesso1` (`id_grupo`),
  KEY `fk_tb_usuario_grupo_acesso_tb_usuario` (`id_usuario`),
  CONSTRAINT `fk_tb_usuario_grupo_acesso_grupo_acesso1` FOREIGN KEY (`id_grupo`) REFERENCES `tb_grupo_acesso` (`id_grupo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_tb_usuario_grupo_acesso_tb_usuario1` FOREIGN KEY (`id_usuario`) REFERENCES `tb_usuario` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `tb_usuario_grupo_acesso` */

insert  into `tb_usuario_grupo_acesso`(`dt_inclusao`,`dt_alteracao`,`flg_status_usuario_grupo`,`id_grupo`,`id_usuario`) values ('2016-03-23','2016-04-22',1,1,6),('2016-02-23','2016-04-22',2,1,7),('2016-02-23','2016-04-22',5,1,10),('2016-03-23','2016-04-22',3,2,8),('2016-01-23','2016-04-22',4,2,9);

/*Table structure for table `tb_usuario_telefone` */

DROP TABLE IF EXISTS `tb_usuario_telefone`;

CREATE TABLE `tb_usuario_telefone` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT COMMENT 'identificador id_usuario',
  `id_telefone` int(11) NOT NULL,
  PRIMARY KEY (`id_usuario`),
  KEY `fk_tb_usu_tel_id_telefone` (`id_telefone`),
  CONSTRAINT `fk_tb_usu_tel_id_telefone` FOREIGN KEY (`id_telefone`) REFERENCES `tb_telefone` (`id_telefone`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `tb_usuario_telefone` */

insert  into `tb_usuario_telefone`(`id_usuario`,`id_telefone`) values (6,1),(7,1),(8,2),(9,3);

/*Table structure for table `tb_veiculo` */

DROP TABLE IF EXISTS `tb_veiculo`;

CREATE TABLE `tb_veiculo` (
  `id_veiculo_pessoa` int(11) NOT NULL AUTO_INCREMENT COMMENT 'identificador do veiculo na tabela',
  `desc_placa_veiculo` varchar(7) NOT NULL COMMENT 'numero da placa do veiculo',
  `flg_veiculo_adaptado` tinyint(1) NOT NULL COMMENT 'flage para terminar se o veiculo é adaptado para pessoas com necessidades especiais.',
  `desc_outras_informacoes` varchar(100) DEFAULT NULL,
  `id_pessoa` int(11) NOT NULL,
  PRIMARY KEY (`id_veiculo_pessoa`),
  KEY `fk_veiculo_pessoa_idx` (`id_pessoa`),
  CONSTRAINT `fk_veiculo_pessoa` FOREIGN KEY (`id_pessoa`) REFERENCES `tb_pessoa` (`id_pessoa`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `tb_veiculo` */

insert  into `tb_veiculo`(`id_veiculo_pessoa`,`desc_placa_veiculo`,`flg_veiculo_adaptado`,`desc_outras_informacoes`,`id_pessoa`) values (1,'EMN1865',1,'passeio',1),(2,'Ezn1368',0,'passeio',2),(3,'BDA3259',1,'conversível',3),(4,'JOT1345',0,'esportivo',4),(5,'EMN1865',1,'passeio',5),(6,'EMN1865',1,'ultilitário',6);

/*Table structure for table `tb_zz` */

DROP TABLE IF EXISTS `tb_zz`;

CREATE TABLE `tb_zz` (
  `id_zz` int(10) NOT NULL,
  `nom_zz` varchar(80) DEFAULT NULL,
  `descr` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id_zz`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `tb_zz` */

insert  into `tb_zz`(`id_zz`,`nom_zz`,`descr`) values (1,' Jeferson','Amigo do du'),(2,' Du','o amigo'),(3,'Yuri','Melhor amigo do DU'),(4,'Walker','O menino do projeto'),(5,' Cesar',' O irmão do meio'),(6,' David',' O irmão mais novo');

/* Procedure structure for procedure `Verificar_Quantidade_usuario` */

/*!50003 DROP PROCEDURE IF EXISTS  `Verificar_Quantidade_usuario` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`producao`@`%` PROCEDURE `Verificar_Quantidade_usuario`(OUT id_usuario INT)
BEGIN 
 SELECT COUNT(*) INTO id_usuario FROM tb_usuario;	
 END */$$
DELIMITER ;

/*Table structure for table `acesso` */

DROP TABLE IF EXISTS `acesso`;

/*!50001 DROP VIEW IF EXISTS `acesso` */;
/*!50001 DROP TABLE IF EXISTS `acesso` */;

/*!50001 CREATE TABLE  `acesso`(
 `tb_acessa_log` int(11) ,
 `tb_acesso_operacao` date 
)*/;

/*Table structure for table `audt_sistema1` */

DROP TABLE IF EXISTS `audt_sistema1`;

/*!50001 DROP VIEW IF EXISTS `audt_sistema1` */;
/*!50001 DROP TABLE IF EXISTS `audt_sistema1` */;

/*!50001 CREATE TABLE  `audt_sistema1`(
 `id_audt_sistma` int(11) ,
 `nom_tabela_alterada` varchar(50) ,
 `nom_coluna_alterada` varchar(50) ,
 `id_usuario` int(11) ,
 `id_restro_alterado` int(11) ,
 `ds_valor_antigo` varchar(255) ,
 `ds_valor_novo` varchar(255) ,
 `ds_motivo_alteracao` varchar(255) ,
 `dt_alteracao` date 
)*/;

/*Table structure for table `bairro1` */

DROP TABLE IF EXISTS `bairro1`;

/*!50001 DROP VIEW IF EXISTS `bairro1` */;
/*!50001 DROP TABLE IF EXISTS `bairro1` */;

/*!50001 CREATE TABLE  `bairro1`(
 `id_bairro` int(11) ,
 `nom_bairro` varchar(45) ,
 `id_cidade` int(11) 
)*/;

/*Table structure for table `cidade1` */

DROP TABLE IF EXISTS `cidade1`;

/*!50001 DROP VIEW IF EXISTS `cidade1` */;
/*!50001 DROP TABLE IF EXISTS `cidade1` */;

/*!50001 CREATE TABLE  `cidade1`(
 `id_estado` int(11) ,
 `id_cidade` int(11) ,
 `nom_cidade` varchar(60) 
)*/;

/*Table structure for table `contatos` */

DROP TABLE IF EXISTS `contatos`;

/*!50001 DROP VIEW IF EXISTS `contatos` */;
/*!50001 DROP TABLE IF EXISTS `contatos` */;

/*!50001 CREATE TABLE  `contatos`(
 `id_contato` int(11) 
)*/;

/*Table structure for table `dt_inclusao` */

DROP TABLE IF EXISTS `dt_inclusao`;

/*!50001 DROP VIEW IF EXISTS `dt_inclusao` */;
/*!50001 DROP TABLE IF EXISTS `dt_inclusao` */;

/*!50001 CREATE TABLE  `dt_inclusao`(
 `id_papel` int(11) ,
 `nom_papel` varchar(35) ,
 `dt_inclusao` date ,
 `dt_alteracao` date ,
 `flg_status_papel` tinyint(1) 
)*/;

/*Table structure for table `func` */

DROP TABLE IF EXISTS `func`;

/*!50001 DROP VIEW IF EXISTS `func` */;
/*!50001 DROP TABLE IF EXISTS `func` */;

/*!50001 CREATE TABLE  `func`(
 `cod` decimal(3,0) ,
 `nome` varchar(20) 
)*/;

/*Table structure for table `genero` */

DROP TABLE IF EXISTS `genero`;

/*!50001 DROP VIEW IF EXISTS `genero` */;
/*!50001 DROP TABLE IF EXISTS `genero` */;

/*!50001 CREATE TABLE  `genero`(
 `id_genero` int(11) ,
 `nom_genero` varchar(50) 
)*/;

/*Table structure for table `id_bairro` */

DROP TABLE IF EXISTS `id_bairro`;

/*!50001 DROP VIEW IF EXISTS `id_bairro` */;
/*!50001 DROP TABLE IF EXISTS `id_bairro` */;

/*!50001 CREATE TABLE  `id_bairro`(
 `id_endereco` int(11) ,
 `nom_logradouro` varchar(75) ,
 `desc_tipo_logradouro` varchar(20) ,
 `num_cep` char(9) ,
 `id_bairro` int(11) 
)*/;

/*Table structure for table `id_cod` */

DROP TABLE IF EXISTS `id_cod`;

/*!50001 DROP VIEW IF EXISTS `id_cod` */;
/*!50001 DROP TABLE IF EXISTS `id_cod` */;

/*!50001 CREATE TABLE  `id_cod`(
 `cod` decimal(3,0) ,
 `nome` varchar(20) 
)*/;

/*Table structure for table `id_genero` */

DROP TABLE IF EXISTS `id_genero`;

/*!50001 DROP VIEW IF EXISTS `id_genero` */;
/*!50001 DROP TABLE IF EXISTS `id_genero` */;

/*!50001 CREATE TABLE  `id_genero`(
 `id_genero` int(11) ,
 `nom_genero` varchar(50) 
)*/;

/*Table structure for table `id_papel` */

DROP TABLE IF EXISTS `id_papel`;

/*!50001 DROP VIEW IF EXISTS `id_papel` */;
/*!50001 DROP TABLE IF EXISTS `id_papel` */;

/*!50001 CREATE TABLE  `id_papel`(
 `id_papel` int(11) ,
 `nom_papel` varchar(35) ,
 `dt_inclusao` date ,
 `dt_alteracao` date ,
 `flg_status_papel` tinyint(1) 
)*/;

/*Table structure for table `infolocal` */

DROP TABLE IF EXISTS `infolocal`;

/*!50001 DROP VIEW IF EXISTS `infolocal` */;
/*!50001 DROP TABLE IF EXISTS `infolocal` */;

/*!50001 CREATE TABLE  `infolocal`(
 `nom_cidade` varchar(60) ,
 `nom_uf` varchar(2) 
)*/;

/*Table structure for table `nom_papel` */

DROP TABLE IF EXISTS `nom_papel`;

/*!50001 DROP VIEW IF EXISTS `nom_papel` */;
/*!50001 DROP TABLE IF EXISTS `nom_papel` */;

/*!50001 CREATE TABLE  `nom_papel`(
 `id_papel` int(11) ,
 `nom_papel` varchar(35) ,
 `dt_inclusao` date ,
 `dt_alteracao` date ,
 `flg_status_papel` tinyint(1) 
)*/;

/*Table structure for table `pais` */

DROP TABLE IF EXISTS `pais`;

/*!50001 DROP VIEW IF EXISTS `pais` */;
/*!50001 DROP TABLE IF EXISTS `pais` */;

/*!50001 CREATE TABLE  `pais`(
 `id_pais` int(11) ,
 `nom_pais` varchar(75) ,
 `sgl_pais` char(4) ,
 `nom_nacionalidade` varchar(50) 
)*/;

/*Table structure for table `papael1` */

DROP TABLE IF EXISTS `papael1`;

/*!50001 DROP VIEW IF EXISTS `papael1` */;
/*!50001 DROP TABLE IF EXISTS `papael1` */;

/*!50001 CREATE TABLE  `papael1`(
 `id_papel` int(11) ,
 `nom_papel` varchar(35) ,
 `dt_inclusao` date ,
 `dt_alteracao` date ,
 `flg_status_papel` tinyint(1) 
)*/;

/*Table structure for table `permissoes` */

DROP TABLE IF EXISTS `permissoes`;

/*!50001 DROP VIEW IF EXISTS `permissoes` */;
/*!50001 DROP TABLE IF EXISTS `permissoes` */;

/*!50001 CREATE TABLE  `permissoes`(
 `id_permissao` int(11) ,
 `nom_permissao` varchar(45) 
)*/;

/*Table structure for table `pessoa` */

DROP TABLE IF EXISTS `pessoa`;

/*!50001 DROP VIEW IF EXISTS `pessoa` */;
/*!50001 DROP TABLE IF EXISTS `pessoa` */;

/*!50001 CREATE TABLE  `pessoa`(
 `id_pessoa` int(11) ,
 `nom_pessoa` varchar(200) ,
 `id_contato` int(11) 
)*/;

/*Table structure for table `profissao` */

DROP TABLE IF EXISTS `profissao`;

/*!50001 DROP VIEW IF EXISTS `profissao` */;
/*!50001 DROP TABLE IF EXISTS `profissao` */;

/*!50001 CREATE TABLE  `profissao`(
 `id_profissao` int(11) ,
 `nom_profissao` varchar(50) 
)*/;

/*Table structure for table `telefone` */

DROP TABLE IF EXISTS `telefone`;

/*!50001 DROP VIEW IF EXISTS `telefone` */;
/*!50001 DROP TABLE IF EXISTS `telefone` */;

/*!50001 CREATE TABLE  `telefone`(
 `id_telefone` int(11) ,
 `num_telefone` varchar(12) ,
 `desc_tipo_telefone` varchar(12) ,
 `num_ramal` varchar(4) ,
 `num_ddd` int(2) 
)*/;

/*Table structure for table `vwacessa` */

DROP TABLE IF EXISTS `vwacessa`;

/*!50001 DROP VIEW IF EXISTS `vwacessa` */;
/*!50001 DROP TABLE IF EXISTS `vwacessa` */;

/*!50001 CREATE TABLE  `vwacessa`(
 `dt_hora` date ,
 `desc_acao` varchar(500) ,
 `id_usu_afetado` int(11) ,
 `id_log` int(11) 
)*/;

/*Table structure for table `vwbairro` */

DROP TABLE IF EXISTS `vwbairro`;

/*!50001 DROP VIEW IF EXISTS `vwbairro` */;
/*!50001 DROP TABLE IF EXISTS `vwbairro` */;

/*!50001 CREATE TABLE  `vwbairro`(
 `id_bairro` int(11) ,
 `nom_bairro` varchar(45) ,
 `id_cidade` int(11) 
)*/;

/*Table structure for table `vwcampus` */

DROP TABLE IF EXISTS `vwcampus`;

/*!50001 DROP VIEW IF EXISTS `vwcampus` */;
/*!50001 DROP TABLE IF EXISTS `vwcampus` */;

/*!50001 CREATE TABLE  `vwcampus`(
 `id_campus` int(11) ,
 `nom_campus` varchar(45) 
)*/;

/*Table structure for table `vwcidade` */

DROP TABLE IF EXISTS `vwcidade`;

/*!50001 DROP VIEW IF EXISTS `vwcidade` */;
/*!50001 DROP TABLE IF EXISTS `vwcidade` */;

/*!50001 CREATE TABLE  `vwcidade`(
 `id_estado` int(11) ,
 `id_cidade` int(11) ,
 `nom_cidade` varchar(60) 
)*/;

/*Table structure for table `vwcidadeestado` */

DROP TABLE IF EXISTS `vwcidadeestado`;

/*!50001 DROP VIEW IF EXISTS `vwcidadeestado` */;
/*!50001 DROP TABLE IF EXISTS `vwcidadeestado` */;

/*!50001 CREATE TABLE  `vwcidadeestado`(
 `nom_cidade` varchar(60) ,
 `nom_uf` varchar(2) 
)*/;

/*Table structure for table `vwcontato` */

DROP TABLE IF EXISTS `vwcontato`;

/*!50001 DROP VIEW IF EXISTS `vwcontato` */;
/*!50001 DROP TABLE IF EXISTS `vwcontato` */;

/*!50001 CREATE TABLE  `vwcontato`(
 `id_contato` int(11) ,
 `nom_recado` varchar(150) ,
 `desc_email` varchar(70) 
)*/;

/*Table structure for table `vwcritica` */

DROP TABLE IF EXISTS `vwcritica`;

/*!50001 DROP VIEW IF EXISTS `vwcritica` */;
/*!50001 DROP TABLE IF EXISTS `vwcritica` */;

/*!50001 CREATE TABLE  `vwcritica`(
 `id_erro` int(11) ,
 `desc_erro` varchar(100) 
)*/;

/*Table structure for table `vwdelega` */

DROP TABLE IF EXISTS `vwdelega`;

/*!50001 DROP VIEW IF EXISTS `vwdelega` */;
/*!50001 DROP TABLE IF EXISTS `vwdelega` */;

/*!50001 CREATE TABLE  `vwdelega`(
 `id_usu_delega` int(11) ,
 `id_permissao` int(11) ,
 `flg_status_delega` tinyint(1) 
)*/;

/*Table structure for table `vwdelegapoder` */

DROP TABLE IF EXISTS `vwdelegapoder`;

/*!50001 DROP VIEW IF EXISTS `vwdelegapoder` */;
/*!50001 DROP TABLE IF EXISTS `vwdelegapoder` */;

/*!50001 CREATE TABLE  `vwdelegapoder`(
 `id_usu_delega` int(11) ,
 `id_permissao` int(11) ,
 `flg_status_delega` tinyint(1) 
)*/;

/*Table structure for table `vwdocumentop` */

DROP TABLE IF EXISTS `vwdocumentop`;

/*!50001 DROP VIEW IF EXISTS `vwdocumentop` */;
/*!50001 DROP TABLE IF EXISTS `vwdocumentop` */;

/*!50001 CREATE TABLE  `vwdocumentop`(
 `id_documento_pessoa` int(11) ,
 `num_documento` varchar(45) ,
 `dt_emissao` date ,
 `dt_entrada` date ,
 `dt_validade` date ,
 `desc_orgao_emissor` varchar(20) ,
 `id_pais` int(11) ,
 `id_tipo_documento` int(11) ,
 `id_pessoa` int(11) 
)*/;

/*Table structure for table `vwendereco` */

DROP TABLE IF EXISTS `vwendereco`;

/*!50001 DROP VIEW IF EXISTS `vwendereco` */;
/*!50001 DROP TABLE IF EXISTS `vwendereco` */;

/*!50001 CREATE TABLE  `vwendereco`(
 `id_endereco` int(11) ,
 `nom_logradouro` varchar(75) ,
 `desc_tipo_logradouro` varchar(20) ,
 `num_cep` char(9) ,
 `id_bairro` int(11) 
)*/;

/*Table structure for table `vwendereco1` */

DROP TABLE IF EXISTS `vwendereco1`;

/*!50001 DROP VIEW IF EXISTS `vwendereco1` */;
/*!50001 DROP TABLE IF EXISTS `vwendereco1` */;

/*!50001 CREATE TABLE  `vwendereco1`(
 `id_endereco` int(11) ,
 `nom_logradouro` varchar(75) ,
 `desc_tipo_logradouro` varchar(20) ,
 `num_cep` char(9) ,
 `id_bairro` int(11) 
)*/;

/*Table structure for table `vwenderecop` */

DROP TABLE IF EXISTS `vwenderecop`;

/*!50001 DROP VIEW IF EXISTS `vwenderecop` */;
/*!50001 DROP TABLE IF EXISTS `vwenderecop` */;

/*!50001 CREATE TABLE  `vwenderecop`(
 `nom_escolaridade` int(11) 
)*/;

/*Table structure for table `vwescolaridade` */

DROP TABLE IF EXISTS `vwescolaridade`;

/*!50001 DROP VIEW IF EXISTS `vwescolaridade` */;
/*!50001 DROP TABLE IF EXISTS `vwescolaridade` */;

/*!50001 CREATE TABLE  `vwescolaridade`(
 `nom_escolaridade` int(11) 
)*/;

/*Table structure for table `vwfunc` */

DROP TABLE IF EXISTS `vwfunc`;

/*!50001 DROP VIEW IF EXISTS `vwfunc` */;
/*!50001 DROP TABLE IF EXISTS `vwfunc` */;

/*!50001 CREATE TABLE  `vwfunc`(
 `cod` decimal(3,0) ,
 `nome` varchar(20) 
)*/;

/*Table structure for table `vwprimeiraconsulta` */

DROP TABLE IF EXISTS `vwprimeiraconsulta`;

/*!50001 DROP VIEW IF EXISTS `vwprimeiraconsulta` */;
/*!50001 DROP TABLE IF EXISTS `vwprimeiraconsulta` */;

/*!50001 CREATE TABLE  `vwprimeiraconsulta`(
 `num_prontuario` int(11) ,
 `id_prim_consulta` int(11) ,
 `tabag` int(11) ,
 `qt_tabag` int(11) ,
 `tmp_tabag` int(11) ,
 `dt_tabg_parou` int(11) ,
 `etilismo_uso` int(11) ,
 `qt_etilismo_cerveja` int(11) ,
 `qt_etilismo_vinho` int(11) ,
 `qt_etilismo_destilado` int(11) ,
 `dt_etilismo` int(11) ,
 `hist_transf_sangue` int(11) ,
 `hist_transf_sangue_reacao` int(11) ,
 `hist_transf_sangue_reacao_qual` int(11) ,
 `sedentarismo` int(11) ,
 `diabetes` int(11) ,
 `hipertensao` int(11) ,
 `infarto_miocardio` int(11) 
)*/;

/*Table structure for table `vwsistema` */

DROP TABLE IF EXISTS `vwsistema`;

/*!50001 DROP VIEW IF EXISTS `vwsistema` */;
/*!50001 DROP TABLE IF EXISTS `vwsistema` */;

/*!50001 CREATE TABLE  `vwsistema`(
 `id_audt_sistma` int(11) ,
 `nom_tabela_alterada` varchar(50) ,
 `nom_coluna_alterada` varchar(50) ,
 `id_usuario` int(11) ,
 `id_restro_alterado` int(11) ,
 `ds_valor_antigo` varchar(255) ,
 `ds_valor_novo` varchar(255) ,
 `ds_motivo_alteracao` varchar(255) ,
 `dt_alteracao` date 
)*/;

/*Table structure for table `vwtelefone` */

DROP TABLE IF EXISTS `vwtelefone`;

/*!50001 DROP VIEW IF EXISTS `vwtelefone` */;
/*!50001 DROP TABLE IF EXISTS `vwtelefone` */;

/*!50001 CREATE TABLE  `vwtelefone`(
 `id_telefone` int(11) ,
 `id_contato` int(11) 
)*/;

/*Table structure for table `zz` */

DROP TABLE IF EXISTS `zz`;

/*!50001 DROP VIEW IF EXISTS `zz` */;
/*!50001 DROP TABLE IF EXISTS `zz` */;

/*!50001 CREATE TABLE  `zz`(
 `id_zz` int(10) ,
 `nom_zz` varchar(80) ,
 `descr` varchar(200) 
)*/;

/*View structure for view acesso */

/*!50001 DROP TABLE IF EXISTS `acesso` */;
/*!50001 DROP VIEW IF EXISTS `acesso` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`producao`@`%` SQL SECURITY DEFINER VIEW `acesso` AS select `tb_acessa_log`.`id_log` AS `tb_acessa_log`,`tb_acesso_operacao`.`dt_inclusao` AS `tb_acesso_operacao` from (`tb_acessa_log` left join `tb_acesso_operacao` on((`tb_acessa_log`.`id_log` = `tb_acesso_operacao`.`id_acao`))) */;

/*View structure for view audt_sistema1 */

/*!50001 DROP TABLE IF EXISTS `audt_sistema1` */;
/*!50001 DROP VIEW IF EXISTS `audt_sistema1` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`producao`@`%` SQL SECURITY DEFINER VIEW `audt_sistema1` AS select `tb_audt_sistema`.`id_audt_sistma` AS `id_audt_sistma`,`tb_audt_sistema`.`nom_tabela_alterada` AS `nom_tabela_alterada`,`tb_audt_sistema`.`nom_coluna_alterada` AS `nom_coluna_alterada`,`tb_audt_sistema`.`id_usuario` AS `id_usuario`,`tb_audt_sistema`.`id_restro_alterado` AS `id_restro_alterado`,`tb_audt_sistema`.`ds_valor_antigo` AS `ds_valor_antigo`,`tb_audt_sistema`.`ds_valor_novo` AS `ds_valor_novo`,`tb_audt_sistema`.`ds_motivo_alteracao` AS `ds_motivo_alteracao`,`tb_audt_sistema`.`dt_alteracao` AS `dt_alteracao` from `tb_audt_sistema` */;

/*View structure for view bairro1 */

/*!50001 DROP TABLE IF EXISTS `bairro1` */;
/*!50001 DROP VIEW IF EXISTS `bairro1` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`producao`@`%` SQL SECURITY DEFINER VIEW `bairro1` AS select `tb_bairro`.`id_bairro` AS `id_bairro`,`tb_bairro`.`nom_bairro` AS `nom_bairro`,`tb_bairro`.`id_cidade` AS `id_cidade` from `tb_bairro` */;

/*View structure for view cidade1 */

/*!50001 DROP TABLE IF EXISTS `cidade1` */;
/*!50001 DROP VIEW IF EXISTS `cidade1` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`producao`@`%` SQL SECURITY DEFINER VIEW `cidade1` AS select `tb_cidade`.`id_estado` AS `id_estado`,`tb_cidade`.`id_cidade` AS `id_cidade`,`tb_cidade`.`nom_cidade` AS `nom_cidade` from `tb_cidade` where `tb_cidade`.`id_estado` */;

/*View structure for view contatos */

/*!50001 DROP TABLE IF EXISTS `contatos` */;
/*!50001 DROP VIEW IF EXISTS `contatos` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`producao`@`%` SQL SECURITY DEFINER VIEW `contatos` AS select `tb_contato`.`id_contato` AS `id_contato` from `tb_contato` */;

/*View structure for view dt_inclusao */

/*!50001 DROP TABLE IF EXISTS `dt_inclusao` */;
/*!50001 DROP VIEW IF EXISTS `dt_inclusao` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`producao`@`%` SQL SECURITY DEFINER VIEW `dt_inclusao` AS select `tb_papel`.`id_papel` AS `id_papel`,`tb_papel`.`nom_papel` AS `nom_papel`,`tb_papel`.`dt_inclusao` AS `dt_inclusao`,`tb_papel`.`dt_alteracao` AS `dt_alteracao`,`tb_papel`.`flg_status_papel` AS `flg_status_papel` from `tb_papel` where (`tb_papel`.`dt_inclusao` = '20-05-2016') */;

/*View structure for view func */

/*!50001 DROP TABLE IF EXISTS `func` */;
/*!50001 DROP VIEW IF EXISTS `func` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`producao`@`%` SQL SECURITY DEFINER VIEW `func` AS select `funcionario`.`cod` AS `cod`,`funcionario`.`nome` AS `nome` from `funcionario` */;

/*View structure for view genero */

/*!50001 DROP TABLE IF EXISTS `genero` */;
/*!50001 DROP VIEW IF EXISTS `genero` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`producao`@`%` SQL SECURITY DEFINER VIEW `genero` AS select `tb_genero`.`id_genero` AS `id_genero`,`tb_genero`.`nom_genero` AS `nom_genero` from `tb_genero` */;

/*View structure for view id_bairro */

/*!50001 DROP TABLE IF EXISTS `id_bairro` */;
/*!50001 DROP VIEW IF EXISTS `id_bairro` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`producao`@`%` SQL SECURITY DEFINER VIEW `id_bairro` AS select `tb_endereco`.`id_endereco` AS `id_endereco`,`tb_endereco`.`nom_logradouro` AS `nom_logradouro`,`tb_endereco`.`desc_tipo_logradouro` AS `desc_tipo_logradouro`,`tb_endereco`.`num_cep` AS `num_cep`,`tb_endereco`.`id_bairro` AS `id_bairro` from `tb_endereco` where (`tb_endereco`.`nom_logradouro` = 'Sebastiao') */;

/*View structure for view id_cod */

/*!50001 DROP TABLE IF EXISTS `id_cod` */;
/*!50001 DROP VIEW IF EXISTS `id_cod` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`producao`@`%` SQL SECURITY DEFINER VIEW `id_cod` AS select `funcionario`.`cod` AS `cod`,`funcionario`.`nome` AS `nome` from `funcionario` */;

/*View structure for view id_genero */

/*!50001 DROP TABLE IF EXISTS `id_genero` */;
/*!50001 DROP VIEW IF EXISTS `id_genero` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`producao`@`%` SQL SECURITY DEFINER VIEW `id_genero` AS select `tb_genero`.`id_genero` AS `id_genero`,`tb_genero`.`nom_genero` AS `nom_genero` from `tb_genero` */;

/*View structure for view id_papel */

/*!50001 DROP TABLE IF EXISTS `id_papel` */;
/*!50001 DROP VIEW IF EXISTS `id_papel` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`producao`@`%` SQL SECURITY DEFINER VIEW `id_papel` AS select `tb_papel`.`id_papel` AS `id_papel`,`tb_papel`.`nom_papel` AS `nom_papel`,`tb_papel`.`dt_inclusao` AS `dt_inclusao`,`tb_papel`.`dt_alteracao` AS `dt_alteracao`,`tb_papel`.`flg_status_papel` AS `flg_status_papel` from `tb_papel` where (`tb_papel`.`id_papel` = 4) */;

/*View structure for view infolocal */

/*!50001 DROP TABLE IF EXISTS `infolocal` */;
/*!50001 DROP VIEW IF EXISTS `infolocal` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`producao`@`%` SQL SECURITY DEFINER VIEW `infolocal` AS select `tb_cidade`.`nom_cidade` AS `nom_cidade`,`tb_estado`.`nom_uf` AS `nom_uf` from (`tb_cidade` left join `tb_estado` on((`tb_cidade`.`id_cidade` = `tb_estado`.`id_estado`))) */;

/*View structure for view nom_papel */

/*!50001 DROP TABLE IF EXISTS `nom_papel` */;
/*!50001 DROP VIEW IF EXISTS `nom_papel` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`producao`@`%` SQL SECURITY DEFINER VIEW `nom_papel` AS select `tb_papel`.`id_papel` AS `id_papel`,`tb_papel`.`nom_papel` AS `nom_papel`,`tb_papel`.`dt_inclusao` AS `dt_inclusao`,`tb_papel`.`dt_alteracao` AS `dt_alteracao`,`tb_papel`.`flg_status_papel` AS `flg_status_papel` from `tb_papel` where (`tb_papel`.`nom_papel` = 4) */;

/*View structure for view pais */

/*!50001 DROP TABLE IF EXISTS `pais` */;
/*!50001 DROP VIEW IF EXISTS `pais` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`producao`@`%` SQL SECURITY DEFINER VIEW `pais` AS select `tb_pais`.`id_pais` AS `id_pais`,`tb_pais`.`nom_pais` AS `nom_pais`,`tb_pais`.`sgl_pais` AS `sgl_pais`,`tb_pais`.`nom_nacionalidade` AS `nom_nacionalidade` from `tb_pais` */;

/*View structure for view papael1 */

/*!50001 DROP TABLE IF EXISTS `papael1` */;
/*!50001 DROP VIEW IF EXISTS `papael1` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`producao`@`%` SQL SECURITY DEFINER VIEW `papael1` AS select `tb_papel`.`id_papel` AS `id_papel`,`tb_papel`.`nom_papel` AS `nom_papel`,`tb_papel`.`dt_inclusao` AS `dt_inclusao`,`tb_papel`.`dt_alteracao` AS `dt_alteracao`,`tb_papel`.`flg_status_papel` AS `flg_status_papel` from `tb_papel` */;

/*View structure for view permissoes */

/*!50001 DROP TABLE IF EXISTS `permissoes` */;
/*!50001 DROP VIEW IF EXISTS `permissoes` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`producao`@`%` SQL SECURITY DEFINER VIEW `permissoes` AS select `tb_permissoes`.`id_permissao` AS `id_permissao`,`tb_permissoes`.`nom_permissao` AS `nom_permissao` from `tb_permissoes` */;

/*View structure for view pessoa */

/*!50001 DROP TABLE IF EXISTS `pessoa` */;
/*!50001 DROP VIEW IF EXISTS `pessoa` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`producao`@`%` SQL SECURITY DEFINER VIEW `pessoa` AS select `tb_pessoa`.`id_pessoa` AS `id_pessoa`,`tb_pessoa`.`nom_pessoa` AS `nom_pessoa`,`tb_pessoa`.`id_contato` AS `id_contato` from `tb_pessoa` */;

/*View structure for view profissao */

/*!50001 DROP TABLE IF EXISTS `profissao` */;
/*!50001 DROP VIEW IF EXISTS `profissao` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`producao`@`%` SQL SECURITY DEFINER VIEW `profissao` AS select `tb_profissao`.`id_profissao` AS `id_profissao`,`tb_profissao`.`nom_profissao` AS `nom_profissao` from `tb_profissao` */;

/*View structure for view telefone */

/*!50001 DROP TABLE IF EXISTS `telefone` */;
/*!50001 DROP VIEW IF EXISTS `telefone` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`producao`@`%` SQL SECURITY DEFINER VIEW `telefone` AS select `tb_telefone`.`id_telefone` AS `id_telefone`,`tb_telefone`.`num_telefone` AS `num_telefone`,`tb_telefone`.`desc_tipo_telefone` AS `desc_tipo_telefone`,`tb_telefone`.`num_ramal` AS `num_ramal`,`tb_telefone`.`num_ddd` AS `num_ddd` from `tb_telefone` */;

/*View structure for view vwacessa */

/*!50001 DROP TABLE IF EXISTS `vwacessa` */;
/*!50001 DROP VIEW IF EXISTS `vwacessa` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`producao`@`%` SQL SECURITY DEFINER VIEW `vwacessa` AS select `tb_acessa_log`.`dt_hora` AS `dt_hora`,`tb_acessa_log`.`desc_acao` AS `desc_acao`,`tb_acessa_log`.`id_usu_afetado` AS `id_usu_afetado`,`tb_acessa_log`.`id_log` AS `id_log` from `tb_acessa_log` */;

/*View structure for view vwbairro */

/*!50001 DROP TABLE IF EXISTS `vwbairro` */;
/*!50001 DROP VIEW IF EXISTS `vwbairro` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`producao`@`%` SQL SECURITY DEFINER VIEW `vwbairro` AS select `tb_bairro`.`id_bairro` AS `id_bairro`,`tb_bairro`.`nom_bairro` AS `nom_bairro`,`tb_bairro`.`id_cidade` AS `id_cidade` from `tb_bairro` */;

/*View structure for view vwcampus */

/*!50001 DROP TABLE IF EXISTS `vwcampus` */;
/*!50001 DROP VIEW IF EXISTS `vwcampus` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`producao`@`%` SQL SECURITY DEFINER VIEW `vwcampus` AS select `tb_campus`.`id_campus` AS `id_campus`,`tb_campus`.`nom_campus` AS `nom_campus` from `tb_campus` */;

/*View structure for view vwcidade */

/*!50001 DROP TABLE IF EXISTS `vwcidade` */;
/*!50001 DROP VIEW IF EXISTS `vwcidade` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`producao`@`%` SQL SECURITY DEFINER VIEW `vwcidade` AS select `tb_cidade`.`id_estado` AS `id_estado`,`tb_cidade`.`id_cidade` AS `id_cidade`,`tb_cidade`.`nom_cidade` AS `nom_cidade` from `tb_cidade` */;

/*View structure for view vwcidadeestado */

/*!50001 DROP TABLE IF EXISTS `vwcidadeestado` */;
/*!50001 DROP VIEW IF EXISTS `vwcidadeestado` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`producao`@`%` SQL SECURITY DEFINER VIEW `vwcidadeestado` AS select `tb_cidade`.`nom_cidade` AS `nom_cidade`,`tb_estado`.`nom_uf` AS `nom_uf` from (`tb_cidade` join `tb_estado` on((`tb_cidade`.`id_cidade` = `tb_estado`.`id_estado`))) */;

/*View structure for view vwcontato */

/*!50001 DROP TABLE IF EXISTS `vwcontato` */;
/*!50001 DROP VIEW IF EXISTS `vwcontato` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`producao`@`%` SQL SECURITY DEFINER VIEW `vwcontato` AS select `tb_contato`.`id_contato` AS `id_contato`,`tb_contato`.`nom_recado` AS `nom_recado`,`tb_contato`.`desc_email` AS `desc_email` from `tb_contato` */;

/*View structure for view vwcritica */

/*!50001 DROP TABLE IF EXISTS `vwcritica` */;
/*!50001 DROP VIEW IF EXISTS `vwcritica` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`producao`@`%` SQL SECURITY DEFINER VIEW `vwcritica` AS select `tb_critica`.`id_erro` AS `id_erro`,`tb_critica`.`desc_erro` AS `desc_erro` from `tb_critica` */;

/*View structure for view vwdelega */

/*!50001 DROP TABLE IF EXISTS `vwdelega` */;
/*!50001 DROP VIEW IF EXISTS `vwdelega` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`producao`@`%` SQL SECURITY DEFINER VIEW `vwdelega` AS select `tb_delega_poder`.`id_usu_delega` AS `id_usu_delega`,`tb_delega_poder`.`id_permissao` AS `id_permissao`,`tb_delega_poder`.`flg_status_delega` AS `flg_status_delega` from `tb_delega_poder` */;

/*View structure for view vwdelegapoder */

/*!50001 DROP TABLE IF EXISTS `vwdelegapoder` */;
/*!50001 DROP VIEW IF EXISTS `vwdelegapoder` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`producao`@`%` SQL SECURITY DEFINER VIEW `vwdelegapoder` AS select `tb_delega_poder`.`id_usu_delega` AS `id_usu_delega`,`tb_delega_poder`.`id_permissao` AS `id_permissao`,`tb_delega_poder`.`flg_status_delega` AS `flg_status_delega` from `tb_delega_poder` */;

/*View structure for view vwdocumentop */

/*!50001 DROP TABLE IF EXISTS `vwdocumentop` */;
/*!50001 DROP VIEW IF EXISTS `vwdocumentop` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`producao`@`%` SQL SECURITY DEFINER VIEW `vwdocumentop` AS select `tb_documento_pessoa`.`id_documento_pessoa` AS `id_documento_pessoa`,`tb_documento_pessoa`.`num_documento` AS `num_documento`,`tb_documento_pessoa`.`dt_emissao` AS `dt_emissao`,`tb_documento_pessoa`.`dt_entrada` AS `dt_entrada`,`tb_documento_pessoa`.`dt_validade` AS `dt_validade`,`tb_documento_pessoa`.`desc_orgao_emissor` AS `desc_orgao_emissor`,`tb_documento_pessoa`.`id_pais` AS `id_pais`,`tb_documento_pessoa`.`id_tipo_documento` AS `id_tipo_documento`,`tb_documento_pessoa`.`id_pessoa` AS `id_pessoa` from `tb_documento_pessoa` */;

/*View structure for view vwendereco */

/*!50001 DROP TABLE IF EXISTS `vwendereco` */;
/*!50001 DROP VIEW IF EXISTS `vwendereco` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`producao`@`%` SQL SECURITY DEFINER VIEW `vwendereco` AS select `tb_endereco`.`id_endereco` AS `id_endereco`,`tb_endereco`.`nom_logradouro` AS `nom_logradouro`,`tb_endereco`.`desc_tipo_logradouro` AS `desc_tipo_logradouro`,`tb_endereco`.`num_cep` AS `num_cep`,`tb_endereco`.`id_bairro` AS `id_bairro` from `tb_endereco` */;

/*View structure for view vwendereco1 */

/*!50001 DROP TABLE IF EXISTS `vwendereco1` */;
/*!50001 DROP VIEW IF EXISTS `vwendereco1` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`producao`@`%` SQL SECURITY DEFINER VIEW `vwendereco1` AS select `tb_endereco`.`id_endereco` AS `id_endereco`,`tb_endereco`.`nom_logradouro` AS `nom_logradouro`,`tb_endereco`.`desc_tipo_logradouro` AS `desc_tipo_logradouro`,`tb_endereco`.`num_cep` AS `num_cep`,`tb_endereco`.`id_bairro` AS `id_bairro` from `tb_endereco` */;

/*View structure for view vwenderecop */

/*!50001 DROP TABLE IF EXISTS `vwenderecop` */;
/*!50001 DROP VIEW IF EXISTS `vwenderecop` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`producao`@`%` SQL SECURITY DEFINER VIEW `vwenderecop` AS select `tb_escolaridade`.`id_escolaridade` AS `nom_escolaridade` from `tb_escolaridade` */;

/*View structure for view vwescolaridade */

/*!50001 DROP TABLE IF EXISTS `vwescolaridade` */;
/*!50001 DROP VIEW IF EXISTS `vwescolaridade` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`producao`@`%` SQL SECURITY DEFINER VIEW `vwescolaridade` AS select `tb_escolaridade`.`id_escolaridade` AS `nom_escolaridade` from `tb_escolaridade` */;

/*View structure for view vwfunc */

/*!50001 DROP TABLE IF EXISTS `vwfunc` */;
/*!50001 DROP VIEW IF EXISTS `vwfunc` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`producao`@`%` SQL SECURITY DEFINER VIEW `vwfunc` AS select `funcionario`.`cod` AS `cod`,`funcionario`.`nome` AS `nome` from `funcionario` */;

/*View structure for view vwprimeiraconsulta */

/*!50001 DROP TABLE IF EXISTS `vwprimeiraconsulta` */;
/*!50001 DROP VIEW IF EXISTS `vwprimeiraconsulta` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`producao`@`%` SQL SECURITY DEFINER VIEW `vwprimeiraconsulta` AS select `tb_dados_prim_consulta`.`num_prontuario` AS `num_prontuario`,`tb_dados_prim_consulta`.`id_prim_consulta` AS `id_prim_consulta`,`tb_dados_prim_consulta`.`tabag` AS `tabag`,`tb_dados_prim_consulta`.`qt_tabag` AS `qt_tabag`,`tb_dados_prim_consulta`.`tmp_tabag` AS `tmp_tabag`,`tb_dados_prim_consulta`.`dt_tabg_parou` AS `dt_tabg_parou`,`tb_dados_prim_consulta`.`etilismo_uso` AS `etilismo_uso`,`tb_dados_prim_consulta`.`qt_etilismo_cerveja` AS `qt_etilismo_cerveja`,`tb_dados_prim_consulta`.`qt_etilismo_vinho` AS `qt_etilismo_vinho`,`tb_dados_prim_consulta`.`qt_etilismo_destilado` AS `qt_etilismo_destilado`,`tb_dados_prim_consulta`.`dt_etilismo` AS `dt_etilismo`,`tb_dados_prim_consulta`.`hist_transf_sangue` AS `hist_transf_sangue`,`tb_dados_prim_consulta`.`hist_transf_sangue_reacao` AS `hist_transf_sangue_reacao`,`tb_dados_prim_consulta`.`hist_transf_sangue_reacao_qual` AS `hist_transf_sangue_reacao_qual`,`tb_dados_prim_consulta`.`sedentarismo` AS `sedentarismo`,`tb_dados_prim_consulta`.`diabetes` AS `diabetes`,`tb_dados_prim_consulta`.`hipertensao` AS `hipertensao`,`tb_dados_prim_consulta`.`infarto_miocardio` AS `infarto_miocardio` from `tb_dados_prim_consulta` */;

/*View structure for view vwsistema */

/*!50001 DROP TABLE IF EXISTS `vwsistema` */;
/*!50001 DROP VIEW IF EXISTS `vwsistema` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`producao`@`%` SQL SECURITY DEFINER VIEW `vwsistema` AS select `tb_audt_sistema`.`id_audt_sistma` AS `id_audt_sistma`,`tb_audt_sistema`.`nom_tabela_alterada` AS `nom_tabela_alterada`,`tb_audt_sistema`.`nom_coluna_alterada` AS `nom_coluna_alterada`,`tb_audt_sistema`.`id_usuario` AS `id_usuario`,`tb_audt_sistema`.`id_restro_alterado` AS `id_restro_alterado`,`tb_audt_sistema`.`ds_valor_antigo` AS `ds_valor_antigo`,`tb_audt_sistema`.`ds_valor_novo` AS `ds_valor_novo`,`tb_audt_sistema`.`ds_motivo_alteracao` AS `ds_motivo_alteracao`,`tb_audt_sistema`.`dt_alteracao` AS `dt_alteracao` from `tb_audt_sistema` */;

/*View structure for view vwtelefone */

/*!50001 DROP TABLE IF EXISTS `vwtelefone` */;
/*!50001 DROP VIEW IF EXISTS `vwtelefone` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`producao`@`%` SQL SECURITY DEFINER VIEW `vwtelefone` AS select `tb_contato_telefone`.`id_telefone` AS `id_telefone`,`tb_contato_telefone`.`id_contato` AS `id_contato` from `tb_contato_telefone` */;

/*View structure for view zz */

/*!50001 DROP TABLE IF EXISTS `zz` */;
/*!50001 DROP VIEW IF EXISTS `zz` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`producao`@`%` SQL SECURITY DEFINER VIEW `zz` AS select `tb_zz`.`id_zz` AS `id_zz`,`tb_zz`.`nom_zz` AS `nom_zz`,`tb_zz`.`descr` AS `descr` from `tb_zz` */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
