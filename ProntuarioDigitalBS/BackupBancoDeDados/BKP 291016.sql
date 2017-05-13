/*
SQLyog Community v9.61 
MySQL - 5.1.33-community : Database - pd_digital_novast
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`pd_digital_novast` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `pd_digital_novast`;

/*Table structure for table `combo` */

DROP TABLE IF EXISTS `combo`;

CREATE TABLE `combo` (
  `UF` char(2) NOT NULL,
  `Naturalidade` varchar(50) NOT NULL,
  `Profissao` varchar(10) NOT NULL,
  `Escolaridade` varchar(30) NOT NULL,
  `GrauParentesco` varchar(30) NOT NULL,
  `Campus` varchar(30) NOT NULL,
  `Religiao` varchar(10) NOT NULL,
  `FaixaRendaFamiliar` varchar(30) NOT NULL,
  `Etnia` varchar(10) NOT NULL,
  `EstadoCivil` varchar(10) NOT NULL,
  `TipoDocumento` varchar(10) NOT NULL,
  `Papel` varchar(50) NOT NULL,
  `Genero` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `combo` */

/*Table structure for table `endereco` */

DROP TABLE IF EXISTS `endereco`;

CREATE TABLE `endereco` (
  `id_pessoa` int(10) NOT NULL,
  `CEP` varchar(10) NOT NULL,
  `Nacionalidade` varchar(50) NOT NULL,
  `UF` char(2) NOT NULL,
  `Cidade` varchar(20) NOT NULL,
  KEY `fk_pessoa_endereco_id_pessoa` (`id_pessoa`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `endereco` */

/*Table structure for table `log_pd` */

DROP TABLE IF EXISTS `log_pd`;

CREATE TABLE `log_pd` (
  `CPF` int(11) NOT NULL,
  `DataHoraMovimento` date NOT NULL,
  `Descricao` varchar(50) NOT NULL,
  `Id_pessoa` decimal(10,0) NOT NULL,
  KEY `CPF` (`CPF`),
  CONSTRAINT `log_pd_ibfk_1` FOREIGN KEY (`CPF`) REFERENCES `pessoa_dbv` (`CPF`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `log_pd` */

/*Table structure for table `pessoa_dbv` */

DROP TABLE IF EXISTS `pessoa_dbv`;

CREATE TABLE `pessoa_dbv` (
  `id_pessoa` int(10) NOT NULL AUTO_INCREMENT,
  `Nome_Pessoa` varchar(70) NOT NULL,
  `Nome_Social` varchar(70) DEFAULT NULL,
  `CPF` int(70) DEFAULT NULL,
  `RG` varchar(12) NOT NULL,
  `Passaporte` varchar(9) DEFAULT NULL,
  `CNS` varchar(25) DEFAULT NULL,
  `Papel` varchar(30) DEFAULT NULL,
  `Data_Nascimento` date DEFAULT NULL,
  `Endereço` varchar(90) NOT NULL,
  `Telefone` varchar(20) NOT NULL,
  `Telefone_Comercial` varchar(20) DEFAULT NULL,
  `Tel_Cel` varchar(20) DEFAULT NULL,
  `Email` varchar(30) DEFAULT NULL,
  `Estado_Civil` varchar(10) NOT NULL,
  `Genero` char(1) NOT NULL,
  `Etnia` varchar(10) DEFAULT NULL,
  `Escolaridade` varchar(30) NOT NULL,
  `Nacionalidade` varchar(50) NOT NULL,
  `Profissao` varchar(20) DEFAULT NULL,
  `Nome_Mae` varchar(70) NOT NULL,
  `Nome_Pai` varchar(70) DEFAULT NULL,
  `Responsavel` varchar(70) NOT NULL,
  `Quantidade_Filhos` decimal(2,0) DEFAULT NULL,
  `Religiao` varchar(10) DEFAULT NULL,
  `Renda_Familiar` varchar(30) DEFAULT NULL,
  `Num_Prontuario` varchar(20) NOT NULL,
  `Num_Matricula_RA` decimal(11,0) DEFAULT NULL,
  `Campus` varchar(30) DEFAULT NULL,
  `DataCriacao` date DEFAULT NULL,
  `DataAlteracao` date DEFAULT NULL,
  PRIMARY KEY (`id_pessoa`),
  UNIQUE KEY `CPF` (`CPF`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `pessoa_dbv` */

insert  into `pessoa_dbv`(`id_pessoa`,`Nome_Pessoa`,`Nome_Social`,`CPF`,`RG`,`Passaporte`,`CNS`,`Papel`,`Data_Nascimento`,`Endereço`,`Telefone`,`Telefone_Comercial`,`Tel_Cel`,`Email`,`Estado_Civil`,`Genero`,`Etnia`,`Escolaridade`,`Nacionalidade`,`Profissao`,`Nome_Mae`,`Nome_Pai`,`Responsavel`,`Quantidade_Filhos`,`Religiao`,`Renda_Familiar`,`Num_Prontuario`,`Num_Matricula_RA`,`Campus`,`DataCriacao`,`DataAlteracao`) values (1,'Iago Breno Barros','',946309,'19.793.536-9','930873232','não tem','','0000-00-00','Avenida Coronel Marcos Konder','(47) 2902-6567','(47) 2902-6568','(47) 9991-1279','iago_breno@solucao.adm.br','solteiro','M','Negro','Graduado','brasieliro','professor','Josefina Breno Barros','Amtonio Breno Barros','Josefina Breno Barros','0','Cristão Pr','1.500','1','0','Vergueiro','2016-10-13','2016-10-28'),(2,'Breno Daniel Carvalho','',828764,'19.882.085-9','930883232','não tem','','0000-00-00','Avenida Maria Marcos Konder','(89) 290-6567','(89) 2923-6568','(47) 9991-1279','breno-daniel99@sociedadeweb.co','Casado','M','Pardo','Graduado','brasieliro','Engenheiro','Maria Daniel Carvalho','José Daniel Carvalho','Maria Daniel Carvalho','3','Cristão Pr','7.500','2','0','Vergueiro','2016-10-13','2016-10-28'),(3,'Francisco da Silva','Dr Francisco Silva',2147483647,'03204056',NULL,NULL,'Clinico Geral','0000-00-00','Rua Falsa 40','50505050','32444000','999999999','medicosilva@propaganda.com.br','Casado','M','Indigenas','DOUTORADO,','Brasileira','Cardiologista','Carla Maria Silva','Marcelo Silva','Marcelo Silva','2','catolica','mais que 2','0','12345678910','Memorial','0000-00-00','0000-00-00');

/*Table structure for table `privilegio` */

DROP TABLE IF EXISTS `privilegio`;

CREATE TABLE `privilegio` (
  `acesso` int(3) NOT NULL,
  `cpf` decimal(11,0) NOT NULL,
  `id_pessoa` int(10) NOT NULL,
  `Funcao_cadastro` int(3) NOT NULL,
  `Funcao_ADM` int(3) NOT NULL,
  `Funcao_manutencao` int(3) NOT NULL,
  `Funcao_leitura` int(3) NOT NULL,
  PRIMARY KEY (`acesso`),
  KEY `fk_pessoa_privilegio_id_pessoa` (`id_pessoa`),
  KEY `fk_pessoa_privilegio_cpf` (`cpf`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `privilegio` */

/*Table structure for table `prontuario` */

DROP TABLE IF EXISTS `prontuario`;

CREATE TABLE `prontuario` (
  `id_prontuario` int(20) NOT NULL AUTO_INCREMENT,
  `cpf` decimal(11,0) NOT NULL,
  `id_pessoa` int(10) NOT NULL,
  `Queixa_principal` varchar(50) DEFAULT NULL,
  `Historico_Patologico` varchar(50) DEFAULT NULL,
  `Historico_Familiar` varchar(50) DEFAULT NULL,
  `Historico_social` varchar(50) DEFAULT NULL,
  `Consulta` varchar(21) DEFAULT NULL,
  `Exames` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_prontuario`),
  UNIQUE KEY `cpf` (`cpf`),
  KEY `fk_pessoa_prontuario_id_pessoa` (`id_pessoa`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `prontuario` */

/*Table structure for table `usuario` */

DROP TABLE IF EXISTS `usuario`;

CREATE TABLE `usuario` (
  `id_pessoa` int(10) NOT NULL,
  `Login` varchar(12) NOT NULL,
  `Senha` varchar(50) NOT NULL,
  `PrimeiroAcesso` bit(1) NOT NULL,
  `DataUltimoLogin` date DEFAULT NULL,
  `SituacaoSistema` bit(1) NOT NULL,
  KEY `fk_id_pessoa` (`id_pessoa`),
  CONSTRAINT `fk_id_pessoa` FOREIGN KEY (`id_pessoa`) REFERENCES `pessoa_dbv` (`id_pessoa`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `usuario` */

insert  into `usuario`(`id_pessoa`,`Login`,`Senha`,`PrimeiroAcesso`,`DataUltimoLogin`,`SituacaoSistema`) values (3,'Francisco','1234','\0',NULL,'');

/* Procedure structure for procedure `CONSULTA_PACIENTE` */

/*!50003 DROP PROCEDURE IF EXISTS  `CONSULTA_PACIENTE` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`jefferson`@`%` PROCEDURE `CONSULTA_PACIENTE`(IN Nome_Pessoa VARCHAR(40))
BEGIN
  SELECT Nome_Pessoa FROM pessoa_dbv;
  
END */$$
DELIMITER ;

/* Procedure structure for procedure `contar_sexo` */

/*!50003 DROP PROCEDURE IF EXISTS  `contar_sexo` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`willian`@`%` PROCEDURE `contar_sexo`(IN opcao character)
BEGIN
    IF opcao = 'F' or 'f' THEN
        SELECT Genero,Count(*) FROM pessoa_dbv where Genero = 'F';
    ELSE
        IF opcao = 'M' or 'f' THEN
          SELECT Genero,COUNT(*)  FROM pessoa_dbv WHERE Genero = 'M';
        ELSE
          SELECT Genero,count(*) FROM pessoa_dbv;
        END IF;
    END IF;
  END */$$
DELIMITER ;

/* Procedure structure for procedure `selecionar_sexo` */

/*!50003 DROP PROCEDURE IF EXISTS  `selecionar_sexo` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`willian`@`%` PROCEDURE `selecionar_sexo`(IN opcao character)
BEGIN
    IF opcao = 'F' or 'f' THEN
        SELECT * FROM pessoa_dbv WHERE Genero = 'F';
    ELSE
        IF opcao = 'M' or 'f' THEN
          SELECT * FROM pessoa_dbv WHERE Genero = 'M';
        ELSE
          SELECT * FROM pessoa_dbv;
        END IF;
    END IF;
  END */$$
DELIMITER ;

/* Procedure structure for procedure `TESTE` */

/*!50003 DROP PROCEDURE IF EXISTS  `TESTE` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`jefferson`@`%` PROCEDURE `TESTE`()
BEGIN
	
END */$$
DELIMITER ;

/*Table structure for table `pessoa_view` */

DROP TABLE IF EXISTS `pessoa_view`;

/*!50001 DROP VIEW IF EXISTS `pessoa_view` */;
/*!50001 DROP TABLE IF EXISTS `pessoa_view` */;

/*!50001 CREATE TABLE  `pessoa_view`(
 `RG` varchar(12) ,
 `Nome_Pessoa` varchar(70) ,
 `Endereço` varchar(90) ,
 `CPF` int(70) ,
 `Nacionalidade` varchar(50) 
)*/;

/*View structure for view pessoa_view */

/*!50001 DROP TABLE IF EXISTS `pessoa_view` */;
/*!50001 DROP VIEW IF EXISTS `pessoa_view` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`producao`@`%` SQL SECURITY DEFINER VIEW `pessoa_view` AS select `pessoa_dbv`.`RG` AS `RG`,`pessoa_dbv`.`Nome_Pessoa` AS `Nome_Pessoa`,`pessoa_dbv`.`Endereço` AS `Endereço`,`pessoa_dbv`.`CPF` AS `CPF`,`pessoa_dbv`.`Nacionalidade` AS `Nacionalidade` from `pessoa_dbv` where (`pessoa_dbv`.`Genero` = 'M') */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
