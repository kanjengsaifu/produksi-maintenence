<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!DOCTYPE html>

	<div class="container">
	<div class="row">
	
		<div class="panel panel-primary">
				<div class="panel-heading">
					<div class="panel-title"><strong>DATA REGISTRASI PRODUK</strong></div>
				</div>

		<div class='btn-group'>
				<a href="<?= base_url()?>crud_jenisprod/new_data" class='btn btn-success'>View Jenis Produk</a>
				<a href="<?= base_url()?>users/logout" class='btn btn-danger'>Logout</a>
		</div>
		
		
		<div class="panel-body">
		<div class="cool-md-2 col-lg-ofset-6 table-responsive">
			<table border="1" align="left" class="table table-bordered table-striped" style="color:#000000">
				<tr class="asd">
					<td><center><strong>NO</strong></center></td>
					<!--<td><strong>ID Barang</strong></td>-->
					<td><center><strong>KODE BARANG</strong></center></td>
					<td><center><strong>KODE JENIS</strong></center></td>
					<td><center><strong>KUALITAS</strong></center></td>
					<td><center><strong>TANGGAL REGISTRASI</strong></center></td>
					<td><center><strong>Aksi</strong></center></td>
				</tr>
				
			<?php
				$no=1;
				foreach($tampil as $data){
				echo"<tr>
					<td>$no</td>
					<td>".$data['Kd_Barang']."</td>
					<td>".$data['Kd_Jenis']."</td>
					<td>".$data['Kualitas']."</td>
					<td>".$data['Tgl_Registrasi']."</td>
					<td>
						<div class='btn-group'>
							<a href=".base_url()."crud_regprod/edit_barang/".$data['Kd_Barang']." class='btn btn-warning'>Update</a> 
							<a href=".base_url()."crud_regprod/delete_barang/".$data['Kd_Barang']." class='btn btn-danger'>Delete</a>
						</div>
					</td>
						
				</tr>";
				$no++;
				
			}
			
			
		?>
	</table>
	</div>
	</div>
</div>
</div>
</div>
</div>
<footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4 text-center">
                    <!--<ul class="list-inline">
                        <li><i class="fa fa-facebook fa-3x"></i>
                        </li>
                        <li><i class="fa fa-twitter fa-3x"></i>
                        </li>
                        <li><i class="fa fa-dribbble fa-3x"></i>
                        </li>
                    </ul>
                    <div class="top-scroll">
                        <a href="#top"><i class="fa fa-circle-arrow-up scroll fa-4x"></i></a>
                    </div>-->
                    <hr>
                    <p style="color:#FFFFFF">Copyright &copy; Nova</p>
                </div>
            </div>
        </div>
    </footer>

</body>
</html>

