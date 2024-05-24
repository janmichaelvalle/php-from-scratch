<?php

/**
 * Get the base path 
 * 
 * @param string $path
 * @return string
 */

 /* The basePath function is a utility to create full paths by combining the directory of the current script with a specified relative path. This helps in managing filesystem paths dynamically based on the script's location */

 function basePath($path = '') {
  return __DIR__  . '/' . $path;

 }
