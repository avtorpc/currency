<?php
/**
 * Created by PhpStorm.
 * User: avtorpc
 * Date: 2019-04-25
 * Time: 15:39
 */

namespace Libquery;

class CurrencyQueryDB implements Query{

    private $conn;

    public function __construct( $conn ) {
        $this->conn = &$conn;
    }

    public function getCurrency( ) {
        // выполняем подключение к базе данных
        print_r( $this->conn->get());
        //return true;
    }

    public function setCurrency( $currency ) {
        print_r( $this->conn->get());
        // устанавливаем валюту в базу
    }
}