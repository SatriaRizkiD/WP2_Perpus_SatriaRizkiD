<?php
class Review extends CI_Controller
{
    public function index()
    {
        $this->load->view('review/v_input');
    }

    public function cetak()
    {
        $this->form_validation->set_rules('nama', 'Nama Siswa',
        'required|min_lenght[3]',[
            'required' => 'Kode Matakuliah Harus diisi',
        ]);
        $this->form_validation->set_rules('nis', 'Nomor Induk Siswa',
       'required|min_lenght[3]',[
            'required' => 'Nomor Induk Harus diisi',
        ]);

        if ($this->form_validation->run() != true){
            $this->load->view('v_input');
        }else{

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
        
        $this->load->view('v_output', $data);
    }
}
}