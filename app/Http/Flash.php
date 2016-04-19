<?php
namespace App\Http;

class Flash
{
  public function create($title , $message , $level = 'info' , $button = 'false')
  {
  	session()->flash('flash_message', [
  		'title' => $title,
  		'message' => $message,
  		'level' => $level,
      'button' => $button
  		]);	
  }

public function info($title,$message, $button = 'false')
{
	return $this->create($title,$message,'info',$button);
}

public function success($title,$message, $button = 'false')
{
	return $this->create($title,$message,'success',$button);
}
public function error($title,$message, $button = 'false')
{
	return $this->create($title,$message,'error',$button);
}




}