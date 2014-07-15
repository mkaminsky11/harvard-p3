<?php
include ('Generator.php');
$generator = new Generator();


$output = implode(" ", $generator->getParagraphs(10));

if($_POST){
  $output = implode(" ", $generator->getParagraphs($_POST['dial']));
}

?>
