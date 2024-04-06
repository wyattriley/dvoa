DROP TABLE IF EXISTS `crs`;
CREATE TABLE `crs` (
  `crs_id` int(11) NOT NULL auto_increment,
  `abbr` varchar(8) NOT NULL default '',
  `course` varchar(32) NOT NULL default '',
  `bgcolor` varchar(32) NOT NULL default 'white',
  `fgcolor` varchar(32) NOT NULL default 'black',
  PRIMARY KEY  (`crs_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Course List';

--
-- Dumping data for table `addrs`
--


/*!40000 ALTER TABLE `addrs` DISABLE KEYS */;
LOCK TABLES `crs` WRITE;
INSERT INTO `crs` VALUES (1,'W','White','#ffffff','black');
INSERT INTO `crs` VALUES (2,'Y','Yellow','#ffff00','black');
INSERT INTO `crs` VALUES (3,'O','Orange','#ff8000','black');
INSERT INTO `crs` VALUES (4,'Bn','Brown','brown','black');
INSERT INTO `crs` VALUES (5,'G','Green','#00ff00','black');
INSERT INTO `crs` VALUES (6,'R','Red','#ff0000','black');
INSERT INTO `crs` VALUES (7,'Bl','Blue','#0000ff','white');
INSERT INTO `crs` VALUES (8,'Sprint','Sprint-O','purple','white');
INSERT INTO `crs` VALUES (9,'Score','Score-O','teal','white');
INSERT INTO `crs` VALUES (10,'Trail','Trail-O','#ffffff','black');
INSERT INTO `crs` VALUES (11,'Spec','Special','#e8e8e8','black');
INSERT INTO `crs` VALUES (12,'Canoe','Canoe-O','#e8e8e8','black');
INSERT INTO `crs` VALUES (13,'Night','Night-O','#e8e8e8','black');
INSERT INTO `crs` VALUES (14,'Beginner','Beginner','#e8e8e8','black');
INSERT INTO `crs` VALUES (15,'Int','Intermediate','#e8e8e8','black');
INSERT INTO `crs` VALUES (16,'Adv','Advanced','#e8e8e8','black');
INSERT INTO `crs` VALUES (17,'Rogaine','Rogaine','#e8e8e8','black');
INSERT INTO `crs` VALUES (18,'Relay','Relay','#e8e8e8','black');
INSERT INTO `crs` VALUES (19,'Instruction','Instructional','#e8e8e8','black');
INSERT INTO `crs` VALUES (20,'Train','Training','#e8e8e8','black');

UNLOCK TABLES;
/*!40000 ALTER TABLE `crs` ENABLE KEYS */;


/*
DROP TABLE IF EXISTS `sked_crs_xref`;
CREATE TABLE `sked_crs_xref` (
  `id` int(11) NOT NULL auto_increment,
  `sked_id` int(11) default 0,
  `crs_id` int(11) default 0,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Schedule Course Cross Reference';

*/