<div class="section">
	<div class="container">
		<div class="row">
		

			<div id="main" class="col-md-9">
				
				<h4>Upload Bukti Pembayaran</h4>

				<div id="store">
					<div class="row">

						<div class="col-lg-12">

							<table class="table table-bordered">
								<tbody>
									<?php 
									foreach ($invoice as $i) {
										?>
										<tr>
											<th width="20%">No.Invoice</th>	
											<td>INVOICE-00<?php echo $i->id ?></td>
										</tr>
										<tr>
											<th>Tanggal</th>	
											<td><?php echo date('d-m-Y', strtotime($i->tgl_pesan)) ?></td>
										</tr>
										<tr>
											<th>Status</th>	
											<td>

												<?php 
												if($i->status == 0){
													echo "<span class='label label-warning'>Menunggu Pembayaran</span>";
												}elseif($i->status == 1){
													echo "<span class='label label-default'>Menunggu Konfirmasi</span>";
												}elseif($i->status == 2){
													echo "<span class='label label-danger'>Ditolak</span>";
												}elseif($i->status == 3){
													echo "<span class='label label-primary'>Dikonfirmasi & Sedang Diproses</span>";
												}elseif($i->status == 4){
													echo "<span class='label label-warning'>Dikirim</span>";
												}elseif($i->status == 5){
													echo "<span class='label label-success'>Selesai</span>";
												}
												?>
											</td>
										</tr>
										<?php 
									}
									?>
								</tbody>
							</table>

							<br/>
							<p>Silahkan Lakukan Pembayaran Ke Nomor Rekening Berikut :</p>
							<table class="table table-bordered">
								<tr>
									<th width="30%">Nomor Rekening</th>
									<td>123-122-3345</td>
								</tr>
								<tr>
									<th>Atas Nama</th>
									<td>Lena Puspito Rini</td>
								</tr>
								<tr>
									<th>Bank</th>
									<td>BRI</td>
								</tr>
							</table>
							<br/>

							<form action="customer_pembayaran_act.php" method="post" enctype="multipart/form-data">
								<div class="form-group">
									<input type="hidden" name="id" value="<?php echo $i->id; ?>">
									<label>Upload Bukti Pembayaran</label>
									<input type="file" name="bukti" required="required">
									<small class="text-muted">File yang diperbolehkan hanya file gambar.</small>
								</div>
								<input type="submit" value="Upload Bukti Pembayaran" class="primary-btn" style="margin-bottom: 80px;">
							</form>

						</div>	

					</div>
				</div>

			</div>
		</div>
	</div>
</div>