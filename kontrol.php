<?php
if(isset($_POST['Kode'])) {
    include 'connection.php';
    $key = $_POST['Kode'];
    $sql = mysqli_query($dbConnect,"SELECT  * FROM tb_sensor WHERE Kode = '$key'");
    $query = mysqli_num_rows($sql);
    
    if($query > 0) {
        $data = mysqli_fetch_assoc($sql);
    } else {
        $data = ["Kode" => "Not Valid"];
    }
    $res = json_encode($data);
    echo $res;
}
?>