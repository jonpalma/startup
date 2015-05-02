$(function() {
//Validación de campos
        var regexPassword = /(?=.*\d)(?=.*[a-z]).{6,}/;
        var regexEmail = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

    $('#user').focusout(function() {
        username = $('#user').val();
        if(username !== "") {
            if(validateEmail(username)) {
                 ajaxCheckUserExists(username); 
             } else {
                 $('#user').removeClass('bg-success success');
                 $('#user').addClass('bg-danger danger');
                 $('#error-user').removeClass('hidden');;
                 $('#error-user').text('El usuario debe ser un correo electrónico valido');
             }
        } else {
            $('#error-user').addClass('hidden');;
            $('#user').removeClass('bg-success success  bg-danger danger');
            
        }
    });
    
    $('#password').focusout(function() {
        var passwd = $('#password').val();
        if(passwd !== '') {
            if(validatePassword(passwd)) {
                $('#password').addClass('bg-success success');
                $('#password').removeClass('bg-danger danger');
                $('#error-pass').addClass('hidden');
            } else {
                $('#password').addClass('bg-danger danger');
                $('#password').removeClass('bg-success success');
                $('#error-pass').removeClass('hidden');
                $('#error-pass').text('La contraseña debe contener 6 carácteres mínimo un número y letras');
            }
        } else {
            $('#password').removeClass('bg-success success bg-danger danger');
            $('#error-pass').addClass('hidden');
        }
    });
    
    $('#passwordC').keyup(function() {
        var passwd = $('#password').val();
        var passwdC = $('#passwordC').val();
        
        if(passwd !== '' && passwdC !== '') {
            if(comparePassword(passwd, passwdC)) {
                $('#passwordC').addClass('bg-success success');
                $('#passwordC').removeClass('bg-danger danger');
            } else {
                $('#passwordC').addClass('bg-danger danger');
                $('#passwordC').removeClass('bg-success success'); 
            }
        } else {
            $('#passwordC').removeClass('bg-success success bg-danger danger');
        }
    });
    
    $('#passwordC').focusout(function() {
        var passwd = $('#password').val();
        var passwdC = $('#passwordC').val();
        
        if(passwd !== '' && passwdC !== '') {
            if(comparePassword(passwd, passwdC)) {
                $('#passwordC').addClass('bg-success success');
                $('#passwordC').removeClass('bg- danger danger');
            } else {
                $('#passwordC').addClass('bg-danger danger');
                $('#passwordC').removeClass('bg-success success'); 
            }
        } else {
            $('#passwordC').removeClass('bg-success success bg-danger danger');
        }
    });
    
    

function ajaxCheckUserExists(username) {
    $.ajax({
        url: "user-exists.php",
        async: true,
        type: "GET",
        data: { user: username},
        
        success: function(result) {
            if(result === "1") {
                    $('#user').removeClass('bg-danger danger');
                    $('#user').addClass('bg-success success');
                    $('#error-user').addClass('hidden');
                 } else {
                    $('#user').removeClass('bg-success success');
                    $('#user').addClass('bg-danger danger');
                    $('#error-user').removeClass('hidden');
                    $('#error-user').text('Este es un usuario existente');
                 }
        }
    });
    
}

function validateEmail(user) {
    if(!regexEmail.exec(user)) {
        return false;
    } else {
        return true;
    }
    
}

function validatePassword(passwd) {
    if(!regexPassword.exec(passwd)) {
        return false;
    } else {
        return true;
    }
}

function comparePassword(pass1, pass2) { 
    if ( pass1 === pass2 ) {
        return true;
    } else {
        return false;
    }
    
}
});




