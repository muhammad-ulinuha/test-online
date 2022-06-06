<?php namespace App\Controllers;

use App\Models\PostModel;


class Author extends BaseController
{
	public function author()
	{
        if(!session()->has('username')){
			return redirect()->to('admin/login');
		}
		$model = new PostModel;
		$data['username']  = session()->get('username');
		$data['role']  = session()->get('role');
        $data['getPost'] = $model->getPost();
		echo view('author/beranda',$data);
    }

    public function beranda()
    {
		if(!session()->has('username')){
			return redirect()->to('admin/login');
		}
		$data['username']  = session()->get('username');
		$data['role']  = session()->get('role');
        return view('author/beranda',$data);
    }

    public function post()
    {
        if(!session()->has('username')){
			return redirect()->to('admin/login');
		}
		$model = new PostModel;
		$data['username']  = session()->get('username');
		$data['role']  = session()->get('role');
        $data['getPost'] = $model->getPostAuthor($data['username']);
        return view('author/post',$data);
    }

}