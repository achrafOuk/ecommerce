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
    public function  __construct()
    {
        parent::__construct();
        $this->table = "compte";
    }

    public  function login($user, $password)
    {
        $sql_query = "SELECT `Compte_nom`,`Compte_passwd`,`Compte_type` FROM `compte` WHERE `Compte_nom`=? ";
        $stmt = $this->conn->prepare($sql_query);
        $stmt->bind_param("s", $user);
        $stmt->execute();
        $result = $stmt->get_result(); // get the mysqli result
        $user = $result->fetch_assoc();
        return $user;
    }
    private function isDataExiste($champ, $data)
    {
        $sql_query = "SELECT {$champ} FROM `compte` WHERE {$champ}=? ";
        $stmt = $this->conn->prepare($sql_query);
        $stmt->bind_param("s", $data);
        $stmt->execute();
        $result = $stmt->get_result(); // get the mysqli result
        $user = $result->fetch_assoc();
        if (count($user) > 0) return true;
        return false;
    }
    public  function singin($user, $email, $password)
    {
        //check if user exists

        if ($this->isDataExiste("Compte_nom", $user)) {
            echo "User already exists!";
        }
        if ($this->isDataExiste("Compte_email", $email)) {
            echo "Mail already exists!";
        } else {
            $password = password_hash($password, PASSWORD_DEFAULT);
            $sql_query = "INSERT INTO `compte`(`Compte_nom`, `Compte_passwd`, `Compte_email`,`Compte_type`) VALUES (?,?,?,'Utilisateur')";
            $stmt = $this->conn->prepare($sql_query);
            $stmt->bind_param("sss", $user, $password, $email);
            $stmt->execute();
            $stmt->close();
            if ($stmt->execute()) echo "inscreption is done!";
        }
        //insert it to database


    }
}
