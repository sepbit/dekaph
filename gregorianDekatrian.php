<?php
$date = "2016-09-22";
echo "gregoriano: ". $date .", dekatrian: ". gregorianDekatrian($date);

function gregorianDekatrian($date){
  $date = explode("-", $date);
  $numberDay = date("z", mktime(0, 0, 0, $date[1], $date[2], $date[0]));
  $month = floor($numberDay/28);
  $day = 28*$month;
  $month = $month+1;
  $day = $numberDay-$day;

  if ( date("L", mktime(0, 0, 0, 1, 1, $date[0])) ){
    if($numberDay == 0){
      $month = 0;
      $day = 1;
    }elseif($numberDay == 1){
      $month = 0;
      $day = 2;
    }else{
      $day -=1;
    }
    if($day == 0 && $numberDay > 0){
      $month -=1;
      $day = 28;
    }

  }else{
    if($numberDay == 0){
      $month = 0;
      $day = 1;
    }
    if($day == 0 && $numberDay > 0){
      $month -=1;
      $day = 28;
    }
  }

  $result = $date[0] ."-". $month ."-". $day;
  return $result;
}
?>
