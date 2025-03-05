<?php
    //include __DIR__.'/../../../../inc/koneksi.php'; //working
    include $_SERVER['DOCUMENT_ROOT'].'/sashmaster/inc/koneksi.php'; //$_SERVER['DOCUMENT_ROOT'] = xampp/htdocs
    //$koneksi = new mysqli("localhost", "root", "", "sash");
    if(isset($_POST["cred_id"])){
        $cred_id = $_POST["cred_id"];
        $sql = $koneksi->query("SELECT * FROM it_masterdata_system as a JOIN it_masterdata_credential as b WHERE a.system_credentials = b.id_credential && b.id_credential = $cred_id");
        // $sql = "SELECT * FROM it_masterdata_system as a JOIN it_masterdata_credential as b WHERE a.system_credential && b.id_credential = $cred_id ORDER BY id_system ASC";

        $data= $sql->fetch_assoc();
        

        // echo $data;
        echo "<b>Username :</b> " . $data["username"];
        echo "<br>";
        echo "<b>Password :</b> " . $data["password"];
    } else if (isset($_POST['edit_sys_id'])) {
        $sys_id = $_POST["edit_sys_id"];
        $sql = $koneksi->query("SELECT * FROM it_masterdata_system as a JOIN it_masterdata_credential as b WHERE a.system_credentials = b.id_credential && a.id_system = $sys_id");
        $data = $sql->fetch_assoc();
        echo json_encode($data);
    }

?>