<html>
    <head>
        <title>Rijschool Automatisme - Home</title>
        <link href="Bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="css/base.css">
        <style>
            #carousel1 {
                height:309px;
                padding: 5px 5px;
            }
            #carousel1 > .carousel-inner{
                height:90%;
            }
            #carousel1 > .carousel-indicators {
                bottom: 10px;
                margin-bottom: 0px;
            }
            .center {
                float: none;
                margin-left: auto;
                margin-right: auto;
                text-align: center;
            }
            .item {
                height: 100%;
            }
            .jumbotron {
                background-color: #C6E3EC;
            }
            .jumbotron, .jumbotron > div > p {
                font-size: 14px;
            }
        </style>
    </head>
    <body>
        <?php include 'header.php'; ?>

        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <div id="carousel1" class="carousel slide jumbotron col-md-7 center" data-ride="carousel">

                        <ol class="carousel-indicators">
                            <li data-target="#carousel1" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel1" data-slide-to="1"></li>
                        </ol>

                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="center">
                                    <img src="img/38Ster.png" width="450px" />
                                </div>
                            </div>
                            <div class="item">
                                <div class="center">
                                    <h2>Slide 2</h2>
                                    <div class="carousel-caption">
                                        <h3>Second slide label</h3>
                                        <p>Aliquam sit amet gravida nibh, facilisis gravida…</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-12">
                    <div class="col-md-7 center">
                        <img src="img/autos.png" width="560px"></img>
                        <h2>Welkom op de web-site van rijschool Automatisme</h2>
                        <p>Je rijbewijs is een investering waarvan je je hele leven lang profijt hebt. Het maakt je onafhankelijk en je kunt op ieder gewenst moment je verplaatsen zonder dat je bijvoorbeeld rekening hoeft te houden met vertrektijden van tram, bus, metro of trein.<a href="#">Lees meer</a>.</p>
                    </div>
                </div>
                <!--
                                                <div id="carousel1" class="carousel slide jumbotron col-md-7" data-ride="carousel">
                
                                                  <ol class="carousel-indicators">
                                                      <li data-target="#carousel1" data-slide-to="0" class="active"></li>
                                                      <li data-target="#carousel1" data-slide-to="1"></li>
                                                  </ol>
                
                                                  <div class="carousel-inner">
                                                                        <div class="item active">
                                                                                <div class="center">
                                                                                        <img src="img/38ster.png" width="450px" />
                                                                                </div>
                                                                        </div>
                                                      <div class="item">
                                                        <div class="center">
                                                                                        <h2>Slide 2</h2>
                                                                                        <div class="carousel-caption">
                                                                                                <h3>Second slide label</h3>
                                                                                                <p>Aliquam sit amet gravida nibh, facilisis gravida…</p>
                                                                                        </div>
                                                        </div>
                                                      </div>
                                                  </div>
                                                </div>
                                                <div class="jumbotron col-md-4 col-md-offset-1">
                                                        <h2>De rijschool met:</h2>
                                                        <ul>
                                                                <li>Gratis proefles*</li>
                                                                <li>Faalangst instructeur</li>
                                                                <li>ADHD &amp; autisme instructeur</li>
                                                                <li>Rijles vanaf 16&frac12; jaar</li>
                                                                <li>Diverse lespakketten </li>
                                                                <li>Strippenkaarten</li>
                                                                <li>50/50 deal**</li>
                                                        </ul>
                                                </div>
                                        </div>
                                        <div class="row">
                                                <div class="col-md-12 jumbotron">
                                                        <div class="col-md-7">
                                                                <img src="img/autos.png" width="560px"></img>
                                                                <h2>Welkom op de web-site van rijschool Automatisme</h2>
                                                                <p>Je rijbewijs is een investering waarvan je je hele leven lang profijt hebt. Het maakt je onafhankelijk en je kunt op ieder gewenst moment je verplaatsen zonder dat je bijvoorbeeld rekening hoeft te houden met vertrektijden van tram, bus, metro of trein.<a href="#">Lees meer</a>.</p>
                                                        </div>
                                                        <div class="col-md-4 col-md-offset-1">
                <!-- <h2>Proef les aanvragen</h2>
                <p>Proefles Gratis Bij aanschaf pakket anders &euro;30,00</p>
                <form class="col-md-12">
                        <div class="form-group col-md-8">
                                <label for="name">Email address</label>
                                <input type="text" class="form-control" id="name" />
                        </div>
                        <div class="form-group col-md-8">
                                <label for="email">Email address</label>
                                <input type="email" class="form-control" id="email" />
                        </div>
                        <div class="form-group col-md-8">
                                <label for="nummer">Tel. nummer</label>
                                <input type="tel" class="form-control" id="nummer" />
                        </div>
                        <div class="form-group col-md-8">
                                <input type="submit" class="form-control" />
                        </div>
                </form> -->
                <!--</div>
        </div>-->
            </div>
        </div>

        <?php include 'footer.php'; ?>
    </body>
    <script type="text/javascript" src="JQuery/jquery.min.js"></script>
    <script type="text/javascript" src="Bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/footermargin.js"></script>
</html>