<?php

//////////////////////////////////////////////////////////////////////
function cin_str($input_string){
//removes all html tags//
$input_string = filter_var($input_string, FILTER_SANITIZE_STRING);
//removes all white spaces before and after string//
$input_string = trim($input_string);
return $input_string;
}
///////////////////////////////////////////////////////////////////////
function cin_float($input_float){
//removes white spaces before and after the float//
$input_float = filter_var($input_float, FILTER_VALIDATE_FLOAT);
return $input_float;
}
//////////////////////////////////////////////////////////////////////

 ?>
