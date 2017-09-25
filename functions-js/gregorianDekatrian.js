var date = "2016-11-04";
date = gregorianDekatrian(date);
console.log(date);

function gregorianDekatrian(date){
  var numberDay = gregorianDayYear(date);
  var date = date.split("-");
  var month = Math.floor(numberDay/28);
  var day = 28*month;
  month = month+1;
  day = numberDay-day;

  if( ((date[0]%4) == 0 && (date[0]%100) != 0) || (date[0]%400) == 0 ){
    if(numberDay == 0){
      month = 0;
      day = 1;

    }else if(numberDay == 1){
      month = 0;
      day = 2;

    }else if(day == 0){
      month -=1;
      day = 27;

    }else if(day == 1){
      month -=1;
      day = 28;
    }else{
      day -=1;
    }

  }else{
    if(numberDay == 0){
      month = 0;
      day = 1;
    }else if(day == 0){
      month -=1;
      day = 28;
    }
  }

  var result = date[0] +"-"+ month +"-"+ day;
  return result;
}

function gregorianDayYear(date){
  var date = date.split("-");
  var year = parseInt(date[0]);
  var month = parseInt(date[1]);
  var day = parseInt(date[2]);
  var dayMonth = ["","0","31","59","90","120","151","181","212","243","273","304","334"];
  var dayYear = parseInt(dayMonth[month])+day-1;

  if( ((year%4) == 0 && (year%100) != 0) || (year%400) == 0 ){
    if(dayYear >= 59){
      var dayYear = dayYear+1;
    }
  }

  return dayYear;
}
