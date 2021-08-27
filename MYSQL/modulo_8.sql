-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 30-Out-2020 às 13:53
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `modulo_8`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cargos`
--

CREATE TABLE `cargos` (
  `id` int(11) NOT NULL,
  `nome_cargo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cargos`
--

INSERT INTO `cargos` (`id`, `nome_cargo`) VALUES
(1, 'administrador');

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `Nome` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`id`, `Nome`) VALUES
(1, 'Geral'),
(2, 'Sports');

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria_filme`
--

CREATE TABLE `categoria_filme` (
  `categoria_id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `categoria_filme`
--

INSERT INTO `categoria_filme` (`categoria_id`, `nome`) VALUES
(1, 'terror'),
(2, 'comedia');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `cargo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id`, `nome`, `cargo`) VALUES
(1, 'Henrique', 1),
(2, 'Joao', 1),
(3, 'Guillerme', 2),
(4, 'Eduardo', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `sobrenome` varchar(255) NOT NULL,
  `momento_registro` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nome`, `sobrenome`, `momento_registro`) VALUES
(7, 'Arnaldo', 'Serra Coelho', '2020-10-20 10:38:33'),
(8, 'cobra ', 'kai', '2020-10-27 12:41:53'),
(9, 'natanga', 'coisado', '2020-10-27 12:41:53');

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes_like`
--

CREATE TABLE `clientes_like` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `clientes_like`
--

INSERT INTO `clientes_like` (`id`, `nome`, `email`) VALUES
(1, 'cobre kai', 'cobrekai@gmail.com'),
(2, 'crash', 'crash@hotmail.com'),
(3, 'Aletta Ocean', 'alettaocean@hotmail.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente_between`
--

CREATE TABLE `cliente_between` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cliente_between`
--

INSERT INTO `cliente_between` (`id`, `nome`, `email`, `data`) VALUES
(1, 'cobrakai', 'cobrakai@gmail.com', '2020-10-30'),
(2, 'alena croft', 'alenacroft@hotmail.com', '2020-10-27'),
(3, 'voadora', 'voadora@gmail.com', '2020-10-27'),
(4, 'flasco', 'flasco@hotmail.com', '2020-10-01');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente_having`
--

CREATE TABLE `cliente_having` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `cargo` varchar(255) NOT NULL,
  `pontos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cliente_having`
--

INSERT INTO `cliente_having` (`id`, `nome`, `cargo`, `pontos`) VALUES
(1, 'Henrique', 'administrador', 3),
(2, 'Guilherme', 'moderador', 8),
(3, 'Alena Croft', 'administrador', 4),
(4, 'lela star', 'administrador', 10),
(5, 'Romi Rain', 'moderador\r\n', 10);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cursos`
--

CREATE TABLE `cursos` (
  `id` int(6) UNSIGNED NOT NULL,
  `nome` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `filmes`
--

CREATE TABLE `filmes` (
  `id` int(11) NOT NULL,
  `categoria_id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `filmes`
--

INSERT INTO `filmes` (`id`, `categoria_id`, `nome`) VALUES
(1, 1, 'um filme de terror'),
(2, 1, 'outro filme de terror'),
(3, 2, 'um filme comedia'),
(4, 2, 'outro filme de comedia');

-- --------------------------------------------------------

--
-- Estrutura da tabela `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `Titulo` varchar(255) NOT NULL,
  `Categoria_id` int(11) NOT NULL,
  `Conteudo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `posts`
--

INSERT INTO `posts` (`id`, `Titulo`, `Categoria_id`, `Conteudo`) VALUES
(1, 'minha noticia geral', 1, 'meu texto de exemplo'),
(2, 'minha outra noticia geral', 1, 'meu texto de exemplo2'),
(3, 'noticia sports', 2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla libero urna, ornare nec gravida vel, auctor et tellus. Integer felis lectus, molestie ac gravida sit amet, faucibus ac justo. Quisque quis congue felis. Duis commodo metus quis risus dignissim volutpat. Quisque ac mollis leo. Nunc vitae gravida sapien, eu auctor est. Mauris dapibus vehicula velit sed ultricies.'),
(4, 'minha outra noticia sport', 2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla libero urna, ornare nec gravida vel, auctor et tellus. Integer felis lectus, molestie ac gravida sit amet, faucibus ac justo. Quisque quis congue felis. Duis commodo metus quis risus dignissim volutpat. Quisque ac mollis leo. Nunc vitae gravida sapien, eu auctor est. Mauris dapibus vehicula velit sed ultricies.');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cargos`
--
ALTER TABLE `cargos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `categoria_filme`
--
ALTER TABLE `categoria_filme`
  ADD PRIMARY KEY (`categoria_id`);

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `clientes_like`
--
ALTER TABLE `clientes_like`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `cliente_between`
--
ALTER TABLE `cliente_between`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `cliente_having`
--
ALTER TABLE `cliente_having`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `filmes`
--
ALTER TABLE `filmes`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cargos`
--
ALTER TABLE `cargos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `categoria_filme`
--
ALTER TABLE `categoria_filme`
  MODIFY `categoria_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `clientes_like`
--
ALTER TABLE `clientes_like`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `cliente_between`
--
ALTER TABLE `cliente_between`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `cliente_having`
--
ALTER TABLE `cliente_having`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `cursos`
--
ALTER TABLE `cursos`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `filmes`
--
ALTER TABLE `filmes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
