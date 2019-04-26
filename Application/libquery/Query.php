<?php
/**
 * Created by PhpStorm.
 * User: avtorpc
 * Date: 2019-04-25
 * Time: 15:40
 */
namespace Application\libquery;

interface Query {
    public function getCurrency( $conn );
    public function setCurrency( $currency, $conn);
}
