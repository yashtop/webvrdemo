<?php
$page = $_REQUEST['page'];
switch($page){
  1:
  include_once("index.html");
  break;
  2:
  include_once("index_single.html");
  break;
  default:
  include_once("index.html");
}
 ?>
