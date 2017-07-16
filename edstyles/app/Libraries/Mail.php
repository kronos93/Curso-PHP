<?php
namespace App\Libraries;
use PHPMailer;
class Mail extends PHPMailer {
    public function __construct($exceptions = false){
        parent::__construct($exceptions);
        $this->isSMTP();
        $this->Host = ED_MAIL['Host'];
        $this->SMTPSecure = ED_MAIL['SMTPSecure'];
        $this->Port = ED_MAIL['Port'];
        $this->SMTPAuth = ED_MAIL['SMTPAuth'];
        $this->Username = ED_MAIL['Username'];
        $this->Password = ED_MAIL['Password'];

        $this->SMTPOptions = [
            'ssl' => [
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true,
            ]
        ];   
    }
}