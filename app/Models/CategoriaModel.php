<?php namespace App\Models;
  
use CodeIgniter\Model;
  
class CategoriaModel extends Model
{
    protected $table = 'categoria';
    protected $primaryKey = 'idcategoria';
    protected $allowedFields = ['nome'];

    protected $validationRules    = [
        'nome'     => 'required'      
    ];
    
    
}