<?php defined('safe_access') or die('Restricted access!'); ?>

    <div id="page_content">
        <div id="page_content_inner">

            <h3 class="heading_a uk-margin-bottom">Default</h3>
            <div class="uk-grid-width-small-1-2 uk-grid-width-medium-1-3 uk-grid-width-large-1-4 uk-margin-large-bottom hierarchical_show" data-uk-grid="{gutter: 20}">
<?php for($i=0;$i<9;$i++) { ?>
                <div>
                    <div class="md-card">
                        <div class="md-card-content"><?php echo $faker->sentence(30); ?></div>
                    </div>
                </div>
<?php } ?>

            </div>

            <h3 class="heading_a uk-margin-bottom">Filtering</h3>

            <ul id="filter" class="uk-subnav uk-subnav-pill">
                <li class="uk-active" data-uk-filter=""><a href="#">All</a></li>
                <li data-uk-filter="filter-a"><a href="#">Filter A</a></li>
                <li data-uk-filter="filter-b"><a href="#">Filter B</a></li>
            </ul>

            <div class="uk-grid-width-small-1-2 uk-grid-width-medium-1-3 uk-grid-width-large-1-4 uk-margin-large-bottom hierarchical_show" data-uk-grid="{gutter: 20, controls: '#filter'}">
                <div data-uk-filter="filter-a">
                    <div class="md-card">
                        <div class="md-card-content">
                            <h4 class="heading_c uk-margin-bottom">A 1</h4>
                            <?php echo $faker->sentence(24); ?>

                        </div>
                    </div>
                </div>
                <div data-uk-filter="filter-b">
                    <div class="md-card">
                        <div class="md-card-content">
                            <h4 class="heading_c uk-margin-bottom">B 1</h4>
                            <?php echo $faker->sentence(20); ?>

                        </div>
                    </div>
                </div>
                <div data-uk-filter="filter-a">
                    <div class="md-card">
                        <div class="md-card-content">
                            <h4 class="heading_c uk-margin-bottom">A 2</h4>
                            <?php echo $faker->sentence(28); ?>

                        </div>
                    </div>
                </div>
                <div data-uk-filter="filter-b">
                    <div class="md-card">
                        <div class="md-card-content">
                            <h4 class="heading_c uk-margin-bottom">B 2</h4>
                            <?php echo $faker->sentence(25); ?>

                        </div>
                    </div>
                </div>
                <div data-uk-filter="filter-b">
                    <div class="md-card">
                        <div class="md-card-content">
                            <h4 class="heading_c uk-margin-bottom">B 3</h4>
                            <?php echo $faker->sentence(16); ?>

                        </div>
                    </div>
                </div>
                <div data-uk-filter="filter-a">
                    <div class="md-card">
                        <div class="md-card-content">
                            <h4 class="heading_c uk-margin-bottom">A 3</h4>
                            <?php echo $faker->sentence(16); ?>

                        </div>
                    </div>
                </div>
                <div data-uk-filter="filter-a,filter-b">
                    <div class="md-card">
                        <div class="md-card-content">
                            <h4 class="heading_c uk-margin-bottom">A&B 4</h4>
                            <?php echo $faker->sentence(22); ?>

                        </div>
                    </div>
                </div>
            </div>

            <h3 class="heading_a uk-margin-bottom">Sorting</h3>

            <ul id="sort1" class="uk-subnav uk-subnav-pill">
                <li class="uk-active" data-uk-sort="my-category"><a href="#">Ascending</a></li>
                <li data-uk-sort="my-category:desc"><a href="#">Descending</a></li>
            </ul>

            <div class="uk-grid-width-small-1-2 uk-grid-width-medium-1-3 uk-grid-width-large-1-4 hierarchical_show" data-uk-grid="{gutter: 20, controls: '#sort1'}">
                <div data-my-category="a">
                    <div class="md-card">
                        <div class="md-card-content">
                            <h4 class="heading_c uk-margin-bottom">A</h4>
                            <?php echo $faker->sentence(22); ?>

                        </div>
                    </div>
                </div>
                <div data-my-category="b">
                    <div class="md-card">
                        <div class="md-card-content">
                            <h4 class="heading_c uk-margin-bottom">B</h4>
                            <?php echo $faker->sentence(22); ?>

                        </div>
                    </div>
                </div>
                <div data-my-category="c">
                    <div class="md-card">
                        <div class="md-card-content">
                            <h4 class="heading_c uk-margin-bottom">C</h4>
                            <?php echo $faker->sentence(22); ?>

                        </div>
                    </div>
                </div>
                <div data-my-category="d">
                    <div class="md-card">
                        <div class="md-card-content">
                            <h4 class="heading_c uk-margin-bottom">D</h4>
                            <?php echo $faker->sentence(22); ?>

                        </div>
                    </div>
                </div>
                <div data-my-category="e">
                    <div class="md-card">
                        <div class="md-card-content">
                            <h4 class="heading_c uk-margin-bottom">E</h4>
                            <?php echo $faker->sentence(22); ?>

                        </div>
                    </div>
                </div>
                <div data-my-category="f">
                    <div class="md-card">
                        <div class="md-card-content">
                            <h4 class="heading_c uk-margin-bottom">F</h4>
                            <?php echo $faker->sentence(22); ?>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
