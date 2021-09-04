<?php
use PHPMailer\PHPMailer\PHPMailer;

require_once '../models/reset_passwordm.php';
require_once '../sessions/sessions.php';
require_once '../models/user.php';

require_once '../phpmailer/src/PHPMailer.php';
require_once '../phpmailer/src/Exception.php';
require_once '../phpmailer/src/SMTP.php';

class ResetPasswords{
    private $resetModel;
    private $userModel;
    private $mail;

    public function __construct()
    {
        $this->resetModel = new ResetPasswords;
        $this->userModel = new User;

        $this->mail = new PHPMailer();
        $this->mail->isSMTP();
        $this->mail->Host = 'smtp.mailtrap.io';
        $this->mail->SMTPAuth = true;
        $this->mail->Port = 2525;
        $this->mail->Username = '09a4d5bd280052';
        $this->mail->Password = '735e1c911ac39a';
    }

    public function sendEmail(){
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        $usersEmail = trim($_POST['usersEmail']);

        if(empty($usersEmail)){
            flash("reset", "Veuillez entrer une adresse mail");
            redirect("../forgot.php");
        }

        if(!filter_var($usersEmail, FILTER_VALIDATE_EMAIL)){
            flash("reset","Email invalide, veuillez écrire une adresse valide");
            redirect("../forgot.php");
        }
        // Recherche l'utilisateur dans la BDD(query)
        $selector = bin2hex(random_bytes(8));
        // Repère et confirme l'utilisateur dans la BDD
        $token = random_bytes(32);
        $url = 'http://localhost/Geostratech/create_new_password.php?selector='.$selector.'&
        validator='.bin2hex($token);

        // Expiration du changement de MDP
        $expires = date("U") + 1800;
        if(!$this->resetModel->deleteEmail($usersEmail)){
            die("<i class='fa fa-exclamation-triangle' aria-hidden='true'></i> Une erreur s'est glissée quelque part ...");
        }
        $hashedToken = password_hash($token, PASSWORD_DEFAULT);
        if(!$this->resetModel->insertToken($usersEmail, $selector, $hashedToken, $expires)){
            die("<i class='fa fa-exclamation-triangle' aria-hidden='true'></i> Une erreur s'est glissée quelque part ...");
        }

        $subject = "Reinitialiser votre mot de passe";
        $message = "<h3>Nous avons reçu une requête pour changer votre mot de passe. </h3>";
        $message .="<p> Voici votre lien de changement de mot de passe :</p>";
        $message .= "<a href='".$url."'>".$url."</a>";

        $this->mail->setFrom('fares.amriche@gmail.com');
        $this->mail->isHTML(true);
        $this->mail->Subject = $subject;
        $this->mail->Body = $message;
        $this->mail->addAddress($usersEmail);

        $this->mail->send();
        flash("reset", "Reportez vous à votre boite mail.", 'form-message form-message-green');
        redirect("../forgot.php");
    }
    public function resetPassword(){
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        $data = [
            'selector' => trim($_POST['selector']),
            'validator' => trim($_POST['validator']),
            'pwd' => trim($_POST['pwd']),
            'pwd-repeat' => trim($_POST['pwd-repeat'])
        ];
        $url = '../create-new-password.php?selector='.$data['selector'].'&validator='.$data['validator'];
        
        if(empty($_POST['pwd'] || $_POST['pwd-repeat'])){
            flash("newReset", "Veuillez remplir tous les champs");
            redirect($url);
        }elseif(empty($data['pwd'] || $data['pwd-repeat'])){
            flash("newReset", "les mots de passes sont différents");
            redirect($url);
        }elseif(strlen($data['pwd']) < 6){
            flash("newReset", "Mot de passe invalide");
            redirect($url);
        }

        $currentDate = date("U");
        if(!$row = $this->resetModel->resetPassword($data['selector'], $currentDate)){
            flash("newReset", "Désolé, le lien n'est plus valide");
            redirect($url);
        }

        $tokenBin = hex2bin($data['validator']);
        $tokenCheck = password_verify($tokenBin, $row->resetPwdToken);
        if(!$tokenCheck){
            flash("newReset", "Veuillez récupérer un nouveau lien");
            redirect($url);
        }

        $tokenEmail = $row->resetPwdEmail;
        if(!$this->userModel->findUserByEmailOrUsername($tokenEmail,$tokenEmail)){
            flash("newReset", "Il y a une erreur quelque part");
            redirect($url);
        }

        $newPwdHash = password_hash($data['pwd'], PASSWORD_DEFAULT);
        if(!$this->userModel->resetPassword($newPwdHash,$tokenEmail)){
            flash("newReset", "Il y a une erreur quelque part");
            redirect($url);
        }

        if(!$this->resetModel->deleteEmail($tokenEmail)){
            flash("newReset", "Il y a une erreur quelque part");
            redirect($url);
        }

        flash("newReset", "Mot de passe mis à jour", 'form-message form-message-green');
        redirect($url);
    }
}


$init = new ResetPasswords;

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    switch($_POST['type']){
        case 'send':
            $init->sendEmail();
            break;
        case 'reset':
            $init->resetPassword();
            break;
        default:
        header('Location: ../register.php');
    }
}else{
    header("location: ../register.php");
}