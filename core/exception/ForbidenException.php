<?php
namespace app\core\exception;

class ForbidenException extends \Exception
{
    protected $message='You dont\'t have Permission to access this page';
    protected $code=403;
    

}