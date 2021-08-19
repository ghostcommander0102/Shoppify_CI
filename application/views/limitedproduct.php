<?php for ($i=0; $i < count($products); $i++) { ?>
    <section id="p1-latest5" class="product-<?php echo $i%2 == 0?'odd':'even' ?> product-limited-<?php echo $i+1 ?>">
        <div class="container">
        
            <div class="row <?php echo $i%2 == 0?'reverse':'' ?>">
                <div class="col-md-6 <?php echo $i%2 == 0?'odd':'even' ?>-top">
                    <div class="product-img-area">
                        <a href="<?php echo base_url().'products/getDetail/'.$products[$i]['build_id'] ?>" ><img src="<?php echo base_url() ?>../assets/img/builds/<?php echo str_pad($products[$i]['build_id'],4, "0", STR_PAD_LEFT); ?>/1.png" alt="CGC [fill-build_name]"></a>
                    </div>
                </div>
                <div class="col-md-6 <?php echo $i%2 == 0?'odd':'even' ?>-bottom">
                    <div class="content-list-<?php echo $i%2 == 0?'odd':'even' ?>-area">
                        <h5 class="list-<?php echo $i%2 == 0?'odd':'even' ?>-top-title" ><?php echo $i+1; ?></h5>
                        <h2 class="<?php echo strlen($products[$i]['build_name']) > 10?'responsivesize50font':''; ?>"> <?php echo $products[$i]['build_name']; ?> </h2>
                        <h4> <?php echo $products[$i]['cpu_brand'].' '.$products[$i]['cpu_name'].' '.$products[$i]['cpu_value'].' | '.$products[$i]['ram_value'] ?> <br> <?php echo ' '.$products[$i]['ssd_value'].' SSD | '.$products[$i]['gpu_name'].' '.$products[$i]['gpu_value'] ?></h4>
                        <p> Reclaim your Birthright with the MSTR by your side. Due to post-apocalyptic production difficulties, only 1000 pieces of the MSTR will be produced; each with a unique-numbered, product-edition plaque and your very own Fallout Puck </p>
                        <p>starting at <span style="font-size:24px;font-weight: bold;">$<?php echo $products[$i]['build_price'] ?></span></p>
                        <a href="<?php echo base_url().'products/getDetail/'.$products[$i]['build_id'] ?>" class="list-btn-list-latest-45"> Learn More </a>
                    </div>
                </div>

            </div>
        </div>
    </section>
<?php }?>