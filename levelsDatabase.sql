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
  `cover_pic` varchar(130) NOT NULL default 'songs/added/cover_pics/default-cover.png',
  `artist_pic` varchar(130) NOT NULL default 'songs/added/artist_pics/default-artist.png',
  `feat_artist` varchar(100) NOT NULL default 'NONE',

  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

INSERT INTO `user_songs` VALUES (1, 'Cinderella (feat. Ty Dolla Sign)', 'Mac Miller', 'The Divine Feminine', 'songs/added/Mac Miller - Cinderella feat Ty Dolla Sign.mp3', 'NO', 'songs/added/cover_pics/mac-miller-divine-feminie.jpg', 'songs/added/artist_pics/mac-miller.png', 'Ty Dolla Sign'),
(2, 'Stay', 'Mac Miller', 'The Divine Feminine', 'songs/added/Mac Miller - Stay.mp3', 'NO', 'songs/added/cover_pics/mac-miller-divine-feminie.jpg', 'songs/added/artist_pics/mac-miller.png', 'NONE'),
(3, 'Soulmate', 'Mac Miller', 'The Divine Feminine', 'songs/added/Mac Miller - Soulmate.mp3', 'NO', 'songs/added/cover_pics/mac-miller-divine-feminie.jpg', 'songs/added/artist_pics/mac-miller.png', 'NONE'),
(4, 'My Favourite Part (feat. Ariana Grande)', 'Mac Miller', 'The Divine Feminine', 'songs/added/Mac Miller - My Favorite Part (feat. Ariana Grande).mp3', 'YES', 'songs/added/cover_pics/mac-miller-divine-feminie.jpg', 'songs/added/artist_pics/mac-miller.png', 'Ariana Grande'),
(5, 'Skin', 'Mac Miller', 'The Divine Feminine', 'songs/added/Mac Miller - Skin.mp3', 'NO', 'songs/added/cover_pics/mac-miller-divine-feminie.jpg', 'songs/added/artist_pics/mac-miller.png', 'NONE'),
(6, 'Dang! (feat. Anderson Paak)', 'Mac Miller', 'The Divine Feminine', 'songs/added/Mac Miller - Dang! (feat. Anderson .Paak).mp3', 'NO', 'songs/added/cover_pics/mac-miller-divine-feminie.jpg', 'songs/added/artist_pics/mac-miller.png', 'Anderson Paak'),
(7, 'Pink + White', 'Frank Ocean', 'Blond', 'songs/added/Frank Ocean - Pink + White.mp3', 'NO', 'songs/added/cover_pics/frank-ocean-blond.jpg', 'songs/added/artist_pics/frank-ocean.png', 'NONE'),
(8, 'Pretty Sweet', 'Frank Ocean', 'Blond', 'songs/added/Frank Ocean - Pretty Sweet.mp3', 'NO', 'songs/added/cover_pics/frank-ocean-blond.jpg', 'songs/added/artist_pics/frank-ocean.png', 'NONE'),
(9, 'Godspeed', 'Frank Ocean', 'Blond', 'songs/added/Frank Ocean - Godspeed.mp3', 'NO', 'songs/added/cover_pics/frank-ocean-blond.jpg', 'songs/added/artist_pics/frank-ocean.png', 'NONE'),
(10, 'Nights', 'Frank Ocean', 'Blond', 'songs/added/Frank Ocean - Nights.mp3', 'NO', 'songs/added/cover_pics/frank-ocean-blond.jpg', 'songs/added/artist_pics/frank-ocean.png', 'NONE'),
(11, 'Seigfried', 'Frank Ocean', 'Blond', 'songs/added/Frank Ocean - Seigfried.mp3', 'NO', 'songs/added/cover_pics/frank-ocean-blond.jpg', 'songs/added/artist_pics/frank-ocean.png', 'NONE'),
(12, 'Nikes', 'Frank Ocean', 'Blond', 'songs/added/Frank Ocean - Nikes.mp3', 'NO', 'songs/added/cover_pics/frank-ocean-blond.jpg', 'songs/added/artist_pics/frank-ocean.png', 'NONE'),
(13, 'White Ferrari', 'Frank Ocean', 'Blond', 'songs/added/Frank Ocean - White Ferrari.mp3', 'YES', 'songs/added/cover_pics/frank-ocean-blond.jpg', 'songs/added/artist_pics/frank-ocean.png', 'NONE'),
(14, 'FEAR.', 'Kendrick Lamar', 'DAMN.', 'songs/added/Kendrick Lamar - Fear.mp3', 'NO', 'songs/added/cover_pics/kendrick-lamar-damn.jpg', 'songs/added/artist_pics/kendrick-lamar.png', 'NONE'),
(15, 'LOVE. (feat. Zacari)', 'Kendrick Lamar', 'DAMN.', 'songs/added/Kendrick Lamar - LOVE. ft. Zacari.mp3', 'NO', 'songs/added/cover_pics/kendrick-lamar-damn.jpg', 'songs/added/artist_pics/kendrick-lamar.png', 'Zacari'),
(16, 'HUMBLE.', 'Kendrick Lamar', 'DAMN.', 'songs/added/Kendrick Lamar - HUMBLE..mp3', 'NO', 'songs/added/cover_pics/kendrick-lamar-damn.jpg', 'songs/added/artist_pics/kendrick-lamar.png', 'NONE'),
(17, 'BLOOD.', 'Kendrick Lamar', 'DAMN.', 'songs/added/Kendrick Lamar - BLOOD..mp3', 'NO', 'songs/added/cover_pics/kendrick-lamar-damn.jpg', 'songs/added/artist_pics/kendrick-lamar.png', 'NONE'),
(18, 'Ghost in the Machine (feat. Phoebe Bridgers)', 'SZA', 'SOS', 'songs/added/SZA - Ghost in the Machine ft Phoebe Bridgers.mp3', 'YES', 'songs/added/cover_pics/SZA-S.O.S.jpeg', 'songs/added/artist_pics/sza.png', 'Phoebe Bridgers'),
(19, 'Blind', 'SZA', 'SOS', 'songs/added/SZA - Blind.mp3', 'NO', 'songs/added/cover_pics/SZA-S.O.S.jpeg', 'songs/added/artist_pics/sza.png', 'NONE'),
(20, 'Special', 'SZA', 'SOS', 'songs/added/SZA - Special.mp3', 'NO', 'songs/added/cover_pics/SZA-S.O.S.jpeg', 'songs/added/artist_pics/sza.png', 'NONE'),
(21, 'Shirt', 'SZA', 'SOS', 'songs/added/SZA - Shirt.mp3', 'NO', 'songs/added/cover_pics/SZA-S.O.S.jpeg', 'songs/added/artist_pics/sza.png', 'NONE'),
(22, 'Smoking on my Ex Pack', 'SZA', 'SOS', 'songs/added/SZA - Smoking on my Ex Pack.mp3', 'NO', 'songs/added/cover_pics/SZA-S.O.S.jpeg', 'songs/added/artist_pics/sza.png', 'NONE'),
(23, 'Chicago Boy', 'Ari Lennox', 'Shea Butter Baby', 'songs/added/Ari Lennox -  Chicago Boy.mp3', 'NO', 'songs/added/cover_pics/ari-lennox-shea-butter-baby.jpg', 'songs/added/artist_pics/ari-lennox.jpg', 'NONE'),
(24, 'Broke (feat. JID)', 'Ari Lennox', 'Shea Butter Baby', 'songs/added/Ari Lennox - Broke ft JID.mp3', 'NO', 'songs/added/cover_pics/ari-lennox-shea-butter-baby.jpg', 'songs/added/artist_pics/ari-lennox.jpg', 'JID'),
(25, 'Shea Butter Baby (feat. J. Cole)', 'Ari Lennox', 'Shea Butter Baby', 'songs/added/Ari Lennox ft J Cole  Shea Butter Baby.mp3', 'NO', 'songs/added/cover_pics/ari-lennox-shea-butter-baby.jpg', 'songs/added/artist_pics/ari-lennox.jpg', 'J. Cole'),
(26, 'Whipped Cream', 'Ari Lennox', 'Shea Butter Baby', 'songs/added/Ari Lennox - Whipped Cream.mp3', 'NO', 'songs/added/cover_pics/ari-lennox-shea-butter-baby.jpg', 'songs/added/artist_pics/ari-lennox.jpg', 'NONE'),
(27, 'Count Me Out', 'Kendrick Lamar', 'Mr. Morale and the Big Steppers', 'songs/added/Kendrick Lamar - Count Me Out.mp3', 'NO', 'songs/added/cover_pics/kendrick-lamar-mr-morale-and-the-big-steppers.jpeg', 'songs/added/artist_pics/kendrick-lamar.png', 'NONE'),
(28, 'The Heart Part 5', 'Kendrick Lamar', 'Mr. Morale and the Big Steppers', 'songs/added/Kendrick Lamar - The Heart Part 5.mp3', 'NO', 'songs/added/cover_pics/kendrick-lamar-mr-morale-and-the-big-steppers.jpeg', 'songs/added/artist_pics/kendrick-lamar.png', 'NONE'),
(29, 'Father Time (feat. Sampha)', 'Kendrick Lamar', 'Mr. Morale and the Big Steppers', 'songs/added/Kendrick Lamar -Father Time ft Sampha.mp3', 'NO', 'songs/added/cover_pics/kendrick-lamar-mr-morale-and-the-big-steppers.jpeg', 'songs/added/artist_pics/kendrick-lamar.png', 'NONE'),
(30, 'Auntie Diaries', 'Kendrick Lamar', 'Mr. Morale and the Big Steppers', 'songs/added/Kendrick Lamar - Auntie Diaries.mp3', 'NO', 'songs/added/cover_pics/kendrick-lamar-mr-morale-and-the-big-steppers.jpeg', 'songs/added/artist_pics/kendrick-lamar.png', 'NONE'),
(31, 'N95', 'Kendrick Lamar', 'Mr. Morale and the Big Steppers', 'songs/added/Kendrick Lamar  - N95.mp3', 'NO', 'songs/added/cover_pics/kendrick-lamar-mr-morale-and-the-big-steppers.jpeg', 'songs/added/artist_pics/kendrick-lamar.png', 'NONE'),
(32, 'Cant Make U Change (feat. Ari Lennox)', 'JID', 'The Forever Story', 'songs/added/Cant Make U Change (feat. Ari Lennox).mp3', 'NO', 'songs/added/cover_pics/jid-the-forever-story.jpg', 'songs/added/artist_pics/jid.png', 'Ari Lennox'),
(33, 'Cant Punk Me (feat. EARTHGANG)', 'JID', 'The Forever Story', 'songs/added/Cant Punk Me (feat. EARTHGANG).mp3', 'NO', 'songs/added/cover_pics/jid-the-forever-story.jpg', 'songs/added/artist_pics/jid.png', 'EARTHGANG'),
(34, 'Sing About Me, Im Dying of Thirst', 'Kendrick Lamar', 'good kid m.A.A.d city', 'songs/added/Sing About Me Im Dying Of Thirst.mp3', 'NO', 'songs/added/cover_pics/kendrick-lamar-good-kid-maad-city.png', 'songs/added/artist_pics/kendrick-lamar.png', 'NONE');


DROP TABLE IF EXISTS `playlists`;
CREATE TABLE `playlists` (
  
  `name` varchar(100) NOT NULL default '',
  `songs` varchar(500) NOT NULL default '',
  

  PRIMARY KEY  (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;


INSERT INTO `playlists` VALUES ('Chill_Vibes', '4,24,7'),
('Kenny', '22,24,30,31,16,14,27');