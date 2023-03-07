-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 10-Jan-2023 às 16:02
-- Versão do servidor: 10.4.19-MariaDB
-- versão do PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `hytech`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `ID_Clientes` int(11) NOT NULL,
  `Primeiro Nome` text NOT NULL,
  `Último Nome` text NOT NULL,
  `Idade` int(11) NOT NULL,
  `Morada` text NOT NULL,
  `Email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`ID_Clientes`, `Primeiro Nome`, `Último Nome`, `Idade`, `Morada`, `Email`) VALUES
(2, 'Joaquim', 'Alberto', 0, 'Rua dos Quins', 'quimdosbombeiros@gmail.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `ID_Produto` int(11) NOT NULL,
  `Nome do Produto` text NOT NULL,
  `Marca` text NOT NULL,
  `Introdução do Produto` text NOT NULL,
  `Preço` text NOT NULL,
  `Imagem do Produto` longtext NOT NULL,
  `Descrição` longtext NOT NULL,
  `Específicações` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`ID_Produto`, `Nome do Produto`, `Marca`, `Introdução do Produto`, `Preço`, `Imagem do Produto`, `Descrição`, `Específicações`) VALUES
(1, 'Processador AMD Ryzen 5 5600G', 'AMD', 'Potencialize a sua próxima grande vitória. Obtenha PCs com os processadores mais avançados do mundo\r\npara altas taxas de frames por segundo e uma experiência envolvente. Bom jogo, de fato.', '279,90€', './D:/Site-PAP/Site-PAP-main/PAP/Imagens/r5_5600g.webp', 'OS PROCESSADORES DA SÉRIE 5000 TÊM TODOS OS MELHORES RECURSOS PARA MANTÊ-LO NO JOGO\r\nO núcleo de processador mais rápido do mundo para os processadores mais rápidos do mundo. Os processadores AMD Ryzen™ série 5000 são construídos com arquitetura de 7 nm, que oferece taxas de frames extremamente altas com alta qualidade de imagem. Os processadores AMD Ryzen™ série 5000 capacitam a próxima geração de jogos exigentes, proporcionando experiências imersivas únicas e dominando qualquer tarefa multithread como 3D e renderização de vídeo e compilação de software.\r\n\r\nAS ÚLTIMAS TECNOLOGIAS - OS PROCESSADORES AMD RYZEN™ POSSUEM OS MELHORES RECURSOS PARA MANTÊ-LO NO JOGO\r\nCom grande poder de processamento, vêm as tecnologias de ponta para oferecer suporte. Todos os processadores AMD Ryzen™ série 5000 vêm com um conjunto completo de tecnologias projetadas para elevar a capacidade de processamento do seu PC, incluindo Precision Boost, Precision Boost Overdrive e PCIe® 4.0.\r\n\r\nARQUITETURA \"ZEN 3\" DE 7NM\r\nO núcleo de processador mais rápido do mundo para os processadores de jogos mais rápidos do mundo.', '● Solução térmica: Wraith Stealth Cooler\r\n● Chip Gráfico: AMD Radeon™ Graphics\r\n● Socket: AM4\r\n● Frequência Base: 3.90 GHz\r\n● Frequência Turbo: Até 4.4 GHz\r\n● Número Núcleos: 6\r\n● Número Threads: 12\r\n● Cache L2 total: 3 MB\r\n● Cache L3 total: 16 MB\r\n● Litografia: TSMC 7nm FinFET\r\n● TDP: 65 W\r\n● REF:100-100000252BOX'),
(2, 'Processador AMD Ryzen 5 5600X', 'AMD', 'Quando tem a arquitetura de processador mais avançada do mundo para jogadores e criadores de conteúdo, as possibilidades são infinitas. Esteja você a jogar os jogos mais recentes, a projetar o próximo projeto ou a processador uma enorme quantidade de dados, você precisa de um processador poderoso que possa lidar com tudo - e muito mais. Sem dúvida, os processadores AMD Ryzen™ série 5000 definem o padrão para jogadores e artistas.', '300,00€', '', 'OS PROCESSADORES DA SÉRIE 5000 TÊM TODOS OS MELHORES RECURSOS PARA MANTÊ-LO NO JOGO\r\nO núcleo de processador mais rápido do mundo para os processadores mais rápidos do mundo. Os processadores AMD Ryzen™ série 5000 são construídos com arquitetura de 7 nm, que oferece taxas de frames extremamente altas com alta qualidade de imagem. Os processadores AMD Ryzen™ série 5000 capacitam a próxima geração de jogos exigentes, proporcionando experiências imersivas únicas e dominando qualquer tarefa multithread como 3D e renderização de vídeo e compilação de software.\r\n\r\nAS ÚLTIMAS TECNOLOGIAS - OS PROCESSADORES AMD RYZEN™ POSSUEM OS MELHORES RECURSOS PARA MANTÊ-LO NO JOGO\r\nCom grande poder de processamento, vêm as tecnologias de ponta para oferecer suporte. Todos os processadores AMD Ryzen™ série 5000 vêm com um conjunto completo de tecnologias projetadas para elevar a capacidade de processamento do seu PC, incluindo Precision Boost, Precision Boost Overdrive e PCIe® 4.0.\r\n\r\nARQUITETURA \"ZEN 3\" DE 7NM\r\nO núcleo de processador mais rápido do mundo para os processadores de jogos mais rápidos do mundo.', '● Socket: AM4\r\n● Frequência Base: 3.70 GHz\r\n● Frequência Turbo: Até 4.6 GHz\r\n● Número Núcleos: 6\r\n● Número Threads: 12\r\n● Cache L2 total: 3 MB\r\n● Cache L3 total: 32 MB\r\n● Litografia: TSMC 7nm FinFET\r\n● TDP: 65 W\r\n● Solução térmica: Wraith Stealth'),
(3, 'Processador AMD Ryzen 5 5600', 'AMD', 'Quando você tem a arquitetura de processador mais avançada do mundo para jogadores e criadores de conteúdo, as possibilidades são infinitas. Esteja você a jogar os jogos mais recentes, a projetar o próximo projeto ou a processador uma enorme quantidade de dados, você precisa de um processador poderoso que possa lidar com tudo - e muito mais. Sem dúvida, os processadores AMD Ryzen™ série 5000 definem o padrão para jogadores e artistas.', '218,90€', '', 'OS PROCESSADORES DA SÉRIE 5000 TÊM TODOS OS MELHORES RECURSOS PARA MANTÊ-LO NO JOGO\r\nO núcleo de processador mais rápido do mundo para os processadores mais rápidos do mundo. Os processadores AMD Ryzen™ série 5000 são construídos com arquitetura de 7 nm, que oferece taxas de frames extremamente altas com alta qualidade de imagem. Os processadores AMD Ryzen™ série 5000 capacitam a próxima geração de jogos exigentes, proporcionando experiências imersivas únicas e dominando qualquer tarefa multithread como 3D e renderização de vídeo e compilação de software.\r\n\r\nAS ÚLTIMAS TECNOLOGIAS - OS PROCESSADORES AMD RYZEN™ POSSUEM OS MELHORES RECURSOS PARA MANTÊ-LO NO JOGO\r\nCom grande poder de processamento, vêm as tecnologias de ponta para oferecer suporte. Todos os processadores AMD Ryzen™ série 5000 vêm com um conjunto completo de tecnologias projetadas para elevar a capacidade de processamento do seu PC, incluindo Precision Boost, Precision Boost Overdrive e PCIe® 4.0.\r\n\r\nARQUITETURA \"ZEN 3\" DE 7NM\r\nO núcleo de processador mais rápido do mundo para os processadores de jogos mais rápidos do mundo.', '● Socket: AM4\r\n● Frequência Base: 3.50 GHz\r\n● Frequência Turbo: Até 4.40 GHz\r\n● Número Núcleos: 6\r\n● Número Threads: 12\r\n● Cache L2 total: 3 MB\r\n● Cache L3 total: 32 MB\r\n● Litografia: TSMC 7nm FinFET\r\n● TDP: 65 W\r\n● Solução térmica: AMD Wraith Stealth'),
(4, 'Processador AMD Ryzen 7 5800X', 'AMD', 'Quando você tem a arquitetura de processador mais avançada do mundo para jogadores e criadores de conteúdo, as possibilidades são infinitas. Esteja você a jogar os jogos mais recentes, a projetar o próximo projeto ou a processador uma enorme quantidade de dados, você precisa de um processador poderoso que possa lidar com tudo - e muito mais. Sem dúvida, os processadores AMD Ryzen™ série 5000 definem o padrão para jogadores e artistas.', '380,00€', '', 'OS PROCESSADORES DA SÉRIE 5000 TÊM TODOS OS MELHORES RECURSOS PARA MANTÊ-LO NO JOGO\r\nO núcleo de processador mais rápido do mundo para os processadores mais rápidos do mundo. Os processadores AMD Ryzen™ série 5000 são construídos com arquitetura de 7 nm, que oferece taxas de frames extremamente altas com alta qualidade de imagem. Os processadores AMD Ryzen™ série 5000 capacitam a próxima geração de jogos exigentes, proporcionando experiências imersivas únicas e dominando qualquer tarefa multithread como 3D e renderização de vídeo e compilação de software.\r\n\r\nAS ÚLTIMAS TECNOLOGIAS - OS PROCESSADORES AMD RYZEN™ POSSUEM OS MELHORES RECURSOS PARA MANTÊ-LO NO JOGO\r\nCom grande poder de processamento, vêm as tecnologias de ponta para oferecer suporte. Todos os processadores AMD Ryzen™ série 5000 vêm com um conjunto completo de tecnologias projetadas para elevar a capacidade de processamento do seu PC, incluindo Precision Boost, Precision Boost Overdrive e PCIe® 4.0.\r\n\r\nARQUITETURA \"ZEN 3\" DE 7NM\r\nO núcleo de processador mais rápido do mundo para os processadores de jogos mais rápidos do mundo.', '● Socket: AM4\r\n● Frequência Base: 3.80 GHz\r\n● Frequência Turbo: Até 4.7 GHz\r\n● Número Núcleos: 8\r\n● Número Threads: 16\r\n● Cache L2 total: 4 MB\r\n● Cache L3 total: 32 MB\r\n● Litografia: TSMC 7nm FinFET\r\n● TDP: 105 W\r\n● Solução térmica: Não incluído'),
(5, 'Processador Intel Core i9 12900kf', 'INTEL', 'Os processadores para desktop Intel® Core™ da 12ª Geração oferecem uma nova arquitetura híbrida de desempenho, combinando núcleos de desempenho com núcleos eficientes para aprimorar jogos, produtividade e criação. Num avanço arrojado no desempenho do núcleo, os processadores para desktop Intel® Core™ da 12ª Geração oferecem uma abordagem revolucionária da arquitetura x86.', '599,90€\r\n', '', 'TECNOLOGIA DE NÚCLEO INOVADORA\r\nNum avanço arrojado no desempenho do núcleo, os processadores para desktop Intel® Core™ da 12ª Geração oferecem uma abordagem revolucionária da arquitetura x86. Os seus núcleos de desempenho, ou “P-cores”, são otimizados para desempenho com thread único ou leve, enquanto os seus núcleos eficientes, ou “E-cores”, são otimizados para escalar cargas de trabalho com threading pesado. O Intel® Thread Director ajuda a monitorizar e analisar dados de desempenho em tempo real para colocar ininterruptamente o thread de aplicação ideal no núcleo certo e otimizar o desempenho por watt. Isso significa que os jogadores, criadores e profissionais podem aproveitar a inteligência e a potência para aprimorar as experiências mais importantes.\r\n\r\nEXPERIÊNCIAS IMERSIVAS\r\nQuer você se esteja a aprofundar nos títulos de jogos mais recentes ou focado em aplicações profissionais avançadas, os processadores para desktop Intel® Core™ da 12ª Geração permitem que você mergulhe sem interrupções. Os Gráficos UHD Intel® (não disponíveis em todos os modelos) potencializados pela arquitetura Xe convidam-no a mergulhar em novas experiências vívidas com suporte visual aprimorado para vídeo HDR de até 8K em mil milhões de cores e até 4 monitores 4K simultâneos.\r\n\r\nA ACELERAÇÃO NA INOVAÇÃO DA PLATAFORMA\r\nAproveite as mais recentes tecnologias de plataforma que impulsionam jogos, fluxo de trabalho e criação. Os processadores para desktop Intel® Core™ da 12ª Geração oferecem até 20 lanes (16 PCIe 5.0 e 4 PCIe 4.0) para impulsionar o desempenho ideal de gráficos dedicados e armazenamento, por possibilitar pontos de conexão de largura de banda mais alta. O DDR5 oferece velocidades rápidas de até 4800 MT/s, o que permite maior velocidade de largura de banda da memória em comparação com as gerações anteriores que usam a memória DDR4 3200 MT/s. Ajuste o desempenho e a potência de computação com processadores para desktop Intel® Core™ da 12ª Geração desbloqueados com capacidade de overclocking avançado e suporte de ajuste avançado com a Intel® Extreme Tuning Utility (XTU). Com esses e outros aprimoramentos da plataforma, você poderá trabalhar, jogar e criar com controlo e confiança impressionantes.', '● Número de núcleos: 16\r\n● Número de núcleos de performance: 8\r\n● Número de núcleos eficientes: 8\r\n● Número de threads: 24\r\n● Frequência turbo máxima: 5.20 GHz\r\n● Frequência turbo máxima de núcleo de  performance: 5.10 GHz\r\n● Frequência turbo máxima de núcleo eficiente: 3.90 GHz\r\n● Frequência base de núcleo de performance: 3.20 GHz\r\n● Frequência base de núcleo eficiente: 2.40 GHz\r\n● Cache: 30 MB Intel® Smart Cache\r\n● Cache Total L2: 14 MB\r\n● TDP Base: 125 W\r\n● TDP Turbo: 241 W\r\n● Gráficos integrados: Não Incluídos\r\n');

-- --------------------------------------------------------

--
-- Estrutura da tabela `transacoes`
--

CREATE TABLE `transacoes` (
  `ID_Utilizador` int(11) NOT NULL,
  `ID_Produto` int(11) NOT NULL,
  `Data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `utilizadores`
--

CREATE TABLE `utilizadores` (
  `ID_Utilizador` int(11) NOT NULL,
  `Nome_Utilizador` text NOT NULL,
  `Email` text NOT NULL,
  `Password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `utilizadores`
--

INSERT INTO `utilizadores` (`ID_Utilizador`, `Nome_Utilizador`, `Email`, `Password`) VALUES
(3, 'brunoo05', 'bg565837@gmail.com', '25d55ad283aa400af464c76d713c07ad'),
(4, 'joaquimalberto85', 'joaquimincribele@hotmail.com', 'd294ba8b6286b2b054a9e6aea0109eb7');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`ID_Clientes`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`ID_Produto`);

--
-- Índices para tabela `transacoes`
--
ALTER TABLE `transacoes`
  ADD KEY `ID_Utilizador` (`ID_Utilizador`),
  ADD KEY `ID_Produto` (`ID_Produto`);

--
-- Índices para tabela `utilizadores`
--
ALTER TABLE `utilizadores`
  ADD PRIMARY KEY (`ID_Utilizador`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `ID_Clientes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `ID_Produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `utilizadores`
--
ALTER TABLE `utilizadores`
  MODIFY `ID_Utilizador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `transacoes`
--
ALTER TABLE `transacoes`
  ADD CONSTRAINT `transacoes_ibfk_1` FOREIGN KEY (`ID_Utilizador`) REFERENCES `utilizadores` (`ID_Utilizador`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transacoes_ibfk_2` FOREIGN KEY (`ID_Produto`) REFERENCES `produtos` (`ID_Produto`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
