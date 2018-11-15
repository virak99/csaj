-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 16, 2018 at 12:30 AM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `csaj`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

DROP TABLE IF EXISTS `blogs`;
CREATE TABLE IF NOT EXISTS `blogs` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `body_en` text NOT NULL,
  `body_jp` text NOT NULL,
  `body_kh` text NOT NULL,
  `gallery` int(10) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `body_en`, `body_jp`, `body_kh`, `gallery`, `date`) VALUES
(1, '\r\nCross Cultural Communication in SETAGAYA 2018', 'On 10th Feb 2018, Cambodia Students Association in Japan had a precious opportunity to attend the cross-cultural understanding event at Satagaya Ku, Tokyo, Japan. Meanwhile, we would like to show our sincerest thanks for the organiser and the annual invitation. We could meet with people from various backgrounds including the ambassadors from various countries and representatives of various institutions. Moreover, we got a chance to show the wonderfulness of our Khmer culture to Japanese and other 9 participated countries by wearing traditional clothes and featuring the ancient souvenirs. It was very crucial for Cambodian students to understand and respect the differences in each culture. We learnt how to make origami (Japanese style of how to fold a paper), how to wear Kimono Japanese traditional clothes, saw the traditional dancing performances and conversed with other people. We firmly believed that this event is not only drawing the presence of people from other countries, but also showing the cooperation with each other for the sake of peace and promote international relation regardless of the distinguish cultures and backgrounds.', '2018年2月10日、在日カンボジア留学生協会関東支部では、東京都世田谷区より異文化交流会イベント参加のお招きを頂きました。 毎年主催者様から心のこもった招待状を頂き感謝に堪えません。\r\n各国大使を始め様々な協会からご臨席頂いた方々とお目にかかって、交流の機会を持つことが出来ました。\r\n学生たちはクメール伝統文化に依る民族衣装を着てカンボジアのお土産品を紹介することにより、日本を始め他の９か国の参加者の方々に華麗なるクメール文化を\r\nアピールさせて頂きました。カンボジア留学生たちにとって異文化を学び尊重することはとても大切なことです。\r\nさらに折り紙の折り方や着物の着付けを学んだり、日本の伝統的な舞踏を鑑賞したりしてうちとけて話す中、さらに交流が深まりました。\r\nこのイベントの開催は他の国の人々の現状を理解するに留まらず、平和に向けてお互いに協力し合い文化や国の背景の違いに左右されずに国際関係を築く上で堅固たる確信をしております。', 'កាលពីថ្ងៃទី ១០ កុម្ភះ ឆ្នាំ២០១៨ សមាគមនិស្សិតកម្ពុជាប្រចាំតំបន់កាន់តូមានឱកាសចូលរួម ក្នុងពិធីយល់ដឹងពីទំនាក់ទំនងឆ្លងវប្បធម៌ដែលប្រារព្ធនៅក្នុងខ័ណ្ឌសេតាកាយ៉ា នៃទីក្រុងតូក្យូ ប្រទេសជប៉ុន ។ ពួកយើងពិតជាអរគុណចំពោះអ្នកដែលរៀបចំកម្មវិធីនៃខ័ណ្ឌសេតាកាយ៉ា សម្រាប់ការអញ្ជើញចូលរួមជារៀងរាល់ឆ្នាំ និង អរគុណ សម្រាប់ឱកាសដែលអាចជួបជាមួយនឹងអ្នកចូលរួមដទៃៗទៀតដែលជាអគ្គរាជទូតមកពីបណ្តាប្រទេសនានានិងអ្នកតំណាងនៃស្ថាប័នផ្សេងៗផងដែរ។ លើសពីនេះទៅទៀត ពួកយើងក៏មានឱកាសបង្ហាញពីវប្បធម៌ខ្មែរដ៏បវរនៃយើង ដូចជាការស្លៀកសំលៀកបំពាក់ប្រពៃណីខ្មែរ ការដាក់បង្ហាញវត្ថុអនុស្សាវរីយ៍ ទៅកាន់ជនជាតិជប៉ុន និង បណ្តាប្រទេសទាំង៩ទៀតដែលបានចូលរួម។  វាជាការមួយសំខាន់ដែលនិស្សិតខ្មែរអាចរៀនសូត្រយល់ដឹង និង គោរពពីភាពខុសៗគ្នានៃវប្បធម៌ដទៃ ។ ក្នុងនោះផងដែរំួកយើងបានររៀនអំពី Origami របៀបបត់ក្រដាសជារូបផ្សេងៗតាមរបៀបជប៉ុន របៀបនៃការស្លៀកសំលៀកបំពាក់ប្រពៃណីជប៉ុន ការសម្តែងរបាំប្រពៃណី និង ការសំណេះសំណាល ជាដើម។ ពួកយើងជឿថា កម្មវិធីដែលប្រារព្ធឡើងនេះមិនមែនគ្រាន់តែជាការបង្ហាញវត្តមានរបស់អ្នកចូលរួមនោះទេ តែជាសញ្ញានៃការរួបរួមគ្នាដើម្បីសន្តិភាព និង លើកកម្ពស់ទំនាក់ទំនងអន្តរជាតិ ទោះបីជាពួកយើងមានវប្បធម៌ខុសគ្នាក៏ដោយ។', 1, '2018-02-10'),
(2, 'CSAJ committee members\'s first meeting', 'On 13-Jan-2018, Cambodian Students Association in Japan opened its first meeting in order to create the opportunity for both old and new members to get to know each other, to explain about the principles, to introduce annual activities, as well as the procedure of the association. In addition, we reviewed the activities of last year and accepted various feedback to reduce mistakes and committed to well handled this year\'s activities.', '', 'នៅថ្ងៃទី១៣មករា២០១៨ សមាគមនិស្សិតខ្មែរនៅជប៉ុនបានបើកអង្គប្រជ៊ំលើកដំបូងដើម្បីអោយសមាជិកទាំងចាស់ និង ទាំងថ្មីមានឱកាស ស្គាល់គ្នា ពន្យល់ពីគោលការណ៍ សកម្មភាពនិងរបៀបរបបនៃដំណេីរការរបស់សមាគម ។ ក្នុងនោះផងដែរ ពួកយេីង ក៏បានពិនិត្យឡេីងវិញនូវរាល់សកម្មភាពពីឆ្នាំមុន និងទទួលយកយោលបល់ផ្សេងៗដេីម្បី កាត់បន្ថយកំហុសនិងដឹកនាំ រៀបចំ ផែនការសកម្មភាពឆ្នាំនេះអោយរឹតតែល្អប្រសេីរឡេីង ។', 2, '2018-01-13'),
(3, '\r\nH.E. Ambassador Chea Kimtha\'s meeting with new committee members (2018)', 'Thank to H.E. Ambassador Chea Kimtha, who has allowed new committee members of Cambodian Students Association 2018 to pay a courtesy call at Royal Embassy of Cambodia in Japan. In the meeting, H.E. Ambassador has offered us the warm welcome with snack to the student group, especially many good advice for conducting the activities of association. More over, H.E Ambassador will continue to support with both spirit and material to student association\'s activities, and plus determination of student group as an indicator to lead our Cambodian students association to get more success in the future.', '', 'សូមអរគុណដល់លោកជំទាវឯកអគ្គរាជទូត ជា គឹមថា ដែលបានអនុញាតអោយគណៈកម្មាធិការថ្មីរបស់សមាគមនិស្សិតខ្មែរឆ្នាំ២០១៨ចូលសម្តែងការគួរសមជាលេីកដំបូងនៅស្ថានទូតកម្ពុជា ប្រចាំប្រទេសជប៉ុន។ នៅក្នុងជំនួបនេះ លោកជំទាវឯកអគ្គរាជទូតបានទទួលរាក់ទាក់ ស្វាគមន៌យ៉ាងកក់ក្តៅ រួមជាមួយអាហារសម្រន់ទៅកាន់ក្រុមនិស្សិតជាពិសេសដំបូន្មានល្អៗសំរាប់ដឹកនាំសកម្មភាពសមាគម។លើសពីនេះទៅទៀតលោកជំទាវឯកអគ្គរាជទូតនឹងបន្តជួយជ្រោមជ្រែងសកម្មភាពរបស់សមាគមនិស្សិតទាំងស្មារតីនិងសំភារៈ ផ្គួបផ្សំនឹងប្តេជ្ងាចិត្តប្រឹងប្រែងបន្ថែមទៀតរបស់ក្រុមនិស្សិតប្រៀបបីដូចជាសូចនាករ ដែលនាំអោយការដឹកនាំរបស់សមាគមនិស្សិតខ្មែរទៅរកភាពជោគជ័យ។', 3, '2017-12-27'),
(4, 'CSAJ Year-End Party 2017', 'On December 24, 2017, Cambodian Students Association in Japan-Kanto region (CSAK) hosted its general election and year-end party at Morishita Bunka Center, Tokyo. There were the representatives of Royal Embassy of Cambodia in Japan, the Japanese sponsor’s companies and many Khmer students participated in the events.\r\n\r\nIn the election section, Mr. KAN PHANNARITH, a master degree student for Chiba University, was elected with 100% votes for the next president of CSAK 2018. President-elect made a commitment to continue to make the CSAJ and CSAK activities successful with the motto of “Challenging for the new success.” We would like to congratulate him and wish his team a fruitful success.\r\n\r\nThere were over 100 participants joined and enjoyed Khmer food and deserts, lucky draw as well as Khmer social dance in the year-end party section. Certificates of appreciation to the sponsors and members of the committee of students association were also presented in the party.', '', 'នាថ្ងៃទី២៤ ខែធ្នូ ឆ្នាំ២០១៧ សមាគមនិស្សិតខ្មែរប្រចាំតំបន់កាន់តូ ប្រទេសជប៉ុន បានប្រារព្ធពិធីបោះឆ្នោតជ្រើសរើសប្រធានអណត្តថ្មី និងពិធីជប់លៀងបំណាច់ឆ្នាំ នៅមជ្ឈមណ្ឌលវប្បធម៌ ម៉ូរីស៊ីតា ក្នុងទីក្រុងតូក្យូ។ មានតំណាងស្ថានទូតខ្មែរប្រចាំទេសជប៉ុន ក្រុមហ៊ុនឧបត្ថម្ភជប៉ុន និងនិស្សិតខ្មែរជាច្រើន បានចូលរួមក្នុងកម្មវិធីខាងលើ។\r\n\r\nនៅក្នុងពិធីបោះឆ្នោត លោក កាន់ ផានណារិទ្ធ ដែលជានិស្សិតថ្នាក់អនុបណ្ឌិត នៃសាកលវិទ្យាល័យឆិបាក់ បានជាប់ឆ្នោតជាប្រធានថ្មីដោយសំលេងគាំទ្រ ១០០% ដើម្បីដឹកនាំសមាគមឆ្នាំ២០១៨។ ប្រធានជាប់ឆ្នោតថ្មីបានធ្វើការសន្យាថា នឹងបន្តដឹកនាំសមាគមនិស្សិតខ្មែរអោយបានជោគជ័យ ក្រោមពាក្យថា \"Challenging for the new success\" ។ យើងខ្ញុំសូមអបអរសាទ និងជូនពរ ក្រុមថ្មីអោយទទួលបាននូវជោគជ័យជាផ្លែផ្កាបន្តទៀត។\r\n\r\nមានភ្ញៀវកិត្តិយសជាង ១០០នាក់ បានចូលរួមកំសាន្តជាមួយនិងការពិសារ ម្ហូប និងបង្អែមខ្មែរ ការចាប់ឆ្នោតរង្វាន់ ព្រមទាំងរាំកំសាន្ត នៅក្នុងកម្មវិធីជប់លៀងបំណាច់ឆ្នាំ ខាងលើនេះ។ នៅក្នុងនោះ ក៏មានការចែកប័ណ្ណសរសើរ ជូនក្រុមហ៊ុនឧបត្ថម្ភ និងសមាជិកគណ:កម្មការសមាគមផងដែរ។', 4, '2017-12-24');

-- --------------------------------------------------------

--
-- Table structure for table `commitees`
--

DROP TABLE IF EXISTS `commitees`;
CREATE TABLE IF NOT EXISTS `commitees` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `year` int(4) NOT NULL,
  `position` varchar(100) NOT NULL,
  `school` varchar(100) NOT NULL,
  `major` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=51 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `commitees`
--

INSERT INTO `commitees` (`id`, `name`, `year`, `position`, `school`, `major`, `email`) VALUES
(1, 'Mr. KAN PHANNARITH', 2018, 'President of CSAJ & CSAK', 'Chiba University', 'Architecture', 'phannarith.kan@gmail.com'),
(2, 'Ms. PHY LYHOUNG', 2018, 'President of KSAK', 'Kindai University', 'Business Administration', 'phylyhoung11@gmail.com'),
(3, 'Ms. EAN Chhorida', 2018, 'President Of CSAN', 'Nagoya University', 'Law', 'rida.rule@gmail.com'),
(4, 'Mr. SENG Sovath', 2018, 'President Of CSAH', 'Hiroshima University', 'Major in Educational Development', 'seng.sovath@moeys.gov.kh'),
(5, 'Mr. MENG Phalkong', 2018, 'Vice President of CSAJ & CSAK', 'The University of Tokyo', 'Civil Engineering', 'menykony@gmail.com'),
(6, 'Ms. Noeun Monyneath', 2018, 'Secretary', 'Musashino University', 'Global Business', 's1617507@stu.musashino-u.ac.jp'),
(7, 'Mr. VUTHEA VONG', 2018, 'Academic Officer', 'The University of Tokyo', 'Electric and Electronic', 'vutheavong.kh@gmail.com'),
(8, 'Ms. PHOU SOTHEAROTH', 2018, 'Academic Officer', 'Toyo University', 'Regional Development Studies', 'sothearothphou@yahoo.com'),
(9, 'Ms. SUN SREYCHOU', 2018, 'Academic Officer', 'Kyoto University', 'MBA', 'sreychou_sun@yahoo.com'),
(10, 'Mr. OU CHOMRONG', 2018, 'Academic Officer', 'Tokyo Institute of Technology', 'Electrical Engineering', 'ou_chomrong@yahoo.com'),
(11, 'Mr. SENG CHEYVUTH', 2018, 'Academic Officer', 'Tokyo Institute of Technology', 'Science Education', 'cheyvuth@yahoo.com'),
(12, 'Mr. HAY CHANTHOL', 2018, 'Academic Officer', 'The University of Tokyo', 'Economics', 'hchanthol99@yahoo.com'),
(13, 'Mr. CHOUP Ratha', 2018, 'Public Relation Officer', 'Teikyo University', 'Business Administration', 'ratha.choup@gmail.com'),
(14, 'Ms. Soth Boramey', 2018, 'Public Relation Officer', 'Showa Women\'s University', 'Japanese Literature', 'boramey.soth@yahoo.com'),
(15, 'Ms. Un Somonea', 2018, 'Public Relation Officer', 'Showa Women\'s University', 'Japanese Literature', 'somoneaun.neko@gmail.com'),
(16, 'Ms. Soy Chhech Houng', 2018, 'Public Relation Officer', 'Teikyo University', 'Economics', 'soychhechhoung@gmail.com'),
(17, 'Ms. Ly Seam', 2018, 'Public Relation Officer', 'University of Electro-Communications', 'Electrical Engineering', 'lyseam88@gmail.com'),
(18, 'Ms. CHEM Solinda', 2018, 'Financial Officer', 'Teikyo university', 'Business Management', 'solinda18@yahoo.com'),
(19, 'Mr. Vong Virak', 2018, 'IT Officer', 'University of Electro-Communications', 'Information Technology', 'vongvirak9@gmail.com'),
(20, 'Mr. Borann Chanrathnak', 2018, 'IT Officer', 'Gunma University', 'Information Science', 'borannchanrathnak@gmail.com'),
(21, 'Mr. Choeng Horleang', 2018, 'IT Officer', 'Tokai University', 'Media Information', 'horleangchoeng@gmail.com'),
(22, 'Mr. Nann Kavdavid', 2018, 'IT Officer', 'University of Electro-Communications', 'Information Technology', 'kavdavidnann1993@gmail.com'),
(23, 'Mr. Him Chanrith', 2018, 'Student Service Officer', 'Seigakuin University', 'Political Economy', 'himchanrith2017@gmail.com'),
(24, 'Mr. NGUON Tola', 2018, 'Student Service Officer', 'Chiba University', 'Civil Engineering', 'nguon.tola@yahoo.com'),
(25, 'Mr. PHANG PHENPISETH', 2018, 'Student Service Officer', 'Chiba University', 'Civil Engineering', 'piseth_phangphen@yahoo.com'),
(26, 'Mr. NY VANNAT', 2018, 'Student Service Officer', 'Chiba university', 'Architecture', 'vannatny@gmail.com'),
(27, 'Mr. HOEUR Nythanel', 2018, 'Student Service Officer', 'Chiba university', 'Electronic and Electrical', 'nythanelhoeur@gmail.com'),
(28, 'Mr. PENG Eakkoung', 2018, 'Student Service Officer', 'Meiji University', 'Business Administration', 'yee.koung@gmail.com'),
(29, 'Mr. CHAN PANHA', 2018, 'Cultural Officer', 'International Conversation Academy', 'Japanese Literature', 'panhafunnyboy@gmail.com'),
(30, 'Mr. SEN SOSRY', 2018, 'Cultural Officer', 'International Conversation Academy', 'Japanese Literature', 'sosrysen@gmail.com'),
(31, 'Ms. PAL SREYVAN', 2018, 'Cultural Officer', 'Nihon Wellness Sport University', 'Japanese Literature', 'palsreyvan@gmail.com'),
(32, 'Ms. MON HUYLIN', 2018, 'Cultural Officer', 'Nihon Wellness Sport University', 'Japanese Literature', 'Huylin18@gmail.com'),
(33, 'Mr. LIM SENGLAY', 2018, 'Cultural Officer', 'Shinwa Academy School', 'Japanese Literature', 'senglaylim999@gmail.com'),
(34, 'Ms. SOEUNPISAL SEYHA', 2018, 'Cultural Officer', 'International Conversation Academy', 'Japanese Literature', 'Nitchocco@gmail.com'),
(35, 'Ms. TRY SIVNEANG', 2018, 'Cultural Officer', 'Nihon Wellness Sport University', 'Japanese Literature', 'Kimhuang010@gmail.com'),
(36, 'Ms. Reach sovanreaksa', 2018, 'Cultural Officer', 'Showa women’s university', 'Japanese Literature', 'reachsovanreaksa@gmail.com'),
(37, 'Ms. Ouk cheata', 2018, 'Cultural Officer', 'Showa women’s university', 'Japanese Literature', 'N/A'),
(38, 'Mr. MORK PISEY', 2018, 'Cultural Officer', 'Yokohama National University', 'Japanese Literature', 'pisey_mork@yahoo.com'),
(39, 'Mr. CHENG Rathborith', 2018, 'General Assistant', 'Waseda University', 'Petrology and Geochemistry', 'cheng_rathborith@yahoo.com'),
(40, 'Ms. CHENDA MALINA', 2018, 'General Assistant', 'Japanese Language School', 'Economics', 'malina120812@gmail.com'),
(41, 'Ms. Mork Malay', 2018, 'General Assistant', 'N/A', 'N/A', 'malay_mork@yahoo.com'),
(42, 'Ms. SOK SEREIRATHANA', 2018, 'General Assistant', 'Funabashi Joho-Bijinesu Collage of Technology', 'Information Technology', 'soksereirathana@gmail.com'),
(43, 'Ms. SAM Channimol', 2018, 'General Assistant', 'N/A', 'N/A', 's.channimol@gmail.com'),
(44, 'Mr. NOP Visal', 2018, 'Senior Advisor', 'Universtiy of Tsukuba', 'Japan\'s Diplomacy', 'visaalnop@gmail.com'),
(45, 'Mr. UK Sovannara', 2018, 'Senior Advisor', 'Tokyo Institute of Technology', 'Civil and Environmental Engineering', 'sovannara_itcifl@yahoo.com'),
(46, 'Mr. YEM Vibol', 2018, 'Senior Advisor', 'University of Tsukuba', 'Systems and Information Engineering', 'yemvibol@yahoo.com'),
(47, 'Mr. PHANN Vannty', 2018, 'Senior Advisor', 'University of Tsukuba', 'Political and Economic Policy', 'pvannty@gmail.com'),
(48, 'Mr. HORN Theara', 2018, 'Senior Advisor', 'N/A', 'Economics', 'horntheara@gmail.com'),
(49, 'Mr. CHHOEUNG Taisour', 2018, 'Senior Advisor', 'N/A', 'Civil Engineering', 'sour_tai@yahoo.com'),
(50, 'Mr. UNG Porsry', 2018, 'Senior Advisor', 'Tokyo Institute of Technology', 'Bio-Engineering', 'ungporsry@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

DROP TABLE IF EXISTS `gallery`;
CREATE TABLE IF NOT EXISTS `gallery` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `title`, `date`) VALUES
(1, '\r\nCross Cultural Communication in SETAGAYA 2018', '2018-02-10'),
(2, 'CSAJ committee members\'s first meeting', '2018-01-13'),
(3, 'H.E. Ambassador Chea Kimtha\'s meeting with new committee members (2018)', '2017-12-27'),
(4, 'CSAJ Year-End Party 2017', '2017-12-24');

-- --------------------------------------------------------

--
-- Table structure for table `links`
--

DROP TABLE IF EXISTS `links`;
CREATE TABLE IF NOT EXISTS `links` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `ul` int(10) NOT NULL,
  `sort` int(100) NOT NULL,
  `name_en` varchar(100) NOT NULL,
  `name_jp` varchar(100) NOT NULL,
  `name_kh` varchar(100) NOT NULL,
  `url` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `links`
--

INSERT INTO `links` (`id`, `ul`, `sort`, `name_en`, `name_jp`, `name_kh`, `url`) VALUES
(1, 1, 10, 'Old Site (Before 2018)', '', '', 'http://www.csaj-khmer.org/newsite'),
(2, 1, 20, 'Old Site (Before 2008)', '', '', 'http://www.csaj-khmer.org/2007/'),
(3, 1, 30, 'Mission', '', '', ''),
(4, 1, 40, 'Statutes and general meeting', '', '', ''),
(5, 1, 40, 'Our Representatives', '', '', ''),
(6, 1, 50, 'CSAJ Committee', '', '', ''),
(7, 1, 60, 'Sponsorship', '', '', ''),
(8, 1, 70, 'Facebook Page', '', '', 'https://www.facebook.com/csajpage'),
(9, 1, 80, 'Facebook Group', '', '', 'https://www.facebook.com/groups/csaj.org/'),
(10, 1, 90, 'CSAJ Activities', '', '', ''),
(11, 1, 100, 'Booklet 2010', '', '', 'http://www.csaj-khmer.org/newsite/pdf/2010/CSAJ_booklet_final.pdf'),
(12, 1, 110, 'Student Survey 2013', '', '', 'http://www.csaj-khmer.org/newsite/pdf/2013/CSAJ_Students_Census_2013.pdf'),
(13, 1, 120, 'Student Census 2011', '', '', 'Student Census 2011'),
(14, 1, 130, 'Student census 2010', '', '', 'http://www.csaj-khmer.org/newsite/pdf/2011/Student_Census_2010.pdf'),
(15, 2, 10, 'Purpose', '', '', ''),
(16, 2, 20, 'CSAJ Newsletter 2013', '', '', 'http://www.csaj-khmer.org/newsite/pdf/2013/CSAJ_Newsletter_2013.pdf'),
(17, 2, 30, 'Third Issue 2010', '', '', 'http://www.csaj-khmer.org/newsite/pdf/2010/Newsletter2010_3rd.pdf'),
(18, 2, 40, 'Second Issue 2010', '', '', 'http://www.csaj-khmer.org/newsite/pdf/2010/Newsletter2010_2nd.pdf'),
(19, 2, 50, 'First Issue 2010', '', '', 'http://www.csaj-khmer.org/newsite/pdf/2010/Newsletter2010_1st.pdf'),
(20, 2, 60, 'Third Issue 2009', '', '', 'http://www.csaj-khmer.org/newsite/pdf/2009/CSAJ_Newsletter_3rd_issue.pdf'),
(21, 2, 70, 'Second Issue 2009', '', '', 'http://www.csaj-khmer.org/newsite/pdf/2009/CSAJ_Newsletter_2nd%20Issue_12th_July_2009.pdf'),
(22, 2, 80, 'First Issue 2009', '', '', 'http://www.csaj-khmer.org/newsite/pdf/2009/CSAJ%20Newsletters-%20First%20Issue%20April%202009.pdf'),
(35, 3, 50, 'Royal Embassy of Cambodia in Japan', '', '', 'http://www.cambodianembassy.jp/web2/'),
(36, 3, 60, 'Embassy of Japan in Cambodia', '', '', 'http://www.kh.emb-japan.go.jp'),
(31, 3, 10, 'Academic Resources', '', '', ''),
(32, 3, 20, 'Scholarships', '', '', ''),
(33, 3, 30, 'Job Opportunity', '', '', ''),
(34, 3, 40, 'Tips for Newcomers', '', '', 'http://www.cambodianembassy.jp/web2/');

-- --------------------------------------------------------

--
-- Table structure for table `links_ul`
--

DROP TABLE IF EXISTS `links_ul`;
CREATE TABLE IF NOT EXISTS `links_ul` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `sort` int(100) NOT NULL,
  `name_en` varchar(100) NOT NULL,
  `name_jp` varchar(100) NOT NULL,
  `name_kh` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `links_ul`
--

INSERT INTO `links_ul` (`id`, `sort`, `name_en`, `name_jp`, `name_kh`) VALUES
(1, 1, 'About Us', '', ''),
(2, 2, 'Newsletter', '', ''),
(3, 3, 'Useful Links', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `sponsors`
--

DROP TABLE IF EXISTS `sponsors`;
CREATE TABLE IF NOT EXISTS `sponsors` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `sub` varchar(100) NOT NULL,
  `height` int(10) NOT NULL,
  `url` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sponsors`
--

INSERT INTO `sponsors` (`id`, `name`, `sub`, `height`, `url`) VALUES
(1, 'CREATIVE SOLUTIONS', '株式会社クリエーティブソリューションズ', 0, 'http://www.creativesolutions.jp/'),
(2, 'Career Japan Forum', 'DISCO Inc.', 50, 'https://www.career-jpn.com/en'),
(3, 'DRAGON GATE', '外国人留学生たもの就活サポート', 70, 'http://www.dragongate-career.jp/'),
(4, '浅井工務店', 'ASAI CONSTRUCTION CO.,LTD.', 0, 'http://www.asai-acc.co.jp/'),
(5, 'Business Partnet', '株式会社ビジネスパートナー', 0, 'http://www.b-partner.co.jp/'),
(6, 'WILLONE', 'INTERNATIONAL CAMBODIA CO.,LTD.', 0, 'http://willone-int.com/'),
(7, '富士古河E&C株式会社', 'Fuji Furukawa Engineering & Construction Co.,Ltd.', 60, 'https://www.ffec.co.jp/'),
(8, 'Taica', '技術開発で人々の生活を豊かに', 100, 'http://taica.co.jp/');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
