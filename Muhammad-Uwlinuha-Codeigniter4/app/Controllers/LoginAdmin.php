<?php namespace App\Controllers;

use App\Models\AdminModel;
use App\Models\PostModel;


class LoginAdmin extends BaseController
{
	public function index()
	{
		return view('login/login');
    }
    
    public function admin()
	{
        if(!session()->has('username')){
			return redirect()->to('admin/login');
		}
		$model = new PostModel;
		$data['username']  = session()->get('username');
		$data['role']  = session()->get('role');
        $data['getPost'] = $model->getPost();
		echo view('admin/post',$data);
    }

    public function auth(){
        $usersModel = new AdminModel();
		$username = $this->request->getPost('username');
	    $password = $this->request->getPost('password');
	    $user = $usersModel->where('username', $username)->first();


	    if(empty($user)){
	    	session()->setFlashdata('message', 'Username atau Password Salah');
	    	return redirect()->to('admin/login');
	    }

	    if($user['password']!=$password){
	    	session()->setFlashdata('message', 'Username atau Password Salah');
	    	return redirect()->to('admin/login');
	    }
		// $role = $usersModel->where('role',$user['role']);
		$role = $usersModel->getRole($user['role']);

		// print_r($role);
		foreach($role as $r){
			$datarole = $r['role'];
		}
		if($datarole=="admin"){
			session()->set('username',$username);
			session()->set('role',$datarole);
	    	return redirect()->to('admin/admin');
		}elseif($datarole=="author"){
			session()->set('username',$username);
			session()->set('role',$datarole);
	    	return redirect()->to('admin/author');
		}else{
			session()->setFlashdata('message', 'Anda tidak berhak masuk');
	    	return redirect()->to('admin/login');
		}

	    
	}
    
	public function logout(){
		session()->remove('username');
		return redirect()->to('admin/login');
	}


	public function beranda()
    {
		if(!session()->has('username')){
			return redirect()->to('admin/login');
		}
		$data['username']  = session()->get('username');
        return view('admin/beranda',$data);
    }
    
	
	// public function author()
	// {
    //     if(!session()->has('username')){
	// 		return redirect()->to('admin/login');
	// 	}
	// 	$model = new PostModel;
	// 	$data['username']  = session()->get('username');
    //     $data['getPost'] = $model->getPost();
	// 	echo view('admin/post',$data);
    // }
	//--------------------------------------------------------------------

}