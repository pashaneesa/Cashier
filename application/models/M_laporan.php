<?php
class M_laporan extends CI_Model{
	function get_stok_barang(){
		$hsl=$this->db->query("SELECT * FROM barang JOIN kategori ON kat_brg=id_kat");
		return $hsl;
	}

	function get_total_stok_barang(){
		$hsl=$this->db->query("SELECT SUM(qty_brg) AS total FROM barang");
		return $hsl;
	}

	function get_data_penjualan(){
		$hsl=$this->db->query("SELECT id_trans,DATE_FORMAT(tgl_trans,'%d %M %Y') AS tgl_trans,total_trans,kode_brg,nama_brg,nama_kat,harga_dtrans,jml_dtrans,total_dtrans FROM transaksi JOIN d_transaksi ON id_trans=id_transd JOIN barang ON kode_brg_trans=kode_brg JOIN kategori ON kat_brg=id_kat ORDER BY tgl_trans DESC");
		return $hsl;
	}
	function get_total_penjualan(){
		$hsl=$this->db->query("SELECT SUM(total_dtrans) AS total FROM transaksi JOIN d_transaksi ON id_trans=id_transd");
		return $hsl;
	}
	
}