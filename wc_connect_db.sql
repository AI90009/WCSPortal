-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 10, 2025 at 11:29 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wc_connect_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` int(11) NOT NULL,
  `practice_area` int(11) NOT NULL,
  `sub_practice` int(11) NOT NULL,
  `lawyer_id` int(11) NOT NULL,
  `dateofappointment` datetime NOT NULL,
  `description` text NOT NULL,
  `state` varchar(100) NOT NULL,
  `reschedule_date` datetime DEFAULT NULL,
  `userid` int(11) NOT NULL,
  `date_rec` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `practice_area`, `sub_practice`, `lawyer_id`, `dateofappointment`, `description`, `state`, `reschedule_date`, `userid`, `date_rec`) VALUES
(1, 1, 1, 13, '2025-03-21 04:41:00', 'Guidance to setup a Legal Client Database system\r\nTo effectively manage client information and case details, a legal client database system should encompass a comprehensive list of legal practice areas and their corresponding sub-areas. Below is an organized list to consider:\r\nAdministrative Law\r\nRegulatory Compliance\r\nAdministrative Hearings\r\nGovernment Licensing\r\nBanking and Finance Law\r\nCorporate Finance\r\nPersonal Loans\r\nRegulatory Compliance\r\nCivil Litigation\r\nContract Disputes\r\nPersonal Injury\r\nProperty Disputes\r\nCommercial Law\r\nBusiness Transactions\r\nCommercial Contracts\r\nTrade Regulations\r\nCompetition Law\r\nAntitrust Issues\r\nMergers and Acquisitions\r\nMarket Regulation\r\nConstruction Law\r\nContract Negotiation\r\nDispute Resolution\r\nProject Finance\r\nCorporate Law\r\nCorporate Governance\r\nMergers and Acquisitions\r\nShareholder Rights\r\nCriminal Law\r\nWhite-Collar Crime\r\nJuvenile Offenses\r\nGeneral Criminal Defense\r\nEmployment Law\r\nEmployee Rights\r\nWorkplace Discrimination\r\nEmployment Contracts\r\nEnvironmental Law - Pollution Control - Natural Resource Management - Environmental Impact Assessments\r\nFamily Law - Divorce Proceedings - Child Custody - Adoption Processes\r\nHuman Rights Law - Civil Liberties - Discrimination Cases - Refugee and Asylum Law\r\nImmigration Law - Visa Applications - Deportation Defense - Citizenship Procedures\r\nIntellectual Property Law - Copyright - Trademarks - Patents\r\nPersonal Injury Law - Medical Negligence - Workplace Accidents - Product Liability\r\nPrivate Client Law - Wills and Estates - Trusts - Tax Planning\r\nProperty Law - Real Estate Transactions - Landlord-Tenant Disputes - Zoning Issues\r\nTax Law - Corporate Taxation - Personal Tax Planning - Tax Disputes\r\nTechnology Law - Data Protection - Cybersecurity - Software Licensing\r\nSports Law - Contract Negotiations - Regulatory Compliance - Intellectual Property Rights\r\nIn addition to categorizing legal practice areas, a legal client database system should include the following features to enhance functionality and client management:\r\nClient Relationship Management (CRM)\r\nCentralized client information storage\r\nTracking of client interactions\r\nPersonalized communication capabilities\r\nCase and Matter Management\r\nReal-time case status tracking\r\nTask assignment and deadline monitoring\r\nDocument management and automation\r\nTime and Expense Tracking\r\nAutomated time capture for billable activities\r\nExpense recording and reporting\r\nIntegration with billing systems\r\nBilling and Financial Management\r\nInvoice generation and tracking\r\nPayment processing\r\nFinancial reporting\r\nDocument Management\r\nSecure storage with access controls\r\nAdvanced search functionalities\r\nVersion control\r\nWorkflow Automation\r\nStandardization of routine tasks\r\nAutomated notifications and reminders\r\nCustomizable workflows\r\nClient Portal\r\n24/7 access to case information for clients\r\nSecure document sharing\r\nDirect communication channels\r\nReporting and Analytics\r\nDashboards displaying key performance indicators\r\nCustomizable reports\r\nData-driven insights for decision-making\r\nSecurity and Compliance\r\nData encryption\r\nAccess controls\r\nRegular backups\r\nIntegration Capabilities - Compatibility with other software tools - APIs for seamless data exchange - Third-party application support\r\nVersion 2 Guidance\r\nA comprehensive legal client database system for use in England and Wales should encompass a wide array of legal practice areas, including specific types of disputes such as domestic abuse. Additionally, it should incorporate functionalities for case analysis, legal assessments, file management, referral systems, and detailed client contact information, all in compliance with the guidelines set forth by the Law Society and the Solicitors Regulation Authority (SRA).\r\nExpanded List of Legal Practice Areas and Sub-Areas:\r\nAdministrative and Public Law\r\nJudicial Review\r\nStatutory Appeals\r\nDisciplinary Proceedings\r\nRegulatory Compliance\r\nPublic Procurement\r\nEnvironmental Issues\r\nEmployment and Discrimination Law\r\nBanking and Finance Law\r\nCorporate Finance\r\nPersonal Loans\r\nRegulatory Compliance\r\nDebt Recovery\r\nAsset Finance\r\nCivil Litigation and Dispute Resolution\r\nContract Disputes\r\nPersonal Injury\r\nProperty Disputes\r\nProfessional Negligence\r\nAlternative Dispute Resolution (ADR)\r\nCommercial Law\r\nBusiness Transactions\r\nCommercial Contracts\r\nTrade Regulations\r\nConsumer Law\r\nFranchising\r\nCompetition Law\r\nAntitrust Issues\r\nMergers and Acquisitions\r\nMarket Regulation\r\nCartel Investigations\r\nConstruction Law\r\nContract Negotiation\r\nDispute Resolution\r\nProject Finance\r\nHealth and Safety Compliance\r\nCorporate Law\r\nCorporate Governance\r\nMergers and Acquisitions\r\nShareholder Rights\r\nCorporate Restructuring\r\nCriminal Law\r\nWhite-Collar Crime\r\nJuvenile Offenses\r\nGeneral Criminal Defense\r\nDomestic Abuse Cases\r\nEmployment Law\r\nEmployee Rights\r\nWorkplace Discrimination\r\nEmployment Contracts\r\nRedundancy and Dismissal\r\nEnvironmental Law\r\nPollution Control\r\nNatural Resource Management\r\nEnvironmental Impact Assessments\r\nClimate Change Law\r\nFamily Law\r\nDivorce Proceedings\r\nChild Custody\r\nAdoption Processes\r\nDomestic Abuse Cases\r\nHuman Rights Law\r\nCivil Liberties\r\nDiscrimination Cases\r\nRefugee and Asylum Law\r\nFreedom of Expression\r\nImmigration Law\r\nVisa Applications\r\nDeportation Defense\r\nCitizenship Procedures\r\nAsylum Applications\r\nIntellectual Property Law\r\nCopyright\r\nTrademarks\r\nPatents\r\nDesign Rights\r\nPersonal Injury Law\r\nMedical Negligence\r\nWorkplace Accidents\r\nProduct Liability\r\nRoad Traffic Accidents\r\nPrivate Client Law\r\nWills and Estates\r\nTrusts\r\nTax Planning\r\nProbate\r\nProperty Law\r\nReal Estate Transactions\r\nLandlord-Tenant Disputes\r\nZoning Issues\r\nConveyancing\r\nTax Law\r\nCorporate Taxation\r\nPersonal Tax Planning\r\nTax Disputes\r\nVAT\r\nTechnology Law\r\nData Protection\r\nCybersecurity\r\nSoftware Licensing\r\nE-Commerce\r\nSports Law\r\nContract Negotiations\r\nRegulatory Compliance\r\nIntellectual Property Rights\r\nAnti-Doping Regulations\r\nEssential Features of a Legal Client Database System:\r\nClient Relationship Management (CRM):\r\nCentralized storage of client information\r\nTracking of client interactions\r\nPersonalized communication capabilities\r\nCase and Matter Management:\r\nReal-time case status tracking\r\nTask assignment and deadline monitoring\r\nDocument management and automation\r\nTime and Expense Tracking:\r\nAutomated time capture for billable activities\r\nExpense recording and reporting\r\nIntegration with billing systems\r\nBilling and Financial Management:\r\nInvoice generation and tracking\r\nPayment processing\r\nFinancial reporting\r\nDocument Management:\r\nSecure storage with access controls\r\nAdvanced search functionalities\r\nVersion control\r\nWorkflow Automation:\r\nStandardization of routine tasks\r\nAutomated notifications and reminders\r\nCustomizable workflows\r\nClient Portal:\r\n24/7 access to case information for clients\r\nSecure document sharing\r\nDirect communication channels\r\nReporting and Analytics:\r\nDashboards displaying key performance indicators\r\nCustomizable reports\r\nData-driven insights for decision-making\r\nSecurity and Compliance:\r\nData encryption\r\nAccess controls\r\nRegular backups\r\nIntegration Capabilities:\r\nCompatibility with other software tools\r\nAPIs for seamless data exchange\r\nThird-party application support\r\nCompliance with Law Society and SRA Guidelines:\r\nClient Information Requirements: Ensure that the system can manage and store client information in compliance with the SRA Standards and Regulations, including confidentiality and data protection obligations. \r\nFile Management: Implement robust procedures for opening, managing, and closing files, ensuring that all actions are documented, and client assets are returned appropriately. \r\nReferral and Signposting Systems: Include functionalities that allow for efficient referral processes and signposting to other services when necessary, ensuring clients receive comprehensive support.\r\nClient Contact Details: Maintain accurate and up-to-date contact information for clients, facilitating effective communication and adherence to client care standards.\r\nBy integrating these practice areas and system features, a legal client database will not only enhance operational efficiency but also ensure compliance with the regulatory frameworks governing legal practice in England and Wales.', 'Pending Approval', NULL, 6, '2025-03-09 21:36:14'),
(2, 1, 1, 13, '2025-03-21 03:42:00', 'Guidance to setup a Legal Client Database system\r\nTo effectively manage client information and case details, a legal client database system should encompass a comprehensive list of legal practice areas and their corresponding sub-areas. Below is an organized list to consider:\r\nAdministrative Law\r\nRegulatory Compliance\r\nAdministrative Hearings\r\nGovernment Licensing\r\nBanking and Finance Law\r\nCorporate Finance\r\nPersonal Loans\r\nRegulatory Compliance\r\nCivil Litigation\r\nContract Disputes\r\nPersonal Injury\r\nProperty Disputes\r\nCommercial Law\r\nBusiness Transactions\r\nCommercial Contracts\r\nTrade Regulations\r\nCompetition Law\r\nAntitrust Issues\r\nMergers and Acquisitions\r\nMarket Regulation\r\nConstruction Law\r\nContract Negotiation\r\nDispute Resolution\r\nProject Finance\r\nCorporate Law\r\nCorporate Governance\r\nMergers and Acquisitions\r\nShareholder Rights\r\nCriminal Law\r\nWhite-Collar Crime\r\nJuvenile Offenses\r\nGeneral Criminal Defense\r\nEmployment Law\r\nEmployee Rights\r\nWorkplace Discrimination\r\nEmployment Contracts\r\nEnvironmental Law - Pollution Control - Natural Resource Management - Environmental Impact Assessments\r\nFamily Law - Divorce Proceedings - Child Custody - Adoption Processes\r\nHuman Rights Law - Civil Liberties - Discrimination Cases - Refugee and Asylum Law\r\nImmigration Law - Visa Applications - Deportation Defense - Citizenship Procedures\r\nIntellectual Property Law - Copyright - Trademarks - Patents\r\nPersonal Injury Law - Medical Negligence - Workplace Accidents - Product Liability\r\nPrivate Client Law - Wills and Estates - Trusts - Tax Planning\r\nProperty Law - Real Estate Transactions - Landlord-Tenant Disputes - Zoning Issues\r\nTax Law - Corporate Taxation - Personal Tax Planning - Tax Disputes\r\nTechnology Law - Data Protection - Cybersecurity - Software Licensing\r\nSports Law - Contract Negotiations - Regulatory Compliance - Intellectual Property Rights\r\nIn addition to categorizing legal practice areas, a legal client database system should include the following features to enhance functionality and client management:\r\nClient Relationship Management (CRM)\r\nCentralized client information storage\r\nTracking of client interactions\r\nPersonalized communication capabilities\r\nCase and Matter Management\r\nReal-time case status tracking\r\nTask assignment and deadline monitoring\r\nDocument management and automation\r\nTime and Expense Tracking\r\nAutomated time capture for billable activities\r\nExpense recording and reporting\r\nIntegration with billing systems\r\nBilling and Financial Management\r\nInvoice generation and tracking\r\nPayment processing\r\nFinancial reporting\r\nDocument Management\r\nSecure storage with access controls\r\nAdvanced search functionalities\r\nVersion control\r\nWorkflow Automation\r\nStandardization of routine tasks\r\nAutomated notifications and reminders\r\nCustomizable workflows\r\nClient Portal\r\n24/7 access to case information for clients\r\nSecure document sharing\r\nDirect communication channels\r\nReporting and Analytics\r\nDashboards displaying key performance indicators\r\nCustomizable reports\r\nData-driven insights for decision-making\r\nSecurity and Compliance\r\nData encryption\r\nAccess controls\r\nRegular backups\r\nIntegration Capabilities - Compatibility with other software tools - APIs for seamless data exchange - Third-party application support\r\nVersion 2 Guidance\r\nA comprehensive legal client database system for use in England and Wales should encompass a wide array of legal practice areas, including specific types of disputes such as domestic abuse. Additionally, it should incorporate functionalities for case analysis, legal assessments, file management, referral systems, and detailed client contact information, all in compliance with the guidelines set forth by the Law Society and the Solicitors Regulation Authority (SRA).\r\nExpanded List of Legal Practice Areas and Sub-Areas:\r\nAdministrative and Public Law\r\nJudicial Review\r\nStatutory Appeals\r\nDisciplinary Proceedings\r\nRegulatory Compliance\r\nPublic Procurement\r\nEnvironmental Issues\r\nEmployment and Discrimination Law\r\nBanking and Finance Law\r\nCorporate Finance\r\nPersonal Loans\r\nRegulatory Compliance\r\nDebt Recovery\r\nAsset Finance\r\nCivil Litigation and Dispute Resolution\r\nContract Disputes\r\nPersonal Injury\r\nProperty Disputes\r\nProfessional Negligence\r\nAlternative Dispute Resolution (ADR)\r\nCommercial Law\r\nBusiness Transactions\r\nCommercial Contracts\r\nTrade Regulations\r\nConsumer Law\r\nFranchising\r\nCompetition Law\r\nAntitrust Issues\r\nMergers and Acquisitions\r\nMarket Regulation\r\nCartel Investigations\r\nConstruction Law\r\nContract Negotiation\r\nDispute Resolution\r\nProject Finance\r\nHealth and Safety Compliance\r\nCorporate Law\r\nCorporate Governance\r\nMergers and Acquisitions\r\nShareholder Rights\r\nCorporate Restructuring\r\nCriminal Law\r\nWhite-Collar Crime\r\nJuvenile Offenses\r\nGeneral Criminal Defense\r\nDomestic Abuse Cases\r\nEmployment Law\r\nEmployee Rights\r\nWorkplace Discrimination\r\nEmployment Contracts\r\nRedundancy and Dismissal\r\nEnvironmental Law\r\nPollution Control\r\nNatural Resource Management\r\nEnvironmental Impact Assessments\r\nClimate Change Law\r\nFamily Law\r\nDivorce Proceedings\r\nChild Custody\r\nAdoption Processes\r\nDomestic Abuse Cases\r\nHuman Rights Law\r\nCivil Liberties\r\nDiscrimination Cases\r\nRefugee and Asylum Law\r\nFreedom of Expression\r\nImmigration Law\r\nVisa Applications\r\nDeportation Defense\r\nCitizenship Procedures\r\nAsylum Applications\r\nIntellectual Property Law\r\nCopyright\r\nTrademarks\r\nPatents\r\nDesign Rights\r\nPersonal Injury Law\r\nMedical Negligence\r\nWorkplace Accidents\r\nProduct Liability\r\nRoad Traffic Accidents\r\nPrivate Client Law\r\nWills and Estates\r\nTrusts\r\nTax Planning\r\nProbate\r\nProperty Law\r\nReal Estate Transactions\r\nLandlord-Tenant Disputes\r\nZoning Issues\r\nConveyancing\r\nTax Law\r\nCorporate Taxation\r\nPersonal Tax Planning\r\nTax Disputes\r\nVAT\r\nTechnology Law\r\nData Protection\r\nCybersecurity\r\nSoftware Licensing\r\nE-Commerce\r\nSports Law\r\nContract Negotiations\r\nRegulatory Compliance\r\nIntellectual Property Rights\r\nAnti-Doping Regulations\r\nEssential Features of a Legal Client Database System:\r\nClient Relationship Management (CRM):\r\nCentralized storage of client information\r\nTracking of client interactions\r\nPersonalized communication capabilities\r\nCase and Matter Management:\r\nReal-time case status tracking\r\nTask assignment and deadline monitoring\r\nDocument management and automation\r\nTime and Expense Tracking:\r\nAutomated time capture for billable activities\r\nExpense recording and reporting\r\nIntegration with billing systems\r\nBilling and Financial Management:\r\nInvoice generation and tracking\r\nPayment processing\r\nFinancial reporting\r\nDocument Management:\r\nSecure storage with access controls\r\nAdvanced search functionalities\r\nVersion control\r\nWorkflow Automation:\r\nStandardization of routine tasks\r\nAutomated notifications and reminders\r\nCustomizable workflows\r\nClient Portal:\r\n24/7 access to case information for clients\r\nSecure document sharing\r\nDirect communication channels\r\nReporting and Analytics:\r\nDashboards displaying key performance indicators\r\nCustomizable reports\r\nData-driven insights for decision-making\r\nSecurity and Compliance:\r\nData encryption\r\nAccess controls\r\nRegular backups\r\nIntegration Capabilities:\r\nCompatibility with other software tools\r\nAPIs for seamless data exchange\r\nThird-party application support\r\nCompliance with Law Society and SRA Guidelines:\r\nClient Information Requirements: Ensure that the system can manage and store client information in compliance with the SRA Standards and Regulations, including confidentiality and data protection obligations. \r\nFile Management: Implement robust procedures for opening, managing, and closing files, ensuring that all actions are documented, and client assets are returned appropriately. \r\nReferral and Signposting Systems: Include functionalities that allow for efficient referral processes and signposting to other services when necessary, ensuring clients receive comprehensive support.\r\nClient Contact Details: Maintain accurate and up-to-date contact information for clients, facilitating effective communication and adherence to client care standards.\r\nBy integrating these practice areas and system features, a legal client database will not only enhance operational efficiency but also ensure compliance with the regulatory frameworks governing legal practice in England and Wales.', 'Pending Approval', NULL, 6, '2025-03-09 21:38:37'),
(3, 1, 1, 13, '2025-03-19 04:43:00', 'A comprehensive legal client database system for use in England and Wales should encompass a wide array of legal practice areas, including specific types of disputes such as domestic abuse. Additionally, it should incorporate functionalities for case analysis, legal assessments, file management, referral systems, and detailed client contact information, all in compliance with the guidelines set forth by the Law Society and the Solicitors Regulation Authority (S', 'Pending Approval', NULL, 6, '2025-03-09 21:40:26');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telphone` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'Active',
  `date_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `title`, `gender`, `first_name`, `last_name`, `username`, `email`, `telphone`, `password`, `status`, `date_created`) VALUES
(1, 'Ms.', 'Male', 'jajsa', 'jasc', 'joh_doe', 'ia@w.cm', '01283944328323', '$2y$12$HFTOXjrnXNVQrerwBEY6z.bCSUf6x5NsyTvgtbOvvTObrfU5mVgC.', 'Active', '2025-03-10 01:39:30'),
(2, 'Ms.', 'Male', 'wss', 'asd', 'joh_do', '12@wme.cmd', '1324234235525', '$2y$12$weoMWWle3QAMlcMHjYHtNe33PklH1ZWuHW77pYIQhUDeg9ez/ALGq', 'Active', '2025-03-10 02:39:06');

-- --------------------------------------------------------

--
-- Table structure for table `client_tags`
--

CREATE TABLE `client_tags` (
  `id` int(11) NOT NULL,
  `client_tag` varchar(255) NOT NULL,
  `userid` int(11) NOT NULL,
  `date_rec` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `client_tags`
--

INSERT INTO `client_tags` (`id`, `client_tag`, `userid`, `date_rec`) VALUES
(1, 'VVIP', 6, '2025-03-07 22:20:51');

-- --------------------------------------------------------

--
-- Table structure for table `practice_areas`
--

CREATE TABLE `practice_areas` (
  `id` int(11) NOT NULL,
  `area` varchar(255) NOT NULL,
  `userid` int(11) NOT NULL,
  `date_rec` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `practice_areas`
--

INSERT INTO `practice_areas` (`id`, `area`, `userid`, `date_rec`) VALUES
(1, 'Administrative Law', 6, '2025-03-07 21:56:45'),
(2, 'Banking & Finance Law', 6, '2025-03-07 22:40:08'),
(3, 'Civil Litigation', 6, '2025-03-07 22:40:22'),
(4, 'Commercial Law', 6, '2025-03-07 22:40:35'),
(5, 'Competition Law', 6, '2025-03-07 22:40:47');

-- --------------------------------------------------------

--
-- Table structure for table `sub_area`
--

CREATE TABLE `sub_area` (
  `id` int(11) NOT NULL,
  `area_id` int(11) NOT NULL,
  `sub_area` varchar(255) NOT NULL,
  `userid` int(11) NOT NULL,
  `date_rec` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sub_area`
--

INSERT INTO `sub_area` (`id`, `area_id`, `sub_area`, `userid`, `date_rec`) VALUES
(1, 1, 'Regulatory Compliance', 6, '2025-03-07 22:53:01'),
(2, 1, 'Administrative Hearings', 6, '2025-03-07 22:53:24'),
(3, 1, 'Government Licensing', 6, '2025-03-07 22:53:38'),
(4, 2, 'Corporate Finance', 6, '2025-03-07 22:53:59'),
(5, 2, 'Personal Loans', 6, '2025-03-07 22:54:12'),
(6, 2, 'Regulatory compliance', 6, '2025-03-07 22:54:31');

-- --------------------------------------------------------

--
-- Table structure for table `wc_users`
--

CREATE TABLE `wc_users` (
  `id` int(11) NOT NULL,
  `fullnames` varchar(255) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `practice_area` varchar(255) DEFAULT 'null',
  `sub_practice` varchar(255) DEFAULT 'null',
  `password` text NOT NULL,
  `userrole` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `createdby` int(20) DEFAULT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wc_users`
--

INSERT INTO `wc_users` (`id`, `fullnames`, `username`, `email`, `contact`, `practice_area`, `sub_practice`, `password`, `userrole`, `status`, `createdby`, `date_created`) VALUES
(5, 'Abdi Moha', 'codeman', 'codeman@gmail.com', '0392141834', NULL, NULL, '$2y$12$sgi6YLs9R57b3.cK4isodu.nr7xyQEoKy0SV7YJjJQoWbt1vyBJ1y', 'Admin', 'Active', 5, '2025-02-12 16:52:33'),
(6, 'ayan dev', 'ayan', 'ayan@gmail.com', '0753172256', NULL, NULL, '$2y$12$a0MI2RHZTUizL7Tw69XOhOCOvCKyQ9MhYbYfNxq5JIe7u5iB9gqb6', 'Admin', 'Active', 5, '2025-02-12 17:02:01'),
(13, 'Jane Doe', 'jane', 'doe@gmail.com', '324', '1', '1', '$2y$12$8f1gXvZiLT7MlDR.XkLhDO.6Qx2ryYBnGEkXqN99feHiU6anAuNli', 'Lawyer', 'Active', 6, '2025-03-09 13:13:55'),
(14, 'John Doe', 'ian@1', 'we@gmail.com', '123', '2', '5', '$2y$12$xyZqlyp3veyR7.P.otfthODAwwtO1JBBaqzo5sJPmy85Bvh2K2pWe', 'Lawyer', 'Active', 6, '2025-03-09 13:59:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_tags`
--
ALTER TABLE `client_tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `practice_areas`
--
ALTER TABLE `practice_areas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_area`
--
ALTER TABLE `sub_area`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wc_users`
--
ALTER TABLE `wc_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `client_tags`
--
ALTER TABLE `client_tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `practice_areas`
--
ALTER TABLE `practice_areas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sub_area`
--
ALTER TABLE `sub_area`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `wc_users`
--
ALTER TABLE `wc_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
