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
                                <td><strong><?php echo $brg->nama_brg ?></strong></td>
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
                            'admin/data_barang/',
                            '<div class="btn btn-sm btn-dark text-light">Kembali</div>'
                        ) ?>
                        <a href="#modalDelete" data-toggle="modal" onclick="$('#modalDelete #formDelete').attr('action', '<?= site_url('admin/data_barang/hapus/' . $brg->id_brg) ?>')" class="btn btn-danger btn-sm">
                            Hapus
                        </a>
                        <?php echo anchor(
                            'admin/data_barang/edit/' . $brg->id_brg,
                            '<div class="btn btn-sm btn-primary">Update</div>'
                        ) ?>

                    </div>
                    <div class="modal fade" id="modalDelete">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">

                                    <h5 class="modal-title"> Yakin ingin menghapus data barang ini ? </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-footer">
                                    <form id="formDelete" action="" method="post">
                                        <button class="btn btn-default" data-dismiss="modal">Tidak</button>
                                        <button class="btn btn-danger" data-dismiss="submit">Hapus</button>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>