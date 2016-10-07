--
-- Скрипт сгенерирован Devart dbForge Studio for MySQL, Версия 7.1.30.0
-- Домашняя страница продукта: http://www.devart.com/ru/dbforge/mysql/studio
-- Дата скрипта: 07.10.2016 16:59:08
-- Версия сервера: 5.5.5-10.1.9-MariaDB
-- Версия клиента: 4.1
--


-- 
-- Отключение внешних ключей
-- 
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;

-- 
-- Установить режим SQL (SQL mode)
-- 
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- 
-- Установка кодировки, с использованием которой клиент будет посылать запросы на сервер
--
SET NAMES 'utf8';

-- 
-- Установка базы данных по умолчанию
--
USE bmw_db;

--
-- Описание для таблицы blocks
--
DROP TABLE IF EXISTS blocks;
CREATE TABLE blocks (
  id INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  title_block VARCHAR(255) NOT NULL,
  remember_token VARCHAR(100) DEFAULT NULL,
  created_at TIMESTAMP NULL DEFAULT NULL,
  updated_at TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (id)
)
ENGINE = INNODB
AUTO_INCREMENT = 3
AVG_ROW_LENGTH = 8192
CHARACTER SET utf8
COLLATE utf8_unicode_ci;

--
-- Описание для таблицы migrations
--
DROP TABLE IF EXISTS migrations;
CREATE TABLE migrations (
  migration VARCHAR(255) NOT NULL,
  batch INT(11) NOT NULL
)
ENGINE = INNODB
AVG_ROW_LENGTH = 4096
CHARACTER SET utf8
COLLATE utf8_unicode_ci;

--
-- Описание для таблицы news
--
DROP TABLE IF EXISTS news;
CREATE TABLE news (
  id INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  title VARCHAR(255) NOT NULL,
  url VARCHAR(255) NOT NULL,
  text_description TEXT NOT NULL,
  text TEXT NOT NULL,
  dt VARCHAR(255) NOT NULL,
  img_news VARCHAR(255) NOT NULL,
  img_news_open VARCHAR(255) NOT NULL,
  meta_title VARCHAR(255) NOT NULL,
  meta_keywords VARCHAR(255) NOT NULL,
  meta_description VARCHAR(255) NOT NULL,
  remember_token VARCHAR(100) DEFAULT NULL,
  created_at TIMESTAMP NULL DEFAULT NULL,
  updated_at TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (id)
)
ENGINE = INNODB
AUTO_INCREMENT = 1
CHARACTER SET utf8
COLLATE utf8_unicode_ci;

--
-- Описание для таблицы pages
--
DROP TABLE IF EXISTS pages;
CREATE TABLE pages (
  id INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  title VARCHAR(255) NOT NULL,
  url VARCHAR(255) NOT NULL,
  title_meta VARCHAR(255) NOT NULL,
  keywords VARCHAR(255) NOT NULL,
  description VARCHAR(255) NOT NULL,
  text TEXT NOT NULL,
  parent_id INT(11) NOT NULL,
  block_id INT(11) NOT NULL,
  display_page INT(11) NOT NULL,
  remember_token VARCHAR(100) DEFAULT NULL,
  created_at TIMESTAMP NULL DEFAULT NULL,
  updated_at TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (id)
)
ENGINE = INNODB
AUTO_INCREMENT = 6
AVG_ROW_LENGTH = 4096
CHARACTER SET utf8
COLLATE utf8_unicode_ci;

--
-- Описание для таблицы password_resets
--
DROP TABLE IF EXISTS password_resets;
CREATE TABLE password_resets (
  email VARCHAR(255) NOT NULL,
  token VARCHAR(255) NOT NULL,
  created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  INDEX password_resets_email_index (email),
  INDEX password_resets_token_index (token)
)
ENGINE = INNODB
CHARACTER SET utf8
COLLATE utf8_unicode_ci;

--
-- Описание для таблицы settings
--
DROP TABLE IF EXISTS settings;
CREATE TABLE settings (
  id INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  email VARCHAR(255) NOT NULL,
  phone_sov VARCHAR(255) NOT NULL,
  phone_bej VARCHAR(255) DEFAULT NULL,
  remember_token VARCHAR(100) DEFAULT NULL,
  created_at TIMESTAMP NULL DEFAULT NULL,
  updated_at TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (id)
)
ENGINE = INNODB
AUTO_INCREMENT = 2
CHARACTER SET utf8
COLLATE utf8_unicode_ci;

--
-- Описание для таблицы users
--
DROP TABLE IF EXISTS users;
CREATE TABLE users (
  id INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  name VARCHAR(255) NOT NULL,
  email VARCHAR(255) NOT NULL,
  password VARCHAR(255) NOT NULL,
  remember_token VARCHAR(100) DEFAULT NULL,
  created_at TIMESTAMP NULL DEFAULT NULL,
  updated_at TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (id),
  UNIQUE INDEX users_email_unique (email)
)
ENGINE = INNODB
AUTO_INCREMENT = 2
CHARACTER SET utf8
COLLATE utf8_unicode_ci;

-- 
-- Вывод данных для таблицы blocks
--
INSERT INTO blocks VALUES
(1, 'Левое меню', NULL, NULL, NULL),
(2, 'Верхнее меню', NULL, NULL, NULL);

-- 
-- Вывод данных для таблицы migrations
--
INSERT INTO migrations VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_10_04_091215_CreateNews', 2),
('2016_10_04_113435_CreateBlocls', 2),
('2016_10_04_122305_CreateSettings', 3),
('2016_10_05_064605_CreatePages', 4);

-- 
-- Вывод данных для таблицы news
--

-- Таблица bmw_db.news не содержит данных

-- 
-- Вывод данных для таблицы pages
--
INSERT INTO pages VALUES
(1, 'Главная', '/', 'Автошкола БМВ', 'Автошкла Брянск', 'Автошкола БМВ Брянск сдать на права', '<p>Гарантия качества профессионального обучения - это основная цель и главный принцип работы Автошколы БМВ Брянска.</p>\r\n\r\n<p>Автошкола БМВ города Брянска - Брянская Автошкола с удобным для Вас графиком.</p>\r\n\r\n<p>Занятия по теории проводятся в утреннее и в вечернее время. Возможны индивидуальные занятия. С инструктором по вождению график занятий Автошколы БМВ Брянска составляется индивидуально, исходя из возможностей ученика.</p>\r\n\r\n<p>Каждая группа в нашей Автошколе БМВ Брянска &mdash; большая семья. И всегда грустно расставаться.</p>\r\n\r\n<p>Автошкола города Брянска БМВ предлагает ученикам организованно сдать экзамены в ГИБДД - с нашим представителем и на автомобиле, предоставленном автошколой.</p>\r\n\r\n<p>Прошедшим полный курс профессионального обучения выдается свидетельство установленного образца о получении профессии водителя.</p>\r\n\r\n<p>Автошкола БМВ города Брянска остается с Вами до получения водительского удостоверения в ГИБДД.</p>\r\n\r\n<p>Куда пойти учиться?</p>\r\n\r\n<p>Наша Автошкола Брянска полностью соответствует всем требованиям, предъявляемым ГИБДД и Департаментом образования и науки к профессиональному обучению водителей. Наши инструкторы имеют большой водительский и педагогический стаж и виртуозно разбираются как в любой ситуации на дороге, так и в устройстве легковых автомобилей различных марок.</p>\r\n\r\n<p>Помимо теоретических знаний ПДД и практики вождения автомобиля, курсанты получают знания по:</p>\r\n\r\n<ul>\r\n\t<li>Юридическим вопросам, связанным с управлением транспортных средств и регистрационным действиям с ними;</li>\r\n\t<li>Последствиям аварий и катастроф и способам оказания первой медицинской помощи в критических ситуациях;</li>\r\n\t<li>Основным правилам эксплуатации авто различных модификаций, а также базовым знаниям по техническому устройству автомобиля.</li>\r\n</ul>\r\n\r\n<p>Возможности, которые даёт Автошкола БМВ Брянска:</p>\r\n\r\n<p>Перед началом практических занятий по вождению курсанты могут выбрать марку автомобиля, а также конкретного инструктора.</p>\r\n\r\n<p>Техническое оснащение автошколы компьютерами с соответствующим программным обеспечением позволяет курсантам получить все необходимые знания правил дорожного движения и успешно сдать квалификационный экзамен в Автошколе БМВ Брянска перед экзаменом в ГИБДД.</p>\r\n\r\n<p>Курсанты, прошедшие профессиональное обучение в нашей Автошколе БМВ Брянска, приходят в ГИБДД подготовленными от и до. Если вам нужно качественное и профессиональное обучение, приходите в нашу Автошколу БМВ &ndash; мы станем для Вас первым шагом на пути к осуществлению Вашей Мечты!</p>\r\n\r\n<p>Автошкола БМВ &ndash; Управляй Мечтой Достойно!</p>\r\n', 0, 0, 0, NULL, '2016-10-05 09:05:06', '2016-10-05 09:05:06'),
(2, 'Обучение', 'obuchenie', '2', '1', 'Обучение в автошколе БМВ', '<table border="1" cellpadding="0" cellspacing="0">\r\n\t<tbody>\r\n\t\t<tr>\r\n\t\t\t<td style="width:213px">\r\n\t\t\t<p>1</p>\r\n\t\t\t</td>\r\n\t\t\t<td colspan="2" style="width:213px">\r\n\t\t\t<p>2</p>\r\n\t\t\t</td>\r\n\t\t\t<td style="width:213px">\r\n\t\t\t<p>3</p>\r\n\t\t\t</td>\r\n\t\t</tr>\r\n\t\t<tr>\r\n\t\t\t<td style="width:213px">\r\n\t\t\t<p>&nbsp;</p>\r\n\t\t\t</td>\r\n\t\t\t<td style="width:95px">\r\n\t\t\t<p>4</p>\r\n\t\t\t</td>\r\n\t\t\t<td style="width:118px">\r\n\t\t\t<p>5</p>\r\n\t\t\t</td>\r\n\t\t\t<td style="width:213px">\r\n\t\t\t<p>&nbsp;</p>\r\n\t\t\t</td>\r\n\t\t</tr>\r\n\t\t<tr>\r\n\t\t\t<td style="width:213px">\r\n\t\t\t<p>&nbsp;</p>\r\n\t\t\t</td>\r\n\t\t\t<td style="width:95px">\r\n\t\t\t<p>&nbsp;</p>\r\n\t\t\t</td>\r\n\t\t\t<td style="width:118px">\r\n\t\t\t<p>&nbsp;</p>\r\n\t\t\t</td>\r\n\t\t\t<td style="width:213px">\r\n\t\t\t<p>&nbsp;</p>\r\n\t\t\t</td>\r\n\t\t</tr>\r\n\t\t<tr>\r\n\t\t\t<td style="width:213px">\r\n\t\t\t<p>&nbsp;</p>\r\n\t\t\t</td>\r\n\t\t\t<td style="width:95px">\r\n\t\t\t<p>&nbsp;</p>\r\n\t\t\t</td>\r\n\t\t\t<td style="width:118px">\r\n\t\t\t<p>&nbsp;</p>\r\n\t\t\t</td>\r\n\t\t\t<td style="width:213px">\r\n\t\t\t<p>&nbsp;</p>\r\n\t\t\t</td>\r\n\t\t</tr>\r\n\t\t<tr>\r\n\t\t\t<td style="width:213px">\r\n\t\t\t<p>&nbsp;</p>\r\n\t\t\t</td>\r\n\t\t\t<td style="width:95px">\r\n\t\t\t<p>&nbsp;</p>\r\n\t\t\t</td>\r\n\t\t\t<td style="width:118px">\r\n\t\t\t<p>&nbsp;</p>\r\n\t\t\t</td>\r\n\t\t\t<td style="width:213px">\r\n\t\t\t<p>&nbsp;</p>\r\n\t\t\t</td>\r\n\t\t</tr>\r\n\t\t<tr>\r\n\t\t\t<td style="width:213px">\r\n\t\t\t<p>&nbsp;</p>\r\n\t\t\t</td>\r\n\t\t\t<td style="width:95px">\r\n\t\t\t<p>&nbsp;</p>\r\n\t\t\t</td>\r\n\t\t\t<td style="width:118px">\r\n\t\t\t<p>&nbsp;</p>\r\n\t\t\t</td>\r\n\t\t\t<td style="width:213px">\r\n\t\t\t<p>&nbsp;</p>\r\n\t\t\t</td>\r\n\t\t</tr>\r\n\t</tbody>\r\n</table>\r\n', 0, 1, 0, NULL, '2016-10-05 13:07:33', '2016-10-05 13:07:33'),
(3, 'Абитуриентам', 'abiturientam', '111222', 'asdas dksajdkl j', 'sdasadsad sadd sa d adasdwds sadsad asd asd', '<p class="hello">1111Автошкола города Брянска БМВ предлагает ученикам (вне зависимости от места прописки) организованно сдать экзамены в ГИБДД - с нашим представителем и на автомобиле, предоставленном автошколой.</p>\r\n\r\n<p>Прошедшим полный курс обучения выдается свидетельство установленного образца об окончании Автошколы Брянска.Автошкола БМВ города Брянска остается с Вами до получения водительского удостоверения в ГИБДД.</p>\r\n\r\n<p>Куда пойти учиться?</p>\r\n\r\n<p>Наша Автошкола Брянска полностью соответствует всем требованиям, предъявляемым ГИБДД и Департамента образования и науки к обучению водителей категории В.</p>\r\n\r\n<p>Наши автоинструкторы имеют большой водительский и педагогический стаж и виртуозно разбираются как в любой ситуации на дороге, так и в устройстве легковых автомобилей различных марок.</p>\r\n\r\n<p>Помимо теоретической подготовки и практики вождения автомобиля курсанты получают знания по:</p>\r\n\r\n<ul>\r\n\t<li>Юридическим вопросам, связанным с управлением транспортных средств и регистрационным действиям с ними;</li>\r\n\t<li>Последствиям аварий и катастроф и способам оказания первой медицинской помощи в критических ситуациях;</li>\r\n\t<li>Основным правилам эксплуатации авто различных модификаций, а также базовым знаниям по техническому устройству автомобиля.</li>\r\n</ul>\r\n\r\n<p>Возможности, которые даёт автошкола БМВ Брянска</p>\r\n\r\n<p>Перед началом практических занятий по вождению курсанты могут выбрать марку автомобиля, а также конкретного инструктора.</p>\r\n\r\n<p>Все желающие могут пройти прямо в автошколе медицинское освидетельствование, необходимое для допуска к экзаменам в ГИБДД. Техническое оснащение автошколы компьютерами с соответствующим программным обеспечением позволяет курсантам получить все необходимые знания правил дорожного движения и успешно сдать квалификационный экзамен в Автошколе БМВ Брянска перед экзаменом в ГИБДД.</p>\r\n\r\n<p>Курсанты, прошедшие профессиональное обучение в нашей Автошколе БМВ Брянска, приходят в ГИБДД подготовленными от и до.</p>\r\n\r\n<p>Если вам нужно качественное и профессиональное обучение в Автошколе Брянска, приходите в нашу Автошколу Брянска БМВ и получайте знания, навыки &ndash; желанные права управления транспортным средством.</p>\r\n\r\n<p>Всё это мы вам гарантируем!</p>\r\n', 0, 1, 0, NULL, '2016-10-05 13:59:12', '2016-10-07 09:08:57'),
(4, 'Учащимся', 'uchaschimsya', 'Автошкола БМВ', 'Автошкла Брянск', 'sdasadsad sadd sa d adasdwds sadsad asd asd', '<h3>Расписание занятий</h3>\r\n\r\n<table>\r\n\t<tbody>\r\n\t\t<tr>\r\n\t\t\t<td>№ урока</td>\r\n\t\t\t<td>Начало</td>\r\n\t\t\t<td>Окончание</td>\r\n\t\t\t<td>Перерыв</td>\r\n\t\t</tr>\r\n\t\t<tr>\r\n\t\t\t<td colspan="4">Утро</td>\r\n\t\t</tr>\r\n\t\t<tr>\r\n\t\t\t<td>1</td>\r\n\t\t\t<td>09:00</td>\r\n\t\t\t<td>09:45</td>\r\n\t\t\t<td>5 минут</td>\r\n\t\t</tr>\r\n\t\t<tr>\r\n\t\t\t<td>2</td>\r\n\t\t\t<td>09:00</td>\r\n\t\t\t<td>09:45</td>\r\n\t\t\t<td>5 минут</td>\r\n\t\t</tr>\r\n\t\t<tr>\r\n\t\t\t<td>3</td>\r\n\t\t\t<td>09:00</td>\r\n\t\t\t<td>09:45</td>\r\n\t\t\t<td>5 минут</td>\r\n\t\t</tr>\r\n\t\t<tr>\r\n\t\t\t<td>4</td>\r\n\t\t\t<td>09:00</td>\r\n\t\t\t<td>09:45</td>\r\n\t\t\t<td>5 минут</td>\r\n\t\t</tr>\r\n\t\t<tr>\r\n\t\t\t<td colspan="4">Вечер</td>\r\n\t\t</tr>\r\n\t\t<tr>\r\n\t\t\t<td>1</td>\r\n\t\t\t<td>09:00</td>\r\n\t\t\t<td>09:45</td>\r\n\t\t\t<td>5 минут</td>\r\n\t\t</tr>\r\n\t\t<tr>\r\n\t\t\t<td>2</td>\r\n\t\t\t<td>09:00</td>\r\n\t\t\t<td>09:45</td>\r\n\t\t\t<td>5 минут</td>\r\n\t\t</tr>\r\n\t\t<tr>\r\n\t\t\t<td>3</td>\r\n\t\t\t<td>09:00</td>\r\n\t\t\t<td>09:45</td>\r\n\t\t\t<td>5 минут</td>\r\n\t\t</tr>\r\n\t\t<tr>\r\n\t\t\t<td>4</td>\r\n\t\t\t<td>09:00</td>\r\n\t\t\t<td>09:45</td>\r\n\t\t\t<td>5 минут</td>\r\n\t\t</tr>\r\n\t</tbody>\r\n</table>\r\n', 0, 1, 0, NULL, '2016-10-05 14:00:58', '2016-10-05 14:00:58'),
(5, 'Вакансии', 'vakansii', 'Вакансии', '2', '2', '<p>ЧУПО &quot;Автошкола БМВ&quot;</p>\r\n\r\n<p><span style="color:#FF0000">Требуются:</span></p>\r\n\r\n<p><span style="background-color:#FF8C00">- Преподаватель теории</span></p>\r\n\r\n<p>- Мастер производственного обучения</p>\r\n', 0, 1, 0, NULL, '2016-10-06 13:34:37', '2016-10-06 13:34:37');

-- 
-- Вывод данных для таблицы password_resets
--

-- Таблица bmw_db.password_resets не содержит данных

-- 
-- Вывод данных для таблицы settings
--
INSERT INTO settings VALUES
(1, 'bmw32@gmail.com', '+7 (4832) 30-02-17', '+7 (4832) 30-04-17', NULL, '2016-10-04 16:09:44', '2016-10-06 13:33:24');

-- 
-- Вывод данных для таблицы users
--
INSERT INTO users VALUES
(1, 'admin', 'bmw32@bmw.local', '$2y$10$fhY43DnjBpLaTw2psx981eQkxwOXHMVj24GHhSjn6gRZmNyWHQD6G', 'KFKI8UajgkimMBobMbzzl9N1leV8367m5bdweYdetz8z4old9swgQFjWc6AY', '2016-10-04 11:57:09', '2016-10-04 12:28:00');

-- 
-- Восстановить предыдущий режим SQL (SQL mode)
-- 
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;

-- 
-- Включение внешних ключей
-- 
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;