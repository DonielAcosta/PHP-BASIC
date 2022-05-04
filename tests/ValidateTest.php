<?php

use PHPUnit\Framework\TestCase;
use App\Validate;

class ValidateTest extends TestCase{

/**
 * It checks if the email is valid
 */
  public function test_email(){

    $email = Validate::email('donielacosta1995@gmail.com');
    $this->assertTrue($email);

    $email = Validate::email('donielacosta1995@@gmail.com');
    $this->assertFalse($email);
  }

 /**
  * It checks if the url is valid or not.
  */
  public function test_url(){

    $url = Validate::url('https://platzi.com');
    $this->assertTrue($url);

    $url = Validate::url('platzi.com');
    $this->assertFalse($url);

  }
}
