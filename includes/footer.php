    
    <!-- Footer -->
        <footer class="text-center text-lg-start text-white" style="background-color: #1c2331">
            <!-- Section: Social media -->
            <section class="d-flex justify-content-between p-4"style="background-color: #1c2331">
            <!-- Left -->
            <div class="container">
            </div>
            </section>
            <!-- Section: Social media -->

            <!-- Section: Links  -->
            <section class="">
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                <!-- Grid column -->
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                    <!-- Content -->
                    <h6 class="text-uppercase fw-bold">Geostratech - Association Sciences Ops</h6>
                    <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #7c4dff; height: 2px"/>
                        
                    <p> Le site Geostratech est une émanation de l'association Sciences Ops
                    qui oeuvre pour la diffusion des travaux des chercheurs francophones.</p>

                    <!-- Section: réseaux sociaux -->
                    
            
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold">Pages</h6>
                    <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #7c4dff; height: 2px"/>
                    <p>
                    <a href="index.php" class="text-white">Accueil</a>
                    </p>
                    <p>
                    <a href="team.php" class="text-white">Notre équipe</a>
                    </p>
                    <p>
                    <a href="presentation.php" class="text-white">Qui sommes-nous ?</a>
                    </p>
                    <p>
                    <a href="contact.php" class="text-white">Contact</a>
                    </p>
                    <p>
                    <a href="legal.php" class="text-white">Mentions légales</a>
                    </p>

                    <?php 
                                if(isset($_SESSION['db_user_role'])){
                                    if(isset($_GET['p_id'])){
                                        $P_ID = $_GET['p_id'];
                                        echo "<p><a href='admin/posts.php?pst=edit_post&p_id={$P_ID}'> Modifier un article </a></p>";
                                    }
                                }
                    ?>
                    






                </div>
                <!-- Colonne Contact -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                    <!-- Liens -->
                    <h6 class="text-uppercase fw-bold">Contact - Association</h6>
                    <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #7c4dff; height: 2px"/>
                    <p><i class="fas fa-home mr-3"></i> 10 Rue des Universités 75 006 Paris Cedex</p>
                    <p><i class="fas fa-envelope mr-3"></i><a href="" class="text-decoration-none"> SciencesOps_Paris@gmail.com</a></p>
                    <p><i class="fas fa-phone mr-3"></i> + 0 892 892 892</p>
                    <p><i class="fas fa-print mr-3"></i> + 01 48 48 48 48</p>
                </div>
                <!-- Colonne contact div-->
                </div>
                <!-- Grid row -->
            </div>
            </section>

            <section>
                <div class="center">
                    <h6 class="d-flex justify-content-center"><p class="text-uppercase fw-bold">Retrouvez nous sur les réseaux sociaux</p></h6>      
                    <div class="container">
                            <div class="d-flex justify-content-center" width="margin-left: 20px;">
                                <a href="https://www.zdnet.fr/actualites/chez-facebook-l-ia-avance-pour-mieux-moderer-les-contenus-39927773.htm" class="text-white me-4">
                                <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="https://twitter.com/?lang=fr" class="text-white me-4">
                                <i class="fab fa-twitter"></i>
                                </a>
                                <a href="mailto:fares.amriche@gmail.com" class="text-white me-4">
                                <i class="fab fa-google"></i>
                                </a>
                                <a href="https://www.linkedin.com/in/fares-amriche/" class="text-white me-4">
                                <i class="fab fa-linkedin"></i>
                                </a>
                                <a href="https://github.com/Nintech-cell" class="text-white me-4">
                                <i class="fab fa-github"></i>
                                </a>
                            </div>
                        </div>
                </div>
            </section>
            <br>
            
            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
                <h5>Fares Amriche © 2020 Copyright : </h5>
            <a class="text-white" href="https://www.linkedin.com/in/fares-amriche/"> <h5>Tous droits réservés</h5></a>
            </div>
            <!-- Copyright -->
        </footer>
        <!-- Footer -->
 
    </div>
    <!-- /.container -->

    <!-- jQuery du document -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <script src="https://kit.fontawesome.com/d529cb77ad.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    
</body>

</html>
