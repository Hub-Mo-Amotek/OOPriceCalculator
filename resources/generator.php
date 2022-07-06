<?php
// this PHP file was used to generate the SQL files
// You do not need this to finish the exersise.

$structureSql = 'DROP TABLE IF EXISTS `customer_group`;
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
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;';

$productsNames = [
    'mouse pad',
    'nail file',
    'tooth picks',
    'lamp shade',
    'glass',
    'mirror',
    'face wash',
    'clothes',
    'pen',
    'drill press',
    'chapter book',
    'sandal',
    'rubber duck',
    'thermostat',
    'controller',
    'charger',
    'watch',
    'button',
    'cookie jar',
    'nail clippers',
    'headphones',
    'chocolate',
    'thermometer',
    'grid paper',
    'candy wrapper',
    'purse',
    'sketch pad',
    'soda can',
    'doll',
    'socks',
    'clock',
    'photo album',
    'glow stick',
    'water bottle',
    'slipper',
    'lamp',
    'lip gloss',
    'paint brush',
    'eraser',
    'speakers',
    'washing machine',
    'keys',
    'magnet',
    'tissue box',
    'rug',
    'hair brush',
    'blouse',
    'truck',
    'beef',
    'outlet',
    'house',
    'blanket',
    'thread',
    'knife',
    'rubber band',
    'lotion',
    'greeting card',
    'bookmark',
    'helmet',
    'flag',
    'towel',
    'wagon',
    'cat',
    'clay pot',
    'seat belt',
    'boom box',
    'pool stick',
    'sun glasses',
    'stop sign',
    'hair tie',
    'shampoo',
    'chalk',
    'computer',
    'couch',
    'toilet',
    'picture frame',
    'video games',
    'fake flowers',
    'street lights',
    'balloon',
    'car',
    'candle',
    'cinder block',
    'table',
    'mp3 player',
    'soy sauce packet',
    'pants',
    'tree',
    'lace',
    'spoon',
    'apple',
    'buckel',
    'zipper',
    'glasses',
    'playing card',
    'book',
    'air freshener',
    'drawer',
    'soap'];

$groupNamesDepartements = ['communication', 'marketing', 'hr', 'sales', 'quality assurance', 'it department', 'development', 'customer support'];
$groupNamesCompany = ['Becode', 'Telenet', 'Belgacom', 'IBM', 'Coca-cola', 'NMBS', 'De lijn'];

$customerNames = [
    'Alline Baillargeon',
    'Buddy Sharrock',
    'Anitra Genna',
    'Ivelisse Cowles',
    'Adeline Bohl',
    'Lurline Boll',
    'Oscar Martindale',
    'Brittny Raisor',
    'Charleen Delpriore',
    'Loree Roquemore',
    'Winfred Gwaltney',
    'Darren Hurt',
    'Jackie Wink',
    'Shakia Sassman',
    'Hae Releford',
    'Isaias Kaminsky',
    'Peg Kendig',
    'Sonja Monti',
    'Felisa Epstein',
    'Vince Waxman',
    'Francoise Gaiter',
    'Bruna Levering',
    'Bobbie Aparicio',
    'Shantae Engberg',
    'Dorethea Mackowiak',
    'Dorthea Siggers',
    'Reiko Mickle',
    'Cory Holz',
    'Floyd Marx',
    'Leonila Becerril'
];

$products = $customers = $customerGroups = [];

foreach ($productsNames AS $key => $name) {
    $products[] = [
        'id' => $key+1,
        'name' => $name,
        'price' => rand(100, 10000)
    ];
}

function getGroup($i, $name, $parent = null)
{
    $params = [
        'id' => $i,
        'name' => $name,
        'fixed_discount' => 'null',
        'variable_discount' => 'null',
        'parent_id' => 'null'
    ];

    if (rand(1, 2) === 1) {
        $params['fixed_discount'] = rand(1, 25);
    } else {
        $params['variable_discount'] = rand(1, 60);
    }

    if (!empty($parent)) {
        $params['parent_id'] = $parent;
    }

    return $params;
}

$i = 0;
foreach ($groupNamesCompany as $companyName) {
    $parentId = ++$i;
    $groupsB[] = getGroup($parentId, $companyName);

    foreach ((array)array_rand($groupNamesDepartements, rand(1, 5)) as $name) {
        $parentChildId = ++$i;
        $groupsA[] = getGroup($parentChildId, $groupNamesDepartements[$name], $parentId);

        foreach ((array)array_rand($groupNamesDepartements, rand(1, 3)) as $name) {
            $groupsA[] = getGroup(++$i, $groupNamesDepartements[$name] . ' - internal', $parentChildId);
        }
    }
}

foreach ($customerNames as $key => $name) {
    $groupKey = array_rand($groupsA);

    $splitName = explode(' ', $name);

    $params = [
        'id' => $key+1,
        'firstname' => $splitName[0],
        'lastname' => $splitName[1],
        'fixed_discount' => 'null',
        'variable_discount' => 'null',
        'group_id' => $groupsA[$key]['id'],
    ];

    if (rand(1, 2) === 1) {
        $params['fixed_discount'] = rand(1, 10);
    } else {
        $params['variable_discount'] = rand(1, 50);
    }

    $customers[] = $params;
}

//convert to sql
$raw = $structureSql;

$raw .= PHP_EOL . PHP_EOL;

foreach($products AS $product) {
    $raw .= sprintf("INSERT INTO product (id, `name`, price) VALUES (%d, '%s', %d);". PHP_EOL, ...array_values($product));
}

$raw .= PHP_EOL . PHP_EOL;

foreach($groupsB AS $group) {
    $raw .= sprintf("INSERT INTO customer_group (id, name, fixed_discount, variable_discount) VALUES (%d, '%s', %s, %s);". PHP_EOL, ...array_values($group));
}
foreach($groupsA AS $group) {
    $raw .= sprintf("INSERT INTO customer_group (id, name, fixed_discount, variable_discount, parent_id) VALUES (%d, '%s', %s, %s, %s);". PHP_EOL, ...array_values($group));
}

$raw .= PHP_EOL . PHP_EOL;

foreach($customers AS $customer) {
    $raw .= sprintf("INSERT INTO customer (id, firstname, lastname, fixed_discount, variable_discount, group_id) VALUES (%d, '%s', '%s', %s, %s, %s);". PHP_EOL, ...array_values($customer));
}

file_put_contents('import.sql', $raw);