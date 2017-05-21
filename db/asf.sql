-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Vært: 127.0.0.1
-- Genereringstid: 21. 05 2017 kl. 21:27:08
-- Serverversion: 5.7.14
-- PHP-version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `asf`
--

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `kitchens`
--

CREATE TABLE `kitchens` (
  `id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `image` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Data dump for tabellen `kitchens`
--

INSERT INTO `kitchens` (`id`, `name`, `image`, `description`) VALUES
(1, 'The French Corner', 'the_french_corner.jpg', 'Klassiske galettes fra Bretagne og søde crepes.\r\n\r\nFranske galettes og crêpes lavet af en rigtig franskmand fra Bretagne – så bliver det da ikke bedre! Marion har sat sin franske food truck i gear, og fyldt den med fransk stemning - Med sig bringer hun en helt særlig og lokal opskrift på galettes fra sin hjemstavn Bretagne.\r\n\r\n\r\nDen franske galette er en tynd og lækker madpandekage, som er blevet lavet i århundreder af de franske kvinder i Bretagne. Den originale galette fra Bretagne laves af boghvede, hvilket betyder, at den er glutenfri. Så er du glutenintolerant, er en galette en ideel spise på vores street food-marked.\r\n\r\n\r\nMarion vender ikke bare de papirtynde galettes på sin pande, men også de klassiske crêpes og fylder med diverse lækre franske specialiteter. Føler du dig i det frankofile hjørne, så kom forbi The French Corner og få dig en bid af Bretagne!'),
(2, 'Tuk Tuk', 'tuk_tuk.jpg', 'Autentisk thai mad - godt krydret og peppet til eksotiske smagsoplevelser\r\n\r\nHos Tuk Tuk Thai Mad laver vi autentiske thailandske retter som mange kender dem fra Thailand. Målet er at ikke lave en fordansket udgave af de kendte retter, men derimod bibeholde der originale thailandske smag. Det betyder at maden er krydret og fuld af eksotiske smagsoplevelser.\r\n\r\nDen thailandske kok vil hver dag tilberede populære karry, nudel og ris retter. I weekenderne vil der blive tilberedt nye og spændende lokal retter, som kun er at finde i bestemte områder i Thailand. Disse vil variere fra weekend til weekend og målet er at altid have en ny og spændende ret at tilbyde.\r\n\r\nVi glæder os til at se jer hos Tuk Tuk Thai Mad'),
(3, 'Stegen og Dellen', 'stegen_og_dellen.jpg', 'Vores speciale er flæskesteg- og frikadellesandwich.\r\n\r\nStegen og Dellen består af et team kokke og professionelle fagfolk med en forkærlighed for den gode steg med sprøde svær  og lune deller - det er dejlig dansk mad.\r\n\r\nDanmark er blevet ramt af en hær af foodtrucks med lækkerier fra hele verden - vi syntes der manglede noget til alle turisterne som kommer her. De skal da have muligheden for at smage den traditionelle danske mad - forklædt som den lækreste streetfood.\r\n\r\nAlle vores produkter er hjemmelavede efter hemmelige opskrifter helt tilbage fra da mormor rørte frikadellefarsen - kom forbi Stegen og Dellen og smag en himmelsk bid af Danmark.'),
(4, 'Tatashe', 'tatashe.jpg', 'Caribisk og vestafrikansk Grill\r\n\r\nTatashe er det lokale ord for rød peberfrugt og en chili fra Kano regionen i Nigeria. Tatashe er en grundlæggende ingrediens i saucer og aromatiske gryderetter i de fleste Vestafrikanske lande. Det er også navnet, jeg har valgt for min afrikansk og caribisk inspirerede grill, som bringer smagfuld og saftig grillet jerk pork og jerk chicken (jerk marineret svinekød og - kylling) samt oksekød vendt i krydret suya (peanut, ingefær og negro pepper) og grillet over åben kulgrill for forbedret smag og serveret med årstidens forskellige eksotiske salater og frugt til Aarhus Street Food.\r\n\r\nVores mad bliver serveret med krydrede ovnbagte kartofler eller kokosris med kidneybønner. Herudover har vi et stort udvalg af menuer med smagen af Afrika og Caribien, som vi vil introducere efter sæsonen fra vores Street Food Køkken - og vi har selvfølgelig også vegetarretter.'),
(5, 'Danyar Fish & Chips', 'danyar_fish_and_chips.jpg', 'Fish & Chips - the English way!\r\n\r\nDanyar Fish & Chips er ”Rigtig” Fish and Chips efter engelsk forbillede.\r\n\r\nVi serverer et ”stort” stykke fisk med rigtig batter. (ikke raspet) \r\n\r\nVi har Sarson´s malt eddikesamt Mushy Peas og Tartare sauce.\r\n\r\nVi har stor kærlighed for kvalitets fisk, så den fisk vi bruger, er fanget med liner fra mindre både. \r\n\r\nLinefanget fisk er førsteklasses fisk, der er fanget på en ordentlig måde, så både smag, kvalitet, og også miljøet bevares. \r\n\r\nFisken bliver fanget direkte ud fra den færøske kyst, så de små linebåde kan komme hurtigt ind med fangsten, som herefter bliver forarbejdet med det samme.\r\n\r\nUdover Fish & Chips sælger vi også glutenfri fiskefrikadeller samt fiskefileter lavet af færøsk kuller.'),
(6, 'FOODsteps', 'foodsteps.jpg', 'Amerikansk inspireret streetfood\r\n\r\nFOODsteps laver amerikansk inspireret streetfood, finjusteret til europæiske smagsløg. Special Burgers, Sandwich, snacks og andre lækre specialiteter. I vores køkken lægger vi stor vægt på høj kvalitet og bæredygtighed, hvilket også afspejles i vores valg af råvarer. F.eks. får vi vores oksekød fra glade danske køer, alle dressinger og saucer er hjemmelavede, og vi bager naturligvis selv vores burgerboller og brød med den bedste økologisk Samsø mel.\r\nVi er et innovativt køkken der helhjertet og konstant arbejder for at lave bedre streetFOOD til vores gæster. Bedre råvarer giver nemlig bedre mad, når maden samtidig tilberedes med passion, indlevelse og et drys kærlighed.\r\nVi kalder det: FOODsteps - American with a twist\r\n\r\nFind os på Facebook https://www.facebook.com/FOODstepsstreetfood/\r\n\r\nBesøg vores hjemmeside http://www.foodsteps.dk/'),
(7, 'La Rossa', 'la_rossa.jpg', 'prøde pizzaer\r\n\r\nHvis du lukker øjnene og tager en bid af en pizza fra La Rossa, så kan du blive helt i tvivl, om du står på en markedsplads i Rom, eller om du står på Aarhus Street Food. Pizzabunden er sprød, osten blød og fyldet fantastisk.\r\nBag pizzaerne står vores italienske pizzabager Angela “La Rossa”, der tilbyder pizzaer med mange forskellige smage. Hver gang I kommer til La Rossa, vil der helt sikkert altid være nye autentiske smagsoplevelser!\r\n\r\nFacebook https://m.facebook.com/La-Rossa-583684848500042/\r\n\r\nInstagram https://www.instagram.com/larossaarhus/'),
(8, 'The Mexican Donkey', 'the_mexican_donkey.jpg', 'Autentisk mexicansk mad efter Fabiolas opskrifter\r\n\r\nThe Mexican Donkey har rødder i den Mexicanske jord. Vores kærlighed til Mexicansk streetfood stammer fra Isabels familie som er mexicanere. Fabiola har lært os alle opskrifter, og Isabel er \r\nopvokset med chili, tacos og masser af gode madoplevelser, som det mexicanske køkken netop kan give. Vi lever og ånder for den autentiske og originale street food fra Mexico og importerer selv de råvarer vi har brug for, samtidig er alt vores tilbehør er hjemmelavet.\r\n\r\nVores mad er yderst velegnet til vegetarer og veganere, den er sund og tilberedt fra bunden af. \r\nVores tostadas og tacoer er glutenfri og lavet af 100 % majsmel, og er derfor velegnede til glutenallergikere.\r\n\r\nRetter: Vi laver taco, tostadas, burrito og tortas (spicy mexicansk sandwich)\r\n\r\nKød: Hvidløg/lime marineret oksekødsstrimler. Kylling i mole rojo samt gryderetter til vinter\r\n\r\nTilbehør: Hjemmelavet bønnemos, rødkålssalat, chilisalsa, hjemmesyltede rødløg, hjemmerørt chilimayo, ost, guacamole og granatæblekerner.'),
(9, 'Bánh Mì Bandits', 'banh_mi_bandits.jpg', 'Freestyle vietnamesisk streetfood\r\n\r\nBánh Mì Bandits består af fire barndomsvenner fra Århus Vest. De fire unge knægter er madglade og passionerede ildsjæle, som hver især har rejst i Vietnam og er blevet betaget af deres streetfood kultur. De har vidt forskellige uddannelsesmæssige baggrunde, men en fælles begejstring og passion for det vietnamesiske gadekøkken.\r\n\r\nBánh Mì Bandits gør sig i freestyle vietnamesisk streetfood og de har specialiseret sig i bánh mì - som er vietnamesisk streetfood når det er allerbedst. Her har de fokus på de klassiske og autentiske smage fra Vietnam - blot tilsat masser af kærlighed og freestyle! \r\n\r\nDrengene fra Bánh Mì Bandits er eksperter i bánh mì - deres fokus er på de charmerende, simple, friske og rene smage fra Vietnam - masser af friske urter, grønt, syltet, pikante saucer og stegt, marineret kød. Veganere kan også tilfredsstilles hos Bánh Mì Bandits.\r\n\r\nFacebook https://www.facebook.com/banhmibandits\r\n\r\nInstagram https://www.instagram.com/banh_mi_bandits/'),
(10, 'NORD', 'nord.jpg', 'Fastfood i nye klæder!\r\n\r\nRugbrødet skal ud i verden, og NORD brænder for nordisk inspireret fastfood i nye klæder, der giver den nysgerrige et større indblik i et sundere fastfoodunivers. \r\n\r\nVi forbinder ikke fastfood med friture og sukker, men i stedet nem mad til den travle, der gerne vil forkæle sine smagsløg på en økologisk og sanserig måde.\r\n\r\nStreet food er folkeligt på den fede måde! Her kan du opleve en verden af gastronomi under samme tag med god stemning, en masse kærlighed og glade\r\nmennesker.\r\n\r\nHos NORD forener vi Street food med ordentlig mad – To verdener samlet på den fede måde.\r\n\r\nGrib fat i din buddy, flirt, kollega eller en helt tilfældig og vi vil stå klar med NORDisk tapas, RYE*panini, DIG*it og DIP*it, eller slæb det med hjem pakket og klar - Forudbestil her\r\n\r\nhttps://nordgourmet.cli.andhype.com/\r\n\r\nRåvarerne er behandlet med størst mulig kærlighed, opskrifterne hjemmelavede og rummer en masse økologi og næring, der giver din krop den benzin, den hungrer efter.  \r\n\r\nRugbrødet skal ud i verden – Kom forbi, få en bid og du vil være enig!\r\n\r\nFacebook https://www.facebook.com/NORDGourmet/?fref=ts\r\n\r\nInstagram https://www.instagram.com/nord_gourmet/'),
(11, 'MokkaHouse.dk', 'mokkahouse.jpg', 'Vi laver virkelig god kaffe!\r\n\r\nVi er nogle hyggelige kaffenørder, som serverer specialkaffe med et rent udtryk, af høj kvalitet og til en pris alle har råd til. Vores kaffe er friskristet fra eget risteri i Tilst, hvor kaffe concierge Kenneth, ud over at riste, jagter de bedste kaffer fra hele kaffebæltet. Vores mission er at komme tæt på råvaren og få en direkte kontakt til kaffefarmerne, så vi i samarbejde har mulighed for at udvikle den bedste kop til dig.\r\n\r\nManden bag KaffeBaren hedder Rasmus Jordt. Han stillede op til DM i barista februar 2016 og fik en vanvittig fin 2. plads. Kort ridset op er Rasmus opvokset i Kenya med sine danske forældre, og han gik i skole midt i en kaffeplantage - den fødte kaffesnedker.\r\n\r\nUdover kaffen byder vi på friskbagte boller, crossainter og sprøde macaroons'),
(12, 'Ølfred', 'ølfred.jpg', 'Øl til alt og alle!\r\n\r\nØlfred er ølbaren med plads til øl og alle.  Sortimentet udskiftes løbende, så der er altid noget nyt, friskt og spændende til de ølhungrende.'),
(13, 'Duck It', 'duck_it.jpg', 'Saftig pulled duck burger med de sprødeste duck fat fries\r\n\r\nDen er aromatisk, salt, sød, sur og meget mere - Burgeren med pulled duck fra Duck It.\r\n\r\nDer er noget særligt ved smagen af and. De fleste kender den nok fra juletid, og det er som om, at Duck It har suget al hyggen ud af julen og puttet den ned i én feel good-burger. Det trevlede andekød er mørt, bollen er blød og salaten er sprød. Med andre ord: Den er velsmagende, så det næsten er forbryderisk. \r\n\r\nOg for at det ikke skal være løgn, så laver Duck It også pomfritter...Stegt i andefedt!'),
(14, 'Grilled Cheese', 'grilled_cheese.jpg', 'Næsten som en toast - bare meget bedre!\r\n\r\nSmeltet ost. Behøver vi sige mere?\r\n\r\nGrilled cheese laver sandwiches. Ikke af den slags med spelt og skyrdressing, men med ost, friskt bagerbrød, confit de canard, krydret pølse, svampe og stegt aubergine. En simpel sandwich pakket med smag!\r\n\r\nDet er lækre og veltillavede ingredienser lukket inde i en mundvandsfremkaldende lomme af ost og brød. Perfekt til at kurere tømmermændene, til at tage sulten, til at runde aftenen af med, til at....ja, faktisk perfekt til alt!'),
(15, 'Street Shawarma', 'street_shawarma.jpg', 'Muuuuuums!\r\n\r\nFørst skal kødet marineres, så skal det sættes på et spid og så skal det op og stå på højkant, mens det langsomt bliver tilberedt med fedtet løbende ned af siden. Det er hemmeligheden bag Street Shawarma.\r\n\r\nNår kødet er tilberedt kan du få det serveret rullet ind i et fladbrød med kål, rodfrugter, dressing og andet godt. Eller du kan få det på en tallerken sammen med bulgur, humus, salat og andre lækre specialiteter - det er en Habibi tallerken - opfundet og lavet med kærlighed af Lara og hendes team.\r\n\r\nLara og teamet i biksen er desuden altid klar på at eksperimentere. Det har blandt andet resulteret i en shawarma med bacon!'),
(16, 'Super Bao', 'super_bao.jpg', 'Dampet og dejligt\r\n\r\nI Kina spiser de hunde, men de spiser heldigvis også rigtig mange lækre ting, og det er her, at Super Bao kommer ind i billedet med deres bao buns.\r\n\r\nEn bao bun er en dampet bolle, der bliver fyldt med en masse lækre sager. Det, at bollen bliver dampet, gør, at den får en helt speciel blød konsistens, som omfavner det marinerede kød, der bliver fyldt i. Top det hele med specialiteten kimchi eller med lækre grøntsager, og så har du en ret, der aldrig skuffer!'),
(17, 'ExpatMeal Cuisine India', 'expatmeal_cuisine_india.jpg', 'Velduftende og aromatisk - autentisk indisk mad\r\n\r\nButter Chicken, beef curry eller vegansk rajma.  Kig ned og smag på indien!'),
(18, 'Cheesecaken', 'cheesecaken.jpg', 'Cheesecaken serverer byens bedste kage - uden tvivl!\r\n\r\nDer er en cheesecake til enhver smag - Oreo, skovbær, karamel, chokolade mousse og mange mange flere.  Variationerne ændrer sig efter humør og sæson - så kig ned og smag på en ny slags.  De er absolut vanedannende!'),
(19, 'Mormors Køkken', 'mormors_køkken.jpg', 'Traditionel dansk mad - som mormor lavede den!\r\n\r\nTarteletter med høns i asparages og boller i karry er de to føste skud på menu-stammen hos Mormors Køkken.  Ideen er at retterne vil variere efter sæson og kokkens humør.  Vi venter i spænding på hvad Mormor finder på!'),
(20, 'American Street Kitchen', 'american_street_kitchen.jpg', 'All american street food!\r\n\r\nHos American Street Kitchen får du de bedste chicken wings udenfor guds eget land - de er fingerslikkende fantastiske.  Curly fries med hjemmerørt mayo og deres pulled beef burger - det er fedtet på den helt rigtige måde. WE LOVE IT!');

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `total_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `kitchen_id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Data dump for tabellen `products`
--

INSERT INTO `products` (`id`, `kitchen_id`, `name`, `price`) VALUES
(1, 1, 'Crepe', 40),
(2, 1, 'Galette', 50),
(3, 2, 'Masaman Karry', 50),
(4, 2, 'Phad Thai', 75),
(5, 3, 'Flæskestegssandwich', 50),
(6, 3, 'Frikadellesandwich', 50),
(7, 4, 'Jerk Pork', 50),
(8, 4, 'Jerk Chicken', 60),
(9, 5, 'Fish & Chips', 50),
(10, 5, 'Fiskefrikadeller', 40),
(11, 6, 'Amerikansk Burger', 75),
(12, 6, 'Amerikansk Sandwich', 50),
(13, 7, 'Lille pizza', 50),
(14, 7, 'Stor pizza', 75),
(15, 8, 'Tostada', 50),
(16, 8, 'Burrito', 50),
(17, 9, 'Sandwich', 60),
(18, 9, 'Salat', 50),
(19, 10, 'Tapas', 50),
(20, 10, 'Panini', 60),
(21, 11, 'Filterkaffe', 25),
(22, 11, 'Cappuccino', 35),
(23, 12, 'Lille fadøl', 30),
(24, 12, 'Stor fadøl', 50),
(25, 13, 'Pulled Duck', 50),
(26, 13, 'Duck Fat Fries', 30),
(27, 14, 'Sandwich med confit de canard', 60),
(28, 14, 'Sandwich med krydret pølse', 50),
(29, 15, 'Shawarmarulle', 50),
(30, 15, 'Habibi tallerken', 50),
(31, 16, 'Bao med kimchi', 50),
(32, 16, 'Bao med grøntsager', 40),
(33, 17, 'Butter Chicken', 50),
(34, 17, 'Vegansk Rajma', 40),
(35, 18, 'Cheesecake med skovbær', 35),
(36, 18, 'Cheesecake med karamel', 35),
(37, 19, 'Tarteletter', 50),
(38, 19, 'Boller i karry', 50),
(39, 20, 'Chicken Wings', 50),
(40, 20, 'Pulled Beef Burger', 75);

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `products_belong_to_orders`
--

CREATE TABLE `products_belong_to_orders` (
  `product_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(16) NOT NULL,
  `password` varchar(16) NOT NULL,
  `name` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Data dump for tabellen `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `name`) VALUES
(1, 'lasse', 'guldhammer', 'Lasse Guldhammer');

--
-- Begrænsninger for dumpede tabeller
--

--
-- Indeks for tabel `kitchens`
--
ALTER TABLE `kitchens`
  ADD PRIMARY KEY (`id`);

--
-- Indeks for tabel `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indeks for tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indeks for tabel `products_belong_to_orders`
--
ALTER TABLE `products_belong_to_orders`
  ADD KEY `product_id` (`product_id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indeks for tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Brug ikke AUTO_INCREMENT for slettede tabeller
--

--
-- Tilføj AUTO_INCREMENT i tabel `kitchens`
--
ALTER TABLE `kitchens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- Tilføj AUTO_INCREMENT i tabel `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Tilføj AUTO_INCREMENT i tabel `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- Tilføj AUTO_INCREMENT i tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Begrænsninger for dumpede tabeller
--

--
-- Begrænsninger for tabel `products_belong_to_orders`
--
ALTER TABLE `products_belong_to_orders`
  ADD CONSTRAINT `products_belong_to_orders_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `products_belong_to_orders_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
