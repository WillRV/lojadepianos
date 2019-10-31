-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 17-Out-2019 às 20:29
-- Versão do servidor: 5.7.25-log
-- versão do PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lojadepianos`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE `categorias` (
  `cat_id` int(11) NOT NULL,
  `cat_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`cat_id`, `cat_desc`) VALUES
(1, 'Piano de Cauda Inteira'),
(2, 'Piano 2/4 Cauda'),
(3, 'Piano 1/4 Cauda'),
(4, 'Piano Vertical'),
(5, 'Piano Digital');

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `cli_id` int(11) NOT NULL,
  `cli_nome` varchar(50) NOT NULL,
  `cli_cpf` varchar(20) DEFAULT NULL,
  `cli_desc` text,
  `cli_aniv` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`cli_id`, `cli_nome`, `cli_cpf`, `cli_desc`, `cli_aniv`) VALUES
(1, 'João Álvares da Cunha', '349.837.909-77', 'Moreno, alto, musculoso', '1990-12-21'),
(2, 'Jacinto Pinto dos Santos', '301.859.869-51', 'Loiro, 1,56 de altura,', '2000-09-12'),
(3, 'Isadora Pinto da Costa', '647.202.999-70', 'Alta, loira, olhos claros', '2000-01-26'),
(4, 'Maria Do Bom Despacho', '179.007.759-19', NULL, '2000-01-26'),
(5, 'Rolando Escadabaixo', '623.048.569-93', NULL, '1999-05-12'),
(6, 'Vitor Hugo Tocagaita', '057.361.119-00', 'Senhor de idade, baixinho', '1979-09-18'),
(9, 'Inocêncio Coitadinho', '665.174.049-02', NULL, '1980-10-21'),
(10, 'Antonio Manso Pacífico De Oliveira Sossegado', '143.921.479-40', NULL, '1954-10-14');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto_estoque`
--

CREATE TABLE `produto_estoque` (
  `prod_id` int(11) NOT NULL,
  `prod_nome` varchar(45) NOT NULL,
  `prod_valor` float DEFAULT NULL,
  `categorias_id` int(11) DEFAULT NULL,
  `qtd` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produto_estoque`
--

INSERT INTO `produto_estoque` (`prod_id`, `prod_nome`, `prod_valor`, `categorias_id`, `qtd`) VALUES
(1, 'Yamaha GB1K2', 800000, 3, 5),
(2, 'Yamaha GC2', 750000, 3, 6),
(3, 'Yamaha S7X', 120000, 2, 4),
(4, 'Yamaha JU109', 40000, 4, 3),
(5, 'Yamaha JX113T', 32000, 4, 8),
(6, 'Yamaha U1J', 42000, 4, 1),
(7, 'Yamaha CFX', 300000, 1, 8),
(8, 'Yamaha P-125', 3800, 5, 9),
(9, 'Yamaha P-45', 2880, 5, 2),
(10, 'Yamaha P-515', 9000, 5, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `vendas`
--

CREATE TABLE `vendas` (
  `ven_id` int(11) NOT NULL,
  `ven_data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `vendedor_vend_id` int(11) NOT NULL,
  `clientes_cli_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `vendas_has_produto_estoque`
--

CREATE TABLE `vendas_has_produto_estoque` (
  `vendas_ven_id` int(11) NOT NULL,
  `produto_estoque_prod_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `vendedor`
--

CREATE TABLE `vendedor` (
  `vend_id` int(11) NOT NULL,
  `vend_nome` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `vendedor`
--

INSERT INTO `vendedor` (`vend_id`, `vend_nome`) VALUES
(1, 'Alfredo'),
(2, 'Jonathan'),
(3, 'Godofredo'),
(4, 'Allan'),
(5, 'João'),
(6, 'Batista');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`cli_id`);

--
-- Indexes for table `produto_estoque`
--
ALTER TABLE `produto_estoque`
  ADD PRIMARY KEY (`prod_id`),
  ADD KEY `categorias_id` (`categorias_id`);

--
-- Indexes for table `vendas`
--
ALTER TABLE `vendas`
  ADD PRIMARY KEY (`ven_id`),
  ADD KEY `vendedor_vend_id` (`vendedor_vend_id`),
  ADD KEY `clientes_cli_id` (`clientes_cli_id`);

--
-- Indexes for table `vendas_has_produto_estoque`
--
ALTER TABLE `vendas_has_produto_estoque`
  ADD KEY `vendas_ven_id` (`vendas_ven_id`),
  ADD KEY `produto_estoque_prod_id` (`produto_estoque_prod_id`);

--
-- Indexes for table `vendedor`
--
ALTER TABLE `vendedor`
  ADD PRIMARY KEY (`vend_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categorias`
--
ALTER TABLE `categorias`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `clientes`
--
ALTER TABLE `clientes`
  MODIFY `cli_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `produto_estoque`
--
ALTER TABLE `produto_estoque`
  MODIFY `prod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `vendas`
--
ALTER TABLE `vendas`
  MODIFY `ven_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vendedor`
--
ALTER TABLE `vendedor`
  MODIFY `vend_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `produto_estoque`
--
ALTER TABLE `produto_estoque`
  ADD CONSTRAINT `produto_estoque_ibfk_1` FOREIGN KEY (`categorias_id`) REFERENCES `categorias` (`cat_id`);

--
-- Limitadores para a tabela `vendas`
--
ALTER TABLE `vendas`
  ADD CONSTRAINT `vendas_ibfk_1` FOREIGN KEY (`vendedor_vend_id`) REFERENCES `vendedor` (`vend_id`),
  ADD CONSTRAINT `vendas_ibfk_2` FOREIGN KEY (`clientes_cli_id`) REFERENCES `clientes` (`cli_id`);

--
-- Limitadores para a tabela `vendas_has_produto_estoque`
--
ALTER TABLE `vendas_has_produto_estoque`
  ADD CONSTRAINT `vendas_has_produto_estoque_ibfk_1` FOREIGN KEY (`vendas_ven_id`) REFERENCES `vendas` (`ven_id`),
  ADD CONSTRAINT `vendas_has_produto_estoque_ibfk_2` FOREIGN KEY (`produto_estoque_prod_id`) REFERENCES `produto_estoque` (`prod_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
