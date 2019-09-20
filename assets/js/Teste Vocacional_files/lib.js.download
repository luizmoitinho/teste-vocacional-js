

const qtdQuestoes =21;

window.addEventListener("load",function(){
    $('html, body').animate( { scrollTop: 0});
    let btnEnviar =  document.getElementById("btnEnviar");
    btnEnviar.addEventListener("load",function(){
        let inputsRadios =  getInputsRadio();
        let respostas = new Object();
        let condicaoFormulario = validarFormulario(inputsRadios,respostas)
        if(condicaoFormulario==true){
           carregar();
            processarRespostas(respostas,function(callback){
               destroiCarregar()
            });
       }
       else{
           alert("Assinale todas as questoes!!");
       }
    });
});

function processarRespostas(questoes,callback){
    let dados = JSON.stringify(questoes);
    $.ajax({
        type:'POST',
        url:"processaRespostas.php",
        data: {'rel': dados},
        
        success: function (html){
            callback(
               
                $('html, body').animate( { scrollTop: $(document).height()}, 700),
                  
                $('#perfil-profissional').css("visibility","visible"),
                $('#perfil-profissional').html(html)
            );
            
        },
        error: function () {
            alert("Ocorreu um erro no processamento dos dados!");
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


function carregar() {
    let divCarregar = document.createElement("div");
    let iconCarregar = document.createElement("div");
    divCarregar.setAttribute("id", "carregar");
    divCarregar.insertAdjacentElement("afterbegin", iconCarregar);
    iconCarregar.setAttribute("class", "icon-load")
    divCarregar.setAttribute("class", "espera-usuario container-fluid");
    let fundo = document.getElementById("corpo");
    fundo.insertAdjacentElement("afterbegin", divCarregar);
  }

function destroiCarregar() {
    let carregar = document.getElementById("carregar");
    carregar.parentNode.removeChild(carregar);
  }