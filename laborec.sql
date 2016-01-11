-- phpMyAdmin SQL Dump
-- version 2.8.2.4
-- http://www.phpmyadmin.net
-- 
-- Host: localhost:3306
-- Generation Time: Jan 11, 2016 at 10:17 PM
-- Server version: 5.0.27
-- PHP Version: 5.0.5
-- 
-- Database: `laborec`
-- 
CREATE DATABASE `laborec` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `laborec`;

-- --------------------------------------------------------

-- 
-- Table structure for table `links`
-- 

CREATE TABLE `links` (
  `linkId` int(11) NOT NULL auto_increment,
  `link` varchar(40) collate utf8_unicode_ci NOT NULL,
  `comment` varchar(2000) collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`linkId`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=17 ;

-- 
-- Dumping data for table `links`
-- 

INSERT INTO `links` (`linkId`, `link`, `comment`) VALUES (1, 'http://strafspul.be', 'Asfalt''s personal webprojectswebsite. Very hot stuff indeed.'),
(2, 'http://www.presstube.com', 'Possibly the best website ever'),
(3, 'http://www.warprecords.com', 'Fabulous records on this label. What are u still doin here?'),
(4, 'http://www.ninjatune.net', 'The homebase of fantastic musicians like Amon Tobin, The Herbalizer, Kid Koala, Jaga Jazzist and much more...'),
(5, 'http://www.planet-mu.com', 'This label has some of the finest jungle breakcore schwanze like remarc, venetian snares and dDamage.'),
(6, 'http://www.freewebs.com/radiopirat/', 'ruff electro dudes from turnhaawt'),
(7, 'http://www.dropdafunk.be', 'Th official homepage of Fonkee Monk and DJ Respect. They like it raw, nasty, fonky, fresh, nice, smooth, hot and wet ...'),
(8, 'http://toffmusic.com', 'This is a local shop from turnhout. You can find all sorts of vinyl there. from jump/hardstyle to techno over house to trance and eclectic...'),
(9, 'http://flexx.be/', 'The great whale mailordersystem. No whales of course, but vinyl. Lots of it.'),
(10, 'http://www.bogdanraczynski.com/', 'This producer just has a new album out and all the tracktitles are called "alright!" and the music is just madly beautifull.'),
(11, 'http://www.rephlex.com', 'These people are the invento of the braindance. Brilliant artists on this label like Darcangelo and Cylob...'),
(12, 'http://www.tuneinturnout.be', 'Tune in Turn Out is a party-organisation who want stimulate nightlife and musicscenes in downtown Turnhout without discrimanation of any music style'),
(14, 'http://www.bpitchcontrol.de/', 'German electronics label hosting artists like the AMF, Thomas Andersson, Ellen Alien and Apparat'),
(15, 'http://www.kitsune.fr', 'Fancy French label that sells Digitalism,  autoKratz and clothes. (that last one isnt a band)'),
(16, 'http://strafspul.be/schuifpuzzel', 'If you got some funny pictures or illustrations and you want to make a sliding puzzle of it with just one mouseclick you should check this out.');

-- --------------------------------------------------------

-- 
-- Table structure for table `news`
-- 

CREATE TABLE `news` (
  `newsId` int(11) NOT NULL auto_increment,
  `title` varchar(100) collate utf8_unicode_ci NOT NULL,
  `author` varchar(30) collate utf8_unicode_ci NOT NULL,
  `body` varchar(2000) collate utf8_unicode_ci NOT NULL,
  `link` varchar(300) collate utf8_unicode_ci NOT NULL,
  `date` varchar(15) collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`newsId`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=20 ;

-- 
-- Dumping data for table `news`
-- 

INSERT INTO `news` (`newsId`, `title`, `author`, `body`, `link`, `date`) VALUES (16, 'New Labo colaborator', 'Asfalt', 'We have a new labo artist who listens to the name Ethan Reisner. He issnt into drum and bass at all. But likes to nod his head to old school housemusic. Check out his track b in the tracks section.', '', '07-06-08'),
(17, 'New Tune: Swarf Smithie Pee Factory', 'Mr Crumbone', 'Finally found some time and the right Poem to finish this tune... Hope you like it. \r\n\r\nNxt Thursday afternoon Mr Crumbone will spin some records @ Cahier de Brouillon, Hoogstraten... Schools out for summer!', 'http://www.cahier.be', '15-06-08'),
(15, 'fonzie @ jh paddestoel ', 'fonz', 'yes people some nice drum and bass is coming out these days and fonzie is gonna play some on the shelternight benefiet in groot bijgaarden on the 10th of may probably from 2h-3h', '', '21-04-08'),
(13, '18.01.2008: Mr Crumbones uitputtingsset ', 'Mr Crumbone', ' Mr Crumbone will be your all nite selector this friday at Cafe Cycloon! So if you are into good music and like to have a drink to start the weekend:  Cafe Cycloon, Otterstraat Turnhout!!', 'http://myspace.com/cafecycloon', '14-01-08'),
(14, 'fonzie @ club 1900', 'asfalt', 'fonzie kicks off the 2nd room of working class night this friday 25th of april in ye olde club 1900 from 22h till 23h so come early and listen to this mans laptop dj-set', 'http://www.workingclassnight.be/', '21-04-08'),
(12, 'Laborecordings v3 launched', 'Asfalt', 'Welcome to the third version of the Laborecordings-website. We made the site easier to update so we can serve you our delicious tunes and crunching beats faster than you can say "Download!". Next to our tracks section, we introduce to you a samples section where you can find material to be used in your drumcomputers and samplers. It just makes it easier to make remixes. For questions, answers, bookings and etc. you may always contact us through the contactpage. Anywayz, enjoy your stayz!!', '', '13-01-08'),
(18, 'New Tunes in the Tracks-section!', 'Mr Crumbone', 'Theres a new beautiful piece by our man Fonz with the illustrious name: Beatepreat\r\n\r\nand then theres a track called: Are n Cee-style, which is a new banger by Lord Crumb\r\n\r\nEnjoy!', 'http://', '19-09-08'),
(19, 'New Asfalt Moskouw download', 'Asfalt', 'Asfalt temporarily renamed to Asfalt Moskouw has a new track in the tracksection called Qubbies Cabin', '', '31-08-09');

-- --------------------------------------------------------

-- 
-- Table structure for table `samples`
-- 

CREATE TABLE `samples` (
  `sampleId` bigint(20) NOT NULL auto_increment,
  `title` varchar(100) character set utf8 collate utf8_unicode_ci NOT NULL,
  `file` varchar(100) character set utf8 collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`sampleId`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

-- 
-- Dumping data for table `samples`
-- 

INSERT INTO `samples` (`sampleId`, `title`, `file`) VALUES (1, 'Asfalt Drumsound Collection', 'asfalt_drumsounds.zip'),
(2, 'Asfalt Drumloop Collection', 'asfalt_drumloops.zip'),
(4, 'Asfalt Melody Collection', 'asfalt_melodies.zip'),
(5, 'The Hunch 4 samples', 'asfalt_theHunch.zip');

-- --------------------------------------------------------

-- 
-- Table structure for table `tracks`
-- 

CREATE TABLE `tracks` (
  `trackId` bigint(20) NOT NULL auto_increment,
  `title` varchar(200) character set utf8 collate utf8_unicode_ci NOT NULL,
  `artist` varchar(200) character set utf8 collate utf8_unicode_ci NOT NULL,
  `file` varchar(200) character set utf8 collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`trackId`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

-- 
-- Dumping data for table `tracks`
-- 

INSERT INTO `tracks` (`trackId`, `title`, `artist`, `file`) VALUES (1, 'Making A Brok', 'Asfalt', 'MakingABrok.mp3'),
(2, 'Moth', 'Asfalt', 'moth.mp3'),
(3, 'My Boss Is A Robot', 'Audio Hazard', 'mybossisarobot.mp3'),
(4, '13 Huricanes Coming', 'Soma Society', '13huricanescoming.mp3'),
(5, 'Aliens are for UFOs', 'sssonarrr', 'aliensareforUFOs.mp3'),
(7, 'The room', 'sssonarrr', 'sssonarrr-theroom.mp3'),
(8, 'simbadbiet', 'Mr Crumbone', 'simbadbiemix2.mp3'),
(9, 'hyperbass ', 'sssonarrr', 'sssonarrr-hypnobass(dubstep).mp3'),
(10, 'The Hunch', 'Asfalt', 'theHunch.mp3'),
(11, 'b', 'Ethan Reisner', 'b.mp3'),
(13, 'Swarf Smithie Pee Factory', 'Mr Crumbone', 'SwarfSmithiePeeFactory.mp3'),
(14, 'beatepreat', 'fonz', 'beatepreat.mp3'),
(15, 'Are N Cee-style', 'Lord Crumb', 'hopndrum.mp3'),
(16, 'Wolkmailbox', 'Asfalt', 'wolkmailbox.mp3'),
(17, 'Nebula', 'vaimler', 'vaimler-Nebula_final.mp3'),
(18, 'Qubbies Cabin', 'Asfalt Moskouw', 'qubbies_cabin_-_asfalt_moskouw.mp3');
