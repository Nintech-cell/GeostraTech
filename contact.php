<!DOCTYPE html>
<html>
    <head>
    <title></title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/contact.css">
    </head>
    <body>
        <?php

        if(!empty($_POST["submit"])){
        $username = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];
        $tomail = 'fares.amriche@gmail.com';

        $mail_header = "Name: " . $username .
        "\r\n Email: " . $email .
        "\r\n Phone: " . $phone .
        "\r\n Message: " . $message . "\r\n";

       if(mail($tomail, $username, $mail_header)){
            $script_msg = "<script> Nous vous remercions pour votre message ! </script>";
       }
        header("Location: index.php");
       }
    
        ?>
        <header>
        <div class="nav justify-content-center">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="/"><i class="fa fa-globe" aria-hidden="true"></i> &nbsp;Geostratech</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="presentation.php">Qui sommes-nous ?</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/">Articles</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="team.php">Notre équipe</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link active" href="admin">Espace abonnés</a>
                            </li>
                        </ul>
                        </div>
                    </div>
                </nav>
        </div>
        </header>
        
            <div class="container"></div>
                
                <hr class="container">
                <a href="index.php"><img src="./imgs/geostrat.png" class="rounded mx-auto d-block" alt="Geostratech" style=width:10%></a>
                <br>
                <h1 class="text-center">Geostratech</h1>
                <h3 class="text-center">Site d'informations et de publications géopolitiques</h3>
                <hr class="container">
            </div>
    

       
        <section class = "contact">
            <div class="content">
                <h2>Message de l'équipe "Sciences-Ops"</h2>
                <hr class= "solid">
                <p class="text">L'équipe de l'association "Sciences Ops", dans le cadre de sa politique de publication est prête à publier les recherches de toute personne qui souhaiterait participer à la diffusion du savoir dans le monde francophone.
                En outre, elle se tient à la disposition des jeunes chercheurs, ou des praticiens, qu'elle encourage à envoyer les productions et publications, sous format word ou pdf néanmoins.
                Les productions sont analysées par un comité scientifique qui se chargera d'émettre son avis motivé.
                Les domaines concernés sont les suivants :</p> 
                <p class="text">Droit et justice, Sciences politiques, économie et finance, gestion administrative et entreprise, géopolitique et géostratégie, modes de gouvernance et de gouvernement, relations internationales.
            </p>
            </div>
            <div class="container">
                

                <!-- Formulaire -->
                <div class="contact-form"  background="./imgs/card1.jpg">
                    <form action ="" method="post" autocomplete="off">
                        <h2>Envoyez votre message</h2>
                        <div class="input">
                            <input type="text" name="name" required="required">
                            <span>Nom et prénom</span>
                        </div>
                        <div class="input">
                            <input type="text" name="email" required="required">
                            <span>E-mail</span>
                        </div>
                        <div class="input">
                            <input type="tel" name="phone" required="required">
                            <span>Téléphone</span>
                        </div>
                        <div class="input">
                            <textarea required ="required" name="message"></textarea>
                            <span>Votre message</span>
                        </div>
                        <div class="input">
                            <input type="submit" name="submit" class="btn btn-info" name="" value="Envoyer">
                            <?php if(!empty($script_msg)){ ?>
                                <div class="success">
                                    <strong> <?php echo $script_msg; ?></strong>
                                </div>
                            <?php } ?>
                            
                            
                        </div>
                    </form>
                </div>
            </div>
        </section>
           <!--- Footer --->
           <?php 
            require_once "includes/footer.php"
            ?>
        <script src="https://kit.fontawesome.com/d529cb77ad.js" crossorigin="anonymous"></script>
    </body>
</html>