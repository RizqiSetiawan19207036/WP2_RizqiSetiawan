<?php
class Matakuliah extends CI_Controller
{

    public function index()

    {

        $this->load->view('view-form-matakuliah');
    }

    public function cetak()
    {
        $this->form_validation->set_rules('kode', 'Kode Matakuliah', 'required|min_length[3]',[
            'required' =>"Kode Matakuliah Harus diisi",
            'min_length' =>"Kode Terlalu Pendek Minimal 3 Karakter"
        ]);

        $this->form_validation->set_rules('nama', 'Nama Mata Kuliah', 'required|min_length[3]',[
            'required' =>"Nama  Matakuliah Harus diisi",
            'min_length' =>"Nama Terlalu Pendek Minimal 3 Karakter"
        ]);

        if ($this->form_validation->run() == FALSE){
            $this->load->view('view-form-matakuliah');
            
        } else {
            $kode = $this->input->post('kode', TRUE);
            $nama = $this->input->post('nama', TRUE);
            $sks = $this->input->post('sks', TRUE);

            $data = [
                'kode' => $this->input->post('kode'),
                'nama' => $this->input->post('nama'),
                'sks'  => $this->input->post('sks')
                    ];
    
            $this->load->view('view-data-matakuliah', $data);
        }
    }
}
?>