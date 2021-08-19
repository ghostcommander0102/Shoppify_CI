
    <section id="item-page-main-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="product-page-design-list89798" style="font-size:80px"><?php echo $product[0]['build_name'] ?></h1>
                    <h5 class="product-series-gen-model"><?php echo $product[0]['cpu_brand'].' '.$product[0]['cpu_name'].' '.$product[0]['cpu_value'].' | '.$product[0]['ram_value'].' '.$product[0]['ssd_value'].' | '.$product[0]['gpu_name'].' '.$product[0]['gpu_value'] ?></h5>
                </div>
            </div>

            <div class="row">

                <div class="col-sm-12 col-mg-7 col-lg-7 col-xl-7">
                    <div class="area-sectoin-rpdouct-imgaes-tab">

                        <nav>
                            <div class="nav nav-tabs" id="nav-tab-147" role="tablist">
                                <?php for ($i=1; $i < 5; $i++) { ?>
                                    <a class="nav-link<?php echo $i==1?' active':''?>" id="nav-home-tab-123" data-toggle="tab" href="#nav-contact-<?php echo $i ?>" role="tab" aria-controls="nav-contact-<?php echo $i ?>" aria-selected="true">
                                        <img src="<?php echo base_url() ?>../assets/img/builds/<?php echo str_pad($product[0]['build_id'],4, "0", STR_PAD_LEFT) ?>/<?php echo $i ?>_thumb.png" alt="Custom Gaming Computers" class="list-select-images564">
                                    </a>
                                <?php }?>
                            </div>
                            
                        </nav>

                        <div class="tab-content" id="nav-tabContent-41">

                                <?php for ($i=1; $i < 5; $i++) { ?>
                                    <div class="tab-pane fade<?php echo $i==1?' show active':'' ?>" id="nav-contact-<?php echo $i?>" role="tabpanel" aria-labelledby="nav-home-tab">
                                        <img src="<?php echo base_url() ?>../assets/img/builds/<?php echo str_pad($product[0]['build_id'],4, "0", STR_PAD_LEFT) ?>/<?php echo $i?>.png" alt="Custom Gaming Computers" class="main-item-full-image">
                                    </div>
                                <?php }?>
                             

                        </div>    

                    </div>
                    <div class="list-item-80890-item-656" id="for-mobile">
                        <h3 class="prices-setting-item-5"> <sup> $ </sup><?php echo $product[0]['build_price'] ?></h3>
                        <button type="submit" class="cart-btn-list-89798764"> Add to Cart </button>
                        <div id='product-component-1606769438364'></div>
                        <p class="finance-list-89798654313-056"> <a href="#" class="avail-finance1250">Financing Available </a> </p>
                    </div>

                </div>

                <div class="col-sm-12 col-mg-5 col-lg-5 col-xl-5">
                    <div class="product-content-right-area8979">

                        <h2 class="title-item-girh-con101"> 
                            <span class="list-color-c-1"><?php echo $product[0]['build_name'] ?></span>
                        </h2>

                        <div class="area-section-graph-list-section987">
                            <div class="row">

                                <div class="col-sm-12 col-md-9 col-lg-9 col-xl-9">

                                    <ul class="list-side-brightness-list8798" id="mobile-bluetooth-1">
                                        <li> <img src="./assets/img/item/o1[fill-build_isRGB].png" alt="01"> RGB LIGHTING </li>
                                        <li> <img src="./assets/img/item/o2[fill-build_isWifi].png" alt="02"> WIFI </li>
                                        <li> <img src="./assets/img/item/o3[fill-build_isBluetooth].png" alt="03"> BLUETOOTH </li>
                                        <li> <img src="./assets/img/item/o4[fill-build_isUSBC].png" alt="04"> USB-C </li>
                                        <li> <img src="./assets/img/item/o5[fill-build_isVRReady].png" alt="05"> VR READY </li>
                                        <li> <img src="./assets/img/item/o6[fill-build_isStreamReady].png" alt="06"> STREAM READY </li>
                                    </ul>

                                    <div class="graph-main123">

                                        <ul class="cpu-coder-list-sectoi798 tab-item">
                                            <li class="tablinks-item active">  CPU <br><span><?php echo $product[0]['cpu_brand'].' '.$product[0]['cpu_name'].' '.$product[0]['cpu_value'] ?></span></li>
                                            <li class="tablinks-item">  Case <br><span><?php echo $product[0]['case_brand'].' '.$product[0]['case_name'].' '.$product[0]['case_value'] ?><span></li>
                                            <li class="tablinks-item">  Graphics <br><span><?php echo $product[0]['gpu_brand'].' '.$product[0]['gpu_name'].' '.$product[0]['gpu_value'] ?><span></li>
                                            <li class="tablinks-item">  Motherboard <br><span><?php echo $product[0]['mother_brand'].' '.$product[0]['mother_name'].' '.$product[0]['mother_value'] ?><span></li>
                                            <li class="tablinks-item">  RAM <br><span><?php echo $product[0]['ram_brand'].' '.$product[0]['ram_name'].' '.$product[0]['ram_value'] ?><span></li>
                                            <li class="tablinks-item active">  CPU Cooling <br><span><span></li>
                                            <li class="tablinks-item">  Storage <br><span><?php echo $product[0]['ssd_value'] ?><span></li>
                                            <li class="tablinks-item">  Power Supply <br><span><?php echo $product[0]['psu_brand'].' '.$product[0]['psu_name'].' '.$product[0]['psu_value'] ?><span></li>
                                            <li class="tablinks-item">  Accessories <br><span><span></li>
                                            <li class="tablinks-item">  Software <br><span><?php echo $product[0]['case_brand'].' '.$product[0]['case_name'].' '.$product[0]['case_value'] ?><span></li>
                                            <li class="tablinks-item">  Warranty <br><span><?php echo $product[0]['warranty_brand'].' '.$product[0]['warranty_name'].' '.$product[0]['warranty_value'] ?><span></li>
                                        </ul>

                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3" id="list-4575">
                                    <ul class="list-side-brightness-list8798" id="desk-bluetooth-1">
                                        <li class="option[fill-build_isRGB]"> <img src="<?php echo base_url() ?>../assets/img/item/<?php echo $product[0]['build_isRGB'] == 1?'o1':'o1_off' ?>.png" alt="01"> RGB LIGHTING </li>
                                        <li class="option[fill-build_isWifi]"> <img src="<?php echo base_url() ?>../assets/img/item/<?php echo $product[0]['build_isWifi'] == 1?'o2':'o2_off' ?>.png" alt="02"> WIFI </li>
                                        <li class="option[fill-build_isBluetooth]"> <img src="<?php echo base_url() ?>../assets/img/item/<?php echo $product[0]['build_isBluetooth'] == 1?'o3':'o3_off' ?>.png" alt="03"> BLUETOOTH </li>
                                        <li class="option[fill-build_isUSBC]"> <img src="<?php echo base_url() ?>../assets/img/item/<?php echo $product[0]['build_isUSBC'] == 1?'o4':'o4_off' ?>.png" alt="04"> USB-C </li>
                                        <li class="option[fill-build_isVRReady]"> <img src="<?php echo base_url() ?>../assets/img/item/<?php echo $product[0]['build_isVRReady'] == 1?'o5':'o5_off' ?>.png" alt="05"> VR READY </li>
                                        <li class="option[fill-build_isStreamReady]"> <img src="<?php echo base_url() ?>../assets/img/item/<?php echo $product[0]['build_isStreamReady'] == 1?'o6':'o6_off' ?>.png" alt="06"> STREAM READY </li>
                                    </ul>
                                </div>

                            </div> 
                            
                            <div class="row">

                                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                    <div class="list-item-80890-item-656" id="for-desk78">
                                        <h3 class="prices-setting-item-5"> <sup> $ </sup><?php echo $product[0]['build_price'] ?></h3>
										<a href="login.php" class="cart-btn-list-89798764" style="text-decoration:none;"> Add to Cart </a>
                                        <p class="finance-list-89798654313-056"> <a href="#" class="avail-finance1250"> Financing Available </a>
										</p>
		
	
                                        
                                    </div>
                                </div>

                            </div>
                            
                            
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </section>


    <section id="game-section-for-desktop">
        <div class="container">
            <div class="row">

                <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                    <div class="desk-game-name-ing654654">
                        <img src="<?php echo base_url() ?>../assets/img/item/d/1.png" alt="d1">
                        <h5> <?php echo explode(':',$product[0]['build_fortnitefps'])[0]; ?> FPS @ 1080p </h5>
                        <h5> <?php echo explode(':',$product[0]['build_fortnitefps'])[1]; ?> FPS @ 1440p </h5>
                    </div>
                </div>

                <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                    <div class="desk-game-name-ing654654">
                        <img src="<?php echo base_url() ?>../assets/img/item/d/2.png" alt="d1">
                        <h5> <?php echo explode(':',$product[0]['build_csfps'])[0]; ?> FPS @ 1080p </h5>
                        <h5> <?php echo explode(':',$product[0]['build_csfps'])[1]; ?> FPS @ 1440p </h5>
                    </div>
                </div>

                <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                    <div class="desk-game-name-ing654654">
                        <img src="<?php echo base_url() ?>../assets/img/item/d/3.png" alt="d1">
                        <h5> <?php echo explode(':',$product[0]['build_lolfps'])[0]; ?> FPS @ 1080p </h5>
                        <h5> <?php echo explode(':',$product[0]['build_lolfps'])[1]; ?> FPS @ 1440p </h5>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="games-sectoin-for-mobile-list997">
        
        <div class="list-1-mob-g-1">
            <div class="container">
                <div class="row">
                    <div class="col"> <img src="<?php echo base_url() ?>../assets/img/item/m/1.png" alt="m1"> </div>
                    <div class="col"> <h5> 101 FPS @ 1080p <br> 64 FPS @ 1440p </h5> </div>
                </div>
            </div>
        </div>

        <div class="list-2-mob-g-2">
            <div class="container">
                <div class="row">
                    <div class="col"> <img src="<?php echo base_url() ?>../assets/img/item/m/2.png" alt="m2"> </div>
                    <div class="col"> <h5> 217 FPS @ 1080p <br> 196 FPS @ 1440p </h5> </div>
                </div>
            </div>
        </div>

        <div class="list-1-mob-g-1">
            <div class="container">
                <div class="row">
                    <div class="col"> <img src="<?php echo base_url() ?>../assets/img/item/m/3.png" alt="m3"> </div>
                    <div class="col"> <h5> 184 FPS @ 1080p <br> 176 FPS @ 1440p </h5> </div>
                </div>
            </div>
        </div>

    </section>