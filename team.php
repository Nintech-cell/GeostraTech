<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <!---- Bootstrap ---->
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <link rel="stylesheet" media="screen" type="text/css" href="./css/team.css">
    </head>
        <title>Notre équipe</title>
        <body>

        <!----- Header -------->

        <?php 
        require_once "includes/header.php"
        ?>


        <!-- Barre de navigation -->

        <div class="container">
        <?php 
        require_once "includes/nav.php"
        ?>
        </div>


       
        
            <!---Section Professeurs--->
            <div class="text-center">
                <div class="container">
                    <h4 class="text-center">L'association Sciences "Ops" </h4>
                        <hr>
                            
                                <blockquote class="blockquote">
                                    <p class="mb-0"><h4>“Le savoir n'est pas une vulgaire matière première. Il ne vient jamais à épuisement.</h4></p>
                                    <p class="mb-0"> <h4>Au contraire, il s'accroît toujours grâce à la diffusion des connaissances.”</h4></p>
                                    <br>
                                    <footer class="blockquote-footer"><h5> Daniel J. Boorstin </h5>
                                    <cite title="Source Title"><h5>Universitaire, juriste et sociologue américain du XXe siècle</cite></h5></footer>
                                </blockquote>
                            
                </div>
            </div>
                        <!---------- Première ligne : Professeurs ---------->
                    <section id="team" class="section-bg">
                        <div class="container">
                        <hr>
                        
                        <div class="section-title">
                            <h2 id="h2" class="display-5"> Comité scientifique</h2>
                        </div>
                        <br>
                        <div class="row">
                        <!---------   Professeur n°1   --------->
                            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                                <div class="member">
                                    <div class="member-img">
                                        <img src="imgs/prof1.jpg" class="img-fluid" alt="prof1">
                                        <div class="social">
                                            <div class="member-info">
                                                <br>
                                                <h3>Eric Thorry</h3>
                                                <span>Maître de Conférences en Histoire européenne</span>
                                                <p><span>Université de Paris</span></p>
                                            </div>
                                        </div>
                                    </div>                          
                                </div>
                            </div>

                            <!---------- Professeur n°2 ---------->

                            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                                <div class="member">
                                    <div class="member-img">
                                        <img src="imgs/prof2.jpg" class="img-fluid" alt="prof1">
                                        <div class="social">
                                            <div class="member-info">
                                            <br>
                                                <h3>Gérard Chastellain</h3>
                                                <span>Professeur de Sciences politiques</span>
                                                <p><span>Université de Paris</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!----------Professeur n°3---------->

                            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                                <div class="member">
                                    <div class="member-img">
                                        <img src="imgs/prof3.jpg" class="img-fluid" alt="prof1">
                                        <div class="social">
                                            <div class="member-info">
                                            <br>
                                                <h3>Lewis Hamel</h3>
                                                <span>Professeur d'histoire des civilisations</span>
                                                <p><span>Université de Strasbourg 2</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!----------Professeur n°4---------->

                            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                                <div class="member">
                                    <div class="member-img">
                                        <img src="imgs/prof4.jpg" class="img-fluid" alt="prof1">
                                        <div class="social">
                                            <div class="member-info">
                                            <br>
                                                <h3>Eddy San Antonio</h3>
                                                <span>Maître de conférences en Sciences économiques</span>
                                                <p><span>Université de Yale</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!------- Fin des div. professeurs --------->
                    </div>
                </div>
            </section>

            <!---------------- Seconde ligne : Professeurs ---------------->
            <section id="team" class="section-bg">
                        <div class="container">
                        <hr>
                        
                        <div class="section-title">
                            <h2 id="h2" class="display-5"> Chercheurs associés </h2>
                        </div>
                        <br>
                        <div class="row">
                        <!---------   Professeur n°1   --------->
                            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                                <div class="member">
                                    <div class="member-img">
                                        <img src="imgs/prof5.jpg" class="img-fluid" alt="prof1">
                                        <div class="social">
                                            <div class="member-info">
                                                <br>
                                                <h3>Hans Adelstörm</h3>
                                                <span> Chercheur associé à l'Université de Copenhague</span>
                                                <p><span>Histoire des civilisations</span></p>
                                            </div>
                                        </div>
                                    </div>                          
                                </div>
                            </div>

                            <!---------- Professeur n°2 ---------->

                            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                                <div class="member">
                                    <div class="member-img">
                                        <img src="imgs/prof6.jpg" class="img-fluid" alt="prof1">
                                        <div class="social">
                                            <div class="member-info">
                                            <br>
                                                <h3>Alain Jeromion</h3>
                                                <span>Professeur de droit international public</span>
                                                <p><span>Université de Paris Descartes</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!----------Professeur n°3---------->

                            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                                <div class="member">
                                    <div class="member-img">
                                        <img src="imgs/prof7.jpg" class="img-fluid" alt="prof1">
                                        <div class="social">
                                            <div class="member-info">
                                            <br>
                                                <h3>David Antopoulos</h3>
                                                <span>Professeur d'histoire de l'antiquité</span>
                                                <p><span>Université d'Athènes (Grèce)</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!----------Professeur n°4---------->

                            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                                <div class="member">
                                    <div class="member-img">
                                        <img src="imgs/prof8.jpg" class="img-fluid" alt="prof1">
                                        <div class="social">
                                            <div class="member-info">
                                            <br>
                                                <h3>Vasili Hansstein-Kermov</h3>
                                                <span>Maître de conférences (HDR) en Sciences de gestion</span>
                                                <p><span>Université de Moscou</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!------- Fin des div. professeurs --------->
                    </div>
                </div>
            </section>

                 <!-------Seconde section : ligne éditoriale------>
                 <section>
                
                    <div class="container">
                    <br><hr>
                        <div class="section-title">
                            <h2 id="h2" class="display-5"> Ligne éditoriale</h2>
                        </div>
                                <!--------Texte---------->
                        <p class="text-center">
                            <div class="content">
                                
                                <p class="text"> L'équipe de l'association "Sciences Ops", dans le cadre de sa politique de publication est prête à publier les recherches de toute personne qui souhaiterait participer à la diffusion du savoir dans le monde francophone.
                                 En outre, elle se tient à la disposition des jeunes chercheurs, ou des praticiens, qu'elle encourage à envoyer les productions et publications, sous format "word" ou "pdf" néanmoins.
                                Les productions sont analysées par un comité scientifique qui se chargera d'émettre son avis motivé.
                                Les domaines concernés sont les suivants : Droit et justice, Sciences politiques, économie et finance, gestion administrative et entreprise, géopolitique et géostratégie, modes de gouvernance et de gouvernement, relations internationales
                                Si vous n'avez pas reçue de réponse sous trois semaines, considérez que votre article n'a pas été considéré comme publiable</p>
                                <br>
                                <p class="text">
                                L'objectif du site, en termes de contenus, est qu'il puisse produire jusqu'à trois publications par semaine, que ce soient des articles, des cartes voire des vidéos.
                                Nécessairement s'il arrive que de trop nombreux articles aient été envoyés en même temps durant la semaine, alors seuls les articles considérés comme les plus pertinents
                                ou en rapport direct avec notre ligne éditoriale, parmi les sujets listés, seront publiés. 
                                </p>
                            </div>
                        </p>    
                    </div>   
                </section>

                    <!----------- Troisième section -------------->
                <section>
                    <div class="container">
                    <br><hr>
                        <div class="section-title">
                            <h2 id="h2" class="display-5"> Sélection des articles</h2>
                        </div>
                                <!--------Texte---------->
                        <p class="text-center">
                            <div class="content">
                                
                                <p class="text"> La sélection des articles qui seront publiés se fait par le comité scientifique de l'association Sciences Ops. Toutes les semaines, trois articles sont publiés parmi tous ceux qui auront été
                                    envoyés.
                                    Nous vous invitons à vous reporter sur notre liste des conditions ou "Règles d'or" auxquelles devront répondre les articles pour être publiés ci-après.
                                </p>
                               <br>
                                <ol class="list">
                                    <div class="text-center">
                                        <li class="list-group-item list-group-item-success" style="font-weight: bold;">Les sept "règles d'or" de Géostratech</li>
                                        <hr class="" style="font-weight: bold;">
                                    </div>
                                    <li class="list-group-item list-group-item-success">1 - Format Word ou PDF</li>
                                    <li class="list-group-item list-group-item-success">2 - Police d'écriture : Times New Roman</li>
                                    <li class="list-group-item list-group-item-success">3 - Interligne : 1.5 / Taille de police :12</li>
                                    <li class="list-group-item list-group-item-success">4 - 15 pages minimum à 30 pages maximum - Trois images maximums acceptés</li>
                                    <li class="list-group-item list-group-item-success">5 - Les thématiques abordées dans l'article doivent ête mentionnés au début de votre article.</li>
                                    <li class="list-group-item list-group-item-success">6 - Doivent être référencés en tête de première page : Nom, prénom, profession ou centre de recherche associé, ainsi que niveau d'études (ce dernier élément, à titre simplement indicatif).</li>
                                    <li class="list-group-item list-group-item-success">7 - L'article est référencé par des sources de qualités, citées en bas de page.</li>
                                </ol>
                                <br><br>
                                <p class="text"> Tout article ne respectant pas ces conditions de formes élémentaires ne sera pas analysé. En effet, si l'association Sciences Ops
                                    oeuvre pour la diffusion des publications francophones, elle met en place une écremage strict des publications, censée garantir le sérieux des candidatures d'une part et de la ligne éditoriale de l'autre.
                                    Par ces conditions, nous esperons pouvoir publier le plus grand nombre d'article de qualités et permettre aux chercheurs professionnels, mais aussi aux jeunes chercheurs en devenir de publier leurs travaux 
                                    dans le strict respect des conditions de fond et de forme, demandées pour la publication au sein des revues papiers. 
                                </p>

                                <p class="text"> Si vous souhaitez plus de détails sur les objectifs de l'association, nous vous invitons à consulter notre rubrique <a href="presentation.php">"Qui sommes-nous ?"</a> ou alors nous envoyer
                                directement un <a href="mailto : fares.amriche@gmail.com">message</a>.
                                </p>
                            </div>
                        </p>    
                    </div> 
                    <div class="container">
                    <br><hr>
                        <div class="section-title">
                            <h2 id="h2" class="display-5"> Publication sur le site</h2>
                        </div>
                                <!--------Texte---------->
                        <p class="text-center">
                            <div class="content">
                                
                                <p class="text"> Si votre article est choisi, alors un membre du comité scientifique se chargera d'entrer en contact avec vous pour vous en informer.
                                    En outre, il vous sera également proposé de rejoindre l'association "Sciences Ops" afin de vous permettre de participer aux tables-rondes et conférences
                                    dans les domaines pour lesquels vous souhaiter vous former.
                                </p>
                                <br>
                                <p class="text"> Il vous sera enfin proposé, de manière alternative et dans des conditions trés précises, une fois après avoir adhéré à l'association, de pouvoir poster régulièrement des articles,
                                    de participer à des conférences et des tables-rondes en tant que communicant. Il vous sera ainsi donné un compte "abonné" qui vous permettra de publier directement sur notre site internet.
                                    Vous pourrez alors rejoindre le comité scientifique de notre association et participer à la bonne marche de la diffusion des recherches des chercheurs et jeunes chercheurs francophones !
                                </p>
                            </div>
                        </p>    
                    </div> 
                </section>
                <div class="container">
                    <label for="customRange3" class="form-label"></label>
                    <input type="range" class="form-range" min="0" max="5" step="0.5" id="customRange3">  
                </div>        
                <br>  
                <!------------Footer-------------->
                   
            <?php 
            require_once "includes/footer.php"
            ?>
                      

        
                
            </div>
         
        </body>
    </head>
</html>
