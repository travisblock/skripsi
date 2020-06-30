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
																			<button class="btn btn-info btn-xs" data-toggle="modal" data-target="#detailVendor<?= $vendor['id_vendor']; ?>">Detail</button>
																			<a href="data-vendor/hapus.php?id=<?= $vendor['id_vendor']; ?>" class="btn btn-danger btn-xs">Nonaktifkan</a>
																		</td>
																</tr>

																<div class="modal fade" id="detailVendor<?= $vendor['id_vendor']; ?>" tabindex="-1" role="dialog"
                                    aria-labelledby="scrollableModalTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="scrollableModalTitle">Detail Vendor</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
																								<p>Username : <?= $vendor['username']; ?></p>
                                                <p>Nama Vendor : <?= $vendor['nama_vendor']; ?></p>
                                                <p>Pemilik : <?= $vendor['nama_pemilik']; ?></p>
                                                <p>KTP: <img src="../img/<?= $vendor['ktp']; ?>" style="width:50%"></p>
                                                <p>Alamat : <?= $vendor['alamat']; ?></p>
                                                <p>No. Telp : <?= $vendor['telp']; ?></p>
																								<p>Tgl daftar: <?= $vendor['tgl_daftar']; ?></p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

															<?php endforeach; ?>
														</tbody>
												</table>
										</div>
								</div>
						</div>
				</div>
		</div>
	</div>
