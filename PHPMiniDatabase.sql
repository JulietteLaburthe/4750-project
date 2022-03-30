SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


--
-- Database: `lcg4vt`
--

-- ---------------------------------------------------------------------------

--
-- Table structure for table `TVshow`
--

DROP TABLE IF EXISTS `TVshow`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `TVshow` (
  `unique_title_identifier` varchar(20) NOT NULL,
  `start_year` int DEFAULT NULL,
  `end_year` int DEFAULT NULL,
  PRIMARY KEY (`unique_title_identifier`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `TVshow`
--
LOCK TABLES `TVshow` WRITE;
/*!40000 ALTER TABLE `TVshow` DISABLE KEYS */;
INSERT INTO `TVshow` VALUES ('tt0025509',1934,1934),('tt0035599',1943,1947),('tt0035803',1940,1945),('tt0038276',1946,1955),('tt0039120',1947,1949),('tt0039121',1947,1949),('tt0039122',1947,0),('tt0039123',1947,1958),('tt0039124',1946,0),('tt0039125',1947,1951),('tt0040021',1948,1950),('tt0040022',1948,1949),('tt0040023',1948,1951),('tt0040024',1948,1949),('tt0040025',1948,0),('tt0040026',1948,1952),('tt0040027',1948,1949),('tt0040028',1948,1958),('tt0040029',1948,0),('tt0040030',1947,1954),('tt0040031',1948,0),('tt0040032',1948,1949),('tt0040033',1948,1957),('tt0040034',1948,1952),('tt0040035',1948,0),('tt0040036',1948,1950),('tt0040037',1948,1949),('tt0040038',1948,1949),('tt0040039',1948,1953),('tt0040040',1948,1949),('tt0040041',1948,1956),('tt0040042',1948,1950),('tt0040043',1948,0),('tt0040044',1948,0),('tt0040045',1948,1951),('tt0040046',1948,0),('tt0040047',1948,1949),('tt0040048',1948,1967),('tt0040049',1948,1956),('tt0040050',1948,1949),('tt0040051',1948,1958),('tt0040052',1948,0),('tt0040053',1948,1971),('tt0040054',1948,1949),('tt0040055',1948,0),('tt0040056',1948,1949),('tt0040057',1948,1952),('tt0040058',1948,1949),('tt0040059',1948,1949),('tt0040061',1948,0),('tt0040062',1948,1949),('tt0040990',1949,0),('tt0040991',1949,0),('tt0040992',1949,0),('tt0040993',1949,0),('tt0040994',1949,0),('tt0040995',1949,1951),('tt0040996',1949,1953),('tt0040997',1949,0),('tt0040998',1949,0),('tt0040999',1949,0),('tt0041000',1949,1950),('tt0041001',1949,0),('tt0041002',1949,1959),('tt0041003',1949,1950),('tt0041004',1949,0),('tt0041005',1949,1950),('tt0041006',1949,0),('tt0041007',1949,1959),('tt0041008',1949,0),('tt0041009',1949,1953),('tt0041010',1949,1950),('tt0041011',1949,0),('tt0041012',1949,0),('tt0041013',1949,1950),('tt0041014',1949,1955),('tt0041015',1949,1952),('tt0041016',1948,1952),('tt0041017',1949,0),('tt0041018',1949,1950),('tt0041019',1949,1950),('tt0041020',1949,1950),('tt0041021',1949,1950),('tt0041022',1949,1950);
/*!40000 ALTER TABLE `TVshow` ENABLE KEYS */;
UNLOCK TABLES;

-- ---------------------------------------------------------------------------

--
-- Table structure for table `cast`
--

DROP TABLE IF EXISTS `cast`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cast` (
  `unique_title_identifier` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `job` varchar(255) DEFAULT NULL,
  `category` varchar(1000) DEFAULT NULL,
  `characters` varchar(500) NOT NULL,
  PRIMARY KEY (`unique_title_identifier`,`name`,`characters`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

-- ---------------------------------------------------------------------------

--
-- Dumping data for table `cast`
--

LOCK TABLES `cast` WRITE;
/*!40000 ALTER TABLE `cast` DISABLE KEYS */;
INSERT INTO `cast` VALUES ('tt0000001','nm0005690','N','director','N'),('tt0000002','nm0721526','N','director','N'),('tt0000003','nm0721526','N','director','N'),('tt0000004','nm0721526','N','director','N'),('tt0000005','nm0005690','N','director','N'),('tt0000005','nm0443482','N','actor','[Blacksmith]'),('tt0000005','nm0653042','N','actor','[Assistant]'),('tt0000006','nm0005690','N','director','N'),('tt0000007','nm0005690','N','director','N'),('tt0000007','nm0179163','N','actor','N'),('tt0000007','nm0183947','N','actor','N'),('tt0000007','nm0374658','N','director','N'),('tt0000008','nm0005690','N','director','N'),('tt0000008','nm0653028','N','actor','[Sneezing Man]'),('tt0000009','nm0085156','N','director','N'),('tt0000009','nm0183823','N','actor','[Mr. Hamilton]'),('tt0000009','nm1309758','N','actor','[Chauncey Depew - the Director of the New York Central Railroad]'),('tt0000010','nm0525910','N','director','N'),('tt0000011','nm0804434','N','director','N'),('tt0000011','nm3692297','N','actor','[Acrobats]'),('tt0000012','nm0525908','N','director','N'),('tt0000012','nm0525910','N','director','N'),('tt0000013','nm0525910','N','director','N'),('tt0000014','nm0166380','N','actor','[The Gardener]'),('tt0000014','nm0244989','N','actor','[The Boy]'),('tt0000014','nm0525910','N','director','N'),('tt0000015','nm0721526','N','director','N'),('tt0000016','nm0525910','N','director','N'),('tt0000017','nm0804434','N','director','N'),('tt0000017','nm1587194','N','director','N'),('tt0000017','nm3691272','N','actor','[The boy]'),('tt0000018','nm0804434','N','director','N'),('tt0000018','nm3692071','N','actor','[The Boxer]'),('tt0000019','nm0932055','N','director','N'),('tt0000020','nm0010291','N','director','N'),('tt0000022','nm0525910','N','director','N'),('tt0000023','nm0525910','N','director','N'),('tt0000024','nm0010291','N','director','N'),('tt0000025','nm0010291','N','director','N'),('tt0000026','nm0525907','N','actor','[Man playing cards, seated on the left]'),('tt0000026','nm0525910','N','director','N'),('tt0000026','nm1151424','N','actor','[Man playing cards, seated on the right]'),('tt0000026','nm2350007','N','actor','[Valet]'),('tt0000026','nm2354154','N','actor','[Man playing cards, seated in the middle]'),('tt0000027','nm0525910','N','director','N'), ('tt0126029','nm0000196','N','actor','[Shrek,Blind Mouse,Opening narration]'),('tt0126029','nm0000552','N','actor','[Donkey]'),('tt0126029','nm0001475','N','actor','[Lord Farquaad]'),('tt0126029','nm0011470','N','director','N'),('tt0126029','nm0254645','written by','writer','N'),('tt0126029','nm0421776','N','director','N'),('tt0126029','nm0744429','written by','writer','N'),('tt0126029','nm0825308','based upon the book by','writer','N'),('tt0126029','nm0830294','written by','writer','N');
/*!40000 ALTER TABLE `cast` ENABLE KEYS */;
UNLOCK TABLES;

-- ---------------------------------------------------------------------------

--
-- Table structure for table `crew_directors`
--

DROP TABLE IF EXISTS `crew_directors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `crew_directors` (
  `unique_title_identifier` varchar(20) NOT NULL,
  `directors` varchar(20) NOT NULL,
  PRIMARY KEY (`unique_title_identifier`,`directors`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `crew_directors`
--

LOCK TABLES `crew_directors` WRITE;
/*!40000 ALTER TABLE `crew_directors` DISABLE KEYS */;
INSERT INTO `crew_directors` VALUES ('tt0000001','nm0005690'),('tt0000002','nm0721526'),('tt0000003','nm0721526'),('tt0000004','nm0721526'),('tt0000005','nm0005690'),('tt0000006','nm0005690'),('tt0000007','nm0005690'),('tt0000008','nm0005690'),('tt0000009','nm0085156'),('tt0000010','nm0525910'),('tt0000011','nm0804434'),('tt0000012','nm0525908'),('tt0000013','nm0525910'),('tt0000014','nm0525910'),('tt0000015','nm0721526'),('tt0000016','nm0525910'),('tt0000017','nm0804434'),('tt0000018','nm0804434'),('tt0000019','nm0932055'),('tt0000020','nm0010291'),('tt0000022','nm0525910'),('tt0000023','nm0525910'),('tt0000024','nm0010291'),('tt0000025','nm0010291'),('tt0000026','nm0525910'),('tt0000027','nm0525910'),('tt0000028','nm0525910'),('tt0000029','nm0525910'),('tt0000030','nm0010291'),('tt0000031','nm0525910'),('tt0000032','nm0804434'),('tt0000033','nm0525910'),('tt0000034','nm0617588'),('tt0000035','nm0617588'),('tt0000036','nm0005690'),('tt0000037','nm0617588'),('tt0000038','nm0374658'),('tt0000039','none'),('tt0000040','nm0617588'),('tt0000041','nm0525910'),('tt0000042','nm0617588'),('tt0000043','nm0617588'),('tt0000044','nm0617588'),('tt0000045','nm0617588'),('tt0000046','nm0617588'),('tt0000047','nm0617588'),('tt0000048','nm0010291'),('tt0000049','nm0010291'),('tt0000050','nm0617588'),('tt0000051','nm0617588'),('tt0000052','nm0895515'),('tt0000053','nm0684607'),('tt0000054','nm0617588'),('tt0000055','nm0617588'),('tt0000056','nm0795060'),('tt0000057','nm0617588'),('tt0000058','nm0617588'),('tt0000059','nm0617588'),('tt0000060','nm0005690'),('tt0000061','nm0010291'),('tt0000062','nm0617588'),('tt0000063','nm0617588');
/*!40000 ALTER TABLE `crew_directors` ENABLE KEYS */;
UNLOCK TABLES;

-- ---------------------------------------------------------------------------

--
-- Table structure for table `crew_directors_2`
--

DROP TABLE IF EXISTS `crew_directors_2`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `crew_directors_2` (
  `unique_title_identifier` varchar(20) DEFAULT NULL,
  `directors` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `crew_directors_2`
--

LOCK TABLES `crew_directors_2` WRITE;
/*!40000 ALTER TABLE `crew_directors_2` DISABLE KEYS */;
INSERT INTO `crew_directors_2` VALUES ('tt0000001','nm0005690'),('tt0000002','nm0721526'),('tt0000003','nm0721526'),('tt0000004','nm0721526'),('tt0000005','nm0005690'),('tt0000006','nm0005690'),('tt0000007','nm0005690'),('tt0000008','nm0005690'),('tt0000009','nm0085156'),('tt0000010','nm0525910'),('tt0000011','nm0804434'),('tt0000012','nm0525908'),('tt0000013','nm0525910'),('tt0000014','nm0525910'),('tt0000015','nm0721526'),('tt0000016','nm0525910'),('tt0000017','nm0804434'),('tt0000018','nm0804434'),('tt0000019','nm0932055'),('tt0000020','nm0010291'),('tt0000022','nm0525910'),('tt0000023','nm0525910'),('tt0000024','nm0010291'),('tt0000025','nm0010291'),('tt0000026','nm0525910'),('tt0000027','nm0525910'),('tt0000028','nm0525910'),('tt0000029','nm0525910'),('tt0000030','nm0010291'),('tt0000031','nm0525910'),('tt0000032','nm0804434'),('tt0000033','nm0525910'),('tt0000034','nm0617588'),('tt0000035','nm0617588'),('tt0000036','nm0005690'),('tt0000037','nm0617588'),('tt0000038','nm0374658'),('tt0000039','none'),('tt0000040','nm0617588'),('tt0000041','nm0525910'),('tt0000042','nm0617588'),('tt0000043','nm0617588'),('tt0000044','nm0617588'),('tt0000045','nm0617588'),('tt0000046','nm0617588'),('tt0000047','nm0617588'),('tt0000048','nm0010291'),('tt0000049','nm0010291'),('tt0000050','nm0617588'),('tt0000051','nm0617588'),('tt0000052','nm0895515'),('tt0000053','nm0684607'),('tt0000054','nm0617588'),('tt0000055','nm0617588'),('tt0000056','nm0795060'),('tt0000057','nm0617588'),('tt0000058','nm0617588'),('tt0000059','nm0617588'),('tt0000060','nm0005690'),('tt0000061','nm0010291'),('tt0000062','nm0617588'),('tt0000063','nm0617588'),('tt0000064','nm0617588'),('tt0000065','nm0617588'),('tt0000066','nm0617588'),('tt0000067','nm0617588'),('tt0000068','nm0617588'),('tt0000069','nm0617588'),('tt0000070','nm0525910'),('tt0000071','nm0617588'),('tt0000072','nm0617588'),('tt0000073','nm0617588'),('tt0000074','nm0617588'),('tt0000075','nm0617588'),('tt0000076','nm0005690'),('tt0000077','nm0617588'),('tt0000078','nm0234288'),('tt0000079','nm0617588'),('tt0000080','nm0617588'),('tt0000081','nm0617588'),('tt0000082','nm0005690'),('tt0000083','nm0617588'),('tt0000084','nm0617588'),('tt0000085','nm0617588'),('tt0000086','nm0617588'),('tt0000087','nm0617588'),('tt0000088','nm0617588'),('tt0000089','nm0698645'),('tt0000090','nm0617588'),('tt0000091','nm0617588'),('tt0000092','nm0617588'),('tt0000093','nm0525910'),('tt0000094','nm0617588'),('tt0000095','nm0617588'),('tt0000096','nm0617588'),('tt0000097','nm0617588'),('tt0000098','nm0617588'),('tt0000099','nm0617588'),('tt0000100','nm0617588'),('tt0000101','nm0617588'),('tt0000102','nm0617588'),('tt0000103','nm0617588');
/*!40000 ALTER TABLE `crew_directors_2` ENABLE KEYS */;
UNLOCK TABLES;

-- ---------------------------------------------------------------------------

--
-- Table structure for table `crew_writers`
--

DROP TABLE IF EXISTS `crew_writers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `crew_writers` (
  `unique_title_identifier` varchar(20) NOT NULL,
  `writers` varchar(20) NOT NULL,
  PRIMARY KEY (`unique_title_identifier`,`writers`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `crew_writers`
--

LOCK TABLES `crew_writers` WRITE;
/*!40000 ALTER TABLE `crew_writers` DISABLE KEYS */;
INSERT INTO `crew_writers` VALUES ('tt0000001','none'),('tt0000002','none'),('tt0000003','none'),('tt0000004','none'),('tt0000005','none'),('tt0000006','none'),('tt0000007','none'),('tt0000008','none'),('tt0000009','nm0085156'),('tt0000010','none'),('tt0000011','none'),('tt0000012','none'),('tt0000013','none'),('tt0000014','none'),('tt0000015','none'),('tt0000016','none'),('tt0000017','none'),('tt0000018','none'),('tt0000019','none'),('tt0000020','none'),('tt0000022','none'),('tt0000023','none'),('tt0000024','none'),('tt0000025','none'),('tt0000026','none'),('tt0000027','none'),('tt0000028','none'),('tt0000029','none'),('tt0000030','none'),('tt0000031','none'),('tt0000032','none'),('tt0000033','none'),('tt0000034','none'),('tt0000035','none'),('tt0000036','nm0410331'),('tt0000037','none'),('tt0000038','none'),('tt0000039','none'),('tt0000040','none'),('tt0000041','none'),('tt0000042','none'),('tt0000043','none'),('tt0000044','none'),('tt0000045','none'),('tt0000046','none'),('tt0000047','none'),('tt0000048','none'),('tt0000049','none'),('tt0000050','none'),('tt0000051','none'),('tt0000052','none'),('tt0000053','none'),('tt0000054','none'),('tt0000055','none'),('tt0000056','none'),('tt0000057','none'),('tt0000058','none'),('tt0000059','none'),('tt0000060','none'),('tt0000061','none'),('tt0000062','none'),('tt0000063','none'),('tt0000064','none'),('tt0000065','none'),('tt0000066','none'),('tt0000067','none'),('tt0000068','none'),('tt0000069','none'),('tt0000070','none'),('tt0000071','none'),('tt0000072','none'),('tt0000073','none'),('tt0000074','none'),('tt0000075','none'),('tt0000076','nm0410331'),('tt0000077','none'),('tt0000078','none'),('tt0000079','none'),('tt0000080','none'),('tt0000081','none'),('tt0000082','none'),('tt0000083','none'),('tt0000084','none'),('tt0000085','none'),('tt0000086','none'),('tt0000087','none'),('tt0000088','none'),('tt0000089','none'),('tt0000090','none'),('tt0000091','nm0617588'),('tt0000092','none'),('tt0000093','none'),('tt0000094','none'),('tt0000095','none'),('tt0000096','none'),('tt0000097','none'),('tt0000098','none'),('tt0000099','none'),('tt0000100','none'),('tt0000101','none'),('tt0000102','none'),('tt0000103','none'),('tt0000104','none'),('tt0000105','none'),('tt0000106','none'),('tt0000107','none'),('tt0000108','nm0410331');
/*!40000 ALTER TABLE `crew_writers` ENABLE KEYS */;
UNLOCK TABLES;

-- ---------------------------------------------------------------------------

--
-- Table structure for table `crew_writers_2`
--

DROP TABLE IF EXISTS `crew_writers_2`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `crew_writers_2` (
  `unique_title_identifier` varchar(20) DEFAULT NULL,
  `writers` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `crew_writers_2`
--

LOCK TABLES `crew_writers_2` WRITE;
/*!40000 ALTER TABLE `crew_writers_2` DISABLE KEYS */;
INSERT INTO `crew_writers_2` VALUES ('tt0000001','none'),('tt0000002','none'),('tt0000003','none'),('tt0000004','none'),('tt0000005','none'),('tt0000006','none'),('tt0000007','none'),('tt0000008','none'),('tt0000009','nm0085156'),('tt0000010','none'),('tt0000011','none'),('tt0000012','none'),('tt0000013','none'),('tt0000014','none'),('tt0000015','none'),('tt0000016','none'),('tt0000017','none'),('tt0000018','none'),('tt0000019','none'),('tt0000020','none'),('tt0000022','none'),('tt0000023','none'),('tt0000024','none'),('tt0000025','none'),('tt0000026','none'),('tt0000027','none'),('tt0000028','none'),('tt0000029','none'),('tt0000030','none'),('tt0000031','none'),('tt0000032','none'),('tt0000033','none'),('tt0000034','none'),('tt0000035','none'),('tt0000036','nm0410331'),('tt0000037','none'),('tt0000038','none'),('tt0000039','none'),('tt0000040','none'),('tt0000041','none'),('tt0000042','none'),('tt0000043','none'),('tt0000044','none'),('tt0000045','none'),('tt0000046','none'),('tt0000047','none'),('tt0000048','none'),('tt0000049','none'),('tt0000050','none'),('tt0000051','none'),('tt0000052','none'),('tt0000053','none'),('tt0000054','none'),('tt0000055','none'),('tt0000056','none'),('tt0000057','none'),('tt0000058','none'),('tt0000059','none'),('tt0000060','none'),('tt0000061','none'),('tt0000062','none'),('tt0000063','none'),('tt0000064','none'),('tt0000065','none'),('tt0000066','none'),('tt0000067','none'),('tt0000068','none'),('tt0000069','none'),('tt0000070','none'),('tt0000071','none'),('tt0000072','none'),('tt0000073','none'),('tt0000074','none'),('tt0000075','none'),('tt0000076','nm0410331'),('tt0000077','none'),('tt0000078','none'),('tt0000079','none'),('tt0000080','none'),('tt0000081','none'),('tt0000082','none'),('tt0000083','none'),('tt0000084','none'),('tt0000085','none'),('tt0000086','none'),('tt0000087','none'),('tt0000088','none'),('tt0000089','none'),('tt0000090','none'),('tt0000091','nm0617588'),('tt0000092','none'),('tt0000093','none'),('tt0000094','none'),('tt0000095','none'),('tt0000096','none'),('tt0000097','none'),('tt0000098','none'),('tt0000099','none'),('tt0000100','none'),('tt0000101','none'),('tt0000102','none'),('tt0000103','none'),('tt0000104','none'),('tt0000105','none'),('tt0000106','none'),('tt0000107','none'),('tt0000108','nm0410331'),('tt0000109','nm0410331'),('tt0000110','nm0410331'),('tt0000111','nm0410331'),('tt0000112','nm0410331'),('tt0000113','nm0410331'),('tt0000114','none'),('tt0000115','none'),('tt0000116','none'),('tt0000117','none'),('tt0000118','none'),('tt0000119','none'),('tt0000120','none'),('tt0000121','none'),('tt0000122','none'),('tt0000123','none'),('tt0000124','none'),('tt0000125','none'),('tt0000126','none'),('tt0000127','none'),('tt0000128','none'),('tt0000129','none'),('tt0000130','none'),('tt0000131','none'),('tt0000132','nm0617588'),('tt0000133','none'),('tt0000134','none'),('tt0000135','none'),('tt0000137','none');
/*!40000 ALTER TABLE `crew_writers_2` ENABLE KEYS */;
UNLOCK TABLES;

-- ---------------------------------------------------------------------------

--
-- Table structure for table `made_by`
--

DROP TABLE IF EXISTS `made_by`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `made_by` (
  `unique_title_identifier` varchar(20) NOT NULL,
  `director` varchar(1001) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`unique_title_identifier`,`director`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `made_by`
--

LOCK TABLES `made_by` WRITE;
/*!40000 ALTER TABLE `made_by` DISABLE KEYS */;
INSERT INTO `made_by` VALUES ('tt0000001','nm0005690'),('tt0000002','nm0721526'),('tt0000003','nm0721526'),('tt0000004','nm0721526'),('tt0000005','nm0005690'),('tt0000006','nm0005690'),('tt0000007','nm0005690'),('tt0000007','nm0374658'),('tt0000008','nm0005690'),('tt0000009','nm0085156'),('tt0000010','nm0525910'),('tt0000011','nm0804434'),('tt0000012','nm0525908'),('tt0000012','nm0525910'),('tt0000013','nm0525910'),('tt0000014','nm0525910'),('tt0000015','nm0721526'),('tt0000016','nm0525910'),('tt0000017','nm0804434'),('tt0000017','nm1587194'),('tt0000018','nm0804434'),('tt0000019','nm0932055'),('tt0000020','nm0010291'),('tt0000022','nm0525910'),('tt0000023','nm0525910'),('tt0000024','nm0010291'),('tt0000025','nm0010291'),('tt0000026','nm0525910'),('tt0000027','nm0525910'),('tt0000028','nm0525910'),('tt0000029','nm0525910'),('tt0000030','nm0010291'),('tt0000030','nm0666972'),('tt0000031','nm0525910'),('tt0000032','nm0804434'),('tt0000033','nm0525910'),('tt0000034','nm0617588'),('tt0000035','nm0617588'),('tt0000036','nm0005690'),('tt0000037','nm0617588'),('tt0000038','nm0374658'),('tt0000040','nm0617588'),('tt0000041','nm0525910'),('tt0000042','nm0617588'),('tt0000043','nm0617588'),('tt0000044','nm0617588'),('tt0000045','nm0617588'),('tt0000046','nm0617588'),('tt0000047','nm0617588'),('tt0000048','nm0010291'),('tt0000049','nm0010291'),('tt0000050','nm0617588'),('tt0000051','nm0617588'),('tt0000052','nm0895515'),('tt0000053','nm0684607'),('tt0000054','nm0617588'),('tt0000055','nm0617588'),('tt0000056','nm0795060'),('tt0000057','nm0617588'),('tt0000058','nm0617588'),('tt0000059','nm0617588'),('tt0000060','nm0005690'),('tt0000061','nm0010291'),('tt0000062','nm0617588'),('tt0000067','nm0617588'),('tt0000068','nm0617588'),('tt0000069','nm0617588'),('tt0000070','nm0525910'),('tt0000071','nm0617588'),('tt0000072','nm0617588'),('tt0000073','nm0617588'),('tt0000074','nm0617588'),('tt0000076','nm0005690'),('tt0000077','nm0617588'),('tt0000078','nm0234288'),('tt0000079','nm0617588'),('tt0000080','nm0617588'),('tt0000081','nm0617588'),('tt0000082','nm0005690'),('tt0000083','nm0617588'),('tt0000084','nm0617588'),('tt0000085','nm0617588'),('tt0000086','nm0617588'),('tt0000087','nm0617588'),('tt0000088','nm0617588'),('tt0000089','nm0525908'),('tt0000089','nm0698645'),('tt0000090','nm0617588'),('tt0000092','nm0617588'),('tt0000093','nm0525908'),('tt0000093','nm0525910'),('tt0000094','nm0617588'),('tt0000095','nm0617588'),('tt0000096','nm0617588'),('tt0000097','nm0617588');
/*!40000 ALTER TABLE `made_by` ENABLE KEYS */;
UNLOCK TABLES;

-- ---------------------------------------------------------------------------

--
-- Table structure for table `media`
--

DROP TABLE IF EXISTS `media`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `media` (
  `unique_title_identifier` varchar(20) NOT NULL,
  `common_title` varchar(1000) DEFAULT NULL,
  `original_title` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`unique_title_identifier`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `media`
--

LOCK TABLES `media` WRITE;
/*!40000 ALTER TABLE `media` DISABLE KEYS */;
INSERT INTO `media` VALUES ('tt0000001','Carmencita','Carmencita'),('tt0000002','Le clown et ses chiens','Le clown et ses chiens'),('tt0000003','Pauvre Pierrot','Pauvre Pierrot'),('tt0000004','Un bon bock','Un bon bock'),('tt0000005','Blacksmith Scene','Blacksmith Scene'),('tt0000006','Chinese Opium Den','Chinese Opium Den'),('tt0000007','Corbett and Courtney Before the Kinetograph','Corbett and Courtney Before the Kinetograph'),('tt0000008','Edison Kinetoscopic Record of a Sneeze','Edison Kinetoscopic Record of a Sneeze'),('tt0000009','Miss Jerry','Miss Jerry'),('tt0000010','Leaving the Factory','La sortie de l\'usine Lumière à Lyon'),('tt0000011','Akrobatisches Potpourri','Akrobatisches Potpourri'),('tt0000012','The Arrival of a Train','L\'arrivée d\'un train à La Ciotat'),('tt0000013','The Photographical Congress Arrives in Lyon','Le débarquement du congrès de photographie à Lyon'),('tt0000014','The Waterer Watered','L\'arroseur arrosé'),('tt0000015','Autour d\'une cabine','Autour d\'une cabine'),('tt0000016','Boat Leaving the Port','Barque sortant du port'),('tt0000017','Italienischer Bauerntanz','Italienischer Bauerntanz'),('tt0000018','Das boxende Känguruh','Das boxende Känguruh'),('tt0000019','The Clown Barber','The Clown Barber'),('tt0000020','The Derby 1895','The Derby 1895'),('tt0000022','Blacksmith Scene','Les forgerons'),('tt0000023','The Sea','Baignade en mer'),('tt0000024','Opening of the Kiel Canal','Opening of the Kiel Canal'),('tt0000025','The Oxford and Cambridge University Boat Race','The Oxford and Cambridge University Boat Race'),('tt0000026','The Messers. Lumière at Cards','Partie d\'écarté'),('tt0000027','Cordeliers\' Square in Lyon','Place des Cordeliers à Lyon'),('tt0000028','Fishing for Goldfish','La pêche aux poissons rouges'),('tt0000029','Baby\'s Meal','Repas de bébé'),('tt0000030','Rough Sea at Dover','Rough Sea at Dover'),('tt0000031','Jumping the Blanket','Le saut à la couverture'),('tt0000032','Die Serpentintänzerin','Die Serpentintänzerin'),('tt0000033','Horse Trick Riders','La voltige'),('tt0000034','Arrivée d\'un train gare de Vincennes','Arrivée d\'un train gare de Vincennes'),('tt0000035','Watering the Flowers','L\'arroseur'),('tt0000036','Awakening of Rip','Awakening of Rip'),('tt0000037','Sea Bathing','Baignade en mer'),('tt0000038','The Ball Game','The Ball Game'),('tt0000039','Barnet Horse Fair','Barnet Horse Fair'),('tt0000040','Barque sortant du port de Trouville','Barque sortant du port de Trouville'),('tt0000041','Bataille de neige','Bataille de neige'),('tt0000042','Bateau-mouche sur la Seine','Bateau-mouche sur la Seine'),('tt0000043','Batteuse à vapeur','Batteuse à vapeur'),('tt0000044','Le bivouac','Le bivouac'),('tt0000045','Les blanchisseuses','Les blanchisseuses'),('tt0000046','Bois de Boulogne','Bois de Boulogne'),('tt0000047','Boulevard des Italiens','Boulevard des Italiens'),('tt0000048','The Boxing Kangaroo','The Boxing Kangaroo'),('tt0000049','Boxing Match; or, Glove Contest','Boxing Match; or, Glove Contest'),('tt0000050','Bébé et fillettes','Bébé et fillettes'),('tt0000051','The Bohemian Encampment','Campement de bohémiens'),('tt0000052','Carga de rurales','Carga de rurales'),('tt0000053','A Chegada do Comboio Inaugural à Estação Central do Porto','A Chegada do Comboio Inaugural à Estação Central do Porto'),('tt0000054','A Merry-Go-Round','Les chevaux de bois'),('tt0000055','Le chiffonnier','Le chiffonnier'),('tt0000056','Uma Corrida de Touros no Campo Pequeno','Uma Corrida de Touros no Campo Pequeno'),('tt0000057','Cortège de tzar allant à Versailles','Cortège de tzar allant à Versailles'),('tt0000058','Cortège de tzar au Bois de Boulogne','Cortège de tzar au Bois de Boulogne'),('tt0000059','Coronation of a Village Maiden','Couronnement de la rosière');
/*!40000 ALTER TABLE `media` ENABLE KEYS */;
UNLOCK TABLES;

-- ---------------------------------------------------------------------------

--
-- Table structure for table `media_genres`
--

DROP TABLE IF EXISTS `media_genres`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `media_genres` (
  `unique_title_identifier` varchar(20) DEFAULT NULL,
  `genres` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `media_genres`
--

LOCK TABLES `media_genres` WRITE;
/*!40000 ALTER TABLE `media_genres` DISABLE KEYS */;
INSERT INTO `media_genres` VALUES ('tt0000001','Documentary,Short'),('tt0000002','Animation,Short'),('tt0000003','Animation,Comedy,Romance'),('tt0000004','Animation,Short'),('tt0000005','Comedy,Short'),('tt0000006','Short'),('tt0000007','Short,Sport'),('tt0000008','Documentary,Short'),('tt0000009','Romance,Short'),('tt0000010','Documentary,Short'),('tt0000011','Documentary,Short'),('tt0000012','Documentary,Short'),('tt0000013','Documentary,Short'),('tt0000014','Comedy,Short'),('tt0000015','Animation,Short'),('tt0000016','Documentary,Short'),('tt0000017','Documentary,Short'),('tt0000018','Short'),('tt0000019','Comedy,Short'),('tt0000020','Documentary,Short,Sport'),('tt0000022','Documentary,Short'),('tt0000023','Documentary,Short'),('tt0000024','News,Short'),('tt0000025','News,Short,Sport'),('tt0000026','Documentary,Short'),('tt0000027','Documentary,Short'),('tt0000028','Documentary,Short'),('tt0000029','Documentary,Short'),('tt0000030','Documentary,Short'),('tt0000031','Documentary,Short'),('tt0000032','Short'),('tt0000033','Comedy,Documentary,Short'),('tt0000034','Documentary,Short'),('tt0000035','Comedy,Short'),('tt0000036','Drama,Short'),('tt0000037','Short'),('tt0000038','Documentary,Short,Sport'),('tt0000039','Short'),('tt0000040','Documentary,Short'),('tt0000041','Comedy,Documentary,Short'),('tt0000042','Documentary,Short'),('tt0000043','Documentary,Short'),('tt0000044','Short'),('tt0000045','Short'),('tt0000046','Documentary,Short'),('tt0000047','Documentary,Short'),('tt0000048','Short'),('tt0000049','Short,Sport'),('tt0000050','Documentary,Short'),('tt0000051','Documentary,Short'),('tt0000052','Documentary,Short'),('tt0000053','Documentary,Short'),('tt0000054','Short'),('tt0000055','Short'),('tt0000056','Short'),('tt0000057','Documentary,Short'),('tt0000058','Documentary,Short'),('tt0000059','Short'),('tt0000060','Documentary,Short'),('tt0000061','Short'),('tt0000062','Short'),('tt0000063','Short'),('tt0000064','Short'),('tt0000065','Short');
/*!40000 ALTER TABLE `media_genres` ENABLE KEYS */;
UNLOCK TABLES;

-- ---------------------------------------------------------------------------

--
-- Table structure for table `movie`
--

DROP TABLE IF EXISTS `movie`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `movie` (
  `unique_title_identifier` varchar(20) NOT NULL,
  `year_released` int DEFAULT NULL,
  `runtime` int DEFAULT NULL,
  PRIMARY KEY (`unique_title_identifier`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `movie`
--

LOCK TABLES `movie` WRITE;
/*!40000 ALTER TABLE `movie` DISABLE KEYS */;
INSERT INTO `movie` VALUES ('tt0000502',1905,100),('tt0000574',1906,70),('tt0000591',1907,90),('tt0000615',1907,0),('tt0000630',1908,0),('tt0000675',1908,0),('tt0000679',1908,120),('tt0000739',1908,0),('tt0000793',1909,0),('tt0000814',1909,0),('tt0000838',1909,0),('tt0000842',1909,0),('tt0000846',1909,0),('tt0000850',1909,0),('tt0000859',1909,0),('tt0000862',1909,0),('tt0000867',1909,0),('tt0000868',1909,0),('tt0000869',1909,0),('tt0000879',1909,0),('tt0000886',1910,0),('tt0000941',1909,0),('tt0000947',1909,0),('tt0000959',1909,0),('tt0000984',1909,0),('tt0000992',1909,0),('tt0001007',1909,0),('tt0001010',1909,0),('tt0001028',1909,0),('tt0001038',1910,0),('tt0001043',1909,0),('tt0001049',1909,0),('tt0001051',1909,0),('tt0001059',1909,0),('tt0001069',1909,0),('tt0001080',1909,0),('tt0001081',1909,0),('tt0001082',1909,0),('tt0001101',1910,0),('tt0001109',1910,0),('tt0001112',1910,0),('tt0001113',1910,0),('tt0001115',1910,0),('tt0001116',1910,0),('tt0001122',1910,0),('tt0001141',1910,0),('tt0001142',1910,0),('tt0001147',1910,0),('tt0001159',1910,0),('tt0001163',1910,0),('tt0001175',1912,0),('tt0001179',1910,0),('tt0001184',1910,58),('tt0001203',1910,0),('tt0001230',1910,0),('tt0001240',1911,0),('tt0001247',1910,0),('tt0001277',1910,0),('tt0001285',1909,50),('tt0001338',1910,0),('tt0001341',1913,0),('tt0001348',1910,0),('tt0001353',1911,0),('tt0001358',1910,0),('tt0001359',1910,0),('tt0001364',1910,0),('tt0001366',1910,0),('tt0001370',1910,0),('tt0001379',1910,0),('tt0001382',1910,0),('tt0001386',1910,0),('tt0001422',1910,0),('tt0001440',1910,0),('tt0001465',1910,0),('tt0001475',1911,0),('tt0001495',1911,0),('tt0001498',1911,51),('tt0001515',1911,0),('tt0001521',1911,0),('tt0001530',1911,0),('tt0001531',1911,0),('tt0001555',1911,0),('tt0001569',1911,0),('tt0001586',1911,0),('tt0001592',1911,52),('tt0001602',1911,0),('tt0001603',1911,0),('tt0001604',1911,0),('tt0001628',1911,0),('tt0001630',1911,45),('tt0001648',1911,0),('tt0001706',1911,0),('tt0001711',1915,0),('tt0001712',1911,0),('tt0001716',1911,0),('tt0001731',1911,0),('tt0001756',1911,92),('tt0001764',1911,0);
/*!40000 ALTER TABLE `movie` ENABLE KEYS */;
UNLOCK TABLES;

-- ---------------------------------------------------------------------------

--
-- Table structure for table `names`
--

DROP TABLE IF EXISTS `names`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `names` (
  `nconst` varchar(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`nconst`,`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `names`
--

LOCK TABLES `names` WRITE;
/*!40000 ALTER TABLE `names` DISABLE KEYS */;
INSERT INTO `names` VALUES ('nm0000001','Fred Astaire\r'),('nm0000004','John Belushi\r'),('nm0000005','Ingmar Bergman\r'),('nm0000007','Humphrey Bogart\r'),('nm0000008','Marlon Brando\r'),('nm0000009','Richard Burton\r'),('nm0000010','James Cagney\r'),('nm0000011','Gary Cooper\r'),('nm0000015','James Dean\r'),('nm0000018','Kirk Douglas\r'),('nm0000019','Federico Fellini\r'),('nm0000020','Henry Fonda\r'),('nm0000022','Clark Gable\r'),('nm0000024','John Gielgud\r'),('nm0000026','Cary Grant\r'),('nm0000027','Alec Guinness\r'),('nm0000032','Charlton Heston\r'),('nm0000033','Alfred Hitchcock\r'),('nm0000034','William Holden\r'),('nm0000036','Buster Keaton\r'),('nm0000037','Gene Kelly\r'),('nm0000040','Stanley Kubrick\r'),('nm0000041','Akira Kurosawa\r'),('nm0000042','Alan Ladd\r'),('nm0000044','Burt Lancaster\r'),('nm0000045','Bruce Lee\r'),('nm0000048','Peter Lorre\r'),('nm0000049','Henry Mancini\r'),('nm0000050','Groucho Marx\r'),('nm0000051','James Mason\r'),('nm0000052','Marcello Mastroianni\r'),('nm0000053','Robert Mitchum\r'),('nm0000054','Marilyn Monroe\r'),('nm0000055','Alfred Newman\r'),('nm0000056','Paul Newman\r'),('nm0000057','David Niven\r'),('nm0000059','Laurence Olivier\r'),('nm0000060','Gregory Peck\r'),('nm0000061','Tyrone Power\r'),('nm0000062','Elvis Presley\r'),('nm0000063','Anthony Quinn\r'),('nm0000064','Edward G. Robinson\r'),('nm0000067','Miklós Rózsa\r'),('nm0000068','Randolph Scott\r'),('nm0000069','Frank Sinatra\r'),('nm0000071','James Stewart\r'),('nm0000075','Spencer Tracy\r'),('nm0000076','François Truffaut\r'),('nm0000078','John Wayne\r'),('nm0000080','Orson Welles\r'),('nm0000082','Victor Young\r'),('nm0000083','Alan Miller\r'),('nm0000085','Henner Hofmann\r'),('nm0000086','Louis de Funès\r'),('nm0000088','Aleksey Korenev\r'),('nm0000089','Richard Paul\r'),('nm0000090','Armin Mueller-Stahl\r'),('nm0000091','Gérard Pirès\r'),('nm0000092','John Cleese\r'),('nm0000093','Brad Pitt\r'),('nm0000094','J. Reifel\r'),('nm0000095','Woody Allen\r'),('nm0000098','Jennifer Aniston\r'),('nm0000100','Rowan Atkinson\r'),('nm0000101','Dan Aykroyd\r'),('nm0000102','Kevin Bacon\r'),('nm0000104','Antonio Banderas\r'),('nm0000106','Drew Barrymore\r'),('nm0000108','Luc Besson\r'),('nm0000110','Kenneth Branagh\r'),('nm0000111','Matthew Broderick\r'),('nm0000112','Pierce Brosnan\r'),('nm0000114','Steve Buscemi\r'),('nm0000115','Nicolas Cage\r'),('nm0000116','James Cameron\r'),('nm0000118','John Carpenter\r'),('nm0000120','Jim Carrey\r'),('nm0000122','Charles Chaplin\r'),('nm0000123','George Clooney\r'),('nm0000125','Sean Connery\r'),('nm0000126','Kevin Costner\r'),('nm0000127','Wes Craven\r'),('nm0000128','Russell Crowe\r'),('nm0000129','Tom Cruise\r'),('nm0000130','Jamie Lee Curtis\r'),('nm0000131','John Cusack\r'),('nm0000134','Robert De Niro\r'),('nm0000135','John Denver\r'),('nm0000136','Johnny Depp\r'),('nm0000138','Leonardo DiCaprio\r'), ('nm0000196','Mike Myers\r');
/*!40000 ALTER TABLE `names` ENABLE KEYS */;
UNLOCK TABLES;

-- ---------------------------------------------------------------------------

--
-- Table structure for table `old_cast`
--

DROP TABLE IF EXISTS `old_cast`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `old_cast` (
  `unique_title_identifier` varchar(20) DEFAULT NULL,
  `name` varchar(20) DEFAULT NULL,
  `job` text,
  `category` text,
  `characters` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `old_cast`
--

LOCK TABLES `old_cast` WRITE;
/*!40000 ALTER TABLE `old_cast` DISABLE KEYS */;
INSERT INTO `old_cast` VALUES ('tt0000001','nm0005690','N','director','N'),('tt0000002','nm0721526','N','director','N'),('tt0000003','nm0721526','N','director','N'),('tt0000004','nm0721526','N','director','N'),('tt0000005','nm0443482','N','actor','[Blacksmith]'),('tt0000005','nm0653042','N','actor','[Assistant]'),('tt0000005','nm0005690','N','director','N'),('tt0000006','nm0005690','N','director','N'),('tt0000007','nm0179163','N','actor','N'),('tt0000007','nm0183947','N','actor','N'),('tt0000007','nm0005690','N','director','N'),('tt0000007','nm0374658','N','director','N'),('tt0000008','nm0653028','N','actor','[Sneezing Man]'),('tt0000008','nm0005690','N','director','N'),('tt0000009','nm0183823','N','actor','[Mr. Hamilton]'),('tt0000009','nm1309758','N','actor','[Chauncey Depew - the Director of the New York Central Railroad]'),('tt0000009','nm0085156','N','director','N'),('tt0000010','nm0525910','N','director','N'),('tt0000011','nm3692297','N','actor','[Acrobats]'),('tt0000011','nm0804434','N','director','N'),('tt0000012','nm0525908','N','director','N'),('tt0000012','nm0525910','N','director','N'),('tt0000013','nm0525910','N','director','N'),('tt0000014','nm0166380','N','actor','[The Gardener]'),('tt0000014','nm0244989','N','actor','[The Boy]'),('tt0000014','nm0525910','N','director','N'),('tt0000015','nm0721526','N','director','N'),('tt0000016','nm0525910','N','director','N'),('tt0000017','nm3691272','N','actor','[The boy]'),('tt0000017','nm1587194','N','director','N'),('tt0000017','nm0804434','N','director','N'),('tt0000018','nm3692071','N','actor','[The Boxer]'),('tt0000018','nm0804434','N','director','N'),('tt0000019','nm0932055','N','director','N'),('tt0000020','nm0010291','N','director','N'),('tt0000022','nm0525910','N','director','N'),('tt0000023','nm0525910','N','director','N'),('tt0000024','nm0010291','N','director','N'),('tt0000025','nm0010291','N','director','N'),('tt0000026','nm2350007','N','actor','[Valet]'),('tt0000026','nm0525907','N','actor','[Man playing cards, seated on the left]'),('tt0000026','nm1151424','N','actor','[Man playing cards, seated on the right]'),('tt0000026','nm2354154','N','actor','[Man playing cards, seated in the middle]'),('tt0000026','nm0525910','N','director','N'),('tt0000027','nm0525910','N','director','N');
/*!40000 ALTER TABLE `old_cast` ENABLE KEYS */;
UNLOCK TABLES;

-- ---------------------------------------------------------------------------

--
-- Table structure for table `short`
--

DROP TABLE IF EXISTS `short`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `short` (
  `unique_title_identifier` varchar(20) NOT NULL,
  `runtime` int DEFAULT NULL,
  PRIMARY KEY (`unique_title_identifier`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `short`
--

LOCK TABLES `short` WRITE;
/*!40000 ALTER TABLE `short` DISABLE KEYS */;
INSERT INTO `short` VALUES ('tt0000001',1),('tt0000002',5),('tt0000003',4),('tt0000004',12),('tt0000005',1),('tt0000006',1),('tt0000007',1),('tt0000008',1),('tt0000009',40),('tt0000010',1),('tt0000011',1),('tt0000012',1),('tt0000013',1),('tt0000014',1),('tt0000015',2),('tt0000016',1),('tt0000017',1),('tt0000018',1),('tt0000019',0),('tt0000020',1),('tt0000022',1),('tt0000023',1),('tt0000024',0),('tt0000025',0),('tt0000026',1),('tt0000027',1),('tt0000028',1),('tt0000029',1),('tt0000030',1),('tt0000031',1),('tt0000032',1),('tt0000033',1),('tt0000034',1),('tt0000035',1),('tt0000036',0),('tt0000037',1),('tt0000038',0),('tt0000039',0),('tt0000040',0),('tt0000041',1),('tt0000042',0),('tt0000043',0),('tt0000044',1),('tt0000045',0),('tt0000046',0),('tt0000047',0),('tt0000048',0),('tt0000049',0),('tt0000050',0),('tt0000051',0),('tt0000052',1),('tt0000053',0),('tt0000054',0),('tt0000055',0),('tt0000056',0),('tt0000057',0),('tt0000058',0),('tt0000059',0),('tt0000060',0),('tt0000061',0),('tt0000062',1),('tt0000063',0),('tt0000064',0),('tt0000065',0),('tt0000066',0),('tt0000067',0),('tt0000068',0),('tt0000069',1),('tt0000070',1),('tt0000071',0),('tt0000072',0),('tt0000073',0),('tt0000074',0),('tt0000075',1),('tt0000076',1),('tt0000077',0),('tt0000078',1),('tt0000079',0),('tt0000080',0),('tt0000081',0),('tt0000082',0),('tt0000083',0),('tt0000084',0),('tt0000085',0),('tt0000086',0),('tt0000087',0),('tt0000088',0),('tt0000089',1),('tt0000090',0),('tt0000091',3),('tt0000092',0),('tt0000093',0),('tt0000094',0),('tt0000095',0),('tt0000096',0),('tt0000097',0),('tt0000098',0),('tt0000099',0),('tt0000100',0),('tt0000101',0),('tt0000102',0),('tt0000103',0),('tt0000104',1),('tt0000105',0),('tt0000106',0),('tt0000107',0),('tt0000108',1),('tt0000109',1),('tt0000110',1),('tt0000111',1),('tt0000112',1),('tt0000113',0),('tt0000114',0),('tt0000115',0),('tt0000116',0),('tt0000117',1),('tt0000118',0),('tt0000119',0),('tt0000120',0),('tt0000121',1),('tt0000122',0),('tt0000123',0),('tt0000124',0),('tt0000125',0),('tt0000126',0),('tt0000127',0),('tt0000128',0),('tt0000129',0);
/*!40000 ALTER TABLE `short` ENABLE KEYS */;
UNLOCK TABLES;

-- ---------------------------------------------------------------------------

--
-- Table structure for table `stars_in`
--

DROP TABLE IF EXISTS `stars_in`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `stars_in` (
  `unique_title_identifier` varchar(20) NOT NULL,
  `name` varchar(250) NOT NULL,
  PRIMARY KEY (`unique_title_identifier`,`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stars_in`
--

LOCK TABLES `stars_in` WRITE;
/*!40000 ALTER TABLE `stars_in` DISABLE KEYS */;
INSERT INTO `stars_in` VALUES ('tt0000005','nm0443482'),('tt0000005','nm0653042'),('tt0000007','nm0179163'),('tt0000007','nm0183947'),('tt0000008','nm0653028'),('tt0000009','nm0183823'),('tt0000009','nm1309758'),('tt0000011','nm3692297'),('tt0000014','nm0166380'),('tt0000014','nm0244989'),('tt0000017','nm3691272'),('tt0000018','nm3692071'),('tt0000026','nm0525907'),('tt0000026','nm1151424'),('tt0000026','nm2350007'),('tt0000026','nm2354154'),('tt0000036','nm0420198'),('tt0000063','nm0617588'),('tt0000064','nm0617588'),('tt0000065','nm0617588'),('tt0000066','nm0617588'),('tt0000070','nm0525908'),('tt0000075','nm0617588'),('tt0000076','nm0420198'),('tt0000091','nm0617588'),('tt0000091','nm6170115'),('tt0000108','nm0420198'),('tt0000109','nm0420198'),('tt0000110','nm0420198'),('tt0000111','nm0420198'),('tt0000112','nm0420198'),('tt0000113','nm0420198'),('tt0000121','nm0832461'),('tt0000131','nm0617588'),('tt0000132','nm0577734'),('tt0000132','nm0617588'),('tt0000138','nm0617588'),('tt0000142','nm0168621'),('tt0000152','nm0617588'),('tt0000165','nm0005717'),('tt0000165','nm0024876'),('tt0000165','nm0278321'),('tt0000165','nm0556371'),('tt0000165','nm0563758'),('tt0000172','nm0338379'),('tt0000174','nm0841389'),('tt0000174','nm1024447'),('tt0000177','nm0085865'),('tt0000190','nm0841389'),('tt0000190','nm1024447'),('tt0000210','nm0617588'),('tt0000211','nm0617588'),('tt0000214','nm0085865'),('tt0000215','nm0841389'),('tt0000218','nm0617588'),('tt0000230','nm1778224'),('tt0000230','nm1778292'),('tt0000234','nm0617588'),('tt0000235','nm0617588'),('tt0000242','nm0617588'),('tt0000246','nm0617588'),('tt0000247','nm0002504'),('tt0000247','nm0784327'),('tt0000247','nm0924893'),('tt0000247','nm2259742'),('tt0000248','nm0808310'),('tt0000261','nm0617588'),('tt0000264','nm0617588'),('tt0000265','nm0335788'),('tt0000273','nm1040375'),('tt0000273','nm1894886'),('tt0000279','nm0168621'),('tt0000280','nm0168621'),('tt0000281','nm0168621'),('tt0000300','nm0085865'),('tt0000304','nm2940072'),('tt0000306','nm0536252'),('tt0000307','nm0085865'),('tt0000308','nm2940072'),('tt0000309','nm0378408'),('tt0000310','nm0335788'),('tt0000313','nm0338379'),('tt0000318','nm0804433'),('tt0000318','nm13155558'),('tt0000319','nm1272063'),('tt0000319','nm1272675'),('tt0000335','nm0675239'),('tt0000335','nm0675260'),('tt0000335','nm1011210'),('tt0000335','nm1012612'),('tt0000335','nm1012621'),('tt0000340','nm0542567'),('tt0000341','nm0542567'),('tt0000347','nm0168621'),('tt0000358','nm0509806');
/*!40000 ALTER TABLE `stars_in` ENABLE KEYS */;
UNLOCK TABLES;

-- ---------------------------------------------------------------------------

--
-- Table structure for table `stars_in2`
--

DROP TABLE IF EXISTS `stars_in2`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `stars_in2` (
  `title` varchar(20) DEFAULT NULL,
  `n` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stars_in2`
--

LOCK TABLES `stars_in2` WRITE;
/*!40000 ALTER TABLE `stars_in2` DISABLE KEYS */;
INSERT INTO `stars_in2` VALUES ('tt0000005','nm0443482'),('tt0000005','nm0653042'),('tt0000007','nm0179163'),('tt0000007','nm0183947'),('tt0000008','nm0653028'),('tt0000009','nm0183823'),('tt0000009','nm1309758'),('tt0000011','nm3692297'),('tt0000014','nm0166380'),('tt0000014','nm0244989'),('tt0000017','nm3691272'),('tt0000018','nm3692071'),('tt0000026','nm2350007'),('tt0000026','nm0525907'),('tt0000026','nm1151424'),('tt0000026','nm2354154'),('tt0000036','nm0420198'),('tt0000063','nm0617588'),('tt0000064','nm0617588'),('tt0000065','nm0617588'),('tt0000066','nm0617588'),('tt0000070','nm0525908'),('tt0000075','nm0617588'),('tt0000076','nm0420198'),('tt0000091','nm6170115'),('tt0000091','nm0617588'),('tt0000108','nm0420198'),('tt0000109','nm0420198'),('tt0000110','nm0420198'),('tt0000111','nm0420198'),('tt0000112','nm0420198'),('tt0000113','nm0420198'),('tt0000121','nm0832461'),('tt0000131','nm0617588'),('tt0000132','nm0577734'),('tt0000132','nm0617588'),('tt0000138','nm0617588'),('tt0000142','nm0168621'),('tt0000152','nm0617588'),('tt0000165','nm0024876'),('tt0000165','nm0278321'),('tt0000165','nm0005717'),('tt0000165','nm0556371'),('tt0000165','nm0563758'),('tt0000172','nm0338379'),('tt0000174','nm0841389'),('tt0000174','nm1024447'),('tt0000177','nm0085865'),('tt0000190','nm0841389'),('tt0000190','nm1024447'),('tt0000210','nm0617588'),('tt0000211','nm0617588'),('tt0000214','nm0085865'),('tt0000215','nm0841389'),('tt0000218','nm0617588'),('tt0000230','nm1778224'),('tt0000230','nm1778292'),('tt0000234','nm0617588'),('tt0000235','nm0617588'),('tt0000242','nm0617588'),('tt0000246','nm0617588'),('tt0000247','nm0002504'),('tt0000247','nm0784327'),('tt0000247','nm2259742'),('tt0000247','nm0924893'),('tt0000248','nm0808310'),('tt0000261','nm0617588'),('tt0000264','nm0617588'),('tt0000265','nm0335788'),('tt0000273','nm1040375'),('tt0000273','nm1894886'),('tt0000279','nm0168621'),('tt0000280','nm0168621'),('tt0000281','nm0168621'),('tt0000300','nm0085865'),('tt0000304','nm2940072'),('tt0000306','nm0536252'),('tt0000307','nm0085865'),('tt0000308','nm2940072'),('tt0000309','nm0378408'),('tt0000310','nm0335788'),('tt0000313','nm0338379'),('tt0000318','nm13155558'),('tt0000318','nm0804433'),('tt0000319','nm1272063'),('tt0000319','nm1272675'),('tt0000335','nm1012612'),('tt0000335','nm1011210'),('tt0000335','nm1012621'),('tt0000335','nm0675239'),('tt0000335','nm0675260'),('tt0000340','nm0542567'),('tt0000341','nm0542567'),('tt0000347','nm0168621'),('tt0000358','nm0509806'),('tt0000358','nm1778194'),('tt0000358','nm0954087'),('tt0000359','nm0617588'),('tt0000370','nm8709803'),('tt0000376','nm0466448'),('tt0000381','nm0168621'),('tt0000387','nm5394591'),('tt0000399','nm0924920'),('tt0000399','nm0925513'),('tt0000402','nm0338379'),('tt0000413','nm0617588'),('tt0000414','nm0542567'),('tt0000417','nm0617588'),('tt0000417','nm0029244'),('tt0000417','nm1215996'),('tt0000420','nm0378408');
/*!40000 ALTER TABLE `stars_in2` ENABLE KEYS */;
UNLOCK TABLES;



-- ---------------------------------------------------------------------------


--
-- Table structure for table `user_account`
--

DROP TABLE IF EXISTS `user_account`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user_account` (
  `email` varchar(256) NOT NULL,
  `username` text,
  `user_password` text,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_account`
--

LOCK TABLES `user_account` WRITE;
/*!40000 ALTER TABLE `user_account` DISABLE KEYS */;
INSERT INTO `user_account` VALUES ('dam7dz@virginia.edu','Dominique','Pearl123!'),('jkl6et@virginia.edu','Juliette','Rainbow123!'),('ktw3bq@virginia.edu','Kiana','Password123!'),('lcg4vt@virginia.edu','Lili','Diamond123!'),('up3f@virginia.edu','Upsorn','Databases123!');
/*!40000 ALTER TABLE `user_account` ENABLE KEYS */;
UNLOCK TABLES;

-- ---------------------------------------------------------------------------

--
-- Table structure for table `has_watched`
--

DROP TABLE IF EXISTS `has_watched`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `has_watched` (
  `email` varchar(256) NOT NULL,
  `unique_title_identifier` varchar(20) NOT NULL,
  `user_comment` text,
  `rating` int DEFAULT NULL,
  PRIMARY KEY (`email`,`unique_title_identifier`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `has_watched`
--

LOCK TABLES `has_watched` WRITE;
/*!40000 ALTER TABLE `has_watched` DISABLE KEYS */;
INSERT INTO `has_watched` VALUES ('dam7dz@virginia.edu','tt0126029','Shrek is my childhood and it was really funny.',9),('dam7dz@virginia.edu','tt0327597','Coraline was creepy but the art was still really good and the storyline had my attention',9),('dam7dz@virginia.edu','tt1490017','The lego movie was so corny and the song killed me...',5),('dam7dz@virginia.edu','tt8449144','The new Batman movie was okay. The cast was really good looking though.',8),('dam7dz@virginia.edu','tt8740790','Bridgerton was too good. I loved the cast and it was so spicy.',10),('jkl6et@virginia.edu','tt0328738','I couldnt pay attention to Fruits Basket. I didnt really like the female lead.',6),('jkl6et@virginia.edu','tt10479420','La-la-la-la-la XD',8),('jkl6et@virginia.edu','tt11032374','Mugen train movie was really good! It was exactly like the anime though.',9),('jkl6et@virginia.edu','tt11486890','The graphics in Demon Slayer go crazy. The scenes are so artistic as well.',10),('jkl6et@virginia.edu','tt11923304','Tokyo Revengers is a cultural reset.',10),('ktw3bq@virginia.edu','tt0328738','Fruits Basket was my childhood. It made me feel all the emotions.',9),('ktw3bq@virginia.edu','tt0347149','I loved Howls Moving Castle. I still listen to the soundtrack everyday.',10),('ktw3bq@virginia.edu','tt0816397','I liked Ouran High School Host Club because I like tropes where the girl dresses as a guy. The manga was really good as well',10),('ktw3bq@virginia.edu','tt0988824','Naruto >>>. Love all the characters.',10),('ktw3bq@virginia.edu','tt1099212','Twilight was just ehhh. Bella was killing me',6),('lcg4vt@virginia.edu','tt0413573','Grey\'s Anatomy is a fun show to binge in the background. The later seasons weren\'t that good.',8),('lcg4vt@virginia.edu','tt0421482','Winx Club was so much fun to watch when I was younger. The transformations >>>',9),('lcg4vt@virginia.edu','tt10850932','Crash Landing on You was amazing!! It had a mix of all genres.',10),('lcg4vt@virginia.edu','tt4316468','Love Hard is another corny holiday movie but it wasn\'t bad',7),('lcg4vt@virginia.edu','tt4846340','I loved Hidden Figures. It was funny and also enpowering.',10),('up3f@virginia.edu','tt0245429','Spirited Away has the best art.',9),('up3f@virginia.edu','tt0278295','All About the Benjamins had a lot of cursing but was overall a funny movie.',7),('up3f@virginia.edu','tt12451520','It\'s Okay to not be Okay had the perfect cast and soundtrack. I loved it.',10),('up3f@virginia.edu','tt15943826','I loved Love is Blind: Japan. It was a lot better than the US one.',10),('up3f@virginia.edu','tt8740790','Bridgerton has an amazing soundtrack',10);
/*!40000 ALTER TABLE `has_watched` ENABLE KEYS */;
UNLOCK TABLES;

-- ---------------------------------------------------------------------------


