<?php
require_once 'dbkoneksi.php';
?>
<?php
$sql = "SELECT * FROM produk";
$rs = $dbh->query($sql);
?>

<div class="card mb-4">
</div>
<div class="card mb-4">
    <div class="card-header">
        <!-- <i class="fas fa-table me-1"></i> -->
        <a class="btn btn-success" href="index.php?hal=produk/form_produk">Create produk</a>
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>id</th>
                    <th>nama</th>
                    <th>stok</th>
                    <th>harga</th>
                    <th>berat</th>
                    <th>jenis_produk_id</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>id</th>
                    <th>nama</th>
                    <th>stok</th>
                    <th>harga</th>
                    <th>berat</th>
                    <th>jenis_produk_id</th>
                    <th>Action</th>
                </tr>
            </tfoot>
            <tbody>
        <?php
        $nomor  = 1;
        foreach ($rs as $row) {
        ?>
            <tr>
                <td><?= $row['id'] ?></td>
                <td><?= $row['nama'] ?></td>
                <td><?= $row['stok'] ?></td>
                <td><?= $row['harga'] ?></td>
                <td><?= $row['berat'] ?></td>
                <td><?= $row['jenis_produk_id'] ?></td>
                <td>
                    <a class="btn btn-primary" href="index.php?hal=produk/view_produk&id=<?= $row['id'] ?>">View</a>
                    <a class="btn btn-primary" href="index.php?hal=produkform_produk&idedit=<?= $row['id'] ?>">Edit</a>
                    <a class="btn btn-primary" href="produk/delete_produk?iddel=<?= $row['id'] ?>" onclick="if(!confirm('Anda Yakin Hapus Data Produk <?= $row['nama'] ?>?')) {return false}">Delete</a>
                </td>
            </tr>
        <?php
            $nomor++;
        }
        ?>
    </tbody>
        </table>
    </div>
</div>