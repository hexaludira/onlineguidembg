<?php
if(isset($_GET['kode'])){
            $sql_hapus = "DELETE FROM user WHERE id_user='".$_GET['kode']."'";
            $query_hapus = mysqli_query($koneksi, $sql_hapus);

            if ($query_hapus) {
                echo "<script>location='index.php?page=user_view'</script>";
            }
        }

?>