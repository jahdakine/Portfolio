<?php
HTML::macro('br', function($repeat = 1)
{
  $out = '<br />' . PHP_EOL;
  
  for($i = 1; $i < $repeat; $i++)
    $out .= '<br />' . PHP_EOL;
  
  return $out;
});
