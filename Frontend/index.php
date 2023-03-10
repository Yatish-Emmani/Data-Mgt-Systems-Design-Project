<!--
  PROJECT: CS631 - CITY LIBRARY PROJECT 
  PROJECT TEAM: Yatish Chandra Emmani, Praveen Lakkamraju, Dhanraj Sangamreddy
-->
<?php
  require_once("util/htmlUtil.php");
  require("mainMenuComponents.php");

  session_start();
  $_SESSION["logged"] = false;
  $title = "Main menu";

  $body = new Body();
  $html = new HtmlDocument("City Library | $title", $body->getBody($mainMenuComponent->getCode()));
  $html->setStyle($styleComponent->getCode());
  $html->setScript($scriptComponent->getCode());
  $html->printHTML();

?>