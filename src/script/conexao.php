<?php
$servername ="viaduct.proxy.rlwy.net:13562";
$username = "root";
$password = "gcUJrReTJlbfLToSiJXSJflUAtdoSFcr";
$bdname = "railway";


$conn = mysqli_connect($servername, $username, $password, $bdname);
if (!$conn) {
    echo "deu erro";
}

if($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST["enviar-infos"])) {
        $nomeplayer = $_POST["nome-player"];
        $pontosnumero = $_POST["pontos-numero-evenviar"];
        enviarNome($nomeplayer, $pontosnumero);
    }else{
        echo "erro";
    }
}

function enviarNome($nomeplayer, $pontosnumero){
    global $conn;
    $sql = "INSERT INTO playerinfos (nome, pontos) VALUES ('$nomeplayer', '$pontosnumero')";
    if($conn->query($sql)){
        echo "deu certo";
    }else{
        echo "erro";
    }
}



function tablaPontos(){
    global $conn;
    
    $sql = "SELECT * FROM playerinfos ORDER BY pontos DESC LIMIT 5";
    $result = mysqli_query($conn, $sql);
    
    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "Nome: " . $row['nome'] . ", Pontos: " . $row['pontos'] . "<br>";
        }
    }
    
    mysqli_close($conn);
}
