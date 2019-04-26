<?php
/**
 * Created by PhpStorm.
 * User: avtorpc
 * Date: 2019-04-26
 * Time: 21:41
 */
namespace Application\core;

class cashConnect {
    private $host = 'localhost:3333';
    private $user = 'admin';
    private $connect = null;

    public function __construct() {
        return $this;
    }

    public function get() {
        if( is_null( $this->connect ) ){

            $this->connect = "Кеш";
        }
        return $this->connect;
    }
}