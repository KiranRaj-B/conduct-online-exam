-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2024 at 06:53 PM
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
-- Database: `online_exam`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `email`, `password`) VALUES
(1, 'kiranraj@gmail.com', 'kiranraj'),
(2, 'admin@admin.com', 'admin'),
(4, 'sayed@gmail.com', 'sayed'),
(5, 'usaman@gmail.com', 'usaman'),
(6, 'umair@gmail.com', 'umair');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(32) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `text` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `first_name`, `last_name`, `email`, `text`) VALUES
(1, 'Kiran Raj ', 'B', 'kiranrajbadakambi@gmail.com', 'Your website is next level. Keep Rocking!!! '),
(2, 'Sandeep ', 'Kumbar ', 'sandeep@gmail.com', 'Your Website is helped me to crack interviews. Thank you'),
(3, 'Sayed ', 'C', 'sayed.21cse@cambridge.edu.in', 'Try to add more languages in future'),
(4, 'Umair ', 'R', 'umermohammed995@gmail.com', 'Good to learn websites'),
(5, 'Adarsh C', 'c', 'adarshchougale8282@gmail.com', 'Hey! Just wanted to say thanks for the awesome tutorials on your site. I learned Java, Python, SQL, and PHP, and the exams were next level! Feeling super confident now. Cheers!');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `confirm_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `email`, `password`, `confirm_password`) VALUES
(9, 'Kiran', 'Kiran@gmail.com', 'appu', 'appu'),
(16, 'user', 'user@user.com', 'user', 'user'),
(17, 'Sandeep', 'sandeep@gmail.com', '1234', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `test_details`
--

CREATE TABLE `test_details` (
  `id` int(32) NOT NULL,
  `category` varchar(255) NOT NULL,
  `test_no` int(32) NOT NULL,
  `q_text` varchar(255) NOT NULL,
  `q_image` varchar(255) NOT NULL,
  `choice_1` varchar(255) NOT NULL,
  `choice_2` varchar(255) NOT NULL,
  `choice_3` varchar(255) NOT NULL,
  `choice_4` varchar(255) NOT NULL,
  `c_answer` varchar(255) NOT NULL,
  `c_choice` varchar(255) NOT NULL,
  `date_time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `test_details`
--

INSERT INTO `test_details` (`id`, `category`, `test_no`, `q_text`, `q_image`, `choice_1`, `choice_2`, `choice_3`, `choice_4`, `c_answer`, `c_choice`, `date_time`) VALUES
(15, 'HTML and CSS', 1, 'What does HTML stand for?', '', 'Hyper Trainer Marking Language', 'Hyper Text Marketing Language', 'Hyper Text Markup Language', 'Hyper Text Markup Leveler', 'Hyper Text Markup Language', 'choice_3', '16-06-2024 10-52'),
(16, 'HTML and CSS', 1, 'What does the < a > tag in HTML stand for?', '', 'Anchor', 'Attribute', 'Align', 'Apply', 'Anchor', 'choice_1', '16-06-2024 10-52'),
(17, 'HTML and CSS', 1, 'Which HTML attribute is used to define inline styles?', '', 'font', 'class', 'style', 'styles', 'style', 'choice_3', '16-06-2024 10-52'),
(18, 'HTML and CSS', 1, 'What does the < br > tag do in HTML?', '', 'Creates a horizontal line', 'Makes text bold', ' Inserts a line break', 'Changes text color', 'Inserts a line break', 'choice_3', '16-06-2024 10-52'),
(19, 'HTML and CSS', 1, 'What is the purpose of the <meta> tag in HTML?', '', 'To link to external files', 'To add metadata about the HTML document', 'To create navigation links', 'To display images', 'To add metadata about the HTML document', 'choice_2', '16-06-2024 10-52'),
(20, 'HTML and CSS', 1, 'What does CSS stand for?', '', 'Creative Style Sheets', 'Computer Style Sheets', 'Cascading Style Sheets', 'Colorful Style Sheets', 'Cascading Style Sheets', 'choice_3', '16-06-2024 10-52'),
(21, 'HTML and CSS', 1, 'Which property is used to set the background color in CSS?', '', 'bgcolor', 'color', 'background', 'background-color', 'background-color', 'choice_4', '16-06-2024 10-52'),
(22, 'HTML and CSS', 1, 'How do you add a background color for all < h1 > elements in CSS?', '', 'h1 {background-color: blue;}', 'h1.all {background: blue;}', 'h1 {bgcolor: blue;}', 'h1 {background: blue;}', 'h1 {background-color: blue;}', 'choice_1', '16-06-2024 10-52'),
(23, 'HTML and CSS', 1, 'How do you center align text in CSS?', '', 'text-align: center;', 'align: center;', 'center: true;', 'text-align: middle;', 'text-align: center;', 'choice_1', '16-06-2024 10-52'),
(24, 'HTML and CSS', 1, 'Which property is used to change the font size of an element in CSS?', '', 'font-style', 'text-size', 'font-size', 'text-style', 'font-size', 'choice_3', '16-06-2024 10-52'),
(30, 'java', 1, 'What is the correct way to declare a variable to store an integer in Java?', '', 'int myNumber;', 'integer myNumber;', 'num myNumber;', 'Int myNumber;', 'int myNumber;', 'choice_1', '16-06-2024 11-30'),
(31, 'java', 1, 'Which keyword is used to define a constant in Java?', '', 'static', 'const', 'final', 'var', 'final', 'choice_3', '16-06-2024 11-31'),
(32, 'java', 1, 'What is the output of the following code snippet?\n\n```java\npublic class Main {\n   public static void main(String[] args) {\n      int x = 5;\n      System.out.println(++x);\n   }\n}\n```', '', '5', '6', 'Compiler error', 'Runtime error', '6', 'choice_2', '16-06-2024 11-32'),
(33, 'java', 1, 'Which of the following is not a valid keyword in Java?', '', 'delete', 'switch', 'if', 'then', 'then', 'choice_4', '16-06-2024 11-33'),
(34, 'java', 1, 'Which Java keyword is used to define a subclass?', '', 'superclass', 'extends', 'subclass', 'inherit', 'extends', 'choice_2', '16-06-2024 11-34'),
(35, 'java', 1, 'What is the correct signature of the main method in Java?', '', 'public static void main(String[] args)', 'public void main(String[] args)', 'public static int main(String[] args)', 'public static void Main(String[] args)', 'public static void main(String[] args)', 'choice_1', '16-06-2024 11-35'),
(36, 'java', 1, 'What will be the output of the following code?\n\n```java\npublic class Test {\n   public static void main(String[] args) {\n      String str = \"Hello\";\n      System.out.println(str.length());\n   }\n}\n```', '', '5', '6', 'Hello', 'null', '5', 'choice_1', '16-06-2024 11-36'),
(37, 'java', 1, 'Which of the following is a marker interface in Java?', '', 'Serializable', 'Runnable', 'Comparable', 'Cloneable', 'Serializable', 'choice_1', '16-06-2024 11-37'),
(38, 'java', 1, 'What is the correct way to create an object of class MyClass in Java?', '', 'MyClass obj = new MyClass();', 'MyClass.create();', 'new MyClass obj;', 'new MyClass();', 'MyClass obj = new MyClass();', 'choice_1', '16-06-2024 11-38'),
(39, 'java', 1, 'Which collection class allows you to associate a unique key with a value?', '', 'HashMap', 'ArrayList', 'TreeMap', 'HashSet', 'HashMap', 'choice_1', '16-06-2024 11-39'),
(40, 'python', 1, 'What is the output of the following Python code?\n\n```python\nprint(\"Hello, World!\")\n```', '', 'Hello, World!', 'Prints nothing', 'Error', 'None of the above', 'Hello, World!', 'choice_1', '16-06-2024 12-00'),
(41, 'python', 1, 'How do you declare a variable in Python?', '', 'variable = value', 'var variable = value', 'define variable = value', 'let variable = value', 'variable = value', 'choice_1', '16-06-2024 12-01'),
(42, 'python', 1, 'Which method can be used to remove a key-value pair from a dictionary in Python?', '', '.remove(key)', '.delete(key)', '.pop(key)', '.discard(key)', '.pop(key)', 'choice_3', '16-06-2024 12-02'),
(43, 'python', 1, 'What is the correct way to write a comment in Python?', '', '//This is a comment', '/*This is a comment*/', '#This is a comment', '\'\'\'This is a comment\'\'\'', '#This is a comment', 'choice_3', '16-06-2024 12-03'),
(44, 'python', 1, 'What will be the output of the following code?\n\n```python\nlist = [1, 2, 3, 4, 5]\nprint(list[2])\n```', '', '2', '3', 'IndexError', '4', '3', 'choice_2', '16-06-2024 12-04'),
(45, 'python', 1, 'Which function can be used to read input from the user in Python?', '', 'input()', 'read_input()', 'get_input()', 'read()', 'input()', 'choice_1', '16-06-2024 12-05'),
(46, 'python', 1, 'What is the correct way to write an empty function in Python?', '', 'def function_name(): pass', 'def function_name()', 'function function_name()', 'def function_name():', 'def function_name(): pass', 'choice_1', '16-06-2024 12-06'),
(47, 'python', 1, 'What is the output of the following code?\r\n\r\n```python\r\nfor i in range(1, 5):\r\n   print(i)\r\n```', '', '1\r\n2\r\n3\r\n4', '1, 2, 3, 4', '1 2 3 4', 'Error', '1234', 'choice_1', '16-06-2024 12-07'),
(48, 'python', 1, 'Which module in Python can be used to work with regular expressions?', '', 'regex', 'regexp', 'regular', 're', 're', 'choice_4', '16-06-2024 12-08'),
(49, 'python', 1, 'What does the `len()` function do in Python?', '', 'Returns the length of a string', 'Returns the length of a list or tuple', 'Returns the length of a dictionary', 'All of the above', 'All of the above', 'choice_4', '16-06-2024 12-09'),
(50, 'SQL', 1, 'What does SQL stand for?', '', 'Structured Query Language', 'Sequential Query Language', 'Structured Question Language', 'System Query Language', 'Structured Query Language', 'choice_1', '2024-06-16 12:00'),
(51, 'SQL', 1, 'Which SQL keyword is used to retrieve a maximum value?', '', 'MAX', 'MIN', 'TOP', 'SUM', 'MAX', 'choice_1', '2024-06-16 12:01'),
(52, 'SQL', 1, 'What does the SQL command SELECT do?', '', 'Deletes data from a database', 'Updates data in a database', 'Retrieves data from a database', 'Inserts data into a database', 'Retrieves data from a database', 'choice_3', '2024-06-16 12:02'),
(53, 'SQL', 1, 'Which SQL command is used to update data in a database?', '', 'MODIFY', 'UPDATE', 'SAVE', 'CHANGE', 'UPDATE', 'choice_2', '2024-06-16 12:03'),
(54, 'SQL', 1, 'What is the SQL command used to remove a table from the database?', '', 'REMOVE TABLE', 'DELETE TABLE', 'DROP TABLE', 'REMOVE', 'DROP TABLE', 'choice_3', '2024-06-16 12:04'),
(55, 'SQL', 1, 'What does the SQL command INSERT INTO do?', '', 'Creates a new table', 'Adds new rows to a table', 'Deletes rows from a table', 'Updates rows in a table', 'Adds new rows to a table', 'choice_2', '2024-06-16 12:05'),
(56, 'SQL', 1, 'Which SQL clause is used to filter records?', '', 'FILTER', 'SORT', 'SELECT', 'WHERE', 'WHERE', 'choice_4', '2024-06-16 12:06'),
(57, 'SQL', 1, 'Which SQL command is used to sort the result set in ascending order?', '', 'ORDER BY DESC', 'SORT ASC', 'ORDER BY ASC', 'SORT DESC', 'ORDER BY ASC', 'choice_3', '2024-06-16 12:07'),
(58, 'SQL', 1, 'What does the SQL command DELETE do?', '', 'Deletes data from a table', 'Deletes a table', 'Deletes a database', 'Deletes a row from a table', 'Deletes a row from a table', 'choice_4', '2024-06-16 12:08'),
(59, 'SQL', 1, 'Which SQL function is used to count the number of rows?', '', 'COUNT', 'SUM', 'CALC', 'TOTAL', 'COUNT', 'choice_1', '2024-06-16 12:09'),
(60, 'PHP', 1, 'What does PHP stand for?', '', 'Hypertext Preprocessor', 'Personal Home Page', 'Private Home Page', 'Pretext Hypertext Processor', 'Hypertext Preprocessor', 'choice_1', '2024-06-16 12:00'),
(61, 'PHP', 1, 'Which of the following is not a PHP data type?', '', 'Array', 'Integer', 'Boolean', 'Real', 'Real', 'choice_4', '2024-06-16 12:01'),
(62, 'PHP', 1, 'Which function in PHP can be used to redirect a user to a different page?', '', 'redirect()', 'header()', 'location()', 'go()', 'header()', 'choice_2', '2024-06-16 12:02'),
(63, 'PHP', 1, 'How do you start a session in PHP?', '', 'session_start()', 'start_session()', 'begin_session()', 'start()', 'session_start()', 'choice_1', '2024-06-16 12:03'),
(64, 'PHP', 1, 'Which of the following is used to comment in PHP?', '', '// This is a comment', '/* This is a comment */', '# This is a comment', 'All of the above', 'All of the above', 'choice_4', '2024-06-16 12:04'),
(65, 'PHP', 1, 'What is the correct way to concatenate two strings in PHP?', '', '$str1 + $str2', '$str1 . $str2', '$str1 & $str2', '$str1 : $str2', '$str1 . $str2', 'choice_2', '2024-06-16 12:05'),
(66, 'PHP', 1, 'What does the PHP function `var_dump()` do?', '', 'Outputs information about one or more variables', 'Prints the content of a variable', 'Sorts an array', 'None of the above', 'Outputs information about one or more variables', 'choice_1', '2024-06-16 12:06'),
(67, 'PHP', 1, 'Which PHP superglobal variable holds information about headers, paths, and script locations?', '', '$_SERVER', '$_SESSION', '$_REQUEST', '$_ENV', '$_SERVER', 'choice_1', '2024-06-16 12:07'),
(68, 'PHP', 1, 'Which of the following is used to send an email using PHP?', '', 'sendmail()', 'mail()', 'email()', 'smtp_send()', 'mail()', 'choice_2', '2024-06-16 12:08'),
(69, 'PHP', 1, 'What does the PHP function `isset()` check for?', '', 'If a variable is set and is not NULL', 'If a variable is set and is NULL', 'If a variable is set and is empty', 'If a variable is set and is numeric', 'If a variable is set and is not NULL', 'choice_1', '2024-06-16 12:09'),
(70, 'BOOTSTRAP', 1, 'What is Bootstrap?', '', 'A front-end framework', 'A back-end framework', 'A database management system', 'An operating system', 'A front-end framework', 'choice_1', '2024-06-16 12:00'),
(71, 'BOOTSTRAP', 1, 'Which CSS preprocessor is used by Bootstrap?', '', 'Sass', 'Less', 'Stylus', 'CSS preprocessors are not used by Bootstrap', 'Less', 'choice_2', '2024-06-16 12:01'),
(72, 'BOOTSTRAP', 1, 'What is the main grid system in Bootstrap based on?', '', '12 columns', '16 columns', '24 columns', '8 columns', '12 columns', 'choice_1', '2024-06-16 12:02'),
(73, 'BOOTSTRAP', 1, 'Which Bootstrap class is used to create a responsive, fixed-width container?', '', '.container-fluid', '.container-fixed', '.container', '.container-responsive', '.container', 'choice_3', '2024-06-16 12:03'),
(74, 'BOOTSTRAP', 1, 'Which Bootstrap class is used to create a navigation bar?', '', '.navbar', '.nav', '.navigation', '.nav-bar', '.navbar', 'choice_1', '2024-06-16 12:04'),
(75, 'BOOTSTRAP', 1, 'What is the latest version of Bootstrap?', '', 'Bootstrap 4', 'Bootstrap 3', 'Bootstrap 5', 'Bootstrap X', 'Bootstrap 5', 'choice_3', '2024-06-16 12:05'),
(76, 'BOOTSTRAP', 1, 'Which Bootstrap class is used to create a responsive image?', '', '.img-responsive', '.responsive-img', '.img-fluid', '.fluid-img', '.img-fluid', 'choice_3', '2024-06-16 12:06'),
(77, 'BOOTSTRAP', 1, 'Which Bootstrap class is used to create a modal?', '', '.modal', '.popup', '.dialog', '.alert', '.modal', 'choice_1', '2024-06-16 12:07'),
(78, 'BOOTSTRAP', 1, 'Which of the following Bootstrap classes is used to create a card component?', '', '.panel', '.card', '.box', '.container-card', '.card', 'choice_2', '2024-06-16 12:08'),
(79, 'BOOTSTRAP', 1, 'Which Bootstrap utility class is used to create spacing between elements?', '', '.spacing', '.margin', '.padding', '.space', '.margin', 'choice_2', '2024-06-16 12:09'),
(85, 'SQL', 2, 'What does SQL stand for?', '', 'Structured Query Language', 'Sequential Query Language', 'Structured Question Language', 'System Query Language', 'Structured Query Language', 'choice_1', '2024-06-16 12:00'),
(86, 'SQL', 2, 'Which SQL keyword is used to retrieve a maximum value?', '', 'MAX', 'MIN', 'TOP', 'SUM', 'MAX', 'choice_1', '2024-06-16 12:01'),
(87, 'SQL', 2, 'What does the SQL command SELECT do?', '', 'Deletes data from a database', 'Updates data in a database', 'Retrieves data from a database', 'Inserts data into a database', 'Retrieves data from a database', 'choice_3', '2024-06-16 12:02'),
(88, 'SQL', 2, 'Which SQL command is used to update data in a database?', '', 'MODIFY', 'UPDATE', 'SAVE', 'CHANGE', 'UPDATE', 'choice_2', '2024-06-16 12:03'),
(89, 'SQL', 2, 'What is the SQL command used to remove a table from the database?', '', 'REMOVE TABLE', 'DELETE TABLE', 'DROP TABLE', 'REMOVE', 'DROP TABLE', 'choice_3', '2024-06-16 12:04'),
(90, 'SQL', 2, 'What does the SQL command INSERT INTO do?', '', 'Creates a new table', 'Adds new rows to a table', 'Deletes rows from a table', 'Updates rows in a table', 'Adds new rows to a table', 'choice_2', '2024-06-16 12:05'),
(91, 'SQL', 2, 'Which SQL clause is used to filter records?', '', 'FILTER', 'SORT', 'SELECT', 'WHERE', 'WHERE', 'choice_4', '2024-06-16 12:06'),
(92, 'SQL', 2, 'Which SQL command is used to sort the result set in ascending order?', '', 'ORDER BY DESC', 'SORT ASC', 'ORDER BY ASC', 'SORT DESC', 'ORDER BY ASC', 'choice_3', '2024-06-16 12:07'),
(93, 'SQL', 2, 'What does the SQL command DELETE do?', '', 'Deletes data from a table', 'Deletes a table', 'Deletes a database', 'Deletes a row from a table', 'Deletes a row from a table', 'choice_4', '2024-06-16 12:08'),
(94, 'SQL', 2, 'Which SQL function is used to count the number of rows?', '', 'COUNT', 'SUM', 'CALC', 'TOTAL', 'COUNT', 'choice_1', '2024-06-16 12:09'),
(95, 'PHP', 2, 'What is PHP?', '', 'A scripting language suited for web development', 'A programming language used for mobile apps', 'A markup language for documents', 'An operating system', 'A scripting language suited for web development', 'choice_1', '2024-06-16 12:00'),
(96, 'PHP', 2, 'Which of the following is not a PHP data type?', '', 'Array', 'Integer', 'Boolean', 'Real', 'Real', 'choice_4', '2024-06-16 12:01'),
(97, 'PHP', 2, 'Which function in PHP can be used to redirect a user to a different page?', '', 'redirect()', 'header()', 'location()', 'go()', 'header()', 'choice_2', '2024-06-16 12:02'),
(98, 'PHP', 2, 'How do you start a session in PHP?', '', 'session_start()', 'start_session()', 'begin_session()', 'start()', 'session_start()', 'choice_1', '2024-06-16 12:03'),
(99, 'PHP', 2, 'Which of the following is used to comment in PHP?', '', '// This is a comment', '/* This is a comment */', '# This is a comment', 'All of the above', 'All of the above', 'choice_4', '2024-06-16 12:04'),
(100, 'PHP', 3, 'What is PHP?', '', 'A scripting language suited for web development', 'A programming language used for mobile apps', 'A markup language for documents', 'An operating system', 'A scripting language suited for web development', 'choice_1', '2024-06-16 12:00'),
(101, 'PHP', 3, 'Which of the following is not a PHP data type?', '', 'Array', 'Integer', 'Boolean', 'Real', 'Real', 'choice_4', '2024-06-16 12:01'),
(102, 'PHP', 3, 'Which function in PHP can be used to redirect a user to a different page?', '', 'redirect()', 'header()', 'location()', 'go()', 'header()', 'choice_2', '2024-06-16 12:02'),
(103, 'PHP', 3, 'How do you start a session in PHP?', '', 'session_start()', 'start_session()', 'begin_session()', 'start()', 'session_start()', 'choice_1', '2024-06-16 12:03'),
(104, 'PHP', 3, 'Which of the following is used to comment in PHP?', '', '// This is a comment', '/* This is a comment */', '# This is a comment', 'All of the above', 'All of the above', 'choice_4', '2024-06-16 12:04'),
(105, 'PHP', 4, 'What is PHP?', '', 'A scripting language suited for web development', 'A programming language used for mobile apps', 'A markup language for documents', 'An operating system', 'A scripting language suited for web development', 'choice_1', '2024-06-16 12:00'),
(106, 'PHP', 4, 'Which of the following is not a PHP data type?', '', 'Array', 'Integer', 'Boolean', 'Real', 'Real', 'choice_4', '2024-06-16 12:01'),
(107, 'PHP', 4, 'Which function in PHP can be used to redirect a user to a different page?', '', 'redirect()', 'header()', 'location()', 'go()', 'header()', 'choice_2', '2024-06-16 12:02'),
(108, 'PHP', 4, 'How do you start a session in PHP?', '', 'session_start()', 'start_session()', 'begin_session()', 'start()', 'session_start()', 'choice_1', '2024-06-16 12:03'),
(109, 'PHP', 4, 'Which of the following is used to comment in PHP?', '', '// This is a comment', '/* This is a comment */', '# This is a comment', 'All of the above', 'All of the above', 'choice_4', '2024-06-16 12:04'),
(110, 'PHP', 5, 'What is PHP?', '', 'A scripting language suited for web development', 'A programming language used for mobile apps', 'A markup language for documents', 'An operating system', 'A scripting language suited for web development', 'choice_1', '2024-06-16 12:00'),
(111, 'PHP', 5, 'Which of the following is not a PHP data type?', '', 'Array', 'Integer', 'Boolean', 'Real', 'Real', 'choice_4', '2024-06-16 12:01'),
(112, 'PHP', 5, 'Which function in PHP can be used to redirect a user to a different page?', '', 'redirect()', 'header()', 'location()', 'go()', 'header()', 'choice_2', '2024-06-16 12:02'),
(113, 'PHP', 5, 'How do you start a session in PHP?', '', 'session_start()', 'start_session()', 'begin_session()', 'start()', 'session_start()', 'choice_1', '2024-06-16 12:03'),
(114, 'PHP', 5, 'Which of the following is used to comment in PHP?', '', '// This is a comment', '/* This is a comment */', '# This is a comment', 'All of the above', 'All of the above', 'choice_4', '2024-06-16 12:04'),
(150, 'BOOTSTRAP', 2, 'What is Bootstrap?', '', 'A front-end framework', 'A back-end framework', 'A database management system', 'An operating system', 'A front-end framework', 'choice_1', '2024-06-16 12:00'),
(151, 'BOOTSTRAP', 2, 'Which version of Bootstrap introduced utility classes?', '', 'Bootstrap 3', 'Bootstrap 4', 'Bootstrap 5', 'Bootstrap 2', 'Bootstrap 4', 'choice_2', '2024-06-16 12:01'),
(152, 'BOOTSTRAP', 2, 'Which class is used to create a basic navigation bar in Bootstrap?', '', '.navbar-default', '.nav', '.navbar', '.navigation', '.navbar', 'choice_4', '2024-06-16 12:02'),
(153, 'BOOTSTRAP', 2, 'What does the grid system in Bootstrap use to create layouts?', '', 'Containers, rows, and columns', 'Flexbox', 'CSS floats', 'Grid elements', 'Containers, rows, and columns', 'choice_1', '2024-06-16 12:03'),
(154, 'BOOTSTRAP', 2, 'Which CSS framework is Bootstrap built upon?', '', 'Foundation', 'Pure', 'Skeleton', 'None (it uses its own custom CSS)', 'None (it uses its own custom CSS)', 'choice_4', '2024-06-16 12:04'),
(155, 'BOOTSTRAP', 3, 'What is the primary language Bootstrap is written in?', '', 'JavaScript', 'PHP', 'Python', 'CSS', 'CSS', 'choice_4', '2024-06-16 12:05'),
(156, 'BOOTSTRAP', 3, 'Which class is used to create a full-width container in Bootstrap?', '', '.container', '.container-fluid', '.container-full', '.full-width', '.container-fluid', 'choice_2', '2024-06-16 12:06'),
(157, 'BOOTSTRAP', 3, 'Which grid class is used to create a column that spans 3 units on large screens in Bootstrap?', '', '.col-md-3', '.col-lg-3', '.col-xl-3', '.col-3', '.col-lg-3', 'choice_2', '2024-06-16 12:07'),
(158, 'BOOTSTRAP', 3, 'Which component is used to create a responsive navigation menu in Bootstrap?', '', 'Navbar', 'Nav', 'Navmenu', 'Navigation', 'Navbar', 'choice_1', '2024-06-16 12:08'),
(159, 'BOOTSTRAP', 3, 'Which utility class in Bootstrap is used to hide elements visually but keep them for screen readers?', '', '.hidden', '.sr-only', '.visually-hidden', '.invisible', '.sr-only', 'choice_2', '2024-06-16 12:09'),
(160, 'BOOTSTRAP', 4, 'Which class is used to create a button in Bootstrap?', '', '.btn', '.button', '.btn-default', '.btn-primary', '.btn', 'choice_1', '2024-06-16 12:10'),
(161, 'BOOTSTRAP', 4, 'Which grid class is used to create a column that spans 6 units on medium screens in Bootstrap?', '', '.col-md-6', '.col-sm-6', '.col-lg-6', '.col-6', '.col-md-6', 'choice_1', '2024-06-16 12:11'),
(162, 'BOOTSTRAP', 4, 'Which utility class in Bootstrap is used to clear floats?', '', '.clearfix', '.float-clear', '.float-reset', '.clear-float', '.clearfix', 'choice_1', '2024-06-16 12:12'),
(163, 'BOOTSTRAP', 4, 'What is the Bootstrap class used to create responsive images?', '', '.img-responsive', '.image-responsive', '.responsive-img', '.img-fluid', '.img-fluid', 'choice_4', '2024-06-16 12:13'),
(164, 'BOOTSTRAP', 4, 'Which Bootstrap component is used to create a modal dialog box?', '', 'Modal', 'Dialog', 'Popup', 'Alert', 'Modal', 'choice_1', '2024-06-16 12:14'),
(165, 'BOOTSTRAP', 5, 'What is the purpose of the Bootstrap grid system?', '', 'To create responsive layouts', 'To handle backend logic', 'To manage databases', 'To style text and fonts', 'To create responsive layouts', 'choice_1', '2024-06-16 12:15'),
(166, 'BOOTSTRAP', 5, 'Which class is used to create a responsive grid column that will stack vertically on smaller screens?', '', '.col-md-12', '.col-xs-12', '.col-lg-12', '.col-sm-12', '.col-xs-12', 'choice_2', '2024-06-16 12:16'),
(167, 'BOOTSTRAP', 5, 'Which class is used to create a card component in Bootstrap?', '', '.panel', '.card', '.box', '.container', '.card', 'choice_2', '2024-06-16 12:17'),
(168, 'BOOTSTRAP', 5, 'Which component is used to create a navigation bar that collapses on smaller screens?', '', 'Navbar', 'Nav', 'Collapse', 'Bar', 'Navbar', 'choice_3', '2024-06-16 12:18'),
(169, 'BOOTSTRAP', 5, 'Which utility class in Bootstrap is used to add spacing between elements?', '', '.spacer', '.spacing', '.margins', '.margins-auto', '.margins-auto', 'choice_4', '2024-06-16 12:19'),
(170, 'SQL', 3, 'What is a primary key in a relational database?', '', 'A column or a set of columns that uniquely identifies each row in a table', 'A constraint that allows null values in a column', 'A column that stores only numeric data', 'A type of JOIN operation', 'A column or a set of columns that uniquely identifies each row in a table', 'choice_1', '2024-06-16 12:20'),
(171, 'SQL', 3, 'Which SQL keyword is used to retrieve a maximum value?', '', 'MAX', 'GREATEST', 'MOST', 'TOP', 'MAX', 'choice_1', '2024-06-16 12:21'),
(172, 'SQL', 3, 'What does the SQL abbreviation \"DDL\" stand for?', '', 'Data Definition Language', 'Data Description Language', 'Data Division Language', 'Data Design Language', 'Data Definition Language', 'choice_1', '2024-06-16 12:22'),
(173, 'SQL', 3, 'Which SQL command is used to update data in a database?', '', 'UPDATE', 'ALTER', 'MODIFY', 'MERGE', 'UPDATE', 'choice_1', '2024-06-16 12:23'),
(174, 'SQL', 3, 'In SQL, which operator is used to retrieve data based on a pattern?', '', 'LIKE', 'ESCAPE', 'PATTERN', 'WHERE', 'LIKE', 'choice_1', '2024-06-16 12:24'),
(175, 'SQL', 4, 'What does the SQL abbreviation \"DML\" stand for?', '', 'Data Manipulation Language', 'Data Management Language', 'Data Model Language', 'Data Modification Language', 'Data Manipulation Language', 'choice_1', '2024-06-16 12:25'),
(176, 'SQL', 4, 'Which SQL clause is used to filter records?', '', 'FILTER', 'GROUP BY', 'WHERE', 'HAVING', 'WHERE', 'choice_3', '2024-06-16 12:26'),
(177, 'SQL', 4, 'In SQL, which function is used to count the number of rows in a table?', '', 'COUNT(*)', 'SUM(*)', 'MAX(*)', 'COUNT', 'COUNT(*)', 'choice_1', '2024-06-16 12:27'),
(178, 'SQL', 4, 'Which SQL command is used to delete records from a database?', '', 'DELETE', 'ERASE', 'REMOVE', 'DROP', 'DELETE', 'choice_1', '2024-06-16 12:28'),
(179, 'SQL', 4, 'What does the SQL abbreviation \"ACID\" stand for in the context of database transactions?', '', 'Atomicity, Consistency, Isolation, Durability', 'Aggregation, Cohesion, Inheritance, Dependency', 'Access Control, Identity Management, Data Integrity, Concurrency Control', 'All Columns In Data', 'Atomicity, Consistency, Isolation, Durability', 'choice_1', '2024-06-16 12:29'),
(180, 'SQL', 5, 'Which SQL command is used to create a new database?', '', 'CREATE DATABASE', 'NEW DATABASE', 'ADD DATABASE', 'DB CREATE', 'CREATE DATABASE', 'choice_1', '2024-06-16 12:30'),
(181, 'SQL', 5, 'What is the purpose of the SQL SELECT statement?', '', 'To retrieve data from a database', 'To delete data from a database', 'To update data in a database', 'To create a new database', 'To retrieve data from a database', 'choice_1', '2024-06-16 12:31'),
(182, 'SQL', 5, 'Which clause is used to specify the rows to be included in the result set of a SQL query?', '', 'ORDER BY', 'GROUP BY', 'FILTER BY', 'WHERE', 'WHERE', 'choice_4', '2024-06-16 12:32'),
(183, 'SQL', 5, 'In SQL, which operator is used to retrieve data from multiple tables based on a related column?', '', 'JOIN', 'UNION', 'MERGE', 'MATCH', 'JOIN', 'choice_1', '2024-06-16 12:33'),
(184, 'SQL', 5, 'What is the purpose of the SQL ORDER BY clause?', '', 'To sort the result set by one or more columns', 'To filter the result set by a specified condition', 'To group the result set by one or more columns', 'To join multiple tables in a single result set', 'To sort the result set by one or more columns', 'choice_1', '2024-06-16 12:34'),
(185, 'Python', 2, 'What is Python?', '', 'A programming language', 'A type of snake', 'A food item', 'A movie', 'A programming language', 'choice_1', '2024-06-16 12:35'),
(186, 'Python', 2, 'What is the result of 2 + 3 in Python?', '', '5', '6', '4', '2', '5', 'choice_1', '2024-06-16 12:36'),
(187, 'Python', 2, 'Which of the following is NOT a Python data type?', '', 'Integer', 'List', 'Dictionary', 'Array', 'Array', 'choice_4', '2024-06-16 12:37'),
(188, 'Python', 2, 'What is the correct way to start a comment in Python?', '', '// This is a comment', '/* This is a comment */', '\'\'\' This is a comment \'\'\'', '# This is a comment', '# This is a comment', 'choice_4', '2024-06-16 12:38'),
(189, 'Python', 2, 'What is the output of print(\"Hello, World!\") in Python?', '', 'Hello, World!', 'print(\"Hello, World!\")', 'None', 'Error', 'Hello, World!', 'choice_1', '2024-06-16 12:39'),
(190, 'Python', 3, 'What is the output of the following Python code?\n\n```python\nprint(10 > 9)\n```', '', 'True', 'False', 'Error', 'None', 'True', 'choice_1', '2024-06-16 12:40'),
(191, 'Python', 3, 'Which of the following statements is used to exit a loop in Python?', '', 'exit()', 'break', 'continue', 'quit()', 'break', 'choice_2', '2024-06-16 12:41'),
(192, 'Python', 3, 'What is the correct way to create a function in Python?', '', 'def myFunction()', 'function myFunction()', 'define myFunction()', 'function: myFunction()', 'def myFunction()', 'choice_1', '2024-06-16 12:42'),
(193, 'Python', 3, 'Which of the following data structures is ordered and mutable?', '', 'Tuple', 'List', 'Set', 'Dictionary', 'List', 'choice_2', '2024-06-16 12:43'),
(194, 'Python', 3, 'What will be the output of the following Python code?\n\n```python\nx = [1, 2, 3]\nprint(x[1])\n```', '', '1', '2', '3', 'Error', '2', 'choice_2', '2024-06-16 12:44'),
(195, 'Python', 4, 'Which module in Python provides support for working with dates and times?', '', 'time', 'datetime', 'calendar', 'date', 'datetime', 'choice_2', '2024-06-16 12:45'),
(196, 'Python', 4, 'What is the correct way to open a file named \"data.txt\" in Python for reading?', '', 'open(\"data.txt\", \"r\")', 'open(\"data.txt\", \"read\")', 'open(\"data.txt\")', 'open(\"data.txt\", \"open\")', 'open(\"data.txt\", \"r\")', 'choice_1', '2024-06-16 12:46'),
(197, 'Python', 4, 'Which method in Python can be used to remove whitespace from the beginning and end of a string?', '', 'strip()', 'removeWhitespace()', 'clean()', 'trim()', 'strip()', 'choice_1', '2024-06-16 12:47'),
(198, 'Python', 4, 'Which module in Python provides support for working with dates and times?', '', 'time', 'datetime', 'calendar', 'date', 'datetime', 'choice_2', '2024-06-16 12:45'),
(199, 'Python', 4, 'What is the correct way to open a file named \"data.txt\" in Python for reading?', '', 'open(\"data.txt\", \"r\")', 'open(\"data.txt\", \"read\")', 'open(\"data.txt\")', 'open(\"data.txt\", \"open\")', 'open(\"data.txt\", \"r\")', 'choice_1', '2024-06-16 12:46'),
(200, 'Python', 4, 'Which method in Python can be used to remove whitespace from the beginning and end of a string?', '', 'strip()', 'removeWhitespace()', 'clean()', 'trim()', 'strip()', 'choice_1', '2024-06-16 12:47'),
(201, 'Python', 4, 'Which of the following statements correctly imports the \"math\" module in Python?', '', 'import math', 'include math', 'using math', 'from math import *', 'import math', 'choice_1', '2024-06-16 12:48'),
(202, 'Python', 4, 'What will the following code print?\n\n```python\nfor i in range(3):\n    print(i)\nelse:\n    print(\"Done\")\n```', '', '0 1 2 Done', '0 1 2', '1 2 3 Done', '0 1 2 Done', '0 1 2 Done', 'choice_1', '2024-06-16 12:49'),
(203, 'Python', 5, 'What is the result of the following Python code?\n\n```python\nx = 10\ny = 5\nprint(x // y)\n```', '', '2', '2.0', '0', 'Error', '2', 'choice_1', '2024-06-16 12:50'),
(204, 'Python', 5, 'Which statement is used to define a function in Python?', '', 'function myFunction():', 'def myFunction():', 'define myFunction():', 'func myFunction():', 'def myFunction():', 'choice_2', '2024-06-16 12:51'),
(205, 'Python', 5, 'What does the \"self\" keyword represent in a Python class method?', '', 'Current instance of the class', 'Returns a value from a method', 'A keyword to call other methods', 'Refers to the class itself', 'Current instance of the class', 'choice_1', '2024-06-16 12:52'),
(206, 'Python', 5, 'Which of the following is NOT a valid variable name in Python?', '', 'my_var', '_myvar', '1stVar', 'myVar1', '1stVar', 'choice_3', '2024-06-16 12:53'),
(207, 'Python', 5, 'What is the output of the following Python code?\n\n```python\ndef foo(x, y=1):\n    return x + y\n\nprint(foo(2, 3))\n```', '', '5', '6', '2', '3', '5', 'choice_1', '2024-06-16 12:54'),
(208, 'Java', 2, 'What is Java?', '', 'A programming language', 'A type of coffee', 'A continent', 'A movie', 'A programming language', 'choice_1', '2024-06-16 12:55'),
(209, 'Java', 2, 'Which of the following is not a primitive data type in Java?', '', 'boolean', 'char', 'float', 'array', 'array', 'choice_4', '2024-06-16 12:56'),
(210, 'Java', 2, 'Which keyword is used to prevent method overriding in Java?', '', 'static', 'final', 'abstract', 'const', 'final', 'choice_2', '2024-06-16 12:57'),
(211, 'Java', 2, 'What is the correct way to declare a constant in Java?', '', 'static final int CONSTANT = 1;', 'final int CONSTANT = 1;', 'int CONSTANT = 1;', 'const int CONSTANT = 1;', 'static final int CONSTANT = 1;', 'choice_1', '2024-06-16 12:58'),
(212, 'Java', 2, 'Which statement is used to exit from a loop in Java?', '', 'exit;', 'break;', 'return;', 'continue;', 'break;', 'choice_2', '2024-06-16 12:59'),
(213, 'Java', 3, 'What is the output of the following Java code?\n\n```java\nString str1 = \"Hello\";\nString str2 = \"Hello\";\nSystem.out.println(str1 == str2);\n```', '', 'true', 'false', 'error', 'null', 'true', 'choice_1', '2024-06-16 13:00'),
(214, 'Java', 3, 'Which method is called when an object is created in Java?', '', 'finalize()', 'destroy()', 'constructor()', 'create()', 'constructor()', 'choice_3', '2024-06-16 13:01'),
(215, 'Java', 3, 'Which of the following statements is true about Java interfaces?', '', 'Interfaces can contain only abstract methods', 'Interfaces cannot be extended by other interfaces', 'Interfaces can have method definitions', 'Interfaces can be instantiated', 'Interfaces can contain only abstract methods', 'choice_1', '2024-06-16 13:02'),
(216, 'Java', 3, 'What is the output of the following Java code?\n\n```java\nint x = 5;\nSystem.out.println(x++);\n```', '', '5', '6', 'Error', 'Compile-time error', '5', 'choice_1', '2024-06-16 13:03'),
(217, 'Java', 3, 'Which of the following Java keywords is used to define a subclass?', '', 'extends', 'implements', 'parent', 'subclass', 'extends', 'choice_1', '2024-06-16 13:04'),
(218, 'Java', 4, 'Which collection class allows null elements?', '', 'ArrayList', 'HashSet', 'HashMap', 'LinkedList', 'HashMap', 'choice_3', '2024-06-16 13:05'),
(219, 'Java', 4, 'What is the output of the following Java code?\n\n```java\nint[] arr = {1, 2, 3};\nSystem.out.println(arr[3]);\n```', '', '1', '2', '3', 'Error', 'Error', 'choice_4', '2024-06-16 13:06'),
(220, 'Java', 4, 'Which keyword is used to implement method overriding in Java?', '', 'override', 'overriding', 'extends', '@Override', '@Override', 'choice_4', '2024-06-16 13:07'),
(221, 'Java', 4, 'What is the correct way to handle exceptions in Java?', '', 'using try-catch blocks', 'using if-else statements', 'using throw statement', 'using finally block', 'using try-catch blocks', 'choice_1', '2024-06-16 13:08'),
(222, 'Java', 4, 'Which method is called automatically when an object is garbage collected in Java?', '', 'finalize()', 'dispose()', 'clean()', 'delete()', 'finalize()', 'choice_1', '2024-06-16 13:09'),
(223, 'Java', 5, 'What is the output of the following Java code?\n\n```java\nString str = \"Hello\";\nstr += \" World!\";\nSystem.out.println(str);\n```', '', 'Hello World!', 'Hello', 'World!', 'Error', 'Hello World!', 'choice_1', '2024-06-16 13:10'),
(224, 'Java', 5, 'Which of the following is true about method overloading in Java?', '', 'Same method name with different parameters', 'Same method name with same parameters', 'Different method names with different parameters', 'Different method names with same parameters', 'Same method name with different parameters', 'choice_1', '2024-06-16 13:11'),
(225, 'Java', 5, 'What is the default value of a boolean variable in Java?', '', 'false', 'true', 'null', '0', 'false', 'choice_1', '2024-06-16 13:12'),
(226, 'Java', 5, 'Which Java keyword is used to define a class that cannot be instantiated?', '', 'abstract', 'final', 'static', 'interface', 'abstract', 'choice_1', '2024-06-16 13:13'),
(227, 'Java', 5, 'Which of the following statements about Java threads is correct?', '', 'A thread is a lightweight process', 'Java does not support multi-threading', 'Every Java program has at least one thread', 'Threads cannot communicate with each other', 'A thread is a lightweight process', 'choice_1', '2024-06-16 13:14'),
(229, 'HTML and CSS', 3, 'What does HTML stand for?', '', 'Hyper Text Markup Language', 'Highly Textured Markup Language', 'Hyperlinks and Text Markup Language', 'Home Tool Markup Language', 'Hyper Text Markup Language', 'choice_1', '2024-06-16 13:31'),
(230, 'HTML and CSS', 4, 'Which attribute specifies an alternate text for an image?', '', 'alt', 'title', 'src', 'href', 'alt', 'choice_1', '2024-06-16 13:32'),
(233, 'HTML and CSS', 2, 'Which property is used to change the text color of an element?', '', 'color', 'text-color', 'font-color', 'foreground-color', 'color', 'choice_1', '2024-06-16 13:35'),
(234, 'HTML and CSS', 3, 'What does CSS stand for?', '', 'Cascading Style Sheets', 'Creative Style Sheets', 'Computer Style Sheets', 'Colorful Style Sheets', 'Cascading Style Sheets', 'choice_1', '2024-06-16 13:36');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(50) NOT NULL,
  `gender` varchar(5) NOT NULL,
  `college` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mob` bigint(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `gender`, `college`, `email`, `mob`, `password`) VALUES
('Avantika', 'F', 'KNIT sultanpur', 'avantika420@gmail.com', 7785068889, 'e10adc3949ba59abbe56e057f20f883e'),
('Mark Zukarburg', 'M', 'Stanford', 'ceo@facebook.com', 987654321, 'e10adc3949ba59abbe56e057f20f883e'),
('Kiran Badakambi', 'M', 'cit', 'kiranbadakambi@gmail.com', 9611929845, '3fda3f6f0aa929841f22980497a7b353'),
('Komal', 'F', 'KNIT sultanpur', 'komalpd2011@gmail.com', 7785068889, 'e10adc3949ba59abbe56e057f20f883e'),
('Tom Cruze', 'M', 'Hollywood', 'mi5@hollywood.com', 7785068889, 'e10adc3949ba59abbe56e057f20f883e'),
('Netcamp', 'M', 'KNIT sultanpur', 'netcamp@gmail.com', 987654321, 'e10adc3949ba59abbe56e057f20f883e'),
('Nikunj', 'M', 'XYZ', 'nik1@gmail.com', 987, '202cb962ac59075b964b07152d234b70'),
('Sunny', 'M', 'KNIT sultanpur', 'sunnygkp10@gmail.com', 7785068889, 'e10adc3949ba59abbe56e057f20f883e'),
('User', 'M', 'cimt', 'user@user.com', 11, 'e10adc3949ba59abbe56e057f20f883e'),
('Vikash', 'M', 'KNIT sultanpur@gmail.com', 'vikash@gmail.com', 7785068889, 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `users_otp`
--

CREATE TABLE `users_otp` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mobile_number` varchar(20) NOT NULL,
  `otp` varchar(6) DEFAULT NULL,
  `otp_expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users_otp`
--

INSERT INTO `users_otp` (`id`, `username`, `password`, `mobile_number`, `otp`, `otp_expires_at`) VALUES
(4, 'appu', 'raj', '9611929845', '747480', '2024-06-21 21:34:09'),
(5, 'kiran', 'hdghdfg', '9611929845', NULL, NULL),
(6, 'appu', '456', '9611929845', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `id` int(32) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `score` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`id`, `name`, `phone`, `score`) VALUES
(1, 'Kiran Raj', '9611929845', 56),
(2, 'Usaman', '7760171322', 38),
(3, 'Umair', '9177433756', 46),
(4, 'Sayed', '8790517718', 78);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test_details`
--
ALTER TABLE `test_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `users_otp`
--
ALTER TABLE `users_otp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `test_details`
--
ALTER TABLE `test_details`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=238;

--
-- AUTO_INCREMENT for table `users_otp`
--
ALTER TABLE `users_otp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
