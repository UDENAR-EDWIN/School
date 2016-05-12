function validacion() {
  // Validando la Descripción del Usuario
  val = $('#txt-description').val();
  if(!empty_val(val, '#txt-description'))return false;

  // Validando los Nombres del Usuario
  val = $('#txt-name').val();
  if(!empty_val(val, '#txt-name'))return false;
  if(!only_letters(val, '#txt-name'))return false;

  // Validando los Apellidos del Usuario
  val = $('#txt-sname').val();
  if(!empty_val(val, '#txt-sname'))return false;
  if(!only_letters(val, '#txt-sname'))return false;

  // Validando el Codigo del Usuario
  val = $('#txt-cod').val();
  if(!empty_val(val, '#txt-cod'))return false;
  if(!is_number(val, '#txt-cod'))return false;

  // Validando el Numero de Celular del Usuario
  val = $('#txt-cel').val();
  if(!empty_val(val, '#txt-cel'))return false;
  if(!cell_phone(val, '#txt-cel'))return false;

  // Validando el Documento de Indentidad del Usuario
  val = $('#txt-id').val();
  if(!empty_val(val, '#txt-id'))return false;
  if(!is_number(val, '#txt-id'))return false;

  // Validando la Contraseña del Usuario
  val = $('#txt-pass').val();
  if(!empty_val(val, '#txt-pass'))return false;

  // Validando la Especialidad del Profesor
  if($('#txt-esp').parent().hasClass('show')){
    val = $('#txt-esp').val();
    if(!empty_val(val, '#txt-esp'))return false;
  }
}

/*==============================================================================
FUNCION PARA VALIDAR CAMPOS VACIOS*/
function empty_val(valor, txt) {
  if( valor == null || valor.length == 0 || /^\s+$/.test(valor) ) {
    $(txt).parent().addClass('has-error');
    $(txt).parent().children("span").text("El Campo de Texto esta vacio").show();
    return false;
  }
  $(txt).parent().removeClass('has-error');
  $(txt).parent().children("span").text("");
  return true;
}
/*==============================================================================
FUNCION PARA VALIDAR CAMPOS CON SOLO LETRAS*/
function only_letters(valor, txt) {
  if(!(/^[A-Za-z\_\-\.\s\xF1\xD1]+$/.test(valor))) {
    $(txt).parent().addClass('has-error');
    $(txt).parent().children("span").text("El Campo de Texto contiene numeros").show();
    return false;
  }
  $(txt).parent().removeClass('has-error');
  $(txt).parent().children("span").text("");
  return true;
}
/*==============================================================================
FUNCION PARA VALIDAR SOLO NUMEROS*/
function is_number(valor, txt) {
  if(isNaN(valor)) {
    $(txt).parent().addClass('has-error');
    $(txt).parent().children("span").text("Ingrese solo Numeros").show();
    return false;
  }
  $(txt).parent().removeClass('has-error');
  $(txt).parent().children("span").text("");
  return true;
}
/*==============================================================================
FUNCION PARA VALIDAR NUMEROS DE CELULAR DE 10 DIGITOS*/
function cell_phone(valor, txt) {
  if(!(/^\d{10}$/.test(valor))) {
    $(txt).parent().addClass('has-error');
    $(txt).parent().children("span").text("Solo numeros de 10 digitos").show();
    return false;
  }
  $(txt).parent().removeClass('has-error');
  $(txt).parent().children("span").text("");
  return true;
}
// /*==============================================================================
// FUNCION PARA UN GRUPO DE RADIOBUTTONS*/
// function val_rb(valor) {
//   var seleccionado = false;
//   for(var i=0; i<$(valor).length; i++) {
//     if($(valor)[i].checked) {
//       seleccionado = true;
//       break;
//     }
//   }
//
//   if(!seleccionado) {
//     $(valor).addClass('has-error');
//     $(valor).children("span").text("Seleccione un elemento").show();
//     return false;
//   }
//   $(valor).removeClass('has-error');
//   $(valor).children("span").text("");
//   return true;
// }
// /*==============================================================================
// FUNCION PARA VALIDAR EL CORREO ELECTRONICO*/
// function valid_email(valor, txt) {
//   if(!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3,4})+$/.test(valor))) {
//     $(txt).parent().addClass('has-error');
//     $(txt).parent().children("span").text("Correo no valido").show();
//     return false;
//   }
//   $(txt).parent().removeClass('has-error');
//   $(txt).parent().children("span").text("");
//   return true;
// }
