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
                                <td>
                                    <h2><strong><?php echo $brg->nama_brg ?></strong>
                                        <h2>
                                </td>
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
                            '<div class="btn btn-sm btn-primary bg-light text-dark">Kembali</div>'
                        ) ?>
                        <?php echo anchor(
                            'dashboard/tambah_ke_keranjang/' . $brg->id_brg,
                            '<div class="btn btn-sm btn-primary">Tambah ke Keranjang</div>'
                        ) ?>
                        <button type="button" class="btn btn-info btn-sm float-right" data-toggle="modal" data-target="#modalRating">
                            Rating Produk
                        </button>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modalRating" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="<?php echo base_url('ahp/change_rating') ?>" method="post" enctype="multipart/form-data">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Rating Produk</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="text" class="form-control form-control-user" id="id_barang" hidden placeholder="id_barang" value="<?php echo $id_brg; ?>" name="id_barang">
                    <div class="form-group">
                        <label>Nilai Kenyamanan</label>
                        <select class="form-control" name="r_kenyamanan">
                            <option>Masukan Nilai Kenyamanan</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                            <option>9</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Nilai Harga</label>
                        <select class="form-control" name="r_harga">
                            <option>Masukan Nilai Harga</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                            <option>9</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Nilai Formalitas</label>
                        <select class="form-control" name="r_formalitas">
                            <option>Masukan Nilai Formalitas</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                            <option>9</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </form>
    </div>
</div>