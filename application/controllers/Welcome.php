<?php
//session_start();


defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('index');
		//$datauser = $this->Model->GetUser();
		/*foreach($datauser as $d) {
			echo $d['username'];
		
		}*/
		
	}
	
	public function __construct() 
	{   
		parent::__construct();   
		$this->load->model('Model');
		
		
	}  
	
	public function deskripsi()
	{
		$this->load->view('deskripsi');
	}
	
	public function deskripsi2()
	{
		$this->load->view('deskripsi2');
	}

	public function deskripsi3()
	{
		$this->load->view('deskripsi3');
	}
	
	public function deskripsi4()
	{
		$this->load->view('deskripsi4');
	}
	
	public function deskripsi5()
	{
		$this->load->view('deskripsi5');
	}

	public function contacts()
	{
		$this->load->view('contacts');
	}
	
	public function login()
	{
		$data['err_message']="";
		$this->load->view('login',$data);
	}
	
	public function loginclick()
	{
		$username = $this->input->post('username'); 
		$password = $this->input->post('password'); 
		$isLogin = $this->Model->login_authen($username, $password);
		$i = $this->Model->authen_user($username); 
			if ($isLogin == true && $i[0]['authentication'] < 3) {
				//$_SESSION["username"] = $username;
				$this->session->set_userdata('username', 'password');
				$this->readDataBeli();
		//echo $username;
		//echo $password;
		} 	else{  
				if ($i[0]['authentication'] < 3) {   
					$update = $this->Model->wrong_password($username, $i[0]['authentication']+1);
					$data['err_message'] = "GAGAL LOGIN " . ($i[0]['authentication']+1);   
					$this->load->view('login', $data);  
				}  
				else{   
					$data['err_message'] = "AKUN ANDA TERBLOCK";   
					$this->load->view('login', $data);  }
		//$this->load->view('index');
		} 
	}
	
	public function kategori()
	{
		$this->load->view('kategori');
	}
	
	public function indexadmin() 
	{
		$this->load->view('indexadmin');
	}
	
	public function indexuser() 
	{
		$this->load->view('indexuser');
	}
	
	public function admin() 
	{
		$this->readDataBeli();
	}
	
	public function formadmin() 
	{
		$this->load->view('forms');
	}


	public function pilihan()
	{
		$pilihan = $this->input->post('kategori');
		if($pilihan == "hair") {
			$this->createHair();
		}
		elseif ($pilihan == "kosmetik") {
			$this->createKosmetik();
		}
		else {
			$this->createSkin();
		}
			// $this->readDataBeli();
	}

	function createBeli() {
	   $data = array(        
			   	'namabarang' => $this->input->post('namabarang'),     
			   	'merk' => $this->input->post('merk'), 
			   	'harga' => $this->input->post('harga'),    
			   	'jumlah' => $this->input->post('jumlah'),     
			   	'kategori' => $this->input->post('kategori'),
			    'tanggal' => $this->input->post('tanggal'),
			    'notelp' => $this->input->post('notelp'),
			    'alamat' => $this->input->post('alamat'),     
			    'kodepos' => $this->input->post('kodepos'),
    
	   	);  
  		$this->Model->addDataBeli($data);   
  		$this->formbeliberhasil(); 
  	}  

  	function formbeliberhasil() {
  		$this->load->view('formbeliberhasil');
  	}

  	function formbeli2() {
  		$this->load->view('formbeli2');
  	}

  	function formbeli3() {
  		$this->load->view('formbeli3');
  	}

  	function formbeli4() {
  		$this->load->view('formbeli4');
  	}

  	function formbeli5() {
  		$this->load->view('formbeli5');
  	}

  	function formbeli6() {
  		$this->load->view('formbeli6');
  	}
	
	public function tabel() 
	{
		$this->load->view('tables');
	}

	public function coba() 
	{
		$this->load->view('coba');
	}

	public function formbeli() 
	{
		$id = $_GET['id'];
		$kat = $_GET['kat'];
		$data = $this->Model->getFormBeli($id, $kat);
		$this->load->view('formbeli', array('data' => $data));
	}

	public function formbelideskripsi() 
	{
		$id = $_GET['id'];
		$data = $this->Model->getFormBeliDeskripsi($id);
		$this->load->view('formbeli', array('data' => $data));
	}

	public function readDataDeskripsi() // readData($kategori)
	{  
		$data = $this->Model->getDataDeskripsi(); // getData($kategori)
		$this->load->view('deskripsi', array('data' => $data)); 
	}
	
	public function charts() 
	{
		$this->load->view('charts');
	}
	
	function readData() // readData($kategori)
	{  
		$data = $this->Model->getData($_GET["kat"]); // getData($kategori)
		$this->load->view('kategori', array('data' => $data)); 
	}

	/*public function kategori2()
	{
		$this->load->view('kategoriuser');
	}
	
	function readData2() // readData($deskripsi)
	{  
		$data = $this->Model->getData($_GET["kate"]); // getData($kategori)
		$this->load->view('kategoriuser', array('data' => $data)); 
	}*/
	function readDataKategori() 
	{  
		$data = $this->Model->getDataKategori();  
		$this->load->view('adminkosmetik', array('data' => $data)); 
	}

	function readDataKategoriSkin() 
	{  
		$data = $this->Model->getDataKategoriSkin();  
		$this->load->view('adminskin', array('data' => $data)); 
	}

	function readDataKategoriHair() 
	{  
		$data = $this->Model->getDataKategoriHair();  
		$this->load->view('adminhair', array('data' => $data)); 
	} 
	
	public function logout()
	{
		unset($_SESSION['username']);
		$this->login();
	}

	function readDataBeli() 
	{  
		$data = $this->Model->getDataBeli();  
		$this->load->view('adminutama', array('data' => $data)); 
	} 
   

	public function createKosmetik() 
	{
	
			$this->load->helper('form');
			$this->load->library('form_validation'); 
			$this->load->library('upload'); 
			$is_submit = $this->input->post('is_submit'); 

			if(isset($is_submit) && $is_submit == 1){ 
				$fileUpload = array(); 
				$isUpload = FALSE;	
				$config = array( 
		        'upload_path' => './assets/gambar/', 
		        'allowed_types' => 'jpg|jpeg|png', 
		        'max_size' => 512 

				);
			} else{ 
				      echo 'gagalkak';
				      //$this->load->view('index'); 
			}

			 $this->upload->initialize($config); 

			 if($this->upload->do_upload('gambar')){
				$fileUpload = $this->upload->data();
				$isUpload = TRUE;
			} else {
				echo $this->upload->display_errors('<p>', '</p>');
			} 

			
		    if($isUpload) { //yey bisa!
			$data = array(
			'kodebarang' => $this->input->post('kodebarang'),     
			'namabarang' => $this->input->post('namabarang'),
			'merk' => $this->input->post('merk'),
			'harga' => $this->input->post('harga'),     
			'jumlah' => $this->input->post('jumlah'),     
			'kategori' => $this->input->post('kategori'),
			// 'gambar' => $this->input->post('gambar'),
			'gambar' => $fileUpload['file_name'], 
			'deskripsi' => $this->input->post('deskripsi'),     
			'review' => $this->input->post('review')
			    
			    
			);  
  			$this->Model->addData1($data);  
  			$this->readDataKategori(); 
  			//$this->read(); 
  			}
  			 else{ 
      			$this->readDataKategori();
    		}

	  } 

	  public function createHair() 
	{
			$this->load->helper('form');
			$this->load->library('form_validation'); 
			$this->load->library('upload'); 
			$is_submit = $this->input->post('is_submit'); 

			if(isset($is_submit) && $is_submit == 1){ 
				$fileUpload = array(); 
				$isUpload = FALSE;	
				$config = array( 
		        'upload_path' => './assets/gambar/', 
		        'allowed_types' => 'jpg|jpeg|png', 
		        'max_size' => 512 

				);
			} else{ 
				      echo 'gagalkak';
				      //$this->load->view('index'); 
			}

			 $this->upload->initialize($config); 

			 if($this->upload->do_upload('gambar')){
				$fileUpload = $this->upload->data();
				$isUpload = TRUE;
			} else {
				echo $this->upload->display_errors('<p>', '</p>');
			} 

			
		    if($isUpload) { //nggak mau dilaksanain :(
			$data = array(
			'kodebarang' => $this->input->post('kodebarang'),     
			'namabarang' => $this->input->post('namabarang'),
			'merk' => $this->input->post('merk'),
			'harga' => $this->input->post('harga'),     
			'jumlah' => $this->input->post('jumlah'),     
			'kategori' => $this->input->post('kategori'),
			// 'gambar' => $this->input->post('gambar'),
			'gambar' => $fileUpload['file_name'], 
			'deskripsi' => $this->input->post('deskripsi'),     
			'review' => $this->input->post('review')
			    
			    
			);  
  			$this->Model->addData2($data);  
  			$this->readDataKategoriHair(); 
  			//$this->read(); 
  			}
  			 else{ 
      			$this->readDataKategoriHair();
    		}

			// $data = array(
			// 'kodebarang' => $this->input->post('kodebarang'),     
			// 'namabarang' => $this->input->post('namabarang'),
			// 'merk' => $this->input->post('merk'),
			// 'harga' => $this->input->post('harga'),     
			// 'jumlah' => $this->input->post('jumlah'),     
			// 'kategori' => $this->input->post('kategori'),
			// 'gambar' => $this->input->post('gambar'),
			// 'deskripsi' => $this->input->post('deskripsi'),     
			// 'review' => $this->input->post('review')     
			    
			// );  
  	// 		$this->Model->addData2($data);   
  			//$this->read(); 
	  } 

	  public function createSkin() 
	{
			$this->load->helper('form');
			$this->load->library('form_validation'); 
			$this->load->library('upload'); 
			$is_submit = $this->input->post('is_submit'); 

			if(isset($is_submit) && $is_submit == 1){ 
				$fileUpload = array(); 
				$isUpload = FALSE;	
				$config = array( 
		        'upload_path' => './assets/gambar/', 
		        'allowed_types' => 'jpg|jpeg|png', 
		        'max_size' => 512 

				);
			} else{ 
				      echo 'gagalkak';
				      //$this->load->view('index'); 
			}

			 $this->upload->initialize($config); 

			 if($this->upload->do_upload('gambar')){
				$fileUpload = $this->upload->data();
				$isUpload = TRUE;
			} else {
				echo $this->upload->display_errors('<p>', '</p>');
			} 

			
		    if($isUpload) { //nggak mau dilaksanain :(
			$data = array(
			'kodebarang' => $this->input->post('kodebarang'),     
			'namabarang' => $this->input->post('namabarang'),
			'merk' => $this->input->post('merk'),
			'harga' => $this->input->post('harga'),     
			'jumlah' => $this->input->post('jumlah'),     
			'kategori' => $this->input->post('kategori'),
			// 'gambar' => $this->input->post('gambar'),
			'gambar' => $fileUpload['file_name'], 
			'deskripsi' => $this->input->post('deskripsi'),     
			'review' => $this->input->post('review')
			    
			    
			);  
  			$this->Model->addData3($data);  
  			$this->readDataKategoriSkin(); 
  			//$this->read(); 
  			}
  			 else{ 
      			$this->readDataKategoriSkin();
    		}
			// $data = array(
			// 'kodebarang' => $this->input->post('kodebarang'),     
			// 'namabarang' => $this->input->post('namabarang'),
			// 'merk' => $this->input->post('merk'),
			// 'harga' => $this->input->post('harga'),     
			// 'jumlah' => $this->input->post('jumlah'),     
			// 'kategori' => $this->input->post('kategori'),
			// 'gambar' => $this->input->post('gambar'),
			// 'deskripsi' => $this->input->post('deskripsi'),     
			// 'review' => $this->input->post('review')     
			    
			// );  
  	// 		$this->Model->addData3($data);   
  			//$this->read(); 
	  }

	  public function deletebarang($nomor)
	  {
	  	$this->Model->delete_item($nomor);
 		$this->readDataBeli();
	  } 

	  public function editbarang($kodebarang)
	  {
	  	$kosmetik = $this->Model->getDataKategori("where kodebarang = '$kodebarang'");
	  	$data = array(
	  			"kodebarang" => $kosmetik[0]['kodebarang'],
	  			"namabarang" => $kosmetik[0]['namabarang'],
	  			"merk" => $kosmetik[0]['merk'],
	  			"harga" => $kosmetik[0]['harga'],
	  			"jumlah" => $kosmetik[0]['jumlah'],
	  			"kategori" => $kosmetik[0]['kategori'],
	  			"gambar" => $kosmetik[0]['gambar'],
	  			"deskripsi" => $kosmetik[0]['deskripsi'],
	  			"review" => $kosmetik[0]['review']
	  		);
	  	$this->load->view('formupdatekosmetik',$data);
	  } 

	  public function updatekosmetik($kodebarang)
	  {
	  		$this->load->helper('form');
			$this->load->library('form_validation'); 
			$this->load->library('upload'); 
			$is_submit = $this->input->post('is_submit'); 

			if(isset($is_submit) && $is_submit == 1){ 
				$fileUpload = array(); 
				$isUpload = FALSE;	
				$config = array( 
		        'upload_path' => './assets/gambar/', 
		        'allowed_types' => 'jpg|jpeg|png', 
		        'max_size' => 512 

				);
			} else{ 
				      echo 'gagalkak';
				      //$this->load->view('index'); 
			}

			 $this->upload->initialize($config); 

			 if($this->upload->do_upload('gambar')){
				$fileUpload = $this->upload->data();
				$isUpload = TRUE;
			} else {
				echo $this->upload->display_errors('<p>', '</p>');
			} 

			
		    if($isUpload) { //yey bisa!
			$data = array(
			'kodebarang' => $this->input->post('kodebarang'),     
			'namabarang' => $this->input->post('namabarang'),
			'merk' => $this->input->post('merk'),
			'harga' => $this->input->post('harga'),     
			'jumlah' => $this->input->post('jumlah'),     
			'kategori' => $this->input->post('kategori'),
			// 'gambar' => $this->input->post('gambar'),
			'gambar' => $fileUpload['file_name'], 
			'deskripsi' => $this->input->post('deskripsi'),     
			'review' => $this->input->post('review')
			    
			    
			);  
  			$this->Model->update_kosmetik($kodebarang, $data);  
  			// $data['barang'] = $this->Model->get_kosmetik_id($kodebarang); 
			$this->load->view('formupdatekosmetik', $data);  
  			//$this->read(); 
  			}
  			 else{ 
      			$this->readDataKategori();
    		}

	  // 	$kodebarang = $_POST['kodebarang'];
	  // 	$namabarang = $_POST['namabarang'];
	  // 	$merk = $_POST['merk'];
	  // 	$harga = $_POST['harga'];
	  // 	$jumlah = $_POST['jumlah'];
	  // 	//$kategori = $_POST['kategori'];
	  // 	$gambar = $_POST['gambar'];
	  // 	$deskripsi = $_POST['deskripsi'];
	  // 	$review = $_POST['review'];
	  // 	$data = array(   
			// 'namabarang' => $namabarang,
			// 'merk' => $merk,
			// 'harga' => $harga,     
			// 'jumlah' => $jumlah,     
			// //'kategori' => $kategori,
			// 'gambar' => $gambar,
			// 'deskripsi' => $deskripsi,     
			// 'review' => $review     
			    
			// );
			// $where = array('kodebarang' => $kodebarang);  
  	// 		$res = $this->Model->Update('kosmetik', $data, $where);
  	// 		if($res>=1) {
  	// 			redirect('Welcome/readDataKategori');
  	// 		}
	   }

	  public function deletekosmetik($kodebarang)
	  {
	  	$this->Model->delete_kosmetik($kodebarang);
 		$this->readDataKategori();
	  }

	  public function editskin($kodebarang)
	  {
	  	$kosmetik = $this->Model->getDataKategoriSkin("where kodebarang = '$kodebarang'");
	  	$data = array(
	  			"kodebarang" => $kosmetik[0]['kodebarang'],
	  			"namabarang" => $kosmetik[0]['namabarang'],
	  			"merk" => $kosmetik[0]['merk'],
	  			"harga" => $kosmetik[0]['harga'],
	  			"jumlah" => $kosmetik[0]['jumlah'],
	  			"kategori" => $kosmetik[0]['kategori'],
	  			"gambar" => $kosmetik[0]['gambar'],
	  			"deskripsi" => $kosmetik[0]['deskripsi'],
	  			"review" => $kosmetik[0]['review']
	  		);
	  	$this->load->view('formupdateskin',$data);
	  } 

	  public function updateskin($kodebarang)
	  {
	  		$this->load->helper('form');
			$this->load->library('form_validation'); 
			$this->load->library('upload'); 
			$is_submit = $this->input->post('is_submit'); 

			if(isset($is_submit) && $is_submit == 1){ 
				$fileUpload = array(); 
				$isUpload = FALSE;	
				$config = array( 
		        'upload_path' => './assets/gambar/', 
		        'allowed_types' => 'jpg|jpeg|png', 
		        'max_size' => 512 

				);
			} else{ 
				      echo 'gagalkak';
				      //$this->load->view('index'); 
			}

			 $this->upload->initialize($config); 

			 if($this->upload->do_upload('gambar')){
				$fileUpload = $this->upload->data();
				$isUpload = TRUE;
			} else {
				echo $this->upload->display_errors('<p>', '</p>');
			} 

			
		    if($isUpload) { //yey bisa!
			$data = array(
			'kodebarang' => $this->input->post('kodebarang'),     
			'namabarang' => $this->input->post('namabarang'),
			'merk' => $this->input->post('merk'),
			'harga' => $this->input->post('harga'),     
			'jumlah' => $this->input->post('jumlah'),     
			'kategori' => $this->input->post('kategori'),
			// 'gambar' => $this->input->post('gambar'),
			'gambar' => $fileUpload['file_name'], 
			'deskripsi' => $this->input->post('deskripsi'),     
			'review' => $this->input->post('review')
			    
			    
			);  
  			$this->Model->update_skin($kodebarang, $data);  
  			// $data['barang'] = $this->Model->get_kosmetik_id($kodebarang); 
			$this->load->view('formupdateskin', $data);  
  			//$this->read(); 
  			}
  			 else{ 
      			$this->readDataKategori();
    		}
	  // 	$kodebarang = $_POST['kodebarang'];
	  // 	$namabarang = $_POST['namabarang'];
	  // 	$merk = $_POST['merk'];
	  // 	$harga = $_POST['harga'];
	  // 	$jumlah = $_POST['jumlah'];
	  // 	//$kategori = $_POST['kategori'];
	  // 	$gambar = $_POST['gambar'];
	  // 	$deskripsi = $_POST['deskripsi'];
	  // 	$review = $_POST['review'];
	  // 	$data = array(   
			// 'namabarang' => $namabarang,
			// 'merk' => $merk,
			// 'harga' => $harga,     
			// 'jumlah' => $jumlah,     
			// //'kategori' => $kategori,
			// 'gambar' => $gambar,
			// 'deskripsi' => $deskripsi,     
			// 'review' => $review     
			    
			// );
			// $where = array('kodebarang' => $kodebarang);  
  	// 		$res = $this->Model->Update('skin', $data, $where);
  	// 		if($res>=1) {
  	// 			redirect('Welcome/readDataKategoriSkin');
  	// 		}
	  }

	  public function deleteskin($kodebarang)
	  {
	  	$this->Model->delete_skin($kodebarang);
 		$this->readDataKategoriSkin();
	  }

	  public function edithair($kodebarang)
	  {
	  	$kosmetik = $this->Model->getDataKategoriHair("where kodebarang = '$kodebarang'");
	  	$data = array(
	  			"kodebarang" => $kosmetik[0]['kodebarang'],
	  			"namabarang" => $kosmetik[0]['namabarang'],
	  			"merk" => $kosmetik[0]['merk'],
	  			"harga" => $kosmetik[0]['harga'],
	  			"jumlah" => $kosmetik[0]['jumlah'],
	  			"kategori" => $kosmetik[0]['kategori'],
	  			"gambar" => $kosmetik[0]['gambar'],
	  			"deskripsi" => $kosmetik[0]['deskripsi'],
	  			"review" => $kosmetik[0]['review']
	  		);
	  	$this->load->view('formupdatehair',$data);
	  }

	  public function updatehair($kodebarang)
	  {
	  		$this->load->helper('form');
			$this->load->library('form_validation'); 
			$this->load->library('upload'); 
			$is_submit = $this->input->post('is_submit'); 

			if(isset($is_submit) && $is_submit == 1){ 
				$fileUpload = array(); 
				$isUpload = FALSE;	
				$config = array( 
		        'upload_path' => './assets/gambar/', 
		        'allowed_types' => 'jpg|jpeg|png', 
		        'max_size' => 512 

				);
			} else{ 
				      echo 'gagalkak';
				      //$this->load->view('index'); 
			}

			 $this->upload->initialize($config); 

			 if($this->upload->do_upload('gambar')){
				$fileUpload = $this->upload->data();
				$isUpload = TRUE;
			} else {
				echo $this->upload->display_errors('<p>', '</p>');
			} 

			
		    if($isUpload) { //yey bisa!
			$data = array(
			'kodebarang' => $this->input->post('kodebarang'),     
			'namabarang' => $this->input->post('namabarang'),
			'merk' => $this->input->post('merk'),
			'harga' => $this->input->post('harga'),     
			'jumlah' => $this->input->post('jumlah'),     
			'kategori' => $this->input->post('kategori'),
			// 'gambar' => $this->input->post('gambar'),
			'gambar' => $fileUpload['file_name'], 
			'deskripsi' => $this->input->post('deskripsi'),     
			'review' => $this->input->post('review')
			    
			    
			);  
  			$this->Model->update_hair($kodebarang, $data);  
  			// $data['barang'] = $this->Model->get_kosmetik_id($kodebarang); 
			$this->load->view('formupdatehair', $data);  
			$this->readDataKategori();
  			//$this->read(); 
  			}
  			 else{ 
      			$this->readDataKategori();
    		}
	  // 	$kodebarang = $_POST['kodebarang'];
	  // 	$namabarang = $_POST['namabarang'];
	  // 	$merk = $_POST['merk'];
	  // 	$harga = $_POST['harga'];
	  // 	$jumlah = $_POST['jumlah'];
	  // 	//$kategori = $_POST['kategori'];
	  // 	$gambar = $_POST['gambar'];
	  // 	$deskripsi = $_POST['deskripsi'];
	  // 	$review = $_POST['review'];
	  // 	$data = array(   
			// 'namabarang' => $namabarang,
			// 'merk' => $merk,
			// 'harga' => $harga,     
			// 'jumlah' => $jumlah,     
			// //'kategori' => $kategori,
			// 'gambar' => $gambar,
			// 'deskripsi' => $deskripsi,     
			// 'review' => $review     
			    
			// );
			// $where = array('kodebarang' => $kodebarang);  
  	// 		$res = $this->Model->Update('hair', $data, $where);
  	// 		if($res>=1) {
  	// 			redirect('Welcome/readDataKategoriHair');
  	// 		}
	  }

	  public function deletehair($kodebarang)
	  {
	  	$this->Model->delete_hair($kodebarang);
 		$this->readDataKategoriHair();
	  }


}
?>
