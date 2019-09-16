<?php
define("QTD_QUESTOES","5");
#recebendo valores
$respostasFormulario =  pegarRespostasFormulario();

if(itensVazios($respostasFormulario)){
    // informa que erro, todas as questoes devem ser assinaladas!
    echo "<script> alert('Ops! Todos os itens devem ser assinaladas!')
          window.location.href='index.html';
    </script>";
}
else{
    // todas as questoes foram preenchidas corretamente!
    $letrasAssinaladas = array("a"=>0,"b"=>0,"c"=>0,"d"=>0);  
    quantificaItensAssinalados($respostasFormulario,$letrasAssinaladas);
    echo"<pre>";
    var_dump($letrasAssinaladas);

    if( ($letrasAssinaladas['a'] == $letrasAssinaladas['b']) && $letrasAssinaladas['c'] == $letrasAssinaladas['d']){
        echo "<b>A sua principal característica é :</B><p>
        O movimento gosta de novidades, apresentando destreza fisica e boa expressão corporal.Tem facilidade
        de lidar com fatos, análises,tendo o comando e responsabilidade duas palavras que a represetam.";
        echo "<Br>";
        echo "<Br>";
        echo "<b>Carreiras apropriadas:</b>";
        echo "<p>";
        echo "Esportista, artista plástico, ator, estilista, fotógrafo";
        echo "<Br>";
        echo "Administrador, advogado, engenheiro químico/mecânico<p> ";          
    }
    else{
        //verificar qual item possui mais "pontos"
               //verificar qual item possui mais "pontos"
        $texto="";
        switch(itensMaisAssinalado($letrasAssinaladas)){
            case 'a':
                $texto = "
                <div>
                    <div>
                        <span>A sua principal característica é :</span>
                        <p>
                            O movimento, gosta de novidades. Apresenta destreza física e boa expressão corporal.
                            Não gosta de rotina e sim o trabalho como uma fonte de prazer.
                        </p>
                        <div>
                            <span>Carreiras apropriadas</span>
                            <ol>
                                <li>Esportista</li>
                                <li>Artista Plástico</li>
                                <li>Ator</li>
                                <li>Estilista</li>
                            </ol>
                            <ol>
                                <li>Jornalista</li>
                                <li>Médico</li>
                                <li>Relações públicas</li>
                                <li>Chefe de Cozinha</li>
                            </ol>
                        </div>
                    </div>

                </div>
                ";
  
                break;
            case 'b':
                $texto="
                <div>
                    <div>
                        <span>A sua principal característica é :</span>
                        <p>
                            Facilidade para lidar com fatos, quantidades, análises. O comando e responsabilidade, são duas palavras que respresentam sua personalidade.
                            Tem a  habilidade de lidar com organizações e planejamentos,análises.
                            Trabalho duro, sendo mais propícios profissões que lhe  proporcionem status e possibilidade de crescimento
                            são as mais presentes no mundo corporativo.
                        <p>
                        <div>
                            <span>Carreiras apropriadas</span>
                            <ol>
                                <li>Administrador de Empresas</li>
                                <li>Advogado</li>
                                <li>Engenheiro Mecânico/Químico</li>
                                <li>Juíz de Direito</li>
                            </ol>
                            <ol>
                                <li>promotor</li>
                            </ol>
                        </div>
                    </div>

                </div>
                ";
                break;
            case 'c':
                $texto ="
                    <div>
                        <div>
                            <span>A sua principal característica é :</span>
                            <p>
                             Tem grande entusiasmo e interesse nas relações humanas com intuição forte, tendo maior habilidade para o desenvolvimento<br>
                             intelectual de alunos e conforto psicológico de outras pessoas(como colegas de trabalho).
                            <p>
                            <div>
                                <span>Carreiras apropriadas</span>
                                <ol>
                                    <li>Professor</li>
                                    <li>Psicólogo</li>
                                    <li>Escritor</li>
                                    <li>Sociólogo</li>
                                </ol>
                                <ol>
                                    <li>promotor</li>
                                    <li>Jornalista</li>
                                </ol>
                            </div>
                        </div>

                    </div>
                ";
                break;
            case 'd':
                $texto="
                <div>
                    <div>
                        <span>A sua principal característica é :</span>
                        <p>
                            Contém um foco maior em grandes interesses na área do conhecimento, como a ciência e tecnologia, 
                            apresentando uma habilidade, para desenvolver coisas novas e identificar problemas concretos e resolve-los.
                        <p>
                        <div>
                            <span>Carreiras apropriadas</span>
                            <ol>
                                <li>Analistas  de sistemas</li>
                                <li>Antropólogo</li>
                                <li>Arquiteto / Engenheiro</li>
                                <li>Matemático</li>
                            </ol>
                            <ol>
                                <li>Físico</li>
                                <li>Militar</li>
                                <li>Criador de software</li>
                                <li>Ator</li>
                            </ol>
                
                        </div>
                    </div>
                </div>
                ";
                break;
            default:
                $texto="
                    <div>
                        Ops!  Nosso sistema não conseguiu identificar o seu perfil profissional!
                    </div>
                ";
        }
    }
    echo $texto;
}


function itensMaisAssinalado($letrasAssinaladas){
    $letraMaisMarcada= 'a';
    $maior = $letrasAssinaladas['a'];
    foreach($letrasAssinaladas as $letra => $quantidadeMarcada){
        if($quantidadeMarcada > $maior)
            $letraMaisMarcada =  $letra;
    }
    echo "> ".$letra;
    return $letra;
}

function quantificaItensAssinalados($respostasFormulario,&$letrasAssinaladas){
    foreach($respostasFormulario as  $resposta){
        somaRepostas($resposta,$letrasAssinaladas);
    }
}

// ============ FUNCOES ====================

function pegarRespostasFormulario(){
    $arrayRespostas =  array();
    for($i=1;$i<=QTD_QUESTOES;$i++){
        if(array_key_exists('questao'.$i,$_POST))
            $arrayRespostas['questao'.$i] = $_POST['questao'.$i];    
        else{
            $arrayRespostas['questao'.$i]="";
        }
    }
    return $arrayRespostas;
}
function somaRepostas($assinalada,&$letrasAssinaladas){
    switch($assinalada){
        case 'a':
            $letrasAssinaladas['a']+=1;
            break;
        case 'b':
            $letrasAssinaladas['b']++;
            break;
        case 'c':
            $letrasAssinaladas['c']++;
            break;
        case 'd':
            $letrasAssinaladas['d']++;
            break;
    }
}

function itensVazios($respostasFormulario){
    foreach($respostasFormulario as $resposta ){
        if($resposta=="")
            return true;
    }

    return false;
}

?>
