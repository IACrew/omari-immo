<?php if(!isset($_GET['page'])){ header( "Location: ../" ); exit;} ?>
<?php require '../includes/CrudBD.inc.php'?>
<?php require '../includes/headereng.php'?>
    <!-- BREADCRUMB AREA START -->
    <div class="ltn__breadcrumb-area text-left bg-overlay-white-30 bg-image "  data-bg="img/bg/14.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__breadcrumb-inner">
                        <h1 class="page-title">              
                            <?php if(!empty($_GET['page'])) { echo $_GET['page'];}else{ header( "Location: ../ENG/" ); exit;} ?>
                        </h1>
                        <div class="ltn__breadcrumb-list">
                            <ul>
                                <li><a href="../assets/index.html"><span class="ltn__secondary-color"><i class="fas fa-home"></i></span>Omari Service</a></li>
                                <li><?php echo $_GET['page']; ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMB AREA END -->
    
    <!-- Location voiture -->
    <?php 
    if($_GET['page']=='Location Voiture')
    { ?>
    <div class="ltn__product-area ltn__product-gutter mb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="liton_product_grid">
                            <div class="ltn__product-tab-content-inner ltn__product-grid-view">
                                <div class="row">
                                    <!-- ltn__product-item -->
                                    <div class="col-lg-4 col-sm-6 col-12">
                                        <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5 text-center---">
                                            <div class="product-img">
                                                <a href="product-details.html"><img src="https://www.1servicecar.com/img/cars/thumb-Kia-Picanto.webp" style="height:270px;" alt="#"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-badge">
                                                    <ul>
                                                        <li class="sale-badg">Location</li>
                                                    </ul>
                                                </div>
                                                <h2 class="product-title"><a href="product-details.html">Kia Picanto</a></h2>
                                        

                                            </div>
                                        </div>
                                    </div>
                                    <!-- ltn__product-item -->
                                    <div class="col-lg-4 col-sm-6 col-12">
                                        <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5 text-center---">
                                            <div class="product-img">
                                                <a href="product-details.html"><img src="https://www.1servicecar.com/img/cars/thumb-Hyundai-I10.webp" style="height:270px;" alt="#"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-badge">
                                                    <ul>
                                                        <li class="sale-badg">Location</li>
                                                    </ul>
                                                </div>
                                                <h2 class="product-title"><a href="product-details.html">Hyundai i10</a></h2>
                                        

                                            </div>
                                        </div>
                                    </div>
                                    <!-- ltn__product-item -->
                                    <div class="col-lg-4 col-sm-6 col-12">
                                        <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5 text-center---">
                                            <div class="product-img">
                                                <a href="product-details.html"><img src="https://www.1servicecar.com/img/cars/thumb-Fiat-Panda.webp" style="height:270px;" alt="#"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-badge">
                                                    <ul>
                                                        <li class="sale-badg">Location</li>
                                                    </ul>
                                                </div>
                                                <h2 class="product-title"><a href="product-details.html">Fiat Panda</a></h2>
                                        

                                            </div>
                                        </div>
                                    </div>
                                    <!-- ltn__product-item -->
                                    <div class="col-lg-4 col-sm-6 col-12">
                                        <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5 text-center---">
                                            <div class="product-img">
                                                <a href="product-details.html"><img src="https://www.1servicecar.com/img/cars/thumb-Dacia-Logan.webp" style="height:270px;" alt="#"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-badge">
                                                    <ul>
                                                        <li class="sale-badg">Location</li>
                                                    </ul>
                                                </div>
                                                <h2 class="product-title"><a href="product-details.html">Dacia Logan</a></h2>
                                        

                                            </div>
                                        </div>
                                    </div>
                                    <!-- ltn__product-item -->
                                    <div class="col-lg-4 col-sm-6 col-12">
                                        <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5 text-center---">
                                            <div class="product-img">
                                                <a href="product-details.html"><img src="https://www.1servicecar.com/img/cars/thumb-Renault-Clio-4-manual.webp" style="height:270px;" alt="#"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-badge">
                                                    <ul>
                                                        <li class="sale-badg">Location</li>
                                                    </ul>
                                                </div>
                                                <h2 class="product-title"><a href="product-details.html">Clio 4 manuel</a></h2>
                                        

                                            </div>
                                        </div>
                                    </div>
                                    <!-- ltn__product-item -->
                                    <div class="col-lg-4 col-sm-6 col-12">
                                        <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5 text-center---">
                                            <div class="product-img">
                                                <a href="product-details.html"><img src="https://www.1servicecar.com/img/cars/thumb-Peugeot-208-manual.webp" style="height:270px;" alt="#"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-badge">
                                                    <ul>
                                                        <li class="sale-badg">Location</li>
                                                    </ul>
                                                </div>
                                                <h2 class="product-title"><a href="product-details.html">Peugeot 208</a></h2>
                                        

                                            </div>
                                        </div>
                                    </div>
                                    <!-- ltn__product-item -->
                                    <div class="col-lg-4 col-sm-6 col-12">
                                        <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5 text-center---">
                                            <div class="product-img">
                                                <a href="product-details.html"><img src="https://www.1servicecar.com/img/cars/thumb-Citro%C3%ABn-C3-manual.webp" style="height:270px;" alt="#"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-badge">
                                                    <ul>
                                                        <li class="sale-badg">Location</li>
                                                    </ul>
                                                </div>
                                                <h2 class="product-title"><a href="product-details.html">Citroen C3</a></h2>
                                        

                                            </div>
                                        </div>
                                    </div>
                                    <!-- ltn__product-item -->
                                    <div class="col-lg-4 col-sm-6 col-12">
                                        <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5 text-center---">
                                            <div class="product-img">
                                                <a href="product-details.html"><img src="https://www.1servicecar.com/img/cars/thumb-Dacia-Duster-2x4.webp" style="height:270px;" alt="#"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-badge">
                                                    <ul>
                                                        <li class="sale-badg">Location</li>
                                                    </ul>
                                                </div>
                                                <h2 class="product-title"><a href="product-details.html">Dacia Duster</a></h2>
                                        

                                            </div>
                                        </div>
                                    </div>
                                    <!-- ltn__product-item -->
                                    <div class="col-lg-4 col-sm-6 col-12">
                                        <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5 text-center---">
                                            <div class="product-img">
                                                <a href="product-details.html"><img src="https://www.1servicecar.com/img/cars/thumb-Hyundai-Accent-automatic.webp" style="height:270px;" alt="#"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-badge">
                                                    <ul>
                                                        <li class="sale-badg">Location</li>
                                                    </ul>
                                                </div>
                                                <h2 class="product-title"><a href="product-details.html">Hyundai Accent</a></h2>
                                        

                                            </div>
                                        </div>
                                    </div>
                                    <!--  -->
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <?php
    }
     ?>
      <!-- Transport Touristique -->
     <?php 
     if($_GET['page']=='Transport Touristique')
    { ?>
    <div class="ltn__product-area ltn__product-gutter mb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="liton_product_grid">
                            <div class="ltn__product-tab-content-inner ltn__product-grid-view">
                                <div class="row">
                                    <!-- ltn__product-item -->
                                    <div class="col-lg-4 col-sm-6 col-12">
                                        <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5 text-center---">
                                            <div class="product-img">
                                                <a href="product-details.html"><img src="https://www.medloc-maroc.com/theme/assets/images/minibus/h1.jpg" style="height:270px;" alt="#"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-badge">
                                                    <ul>
                                                        <li class="sale-badg">Location</li>
                                                    </ul>
                                                </div>
                                                <h2 class="product-title"><a href="product-details.html">Hyundai h1</a></h2>
                                        

                                            </div>
                                        </div>
                                    </div>
                                    <!-- ltn__product-item -->
                                    <div class="col-lg-4 col-sm-6 col-12">
                                        <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5 text-center---">
                                            <div class="product-img">
                                                <a href="product-details.html"><img src="https://www.medloc-maroc.com/theme/assets/images/minibus/ford.jpg" style="height:270px;" alt="#"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-badge">
                                                    <ul>
                                                        <li class="sale-badg">Location</li>
                                                    </ul>
                                                </div>
                                                <h2 class="product-title"><a href="product-details.html">Minibus ford</a></h2>
                                        

                                            </div>
                                        </div>
                                    </div>
                                    <!-- ltn__product-item -->
                                    <div class="col-lg-4 col-sm-6 col-12">
                                        <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5 text-center---">
                                            <div class="product-img">
                                                <a href="product-details.html"><img src="https://www.medloc-maroc.com/theme/assets/images/minibus/ford12.jpg" style="height:270px;" alt="#"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-badge">
                                                    <ul>
                                                        <li class="sale-badg">Location</li>
                                                    </ul>
                                                </div>
                                                <h2 class="product-title"><a href="product-details.html">MiniBus Ford </a></h2>
                                        

                                            </div>
                                        </div>
                                    </div>
                                    <!-- ltn__product-item -->
                                    <div class="col-lg-4 col-sm-6 col-12">
                                        <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5 text-center---">
                                            <div class="product-img">
                                                <a href="product-details.html"><img src="https://www.medloc-maroc.com/theme/assets/images/minibus/mercedes.jpg" style="height:270px;" alt="#"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-badge">
                                                    <ul>
                                                        <li class="sale-badg">Location</li>
                                                    </ul>
                                                </div>
                                                <h2 class="product-title"><a href="product-details.html">Minibus Mercedes</a></h2>
                                        

                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <?php
    }
     ?>
      <!-- Excursions -->
      <?php 
     if($_GET['page']=='Excursions et Circuits')
    { ?>
    <div class="ltn__product-area ltn__product-gutter mb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="liton_product_grid">
                            <div class="ltn__product-tab-content-inner ltn__product-grid-view">
                                <div class="row">
                                    <!-- ltn__product-item -->
                                    <div class="col-lg-4 col-sm-6 col-12">
                                        <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5 text-center---">
                                            <div class="product-img">
                                                <a href="product-details.html"><img src="https://excursionmarrakech-maroc.com/assets/images/ourika-valley-1.jpg" style="height:270px;" alt="#"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-badge">
                                                    <ul>
                                                        <li class="sale-badg">Excursions</li>
                                                    </ul>
                                                </div>
                                                <h2 class="product-title"><a href="product-details.html">Excursion Vallée de l'Ourika</a></h2>
                                        

                                            </div>
                                        </div>
                                    </div>
                                    <!-- ltn__product-item -->
                                    <div class="col-lg-4 col-sm-6 col-12">
                                        <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5 text-center---">
                                            <div class="product-img">
                                                <a href="product-details.html"><img src="https://excursionmarrakech-maroc.com/assets/images/gallery/Muraille_et_Medina_Essaouira.JPG" style="height:270px;" alt="#"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-badge">
                                                    <ul>
                                                        <li class="sale-badg">EXCURSIONS</li>
                                                    </ul>
                                                </div>
                                                <h2 class="product-title"><a href="product-details.html">Excursion Essaouira / Mogador</a></h2>
                                        

                                            </div>
                                        </div>
                                    </div>
                                    <!-- ltn__product-item -->
                                    <div class="col-lg-4 col-sm-6 col-12">
                                        <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5 text-center---">
                                            <div class="product-img">
                                                <a href="product-details.html"><img src="https://excursionmarrakech-maroc.com/assets/images/Cascade-ouzoud.jpg" style="height:270px;" alt="#"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-badge">
                                                    <ul>
                                                        <li class="sale-badg">EXCURSIONS</li>
                                                    </ul>
                                                </div>
                                                <h2 class="product-title"><a href="product-details.html">Excursion Cascade d'Ouzoud </a></h2>
                                        

                                            </div>
                                        </div>
                                    </div>
                                    <!-- ltn__product-item -->
                                    <div class="col-lg-4 col-sm-6 col-12">
                                        <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5 text-center---">
                                            <div class="product-img">
                                                <a href="product-details.html"><img src="https://excursionmarrakech-maroc.com/assets/images/Kasbah_Ait_Ben_Haddou.JPG" style="height:270px;" alt="#"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-badge">
                                                    <ul>
                                                        <li class="sale-badg">EXCURSIONS</li>
                                                    </ul>
                                                </div>
                                                <h2 class="product-title"><a href="product-details.html">Excursion Ouarzazate - Ait Benhaddou</a></h2>
                                        

                                            </div>
                                        </div>
                                    </div>
                                    <!-- ltn__product-item -->
                                    <div class="col-lg-4 col-sm-6 col-12">
                                        <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5 text-center---">
                                            <div class="product-img">
                                                <a href="product-details.html"><img src="https://excursionmarrakech-maroc.com/assets/images/La_Marina_dAgadir.jpg" style="height:270px;" alt="#"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-badge">
                                                    <ul>
                                                        <li class="sale-badg">EXCURSIONS</li>
                                                    </ul>
                                                </div>
                                                <h2 class="product-title"><a href="product-details.html">Excursion vers Agadir</a></h2>
                                        

                                            </div>
                                        </div>
                                    </div>
                                    <!-- ltn__product-item -->
                                    <div class="col-lg-4 col-sm-6 col-12">
                                        <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5 text-center---">
                                            <div class="product-img">
                                                <a href="product-details.html"><img src="https://excursionmarrakech-maroc.com/assets/images/Sommet_enneig%C3%A9s_%C3%A0_Imlil.JPG" style="height:270px;" alt="#"></a>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-badge">
                                                    <ul>
                                                        <li class="sale-badg">EXCURSIONS</li>
                                                    </ul>
                                                </div>
                                                <h2 class="product-title"><a href="product-details.html">Excursion Imlil et Haut Atlas</a></h2>
                                        

                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <?php
    }
     ?>
    <!-- FOOTER AREA START -->
    <?php require '../includes/footereng.php'?>
    <!-- FOOTER AREA END -->
</div>
<!-- Body main wrapper end -->

    <!-- preloader area start -->
    <div class="preloader d-none" id="preloader">
        <div class="preloader-inner">
            <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div>
    </div>
    <!-- preloader area end -->

    <!-- All JS Plugins -->
    <script src="../assets/js/plugins.js"></script>
    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>
  
</body>

<!-- Mirrored from maelectrics.com/tf/html/quarter-preview/quarter/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 21 Jun 2021 00:40:59 GMT -->
</html>

