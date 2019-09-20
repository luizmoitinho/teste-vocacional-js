<?php
define("QTD_QUESTOES","21");
header('Content-Type: text/html; charset=utf-8');// para formatar corretamente os acentos
$respostasFormulario = json_decode($_POST['rel'], true);
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
    if( ($letrasAssinaladas['a'] == $letrasAssinaladas['b']) && $letrasAssinaladas['c'] == $letrasAssinaladas['d']){ ?>
        <span class="titulo-perfil"><?php echo"A sua principal característica é"?></span>
        <p class="descricao-perfil">
            <?php echo" O movimento gosta de novidades, apresentando destreza fisica e boa expressão corporal.Tem facilidade
                        de lidar com fatos, análises,tendo o comando e responsabilidade duas palavras que a represetam.";
            ?>
        </p>
        <div class="lista-profissoes ">
            <span class="titulo-perfil"><?php echo"Carreiras apropriadas"?></span>  
                <div class="container">
                    <div class="row">
                        <div class="col-md-5 profissoes ">
                            <span><?php echo"Esportista" ?></span>
                            <span><?php echo"Artista Plástico"?></span>
                            <span><?php echo"Ator"?></span>
                            <span><?php echo"fotógrafo"?></span>
                        </div>
                        <div class="col-md-5 profissoes ">
                            <span><?php echo"Administrador"?></span>
                            <span><?php echo"Advogado"?></span>
                            <span><?php echo" Engenheiro Químico/ Mecânico"?></span>
                        <div>
                    </div>
                </div>
        </div>
    <?php     
    }
    else{
        //verificar qual item possui mais "pontos"

        switch(itemMaisAssinalado($letrasAssinaladas)){
            case 'a':?>
                    <span class="titulo-perfil"><?php echo"A sua principal característica é"?></span>
                    <p class="descricao-perfil">
                        <?php echo"O movimento, gosta de novidades. Apresenta destreza física e boa expressão corporal.
                                Não gosta de rotina e sim o trabalho como uma fonte de prazer.";
                        ?>
                    </p>
                    <div class="lista-profissoes ">
                        <span class="titulo-perfil"><?php echo"Carreiras apropriadas"?></span>  
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6 profissoes  ">
                                        <span><?php echo"Esportista" ?></span>
                                        <span><?php echo"Artista Plástico"?></span>
                                        <span><?php echo"Ator"?></span>
                                        <span><?php echo"Estilista"?></span>
                                    </div>
                                    <div class="col-md-6 profissoes  ">
                                        <span><?php echo"Jornalista"?></span>
                                        <span><?php echo"Médico"?></span>
                                        <span><?php echo"Relações públicas"?></span>
                                        <span><?php echo"Chefe de Cozinha"?></span>
                                    <div>
                                </div>
                            </div>
                    </div>
            
                <?php break;?>
           <?php case 'b': ?>
                    <span class="titulo-perfil"><?php echo"A sua principal característica é"?></span>
                    <p class="descricao-perfil">
                        <?php echo"Facilidade para lidar com fatos, quantidades, análises. O comando e responsabilidade, são duas palavras que respresentam sua personalidade.
                            Tem a  habilidade de lidar com organizações e planejamentos,análises.
                            Trabalho duro, sendo mais propícios profissões que lhe  proporcionem status e possibilidade de crescimento
                            são as mais presentes no mundo corporativo.";
                        ?>
                    </p>
                    <div class="lista-profissoes">
                        <span class="titulo-perfil"><?php echo"Carreiras apropriadas"?></span>  
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-5 profissoes right">
                                        <span><?php echo"Administrador de Empresas" ?></span>
                                        <span><?php echo"Advogado"?></span>
                                        <span><?php echo"Engenheiro Mecânico/Químico"?></span>
                                        <span><?php echo"Juíz de Direito"?></span>
                                    </div>
                                    <div class="col-md-5 profissoes left">
                                        <span><?php echo"Promotor"?></span>
                                    <div>
                                </div>
                            </div>
                     
                    </div>
            <?php break;
            case 'c':?>
                    <span class="titulo-perfil"><?php echo"A sua principal característica é"?></span>
                    <p class="descricao-perfil">
                        <?php echo"Tem grande entusiasmo e interesse nas relações humanas com intuição forte, tendo maior habilidade para o desenvolvimento<br>
                             intelectual de alunos e conforto psicológico de outras pessoas(como colegas de trabalho).";
                        ?>
                    </p>
                    <div class="lista-profissoes">
                        <span class="titulo-perfil"><?php echo"Carreiras apropriadas"?></span>  
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-5 profissoes right">
                                        <span><?php echo"Professor" ?></span>
                                        <span><?php echo"Psicólogo"?></span>
                                        <span><?php echo"Escritor"?></span>
                                        <span><?php echo"Sociólogo"?></span>
                                    </div>
                                    <div class="col-md-5 profissoes left">
                                        <span><?php echo"Promotor"?></span>
                                        <span><?php echo"Jornalista"?></span>
                                    <div>
                                </div>
                            </div>
                     
                    </div>          
            <?php break;
            case 'd':?>
                   <span class="titulo-perfil"><?php echo"A sua principal característica é"?></span>
                    <p class="descricao-perfil">
                        <?php echo" Contém um foco maior em grandes interesses na área do conhecimento, como a ciência e tecnologia, 
                            apresentando uma habilidade, para desenvolver coisas novas e identificar problemas concretos e resolve-los.";
                        ?>
                    </p>
                    <div class="lista-profissoes">
                        <span class="titulo-perfil"><?php echo"Carreiras apropriadas"?></span>  
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-5 profissoes right">
                                        <span><?php echo"Analistas  de sistemas" ?></span>
                                        <span><?php echo"Antropólogo"?></span>
                                        <span><?php echo"Arquiteto / Engenheiro"?></span>
                                        <span><?php echo"Matemático"?></span>
                                    </div>
                                    <div class="col-md-5 profissoes left">
                                        <span><?php echo"Físico"?></span>
                                        <span><?php echo"Militar"?></span>
                                        <span><?php echo"Criador de software"?></span>
                                        <span><?php echo"Ator"?></span>
                                    <div>
                                </div>
                            </div>
                     
                    </div>      

            <?php break; 
            default:?>
                <span class="titulo-perfil">
                        <?php 
                            echo" <b>OOPS!</b> Nosso sistema não conseguiu identificar o seu perfil profissional.
                                   Estamos melhorando nossos algoritmos!"
                        ?>
                </span>
                   
        <?php
        }
    }
}


// ============ FUNCOES ====================

function itemMaisAssinalado($letrasAssinaladas){
    $i=0;
    $empate=false;
    $letraMaisMarcada= 'a';
    $maior = 0;
    foreach($letrasAssinaladas as $letra => $quantidadeMarcada){
        if($quantidadeMarcada > $maior){
            $letraMaisMarcada =  $letra;
            $maior = $quantidadeMarcada;
            $empate = false;
        } 
        else if($quantidadeMarcada == $maior){
            $empate = true ;
        }
    }
    if($empate)
            return 'default';
    else
        return $letraMaisMarcada;

}

function quantificaItensAssinalados($respostasFormulario,&$letrasAssinaladas){
    foreach($respostasFormulario as  $resposta){
        somaRepostas($resposta,$letrasAssinaladas);
    }
}


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
