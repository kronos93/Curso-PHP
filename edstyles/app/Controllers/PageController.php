<?php

namespace App\Controllers;

use App\Models\Article;
use App\Libraries\View;
use App\Libraries\Mail;
use Gregwar\Captcha\CaptchaBuilder;

class PageController
{
    public function index()
    {
        $articles = Article::all();
        View::render('pages/index', compact('articles'));
    }
    public function about()
    {
        View::render('pages/about');
    }
    public function contact()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = trim($_POST['name']);
            $email = trim($_POST['email']);
            $message = htmlentities(trim($_POST['message']));
            $inputs = compact('name', 'email', 'message');
            $captchaInput = trim($_POST['captcha']);
            if ($name == '') {
                $this->contactWithError('El campo nombre es obligatorio', $inputs);
            } elseif ($email == '') {
                $this->contactWithError('El campo email es obligatorio', $inputs);
            } elseif (empty($message)) {
                $this->contactWithError('El campo mensaje es obligatorio', $inputs);
            } elseif ($captchaInput !== $_SESSION['phrase']) {
                $this->contactWithError('El texto no coincide con la imagen', $inputs);
            }
            
            $mail = new Mail();
            if (!$mail->validateAddress($email)) {
                $this->contactWithError('El email no es valido', $inputs);
            }

            $mail->setFrom(ED_MAIL['AddressFrom'], ED_MAIL['NameFrom']);
            $mail->addAddress(ED_MAIL['AddressInbox'], ED_MAIL['NameInbox']);
            
            $mail->subject = "ED Styles: {$name} <{$email}>";
            $mail->Body = nl2br($message);

            if ($mail->send()) {
                View::render('pages/success');
            } else {
                $this->contactWithError('El mensaje no pudo ser enviado. Error'.$mail->ErrorInfo, $inputs);
            }
        } else {
            $captcha = new CaptchaBuilder;
            $captcha->build();
            $_SESSION['phrase'] = $captcha->getPhrase();
            View::render('pages/contact', compact('captcha'));
        }
    }
    private function contactWithError($errorMessage, array $variables = [])
    {
        $captcha = new CaptchaBuilder;
        $captcha->build();
        $_SESSION['phrase'] = $captcha->getPhrase();
        $variables['captcha'] = $captcha;
        $variables['errorMessage'] = $errorMessage;
        View::render('pages/contact', $variables);
        exit;
    }
}
