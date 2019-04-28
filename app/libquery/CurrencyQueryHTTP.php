<?php
/**
 * Created by PhpStorm.
 * User: avtorpc
 * Date: 2019-04-25
 * Time: 15:39
 */

namespace Libquery;

class CurrencyQueryHTTP implements Query{

    private $conn;

    public function __construct( $conn ) {
        $this->conn = &$conn;
    }

    public function getCurrency( ) {
        // выполняем подключение к удаленному сайту
        print_r( $this->conn->get());
    }

    public function setCurrency( $currency ) {
      return null;
    }
}