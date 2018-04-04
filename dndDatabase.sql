-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: dndchar
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.29-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `abilityscore`
--

DROP TABLE IF EXISTS `abilityscore`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `abilityscore` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) COLLATE utf8_croatian_ci NOT NULL,
  `score` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `abilityscore`
--

LOCK TABLES `abilityscore` WRITE;
/*!40000 ALTER TABLE `abilityscore` DISABLE KEYS */;
INSERT INTO `abilityscore` VALUES (1,'Strenght',0),(2,'Dexterity',0),(3,'Constitution',0),(4,'Intelligence',0),(5,'Wisdom',0),(6,'Charisma',0);
/*!40000 ALTER TABLE `abilityscore` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `alingment`
--

DROP TABLE IF EXISTS `alingment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `alingment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) COLLATE utf8_croatian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `alingment`
--

LOCK TABLES `alingment` WRITE;
/*!40000 ALTER TABLE `alingment` DISABLE KEYS */;
INSERT INTO `alingment` VALUES (1,'Lawful Good'),(2,'Lawful Neutral'),(3,'Lawful Evil'),(4,'Neutral Good'),(5,'True Neutral'),(6,'Neutral Evil'),(7,'Chaotic Good'),(8,'Chaotic Neutral'),(9,'Chaotic Evil');
/*!40000 ALTER TABLE `alingment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `background`
--

DROP TABLE IF EXISTS `background`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `background` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) COLLATE utf8_croatian_ci NOT NULL,
  `skill` varchar(250) COLLATE utf8_croatian_ci NOT NULL,
  `tool` varchar(250) COLLATE utf8_croatian_ci DEFAULT NULL,
  `language` varchar(250) COLLATE utf8_croatian_ci DEFAULT NULL,
  `equipment` varchar(250) COLLATE utf8_croatian_ci NOT NULL,
  `feature` varchar(250) COLLATE utf8_croatian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `background`
--

LOCK TABLES `background` WRITE;
/*!40000 ALTER TABLE `background` DISABLE KEYS */;
INSERT INTO `background` VALUES (1,'Acolyte','Insight, Religion','','Two of your choice','A holy symbol (a gift to you when you entered the priesthood), a prayer book or prayer wheel,\n5 sticks of incense, vestments, a set of common clothes, and a belt pouch containing 15 gp','Shelter of the Faithful'),(2,'Charlatan','Deception, Slight of Hand','Disguise kit, Forgery kit','','A set of fine clothes, a disguise kit, tools of the con of your choice (ten stoppered bottles filled with colored liquid,\na set of weighted dice, a deck of marked cards, or a signet ring of an imaginary duke), and a belt pouch containing 15 gp','False Identity'),(3,'Criminal','Deception, Stealht','One type of gaming set, Thieves tools','','A crowbar, a set of dark common clothes including a hood, and a belt pouch containing 15 gp','Criminal Contact'),(4,'Entertainer','Acrobatics, Performance','Disguise kit, One type of Musical Instrument','','A musical instrument (one of your choice), the favor of an admirer (love letter, lock of hair, or trinket), a costume,\nand a belt pouch containing 15 gp','By Popular Demand'),(5,'Folk Hero','Animal Handling, Survival','One type of artisans tools, vehicles (land)','','A set of artisans tools (one of your choice), a shovel, an iron pot, a set of common clothes, and a belt pouch containing 10 gp','Rustic Hospitality'),(6,'Guild Artisan','Insigt, Persuasion','One type of artisans tools','One of your choice','A set of artisans tools (one of your choice), a letter of introduction from your guild, a set of travelers clothes, and a belt pouch\ncontaining 15 gp','Guild Membership'),(7,'Hermit','Medicine, Religion','Herbalism kit','One of your choice','A scroll case stuffed full of notes from your\nstudies or prayers, a winter blanket, a set of common clothes, an herbalism kit, and 5 gp','Discovery'),(8,'Noble','History, Persuasion','One type of gaming set','One of your choice','A set of fine clothes, a signet ring, a scroll\nof pedigree, and a purse containing 25 gp','Position of Privilege'),(9,'Outlander','Athletics, Survival','One type of Musical Instrument','One of your choice','A staff, a hunting trap, a trophy from an\nanimal you killed, a set of travelers clothes, and a belt pouch containing 10 gp','Wanderer'),(10,'Sage','Arcana, History','','Two of your choice','A bottle of black ink, a quill, a small knife, a letter from a dead colleague\nposing a question you have not yet been able to answer, a set of common clothes, and a belt pouch containing 10 gp','Resarcher'),(11,'Sailor','Athletics, Perception','Navigators tools, vehicles (water)','','A belaying pin (club), 50 feet of silk rope,\na lucky charm such as a rabbit foot or a small stone with a hole in the center (or you may roll for a random trinket on the Trinkets table\nin chapter 5), a set of common clothes, and a belt pouch containin','Ships Passage'),(12,'Soldier','Athletics, Intimidation','One type of gaming set, vehicles (land)','','An insignia of rank, a trophy taken from\na fallen enemy (a dagger, broken blade, or piece of a banner), a set of bone dice or deck of cards, a set of common clothes,\nand a belt pouch containing 10 gp','Military Rank'),(13,'Urchin','Sleight of Hand, Stealth','Disguise kit, Thieves tools','','A small knife, a map of the city you grew up in,\na pet mouse, a token to remember your parents by, a set of common clothes, and a belt pouch containing 10 gp','City Secrets');
/*!40000 ALTER TABLE `background` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `characterdnd`
--

DROP TABLE IF EXISTS `characterdnd`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `characterdnd` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) COLLATE utf8_croatian_ci DEFAULT NULL,
  `subrace` int(11) NOT NULL,
  `class` int(11) NOT NULL,
  `background` int(11) NOT NULL,
  `alingment` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `strenghtScore` int(2) NOT NULL,
  `strenghtMod` int(2) NOT NULL,
  `dexterityScore` int(2) NOT NULL,
  `dexterityMod` int(2) NOT NULL,
  `constitutionScore` int(2) NOT NULL,
  `constitutionMod` int(2) NOT NULL,
  `intelligenceScore` int(2) NOT NULL,
  `intelligenceMod` int(2) NOT NULL,
  `wisdomScore` int(2) NOT NULL,
  `wisdomMod` int(2) NOT NULL,
  `charismaScore` int(2) NOT NULL,
  `charismaMod` int(2) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `alingment` (`alingment`),
  KEY `subrace` (`subrace`),
  KEY `background` (`background`),
  KEY `user` (`user`),
  KEY `class` (`class`),
  CONSTRAINT `characterdnd_ibfk_1` FOREIGN KEY (`alingment`) REFERENCES `alingment` (`id`),
  CONSTRAINT `characterdnd_ibfk_2` FOREIGN KEY (`subrace`) REFERENCES `subrace` (`id`),
  CONSTRAINT `characterdnd_ibfk_3` FOREIGN KEY (`background`) REFERENCES `background` (`id`),
  CONSTRAINT `characterdnd_ibfk_4` FOREIGN KEY (`user`) REFERENCES `user` (`id`),
  CONSTRAINT `characterdnd_ibfk_5` FOREIGN KEY (`class`) REFERENCES `class` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `characterdnd`
--

LOCK TABLES `characterdnd` WRITE;
/*!40000 ALTER TABLE `characterdnd` DISABLE KEYS */;
INSERT INTO `characterdnd` VALUES (1,'Grayhawk',6,3,2,5,22440,10,0,12,1,10,0,10,0,10,0,11,0),(2,'Grayhawk',6,1,12,4,22440,14,2,17,3,8,-1,6,-2,20,5,27,8),(3,'Grayhawk',6,1,12,4,22440,14,2,17,3,8,-1,6,-2,20,5,27,8),(4,'Grayhawk',7,2,2,5,22440,14,2,7,-2,5,-3,10,0,20,5,22,6),(5,'Grayhawk',7,12,3,4,22440,12,1,14,2,15,2,15,2,22,6,4,-3);
/*!40000 ALTER TABLE `characterdnd` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `characterskills`
--

DROP TABLE IF EXISTS `characterskills`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `characterskills` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `characterdnd` int(11) NOT NULL,
  `Acrobatics` tinyint(1) DEFAULT NULL,
  `AnimalHandling` tinyint(1) DEFAULT NULL,
  `Arcana` tinyint(1) DEFAULT NULL,
  `Athletics` tinyint(1) DEFAULT NULL,
  `Deception` tinyint(1) DEFAULT NULL,
  `History` tinyint(1) DEFAULT NULL,
  `Insight` tinyint(1) DEFAULT NULL,
  `Intimidation` tinyint(1) DEFAULT NULL,
  `Investigation` tinyint(1) DEFAULT NULL,
  `Medicine` tinyint(1) DEFAULT NULL,
  `Nature` tinyint(1) DEFAULT NULL,
  `Perception` tinyint(1) DEFAULT NULL,
  `Performance` tinyint(1) DEFAULT NULL,
  `Persuasion` tinyint(1) DEFAULT NULL,
  `Religion` tinyint(1) DEFAULT NULL,
  `SleightOfHand` tinyint(1) DEFAULT NULL,
  `Stealth` tinyint(1) DEFAULT NULL,
  `Survival` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `characterdnd` (`characterdnd`),
  CONSTRAINT `characterskills_ibfk_1` FOREIGN KEY (`characterdnd`) REFERENCES `characterdnd` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `characterskills`
--

LOCK TABLES `characterskills` WRITE;
/*!40000 ALTER TABLE `characterskills` DISABLE KEYS */;
INSERT INTO `characterskills` VALUES (1,1,1,1,1,1,1,0,0,0,0,0,0,0,0,0,0,1,0,0),(2,2,0,0,0,1,1,0,0,1,0,0,0,0,0,0,1,0,0,1),(3,3,0,0,0,1,1,0,0,1,0,0,0,0,0,0,1,0,0,1),(4,4,1,1,1,1,1,1,1,1,1,0,0,0,0,0,0,0,0,0),(5,5,0,1,0,0,1,1,0,1,0,0,1,0,0,1,1,0,1,1);
/*!40000 ALTER TABLE `characterskills` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `class`
--

DROP TABLE IF EXISTS `class`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `class` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) COLLATE utf8_croatian_ci NOT NULL,
  `hitdice` varchar(250) COLLATE utf8_croatian_ci NOT NULL,
  `hp1st` varchar(250) COLLATE utf8_croatian_ci NOT NULL,
  `hplater` varchar(250) COLLATE utf8_croatian_ci NOT NULL,
  `feature` varchar(50) COLLATE utf8_croatian_ci DEFAULT NULL,
  `savingthrow` varchar(250) COLLATE utf8_croatian_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `class`
--

LOCK TABLES `class` WRITE;
/*!40000 ALTER TABLE `class` DISABLE KEYS */;
INSERT INTO `class` VALUES (1,'Barbarian','d12','12','1d12(or 7)+Constitution modifier','Rage, Unarmored Defense',NULL),(2,'Bard','d8','8','1d8(or 5)+Constitution modifier','Spellcasting, Bardic Inspiration',NULL),(3,'Cleric','d8','8','1d8(or 5)+Constitution modifier','Spellcasting, Divine Domain',NULL),(4,'Druid','d8','8','1d8(or 5)+Constitution modifier','Druidic, Spellcasting',NULL),(5,'Fighter','d10','10','1d10(or 6)+Constitution modifier','Fighting Style, Second Wind',NULL),(6,'Monk','d8','8','1d8(od 5)+Constitution modifier','Unarmored Defense, Martial Arts',NULL),(7,'Paladin','d10','10','1d10(or 6)+Constitution modifier','Divine Sense, Lay On Hands',NULL),(8,'Ranger','d10','10','1d10(or 6)+Constitution modifier','Favored Enemy, Natural Explorer',NULL),(9,'Rogue','d8','8','1d8(or 5)+Constitution modifier','Expertise, Sneak Attack, Thieves Cant',NULL),(10,'Sorcerer','d6','6','1d6(or 4)+Constitution modifier','Spellcasting, Sorcerous Origin',NULL),(11,'Warlock','d8','8','1d8(or 5)+Constitution modifier','Otherworldly Patron, Pact Magic',NULL),(12,'Wizard','d6','6','1d6(or 4)+Constitution modifier','Spellcasting, Arcane Recovery',NULL);
/*!40000 ALTER TABLE `class` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `proficiency`
--

DROP TABLE IF EXISTS `proficiency`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `proficiency` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `class` int(11) NOT NULL,
  `armor` varchar(250) COLLATE utf8_croatian_ci DEFAULT NULL,
  `weapon` varchar(250) COLLATE utf8_croatian_ci NOT NULL,
  `tool` varchar(250) COLLATE utf8_croatian_ci DEFAULT NULL,
  `skill` varchar(250) COLLATE utf8_croatian_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `class` (`class`),
  CONSTRAINT `proficiency_ibfk_1` FOREIGN KEY (`class`) REFERENCES `class` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `proficiency`
--

LOCK TABLES `proficiency` WRITE;
/*!40000 ALTER TABLE `proficiency` DISABLE KEYS */;
INSERT INTO `proficiency` VALUES (1,1,'Light armor, Medium armor, Shields','Simple weapons, Martial weapons','','Choose two from Animal Handling, Athletics, Intimidation, Nature, Perception and Survival'),(2,2,'Light armor','Simple weapons, Hand crossbows, Longswords, Rapiers, Shortswords','Three musical instruments of your choice','Choose any three'),(3,3,'Light armor, Medium armor, Shields','All simple weapons','','Choose two from History, Insight, Medicine, Persuasion and Religion'),(4,4,'Light armor, Medium armor, Shields (Druids will not wear armor or use shields made of metal)','Clubs, Daggers, Darts, Javelins, Maces, Quarterstaffs, Scimitars, Sickles, Slings, Spears','Herbalism kit','Choose two from Arcana, Animal Handling, Insight, Medicine, Nature, Perception, Religion and Survival'),(5,5,'All armor, Shields','Simple weapons, Martial weapons','','Choose two skills from Acrobatics, Animal Handling, Athletics, History, Insight, Intimidation, Perception and Survival'),(6,6,'None','Simple weapons, Shortswords','Choose one type of artisans tools or one musical instrument','Choose two from Acrobatics, Athletics, History, Insight, Religion and Stealth'),(7,7,'All armor, Shields','Simple weapons, Martial weapons','','Choose two from Athletics, Insight, Intimidation, Medicine, Persuasion and Religion'),(8,8,'Light armor, Medium armor, Shields','Simple weapons, Marital weapons','','Choose three from Animal Handling, Athletics, Insight, Investigation, Nature, Perception, Stealth and Survival'),(9,9,'Light armor','Simple weapons, Hand crossbows, Longswords, Rapiers, Shortswords','Thieves tools','Choose four from Acrobatics, Athletics, Deception, Insight, Intimidation, Investigation, Perception, Performance, Persuasion, Sleight of Hand and Stealth'),(10,10,'None','Daggers, Darts, Slings, Quarterstaffs, Light crossbows','','Choose two from Arcana, Deception, Insight, Intimidation, Persuasion and Religion'),(11,11,'Light armor','Simple weapons','','Choose two skills from Arcana, Deception, History, Intimidation, Investigation, Nature and Religion'),(12,12,'None','Daggers, Darts, Slings, Quarterstaffs, Light crossbows','','Choose two from Arcana, History, Insight, Investigation, Medicine and Religion');
/*!40000 ALTER TABLE `proficiency` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `race`
--

DROP TABLE IF EXISTS `race`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `race` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) COLLATE utf8_croatian_ci NOT NULL,
  `strenght` int(11) NOT NULL,
  `dexterity` int(11) NOT NULL,
  `constitution` int(11) NOT NULL,
  `intelligence` int(11) NOT NULL,
  `wisdom` int(11) NOT NULL,
  `charisma` int(11) NOT NULL,
  `age` varchar(250) COLLATE utf8_croatian_ci DEFAULT NULL,
  `height` varchar(250) COLLATE utf8_croatian_ci DEFAULT NULL,
  `weight` varchar(250) COLLATE utf8_croatian_ci DEFAULT NULL,
  `size` varchar(250) COLLATE utf8_croatian_ci NOT NULL,
  `speed` int(11) NOT NULL,
  `language` varchar(250) COLLATE utf8_croatian_ci NOT NULL,
  `trait` varchar(250) COLLATE utf8_croatian_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `race`
--

LOCK TABLES `race` WRITE;
/*!40000 ALTER TABLE `race` DISABLE KEYS */;
INSERT INTO `race` VALUES (1,'Dwarf',0,0,2,0,0,0,'50-350','4-5 ft','150 lb','Medium',25,'Common, Dwarvish','Darkvision, Dwarven Resilience, Dwarven Combat Training, Tool Proficiency, Stonecunning'),(2,'Elf',0,2,0,0,0,0,'100-750','5-6 ft','slender','Medium',30,'Common, Elvish','Darkvision, Keen Senses, Fey Ancestry, Trance'),(3,'Halfling',0,2,0,0,0,0,'20-150','3 ft','40 lb','Small',25,'Common, Halfling','Lucky, Brave, Halfling Nimbleness'),(4,'Human',1,1,1,1,1,1,'18-100','5-6 ft','vary','Medium',30,'Common, One extra language',NULL),(5,'Dragonborn',2,0,0,0,0,1,'15-80','6-7 ft','250 lb','Medium',30,'Common, Draconic','Draconic Ancestry, Breath Weapon, Damage Resistance'),(6,'Gnome',0,0,0,2,0,0,'40-450','3-4 ft','40 lb','Small',25,'Common, Gnomish','Gnome Cunning'),(7,'Half-Elf',0,0,0,0,0,2,'20-180','5-6 ft','vary','Medium',30,'Common, Elvish, One extra language','Darkvision, Fey Ancestry, Skill Versatility'),(8,'Half-Orc',2,1,0,0,0,0,'14-75','5-7 ft','heavy','Medium',30,'Common, Orc','Darkvision, Menacing, Relentless Endurance, Savage Attacks'),(9,'Tiefling',0,0,0,1,0,2,'20-110','5-6 ft','vary','Medium',30,'Common, Infernal','Darkvision, Hellish Resistance, Infernal Legacy');
/*!40000 ALTER TABLE `race` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `savingthrow`
--

DROP TABLE IF EXISTS `savingthrow`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `savingthrow` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `class` int(11) NOT NULL,
  `Strenght` tinyint(1) DEFAULT NULL,
  `Dexterity` tinyint(1) DEFAULT NULL,
  `Constitution` tinyint(1) DEFAULT NULL,
  `Intelligence` tinyint(1) DEFAULT NULL,
  `Wisdom` tinyint(1) DEFAULT NULL,
  `Charisma` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `class` (`class`),
  CONSTRAINT `savingthrow_ibfk_1` FOREIGN KEY (`class`) REFERENCES `class` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `savingthrow`
--

LOCK TABLES `savingthrow` WRITE;
/*!40000 ALTER TABLE `savingthrow` DISABLE KEYS */;
INSERT INTO `savingthrow` VALUES (1,1,1,0,1,0,0,0),(2,2,0,1,0,0,0,1),(3,3,0,0,0,0,1,1),(4,4,0,0,0,1,1,0),(5,5,1,0,1,0,0,0),(6,6,1,1,0,0,0,0),(7,7,0,0,0,0,1,1),(8,8,1,1,0,0,0,0),(9,9,0,1,0,1,0,0),(10,10,0,0,1,0,0,1),(11,11,0,0,0,0,1,1),(12,12,0,0,0,1,1,0);
/*!40000 ALTER TABLE `savingthrow` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `skill`
--

DROP TABLE IF EXISTS `skill`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `skill` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `background` int(11) NOT NULL,
  `name` varchar(250) COLLATE utf8_croatian_ci NOT NULL,
  `checkbox` tinyint(1) NOT NULL,
  `modifier` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `background` (`background`),
  CONSTRAINT `skill_ibfk_1` FOREIGN KEY (`background`) REFERENCES `background` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=235 DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `skill`
--

LOCK TABLES `skill` WRITE;
/*!40000 ALTER TABLE `skill` DISABLE KEYS */;
INSERT INTO `skill` VALUES (1,1,'Acrobatics',0,NULL),(2,1,'Animal Handling',0,NULL),(3,1,'Arcana',0,NULL),(4,1,'Athletics',0,NULL),(5,1,'Deception',0,NULL),(6,1,'History',0,NULL),(7,1,'Insight',1,NULL),(8,1,'Intimidation',0,NULL),(9,1,'Investigation',0,NULL),(10,1,'Medicine',0,NULL),(11,1,'Nature',0,NULL),(12,1,'Perception',0,NULL),(13,1,'Performance',0,NULL),(14,1,'Persuasion',0,NULL),(15,1,'Religion',1,NULL),(16,1,'Sleight Of Hand',0,NULL),(17,1,'Stealth',0,NULL),(18,1,'Survival',0,NULL),(19,2,'Acrobatics',0,NULL),(20,2,'Animal Handling',0,NULL),(21,2,'Arcana',0,NULL),(22,2,'Athletics',0,NULL),(23,2,'Deception',1,NULL),(24,2,'History',0,NULL),(25,2,'Insight',0,NULL),(26,2,'Intimidation',0,NULL),(27,2,'Investigation',0,NULL),(28,2,'Medicine',0,NULL),(29,2,'Nature',0,NULL),(30,2,'Perception',0,NULL),(31,2,'Performance',0,NULL),(32,2,'Persuasion',0,NULL),(33,2,'Religion',0,NULL),(34,2,'Sleight Of Hand',1,NULL),(35,2,'Stealth',0,NULL),(36,2,'Survival',0,NULL),(37,3,'Acrobatics',0,NULL),(38,3,'Animal Handling',0,NULL),(39,3,'Arcana',0,NULL),(40,3,'Athletics',0,NULL),(41,3,'Deception',1,NULL),(42,3,'History',0,NULL),(43,3,'Insight',0,NULL),(44,3,'Intimidation',0,NULL),(45,3,'Investigation',0,NULL),(46,3,'Medicine',0,NULL),(47,3,'Nature',0,NULL),(48,3,'Perception',0,NULL),(49,3,'Performance',0,NULL),(50,3,'Persuasion',0,NULL),(51,3,'Religion',0,NULL),(52,3,'Sleight Of Hand',0,NULL),(53,3,'Stealth',1,NULL),(54,3,'Survival',0,NULL),(55,4,'Acrobatics',1,NULL),(56,4,'Animal Handling',0,NULL),(57,4,'Arcana',0,NULL),(58,4,'Athletics',0,NULL),(59,4,'Deception',0,NULL),(60,4,'History',0,NULL),(61,4,'Insight',0,NULL),(62,4,'Intimidation',0,NULL),(63,4,'Investigation',0,NULL),(64,4,'Medicine',0,NULL),(65,4,'Nature',0,NULL),(66,4,'Perception',0,NULL),(67,4,'Performance',1,NULL),(68,4,'Persuasion',0,NULL),(69,4,'Religion',0,NULL),(70,4,'Sleight Of Hand',0,NULL),(71,4,'Stealth',0,NULL),(72,4,'Survival',0,NULL),(73,5,'Acrobatics',0,NULL),(74,5,'Animal Handling',1,NULL),(75,5,'Arcana',0,NULL),(76,5,'Athletics',0,NULL),(77,5,'Deception',0,NULL),(78,5,'History',0,NULL),(79,5,'Insight',0,NULL),(80,5,'Intimidation',0,NULL),(81,5,'Investigation',0,NULL),(82,5,'Medicine',0,NULL),(83,5,'Nature',0,NULL),(84,5,'Perception',0,NULL),(85,5,'Performance',0,NULL),(86,5,'Persuasion',0,NULL),(87,5,'Religion',0,NULL),(88,5,'Sleight Of Hand',0,NULL),(89,5,'Stealth',0,NULL),(90,5,'Survival',1,NULL),(91,6,'Acrobatics',0,NULL),(92,6,'Animal Handling',0,NULL),(93,6,'Arcana',0,NULL),(94,6,'Athletics',0,NULL),(95,6,'Deception',0,NULL),(96,6,'History',0,NULL),(97,6,'Insight',1,NULL),(98,6,'Intimidation',0,NULL),(99,6,'Investigation',0,NULL),(100,6,'Medicine',0,NULL),(101,6,'Nature',0,NULL),(102,6,'Perception',0,NULL),(103,6,'Performance',0,NULL),(104,6,'Persuasion',1,NULL),(105,6,'Religion',0,NULL),(106,6,'Sleight Of Hand',0,NULL),(107,6,'Stealth',0,NULL),(108,6,'Survival',0,NULL),(109,7,'Acrobatics',0,NULL),(110,7,'Animal Handling',0,NULL),(111,7,'Arcana',0,NULL),(112,7,'Athletics',0,NULL),(113,7,'Deception',0,NULL),(114,7,'History',0,NULL),(115,7,'Insight',0,NULL),(116,7,'Intimidation',0,NULL),(117,7,'Investigation',0,NULL),(118,7,'Medicine',1,NULL),(119,7,'Nature',0,NULL),(120,7,'Perception',0,NULL),(121,7,'Performance',0,NULL),(122,7,'Persuasion',0,NULL),(123,7,'Religion',1,NULL),(124,7,'Sleight Of Hand',0,NULL),(125,7,'Stealth',0,NULL),(126,7,'Survival',0,NULL),(127,8,'Acrobatics',0,NULL),(128,8,'Animal Handling',0,NULL),(129,8,'Arcana',0,NULL),(130,8,'Athletics',0,NULL),(131,8,'Deception',0,NULL),(132,8,'History',1,NULL),(133,8,'Insight',0,NULL),(134,8,'Intimidation',0,NULL),(135,8,'Investigation',0,NULL),(136,8,'Medicine',0,NULL),(137,8,'Nature',0,NULL),(138,8,'Perception',0,NULL),(139,8,'Performance',0,NULL),(140,8,'Persuasion',1,NULL),(141,8,'Religion',0,NULL),(142,8,'Sleight Of Hand',0,NULL),(143,8,'Stealth',0,NULL),(144,8,'Survival',0,NULL),(145,9,'Acrobatics',0,NULL),(146,9,'Animal Handling',0,NULL),(147,9,'Arcana',0,NULL),(148,9,'Athletics',1,NULL),(149,9,'Deception',0,NULL),(150,9,'History',0,NULL),(151,9,'Insight',0,NULL),(152,9,'Intimidation',0,NULL),(153,9,'Investigation',0,NULL),(154,9,'Medicine',0,NULL),(155,9,'Nature',0,NULL),(156,9,'Perception',0,NULL),(157,9,'Performance',0,NULL),(158,9,'Persuasion',0,NULL),(159,9,'Religion',0,NULL),(160,9,'Sleight Of Hand',0,NULL),(161,9,'Stealth',0,NULL),(162,9,'Survival',1,NULL),(163,10,'Acrobatics',0,NULL),(164,10,'Animal Handling',0,NULL),(165,10,'Arcana',1,NULL),(166,10,'Athletics',0,NULL),(167,10,'Deception',0,NULL),(168,10,'History',1,NULL),(169,10,'Insight',0,NULL),(170,10,'Intimidation',0,NULL),(171,10,'Investigation',0,NULL),(172,10,'Medicine',0,NULL),(173,10,'Nature',0,NULL),(174,10,'Perception',0,NULL),(175,10,'Performance',0,NULL),(176,10,'Persuasion',0,NULL),(177,10,'Religion',0,NULL),(178,10,'Sleight Of Hand',0,NULL),(179,10,'Stealth',0,NULL),(180,10,'Survival',0,NULL),(181,11,'Acrobatics',0,NULL),(182,11,'Animal Handling',0,NULL),(183,11,'Arcana',0,NULL),(184,11,'Athletics',1,NULL),(185,11,'Deception',0,NULL),(186,11,'History',0,NULL),(187,11,'Insight',0,NULL),(188,11,'Intimidation',0,NULL),(189,11,'Investigation',0,NULL),(190,11,'Medicine',0,NULL),(191,11,'Nature',0,NULL),(192,11,'Perception',1,NULL),(193,11,'Performance',0,NULL),(194,11,'Persuasion',0,NULL),(195,11,'Religion',0,NULL),(196,11,'Sleight Of Hand',0,NULL),(197,11,'Stealth',0,NULL),(198,11,'Survival',0,NULL),(199,12,'Acrobatics',0,NULL),(200,12,'Animal Handling',0,NULL),(201,12,'Arcana',0,NULL),(202,12,'Athletics',1,NULL),(203,12,'Deception',0,NULL),(204,12,'History',0,NULL),(205,12,'Insight',0,NULL),(206,12,'Intimidation',1,NULL),(207,12,'Investigation',0,NULL),(208,12,'Medicine',0,NULL),(209,12,'Nature',0,NULL),(210,12,'Perception',0,NULL),(211,12,'Performance',0,NULL),(212,12,'Persuasion',0,NULL),(213,12,'Religion',0,NULL),(214,12,'Sleight Of Hand',0,NULL),(215,12,'Stealth',0,NULL),(216,12,'Survival',0,NULL),(217,13,'Acrobatics',0,NULL),(218,13,'Animal Handling',0,NULL),(219,13,'Arcana',0,NULL),(220,13,'Athletics',0,NULL),(221,13,'Deception',0,NULL),(222,13,'History',0,NULL),(223,13,'Insight',0,NULL),(224,13,'Intimidation',0,NULL),(225,13,'Investigation',0,NULL),(226,13,'Medicine',0,NULL),(227,13,'Nature',0,NULL),(228,13,'Perception',0,NULL),(229,13,'Performance',0,NULL),(230,13,'Persuasion',0,NULL),(231,13,'Religion',0,NULL),(232,13,'Sleight Of Hand',1,NULL),(233,13,'Stealth',1,NULL),(234,13,'Survival',0,NULL);
/*!40000 ALTER TABLE `skill` ENABLE KEYS */;
UNLOCK TABLES;



--
-- Table structure for table `subrace`
--

DROP TABLE IF EXISTS `subrace`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `subrace` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `race` int(11) NOT NULL,
  `name` varchar(250) COLLATE utf8_croatian_ci NOT NULL,
  `strenght` int(11) NOT NULL,
  `dexterity` int(11) NOT NULL,
  `constitution` int(11) NOT NULL,
  `intelligence` int(11) NOT NULL,
  `wisdom` int(11) NOT NULL,
  `charisma` int(11) NOT NULL,
  `abilityscoreBonus` int(11) NOT NULL,
  `trait` varchar(250) COLLATE utf8_croatian_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `race` (`race`),
  CONSTRAINT `subrace_ibfk_1` FOREIGN KEY (`race`) REFERENCES `race` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subrace`
--

LOCK TABLES `subrace` WRITE;
/*!40000 ALTER TABLE `subrace` DISABLE KEYS */;
INSERT INTO `subrace` VALUES (1,1,'Dwarf - Hill',0,0,0,0,1,0,0,'Dwarven Toughness'),(2,1,'Dwarf - Mountain',2,0,0,0,0,0,0,'Dwarven Armor Training'),(3,2,'Elf - High',0,0,0,1,0,0,0,'Elf Weapon Training, Cantrip, Extra Language'),(4,2,'Elf - Wood',0,0,0,0,1,0,0,'Elf Weapon Training, Fleet of Foot, Mask of the Wild'),(5,2,'Elf - Dark (Drow)',0,0,0,0,0,1,0,'Superior Darkvision, Sunlight Sensitivity, Drow Magic, Drow Weapon Training'),(6,3,'Halfling - Lightfoot',0,0,0,0,0,1,0,'Naturally Stealthy'),(7,3,'Halfling - Stout',0,0,1,0,0,0,0,'Stout Resilience'),(8,4,'Human',0,0,0,0,0,0,0,''),(9,5,'Dragonborn',0,0,0,0,0,0,0,''),(10,6,'Gnome - Forest',0,1,0,0,0,0,0,'Natural Illusionist, Speak with Small Beasts'),(11,6,'Gnome - Rock',0,0,1,0,0,0,0,'Artificers Lore, Tinker'),(12,7,'Half-Elf',0,0,0,0,0,0,0,''),(13,8,'Half-Orc',0,0,0,0,0,0,0,''),(14,9,'Tiefling',0,0,0,0,0,0,0,'');
/*!40000 ALTER TABLE `subrace` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(250) COLLATE utf8_croatian_ci NOT NULL,
  `lastName` varchar(250) COLLATE utf8_croatian_ci NOT NULL,
  `username` char(50) COLLATE utf8_croatian_ci NOT NULL,
  `password` varchar(250) COLLATE utf8_croatian_ci NOT NULL,
  `email` varchar(250) COLLATE utf8_croatian_ci NOT NULL,
  `level` varchar(250) COLLATE utf8_croatian_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `username_2` (`username`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22447 DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (22440,'Chris','Župan','admin','21232f297a57a5a743894a0e4a801fc3','zupan.chris@gmail.com','admin'),(22442,'Edunova','Edunova','edunova','6f8ef6387e6e143a3c0b0023b2710754','edunova@edunova.hr','free'),(22443,'avo','avas','avo11','56016d6690b312315f85041c3957bb60','avo@mail.hr','free'),(22444,'mario','prezime','mario','de2f15d014d40b93578d255e6221fd60','mario@edunova.hr','free'),(22445,'ivo','maric','ivomaric','0a5641105900e15b60e8c23c001a678d','ivo@edunova.hr','free'),(22446,'ae','ae','aer','d194f6194fc458544482bbb8f0b74c6b','ae@ada','free');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-03-24  5:11:05
