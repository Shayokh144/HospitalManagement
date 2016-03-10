<?php
echo 'a';
include ("data.php");
$sql ="CREATE TABLE  `images` (
`id` int(11) NOT NULL auto_increment,
`name` varchar(100) default NULL,
`size` int(11) default NULL,
`type` varchar(20) default NULL,
`content` mediumblob,
PRIMARY KEY  (`id`)
)";




?>