<?php

class MainController
{

  public static function query_dispatcher($query, $inputs = false)
  {
    if
    ($query === 'init')
    {
      $response = SignController::sign_forms();
    }
    elseif ($query === 'sign_in_form')
    {
      $response = SignController::sign_in($inputs);
    }
    elseif ($query === 'sign_up_form')
    {
      $response = SignController::sign_up($inputs);
    }
    else
    { // if ($query === '')
      $response = SignController::sign_forms();
    }

    if (empty($response) === FALSE)
    {
      echo json_encode($response);
    }
  }
}
