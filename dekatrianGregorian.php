<?php
$date = "2017-1-1";
echo "dekatrian: ". $date .", gregoriano: ". dekatrianGregorian($date);

function dekatrianGregorian($date){
  $date = explode("-", $date);

  if ( date("L", mktime(0, 0, 0, 1, 1, $date[0])) ){
    if($date[1] == 0 && $date[2] == 0){
      $numberDay = 0;

    }elseif($date[1] == 0 && $date[2] == 1){
      $numberDay = 1;

    }elseif($date[1] >= 1){
      $numberDay = ($date[1]*28-28)+$date[2]+1;
    }
  }else{
    if($date[1] == 0 && $date[2] == 0){
      $numberDay = 0;

    }else{
      $numberDay = ($date[1]*28-28)+$date[2];
    }
  }

  $result = date('Y-m-d',strtotime($date[0] ."-01-01 + $numberDay day"));
  return $result;
}
?>
