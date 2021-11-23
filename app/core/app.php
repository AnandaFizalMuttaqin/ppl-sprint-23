
<?php
class Page{
  public $method;
  public $parameter;
  public $absolute_path;
  public $header_path;

  public function __construct($absolute_path,$header_path)
  {
    // echo "<script>alert('tes')</script>";
    
    $this->url = $this->parseURL();
    $this->page_name = $this->url[6];
    $this->title = ucwords($this->page_name);
    $this->controller = $this->page_name .".php";
    // if(file_exists($absolute_path.'/app/model/'.$this->controller)){
    //   require "";
    // }

    if(isset($this->url[7])){
      $this->method = $this->url[7];
      if(isset($this->url[8])){
        $this->parameter = str_replace("%20"," ",$this->url[8]);
        
        if(isset($this->url[9])){
          header("Location: $header_path");
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

$page = new Page($absolute_path,$header_path);
if(file_exists("$absolute_path/app/controller/". $page->controller )){
  require "$absolute_path/app/controller/$page->controller";
}

?>