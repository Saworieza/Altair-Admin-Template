<?php defined('safe_access') or die('Restricted access!'); ?>

    <div id="page_content">
        <div id="page_content_inner">

            <div class="md-card">
                <div class="md-card-content">
                    <h3 class="heading_a">Modals</h3>

                    <div class="uk-grid" data-uk-grid-margin>
                        <div class="uk-width-medium-1-3">
                            <p class="uk-text-large">Default</p>
                            <button class="md-btn" data-uk-modal="{target:'#modal_default'}">Open</button>
                            <div class="uk-modal" id="modal_default">
                                <div class="uk-modal-dialog">
                                    <button type="button" class="uk-modal-close uk-close"></button>
                                    <p><?php echo $faker->sentence(60); ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="uk-width-medium-1-3">
                            <p class="uk-text-large">Header/Footer</p>
                            <button class="md-btn" data-uk-modal="{target:'#modal_header_footer'}">Open</button>
                            <div class="uk-modal" id="modal_header_footer">
                                <div class="uk-modal-dialog">
                                    <div class="uk-modal-header">
                                        <h3 class="uk-modal-title">Headline</h3>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, aliquid amet animi aspernatur aut blanditiis doloribus eligendi est fugiat iure iusto laborum modi mollitia nemo pariatur, rem tempore. Dolor, excepturi.</p>
                                    <div class="uk-modal-footer uk-text-right">
                                        <button type="button" class="md-btn md-btn-flat uk-modal-close">Close</button><button type="button" class="md-btn md-btn-flat md-btn-flat-primary">Action</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="uk-width-medium-1-3">
                            <p class="uk-text-large">Lightbox</p>
                            <button class="md-btn" data-uk-modal="{target:'#modal_lightbox'}">Open</button>
                            <div class="uk-modal" id="modal_lightbox">
                                <div class="uk-modal-dialog uk-modal-dialog-lightbox">
                                    <button type="button" class="uk-modal-close uk-close uk-close-alt"></button>
                                    <img src="assets/img/gallery/Image01.jpg" alt=""/>
                                    <div class="uk-modal-caption">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias animi autem consequuntur deleniti dolor ea expedita facere ipsum labore, libero magni, minus quas quibusdam quod quos saepe sequi veritatis vitae!</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="uk-grid" data-uk-grid-margin>
                        <div class="uk-width-medium-1-3">
                            <p class="uk-text-large">Large dialog modifier</p>
                            <button class="md-btn" data-uk-modal="{target:'#modal_large'}">Open</button>
                            <div class="uk-modal" id="modal_large">
                                <div class="uk-modal-dialog uk-modal-dialog-large">
                                    <button type="button" class="uk-modal-close uk-close"></button>
                                    <p><?php echo $faker->sentence(80); ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="uk-width-medium-1-3">
                            <p class="uk-text-large">Overflow container in modal</p>
                            <button class="md-btn" data-uk-modal="{target:'#modal_overflow'}">Open</button>
                            <div id="modal_overflow" class="uk-modal">
                                <div class="uk-modal-dialog">
                                    <button type="button" class="uk-modal-close uk-close"></button>
                                    <h2 class="heading_a">Some text above the scrollable box</h2>
                                    <p><?php echo $faker->sentence(50); ?></p>
                                    <div class="uk-overflow-container">
                                        <h2 class="heading_b">Overflow container</h2>
                                        <img src="assets/img/gallery/Image06.jpg" alt=""/>
                                        <p><?php echo $faker->sentence(400); ?></p>
                                        <p><?php echo $faker->sentence(400); ?></p>
                                        <p><?php echo $faker->sentence(400); ?></p>
                                        <p><?php echo $faker->sentence(400); ?></p>
                                    </div>
                                    <h2 class="heading_a">Some text below the overflow container</h2>
                                    <p><?php echo $faker->sentence(50); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="md-card">
                <div class="md-card-content">
                    <h3 class="heading_a">Dialogs</h3>

                    <div class="uk-grid" data-uk-grid-margin>
                        <div class="uk-width-medium-1-4">
                            <button type="button" class="md-btn" onclick="UIkit.modal.alert('Attention!')">Alert</button>
                        </div>
                        <div class="uk-width-medium-1-4">
                            <button type="button" class="md-btn" onclick="UIkit.modal.confirm('Are you sure?', function(){ UIkit.modal.alert('Confirmed!'); });">Confirm</button>
                        </div>
                        <div class="uk-width-medium-1-4">
                            <button type="button" class="md-btn" onclick="UIkit.modal.prompt('Name:', '', function(val){ UIkit.modal.alert('Hello '+(val || 'Mr noname')+'!'); });">Prompt</button>
                        </div>
                        <div class="uk-width-medium-1-4">
                            <button type="button" class="md-btn" onclick="(function(modal){ modal = UIkit.modal.blockUI('<div class=\'uk-text-center\'>Wait 5 sec...<br/><img class=\'uk-margin-top\' src=\'<?php echo $img_path;?>/spinners/spinner.gif\' alt=\'\'>'); setTimeout(function(){ modal.hide() }, 5000) })();">Block UI</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
