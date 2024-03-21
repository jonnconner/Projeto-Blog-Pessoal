<!DOCTYPE html>

<html lang="pt-br">
<?php
define("AUTOR_BLOG", 'João Pedro Pozzobon');
//definição de variaveis
$NPostagens = 0;
//definição de matrizes
$Bloco_Apres = array(
    "img" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQDjKART_7pKSHKdvHBteUjy0HBHklC3fHg_J-KNUfb9g&s",
    "nome" => AUTOR_BLOG,
    "desc" => "Apenas eu, eu mesmo, explorando o universo do conhecimento.
        Tenho interesse em programação em geral, com ênfase em desenvolvimento de software.
        E quero compartilhar minhas ideias com voce!"
);
//bloco top 5
$Bloco_top5 = array(
    1 => array(
        "img" => "https://pm1.aminoapps.com/7123/9aff01a8f27cab834ee6d3a5c6d6ef7bd4a9ead1r1-588-636v2_hq.jpg",
        "titulo" => "Dez motivos para aprender HTML5 e CSS",
        "nComents" => 142
    ),
    2 => array(
        "img" => "https://assets.goal.com/v3/assets/bltcc7a7ffd2fbf71f5/blt0e5fab5cc44767e0/60deacc421d15821fe7bcbad/e2b7206cf38259fa5b4b340816691b6b8630c6dd.jpg?auto=webp&format=pjpg&width=3840&quality=60",
        "titulo" => "Experiência em gravidade 0",
        "nComents" => 10
    ),
    3 => array(
        "img" => "https://i.ytimg.com/vi/lkn_OjfdZZA/maxresdefault.jpg",
        "titulo" => "Como morar sozinho",
        "nComents" => 3
    ),
    4 => array(
        "img" => "https://s2-autoesporte.glbimg.com/VTlTZKdozDEz6NNKu0ZxwwY9DXs=/0x0:2247x1685/984x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_cf9d035bf26b4646b105bd958f32089d/internal_photos/bs/2022/F/W/v5tfPFQyeswP9muWBTiQ/mack.jpg",
        "titulo" => "Melhores músicas anos 90",
        "nComents" => 3
    ),
    5 => array(
        "img" => "https://images.tcdn.com.br/img/img_prod/460977/action_figure_peter_parker_tobey_maguire_spider_man_homem_aranha_escala_1_6_thunder_toys_estilo_hot__116361_1_8613665f246ff256c076effb59ff099f.jpg",
        "titulo" => "O que  fazer em sábado chuvoso",
        "nComents" => 2
    )
);

//matriz de postagens
$Bloco_Postagens = array(
    1 => array(
        "img" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ-2XbuHY2rlS1bi_cU3FWxBS1uHjTPhX4AX8ETTKKmohRTLLX9mvu1DUHm2A&s",
        "titulo" => "FALLEN",
        "Stitulo" => "O mundo virtual está cada vez mais real.",
        "data" => "Março, 19, 2024",
        "texto" => "Cada vez mais as novas tecnologias estão a melhorar a capacidade dos games. Estão a se transformar em verdadeiras obras de artes. Muitas vezes fica dificil distinguir o real do virtual. Os úiltimos lançamentos da...",
        "nComents" => "0",),
        2 => array(
            "img" => "data:image/jpeg;base64,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",
            "titulo" => "COLDZERA",
            "Stitulo" => "O melhor jogador que o Brasil ja teve, duas vezes campeão do mundo, juntamente com Fallen, porém duas vezes melhor do mundo, <br> diferentemente de Fallen que foi apenas uma vez.",
            "data" => "Março, 19, 2024",
            "texto" => "O Conter Strike no Brasil tem uma comunidade muito forte e unida, uma figura que foi muito responsável por este crescimento da comunidade no Brasil tem um nome, <br> e este nome é Gaules. Dono do maior canal da Twitch do Brasil, e no mundo.",
            "nComents" => "2",
        )
);
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>João</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel=”stylesheet” href=”https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css”>
</head>

<body class="w3-light-grey">
    <header class="w3-container w3-center w3-padding-32">
        <h1><b>Meu Blog Pessoal</b></h1>
        <p>Seja Bem Vindo. Criado por<span class="w3-tag w3-text-white w3-black"><?php echo AUTOR_BLOG ?></span></p>
    </header>
    <!--conteudo da pagina web-->
    <div class="w3-row">
        <!--coluna da esquerda-->
        <div class="w3-col w3-container" style="width: 65%;">
            <!--Postagem-->
            <?php
            while ($NPostagens < 2) {
                $NPostagens++;

            ?>
                <div class="w3-card-4 w3-margin w3-white">
                    <img src="<?php echo $Bloco_Postagens[$NPostagens]['img']; ?>" alt="Nature" style="width: 450px;;">
                    <div class="w3-container">
                        <h3><b>
                                <?php
                                echo $NPostagens . " " . $Bloco_Postagens[$NPostagens]['titulo']; ?>

                            </b>
                        </h3>
                        <h5>
                            <?php
                            echo $Bloco_Postagens[$NPostagens]['Stitulo'] . ', <span class="w3-opacity">' . $Bloco_Postagens[$NPostagens]['data'] . "</span>"; ?>

                        </h5>
                    </div>
                    <div class="w3-container">
                        <?php
                        echo "<p>" . $Bloco_Postagens[$NPostagens]['texto'] . "</p>"; ?>
                        <div class="w3-row">    
                        </div>
                        <div class="w3-col" style="width: 80%;">
                            <p><button class="w2-button w3-padding-large w3-white w3-border"><b>Leia Mais...</b></button> </p>
                        </div>
                    </div>
                        <div class="w3-col w3-hide-small" style="width: 20%;">
                            <p><span class="w3-padding-large w3-right"><b>Comments </b>
                                <span class="w3-tag">
                                    <?php echo $Bloco_Postagens[$NPostagens]['nComents']; ?>
                                </span>
                            </span>
                            </p>
                        </div>
                </div>
        </div>
    </div>
    <hr>
<?php
            } ?>
</div>
<hr>


<!--Coluna da direita-->
<div class="w3-col w3-container" style="width: 35%;">
    <!--Bloco de apresntacao-->
    <div class="w3-card w3-margin">
        <img src=<?php echo $Bloco_Apres["img"]; ?> style="width: 100%;">
        <div class="w3-container w3-white">
            <h4><b><?php echo $Bloco_Apres["nome"]; ?> </b></h4>
            <p> <?php echo $Bloco_Apres["desc"]; ?></p>
        </div>
    </div>
    <hr>
</div>
<hr>
<!--bloco top 5-->
<div class="w3-card w3-margin">
    <div class="w3-container w3-padding">
        <h4>Postagens Mais Populares</h4>
    </div>
    <ul class="w3-ul w3-hoverable w3-white">
        <?php
        for ($i = 1; $i <= 5; $i++) {
            $I = $Bloco_top5[$i]['img'];
            $T = $Bloco_top5[$i]['titulo'];
            $N = $Bloco_top5[$i]['nComents']; ?>
            <li class="w3-padding-16">
                <img src="<?php echo $Bloco_top5[$i]["img"] ?>
                            " class="w3-left w3-margin-right" style="width: 40px;">
                <span class="w3-large"> <?php echo $Bloco_top5[$i]['titulo'] ?> </span>
                <br>
                <span>Comentários: <?php echo $Bloco_top5[$i]["nComents"] ?></span>
            </li>
        <?php
        }
        ?>
    </ul>
</div>
<hr>
<!--bloco filtros-->
<div class="w3-card w3-margin">
    <div class="w3-container w3-padding">
        <h4>Categorias</h4>
    </div>
    <div class="w3-container w3-white">
        <p>
            <span class="w3-tag w3-black w3-margin-bottom">Todas</span>
            <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Viagens</span>
            <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Esportes</span>
            <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Política</span>
            <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Família</span>
            <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Game</span>
        </p>
    </div>
</div>
</div>
</div>

<footer class="w3-container w3-dark-grey w3-margin-top w3-cell-row">
    <button class="w3-button w3-black w3-disabled w3-padding-large w3-margin-bottom">Anterior</button>
    <button class="w3-button w3-black w3-padding-large w3-margin-bottom">Próximo >></button>
    </div>
    <div class="w3-container w3-cell w3-cell-bottom">
        <br><br><br>
        <p>Introdução ao Coding (Web) by Luiz Fernando Corracino</p>
    </div>
    <div class="w3-container w3-cell w3-cell-top">
        <a href="#" class="w3-padding w3-xxlarge fab fa-facebook"></a>
        <a href="#" class="w3-padding w3-xxlarge fab fa-twitter"></a>
        <a href="#" class="w3-padding w3-xxlarge fab fa-instagram"></a>
    </div>


    </div>
</footer>
</body>

</html>