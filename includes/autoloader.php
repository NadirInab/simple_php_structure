<?php

/*
|--------------------------------------------------------------------------
|                          spl_autoload_register                          |
|--------------------------------------------------------------------------
|                Q-Why use autoloading ?
|    Answer : We want to be able to load the future classes without any pain (see: dozen of include or require) .
|
|   instead of including multiple files on each page
|   spl_autoload_register will include appropriate 
|   path of your class sequentially when an 
|   object is is instantiated(new Class). 
*/

spl_autoload_register() ;

