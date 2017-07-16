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
 PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1
