<?php

class omml
{
  private $guid;
  private $src;
  private $copyright;
  private $access = "public";
  
  /**
   * @todo create a static function that renders statically, using function parameters. 
   */
  public function getOmmlByJson()
  {
    
  }
  
  public static function renderJsonOmml($guid, $src, $copyright, $access)
  {
    
  }
  
  public function setAccessLevel($level)
  {
    if (in_array($this->getAccessLevels(), $level) {
      $this->access = $level;
      return $this->access;
    } else return False;
  }
  
  public static function getAccessLevels()
  {
    return array(
      "public"
      , "registered"
      , "subscription"
      , "contact"
    );
  }
  
  public static function getCopyrightOptions()
  {
    return array(
      "cc40" => "https://creativecommons.org/licenses/by/4.0/"
      , "name2" => ""
      , "name3" => ""
      , "name4" => ""
    );
  }
}

?>
