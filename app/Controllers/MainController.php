<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MainModel;

    class MainController extends BaseController
{
    public function index()
    {
        $main = new MainModel();
        $data['ta'] = $main->findAll();
        $data['tabl'] = [];
        return view('main',$data);
    }
    public function save(){
        $main = new MainModel();
        $data = [
            'ProductName' => $this->request->getVar('ProductName'),
            'ProductDescription' => $this->request->getVar('ProductDescription'),
            'ProductCategory' => $this->request->getVar('ProductCategory'),
            'ProductQuantity' => $this->request->getVar('ProductQuantity'),
            'ProductPrice' => $this->request->getVar('ProductPrice'),
        ];
        $id = $this->request->getVar('id');
        if($id != null){
            $main->set($data)->where('id', $id)->update();
        }else{
            unset($data['id']);
            $main->save($data);
        }
        return redirect()->to('/main');
    }    
    public function delete($id){
        $main = new MainModel();
        $record = $main->find($id);
        if($record){
            $main->delete($id);
            return redirect()->to('/main');
        }else{
            return "Record not found";
        }
    }
    function edit($id){
        $main = new MainModel();
        $data=[
            'ta' => $main->findAll(),
            'tabl' => $main->where('id',$id)->first(),
        ];
        return view('main', $data);
    }
}