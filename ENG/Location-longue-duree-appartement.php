<?php $page="Appartement"; ?>
<?php require '../includes/CrudBD.inc.php'?>
<?php require '../includes/header.php'?>
    <!-- BREADCRUMB AREA START -->
    <div class="ltn__breadcrumb-area text-left bg-overlay-white-30 bg-image "  data-bg="img/bg/14.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__breadcrumb-inner">
                        <h1 class="page-title">              
                            <?php if(!empty($page)) { echo $page;}else{ header( "Location: ../ENG/" ); exit;} ?>
                        </h1>
                        <div class="ltn__breadcrumb-list">
                            <ul>
                                <li><a href="../assets/index.html"><span class="ltn__secondary-color"><i class="fas fa-home"></i></span> Location Saisonniere</a></li>
                                <li><?php echo $page; ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMB AREA END -->
    
    <!-- PRODUCT DETAILS AREA START -->
    <div class="ltn__product-area ltn__product-gutter mb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__shop-options">
                        <ul>
                            <li></li>
                            <li></li>
                            <li>
                               <div class="showing-product-number text-right">
                                    <!-- <span>Showing 9 of 20 results</span> -->
                                </div> 
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="liton_product_grid">
                            <div class="ltn__product-tab-content-inner ltn__product-grid-view">
                                <div class="row">
                    <?php
                    $cbd = new CrudBD();
                    $objects= $cbd->list("locationLd",$page);
                    foreach($objects as $object){
                    ?>
                                     <!-- ltn__product-item -->
                                     <div class="col-lg-4 col-sm-6 col-12">
                                        <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5 text-center---">
                                            <div class="product-img">
                                                <a href="./Detail-Produit.php?id=<?php echo $object['idm'];?>"><img src="../omariadmin/images/villa/<?php echo $cbd->lastimg($object['idm']);?>" alt="#"></a>
                                                <div class="real-estate-agent">
                                                    <div class="agent-img">
                                                        <a href="#"><img src="../assets/img/blog/logopng.png" alt="#"></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-badge">
                                                    <ul>
                                                        <li class="sale-badg"> <?php echo $object['Statu']?></li>
                                                    </ul>
                                                </div>
                                                <h2 class="product-title"><a href="Detail-Produit.php?id=<?php echo $object['idm'];?>"><?php echo $object['titre']?></a></h2>
                                                <div class="product-img-location">
                                                    <ul>
                                                        <li>
                                                            <a href="#"><i class="flaticon-pin"></i> <?php echo $object['Adresse']?></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <ul class="ltn__list-item-2--- ltn__list-item-2-before--- ltn__plot-brief">
                                                    <li><span><?php echo $object['bedrooms']?></span>
                                                    Chambres
                                                    </li>
                                                    <li><span><?php echo $object['bathrooms']?> </span>
                                                    Salles de bain
                                                    </li>
                                                    <li><span><?php echo $object['meters']?> </span>
                                                    Superficie
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="product-info-bottom">
                                                <div class="product-price">
                                                    <span><?php echo $object['prix']?></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

<?php
}


?>
                                
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="ltn__pagination-area text-center">
                        <div class="ltn__pagination">
                            <ul>
                                <li><a href="#"><i class="fas fa-angle-double-left"></i></a></li>
                                <li><a href="#">1</a></li>
                                <li class="active"><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">...</a></li>
                                <li><a href="#">10</a></li>
                                <li><a href="#"><i class="fas fa-angle-double-right"></i></a></li>
                            </ul>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    <!-- FOOTER AREA START -->
    <?php require '../includes/footer.php'?>
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

