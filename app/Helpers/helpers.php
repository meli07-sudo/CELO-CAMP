<?php

if(!function_exists("getRightGreetings")){
    function getRightGreetings(){
        return date("H") <= 12 ? "Bonjour":"Bonsoir";
    }
}
if(!function_exists("alert")){
    function alert(){
        // return date("H") <= 12 ? "Bonjour":"Bonsoir";
    }
}