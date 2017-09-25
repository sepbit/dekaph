var date = "2017-11-27";
date = dekatrianGregorian(date);
console.log(date);

function dekatrianGregorian(date){
  var date = date.split("-");
  var numberDay;

  if( ((date[0]%4) == 0 && (date[0]%100) != 0) || (date[0]%400) == 0 ){
    if(date[1] == 0 && date[2] == 1){
      numberDay = 0;

    }else if(date[1] == 0 && date[2] == 2){
      numberDay = 1;

    }else if(date[1] >= 1){
      numberDay = parseInt(date[1])*28-28;
      numberDay = numberDay+parseInt(date[2])+1;
    }

  }else{
    if(date[1] == 0 && date[2] == 1){
      numberDay = 0;

    }else{
      numberDay = parseInt(date[1])*28-28;
      numberDay = numberDay+parseInt(date[2]);
    }
  }

  numberDay+=1;
  var result = dateFromDay(date[0], numberDay);
  return result;
}

function dateFromDay(year, day){
    var date = new Date(year, 0);
    date = new Date(date.setDate(day));
    var day = date.getDate();
    var month = date.getMonth()+1;
    var year = date.getFullYear();

    return year + '-' + month + '-' + day;
}
