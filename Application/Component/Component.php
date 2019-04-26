<?php
/**
 * Created by PhpStorm.
 * User: avtorpc
 * Date: 2019-04-25
 * Time: 16:26
 */
namespace Application/Component;

use core\cashConnect;
use core\dbConnect;
use core\httpConnect;

class Component {
  public $cash;
  public $db;
  public $http;

  public function __construct() {
      $this->cash = new cashConnect();
      $this->db = new dbConnect();
      $this->http = new httpConnect();
  }

}