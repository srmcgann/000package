<?php 
  error_reporting(0);
  $maxResultsPerPage = 10;
  
  
  $local = true;
  if($local){
    $baseURL='local.fx.cantelope.org';
    $baseAssetsURL = 'http://local.assets.cantelope.org';
  }else{
    $baseURL='fx.cantelope.org';
    $baseAssetsURL = 'http://assets.cantelope.org';
  }
  
  $req = ltrim($_SERVER['REQUEST_URI'],'/');
  $_GET['i'] = '';
  if(strlen($req) && !file_exists($req)){
    $_GET['i'] = $req;
  }
  if(strpos('?i=',$_GET['i'])!=false){
    $_GET['i'] = explode('?i=',$_GET['i'])[1];
  }

  $baseFullURL= ($local ? 'http://' : 'http://') . $baseURL;

  //$db_user  = 'id21269596_user';
  //$db_user  = 'id21284549_user';
  //$db_user  = 'id21257390_user';
  $db_user  = 'id21552617_user';
  $db_pass  = 'Chrome57253!*';
  $db_host  = 'localhost';
  //$db       = "id21269596_videodemos";
  //$db       = "id21284549_videodemos2";
  //$db       = "id21257390_default";
  $db       = "id21552617_orbs2";
  $port     = '3306';
  $baseURL  = "http://fx.cantelope.org/b";
  $link     = mysqli_connect($db_host,$db_user,$db_pass,$db,$port);
?>
