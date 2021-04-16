<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Pengumuman extends HX_Controller {

   public function __construct()
   {
      parent::__construct();
      $this->load->model('pengumuman_model');
		
   }

	public function index()
	{
      	$load['_judul'] = 'Pengumuman';
      	// $this->view_admin('home', $load);
      	$tanggal=date('Y-m-d');
    	$load['antri_a']= $this->mm->count('antrian',array('where'=>'tanggal="'.$tanggal.'" AND loket="A" '));
		$load['antri_b']= $this->mm->count('antrian',array('where'=>'tanggal="'.$tanggal.'" AND loket="B" '));
		$load['content']= $this->load->view('pengumuman',$load,true);
			
	$this->load->view('pondasi',$load);

	}

	public function datediff($tgl1, $tgl2){
		$tgl1 = (is_string($tgl1) ? strtotime($tgl1) : $tgl1);
		$tgl2 = (is_string($tgl2) ? strtotime($tgl2) : $tgl2);
		$diff_secs = abs($tgl1 - $tgl2);
		$base_year = min(date("Y", $tgl1), date("Y", $tgl2));
		$diff = mktime(0, 0, $diff_secs, 1, 1, $base_year);
		return array( "years" => date("Y", $diff) - $base_year,
			"months_total" => (date("Y", $diff) - $base_year) * 12 + date("n", $diff) - 1,
			"months" => date("n", $diff) - 1,
			"days_total" => floor($diff_secs / (3600 * 24)),
			"days" => date("j", $diff) - 1,
			"hours_total" => floor($diff_secs / 3600),
			"hours" => date("G", $diff),
			"minutes_total" => floor($diff_secs / 60),
			"minutes" => (int) date("i", $diff),
			"seconds_total" => $diff_secs,
			"seconds" => (int) date("s", $diff)  );
	}



	public function view_pengumuman()//ok
	{
		$tahun=date("Y-m-d");	
		$result = array();
		$result['total'] = $this->db->query("SELECT * from pengumuman ")->num_rows();
		$row = array();	
		$criteria = $this->db->query("SELECT *,case when status='A' then 'Aktif' ELSE 'Tidak_Aktif' end as status from pengumuman order by id_pengumuman asc");
		$no=1;
		$a='aa';
		foreach($criteria->result_array() as $data)
		{	
					$row[] = array(
					'no'=>$no++,
					'aa'=>$a,
					'id_pengumuman'=>$data['id_pengumuman'],
					'judul'=>$data['judul'],
					'konten'=>$data['konten'],
					'status'=>$data['status']
					
					);												
		}
		
		//$result=array_merge($result,array('rows'=>$row));
		$result=array('aaData'=>$row);
		echo  json_encode($result);
	}

		public function ajax_edit($id)
	{
		$data = $this->pengumuman_model->get_by_id($id);
		echo json_encode($data);
	}

public function pengumuman()
{		
$this->datatables->from('pengumuman');
  // $this->datatables->add_column('action', anchor('karyawan/edit/.$1','Edit',array('class'=>'btn btn-danger btn-sm')), 'id_pegawai');
$this->datatables->select('*'); 
  $this->datatables->add_column('action', 'id_pegawai');
      echo $this->datatables->generate();
}


	public function ajax_add()
	{
			$data = array(
			'judul'=>$this->input->post('judul'),
			'konten'=>strtoupper($this->input->post('konten')),
			'status'=>$this->input->post('bidang')
			);
		$insert = $this->pengumuman_model->save($data);
		echo json_encode(array("status" => TRUE));
	}

	public function ajax_update()
	{
		$data = array(
			'judul'=>$this->input->post('judul'),
			'konten'=>strtoupper($this->input->post('konten')),
			'status'=>$this->input->post('bidang')
				);
		$this->pengumuman_model->update(array('id_pengumuman' => $this->input->post('id_pengumuman')), $data);
		echo json_encode(array("status" => TRUE));
	}

	public function ajax_delete($id)
	{
		$this->pengumuman_model->delete_by_id($id);
		echo json_encode(array("status" => TRUE));
	}

}