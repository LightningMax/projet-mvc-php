# projet-mvc-php


CREATE TABLE `contact` (
  `id` int NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` text NOT NULL
);