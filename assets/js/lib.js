window.addEventListener("load",function(){
    let btnEnviar =  document.getElementById("btnEnviar");
    btnEnviar.addEventListener("click",function(){
        //pegar todas questoes assinaladas e armazenar em um array.
        // no fomarto :  array("questao1"=>"a");
        let divs = document.getElementsByClassName("questao");
        
    });
});

function processarRespostas(){
    $.ajax({
        type:'POST',
        url:"processarRepostas.php",
        data:,
        success: function (html){
            $('#perfil-profissional').html(html);
        }   

    });
    
}

function exibirPerfilProfissional(texto){
    let divPerfil = document.getElementById("perfil-profissional");
    divPerfil.innerHTML = texto;
}