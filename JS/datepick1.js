var today = new Date();
var tomorrow = new Date();
var calculateTmr = new Date();

console.log(today.getMonth()+1);
console.log(((Date.UTC(today.getFullYear(), today.getMonth(), today.getDate()) - Date.UTC(today.getFullYear(), 0, 0)) / 24 / 60 / 60 / 1000));

calculateTmr.setDate(today.getDate() + 3);
if (calculateTmr.getDay() == 0){
  tomorrow.setDate(today.getDate() + 4);
}

else if (calculateTmr.getDay() == 6){
  tomorrow.setDate(today.getDate() + 5);
}

else{
  tomorrow.setDate(today.getDate() + 3);
}

var lastMonth = new Date().getMonth() - 1;

var frDate = {
  previousMonth : 'Mois précédent',
  nextMonth     : 'Mois suivant',
  months        : ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'],
  weekdays      : ['Dimanche','Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi'],
  weekdaysShort : ['Dim','Lun','Mar','Mer','Jeu','Ven','Sam']
};

var monthNames = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];

var picker = new Pikaday({
  field: document.getElementById('datepicker'),
  toString: function(date) {
    var parts = [date.getDate(), monthNames[date.getMonth()], date.getFullYear()];
    return parts.join(" ");
  },
  // toString: function(date) {
  //   var parts = [('0'+date.getDate()).slice(-2), ('0'+(date.getMonth()+1)).slice(-2), date.getFullYear()];
  //   return parts.join("/");
  // },
  disableDayFn: function(date) {
    dateDayNumb = ((Date.UTC(date.getFullYear(), date.getMonth(), date.getDate()) - Date.UTC(date.getFullYear(), 0, 0)) / 24 / 60 / 60 / 1000)
    todayDayNumb = ((Date.UTC(today.getFullYear(), today.getMonth(), today.getDate()) - Date.UTC(today.getFullYear(), 0, 0)) / 24 / 60 / 60 / 1000)
    totalDif = dateDayNumb - todayDayNumb
    if (totalDif<7 && (date.getDay() == 0 || date.getDay() == 6)){ // (date.getDay() == 0 || date.getDay() == 6) 
      return true;
    }
    else{
      return false;
    }
  },
  i18n: frDate,
  minDate: tomorrow,  // maximum/latest date set to today
  // demo only
  position: 'top left',
  reposition: false,
});
