# Setup for kloud51.com database

CREATE TABLE `plans` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `title` varchar(50) NOT NULL,
 `subtitle` varchar(200) NOT NULL,
 `price` float NOT NULL,
 `price_renew` float NOT NULL,
 `featured` tinyint(1) NOT NULL DEFAULT '0',
 `message` varchar(200) NOT NULL,
 `detail` text NOT NULL,
 `tooltip` varchar(500) NOT NULL,
 `color` varchar(50) NOT NULL,
 `button_label` varchar(50) NOT NULL DEFAULT 'Order Now',
 `button_link` varchar(1000) NOT NULL DEFAULT '#',
 `type` varchar(20) NOT NULL DEFAULT 'hosting',
 `hidden` tinyint(1) NOT NULL DEFAULT '0',
 PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1
