<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->model('Model');
        $this->load->library('form_validation');
    }
	
	public function index_home(){
		$this->load->view('index_home');
	}
	public function kontak(){
		$this->load->view('artikel/kontak');
	}
	public function konten(){
		$this->load->view('artikel/konten');
	}
	public function konten2(){
		$this->load->view('artikel/konten2');
	}
	public function Artikel1(){
		$this->load->view('artikel/Artikel1');
	}
	public function Artikel2(){
		$this->load->view('artikel/Artikel2');
	}
	public function Artikel3(){
		$this->load->view('artikel/Artikel3');
	}
	public function Artikel4(){
		$this->load->view('artikel/Artikel4');
	}
	public function Artikel5(){
		$this->load->view('artikel/Artikel5');
	}
	public function Artikel6(){
		$this->load->view('artikel/Artikel6');
	}
	public function Artikel7(){
		$this->load->view('artikel/Artikel7');
	}
	public function Artikel8(){
		$this->load->view('artikel/Artikel8');
	}
	public function Artikel9(){
		$this->load->view('artikel/Artikel9');
	}
	public function Artikel10(){
		$this->load->view('artikel/Artikel10');
	}
	public function Artikel11(){
		$this->load->view('artikel/Artikel11');
	}
	public function Artikel12(){
		$this->load->view('artikel/Artikel12');
	}
	public function Artikel13(){
		$this->load->view('artikel/Artikel13');
	}
	public function Artikel14(){
		$this->load->view('artikel/Artikel14');
	}
	public function Artikel15(){
		$this->load->view('artikel/Artikel15');
	}
	public function Artikel16(){
		$this->load->view('artikel/Artikel16');
	}
	public function Artikel17(){
		$this->load->view('artikel/Artikel17');
	}
	public function Artikel18(){
		$this->load->view('artikel/Artikel18');
	}
	public function Artikel19(){
		$this->load->view('artikel/Artikel19');
	}
	public function Artikel20(){
		$this->load->view('artikel/Artikel20');
	}
	public function Artikel21(){
		$this->load->view('artikel/Artikel21');
	}
	public function Artikel22(){
		$this->load->view('artikel/Artikel22');
	}
	public function Artikel23(){
		$this->load->view('artikel/Artikel23');
	}
	public function Artikel24(){
		$this->load->view('artikel/Artikel24');
	}
	public function Artikel25(){
		$this->load->view('artikel/Artikel25');
	}

	public function masuk(){
		$this->load->view('masuk');
	}
	public function prosesMasuk(){
		$this->form_validation->set_rules('email', 'Enter Email', 'required');
		$this->form_validation->set_rules('password', 'Enter Password', 'required');
		
		if($this->form_validation->run() === FALSE){
			$this->load->view('masuk');
		}
		else {
			$email = $this->input->post('email');
			$cek = $this->Model->cekEmail($email);
			if($cek->num_rows() === 1){
				$password = $this->input->post('password');
				if(password_verify($password, $cek->row()->password)){
					$session['nama'] = $cek->row()->nama;
					$session['logged_in'] = TRUE;
					$this->session->set_userdata($session);

					redirect('welcome/index_home');
				}
				else{
					echo "Maaf, password yang anda masukkan salah";
				}
			}
			else{
				echo "Email anda tidak terdaftar";
			}
		}
	}

	public function daftar(){
		$this->load->view('daftar');
	}
	public function prosesDaftar(){
		$this->form_validation->set_rules('username', 'Enter Username', 'required');
        $this->form_validation->set_rules('email', 'Enter Email', 'required|valid_email|is_unique[admin.email]');
        $this->form_validation->set_rules('password', 'Enter Password', 'required');
        $this->form_validation->set_rules('pwverif', 'Enter Password Verification', 'required|matches[password]');

        if( $this->form_validation->run() === FALSE){
            $this->load->view('daftar');
        } else {
            $data = [
    	        'username' => $this->input->post('username'),
        	    'email' => $this->input->post('email'),
            	'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            ];
            $insert = $this->Model->daftar($data);
            if($insert){
                redirect('welcome/masuk');
            } else {
                echo 'Terjadi Kesalahan';
            }
        }   
	}

	public function pencarian(){
		$keyword = $this->input->post('keyword');
		$data['products'] = $this->Model->pencarian($keyword);
		$this->load->view('pencarian', $data);
	}

	public function admin(){
		$this->load->view('admin');
	}

}