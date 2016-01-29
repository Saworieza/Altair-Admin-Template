<?php defined('safe_access') or die('Restricted access!'); ?>

    <div id="page_content">
        <div id="page_content_inner">

            <h3 class="heading_b">Grid</h3>

            <div class="uk-grid" data-uk-grid-margin>
                <div class="uk-width-medium-1-2">
                    <div class="md-card">
                        <div class="md-card-content">
                            <?php echo $faker->sentence(40) ?>

                        </div>
                    </div>
                </div>
                <div class="uk-width-medium-1-2">
                    <div class="md-card">
                        <div class="md-card-content">
                            <?php echo $faker->sentence(40) ?>

                        </div>
                    </div>
                </div>
            </div>

            <div class="uk-grid" data-uk-grid-margin>
                <div class="uk-width-medium-1-3">
                    <div class="md-card">
                        <div class="md-card-content">
                            <?php echo $faker->sentence(40) ?>

                        </div>
                    </div>
                </div>
                <div class="uk-width-medium-1-3">
                    <div class="md-card">
                        <div class="md-card-content">
                            <?php echo $faker->sentence(40) ?>

                        </div>
                    </div>
                </div>
                <div class="uk-width-medium-1-3">
                    <div class="md-card">
                        <div class="md-card-content">
                            <?php echo $faker->sentence(40) ?>

                        </div>
                    </div>
                </div>
            </div>

            <div class="uk-grid" data-uk-grid-margin data-uk-grid-match="{target:'.md-card'}">
                <div class="uk-width-medium-2-10">
                    <div class="md-card">
                        <div class="md-card-content">
                            <?php echo $faker->sentence(30) ?>

                        </div>
                    </div>
                </div>
                <div class="uk-width-medium-8-10">
                    <div class="md-card">
                        <div class="md-card-content">
                            <?php echo $faker->sentence(120) ?>

                        </div>
                    </div>
                </div>
            </div>

            <h3 class="heading_b uk-margin-bottom">Grid gutter</h3>

            <h4 class="heading_c">Medium</h4>

            <div class="uk-grid uk-grid-medium" data-uk-grid-margin data-uk-grid-match="{target:'.md-card'}">
                <div class="uk-width-medium-1-3">
                    <div class="md-card">
                        <div class="md-card-content">
                            <?php echo $faker->sentence(30) ?>

                        </div>
                    </div>
                </div>
                <div class="uk-width-medium-1-3">
                    <div class="md-card">
                        <div class="md-card-content">
                            <?php echo $faker->sentence(30) ?>

                        </div>
                    </div>
                </div>
                <div class="uk-width-medium-1-3">
                    <div class="md-card">
                        <div class="md-card-content">
                            <?php echo $faker->sentence(30) ?>

                        </div>
                    </div>
                </div>
            </div>

            <h4 class="heading_c">Small</h4>

            <div class="uk-grid uk-grid-small" data-uk-grid-margin data-uk-grid-match="{target:'.md-card'}">
                <div class="uk-width-medium-1-3">
                    <div class="md-card">
                        <div class="md-card-content">
                            <?php echo $faker->sentence(30) ?>

                        </div>
                    </div>
                </div>
                <div class="uk-width-medium-1-3">
                    <div class="md-card">
                        <div class="md-card-content">
                            <?php echo $faker->sentence(30) ?>

                        </div>
                    </div>
                </div>
                <div class="uk-width-medium-1-3">
                    <div class="md-card">
                        <div class="md-card-content">
                            <?php echo $faker->sentence(30) ?>

                        </div>
                    </div>
                </div>
            </div>

            <h4 class="heading_c">Collapse</h4>

            <div class="uk-grid uk-grid-collapse" data-uk-grid-margin data-uk-grid-match="{target:'.md-card'}">
                <div class="uk-width-medium-1-3">
                    <div class="md-card">
                        <div class="md-card-content">
                            <?php echo $faker->sentence(30) ?>

                        </div>
                    </div>
                </div>
                <div class="uk-width-medium-1-3">
                    <div class="md-card">
                        <div class="md-card-content">
                            <?php echo $faker->sentence(30) ?>

                        </div>
                    </div>
                </div>
                <div class="uk-width-medium-1-3">
                    <div class="md-card">
                        <div class="md-card-content">
                            <?php echo $faker->sentence(30) ?>

                        </div>
                    </div>
                </div>
            </div>

            <h3 class="heading_b uk-margin-bottom">Grid divider</h3>

            <div class="md-card">
                <div class="md-card-content">
                    <div class="uk-grid uk-grid-divider" data-uk-grid-margin>
                        <div class="uk-width-medium-1-4">
                            <?php echo $faker->sentence(30) ?>

                        </div>
                        <div class="uk-width-medium-1-4">
                            <?php echo $faker->sentence(30) ?>

                        </div>
                        <div class="uk-width-medium-1-4">
                            <?php echo $faker->sentence(30) ?>

                        </div>
                        <div class="uk-width-medium-1-4">
                            <?php echo $faker->sentence(30) ?>

                        </div>
                    </div>
                    <hr class="uk-grid-divider">
                    <div class="uk-grid uk-grid-divider" data-uk-grid-margin>
                        <div class="uk-width-medium-1-3">
                            <?php echo $faker->sentence(30) ?>

                        </div>
                        <div class="uk-width-medium-1-3">
                            <?php echo $faker->sentence(30) ?>

                        </div>
                        <div class="uk-width-medium-1-3">
                            <?php echo $faker->sentence(30) ?>

                        </div>
                    </div>
                    <hr class="uk-grid-divider">
                    <div class="uk-grid uk-grid-divider" data-uk-grid-margin>
                        <div class="uk-width-medium-1-6">
                            <?php echo $faker->sentence(10) ?>

                        </div>
                        <div class="uk-width-medium-1-6">
                            <?php echo $faker->sentence(10) ?>

                        </div>
                        <div class="uk-width-medium-1-6">
                            <?php echo $faker->sentence(10) ?>

                        </div>
                        <div class="uk-width-medium-1-6">
                            <?php echo $faker->sentence(10) ?>

                        </div>
                        <div class="uk-width-medium-1-6">
                            <?php echo $faker->sentence(10) ?>

                        </div>
                        <div class="uk-width-medium-1-6">
                            <?php echo $faker->sentence(10) ?>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
