<div class="page-breadcrumb">
		<div class="row">
				<div class="col-7 align-self-center">
						<h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Data Vendor</h3>
				</div>
		</div>
</div>


<div class="container-fluid">
		<div class="row">
				<div class="col-12">
						<div class="card">
								<div class="card-body">
										<div class="table-responsive">
												<table id="default_order" class="table table-striped table-bordered no-wrap">
														<thead>
																<tr>
																		<th>NO</th>
																		<th>Username</th>
																		<th>Nama Vendor</th>
																		<th>Alamat</th>
																		<th>No. Telp</th>
																		<th>Aksi</th>
																</tr>
														</thead>
														<tbody>
															<?php
																$sql = mysqli_query($conn, "SELECT * FROM vendor WHERE status = 1");
																$no = 1;
																foreach ($sql as $vendor) :
															?>
																<tr>
																		<td><?= $no++; ?></td>
																		<td><?= $vendor['username']; ?></td>
																		<td><?= $vendor['nama_vendor']; ?></td>
																		<td><?= $vendor['alamat']; ?></td>
																		<td><?= $vendor['telp']; ?></td>
																		<td>
																			<button data-id="<?= $vendor['id_vendor']; ?>" class="btn btn-info btn-xs" data-toggle="modal" data-target="#scrollable-modal">Detail</button>
																			<a href="data-vendor/hapus.php?id=<?= $vendor['id_vendor']; ?>" class="btn btn-danger btn-xs">Nonaktifkan</a>
																		</td>
																</tr>
															<?php endforeach; ?>
														</tbody>
												</table>
										</div>
								</div>
						</div>
				</div>
		</div>
	</div>
