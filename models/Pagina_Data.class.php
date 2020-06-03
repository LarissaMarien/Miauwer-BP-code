<?php
class Pagina_Data {
    public $title = "";
    public $nav = "";
    public $content = "";
    public $css = "";
    public $embeddedStyle = "";
    public $js = "";

    public function addCSS( $href ){
        $this->css .= "<link href='$href' rel='stylesheet' />";
    }
    public function addJavaScript($href){
          $this->js .= "<script type='text/javascript' src='$href'></script>";
      }
}
