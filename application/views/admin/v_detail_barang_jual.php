					<?php 
						error_reporting(0);
						$b=$brg->row_array();
					?>
					<table>
						<tr>
		                    <!-- <th style="width:145px;"></th> -->
		                    <th>Nama Barang</th>
		                    <th>Kategori</th>
		                    <th>Stok</th>
		                    <th>Harga(Rp)</th>
		                    <th>Jumlah</th>
		                </tr>
						<tr>
							<!-- <td></th> -->
							<td><input type="text" name="nama_brg" value="<?php echo $b['nama_brg'];?>" style="width:250px;margin-right:5px;" class="form-control input-sm" readonly></td>
		                    <td><input type="text" name="kat_brg" value="<?php echo $b['nama_kat'];?>" style="width:250px;margin-right:5px;" class="form-control input-sm" readonly></td>
		                    <td><input type="text" name="stok_brg" value="<?php echo $b['qty_brg'];?>" style="width:50px;margin-right:5px;" class="form-control input-sm" readonly></td>
		                    <td><input type="text" name="harga_brg" value="<?php echo number_format($b['harga_brg']);?>" style="width:80px;margin-right:5px;text-align:right;" class="form-control input-sm" readonly></td>
		                    <td><input type="number" name="qty" id="qty" value="1" min="1" max="<?php echo $b['qty_brg'];?>" class="form-control input-sm" style="width:50px;margin-right:5px;" required></td>
		                    <td><button type="submit" class="btn btn-sm btn-primary">Ok</button></td>
						</tr>
					</table>
					