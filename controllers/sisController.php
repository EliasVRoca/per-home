<?php
class SisController{
    public function main(){
        echo blade()->run('/src/sis/main.blade.php');
    }
    public function registro_alquiler(){
        echo blade()->run('/src/sis/registroalquiler.blade.php');
    }
}