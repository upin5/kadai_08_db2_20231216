-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2023-12-14 14:36:12
-- サーバのバージョン： 10.4.32-MariaDB
-- PHP のバージョン: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `manga_db`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `manga_a_table`
--

CREATE TABLE `manga_a_table` (
  `id` int(11) NOT NULL,
  `title` varchar(64) NOT NULL,
  `chala` varchar(128) NOT NULL,
  `nenrei` int(11) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- テーブルのデータのダンプ `manga_a_table`
--

INSERT INTO `manga_a_table` (`id`, `title`, `chala`, `nenrei`, `content`) VALUES
(1, '葬送のフリーレン', 'フリーレン', 1000, '千年以上生きるエルフで、勇者パーティーとして魔王を倒した魔法使い。魔法であればどんなものでも興味を持つ魔法オタク。性格はずぼらでドライ。仲間たちとの旅を経て、知らず知らずのうちにその心にも変化が現れる。'),
(2, '葬送のフリーレン', 'シュタルク', 19, 'フリーレンとフェルンと共に旅をすることになる戦士で、アイゼンの弟子。子どものような性格。臆病ながら高い戦闘力を持ち、前衛を務める。'),
(5, '葬送のフリーレン', 'フェルン', 19, 'フリーレンの弟子として共に旅をすることになる魔法使い。ハイターに育てられた戦災孤児。冷静な少女で、生活面でずぼらなフリーレンのお母さん役。'),
(6, '葬送のフリーレン', 'ヒンメル', 20, '魔王を倒した勇者パーティーの勇者で、自称イケメンのナルシスト。仲間思いで、困っている人を助けずにはいられない。10年間共に冒険をしたフリーレンに大きな影響を与える。'),
(7, '葬送のフリーレン', 'ハイター', 20, '魔王を倒した勇者パーティーの僧侶。ヒンメルの幼馴染で、高度な回復魔法を操る優秀な僧侶だが、酒好き。戦災孤児だったフェルンの育ての親。'),
(8, '葬送のフリーレン', 'アイゼン', 300, '魔王を倒した勇者パーティーの戦士。頑強なドワーフ族でパーティーの前衛を務める。寡黙だが、パーティーの中ではツッコミ役。シュタルクの師匠。'),
(9, '葬送のフリーレン', 'ザイン', 28, '天性の才と呼べる超高度な治癒魔法を駆使する僧侶。かつて夢見ていた冒険者になることを諦めていたが、フリーレンたちとの出会いを機に仲間になる。僧侶なのに酒、たばこ、ギャンブルが好き。'),
(10, 'ゴブリンスレイヤー', 'ゴブリンスレイヤー', 30, '辺境の街で活動している変わり者の冒険者。ゴブリン討伐だけで銀等級（序列三位）にまで上り詰めた稀有な存在。');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `manga_a_table`
--
ALTER TABLE `manga_a_table`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `manga_a_table`
--
ALTER TABLE `manga_a_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
