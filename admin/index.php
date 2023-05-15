<?php
include_once 'top.php';
include_once 'menu.php';


?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            
            <?php
// error_reporting(0);
// include_once 'produk/produk.php';
$hal = $_GET['hal'];
if($hal == 'dashboard'){
    include_once 'dashboard.php';
} else if( !empty($hal)){
    include_once '' .$hal.'.php';
    echo "test";
} else {
    include_once 'dashboard.php';
}

?>
</div>
</main>
</div>
</div>


<?php
include_once 'bottom.php';
?>