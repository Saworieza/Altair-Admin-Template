<?php defined('safe_access') or die('Restricted access!'); ?>

    <div id="page_content">
        <div id="page_content_inner">

            <div class="md-card uk-margin-medium-bottom">
                <div class="md-card-content">
                    <div class="uk-overflow-container">
                        <table class="uk-table uk-table-nowrap">
                            <thead>
                            <tr>
                                <th class="uk-width-1-10 uk-text-center">User Image</th>
                                <th class="uk-width-2-10">User Name</th>
                                <th class="uk-width-2-10 uk-text-center"">Order Number</th>
                                <th class="uk-width-2-10 uk-text-center"">Order Date</th>
                                <th class="uk-width-1-10 uk-text-center">Status</th>
                                <th class="uk-width-2-10 uk-text-center">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
<?php
    for($i=1;$i<=8;$i++) {
    $randImg = rand(1,12);
    $status_array = ['<span class="uk-badge">Accepted</span>','<span class="uk-badge uk-badge-danger">Declined</span>','<span class="uk-badge uk-badge-primary">New</span>','<span class="uk-badge uk-badge-success">Shipped</span>'];
?>
                                <tr>
                                    <td class="uk-text-center"><img class="md-user-image" src="assets/img/avatars/avatar_<?php if($i<10) echo '0'; echo $i; ?>_tn.png" alt=""/></td>
                                    <td><?php echo $faker->firstName; echo ' '.$faker->lastName; ?></td>
                                    <td class="uk-text-center""><?php echo $faker->numberBetween(1, 100); ?>/2015</td>
                                    <td class="uk-text-center""><?php echo $faker->date('d-m-Y'); ?></td>
                                    <td class="uk-text-center"><?php echo $status_array[array_rand($status_array)]; ?></td>
                                    <td class="uk-text-center">
                                        <a href="#"><i class="md-icon material-icons">&#xE254;</i></a>
                                        <a href="#"><i class="md-icon material-icons">&#xE88F;</i></a>
                                    </td>
                                </tr>
<?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <ul class="uk-pagination uk-margin-medium-top">
                        <li class="uk-disabled"><span><i class="uk-icon-angle-double-left"></i></span></li>
                        <li class="uk-active"><span>1</span></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><span>&hellip;</span></li>
                        <li><a href="#">10</a></li>
                        <li><a href="#"><i class="uk-icon-angle-double-right"></i></a></li>
                    </ul>
                </div>
            </div>

            <div class="uk-grid" data-uk-grid-margin="">
                <div class="uk-width-medium-1-2">
                    <div class="md-card">
                        <div class="md-card-content">
                            <div class="uk-overflow-container">
                                <table class="uk-table uk-table-hover uk-table-nowrap">
                                    <thead>
                                        <tr>
                                            <th class="uk-width-1-10 uk-text-center uk-text-upper">Clients</th>
                                        </tr>
                                    </thead>
                                    <tbody>
<?php
    for($i=1;$i<=6;$i++) {
    $randImg = rand(1,12);
?>
                                        <tr>
                                            <td>
                                                <div class="uk-grid" data-uk-grid-margin>
                                                    <div class="uk-width-2-5 uk-width-small-1-5 uk-text-center">
                                                        <img class="md-user-image-large" src="assets/img/avatars/avatar_<?php if($i<10) echo '0'; echo $i; ?>.png" alt=""/>
                                                    </div>
                                                    <div class="uk-width-3-5 uk-width-small-4-5">
                                                        <h4 class="heading_a uk-margin-small-bottom"><?php echo $faker->firstName; echo ' '.$faker->lastName; ?></h4>
                                                        <p class="uk-margin-remove"><span class="uk-text-muted">Phone:</span> <?php echo $faker->phoneNumber;?></p>
                                                        <p class="uk-margin-remove"><span class="uk-text-muted">Email:</span> <?php echo $faker->email;?></p>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
<?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            <ul class="uk-pagination uk-margin-medium-top">
                                <li class="uk-disabled"><span><i class="uk-icon-angle-double-left"></i></span></li>
                                <li><span>&hellip;</span></li>
                                <li><a href="#">4</a></li>
                                <li class="uk-active"><span>5</span></li>
                                <li><a href="#">6</a></li>
                                <li><span>&hellip;</span></li>
                                <li><a href="#">20</a></li>
                                <li><a href="#"><i class="uk-icon-angle-double-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="uk-width-medium-1-2">
                    <div class="md-card">
                        <div class="md-card-content">
                            <div class="uk-overflow-container">
                                <table class="uk-table uk-table-hover uk-table-nowrap uk-table-align-vertical">
                                    <thead>
                                        <tr>
                                            <th class="uk-width-1-10"></th>
                                            <th class="uk-text-center md-bg-grey-100 uk-text-small"><i class="item-icon flag-US"></i> USD</th>
                                            <th class="uk-text-center md-bg-grey-100 uk-text-small"><i class="item-icon flag-EU"></i> EUR</th>
                                            <th class="uk-text-center md-bg-grey-100 uk-text-small"><i class="item-icon flag-JP"></i> JPY</th>
                                            <th class="uk-text-center md-bg-grey-100 uk-text-small"><i class="item-icon flag-GB"></i> GBP</th>
                                            <th class="uk-text-center md-bg-grey-100 uk-text-small"><i class="item-icon flag-CH"></i> CHF</th>
                                            <th class="uk-text-center md-bg-grey-100 uk-text-small"><i class="item-icon flag-CA"></i> CAD</th>
                                            <th class="uk-text-center md-bg-grey-100 uk-text-small"><i class="item-icon flag-AU"></i> AUD</th>
                                            <th class="uk-text-center md-bg-grey-100 uk-text-small"><i class="item-icon flag-HK"></i> HKD</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="md-bg-grey-100 uk-text-small"><i class="item-icon flag-US"></i> USD</td>
                                            <td class="uk-text-center uk-text-bold">&dash;&dash;</td>
                                            <td class="uk-text-center">1.1113</td>
                                            <td class="uk-text-center">0.0080</td>
                                            <td class="uk-text-center">1.5650</td>
                                            <td class="uk-text-center">1.0242</td>
                                            <td class="uk-text-center">0.7638</td>
                                            <td class="uk-text-center">0.7381</td>
                                            <td class="uk-text-center">0.1289</td>
                                        </tr>
                                        <tr>
                                            <td class="md-bg-grey-100 uk-text-small"><i class="item-icon flag-EU"></i> EUR</td>
                                            <td class="uk-text-center">0.8998</td>
                                            <td class="uk-text-center uk-text-bold">&dash;&dash;</td>
                                            <td class="uk-text-center">0.0072</td>
                                            <td class="uk-text-center">1.4081</td>
                                            <td class="uk-text-center">0.9217</td>
                                            <td class="uk-text-center">0.6873</td>
                                            <td class="uk-text-center">0.6637</td>
                                            <td class="uk-text-center">0.1160</td>
                                        </tr>
                                        <tr>
                                            <td class="md-bg-grey-100 uk-text-small"><i class="item-icon flag-JP"></i> JPY</td>
                                            <td class="uk-text-center">124.2700</td>
                                            <td class="uk-text-center">138.1100</td>
                                            <td class="uk-text-center uk-text-bold">&dash;&dash;</td>
                                            <td class="uk-text-center">194.4670</td>
                                            <td class="uk-text-center">127.2860</td>
                                            <td class="uk-text-center">94.9140</td>
                                            <td class="uk-text-center">91.6770</td>
                                            <td class="uk-text-center">16.0220</td>
                                        </tr>
                                        <tr>
                                            <td class="md-bg-grey-100 uk-text-small"><i class="item-icon flag-GB"></i> GBP</td>
                                            <td class="uk-text-center">0.6390</td>
                                            <td class="uk-text-center">0.7103</td>
                                            <td class="uk-text-center">0.0051</td>
                                            <td class="uk-text-center uk-text-bold">&dash;&dash;</td>
                                            <td class="uk-text-center">0.6545</td>
                                            <td class="uk-text-center">0.4881</td>
                                            <td class="uk-text-center">0.4714</td>
                                            <td class="uk-text-center">0.0824</td>
                                        </tr>
                                        <tr>
                                            <td class="md-bg-grey-100 uk-text-small"><i class="item-icon flag-CH"></i> CHF</td>
                                            <td class="uk-text-center">0.9763</td>
                                            <td class="uk-text-center">1.0851</td>
                                            <td class="uk-text-center">0.0079</td>
                                            <td class="uk-text-center">1.5279</td>
                                            <td class="uk-text-center uk-text-bold">&dash;&dash;</td>
                                            <td class="uk-text-center">0.7458</td>
                                            <td class="uk-text-center">0.7203</td>
                                            <td class="uk-text-center">0.1259</td>
                                        </tr>
                                        <tr>
                                            <td class="md-bg-grey-200 uk-text-small"><i class="item-icon flag-CA"></i> CAD</td>
                                            <td class="uk-text-center">1.3092</td>
                                            <td class="uk-text-center">1.4552</td>
                                            <td class="uk-text-center">0.0105</td>
                                            <td class="uk-text-center">2.0489</td>
                                            <td class="uk-text-center">1.3411</td>
                                            <td class="uk-text-center uk-text-bold">&dash;&dash;</td>
                                            <td class="uk-text-center">0.9659</td>
                                            <td class="uk-text-center">0.1688</td>
                                        </tr>
                                        <tr>
                                            <td class="md-bg-grey-200 uk-text-small"><i class="item-icon flag-AU"></i> AUD</td>
                                            <td class="uk-text-center">1.3554</td>
                                            <td class="uk-text-center">1.5064</td>
                                            <td class="uk-text-center">0.0109</td>
                                            <td class="uk-text-center">2.1213</td>
                                            <td class="uk-text-center">1.3885</td>
                                            <td class="uk-text-center">1.0353</td>
                                            <td class="uk-text-center uk-text-bold">&dash;&dash;</td>
                                            <td class="uk-text-center">0.1748</td>
                                        </tr>
                                        <tr>
                                            <td class="md-bg-grey-200 uk-text-small"><i class="item-icon flag-HK"></i> HKD</td>
                                            <td class="uk-text-center">7.7558</td>
                                            <td class="uk-text-center">8.6204</td>
                                            <td class="uk-text-center">0.0624</td>
                                            <td class="uk-text-center">12.1374</td>
                                            <td class="uk-text-center">7.9443</td>
                                            <td class="uk-text-center">5.9240</td>
                                            <td class="uk-text-center">5.7218</td>
                                            <td class="uk-text-center uk-text-bold">&dash;&dash;</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
