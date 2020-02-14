<?php
include_once 'IRequest.php';

class Request implements IRequest
{
  function __construct()
  {
    $this->bootstrapSelf();
  }

  private function bootstrapSelf()
  {
    foreach($_SERVER as $key => $value)
    {
      $this->{$this->toCamelCase($key)} = $value;
    }
  }

  private function toCamelCase($string)
  {
    $result = strtolower($string);
   
    preg_match_all('/_[a-z]/', $result, $matches);

    foreach($matches[0] as $match)
    {
        $c = str_replace('_', '', strtoupper($match));
        $result = str_replace($match, $c, $result);
    }
   
    return $result;
  }

  public function getBody()
  {
    if($this->requestMethod === "GET")
    {
      return;
    }

    if ($this->requestMethod == "POST")
    {
      $contentType = isset($_SERVER["CONTENT_TYPE"]) ? trim($_SERVER["CONTENT_TYPE"]) : '';
      if ($contentType === "application/json") {
        //Receive the RAW post data.
        $content = trim(file_get_contents("php://input"));
        
        $decoded = json_decode($content, true);
        //If json_decode failed, the JSON is invalid.
        if(is_array($decoded)) {
          return $decoded;
        } else {
          // Send error back to user.
          return array("message"=>"Error occured while parsing body");
        }
      }
      // $body = array();
      // if(isset($_POST)){
      //   foreach($_POST as $key => $value)
      //   {
      //     $body[$key] = filter_input(INPUT_POST, $key, FILTER_SANITIZE_SPECIAL_CHARS);
      //   }
      //   return $body;
    }
  }
}