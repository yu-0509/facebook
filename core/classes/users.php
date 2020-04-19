<?php

class User {
    protected $pdo;

    function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function checkInput($valiable) {

        // 特殊文字を HTML エンティティに変換
        $valiable = htmlspecialchars($valiable);
        
        // ホワイトスペースを取り除く
        $valiable = trim($valiable);

        // クォートを除く
        $valiable = stripslashes($valiable);
        return $valiable;
    }
}