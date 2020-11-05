<?php
namespace app\Models;
class CategoriesModel extends Model
{
    protected $categorie_id;
    protected $categorie_name;

    public function  __construct()
    {
        
        parent::__construct();
        $this->table = "categories";

    }
    
    
    
}
?>