<?php

$sql = "SELECT * FROM informacoes";
$info = selectSQLUnico($sql);

if(isset($_GET["id"]) && isset($_GET["telefone"]) && isset($_GET["morada"]) && isset($_GET["email"]) && isset($_GET["horarios"]) && isset($_GET["instagram"]) && isset($_GET["facebook"]) && isset($_GET["linkedin"])){
    $id =  intval($_GET["id"]);
    $telefone = $_GET["telefone"];
    $morada = $_GET["morada"];
    $email = $_GET["email"];
    $horarios = $_GET["horarios"];
    $instagram = $_GET["instagram"];
    $facebook = $_GET["facebook"];
    $linkedin = $_GET["linkedin"];
    
    $sql = "UPDATE informacoes SET telefone='$telefone', morada='$morada', email='$email', horarios='$horarios', instagram='$instagram', facebook='$facebook', linkedin='$linkedin' WHERE id=$id";
    
    iduSQL($sql);
    header("Location: informacoes.php");
}


?>
    
    
    <main>
        <div class="box" style="padding: 10px 0px">
            <form action="" style="padding:20px">
                <input type="hidden" name="id" value="<?= $info["id"]; ?>">

                <label for="telefone">Telefone:</label>
                <input type="text" name="telefone" value="<?= $info["telefone"] ;?>" style="width:60%">

                <br><br>

                <label for="morada">Morada:</label>
                <input type="text" name="morada" value="<?= $info["morada"] ;?>" style="width:60%">

                <br><br>

                <label for="email">Email:</label>
                <input type="text" name="email" value="<?= $info["email"] ;?>" style="width:60%">

                <br><br>

                <label for="horarios">Horários:</label>
                <input type="text" name="horarios" value="<?= $info["horarios"] ;?>" style="width:60%">

                <br><br>

                <label for="instagram">Instagram:</label>
                <input type="text" name="instagram" value="<?= $info["instagram"] ;?>" style="width:60%">

                <br><br>

                <label for="facebook">Facebook:</label>
                <input type="text" name="facebook" value="<?= $info["facebook"] ;?>" style="width:60%">

                <br><br>

                <label for="linkedin">Linkedin:</label>
                <input type="text" name="linkedin" value="<?= $info["linkedin"] ;?>" style="width:60%">

                <br><br>

                <input type="submit" value="Confirmar" class="botao">
            </form>
        </div>
           
    </main>