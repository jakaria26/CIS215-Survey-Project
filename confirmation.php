<?php
function password_checker($password){
    if(strln($password)<8){
        return FALSE;
    }
    else{
        return True;
    }
}

?>