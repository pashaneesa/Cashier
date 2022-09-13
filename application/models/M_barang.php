<?php
class M_barang extends CI_Model{

	function hapus_barang($kode){
		$hsl=$this->db->query("DELETE FROM barang where kode_brg='$kode'");
		return $hsl;
	}

	public function edit($kode_brg)
    {

        $query = $this->db->where("kode_brg", $kode_brg)
                ->get("barang");

        if($query){
            return $query->row();
        }else{
            return false;
        }

    }

	function update_barang($kode_brg,$nama_brg,$kat_brg,$stok_brg,$harga_brg){
		$user_id=$this->session->userdata('idadmin');
		$hsl=$this->db->query("UPDATE barang SET nama_brg='$nama_brg',kat_brg='$kat_brg',qty_brg='$stok_brg',harga_brg='$harga_brg' WHERE kode_brg='$kode_brg'");
		return $hsl;
	}

	function tampil_barang(){
		$hsl=$this->db->query("SELECT * FROM barang JOIN kategori ON kat_brg=id_kat");
		return $hsl;
	}

	function simpan_barang($kode_brg,$nama_brg,$kat_brg,$stok_brg,$harga_brg){
		$user_id=$this->session->userdata('idadmin');
		$hsl=$this->db->query("INSERT INTO barang (kode_brg,nama_brg,kat_brg,qty_brg,harga_brg) VALUES ('$kode_brg','$nama_brg','$kat_brg','$stok_brg','$harga_brg')");
		return $hsl;
	}


	function get_barang($kobar){
		$hsl=$this->db->query("SELECT * FROM barang JOIN kategori ON kat_brg=id_kat WHERE kode_brg='$kobar'");
		return $hsl;
	}

	function get_kobar(){
		$q = $this->db->query("SELECT MAX(RIGHT(kode_brg,6)) AS kd_max FROM barang");
        $kd = "";
        if($q->num_rows()>0){
            foreach($q->result() as $k){
                $tmp = ((int)$k->kd_max)+1;
                $kd = sprintf("%06s", $tmp);
            }
        }else{
            $kd = "000001";
        }
        return "BR".$kd;
	}

}