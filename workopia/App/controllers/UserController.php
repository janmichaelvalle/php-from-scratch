<?php 

namespace App\Controllers;

use Framework\Database;
use Framework\Validation;

class UserController {
  protected $db;

  public function __construct()
  {
    $config = require basePath('config/db.php');
    $this->db = new Database($config);
  }

  /**
   * Show the login page
   * 
   * return void
   */

   public function login() {
    loadView('users/login');
   }

   /**
   * Show the register page
   * 
   * @return void
   */

   public function create() {
    loadView('users/create');
   }

   /** 
    * Store user in database
    * 
    * @return void
    */
    public function store() {
      $name = $_POST['name'];
      $email = $_POST['email'];
      $city = $_POST['city'];
      $state = $_POST['state'];
      $password = $_POST['password'];
      $passwordConfirmation = $_POST['password_confirmation'];

      $errors = [];

      // Validation

      if(!Validation::email($email)) {
        $errors['email'] = 'Please enter a valid email address';
      }
      
      inspectAndDie('Store');
    }


}