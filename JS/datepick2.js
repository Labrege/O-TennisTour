var today = new Date();
var tomorrow = new Date();

tomorrow.setDate(today.getDate() + 2);
var lastMonth = new Date().getMonth() - 1;

var picker = new Pikaday({
  field: document.getElementById('datepicker'),
  minDate: tomorrow,  // maximum/latest date set to today
  // demo only
  position: 'top left',
  reposition: false,
});
