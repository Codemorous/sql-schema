<?php

use CzProject\SqlSchema\Index;
use Tester\Assert;

require __DIR__ . '/../bootstrap.php';


test(function () {
	$index = new CzProject\SqlSchema\Index('index_name', Index::TYPE_PRIMARY, 'id');

	Assert::same('index_name', $index->getName());
	Assert::same('PRIMARY', $index->getType());
	Assert::same(array(
		'id ASC'
	), format($index->getColumns()));
});


test(function () {
	$index = new CzProject\SqlSchema\Index('id_name', Index::TYPE_INDEX, array('id', 'name'));
	Assert::same('id_name', $index->getName());
});


test(function () {
	Assert::exception(function () {
		$index = new CzProject\SqlSchema\Index('', 'BLA');

	}, 'CzProject\SqlSchema\OutOfRangeException', "Index type 'BLA' not found.");
});
