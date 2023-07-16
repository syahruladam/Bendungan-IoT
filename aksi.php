<?php
    if(isset($_GET['channel']) && isset($_GET['state'])) {
        include 'connection.php';
        $channel = $_GET['channel'];
        $state = $_GET['state'];

        if($channel == '1'){
            mysqli_query($dbConnect, "UPDATE tb_sensor SET Kondisi = '$state'");
        }
        header('location: index.php?');
        exit;
    }
?>