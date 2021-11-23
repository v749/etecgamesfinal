<?php
 
namespace App\Models;

use CodeIgniter\Model;

class CategoriaJogosModel extends Model
{
    protected $table ='categoriasjogos_tb';
    protected $primaryKey='codcatjogo';
    protected $allowedFields=['nomeCatjogo'];
    protected $returnType='object';
}