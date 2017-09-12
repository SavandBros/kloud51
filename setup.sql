# Setup for kloud51.com database

CREATE TABLE `plans` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `title` varchar(50) NOT NULL,
 `subtitle` varchar(200) NOT NULL,
 `price` int(11) NOT NULL,
 `featured` tinyint(1) NOT NULL DEFAULT '0',
 `detail` text NOT NULL,
 `color` varchar(50) NOT NULL,
 `button_label` varchar(50) NOT NULL DEFAULT 'Order Now',
 `button_link` varchar(1000) NOT NULL DEFAULT '#',
 `hidden` BOOLEAN NOT NULL DEFAULT FALSE,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1

CREATE TABLE `plan_features` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `content` varchar(100) NOT NULL,
 `highlight` BOOLEAN NOT NULL DEFAULT FALSE,
 PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1
