<?php
namespace PhalconRestApi\Models;

use Phalcon\Mvc\Model;

class Parts extends Model
{

  public $id;
  public $name;
  public $data;


  /**
   * Initialize
   */
  public function initialize()
  {

    // Defines a 1-n relationship
    // $this->hasMany('id', 'MyModel', 'my_model_id', array('alias' => 'MyModels'));

    // Defines a n-1 relationship
    // $this->belongsTo('id', 'MyModel', 'my_model_id', array('alias' => 'MyModels'));

    // Defines a n-n relationship
    $this->hasMany('id', 'PhalconRestApi\Models\RobotsParts', 'parts_id', array('alias' => 'RobotsParts'));

  }


  /**
   * Before save event
   */
  public function beforeSave()
  {

    $this->data = json_encode($this->data);

  }


  /**
   * After save event
   */
  public function afterSave()
  {

    $this->data = json_decode($this->data);

  }


  /**
   * After load event
   */
  public function afterLoad()
  {

    $this->data = json_decode($this->data);

  }


  /**
   * Additional methods...
   */

}