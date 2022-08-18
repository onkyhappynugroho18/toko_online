<div class="container-fluid text-center" style="margin-top : 12px">
    <h5>Pesanan Produk</h5>

    <table class="table table-bordered table-hover table-striped">
        <tr>
            <th>ID</th>
            <th>Nama Pemesan</th>
            <th>Alamat Pengiriman</th>
            <th>Tanggal Pemesanan</th>
            <th>Status</th>
            <th>Batas Pembayaran</th>
            <th>Upload Bukti Pembayaran</th>
        </tr>

        <?php $no=0;
        foreach ($invoice->result() as $inv) : $no++;?>
            <tr>
                <td><?php echo $no ?></td>
                <td><?php echo $inv->nama ?></td>
                <td><?php echo $inv->alamat ?></td>
                <td><?php echo $inv->tgl_pesan ?></td>
                <td class="text-center">
                        <?php 
                        if($inv->status == 0){
                          echo "<span class='btn btn-sm btn-warning'>Menunggu Pembayaran</span>";
                        }elseif($inv->status == 1){
                          echo "<span class='btn btn-sm btn-light'>Menunggu Konfirmasi</span>";
                        }elseif($inv->status == 2){
                          echo "<span class='btn btn-sm btn-danger'>Ditolak</span>";
                        }elseif($inv->status == 3){
                          echo "<span class='btn btn-sm btn-primary'>Dikonfirmasi & Sedang Diproses</span>";
                        }elseif($inv->status == 4){
                          echo "<span class='btn btn-sm btn-warning'>Dikirim</span>";
                        }elseif($inv->status == 5){
                          echo "<span class='btn btn-sm btn-success'>Selesai</span>";
                        }
                        ?>
                      </td>
                 <!-- <td> <form action="update_status" method="post">
                          <input type="hidden" value="<?php echo $inv->id ?>" name="invoice">
                          <select name="status" id="" class="form-control" onchange="form.submit()">
                            <option <?php if($inv->status == "0"){echo "selected='selected'";} ?> value="0">Menunggu Pembayaran</option>
                            <option <?php if($inv->status == "1"){echo "selected='selected'";} ?> value="1">Menunggu Konfirmasi</option>
                            <option <?php if($inv->status == "2"){echo "selected='selected'";} ?> value="2">Ditolak</option>
                            <option <?php if($inv->status == "3"){echo "selected='selected'";} ?> value="3">Dikonfirmasi & Sedang Diproses</option>
                            <option <?php if($inv->status == "4"){echo "selected='selected'";} ?> value="4">Dikirim</option>
                            <option <?php if($inv->status == "5"){echo "selected='selected'";} ?> value="5">Selesai</option>
                          </select>
                        </form></td> -->
                <td><?php echo $inv->batas_bayar ?></td>
                <td><a href="<?php echo base_url('dashboard/upload/' .  $inv->id) ?>" class="btn btn-primary">Upload</td>
               
            </tr>
        <?php endforeach; ?>
    </table>

    <div class="col-md-2" style="margin-top : 18px"><a href="<?php echo base_url('dashboard/detail_keranjang') ?>"><div class="btn btn-sm btn-danger mt-3" style="margin-bottom : 235px">Kembali</div></a></div>
</div>