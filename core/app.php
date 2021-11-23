
<?php
class Page{
  public $method;
  public $parameter;
  public $absolute_path;
  public $BASE_URL;

  public function __construct($absolute_path,$BASE_URL)
  {
    $this->url = $this->parseURL();
    $this->page_name = $this->url[5];
    $this->title = ucwords($this->page_name);
    $this->controller = $this->page_name .".php";
    

    if(isset($this->url[6])){
      $this->method = $this->url[6];
      if(isset($this->url[7])){
        $this->parameter = str_replace("%20"," ",$this->url[7]);
        
        if(isset($this->url[8])){
          header("Location: $BASE_URL");
        }
      }
    }

  }
  public function parseURL(){
    $link_addres = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    if(isset($link_addres)){
      $url = rtrim($link_addres,"/");
      $url = filter_var($url,FILTER_SANITIZE_URL);
      $url = explode("/",$url);
      return $url;
    }
    
  }
}

$page = new Page($absolute_path,$BASE_URL);
if(file_exists("$absolute_path/app/controller/". $page->controller )){
  require "$absolute_path/app/controller/$page->controller";
}


?>