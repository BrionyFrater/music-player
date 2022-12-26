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
  `artist_pic` varchar(130) NOT NULL default 'songs/added/cover_pics/default-artist.jpg',

  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

INSERT INTO `user_songs` VALUES (1, 'Cinderella', 'Mac Miller', 'The Divine Feminine', 'songs/added/Mac Miller - Cinderella feat Ty Dolla Sign.mp3', 'NO', 'songs/added/cover_pics/mac-miller-divine-feminie.jpg', 'songs/added/artist_pics/mac-miller.jpg'),
(2, 'Stay', 'Mac Miller', 'The Divine Feminine', 'songs/added/Mac Miller - Stay.mp3', 'NO', 'songs/added/cover_pics/mac-miller-divine-feminie.jpg', 'songs/added/artist_pics/mac-miller.jpg'),
(3, 'Soulmate', 'Mac Miller', 'The Divine Feminine', 'songs/added/Mac Miller - Soulmate.mp3', 'NO', 'songs/added/cover_pics/mac-miller-divine-feminie.jpg', 'songs/added/artist_pics/mac-miller.jpg'),
(4, 'My Favourite Part (feat. Ariana Grande)', 'Mac Miller', 'The Divine Feminine', 'songs/added/Mac Miller - My Favorite Part (feat. Ariana Grande).mp3', 'NO', 'songs/added/cover_pics/mac-miller-divine-feminie.jpg', 'songs/added/artist_pics/mac-miller.jpg'),
(5, 'Skin', 'Mac Miller', 'The Divine Feminine', 'songs/added/Mac Miller - Skin.mp3', 'NO', 'songs/added/cover_pics/mac-miller-divine-feminie.jpg', 'songs/added/artist_pics/mac-miller.jpg'),
(6, 'Dang! (feat. Anderson Paak)', 'Mac Miller', 'The Divine Feminine', 'songs/added/Mac Miller - Dang! (feat. Anderson .Paak).mp3', 'NO', 'songs/added/cover_pics/mac-miller-divine-feminie.jpg', 'songs/added/artist_pics/mac-miller.jpg'),
(7, 'Pink + White', 'Frank Ocean', 'Blond', 'songs/added/Frank Ocean - Pink + White.mp3', 'NO', 'songs/added/cover_pics/frank-ocean-blond.jpg', 'songs/added/artist_pics/frank-ocean.jpg'),
(8, 'Pretty Sweet', 'Frank Ocean', 'Blond', 'songs/added/Frank Ocean - Pretty Sweet.mp3', 'NO', 'songs/added/cover_pics/frank-ocean-blond.jpg', 'songs/added/artist_pics/frank-ocean.jpg'),
(9, 'Godspeed', 'Frank Ocean', 'Blond', 'songs/added/Frank Ocean - Godspeed.mp3', 'NO', 'songs/added/cover_pics/frank-ocean-blond.jpg', 'songs/added/artist_pics/frank-ocean.jpg'),
(10, 'Nights', 'Frank Ocean', 'Blond', 'songs/added/Frank Ocean - Nights.mp3', 'NO', 'songs/added/cover_pics/frank-ocean-blond.jpg', 'songs/added/artist_pics/frank-ocean.jpg'),
(11, 'Seigfried', 'Frank Ocean', 'Blond', 'songs/added/Frank Ocean - Seigfried.mp3', 'NO', 'songs/added/cover_pics/frank-ocean-blond.jpg', 'songs/added/artist_pics/frank-ocean.jpg'),
(12, 'Nikes', 'Frank Ocean', 'Blond', 'songs/added/Frank Ocean - Nikes.mp3', 'NO', 'songs/added/cover_pics/frank-ocean-blond.jpg', 'songs/added/artist_pics/frank-ocean.jpg'),
(13, 'White Ferrari', 'Frank Ocean', 'Blond', 'songs/added/Frank Ocean - White Ferrari.mp3', 'NO', 'songs/added/cover_pics/frank-ocean-blond.jpg', 'songs/added/artist_pics/frank-ocean.jpg'),
(14, 'FEAR.', 'Kendrick Lamar', 'DAMN.', 'songs/added/Kendrick Lamar - Fear.mp3', 'NO', 'songs/added/cover_pics/kendrick-lamar-damn.jpg', 'songs/added/artist_pics/kendrick-lamar.jpg'),
(15, 'LOVE. (feat. Zacari)', 'Kendrick Lamar', 'DAMN.', 'songs/added/Kendrick Lamar - LOVE. ft. Zacari.mp3', 'NO', 'songs/added/cover_pics/kendrick-lamar-damn.jpg', 'songs/added/artist_pics/kendrick-lamar.jpg'),
(16, 'HUMBLE.', 'Kendrick Lamar', 'DAMN.', 'songs/added/Kendrick Lamar - HUMBLE..mp3', 'NO', 'songs/added/cover_pics/kendrick-lamar-damn.jpg', 'songs/added/artist_pics/kendrick-lamar.jpg'),
(17, 'BLOOD.', 'Kendrick Lamar', 'DAMN.', 'songs/added/Kendrick Lamar - BLOOD..mp3', 'NO', 'songs/added/cover_pics/kendrick-lamar-damn.jpg', 'songs/added/artist_pics/kendrick-lamar.jpg'),
(18, 'Ghost in the Machine (feat. Phoebe Bridgers)', 'SZA', 'SOS', 'songs/added/SZA - Ghost in the Machine ft Phoebe Bridgers.mp3', 'NO', 'songs/added/cover_pics/SZA-S.O.S.jpeg', 'songs/added/artist_pics/sza.jpg');
