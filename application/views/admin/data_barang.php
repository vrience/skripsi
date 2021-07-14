<div class="container-fluid">
    <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_barang"><i class="fas fa-plus fa-sm"></i> Tambah Barang </button>

    <table class="table table-bordered">
        <tr align="middle">
            <th>NO</th>
            <th>Nama Barang</th>
            <th>Keterangan</th>
            <th>Kategori</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Warna</th>
            <th>Nilai Kenyamanan</th>
            <th>Nilai Harga</th>
            <th>Nilai Formalitas</th>
            <th colspan="3">Aksi</th>
        </tr>

        <?php
        $no = 1;
        foreach ($barang as $brg) : ?>

            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $brg->nama_brg ?></td>
                <td><?php echo $brg->keterangan ?></td>
                <td><?php echo $brg->kategori ?></td>
                <td>Rp. <?php echo number_format($brg->harga, 0, ',', '.')?></td>
                <td><?php echo $brg->stok ?></td>
                <td><?php echo $brg->warna ?></td>
                <td><?php echo $brg->r_kenyamanan ?></td>
                <td><?php echo $brg->r_harga ?></td>
                <td><?php echo $brg->r_formalitas ?></td>
                <td><?php echo anchor('admin/data_barang/detail/'.$brg->id_brg,
                 '<div class="btn btn-success btn-sm"><i class="fas fa-info-circle"></i></div>')?>
                </td>
                <td><?php echo anchor('admin/data_barang/edit/'.$brg->id_brg,
                 '<div class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></div>')?>
                </td>
                <td><?php echo anchor('admin/data_barang/hapus/'.$brg->id_brg, 
                '<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>')?>
                </td>
            </tr>

        <?php endforeach; ?>
    </table>
</div>

<!-- Modal -->
<div class="modal fade" id="tambah_barang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">FORM INPUT PRODUK</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url() . 'admin/data_barang/tambah_aksi'; ?>" method="post" enctype="multipart/form-data">

                    <div class="form-group">
                        <label>Nama Barang</label>
                        <input type="text" name="nama_brg" class="form-control" placeholder="Nama Barang">
                    </div>
                    <div class="form-group">
                        <label>Keterangan</label>
                        <input type="text" name="keterangan" class="form-control" placeholder="Keterangan">
                    </div>
                    <div class="form-group">
                        <label>Kategori</label>
                        <select class="form-control" name="kategori">
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
                    <div class="form-group">
                        <label>Harga</label>
                        <input type="text" name="harga" class="form-control" placeholder="Harga Barang">
                    </div>
                    <div class="form-group">
                        <label>Stok</label>
                        <input type="text" name="stok" class="form-control" placeholder="Jumlah Stok">
                    </div>
                    <div class="form-group">
                        <label>Warna</label>
                        <select class="form-control" name="warna">
                            <option>White</option>
                            <option>Black</option>
                            <option>Pink</option>
                            <option>Red</option>
                            <option>Brown</option>
                            <option>Cream</option>
                            <option>Green</option>
                            <option>Blue</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Nilai Kenyamanan</label>
                        <select class="form-control" name="r_kenyamanan">
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
                        <label>Gambar Produk</label><br>
                        <input type="file" name="gambar" class="form-control">
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success">Save</button>
            </div>
            </form>
        </div>
    </div>
</div>