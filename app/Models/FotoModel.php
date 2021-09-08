<?php namespace App\Models;
  
use CodeIgniter\Model;
  
class FotoModel extends Model
{
    protected $table = 'foto';
    protected $primaryKey = 'idfoto';
    protected $allowedFields = ['idcategoria','nome','descricao','data','foto_atual','foto_antiga'];

    protected $validationRules    = [
        'idcategoria'     => 'required',
        'nome'     => 'required',
        'descricao'     => 'required',
        'data'     => 'required'
    ];
    
    
}