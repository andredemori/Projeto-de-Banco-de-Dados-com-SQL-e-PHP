-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 11-Nov-2018 às 22:13
-- Versão do servidor: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hospital`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `insert_medicamento`(in cod_medicamento int(10), in nome_medicamento varchar(240), in dose varchar(240))
begin if (nome_medicamento != "")then insert into medicamentos(cod_medicamento, nome_medicamento, dose) values (cod_medicamento, nome_medicamento, dose); else select "Erro"; end if; end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insert_medicamentos`(in id_medicamento int(10), in cod_medimento int(10), nome_medicamento varchar(240), in dose varchar(240))
begin if (nome_medicamento != "") then insert into medicamentos(id_medicamento, cod_medicamento, nome_medicamento, dose) values (id_medicamento, cod_medicamento, nome_medicamento, dose); else select "Erro"; end if; end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insert_medicamentos_`(in id_medicamento int(10), in cod_medicamento int(10), nome_medicamento varchar(240), in dose varchar(240))
begin if (nome_medicamento != "") then insert into medicamentos(id_medicamento, cod_medicamento, nome_medicamento, dose) values (id_medicamento, cod_medicamento, nome_medicamento, dose); else select "Erro"; end if; end$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `enfermeiras`
--

CREATE TABLE IF NOT EXISTS `enfermeiras` (
  `nome_enfermeira` varchar(240) NOT NULL,
  `sobrenome_enfermeira` varchar(240) NOT NULL,
  `codigo_enfermeira` int(11) NOT NULL,
  `iplantao` time NOT NULL,
  `fplantao` time NOT NULL,
  `medico_responsavel` varchar(240) NOT NULL,
  PRIMARY KEY (`codigo_enfermeira`),
  KEY `medico_responsavel` (`medico_responsavel`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `enfermeiras`
--

INSERT INTO `enfermeiras` (`nome_enfermeira`, `sobrenome_enfermeira`, `codigo_enfermeira`, `iplantao`, `fplantao`, `medico_responsavel`) VALUES
('katia', 'abreu', 10, '02:00:00', '13:00:00', 'Muniz Demori');

-- --------------------------------------------------------

--
-- Estrutura da tabela `estagiarios`
--

CREATE TABLE IF NOT EXISTS `estagiarios` (
  `nome_estagiario` varchar(240) NOT NULL,
  `sobrenome_estagiario` varchar(240) NOT NULL,
  `cpf_estagiario` int(11) NOT NULL,
  `faculdade` varchar(240) NOT NULL,
  `data_de_nascimento` varchar(10) NOT NULL,
  `medico_responsavel` varchar(240) NOT NULL,
  PRIMARY KEY (`cpf_estagiario`),
  KEY `medico_responsavel` (`medico_responsavel`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `estagiarios`
--

INSERT INTO `estagiarios` (`nome_estagiario`, `sobrenome_estagiario`, `cpf_estagiario`, `faculdade`, `data_de_nascimento`, `medico_responsavel`) VALUES
('André', 'Demori', 87654, 'med', '04/03/1996', 'Muniz Demori');

-- --------------------------------------------------------

--
-- Estrutura da tabela `medicamentos`
--

CREATE TABLE IF NOT EXISTS `medicamentos` (
  `id_medicamento` int(10) DEFAULT NULL,
  `cod_medicamento` int(10) NOT NULL,
  `nome_medicamento` varchar(240) NOT NULL,
  `dose` varchar(240) NOT NULL,
  PRIMARY KEY (`cod_medicamento`),
  UNIQUE KEY `nome_medicamento` (`nome_medicamento`),
  UNIQUE KEY `id_medicamento` (`id_medicamento`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `medicamentos`
--

INSERT INTO `medicamentos` (`id_medicamento`, `cod_medicamento`, `nome_medicamento`, `dose`) VALUES
(0, 0, 'null', 'null'),
(2, 2, 'Ibuprofeno', '20ml'),
(3, 3, 'Ranitidina', '10ml'),
(4, 4, 'Domperidona', '30mg'),
(5, 5, 'Paracetamol', '10mg'),
(6, 6, 'Rivotril', '10ml'),
(7, 7, 'omeprazol', '20ml'),
(8, 8, 'abc', '20ml'),
(9, 9, 'neosoro', '5ml'),
(10, 10, 'sorine', '5ml'),
(11, 11, 'tarja preta', '5ml'),
(12, 12, 'benegripe', '5ml'),
(13, 13, 'sibutramina', '5ml');

-- --------------------------------------------------------

--
-- Estrutura da tabela `medicos`
--

CREATE TABLE IF NOT EXISTS `medicos` (
  `nomemedico` varchar(240) NOT NULL,
  `sobrenomemedico` varchar(240) NOT NULL,
  `mail` varchar(240) NOT NULL,
  `especialidade` varchar(240) NOT NULL,
  `iplantao` time(6) NOT NULL,
  `fplantao` time(6) NOT NULL,
  PRIMARY KEY (`sobrenomemedico`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `medicos`
--

INSERT INTO `medicos` (`nomemedico`, `sobrenomemedico`, `mail`, `especialidade`, `iplantao`, `fplantao`) VALUES
('Andre', 'Muniz Demori', 'andre_demori@hotmail.com', 'Cardiologista', '03:00:00.000000', '14:00:00.000000'),
('Marcia', 'Soares', 'ms@gmail.com', 'Pediatria', '02:00:00.000000', '13:00:00.000000');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pacientes`
--

CREATE TABLE IF NOT EXISTS `pacientes` (
  `cpf_paciente` bigint(20) NOT NULL,
  `nome_paciente` varchar(240) NOT NULL,
  `sobrenome_paciente` varchar(240) NOT NULL,
  `data_paciente` varchar(10) NOT NULL,
  `endereco_completo` varchar(240) NOT NULL,
  `medico_responsavel` varchar(240) NOT NULL,
  `enfermeira_responsavel` int(11) NOT NULL,
  `medicamento` int(10) DEFAULT NULL,
  `medicamento_2` int(10) DEFAULT NULL,
  `medicamento_3` int(10) DEFAULT NULL,
  `medicamento_4` int(10) DEFAULT NULL,
  `medicamento_5` int(10) DEFAULT NULL,
  PRIMARY KEY (`cpf_paciente`),
  KEY `medico_responsavel` (`medico_responsavel`),
  KEY `enfermeira_responsavel` (`enfermeira_responsavel`),
  KEY `medicamento` (`medicamento`),
  KEY `medicamento_2` (`medicamento_2`),
  KEY `medicamento_3` (`medicamento_3`),
  KEY `medicamento_4` (`medicamento_4`),
  KEY `medicamento_5` (`medicamento_5`),
  KEY `medicamento_3_2` (`medicamento_3`),
  KEY `medicamento_4_2` (`medicamento_4`),
  KEY `medicamento_5_2` (`medicamento_5`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pacientes`
--

INSERT INTO `pacientes` (`cpf_paciente`, `nome_paciente`, `sobrenome_paciente`, `data_paciente`, `endereco_completo`, `medico_responsavel`, `enfermeira_responsavel`, `medicamento`, `medicamento_2`, `medicamento_3`, `medicamento_4`, `medicamento_5`) VALUES
(2147483, 'tiago', 'sousa', '04031987', 'Rua Suecia', 'Muniz Demori', 10, 2, 3, 4, 6, 8),
(11456345676, 'gustavo', 'abreu', '04021986', 'Rua Lopes Trovão', 'Soares', 10, 0, 0, 0, 0, 0),
(23456567876, 'tiago', 'fraga', '04051945', 'Rua Castor', 'Muniz Demori', 10, NULL, NULL, NULL, NULL, NULL),
(98789556765, 'carla', 'miranda', '04031987', 'Rua Laranjeiras', 'Muniz Demori', 10, NULL, NULL, NULL, NULL, NULL);

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `enfermeiras`
--
ALTER TABLE `enfermeiras`
  ADD CONSTRAINT `medico_resp2` FOREIGN KEY (`medico_responsavel`) REFERENCES `medicos` (`sobrenomemedico`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `estagiarios`
--
ALTER TABLE `estagiarios`
  ADD CONSTRAINT `medico_resp3` FOREIGN KEY (`medico_responsavel`) REFERENCES `medicos` (`sobrenomemedico`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `pacientes`
--
ALTER TABLE `pacientes`
  ADD CONSTRAINT `enf_resp` FOREIGN KEY (`enfermeira_responsavel`) REFERENCES `enfermeiras` (`codigo_enfermeira`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `medico_resp` FOREIGN KEY (`medico_responsavel`) REFERENCES `medicos` (`sobrenomemedico`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `med_1` FOREIGN KEY (`medicamento`) REFERENCES `medicamentos` (`id_medicamento`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `med_2` FOREIGN KEY (`medicamento_2`) REFERENCES `medicamentos` (`id_medicamento`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `med_3` FOREIGN KEY (`medicamento_3`) REFERENCES `medicamentos` (`id_medicamento`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `med_4` FOREIGN KEY (`medicamento_4`) REFERENCES `medicamentos` (`id_medicamento`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `med_5` FOREIGN KEY (`medicamento_5`) REFERENCES `medicamentos` (`id_medicamento`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
