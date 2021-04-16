<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Layar_printer extends HX_Controller {

   public function __construct()
   {
      parent::__construct();
   }

	public function index()
	{
     $load['_judul'] = 'Display Printer';
      $this->view_publik_printer('layar_printer', $load);     
	}
	
	public function cek_loket_a()
   {
     $cek = $this->mm->get('status_loket',array('where'=>'loket="1"'),'roar');
	 echo $cek['status'];
   }
   
   public function cek_loket_b()
   {
     $cek = $this->mm->get('status_loket',array('where'=>'loket="2"'),'roar');
	 echo $cek['status'];
   }
	public function logout()
   {
      $this->session->sess_destroy('op_printer');

      $pesan = hx_info('info','Anda berhasil keluar dari sistem');
      $this->session->set_flashdata('hx_info', $pesan);

		redirect('admin/login_printer');
   }

  
}