<?php 

    require_once "./vendor/autoload.php" ;

    use Egulias\EmailValidator\EmailValidator;
    use Egulias\EmailValidator\Validation\RFCValidation;

    $email = "nadir.inab.dev@gmail.com" ;
    $validator = new EmailValidator() ;
    $validator->isValid($email, new RFCValidation()) ;
   


