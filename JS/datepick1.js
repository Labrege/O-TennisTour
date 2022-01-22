var today = new Date();
var tomorrow = new Date();

tomorrow.setDate(today.getDate() + 2);
var lastMonth = new Date().getMonth() - 1;

var frDate = {
  previousMonth : 'Mois précédent',
  nextMonth     : 'Mois suivant',
  months        : ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'],
  weekdays      : ['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche'],
  weekdaysShort : ['Lun','Mar','Mer','Jeu','Ven','Sam','Dim']
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
  i18n: frDate,
  minDate: tomorrow,  // maximum/latest date set to today
  // demo only
  position: 'top left',
  reposition: false,
});
