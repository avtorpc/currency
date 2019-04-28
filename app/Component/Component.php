<?php
/**
 * Created by PhpStorm.
 * User: avtorpc
 * Date: 2019-04-25
 * Time: 16:26
 */
namespace Component;

use Core\cashConnect;
use Core\dbConnect;
use Core\httpConnect;

class Component {
  public $cash_connect;
  public $db_connect;
  public $http_connect;

  public function __construct() {
      $this->cash_connect = new cashConnect();
      $this->db_connect = new dbConnect();
      $this->http_connect = new httpConnect();
  }

}