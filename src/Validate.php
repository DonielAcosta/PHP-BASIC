<?php

namespace App;

/* It contains two static methods, email() and url(), which return true if the value passed to them is
a valid email address or URL, respectively */
class Validate
{

  public static function email($value){

    return (bool) filter_var($value,FILTER_VALIDATE_EMAIL);
  }

  public static function url($value){

    return (bool) filter_var($value,FILTER_VALIDATE_URL);
  }
}