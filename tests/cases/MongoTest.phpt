<?php

namespace Test;

use Tester\Assert;
use Tester\TestCase;

require __DIR__ . '/../bootstrap.php';

class MongoTest extends TestCase
{

	public function testCreateObject()
	{
		$object = new \MongoId();
		Assert::equal('MongoId', get_class($object));
	}

}

(new MongoTest())->run();
