<?php
function flash($message, $alertClass='info'){
  session()->flash('message', $message);
  session()->flash('alertClass', $alertClass);

}
 ?>
