<?php
namespace app\Models;
class ItemModel extends Model
{
    protected $item_id;
    protected $item_name;
    protected $item_img;
    protected $item_prix;
    protected $item_decription;
    public function  __construct()
    {
        
        parent::__construct();
        $this->table="product";
    }
    
    public function show($index)
    {
        $sql_query = "select p.`produit_id`,p.`produit_img`,p.`produit_name`,p.produit_prix,p.`produit_description`,c.categorie_nom,p.`produit_quantity`,p.`produit_etat`

        from product p join categories  c on c.categorie_id=p.`produit_categorie`  where p.produit_id=".$index;
        $result = $this->conn->query($sql_query);
        return $result->fetch_all();
    }
    public function showByLimit($start,$end)
    {
        $sql_query = "select * from ".$this->table." order by `produit_id`DESC limit ".$start.",".$end;
        $result = $this->conn->query($sql_query);
        return $result->fetch_all();
    }
    public function showbyCategories($produit_categories,$start,$end)
    {
        $sql_query = "select * from ".$this->table." where produit_categorie=".$produit_categories ." order by `produit_id`DESC limit ".$start.",".$end;
        $result = $this->conn->query($sql_query);
        return $result->fetch_all();
    }
    public function create()
    {
        echo "you entered item:".$index;
    }
    public function delete($index)
    {
        //do something
    }
    public function search($index)
    {
        //do something
    }

    public function update($index)
    {
        //do something
    }
}
?>