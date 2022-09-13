<?php
class Barang extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url();
            redirect($url);
        };
		$this->load->model('m_kategori');
		$this->load->model('m_barang');
		// $this->load->library('barcode');
	}
	function index(){
	if($this->session->userdata('akses')=='1'){
		$data['data']=$this->m_barang->tampil_barang();
		$data['kat']=$this->m_kategori->tampil_kategori();
		$data['kat2']=$this->m_kategori->tampil_kategori();
		$this->load->view('admin/v_barang',$data);
	}else{
        echo "Halaman tidak ditemukan";
    }
	}

	function add(){
	if($this->session->userdata('akses')=='1'){
		$data['kat']=$this->m_kategori->tampil_kategori();
		$data['kat2']=$this->m_kategori->tampil_kategori();
		$this->load->view('admin/v_add_barang',$data);
	}else{
        echo "Halaman tidak ditemukan";
    }
	}

	// function edit($kode_brg){
	// if($this->session->userdata('akses')=='1'){
	// 	$data['data']=$this->m_barang->edit($kode_brg);
	// 	$data['kat']=$this->m_kategori->tampil_kategori();
	// 	$data['kat2']=$this->m_kategori->tampil_kategori();
	// 	$this->load->view('admin/v_edit_barang',$data);
	// }else{
 //        echo "Halaman tidak ditemukan";
 //    }
	// }

	public function edit($kode_brg)
    {
        $id_mhs = $this->uri->segment(3);

        $data = array(

            'title' => 'Edit Data Mahasiswa',
            'data' => $this->m_barang->edit($kode_brg),
            'kat2' => $this->m_kategori->tampil_kategori(),


        );

        $this->load->view('admin/v_edit_barang', $data);
    }
	function tambah_barang(){
	if($this->session->userdata('akses')=='1'){
		$kode_brg=$this->m_barang->get_kobar();
		$nama_brg=$this->input->post('nama_brg');
		$kat_brg=$this->input->post('kat_brg');
		$stok_brg=$this->input->post('stok_brg');
		$harga_brg=str_replace(',', '', $this->input->post('harga_brg'));
		$this->m_barang->simpan_barang($kode_brg,$nama_brg,$kat_brg,$stok_brg,$harga_brg);
		echo $this->session->set_flashdata('msg','<div class="alert alert-success" style="width:300px"><button type="button" class="close" data-dismiss="alert">×</button><strong>Berhasil!</strong> Data barang berhasil ditambah</div>');
		redirect('admin/barang');
	}else{
        echo "Halaman tidak ditemukan";
    }
	}
	function edit_barang(){
	if($this->session->userdata('akses')=='1'){
		$kode_brg=$this->input->post('kode_brg');
		$nama_brg=$this->input->post('nama_brg');
		$kat_brg=$this->input->post('kat_brg');
		$stok_brg=$this->input->post('stok_brg');
		$harga_brg=str_replace(',', '', $this->input->post('harga_brg'));
		$this->m_barang->update_barang($kode_brg,$nama_brg,$kat_brg,$stok_brg,$harga_brg);
		echo $this->session->set_flashdata('msg','<div class="alert alert-success" style="width:300px"><button type="button" class="close" data-dismiss="alert">×</button><strong>Berhasil!</strong> Data barang berhasil diubah</div>');
		redirect('admin/barang');
	}else{
        echo "Halaman tidak ditemukan";
    }

	}
	function hapus_barang(){
	if($this->session->userdata('akses')=='1'){
		$kode=$this->input->post('kode');
		$this->m_barang->hapus_barang($kode);
		echo $this->session->set_flashdata('msg','<div class="alert alert-success" style="width:300px"><button type="button" class="close" data-dismiss="alert">×</button><strong>Berhasil!</strong> Data barang berhasil dihapus</div>');
		redirect('admin/barang');
	}else{
        echo "Halaman tidak ditemukan";
    }
	}
}