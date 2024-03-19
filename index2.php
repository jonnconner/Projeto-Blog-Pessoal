<?php
$colegas = array(
    1 => array (
        "Nome" => "Carlos",
        "Telefone" => "999999999",
        "Endereço" => "Rua xxxx",
        "Data Nasc" => "05/11/2002"),
    2 => array(
        "Nome" => "Joana",
        "Telefone" => "9999999",
        "Endereço" => "Rua xxxx",
        "Data Nasc" => "01/05/1991"),
    3 => array(
        "Nome" => "Marisa",
        "Telefone" => "999999999",
        "Endereço" => "Rua Xxxxxxx",
        "Data Nasc" => "10/03/2004"),
    4 => array(
        "Nome" => "Joaquim",
        "Telefone" => "00000000",
        "Endereço" => "Rua yyyyyyyy",
        "Data Nasc" => "10/08/1997",)
    );
    echo "<br>" .$colegas[4] ["Nome"]. "</br>";
    echo "-Telefone:".$colegas[4] ["Telefone"]. "<br>";
    echo "<b>" .$colegas[3] ["Nome"]. "</b><br>";
    echo "-Data de Nascimento:" .$colegas[3] ["Data Nasc"]. "<br>";