<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="btn btn-sm btn-dark">

                <h5>Kami akan membantu anda mendapatkan produk yang paling sesuai berdasarkan keputusan anda</h5>
            </div><br><br>
            <a href="#modalPetunjuk" data-toggle="modal" onclick="$('#modalPetunjuk #formPetunjuk')">
                <div class="btn btn-primary mb-3 btn-sm">Cara Penggunaan</div>
            </a>
            <div class="modal fade" id="modalPetunjuk">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">

                            <h6>
                                Cara Penggunaan :<br><br>
                                1. Masukan Nilai Perbandingan Kriteria <br><br>
                                2. Sebagai contoh anda lebih mementingkan kenyamanan dibandingkan harga, maka pilih kenyamanan <br><br>
                                3. Lalu masukan skor kepentingan (contoh : kenyamanan lebih penting 5 skor dibandingkan harga) <br><br>
                                4. Setelah memasukan skor kepentingan, maka pilih 3 produk yang ingin dibandingkan <br><br>
                                5. Klik OK

                                note : jika kedua kriteria sama penting masukan nilai 1
                            </h6>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-footer">
                            <form id="formPesan" action="" method="post">
                                <button class="btn btn-success btn-sm" data-dismiss="modal">OK</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <h4>Input Nilai Perbandingan</h4>
            <form method="post" action="<?php echo base_url() ?>ahp/filter_item_by_criteria">
                <table class="table table-bordered">
                    <tr align="middle">
                        <th>NO</th>
                        <th>Kriteria I</th>
                        <th>Kriteria II</th>
                        <th colspan="3">Nilai</th>
                    </tr>

                    <tr align="left">
                        <td align="middle">1</td>
                        <td><input type="radio" checked name="kevsha" value="1"> Kenyamanan</td>
                        <td> <input type="radio" name="kevsha" value="2"> Harga</td>
                        <td>
                            <select class="form-control" name="r_kevsha">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                        </td>
                    </tr>
                    <tr align="left">
                        <td align="middle">2</td>
                        <td> <input type="radio" checked name="kevsfo" value="1"> Formalitas</td>
                        <td><input type="radio" name="kevsfo" value="2"> Kenyamanan</td>
                        <td>
                            <select class="form-control" name="r_kevsfo">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                        </td>
                    </tr>
                    <tr align="left">
                        <td align="middle">3</td>
                        <td><input type="radio" checked name="havsfo" value="1"> Harga</td>
                        <td> <input type="radio" name="havsfo" value="2"> Formalitas</td>
                        <td>
                            <select class="form-control" name="r_havsfo">
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
                        </td>
                    </tr>
                </table>
                <?php if ($response = $this->session->flashdata('Failed_CR')) : ?>
                    <span style="color: red;">Consistency Ratio Kriteria > 0.1</span><br>
                    <span style="color: red;">Consistency Ratio saat ini <?php echo (float)$nilai_cr ?></span><br>
                    <span style="color: red;">Harap Mengubah Input Nilai Perbandingan</span>
                <?php endif; ?>
<br><br>
                <h4>Input Produk Yang Ingin Dibandingkan</h4>
                <div class="form-group">
                    <label>Produk 1</label>
                    <select class="form-control" name="product_comp_1">
                        <?php
                        $no = 1;
                        foreach ($barang as $brg) : ?>
                            <option value=<?php echo $brg->id_brg ?>>
                                <?php echo $brg->nama_brg ?>
                            </option><?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Produk 2</label>
                    <select class="form-control" name="product_comp_2">
                        <?php
                        $no = 1;
                        foreach ($barang as $brg) : ?>
                            <option value=<?php echo $brg->id_brg ?>>
                                <?php echo $brg->nama_brg ?>
                            </option><?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Produk 3</label>
                    <select class="form-control" name="product_comp_3">
                        <?php
                        $no = 1;
                        foreach ($barang as $brg) : ?>
                            <option value=<?php echo $brg->id_brg ?>>
                                <?php echo $brg->nama_brg ?>
                            </option><?php endforeach; ?>
                    </select>
                </div>

                <button type="submit" class="btn btn-success mb-3">OK</button>
            </form>

        </div>
        <div class="col-md-2"></div>
    </div>
</div>