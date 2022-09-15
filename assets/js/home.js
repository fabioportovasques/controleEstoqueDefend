var password = $('#password');
var olho= $("#olho");

olho.mousedown(function() {
    password.attr("type", "text");
});

olho.mouseup(function() {
    password.attr("type", "password");
});
// para evitar o problema de arrastar a imagem e a senha continuar exposta, 
//citada pelo nosso amigo nos comentários
$( "#olho" ).mouseout(function() { 
  $("#password").attr("type", "password");
});



var bot = document.querySelector('#bot');
bot.addEventListener('click', function(e){
    e.preventDefault();
    console.log('clicou');

    let tcampo = $('#user').val().length;
    let tcampo2 = $('#password').val().length;

    if  (tcampo == 0){
        console.log('preencha o campo usuario')
        let aviso1 = document.querySelector('#alert-preencher-user');
        aviso1.innerHTML="preencha o campo usuario";
        document.querySelector('#alert-preencher-user').style.display="block";
            $('#user').focus();
       
    }
    if  (tcampo2 == 0){
        console.log('preencha o campo senha');
        console.log('preencha o campo usuario')
        let aviso2 = document.querySelector('#alert-preencher-password');
        aviso2.innerHTML="preencha o campo com a senha";
        document.querySelector('#alert-preencher-password').style.display="block";
            $('#password').focus();
    }
})

//valida campos em branco

