document.getElementById("cadastroForm").addEventListener("submit", function (event) {
    event.preventDefault();

    
    const nome = document.getElementById("nome").value;
    const email = document.getElementById("email").value;
    const senha = document.getElementById("senha").value;

    const cadastroData = {
        nome: nome,
        email: email,
        senha: senha
    };


    console.log("Dados do cadastro:", cadastroData);


    document.getElementById("cadastroForm").reset();

    
});
function cadastrar(){
    alert("Cadastro feito, redirecionando para a página de login");
    window.location.href = "login.html"
}