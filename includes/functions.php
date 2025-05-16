<?php

function check_fields(array $fields) :array
{
  $result = [];

  foreach ($fields as $field) {
    if (isset($_POST[$field])) {
      $result[$field] = trim($_POST[$field]);
    } else {
      $result[$field] = '';
    }
  }

  return $result;
}
