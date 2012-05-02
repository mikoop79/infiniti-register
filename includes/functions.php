<?php


function mysqlclean($array, $index, $maxlength, $connection) {
  if (isset($array["{$index}"])) {
     $input = substr($array["{$index}"], 0, $maxlength);
     $input = mysql_real_escape_string($input, $connection);
     return ($input);
  }
  return NULL;
}