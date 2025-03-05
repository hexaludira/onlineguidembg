
<?php
if(isset($_GET['kode'])){
            $sql_reset = "UPDATE user SET password=MD5('sash123') WHERE id_user='".$_GET['kode']."'";
            $query_reset = mysqli_query($koneksi, $sql_reset);

            if ($query_reset) {
                echo "<script>location='index.php?page=user_view'</script>";
            }
        }

?>