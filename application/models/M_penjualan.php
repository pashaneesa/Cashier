<?php
class M_penjualan extends CI_Model{

	function hapus_retur($kode){
		$hsl=$this->db->query("DELETE FROM tbl_retur WHERE retur_id='$kode'");
		return $hsl;
	}

	function tampil_retur(){
		$hsl=$this->db->query("SELECT retur_id,DATE_FORMAT(retur_tanggal,'%d/%m/%Y') AS retur_tanggal,retur_barang_id,retur_barang_nama,retur_barang_satuan,retur_harjul,retur_qty,(retur_harjul*retur_qty) AS retur_subtotal,retur_keterangan FROM tbl_retur ORDER BY retur_id DESC");
		return $hsl;
	}

	function simpan_retur($kobar,$nabar,$satuan,$harjul,$qty,$keterangan){
		$hsl=$this->db->query("INSERT INTO tbl_retur(retur_barang_id,retur_barang_nama,retur_barang_satuan,retur_harjul,retur_qty,retur_keterangan) VALUES ('$kobar','$nabar','$satuan','$harjul','$qty','$keterangan')");
		return $hsl;
	}

	function simpan_penjualan($id_trans,$total,$jml_uang,$kembalian,$tgl_trans){
		$idadmin=$this->session->userdata('idadmin');
		$this->db->query("INSERT INTO transaksi (id_trans,total_trans,uang_trans,kembalian_trans,tgl_trans) VALUES ('$id_trans','$total','$jml_uang','$kembalian','$tgl_trans')");
		foreach ($this->cart->contents() as $item) {
			$data=array(
				'id_transd' 			=>	$id_trans,
				'kode_brg_trans'		=>	$item['id'],
				'harga_dtrans'			=>	$item['amount'],
				'jml_dtrans'			=>	$item['qty'],
				'total_dtrans'			=>	$item['subtotal']
			);
			$this->db->insert('d_transaksi',$data);
			$this->db->query("update barang set qty_brg=qty_brg-'$item[qty]' where kode_brg='$item[id]'");
		}
		return true;
	}
	function get_nofak(){
		$q = $this->db->query("SELECT MAX(RIGHT(id_trans,6)) AS kd_max FROM transaksi");
        $kd = "";
        if($q->num_rows()>0){
            foreach($q->result() as $k){
                $tmp = ((int)$k->kd_max)+1;
                $kd = sprintf("%06s", $tmp);
            }
        }else{
            $kd = "000001";
        }
        return "TR".$kd;
	}

	//=====================Penjualan grosir================================
	function simpan_penjualan_grosir($nofak,$total,$jml_uang,$kembalian){
		$idadmin=$this->session->userdata('idadmin');
		$this->db->query("INSERT INTO tbl_jual (jual_nofak,jual_total,jual_jml_uang,jual_kembalian,jual_user_id,jual_keterangan) VALUES ('$nofak','$total','$jml_uang','$kembalian','$idadmin','grosir')");
		foreach ($this->cart->contents() as $item) {
			$data=array(
				'd_jual_nofak' 			=>	$nofak,
				'd_jual_barang_id'		=>	$item['id'],
				'd_jual_barang_nama'	=>	$item['name'],
				'd_jual_barang_satuan'	=>	$item['satuan'],
				'd_jual_barang_harpok'	=>	$item['harpok'],
				'd_jual_barang_harjul'	=>	$item['amount'],
				'd_jual_qty'			=>	$item['qty'],
				'd_jual_diskon'			=>	$item['disc'],
				'd_jual_total'			=>	$item['subtotal']
			);
			$this->db->insert('tbl_detail_jual',$data);
			$this->db->query("update tbl_barang set barang_stok=barang_stok-'$item[qty]' where barang_id='$item[id]'");
		}
		return true;
	}

	function cetak_faktur(){
		$nofak=$this->session->userdata('nofak');
		$hsl=$this->db->query("SELECT id_trans,DATE_FORMAT(tgl_trans,'%d/%m/%Y %H:%i:%s') AS tgl_trans,harga_dtrans,total_dtrans,uang_trans,kembalian_trans,kode_brg,nama_brg,harga_brg,jml_dtrans,total_trans FROM transaksi JOIN d_transaksi ON id_trans=id_transd JOIN barang ON kode_brg_trans=kode_brg WHERE id_trans='$nofak'");
		return $hsl;
	}
	
}