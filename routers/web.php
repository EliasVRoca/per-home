<?php
Flight::route('GET /', MainController::class . '->main');
Flight::group('/auth', function(){
  Flight::route('/login', authController::class . '->login');
  Flight::route('/validate', authController::class . '->validateLogin');
});



