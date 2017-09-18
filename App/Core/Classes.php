<?php
/**
 * @author
 * Created by victor.
 * A.I. engineer & Software developer
 * javafolabi@gmail.com
 * On 03 06, 2017 @ 3:50 PM
 * Copyright victor © 2017. All rights reserved.
 */

namespace App\Core;


use App\Libs\Classes\Database;

abstract class Classes
{
  public $db;

  /**
   * Classes constructor.
   * Instantiates the Database object
   */
  public function __construct()
  {
    $this->db = new Database;
  }

}