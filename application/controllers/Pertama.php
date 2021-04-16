<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Pertama extends HX_Controller {

   public function __construct()
   {
      parent::__construct();
   }

	public function index()
	{
	   $load['_judul'] = 'Display Menu Siantik';
      $this->view_publik('halaman_depan', $load);
      
	}

  
}