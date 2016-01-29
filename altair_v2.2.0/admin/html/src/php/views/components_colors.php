<?php defined('safe_access') or die('Restricted access!'); ?>
<?php
    $color_variant = [
        '50','100','200','300','400','500','600','700','800','900','A100','A200','A400','A700'
    ];
    $color_array = [
        array('red',array('1','2','3','4','11')),
        array('pink',array('1','2','3','11')),
        array('purple',array('1','2','3','11')),
        array('deep-purple',array('1','2','3','11')),
        array('indigo',array('1','2','3','11')),
        array('blue',array('1','2','3','4','5','11')),
        array('light-blue',array('1','2','3','4','5','6','11','12','13')),
        array('cyan',array('1','2','3','4','5','6','7','11','12','13','14')),
        array('teal',array('1','2','3','4','5','11','12','13','14')),
        array('green',array('1','2','3','4','5','6','11','12','13','14')),
        array('light-green',array('1','2','3','4','5','6','7','11','12','13','14')),
        array('lime',array('1','2','3','4','5','6','7','8','9','11','12','13','14')),
        array('yellow',array('1','2','3','4','5','6','7','8','9','10','11','12','13','14')),
        array('amber',array('1','2','3','4','5','6','7','8','9','10','11','12','13','14')),
        array('orange',array('1','2','3','4','5','6','7','8','11','12','13','14')),
        array('deep-orange',array('1','2','3','4','5','11','12')),
        array('brown',array('1','2','3'),10),
        array('grey',array('1','2','3','4','5','6'),10),
        array('blue-grey',array('1','2','3','4'),10)
    ];

    $colors_length = count($color_array);
    $variants_length_accent = count($color_variant);
    $variants_length_no_accent = count($color_variant)-4;
?>

    <div id="page_content">
        <div id="page_content_inner">

            <h2 class="heading_b">Material Design Colors</h2>
            <h3 class="heading_a uk-margin-medium-top uk-margin-bottom">Background</h3>
            <div class="md-card">
                <div class="md-card-content">
                    <div class="uk-grid" data-uk-grid-margin>
<?php for($i=0;$i<$colors_length;$i++) { ?>
                        <div class="uk-width-medium-1-4">
                        <h4 class="heading_c uk-margin-small-bottom" style="text-transform: capitalize"><?php echo $color_array[$i][0]; ?></h4>
    <?php if($i<16) { $variants_length = $variants_length_accent; } else { $variants_length = $variants_length_no_accent; } ?>
    <?php for($j=0;$j<$variants_length;$j++) { ?>
                            <div class="md-bg-<?php echo $color_array[$i][0].'-'.$color_variant[$j]; if(!in_array($j+1,$color_array[$i][1])) echo ' uk-text-contrast' ?>" style="padding:12px 8px">.md-bg-<?php echo $color_array[$i][0].'-'.$color_variant[$j]?></div>
        <?php if($j == 9) { ?>
                            <div style="height:4px;background:#fff"></div>
        <?php }; ?>
    <?php } ?>
                        </div>
<?php } ?>
                    </div>
                </div>
            </div>

            <h3 class="heading_a uk-margin-medium-top uk-margin-bottom">Colors</h3>
            <div class="md-card">
                <div class="md-card-content">
                    <div class="uk-grid" data-uk-grid-margin>
<?php for($i=0;$i<$colors_length;$i++) { ?>
                            <div class="uk-width-medium-1-4">
                                <h4 class="heading_c uk-margin-small-bottom" style="text-transform: capitalize"><?php echo $color_array[$i][0]; ?></h4>
    <?php if($i<16) { $variants_length = $variants_length_accent; } else { $variants_length = $variants_length_no_accent; } ?>
    <?php for($j=0;$j<$variants_length;$j++) { ?>
                                    <div class="uk-text-bold md-color-<?php echo $color_array[$i][0].'-'.$color_variant[$j];?>" style="padding:12px 8px;<?php  if(in_array($j+1,$color_array[$i][1])) echo 'background:#212121;' ?>">.md-color-<?php echo $color_array[$i][0].'-'.$color_variant[$j]?></div>
        <?php if($j == 9) { ?>
                                    <div style="height:4px;background:#fff"></div>
        <?php }; ?>
    <?php } ?>
                            </div>
<?php } ?>
                    </div>
                </div>
            </div>

        </div>
    </div>
