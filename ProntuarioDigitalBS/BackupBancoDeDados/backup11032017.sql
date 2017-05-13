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

/*Table structure for table `nacionalidade` */

DROP TABLE IF EXISTS `nacionalidade`;

CREATE TABLE `nacionalidade` (
  `Pais` varchar(30) NOT NULL,
  `Nacionalidade` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `nacionalidade` */

insert  into `nacionalidade`(`Pais`,`Nacionalidade`) values ('Afeganistão',''),('África do Sul',''),('Akrotiri',''),('Albânia',''),('Alemanha',''),('Andorra',''),('Angola',''),('Anguila',''),('Antárctida',''),('Antígua e Barbuda',''),('Antilhas Neerlandesas',''),('Arábia Saudita',''),('Arctic Ocean',''),('Argélia',''),('Argentina',''),('Arménia',''),('Aruba',''),('Ashmore and Cartier Islands',''),('Atlantic Ocean',''),('Austrália',''),('Áustria',''),('Azerbaijão',''),('Baamas',''),('Bangladeche',''),('Barbados',''),('Barém',''),('Bélgica',''),('Belize',''),('Benim',''),('Bermudas',''),('Bielorrússia',''),('Birmânia',''),('Bolívia',''),('Bósnia e Herzegovina',''),('Botsuana',''),('Brasil',''),('Brunei',''),('Bulgária',''),('Burquina Faso',''),('Burúndi',''),('Butão',''),('Cabo Verde',''),('Camarões',''),('Camboja',''),('Canadá',''),('Catar',''),('Cazaquistão',''),('Chade',''),('Chile',''),('China',''),('Chipre',''),('Clipperton Island',''),('Colômbia',''),('Comores',''),('Congo-Brazzaville',''),('Congo-Kinshasa',''),('Coral Sea Islands',''),('Coreia do Norte',''),('Coreia do Sul',''),('Costa do Marfim',''),('Costa Rica',''),('Croácia',''),('Cuba',''),('Dhekelia',''),('Dinamarca',''),('Domínica',''),('Egipto',''),('Emiratos Árabes Unidos',''),('Equador',''),('Eritreia',''),('Eslováquia',''),('Eslovénia',''),('Espanha',''),('Estados Unidos',''),('Estónia',''),('Etiópia',''),('Faroé',''),('Fiji',''),('Filipinas',''),('Finlândia',''),('França',''),('Gabão',''),('Gâmbia',''),('Gana',''),('Gaza Strip',''),('Geórgia',''),('Geórgia do Sul e Sandwich do S',''),('Gibraltar',''),('Granada',''),('Grécia',''),('Gronelândia',''),('Guame',''),('Guatemala',''),('Guernsey',''),('Guiana',''),('Guiné',''),('Guiné Equatorial',''),('Guiné-Bissau',''),('Haiti',''),('Honduras',''),('Hong Kong',''),('Hungria',''),('Iémen',''),('Ilha Bouvet',''),('Ilha do Natal',''),('Ilha Norfolk',''),('Ilhas Caimão',''),('Ilhas Cook',''),('Ilhas dos Cocos',''),('Ilhas Falkland',''),('Ilhas Heard e McDonald',''),('Ilhas Marshall',''),('Ilhas Salomão',''),('Ilhas Turcas e Caicos',''),('Ilhas Virgens Americanas',''),('Ilhas Virgens Britânicas',''),('Índia',''),('Indian Ocean',''),('Indonésia',''),('Irão',''),('Iraque',''),('Irlanda',''),('Islândia',''),('Israel',''),('Itália',''),('Jamaica',''),('Jan Mayen',''),('Japão',''),('Jersey',''),('Jibuti',''),('Jordânia',''),('Kuwait',''),('Laos',''),('Lesoto',''),('Letónia',''),('Líbano',''),('Libéria',''),('Líbia',''),('Listenstaine',''),('Lituânia',''),('Luxemburgo',''),('Macau',''),('Macedónia',''),('Madagáscar',''),('Malásia',''),('Malávi',''),('Maldivas',''),('Mali',''),('Malta',''),('Man  Isle of',''),('Marianas do Norte',''),('Marrocos',''),('Maurícia',''),('Mauritânia',''),('Mayotte',''),('México',''),('Micronésia',''),('Moçambique',''),('Moldávia',''),('Mónaco',''),('Mongólia',''),('Monserrate',''),('Montenegro',''),('Mundo',''),('Namíbia',''),('Nauru',''),('Navassa Island',''),('Nepal',''),('Nicarágua',''),('Níger',''),('Nigéria',''),('Niue',''),('Noruega',''),('Nova Caledónia',''),('Nova Zelândia',''),('Omã',''),('Pacific Ocean',''),('Países Baixos',''),('Palau',''),('Panamá',''),('Papua-Nova Guiné',''),('Paquistão',''),('Paracel Islands',''),('Paraguai',''),('Peru',''),('Pitcairn',''),('Polinésia Francesa',''),('Polónia',''),('Porto Rico',''),('Portugal',''),('Quénia',''),('Quirguizistão',''),('Quiribáti',''),('Reino Unido',''),('República Centro-Africana',''),('República Checa',''),('República Dominicana',''),('Roménia',''),('Ruanda',''),('Rússia',''),('Salvador',''),('Samoa',''),('Samoa Americana',''),('Santa Helena',''),('Santa Lúcia',''),('São Cristóvão e Neves',''),('São Marinho',''),('São Pedro e Miquelon',''),('São Tomé e Príncipe',''),('São Vicente e Granadinas',''),('Sara Ocidental',''),('Seicheles',''),('Senegal',''),('Serra Leoa',''),('Sérvia',''),('Singapura',''),('Síria',''),('Somália',''),('Southern Ocean',''),('Spratly Islands',''),('Sri Lanca',''),('Suazilândia',''),('Sudão',''),('Suécia',''),('Suíça',''),('Suriname',''),('Svalbard e Jan Mayen',''),('Tailândia',''),('Taiwan',''),('Tajiquistão',''),('Tanzânia',''),('Território Britânico Oceano Ín',''),('Territórios Austrais Franceses',''),('Timor Leste',''),('Togo',''),('Tokelau',''),('Tonga',''),('Trindade e Tobago',''),('Tunísia',''),('Turquemenistão',''),('Turquia',''),('Tuvalu',''),('Ucrânia',''),('Uganda',''),('União Europeia',''),('Uruguai',''),('Usbequistão',''),('Vanuatu',''),('Vaticano',''),('Venezuela',''),('Vietname',''),('Wake Island',''),('Wallis e Futuna',''),('West Bank',''),('Zâmbia',''),('Zimbabué','');

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
  `id_pessoa` int(10) NOT NULL,
  `Nivel_de_Acesso` int(1) NOT NULL,
  KEY `id_pessoa_fk` (`id_pessoa`),
  CONSTRAINT `id_pessoa_fk` FOREIGN KEY (`id_pessoa`) REFERENCES `pessoa_dbv` (`id_pessoa`)
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

insert  into `usuario`(`id_pessoa`,`Login`,`Senha`,`PrimeiroAcesso`,`DataUltimoLogin`,`SituacaoSistema`) values (3,'Francisco','1234','\0',NULL,''),(3,'Francisco','1234','\0',NULL,'');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
