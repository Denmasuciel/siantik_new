<?php defined('BASEPATH') or exit('No direct script access allowed');

class Layar_loket extends HX_Controller
{

    public function __construct()
    {
        parent::__construct();
    }


    public function index()
    {
        redirect();
    }

    public function loket()
    {
        $session = $this->session->sess_user;
        $load['_judul'] = 'Layar Loket';
        $cek = $this->mm->get('status_loket', array('where' => 'loket="1"'), 'roar');
        $load['status_loket'] = $cek['status'];

        $get_count = $this->mm->count('antrian', array('where' => 'tanggal="' . date('Y-m-d') . '" AND loket="A" AND status1 = "Belum"'));
        if ($get_count != null) {
            $load['jml_blm'] = $get_count;
        } else {
            $load['jml_blm'] = 'Habis';
        }

        $get_count_b = $this->mm->count('antrian', array('where' => 'tanggal="' . date('Y-m-d') . '" AND loket="B" AND status1 = "Belum"'));
        if ($get_count_b != null) {
            $load['jml_blm_b'] = $get_count_b;
        } else {
            $load['jml_blm_b'] = 'Habis';
        }
        $load['sess'] = $session['id_loket'];
        $this->view_loket('layar_loket', $load);
    }

    public function sisa_a()
    {
        $get_count = $this->mm->count('antrian', array('where' => 'tanggal="' . date('Y-m-d') . '" AND loket="A" AND status1 = "Belum"'));
        if ($get_count != null) {
            echo $get_count;
        } else {
            echo 'Habis';
        }
    }

    public function sisa_b()
    {
        $get_count = $this->mm->count('antrian', array('where' => 'tanggal="' . date('Y-m-d') . '" AND loket="B" AND status1 = "Belum"'));
        if ($get_count != null) {
            echo $get_count;
        } else {
            echo 'Habis';
        }
    }



    public function dataTable_all()
    {
        $this->datatables->from('antrian');
        $this->datatables->where('tanggal', date('Y-m-d'));
        // $this->datatables->where('loket','A');
        $this->datatables->where('status1', 'Belum');
        $this->datatables->where('status_reset', 't');
        $this->datatables->order_by('loket', 'asc');
        $this->datatables->select('id_antrian,nomor_antrian,jam,tanggal,status1');
        echo $this->datatables->generate();
    }

    public function dataTable_a()
    {
        $this->datatables->from('antrian');
        $this->datatables->where('tanggal', date('Y-m-d'));
        $this->datatables->where('loket', 'A');
        $this->datatables->where('status1', 'Belum');
        $this->datatables->where('status_reset', 't');
        $this->datatables->select('id_antrian,nomor_antrian,jam,tanggal,status1');
        echo $this->datatables->generate();
    }

    public function dataTable_b()
    {
        $this->datatables->from('antrian');
        $this->datatables->where('tanggal', date('Y-m-d'));
        $this->datatables->where('loket', 'B');
        $this->datatables->where('status1', 'Belum');
        $this->datatables->where('status_reset', 't');
        $this->datatables->select('id_antrian,nomor_antrian,jam,tanggal,status1');
        echo $this->datatables->generate();
    }
}
