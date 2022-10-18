-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 17-Out-2022 às 22:57
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sebastiao_bd`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `nome` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `pass` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `admins`
--

INSERT INTO `admins` (`id`, `nome`, `email`, `pass`) VALUES
(1, 'Tiago', 'tiago@rato.pt', 'codemaster'),
(2, 'Ana', 'ana@email.pt', 'manager');

-- --------------------------------------------------------

--
-- Estrutura da tabela `autor`
--

CREATE TABLE `autor` (
  `id` int(11) NOT NULL,
  `imagem` varchar(3000) NOT NULL,
  `texto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `autor`
--

INSERT INTO `autor` (`id`, `imagem`, `texto`) VALUES
(1, 'http://localhost/codemaster/sebastiao/public/Fotos/desktop/conteudo.jpg', '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolores tempora debitis laboriosam dolorem molestiae quo harum ipsa voluptatibus quaerat minus, suscipit rem vero iste, possimus, eos quis quos placeat alias. Quam, quidem natus, illo nesciunt doloribus ducimus aut voluptas exercitationem nisi facere dignissimos ex eos repudiandae illum corrupti ea amet nulla modi officia? Iure, dolorum eius odit tenetur omnis sunt commodi optio eligendi sapiente atque!</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo quos autem consectetur illum atque officiis reprehenderit quis! Itaque, impedit odit veritatis doloremque vitae inventore nisi repudiandae blanditiis molestias deserunt porro, exercitationem repellat earum esse illum commodi, provident eaque deleniti recusandae! Modi accusantium laborum vitae nihil quod quam voluptas libero placeat fugit, praesentium ducimus reiciendis assumenda, officiis porro magni ullam obcaecati quae cum error! Recusandae reprehenderit minima iusto sequi nesciunt quaerat neque delectus, modi deleniti minus, error eveniet provident consequatur ea incidunt nobis vel perferendis libero voluptatibus expedita nemo quia temporibus. Eveniet, velit impedit voluptatibus eligendi est dolorem nemo beatae, cum quidem quae sequi atque quam, saepe laudantium. Sunt sequi aut minus placeat quam, saepe cupiditate nemo aliquid accusantium ea aspernatur, doloribus officiis esse exercitationem. Eligendi mollitia temporibus sit atque incidunt amet eos facere veniam similique, ut esse illum quasi. Incidunt dolore, temporibus voluptatum minima nemo iusto tempore ratione atque dolores consequuntur reiciendis minus laudantium odit fugit esse sed tempora earum obcaecati nulla hic nam in debitis neque! Corrupti modi pariatur corporis mollitia sit amet ex tenetur, deleniti accusantium ut officiis quas est, excepturi, aperiam ipsa laboriosam ratione iusto magni dolore. Dolores, commodi asperiores. Officiis, quis asperiores tempore, rem voluptate illum tempora dolore dolorem pariatur sapiente molestias eveniet? Reprehenderit doloribus voluptate delectus id libero sunt dolores mollitia et cupiditate impedit, officia dolorem corporis explicabo cum ut in. Nemo facere commodi suscipit ad aut eligendi iusto magnam officiis tempora deserunt! Natus deserunt ex voluptates ut debitis, laudantium odit praesentium numquam quas quod?</p><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illo corrupti voluptatibus error accusantium ducimus iste dignissimos fuga exercitationem consequatur! Expedita, rem ab? Eum est voluptate ducimus consequatur obcaecati molestiae doloribus, provident sunt laborum illum voluptas similique quo commodi quidem dolorum soluta voluptatum. Dignissimos veniam sequi eaque tempora at blanditiis iusto corrupti explicabo quia minus odio, magni vel non voluptate numquam!</p><p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Earum eligendi eius, alias officia voluptatem porro doloremque quam facere hic fugit, sequi magnam veritatis illum totam reiciendis. Architecto repudiandae mollitia, eligendi ullam quo sed hic similique, amet odio perferendis voluptatibus rem at, recusandae dolorem quia commodi aperiam facilis. Quaerat iure odio dicta optio quidem. Quis sint quibusdam, quidem deleniti accusantium vel? Maxime placeat cupiditate, perspiciatis quis optio quasi, excepturi id dicta nisi, soluta quisquam? Minima nihil eligendi, libero maxime debitis fugit illo aliquid sequi id exercitationem ipsum iste accusantium eum magnam. Sed quod voluptatum ipsum minus facilis enim consequuntur ut magni fugit odit, iure non reiciendis, praesentium suscipit aperiam reprehenderit obcaecati sunt deleniti. Ad, repellat id impedit adipisci autem, earum quasi debitis inventore odio dolores modi possimus pariatur odit deserunt exercitationem.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, voluptatum libero! Quidem autem esse facilis odio alias? Magnam quis quidem aperiam? Soluta temporibus dicta non voluptatem ullam ad quidem ab, tempore, earum architecto praesentium quo. Porro, placeat facilis rerum magnam asperiores voluptates? Distinctio, ducimus! Architecto soluta omnis laborum corporis beatae suscipit tempora, dolor error delectus dolorum labore molestiae reiciendis maiores eum! Perferendis ea doloribus inventore provident odit qui harum repudiandae commodi. Maiores necessitatibus nihil reprehenderit veniam praesentium voluptas, a et dicta voluptatibus soluta labore ad veritatis illo omnis similique adipisci. Fuga obcaecati corrupti quis neque vero recusandae eum incidunt laborum, sint optio. Ipsam fuga a unde pariatur magnam ullam impedit exercitationem reprehenderit dolorum deserunt magni, fugiat eos beatae reiciendis cum repudiandae minima qui, saepe error consequatur libero asperiores! Voluptates natus eveniet fuga temporibus quibusdam voluptas maiores nihil illo at. Quos minima accusantium labore quisquam illo doloremque in sed nemo quasi!</p>');

-- --------------------------------------------------------

--
-- Estrutura da tabela `home`
--

CREATE TABLE `home` (
  `id` int(11) NOT NULL,
  `imagem` varchar(3000) NOT NULL,
  `texto` varchar(3000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `home`
--

INSERT INTO `home` (`id`, `imagem`, `texto`) VALUES
(1, 'http://localhost/codemaster/sebastiao/public/Fotos/desktop/FOTO-editada.jpg', '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consectetur molestiae repellat placeat dolore? Dolorem deserunt beatae maiores! Iure velit eos deleniti a esse. Ducimus, suscipit, eos odit eum dignissimos praesentium assumenda doloremque vero veniam quaerat fugiat accusantium voluptatum saepe voluptatem porro minus. Fugit iure delectus tempora deleniti doloremque officiis iste quas voluptates cumque, sint, facere, asperiores aut. Sed voluptatibus, nesciunt recusandae quas voluptas sequi doloribus, consequatur quia culpa quis magni nihil natus id molestiae modi.</p><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consectetur molestiae repellat placeat dolore? Dolorem deserunt beatae maiores! Iure velit eos deleniti a esse. Ducimus, suscipit, eos odit eum dignissimos praesentium assumenda doloremque vero veniam quaerat fugiat accusantium voluptatum saepe voluptatem porro minus. Fugit iure delectus tempora deleniti doloremque officiis iste quas voluptates cumque, sint, facere, asperiores aut. Sed voluptatibus, nesciunt recusandae quas voluptas sequi doloribus, consequatur quia culpa quis magni nihil natus id molestiae modi.</p>');

-- --------------------------------------------------------

--
-- Estrutura da tabela `imprensa`
--

CREATE TABLE `imprensa` (
  `id` int(11) NOT NULL,
  `titulo` varchar(300) NOT NULL,
  `data` varchar(300) NOT NULL,
  `imagem` varchar(3000) NOT NULL,
  `texto` varchar(3000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `imprensa`
--

INSERT INTO `imprensa` (`id`, `titulo`, `data`, `imagem`, `texto`) VALUES
(1, 'Lançamento | Senhora do amor e da Guerra', '17 junho 2020', 'http://localhost/codemaster/sebastiao/public/Fotos/desktop/imprensa1.jpg', ''),
(2, 'Lançamento do livro \"O velho que pensava que fugia\"', '6 dezembro 2017', 'http://localhost/codemaster/sebastiao/public/Fotos/desktop/imprensa2.jpg', '<p>Terá lugar no dia 6 de dezembro, pelas 18h10, no Anfiteatro Abreu Faro, a sessão de lançamento do livro \"O velho que pensava que fugia\", de Sebastião Alves.</p><p>Nesta sessão o autor irá ler algumas das passagens do livro.</p><p>\"Às quatro da madrugada, que faz um homem de oitenta e três anos escondido entre os eucaliptos?</p><p>De que foge? Que procura? Quem o persegue?</p><p>Onde irá ele arranjar dinheiro para hotéis, táxis, comboios, autocarros?</p><p>Porque elege para refúgio esse remoto lugar de romagem onde uma Virgem Negra acolhe peregrinos desde a Idade Média?</p><p>E que dilema o vem finalmente surpreender, quando pensava ter descoberto a paz e mesmo reencotrado amor?\"</p><p>\"Sebastião Alves nasceu em Lisboa, em 1954. Formou-se em engenharia química pela Universidade de Birmingham, Reino Unido. Professor no Instituto Superior Técnico, é casado e tem duas filhas. Outras obras publicadas: O caracol estrábico (contos), Chiado Editora, 2011.\"</p><p><br><br>&nbsp;</p><p>Notícia de Técnico Lisboa</p><p>https://tecnico.ulisboa.pt/pt/eventos/lancamento-do-livro-o-velho-que-pensava-que-fugia/</p>'),
(3, 'teste', '1234123', 'http://localhost/codemaster/sebastiao/public/Fotos/desktop/imprensa1.jpg', '<p>teste</p>'),
(10, 'Lançamento | Senhora do amor e da Guerra', '17 junho 2020', 'http://localhost/codemaster/sebastiao/public/Fotos/desktop/imprensa1.jpg', ''),
(11, 'Lançamento do livro \"O velho que pensava que fugia\"', '6 dezembro 2017', 'http://localhost/codemaster/sebastiao/public/Fotos/desktop/imprensa2.jpg', '<p>Terá lugar no dia 6 de dezembro, pelas 18h10, no Anfiteatro Abreu Faro, a sessão de lançamento do livro \"O velho que pensava que fugia\", de Sebastião Alves.</p><p>Nesta sessão o autor irá ler algumas das passagens do livro.</p><p>\"Às quatro da madrugada, que faz um homem de oitenta e três anos escondido entre os eucaliptos?</p><p>De que foge? Que procura? Quem o persegue?</p><p>Onde irá ele arranjar dinheiro para hotéis, táxis, comboios, autocarros?</p><p>Porque elege para refúgio esse remoto lugar de romagem onde uma Virgem Negra acolhe peregrinos desde a Idade Média?</p><p>E que dilema o vem finalmente surpreender, quando pensava ter descoberto a paz e mesmo reencotrado amor?\"</p><p>\"Sebastião Alves nasceu em Lisboa, em 1954. Formou-se em engenharia química pela Universidade de Birmingham, Reino Unido. Professor no Instituto Superior Técnico, é casado e tem duas filhas. Outras obras publicadas: O caracol estrábico (contos), Chiado Editora, 2011.\"</p><p><br><br>&nbsp;</p><p>Notícia de Técnico Lisboa</p><p>https://tecnico.ulisboa.pt/pt/eventos/lancamento-do-livro-o-velho-que-pensava-que-fugia/</p>'),
(12, 'teste', '1234123', 'http://localhost/codemaster/sebastiao/public/Fotos/desktop/imprensa1.jpg', '<p>teste</p>'),
(13, 'teste', '1234123', 'http://localhost/codemaster/sebastiao/public/Fotos/desktop/imprensa1.jpg', '<p>teste</p>'),
(35, 'Lançamento | Senhora do amor e da Guerra', '17 junho 2020', 'http://localhost/codemaster/sebastiao/public/Fotos/desktop/imprensa1.jpg', ''),
(36, 'teste', '1234123', 'http://localhost/codemaster/sebastiao/public/Fotos/desktop/imprensa1.jpg', '<p>teste</p>'),
(37, 'Lançamento do livro \"O velho que pensava que fugia\"', '6 dezembro 2017', 'http://localhost/codemaster/sebastiao/public/Fotos/desktop/imprensa2.jpg', '<p>Terá lugar no dia 6 de dezembro, pelas 18h10, no Anfiteatro Abreu Faro, a sessão de lançamento do livro \"O velho que pensava que fugia\", de Sebastião Alves.</p><p>Nesta sessão o autor irá ler algumas das passagens do livro.</p><p>\"Às quatro da madrugada, que faz um homem de oitenta e três anos escondido entre os eucaliptos?</p><p>De que foge? Que procura? Quem o persegue?</p><p>Onde irá ele arranjar dinheiro para hotéis, táxis, comboios, autocarros?</p><p>Porque elege para refúgio esse remoto lugar de romagem onde uma Virgem Negra acolhe peregrinos desde a Idade Média?</p><p>E que dilema o vem finalmente surpreender, quando pensava ter descoberto a paz e mesmo reencotrado amor?\"</p><p>\"Sebastião Alves nasceu em Lisboa, em 1954. Formou-se em engenharia química pela Universidade de Birmingham, Reino Unido. Professor no Instituto Superior Técnico, é casado e tem duas filhas. Outras obras publicadas: O caracol estrábico (contos), Chiado Editora, 2011.\"</p><p><br><br>&nbsp;</p><p>Notícia de Técnico Lisboa</p><p>https://tecnico.ulisboa.pt/pt/eventos/lancamento-do-livro-o-velho-que-pensava-que-fugia/</p>');

-- --------------------------------------------------------

--
-- Estrutura da tabela `informacoes`
--

CREATE TABLE `informacoes` (
  `id` int(11) NOT NULL,
  `telefone` varchar(100) NOT NULL,
  `morada` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `horarios` varchar(300) NOT NULL,
  `instagram` varchar(3000) NOT NULL,
  `facebook` varchar(3000) NOT NULL,
  `linkedin` varchar(3000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `informacoes`
--

INSERT INTO `informacoes` (`id`, `telefone`, `morada`, `email`, `horarios`, `instagram`, `facebook`, `linkedin`) VALUES
(1, '+351 123 456 789', 'Lorem ipsum dolor sit amet. 12 1234-543 Lorem', 'Lorem@lorem.pt', 'De Segunda a Sexta das 00:00h às 00:00h', 'https://www.instagram.com/', 'https://www.facebook.com/', 'https://www.linkedin.com/');

-- --------------------------------------------------------

--
-- Estrutura da tabela `livros`
--

CREATE TABLE `livros` (
  `id` int(11) NOT NULL,
  `activo` tinyint(1) DEFAULT 1,
  `capa` varchar(3000) NOT NULL,
  `observacoes` varchar(100) NOT NULL,
  `titulo` varchar(150) NOT NULL,
  `texto` text NOT NULL,
  `destaque` tinyint(1) NOT NULL,
  `imagem_desktop` varchar(3000) NOT NULL,
  `imagem_mobile` varchar(3000) NOT NULL,
  `data_ultimo_acesso` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `livros`
--

INSERT INTO `livros` (`id`, `activo`, `capa`, `observacoes`, `titulo`, `texto`, `destaque`, `imagem_desktop`, `imagem_mobile`, `data_ultimo_acesso`) VALUES
(1, 1, 'http://localhost/codemaster/sebastiao/public/Fotos/desktop/livro1.jpg', 'Novidade', 'Senhora do amor e da guerra', '<p>Uruk, Mesopotâmia, 3000 a.C. Séculos antes do famoso Gilgamesh, uma bela mulher aparece a comandar os destinos da maior cidade do mundo.<br>Sete extraordinárias plaquetas de barro cozido sugerem a sua história: a inteligência, a coragem, o poder de sedução que a conduzem ao poder vencendo todas as adversidades; a luta contra a corrupção dos sacerdotes de Inanna; a vitória sobre os invasores amorritas; e finalmente o dia em que embarca para o reino das trevas, vitimada pela pestilência, após inundações que cobriram a terra como após um dilúvio bíblico...</p><p>As plaquetas chegam-nos assinadas por Zamug, o Coxo, que abandonou a cidade maldita levando consigo os ensinamentos de Nisaba, ou seja, o segredo da escrita.</p><p>Edição: Junho de 2020<br>Dimensões: 150 x 230 x 10mm<br>Encadernação: Capa mole<br>Páginas: 240</p>', 1, 'http://localhost/codemaster/sebastiao/public/Fotos/desktop/cabecalho1.jpg', 'http://localhost/codemaster/sebastiao/public/Fotos/mobile/cabecalho1.jpg', '0'),
(2, 1, 'http://localhost/codemaster/sebastiao/public/Fotos/desktop/livro-conteudo3.jpg', 'Novidade', 'O caracol estrábico', '<p>Xana desistiu por fim de repelir as atenções de um celibatário de meia idade que lhe aXana desistiu por fim de repelir as atenções de um celibatário de meia idade que lhe apareceu na loja. Este não imagina a surpresa que o aguarda...</p><p>Rodrigo chega a casa angústiado, sabendo que as filhas ficaram sozinhas com a mãe...</p><p>Joaquim acorda e descobre que está cego. A sua reacção não é a que seria de esperar...</p><p>Emigrado em Inglaterra, naturalizado Inglês e pouco orgulhoso das suas origens, António tem de deslocar-se à terra onde, certo dia por engano, a cegonha o depositou.</p><p>O velho professor tenta assegurar-se que está vivo.</p><p>Um pai extraviado telefona à filha dias depois de esta receber a herança.</p><p>Atormentado pelo reumatismo, há dois anos que o velho caçador não pega numa espingarda. Mas no dia do seu nonagésimo aniversário...</p><p>Vendo a bandeira a meia haste, o presidente do Instituto pergunta quem morreu...</p><p>Uma esforçada pintora tenta gerir a relação com a sua talentosa mãe.</p><p>O que poderá impedir um sem-abrigo de atingir a glória?</p><p>Num lar de terceira idade, a amizade entre um surdo e um mudo é perturbada pela chegada de uma enigmática mulher.</p><br><p>Um jovem cientista tem uma inspiração que pode revolucionar a Física Teórica.<br>Infelizmente, como a História não se cansa de demonstrar, os verdadeiros génios não são apenas uns incompreendidos, são uma raça a abater.</p>\r\n<br>\r\n<p>Edição: Agosto de 2011<br>\r\nDimensões: 143 x 220 x 14mm<br>\r\nEncadernação: Capa mole<br>\r\nPáginas: 159</p>', 1, 'http://localhost/codemaster/sebastiao/public/Fotos/desktop/cabecalho2.jpg', 'http://localhost/codemaster/sebastiao/public/Fotos/mobile/cabecalho2.jpg', '0'),
(3, 1, 'http://localhost/codemaster/sebastiao/public/Fotos/desktop/livro3.jpg', 'Novidade', 'O colecionador de amnésias', '<p>Um lapso de memória, um acidente na fábrica... O Engº Zeferino não tem dúvidas: só lhe resta demitir-se. Até porque, tem reparado, lapsos destes tendem a ocorrer-lhe. Espaçados, é certo, mas inevitáveis como o pingar de uma torneira avariada... Decide pois reformar-se e realizar o seu sonho de sempre: escrever um romance. Mas a Ideia não vem e a reforma transforma-se num deserto. Horas, semanas, meses, iguais como grãos de areia... Até ao dia mágico em que, numa tabacaria em Pedrouços, repara num livrinho de absurdos com um título extraordinário: Memórias de um amnésico. E embora sinta que o título lhe foi roubado, ao mesmo tempo já sabe o que vai escrever.<br>Agora trabalha com método. De manhã escreve o passado, aquilo que lhe aconteceu desde o acidente na fábrica, com que se iniciou aquilo a que chama o resto da sua vida. À noite inventa o futuro, pois sabe que não pode dar-se ao luxo de esperar por ele.<br>Como filha e cuidadora de uma doente de Alzheimer, revivi e revi-me, emocionada, em muitas das situações aqui narradas, nos momentos de ternura, de humor, mas também nos momentos de tristeza e solidão que definem o percurso deste homem, desde os tempos em que, embora já atingido pela doença, ainda tinha autonomia... Eis uma forma diferente - e comovente - de falar sobre um doente de Alzheimer.<br>- Manuela Morais, Associação Alzheimer Portugal</p><p>Os direitos de autor revertem para a Alzheimer Portugal</p>', 1, 'http://localhost/codemaster/sebastiao/public/Fotos/desktop/cabecalho3.jpg', 'http://localhost/codemaster/sebastiao/public/Fotos/mobile/cabecalho3.jpg', '0'),
(17, 1, 'http://localhost/codemaster/sebastiao/public/Fotos/desktop/livro-conteudo4.jpg', 'Novidade', 'O velho que pensava que fugia', '<p>Um homem de 83 anos aparece diante do prédio onde era o seu luxuoso apartamento. E vai-se lembrando.<br>Aos poucos o leitor é levado a perceber que o homem fugiu do lar onde esteve durante 18 meses, encarcerado pela família e controlado por drogas, com o pretexto de ser esquizofrénico e não querer largar o comando dos negócios familiares.<br>O velho sobe ao 8º andar, agora ocupado pelo filho, confronta a família, e vai-se recordando de mais coisas. O leitor fica a saber como foi que ele conseguiu fugir, e quais os planos dele.<br><br>De madrugada o velho volta a escapar e seguimos com detalhe as peripécias da sua fuga, sempre um passo adiante de perseguidores reais ou imaginários. A fuga trá-lo a uma aldeia turística em França onde se refugia e se apaixona, assombrado por fantasmas e suspeitas.<br>Então...<br><br><br>Edição: Novembro de 2017<br>Dimensões: 139 x 218 x 13mm<br>Encadernação: Capa mole<br>Páginas: 168</p>', 0, 'http://localhost/codemaster/sebastiao/public/Fotos/desktop/cabecalho4.jpg', 'http://localhost/codemaster/sebastiao/public/Fotos/mobile/cabecalho4.jpg', '0');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `autor`
--
ALTER TABLE `autor`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `imprensa`
--
ALTER TABLE `imprensa`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `informacoes`
--
ALTER TABLE `informacoes`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `livros`
--
ALTER TABLE `livros`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `autor`
--
ALTER TABLE `autor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `home`
--
ALTER TABLE `home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `imprensa`
--
ALTER TABLE `imprensa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT de tabela `informacoes`
--
ALTER TABLE `informacoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `livros`
--
ALTER TABLE `livros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
