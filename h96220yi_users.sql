-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Июн 04 2023 г., 12:56
-- Версия сервера: 5.7.21-20-beget-5.7.21-20-1-log
-- Версия PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `h96220yi_users`
--

-- --------------------------------------------------------

--
-- Структура таблицы `games`
--
-- Создание: Май 28 2023 г., 13:02
--

DROP TABLE IF EXISTS `games`;
CREATE TABLE `games` (
  `gameId` int(11) NOT NULL,
  `gameName` varchar(70) NOT NULL,
  `bigCover` varchar(255) NOT NULL,
  `miniCover` varchar(255) NOT NULL,
  `developer` varchar(30) NOT NULL,
  `publisher` varchar(30) NOT NULL,
  `genre` varchar(30) NOT NULL,
  `releaseDate` date NOT NULL,
  `description` varchar(500) NOT NULL,
  `gameLink` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `games`
--

INSERT INTO `games` (`gameId`, `gameName`, `bigCover`, `miniCover`, `developer`, `publisher`, `genre`, `releaseDate`, `description`, `gameLink`) VALUES
(2, 'Atomic Heart', 'Images/bigCover/AtomicHeart_BG.jpg', 'Images/miniCover/56297_Atomic_Heart.jpg', 'Mundfish', 'Mundfish', 'Шутер', '2023-02-21', 'Atomic Heart - приключенческий шутер от первого лица, события которого разворачиваются в альтернативной вселенной во времена расцвета Советского Союза. Главным героем игры является специальный агент майор Нечаев, который после недачной посадки на предприятие \"3826\" пытается выяснить, что пошло не так.', 'AtomicHeart'),
(4, 'Cyberpunk 2077', 'Images/bigCover/Cyberpunk2077.jpg', 'Images/miniCover/Cyberpunk2077.png', 'CD Project Red', 'CD Project Red', 'Экшен-RPG', '2020-12-10', 'Компьютерная игра в жанре Экшен-RPG в открытом мире, разработанная и изданная польской студией CD Projekt. Действие игры происходит в 2077 году в Найт-Сити, вымышленном североамериканском городе из вселенной Cyberpunk. Игрок управляет настраиваемым протагонистом по имени Ви, который работает наёмником и владеет навыками взлома и боя.', 'Cyberpunk2077'),
(5, 'Horizon: Forbidden West', 'Images/bigCover/Horizon.jpg', 'Images/miniCover/Horizon.png', 'Guerilla Games', 'PlayStation Stoudios', 'Экшен-RPG', '2022-02-18', 'Сиквел Horizon: Zero Dawn, продолжающий историю Элой в её путешествии на запад по Америке далёкого будущего. Главной героине снова предстоит отправиться исследовать опасные земли, где она встретится с невероятными машинами и загадочными новыми угрозами.', 'HorizonFW'),
(6, 'Resident Evil 4', 'Images/bigCover/RE4.jpg', 'Images/miniCover/RE4.png', 'Capcom', 'Capcom', 'Хоррор', '2023-03-24', 'В Resident Evil 4 под управление игрока попадает специальный агент Леон С. Кеннеди, которому поручили важное задание — спасти похищенную дочь президента США. Расследование приводит нашего героя в захолустную европейскую деревню, населённую жестокими фанатиками из таинственной секты Лос-Иллюминадос, которые, судя по всему, ответственны за это похищение. В процессе расследования Леону предстоит столкнуться с чудовищными мутантами и враждебно настроенными жителями деревни, чей разум порабощён параз', 'ResidentEvil423'),
(7, 'Hogwarts Legacy', 'Images/bigCover/Hogwarts.jpg', 'Images/miniCover/Hogwarts.png', 'Avalanche Software', 'WB Games', 'Экшен-RPG', '2023-02-10', 'Компьютерная игра в жанре action/RPG, разработанная американской студией Avalanche Software и изданная Warner Bros. Interactive Entertainment под лейблом Portkey Games. Действие игры разворачивается в фэнтезийной вселенной «Гарри Поттера» в XIX веке.', 'HogwartsLegacy'),
(8, 'Marvel\'s Spider-Man: Miles Morales', 'Images/bigCover/SMMM.jpg', 'Images/miniCover/SMMM.png', 'Insomniac Games', 'PlayStation Studios', 'Экшен от 3 лица', '2020-11-12', 'Спин-офф Marvel\'s Spider-Man, в котором игрокам достаётся роль Майлза Моралеса, который только учится владеть невероятной силой, чтобы впоследствии стать новым Человеком-пауком. Юный Майлз Моралес пытается привыкнуть к своему новому дому и продолжает дело своего наставника Питера Паркера в качестве нового Человека-паука.', 'SpiderManMilesMorales');

-- --------------------------------------------------------

--
-- Структура таблицы `reviews`
--
-- Создание: Май 28 2023 г., 14:26
--

DROP TABLE IF EXISTS `reviews`;
CREATE TABLE `reviews` (
  `reviewId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `gameId` int(11) NOT NULL,
  `reviewSod` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `reviews`
--

INSERT INTO `reviews` (`reviewId`, `userId`, `gameId`, `reviewSod`) VALUES
(2, 4, 2, '\"Слава Союзу Советских Социалистических Республик!\"'),
(3, 3, 2, 'Отличная игра всем советую, правда очень легкая.'),
(4, 2, 2, 'Очень душно. ОЧЕНЬ ДУШНО.'),
(7, 2, 4, '\"Cyberpunk 2077\" - ошеломляющий мир будущего. Огромный открытый город Найт-Сити, пропитанный киберпанк эстетикой, впечатляет своей детализацией. Ролевая система позволяет создать уникального персонажа и влиять на сюжет с помощью выборов. Однако, игра страдает от технических проблем, недоработок и багов, что портит общее впечатление. Несмотря на это, \"Cyberpunk 2077\" предлагает глубокий геймплей, захватывающие миссии и захватывающую историю в жанре.'),
(11, 1, 2, 'Попытка написать отзыв для теста'),
(14, 3, 2, 'Вторая попытка отзыва'),
(21, 1, 5, 'jljlkl;k;lk;lk;lk;;k;');

-- --------------------------------------------------------

--
-- Структура таблицы `reviewsReacts`
--
-- Создание: Май 28 2023 г., 10:33
--

DROP TABLE IF EXISTS `reviewsReacts`;
CREATE TABLE `reviewsReacts` (
  `reviewReacteId` int(11) NOT NULL,
  `reviewId` int(11) NOT NULL,
  `reaction` varchar(1) NOT NULL,
  `userId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `reviewsReacts`
--

INSERT INTO `reviewsReacts` (`reviewReacteId`, `reviewId`, `reaction`, `userId`) VALUES
(3, 3, 'b', 1),
(4, 4, 'g', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--
-- Создание: Май 28 2023 г., 10:01
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `userId` int(11) NOT NULL,
  `userName` varchar(20) NOT NULL,
  `userLogin` varchar(255) NOT NULL,
  `userPassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`userId`, `userName`, `userLogin`, `userPassword`) VALUES
(1, 'Rubelewaskes', 'f4f503dac347f7bf4075f420b8ce51b3', '$2y$10$qSsQjLsNQX9pyfeOf.UXDexduYzveJYuKvFkJnK7/fXuLsbHG1B86'),
(2, 'nukieXL', 'f3823e2c1c14200ecb0cfd05faea7268', '$2y$10$urLLBE5QOYbzW737/is9GuLyN5K6DGEwrTeb39HI6wp.gvWDuY82K'),
(3, 'Lord Rubelewaskes', 'ec1056933c5583f54bd24d93ab679db8', '$2y$10$c3No.7XBQX3TRdIxkbl8k.VfZTYXQfifmiy4mYoaJjqeoLCJUzQcO'),
(4, 'The One Darker', '2a70414143c5b267d4346fccb3c8d6cf', '$2y$10$o9vou6GXOUGShL0wvbVvhOy1MunFU9wKzHs/6LwRgx0TujCadLjBe'),
(5, 'asd', '098f6bcd4621d373cade4e832627b4f6', '$2y$10$5wbAFyxPX8Tu8NPsmRLgdef5aBRzyo3D27tpnksOhfAqdTUP42/Hu');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`gameId`);

--
-- Индексы таблицы `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`reviewId`),
  ADD KEY `userId` (`userId`),
  ADD KEY `gameId` (`gameId`);

--
-- Индексы таблицы `reviewsReacts`
--
ALTER TABLE `reviewsReacts`
  ADD PRIMARY KEY (`reviewReacteId`),
  ADD KEY `reviewId` (`reviewId`),
  ADD KEY `reaction` (`reaction`),
  ADD KEY `userId` (`userId`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`),
  ADD UNIQUE KEY `userName` (`userName`),
  ADD UNIQUE KEY `userLogin` (`userLogin`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `games`
--
ALTER TABLE `games`
  MODIFY `gameId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `reviews`
--
ALTER TABLE `reviews`
  MODIFY `reviewId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT для таблицы `reviewsReacts`
--
ALTER TABLE `reviewsReacts`
  MODIFY `reviewReacteId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
