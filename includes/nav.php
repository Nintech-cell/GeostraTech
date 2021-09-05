
<?php 
    require_once "includes/db.php";
    session_start();
?>

<div class="container">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="/"><i class="fa fa-globe" aria-hidden="true"></i> &nbsp; Geostratech</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="presentation.php">Qui sommes-nous ?&nbsp;</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/">Articles&nbsp;</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="team.php">Notre équipe&nbsp;</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link active" href="admin">Espace abonnés&nbsp;</a>
                            </li>
        
                                    <!------- S'affiche si un admin est connecté-------->

                                <?php 
                                if(isset($_SESSION['db_user_role'])){
                                    if(isset($_GET['p_id'])){
                                        $P_ID = $_GET['p_id'];
                                        echo "<li class ='nav-item'><a class='nav-link' href='admin/posts.php?pst=edit_post&p_id={$P_ID}'> Modifier un article </a></li>";
                                    }
                                }
                                ?>

                                <?php if(!isset($_SESSION['usersId'])) : ?>
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="login.php">S'inscrire&nbsp;</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="register.php"><i class="fa fa-sign-in" aria-hidden="true"></i> &nbsp;Se connecter</a>
                                </li>
                                <?php else: ?>
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="./controllers/users.php?q=logout"><i class="fa fa-sign-out" aria-hidden="true"></i>&nbsp;Se déconnecter&nbsp;</a>
                                </li>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                </nav>
</div>

<!----------- Logo site ----------->
<a href="/"><img src="imgs/geostrat.png" class="img-fluid img-thumbnail center-block" style=width:10%></a>
<hr class="container">
<h1 class="text-center">Geostratech</h1>
<h3 class="text-center">Site d'informations et de publications géopolitiques</h3>
<hr class="container">
