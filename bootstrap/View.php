<?php
namespace bootstrap;

class View{
  protected $file;
  
  protected $vals  = [];
  public function make ($file)
  {
    $this->file = "web/view/".$file . '.html';
    return $this;
  }
  
  public function with($name, $value) 
  {
    $this->vals[$name] = $value;
    return $this;
  }
  public function __toString ()
  {
    //����������ı���ֵ ���䵽�ڴ�����
    extract( $this->vals );
    include  $this->file;
    
    return "";
  }
  
  
} 



?>