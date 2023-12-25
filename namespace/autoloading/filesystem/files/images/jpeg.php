<?php
namespace CloudStorage\FileSystem\Files\Images;
use \CloudStorage\FileSystem\Files\Contracts\Imagecontract;
use \CloudStorage\Mail\Mailer;
class Jpeg implements Imagecontract{
    function getDimension(){
        (new Mailer())->sendMail();
        return "100x100";
    }
}