<?php
include_once "conn.php";

$naam = $_POST["naam"];
$voornamen = $_POST["voornamen"];
$alias = $_POST["alias"];
$plaats = $_POST["plaats"];
$geb = $_POST["geb"];
$natio = $_POST["natio"];
$id = $_POST["id"];
$tel = $_POST["tel"];
$pasp = $_POST["pasp"];
$bijz = $_POST["bijz"];
$modus = $_POST["exampleInputNatio"];
$bron = $_POST["bron"];

$sql = "INSERT INTO `subject_info`(`naam`, `voornamen`, `Geb_Datum`, `Geb_plaats`, `Nationaliteit`, `ID_nummer`, `pasp_no`, `bron`) 
VALUES ('$naam','$voornamen','$geb','$plaats', '$natio','$id','$pasp','$bron')";

if ($conn->query($sql) === TRUE) {
    $last_id = $conn->insert_id;
    $sql = "INSERT INTO `subject_alias`( `subject_id`, `alias`) 
    VALUES ($last_id,'$alias')";
    if ($conn->query($sql) === TRUE) {
        $sql = "INSERT INTO `subj_bijzonderheden`(`subject_id`, `bijzonderhijd`)
            VALUES ($last_id,'$bijz')";
        if ($conn->query($sql) === TRUE) {
            $sql = "INSERT INTO `subject_modus`(`subject_id`, `modus`)
            VALUES ($last_id,'$modus')";
            if ($conn->query($sql) === TRUE) {
                $sql = "INSERT INTO `subject_nummer`(`subject_id`, `nummer`)
                VALUES ($last_id,'$tel')";
                if ($conn->query($sql) === TRUE) {
                header("Location: ../view/subject_view.php?id=".$last_id);
                echo "created";
                } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
                }
            } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            }
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>