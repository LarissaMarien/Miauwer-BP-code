-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Gegenereerd op: 29 mei 2020 om 10:14
-- Serverversie: 10.4.6-MariaDB
-- PHP-versie: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `miauwerdb`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `gebruiker`
--

CREATE TABLE `gebruiker` (
  `id` int(11) NOT NULL,
  `voornaam` text DEFAULT NULL,
  `naam` text DEFAULT NULL,
  `geboortedatum` date DEFAULT NULL,
  `beroep` text DEFAULT NULL,
  `gezinsleden` text DEFAULT NULL,
  `kinderen` text DEFAULT NULL,
  `allergisch` text DEFAULT NULL,
  `woning` text DEFAULT NULL,
  `tuin` text DEFAULT NULL,
  `omgeving` text DEFAULT NULL,
  `verblijf` text DEFAULT NULL,
  `kattengehad` text DEFAULT NULL,
  `aantalkatten` tinyint(4) DEFAULT NULL,
  `aantalhonden` tinyint(4) DEFAULT NULL,
  `aantalandere` tinyint(4) DEFAULT NULL,
  `profielfoto` varchar(256) DEFAULT NULL,
  `email` text DEFAULT NULL,
  `paswoord` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `gebruiker`
--

INSERT INTO `gebruiker` (`id`, `voornaam`, `naam`, `geboortedatum`, `beroep`, `gezinsleden`, `kinderen`, `allergisch`, `woning`, `tuin`, `omgeving`, `verblijf`, `kattengehad`, `aantalkatten`, `aantalhonden`, `aantalandere`, `profielfoto`, `email`, `paswoord`) VALUES
(1, 'Larissa', 'Marien', '1995-08-02', 'Student', '3', '0', '1', 'Huis', 'Ja, een tuin', 'Stadsrand', 'vrij binnen', '1', 2, 0, 0, 'MarienLarissa.jpg', 'larissa.marien95@gmail.com', 'd4917cd4cedae16417cfddb3ce292e45');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `gebruikerkat`
--

CREATE TABLE `gebruikerkat` (
  `id` int(11) NOT NULL,
  `gebruiker_id` int(11) DEFAULT NULL,
  `kat_id` int(11) DEFAULT NULL,
  `liked` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `gebruikerkat`
--

INSERT INTO `gebruikerkat` (`id`, `gebruiker_id`, `kat_id`, `liked`) VALUES
(1, 1, 1, 1),
(2, 1, 4, 1),
(3, 1, 20, 1);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `katten`
--

CREATE TABLE `katten` (
  `id` int(11) NOT NULL,
  `voornaam` text DEFAULT NULL,
  `leeftijd` tinyint(4) DEFAULT NULL,
  `geslacht` text DEFAULT NULL,
  `naamasiel` text DEFAULT NULL,
  `telasiel` int(11) DEFAULT NULL,
  `mailasiel` text DEFAULT NULL,
  `websiteasiel` text DEFAULT NULL,
  `omgangkatten` text DEFAULT NULL,
  `omganghonden` text DEFAULT NULL,
  `omgangkinderen` text DEFAULT NULL,
  `alleenzijn` text DEFAULT NULL,
  `buitenkat` text DEFAULT NULL,
  `gezondheid` text DEFAULT NULL,
  `beschrijving` text DEFAULT NULL,
  `foto` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `katten`
--

INSERT INTO `katten` (`id`, `voornaam`, `leeftijd`, `geslacht`, `naamasiel`, `telasiel`, `mailasiel`, `websiteasiel`, `omgangkatten`, `omganghonden`, `omgangkinderen`, `alleenzijn`, `buitenkat`, `gezondheid`, `beschrijving`, `foto`) VALUES
(1, 'Kato', 8, 'kattin', 'Asiel Mariena', 497784904, 'larissa.marien@student.ap.be', 'http://www.asielmariena.be', 'Ja', 'Nee', 'Ja', 'Nee', 'Nee', 'Ja', 'Kato is een lieve en zachtaardige kat met een eigen karaktertje. Ze is gewoon van binnen te zitten en daar voelt ze zich dus ook het best. Honden heeft ze nog nooit in haar leven gezien of ontmoet dus of ze daarmee om kan is de vraag. Alleen is Kato niet graag, ze is het liefst dichtbij haar baasje.', 'Kato_1.jpg'),
(2, 'Kitty', 14, 'kattin', 'Asiel Mariena', 497784904, 'larissa.marien@student.ap.be', 'http://www.asielmariena.be', 'Ja', 'Ja', 'Nee', 'Ja', 'Nee', 'Nee', 'Kitty is een rustige kat die goed alleen kan zijn, ze is zelfs liefst alleen. Kindjes heeft ze nog nooit ontmoet dus weten we niet of ze om kan met kindjes. Honden en katten zijn geen probleem want Kitty groeide op met beide. Kitty is een echte binnenkat maar ze kan ook eens genieten van wat in de tuin te liggen. Kitty is zeer liefdevol naar haar baasjes toe, je moet nog maar haar naam zeggen en ze begint al te spinnen.\r\nKitty heeft wat last van rugproblemen en kan moeilijk trappen doen.', 'Kitty_1.jpg'),
(3, 'Minous', 10, 'kater', 'Asiel Luc', 497784904, 'larissa.marien@student.ap.be', 'http://www.asielluc.be', 'Ja', 'Ja', 'Ja', 'Ja', 'Ja', 'Ja', 'Minous is een kater met een groot hart. Hij komt met alles en iedereen overeen. Hij wordt al een dagje ouder maar hij zit nog vol energie. Zijn favoriete speeltje heeft hij altijd wel in de buurt liggen als hij even wil spelen.', 'Minous_1.jpg'),
(4, 'Greg', 0, 'kater', 'Asiel Ann', 497784904, 'larissa.marien@student.ap.be', 'http://www.asielann.be', 'Ja', 'Ja', 'Ja', 'Ja', 'Ja', 'Ja', 'Greg is de rosse kater van je dromen! Door zijn speelsheid is hij de ideale speelkameraad voor de kindjes. Een hele dag achter een balletje lopen doet hij graag. Greg is graag buiten maar hij slaapt het liefst in zijn warme nestje binnen. Greg werd geboren in december 2019.', 'Greg_1.jpg'),
(5, 'Bee', 6, 'kattin', 'Asiel Dunja & JP', 497784904, 'larissa.marien@student.ap.be', 'http://www.asieldunjaenjp.be', 'Ja', 'Nee', 'Ja', 'Nee', 'Nee', 'Ja', 'Bee is een spring in het veld. Ze is heel sociaal en hangt het liefst rond rond haar baasjes. Aangezien Bee nog nooit in contact kwam met honden weten we niet of ze met hen om kan, maar het is het proberen zeker waard. Bee is gewoon van op een appartement te wonen en daar voelt ze zich op haar plek. ', 'Bee_1.jpg'),
(6, 'Mattie', 9, 'kater', 'Asiel De Cuyper', 497784904, 'larissa.marien@student.ap.be', 'http://www.asieldecuyper.be', 'Ja', 'Ja', 'Nee', 'Ja', 'Ja', 'Ja', 'Mattie is een stoere kerel die het liefst op avontuur gaat in de wijde wereld (het park). Hij is gewoon van buiten te zijn en er soms ook te slapen. Komt hij een dagje niet thuis wees dus niet ongerust. De speeltuin van het park vermijdt hij want kindjes zijn niet zijn ding. Mattie zijn grootste hobby is slapen. ', 'Mattie_1.jpg'),
(7, 'Mingus', 11, 'kater', 'Asiel Ann', 497784904, 'larissa.marien@student.ap.be', 'http://www.asielann.be', 'Nee', 'Nee', 'Ja', 'Ja', 'Ja', 'Nee', 'Mingus is de rebel van de buurt. Hij heerst met ijzeren poot en is niet bang voor een gevecht met zijn soortgenoten. Kindjes zijn zijn vrienden en zal hij nooit pijn doen maar eerder beschermen. Naar zijn baasjes toe is hij een echte charmeur. Mingus heeft problemen met zijn maag waarvoor hij speciale voeding krijgt, verder is hij gezond.', 'Mingus_1.jpg'),
(8, 'Snoes', 2, 'kattin', 'Asiel Luc', 497784904, 'larissa.marien@student.ap.be', 'http://www.asielluc.be', 'Ja', 'Ja', 'Ja', 'Nee', 'Nee', 'Ja', 'Snoes is een echte snoezepoes! Ze brengt vooral de dag door al slapend. Als ze wakker is, is ze altijd te vinden voor een goede aai-sessie. Alleen zijn is niet haar ding, de baasjes best zo dicht mogelijk bij haar. Snoes is gewoon van binnen te zitten/slapen. ', 'Snoes_1.jpg'),
(9, 'Harvey', 4, 'kater', 'Asiel Sophie', 497784904, 'larissa.marien@student.ap.be', 'http://www.asielsophie.be', 'Nee', 'Nee', 'Ja', 'Ja', 'Nee', 'Ja', 'Harvey is een stoere vent. Hij is de baas in huis maar heeft een klein en zacht hartje. Spinnen in huis hebben geen schijn van kans bij Harvey want die eet hij lekker op. Honden en katten zijn voor Harvey geen optie, mensen zijn al genoeg om mee om te kunnen voor hem. Harvey is een Britse korthaar in al zijn schoonheid (hij weet dit zelf ook).', 'Harvey_1.jpg'),
(10, 'Belle', 1, 'kattin', 'Asiel Ann', 497784904, 'larissa.marien@student.ap.be', 'http://www.asielann.be', 'Nee', 'Nee', 'Nee', 'Ja', 'Nee', 'Ja', 'Belle is een echte beauty. Katten, honden en kinderen zijn een NO GO voor Belle enkel haar baasjes hebben toegang tot haar liefde, op dat vlak is ze een echt beest. Belle zit het liefst binnen in haar kasteel maar ze is ook gewend van buiten te zijn af en toe. ', 'Belle_1.jpg'),
(11, 'Ellie', 2, 'kattin', 'Asiel Dunja & JP', 497784904, 'larissa.marien@student.ap.be', 'http://www.asieldunjaenjp.be', 'Ja', 'Nee', 'Nee', 'Ja', 'Nee', 'Nee', 'Ellie is een bange maar lieve kat. Eenmaal ze je kent is ze jouw beste vriend. Ellie zit graag binnen en kijkt vanuit haar warme nest naar de buitenwereld. Kinderen en honden vindt ze niet leuk en ze zal dan ook snel de poten nemen al ze ze ziet. Ellie is regelmatig verkouden maar heeft geen levensbedreigende ziekte ze heeft gewoon een slechte weerstand.', 'Ellie_1.jpg'),
(12, 'Pruts', 3, 'kater', 'Asiel Laure', 497784904, 'larissa.marien@student.ap.be', 'http://www.asiellaure.be', 'Ja', 'Ja', 'Ja', 'Ja', 'Nee', 'Ja', 'Pruts is een echte huiskat. Pruts is een zwarte kat maar deze brengt geen ongeluk. Ze is lief en aanhankelijk. Ze is gewoon van binnen te zitten maar als ze een keertje buiten glipt wees dan niet bang Pruts komt altijd terug. ', 'Pruts_1.jpg'),
(13, 'Snow', 16, 'kattin', 'Asiel Luc', 497784904, 'larissa.marien@student.ap.be', 'http://www.asielluc.be', 'Ja', 'Nee', 'Ja', 'Ja', 'Ja', 'Nee', 'Snow is een echt bommatje. Met haar 16 jaar is ze nog een kranige tante. Omdat ze zo oud is hoort Snow niet zo goed meer dus een beetje harder roepen is de boodschap. Ze is het liefst in de natuur (geen verkeer want dat hoort ze niet meer) maar slaapt wel graag binnen in haar nestje. Een kat met een oud maar gouden hart.', 'Snow_1.jpg'),
(14, 'Billie', 5, 'kattin', 'Asiel An', 497784904, 'larissa.marien@student.ap.be', 'http://www.asielan.be', 'Nee', 'Nee', 'Nee', 'Ja', 'Nee', 'Ja', 'Billie zoekt een baasje waar ze zich helemaal thuis bij voelt. Het zal even duren tot Billie zich volledig open stelt maar eenmaal het ijs gebroken is kan je met volle teugen geniet van haar liefde. Komt er bezoek binnen zal je Billie niet meer zien want ze is bang van alles en iedereen (behalve haar baasje). ', 'Billie_1.jpg'),
(15, 'Jana', 7, 'kattin', 'Asiel De Cuyper', 497784904, 'larissa.marien@student.ap.be', 'http://www.asieldecuyper.be', 'Ja', 'Ja', 'Nee', 'Ja', 'Nee', 'Ja', 'Jana is een echte lady. Ze groeide op in een winkel en is dus gewend aan andere mensen en honden (die af en toe binnen kwamen). Van kinderen liep ze weg. Jana is gewend van binnen te zitten en heeft nooit de behoefte gehad om weg te lopen, eenmaal gesetteld voelt ze zich op haar gemak.', 'Jana_1.jpg'),
(16, 'Rhadja', 6, 'kater', 'Asiel Oma', 497784904, 'larissa.marien@student.ap.be', 'http://www.asieloma.be', 'Nee', 'Ja', 'Ja', 'Nee', 'Nee', 'Ja', 'Rhadja heeft spijtig genoeg te snel afscheid moeten nemen van zijn vorige baasje. Zijn vorige baasje was een oude dame die hem altijd verwend heeft. Rhadja groeide op met een hond aan zijn zijde waardoor honden geen probleem zijn. De kleinkinderen van de dame kwamen regelmatig over de vloer en Rhadja stond meteen klaar voor knuffels.', 'Rhadja_1.jpg'),
(17, 'Zazzi', 6, 'kattin', 'Asiel De Cuyper', 497784904, 'larissa.marien@student.ap.be', 'http://www.asieldecuyper.be', 'Ja', 'Ja', 'Nee', 'Ja', 'Nee', 'Ja', 'Zazzi is zo zwart als de nacht maar brengt de zon in huis. Ze is lief en aanhankelijk. Ze zal niet snel naar kinderen gaan maar honden en andere katten zijn geen probleem. Ze is 6 jaar en heeft de dierenarts enkel nog maar gezien voor haar jaarlijkse spuitjes.', 'Zazzi_1.jpg'),
(18, 'Conchita', 10, 'kattin', 'Asiel Katrien', 497784904, 'larissa.marien@student.ap.be', 'http://www.asielkatrien.be', 'Ja', 'Nee', 'Ja', 'Nee', 'Ja', 'Ja', 'Conchita is geen wurst! Met haar hart van goud weet ze iedereen in te pakken. Conchita knuffelt het liefst en dat zie je op elke foto die van haar genomen wordt. Ze is misschien een jaartje ouder maar ze is jong van geest. Honden vindt ze maar eng en blijft dan ook liever ver weg van hen.', 'Conchita_1.jpg'),
(19, 'Jip & Janneke', 0, 'kattin', 'Asiel Fee', 497784904, 'larissa.marien@student.ap.be', 'http://www.asielfee.be', 'Ja', 'Ja', 'Ja', 'Nee', 'Nee', 'Ja', 'Jip en Janneke zijn twee kattinnetjes van hetzelfde nestje, zusjes dus. Ze worden samen aangeboden omdat ze onafscheidelijk zijn, Jip kan niet zonder Janneke en andersom. Ze werden geboren in februari 2020. Ze zijn super speels maar moeten nog veel leren.', 'JipJanneke_1.jpg'),
(20, 'Florke', 3, 'kater', 'Asiel Senne', 497784904, 'larissa.marien@student.ap.be', 'http://www.asielsenne.be', 'Ja', 'Ja', 'Ja', 'Nee', 'Ja', 'Ja', 'Florke is een echte flodder. Knuffelen en aaitjes zijn zijn favoriete dingen. Hij pakt je in met zijn grote groene ogen. Het liefst is hij het dicht bij zijn baasje maar op avontuur gaan doet hij ook graag. Zijn lievelings bezigheid is Netflix en chill met zijn baasje.', 'Florke_1.jpg'),
(21, 'Oskar', 12, 'kater', 'Asiel Sophie', 497784904, 'larissa.marien@student.ap.be', 'http://www.asielsophie.be', 'Ja', 'Ja', 'Ja', 'Nee', 'Nee', 'Ja', 'Oskar is een lieve en hartelijke kat maar hij heeft wel zijn eigen willetje. Het bezoek dekt best de glazen af of Oskar drinkt een slokje mee uit hun glas. Oskar is een naaktkat wat betekent dat hij extra verzorging nodig heeft, je moet hem niet kammen maar wel insmeren. ', 'Oskar_1.jpg'),
(22, 'Bijoux', 13, 'kattin', 'Asiel Natasha', 497784904, 'larissa.marien@student.ap.be', 'http://www.asielnatasha.be', 'Nee', 'Nee', 'Nee', 'Ja', 'Ja', 'Ja', 'Bijoux is een heel bange maar lieve kat. Omgaan met andere dieren en kinderen kan Bijoux niet daarvoor is ze te bang. Enkel haar baasje laat Bijoux toe tot haar wereldje. Haar hobbies zijn slapen en spinnen. Is je wekker kapot? Bijoux vervangt met plezier je wekker want ze is altijd een vroege vogel.', 'Bijoux_1.jpg'),
(23, 'Toulouse', 7, 'kater', 'Asiel Anneleen', 497784904, 'larissa.marien@student.ap.be', 'http://www.asielanneleen.be', 'Ja', 'Ja', 'Ja', 'Ja', 'Ja', 'Ja', 'Toulouse kan op minder dan 5 minuten je helemaal in pakken. Hij draait je zo rond zijn pootje. Hij is lief en zachtaardig. De ideale kat want hij kan om met katten, honden en andere kinderen. Alleen zijn is geen probleem en hij is het liefst buiten in de natuur. Ben je nog niet verkocht? Dan moet je Toulouse maar eens horen spinnen dan ben je zeker verkocht!', 'Toulouse_1.jpg');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `gebruiker`
--
ALTER TABLE `gebruiker`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `gebruikerkat`
--
ALTER TABLE `gebruikerkat`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `katten`
--
ALTER TABLE `katten`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `gebruiker`
--
ALTER TABLE `gebruiker`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT voor een tabel `gebruikerkat`
--
ALTER TABLE `gebruikerkat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT voor een tabel `katten`
--
ALTER TABLE `katten`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
