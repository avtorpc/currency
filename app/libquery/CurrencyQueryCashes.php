<?php
/**
 * Created by PhpStorm.
 * User: avtorpc
 * Date: 2019-04-25
 * Time: 15:38
 */

namespace Libquery;

class CurrencyQueryCashes implements Query{

    private $conn;

    public function __construct( $conn ) {
        $this->conn = &$conn;
    }

    public function getCurrency( ) {
        // выполняем подключение к кешу
//        echo "<pre>"; var_dump( $this->conn );
        print_r( $this->conn->get());
        //return true;
    }

    public function setCurrency( $currency ) {
        print_r( 'Записываем ' . $this->conn->get());
        // устанавливаем валюту в кеш
    }
}