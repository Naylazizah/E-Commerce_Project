<?php
include_once '../admin/dbkoneksi.php';
include_once 'top.php';



?>
<div id="layoutSidenav_content">
    <main>
<div class="container-fluid px-4">

<?php
error_reporting(0);
$hal = $_GET['hal'];
if($hal == 'home'){
    include_once 'home.php';
} else if( !empty($hal)){
    include_once '' .$hal.'.php';
} else {
    include_once 'home.php';
}

?>
</div>
</main>
</div>
</div>


<?php
include_once 'footer.php';
?>