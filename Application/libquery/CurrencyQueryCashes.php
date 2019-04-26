<?php
/**
 * Created by PhpStorm.
 * User: avtorpc
 * Date: 2019-04-25
 * Time: 15:38
 */

namespace Application\libquery;

class CurrencyQueryCashes implements Query{

    public function getCurrency( $conn ) {
        // выполняем подключение к кешу
        print_r( $conn->get());
    }

    public function setCurrency( $currency, $conn ) {
        print_r( $conn->get());
        // устанавливаем валюту в базу
    }
}