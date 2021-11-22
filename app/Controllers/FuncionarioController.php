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

        if ($request->getPost('codUsu')) {
            $codusuario = $request->getPost('codUsu');
            //Instanciar o bd da tb_usuario para receber os dados e criar um new funcionario
            $UsuarioModel = new \App\Models\UsuarioModel();
            $registros = $UsuarioModel->find($codusuario);
            $data['usuario'] = $registros;
        }

        if ($request->getPost('nomefun') && $request->getPost('fonefun')) {
            $this->inserirFuncionario();
        }

        echo view('header');
        echo view('cadFuncionario', $data);
        echo view('footer');
    }

    public function buscaPrincipalFuncionario()
    {
        $request = service('request');
        $codfuncionario = $request->getPost('codFun');
        $nomefuncionario = ($request->getPost('nomeFuncionario'))?$request->getPost('nomeFuncionario'):'';
        $FuncionarioModel = new \App\Models\FuncionarioModel();

        if($codfuncionario){
            $registros = $FuncionarioModel->find($codfuncionario);
            var_dump($registros); //Está buscando por codigo
        }else{
            $registros = $FuncionarioModel->like('nomeFun',$nomefuncionario)->find();
            var_dump($registros); //Está buscando por nome (trazendo tudo, ex.: Pesquisa "J" e traz todos os nomes com J)
        }           

        if ($request->getPost('codFunDeletar')) {
            $this->funcionarioExcluir($request->getPost('codFunDeletar'));
            return redirect()->to(base_url('FuncionarioController/todosUsuarios/'));
        }

        if ($request->getPost('codFunAlterar')) {
            return $this->funcionarioAlterar();
        }

        $data['funcionario'] = $registros;

        echo view('header');
        echo view('buscaFuncionario', $data);
        echo view('footer');
    }

    public function funcionarioAlterar()
    {
        $request = service('request');
        $codFunAlterar = $request->getPost('codFunAlterar');
        $nomeFun = $request->getPost('nomeFun');
        $foneFun = $request->getPost('foneFun');

        $FuncionarioModel = new \App\Models\FuncionarioModel();
        $registros = $FuncionarioModel->find($codFunAlterar);

        if ($request->getPost('nomeFun') && $request->getPost('foneFun')) {
            $registros->nomeFun = $nomeFun;
            $registros->foneFun = $foneFun;
            $FuncionarioModel->update($codFunAlterar, $registros);

            return redirect()->to(base_url('Home'));
        }

        $data['funcionario'] = $registros;
    }


    public function funcionarioExcluir($codFunDeletar)
    {
        if (is_null($codFunDeletar)) {
            return redirect()->to(base_url('UsuarioController/todosUsuarios'));
        }

        $FuncionarioModel = new \App\Models\FuncionarioModel();

        if ($FuncionarioModel->delete($codFunDeletar)) {
            //return redirect()->to(base_url('UsuarioController/todosUsuarios'));
        } else {
            //return redirect()->to(base_url('UsuarioController/todosUsuarios'));
        }
    }   
}
