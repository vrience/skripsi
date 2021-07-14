<div class="container-fluid">
    <a class="btn btn-sm btn-primary mb-3" href="<?php echo base_url('admin/data_barang/tambah_barang') ?>"><i class="fas fa-plus fa-sm"></i> Tambah Barang</a>

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