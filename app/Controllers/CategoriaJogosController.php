<?php

namespace App\Controllers;
//use App\Models\CatJogoModel;

//use CodeIgniter\HTTP\Request;

class CategoriaJogosController extends BaseController
{
    public function index(){
        echo view('header');
        echo view ('cadCategoriaJogo');
        echo view('footer');
    }

    public function inserirCategoriaJogos()
    {
        $data["msg"] = '';
        //Solicitar todos os arquivos do método POST e GET
        $request = service('request');
        
        if ($request->getMethod() === 'post')
        {
            //Intanciar o banco de dados usuario_tb
            $categoriaModelo = new \App\Models\CategoriaJogosModel();            

            $categoriaModelo->set('nomeCatjogo', $request->getPost('nomeCatjogo'));            

            if ($categoriaModelo->insert())
            {
                $data['msg'] = "Informações cadastrada com sucesso";
            }
            else
            {
                $data['msg'] = "Informações não cadastradas";
            }
        }
        echo view('header');
        echo view('cadCategoriaJogo', $data);
        echo view('footer');
    }
}
