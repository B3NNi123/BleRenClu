CREATE TABLE `users` (
`uid` INT(11) NOT NULL AUTO_INCREMENT ,
`username` VARCHAR(45) ,
`password` VARCHAR(100) ,
`email` VARCHAR(45) ,
`friend_count` INT(11) ,
`profile_pic` VARCHAR(150),
PRIMARY KEY (`uid`));
