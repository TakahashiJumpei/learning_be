<?php 
namespace model;

class UserModel extends AbstractModel{
    public string $id;
    public string $pwd;
    public string $nickname;
    public int $del_flag;

    protected static $SESSION_NAME = '_user';

    
    

}

?>