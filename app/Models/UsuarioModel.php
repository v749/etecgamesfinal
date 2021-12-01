<?php
 
namespace App\Models;

use CodeIgniter\Model;

class UsuarioModel extends Model{

    protected $table ='usuario_tb';
    protected $primaryKey='codusu';
    protected $allowedFields=['emailusu','senhaUsu'];
    protected $returnType='object';
}