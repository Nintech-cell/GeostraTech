<!DOCTYPE html>
<html lang="fr">

    <?php 
    require_once('./admin_includes/header.php')
    ?>


<body>

    <div id="wrapper">

    <?php require_once('./admin_includes/nav.php') ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page principale Administrateur -->
                <img src="../imgs/geostrat.png" width="10%" alt="geostratech">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Panneau de configuration - Contrôle
                            <hr>
                            
                            <?php 
                                if(isset($_SESSION['db_user_name'])) {

                                    echo $_SESSION['db_user_name'];
                                }
                            ?>
                                <small class = "fa fa-check-circle"> est  connecté.</small>
                        </h1>

                    </div>

                </div> <!------- fermeture "row" -------->

                       
                    <!-- Panneaux de visualisation des données (dynamique) -->
                    <!-- Nombre d'articles -->
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-file-text fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                       <!-- Nombre total d'articles php -->
                                       <?php
                                        $sql="SELECT * FROM posts";
                                        $count = mysqli_query($con, $sql);
                                        $num_art = mysqli_num_rows($count);
                                        ?>
                                    
                                        <div class='huge'><?php echo $num_art ?></div>
                                            <div>Nombre d'articles</div>
                                        </div>
                                    </div>
                                </div>

                                <a href="posts.php">
                                    <div class="panel-footer">
                                        <span class="pull-left">Voir les articles</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!-- Commentaires -->
                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-comments fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                        <?php

                                        $sql="SELECT * FROM comments";
                                        $count_com = mysqli_query($con, $sql);
                                        $num_com = mysqli_num_rows($count_com);
                                       
                                       ?>
                                        
                                        
                                        <div class='huge'><?php echo $num_com  ?></div>
                                        <div>Commentaires</div>
                                        </div>
                                    </div>
                                </div>

                                <a href="comments.php">
                                    <div class="panel-footer">
                                        <span class="pull-left">Voir les commentaires</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>

                         <!-- Utilisateurs -->
                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-warning">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-user fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                        <?php

                                        $sql="SELECT * FROM users";
                                        $count_users = mysqli_query($con, $sql);
                                        $nb_users = mysqli_num_rows($count_users);
                                       
                                       ?>
                                        <div class='huge'><?php echo $nb_users ?></div>
                                            <div> Utilisateurs</div>
                                        </div>
                                    </div>
                                </div>

                                <a href="users.php">
                                    <div class="panel-footer">
                                        <span class="pull-left">Voir les utilisateurs</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!-- Catégories -->
                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-danger">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-list fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">

                                        <?php

                                        $sql="SELECT * FROM categories";
                                        $count_cat = mysqli_query($con, $sql);
                                        $nb_cat = mysqli_num_rows($count_cat);
                                       
                                       ?>
                                            <div class='huge'><?php echo $nb_cat ?></div>
                                            <div>Catégories</div>
                                        </div>
                                    </div>
                                </div>

                                <a href="categories.php">
                                    <div class="panel-footer">
                                        <span class="pull-left">Voir les catégories</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <br><br>

                    <!------------- Graphique données JS Google Charts ---------------->
                    
                        <div class="row">
                            <div class="col">
                                <div class="container">
                                    <script type="text/javascript">
                                        google.charts.load('current', {'packages':['corechart', 'bar']});
                                        google.charts.setOnLoadCallback(drawStuff);

                                        function drawStuff() {

                                        var button = document.getElementById('change-chart');
                                        var chartDiv = document.getElementById('chart_div');
                                            // Visualiser les données
                                        var data = google.visualization.arrayToDataTable([
                                        ['Données','nombres'],
                                            
                                        <?php

                                            $stat_data = ['Articles', 'Commentaires', 'Utilisateurs', 'Catégories'];
                                            $show_data = [$num_art,$num_com,$nb_users,$nb_cat];
                                            
                                            for($i=0; $i<4; $i++){
                                                    echo "['{$stat_data[$i]}'" . "," . "{$show_data[$i]}],";
                                                }
                                        ?>

                                        ]);

                                        var materialOptions = {
                                        width: 900,
                                        chart: {
                                            title: 'Graphique - Données du site',
                                            subtitle: 'Geostratech analysis'
                                        },
                                        series: {
                                            0: { axis: 'distance' }, // Bind series 0 to an axis named 'distance'.
                                            1: { axis: 'brightness' } // Bind series 1 to an axis named 'brightness'.
                                        },
                                        axes: {
                                            y: {
                                            distance: {label: 'Nombre de contenus'}, // Left y-axis.
                                            brightness: {side: 'right', label: 'apparent magnitude'} // Right y-axis.
                                            }
                                        }
                                        };

                                        var classicOptions = {
                                        width: 900,
                                        series: {
                                            0: {targetAxisIndex: 0},
                                            1: {targetAxisIndex: 1}
                                        },
                                        title: '',
                                        vAxes: {
                                            // Adds titles to each axis.
                                            0: {title: 'parsecs'},
                                            1: {title: 'apparent magnitude'}
                                        }
                                        };

                                        function drawMaterialChart() {
                                        var materialChart = new google.charts.Bar(chartDiv);
                                        materialChart.draw(data, google.charts.Bar.convertOptions(materialOptions));
                                        button.innerText = 'Change to Classic';
                                        button.onclick = drawClassicChart;
                                        }

                                        function drawClassicChart() {
                                        var classicChart = new google.visualization.ColumnChart(chartDiv);
                                        classicChart.draw(data, classicOptions);
                                        button.innerText = 'Change to Material';
                                        button.onclick = drawMaterialChart;
                                        }

                                        drawMaterialChart();
                                        };
                                    </script>
                                     <div id="chart_div" style="width: 100%px; height: 500px; margin-left:5%"></div>
                                </div>
                            </div>
                        </div>
                

    

    
                
                
          

                <?php 
                    require_once('./admin_includes/footer.php')
                ?>