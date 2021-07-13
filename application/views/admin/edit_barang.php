<div class="container-fluid">
    <h3><i class="fas fa-edit mr-3"></i>EDIT DATA BARANG</h3>
    <?php foreach ($barang as $brg) : ?>
        <form method="post" action="<?php echo base_url() . 'admin/data_barang/update' ?>">
            <div class="for-group">
                <label>Nama Barang</label>
                <input type="text" name="nama_brg" class="form-control" value="<?php echo $brg->nama_brg ?>">
            </div>

            <div class="form-group">
                <label>Keterangan</label>
                <input type="hidden" name="id_brg" class="form-control" value="<?php echo $brg->id_brg ?>">
                <input type="text" name="keterangan" class="form-control" value="<?php echo $brg->keterangan ?>">
            </div>

            <div class="form-group">
                <label>Kategori</label>
                <select class="form-control" name="kategori">
                    <option><?php echo $brg->kategori ?></option>
                    <option>Top</option>
                    <option>Bottom</option>
                    <option>Dress</option>
                    <option>Set</option>
                    <option>Jumpsuit</option>
                    <option>Outer</option>
                    <option>Skirt</option>
                    <option>Accessories</option>
                </select>
            </div>

            <div class="for-group">
                <label>Harga</label>
                <input type="text" name="harga" class="form-control" value="<?php echo $brg->harga ?>">
            </div>

            <div class="for-group">
                <label>Stok</label>
                <input type="text" name="stok" class="form-control" value="<?php echo $brg->stok ?>">
            </div>

            <div class="for-group">
                <label>Warna</label>
                <input type="text" name="warna" class="form-control" value="<?php echo $brg->warna ?>">
            </div>
            <br>
            <?php echo anchor(
                'admin/data_barang/',
                '<div class="btn btn-sm btn-dark text-light">Kembali</div>'
            ) ?>
            <button type="submit" class="btn btn-primary btn-sm">Update</button>
        </form>
    <?php endforeach; ?>
</div>