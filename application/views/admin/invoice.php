<div class="container-fluid text-center">
    <h5>Invoice Pesanan Produk</h5>

    <table class="table table-bordered table-hover table-striped">
        <tr>
            <th>ID</th>
            <th>Nama Pemesan</th>
            <th>Alamat Pengiriman</th>
            <th>Tanggal Pemesanan</th>
            <th>Status</th>
            <th>Update Status</th>
            <th>Batas Pembayaran</th>
            <th>Aksi</th>
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
                <td> <form action="<?php echo base_url('admin/invoice/update_status') ?>" method="post">
                          <input type="hidden" value="<?php echo $inv->id ?>" name="invoice">
                          <select name="status" id="" class="form-control" onchange="form.submit()">
                            <option <?php if($inv->status == "0"){echo "selected='selected'";} ?> value="0">Menunggu Pembayaran</option>
                            <option <?php if($inv->status == "1"){echo "selected='selected'";} ?> value="1">Menunggu Konfirmasi</option>
                            <option <?php if($inv->status == "2"){echo "selected='selected'";} ?> value="2">Ditolak</option>
                            <option <?php if($inv->status == "3"){echo "selected='selected'";} ?> value="3">Dikonfirmasi & Sedang Diproses</option>
                            <option <?php if($inv->status == "4"){echo "selected='selected'";} ?> value="4">Dikirim</option>
                            <option <?php if($inv->status == "5"){echo "selected='selected'";} ?> value="5">Selesai</option>
                          </select>
                        </form></td>
                <td><?php echo $inv->batas_bayar ?></td>
                <td><?php echo anchor('admin/invoice/detail/'.$inv->id, '<div class="btn btn-sm btn-primary">Detail</div>') ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>