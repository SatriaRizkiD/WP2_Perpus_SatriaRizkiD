<?php
class Review extends CI_Controller
{
    public function index()
{
    $this->load->view('view_input');
}
    public function cetak()
{

 $data =[
            'nama' => $this->input->post('nama'),
            'nis' => $this->input->post('nis'),
            'kls' => $this->input->post('kls'),
            'tanggal_lahir' => $this->input->post('tanggal_lahir'),
            'tempat_lahir' => $this->input->post('tempat_lahir'),
            'alamat' => $this->input->post('alamat'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'agama' => $this->input->post('agama')
        ];
        $this->load->view('view_output', $data);
    } }
