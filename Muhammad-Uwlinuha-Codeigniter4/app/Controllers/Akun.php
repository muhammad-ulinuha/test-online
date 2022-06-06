<?php namespace App\Controllers;

use App\Models\AkunModel;
use CodeIgniter\I18n\Time;

class Akun extends BaseController
{
    public function akun()
    {
        if(!session()->has('username')){
			return redirect()->to('admin/login');
		}
		$model = new AkunModel;
		$data['username']  = session()->get('username');
        $data['getAkun'] = $model->getAkun();
        return view('admin/akun',$data);
    }

    public function add()
    {
        $model = new AkunModel();
        $data = array(
            'username' => $this->request->getPost('username'),
            'password' => $this->request->getPost('password'),
            'name' => $this->request->getPost('name'),
            'role' => $this->request->getPost('role'),
        );
        $model->saveAkun($data);
        echo '<script>
                alert("Sukses Tambah Data Akun");
                window.location="'.base_url('admin/akun').'"
            </script>';
    }

    public function edit()
    {
        $model = new AkunModel();
        $id = $this->request->getPost('username');
        $data = array(
            'password' => $this->request->getPost('password'),
            'name' => $this->request->getPost('name'),
            'role' => $this->request->getPost('role')
        );
        $model->editAkun($data,$id);
        echo '<script>
                alert("Sukses Edit Data");
                window.location="'.base_url('admin/akun').'"
            </script>';
    }

    public function delete($id)
    {
        $model = new AkunModel();
        $getAkun = $model->getAkun($id)->getRow();
        if(isset($getAkun))
        {
            $model->deleteAkun($id);
            echo '<script>
                    alert("Hapus Data Sukses");
                    window.location="'.base_url('admin/akun').'"
                </script>';

        }else{

            echo '<script>
                    alert("Hapus Gagal !, ID Post '.$id.' Tidak ditemukan");
                    window.location="'.base_url('admin/akun').'"
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