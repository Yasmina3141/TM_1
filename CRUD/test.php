<?php
$maths = 1;
$physics = 0;
$chemistry = 1;
$French = 0;
$German = 0;
$biology = 1;
$subjects = array();
function arrayBuilder($subject){
  if ($$subject == 1){
    $subjects[] = $subject . "=1";
  }
}
arrayBuilder("maths");
arrayBuilder("physics");
arrayBuilder("chemistry");
arrayBuilder("French");
arrayBuilder("German");
arrayBuilder("biology");
echo $subjects;
