DROP DATABASE IF EXISTS levels;
CREATE DATABASE levels;
USE levels;

GRANT ALL PRIVILEGES ON levels.* TO 'levels_user'@'localhost' IDENTIFIED BY 'password123';

DROP TABLE IF EXISTS `user_songs`;
CREATE TABLE `user_songs` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(100) NOT NULL default '',
  `artist` varchar(100) NOT NULL default '',
  `album` varchar(100) NOT NULL default '',
  `source` varchar(130) NOT NULL default '',
  `liked` varchar(3) NOT NULL default 'NO',
  `cover_pic` varchar(130) NOT NULL default '',

  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

INSERT INTO `user_songs` VALUES (1, 'Cinderella', 'Mac Miller', 'The Divine Feminine', 'songs/added/Mac Miller - Cinderella feat Ty Dolla Sign', 'NO', 'songs/added/cover_pics/divine-fem.jpg'),
(2, 'Pink + White', 'Frank Ocean', 'Blond', 'songs/added/Frank Ocean - Pink + White.mp3', 'NO', 'songs/added/cover_pics/blond.jpg');
