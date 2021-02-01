function validateName() {

    var name = document.getElementById('nombre').value;
    if(name.length == 0){
      producePrompt('El campo nombre es requerido', 'name-error' , 'red')
      return false;
    }
    
    if(name.length < 2 || name.length > 26) {
    
      producePrompt('longitud de nombre incorrecto', 'name-error' , 'red')
      return false;
    
    }
    
    /*
    if (!name.match(/^[A-Za-z]*\s{1}[A-Za-z]*$/)) {
    
      producePrompt('First and last name, please.','name-error', 'red');
      return false;
    
    }
    */
    producePrompt('Campo ingresado correctamente', 'name-error', 'green');
    return true;
    
    }
    function validatelastName() {
    
    var lastname = document.getElementById('apellido').value;
    if(lastname.length == 0){
      producePrompt('El campo apellido es requerido', 'lastname-error' , 'red')
      return false;
    }
    if(lastname.length < 2 || lastname.length > 26) {
    
      producePrompt('longitud de apellido incorrecta', 'lastname-error' , 'red')
      return false;
    
    }
    
    /*
    if (!name.match(/^[A-Za-z]*\s{1}[A-Za-z]*$/)) {
    
      producePrompt('First and last name, please.','name-error', 'red');
      return false;
    
    }
    */
    producePrompt('Campo ingresado correctamente', 'lastname-error', 'green');
    return true;
    
    }
    function validateReference() {
    
        var reference = document.getElementById('referencia').value;
        
        if( reference.length > 26 ) {
        
          producePrompt('Referencia excede limite', 'reference-error' , 'red')
          return false;
        
        }
        
        /*
        if (!name.match(/^[A-Za-z]*\s{1}[A-Za-z]*$/)) {
        
          producePrompt('First and last name, please.','name-error', 'red');
          return false;
        
        }
        */
        producePrompt('Campo ingresado correctamente', 'reference-error', 'green');
        return true;
        
        }
    function validatePhone() {
    
    var phone = document.getElementById('telefono').value;
    
      if(phone.length == 0) {
        producePrompt('Telefono es requerido', 'phone-error', 'red');
        return false;
      }
    
      if(phone.length != 10) {
        producePrompt('Falta incluir el codigo de area, sin 0.', 'phone-error', 'red');
        return false;
      }
    
      if(!phone.match(/^[0-9]{10}$/)) {
        producePrompt('Solo numeros, por favor.' ,'phone-error', 'red');
        return false;
      }
    
      producePrompt('Campo ingresado correctamente', 'phone-error', 'green');
      return true;
    
    }
    
    function validateEmail () {
    
    var email = document.getElementById('email').value;
    
    if(email.length == 0) {
    
      producePrompt('Email Invalido','email-error', 'red');
      return false;
    
    }
    
    if(!email.match(/^[A-Za-z\._\-[0-9]*[@][A-Za-z]*[\.][a-z]{2,4}$/)) {
    
      producePrompt('Email Invalido', 'email-error', 'red');
      return false;
    
    }
    
    producePrompt('Campo ingresado correctamente', 'email-error', 'green');
    return true;
    
    }
    
    function validateMessage() {
    var message = document.getElementById('text-area').value;
    var required = 30;
    var left = required - message.length;
    
    if (left > 0) {
      producePrompt(left + ' Debe completar la consulta','message-error','');
      return false;
    }
    
    producePrompt('Campo ingresado correctamente', 'message-error', 'green');
    return true;
    
    }
    
    function validateForm() {
    if (!validateName() || !validatePhone() || !validateEmail() || !validateMessage() || !validatelastName() || !validateReference()) {
      jsShow('submit-error');
      producePrompt('Por favor revisa los campos erroneos.', 'submit-error', '');
      setTimeout(function(){jsHide('submit-error');}, 2000);
        return false;
    }
    else {
    
    }
    }
    
    function jsShow(id) {
    document.getElementById(id).style.display = '';
    }
    
    function jsHide(id) {
    document.getElementById(id).style.display = '';
    }
    
    
    
    
    function producePrompt(message, promptLocation, color) {
    
    document.getElementById(promptLocation).innerHTML = message;
    document.getElementById(promptLocation).style.color = color;
    
    
    }