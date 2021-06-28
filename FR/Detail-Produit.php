<?php if(!isset($_GET['id'])){ header( "Location: ../" ); exit;} ?>
<?php require '../includes/CrudBD.inc.php'?>
<?php require '../includes/header.php'?>
    <!-- BREADCRUMB AREA START -->
    <div class="ltn__breadcrumb-area text-left bg-overlay-white-30 bg-image mb-0"  data-bg="img/bg/14.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__breadcrumb-inner">
                        <h1 class="page-title">Detail de Produit</h1>
                        <div class="ltn__breadcrumb-list">
                            <ul>
                                <li><a href="../assets/index.html"><span class="ltn__secondary-color"><i class="fas fa-home"></i></span> Home</a></li>
                                <li>Detail de Produit</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMB AREA END -->

    <!-- IMAGE SLIDER AREA START (img-slider-3) -->
    <div class="ltn__img-slider-area mb-90">
        <div class="container-fluid">
            <div class="row ltn__image-slider-5-active slick-arrow-1 slick-arrow-1-inner ltn__no-gutter-all">
            <?php
            $cbd = new CrudBD();
            $objects= $cbd->listimg($_GET['id']);
            $post =$cbd->post($_GET['id']);
            $id=0;
            if($objects!= null){ 
            foreach($objects as $object){
                        ?>
                <div class="col-lg-12">
                    <div class="ltn__img-slide-item-<?php echo $id;?>">
                        <a href="../omariadmin/images/villa/<?php echo $object['path'];?>" data-rel="lightcase:myCollection">
                            <img src="../omariadmin/images/villa/<?php echo $object['path'];?>" alt="Image" style="max-height:600px">
                        </a>
                    </div>
                </div>
                <?php$id=$id+1;?> 
          <?php  }}?>
            </div>
        </div>
    </div>
    <!-- IMAGE SLIDER AREA END -->

    <!-- SHOP DETAILS AREA START -->
    <div class="ltn__shop-details-area pb-10">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="ltn__shop-details-inner ltn__page-details-inner mb-60">

                        <h1><?php 
                        foreach($post as $po){
                        echo $po['titre'] ?></h1>
                        <label><span class="ltn__secondary-color"><i class="flaticon-pin"></i></span><?php echo $po["Adresse"] ?></label>
                        <h4 class="title-2">Description</h4>
                        <p><?php echo $po["description"] ?></p>
                        <h4 class="title-2">Detail</h4>  
                        <div class="property-detail-info-list section-bg-1 clearfix mb-60">                          
                            <ul>
                                <li><label>Référence:</label> <span><?php echo $po["ref"] ?></span></li>
                                <li><label>Chambres:</label> <span><?php echo $po["bedrooms"] ?></span></li>
                                <li><label>Salles de bain:</label> <span><?php echo $po["bathrooms"] ?></span></li>
                                <li><label>Les niveaux:</label> <span><?php echo $po["levels"] ?></span></li>
                                <li><label>Cuisine:</label> <span><?php echo $po["kitchen"] ?></span></li>
                                <li><label>Sale à manger:</label> <span><?php echo $po["dining"] ?></span></li>
                                
                        </ul>
                            <ul>
                                <li><label>Superficie: </label> <span><?php echo $po["meters"] ?></span></li>
                                <li><label>Internet:</label> <span><?php echo $po["internet"] ?></span></li>
                                <li><label>CA:</label> <span><?php echo $po["AC"] ?></span></li>
                                <li><label>Parking:</label> <span><?php echo $po["parking"] ?></span></li>
                                <li><label>Prix:</label> <span>2</span></li>
                                <li><label>Statut de propriété :</label> <span><?php echo $po["Statu"] ?></span></li>
                            </ul>
                        </div>
                                        
                        
                        <?php 
                            if ($po['idvideo']!="") {    
                                
                                echo '<h4 class="title-2">Property Video</h4>
                                <div class="ltn__video-bg-img ltn__video-popup-height-500 bg-overlay-black-50 bg-image mb-60" data-bg="../assets/img/others/5.jpg">
                                    <a class="ltn__video-icon-2 ltn__video-icon-2-border---" href="https://www.youtube.com/embed/'.$po['idvideo'].'?autoplay=1&amp;showinfo=0" data-rel="lightcase:myCollection">
                                        <i class="fa fa-play"></i>
                                    </a>
                                </div>';
                         
                         } ?>
                        
                    </div>
                </div>
                <div class="col-lg-4">
                    <aside class="sidebar ltn__shop-sidebar ltn__right-sidebar---">
                      

                        <!-- Top Rated Product Widget -->
                        <div class="widget ltn__top-rated-product-widget">
                            <h4 class="ltn__widget-title ltn__widget-title-border-2">Dernière Annonces</h4>
                            <ul>
                                <?php $cbd = new CrudBD();
                                $objects= $cbd->getpost(3);
                                if($objects != null){ 
                                    foreach($objects as $object){
                                    ?>
                                <li>
                                    <div class="top-rated-product-item clearfix">
                                        <div class="top-rated-product-img">
                                            <a href="./Detail-Produit.php?id=<?php echo $object['idm'];?>"><img src="../omariadmin/images/villa/<?php echo $cbd->lastimg($object['idm']);?>" alt="#" style="height:65px;"></a>
                                        </div>
                                        <div class="top-rated-product-info">
                                            <div class="product-ratting ">
                                                <ul>
                                                <?php if($object['Statu']=="vente") {
                                                     echo'<li class="sale-badge bg-green p-2">'.$object['Statu'].'</li>';
                                                 }else{ 
                                                        echo'<li class="sale-badge bg-green p-2">Location</li>';
                                                 }?>
                                                </ul>
                                            </div>
                                            <h6><a href="./Detail-Produit.php?id=<?php echo $object['idm'];?>"><?php echo $object['titre']?></a></h6>
                                            <div class="product-price">
                                                <span><?php echo $object['prix']?></span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <?php }}?>
                            </ul>
                        </div>   
                        <!-- Social Media Widget -->
                        <div class="widget ltn__social-media-widget">
                            <h4 class="ltn__widget-title ltn__widget-title-border-2">Suivez-nous</h4>
                            <div class="ltn__social-media-2">
                                <ul>
                                    <li><a href="https://www.facebook.com/omari.immobilier21" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="https://www.instagram.com/omariimmobilier/" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                                    
                                </ul>
                            </div>
                        </div>

                    </aside>
                </div>
            </div>
        </div>
    </div>
    <!-- SHOP DETAILS AREA END -->
<?php }?>
<!-- Body main wrapper end -->

 <!-- FOOTER AREA START -->
 <?php require '../includes/footer.php'?>
    <!-- FOOTER AREA END -->
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
    <script src="../assets/../assets/js/plugins.js"></script>
    <!-- Main JS -->
    <script src="../assets/../assets/js/main.js"></script>
  
</body>

<!-- Mirrored from maelectrics.com/tf/html/quarter-preview/quarter/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 21 Jun 2021 00:40:59 GMT -->
</html>

