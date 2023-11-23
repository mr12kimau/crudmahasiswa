<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Pinjaman extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pinjaman_model');
    }
    public function index()
    {
        $data['judul'] = "Halaman Pinjaman";
        $data["user"] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['Pinjaman'] = $this->Pinjaman_model->get();
        $this->load->view("layout/header", $data);
        $this->load->view("Pinjaman/vw_Pinjaman", $data);
        $this->load->view("layout/footer", $data);
    }

    public function tambah()
    {
        $data['judul'] = "Halaman Tambah Peminjam";
        $data["user"] = $this->db->get_where("user", ["email" => $this->session->userdata("email")])->row_array();
        $data['pinjam'] = $this->Pinjaman_model->get();
        $this->form_validation->set_rules('nama', 'nama', 'required', [
            'required' => 'Nama Peminjam Wajib di isi'
        ]);
        $this->form_validation->set_rules('nik', 'nik', 'required', [
            'required' => 'NIK Peminjam Wajib di isi'
        ]);
        $this->form_validation->set_rules('email', 'email', 'required', [
            'required' => 'Email Peminjam Wajib di isi'
        ]);
        $this->form_validation->set_rules('durasi', 'durasi', 'required', [
            'required' => 'Durasi Peminjam Wajib di isi'
        ]);
        $this->form_validation->set_rules('alamat', 'alamat', 'required', [
            'required' => 'Alamat Peminjam Wajib di isi'
        ]);
        $this->form_validation->set_rules('no_telpon', 'no_telpon', 'required', [
            'required' => 'No Telpon Peminjam Wajib di isi'
        ]);
        $this->form_validation->set_rules('BesarPinjaman', 'BesarPinjaman', 'required|integer', [
            'required' => 'Besar Pinjaman Wajib di isi',
            'integer' => 'Besar Pinjaman harus Angka'
        ]);
        if ($this->form_validation->run() == FALSE) {
            $this->load->view("layout/header", $data);
            $this->load->view("Pinjaman/vw_tambah_Pinjaman", $data);
            $this->load->view("layout/footer");
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'nik' => $this->input->post('nik'),
                'email' => $this->input->post('email'),
                'durasi' => $this->input->post('durasi'),
                'alamat' => $this->input->post('alamat'),
                'no_telpon' => $this->input->post('no_telpon'),
                'BesarPinjaman' => $this->input->post('BesarPinjaman'),
              ];
            $this->Pinjaman_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Peminjam Berhasil Ditambah!</div>');
            redirect('Pinjaman');
        }
    }

    public function update()
    {
        $data = [
            'Nama' => $this->input->post('nama'),
            'NIK' => $this->input->post('nik'),
            'Email' => $this->input->post('email'),
            'Alamat' => $this->input->post('alamat'),
            'No_Telpon' => $this->input->post('no_telp'),
            'BesarPinjaman' => $this->input->post('BesarPinjaman'),
            'Durasi' => $this->input->post('durasi'),
          ];
          $id = $this->input->post('nik');
          $this->Pinjaman_model->update(['nik' => $id], $data);
          redirect('Pinjaman');
    }

    public function detail($id)
    {
        $data['judul'] = "Halaman Detail Pinjaman";
        $data['Pinjaman'] = $this->Pinjaman_model->getByID($id);
        $this->load->view("layout/header", $data);
        $this->load->view("Pinjaman/vw_detail_Pinjaman", $data);
        $this->load->view("layout/footer");
    }

    public function hapus($id)
    {
        $this->Pinjaman_model->delete($id);
        redirect('Pinjaman');
    }

    public function edit($id)
    {
        $data['judul'] = "Halaman Edit Data Peminjam";
        $data["user"] = $this->db->get_where("user", ["email" => $this->session->userdata("email")])->row_array();
        $data['pinjaman'] = $this->Pinjaman_model->getById($id);
        $this->form_validation->set_rules('nama', 'Nama Peminjam', 'required', [
            'required' => 'Nama Peminjam Wajib di isi'
        ]);
        $this->form_validation->set_rules('nik', 'NIK', 'required', [
            'required' => 'NIK Peminjam Wajib di isi'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required', [
            'required' => 'Email Peminjam Wajib di isi'
        ]);
        $this->form_validation->set_rules('durasi', 'durasi', 'required', [
            'required' => 'Durasi Peminjam Wajib di isi'
        ]);
        $this->form_validation->set_rules('alamat', 'Alamat', 'required', [
            'required' => 'Alamat Peminjam Wajib di isi'
        ]);
        $this->form_validation->set_rules('no_telpon', 'no_telpon', 'required', [
            'required' => 'No Telpon Peminjam Wajib di isi'
        ]);
        $this->form_validation->set_rules('BesarPinjaman', 'BesarPinjaman', 'required|integer', [
            'required' => 'Besar Pinjaman Wajib di isi',
            'integer' => 'Besar Pinjaman harus Angka'
        ]);
        if ($this->form_validation->run() == FALSE) {
            $this->load->view("layout/header", $data);
            $this->load->view("Pinjaman/vw_ubah_Pinjaman", $data);
            $this->load->view("layout/footer");
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'nik' => $this->input->post('nik'),
                'email' => $this->input->post('email'),
                'durasi' => $this->input->post('durasi'),
                'alamat' => $this->input->post('alamat'),
                'no_telpon' => $this->input->post('no_telpon'),
                'BesarPinjaman' => $this->input->post('BesarPinjaman'),
              ];
            $id = $this->input->post('id');
            $this->Pinjaman_model->update(['id'=>$id],$data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Peminjam Berhasil DiUbah!</div>');
            redirect('Pinjaman');
        }
    }
}
?>