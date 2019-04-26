<?php
/**
 * Created by PhpStorm.
 * User: avtorpc
 * Date: 2019-04-25
 * Time: 16:09
 */

namespace Application\libquery;

trait Currency{

    public function getCurrency ( $cash, $db, $http ){
        $currency = $cash->getCurrency( $cash );
        if( !is_null( $currency )) {

            return $currency;
        } else {
            $currency = $db->getCurrency( $db );
            if( !is_null( $currency )) {
                $cash->setCurrency($currency);

                return $currency;
            } else {
                $currency = $http->getCurrency( $http);
                if( !is_null( $currency )) {
                    $db->setCurrency($currency);

                    return $currency;
                }
            }
        }
    }
}