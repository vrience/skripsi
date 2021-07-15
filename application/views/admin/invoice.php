<div class="container-fluid">
    <h4>Invoice Pemesanan Produk</h4>

    <table class="table table-bordered table-hover table-striped">
        <tr>
            <th>ID Invoice</th>
            <th>Nama Pemesan</th>
            <th>Alamat Pengiriman</th>
            <th>Tanggal Pemesanan</th>
            <th>Batas Pembayaran</th>
            <th>Aksi</th>
        </tr>

        <?php foreach ($invoice as $inv) : ?>
            <tr>
                <td><?php echo $inv->id ?></td>
                <td><?php echo $inv->nama ?></td>
                <td><?php echo $inv->alamat ?></td>
                <td><?php echo $inv->tgl_pesan ?></td>
                <td><?php echo $inv->batas_bayar ?></td>
                <td><?php echo anchor(
                        'admin/invoice/detail/' . $inv->id,
                        '<div class="btn btn-sm btn-primary">Detail</div>'
                    ) ?>
                    <a href="#modalDelete" data-toggle="modal" onclick="$('#modalDelete #formDelete').attr('action', '<?= site_url('admin/invoice/hapus/' . $inv->id) ?>')" class="btn btn-danger btn-sm">
                        <i class="fas fa-trash"></i>
                    </a>
                </td>
            </tr>

        <?php endforeach; ?>
    </table>
</div>

<div class="modal fade" id="modalDelete">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                <h5 class="modal-title"> Yakin ingin menghapus data invoice ini ? </h5>
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