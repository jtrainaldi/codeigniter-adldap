<?php

class adldap_test extends CIUnit_TestCase
{
	protected $adldap;

	public function setUp()
	{
		$this->adldap = load_class('adldap', 'libraries', '');
	}

	public function test_user_create() {
		$attributes = array(
			"username" => "username",
			"firstname" => "user",
			"surname" => "name",
			"email" => "username@example.org",
			"container" => array("Users"),
#			"password" => "123test123!",
		);
		$result = $this->adldap->user_create($attributes);
		$this->assertTrue($result);
	}
}
