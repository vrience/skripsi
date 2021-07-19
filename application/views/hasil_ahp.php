<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <br><br>
            <h4 class="mb-3">Berikut ranking produk yang dibandingkan</h4>

            <form class="hasil">
                <table class="table table-bordered">
                    <tr align="middle">
                        <th> <i class="fas fa-medal mr-3"></i>Ranking</th>
                        <th><i class="fas fa-tshirt mr-3"></i>Produk</th>
                        <th>Action</th>
                    </tr>

                    <tr align="middle">
                        <td>1</td>
                        <td>
                            <?php foreach ($data_barang_rekomendasi['barang_rec_1'] as $brg_rec_1) :
                                echo ($brg_rec_1->nama_brg);
                            endforeach; ?></td>
                        <td><?php echo anchor(
                                'dashboard/detail/' . $brg_rec_1->id_brg,
                                '<div class="btn btn-sm btn-primary bg-light text-dark">Detail</div>'
                            ) ?>
                            <?php echo anchor(
                                'dashboard/tambah_ke_keranjang/' . $brg_rec_1->id_brg,
                                '<div class="btn btn-sm btn-primary"><i class="fas fa-shopping-cart"></i></div>'
                            ) ?>
                        </td>
                    </tr>
                    <tr align="middle">
                        <td>2</td>
                        <td>
                            <?php foreach ($data_barang_rekomendasi['barang_rec_2'] as $brg_rec_2) :
                                echo ($brg_rec_2->nama_brg);
                            endforeach; ?></td>
                        <td><?php echo anchor(
                                'dashboard/detail/' . $brg_rec_2->id_brg,
                                '<div class="btn btn-sm btn-primary bg-light text-dark">Detail</div>'
                            ) ?>
                            <?php echo anchor(
                                'dashboard/tambah_ke_keranjang/' . $brg_rec_2->id_brg,
                                '<div class="btn btn-sm btn-primary"><i class="fas fa-shopping-cart"></i></div>'
                            ) ?>
                        </td>
                    </tr>
                    <tr align="middle">
                        <td>3</td>
                        <td>
                            <?php foreach ($data_barang_rekomendasi['barang_rec_3'] as $brg_rec_3) :
                                echo ($brg_rec_3->nama_brg);
                            endforeach; ?></td>
                        <td><?php echo anchor(
                                'dashboard/detail/' . $brg_rec_3->id_brg,
                                '<div class="btn btn-sm btn-primary bg-light text-dark">Detail</div>'
                            ) ?>
                            <?php echo anchor(
                                'dashboard/tambah_ke_keranjang/' . $brg_rec_3->id_brg,
                                '<div class="btn btn-sm btn-primary"><i class="fas fa-shopping-cart"></i></div>'
                            ) ?>
                        </td>
                    </tr>
                </table>
                <a class="btn btn-sm btn-dark bg-light text-dark" href="<?php echo base_url('ahp/tambah_ahp') ?>">Kembali</a>
                <a class="btn btn-primary btn-sm" href="<?php echo base_url('welcome') ?>">OK</a>
            </form>


        </div>
        <div class="col-md-2"></div>
    </div>
</div>