<?php
$services = get_post_meta(get_the_ID(), $home_meta . 'services', 1);
?>

<?php if ($services): ?>
    <div class="p-0 c20-sec c20-sec-utility">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="d-flex flex-wrap justify-content-between service-list">
                        <?php
                            foreach ( (array) $services as $key => $service ) :
                                $service_title = $service[$home_meta.'service_title'];
                                $service_url = $service[$home_meta.'service_url'];
                                $service_icon = $service[$home_meta.'service_icon']; ?>

                                <div id="service-<?php echo $key + 1?>" class="c20-iconbox text-center aos-init aos-animate" data-aos-offset="0"
                                     data-aos="zoom-in" data-aos-duration="900" data-aos-delay="500">
                                    <a class="text-light" href="<?php echo ($service_url) ? $service_url : ''; ?>">
                                        <div class="c20-iconbox-thumb">
                                            <img src="<?php echo ($service_icon) ? $service_icon : ''; ?>"
                                                 alt="Plumbing Service">
                                        </div>
                                        <div class="c20-iconbox-body">
                                            <h2 class="h5 text-white m-0  font-weight-bold text-uppercase"><?php echo ($service_title) ? $service_title : ""; ?></h2>
                                        </div>
                                    </a>
                                </div>
                        <?php endforeach;  ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif ?>
