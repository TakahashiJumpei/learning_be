<?php 
namespace model;

use lib\Msg;

class TopicModel extends AbstractModel {

    public int $id;
    public string $title;
    public int $published;
    public int $views;
    public int $likes;
    public int $dislikes;
    public string $user_id;
    public string $nickname;
    public int $del_flg;

    protected static $SESSION_NAME = '_topic';

    public function isValidId() {

        return static::validateId($this->id);
        
    }

    public static function validateId($val) {
        $res = true;

        if (empty($val) || !is_numeric($val)) {

            Msg::push(Msg::ERROR, 'パラメータが不正です。');
            $res = false;

        }

        return $res;
    }




}

