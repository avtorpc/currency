<?php
/**
 * Created by PhpStorm.
 * User: avtorpc
 * Date: 2019-04-26
 * Time: 22:33
 */
namespace Application\core;

class httpConnect {
    private $host = 'https://currency.ya.ru';
    private $user = 'admin';
    private $pass = '1234';
    private $connect = null;

    public function __construct() {
        return $this;
    }

    public function get() {
        if( is_null( $this->connect ) ){

            $this->connect = "Удаленный сайт";
        }
        return $this->connect;
    }
}