-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:4445
-- Generation Time: Mar 23, 2018 at 06:37 PM
-- Server version: 5.6.28
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `safespace`

CREATE DATABASE `safespace`;
--

-- --------------------------------------------------------

--
-- Table structure for table `best_case`
--

CREATE TABLE `safespace`.`best_case` (
  `best_case_id` int(11) NOT NULL,
  `best_case` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `cope_with_worst`
--

CREATE TABLE `safespace`.`cope_with_worst` (
  `cope_with_worst_id` int(11) NOT NULL,
  `cope_with_worst` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `create_account`
--

CREATE TABLE `safespace`.`create_account` (
  `username` varchar(30) NOT NULL,
  `email` varchar(60) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `create_account`
--

INSERT INTO `safespace`.`create_account` (`username`, `email`, `first_name`, `last_name`, `password`) VALUES
('admin', 'test', '', '', 'admin'),
('mikemarmer1', 'm.marmer93@gmail.com', 'Michael', 'Marmer', 'Bandit471093!!');

-- --------------------------------------------------------

--
-- Table structure for table `emotions`
--

CREATE TABLE `safespace`.`emotions` (
  `emotion_id` int(11) NOT NULL,
  `emotion` varchar(45) NOT NULL,
  `emotion_scale` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `evidence_against_prediction`
--

CREATE TABLE `safespace`.`evidence_against_prediction` (
  `evidence_against_id` int(11) NOT NULL,
  `evidence_against` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `evidence_for_prediction`
--

CREATE TABLE `safespace`.`evidence_for_prediction` (
  `evidence_for_id` int(11) NOT NULL,
  `evidence_for` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `helpful_thoughts`
--

CREATE TABLE `safespace`.`helpful_thoughts` (
  `helpful_thoughts_id` int(11) NOT NULL,
  `helpful_thoughts` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `journal_entry`
--

CREATE TABLE `safespace`.`journal_entry` (
  `username` varchar(30) NOT NULL,
  `journal_id` int(11) NOT NULL,
  `journal_title` varchar(45) NOT NULL,
  `dates` date NOT NULL,
  `entry` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `new_emotion`
--

CREATE TABLE `safespace`.`new_emotion` (
  `new_emotion_id` int(11) NOT NULL,
  `new_emotion` varchar(45) NOT NULL,
  `new_emotion_scale` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `new_viewpoint`
--

CREATE TABLE `safespace`.`new_viewpoint` (
  `new_viewpoint_id` int(11) NOT NULL,
  `new_viewpoint` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `prediction`
--

CREATE TABLE `safespace`.`prediction` (
  `prediction_id` int(11) NOT NULL,
  `prediction` varchar(45) NOT NULL,
  `prediction_scale` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `worrying_thoughts`
--

CREATE TABLE `safespace`.`worrying_thoughts` (
  `worrying_thoughts_id` int(11) NOT NULL,
  `worrying_thoughts` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `worry_diary_entry`
--

CREATE TABLE `safespace`.`worry_diary_entry` (
  `username` varchar(30) NOT NULL,
  `worry_diary_id` int(11) NOT NULL,
  `dates` date NOT NULL,
  `worrying_thoughts_id` int(11) NOT NULL,
  `prediction_id` int(11) NOT NULL,
  `emotion_id` int(11) NOT NULL,
  `evidence_for_id` int(11) NOT NULL,
  `evidence_against_id` int(11) NOT NULL,
  `worry_prediction_scale` int(11) NOT NULL,
  `worst_case_id` int(11) NOT NULL,
  `best_case_id` int(11) NOT NULL,
  `most_likely_to_happen` varchar(250) NOT NULL,
  `helpful_worry` varchar(45) NOT NULL,
  `cope_with_worst_id` int(11) NOT NULL,
  `new_viewpoint_id` int(11) NOT NULL,
  `helpful_thoughts_id` int(11) NOT NULL,
  `new_prediction_scale` int(11) NOT NULL,
  `new_emotion_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `worst_case`
--

CREATE TABLE `safespace`.`worst_case` (
  `worst_case_id` int(11) NOT NULL,
  `worst_case` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `best_case`
--
ALTER TABLE `safespace`.`best_case`
  ADD PRIMARY KEY (`best_case_id`);

--
-- Indexes for table `cope_with_worst`
--
ALTER TABLE `safespace`.`cope_with_worst`
  ADD PRIMARY KEY (`cope_with_worst_id`);

--
-- Indexes for table `create_account`
--
ALTER TABLE `safespace`.`create_account`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`);

--
-- Indexes for table `emotions`
--
ALTER TABLE `safespace`.`emotions`
  ADD PRIMARY KEY (`emotion_id`);

--
-- Indexes for table `evidence_against_prediction`
--
ALTER TABLE `safespace`.`evidence_against_prediction`
  ADD PRIMARY KEY (`evidence_against_id`);

--
-- Indexes for table `evidence_for_prediction`
--
ALTER TABLE `safespace`.`evidence_for_prediction`
  ADD PRIMARY KEY (`evidence_for_id`);

--
-- Indexes for table `helpful_thoughts`
--
ALTER TABLE `safespace`.`helpful_thoughts`
  ADD PRIMARY KEY (`helpful_thoughts_id`);

--
-- Indexes for table `journal_entry`
--
ALTER TABLE `safespace`.`journal_entry`
  ADD PRIMARY KEY (`journal_id`),
  ADD KEY `username_idx` (`username`);

--
-- Indexes for table `new_emotion`
--
ALTER TABLE `safespace`.`new_emotion`
  ADD PRIMARY KEY (`new_emotion_id`);

--
-- Indexes for table `new_viewpoint`
--
ALTER TABLE `safespace`.`new_viewpoint`
  ADD PRIMARY KEY (`new_viewpoint_id`);

--
-- Indexes for table `prediction`
--
ALTER TABLE `safespace`.`prediction`
  ADD PRIMARY KEY (`prediction_id`);

--
-- Indexes for table `worrying_thoughts`
--
ALTER TABLE `safespace`.`worrying_thoughts`
  ADD PRIMARY KEY (`worrying_thoughts_id`);

--
-- Indexes for table `worry_diary_entry`
--
ALTER TABLE `safespace`.`worry_diary_entry`
  ADD PRIMARY KEY (`worry_diary_id`),
  ADD KEY `username_idx` (`username`),
  ADD KEY `new_viewpoint_id_idx` (`new_viewpoint_id`),
  ADD KEY `cope_with_worst_id_idx` (`cope_with_worst_id`),
  ADD KEY `new_emotion_id_idx` (`new_emotion_id`),
  ADD KEY `best_case_id_idx` (`best_case_id`),
  ADD KEY `worst_case_id_idx` (`worst_case_id`),
  ADD KEY `helpful_thoughts_id_idx` (`helpful_thoughts_id`),
  ADD KEY `evidence_against_id_idx` (`evidence_against_id`),
  ADD KEY `evidence_for_id_idx` (`evidence_for_id`),
  ADD KEY `emotions_id_idx` (`emotion_id`),
  ADD KEY `prediction_id_idx` (`prediction_id`),
  ADD KEY `worrying_thoughts_id_idx` (`worrying_thoughts_id`);

--
-- Indexes for table `worst_case`
--
ALTER TABLE `safespace`.`worst_case`
  ADD PRIMARY KEY (`worst_case_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `best_case`
--
ALTER TABLE `safespace`.`best_case`
  MODIFY `best_case_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `cope_with_worst`
--
ALTER TABLE `safespace`.`cope_with_worst`
  MODIFY `cope_with_worst_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `emotions`
--
ALTER TABLE `safespace`.`emotions`
  MODIFY `emotion_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `evidence_against_prediction`
--
ALTER TABLE `safespace`.`evidence_against_prediction`
  MODIFY `evidence_against_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `evidence_for_prediction`
--
ALTER TABLE `safespace`.`evidence_for_prediction`
  MODIFY `evidence_for_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `helpful_thoughts`
--
ALTER TABLE `safespace`.`helpful_thoughts`
  MODIFY `helpful_thoughts_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `journal_entry`
--
ALTER TABLE `safespace`.`journal_entry`
  MODIFY `journal_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `new_emotion`
--
ALTER TABLE `safespace`.`new_emotion`
  MODIFY `new_emotion_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `new_viewpoint`
--
ALTER TABLE `safespace`.`new_viewpoint`
  MODIFY `new_viewpoint_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `prediction`
--
ALTER TABLE `safespace`.`prediction`
  MODIFY `prediction_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `worrying_thoughts`
--
ALTER TABLE `safespace`.`worrying_thoughts`
  MODIFY `worrying_thoughts_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `worry_diary_entry`
--
ALTER TABLE `safespace`.`worry_diary_entry`
  MODIFY `worry_diary_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `worst_case`
--
ALTER TABLE `safespace`.`worst_case`
  MODIFY `worst_case_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
