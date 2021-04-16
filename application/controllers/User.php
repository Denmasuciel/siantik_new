<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User extends HX_Controller {

   public function __construct()
   {
      parent::__construct();
   }

	public function index()
	{
    $load['_judul'] = 'Data User';

    $tanggal=date('Y-m-d');
    $load['content']= $this->load->view('user',$load,true);
			
	$this->load->view('pondasi',$load);

	}

	
	
	public function view_user()//ok
	{
		$tahun=date("Y-m-d");	
		$result = array();
		$result['total'] = $this->db->query("SELECT * from user ")->num_rows();
		$row = array();	
		$criteria = $this->db->query("SELECT * from user order by id_user asc");
		$no=1;
		foreach($criteria->result_array() as $data)
		{	
							$row[] = array(
							'no'=>$no++,
							'id_user'=>$data['id_user'],
							'nama'=>$data['nama'],
							'username'=>$data['username'],
							'password'=>$data['password'],
							'id_loket'=>$data['id_loket'],
							'level'=>$data['level'],
							'aktif'=>$data['aktif']
							);												
		}
		
		//$result=array_merge($result,array('rows'=>$row));
		$result=array('aaData'=>$row);
		echo  json_encode($result);
	}



}