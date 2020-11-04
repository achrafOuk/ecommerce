<?php
namespace app\Models;
class CategoriesModel extends Model
{
    protected $categorie_id;
    protected $categorie_name;

    public function  __const()
    {
        parent::__construct();
        $this->table = "Categories";

    }
    
    
    
}
?>