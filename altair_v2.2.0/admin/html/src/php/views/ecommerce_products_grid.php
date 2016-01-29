<?php defined('safe_access') or die('Restricted access!'); ?>

    <div id="page_content">
        <div id="page_content_inner">

            <h3 class="heading_a uk-margin-bottom">Sort products by name:</h3>

            <ul id="products_sort" class="uk-subnav uk-subnav-pill">
                <li data-uk-sort="product-name:asc"><a href="#">Ascending</a></li>
                <li data-uk-sort="product-name:desc"><a href="#">Descending</a></li>
            </ul>

            <div class="uk-grid-width-small-1-2 uk-grid-width-medium-1-3 uk-grid-width-large-1-4 hierarchical_show" data-uk-grid="{gutter: 20, controls: '#products_sort'}">
<?php
    for($i=0;$i<24;$i++) {
    $product_name = $faker->sentence(2);
?>
                <div data-product-name="<?php echo $product_name; ?>">
                    <div class="md-card md-card-hover-img">
                        <div class="md-card-head uk-text-center uk-position-relative">
                            <div class="uk-badge uk-badge-danger uk-position-absolute uk-position-top-left uk-margin-left uk-margin-top">$ <?php echo rand(450,600); ?>.00</div>
                            <img class="md-card-head-img" src="<?php echo $img_path?>/ecommerce/s6_edge.jpg" alt=""/>
                        </div>
                        <div class="md-card-content">
                            <h4 class="heading_c uk-margin-bottom">
                                <?php echo $product_name; ?>

                                <span class="sub-heading">SKU: <?php echo rand(100000,200000);?></span>
                            </h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aliquid autem cupiditate harum illum&hellip;</p>
                            <a class="md-btn md-btn-small" href="ecommerce_product_details.html">More</a>
                        </div>
                    </div>
                </div>
<?php } ?>
            </div>

        </div>
    </div>
