<div class="container-fluid" style="margin-top : 80px">
    <div class="row" style="margin-bottom : 282px">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="btn btn-sm btn-success text-center">
                <?php
                 $grand_total= 0;
                 if ($keranjang = $this->cart->contents())
                 {
                    foreach($keranjang as $item)
                    {
                        $grand_total = $grand_total + $item['subtotal'];
                    }

                    echo "<h5>Total Belanja Anda : Rp. ".number_format($grand_total, 0,',','.');
                  ?>
            </div><br><br>
            <h4>Input Alamat Pengiriman dan Pembayaran</h4>

            <form method="post" action="<?php echo base_url() ?>dashboard/proses_pesanan">
                 <div class="form-grup">
                     <label>Nama Lengkap</label>
                     <input type="text" name="nama" placeholder="Nama Lengkap Anda" class="form-control">
                 </div>

                 <div class="form-grup">
                     <label>Alamat Lengkap</label>
                     <input type="text" name="alamat" placeholder="Alamat Lengkap Anda" class="form-control">
                 </div>

                 <div class="form-grup">
                     <label>No. Telepon</label>
                     <input type="text" name="no_telp" placeholder="Nomor Telepon Anda" class="form-control">
                 </div>

                 <div class="form-grup">
                     <label>Jasa Pengiriman</label>
                     <select class="form-control">
                         <option>JNT</option>
                         <option>JNE</option>
                         <option>Si Cepat</option>
                         <option>POS Indonesia</option>
                     </select>
                 </div>

                 <div class="form-grup">
                     <label>Metode Pembayaran</label>
                     <select class="form-control">
                         <option>BANK-Virtual Account</option>
                         <option>Alfamart</option>
                         <option>Indomart</option>
                         <option>GoPay</option>
                     </select>
                 </div>
                    <div align="right" style="margin-top : 10px">
                 <button type="submit" class="btn btn-sm btn-primary mt-3">Selesai</button>
                 </div>
            </form>
            <?php 
            }else
            {
                echo "<h5>Keranjang Belanja Anda Masih Kosong";
            }
            ?>

        </div>
        <div class="col-md-2"><a href="<?php echo base_url('dashboard/detail_keranjang') ?>"><div class="btn btn-sm btn-danger mt-3">Kembali</div></a></div>
    </div>
</div>