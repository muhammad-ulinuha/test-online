<?php

namespace App\Controllers;

use App\Models\PostModel;

class Home extends BaseController
{
    public function beranda(){
        $model = new PostModel();
        $data['getPost'] = $model->getPost();
        return view('layouts/beranda',$data);
    }
}
