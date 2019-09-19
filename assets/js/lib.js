

const qtdQuestoes =3;

window.addEventListener("load",function(){
    let btnEnviar =  document.getElementById("btnEnviar");
    btnEnviar.addEventListener("click",function(){
        let inputsRadios =  getInputsRadio();
        let respostas = new Object();
        let condicaoFormulario = validarFormulario(inputsRadios,respostas)
        if(condicaoFormulario==true){
            processarRespostas(respostas);
        }
        else{
            //questoes em branco
            alert("Assinale todas as questoes!!");
        }

    });
});

function processarRespostas(questoes){
    let dados = JSON.stringify(questoes);
    $.ajax({
        type:'POST',
        url:"processaRespostas.php",
        data: {'rel': dados},
        success: function (html){
            $('#perfil-profissional').html(html);
        }   

    });
}

function getInputsRadio(){
    let inputs =  document.getElementsByTagName("input");
    let radio =  new Array();
    for(let input of inputs)
     if(input.type=="radio")
         radio.push(input);
    return radio;
}  
function validarFormulario(inputsRadio,respostas){
    let nomesQuestoes = gerarNomesQuestoes();
    for(let i in inputsRadio){
        if(inputsRadio[i].checked==true){
            nomesQuestoes.splice(nomesQuestoes.indexOf(inputsRadio[i].name),1);
            respostas[inputsRadio[i].name]=inputsRadio[i].value;
        }     
    }
   if(nomesQuestoes.length==0)
        return true;
    else
        return nomesQuestoes;
}
function gerarNomesQuestoes(){
    let nomes = new Array();
    for(let i=1;i<=qtdQuestoes;i++)
        nomes.push("questao"+i);
    return nomes;
}
function exibirPerfilProfissional(texto){
    let divPerfil = document.getElementById("perfil-profissional");
    divPerfil.innerHTML = texto;
}