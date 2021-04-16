<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends HX_Controller {

   public function __construct()
   {
      parent::__construct();
   }

	public function index()
	{
      	$load['_judul'] = 'Dashboard';
      	$tanggal=date('Y-m-d');
	    $load['antri_a']= $this->mm->count('antrian',array('where'=>'tanggal="'.$tanggal.'" AND loket="A" '));
		$load['antri_b']= $this->mm->count('antrian',array('where'=>'tanggal="'.$tanggal.'" AND loket="B" '));
		$load['content']= $this->load->view('beranda_admin',$load,true);
			
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

	public function view_data()//ok
	{
		$tahun=date("Y-m-d");	
		$result = array();
		$result['total'] = $this->db->query("SELECT case WHEN loket='A' then 'A. Racikan'
							ELSE 'B. Non racikan' end as loket,ROUND( AVG(menit),2) as rata FROM vw_hitung_waktu where tanggal='$tahun' group by loket ")->num_rows();
		$row = array();	
		$criteria = $this->db->query("SELECT case WHEN loket='A' then 'A. Racikan'
					ELSE 'B. Non racikan' end as loket,ROUND( AVG(menit),2) as rata FROM vw_hitung_waktu where tanggal='$tahun' group by loket order by loket");
		$no=1;
		foreach($criteria->result_array() as $data)
		{	
							$row[] = array(
							// 'no'=>$no++,
							'loket'=>$data['loket'],
							'rata'=>$data['rata']
							);												
		}
		
		//$result=array_merge($result,array('rows'=>$row));
		$result=array('aaData'=>$row);
		echo  json_encode($result);
	}

	public function view_data_harian_racikan()//ok
	{
		$tahun=date("Y-m-d");	
		$result = array();
		$result['total'] = $this->db->query("SELECT nomor_antrian, jam_serahkan_tiket, selesai, menit FROM vw_hitung_waktu where tanggal='$tahun' and loket='A' order by nomor_antrian ")->num_rows();
		$row = array();	
		$criteria = $this->db->query("SELECT nomor_antrian, jam_serahkan_tiket, selesai, menit FROM vw_hitung_waktu where tanggal='$tahun' and loket='A' order by nomor_antrian");
		$no=1;
		foreach($criteria->result_array() as $data)
		{	
							$row[] = array(
							'no'=>$no++,
							'nomor_antrian'=>$data['nomor_antrian'],
							'jam_serahkan_tiket'=>$data['jam_serahkan_tiket'],
							'selesai'=>$data['selesai'],
							'menit'=>$data['menit']
							);												
		}
		
		//$result=array_merge($result,array('rows'=>$row));
		$result=array('aaData'=>$row);
		echo  json_encode($result);
	}

	public function view_data_harian_nonracikan()//ok
	{
		$tahun=date("Y-m-d");	
		$result = array();
		$result['total'] = $this->db->query("SELECT nomor_antrian, jam_serahkan_tiket, selesai, menit FROM vw_hitung_waktu where tanggal='$tahun' and loket='B' order by nomor_antrian ")->num_rows();
		$row = array();	
		$criteria = $this->db->query("SELECT nomor_antrian, jam_serahkan_tiket, selesai, menit FROM vw_hitung_waktu where tanggal='$tahun' and loket='B' order by nomor_antrian");
		$no=1;
		foreach($criteria->result_array() as $data)
		{	
							$row[] = array(
							'no'=>$no++,
							'nomor_antrian'=>$data['nomor_antrian'],
							'jam_serahkan_tiket'=>$data['jam_serahkan_tiket'],
							'selesai'=>$data['selesai'],
							'menit'=>$data['menit']
							);												
		}
		
		//$result=array_merge($result,array('rows'=>$row));
		$result=array('aaData'=>$row);
		echo  json_encode($result);
	}

	Public function racikan_excel()//ok
	{
		//$id_bidang=$this->session->userdata('id_bidang');
		// $bulan=date("m");
		$tahun=date("Y-m-d");	
			$text = "SELECT nomor_antrian, jam_serahkan_tiket, selesai, menit FROM vw_hitung_waktu where tanggal='$tahun' and loket='A' order by nomor_antrian";
			$d['racikan'] = $this->db->query($text);				
				$this->load->view('racikan_excel',$d);
	}	

	Public function nonracikan_excel()//ok
	{
		//$id_bidang=$this->session->userdata('id_bidang');
		// $bulan=date("m");
		$tahun=date("Y-m-d");	
			$text = "SELECT nomor_antrian, jam_serahkan_tiket, selesai, menit FROM vw_hitung_waktu where tanggal='$tahun' and loket='B' order by nomor_antrian";
			$d['nonracikan'] = $this->db->query($text);				
				$this->load->view('nonracikan_excel',$d);
	}


}