<?php
$query = mysqli_query($conn, "SELECT * FROM barang");
// $d = mysqli_fetch_array($query);

$sumber = 'https://bookmedia-api.kelasmm1.cloud/barang/read.php';
$konten = file_get_contents($sumber);
$data = json_decode($konten, true);
// var_dump($data);

?>

<div class="main-panel">
	<div class="content">
		<div class="page-inner">
			<div class="page-header">
				<h4 class="page-title">Data</h4>
				<ul class="breadcrumbs">
					<li class="nav-home">
						<a href="#">
							<i class="flaticon-home"></i>
						</a>
					</li>
					<li class="separator">
						<i class="flaticon-right-arrow"></i>
					</li>
					<li class="nav-item">
						<a href="#">View</a>
					</li>
					<li class="separator">
						<i class="flaticon-right-arrow"></i>
					</li>
					<li class="nav-item">
						<a href="#">Barang</a>
					</li>
				</ul>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="card-header">
							<div class="d-flex align-items-center">
								<h4 class="card-title">Daftar Alutsista</h4>
							</div>
						</div>
						<div class="card-body">
							<div class="table-responsive">
								<table id="add-row" class="display table table-striped table-hover">
									<thead>
										<tr>
											<th>No</th>
											<th>Nama Barang</th>
											<th>Stok</th>
											<th>Deskripsi</th>
											<th>Foto</th>
										</tr>
									</thead>
									<tbody>
									<?php
                                    foreach($data['data'] as $row){
									$no = 1;
									// while ($d = mysqli_fetch_array($query)) {
									?>
									<tr>
										<td><?php echo $no++ ?></td>
										<td><?php echo $row['nama_barang'] ?></td>
										<td><?php echo $row['stok'] ?></td>
										<td><?php echo $row['deskripsi'] ?></td>
										<td><img src="../admin/master/barang/Fotobarang/<?php echo $row['foto'] ?>" width="200" height="100"></td>
									</tr>
									<?php
									}
									?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>