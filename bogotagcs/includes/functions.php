<?php

function cloudheaders()
{
    $array = array();
    foreach (getallheaders() as $name => $value) {
        $array[$name] = $value;
      }
      return $array;
}

?>