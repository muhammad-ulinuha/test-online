<?php namespace App\Controllers;

use App\Models\PostModel;
use CodeIgniter\I18n\Time;

class Post extends BaseController
{
    public function post()
    {
        if(!session()->has('username')){
			return redirect()->to('admin/login');
		}
		$model = new PostModel;
		$data['username']  = session()->get('username');
        $data['getPost'] = $model->getPost();
        return view('admin/post',$data);
    }

    public function add()
    {
        if(!session()->has('username')){
			return redirect()->to('/login');
		}
        $model = new PostModel();
        $date = Time::createFromDate()->now();
        $data = array(
            'title' => $this->request->getPost('title'),
            'content' => $this->request->getPost('content'),
            'date' => $date,
            'username' => session()->get('username')
        );
        $model->savePost($data);
		$role  = session()->get('role');
        if($role!='author'){
            echo '<script>
                alert("Sukses Tambah Data Post");
                window.location="'.base_url('admin/post').'"
            </script>';
        }else{
            echo '<script>
            alert("Sukses Tambah Data Post");
            window.location="'.base_url('admin/authorpost').'"
        </script>';
        }
        
    }

    public function edit()
    {
        $model = new PostModel();
        $date = Time::createFromDate()->now();
        $id = $this->request->getPost('idpost');
        $data = array(
            'title' => $this->request->getPost('title'),
            'content' => $this->request->getPost('content'),
            'date' => $date

        );
        $model->editPost($data,$id);
        $role  = session()->get('role');
        if($role!='author'){
            echo '<script>
                alert("Sukses Edit Data Post");
                window.location="'.base_url('admin/post').'"
            </script>';
        }else{
            echo '<script>
            alert("Sukses Edit Data Post");
            window.location="'.base_url('admin/authorpost').'"
        </script>';
        }
    }

    public function delete($id)
    {
        $model = new PostModel();
        $model->deletePost($id);
        $role  = session()->get('role');
        if($role!='author'){
            echo '<script>
                alert("Sukses Tambah Delete Post");
                window.location="'.base_url('admin/post').'"
            </script>';
        }else{
            echo '<script>
            alert("Sukses Tambah Delete Post");
            window.location="'.base_url('admin/authorpost').'"
        </script>';
        }
    }

    public function beranda()
    {
        if(!session()->has('username')){
			return redirect()->to('/login');
		}
        $data['username']  = session()->get('username');
        $data['title'] = 'Rekomendasi Mobil Bekas';
        return view('admin/beranda',$data);
    }

   
    
	//--------------------------------------------------------------------

}