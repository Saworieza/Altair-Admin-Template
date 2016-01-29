<?php defined('safe_access') or die('Restricted access!'); ?>

    <div id="page_content">
        <div id="page_content_inner">

            <div class="md-card">
                <div class="md-card-content">
                    <div class="uk-grid" data-uk-grid-margin="">
                        <div class="uk-width-medium-3-10">
                            <label for="product_search_name">Product Name</label>
                            <input type="text" class="md-input" id="product_search_name">
                        </div>
                        <div class="uk-width-medium-1-10">
                            <label for="product_search_price">Price</label>
                            <input type="text" class="md-input" id="product_search_price">
                        </div>
                        <div class="uk-width-medium-3-10">
                            <div class="uk-margin-small-top">
                                <select id="product_search_status" data-md-selectize multiple data-md-selectize-bottom>
                                    <option value="">Status</option>
                                    <option value="1">In stock</option>
                                    <option value="2">Out of stock</option>
                                    <option value="3">Ships in 3-5 days</option>
                                </select>
                            </div>
                        </div>
                        <div class="uk-width-medium-1-10">
                            <div class="uk-margin-top uk-text-nowrap">
                                <input type="checkbox" name="product_search_active" id="product_search_active" data-md-icheck/>
                                <label for="product_search_active" class="inline-label">Active</label>
                            </div>
                        </div>
                        <div class="uk-width-medium-2-10 uk-text-center">
                            <a href="#" class="md-btn md-btn-primary uk-margin-small-top">Filter</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="md-card">
                <div class="md-card-content">
                    <div class="uk-grid" data-uk-grid-margin>
                        <div class="uk-width-1-1">
                            <div class="uk-overflow-container">
                                <table class="uk-table">
                                    <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>Product Name</th>
                                            <th>Price</th>
                                            <th>Quantity</th>
                                            <th>Status</th>
                                            <th>Active</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
<?php
    for($i=0;$i<10;$i++) {
    $status = [
        '<span class="uk-badge uk-badge-success">In stock</span>',
        '<span class="uk-badge uk-badge-danger">Out of stock</span>',
        '<span class="uk-badge uk-badge-muted">Ships in 3-5 days</span>'
    ];
    $active = [
        '<i class="material-icons uk-text-success md-24">&#xE834;</i>',
        '<i class="material-icons uk-text-muted md-24">&#xE835;</i>'
    ]
?>
                                        <tr>
                                            <td><img class="img_thumb" src="<?php echo $img_path?>/ecommerce/s6_edge_<?php echo rand(1,3);?>.jpg" alt=""></td>
                                            <td class="uk-text-large uk-text-nowrap"><a href="ecommerce_product_details.html"><?php echo $faker->sentence(3); ?></a></td>
                                            <td class="uk-text-nowrap">$ <?php echo rand(450,600)?>.00</td>
                                            <td><?php echo rand(10,100)?></td>
                                            <td class="uk-text-nowrap"><?php echo $status[array_rand($status)]; ?></td>
                                            <td><?php echo $active[array_rand($active)]; ?></td>
                                            <td class="uk-text-nowrap">
                                                <a href="ecommerce_product_details.html"><i class="material-icons md-24">&#xE8F4;</i></a>
                                                <a href="#"><i class="material-icons md-24">&#xE872;</i></a>
                                            </td>
                                        </tr>
<?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            <ul class="uk-pagination uk-margin-medium-top uk-margin-medium-bottom">
                                <li class="uk-disabled"><span><i class="uk-icon-angle-double-left"></i></span></li>
                                <li class="uk-active"><span>1</span></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><span>&hellip;</span></li>
                                <li><a href="#">20</a></li>
                                <li><a href="#"><i class="uk-icon-angle-double-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
