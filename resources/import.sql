DROP TABLE IF EXISTS `customer_group`;
CREATE TABLE `customer_group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `fixed_discount` tinyint(3) unsigned DEFAULT NULL,
  `variable_discount` tinyint(3) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `customer_group_parent_id_IDX` (`parent_id`) USING BTREE,
  CONSTRAINT `customer_group_FK` FOREIGN KEY (`parent_id`) REFERENCES `customer_group` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `customer`;
CREATE TABLE `customer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `group_id` int(11) NOT NULL,
  `fixed_discount` tinyint(3) unsigned DEFAULT NULL,
  `variable_discount` tinyint(3) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `customer_FK` FOREIGN KEY (`id`) REFERENCES `customer_group` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `product`;
CREATE TABLE `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

INSERT INTO product (id, `name`, price) VALUES (1, 'mouse pad', 5418);
INSERT INTO product (id, `name`, price) VALUES (2, 'nail file', 1829);
INSERT INTO product (id, `name`, price) VALUES (3, 'tooth picks', 2505);
INSERT INTO product (id, `name`, price) VALUES (4, 'lamp shade', 7501);
INSERT INTO product (id, `name`, price) VALUES (5, 'glass', 8896);
INSERT INTO product (id, `name`, price) VALUES (6, 'mirror', 1112);
INSERT INTO product (id, `name`, price) VALUES (7, 'face wash', 2874);
INSERT INTO product (id, `name`, price) VALUES (8, 'clothes', 1999);
INSERT INTO product (id, `name`, price) VALUES (9, 'pen', 1595);
INSERT INTO product (id, `name`, price) VALUES (10, 'drill press', 9289);
INSERT INTO product (id, `name`, price) VALUES (11, 'chapter book', 7589);
INSERT INTO product (id, `name`, price) VALUES (12, 'sandal', 3573);
INSERT INTO product (id, `name`, price) VALUES (13, 'rubber duck', 2533);
INSERT INTO product (id, `name`, price) VALUES (14, 'thermostat', 6623);
INSERT INTO product (id, `name`, price) VALUES (15, 'controller', 3722);
INSERT INTO product (id, `name`, price) VALUES (16, 'charger', 313);
INSERT INTO product (id, `name`, price) VALUES (17, 'watch', 8360);
INSERT INTO product (id, `name`, price) VALUES (18, 'button', 9777);
INSERT INTO product (id, `name`, price) VALUES (19, 'cookie jar', 4632);
INSERT INTO product (id, `name`, price) VALUES (20, 'nail clippers', 2931);
INSERT INTO product (id, `name`, price) VALUES (21, 'headphones', 9738);
INSERT INTO product (id, `name`, price) VALUES (22, 'chocolate', 1581);
INSERT INTO product (id, `name`, price) VALUES (23, 'thermometer', 5954);
INSERT INTO product (id, `name`, price) VALUES (24, 'grid paper', 8859);
INSERT INTO product (id, `name`, price) VALUES (25, 'candy wrapper', 366);
INSERT INTO product (id, `name`, price) VALUES (26, 'purse', 540);
INSERT INTO product (id, `name`, price) VALUES (27, 'sketch pad', 148);
INSERT INTO product (id, `name`, price) VALUES (28, 'soda can', 5905);
INSERT INTO product (id, `name`, price) VALUES (29, 'doll', 2187);
INSERT INTO product (id, `name`, price) VALUES (30, 'socks', 1412);
INSERT INTO product (id, `name`, price) VALUES (31, 'clock', 4633);
INSERT INTO product (id, `name`, price) VALUES (32, 'photo album', 6012);
INSERT INTO product (id, `name`, price) VALUES (33, 'glow stick', 4220);
INSERT INTO product (id, `name`, price) VALUES (34, 'water bottle', 938);
INSERT INTO product (id, `name`, price) VALUES (35, 'slipper', 1404);
INSERT INTO product (id, `name`, price) VALUES (36, 'lamp', 7415);
INSERT INTO product (id, `name`, price) VALUES (37, 'lip gloss', 2791);
INSERT INTO product (id, `name`, price) VALUES (38, 'paint brush', 7439);
INSERT INTO product (id, `name`, price) VALUES (39, 'eraser', 1773);
INSERT INTO product (id, `name`, price) VALUES (40, 'speakers', 2185);
INSERT INTO product (id, `name`, price) VALUES (41, 'washing machine', 1196);
INSERT INTO product (id, `name`, price) VALUES (42, 'keys', 3399);
INSERT INTO product (id, `name`, price) VALUES (43, 'magnet', 8398);
INSERT INTO product (id, `name`, price) VALUES (44, 'tissue box', 265);
INSERT INTO product (id, `name`, price) VALUES (45, 'rug', 174);
INSERT INTO product (id, `name`, price) VALUES (46, 'hair brush', 6782);
INSERT INTO product (id, `name`, price) VALUES (47, 'blouse', 9363);
INSERT INTO product (id, `name`, price) VALUES (48, 'truck', 6429);
INSERT INTO product (id, `name`, price) VALUES (49, 'beef', 9959);
INSERT INTO product (id, `name`, price) VALUES (50, 'outlet', 7764);
INSERT INTO product (id, `name`, price) VALUES (51, 'house', 5378);
INSERT INTO product (id, `name`, price) VALUES (52, 'blanket', 7243);
INSERT INTO product (id, `name`, price) VALUES (53, 'thread', 3661);
INSERT INTO product (id, `name`, price) VALUES (54, 'knife', 2830);
INSERT INTO product (id, `name`, price) VALUES (55, 'rubber band', 6507);
INSERT INTO product (id, `name`, price) VALUES (56, 'lotion', 9168);
INSERT INTO product (id, `name`, price) VALUES (57, 'greeting card', 2416);
INSERT INTO product (id, `name`, price) VALUES (58, 'bookmark', 838);
INSERT INTO product (id, `name`, price) VALUES (59, 'helmet', 6306);
INSERT INTO product (id, `name`, price) VALUES (60, 'flag', 1952);
INSERT INTO product (id, `name`, price) VALUES (61, 'towel', 1844);
INSERT INTO product (id, `name`, price) VALUES (62, 'wagon', 2997);
INSERT INTO product (id, `name`, price) VALUES (63, 'cat', 6365);
INSERT INTO product (id, `name`, price) VALUES (64, 'clay pot', 788);
INSERT INTO product (id, `name`, price) VALUES (65, 'seat belt', 4211);
INSERT INTO product (id, `name`, price) VALUES (66, 'boom box', 9661);
INSERT INTO product (id, `name`, price) VALUES (67, 'pool stick', 1187);
INSERT INTO product (id, `name`, price) VALUES (68, 'sun glasses', 5121);
INSERT INTO product (id, `name`, price) VALUES (69, 'stop sign', 5685);
INSERT INTO product (id, `name`, price) VALUES (70, 'hair tie', 4459);
INSERT INTO product (id, `name`, price) VALUES (71, 'shampoo', 5128);
INSERT INTO product (id, `name`, price) VALUES (72, 'chalk', 8555);
INSERT INTO product (id, `name`, price) VALUES (73, 'computer', 3305);
INSERT INTO product (id, `name`, price) VALUES (74, 'couch', 3629);
INSERT INTO product (id, `name`, price) VALUES (75, 'toilet', 3329);
INSERT INTO product (id, `name`, price) VALUES (76, 'picture frame', 2721);
INSERT INTO product (id, `name`, price) VALUES (77, 'video games', 3289);
INSERT INTO product (id, `name`, price) VALUES (78, 'fake flowers', 8601);
INSERT INTO product (id, `name`, price) VALUES (79, 'street lights', 9204);
INSERT INTO product (id, `name`, price) VALUES (80, 'balloon', 8676);
INSERT INTO product (id, `name`, price) VALUES (81, 'car', 1997);
INSERT INTO product (id, `name`, price) VALUES (82, 'candle', 9293);
INSERT INTO product (id, `name`, price) VALUES (83, 'cinder block', 8265);
INSERT INTO product (id, `name`, price) VALUES (84, 'table', 8641);
INSERT INTO product (id, `name`, price) VALUES (85, 'mp3 player', 4823);
INSERT INTO product (id, `name`, price) VALUES (86, 'soy sauce packet', 3696);
INSERT INTO product (id, `name`, price) VALUES (87, 'pants', 9035);
INSERT INTO product (id, `name`, price) VALUES (88, 'tree', 8811);
INSERT INTO product (id, `name`, price) VALUES (89, 'lace', 2336);
INSERT INTO product (id, `name`, price) VALUES (90, 'spoon', 3025);
INSERT INTO product (id, `name`, price) VALUES (91, 'apple', 8941);
INSERT INTO product (id, `name`, price) VALUES (92, 'buckel', 365);
INSERT INTO product (id, `name`, price) VALUES (93, 'zipper', 2489);
INSERT INTO product (id, `name`, price) VALUES (94, 'glasses', 7454);
INSERT INTO product (id, `name`, price) VALUES (95, 'playing card', 8934);
INSERT INTO product (id, `name`, price) VALUES (96, 'book', 496);
INSERT INTO product (id, `name`, price) VALUES (97, 'air freshener', 1422);
INSERT INTO product (id, `name`, price) VALUES (98, 'drawer', 5119);
INSERT INTO product (id, `name`, price) VALUES (99, 'soap', 5723);


INSERT INTO customer_group (id, name, fixed_discount, variable_discount) VALUES (1, 'Becode', 12, null);
INSERT INTO customer_group (id, name, fixed_discount, variable_discount) VALUES (4, 'Telenet', null, 58);
INSERT INTO customer_group (id, name, fixed_discount, variable_discount) VALUES (21, 'Belgacom', 3, null);
INSERT INTO customer_group (id, name, fixed_discount, variable_discount) VALUES (26, 'IBM', null, 54);
INSERT INTO customer_group (id, name, fixed_discount, variable_discount) VALUES (31, 'Coca-cola', null, 30);
INSERT INTO customer_group (id, name, fixed_discount, variable_discount) VALUES (39, 'NMBS', 9, null);
INSERT INTO customer_group (id, name, fixed_discount, variable_discount) VALUES (54, 'De lijn', null, 13);
INSERT INTO customer_group (id, name, fixed_discount, variable_discount, parent_id) VALUES (2, 'marketing', null, 13, 1);
INSERT INTO customer_group (id, name, fixed_discount, variable_discount, parent_id) VALUES (3, 'quality assurance - internal', null, 9, 2);
INSERT INTO customer_group (id, name, fixed_discount, variable_discount, parent_id) VALUES (5, 'communication', null, 13, 4);
INSERT INTO customer_group (id, name, fixed_discount, variable_discount, parent_id) VALUES (6, 'communication - internal', 6, null, 5);
INSERT INTO customer_group (id, name, fixed_discount, variable_discount, parent_id) VALUES (7, 'sales - internal', null, 3, 5);
INSERT INTO customer_group (id, name, fixed_discount, variable_discount, parent_id) VALUES (8, 'development - internal', null, 46, 5);
INSERT INTO customer_group (id, name, fixed_discount, variable_discount, parent_id) VALUES (9, 'marketing', 19, null, 4);
INSERT INTO customer_group (id, name, fixed_discount, variable_discount, parent_id) VALUES (10, 'marketing - internal', 12, null, 9);
INSERT INTO customer_group (id, name, fixed_discount, variable_discount, parent_id) VALUES (11, 'sales - internal', 21, null, 9);
INSERT INTO customer_group (id, name, fixed_discount, variable_discount, parent_id) VALUES (12, 'it department - internal', null, 45, 9);
INSERT INTO customer_group (id, name, fixed_discount, variable_discount, parent_id) VALUES (13, 'hr', null, 10, 4);
INSERT INTO customer_group (id, name, fixed_discount, variable_discount, parent_id) VALUES (14, 'hr - internal', 2, null, 13);
INSERT INTO customer_group (id, name, fixed_discount, variable_discount, parent_id) VALUES (15, 'sales', 7, null, 4);
INSERT INTO customer_group (id, name, fixed_discount, variable_discount, parent_id) VALUES (16, 'marketing - internal', 18, null, 15);
INSERT INTO customer_group (id, name, fixed_discount, variable_discount, parent_id) VALUES (17, 'customer support', null, 5, 4);
INSERT INTO customer_group (id, name, fixed_discount, variable_discount, parent_id) VALUES (18, 'communication - internal', 3, null, 17);
INSERT INTO customer_group (id, name, fixed_discount, variable_discount, parent_id) VALUES (19, 'marketing - internal', 1, null, 17);
INSERT INTO customer_group (id, name, fixed_discount, variable_discount, parent_id) VALUES (20, 'customer support - internal', null, 55, 17);
INSERT INTO customer_group (id, name, fixed_discount, variable_discount, parent_id) VALUES (22, 'marketing', 15, null, 21);
INSERT INTO customer_group (id, name, fixed_discount, variable_discount, parent_id) VALUES (23, 'marketing - internal', null, 39, 22);
INSERT INTO customer_group (id, name, fixed_discount, variable_discount, parent_id) VALUES (24, 'sales', 9, null, 21);
INSERT INTO customer_group (id, name, fixed_discount, variable_discount, parent_id) VALUES (25, 'quality assurance - internal', null, 9, 24);
INSERT INTO customer_group (id, name, fixed_discount, variable_discount, parent_id) VALUES (27, 'hr', null, 59, 26);
INSERT INTO customer_group (id, name, fixed_discount, variable_discount, parent_id) VALUES (28, 'hr - internal', 10, null, 27);
INSERT INTO customer_group (id, name, fixed_discount, variable_discount, parent_id) VALUES (29, 'development - internal', 23, null, 27);
INSERT INTO customer_group (id, name, fixed_discount, variable_discount, parent_id) VALUES (30, 'customer support - internal', null, 5, 27);
INSERT INTO customer_group (id, name, fixed_discount, variable_discount, parent_id) VALUES (32, 'communication', null, 28, 31);
INSERT INTO customer_group (id, name, fixed_discount, variable_discount, parent_id) VALUES (33, 'marketing - internal', 12, null, 32);
INSERT INTO customer_group (id, name, fixed_discount, variable_discount, parent_id) VALUES (34, 'hr - internal', null, 18, 32);
INSERT INTO customer_group (id, name, fixed_discount, variable_discount, parent_id) VALUES (35, 'quality assurance', 12, null, 31);
INSERT INTO customer_group (id, name, fixed_discount, variable_discount, parent_id) VALUES (36, 'hr - internal', null, 31, 35);
INSERT INTO customer_group (id, name, fixed_discount, variable_discount, parent_id) VALUES (37, 'it department - internal', null, 9, 35);
INSERT INTO customer_group (id, name, fixed_discount, variable_discount, parent_id) VALUES (38, 'customer support - internal', null, 7, 35);
INSERT INTO customer_group (id, name, fixed_discount, variable_discount, parent_id) VALUES (40, 'hr', 16, null, 39);
INSERT INTO customer_group (id, name, fixed_discount, variable_discount, parent_id) VALUES (41, 'communication - internal', 8, null, 40);
INSERT INTO customer_group (id, name, fixed_discount, variable_discount, parent_id) VALUES (42, 'development - internal', null, 58, 40);
INSERT INTO customer_group (id, name, fixed_discount, variable_discount, parent_id) VALUES (43, 'sales', null, 31, 39);
INSERT INTO customer_group (id, name, fixed_discount, variable_discount, parent_id) VALUES (44, 'customer support - internal', 19, null, 43);
INSERT INTO customer_group (id, name, fixed_discount, variable_discount, parent_id) VALUES (45, 'it department', null, 59, 39);
INSERT INTO customer_group (id, name, fixed_discount, variable_discount, parent_id) VALUES (46, 'quality assurance - internal', 15, null, 45);
INSERT INTO customer_group (id, name, fixed_discount, variable_discount, parent_id) VALUES (47, 'customer support - internal', null, 27, 45);
INSERT INTO customer_group (id, name, fixed_discount, variable_discount, parent_id) VALUES (48, 'development', null, 32, 39);
INSERT INTO customer_group (id, name, fixed_discount, variable_discount, parent_id) VALUES (49, 'marketing - internal', 8, null, 48);
INSERT INTO customer_group (id, name, fixed_discount, variable_discount, parent_id) VALUES (50, 'customer support - internal', 25, null, 48);
INSERT INTO customer_group (id, name, fixed_discount, variable_discount, parent_id) VALUES (51, 'customer support', null, 7, 39);
INSERT INTO customer_group (id, name, fixed_discount, variable_discount, parent_id) VALUES (52, 'marketing - internal', null, 13, 51);
INSERT INTO customer_group (id, name, fixed_discount, variable_discount, parent_id) VALUES (53, 'it department - internal', 8, null, 51);
INSERT INTO customer_group (id, name, fixed_discount, variable_discount, parent_id) VALUES (55, 'communication', null, 35, 54);
INSERT INTO customer_group (id, name, fixed_discount, variable_discount, parent_id) VALUES (56, 'communication - internal', 4, null, 55);
INSERT INTO customer_group (id, name, fixed_discount, variable_discount, parent_id) VALUES (57, 'marketing - internal', 23, null, 55);
INSERT INTO customer_group (id, name, fixed_discount, variable_discount, parent_id) VALUES (58, 'sales', 22, null, 54);
INSERT INTO customer_group (id, name, fixed_discount, variable_discount, parent_id) VALUES (59, 'communication - internal', 24, null, 58);
INSERT INTO customer_group (id, name, fixed_discount, variable_discount, parent_id) VALUES (60, 'sales - internal', null, 38, 58);
INSERT INTO customer_group (id, name, fixed_discount, variable_discount, parent_id) VALUES (61, 'customer support - internal', null, 44, 58);
INSERT INTO customer_group (id, name, fixed_discount, variable_discount, parent_id) VALUES (62, 'development', 25, null, 54);
INSERT INTO customer_group (id, name, fixed_discount, variable_discount, parent_id) VALUES (63, 'marketing - internal', 17, null, 62);
INSERT INTO customer_group (id, name, fixed_discount, variable_discount, parent_id) VALUES (64, 'quality assurance - internal', null, 38, 62);
INSERT INTO customer_group (id, name, fixed_discount, variable_discount, parent_id) VALUES (65, 'customer support', 12, null, 54);
INSERT INTO customer_group (id, name, fixed_discount, variable_discount, parent_id) VALUES (66, 'communication - internal', 7, null, 65);
INSERT INTO customer_group (id, name, fixed_discount, variable_discount, parent_id) VALUES (67, 'quality assurance - internal', null, 56, 65);


INSERT INTO customer (id, firstname, lastname, fixed_discount, variable_discount, group_id) VALUES (1, 'Alline', 'Baillargeon', null, 21, 2);
INSERT INTO customer (id, firstname, lastname, fixed_discount, variable_discount, group_id) VALUES (2, 'Buddy', 'Sharrock', null, 4, 3);
INSERT INTO customer (id, firstname, lastname, fixed_discount, variable_discount, group_id) VALUES (3, 'Anitra', 'Genna', 10, null, 5);
INSERT INTO customer (id, firstname, lastname, fixed_discount, variable_discount, group_id) VALUES (4, 'Ivelisse', 'Cowles', 2, null, 6);
INSERT INTO customer (id, firstname, lastname, fixed_discount, variable_discount, group_id) VALUES (5, 'Adeline', 'Bohl', 9, null, 7);
INSERT INTO customer (id, firstname, lastname, fixed_discount, variable_discount, group_id) VALUES (6, 'Lurline', 'Boll', 9, null, 8);
INSERT INTO customer (id, firstname, lastname, fixed_discount, variable_discount, group_id) VALUES (7, 'Oscar', 'Martindale', 5, null, 9);
INSERT INTO customer (id, firstname, lastname, fixed_discount, variable_discount, group_id) VALUES (8, 'Brittny', 'Raisor', 5, null, 10);
INSERT INTO customer (id, firstname, lastname, fixed_discount, variable_discount, group_id) VALUES (9, 'Charleen', 'Delpriore', null, 49, 11);
INSERT INTO customer (id, firstname, lastname, fixed_discount, variable_discount, group_id) VALUES (10, 'Loree', 'Roquemore', null, 43, 12);
INSERT INTO customer (id, firstname, lastname, fixed_discount, variable_discount, group_id) VALUES (11, 'Winfred', 'Gwaltney', 9, null, 13);
INSERT INTO customer (id, firstname, lastname, fixed_discount, variable_discount, group_id) VALUES (12, 'Darren', 'Hurt', 4, null, 14);
INSERT INTO customer (id, firstname, lastname, fixed_discount, variable_discount, group_id) VALUES (13, 'Jackie', 'Wink', null, 39, 15);
INSERT INTO customer (id, firstname, lastname, fixed_discount, variable_discount, group_id) VALUES (14, 'Shakia', 'Sassman', 2, null, 16);
INSERT INTO customer (id, firstname, lastname, fixed_discount, variable_discount, group_id) VALUES (15, 'Hae', 'Releford', 2, null, 17);
INSERT INTO customer (id, firstname, lastname, fixed_discount, variable_discount, group_id) VALUES (16, 'Isaias', 'Kaminsky', 6, null, 18);
INSERT INTO customer (id, firstname, lastname, fixed_discount, variable_discount, group_id) VALUES (17, 'Peg', 'Kendig', 1, null, 19);
INSERT INTO customer (id, firstname, lastname, fixed_discount, variable_discount, group_id) VALUES (18, 'Sonja', 'Monti', 2, null, 20);
INSERT INTO customer (id, firstname, lastname, fixed_discount, variable_discount, group_id) VALUES (19, 'Felisa', 'Epstein', 7, null, 22);
INSERT INTO customer (id, firstname, lastname, fixed_discount, variable_discount, group_id) VALUES (20, 'Vince', 'Waxman', 7, null, 23);
INSERT INTO customer (id, firstname, lastname, fixed_discount, variable_discount, group_id) VALUES (21, 'Francoise', 'Gaiter', 2, null, 24);
INSERT INTO customer (id, firstname, lastname, fixed_discount, variable_discount, group_id) VALUES (22, 'Bruna', 'Levering', 3, null, 25);
INSERT INTO customer (id, firstname, lastname, fixed_discount, variable_discount, group_id) VALUES (23, 'Bobbie', 'Aparicio', null, 8, 27);
INSERT INTO customer (id, firstname, lastname, fixed_discount, variable_discount, group_id) VALUES (24, 'Shantae', 'Engberg', null, 27, 28);
INSERT INTO customer (id, firstname, lastname, fixed_discount, variable_discount, group_id) VALUES (25, 'Dorethea', 'Mackowiak', 8, null, 29);
INSERT INTO customer (id, firstname, lastname, fixed_discount, variable_discount, group_id) VALUES (26, 'Dorthea', 'Siggers', null, 3, 30);
INSERT INTO customer (id, firstname, lastname, fixed_discount, variable_discount, group_id) VALUES (27, 'Reiko', 'Mickle', null, 40, 32);
INSERT INTO customer (id, firstname, lastname, fixed_discount, variable_discount, group_id) VALUES (28, 'Cory', 'Holz', 5, null, 33);
INSERT INTO customer (id, firstname, lastname, fixed_discount, variable_discount, group_id) VALUES (29, 'Floyd', 'Marx', 9, null, 34);
INSERT INTO customer (id, firstname, lastname, fixed_discount, variable_discount, group_id) VALUES (30, 'Leonila', 'Becerril', 1, null, 35);
