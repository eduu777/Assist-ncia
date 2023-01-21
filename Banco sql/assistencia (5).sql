-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 04-Jun-2022 às 19:46
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `assistencia`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `orcamento`
--

CREATE TABLE `orcamento` (
  `cod` int(11) NOT NULL,
  `data` varchar(20) DEFAULT NULL,
  `hora` varchar(20) DEFAULT NULL,
  `stts` varchar(100) DEFAULT NULL,
  `valor` varchar(100) DEFAULT NULL,
  `descricao` varchar(100) DEFAULT NULL,
  `cod_cliente` int(11) NOT NULL,
  `cod_adm` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `orcamento_prod`
--

CREATE TABLE `orcamento_prod` (
  `cod` int(11) NOT NULL,
  `qtd` int(11) DEFAULT NULL,
  `cod_orcamento` int(11) DEFAULT NULL,
  `cod_produto` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `cod` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `modelo` varchar(50) NOT NULL,
  `fabricante` varchar(50) NOT NULL,
  `estado` varchar(50) DEFAULT NULL,
  `foto` varchar(50) DEFAULT NULL,
  `stts` varchar(50) DEFAULT NULL,
  `descricao` varchar(100) DEFAULT NULL,
  `cod_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `cod` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `rua` varchar(100) NOT NULL,
  `numero` int(11) NOT NULL,
  `cep` varchar(20) NOT NULL,
  `bairro` varchar(50) NOT NULL,
  `ponto_ref` varchar(100) NOT NULL,
  `comp` varchar(20) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `tel1` varchar(100) NOT NULL,
  `tel2` varchar(100) DEFAULT NULL,
  `acesso` varchar(20) DEFAULT NULL,
  `foto` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`cod`, `email`, `rua`, `numero`, `cep`, `bairro`, `ponto_ref`, `comp`, `nome`, `senha`, `tel1`, `tel2`, `acesso`, `foto`) VALUES
(1, 'adm@gmail.com', 'teste2', 87, '87', '87', 'teste', '87', 'Eduardo Nobre Nogueira ', '202cb962ac59075b964b07152d234b70', '87', NULL, 'adm', 'usuario-77602b02455a1b75ed7f70956ba7b244.jpg'),
(106, 'user@gmail.com', 'Rua do usuário', 12, '12345-678', 'Bairro do usuário', 'Teste', 'A', 'Usuário', '202cb962ac59075b964b07152d234b70', '(12) 3.4567-8901', NULL, 'cliente', 'usuario-4e1efbdb115947966b08c0bb2de08624.png');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `orcamento`
--
ALTER TABLE `orcamento`
  ADD PRIMARY KEY (`cod`),
  ADD KEY `cod_cliente` (`cod_cliente`),
  ADD KEY `cod_adm` (`cod_adm`);

--
-- Índices para tabela `orcamento_prod`
--
ALTER TABLE `orcamento_prod`
  ADD PRIMARY KEY (`cod`),
  ADD KEY `cod_produto` (`cod_produto`),
  ADD KEY `cod_orcamento` (`cod_orcamento`);

--
-- Índices para tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`cod`),
  ADD KEY `usuario_cod` (`cod_usuario`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`cod`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `orcamento`
--
ALTER TABLE `orcamento`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT de tabela `orcamento_prod`
--
ALTER TABLE `orcamento_prod`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=144;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `orcamento`
--
ALTER TABLE `orcamento`
  ADD CONSTRAINT `orcamento_ibfk_1` FOREIGN KEY (`cod_cliente`) REFERENCES `usuario` (`cod`),
  ADD CONSTRAINT `orcamento_ibfk_2` FOREIGN KEY (`cod_cliente`) REFERENCES `usuario` (`cod`),
  ADD CONSTRAINT `orcamento_ibfk_3` FOREIGN KEY (`cod_adm`) REFERENCES `usuario` (`cod`);

--
-- Limitadores para a tabela `orcamento_prod`
--
ALTER TABLE `orcamento_prod`
  ADD CONSTRAINT `orcamento_prod_ibfk_1` FOREIGN KEY (`cod_produto`) REFERENCES `produto` (`cod`),
  ADD CONSTRAINT `orcamento_prod_ibfk_2` FOREIGN KEY (`cod_orcamento`) REFERENCES `orcamento` (`cod`);

--
-- Limitadores para a tabela `produto`
--
ALTER TABLE `produto`
  ADD CONSTRAINT `produto_ibfk_1` FOREIGN KEY (`cod_usuario`) REFERENCES `usuario` (`cod`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
