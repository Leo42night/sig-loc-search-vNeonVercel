<?php 

class Profile extends Controller {
    public function index() {
        $data['judul'] = 'Profile';
        $this->view('templates/header',$data);
        $this->view('profile/index');
        $this->view('templates/footer');
    }
}
