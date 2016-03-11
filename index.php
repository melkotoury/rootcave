    <?php 
    include 'config.php';
    include ($includes.'head.php'); ?>


    <!-- Header Start ---->
    <header class="header" id="header">
        <!-- navigation Start -->
        <?php include ($includes.'navigation.php'); ?>
        <!-- navigation End -->
    </header>
    <!-- Header ---->

    <section class="products-kind white">
        <div class="container text-center">
           <div class="row">
               <h1>
                   Products
               </h1>
           </div>
            <div class="row">
                <div class="col-sm-6" data-ng-repeat="items in products">
                    <div class="name-k">
                        <span class="{{items.icon}}"></span>
                        <h2>{{items.title}}</h2>
                        <p>
                            {{items.description}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="aboutme padding" id=aboutUs>
        <div class="container text-center">
            <div class="row">
                <h1 class="text-center"><span class="rcColor">Root Cave</span> at a glance</h1>

                <p>
                    Root Cave delivers a business application suite for small and medium size companies around the world. , our flexible solutions help you accelerate your business growth. That flexibility allows you to choose to implement the suite on your existing servers or move to a modern cloud implementation. Explore these pages to see why we are now the fastest growing business management solution!
                </p>
                <br><br>
            </div>
            <div class="row">
                <div class="col-sm-3 col-md-3" data-ng-repeat="items in about">
                    <div class="about-box">
                        <img ng-src= "<?php echo $img_about; ?>{{items.icon}}"> 
                        <h3>{{items.title}}</h3>
                        <p>{{items.description}}</p>
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
                        <h3 class="white">Web App</h3>
                        <p class="white">
                            Lorem ipsum dolor sit amet, perfecto accusata ad qui, amet adhuc everti ut pri. Recusabo periculis patrioque an duo. Suas alienum eos at, at nibh soleat nostrud mel. Eu eam alii sanctus sadipscing, eos nusquam voluptaria et, nominati volutpat maiestatis has ei.
                            Lorem ipsum dolor sit amet, perfecto accusata ad qui, amet adhuc everti ut pri. Recusabo periculis patrioque an duo. Suas alienum eos at, at nibh soleat nostrud mel. Eu eam alii sanctus sadipscing, eos nusquam voluptaria et, nominati volutpat maiestatis has ei.
                            Lorem ipsum dolor sit amet, perfecto accusata ad qui, amet adhuc everti ut pri. Recusabo periculis patrioque an duo. Suas alienum eos at, at nibh soleat nostrud mel. Eu eam alii sanctus sadipscing, eos nusquam voluptaria et, nominati volutpat maiestatis has ei.
                        </p>
                        <a class="btn btn-primary" href="line-of-business.php">Get Started</a>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="l-box">
                        <img class="img-responsive" ng-src="<?php echo $img; ?>PcColl.png">
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="mobile padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Mobile App</h3>
                    <p>
                        Mobile devices are increasingly utilized to access content and interact with brands. So, it is critical that you have a well-designed and solidly executed mobile experience. Root Cave provides clients with brand consistency through and throughout customized mobile websites and applications.
                    </p>
                    <a href="mobile-apps.php" class="btn btn-primary">Get Started</a>
                </div>

                <div class="col-sm-6">
                </div>
            </div>
        </div>
    </section>

    <section class="anytime padding">
        <div class="container">
            <div class="row">
                <img class="img-responsive" ng-src="<?php echo $img; ?>map.png">
            </div>
            <div class="row white text-center">
                <div class="col-sm-4" data-ng-repeat="any in anytime">
                    <div class="box-any">
                        <img class="img-responsive" ng-src="<?php echo $img; ?>{{any.icon}}">
                        <h3>{{any.title}}</h3>
                        <p>
                            {{any.description}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class='clients padding text-center' id="customers">
        <div class="container">
            <div class="row">
                <h2>Customers</h2>
            </div>
            <div class="row">
                <div class="col-sm-4" data-ng-repeat="client in clients">
                    <img class="img-responsive" ng-src="<?php echo $img; ?>{{client.clinetLogo}}">
                </div>


            </div>
        </div>
    </section>


    <!-- footer start -->
    <?php include ($includes.'footer.php'); ?>


