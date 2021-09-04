<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                </button>
                
                <a class="navbar-brand" href="../index.php">Geostrat-admin</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                <li><a href="../index.php">Revenir sur le site</a></li>
                   
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Admin <i class="fa fa-user"></i> 
                    
                    <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="profile.php"><i class="fa fa-fw fa-user"></i> Profil</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="../includes/logout.php"><i class="fa fa-fw fa-power-off"></i>Déconnexion</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Barre des menus du panneau de configuration -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Tableau de bord </a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#posts">Articles<i class="fa fa-fw fa-arrows-v"></i><i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="posts" class="collapse">
                            <li>
                                <a href="./posts.php"> Voir tous les articles</a>
                            </li>
                            <li>
                                <a href="posts.php?pst=add_post"> Ajouter un article</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="./categories.php"><i class="fa fa-fw fa-desktop"></i> Catégories</a>
                    </li>
                    <li>
                        <a href="./comments.php"><i class="fa fa-fw fa-wrench"></i> Commentaires</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Utilisateurs <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <?php

                            if(isset($_SESSION['db_user_role'])){
                                if($_SESSION['db_user_role'] === 'admin'){

                            ?>
                            
                             <li>
                                <a href="users.php?pst=add_user">Ajouter un utilisateur</a>
                            </li>

                            <li>
                                <a href="./users.php">Voir tous les utilisateurs</a>
                            </li>

                            <?php

                                }
                            }


                            ?>
                           
                            
                        </ul>
                    </li>
                    <li class="active">
                        <a href="profile.php"><i class="fa fa-user"></i> Profil </a>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>