-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 24 2024 г., 12:44
-- Версия сервера: 8.0.30
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `DiplomDB`
--

-- --------------------------------------------------------

--
-- Структура таблицы `addUser`
--

CREATE TABLE `addUser` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `workplace` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `telephone` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `adress` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `vk` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `telegram` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `addUser`
--

INSERT INTO `addUser` (`id`, `name`, `workplace`, `telephone`, `adress`, `email`, `password`, `status`, `img`, `vk`, `instagram`, `telegram`) VALUES
(42, 'Энакин С', 'Империя', 'Голокрон-23', 'Новая Звезда Смерти', 'test22134@mail.ru', '$2y$10$Qu7tOCdWj.whZabuZeyovuQVTUNHBYORYhyYaw8tZxtgDx5W579Cq', 'Онлайн', 'clone-wars-yoda-1024x580.jpg', '321', '321', '321'),
(44, 'Энакин С2', 'Programmer', '552', 'adress1', '21321123@gmail.com', '$2y$10$VIItZa1OPjCF27dxNbkoa.AHJY5JtnqyVwjOduVi56pk9xktYWf7W', 'Онлайн', 'kot.jpg', '321', '123', '321'),
(45, 'Энакин Сf', 'Programmer', '123', '213', 'tesfa2@gmail.com', '$2y$10$35Hv2RS8y1sc.LkzLsOoc.SAjEZ3TW9phTpAF0dw/RyPrE8QeXEvO', 'Не беспокоить', 'clone-wars-yoda-1024x580.jpg', '321', '132', '321'),
(46, 'Маяк Мудрости223', 'Programmer', '123', '123', 'tes2213t@mail.ru', '$2y$10$F8xjyvLz5bDdbNwM7MDCk.ofvxRNnburbxp3oWiUjhoZatNz7UdWa', 'Не беспокоить', 'anime.jpg', '123', '321', '123'),
(47, 'Маяк Мудрости2221', '132', '3', '123', '123-5@gmail.com', '$2y$10$HZRrkdgNTvrXIRmnFu7l1Oy0QfsuPgkjZk9uf3ugZf8SafneOJnGa', 'Не беспокоить', 'image.png', '', '', ''),
(48, 'Маяк Мудрости001', 'Programmer', '552', 'adress1', 'newEmail1@gmail.com', '$2y$10$lv5xYJRNwh1zhm9w9jdEguovOGwvIhLCpKBEqNdndkbMQfOpJT96S', 'Отошел', 'anime.jpg', 'vk', 'insta', '123'),
(50, 'UseTest1', 'Programmer', '+7-909-212-54-21', 'Street 51', 'kol241@gmail.com', '$2y$10$2xdMv/3yLyDbLXRl6WdMqug7qrNmzBTRWyskugTSiYT..4Fb4VEmK', 'Онлайн', 'anime.jpg', '132', '321', '123'),
(51, 'Emilia', 'Re Zero', 'Darkness', 'Castle of Dragon', 'Emi@gmail.com', '$2y$10$1h2/RU3Ir66QzAsImFy/keeM./fTzqMRJ.1hq6pn.Ep8mqXPG4bq.', 'Онлайн', 'anime.jpg', 'emiLia', 'in1emiLia', 'emiLiaOF1'),
(52, 'Маяк Мудрости', 'Programmer', '552', '123', 'oo@gmail.com', '$2y$10$ZQ6ipUifXMJ71VsWSLTLf.2U/Bd/QCn1J5.v0ki0206UW./KblsG6', 'Не беспокоить', 'clone-wars-yoda-1024x580.jpg', 'vk', 'insta', 'telegram'),
(53, 'Angel', 'Sky', '9-9-9', 'Street 999', 't-01@gmail.com', '$2y$10$HrXCsgiklKSwCgF47oUtB.x5FTW1xmvepvyrCiNlnJ9WiAlK3oa7e', 'Не беспокоить', 'kot.jpg', '', '', ''),
(54, 'Белл Кранел', 'Авантюрист', 'Божественная телепатия', 'Орарио', 'Bell@crannel.com', '$2y$10$e1M0Ys8WdgjZZ6a2Y1IqW.UufczdMXfJTvIxg3UafI.IBIjBbWRzu', 'Онлайн', 'kot.jpg', '', '', ''),
(57, 'fa12', '123', '123', '123', 'nUs@gmail.com', '$2y$10$dDO9qVLSIGyew.N/FpPu5ui7AQEcoLTWBj0LtGlAcH7cw4uiYjqbq', 'Отошел', 'clone-wars-yoda-1024x580.jpg', '', '', ''),
(58, 'kot123', 'Programmer', '552', 'Street 51', 'T-04@gmail.com', '$2y$10$8rCgK1kFnuXv58fCrk7Touk3oZNpJCLuge1X5X2pC6HX/N.wb4nOS', 'Онлайн', 'clone-wars-yoda-1024x580.jpg', '', '', '');

-- --------------------------------------------------------

--
-- Структура таблицы `registerUser`
--

CREATE TABLE `registerUser` (
  `id` int UNSIGNED NOT NULL,
  `emailverify` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `registerUser`
--

INSERT INTO `registerUser` (`id`, `emailverify`, `password`) VALUES
(1, '123312@gmail.com', '$2y$10$v7np3POiiyVMxZHW3mJW/uhehiSiLJfBXi6ECcVPcVwqFYevop09W'),
(2, '1233121@gmail.com', '$2y$10$bVvOjXGcolh8EI4Bmwo86u55icwaKnRl10laE1o52DAt4UFMcHk0K'),
(3, '123@gmail.com', '$2y$10$siKNw9vKYfNl05quM1GUHu0rnWMgGOdTQ1pupbE/06UpO.b.linky'),
(4, 'test@gmail.com', '$2y$10$I4AHIRsVioVYROfv/Ue8yuf4qp0DwUNWqjswGB9H3VJ9EBF3QLpra'),
(5, '1123@gmail.com', '$2y$10$HaetzvYs/Ii.gty.wIyNt.VCEo.Ilcwhbvwz8Jd.GjzyU8by5hvRi'),
(8, 'testGmail@gmail.com', '$2y$10$jJZFj2fZMSG/n3dWpBJS.OC8h39EcuEBMwK/oaGO17Jo5ajSRbe9i'),
(11, 'final@gmail.com', '$2y$10$te/7s.NsP2aMuTbRYlZfq.kTeXfm3aJlT/7eMb9KJBNdHGldrweMG'),
(15, 'Ad@gmail.com', '$2y$10$EghJyYEy.QrX3cIZcJackeSMkmKHH8r44x/iWCUrGFf3K3etXvLV6'),
(17, 'final1@gmail.com', '$2y$10$JXOsAUOo1vBfIxFTxyHfjefX95DON4BRHG5mrisoFhAufxJt6jcbi'),
(19, 'vanek@gmail.com', '$2y$10$U48g5AKGZ66.YNneftonE.qdUd7LlEUB0pWs2UdctKDAKET4yPLNW'),
(21, 'fa@gmail.com', '$2y$10$ZynkX3ryj0VRRntN55DvbelLMzQm8wMXRohHMltMHYlNbFlHOGkjy'),
(25, 'killme123@gmail.com', '$2y$10$UAvN3qTmVSPS6zCsxUpS6u6hBAFV1FMOAkSNLc.vkuCVRMk6Jdofi'),
(26, 'Admin@gmail.com', '$2y$10$dkGicGYm6TbnqciV5dRqxOtDQjOv6ehz93vUq9/CUUp5P7u069JZ.'),
(27, 'newUser123@gmail.com', '$2y$10$g3bu1ys9mnE.6iLFC3snLeUDF9qTLb0HKnt2iDofLvbqUSKm4.n2a'),
(28, 'Admin1@gmail.com', '$2y$10$lMRuxIozwcQb7h9sx01yf.LSNl7en06jzFxzf37idzJ43RuVV9Pke'),
(29, 'TestMail1@gmail.com', '$2y$10$fEMlVyxH.yEXvsVLpfOm4ukOHTrHqmqB95bCUoEAtsUxM.gVCoN/S'),
(31, 'test12@mail.ru', '$2y$10$00zPrqTbF/ZXR.nXiKjAvO7qgfdfQygHSo2lfAKWXE6gNMwsNkVJO'),
(32, 'test13@mail.ru', '$2y$10$LkJ.80NsMiFTazh8xYwbDeQWOldxr5jR4bHGewSnBlkbzPbKACMpy'),
(33, 'emai312l@gmail.com', '$2y$10$vvRQ28z7elD9.ZT47ksycerLCXexD1RoWZmB2m7P/BVx3TjEm4lT.'),
(34, 'testFa123@gmail.com', '$2y$10$qUVGrtHAVDbNB9DEHl8BI.rgdJFFtGiiY8D4DRXPeeUYcyLvdFnrO'),
(35, 'test22122@mail.ru', '$2y$10$z6XgkKhdgqlewbqr9yye8eQLAF.7b5R4cJvmSycGo7QNutZsBASa.'),
(36, 'testMaiagmail1@mail.ru', '$2y$10$RCZD4sCz6pOn4mzXctvI1uUO4n.5YkDZGkUerKMkt4N26PPi4EUk6'),
(37, 'testMaiagmail2@mail.ru', '$2y$10$Lj20Yvlz63JALhCZG4KUd.Y4Ea6u9cOPMHOyJ3bLqdF86ZENzgixm'),
(38, 'testMaiagmail3@mail.ru', '$2y$10$88mD8DDizFrZvuHq2L94yeoFFRAMDqd5AD7PbDuOpGRUSnrwHBoqm'),
(39, 'lMail1@gmail.com', '$2y$10$1jpMSLhN3hbckXcWpGHZ6ec3YBQmfE8pp7oCM6VumVu1iL8gshr8W'),
(40, 'lMail2@mail.ru', '$2y$10$mly9G79PlZh9Xvkj7UrigO.MgjqMJVh/t7j.JM0Fr9b4DM6qRbF..'),
(41, 'test-101@mail.ru', '$2y$10$lByofN8DQustBwvFLFVIpuzQUfUqsI9RGie4GGGLjWaDNKsFTwPsy'),
(42, 'test2213@mail.ru', '$2y$10$1dvy1H38F4Guh/3LGmsozuPcV1Z/59NWu7hqXDIbR.5D5WOqd5Y9S'),
(43, 'test22123@mail.ru', '$2y$10$d.lpcYIEsDpJjMWA0Bsvzuhn4B4qjzsTX1ptCSnyLX/4opHdiaNmm'),
(44, 'test01@mail.ru', '$2y$10$gg9F0gwzvuDy4ZTmKzU5buHnkBC5KsPbXqc.8lY4JJi5BqUNBtKIq'),
(45, 'test02@mail.ru', '$2y$10$8bRLm0bAHE./h24N7Hz2pe0CBO8D97jMTO.GSm3yK/MpjIhGxLrfO'),
(46, 'test03@mail.ru', '$2y$10$cAFncocztBolx3x3zpBD6eKkgW98CaXqF/.icBhYKvlpBS63nl6kO'),
(47, 'test@mail.ru', '$2y$10$oy9lUpHb2nmCQgiWJKn27.pMs.vj1N0ZGnG3/yoF1P/2QFy3gIwNG'),
(48, 'newEmail1@gmail.com', '$2y$10$lv5xYJRNwh1zhm9w9jdEguovOGwvIhLCpKBEqNdndkbMQfOpJT96S'),
(49, 'test003@mail.ru', '$2y$10$5UcE5Vp/xaqk2kpLkIFuS.JmNYthm4mFCsoxZUr209A.EwrIIBB8m'),
(50, 'test2221@mail.ru', '$2y$10$5OwNVWk9y9KXVDHm.fhFL.edgVeHMDOVDnh1oZtK4RYiGrUEm8WCq'),
(51, 'test221321@mail.ru', '$2y$10$IXiGeWx3sY4wcbxHi/L2bumvPTYdJ9MRrUXSpWCYVCIgqtIV/L8CO'),
(52, 'oo@gmail.com', '$2y$10$ZQ6ipUifXMJ71VsWSLTLf.2U/Bd/QCn1J5.v0ki0206UW./KblsG6'),
(53, 'fantasy23@gmail.com', '$2y$10$pkoaBm5bFH2z.qofkTPp2eyPVRuadruHaehjx8D7r71fUIn9tVU.K'),
(54, 'Fanta@gmail.com', '$2y$10$dFt8dXQaBbFtp9bU3VwcOOGZQ4O7NnOpvVTZfmDQzH8T7h758V/eO'),
(55, 'test22155@mail.ru', '$2y$10$iOPilMZ3xWQCMc/ZvjvnD.Gj3PLgxu.dccsbxOKp4F7tPSiBdPhBu'),
(56, 'fantasy231@gmail.com', '$2y$10$OVPyOmVRPmLEe5PDUuQyLuNq.COaAJSoFzNz6oJR3Oi2byP0iXQhW'),
(57, 'tes221t@mail.ru', '$2y$10$UOy0yHDbvVzX9UH06D9hNurfk.HY7C/ksKIOkkvClC/Ilw5TInYoq'),
(58, 't213est@mail.ru', '$2y$10$gnlH5UEj9HJeplO3/Rsxgei10NvNwofqa.X3KeNFGFgMR.M04oUqS'),
(59, 'test22134@mail.ru', '$2y$10$Qu7tOCdWj.whZabuZeyovuQVTUNHBYORYhyYaw8tZxtgDx5W579Cq'),
(60, '12223@gmail.com', '$2y$10$Yd5WJg2TFLjE4VlDMBl8buDPUWlxEBpY85XZkgQsAbBBpyhzJbHU6'),
(61, '21321123@gmail.com', '$2y$10$VIItZa1OPjCF27dxNbkoa.AHJY5JtnqyVwjOduVi56pk9xktYWf7W'),
(62, 'lMail31@gmail.com', '$2y$10$57E0jnS1QCVVebvZFONaiuShRAtcHI4bg9QrMVpugqhk6Krdv/nbi'),
(63, 'lMail321@gmail.com', '$2y$10$Np0V81z2f/gVzm1UmUzmtubxhsHIgkoQjspjnnVYD1zXTNUd4MyYW'),
(66, 'lMail003@gmail.com', '$2y$10$IDDc4QE0wyAvaXNCJ6tVgOWaR3MeGj5J/TjptFFgLfIJR5wYLX2oy'),
(67, 'lMail004@gmail.com', '$2y$10$Xsa2CdnybbmAz8sHpsf9AujX.V22F0BrvqRCZj4z1htqhMSjGZT.C'),
(68, 'lMail005@gmail.com', '$2y$10$SN8026NKKXmspHZlCSKAoeeqMWyQrDqmXwsCrmrdsHMHAmlTTzupu'),
(69, 'tesfa1@gmail.com', '$2y$10$Pm6MEf/r06h0jUpJo7z1N.whEXIpQHTQCd2Wt193kWSrPkfQNnTwu'),
(70, 'tes2213t@mail.ru', '$2y$10$F8xjyvLz5bDdbNwM7MDCk.ofvxRNnburbxp3oWiUjhoZatNz7UdWa'),
(71, '123-5@gmail.com', '$2y$10$HZRrkdgNTvrXIRmnFu7l1Oy0QfsuPgkjZk9uf3ugZf8SafneOJnGa'),
(72, 'test--01@mail.ru', '$2y$10$Ptq6rjiC7bZ3GpTWIWtwzuFl4gq.XaugU4FZiBJ0iSeBnhKXFmHWi'),
(73, 'test412@mail.ru', '$2y$10$VeFT/TnlU21fWAAvRz/o9ugT3/OKPtV3jSFjb4ygEl1xngroZ8P9a'),
(74, 'kol241@gmail.com', '$2y$10$2xdMv/3yLyDbLXRl6WdMqug7qrNmzBTRWyskugTSiYT..4Fb4VEmK'),
(75, 'Emi@gmail.com', '$2y$10$1h2/RU3Ir66QzAsImFy/keeM./fTzqMRJ.1hq6pn.Ep8mqXPG4bq.'),
(76, 'lMail--1@gmail.com', '$2y$10$uYuSyIEgeppGvEfMF55.KOBFhkDiqN7QkKR/oBw6hotdjlZgK5uTC'),
(77, 't-01@gmail.com', '$2y$10$HrXCsgiklKSwCgF47oUtB.x5FTW1xmvepvyrCiNlnJ9WiAlK3oa7e'),
(78, 'Bell@crannel.com', '$2y$10$e1M0Ys8WdgjZZ6a2Y1IqW.UufczdMXfJTvIxg3UafI.IBIjBbWRzu'),
(79, 'NewUser001@gmail.com', '$2y$10$5tP3h815YWMZhVhaxPFoFOr2qUiJ08TjfjXyPXN6EKF/3IV4nno8O'),
(80, 'NewUs012@gmail.com', '$2y$10$dqlNhB.0IB5xn4q0LtDuqemM7tB2QGkYbYduB.B6/iNRRcdFtICVO'),
(81, 'nUs@gmail.com', '$2y$10$dDO9qVLSIGyew.N/FpPu5ui7AQEcoLTWBj0LtGlAcH7cw4uiYjqbq'),
(83, 'T-04@gmail.com', '$2y$10$8rCgK1kFnuXv58fCrk7Touk3oZNpJCLuge1X5X2pC6HX/N.wb4nOS');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `addUser`
--
ALTER TABLE `addUser`
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `registerUser`
--
ALTER TABLE `registerUser`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `addUser`
--
ALTER TABLE `addUser`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT для таблицы `registerUser`
--
ALTER TABLE `registerUser`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
