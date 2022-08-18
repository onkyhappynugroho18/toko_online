<div class="container-fluid" style="margin-top : 12px">
    <h4>Keranjang Belanja</h4>

    <table class="table table-bordered table-striped table-hover text-center">
        <tr>
            <th>NO</th>
            <th>Nama Produk</th>
            <th>Jumlah</th>
            <th>Harga</th>
            <th>Sub-Total</th>
        </tr>

        <?php
            $no=1;

            foreach ($this->cart->contents() as $items) : ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $items['name'] ?></td>
                    <td class="cart_quantity">
                        <div class="cart_quantity_button">
                            <form action="<?php echo base_url('dashboard/update_jml_keranjang/'.$items['id'])?>" method="POST">
                                <input class="cart_quantity_input" type="text" name="qty" value="<?php echo $items['qty'] ?>" autocomplete="off" size="2">
                                <input type="hidden" name="rowid" value="<?php echo $items['rowid'] ?>">
                                <input class="btn btn-sm btn-primary" style="margin-left: 6px;" type="submit" value="Update">
                            </form>
                        </div>
                    </td>
                    <td align="right">Rp. <?php echo number_format($items['price'], 0,',','.') ?></td>
                    <td align="right">Rp. <?php echo number_format($items['subtotal'], 0,',','.') ?></td>
                </tr>
        <?php endforeach; ?>

                <tr>
                    <td colspan="4"></td>
                    <td align="right">Rp. <?php echo number_format($this->cart->total(), 0,',','.') ?></td>
                </tr>
    </table>

    <div align="right" style="margin-bottom : 170px">
        <a href="<?php echo base_url('dashboard/detail_pesanan') ?>">
                <div class="btn btn-sm btn-warning" style="margin-top : 12px">Lihat Detail Pesanan</div>
        <a href="<?php echo base_url('dashboard/hapus_keranjang') ?>">
                <div class="btn btn-sm btn-danger" style="margin-top : 12px">Hapus Keranjang</div>
        </a>
        <a href="<?php echo base_url('welcome') ?>">
                <div class="btn btn-sm btn-primary" style="margin-top : 12px">Lanjut Belanja</div>
        </a>
        <a href="<?php echo base_url('dashboard/pembayaran') ?>">
                <div class="btn btn-sm btn-success" style="margin-top : 12px">Pembayaran</div>
        </a>
    </div>
</div>