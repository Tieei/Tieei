-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2022 at 06:58 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `practice`
--

-- --------------------------------------------------------

--
-- Table structure for table `v_portcall`
--

CREATE TABLE `v_portcall` (
  `d_id` int(100) NOT NULL,
  `v_id` varchar(100) NOT NULL,
  `arrive` date NOT NULL,
  `arr_t` time(6) NOT NULL,
  `depart` date NOT NULL,
  `dep_t` time(6) NOT NULL,
  `bo_arr` varchar(15) NOT NULL,
  `bo_dep` varchar(15) NOT NULL,
  `in_skj` int(15) NOT NULL,
  `in_ytf` int(15) NOT NULL,
  `in_bet` int(15) NOT NULL,
  `in_alb` int(15) NOT NULL,
  `in_mls` int(15) NOT NULL,
  `in_swo` int(15) NOT NULL,
  `in_oth` int(15) NOT NULL,
  `in_mix` int(15) NOT NULL,
  `in_total` int(15) NOT NULL,
  `tm_skj` int(15) NOT NULL,
  `tm_ytf` int(15) NOT NULL,
  `tm_bet` int(15) NOT NULL,
  `tm_mix` int(15) NOT NULL,
  `tm_total` int(15) NOT NULL,
  `off_skj` int(15) NOT NULL,
  `off_ytf` int(15) NOT NULL,
  `off_bet` int(15) NOT NULL,
  `off_alb` int(15) NOT NULL,
  `off_mls` int(15) NOT NULL,
  `off_swo` int(15) NOT NULL,
  `off_oth` int(15) NOT NULL,
  `off_mix` int(15) NOT NULL,
  `off_total` int(15) NOT NULL,
  `rec_koil` int(15) NOT NULL,
  `rec_kfl` int(15) NOT NULL,
  `rec_rc` int(15) NOT NULL,
  `st_scan` blob NOT NULL,
  `st_file` blob NOT NULL,
  `registered` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `v_table`
--

CREATE TABLE `v_table` (
  `v_id` varchar(100) NOT NULL,
  `name` text NOT NULL,
  `gear` text NOT NULL,
  `flag` varchar(15) NOT NULL,
  `company` varchar(15) NOT NULL,
  `master` varchar(15) NOT NULL,
  `m_nationality` varchar(15) NOT NULL,
  `observer` varchar(15) NOT NULL,
  `o_nationality` varchar(15) NOT NULL,
  `lc` int(15) NOT NULL,
  `agent` varchar(15) NOT NULL,
  `pov` varchar(255) NOT NULL,
  `dopc` varchar(255) NOT NULL,
  `tm` varchar(15) NOT NULL,
  `np` varchar(15) NOT NULL,
  `added` date DEFAULT NULL,
  `updated` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `v_table`
--

INSERT INTO `v_table` (`v_id`, `name`, `gear`, `flag`, `company`, `master`, `m_nationality`, `observer`, `o_nationality`, `lc`, `agent`, `pov`, `dopc`, `tm`, `np`, `added`, `updated`) VALUES
('62af9f08cb100c', 'Hai Feng 658', 'RC', 'Panama', 'Kiribati Fish L', 'Yang Xiangming', 'China', 'N/A', 'N/A', 0, 'Cppl', 'Transhipment', 'N/A', 'N/A', 'Zhoushan, China', '0000-00-00', '2022-06-20'),
('62af9f08cb101c', 'Kibena 1', 'LL', 'Kiribati', 'Kiribati Tuna F', 'Yang Xiangming', 'Korea', 'N/A', 'N/A', 0, 'Cppl', 'Transshipment', 'N/A', 'N/A', 'Fishing ground', '0000-00-00', '0000-00-00'),
('62af9f08cb102c', 'Moakona', 'PS', 'Kiribati', 'Kiribati and Sa', 'Cho Taeyeon', 'Korea', 'N/A', 'N/A', 5, 'Cppl', 'Transhipment', 'N/A', 'N/A', 'Fishing ground', '0000-00-00', '0000-00-00'),
('62af9f08cb103c', 'Shilla Sprinter', 'PS', 'Korea', 'KOFA', 'Mo Sunghyon', 'Korea', 'N/A', 'N/A', 1, 'Cppl', 'Transhipment', 'N/A', 'N/A', 'Fishing ground', '0000-00-00', '0000-00-00'),
('62af9f08cb104c', 'Kaide', 'RC', 'Panama', 'N/A', 'Tzang Chi Tay', 'Taiwan', 'N/A', 'N/A', 0, 'Cppl', 'Transhipment', 'N/A', 'N/A', 'Fishing ground', '0000-00-00', '0000-00-00'),
('62af9f08cb105c', 'Tai Ji', 'RC', 'N/A', 'Kiribati Fish L', 'Yu Chunli', 'China', 'N/A', 'N/A', 0, 'Cppl', 'Transhipment', 'N/A', 'N/A', 'Fishing ground', '0000-00-00', '0000-00-00'),
('62af9f08cb106c', 'Oceanus', 'RC', 'Korea', 'KOFA', 'Bak Cheoljun', 'South Korea', 'N/A', 'N/A', 0, 'KSC', 'Transhipment', 'N/A', 'N/A', 'Fishing ground', '0000-00-00', '0000-00-00'),
('62af9f08cb107c', 'Xin Shi Ji 112', 'PS', 'China', 'Kiribati Fish L', 'He Haiping', 'China', 'N/A', 'N/A', 0, 'Cppl', 'Transfer', 'Crew', 'N/A', 'Fishing ground', '0000-00-00', '0000-00-00'),
('62af9f08cb108c', 'Hsieh Feng 788', 'PS', 'Taiwan', 'Kiribati Fish L', 'Wu Ming Jie', 'China', 'N/A', 'N/A', 5, 'Cppl', 'Transhipment', 'N/A', 'N/A', 'Fishing ground', '0000-00-00', '0000-00-00'),
('62af9f08cb109c', 'Hanara', 'PS', 'Korea', 'KOFA', 'Ham Heungcheol', 'Korea', 'N/A', 'N/A', 2, 'Cppl', 'Transhipment', 'N/A', 'N/A', 'Fishing ground', '0000-00-00', '0000-00-00'),
('62af9f08cb110c', 'Jin Hui 9', 'PS', 'China', 'Kiribati Fish L', 'Yan Xue Jun', 'China', 'N/A', 'N/A', 4, 'Cppl', 'Transfer', 'Crew', 'N/A', 'Fishing ground', '0000-00-00', '0000-00-00'),
('62af9f08cb111c', 'Hai Feng 789', 'RC', 'Taiwan', 'Kiribati Fish L', 'Chen Tien-Ming', 'China', 'N/A', 'N/A', 2, 'Cppl', 'Transhipment', 'N/A', 'N/A', 'Fishing ground', '0000-00-00', '0000-00-00'),
('62af9f08cb112c', 'Jin Hui 58', 'PS', 'China', 'Kiribati Fish L', 'Jiang Zhenhua', 'China', 'N/A', 'N/A', 4, 'Cppl', 'Transhipment', 'N/A', 'N/A', 'Fishing ground', '0000-00-00', '0000-00-00'),
('62af9f08cb113c', 'Yun Run 7', 'RC', 'Nauru', 'Kiribati Fish L', 'Zhu Xubin', 'China', 'N/A', 'N/A', 1, 'Cppl', 'Transhipment', 'N/A', 'N/A', 'Fishing ground', '0000-00-00', '0000-00-00'),
('62af9f08cb114c', 'Hu Yu 929', 'LL', 'China', 'Kiribati Fish L', 'Wang Haigen', 'China', 'N/A', 'N/A', 7, 'Cppl', 'Transhipment', 'N/A', 'N/A', 'Fishing ground', '0000-00-00', '0000-00-00'),
('62af9f08cb115c', 'Lake Dream', 'RC', 'Korea', 'Kiribati Fish L', 'Bongwoo Lee', 'Korea', 'N/A', 'N/A', 0, 'Cppl', 'Transhipment', 'N/A', 'N/A', 'Fishing ground', '0000-00-00', '0000-00-00'),
('62af9f08cb116c', 'Ocean Master', 'PS', 'Korea', 'KOFA', 'Yu Yisiang', 'Korea', 'N/A', 'N/A', 0, 'Cppl', 'Transhipment', 'N/A', 'N/A', 'Fishing ground', '0000-00-00', '0000-00-00'),
('62af9f08cb117c', 'Lake Aurora', 'RC', 'Korea', 'Ji Sung Shippin', 'Kim Cheolju', 'Korea', 'N/A', 'N/A', 0, 'KSC', 'Transhipment', 'N/A', 'N/A', 'Fishing ground', '0000-00-00', '0000-00-00'),
('62af9f08cb118c', 'Lake Castle', 'RC', 'Korea', 'Ji Sung Shippin', 'Jo Yeong Cheol', 'Korea', 'N/A', 'N/A', 0, 'KSC', 'Transhipment', 'N/A', 'N/A', 'Fishing ground', '0000-00-00', '0000-00-00'),
('62af9f08cb119c', 'Feng Xiang 818', 'PS', 'Taiwan', 'Kiiribati Fish ', 'Liu Dan Huang', 'PRC', 'N/A', 'N/A', 0, 'Cppl', 'Transhipment', 'N/A', 'N/A', 'Fishing ground', '0000-00-00', '0000-00-00'),
('62af9f08cb120c', 'Sajo Columbia', 'PS', 'Korea', 'KOFA', 'Kim Ho Gon', 'Korea', 'N/A', 'N/A', 3, 'Cppl', 'Transhipment', 'N/A', 'N/A', 'Fishing ground', '0000-00-00', '0000-00-00'),
('62af9f08cb121c', 'Sein Venus', 'RC', 'Korea', 'KOFA', 'Bark Sanghwan', 'Korea', 'N/A', 'N/A', 0, 'Cppl', 'Transhipment', 'N/A', 'N/A', 'Fishing ground', '0000-00-00', '0000-00-00'),
('62af9f08cb122c', 'Yap Seagull', 'PS', 'N/A', 'FSMA', 'Irak', 'N/A', 'N/A', 'N/A', 0, 'Cppl', 'Transhipment/Disembark', '2 injured foreign crew', 'N/A', 'Fishing ground', '0000-00-00', '0000-00-00'),
('62af9f08cb123c', 'Naoero Star', 'PS', 'Nauru', 'FSMA', 'Lee Sangtae', 'Korea', 'N/A', 'N/A', 2, 'Cppl', 'Transhipment', 'N/A', 'N/A', 'Fishing ground', '0000-00-00', '0000-00-00'),
('62af9f08cb124c', 'Tai Ping Yang 07', 'LL', 'China', 'Kiribati Fish L', 'Lu Xuexiang', 'China', 'N/A', 'N/A', 9, 'lyke it', 'Offload to KFL cannery', 'N/A', 'N/A', 'Fishing ground', '0000-00-00', '0000-00-00'),
('62af9f08cb125c', 'Shin Fuji', 'RC', 'Panama', 'Sein shipping C', 'Frederick B Ebi', 'Japan', 'N/A', 'N/A', 0, 'Cppl', 'Transhipment', 'N/A', 'N/A', 'Korea', '0000-00-00', '0000-00-00'),
('62af9f08cb126c', 'Shilla Explorer', 'PS', 'Korea', 'KOFA', 'Lee Pyeong Gyu', 'Korea', 'N/A', 'N/A', 1, 'Cppl', 'Transhipment', 'N/A', 'N/A', 'Fishing ground', '0000-00-00', '0000-00-00'),
('62af9f08cb127c', 'Jin Hui 8', 'PS', 'China', 'Kiribati Fish L', 'Zhang Guo Jun', 'China', 'N/A', 'N/A', 3, 'Cppl', 'Transhipment', 'N/A', 'N/A', 'Fishing ground', '0000-00-00', '0000-00-00'),
('62af9f08cb128c', 'Naoero Sun', 'PS', 'Nauru', 'FSMA', 'Rywu Gyeong Cha', 'Korea', 'N/A', 'N/A', 0, 'Cppl', 'transhipment', 'N/A', 'N/A', 'Fishing ground', '0000-00-00', '0000-00-00'),
('62af9f08cb129c', 'Serena 1', 'PS', 'Vanuatu', 'Sajo Vanuatu', 'Shin Chae Song', 'Korea', 'N/A', 'N/A', 0, 'Cppl', 'Transhipment', 'N/A', 'N/A', 'Fishing ground', '0000-00-00', '0000-00-00'),
('62af9f08cb130c', 'Serena 2', 'PS', 'Tuvalu', 'Sajo Vanuatu', 'Jong In Yong', 'Korea', 'N/A', 'N/A', 0, 'Cppl', 'Transhipment', 'N/A', 'N/A', 'Fishing ground', '0000-00-00', '0000-00-00'),
('62af9f08cb131c', 'Sajo Potentia', 'PS', 'Korea', 'KOFA', 'Kang Chang Hun', 'Korea', 'N/A', 'N/A', 0, 'Cppl', 'Transhipment', 'N/A', 'N/A', 'Fishing ground', '0000-00-00', '0000-00-00'),
('62af9f08cb132c', 'Sajo Concordia', 'PS', 'Korea', 'KOFA', 'Ha Myongchin', 'Korea', 'N/A', 'N/A', 4, 'Cppl', 'Transhipment', 'N/A', 'N/A', 'Fishing ground', '0000-00-00', '0000-00-00'),
('62af9f08cb133c', 'Xin Shi Ji 111', 'PS', 'China', 'Kiribati Fish L', 'Fan Minghua', 'China', 'N/A', 'N/A', 0, 'Cppl', 'Transhipment', 'N/A', 'N/A', 'Fishing ground', '0000-00-00', '0000-00-00'),
('62af9f08cb134c', 'Maroraoi', 'PS', 'Kiribati', 'Kiribati and Sa', 'Im Dong Sam', 'Korea', 'N/A', 'N/A', 5, 'Cppl', 'Transhipment', 'N/A', 'N/A', 'Fishing ground', NULL, NULL),
('62af9f08cb135c', 'Ocean Ace', 'PS', 'Korea', 'KOFA', 'Seo Ul Yonh', 'Korea', 'N/A', 'N/A', 0, 'Cppl', 'Transhipment', 'N/A', 'N/A', 'Fishing ground', NULL, NULL),
('62af9f08cb136c', 'Shilla Jupiter', 'PS', 'Korea', 'KOFA', 'Choi Kwang Sik', 'Korea', 'N/A', 'N/A', 2, 'Cppl', 'Transhipment', 'N/A', 'N/A', 'Fishing ground', NULL, NULL),
('62af9f08cb137c', 'Xiang Fa 8', 'PS', 'China', 'Kiribati Fish L', 'Wang De Fu', 'China', 'N/A', 'N/A', 6, 'Cppl', 'Disembark', '8 local crew', 'N/A', 'Zhou Shan, Chin', NULL, NULL),
('62af9f08cb138c', 'Lake Nova', 'FC', 'N/A', 'Kiribati Fish L', 'SON�CHANG�SIK', 'Korea', 'N/A', 'N/A', 0, 'KSC', 'Transshipment', 'N/A', 'N/A', 'Korea', NULL, NULL),
('62af9f08cb139c', 'Badaro', 'RC', 'Korea', 'KOFA', 'Kim Haengmin', 'Korea', 'N/A', 'N/A', 1, 'KSC', 'Transhipment', 'N/A', 'N/A', 'Fishing ground', NULL, NULL),
('62af9f08cb140c', 'Hu Yu 927', 'LL', 'China', 'Kiribati Fish L', 'Cui Xuehua', 'China', 'N/A', 'N/A', 7, 'Cppl', 'Transhipment', 'N/A', 'N/A', 'Fishing ground', NULL, NULL),
('62af9f08cb141c', 'Liaoy Reefer 1', 'RC', 'Panama', 'Kiribati Fish L', 'Yang Kee', 'China', 'N/A', 'N/A', 0, 'Cppl', 'Transshipment', 'N/A', 'N/A', 'Shou Shan CN', NULL, NULL),
('62af9f08cb142c', 'Hai Feng 618', 'RC', 'Taiwan', 'Kiiribati Fish ', 'Chen Bang Fu', 'China', 'N/A', 'N/A', 0, 'Cppl', 'Transshipment', 'N/A', 'N/A', 'Fishing ground', NULL, NULL),
('62af9f08cb143c', 'Nanmadol', 'PS', 'N/A', 'Kiribati Fish L', 'N/A', 'N/A', 'N/A', 'N/A', 0, 'Cppl', 'Transshipment', 'N/A', 'N/A', 'Fishing ground', NULL, NULL),
('62af9f08cb144c', 'Hai Feng 668', 'RC', 'Taiwan', 'Kiribati Fish L', 'Xiao Tao', 'China', 'N/A', 'N/A', 0, 'Cppl', 'Transshipment', 'N/A', 'N/A', 'Fishing ground', NULL, NULL),
('62af9f08cb145c', 'Jih Yu 768', 'PS', 'Taiwan', 'Kiribati Fish L', 'Wu Chang wen', 'China', 'N/A', 'N/A', 0, 'Cppl', 'Disembark 6 Local crews', 'N/A', 'N/A', 'Fishing ground', NULL, NULL),
('62af9f08cb146c', 'Capt Vincent', 'PS', 'US', 'US Treaty', 'N/A', 'N/A', 'N/A', 'N/A', 0, 'Cppl', 'Disembark 3 Local crews', 'N/A', 'N/A', 'Fishing ground', NULL, NULL),
('62af9f08cb147c', 'Nikko Maru 111', 'P & L', 'JP', 'Japan Tuna Fish', 'N/A', 'Japan', 'N/A', 'N/A', 0, 'Cppl', 'Disembark 14 Local crews', 'N/A', 'N/A', 'Fishing ground', NULL, NULL),
('62af9f08cb148c', 'Jih Yu 968', 'PS', 'Taiwan', 'Kiribati Fish L', 'Hsu Yu Yung', 'Taiwan', 'N/A', 'N/A', 0, 'Cppl', 'Transshipment', 'N/A', 'N/A', 'Fishing ground', NULL, NULL),
('62af9f08cb149c', 'Meiho Maru 37', 'P & L', 'JP', 'Japan', 'N/A', 'Japan', 'N/A', 'N/A', 0, 'Cppl', 'Disembark 4 Local crews', 'N/A', 'N/A', 'Fishing ground', NULL, NULL),
('62af9f08cb150c', 'Lake win', 'FC', 'Korea', 'KOFA', 'N/A', 'Korea', 'N/A', 'N/A', 0, 'Cppl', 'Transshipment', 'N/A', 'N/A', 'Fishing ground', NULL, NULL),
('62af9f08cb151c', 'Saltlake', 'RC', 'Korea', 'KOFA', 'N/A', 'N/A', 'N/A', 'N/A', 0, 'Cppl', 'Transshipment', 'N/A', 'N/A', 'Fishing ground', NULL, NULL),
('62af9f08cb152c', 'Sein Princess', 'FC', 'Panama', 'Sein shipping C', 'Kim Jae Dong', 'Korea', 'N/A', 'N/A', 0, 'KSC', 'Transshipment', 'N/A', 'N/A', 'Fishing ground', NULL, NULL),
('62af9f08cb153c', 'Ching Feng 787', 'PS', 'Taiwan', 'N/A', 'Ching Hui Yen', 'Taiwan', 'N/A', 'N/A', 0, 'Cppl', 'Disembark 2 Local KI crews', 'N/A', 'N/A', 'Fishing ground', NULL, NULL),
('62af9f08cb154c', 'Jih Yu 668', 'PS', 'Taiwan', 'Kiribati Fish L', 'Wu Chun Ming', 'Taiwan', 'N/A', 'N/A', 0, 'Cppl', 'Transshipment', 'N/A', 'N/A', 'Fishing ground', NULL, NULL),
('62af9f08cb155c', 'Mellissa', 'PS', 'FM', 'US Treaty', 'N/A', 'US', 'N/A', 'N/A', 0, 'Cppl', 'Medical Treatment', 'N/A', 'N/A', 'Fishing ground', NULL, NULL),
('62af9f08cb156c', 'Lometo', 'PS', 'FM', 'FSMA', 'N/A', 'China', 'N/A', 'N/A', 0, 'Cppl', 'Transshipment', 'N/A', 'N/A', 'Fishing ground', NULL, NULL),
('62af9f08cb157c', 'Unaak', 'PS', 'Majuro', 'FSMA', 'Xu Jin', 'China', 'N/A', 'N/A', 6, 'Cppl', 'Transshipment', 'N/A', 'N/A', 'Fishing ground', NULL, NULL),
('62af9f08cb158c', 'Shilla Challenger', 'PS', 'Korea', 'KOFA', 'Choi ong Sok', 'Korea', 'N/A', 'N/A', 0, 'Cppl', 'Transshipment', 'N/A', 'N/A', 'Fishing ground', NULL, NULL),
('62af9f08cb159c', 'Pharoster', 'RC', 'Korea', 'Ji Sung Shippin', 'Go Gabjoo', 'Korea', 'N/A', 'N/A', 0, 'KSC', 'Transshipment', 'N/A', 'N/A', 'Korea', NULL, NULL),
('62af9f08cb160c', 'Hao Yang 77', 'PS', 'China', 'Kiribati Fish l', 'Wang Changfu', 'China', 'N/A', 'N/A', 0, 'Cppl', 'Transhipment', 'N/A', 'N/A', 'Fishing ground', NULL, NULL),
('62af9f08cb161c', 'Yun Run 3', 'RC', 'Panama', 'Kiribati Fish L', 'Fu Jixiang', 'China', 'N/A', 'N/A', 0, 'Cppl', 'Transshipment', 'N/A', 'N/A', 'China', NULL, NULL),
('62af9f08cb162c', 'Moamaeu', 'PS', 'Kiribati', 'Kirikore', 'Kim Kwang Jin', 'Korea', 'N/A', 'N/A', 7, 'Cppl', 'Transhipment', 'N/A', 'N/A', 'Fishing ground', NULL, NULL),
('62af9f08cb163c', 'Hao Yang 88', 'PS', 'China', 'Kiribati Fish L', 'Lei Chen Chun', 'China', 'N/A', 'N/A', 0, 'Cppl', 'Emergency', 'Medical treatment', 'N/A', 'Fishing ground', NULL, NULL),
('62af9f08cb164c', 'Yun Run 8', 'RC', 'Panama', 'Fenghui shippin', 'Jiang Youngguo', 'China', 'N/A', 'N/A', 3, 'Cppl', 'Transhipment', 'N/A', 'N/A', 'Fishing ground', NULL, NULL),
('62af9f08cb165c', 'Jih Yu 168', 'PS', 'Taiwan', 'Kiribati Fish L', 'Shao Kuo Hsi', 'Taiwan', 'N/A', 'N/A', 0, 'Cppl', 'Transhipment', 'N/A', 'N/A', 'Fishing ground', NULL, NULL),
('62af9f08cb166c', 'Sajo Familia', 'PS', 'Korea', 'KOFA', 'Oh Taeung', 'Korea', 'N/A', 'N/A', 0, 'Cppl', 'Transhipment', 'N/A', 'N/A', 'Fishing ground', NULL, NULL),
('62af9f08cb167c', 'Angel 22', 'BU', 'Panama', 'Digital Bliss l', 'Cai Hui Liu', 'China', 'N/A', 'N/A', 0, 'Dojin', 'Discharging Cargo', 'N/A', 'N/A', 'High Seas', NULL, NULL),
('62af9f08cb168c', 'Heng Hong 9', 'RC', 'China', 'Zheing Henghong', 'Chai Shengjun', 'China', 'N/A', 'N/A', 1, 'Cppl', 'Transhipment', 'N/A', 'N/A', 'Fishing ground', NULL, NULL),
('62af9f08cb169c', 'Cheery Star', 'RC', 'Korea', 'Ji Sung Shippin', 'Woo Hai Woan', 'Korea', 'N/A', 'N/A', 0, 'KSC', 'Transhipment', 'N/A', 'N/A', 'Bankok Thailand', NULL, NULL),
('62af9f08cb170c', 'Jonathan Ace', 'RC', 'Korea', 'KOFA', 'Kim Woonsik', 'Korea', 'N/A', 'N/A', 0, 'Cppl', 'Transhipment', 'N/A', 'N/A', 'Fishing ground', NULL, NULL),
('62af9f08cb171c', 'Jih :Yu 968', 'PS', 'Taiwan', 'Kiribati Fish L', 'Hsu Yu Yung', 'Taiwan', 'N/A', 'N/A', 0, 'Cppl', 'Transshipment', 'N/A', 'N/A', 'Fishing ground', NULL, NULL),
('62af9f08cb172c', 'Sein Grace', 'RC', 'Panama', 'KOFA', 'Kim Taejin', 'Korea', 'N/A', 'N/A', 0, 'KSC', 'Transshipment', 'N/A', 'N/A', 'Korea', NULL, NULL),
('62af9f08cb173c', 'Cosmos Kim', 'PS', 'Tuvalu', 'KOFA', 'Kim Minseong', 'Korea', 'N/A', 'N/A', 1, 'Cppl', 'Transshipment', 'N/A', 'N/A', 'Fishing ground', NULL, NULL),
('62af9f08cb174c', 'Fong Kuo 828', 'PS', 'Taiwan', 'Yu Yow Fishery ', 'Chen Chia Yen', 'Taiwan', 'N/A', 'N/A', 2, 'Cppl', 'Transshipment', 'N/A', 'N/A', 'Fishing ground', NULL, NULL),
('62af9f08cb175c', 'Hai Feng 728', 'RC', 'Panama', 'Kiribati Fish L', 'Xun Hui Qing', 'China', 'N/A', 'N/A', 0, 'Cppl', 'Transshipment', 'N/A', 'N/A', 'Zhou Shan, Chin', NULL, NULL),
('62af9f08cb176c', 'Win far 626', 'PS', 'Taiwan', 'Gong Fu Fishery', 'Hsia Pi Tsung', 'Taiwan', 'N/A', 'N/A', 0, 'Cppl', 'No transhipment crew drop', 'N/A', 'N/A', 'Fishing ground', NULL, NULL),
('62af9f08cb177c', 'Caribe', 'PS', 'Korea', 'KOFA', 'Park Jongseung', 'Korea', 'N/A', 'N/A', 0, 'Cppl', 'Transshipment', 'N/A', 'N/A', 'Fishing ground', NULL, NULL),
('62af9f08cb178c', 'Century Ranger', 'PS', 'Nauru', 'Ocean Ranger Co', 'Chen Po Jen', 'China', 'N/A', 'N/A', 0, 'Cppl', 'Transshipment', 'N/A', 'N/A', 'Fishing ground', NULL, NULL),
('62af9f08cb179c', 'Joon Discorver', 'PS', 'China', 'Kiribati & Hans', 'Hyeon Tea Kim', 'China', 'NA', 'N/A', 2, 'Cppl', 'Transhipment', 'N/A', 'N/A', 'Fishing ground', NULL, NULL),
('62af9f08cb180c', 'Yun Run 1', 'RC', 'China', 'Kiribati Fish L', 'LI ZHI HU', 'China', 'NA', 'N/A', 6, 'Cppl', 'Transhipment', 'N/A', 'N/A', 'Fishing ground', NULL, NULL),
('62af9f08cb181c', 'Mamautari', 'PS', 'Kiribati', 'Kiribati and Sa', 'Lee Chan Woo', 'Korea', 'NIL', 'N/A', 4, 'CPPL', 'Transhipment', 'N/A', 'N/A', 'Fishing ground', NULL, NULL),
('62af9f08cb182c', 'Sein star', 'RC', 'Korea', 'KOFA', 'Lee Kyung Sub', 'Korea', 'N/A', 'N/A', 0, 'KSC', 'Transshipment', 'N/A', 'N/A', 'Fishing ground', NULL, NULL),
('62af9f08cb183c', 'Shoyou maru no18', 'PS', 'Japan', 'ICHI Maru Co,. ', 'Yuji Yano', 'Japan', 'N/A', 'N/A', 2, 'F&R', 'disembark crew only no TS', 'N/A', 'N/A', 'Japan', NULL, NULL),
('62af9f08cb184c', 'lajabwil', 'PS', 'Marshall', 'FSMA', 'N/A', 'China', 'N/A', 'N/A', 0, 'Cppl', 'Transhipment', 'N/A', 'N/A', 'Fishing ground', NULL, NULL),
('62af9f08cb185c', 'Queen Elizabeth 959', 'PS', 'JP', 'N/A', 'N/A', 'Japan', 'N/A', 'N/A', 0, 'Cppl', 'crew disembark', 'N/A', 'N/A', 'Fishing ground', NULL, NULL),
('62af9f08cb76c', 'Wakabamaru 3', 'PS', 'Japan', 'Kaimaki', 'Yoshihito Hirat', 'Japan', 'N/A', 'N/A', 0, 'KISM', 'crew disembark', '8 ki crew disembark', 'N/A', 'Fishing ground', '0000-00-00', '0000-00-00'),
('62af9f08cb77c', 'Jin Hui 18', 'PS', 'China', 'Kiribati Fish L', 'Deng Zhao Wang', 'China', 'N/A', 'N/A', 4, 'Cppl', 'Transhipment', 'N/A', 'N/A', 'Fishing ground', '0000-00-00', '0000-00-00'),
('62af9f08cb78c', 'Zhong Tai 7', 'PS', 'China', 'Kiribati Fish L', 'Weng Zhongbo', 'China', 'N/A', 'N/A', 8, 'Cppl', 'Transhipment', 'N/A', 'N/A', 'Fishing ground', '0000-00-00', '0000-00-00'),
('62af9f08cb79c', 'Queen Ellice', 'PS', 'N/A', 'Kiribati Fish L', 'Lin Ming-Der', 'China', 'N/A', 'N/A', 0, 'Lyke it', 'Disembark No TS', '2 Local Fishermen', 'N/A', 'Fishing ground', '0000-00-00', '0000-00-00'),
('62af9f08cb80c', 'Zhong Tai 3', 'PS', 'China', 'Kiribati Fish L', 'Zhou Shancun', 'China', 'N/A', 'N/A', 0, 'Cppl', 'Transhipment', 'N/A', 'N/A', 'Fishing ground', '0000-00-00', '0000-00-00'),
('62af9f08cb81c', 'Yun Run', 'RC', 'Kiribati', 'Kiribati Fish L', 'Ma Guozhong', 'China', 'N/A', 'N/A', 1, 'Cppl', 'Transhipment', 'N/A', 'N/A', 'Zhoushan, China', '0000-00-00', '0000-00-00'),
('62af9f08cb82c', 'Taina', 'PS', 'Tuvalu', 'TUSA Fishing Co', 'Kim Changdu', 'Korea', 'N/A', 'N/A', 2, 'Cppl', 'Transhipment', 'N/A', 'N/A', 'Fishing ground', '0000-00-00', '0000-00-00'),
('62af9f08cb83c', 'Mariraoi', 'PS', 'Kiribati', 'Kiribati and Sa', 'Ha Min', 'Korea', 'N/A', 'N/A', 3, 'Cppl', 'Transhipment', 'N/A', 'N/A', 'Fishing ground', '0000-00-00', '0000-00-00'),
('62af9f08cb84c', 'Volta Victory', 'RC', 'Panama', 'Kiribati Fish L', 'Kim Sang Heui', 'Korea', 'N/A', 'N/A', 0, 'KSC', 'Transhipment', 'N/A', 'N/A', 'Fishing ground', '0000-00-00', '0000-00-00'),
('62af9f08cb85c', 'Tai Ping Yang 01', 'LL', 'China', 'Kiribati Fish L', 'Wu Fuyu', 'China', 'N/A', 'N/A', 9, 'lyke it', 'Offload to KFL cannery', 'N/A', 'N/A', 'Fishing ground', '0000-00-00', '0000-00-00'),
('62af9f08cb86c', 'Shun Fa 8', 'PS', 'N/A', 'Kiribati Fish L', 'Yu Wanjun', 'China', 'N/A', 'N/A', 0, 'Cppl', 'Transhipment', 'N/A', 'N/A', 'Fishing ground', '0000-00-00', '0000-00-00'),
('62af9f08cb87c', 'Hsieh Feng 789', 'PS', 'Taiwan', 'Kiribati Fish L', 'Chen Tien Ming', 'China Taiwan', 'N/A', 'N/A', 0, 'Cppl', 'Transhipment', 'N/A', 'N/A', 'Fishing ground', '0000-00-00', '0000-00-00'),
('62af9f08cb88c', 'Moamari', 'PS', 'Kiribati', 'Kirikore', 'Jung Yoon Chae', 'Korea', 'N/A', 'N/A', 5, 'Cppl', 'Transhipment', 'N/A', 'N/A', 'Fishing ground', '0000-00-00', '0000-00-00'),
('62af9f08cb89c', 'Shilla Harvester', 'PS', 'Korea', 'KOFA', 'Mo Sunghyon', 'Korea', 'N/A', 'N/A', 1, 'Cppl', 'Transhipment', 'N/A', 'N/A', 'Fishing ground', '0000-00-00', '0000-00-00'),
('62af9f08cb90c', 'Tai Ping Yang 05', 'LL', 'China', 'Kiribati Fish L', 'Qiu Min', 'China', 'N/A', 'N/A', 9, 'lyke it', 'Offload to KFL cannery', 'N/A', 'N/A', 'Fishing ground', '0000-00-00', '0000-00-00'),
('62af9f08cb91c', 'Jabbuk', 'PS', 'FM', 'FSMA', 'N/A', 'Korea', 'N/A', 'N/A', 0, 'Cppl', 'Transshipment', 'N/A', 'N/A', 'Fishing ground', '0000-00-00', '0000-00-00'),
('62af9f08cb92c', 'Mononok', 'RC', 'Korea', 'Boyang', 'Kim Sehun', 'South Korea', 'N/A', 'N/A', 0, 'Cppl', 'Transhipment', 'N/A', 'N/A', 'Fishing ground', '0000-00-00', '0000-00-00'),
('62af9f08cb93c', 'Tai Ping Yang 03', 'LL', 'China', 'Kiribati Fish L', 'Zhou Zengping', 'China', 'N/A', 'N/A', 9, 'lyke it', 'Offload to KFL cannery', 'N/A', 'N/A', 'Fishing ground', '0000-00-00', '0000-00-00'),
('62af9f08cb94c', 'Jin Hui 68', 'PS', 'China', 'Kiribati Fish L', 'Yu Yuhong', 'China', 'N/A', 'N/A', 0, 'Cppl', 'Transhipment', 'N/A', 'N/A', 'Fishing ground', '0000-00-00', '0000-00-00'),
('62af9f08cb95c', 'Tai Ping Yang 02', 'LL', 'China', 'Kiribati Fish L', 'Zhang Haojie', 'China', 'N/A', 'N/A', 10, 'lyke it', 'Offload to KFL cannery', 'N/A', 'N/A', 'Fishing ground', '0000-00-00', '0000-00-00'),
('62af9f08cb96c', 'Marawa II', 'PS', 'Kiribati', 'Kiribati & KT', 'Kim Songyun', 'Korea', 'N/A', 'N/A', 2, 'Cppl', 'Transhipment', 'N/A', 'N/A', 'Fishing ground', '0000-00-00', '0000-00-00'),
('62af9f08cb97c', 'Tai Ping Yang 06', 'LL', 'China', 'Kiribati Fish L', 'Huang Youhong', 'China', 'N/A', 'N/A', 9, 'lyke it', 'Offload to KFL cannery', 'N/A', 'N/A', 'Fishing ground', '0000-00-00', '0000-00-00'),
('62af9f08cb98c', 'Zhong Tai 6', 'PS', 'China', 'Kiribati Fish L', 'Tzang Chi Tay', 'China', 'N/A', 'N/A', 6, 'Cppl', 'Transhipment', 'N/A', 'N/A', 'Fishing ground', '0000-00-00', '0000-00-00'),
('62af9f08cb99c', 'New Fair Discovery 707', 'PS', 'Taiwan', 'N/A', 'Kim Tae woo', 'Korea', 'N/A', 'N/A', 0, 'OTTA', 'Transhipment', 'N/A', 'N/A', 'Fishing ground', '0000-00-00', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `v_portcall`
--
ALTER TABLE `v_portcall`
  ADD PRIMARY KEY (`d_id`),
  ADD KEY `v_id` (`v_id`);

--
-- Indexes for table `v_table`
--
ALTER TABLE `v_table`
  ADD PRIMARY KEY (`v_id`),
  ADD KEY `v_id` (`v_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `v_portcall`
--
ALTER TABLE `v_portcall`
  MODIFY `d_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `v_portcall`
--
ALTER TABLE `v_portcall`
  ADD CONSTRAINT `v_portcall_ibfk_1` FOREIGN KEY (`v_id`) REFERENCES `v_table` (`v_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
