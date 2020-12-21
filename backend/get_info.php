<?php
include_once "conn.php";
$subject = new subj;


class subj{

    function get_persoonlijk_info($id,$conn){
       
        $sql = "SELECT * FROM `subject_info` WHERE `subject_id` = $id";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            
            echo " <tr>
            <td>
            Naam:
            </td>
            <td>".$row["naam"]."</td>
        </tr>
        <tr>
            <td>
            Voornamen:
            </td>
            <td>".$row["voornamen"]."</td>
        </tr>
        <tr>
            <td>
            Geboorte Datum:
            </td>
            <td>".$row["Geb_Datum"]."</td>
        </tr>
        <tr>
            <td>
            Geboorte Plaats:
            </td>
            <td>".$row["Geb_plaats"]."</td>
        </tr>
        <tr>
            <td>
            Nationaliteit:
            </td>
            <td>".$row["Nationaliteit"]."</td>
        </tr>
        <tr>
            <td>
            ID Nummer:
            </td>
            <td>".$row["ID_nummer"]."</td>
        </tr>
        <tr>
            <td>
            Paspoort No.:
            </td>
            <td>".$row["pasp_no"]."</td>
        </tr>
        <tr>
            <td>
            Bron:
            </td>
            <td>".$row["bron"]."</td>
        </tr>";
        }
        } else {
        echo "0 results";
        }
    }

    function get_alias($id,$conn){
        $sql = "SELECT * FROM `subject_alias` WHERE `subject_id` = $id";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            
            echo "
            <tr>
            <td>".$row["alias_id"]."</td>
            <td>".$row["alias"]."</td>
          </tr>
            ";
        }
        } else {
        echo "0 results";
        }
    }

    function get_nummer($id,$conn){
        $sql = "SELECT * FROM `subject_nummer` WHERE `subject_id` = $id";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            
            echo "
            <tr>
            <td>".$row["nummer_id"]."</td>
            <td>".$row["nummer"]."</td>
          </tr>
            ";
        }
        } else {
        echo "0 results";
        }
    }

    function get_modus($id,$conn){
        $sql = "SELECT * FROM `subject_modus`WHERE `subject_id` = $id";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            
            echo $row["modus"];
        }
        } else {
        echo "0 results";
        }
    }

    function get_bijzonder($id,$conn){
        $sql = "SELECT * FROM `subj_bijzonderheden` WHERE `subject_id` = $id";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            
            echo $row["bijzonderhijd"];
        }
        } else {
        echo "0 results";
        }
    }
    
    function check_info($conn,$naam,$voornamen,$alias,$plaats,$geb,$natio,$id_nr,$pasp){
        
        $sql = "
        SELECT * FROM `subject_info`,subject_alias 
        WHERE  
        `naam` LIKE '%$naam'
        OR
        `voornamen` LIKE '%$voornamen'
        OR
        `Geb_Datum` = '$geb'
        OR
        `Geb_plaats` = '$plaats'
        OR
        `Nationaliteit` = '$natio'
        OR
        `ID_nummer` LIKE '%$id_nr'
        OR
        `pasp_no` = '$pasp'
        OR
        `alias` LIKE '%$alias'
        ";

        $result = $conn->query($sql);

        if ($result->num_rows == 1) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            header("location:../view/subject_view.php?id=".$row["subject_id"]);
        }
        } else {
            header("location:../view/list_all.php");
        }
        
    }

    function get_list($conn,$naam,$voornamen,$alias,$plaats,$geb,$natio,$id_nr,$pasp){
        $sql = "
        SELECT * FROM `subject_info`,subject_alias 
        WHERE  
        `naam` LIKE '%$naam'
        OR
        `voornamen` LIKE '%$voornamen'
        OR
        `Geb_Datum` = '$geb'
        OR
        `Geb_plaats` = '$plaats'
        OR
        `Nationaliteit` = '$natio'
        OR
        `ID_nummer` LIKE '%$id_nr'
        OR
        `pasp_no` = '$pasp'
        OR
        `alias` LIKE '%$alias'
        ";

        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "
                <tr>
                <td>".$row['naam']."</td>
                <td>".$row['voornamen']."</td>
                <td>".$row['ID_nummer']."</td>
                <td>".$row['Geb_Datum']."</td>
                <td><a href='subject_view.php?id=".$row['subject_id']."' class='btn btn-success'>VIEW</a></td>
                </tr>
                ";
            }
            } else {
                
            }
    }
}
