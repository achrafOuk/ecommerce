<?php
namespace app\Models;
class ItemModel extends Model
{
    protected $item_id;
    protected $item_name;
    protected $item_img;
    protected $item_prix;
    protected $item_decription;
    public function  __const()
    {
        parent::__construct();
        $table="item";
        echo __CLASS__;
        echo "create new ItemModel's instence";
    }
    public function create()
    {

    }
    public function show($index)
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