<?php

class omml
{
  private $guid;
  private $src;
  private $copyright;
  private $license;
  private $access = "public";
  private $type;
  
  /**
   * @todo create a static function that renders statically, using function parameters. 
   */
  public function getOmmlByJson()
  {
    
  }
  
  public static function renderJsonOmml($guid, $src, $copyright, $access)
  {
    
  }
  
  /**
   * @todo not sure if mime types will help for the type tag
   */
  public static function getMimeTypes()
  {
    return [ "podcast" => "application/rss+xml"
           , "rss"     => "application/rss+xml"
           , "xml"     => "application/xml"
           , "json"    => "application/json"
           , "html"    => "application/html" ] 
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
      "cc40" => ["text"=>"This work is licensed under a Creative Commons Attribution 4.0 International License."
                 , "url"=>"https://creativecommons.org/licenses/by/4.0/"]
      , "name2" => ""
      , "name3" => ""
      , "name4" => ""
    );
  }
}
  public static function getRatings()
  {
    return [
      'Al'   =>'All ages.'
      , '6'  => 'Potentially harmful to children under 6 years.'
      , '9'  => 'Potentially harmful to children under 9 years.'
      , '12' => 'Potentially harmful to children under 12 years; broadcasting is not allowed before 8:00 pm.'
      , '16' => 'Potentially harmful to (and not allowed for) children under 16 years; broadcasting is not allowed before 10:00 pm.'
    ];
  }

?>
