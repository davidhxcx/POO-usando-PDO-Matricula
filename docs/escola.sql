-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 29-Jun-2015 às 21:19
-- Versão do servidor: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `escola`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

CREATE TABLE IF NOT EXISTS `aluno` (
  `id_aluno` int(11) NOT NULL,
  `nome` varchar(135) NOT NULL,
  `dataNasc` date NOT NULL,
  `endereco` varchar(75) NOT NULL,
  `email` varchar(135) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`id_aluno`, `nome`, `dataNasc`, `endereco`, `email`) VALUES
(1, 'David', '0000-00-00', 'Rua RIo Grande do Norte', 'davidhxcx@gmail.com'),
(2, 'Isael', '1992-03-28', 'Cedro', 'isael@gmail.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `classe`
--

CREATE TABLE IF NOT EXISTS `classe` (
  `id_classe` int(11) NOT NULL,
  `h_inicia` time NOT NULL,
  `h_fim` time NOT NULL,
  `d_semana` varchar(135) NOT NULL,
  `fk_disciplina` int(11) DEFAULT NULL,
  `fk_professor` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `curso`
--

CREATE TABLE IF NOT EXISTS `curso` (
  `id_curso` int(11) NOT NULL,
  `nome` varchar(135) NOT NULL,
  `duracao` int(10) unsigned NOT NULL,
  `periodo` int(10) unsigned NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `disciplina`
--

CREATE TABLE IF NOT EXISTS `disciplina` (
  `id_disciplina` int(11) NOT NULL,
  `nome` varchar(135) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `disciplina_classe`
--

CREATE TABLE IF NOT EXISTS `disciplina_classe` (
  `id_disciplina_classe` int(11) NOT NULL,
  `fk_classe` int(11) DEFAULT NULL,
  `fk_matricula` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `grade_curricular`
--

CREATE TABLE IF NOT EXISTS `grade_curricular` (
  `id_grade` int(11) NOT NULL,
  `fk_disciplina` int(11) DEFAULT NULL,
  `fk_curso` int(11) DEFAULT NULL,
  `cargaHoraria` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `matricula`
--

CREATE TABLE IF NOT EXISTS `matricula` (
  `id_matricula` int(11) NOT NULL,
  `fk_turma` int(11) DEFAULT NULL,
  `fk_aluno` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `professor`
--

CREATE TABLE IF NOT EXISTS `professor` (
  `id_professor` int(11) NOT NULL,
  `nome` varchar(135) NOT NULL,
  `dataNasc` date NOT NULL,
  `endereco` varchar(75) NOT NULL,
  `email` varchar(135) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `professor`
--

INSERT INTO `professor` (`id_professor`, `nome`, `dataNasc`, `endereco`, `email`) VALUES
(1, 'Reginaldo', '1975-05-15', 'IFC', 'reginaldo@reginaldo.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `turma`
--

CREATE TABLE IF NOT EXISTS `turma` (
  `id_turma` int(11) NOT NULL,
  `num_turma` int(3) NOT NULL,
  `sigla` varchar(9) NOT NULL,
  `fk_curso` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `login` varchar(35) NOT NULL,
  `senha` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `login`, `senha`) VALUES
(1, 'root', 'tst14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`id_aluno`);

--
-- Indexes for table `classe`
--
ALTER TABLE `classe`
  ADD PRIMARY KEY (`id_classe`), ADD KEY `fk_disciplina` (`fk_disciplina`), ADD KEY `fk_professor` (`fk_professor`);

--
-- Indexes for table `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`id_curso`);

--
-- Indexes for table `disciplina`
--
ALTER TABLE `disciplina`
  ADD PRIMARY KEY (`id_disciplina`);

--
-- Indexes for table `disciplina_classe`
--
ALTER TABLE `disciplina_classe`
  ADD PRIMARY KEY (`id_disciplina_classe`), ADD KEY `fk_classe` (`fk_classe`), ADD KEY `fk_matricula` (`fk_matricula`);

--
-- Indexes for table `grade_curricular`
--
ALTER TABLE `grade_curricular`
  ADD PRIMARY KEY (`id_grade`), ADD KEY `fk_disciplina` (`fk_disciplina`), ADD KEY `fk_curso` (`fk_curso`);

--
-- Indexes for table `matricula`
--
ALTER TABLE `matricula`
  ADD PRIMARY KEY (`id_matricula`), ADD KEY `fk_turma` (`fk_turma`), ADD KEY `fk_aluno` (`fk_aluno`);

--
-- Indexes for table `professor`
--
ALTER TABLE `professor`
  ADD PRIMARY KEY (`id_professor`);

--
-- Indexes for table `turma`
--
ALTER TABLE `turma`
  ADD PRIMARY KEY (`id_turma`), ADD KEY `fk_curso` (`fk_curso`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aluno`
--
ALTER TABLE `aluno`
  MODIFY `id_aluno` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `classe`
--
ALTER TABLE `classe`
  MODIFY `id_classe` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `curso`
--
ALTER TABLE `curso`
  MODIFY `id_curso` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `disciplina`
--
ALTER TABLE `disciplina`
  MODIFY `id_disciplina` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `disciplina_classe`
--
ALTER TABLE `disciplina_classe`
  MODIFY `id_disciplina_classe` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `grade_curricular`
--
ALTER TABLE `grade_curricular`
  MODIFY `id_grade` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `professor`
--
ALTER TABLE `professor`
  MODIFY `id_professor` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `turma`
--
ALTER TABLE `turma`
  MODIFY `id_turma` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `classe`
--
ALTER TABLE `classe`
ADD CONSTRAINT `classe_ibfk_1` FOREIGN KEY (`fk_disciplina`) REFERENCES `disciplina` (`id_disciplina`),
ADD CONSTRAINT `classe_ibfk_2` FOREIGN KEY (`fk_professor`) REFERENCES `professor` (`id_professor`);

--
-- Limitadores para a tabela `disciplina_classe`
--
ALTER TABLE `disciplina_classe`
ADD CONSTRAINT `disciplina_classe_ibfk_1` FOREIGN KEY (`fk_classe`) REFERENCES `classe` (`id_classe`),
ADD CONSTRAINT `disciplina_classe_ibfk_2` FOREIGN KEY (`fk_matricula`) REFERENCES `matricula` (`id_matricula`);

--
-- Limitadores para a tabela `grade_curricular`
--
ALTER TABLE `grade_curricular`
ADD CONSTRAINT `grade_curricular_ibfk_1` FOREIGN KEY (`fk_disciplina`) REFERENCES `disciplina` (`id_disciplina`),
ADD CONSTRAINT `grade_curricular_ibfk_2` FOREIGN KEY (`fk_curso`) REFERENCES `curso` (`id_curso`);

--
-- Limitadores para a tabela `matricula`
--
ALTER TABLE `matricula`
ADD CONSTRAINT `matricula_ibfk_1` FOREIGN KEY (`fk_turma`) REFERENCES `turma` (`id_turma`),
ADD CONSTRAINT `matricula_ibfk_2` FOREIGN KEY (`fk_aluno`) REFERENCES `aluno` (`id_aluno`);

--
-- Limitadores para a tabela `turma`
--
ALTER TABLE `turma`
ADD CONSTRAINT `turma_ibfk_1` FOREIGN KEY (`fk_curso`) REFERENCES `curso` (`id_curso`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
