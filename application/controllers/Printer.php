<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Printer extends HX_Controller {

   public function __construct()
   {
      parent::__construct();
   }

	   public function print_a()
	   {
	   	$row = null;
	   	$nomor = $this->mm->generate_a();
	   	
	   	$tanggal = date("d-m-Y");
	   	$tanggal_sys = date("Y-m-d");
	   	$jam = date("H:i:s");
	   	$result= $this->mm->get('printer',null,'roar');
	   	$printer_name = $result['nama_printer'];
	   	
			//simpan nomor
			
			$datas = array('nomor_antrian' => $nomor,
				'only_nomor_antrian' => str_replace('A.' ,'' ,$nomor),
				'tanggal' => $tanggal_sys,
				'jam' =>$jam,
				'loket' =>'A');
			$save = $this->mm->save('antrian',$datas);
			
			function getClientPrinter(){
				$host = getHostByAddr($_SERVER['REMOTE_ADDR']);
				return"\\\\".$host."\\Antrian";
			}
			
			$var_magin_left = 10;
			$p = printer_open("antrian2");
			// $p = printer_open("Canon MP250 series Printer on 192.168.133.215");
			printer_set_option($p, PRINTER_MODE, "RAW"); // mode disobek (gak ngegulung kertas)

			//then the width
			printer_set_option( $p,PRINTER_RESOLUTION_Y, 940);
			printer_start_doc($p);
			printer_start_page($p);

			$font = printer_create_font("Arial", 38, 10, PRINTER_FW_NORMAL, false, false, false, 0);
			printer_select_font($p, $font);
			printer_draw_text($p, "RSUD WONOSARI",200,0);
			//printer_draw_text($p, "",250,20);
			// Header Bon
			$pen = printer_create_pen(PRINTER_PEN_SOLID, 1, "000000");
			printer_select_pen($p, $pen);
			//printer_draw_line($p, $var_magin_left, 50, 700, 50);
			printer_draw_text($p, "RACIKAN:", 10, 50);

			$font = printer_create_font("Arial", 98, 60, PRINTER_FW_NORMAL, false, false, false, 0);
			printer_select_font($p, $font);
			printer_draw_text($p, "$nomor", 210, 70);

			$font = printer_create_font("Arial", 15, 12, PRINTER_FW_NORMAL, false, false, false, 0);
			printer_select_font($p, $font);
			printer_draw_text($p, "Waktu Antrian :", $var_magin_left, 150);
			printer_draw_text($p, date("Y/m/d H:i:s"),$var_magin_left, 170);
			printer_draw_line($p, $var_magin_left, 210, 700, 210);
			printer_draw_text($p, "\"Budayakan Antri Untuk Kenyamanan \n Bersama\"", $var_magin_left, 230);
			printer_draw_text($p, "Terimakasih Atas Kunjungannya", 100, 250);

			printer_draw_text($p, "  ", $var_magin_left, 260);

			$row +=300;
			printer_draw_text($p, "- ", 0, $row);
			
			printer_delete_font($font);

			printer_end_page($p);
			printer_end_doc($p);

			printer_start_doc($p);
			printer_start_page($p);
			printer_close($p);
			
			//simpan nomor 
			
			
			
			echo $nomor;
		}
	
	public function print_b()
	{
		$row = null;
	   $nomor = $this->mm->generate_b();
		$tanggal = date("d-m-Y");
		$tanggal_sys = date("Y-m-d");
		$jam = date("H:i:s");
		$result= $this->mm->get('printer',null,'roar');
		$printer_name = $result['nama_printer'];
		//save nomor
		$datas = array('nomor_antrian' => $nomor,
						'only_nomor_antrian' => str_replace ('B.','' ,$nomor),
						'tanggal' => $tanggal_sys,
						'jam' =>$jam,
						'loket' =>'B');
		$save = $this->mm->save('antrian',$datas);
						
		function getClientPrinter2(){
			$host = getHostByAddr($_SERVER['REMOTE_ADDR']);
			return"\\\\".$host."\\antrian";
		}
		
		$var_magin_left = 10;
		$p = printer_open("Antrian2");
		printer_set_option($p, PRINTER_MODE, "RAW"); // mode disobek (gak ngegulung kertas)

		//then the width
		printer_set_option( $p,PRINTER_RESOLUTION_Y, 940);
		printer_start_doc($p);
		printer_start_page($p);

		$font = printer_create_font("Arial", 38, 10, PRINTER_FW_NORMAL, false, false, false, 0);
		printer_select_font($p, $font);
		printer_draw_text($p, "RSUD WONOSARI",200,0);
		//printer_draw_text($p, "",250,20);
		// Header Bon
		$pen = printer_create_pen(PRINTER_PEN_SOLID, 1, "000000");
		printer_select_pen($p, $pen);
		//printer_draw_line($p, $var_magin_left, 50, 700, 50);
		printer_draw_text($p, "Non RACIKAN:", 10, 50);

		$font = printer_create_font("Arial", 98, 60, PRINTER_FW_NORMAL, false, false, false, 0);
		printer_select_font($p, $font);
		printer_draw_text($p, "$nomor", 210, 70);

		$font = printer_create_font("Arial", 15, 12, PRINTER_FW_NORMAL, false, false, false, 0);
		printer_select_font($p, $font);
		printer_draw_text($p, "Waktu Antrian :", $var_magin_left, 150);
		printer_draw_text($p, date("Y/m/d H:i:s"),$var_magin_left, 170);
		printer_draw_line($p, $var_magin_left, 210, 700, 210);
		printer_draw_text($p, "\"Budayakan Antri Untuk Kenyamanan \n Bersama\"", $var_magin_left, 230);
		printer_draw_text($p, "Terimakasih Atas Kunjungannya", 100, 250);

		printer_draw_text($p, "  ", $var_magin_left, 260);

		$row +=300;
		printer_draw_text($p, "- ", 0, $row);
								   
		printer_delete_font($font);

		printer_end_page($p);
		printer_end_doc($p);

		printer_start_doc($p);
		printer_start_page($p);
		printer_close($p);
		
		//simpan nomor 
						
		echo $nomor;
	}

  
}