<?php
namespace PhalconRestApi\Models;

use Phalcon\Mvc\Model;

class RobotsParts extends Model
{

  public $id;
  public $robots_id;
  public $parts_id;


  /**
   * Initialize
   */
  public function initialize()
  {

    // Defines a n-1 relationship
    $this->belongsTo('robots_id', 'PhalconRestApi\Models\Robots', 'id');
    $this->belongsTo('parts_id', 'PhalconRestApi\Models\Parts', 'id');

  }

}