<?php
session_start();
if (isset($_SESSION['ses_nama']) == "") {
  header("location: login.php");
} else {
  $data_id = $_SESSION["ses_id"];
  $data_email = $_SESSION["ses_username"];
  $data_nama = $_SESSION["ses_nama"];
  $data_menu_wms = $_SESSION["ses_menuwms"];
  $data_menu_mesc = $_SESSION["ses_menumesc"];
  $data_menu_mesf = $_SESSION["ses_menumesf"];
  $data_menu_lapormas = $_SESSION["ses_menulapormas"];
  $data_menu_itinventory = $_SESSION["ses_menuitinventory"];
  $data_menu_hris = $_SESSION["ses_menuhris"];
  $data_menu_it = $_SESSION["ses_menuit"];
  $data_menu_ga = $_SESSION["ses_menuga"];
  $data_level = $_SESSION["ses_level"];
}
include "inc/koneksi.php";
?>

<!-- /template header -->
<?php include 'template_header.php' ?>
<!-- /template header -->  


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

  
    <!-- Main content -->
    <?php
            if (isset($_GET['page'])) {
              $hal = $_GET['page'];

              switch ($hal) {
              //-------------SASH-------------
                case 'administrator-def':
                  include "sash/default/administrator.php";
                break;
              
              //All System
                case 'wms_index':
                  include "wms/wms_index.php";
                break;
                case 'itv_index':
                  include "itv/itv_index.php";
                break;

              //Manage User
                case 'user_view':
                  include "sash/administrator/user/user_view.php";
                break;
                case 'user_add':
                  include "sash/administrator/user/user_add.php";
                break;
                case 'user_edit':
                  include "sash/administrator/user/user_edit.php";
                break;
                case 'user_delete':
                  include "sash/administrator/user/user_delete.php";
                break; 
                case 'user_reset':
                  include "sash/administrator/user/user_reset.php";
                break; 

              //Manage My Account
                case 'me_manage':
                  include "sash/me.php";
                break;
                  
              //Sign Out
                case 'signout':
                  include "logout.php";
                break;
              //-------------/SASH------------- 

              //-------------IT Inventory-------------
                case 'itv_index':
                  include "itv/itv_index.php";
                break;

              //LNSW Master Data  
                case 'itv_trx_type':
                  include "itv/administrator/lnsw_masterdata/trx_type/trx_type_view.php";
                break;
                case 'itv_itemcat_type':
                  include "itv/administrator/lnsw_masterdata/itemcategory_type/item_cat_type_view.php";
                break;
                case 'itv_doc_type':
                  include "itv/administrator/lnsw_masterdata/doc_type/doc_type_view.php";
                break;
                case 'itv_unit_code':
                  include "itv/administrator/lnsw_masterdata/unit_code/unit_code_view.php";
                break;

              //Master Data - Company
                case 'company_view':
                  include "itv/administrator/masterdata/company/company_view.php";
                break;
                case 'company_edit':
                  include "itv/administrator/masterdata/company/company_edit.php";
                break;

              //Master Data - Item
                case 'item_view':
                  include "itv/administrator/masterdata/item/item_view.php";
                break;

              //Submit To LNSW
                case 'receipt_pur_view':
                  include "itv/administrator/submit_lnsw/receipt_purchase/receipt_purchase_view.php";
                break; 
              //-------------/IT Inventory-------------
               

              //-------------IT-------------
                case 'it_index':
                  include "it/it_index.php";
                break;

              //Master Data Server
                case 'server_view':
                  include "it/administrator/masterdata/server/server_view.php";
                break;
                case 'system_view' :
                  include "it/administrator/masterdata/system/system_view.php";
                  break;
                case 'system_controller' :
                  ("Location: it/administrator/masterdata/system/system_controller.php");
                  // include "it/administrator/masterdata/system/system_controller.php";
                  break;
              //-------------/IT-------------
            
                default:
                  echo "<center><h1> ERROR !</h1></center>";
                break;
              }
            } else {
              if ($data_level == "1") {
                include "sash/default/administrator.php";
              } elseif ($data_level == "2") {
                include "sash/default/user.php";
              }
            }
    ?>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<!-- template footer -->
<?php include 'template_footer.php' ?>
<!-- /template footer -->
  
