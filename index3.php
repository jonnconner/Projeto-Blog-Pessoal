<?php
//exemplo de laço de repetição FOR
$NPostagens=7;
for ($Cont=$NPostagens; $Cont>0; $Cont--)
{
    /*exemplo de bloco de codigo para apresentar o conteudo das postagens*/
    echo "Postagem" .$Cont. "-<b>Título</b>" ."<br";
    echo "Conteúdo da postagem" .$Cont ."<br>";
    echo "Autor e data da postagem" .$Cont . "<br> <br>";
}
?>