-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- 主机： localhost
-- 生成日期： 2019-03-03 15:33:10
-- 服务器版本： 10.1.36-MariaDB
-- PHP 版本： 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `FinalExam`
--
CREATE DATABASE IF NOT EXISTS `FinalExam` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `FinalExam`;

-- --------------------------------------------------------

--
-- 表的结构 `Customer`
--

CREATE TABLE `Customer` (
  `Cid` char(4) NOT NULL,
  `Cname` varchar(10) NOT NULL,
  `Csex` char(1) NOT NULL,
  `Cphone` char(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `Customer`
--

INSERT INTO `Customer` (`Cid`, `Cname`, `Csex`, `Cphone`) VALUES
('C001', '白曜隆', '男', '12345678901'),
('C002', '王宇', '女', '18957439927'),
('C003', '竺影', '女', '13927494721'),
('C004', '徐振耀', '男', '16583927735'),
('C005', '李欣', '女', '17462569386'),
('C006', '徐仲光', '男', '17492748228'),
('C007', '马天虹', '男', '18573950684'),
('C008', '黄伟', '男', '12649284475'),
('C009', '郑思涵', '女', '19384756392'),
('C010', '谢锐涛', '男', '17462958371');

-- --------------------------------------------------------

--
-- 表的结构 `Employee`
--

CREATE TABLE `Employee` (
  `Eid` char(4) NOT NULL,
  `Ename` varchar(10) NOT NULL,
  `Salary` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `Employee`
--

INSERT INTO `Employee` (`Eid`, `Ename`, `Salary`) VALUES
('a00', 'b00', '009'),
('E001', '窦靖童', '500000'),
('E002', '吴肇辉', '4000'),
('E003', '李大奔', '4000'),
('E004', '王佳', '3500'),
('E005', '孟然', '3000'),
('E006', '我', '6666'),
('E007', '她', '2333');

-- --------------------------------------------------------

--
-- 表的结构 `Flower`
--

CREATE TABLE `Flower` (
  `Fid` char(4) NOT NULL,
  `Fname` varchar(10) NOT NULL,
  `Flanguage` varchar(20) DEFAULT NULL,
  `IN_Price` decimal(18,2) NOT NULL,
  `OUT_Price` decimal(18,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `Flower`
--

INSERT INTO `Flower` (`Fid`, `Fname`, `Flanguage`, `IN_Price`, `OUT_Price`) VALUES
('F000', '哈哈哈哈哈哈啊', '哈哈哈哈哈哈哈', '1.00', '200.00'),
('F001', '满天星(一束)', '清纯、关怀、思恋', '35.80', '50.00'),
('F002', '白百合(一支)', '纯洁、庄严、顺利', '10.48', '14.00'),
('F003', '白百合(一束)', '纯洁、庄严、顺利', '52.40', '70.00'),
('F004', '太阳花(一支)', '热情、阳光', '3.50', '4.20'),
('F005', '太阳花(一束)', '热情、阳光', '42.00', '50.00'),
('F006', '小雏菊(一束)', '隐藏在心中的爱', '41.60', '50.00'),
('F007', '康乃馨(一支)', '爱、魅力、尊敬', '2.00', '2.70'),
('F008', '康乃馨(一束)', '爱、魅力、尊敬', '30.00', '40.00'),
('F009', '剑兰(一支)', '用心、坚贞、秘密的约会', '6.00', '7.50'),
('F010', '剑兰(一束)', '用心、坚贞、秘密的约会', '48.00', '60.00'),
('F011', '睡莲(一支)', '纯洁、不谙世事、纤尘不染', '40.00', '50.00'),
('F012', '洋兰(一支)', '倾慕', '3.50', '4.20'),
('F013', '洋兰(一束)', '倾慕', '42.00', '50.00'),
('F014', '玫瑰(一支)', '爱情、勇敢', '5.00', '9.00'),
('F015', '玫瑰(一束)', '爱情、勇敢', '55.00', '100.00'),
('F016', '洋桔梗(一支)', '真诚不变的爱、无邪 、富於感情', '4.00', '5.00'),
('F017', '洋桔梗(一束)', '真诚不变的爱、无邪 、富於感情', '64.00', '80.00'),
('F018', '绣球(一支)', '希望', '45.00', '60.00'),
('F019', '向日葵(一支)', '沉默的爱、爱慕、忠诚', '10.00', '12.00'),
('F020', '向日葵(一束)', '沉默的爱、爱慕、忠诚', '50.00', '60.00'),
('F021', '哈哈哈哈哈哈', '哈哈哈哈哈哈', '99.00', '999.00');

-- --------------------------------------------------------

--
-- 表的结构 `Order_Info`
--

CREATE TABLE `Order_Info` (
  `Oid` char(12) NOT NULL,
  `O_Fid` char(4) NOT NULL,
  `O_Cid` char(4) NOT NULL,
  `Onumber` varchar(5) NOT NULL,
  `Odate` char(8) NOT NULL,
  `Deliver_time` char(15) NOT NULL,
  `Deliver_location` varchar(50) NOT NULL,
  `Remark` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `Order_Info`
--

INSERT INTO `Order_Info` (`Oid`, `O_Fid`, `O_Cid`, `Onumber`, `Odate`, `Deliver_time`, `Deliver_location`, `Remark`) VALUES
('201712310001', 'F014', 'C001', '99', '20171231', '201801010930', 'A市A区A路XX号', '请包扎成一束，并留言“新年快乐”'),
('201712310002', 'F008', 'C005', '10', '20171231', '201801061000', 'B市B区B路XX号', '留言“生日快乐”'),
('201712310003', 'F020', 'C003', '2', '20171231', '201801100830', 'C市C区C路XX号', '请包扎成一束'),
('201801010001', 'F011', 'C010', '5', '20171231', '201801160930', 'D市D区D路XX号', '单独包扎'),
('201801060001', 'F018', 'C009', '10', '20171231', '201801141000', 'E市E区E路XX号', '单独包扎'),
('201801100001', 'F016', 'C007', '20', '20171231', '201801160945', 'F市F区F路XX号', '请包扎成一束'),
('201801120001', 'F010', 'C006', '20', '20171231', '201801171000', 'G市G区G路XX号', '请给我粉色和白色，谢谢'),
('201801120002', 'F001', 'C002', '100', '20171231', '201802140900', 'H市H区H路XX号', '请包扎成一束，用黑色和透明纸包装，并留言“情人节快乐”'),
('201801120003', 'F013', 'C004', '1', '20171231', '201801171000', 'I市I区I路XX号', ''),
('201801130001', 'F004', 'C008', '20', '20171231', '201801010930', 'J市J区J路XX号', '');

-- --------------------------------------------------------

--
-- 表的结构 `Supplier`
--

CREATE TABLE `Supplier` (
  `Sid` char(4) NOT NULL,
  `Sname` varchar(20) NOT NULL,
  `Slocation` varchar(20) NOT NULL,
  `Sphone` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `Supplier`
--

INSERT INTO `Supplier` (`Sid`, `Sname`, `Slocation`, `Sphone`) VALUES
('S001', 'A鲜花批发市场', 'A地', '2147483647'),
('S002', 'B鲜花批发市场', 'B地', '1326896327'),
('S003', 'C鲜花批发市场', 'C地', '7483647'),
('S004', 'D鲜花批发市场', 'D地', '1436575766'),
('S005', 'E鲜花批发市场', 'E地', '587524364');

-- --------------------------------------------------------

--
-- 表的结构 `Supply`
--

CREATE TABLE `Supply` (
  `C_Fid` char(4) NOT NULL,
  `C_Sid` char(4) NOT NULL,
  `Snumber` varchar(5) NOT NULL,
  `Sdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `Supply`
--

INSERT INTO `Supply` (`C_Fid`, `C_Sid`, `Snumber`, `Sdate`) VALUES
('F001', 'S001', '100', '2018-01-01'),
('F001', 'S005', '999', '2222-12-22'),
('F002', 'S004', '50', '2018-01-02'),
('F003', 'S003', '70', '2018-01-04'),
('F004', 'S002', '40', '2018-01-02'),
('F005', 'S003', '80', '2018-01-07'),
('F006', 'S002', '100', '2018-01-09'),
('F007', 'S005', '65', '2018-01-04'),
('F008', 'S001', '85', '2018-01-05'),
('F009', 'S005', '60', '2018-01-08'),
('F010', 'S003', '100', '2018-01-14'),
('F011', 'S005', '60', '2018-01-13'),
('F012', 'S003', '70', '2018-01-18'),
('F013', 'S005', '80', '2018-01-13'),
('F014', 'S003', '200', '2018-01-14'),
('F015', 'S005', '100', '2018-01-10'),
('F016', 'S002', '80', '2018-01-19'),
('F017', 'S003', '50', '2018-01-07'),
('F018', 'S005', '30', '2018-01-16'),
('F019', 'S001', '30', '2018-01-13'),
('F020', 'S003', '50', '2018-01-17');

--
-- 转储表的索引
--

--
-- 表的索引 `Customer`
--
ALTER TABLE `Customer`
  ADD PRIMARY KEY (`Cid`) USING BTREE;

--
-- 表的索引 `Employee`
--
ALTER TABLE `Employee`
  ADD PRIMARY KEY (`Eid`);

--
-- 表的索引 `Flower`
--
ALTER TABLE `Flower`
  ADD PRIMARY KEY (`Fid`);

--
-- 表的索引 `Order_Info`
--
ALTER TABLE `Order_Info`
  ADD PRIMARY KEY (`Oid`),
  ADD KEY `O_Fid` (`O_Fid`),
  ADD KEY `O_Cid` (`O_Cid`);

--
-- 表的索引 `Supplier`
--
ALTER TABLE `Supplier`
  ADD PRIMARY KEY (`Sid`);

--
-- 表的索引 `Supply`
--
ALTER TABLE `Supply`
  ADD PRIMARY KEY (`C_Fid`,`C_Sid`),
  ADD KEY `C_Sid` (`C_Sid`);

--
-- 限制导出的表
--

--
-- 限制表 `Order_Info`
--
ALTER TABLE `Order_Info`
  ADD CONSTRAINT `Order_Info_ibfk_1` FOREIGN KEY (`O_Fid`) REFERENCES `Flower` (`Fid`),
  ADD CONSTRAINT `Order_Info_ibfk_2` FOREIGN KEY (`O_Cid`) REFERENCES `Customer` (`Cid`);

--
-- 限制表 `Supply`
--
ALTER TABLE `Supply`
  ADD CONSTRAINT `Supply_ibfk_1` FOREIGN KEY (`C_Fid`) REFERENCES `Flower` (`Fid`),
  ADD CONSTRAINT `Supply_ibfk_2` FOREIGN KEY (`C_Sid`) REFERENCES `Supplier` (`Sid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
