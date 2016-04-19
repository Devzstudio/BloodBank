<?php

function alert($title = '', $message= '' , $button = 'false')
{
	$flash = app('App\Http\Flash');
	if(func_num_args() == 0)
	return $flash;

	return $flash->info($title,$message,$button);
}