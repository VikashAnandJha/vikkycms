-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2021 at 09:33 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vikkycms`
--

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `avatar` varchar(500) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `about` longtext NOT NULL,
  `role` enum('ADMIN','EDITOR','AUTHOR','USER','SUBSCRIBER') NOT NULL DEFAULT 'USER',
  `status` enum('ACTIVE','BLOCKED') NOT NULL DEFAULT 'ACTIVE'
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`id`, `name`, `username`, `email`, `password`, `avatar`, `facebook`, `twitter`, `instagram`, `about`, `role`, `status`) VALUES
(1, 'Vikash', 'herculesxin', 'mailtovikashjha@gmail.com', 'jhajha22', '1805712864img3.jpg', '@facebook', '@twitter', '@instagram', 'about hercules@', 'ADMIN', 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT 0,
  `name` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `about` varchar(255) NOT NULL,
  `status` enum('ACTIVE','HIDDEN') NOT NULL DEFAULT 'ACTIVE',
  `avatar` varchar(255) NOT NULL,
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `name`, `url`, `about`, `status`, `avatar`, `created_by`) VALUES
(1, 0, 'Sample cat', 'sample-cat', 'sample about', 'ACTIVE', '', 0),
(2, 0, 'Featured', 'featured', 'Important things ', 'ACTIVE', '', -1),
(3, 0, 'Prelims', 'prelims', '', 'ACTIVE', '', -1),
(4, 0, 'Mains', 'mains', '', 'ACTIVE', '', -1);

-- --------------------------------------------------------

--
-- Table structure for table `cat_in_post`
--

CREATE TABLE `cat_in_post` (
  `id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

-- --------------------------------------------------------

--
-- Table structure for table `cms_admin`
--

CREATE TABLE `cms_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `cms_admin`
--

INSERT INTO `cms_admin` (`id`, `username`, `password`, `name`) VALUES
(1, 'vikashjha', 'jhajha22', 'Vikash Anand Jha');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `comment_text` longtext NOT NULL,
  `status` enum('APRROVED','PENDING','HIDDEN') NOT NULL DEFAULT 'PENDING',
  `created_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

-- --------------------------------------------------------

--
-- Table structure for table `menu_items`
--

CREATE TABLE `menu_items` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `menu_list_id` int(11) NOT NULL,
  `display_text` varchar(255) NOT NULL,
  `open_type` enum('POST','PAGE','LINK','CATEGORY','TAG') NOT NULL DEFAULT 'POST',
  `item_order` int(11) NOT NULL,
  `connected_data` varchar(255) NOT NULL,
  `status` enum('ACTIVE','HIDDEN') NOT NULL DEFAULT 'ACTIVE'
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `menu_items`
--

INSERT INTO `menu_items` (`id`, `parent_id`, `menu_list_id`, `display_text`, `open_type`, `item_order`, `connected_data`, `status`) VALUES
(1, 0, 1, 'About', 'PAGE', 1, '1', 'HIDDEN'),
(2, 0, 1, 'google', 'LINK', 0, 'http://google.com', 'HIDDEN'),
(3, 0, 1, 'Prelims', 'CATEGORY', 0, '3', 'ACTIVE'),
(4, 0, 1, 'Mains', 'CATEGORY', 0, '4', 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `menu_list`
--

CREATE TABLE `menu_list` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` enum('ACTIVE','HIDDEN') NOT NULL DEFAULT 'HIDDEN',
  `extra` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `menu_list`
--

INSERT INTO `menu_list` (`id`, `name`, `status`, `extra`) VALUES
(1, 'Primary Upper', 'ACTIVE', ''),
(2, 'test list', 'HIDDEN', '');

-- --------------------------------------------------------

--
-- Table structure for table `nav_header`
--

CREATE TABLE `nav_header` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `status` enum('ACTIVE','HIDDEN') NOT NULL DEFAULT 'HIDDEN',
  `extra` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `featured_image` varchar(255) NOT NULL,
  `views` int(11) NOT NULL,
  `status` enum('PUBLISHED','DRAFT','HIDDEN') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `url`, `content`, `featured_image`, `views`, `status`) VALUES
(1, 'how to be happy', 'how-to-be-happy11', '<p style=\"text-align: center; \"><font color=\"#000000\" style=\"background-color: rgb(255, 255, 0);\">helloooo</font></p><blockquote style=\"text-align: center; \"><font color=\"#000000\" style=\"background-color: rgb(255, 255, 0);\">now this is a blockQuote</font></blockquote><p style=\"text-align: center; \"><font color=\"#000000\" style=\"background-color: rgb(255, 255, 0);\"><br></font><img src=\"data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAABGAAD/4QMpaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjMtYzAxMSA2Ni4xNDU2NjEsIDIwMTIvMDIvMDYtMTQ6NTY6MjcgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjI4RTY5OEJBOTRCNDExRTdBRTNGOTFDNTA4MEM1N0QzIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjI4RTY5OEI5OTRCNDExRTdBRTNGOTFDNTA4MEM1N0QzIiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDUzYgV2luZG93cyI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOkExOUU4REI5NjAxNzExRTc5NjdDQkIxRTIyRDU1MEYxIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOkExOUU4REJBNjAxNzExRTc5NjdDQkIxRTIyRDU1MEYxIi8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+/+4ADkFkb2JlAGTAAAAAAf/bAIQABAMDAwMDBAMDBAYEAwQGBwUEBAUH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\" style=\"width: 25%;\" data-filename=\"img2.jpg\"></p><h1 style=\"text-align: left;\">h<span style=\"font-family: Impact;\">hjvgvg</span></h1>', '', 0, 'PUBLISHED');

-- --------------------------------------------------------

--
-- Table structure for table `pageviews`
--

CREATE TABLE `pageviews` (
  `id` int(11) NOT NULL,
  `data_id` int(11) NOT NULL,
  `type` enum('POST','PAGE') NOT NULL,
  `viewed_on` date NOT NULL,
  `view_ip` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `pageviews`
--

INSERT INTO `pageviews` (`id`, `data_id`, `type`, `viewed_on`, `view_ip`) VALUES
(5, 3, 'POST', '2021-09-04', '::1'),
(7, 0, 'POST', '2021-09-04', '::1'),
(8, 4, 'POST', '2021-09-04', '::1'),
(9, 5, 'POST', '2021-09-04', '::1'),
(10, 2, 'POST', '2021-09-04', '::1'),
(11, 3, 'POST', '2021-09-05', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `featured_image` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `status` enum('DRAFT','PENDING_PUBLISH','PUBLISHED','HIDDEN') NOT NULL DEFAULT 'DRAFT',
  `created_at` varchar(255) NOT NULL,
  `last_edit` varchar(255) NOT NULL,
  `author` int(11) NOT NULL,
  `views` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `cat_id`, `title`, `url`, `featured_image`, `content`, `status`, `created_at`, `last_edit`, `author`, `views`) VALUES
(3, 1, 'How to Be Happy: 25 Habits to Add to Your Routine', 'sample-post11', '1425518775kawaii-sushi-3-1600x680.jpg', '<h2>Challenge your negative thoughts.</h2><p> Socratic questioning is the process of challenging and changing irrational thoughts. Studies show that this method can reduce depression symptoms. The goal is to get you from a negative mindset (“I’m a failure.”) to a more positive one (“I’ve had a lot of success in my career. This is just one setback that doesn’t reflect on me. I can learn from it and be better.”) Here are some examples of questions you can ask yourself to challenge negative thinking.</p><p><br></p><p>First, write down your negative thought, such as “I’m having problems at work and am questioning my abilities.”</p><p><br></p><p>Then ask yourself: “What is the evidence for this thought?”</p><p>“Am I basing this on facts? Or feelings?”</p><p>“Could I be misinterpreting the situation?”</p><p>“How might other people view the situation differently?</p><p>“How might I view this situation if it happened to someone else?”</p><p>The bottom line: Negative thinking happens to all of us, but if we recognize it and challenge that thinking, we are taking a big step toward a happier life.</p><p><br></p><h2>Controlled Breathing</h2><p>Science is just beginning to provide evidence that the benefits of this ancient practice are real. Studies have found, for example, that breathing practices can help reduce symptoms associated with anxiety, insomnia, post-traumatic stress disorder, depression and attention deficit disorder. For centuries yogis have used breath control, or pranayama, to promote concentration and improve vitality. Buddha advocated breath-meditation as a way to reach enlightenment.</p><p><br></p><p>Try it.</p><h2>Rewrite Your Story</h2><p>Writing about oneself and personal experiences — and then rewriting your story — can lead to behavioral changes and improve happiness. (We already know that expressive writing can improve mood disorders and help reduce symptoms among cancer patients, among other health benefits.)</p><p><br></p><p>Some research suggests that writing in a personal journal for 15 minutes a day can lead to a boost in overall happiness and well-being, in part because it allows us to express our emotions, be mindful of our circumstances and resolve inner conflicts. Or you can take the next step and focus on one particular challenge you face, and write and rewrite that story.</p><p><br></p><p>We all have a personal narrative that shapes our view of the world and ourselves. But sometimes our inner voice doesn’t get it right. By writing and then editing our own stories, we can change our perceptions of ourselves and identify obstacles that stand in the way of our personal well-being. The process is similar to Socratic questioning (referenced above). Here’s a writing exercise:</p><p><br></p><p>Write a brief story about your struggle. I’m having money problems. I am having a hard time making friends in a new city. I’m never going to find love. I’m fighting with my spouse.</p><p>Now write a new story from the viewpoint of a neutral observer, or with the kind of encouragement you’d give a friend.&nbsp;</p><p>Money is a challenge but you can take steps to get yourself into financial shape.&nbsp;</p><p>Everyone struggles in their first year in a new city. Give it some time. Join some groups.&nbsp;</p><p>Don’t focus on finding love. Focus on meeting new people and having fun. The rest will follow.</p><p>Couples argue. Here’s what your situation looks like to a neutral observer.&nbsp;</p><p><br></p><p>Numerous studies show that writing and rewriting your story can move you out of your negative mindset and into a more positive view of life. “The idea here is getting people to come to terms with who they are, where they want to go,” said James Pennebaker, a psychology professor at the University of Texas who has pioneered much of the research on expressive writing.&nbsp; “I think of expressive writing as a life course correction.”</p><p><br></p><p>Get Moving</p><p>When people get up and move, even a little, they tend to be happier than when they are still. A study that tracked the movement and moods of cellphone users found that people reported the most happiness if they had been moving in the past 15 minutes than when they had been sitting or lying down. Most of the time it wasn’t rigorous activity but just gentle walking that left them in a good mood. Of course, we don’t know if moving makes you happy or if happy people just move more, but we do know that more activity goes hand-in-hand with better health and greater happiness.</p><p><br></p><p>Practice Optimism</p><p>Optimism is part genetic, part learned. Even if you were born into a family of gloomy Guses, you can still find your inner ray of sunshine. Optimism doesn’t mean ignoring the reality of a dire situation. After a job loss, for instance, many people may feel defeated and think, “I’ll never recover from this.” An optimist would acknowledge the challenge in a more hopeful way, saying, “This is going to be difficult, but it’s a chance to rethink my life goals and find work that truly makes me happy.”</p><p><br></p><p>And thinking positive thoughts and surrounding yourself with positive people really does help. Optimism, like pessimism, can be infectious. So make a point to hang out with optimistic people.</p>', 'PUBLISHED', '04-09-2021 04:10:44 AM', '04-09-2021 06:17:17 AM', -1, 5),
(4, 2, 'Sample Post for featured category', 'sample-post-for-featured-', '', '<p>test data</p>', 'PUBLISHED', '04-09-2021 14:28:41 PM', '04-09-2021 14:29:02 PM', -1, 1),
(5, 0, 'Todo', 'todo', '', '<h3 style=\"text-align: center; \"><font color=\"#000000\" style=\"background-color: rgb(255, 255, 0);\">Todo</font></h3><ul><li>search page</li><li>.htaccess for search page</li><li><font color=\"#000000\" style=\"background-color: rgb(255, 255, 0);\">करना है ki author wale ko author.php system aur search wale ko bhi .php system taki kam ho jaye aasaan</font><br></li></ul>', 'DRAFT', '04-09-2021 14:48:47 PM', '04-09-2021 23:06:26 PM', -1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `url`, `created_by`) VALUES
(4, 'Author name1', 'author-name1', -1);

-- --------------------------------------------------------

--
-- Table structure for table `tags_in_post`
--

CREATE TABLE `tags_in_post` (
  `id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

-- --------------------------------------------------------

--
-- Table structure for table `uploads`
--

CREATE TABLE `uploads` (
  `id` int(11) NOT NULL,
  `file` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `uploaded_by` int(11) NOT NULL,
  `uploaded_on` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `uploads`
--

INSERT INTO `uploads` (`id`, `file`, `type`, `uploaded_by`, `uploaded_on`) VALUES
(1, '60311779img3.jpg', 'IMAGE', -1, '02-09-2021 23:10 PM'),
(2, '1302417304logo-blue.png', 'IMAGE', -1, '02-09-2021 23:14 PM'),
(3, '2020603205prepupsc_logo.png', 'IMAGE', -1, '02-09-2021 23:19 PM'),
(4, '805002726vikkycmslogo_croped.png', 'IMAGE', -1, '02-09-2021 23:25 PM'),
(5, '656301531vikkycms_logo_small.png', 'IMAGE', -1, '02-09-2021 23:26 PM'),
(6, '703455815vikkycmslogo_croped.png', 'IMAGE', -1, '02-09-2021 23:27 PM'),
(7, '573884591vikkycms_logo_small.png', 'IMAGE', -1, '02-09-2021 23:27 PM'),
(8, '1874490996img3.jpg', 'IMAGE', -1, '03-09-2021 01:22 AM'),
(9, '1584225160img3.jpg', 'IMAGE', -1, '03-09-2021 01:23 AM'),
(10, '546970911img3.jpg', 'IMAGE', -1, '03-09-2021 01:23 AM'),
(11, '1805712864img3.jpg', 'IMAGE', -1, '03-09-2021 01:24 AM'),
(12, '422683312body-bg1.jpg', 'IMAGE', -1, '04-09-2021 05:15 AM'),
(13, '928020042body-bg1.jpg', 'IMAGE', -1, '04-09-2021 05:16 AM'),
(14, '355365349img6.jpg', 'IMAGE', -1, '04-09-2021 06:35 AM'),
(15, '1425518775kawaii-sushi-3-1600x680.jpg', 'IMAGE', -1, '04-09-2021 06:36 AM');

-- --------------------------------------------------------

--
-- Table structure for table `website_metadata`
--

CREATE TABLE `website_metadata` (
  `id` int(11) NOT NULL,
  `site_name` varchar(100) NOT NULL,
  `base_url` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `web_logo` varchar(255) NOT NULL,
  `mob_logo` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `keywords` varchar(255) NOT NULL,
  `favicon` varchar(255) NOT NULL,
  `copyright_text` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `website_metadata`
--

INSERT INTO `website_metadata` (`id`, `site_name`, `base_url`, `title`, `web_logo`, `mob_logo`, `description`, `keywords`, `favicon`, `copyright_text`) VALUES
(1, 'MyWebsite', 'http://localhost/blog', 'PrepUPSC.com - One Stop Destination for UPSC Preparation', '2020603205prepupsc_logo.png', '703455815vikkycmslogo_croped.png', 'Prepare for UPSC civil services exams online. A website created for and by UPSC Civil services students', 'upsc,upsc exam preparation,cse exam preparation,prepare for civil services ,online upsc,ias exam preparation', '573884591vikkycms_logo_small.png', '© Vikash');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms_admin`
--
ALTER TABLE `cms_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_list`
--
ALTER TABLE `menu_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nav_header`
--
ALTER TABLE `nav_header`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pageviews`
--
ALTER TABLE `pageviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags_in_post`
--
ALTER TABLE `tags_in_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uploads`
--
ALTER TABLE `uploads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `website_metadata`
--
ALTER TABLE `website_metadata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cms_admin`
--
ALTER TABLE `cms_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `menu_list`
--
ALTER TABLE `menu_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `nav_header`
--
ALTER TABLE `nav_header`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pageviews`
--
ALTER TABLE `pageviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tags_in_post`
--
ALTER TABLE `tags_in_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `uploads`
--
ALTER TABLE `uploads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `website_metadata`
--
ALTER TABLE `website_metadata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
