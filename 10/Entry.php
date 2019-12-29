<?php

class entry  implements ArrayAccess
{
  private $container = array();

  public function __construct()
  {
    $this->container = array(
      "one"   => 1,
      "two"   => 2,
      "three" => 3,
    );
  }

  public function offsetSet($offset, $value)
  {
    if (is_null($offset)) {
      $this->container[] = $value;
    } else {
      $this->container[$offset] = $value;
    }
  }

  public function offsetExists($offset)
  {
    return isset($this->container[$offset]);
  }

  public function offsetUnset($offset)
  {
    unset($this->container[$offset]);
  }

  public function offsetGet($offset)
  {
    return isset($this->container[$offset]) ? $this->container[$offset] : null;
  }
}

$entry = new Entry;

var_dump(isset($entry["two"]));
var_dump($entry["two"]);
unset($entry["two"]);
var_dump(isset($entry["two"]));
$entry["two"] = "A value";
var_dump($entry["two"]);
$entry[] = 'Append 1';
$entry[] = 'Append 2';
$entry[] = 'Append 3';
print_r($entry);
