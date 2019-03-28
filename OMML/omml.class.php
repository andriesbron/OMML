<?php

class omml
{
  private $guid;
  private $src;
  private $copyright;
  private $access = "public";
  
  public static function getAccessLevels()
  {
    return array(
      "public"
      , "registered"
      , "subscription"
      , "contact"
    );
  }
}

?>
