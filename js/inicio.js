window.addEventListener('load', cargar, false);
function cargar() {
  var opcion = getUrlVars()["op"];
  if(opcion == 2){
    $('#txt-esp').parent().removeClass('hide');
    $('#txt-esp').parent().addClass('show col-md-6');
    $('#txt-pass').parent().addClass('col-md-6');
    $('#pers-descript').css('padding','26px 0 116px 0');
  }
  else{
    $('#pers-descript').css('padding','26px 0 116px 0');
  }
}

function getUrlVars() {
var vars = {};
var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
vars[key] = value;
});
return vars;
}
