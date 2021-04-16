<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Layar_lcd extends HX_Controller {

   public function __construct()
   {
      parent::__construct();
   }

	public function index()
	{
	  $load['_judul'] = 'Layar LCD'; 
	  $load['pengumuman']  = $this->mm->get('pengumuman',null,'roar');
	  $load['pengumuman2']  = $this->db->query(" SELECT * from pengumuman where status='A'")->result_array();
	  $param['select'] = 'id_loket';
	  // $param['group'] = 'id_loket';
	  $param['order'] = 'id_loket DESC';
	  $param['where'] = array('level'=>'operator','aktif'=>'Y');
      $load['jloket'] = $jloket = $this->mm->get('user',$param);
	  $load['colspan'] = count($jloket);
      $this->view_publik_lcd('layar_lcd', $load);
      
	}

  
}