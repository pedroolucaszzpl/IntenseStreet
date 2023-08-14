function Logar(){
    var usuario = 'senai';
    var senha = '0000';
 
    if(document.getElementById('nome_login').value == usuario && document.getElementById('senha_login').value == senha){
        window.location.href = "main.html"
    }else{
        alert("Senha incorreta, tente novamente...")
    }
 }
