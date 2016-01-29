<?php defined('safe_access') or die('Restricted access!'); ?>

    <div id="page_content">
        <div id="page_content_inner">

            <h3 class="heading_b uk-margin-bottom">Tabs</h3>
            <div class="md-card uk-margin-medium-bottom">
                <div class="md-card-content">
                    <div class="uk-grid" data-uk-grid-margin>
                        <div class="uk-width-1-1">
                            <ul class="uk-tab" data-uk-tab="{connect:'#tabs_1'}">
                                <li class="uk-active"><a href="#">Active</a></li>
                                <li><a href="#">Item</a></li>
                                <li><a href="#">Item</a></li>
                                <li class="uk-disabled"><a href="#">Disabled</a></li>
                            </ul>
                            <ul id="tabs_1" class="uk-switcher uk-margin">
                                <li>Content 1</li>
                                <li>Content 2</li>
                                <li>Content 3</li>
                                <li>Content 4</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <h4 class="heading_a uk-margin-bottom">Horizontal modifiers</h4>
            <div class="md-card uk-margin-medium-bottom">
                <div class="md-card-content">
                    <div class="uk-grid" data-uk-grid-margin>
                        <div class="uk-width-medium-1-2">
                            <ul id="tabs_3" class="uk-switcher uk-margin">
                                <li>Content 1</li>
                                <li>Content 2</li>
                                <li>Content 3</li>
                                <li>Content 4</li>
                            </ul>
                            <ul class="uk-tab uk-tab-bottom" data-uk-tab="{connect:'#tabs_3'}">
                                <li class="uk-active"><a href="#">Active</a></li>
                                <li><a href="#">Item</a></li>
                                <li><a href="#">Item</a></li>
                                <li class="uk-disabled"><a href="#">Disabled</a></li>
                            </ul>
                        </div>
                        <div class="uk-width-medium-1-2">
                            <ul class="uk-tab uk-tab-flip" data-uk-tab="{connect:'#tabs_2'}">
                                <li class="uk-active"><a href="#">Active</a></li>
                                <li><a href="#">Item</a></li>
                                <li><a href="#">Item</a></li>
                                <li class="uk-disabled"><a href="#">Disabled</a></li>
                            </ul>
                            <ul id="tabs_2" class="uk-switcher uk-margin">
                                <li>Content 1</li>
                                <li>Content 2</li>
                                <li>Content 3</li>
                                <li>Content 4</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="uk-grid uk-margin-medium-bottom" data-uk-grid-margin>
                <div class="uk-width-medium-1-2">
                    <h4 class="heading_a uk-margin-bottom">Justify tabs</h4>
                    <div class="md-card">
                        <div class="md-card-content">
                            <ul class="uk-tab uk-tab-grid" data-uk-tab="{connect:'#tabs_4'}">
                                <li class="uk-width-1-3 uk-active"><a href="#">Active</a></li>
                                <li class="uk-width-1-3"><a href="#">Item</a></li>
                                <li class="uk-width-1-3"><a href="#">Item</a></li>
                            </ul>
                            <ul id="tabs_4" class="uk-switcher uk-margin">
                                <li>Content 1</li>
                                <li>Content 2</li>
                                <li>Content 3</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="uk-width-medium-1-2">
                    <h4 class="heading_a uk-margin-bottom">Center tabs</h4>
                    <div class="md-card">
                        <div class="md-card-content">
                            <div class="uk-tab-center">
                                <ul class="uk-tab" data-uk-tab="{connect:'#tabs_5'}">
                                    <li class="uk-active"><a href="#">Active</a></li>
                                    <li><a href="#">Item</a></li>
                                    <li><a href="#">Item</a></li>
                                </ul>
                            </div>
                            <ul id="tabs_5" class="uk-switcher uk-margin">
                                <li>Content 1</li>
                                <li>Content 2</li>
                                <li>Content 3</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <h4 class="heading_a uk-margin-bottom">Vertical modifiers</h4>
            <div class="md-card uk-margin-medium-bottom">
                <div class="md-card-content">
                    <div class="uk-grid uk-grid-divider" data-uk-grid-margin>
                        <div class="uk-width-large-1-2">
                            <div class="uk-grid uk-grid-medium" data-uk-grid-margin>
                                <div class="uk-width-1-3">
                                    <ul class="uk-tab uk-tab-left" data-uk-tab="{connect:'#tabs_6'}">
                                        <li class="uk-active"><a href="#">Active</a></li>
                                        <li><a href="#">Item</a></li>
                                        <li><a href="#">Item</a></li>
                                    </ul>
                                </div>
                                <div class="uk-width-2-3">
                                    <ul id="tabs_6" class="uk-switcher uk-margin-small-top">
                                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda at, dignissimos esse eveniet id itaque laudantium modi nisi perferendis placeat provident quia recusandae reprehenderit sed sit soluta voluptas! Architecto, laboriosam?</li>
                                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, autem, blanditiis consequatur cumque dicta distinctio ea esse eum exercitationem explicabo id incidunt molestiae numquam quae rem repellat reprehenderit tempore voluptatem!</li>
                                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci aperiam architecto, atque aut autem dicta dolorem enim fugit impedit maxime nam, nesciunt provident quibusdam rerum sed similique voluptate voluptatibus. Laudantium.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="uk-width-large-1-2">
                            <div class="uk-grid uk-grid-medium" data-uk-grid-margin>
                                <div class="uk-width-2-3">
                                    <ul id="tabs_7" class="uk-switcher uk-margin-small-top">
                                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda at, dignissimos esse eveniet id itaque laudantium modi nisi perferendis placeat provident quia recusandae reprehenderit sed sit soluta voluptas! Architecto, laboriosam?</li>
                                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, autem, blanditiis consequatur cumque dicta distinctio ea esse eum exercitationem explicabo id incidunt molestiae numquam quae rem repellat reprehenderit tempore voluptatem!</li>
                                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci aperiam architecto, atque aut autem dicta dolorem enim fugit impedit maxime nam, nesciunt provident quibusdam rerum sed similique voluptate voluptatibus. Laudantium.</li>
                                    </ul>
                                </div>
                                <div class="uk-width-1-3">
                                    <ul class="uk-tab uk-tab-right" data-uk-tab="{connect:'#tabs_7'}">
                                        <li><a href="#">Item</a></li>
                                        <li class="uk-active"><a href="#">Active</a></li>
                                        <li><a href="#">Item</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <h4 class="heading_a uk-margin-bottom">Animations</h4>
            <div class="uk-grid" >
                <div class="uk-width-medium-1-3">
                    <div class="md-card" data-uk-grid-margin>
                        <div class="md-card-content">
                            <ul class="uk-tab" data-uk-tab="{connect:'#tabs_anim1', animation:'scale'}">
                                <li class="uk-active"><a href="#">Active</a></li>
                                <li><a href="#">Item</a></li>
                                <li><a href="#">Item</a></li>
                            </ul>
                            <ul id="tabs_anim1" class="uk-switcher uk-margin">
                                <li><?php echo $faker->sentence(24); ?></li>
                                <li><?php echo $faker->sentence(40); ?></li>
                                <li><?php echo $faker->sentence(30); ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="uk-width-medium-1-3">
                    <div class="md-card" data-uk-grid-margin>
                        <div class="md-card-content">
                            <ul class="uk-tab" data-uk-tab="{connect:'#tabs_anim2', animation:'slide-horizontal'}">
                                <li class="uk-active"><a href="#">Active</a></li>
                                <li><a href="#">Item</a></li>
                                <li><a href="#">Item</a></li>
                            </ul>
                            <ul id="tabs_anim2" class="uk-switcher uk-margin">
                                <li><?php echo $faker->sentence(24); ?></li>
                                <li><?php echo $faker->sentence(40); ?></li>
                                <li><?php echo $faker->sentence(30); ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="uk-width-medium-1-3">
                    <div class="md-card" data-uk-grid-margin>
                        <div class="md-card-content">
                            <ul class="uk-tab" data-uk-tab="{connect:'#tabs_anim3', animation:'slide-vertical'}">
                                <li class="uk-active"><a href="#">Active</a></li>
                                <li><a href="#">Item</a></li>
                                <li><a href="#">Item</a></li>
                            </ul>
                            <ul id="tabs_anim3" class="uk-switcher uk-margin">
                                <li><?php echo $faker->sentence(24); ?></li>
                                <li><?php echo $faker->sentence(40); ?></li>
                                <li><?php echo $faker->sentence(30); ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="uk-grid" >
                <div class="uk-width-medium-1-3">
                    <div class="md-card" data-uk-grid-margin>
                        <div class="md-card-content">
                            <ul class="uk-tab" data-uk-tab="{connect:'#tabs_anim4', animation:'slide-left'}">
                                <li class="uk-active"><a href="#">Active</a></li>
                                <li><a href="#">Item</a></li>
                                <li><a href="#">Item</a></li>
                            </ul>
                            <ul id="tabs_anim4" class="uk-switcher uk-margin">
                                <li><?php echo $faker->sentence(24); ?></li>
                                <li><?php echo $faker->sentence(40); ?></li>
                                <li><?php echo $faker->sentence(30); ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="uk-width-medium-1-3">
                    <div class="md-card" data-uk-grid-margin>
                        <div class="md-card-content">
                            <ul class="uk-tab" data-uk-tab="{connect:'#tabs_anim5', animation:'slide-right'}">
                                <li class="uk-active"><a href="#">Active</a></li>
                                <li><a href="#">Item</a></li>
                                <li><a href="#">Item</a></li>
                            </ul>
                            <ul id="tabs_anim5" class="uk-switcher uk-margin">
                                <li><?php echo $faker->sentence(24); ?></li>
                                <li><?php echo $faker->sentence(40); ?></li>
                                <li><?php echo $faker->sentence(30); ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="uk-width-medium-1-3">
                    <div class="md-card" data-uk-grid-margin>
                        <div class="md-card-content">
                            <ul class="uk-tab" data-uk-tab="{connect:'#tabs_anim6', animation:'slide-bottom'}">
                                <li class="uk-active"><a href="#">Active</a></li>
                                <li><a href="#">Item</a></li>
                                <li><a href="#">Item</a></li>
                            </ul>
                            <ul id="tabs_anim6" class="uk-switcher uk-margin">
                                <li><?php echo $faker->sentence(24); ?></li>
                                <li><?php echo $faker->sentence(40); ?></li>
                                <li><?php echo $faker->sentence(30); ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
