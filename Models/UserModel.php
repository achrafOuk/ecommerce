<?php
namespace app\Models;
class UserModel extends Model
{
    protected $user_id;
    protected $user_name;
    protected $user_img;
    protected $user_mail;
    protected $user_password;
    protected $is_admin;
    public function  __const()
    {
        parent::__construct();
        $this->table="compte";
    }
    public static function login($user,$password)
    {
        //check if user exists
    }
    public static function singin($user,$email,$password)
    {
        //check if user exists
    }
    
}
?>