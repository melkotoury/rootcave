
    <?php 
    include 'config.php';
    include ($includes.'head.php'); 
    $jsondata=file_get_contents("data/data.json");
    $json= json_decode($jsondata,true);
    //echo $json['lobProduct'][0]['id'];


    $id=$_GET['id']; 
    ?>

    <!-- Header Start ---->
    <header class="header" id="product">
        <!-- navigation Start -->
        <?php include ($includes.'navigation.php'); ?>
        <!-- navigation End -->
    </header>
    <!-- Header ---->
    <section class="lob-icons white">
        <div class="container">
            <ul class="icons">
                <li><span class="flaticon-technology-2"></span><h3>Responsive</h3></li>
                <li><span><span class="flaticon-material"></span><h3>Networking</h3></li>
                <li><span class="flaticon-technology"></span><h3>Support</h3></li>
            </ul>
        </div>
    </section>

    <section class="product-name padding" ng-controller="aboutCtrl">
        <div class="container">
            <div class="row">
                <div class="col-sm-6" >
                    <div class="name-box">
                        <h2><?php echo $json['lobProduct'][$id]['title'];  ?></h2>
                        <p>
                          <?php echo $json['lobProduct'][$id]['description'];  ?>
                        </p>
                        <button type="button" class="btn btn-primary">Ask for trial</button>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="name-box">
                        <img class="img-responsive" src="<?php echo $img.'Computer/'.$json['lobProduct'][$id]['mockup']; ?>">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="green-l padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="l-box">
                        <p class="white">
                        <?php echo $json['lobProduct'][$id]['projectsdetails'][0]['description_details'];  ?>
                          
                        </p>
                       
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="l-box">

                        <img class="img-responsive" src="<?php echo $img.'Computer/'.$json['lobProduct'][$id]['projectsdetails'][0]['mockup_details']; ?>">
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="product-detial padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6" data-ng-repeat="detial in Product">
                    <div class="prdct-d">
                        <img class="img-responsive" src="<?php echo $img; ?>Computer/{{detial.mockup}}">
                        <p>
                            {{detial.description}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- footer start -->
    <?php include ($includes.'/footer.php'); ?>
