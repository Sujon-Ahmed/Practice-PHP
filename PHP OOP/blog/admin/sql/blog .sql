-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2021 at 12:17 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cat_icon` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cat_created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`, `cat_icon`, `cat_created_at`) VALUES
(1, 'html', 'fab fa-html5', '2021-08-03 09:22:18'),
(2, 'css', 'fab fa-css3-alt', '2021-08-03 09:22:26'),
(3, 'javascript', 'fab fa-js-square', '2021-08-03 09:22:34'),
(4, 'php', 'fab fa-php', '2021-08-03 20:26:20'),
(5, 'laravel', 'fab fa-laravel', '2021-08-03 20:28:09'),
(6, 'react', 'fab fa-react', '2021-08-03 20:37:37');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `img_id` int(11) NOT NULL,
  `auth_id` int(11) NOT NULL,
  `gal_image` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`img_id`, `auth_id`, `gal_image`, `img_created_at`) VALUES
(2, 1, '611206cd04c9d3.27987958.png', '2021-08-10 10:55:41'),
(3, 2, '611207445c8b87.62746377.png', '2021-08-10 10:57:40'),
(4, 3, '611207518490d4.95541279.png', '2021-08-10 10:57:53'),
(5, 1, '611209b1c50ea2.15615033.png', '2021-08-10 11:08:01'),
(6, 3, '61120a6d664908.36968767.png', '2021-08-10 11:11:09'),
(7, 2, '61120a74a962e5.85400872.png', '2021-08-10 11:11:16'),
(8, 3, '61120a9c7835f1.18551120.png', '2021-08-10 11:11:56'),
(9, 1, '61120ad1ca22d4.90605656.png', '2021-08-10 11:12:49'),
(11, 3, '61120af56396e9.19488336.jpg', '2021-08-10 11:13:25'),
(12, 1, '61120b1fdcca31.68895757.jpg', '2021-08-10 11:14:07'),
(13, 3, '61120b27938938.39375523.jpg', '2021-08-10 11:14:15'),
(14, 2, '61120b2ecf3fd6.71610221.jpg', '2021-08-10 11:14:22'),
(15, 1, '611283235bd8d2.17925290.png', '2021-08-10 19:46:11'),
(16, 3, '611283389d5984.19315807.png', '2021-08-10 19:46:32'),
(17, 1, '611284da220fe1.87618471.png', '2021-08-10 19:53:30');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `messenger_id` int(11) NOT NULL,
  `messenger_name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `messenger_email` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `messenger_message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `msg_created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`messenger_id`, `messenger_name`, `messenger_email`, `messenger_message`, `msg_created_at`) VALUES
(2, 'shagor islam', 'shagor@gmail.com', 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.', '2021-08-12 09:24:10'),
(3, 'Shakil', 'shakil@gmail.com', 'Lorem ipsum dolor sit amet, ad has alia recusabo salutatus. Animal antiopam ullamcorper id per, vim no omnium pertinax. Laudem mucius omnium eos et. Nec an quis insolens praesent, eos ferri nobis nusquam no. Mollis epicurei sit id, eros offendit adipisci ex vix.\r\n\r\nEu nullam tincidunt has, admodum constituto ex duo, et sed velit hendrerit consequuntur. Movet sonet mentitum his id. Sit suas dicta laoreet cu. No habeo repudiare abhorreant sea. Abhorreant persequeris mea no, in eum graeci aliquip reformidans.', '2021-08-12 11:06:20');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `post_id` int(11) NOT NULL,
  `author_id` int(10) NOT NULL,
  `category_id` int(10) NOT NULL,
  `post_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_thumbnail` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `author_id`, `category_id`, `post_title`, `post_body`, `post_thumbnail`, `post_created_at`) VALUES
(4, 1, 1, 'Why we should learn programming?', '<p class=\"blog_post_text\" style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; padding: 0px; line-height: 30px; color: rgb(38, 45, 61); font-family: \"Open Sans\", sans-serif;\">Supervised learning has been at the forefront of research in computer vision and deep learning over the past decade.</p><p class=\"blog_post_text\" style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; padding: 0px; line-height: 30px; color: rgb(38, 45, 61); font-family: \"Open Sans\", sans-serif;\">In a supervised learning setting, humans are required to annotate a large amount of dataset manually. Then, models use this data to learn complex underlying relationships between the data and label and develop the capability to predict the label, given the data. Deep learning models are generally data-hungry and require enormous amounts of datasets to achieve good performance. Ever-improving hardware and the availability of large human-labeled datasets has been the reason for the recent successes of deep learning.</p><div class=\"spcl_line mar_b30\" style=\"margin: 0px 0px 30px; padding: 20px 45px 20px 85px; background: rgb(247, 247, 247); position: relative; color: rgb(51, 51, 51); font-family: \"Open Sans\", sans-serif; font-size: 15px;\"><p class=\"spcl_line_p\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; line-height: 26px; font-size: 16px; color: rgb(0, 0, 0);\">If you think of gaining a new skill only as a means to a very specific end (i.e., getting promoted), your first step should be to adjust your mindset. You need to embrace continuous learning as an integral part of your professional developmentâ€”today and for the rest of your career.</p></div><p class=\"blog_post_text\" style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; padding: 0px; line-height: 30px; color: rgb(38, 45, 61); font-family: \"Open Sans\", sans-serif;\">One major drawback of supervised deep learning is that it relies on the presence of an extensive amount of human-labeled datasets for training. This luxury is not available across all domains as it might be logistically difficult and very expensive to get huge datasets annotated by professionals. While the acquisition of labeled data can be a challenging and costly endeavor, we usually have access to large amounts of unlabeled datasets, especially image and text data. Therefore, we need to find a way to tap into these underused datasets and use them for learning.</p><h2 class=\"blog_post_h2\" style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; padding: 0px; font-family: \"Open Sans\", sans-serif; color: rgb(15, 37, 110); font-size: 27px;\">Transfer Learning from Pretrained Models</h2><p class=\"blog_post_text\" style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; padding: 0px; line-height: 30px; color: rgb(38, 45, 61); font-family: \"Open Sans\", sans-serif;\">Transfer learning means using knowledge from a similar task to solve a problem at hand. In practice, it usually means using as initializations the deep neural network weights learned from a similar task, rather than starting from a random initialization of the weights, and then further training the model on the available labeled data to solve the task at hand.</p><p class=\"blog_post_text\" style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; padding: 0px; line-height: 30px; color: rgb(38, 45, 61); font-family: \"Open Sans\", sans-serif;\">Transfer learning enables us to train models on datasets as small as a few thousand examples, and it can deliver a very good performance. Transfer learning from pretrained models can be performed in three ways:</p><h3 class=\"blog_post_h3\" style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; padding: 0px; font-family: \"Open Sans\", sans-serif; color: rgb(15, 37, 110); font-size: 24px;\">1. Feature Extraction</h3><p class=\"blog_post_text\" style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; padding: 0px; line-height: 30px; color: rgb(38, 45, 61); font-family: \"Open Sans\", sans-serif;\">Usually, the last layers of the neural network are doing the most abstract and task-specific calculations, which are generally not easily transferable to other tasks. By contrast, the initial layers of the network learn some basic features like edges and common shapes, which are easily transferable across tasks.</p><p class=\"blog_post_text\" style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; padding: 0px; line-height: 30px; color: rgb(38, 45, 61); font-family: \"Open Sans\", sans-serif;\">The image sets below depict what the convolution kernels at different levels in a convolutional neural network (CNN) are essentially learning. We see a hierarchical representation, with the initial layers learning basic shapes, and progressively, higher layers learning more complex semantic concepts.</p><h3 class=\"blog_post_h3\" style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; padding: 0px; font-family: \"Open Sans\", sans-serif; color: rgb(15, 37, 110); font-size: 24px;\">2. Fine-tuning</h3><p class=\"blog_post_text\" style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; padding: 0px; line-height: 30px; color: rgb(38, 45, 61); font-family: \"Open Sans\", sans-serif;\">Alternatively, we can transfer the layers from a pretrained network and train the entire network on the available labeled data. This setup needs a little more labeled data because you are training the entire network and hence a large number of parameters. This setup is more prone to overfitting when there is a scarcity of data.</p><h3 class=\"blog_post_h3\" style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; padding: 0px; font-family: \"Open Sans\", sans-serif; color: rgb(15, 37, 110); font-size: 24px;\">3. Two-stage Transfer Learning</h3><p class=\"blog_post_text\" style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; padding: 0px; line-height: 30px; color: rgb(38, 45, 61); font-family: \"Open Sans\", sans-serif;\">This approach is my personal favorite and usually yields the best results, at least in my experience. Here, we train the newly attached layers while freezing the transferred layers for a few epochs before fine-tuning the entire network.</p><h2 class=\"blog_post_h2\" style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; padding: 0px; font-family: \"Open Sans\", sans-serif; color: rgb(15, 37, 110); font-size: 27px;\">The Need for Semi-supervised and Unsupervised Methods</h2><p class=\"blog_post_text\" style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; padding: 0px; line-height: 30px; color: rgb(38, 45, 61); font-family: \"Open Sans\", sans-serif;\">This usually works very well for most image classification tasks because we have huge image datasets like ImageNet that cover a good portion of possible image spaceâ€”and usually, weights learned from it are transferable to custom image classification tasks. Moreover, the pretrained networks are readily available off the shelf, thus facilitating the process.</p><p class=\"blog_post_text\" style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; padding: 0px; line-height: 30px; color: rgb(38, 45, 61); font-family: \"Open Sans\", sans-serif;\">However, this approach will not work well if the distribution of images in your task is drastically different from the images that the base network was trained on. For example, if you are dealing with grayscale images generated by a medical imaging device, transfer learning from ImageNet weights will not be that effective and you will need more than a couple of thousand labeled images for training your network to satisfactory performance.</p><h2 class=\"blog_post_h2\" style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; padding: 0px; font-family: \"Open Sans\", sans-serif; color: rgb(15, 37, 110); font-size: 27px;\">Experiment</h2><p class=\"blog_post_text\" style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; padding: 0px; line-height: 30px; color: rgb(38, 45, 61); font-family: \"Open Sans\", sans-serif;\">In this section, I will relate an experiment that empirically establishes the potential of unsupervised pre-training for image classification. This was my semester project for a Deep Learning class I took with Yann LeCun at NYU last spring.</p><ul class=\"blog_post_ul\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 0px 40px; list-style: none; color: rgb(51, 51, 51); font-family: \"Open Sans\", sans-serif; font-size: 15px;\"><li style=\"margin: 0px 0px 14px; padding: 0px; line-height: 26px; color: rgb(38, 45, 61); list-style: decimal;\">Dataset. It is composed of 128K labeled examples, half of which are for training and the other half for validation. Furthermore, we are provided 512K unlabeled images. The data contains 1,000 classes in total.</li><li style=\"margin: 0px 0px 14px; padding: 0px; line-height: 26px; color: rgb(38, 45, 61); list-style: decimal;\">Unsupervised pre-training. AlexNet was trained for rotation classification using extensive data augmentation for 63 epochs. We used the hyperparameters documented by Rotnet in their paper.</li><li style=\"margin: 0px 0px 14px; padding: 0px; line-height: 26px; color: rgb(38, 45, 61); list-style: decimal;\">Classifier training. Features were extracted from the fourth convolution layer, and three fully connected layers were appended to it. These layers were randomly initialized and trained with a scheduled decreasing learning rate, and early stopping was implemented to stop training.</li></ul>', '6108cbfb1865f5.23854352.jpg', '2021-08-03 10:54:19'),
(6, 1, 1, 'Pricing Ceremony', '<p>On this day I remember always because this moments i achieve my design goals</p>', '610a1f6a88b941.36503339.jpg', '2021-08-04 11:02:34'),
(7, 2, 4, 'About PHP', '<p><span style=\"color: rgb(77, 81, 86); font-family: arial, sans-serif; font-size: 14px;\">PHP is a general-purpose scripting language geared towards web development. It was originally created by Danish-Canadian programmer Rasmus Lerdorf in 1994. The PHP reference implementation is now produced by The PHP Group.</span><br></p>', '610a29882d96c9.34498118.png', '2021-08-04 11:45:44'),
(8, 2, 3, 'this is a title of blog', '<p>In this chapter i will practice javascript</p>', '610a2c49c50cf2.44444579.jpg', '2021-08-04 11:57:29'),
(12, 3, 4, 'What is Program?', '<p>This is a Simple PHP Condition Car Speed Count Message Program</p>', '610ac7f0efc969.79695952.png', '2021-08-04 23:01:36'),
(13, 1, 5, 'About this blog.', '<p><span style=\"color: rgb(77, 81, 86); font-family: arial, sans-serif; font-size: 14px;\">Laravel is a free, open-source PHP web framework, created by Taylor Otwell and intended for the development of web applications following the modelâ€“viewâ€“controller architectural pattern and based on</span><br></p>', '6115ff3eb4aba6.55074694.jpg', '2021-08-10 11:18:28'),
(14, 1, 6, 'About React', '<p><span style=\"color: rgb(77, 81, 86); font-family: arial, sans-serif; font-size: 14px;\">React is a free and open-source front-end JavaScript library for building user interfaces or UI components. It is maintained by Facebook and a community of individual developers and companies. React can be used as a base in the development of single-page or mobile applications.</span><span style=\"color: rgb(77, 81, 86); font-family: arial, sans-serif; font-size: 14px;\">Â </span><br></p>', '6115fe6844fe50.21542806.png', '2021-08-13 10:58:52');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_email` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_about` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_photo` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_email`, `user_password`, `user_about`, `user_photo`, `created_at`) VALUES
(1, 'Sujon Ahmed', 'sujonahmed5284@gmail.com', 'e00cf25ad42683b3df678c61f42c6bda', 'Hi, I am Sujon Ahmed, I am a Web Designer and Developer', '61096c0c10f783.38247145.jpg', '2021-08-03 09:13:39'),
(2, 'Riman Ahmed', 'riman@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Hi, I am Riman Ahmed Co-Admin from this blogging site.', '610a2e25117d00.75328539.jpg', '2021-08-04 11:44:47'),
(3, 'Toukir Ahmed', 'toukir@gmail.com', '8b75b159d24c123adba4bfc3f095af29', 'Hi, I am Toukir Ahmed from Manikganj', '610ac78cb64476.85897206.jpg', '2021-08-04 22:59:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`),
  ADD UNIQUE KEY `cat_name` (`cat_name`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`img_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`messenger_id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_email` (`user_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `messenger_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
