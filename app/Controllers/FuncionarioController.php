<?php

namespace App\Controllers;

class FuncionarioController extends BaseController
{

    public function index()
    {
        echo view('header');
        echo view('cadFuncionario');
        echo view('footer');
    }

    public function inserirFuncionario()
    {
        $data["msg"] = '';
        //Solicitar todos os arquivos do método POST e GET
        $request = service('request');

        if ($request->getMethod() === 'post') {
            //Intanciar o banco de dados funcionario_tb
            $FuncionarioModelo = new \App\Models\FuncionarioModel();

            $FuncionarioModelo->set('codusu_FK', $request->getPost('codUsu'));
            $FuncionarioModelo->set('nomeFun', $request->getPost('nomefun'));
            $FuncionarioModelo->set('foneFun', $request->getPost('fonefun'));

            if ($FuncionarioModelo->insert()) {
                $data['msg'] = "Informações cadastrada com sucesso";
            } else {
                $data['msg'] = "Informações não cadastradas";
            }
        }
    }

    public function listaCodFuncionario()
    {
        $request = service('request');
        $data['usuario'] = "";

        if($request->getPost('codUsu'))
        {
            $codusuario = $request->getPost('codUsu');
            $UsuarioModel = new \App\Models\UsuarioModel();
            $registros = $UsuarioModel->find($codusuario);
            $data['usuario'] = $registros;
        }
        
        if($request->getPost('nomefun') && $request->getPost('fonefun'))
        {
            $this->inserirFuncionario();
        }

        echo view('header');
        echo view('cadFuncionario', $data);
        echo view('footer');
    }
}
