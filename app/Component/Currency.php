<?php
/**
 * Created by PhpStorm.
 * User: avtorpc
 * Date: 2019-04-25
 * Time: 16:09
 */

namespace Component;

trait Currency{

    public function getCurrency ( $cash, $db, $http ){
        $currency = $cash->getCurrency( );
        if( !is_null( $currency )) {

            return $currency;
        } else {
            $currency = $db->getCurrency( );
            if( !is_null( $currency )) {
                $cash->setCurrency($currency);

                return $currency;
            } else {
                $currency = $http->getCurrency( );
                if( !is_null( $currency )) {
                    $db->setCurrency($currency);

                    return $currency;
                }
            }
        }
    }
}