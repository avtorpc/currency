<?php
/**
 * Created by PhpStorm.
 * User: avtorpc
 * Date: 2019-04-25
 * Time: 15:39
 */

namespace Application\libquery;

class CurrencyQueryDB implements Query{

    public function getCurrency( $conn ) {
        // выполняем подключение к базе данных
        print_r( $conn->get());
    }

    public function setCurrency( $currency, $conn  ) {
        print_r( $conn->get());
        // устанавливаем валюту в базу
    }
}