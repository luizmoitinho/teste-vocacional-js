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
                        <ul class="col-md-6 center">
                            <li><?php echo"Esportista" ?></li>
                            <li><?php echo"Artista Plástico"?></li>
                            <li><?php echo"Ator"?></li>
                            <li><?php echo"fotógrafo"?></li>
                        </ul>
                        <ul class="col-md-6 center">
                            <li><?php echo"Administrador"?></li>
                            <li><?php echo"Advogado"?></li>
                            <li><?php echo" Engenheiro Químico/ Mecânico"?></li>
                        <ul>
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
                                    <ul class="col-md-6 center">
                                        <li><?php echo"Esportista" ?></li>
                                        <li><?php echo"Artista Plástico"?></li>
                                        <li><?php echo"Ator"?></li>
                                        <li><?php echo"Estilista"?></li>
                                    </ul>
                                    <ul class="col-md-6 center">
                                        <li><?php echo"Jornalista"?></li>
                                        <li><?php echo"Médico"?></li>
                                        <li><?php echo"Relações públicas"?></li>
                                        <li><?php echo"Chefe de Cozinha"?></li>
                                    <ul>
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
                                    <ul class="col-md-6  center">
                                        <li><?php echo"Administrador de Empresas" ?></li>
                                        <li><?php echo"Advogado"?></li>
                                        <li><?php echo"Promotor"?></li>
                                    </ul>
                                    <ul class="col-md-6  center">
                                        <li><?php echo"Juíz de Direito"?></li>
                                        <li><?php echo"Engenheiro Mecânico ou Químico"?></li>
                                    <ul>
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
                                    <ul class="col-md-6  center">
                                        <li><?php echo"Professor" ?></li>
                                        <li><?php echo"Psicólogo"?></li>
                                        <li><?php echo"Escritor"?></li>
                                        
                                    </ul>
                                    <ul class="col-md-6  center">
                                        <li><?php echo"Sociólogo"?></li>
                                        <li><?php echo"Promotor"?></li>
                                        <li><?php echo"Jornalista"?></li>
                                    <ul>
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
                                    <ul class="col-md-6 center">
                                        <li><?php echo"Analistas  de sistemas" ?></li>
                                        <li><?php echo"Antropólogo"?></li>
                                        <li><?php echo"Arquiteto / Engenheiro"?></li>
                                        <li><?php echo"Matemático"?></li>
                                    </ul>
                                    <ul class="col-md-6 center">
                                        <li><?php echo"Físico"?></li>
                                        <li><?php echo"Militar"?></li>
                                        <li><?php echo"Criador de software"?></li>
                                        <li><?php echo"Ator"?></li>
                                    <ul>
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
