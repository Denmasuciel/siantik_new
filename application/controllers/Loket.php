<?php defined('BASEPATH') or exit('No direct script access allowed');

class Loket extends HX_Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	public function getantrian_a()
	{
		$session = $this->session->sess_user;
		$string = 'Select max(only_nomor_antrian) as maks From antrian 
		where tanggal = "' . date('Y-m-d') . '" 
		and
		loket="A"
		and 
		aktif = "y"
		and 
		id_loket = ' . $session['id_loket'] . '
		and
		status_reset ="t"';
		$cek  = $this->mm->query($string, 'roar');
		if ($cek['maks'] != "") {
			echo "<b style=font-size:60pt;color:lime>" . 'A.' . $cek['maks'] . "</b>";
			$this->session->set_userdata('loket_a_aktif', $cek['maks']);
		} else {
			echo "<b style=font-size:60pt;color:lime>0</b>";
			$this->session->set_userdata('loket_a_aktif', '0');
		}
	}

	public function getantrian_b()
	{
		$session = $this->session->sess_user;
		$string = 'Select max(only_nomor_antrian) as maks From antrian 
		where tanggal = "' . date('Y-m-d') . '" 
		and
		loket="B"
		and 
		aktif = "y"
		and 
		id_loket = ' . $session['id_loket'] . '
		and
		status_reset ="t"';
		$cek  = $this->mm->query($string, 'roar');
		if ($cek['maks'] != "") {
			echo "<b style=font-size:60pt;color:lime>" . 'B.' . $cek['maks'] . "</b>";
			$this->session->set_userdata('loket_b_aktif', $cek['maks']);
		} else {
			echo "<b style=font-size:60pt;color:lime>0</b>";
			$this->session->set_userdata('loket_b_aktif', '0');
		}
	}

	public function getantrian_lcd($id = null)
	{
		$session = $this->session->sess_user;
		$string = 'Select urut as maks,nomor_antrian From antrian 
					 where tanggal = "' . date('Y-m-d') . '" 
					 and 
					 aktif = "y"
					 and 
					 id_loket = ' . $id . '
					 and
					 status_reset ="t"
					  order BY maks DESC LIMIT 1 ';
		$cek  = $this->mm->query($string, 'roar');
		if ($cek['maks'] != "") {
			echo "<b style=font-size:50pt;color:lime>" . $cek['nomor_antrian'] . "</b>";
		} else {
			echo "<b style=font-size:50pt;color:lime>0</b>";
		}
	}

	public function aktif_layar_loket()
	{
		$session = $this->session->sess_user;
		$string = 'Select urut as maks,nomor_antrian From antrian 
					 where tanggal = "' . date('Y-m-d') . '" 
					 and 
					 aktif = "y"
					 and 
					 id_loket = ' . $session['id_loket'] . '
					 and
					 status_reset ="t"
					  order BY maks DESC LIMIT 1 ';
		$cek  = $this->mm->query($string, 'roar');
		if ($cek['maks'] != "") {
			echo "<b style=font-size:80pt;color:lime>" . $cek['nomor_antrian'] . "</b>";
		} else {
			echo "<b style=font-size:80pt;color:lime>0</b>";
		}
	}

	public function getantrian_lcd_a()
	{
		$session = $this->session->sess_user;
		$string = 'Select max(only_nomor_antrian) as maks From antrian 
		where tanggal = "' . date('Y-m-d') . '" 
		and
		loket ="A"
		and 
		aktif = "y"
		and 
		id_loket = ' . $session['id_loket'] . '
		and
		status_reset ="t"';
		$cek  = $this->mm->query($string, 'roar');
		if ($cek['maks'] != "") {
			echo "<b style=font-size:80pt;color:lime>" . "A." . $cek['maks'] . "</b>";
		} else {
			echo "<b style=font-size:80pt;color:lime>0</b>";
		}
	}

	public function getantrian_lcd_b()
	{
		$session = $this->session->sess_user;
		$string = 'Select max(only_nomor_antrian) as maks From antrian 
		where tanggal = "' . date('Y-m-d') . '" 
		and
		loket ="B"
		and 
		aktif = "y"
		 and 
		 id_loket = ' . $session['id_loket'] . '
		and
		status_reset ="t"';
		$cek  = $this->mm->query($string, 'roar');
		if ($cek['maks'] != "") {
			echo "<b style=font-size:80pt;color:lime>" . "B." . $cek['maks'] . "</b>";
		} else {
			echo "<b style=font-size:80pt;color:lime>0</b>";
		}
	}


	public function selanjutnya_a()
	{
		$session = $this->session->sess_user;
		$tanggal_sys = date('Y-m-d');
		$jam = date("H:i:s");
		$str  = 'select max(urut) as no_max from antrian where id_loket = ' . $session['id_loket'] . ' and
		tanggal = "' . date('Y-m-d') . '" ';
		$sql =  $this->mm->query($str, 'roar');
		$no_max = $sql['no_max'] + 1;
		$string = 'Select min(only_nomor_antrian) as maks From antrian 
		where 
		loket = "A"
		and
		tanggal = "' . date('Y-m-d') . '" 
		and 
		aktif = "t"
		and
		status_reset ="t"';
		$cek  = $this->mm->query($string, 'roar');
		if ($cek['maks'] != "") {
			$data2 = array(
				'aktif' => 'y',
				'status1' => 'Sudah',
				'jam2' => $jam,
				'urut' => $no_max,
				'id_loket' => $session['id_loket']
			);
			$param2 = array(
				'only_nomor_antrian' => $cek['maks'],
				'loket' => 'A',
				'tanggal' => $tanggal_sys,
				'status_reset' => 't'
			);
			$save2  = $this->mm->save('antrian', $data2, $param2); //update tabel antrian
			$this->session->set_userdata('loket_a_aktif', $cek['maks']);
		};
		redirect('layar_loket/loket');
	}

	public function selanjutnya_b()
	{
		$session = $this->session->sess_user;
		$tanggal_sys = date('Y-m-d');
		$jam = date("H:i:s");
		$str  = 'select max(urut) as no_max from antrian where id_loket = ' . $session['id_loket'] . ' and
		tanggal = "' . date('Y-m-d') . '" ';
		$sql =  $this->mm->query($str, 'roar');
		$no_max = $sql['no_max'] + 1;
		$string = 'Select min(only_nomor_antrian) as maks From antrian 
		where 
		loket = "B"
		and
		tanggal = "' . date('Y-m-d') . '" 
		and 
		aktif = "t"
		and
		status_reset ="t"';
		$cek  = $this->mm->query($string, 'roar');
		if ($cek['maks'] != "") {
			$data2 = array(
				'aktif' => 'y',
				'status1' => 'Sudah',
				'jam2' => $jam,
				'urut' => $no_max,
				'id_loket' => $session['id_loket']
			);
			$param2 = array(
				'only_nomor_antrian' => $cek['maks'],
				'loket' => 'B',
				'tanggal' => $tanggal_sys,
				'status_reset' => 't'
			);
			$save2  = $this->mm->save('antrian', $data2, $param2); //update tabel antrian
			$this->session->set_userdata('loket_b_aktif', $cek['maks']);
		};
		redirect('layar_loket/loket');
	}
}
