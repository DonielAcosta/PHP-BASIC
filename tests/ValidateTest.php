<?php

use PHPUnit\Framework\TestCase;
use App\Validate;

class ValidateTest extends TestCase{

  public function test_email(){

    $email = Validate::email('donielacosta1995@gmail.com');
    $this->assertTrue($email);

    $email = Validate::email('donielacosta1995@@gmail.com');
    $this->assertFalse($email);
  }
}