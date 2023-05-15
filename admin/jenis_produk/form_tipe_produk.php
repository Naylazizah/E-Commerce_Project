<?php
require_once 'dbkoneksi.php';
?>
<form class="mt-4" method="POST" action="proses_tipe_produk.php">
  </div>
  <div class="form-group row mb-2">
    <label for="id" class="col-4 col-form-label">id</label>
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <!-- <div class="input-group-text">
                        <i class="fa fa-adjust"></i>
                    </div> -->
        </div>
        <input id="id" name="id" type="text" class="form-control" value="">
      </div>
    </div>
    <div class="form-group row mb-2">
    <label for="tipe" class="col-4 col-form-label">tipe</label>
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <!-- <div class="input-group-text">
                        <i class="fa fa-adjust"></i>
                    </div> -->
        </div>
        <input id="tipe" name="tipe" type="text" class="form-control" value="">
      </div>
    </div>
  
  
  <div class="form-group row">
    <div class="offset-4 col-8">
      <input type="submit" name="proses" class="btn btn-primary" value="<?php if (isset($_GET['idedit'])) {
                                                                          echo 'Update';
                                                                        } else {
                                                                          echo 'Simpan';
                                                                        } ?>" />
    </div>
  </div>
</form>