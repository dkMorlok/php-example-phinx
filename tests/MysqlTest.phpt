<?php

namespace Test;

use Tester\Assert;
use Tester\TestCase;

class MysqlTest extends TestCase
{

	/** @var \PDO */
	private $connection;


	protected function setUp()
	{
		parent::setUp();
		$this->connection = new \PDO("mysql:host=localhost;dbname=testing", 'testing', 'testing', [
			\PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
		]);
	}


	public function testConnection()
	{
		$statement = $this->connection->query("SELECT * FROM `user`");
		$result = $statement->fetchAll();
		Assert::equal(1, count($result));
	}

}

(new MysqlTest())->run();
