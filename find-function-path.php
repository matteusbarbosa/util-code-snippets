<?php
$target_function = 'mytestfunction';
try{
    $reflFunc = new \ReflectionFunction($func);
    if($func === $target_function){
        print $func.' in '.$reflFunc->getFileName() . ':' . $reflFunc->getStartLine();
    }
} catch (\ReflectionException $e){
}