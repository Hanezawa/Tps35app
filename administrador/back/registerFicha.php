<?php 
include('../back/connection.php');

if(isset($_POST['registerFicha'])){

    $linkFichaCourse = empty($_POST['linkFichaCourse']) ? NULL : $_POST['linkFichaCourse'];
    $fichaNumber =empty($_POST['fichaNumber']) ? NULL : $_POST['fichaNumber'];
    $fichaName = empty($_POST['fichaName']) ? NULL : $_POST['fichaName'];
    $fichaStatus = empty($_POST['fichaStatus']) ? NULL : $_POST['fichaStatus'];
    
    try {

        $insertFicha ="INSERT INTO fichas VALUES('',$linkFichaCourse,$fichaNumber,'$fichaName',$fichaStatus);";
        $queryInsertFicha = mysqli_query($conn,$insertFicha);
        header('location: ../fichas.php');

        
    } catch (\Throwable $e) {
        echo $e;
    }
}

?>