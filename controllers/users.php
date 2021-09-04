<?php

require_once '../models/user.php';
require_once '../sessions/sessions.php';


class Users{

    private $userModel;

    public function __construct(){

        $this->userModel = new User;
    }

    public function register(){

        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        $data = [
            'usersName' => trim($_POST['usersName']),
            'usersEmail' => trim($_POST['usersEmail']),
            'usersUid' => trim($_POST['usersUid']),
            'usersPwd' => trim($_POST['usersPwd']),
            'pwdRep' => trim($_POST['pwdRep']),
        ];

        if(empty($data['usersName']) || empty($data['usersEmail']) || empty($data['usersUid']) ||
        empty($data['usersPwd']) || empty($data['pwdRep'])){
                flash("register", " Veuillez remplir tous les champs svp");
                redirect("../login.php");
        }

        if(!preg_match("/^[a-zA-Z0-9]*$/", $data['userUid'])){
            flash("register", "Identifiant (pseudo) invalide");
            redirect("../login.php");
        }

        if(!filter_var($data['usersEmail'], FILTER_VALIDATE_EMAIL)){
            flash("register", "votre email est invalide");
            redirect("../login.php");
        }

        if(strlen($data['usersPwd']) < 6){
            flash("register", "Mot de passe invalide, votre mot de passe doit comporter plus de six caractères");
            redirect("../login.php");
        } else if($data['usersPwd'] !== $data['pwdRep']){
            flash("register", "Les mots de passe ne correspondent pas");
            redirect("../login.php");
        }

        // Si le visiteur a entrée un mail ou un pseudo déjà existant

        if($this->userModel->findUserByEmailOrUsername($data['usersEmail'], $data['usersname'])){
            flash("register", "identifiant ou email déjà existant");
            redirect("../login.php");
        }

        // Mot de passe qui conviennent
        $data['usersPwd'] = password_hash($data['usersPwd'], PASSWORD_DEFAULT);

        //Enregistrement du "visiteur"
        if($this->userModel->register($data)){
            redirect("../register.php");
        }else{
            die("Quelque chose ne va pas ... Revoyez vos entrées.");
        }
    }

    public function login(){
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        $data=[
            'name/email' => trim($_POST['name/email']),
            'usersPwd' => trim($_POST['usersPwd'])
        ];
            // Si les champs ne sont pas remplis
        if(empty($data['name/email']) || empty($data['usersPwd'])){
            flash("login", "Veuillez remplir tous les champs svp");
            header("location: ../register.php");
            exit();
        }
            // Utilisateur non-reconnu
        if($this->userModel->findUserByEmailOrUsername($data['name/email'], $data['name/email'])){ 
            //Utilisateur reconnu
            $loggedInUser = $this->userModel->login($data['name/email'], $data['usersPwd']);
            if($loggedInUser){
                $this->createUserSession($loggedInUser);
            }else{
                flash("login", "Mot de passe incorrect");
                redirect("../register.php");
            }

        }else{
                flash("login", "Utilisateur non-reconnu");
                redirect("../register.php");

            }
        }
        public function createUserSession($user){
            $_SESSION['usersId'] = $user->usersId;
            $_SESSION['usersName'] = $user->usersName;
            $_SESSION['usersEmail'] = $user->usersEmail;
            redirect("../index.php");
        } // Si la connexion est correcte, on entre dans l'index.

            // On sort de la session et on se déconnecte
        public function logout(){
            unset($_SESSION['usersId']);
            unset($_SESSION['usersName']);
            unset($_SESSION['usersEmail']);
            session_destroy();
            redirect("../register.php");
        }
    }


$init = new Users;

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    switch($_POST['type']){
        case 'register':
            $init->register();
            break;
        case 'login':
            $init->login();
            break;
        default:
        redirect("../index.php");
    }

}else{
    switch($_GET['q']){
        case 'logout':
            $init->logout();
            break;
        default:
        redirect("../index.php");
    }
}
?>