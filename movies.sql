-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 07, 2013 at 10:28 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `movies`
--

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE IF NOT EXISTS `movies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `date` varchar(20) NOT NULL,
  `rating` int(10) NOT NULL,
  `genre` varchar(20) NOT NULL,
  `director` varchar(30) NOT NULL,
  `plot` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=61 ;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `name`, `date`, `rating`, `genre`, `director`, `plot`) VALUES
(1, '21', '2008', 8, 'Thriller', 'Robert Luketic', '21 is the fact-based story about six MIT students who were trained to become experts in card counting and subsequently took Vegas casinos for millions in winnings.'),
(2, '300', '2006', 8, 'Action', 'Zack Snyder', 'King Leonidas and a force of 300 men fight the Persians at Thermopylae in 480 B.C.'),
(3, 'The A-Team', '2010', 7, 'Action', 'Joe Carnahan', 'A group of Iraq War veterans looks to clear their name with the U.S. military, who suspect the four men of committing a crime for which they were framed.'),
(4, 'The Avengers', '2012', 8, 'Superhero', 'Joss Whedon', 'Nick Fury of S.H.I.E.L.D. assembles a team of superhumans to save the planet from Loki and his army.'),
(5, 'Baby''s Day Out', '1994', 7, 'Children', 'Patrick Read Johnson', 'Baby Bink couldn''t ask for more, he has adoring, if somewhat sickly-sweet, parents, he lives in a huge mansion, and he''s just about to appear in the social pages of the paper. Unfortunately, not everyone in the world is as nice as Baby Bink''s parents, especially the three enterprising kidnapers who pretend to be photographers from the newspaper. Successfully kidnaping Baby Bink, they have a harder time keeping hold of the rascal, who not only keeps one step ahead of them, but seems to be more than a little bit smarter than the three bumbling criminals'),
(6, 'Batman Begins', '2005', 9, 'Superhero', 'Christopher Nolan', 'After training with his mentor, Batman begins his war on crime to free the crime-ridden Gotham City from corruption that the Scarecrow and the League of Shadows have cast upon it.'),
(7, 'Cars', '2006', 7, 'Animation', 'John Lasseter, Joe Ranft', 'A hot-shot race-car named Lightning McQueen gets waylaid in Radiator Springs, where he finds the true meaning of friendship and family.'),
(8, 'The Conjuring', '2013', 8, 'Horror', 'James Wan', 'Paranormal investigators Ed and Lorraine Warren work to help a family terrorized by a dark presence in their farmhouse.'),
(9, 'The Dark Knight', '2008', 10, 'Superhero', 'Christopher Nolan', 'When Batman, Gordon and Harvey Dent launch an assault on the mob, they let the clown out of the box, the Joker, bent on turning Gotham on itself and bringing any heroes down to his level.'),
(10, 'Devil', '2010', 6, 'Horror', 'John Erick Dowdle', 'A group of people are trapped in an elevator and the Devil is mysteriously amongst them.'),
(11, 'Django Unchained', '2012', 8, 'Adventure', 'Quentin Tarantino', 'With the help of a German bounty hunter, a freed slave sets out to rescue his wife from a brutal Mississippi plantation owner.'),
(12, 'E.T. - The Extra-Terrestrial', '1982', 8, 'Family', 'Steven Speilberg', 'A troubled child summons the courage to help a friendly alien escape Earth and return to his home-world.'),
(13, 'Edward Scissorhands', '1990', 8, 'Drama', 'Tim Burton', 'An uncommonly gentle young man, who happens to have scissors for hands, falls in love with a beautiful adolescent girl.'),
(14, 'Fight Club', '1999', 9, 'Drama', 'David Fincher', 'An insomniac office worker looking for a way to change his life crosses paths with a devil-may-care soap maker and they form an underground fight club that evolves into something much, much more...'),
(15, 'Finding Nemo', '2003', 8, 'Animation', 'Andrew Stanton, Lee Unkrich', 'After his son is captured in the Great Barrier Reef and taken to Sydney, a timid clownfish sets out on a journey to bring him home.'),
(16, 'Forrest Gump', '1994', 9, 'Romantic', 'Robert Zemeckis', 'Forrest Gump, while not intelligent, has accidentally been present at many historic moments, but his true love, Jenny Curran, eludes him.'),
(17, 'The Godfather', '1972', 9, 'Crime', 'Francis Ford Coppola', 'The aging patriarch of an organized crime dynasty transfers control of his clandestine empire to his reluctant son.'),
(18, 'The Godfather Part II', '1974', 9, 'Crime', 'Francis Ford Coppola', 'The early life and career of Vito Corleone in 1920s New York is portrayed while his son, Michael, expands and tightens his grip on his crime syndicate stretching from Lake Tahoe, Nevada to pre-revolution 1958 Cuba.'),
(19, 'Hancock', '2008', 7, 'Superhero', 'Peter Berg', 'A hard-living superhero who has fallen out of favor with the public enters into a questionable relationship with the wife of the public relations professional who''s trying to repair his image.'),
(20, 'Harold & Kumar Go to White Castle', '2004', 7, 'Comedy', 'Danny Leiner', 'An Asian-American office worker and his Indian-American stoner friend embark on a quest to satisfy their desire for White Castle burgers.'),
(21, 'Harold & Kumar Escape from Guantanamo Bay', '2008', 7, 'Comedy', 'Jon Hurwitz, Hayden Schlossber', 'Follows the cross-country adventures of the pot-smoking duo as they try to outrun authorities who suspect them of being terrorists when they try to sneak a bong on board their flight to Amsterdam.'),
(22, 'I Am Legend', '2007', 8, 'Sci-Fi', 'Francis Lawrence', 'Years after a plague kills most of humanity and transforms the rest into monsters, the sole survivor in New York City struggles valiantly to find a cure.'),
(23, 'Ice Age', '2002', 7, 'Animation', 'Chris Wedge, Carlos Saldanha', 'Set during the Ice Age, a sabertooth tiger, a sloth, and a wooly mammoth find a lost human infant, and they try to return him to his tribe.'),
(24, 'Inception', '2010', 9, 'Adventure', 'Christopher Nolan', 'A skilled extractor is offered a chance to regain his old life as payment for a task considered to be impossible.'),
(25, 'Jerry Maguire', '1996', 7, 'Romantic', 'Cameron Crowe', 'When a sports agent has a moral epiphany and is fired for expressing it, he decides to put his new philosophy to the test as an independent with the only athlete who stays with him.'),
(26, 'Johnny English', '2003', 6, 'Comedy', 'Peter Howitt', 'After a sudden attack on the MI5, Johnny English, Britain''s most confident yet unintelligent spy, becomes Britain''s only spy.'),
(27, 'King Kong', '2005', 7, 'Action', 'Peter Jackson', 'In 1933 New York, an overly ambitious movie producer coerces his cast and hired ship crew to travel to mysterious Skull Island, where they encounter Kong, a giant ape who is immediately smitten with leading lady Ann Darrow.'),
(28, 'Kung Fu Panda', '2008', 8, 'Animation', 'Mark Osborne, John Stevenson', 'In the Valley of Peace, Po the Panda finds himself chosen as the Dragon Warrior despite the fact that he is obese and a complete novice at martial arts.'),
(29, 'Life of Pi', '2012', 8, 'Adventure', 'Ang Lee', 'A young man who survives a disaster at sea is hurtled into an epic journey of adventure and discovery. While cast away, he forms an unexpected connection with another survivor: a fearsome Bengal tiger.'),
(30, 'The Lion King', '1994', 8, 'Animation', 'Roger Allers, Rob Minkoff', 'Tricked into thinking he killed his father, a guilt ridden lion cub flees into exile and abandons his identity as the future King.'),
(31, 'The Machinist', '2004', 9, 'Suspense', 'Brad Anderson', 'An industrial worker who hasn''t slept in a year begins to doubt his own sanity.'),
(32, 'The Matrix', '1999', 9, 'Sci-Fi', 'Andy Wachowski, Lana Wachowski', 'A computer hacker learns from mysterious rebels about the true nature of his reality and his role in the war against its controllers.'),
(33, 'Now You See Me', '2013', 8, 'Suspense', 'Louis Leterrier', 'An FBI agent and an Interpol detective track a team of illusionists who pull off bank heists during their performances and reward their audiences with the money.'),
(34, 'The Number 23', '2007', 8, 'Thriller', 'Joel Schumacher', 'Walter Sparrow becomes obsessed with a novel that he believes was written about him. As his obsession increases, more and more similarities seem to arise.'),
(35, 'Ocean''s Eleven', '2001', 8, 'Crime', 'Steven Soderbergh', 'Danny Ocean and his eleven accomplices plan to rob three Las Vegas casinos simultaneously.'),
(36, 'Orphan', '2009', 7, 'Horror', 'Jaume Collet-Serra', 'A husband and wife who recently lost their baby adopt a 9-year-old girl who is not nearly as innocent as she claims to be.'),
(37, 'The Prestige', '2006', 9, 'Thriller', 'Christopher Nolan', 'The rivalry between two magicians becomes more exacerbated by their attempt to perform the ultimate illusion.'),
(38, 'Pulp Fiction', '1994', 9, 'Crime', 'Quentin Tarantino', 'The lives of two mob hit men, a boxer, a gangster''s wife, and a pair of diner bandits intertwine in four tales of violence and redemption.'),
(39, 'The Pursuit of Happyness', '2006', 9, 'Drama', 'Gabriele Muccino', 'A struggling salesman takes custody of his son as he''s poised to begin a life-changing professional endeavor.'),
(40, 'Quantum of Solace', '2008', 7, 'Adventure', 'Marc Forster', 'James Bond descends into mystery as he tries to stop a mysterious organization from eliminating a country''s most valuable resource. All the while, he still tries to seek revenge over the death of his love.'),
(41, 'Quarantine', '2008', 6, 'Horror', 'John Erick Dowdle', 'A television reporter and her cameraman are trapped inside a building quarantined by the CDC after the outbreak of a mysterious virus which turns humans into bloodthirsty killers.'),
(42, 'Remember The Titans', '2000', 9, 'Drama', 'Boaz Yakin', 'The true story of a newly appointed African-American coach and his high school team on their first season as a racially integrated unit.'),
(43, 'Resident Evil', '2002', 8, 'Horror', 'Paul W.S. Anderson', 'A special military unit fights a powerful, out-of-control supercomputer and hundreds of scientists who have mutated into flesh-eating creatures after a laboratory accident.'),
(44, 'Rio', '2011', 6, 'Animation', 'Carlos Saldanha', 'When Blu, a domesticated macaw from small-town Minnesota, meets the fiercely independent Jewel, he takes off on an adventure to Rio de Janeiro with this bird of his dreams.'),
(45, 'Se7en', '1995', 9, 'Suspense', 'David Fincher', 'Two detectives, a rookie and a veteran, hunt a serial killer who uses the seven deadly sins as his modus operandi.'),
(46, 'The Silence of the Lambs', '1991', 9, 'Thriller', 'Johnathan Demme', 'A young F.B.I. cadet must confide in an incarcerated and manipulative killer to receive his help on catching another serial killer who skins his victims.'),
(47, 'This is the End', '2013', 7, 'Comedy', 'Evan Goldberg, Seth Rogen', 'While attending a party at James Franco''s house, Seth Rogen, Jay Baruchel and many other celebrities are faced with the apocalypse.'),
(48, 'Troy', '2004', 8, 'Adventure', 'Wolfgang Petersen', 'An adaptation of Homer''s great epic, the film follows the assault on Troy by the united Greek forces and chronicles the fates of the men involved.'),
(49, 'Underworld', '2003', 7, 'Action', 'Len Wiseman', 'Selene, a beautiful vampire warrior, is entrenched in a war between the vampire and werewolf races. Although she is aligned with the vampires, she falls in love with Michael, a werewolf who longs for the war to end.'),
(50, 'Up', '2009', 8, 'Animation', 'Pete Docter, Bob Peterson', 'By tying thousands of balloons to his home, 78-year-old Carl sets out to fulfill his lifelong dream to see the wilds of South America. Russell, a wilderness explorer 70 years younger, inadvertently becomes a stowaway.'),
(51, 'V for Vendetta', '2005', 8, 'Crime', 'James McTeigue', 'A shadowy freedom fighter known only as "V" uses guerrilla tactics to fight against his terrorist, totalitarian society. Upon rescuing a girl from the secret police, he also finds his best chance at having an ally.'),
(52, 'Van Helsing', '2004', 7, 'Adventure', 'Stephen Sommers', 'The notorious monster hunter is sent to Transylvania to stop Count Dracula who is using Dr. Frankenstein''s research and a werewolf for some sinister purpose.'),
(53, 'Wall-E', '2008', 9, 'Animation', 'Andrew Stanton', 'In the distant future, a small waste collecting robot inadvertently embarks on a space journey that will ultimately decide the fate of mankind.'),
(54, 'Watchmen', '2009', 7, 'Superhero', 'Zack Snyder', 'In an alternate 1985 where former superheroes exist, the murder of a colleague sends active vigilante Rorschach into his own sprawling investigation, uncovering something that could completely change the course of history as we know it.'),
(55, 'X-Men', '2000', 7, 'Sci-Fi', 'Bryan Singer', 'Two mutants come to a private academy for their kind whose resident superhero team must oppose a terrorist organization with similar powers.'),
(56, 'XXX', '2002', 6, 'Action', 'Rob Cohen', 'Xander Cage is an extreme sports athelete recruited by the government on a special mission.'),
(57, 'You Don''t Mess With The Zohan', '2008', 7, 'Comedy', 'Dennis Dugan', 'An Israeli Special Forces Soldier fakes his death so he can re-emerge in New York City as a hair stylist.'),
(58, 'You Got Served', '2004', 5, 'Drama', 'Chris Stokes', 'In order to achieve their dream of opening a recording studio, two friends (Omarion, Houston) must first win their city''s dance contest -- a fierce competition that pits them against a group of tough street dancers.'),
(59, 'Zodiac', '2007', 8, 'Crime', 'David Fincher', 'A San Francisco cartoonist becomes an amateur detective obsessed with tracking down the Zodiac killer.'),
(60, 'Zombieland', '2009', 8, 'Comedy', 'Ruben Fleischer', 'A shy student trying to reach his family in Ohio, and a gun-toting tough guy trying to find the Last Twinkie and a pair of sisters trying to get to an amusement park join forces to travel across a zombie-filled America.');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
