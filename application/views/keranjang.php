<div class="container-fluid">
    <h4>Keranjang Belanja</h4>
    <table class="table table-bordered table-striped table-hover">
        <tr>
            <th>NO</th>
            <th>Nama Produk</th>
            <th>Jumlah</th>
            <th>Harga</th>
            <th>Sub-Total</th>
        </tr>

        <?php $no = 1;
        foreach ($this->cart->contents() as $items) : ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $items['name'] ?></td>
                <td><?php echo $items['qty'] ?></td>
                <td>Rp. <?php echo number_format($items['price'], 0, ',', '.') ?></td>
                <td>Rp. <?php echo number_format($items['subtotal'], 0, ',', '.') ?></td>
            </tr>
        <?php endforeach; ?>
        <tr>
            <td align="middle" colspan="4"> Total Pembayaran
            <td>Rp. <?php echo number_format($this->cart->total(), 0, ',', '.') ?></td>
            </td>
        </tr>
    </table>
    <div align="right">
        <a href="#modalDelete" data-toggle="modal" onclick="$('#modalDelete #formDelete').attr('action', '<?= site_url('dashboard/hapus_keranjang') ?>')">
            <div class="btn btn-sm btn-danger">Hapus Keranjang</div>
        </a>
        <a href="<?php echo base_url('welcome/index') ?>">
            <div class="btn btn-sm btn-primary">Lanjutkan Belanja</div>
        </a>
        <a href="<?php echo base_url('dashboard/pembayaran') ?>">
            <div class="btn btn-sm btn-success">Pembayaran</div>
        </a>
    </div>
</div>

<div class="modal fade" id="modalDelete">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                <h5 class="modal-title"> Yakin ingin menghapus data isi keranjang ? </h5>
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