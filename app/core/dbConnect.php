<?php
/**
 * Created by PhpStorm.
 * User: avtorpc
 * Date: 2019-04-26
 * Time: 22:22
 */
namespace Core;

class dbConnect {
    private $host = 'localhost:4444';
    private $user = 'admin';
    private $pass = '1234';
    private $connect = null;

    public function __construct() {
        return $this;
    }

    public function get() {
        if( is_null( $this->connect ) ){

            $this->connect = "База Данных";
        }
        return $this->connect;
    }
}