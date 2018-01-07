<?php
//echo "solo";

$mysqli=new mysqli("localhost","root","","marketing");
if (mysqli_connect_errno()) {
    die("Error al conectar: ".mysqli_connect_error());
}
$mysqli->set_charset("utf8");

//Returns all the accepted posts
$aceptados = $mysqli->query("SELECT * FROM posts WHERE estado = 'aceptado'");

if($aceptados){ //if not empty

    while ($rowA=$aceptados->fetch_array(MYSQLI_ASSOC)) { //Fetches the information

        //Updates the 'X' field with a random number
        $aceptadosUpdate = $mysqli->query("UPDATE `posts` SET `X`=".rand()." WHERE `id_post` = '" .$rowA["id_post"]."'");
        //$aceptadosUpdate . " - " . $rowA["id_post"] ;

        
        //$result=$mysqli->query("SELECT TIMESTAMPDIFF(SECOND, (SELECT fechaactual FROM campanna where `idcampaña`='".$row2["idcampaña"]."'),(SELECT `fecha_term` FROM `campanna` where `idcampaña`='".$row2["idcampaña"]."')) as `diff`,fechaactual,tipo,idcampaña FROM campanna where idcampaña='".$row2["idcampaña"]."'");
        $aceptadosCMP = $mysqli->query("SELECT TIMESTAMPDIFF(SECOND, (SELECT fecha_actual FROM posts where `id_post`='".$rowA["id_post"]."'),(SELECT `fecha_publicar` FROM `posts` WHERE `id_post`='".$rowA["id_post"]."')) AS `CMP`,id_post,fecha_actual,tipo, estado,fid_contenido FROM posts where id_post='".$rowA["id_post"]."'");
        //$aceptadosCMP = $mysqli->query("SELECT TIMESTAMPDIFF(SECOND, (SELECT fecha_actual FROM posts where `id_post`='".$rowA["id_post"]."'),(SELECT `fecha_publicar` FROM `posts` WHERE `id_post`='".$rowA["id_post"]."')) AS `CMP`, tipo");
        //$aceptadosCMP = $mysqli->query("SELECT ((SELECT fecha_actual FROM posts where `id_post`='".$rowA["id_post"]."') - (SELECT `fecha_publicar` FROM `posts` WHERE `id_post`='".$rowA["id_post"]."')) AS `CMP`");
        //$aceptadosCMP = $mysqli->query("SELECT DATEDIFF(SECOND, SELECT fecha_actual FROM posts where `id_post`='".$rowA["id_post"]."'), (SELECT `fecha_publicar` FROM `posts` WHERE `id_post`='".$rowA["id_post"]."')) AS `CMP`");
        //echo $aceptadosCMP;

        if ($aceptadosCMP) {
            while ($row = $aceptadosCMP->fetch_array(MYSQLI_ASSOC)) {
                //echo "DIFF: " . $row['CMP'];
                //echo "FECHA ACTUAL: " . $row["fecha_actual"];
                //echo "FECHA : " . $row["fecha_actual"];
                if ($row["CMP"] == '0') {
                    echo $row["id_post"];
                }else{

                }
            }
        }
    }
}

?>