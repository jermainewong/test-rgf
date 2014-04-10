$(function() {

  $('.odomometer-sect').on('appear', function() {
    var odoExp = new Odometer({el: $('#odometer_exp')})
    var odoHeadcount = new Odometer({el: $('#odometer_headcount')});
    var odoTurnover = new Odometer({el: $('#odometer_turnover')});
    var odoOffice = new Odometer({el: $('#odometer_office')});
    odoExp.update(54);
    odoHeadcount.update(6998);
    odoTurnover.update(10);
    odoOffice.update(920); 
  });
});