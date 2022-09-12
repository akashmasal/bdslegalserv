-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2022 at 11:39 AM
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
-- Database: `bdslegalserv`
--

-- --------------------------------------------------------

--
-- Table structure for table `master_blogs`
--

CREATE TABLE `master_blogs` (
  `id` int(11) NOT NULL,
  `blog_author` varchar(255) NOT NULL,
  `blog_header` varchar(255) NOT NULL,
  `blog_short_description` text NOT NULL,
  `blog_content` text NOT NULL,
  `blog_image` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0 COMMENT 'Active = 0, Inactive = 1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `master_blogs`
--

INSERT INTO `master_blogs` (`id`, `blog_author`, `blog_header`, `blog_short_description`, `blog_content`, `blog_image`, `created_at`, `updated_at`, `status`) VALUES
(1, 'Suresh Patel', 'Ways to Derive Profit from your Patent', 'Turns out that the hot vegan cookie that you devoured and the aroma of freshly prepared cakes & bread that you enjoyed at the ‘Iyengar Bakery’ is not an outlet of the famous ‘Bangalore Iyenger Bakery’. Nor the rest of the bakeries who carry the name. In fact, the famous ‘Iyenger bakery’ that became synonymous with mouthwatering bakery goods, does not have any outlet.\n\nAll the ‘Bangalore Iyenger bakeries’ in Mumbai, which now is close to 400 stores, are in trouble now. They have been using the famous name and were riding on the back of the winning horse. But in an interview conducted by mid-day, the original owners from Bengaluru have voiced their concern over the misuse of the family name.', 'Turns out that the hot vegan cookie that you devoured and the aroma of freshly prepared cakes & bread that you enjoyed at the ‘Iyengar Bakery’ is not an outlet of the famous ‘Bangalore Iyenger Bakery’. Nor the rest of the bakeries who carry the name. In fact, the famous ‘Iyenger bakery’ that became synonymous with mouthwatering bakery goods, does not have any outlet.\r\n<br>\r\nAll the ‘Bangalore Iyenger bakeries’ in Mumbai, which now is close to 400 stores, are in trouble now. They have been using the famous name and were riding on the back of the winning horse. But in an interview conducted by mid-day, the original owners from Bengaluru have voiced their concern over the misuse of the family name.\r\n<br>\r\n<p>Sridhar Iyenger (62), the original founder of the first and only Bangalore Iyenger Bakery, has now decided to safeguard their brand name ‘Iyenger Bakery’ along with the signature dishes. He already had the name trademarked but now the need of patenting the term ‘Iyenger Bakery’ to prevent further misuse of their trade name arose. Sridhar’s son Raman, has also said that those who want to continue using the name, can come under a franchise network.\r\n</p>\r\n<p>\r\nReminiscing over the early days of the ‘Iyenger Bakery’, Sridhar told mid-day, “I was fortunate to work with HS Thirumalachar for a decade (from 1970 to 1980) when I joined his VB Bakery, which was started in 1950. Thriumalachar learnt the art of making bread from an Englishman. Later he started VB Bakery and Surya bakery, both exist even today. In 1980, I moved out of VB and started my own bakery. I named it ‘Iyengar Bakery’ and traditionally sold rusk, bread, and butter biscuit. It was Thirumalachar himself who had graced the opening ceremony of first Iyengar Bakery outlet.”\r\n</p>\r\n<p>\r\nMany Iyenger bakers who learned the art of making bread from Thirumalachar, started their own bakeries, spreading into the four southern states. But now due to education and the lack of interest in the bakery business from the second generation, many stores are closed now.\r\n</p>\r\n<h4>How the original owners came to know about all this?</h4>\r\n<br>\r\n<p>“A couple of years ago, some tourists and migrants from Mumbai and Maharashtra had visited our outlet and asked for rawa cake and kara roll (both items never made in any Iyengar outlet in Bangalore). When we asked them where they had seen these items before, they said Mumbai. Later, we found there were many outlets using our title without any permission. Hence we decided to get the patent,” said Raman, adding, “I am in touch with my lawyers to ensure we get a proper franchise policy worked out and if needed, will not hesitate to issue notices to those violating our rights. This will help to streamline the entire networking. The public can’t be misguided. We will come up with a logo that will also be registered.”</p>\r\n<p>The owners added that the Mumbai bakeries will be spared if they fall in line and become franchisees.</p>\r\n<h4>How did Iyenger bakery come to Mumbai?</h4>\r\n<p>33-year-old Harish Shetty first tasted ‘Dil Pasand’ from the Bangalore Iyenger Bakery in 2000 and came up with the idea. And in 2005, he opened his first outlet in Mumbai under the same brand name. And today, Shetty runs a total eight ‘Bangalore Iyenger Bakery’ outlets in Navi Mumbai and one in Parel. He learned the art of baking bread and cakes by the Bangalore owner when he quit his 8,000 INR month job which didn\'t help him take care of his family.</p>\r\n<p>Shetty said, “Mumbai and its suburbs never had an Iyengar Bakery. So we decided to set up a bakery of our own but had no money with us. We took loans from suppliers and on the promise of paying back in installments, opened the first ‘Bangalore Iyengar Bakery’ in June 2005.”</p>\r\n<p>Mid-day told Harish Shetty about the decision taken by Raman and Sridhar. To which he responded, “It will be good if they start the initiative and help us get organized. The major problem is hygiene and quality. Even I face the problem of people mistaking other outlets in Mumbai for my branches.”</p>\r\n<h4>Why the trade name has so much importance?</h4>\r\n<p>Being a well-known brand name, the business owners knew that by investing just a few lakhs, the local market can be captured. The everyday products gave a profit margin of 5 to 7 percent and the cakes fetched around 35 percent of profit.Shetty said, “With a name like Iyengar Bakery, people tend to believe it is a pure vegetarian bakery as the name seems to suggest it is run by Brahmins, but the truth is that we even take bulk order for making plum cakes with eggs during Christmas. Egg puffs are made on order”.</p>\r\n<h4>What the food authorities have to say about all this?</h4>\r\n<p>“As far our department is concerned, these are like any other bakery outlets and if they are found to be violating any of license including FSSAI norms, then appropriate action can be taken during our checks,” said the FDA officials.</p>\r\n<p>They said that there was no scope for ambiguity. CD Salunke, Joint Commissioner (Food), Maharashtra also said that the actual owners can take appropriate action via the courts if their registered trademark is being misused.</p>\r\n<p>This whole incident should be taken as an example. \r\n<b>Never fail to trademark or patent your ideas so that it can never be misused</b>. Even if you own a small business, all the legalities must be followed.</p>\r\n<h4>How we can help you?</h4>\r\n<p>We are one of the best patent registration service providers in Mumbai. We will help you with all the process and also guide you after the registration.\r\n\r\nBDS Legal Services is a leading national legal firm in India comprising over numerous professionals, with offices in Mumbai (Headquarter) and Pune. BDS Legal Services was set up in 2012 and has since established an excellent reputation for its integrity and value-based proactive, pragmatic and innovative legal advice and its ability to help clients effectively traverse the complicated legal and regulatory regime in India. The mission of the Firm is to provide outstanding legal solutions in the chosen practice areas with a strong emphasis on ethics. Clients benefit from the expertise and experience as a large firm while still enjoying the privilege of personal attention and responsiveness of a small firm. Our Practice areas are – IPR, Secretarial, Legal, Company Registration, Annual Filings, Returns and Tax.</p>', 'assets/uploads/images3.jpg', '2022-09-12 02:13:52pm', '', 0),
(2, 'Aditi Shetye', 'Advantages of Patent Registration in India', 'Patent Registration in India is one of the very important registrations and is often perceived that Patent is only for researchers and scientists, this is not true always. Everyone has a creative mind', '<p>Patent Registration in India is one of the very important registrations and is often perceived that Patent is only\r\n    for researchers and scientists, this is not true always. Everyone has a creative mind including an illiterate person\r\n    who is trained by his own experience and even his invention should be legally treasured.\r\n</p>\r\n<p>\r\n    Patent is accorded when the invention is found to be new, novel, contain an inventive step, and capable of\r\n    industrial application.\r\n</p>\r\n<p><b>New</b> means that the invention does not exists in the initial state of the art relating to a particular\r\n    technical field.</p>\r\n<p><b>Novelty </b> means that the invention is not yet publicly disclosed, anywhere in the world, before the date of\r\n    filing of the patent application.</p>\r\n<p><b>Inventive Step</b> means that the invention should not be anticipated by a person skilled in that prior art.</p>\r\n<p><b>Industrial use</b> is a criterion which has to be accomplished before grant of Patent and should be used in\r\n    particular field; not be general.</p>\r\n\r\n<h4>Here are some advantages of Patent Registration:</h4>\r\n\r\n<h4><u>Popularizing Innovation</u></h4>\r\n<p>Patents promote innovation through many benefits such as through provision of limited monopolies, reward to inventors\r\n    for the effort & time as by creating new products, improved goods, and services that meet the social requirements &\r\n    also enables researchers to safeguard their intellectual property and the possibility of maximizing their\r\n    innovations which are an important component of innovation procedure\r\n\r\n    For scientific innovations and technology, such as academic recognition and promotion, a potential for fiscal\r\n    returns adds an incentive to the rewards which are enabled by the patents. Incentives play a very important role\r\n    because as private investors, without incentives, may find reluctant to invest, which can further result a great\r\n    failure to develop and also lead to exploitation of new technology.</p>\r\n\r\n<h4>Use of Resources and Knowledge Sharing</h4>\r\n<p>A patent uses the details of patented invention which is placed in the public domain in return for the right to\r\n    exploit the innovation in order to promote knowledge sharing & resources. The disclosure details of the patent\r\n    application are based on the concepts and this knowledge sharing helps patent to lessen the duplication of research\r\n    efforts of inventors so as they can be empowered to find ways to revamp.</p>\r\n\r\n<h4>Investment and economic growth</h4>\r\n<p>A patent registration can do wonders for an organization by capitalizing on the market strength of its inventions in\r\n    which small companies can employ patents to appeal financial backing. It can even stimulate the economic growth of\r\n    the national industry as the local companies that hold patents may captivate foreign investments and develop\r\n    products too for export purpose. Patent exploitation also plays an important role when you invest in research and\r\n    development projects which later enhance the commercial and industrial profit and growth.</p>\r\n\r\n<p>We, at BDS Legal Service, make the process easy and successful with zero risk and help you with Patent registration\r\n    services with simple and easy process. We genuinely believe that the entire important step must be done correctly\r\n    and smoothly. Online patent registration in India is very easy if you choose us. We will help you in getting your\r\n    documents prepared online. All you have to do is to drop us an email on our website or contact us through the phone\r\n    number. Let’s connect!</p>\r\n\r\n<h4>About BDS Legal Service :</h4>\r\n<p>BDS Legal Services is a leading national law firm in India comprising over numerous professionals, with offices in\r\n    Mumbai (Headquarter) and Pune. BDS Legal Services was set up in 2012 and has since established an excellent\r\n    reputation for its integrity and value based proactive, pragmatic and innovative legal advice and its ability to\r\n    help clients effectively traverse the complicated legal and regulatory regime in India. The mission of the Firm is\r\n    to provide outstanding legal solutions in the chosen practice areas with a strong emphasis on ethics. Clients\r\n    benefit from the expertise and experience as a large firm while still enjoying the privilege of personal attention\r\n    and responsiveness of a small firm. Our Practice areas are – IPR, Secretarial, Legal, Company Registration, Annual\r\n    Filings, Returns and Tax.</p>', 'assets/uploads/images4.jpg', '2022-09-12 03:06:50pm', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `master_blogs`
--
ALTER TABLE `master_blogs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `master_blogs`
--
ALTER TABLE `master_blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
