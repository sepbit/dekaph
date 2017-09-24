<?php
$date = "2018-1-1";
echo "dekatrian: ". $date .", gregoriano: ". dekatrianWeek($date);

function dekatrianWeek($date){
  $date = explode("-", $date);

  if ( date("L", mktime(0, 0, 0, 1, 1, $date[0])) ){
    if($date[1] == 0 && $date[2] == 1){
      $numberDay = 0;

    }elseif($date[1] == 0 && $date[2] == 2){
      $numberDay = 1;

    }elseif($date[1] >= 1){
      $numberDay = ($date[1]*28-28)+$date[2]+1;
    }
  }else{
    if($date[1] == 0 && $date[2] == 1){
      $numberDay = 0;

    }else{
      $numberDay = ($date[1]*28-28)+$date[2];
    }
  }

  $result = date('Y-m-d',strtotime($date[0] ."-01-01 + $numberDay day"));
  $date = explode("-", $result);
  $result = date("N", mktime(0, 0, 0, $date[1], $date[2], $date[0]));
  return $result;
}
?>

//1 (para Segunda) até 7 (para Domingo);
