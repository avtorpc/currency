<?php
/**
 * Created by PhpStorm.
 * User: avtorpc
 * Date: 2019-04-25
 * Time: 15:25
 */
namespace Application;

class MiniVen extends Component {

    use Componemt\Currency;

    public function cost (){
        return $this->getCurrency($this->cash, $this->db, $this->http ) . 1000000;
    }
}

$car = new MiniVen();

print_r( $car->cost() );
