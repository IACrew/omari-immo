<?php
            $cbd = new CrudBD();
            $objects= $cbd->getpost(6);
            
            if($objects != null){
                    
                        ?>
 <!-- PRODUCT SLIDER AREA START -->
 <div class="ltn__product-slider-area ltn__product-gutter pt-115 pb-90 plr--7" id="product">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area ltn__section-title-2--- text-center">
                        <h6 class="section-subtitle section-subtitle-2 ltn__secondary-color">Annonces</h6>
                        <h1 class="section-title">Dernière Annonces</h1>
                    </div>
                </div>
            </div>
            <div class="row ltn__product-slider-item-four-active-full-width slick-arrow-1">
            <?php
            foreach($objects as $object){
                $count= count($cbd->listimg($object['idm']));
                ?>
                <!-- ltn__product-item -->
                <div class="col-lg-12">
                    <div class="ltn__product-item ltn__product-item-4 text-center---">
                        <div class="product-img">
                            <a href="./Detail-Produit.php?id=<?php echo $object['idm'];?>"><img src="../omariadmin/images/villa/<?php echo $cbd->lastimg($object['idm']);?>" style="height:250px;" alt="#"></a>
                            <div class="product-badge">
                                <ul>
                                <?php if($object['Statu']=="vente") {
                                     echo'<li class="sale-badge bg-green">'.$object['Statu'].'</li>';
                                }else{ 
                                    echo'<li class="sale-badge bg-green---">Location</li>';
                                    }?>
                                </ul>
                            </div>
                            <div class="product-img-location-gallery">
                                <div class="product-img-location">
                                    <ul>
                                        <li>
                                            <a href="./Detail-Produit.php?id=<?php echo $object['idm'];?>"><i class="flaticon-pin"></i><?php echo $object['Adresse']?></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-img-gallery">
                                    <ul>
                                        <li>
                                            <a href="./Detail-Produit.php?id=<?php echo $object['idm'];?>"><i class="fas fa-camera"></i><?php echo $count; ?></a>
                                        </li>
                                        <li>
                                            <a href="./Detail-Produit.php?id=<?php echo $object['idm'];?>"><i class="fas fa-film"></i><?php if($object['idvideo']!=""){echo "1";}else{echo"0";} ?></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="product-info">
                            <div class="product-price">
                                <span><?php echo $object['prix']?></span>
                            </div>
                            <h2 class="product-title"><a href="./Detail-Produit.php?id=<?php echo $object['idm'];?>"><?php echo $object['titre']?></a></h2>
                            <div class="product-description">
                                <p><?php echo str_split($object['description'], 30,)[0].' <a href="./Detail-Produit.php?id='.$object['idm'].'">...Plus</a>'; ?></p>
                            </div>
                            <ul class="ltn__list-item-2 ltn__list-item-2-before">
                                <li><span><?php echo $object['bedrooms']?> <i class="flaticon-bed"></i></span>
                                    
                                </li>
                                <li><span><?php echo $object['bathrooms']?><i class="flaticon-clean"></i></span>
                                    
                                </li>
                                <li><span><?php echo $object['meters']?> <i class="flaticon-square-shape-design-interface-tool-symbol"></i></span>
                                   
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <?php }?>
            </div>
        </div>
    </div>
    <!-- PRODUCT SLIDER AREA END -->
            <?php } ?>