<?php
Flight::route('GET /', MainController::class . '->main');
Flight::group('/auth', function () {
  Flight::route('/login', authController::class . '->login');
  Flight::route('/validate', authController::class . '->validateLogin');
  Flight::route('/destroy', authController::class . '->destroyLogin');
});
Flight::group('/sis', function () {
  Flight::route('/inicio', SisController::class . '->main');
});
