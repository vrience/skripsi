<div class="container-fluid">
    <div class="card">
        <h5 class="card-header">Detail Produk</h5>
        <div class="card-body">
            <?php foreach ($barang as $brg) : ?>
                <div class="row">
                    <div class="col-md-4">
                        <img src="<?php echo base_url() . '/uploads/' . $brg->gambar ?>" class="card-img-top">
                    </div>
                    <div class="col-md-8">
                        <table class="table">
                            <tr>
                                <td>Nama Produk</td>
                                <td><h2><strong><?php echo $brg->nama_brg ?></strong><h2></td>
                            </tr>
                            <tr>
                                <td>Keterangan</td>
                                <td><strong><?php echo $brg->keterangan ?></strong></td>
                            </tr>
                            <tr>
                                <td>Kategori</td>
                                <td><strong><?php echo $brg->kategori ?></strong></td>
                            </tr>
                            <tr>
                                <td>Stok</td>
                                <td><strong><?php echo $brg->stok ?></strong></td>
                            </tr>
                            <tr>
                                <td>Nilai Kenyamanan</td>
                                <td><strong><?php echo $brg->r_kenyamanan ?></strong> Out Of 9</td>
                            </tr>
                            <tr>
                                <td>Nilai Harga</td>
                                <td><strong><?php echo $brg->r_harga ?></strong> Out Of 9</td>
                            </tr>
                            <tr>
                                <td>Nilai Formalitas</td>
                                <td><strong><?php echo $brg->r_formalitas ?></strong> Out Of 9</td>
                            </tr>
                            <tr>
                                <td>Harga</td>
                                <td>
                                    <div class="btn btn-sm btn-success">Rp.
                                        <?php echo number_format($brg->harga, 0, ',', '.') ?></div>
                                </td>
                            </tr>
                        </table>
                        <?php echo anchor(
                            'welcome',
                            '<div class="btn btn-sm btn-primary bg-dark text-light">Kembali</div>'
                        ) ?>
                        <?php echo anchor(
                            'dashboard/tambah_ke_keranjang/' . $brg->id_brg,
                            '<div class="btn btn-sm btn-primary">Tambah ke Keranjang</div>'
                        ) ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>