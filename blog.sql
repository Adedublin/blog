-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2021 at 03:06 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `film`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `ID` int(100) NOT NULL,
  `Title` mediumtext NOT NULL,
  `Caption` mediumtext NOT NULL,
  `Image` mediumtext NOT NULL,
  `Blogdate` date NOT NULL,
  `Content` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`ID`, `Title`, `Caption`, `Image`, `Blogdate`, `Content`) VALUES
(9, 'YOUTH REVOLUTION', '#endsars', '9.jpg', '2021-05-27', 'sars is special anti-robbery squad, a department under the Nigeria police set up to deal with a rise of violent crimes. But since inception the unit has been linked withe torture, extra judicial killings and widespread abuses.\r\nOn October 8, 2020, people took to the street demanding an end to the brutality with the hashtag endsars (#endsars) which trended on twitter after an alleged video of sars killing someone wantonly. The government had earlier announced reforms to the unit in 2015, 2017 and 2019 but was not implemented.\r\nHowever, on October 20,2020, it was alleged that Nigeria army shot and killed many of the unarmed protesters the corollary is a local violent reactions and protests at the Nigeria embassy in may part of the world including Dublin, London America and South Africa.'),
(10, 'FAKE NEWS', 'Do not believe everything you read - By Adetunji', '10.jpg', '2021-05-27', 'Fake news is not new and has been around before the advent of the internet and has ability to affect ability to discern correct information (Monther Aldwairi, Ali Alwahed, 2018). Social media fake news about a  Comet Ping Pong, a pizza restaurant in northwest Washington, that it was harboring young children as sex slaves as part of a child abuse ring led by Hillary Clinton led to a gun attack from Edgar M. Welch, a 28­year­old father of two from Salisbury (Kang et al., 2016).\r\nIt can be argued that while online feedback on services such as feedback and reviews on a restaurant can be genuine, it can also be fake and results in negative impact. \r\n'),
(11, 'TECHNOLOGICAL DETERMINISM ', 'What Next?', '11.jpg', '2021-05-27', 'To understand social issues, social theories are engaged to try explaining the reason behind various phenomena in the society. These theories vary from one culture to the other. The relation between technology and change in the society has been theorized and established. Theory such as media determinism which is a type of technological determinism was proposed by Marshall McLuhan. This theory proposed that the property of the media determines the social outcome with one of his popular \"The medium is the message\" (cseweb.ucsd.edu, n.d.) \r\nIn the mass media era the binary theories that define the media are the technological determinism and instrumentalism determinism (White, 2014, p.109). Both technological and social determinism are forms of reductionism. Unlike holism theory which believes phenomena can only be explained as a whole, a reductionist theory simplifies complex phenomena to some simpler phenomena. (cseweb.ucsd.edu, n.d.)\r\n'),
(12, 'SOCIAL ROBOT', 'Looking into the future - By Adetunji', '12.jpg', '2021-05-27', 'Invention of robots have led to its usage and adaptation in the society. A growing area of robotics are robots known as social robots. Social robot is any independent robot that interacts and communicates with humans. Essentially every robot is a piece of machine. They can be mobile and manifest as physical entities with design made from electric motors, sensors, and synthetic body materials. Usage of social robots are widespread and engaged in various industries such as healthcare, manufacturing, among others. However it is beginning to be used in the restaurant industry (Rigie, 2018).'),
(13, 'SOCIAL MEDIA', 'What is it? - By Joe', '13.jpg', '2021-05-27', 'Media has evolved from the traditional analogue information to digital information and definition of social media is not always clear-cut. \r\nThe digital media widely used today can be associated with the development of the Internet in the 1960s, by the Advanced Research Projects Agency (ARPA) of the United States Department of Defense (Wikipedia, 2020a). Digital media can be defined as any kind of information broadcast through electronic machine or digital device. Sources of such digital information may be from websites, applications, video games, and much more. The format can be text, video, audio or photo while the content or what they are used for include e-book, blogs/articles, advertising, digital art such as YouTube, virtual reality, video games and social media networks such as Facebook, Instagram, twitter, LinkedIn(Goldberg, 2019).\r\n'),
(14, 'GREEN LIGHT', 'Only one life perhaps? - By Ken', '14.jpg', '2021-05-27', 'The green light of from a traffic indicates when it is safe for a vehicle to go. A driver can reasonably expect accident-free scenario if he goes on a green light. Color green is associated with growth, relaxation, peace, refreshing and harmony (Smith, n.d.). The black color as background is a symbol of the authority of the state. Black  being the absence of light is associated with power, fear, mystery, strength, authority, elegance, formality, death, and evil (Bourn, 2010). \r\nThe circle shape of the traffic light represents unbroken, undamaged, and wholeness. Since a circle has no beginning or end. The driver can expect perhaps a complete safety going when the light is green (Velarde, n.d.).\r\nThis photo was taken on December 10, 2020, at midnight in Swords, Co Dublin by Adetunji Adesemowo. \r\nReferences\r\nBourn, J. (2010) Meaning of the Color Black |. Bourn Creative. Available at: https://www.bourncreative.com/meaning-of-the-color-black/ (Accessed: 11 December 2020).\r\nSmith, K. Meaning Of Green: Color Psychology And Symbolism. https://www.sensationalcolor.com/. Available at: https://www.sensationalcolor.com/meaning-of-green/ (Accessed: 11 December 2020).\r\nVelarde, O. The Meaning of Shapes and How to Use Them Creatively in Your Designs. Visual Learning Center by Visme. Available at: https://visme.co/blog/geometric-meanings/ (Accessed: 11 December 2020).\r\n'),
(15, 'ANGER', 'Wait a minute...By Adetunji', '15.jpg', '2021-05-27', 'Sometimes a child\'s behavior affects one’s feelings and can cause anger. The facial expression shows the anger. The eyebrow pulled down and together, the eyes opened wide, vocal expression of frustration and the forward leaning posture are all the result of emotion of anger. (Dr. Ekman, n.d.). \r\nRed color is associated with emotion, jealousy, danger, fear, anger, and frustration (Smith, n.d.).\r\nThis photo was a selfie taken by Adetunji Adesemowo on the 10th of December 2020.\r\nReferences\r\nDr. Ekman. What Is Anger? | Feeling Anger. Paul Ekman Group. Available at: https://www.paulekman.com/universal-emotions/what-is-anger/ (Accessed: 11 December 2020).\r\nSmith, K. Meaning Of Red: Color Psychology And Symbolism. https://www.sensationalcolor.com/. Available at: https://www.sensationalcolor.com/?s=red/ (Accessed: 11 December 2020).\r\n\r\n'),
(16, 'TYPOGRAPHY', 'What do you see? - By Adetunji', '16.jpg', '2021-05-27', 'Like myself, many people believe tat typography and fonts are all but same but discovered they are different. What is seen is the typeface while what is used is the font.\r\n\r\nHere are four different types of fonts classification. A font can be serif style or sans serif style. San serif means without serif. Serif is the slight projection finishing off a stroke of a letter in certain typefaces. Furthermore, another classification is decorative style or script style. Serif style includes Glyphic Serifs, Clarendon Serifs , Slab Serifs, Transitional Serifs,and Neoclassical & Didone Serifs.(allan, n.d.)\r\n\r\nReferences\r\n\r\nallan,  haley. Type Classifications. Fonts.com. Available at: https://www.fonts.com/content/learning/fontology/level-1/type-anatomy/type-classifications (Accessed: 14 November 2020).\r\n\r\nLeaning, B. Typography Tutorial for Beginners: Everything You Need to Learn Typography Basics. Available at: https://blog.hubspot.com/marketing/typography-terms-introduction (Accessed: 14 November 2020).'),
(17, 'COLORS', 'Show me your true colors - By Jerry', '17.jpg', '2021-05-27', 'For any artwork of design to feel appealing and elegant selection of good colors cannot be overlooked. Colors arguably are believed to affect viewers mood, reaction and appreciation of an object. Artwork of design such as web design, pictures etc require best color combination to communicate for attraction.\r\n\r\nUsing color design principles and color associations are valuable in finding the best color combination.\r\n\r\nColor Wheel: Sir Isaac Newton developed the color wheel in 1666. Colors are categorized into the following:\r\n\r\nPrimary colors –Colors that cannot be derived from mixing other colors. These are Red, yellow and blue.\r\n\r\nSecondary Colors: Colors that can be derived from mixing primary colors. These are Green, orange and purple'),
(18, 'THANK YOU ', 'To all COVID 19 helpers - By Olu Isaiah', '18.jpg', '2021-05-27', 'Thank you to every covid-19 helper for the sacrifices you make, every day and especially during this pandemic. Indeed, your dedication, commitment and courage deserve our deepest gratitude and appreciation. In history You have written your names in gold.'),
(19, 'SURVEILLANCE', 'They\'re spying on me through my phone\'  - By Adetunji', '19.jpg', '2021-05-27', 'A recurrent topic among many various scholars who reviewed the America scholar Shoshana Zuboff’s book “The Age of Surveillance Capitalism”, highlight her claim that a variant of capitalism known as surveillance capitalism exists. This is an undemocratic neo economy that turns human experience as free behavioral raw material for hidden commercial practices of extraction, prediction, and sales. The predictive capability of the technology that processed personal information from surveillance has the tendency of creating an “instrumentarian” society; the government can use the prediction to control society offline and online as it turns society into an instrument that are predictable (Mark J, 2020), (Kerry, 2019).');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
