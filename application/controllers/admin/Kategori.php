<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

    public function __construct(){
        parent::__construct();
        if($this->session->userdata('level')==NULL){
            redirect('auth');
        }
    }

    public function index(){
        $this->db->from('kategori');
        $this->db->order_by('nama_kategori', 'ASC');
        $kategori = $this->db->get()->result_array();
        $data = array(
            'judul_halaman' => 'Kategori konten',
            'kategori' => $kategori
        );
        $this->template->load('admin/template_admin', 'admin/kategori_index', $data);
    }

    public function simpan(){
        $this->db->from('kategori');
        $this->db->where('nama_kategori',$this->input->post('nama_kategori'));
        $cek = $this->db->get()->result_array();
        if($cek<>NULL){
            $this->session->set_flashdata('alert', '
            <div class="alert alert-danger alert-dismissible mb-2" role="alert">
                Kategori sudah digunakan!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        ');
        redirect('admin/kategori');
        }
        $data = array(
            'nama_kategori' => $this->input->post('nama_kategori')
        );
        $this->db->insert('kategori',$data);
        $this->session->set_flashdata('alert', '<div class="alert alert-success" role="alert">Data berhasil ditambahkan!</div>');
        redirect('admin/kategori');
    }
    public function hapus($id){
        $where = array(
            'id_kategori' => $id
        );
        $this->db->delete('kategori',$where);;
        $this->session->set_flashdata('alert', '
        <div class="alert alert-success alert-dismissible mb-2" role="alert">
            Data berhasil dihapus
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        ');
        redirect('admin/kategori');
    }
    public function update(){
        $where = array('id_kategori' => $this->input->post('id_kategori'));
        $data = array('nama_kategori'  => $this->input->post('nama_kategori'));
        $this->db->update('kategori', $data, $where);
        $this->session->set_flashdata('alert', '
        <div class="alert alert-success alert-dismissible mb-2" role="alert">
            Data berhasil dupdate
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        ');
        redirect('admin/kategori');
    }
}
