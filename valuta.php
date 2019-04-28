<?php
/**
 * Created by PhpStorm.
 * User: avtorpc
 * Date: 2019-04-25
 * Time: 15:25
 */
namespace Application;

use Component\Component;
use Libquery\CurrencyQueryCashes;
use Libquery\CurrencyQueryDB;
use Libquery\CurrencyQueryHTTP;

require_once 'vendor/autoload.php';

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

class MiniVen extends Component {

    use \Component\Currency;

    public function cost (){
        //echo "<pre>"; var_dump( new CurrencyQueryCashes($this->cash_connect) ); die;
        $a = new CurrencyQueryCashes($this->cash_connect);
        $b = new CurrencyQueryDB($this->db_connect);
        $c = new CurrencyQueryHTTP($this->http_connect);
        return $this->getCurrency( $a, $b, $c ) . 1000000;
    }
}




$car = new MiniVen();

print_r( $car->cost() );

