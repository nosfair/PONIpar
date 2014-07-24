<?php

declare(encoding='UTF-8');
namespace nosfair\PONIpar;

/*
   This file is part of the PONIpar PHP Onix Parser Library.
   Copyright (c) 2012, [di] digitale informationssysteme gmbh
   All rights reserved.

   The software is provided under the terms of the new (3-clause) BSD license.
   Please see the file LICENSE for details.
*/

/*
   Main file for require_once. Will iterate over the required files and
   require_once them.
*/

foreach (array(
	'Exceptions',
	'DirectoryParser',
	'Parser',
	'Product',
	'ProductSubitem',
		'ProductIdentifierProductSubitem',
	'XMLHandler',
) as $part) {
	require_once "$part.php";
}

?>
