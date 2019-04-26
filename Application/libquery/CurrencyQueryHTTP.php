<?php
/**
 * Created by PhpStorm.
 * User: avtorpc
 * Date: 2019-04-25
 * Time: 15:39
 */

namespace Application\libquery;

class CurrencyQueryHTTP implements Query{

    public function getCurrency( $conn ) {
        // выполняем подключение к удаленному ресурсу
        // Получаем валюту
        print_r( $conn->get());
    }

    public function setCurrency($currency, $conn) {
        // void
    }
}