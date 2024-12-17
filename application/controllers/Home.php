<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct(){
        parent :: __construct();
	}
	public function index(){
		$this->db->from('konfigurasi');
		$konfig = $this->db->get()->row();

		$this->db->from('caraousel');
		$caraousel = $this->db->get()->result_array();
		$this->db->from('kategori');
		$kategori = $this->db->get()->result_array();
		$this->db->from('konten a');
        $this->db->join('kategori b','a.id_kategori=b.id_kategori','left');
        $this->db->join('user c','a.username=c.username','left');
        $this->db->order_by('tanggal', 'DESC');
        $konten = $this->db->get()->result_array();
		$data = array(
			'Judul' => "beranda | sipaaa",
			'konfig' => $konfig,
			'kategori' => $kategori,
			'caraousel' => $caraousel, 
			'konten' => $konten
		);
		$this->load->view('beranda', $data);
	}

	public function artikel($id) {
		
    $this->db->from('konfigurasi');
    $konfig = $this->db->get()->row();

    $this->db->from('kategori');
    $kategori = $this->db->get()->result_array();

    $this->db->from('konten a');
    $this->db->join('kategori b', 'a.id_kategori=b.id_kategori', 'left');
    $this->db->join('user c', 'a.username=c.username', 'left');
    $this->db->where('a.slug', $id);
    $konten = $this->db->get()->row();

    $this->db->from('konten a');
	$this->db->join('kategori b', 'a.id_kategori=b.id_kategori', 'left');
	$this->db->join('user c', 'a.username=c.username', 'left');
	$this->db->where_not_in('a.slug', $konten->slug);
	$another_konten = $this->db->get()->result_array();


    $data = array(
        'judul' => "Beranda | Sipaa",
        'konfig' => $konfig,
        'kategori' => $kategori,
        'konten' => $konten,
        'another_konten' => $another_konten
    );

    $this->load->view('detail', $data);
}


	public function kategori($id){
		$this->db->from('konfigurasi');
		$konfig = $this->db->get()->row();

		$this->db->from('caraousel');
		$caraousel = $this->db->get()->result_array();
		
		$this->db->from('kategori');
		$kategori = $this->db->get()->result_array();
		$this->db->from('konten a');
        $this->db->join('kategori b','a.id_kategori=b.id_kategori','left');
        $this->db->join('user c','a.username=c.username','left');
        $this->db->where('a.id_kategori', $id);
        $konten = $this->db->get()->result_array();

		$this->db->from('kategori');
		$this->db->where('id_kategori', $id);
		$nama_kategori = $this->db->get()->row()->nama_kategori;
		$data = array(
			'Judul' => $nama_kategori."beranda | sipaaa",
			'nama_kategori' => $nama_kategori,
			'konfig' => $konfig,
			'kategori' => $kategori,
			'konten' => $konten
		);
		$this->load->view('kategori', $data);
	}
	public function search(){
        $keyword = $this->input->get('keyword');

        $this->db->select('*');
        $this->db->from('konten');
        $this->db->like('judul', $keyword);
        $query = $this->db->get();
        $results = $query->result_array();

        $data['results'] = $results;
        $this->load->view('search', $data);
	}
}
