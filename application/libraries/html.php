<?php 
class HTML extends Laravel\HTML {
    
    /**
     * Dynamically handle calls to custom macros.
     * Modified to look inside macros folder inside app for lazy loading macros
     *
     * @param  string  $method
     * @param  array   $parameters
     * @return mixed
     */
    public static function __callStatic($method, $parameters)
    {
        if (isset(static::$macros[$method]))
        {
            return call_user_func_array(static::$macros[$method], $parameters);
        }else{
            //check if macros is loadable from macros directory
            $macros_file = path('app').'macros'.DS.$method.'.php';
            if(file_exists($macros_file)){
                require_once($macros_file);
                return call_user_func_array(static::$macros[$method], $parameters);
            }
            
        }
        
        throw new \Exception("Method [$method] does not exist.");
    }
}