<?php defined('safe_access') or die('Restricted access!'); ?>

<?php $todo_array = [ true, false ]; ?>

    <div id="page_content">
        <div id="page_content_inner">

            <div class="uk-width-medium-8-10 uk-container-center">
                <div class="md-card md-card-single">
                    <div class="md-card-toolbar">
                        <div class="md-card-toolbar-actions">
                            <i class="md-icon material-icons">&#xE149;</i>
                        </div>
                        <h3 class="md-card-toolbar-heading-text large">
                            Todo List
                        </h3>
                    </div>
                    <div class="md-card-content" id="todo_list">
                        <div class="uk-margin-large-bottom">
                            <h2 class="heading_list">PERSONAL</h2>
                            <ul class="md-list md-list-addon uk-margin-small-bottom uk-nestable" data-uk-nestable="{ maxDepth:2,handleClass:'md-list-content'}">
                                <li class="uk-nestable-item">
                                    <div class="md-list-addon-element">
                                        <input type="checkbox" data-md-icheck />
                                    </div>
                                    <div class="md-list-content">
                                        <a href="#" class="md-list-action"><i class="md-icon material-icons">&#xE872;</i></a>
                                        <span class="md-list-heading">Task 1</span>
                                        <span class="uk-text-small uk-text-muted"><?php echo $faker->sentence(8); ?></span>
                                    </div>
                                    <ul class="uk-nestable">
                                        <li class="uk-nestable-item md-list-item-disabled">
                                            <div class="md-list-addon-element">
                                                
                                                <input type="checkbox" data-md-icheck checked />
                                            </div>
                                            <div class="md-list-content">
                                                <a href="#" class="md-list-action"><i class="md-icon material-icons">&#xE872;</i></a>
                                                <span class="md-list-heading">Task 1 subtask 1</span>
                                                <span class="uk-text-small uk-text-muted"><?php echo $faker->sentence(8); ?></span>
                                            </div>
                                        </li>
                                        <li class="uk-nestable-item">
                                            <div class="md-list-addon-element">
                                                
                                                <input type="checkbox" data-md-icheck />
                                            </div>
                                            <div class="md-list-content">
                                                <a href="#" class="md-list-action"><i class="md-icon material-icons">&#xE872;</i></a>
                                                <span class="md-list-heading">Task 1 subtask 2</span>
                                                <span class="uk-text-small uk-text-muted"><?php echo $faker->sentence(8); ?></span>
                                            </div>
                                        </li>
                                        <li class="uk-nestable-item">
                                            <div class="md-list-addon-element">
                                                
                                                <input type="checkbox" data-md-icheck />
                                            </div>
                                            <div class="md-list-content">
                                                <a href="#" class="md-list-action"><i class="md-icon material-icons">&#xE872;</i></a>
                                                <span class="md-list-heading">Task 1 subtask 3</span>
                                                <span class="uk-text-small uk-text-muted"><?php echo $faker->sentence(8); ?></span>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="uk-nestable-item">
                                    <div class="md-list-addon-element">
                                        <input type="checkbox" data-md-icheck />
                                    </div>
                                    <div class="md-list-content">
                                        <a href="#" class="md-list-action"><i class="md-icon material-icons">&#xE872;</i></a>
                                        <span class="md-list-heading uk-text-danger">Important Task</span>
                                        <span class="uk-text-small uk-text-danger"><?php echo $faker->sentence(8); ?></span>
                                    </div>
                                </li>
                                <li class="uk-nestable-item">
                                    <div class="md-list-addon-element">
                                        <input type="checkbox" data-md-icheck />
                                    </div>
                                    <div class="md-list-content">
                                        <a href="#" class="md-list-action"><i class="md-icon material-icons">&#xE872;</i></a>
                                        <span class="md-list-heading">Another Task</span>
                                        <span class="uk-text-small uk-text-muted"><?php echo $faker->sentence(8); ?></span>
                                    </div>
                                </li>
                                <li class="uk-nestable-item">
                                    <div class="md-list-addon-element">
                                        <input type="checkbox" data-md-icheck />
                                    </div>
                                    <div class="md-list-content">
                                        <a href="#" class="md-list-action"><i class="md-icon material-icons">&#xE872;</i></a>
                                        <span class="md-list-heading">Another Task</span>
                                        <span class="uk-text-small uk-text-muted"><?php echo $faker->sentence(8); ?></span>
                                    </div>
                                    <ul class="uk-nestable">
                                        <li class="uk-nestable-item md-list-item-disabled">
                                            <div class="md-list-addon-element">
                                                <input type="checkbox" data-md-icheck checked />
                                            </div>
                                            <div class="md-list-content">
                                                <a href="#" class="md-list-action"><i class="md-icon material-icons">&#xE872;</i></a>
                                                <span class="md-list-heading">Another Task subtask</span>
                                                <span class="uk-text-small uk-text-muted"><?php echo $faker->sentence(8); ?></span>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <a href="#" class="md-btn md-btn-flat md-btn-flat-primary">Add new task</a>
                        </div>

                        <div>
                            <h2 class="heading_list">WORK</h2>
                            <ul class="md-list md-list-addon uk-margin-small-bottom uk-nestable" data-uk-nestable="{ maxDepth:2,handleClass:'md-list-content' }">
                                <li class="uk-nestable-item">
                                    <div class="md-list-addon-element">
                                        <input type="checkbox" data-md-icheck />
                                    </div>
                                    <div class="md-list-content">
                                        <a href="#" class="md-list-action"><i class="md-icon material-icons">&#xE872;</i></a>
                                        <span class="md-list-heading">Another Task</span>
                                        <span class="uk-text-small uk-text-muted"><?php echo $faker->sentence(8); ?></span>
                                    </div>
                                </li>
                                <li class="uk-nestable-item">
                                    <div class="md-list-addon-element">
                                        <input type="checkbox" data-md-icheck />
                                    </div>
                                    <div class="md-list-content">
                                        <a href="#" class="md-list-action"><i class="md-icon material-icons">&#xE872;</i></a>
                                        <span class="md-list-heading">Task 1</span>
                                        <span class="uk-text-small uk-text-muted"><?php echo $faker->sentence(8); ?></span>
                                    </div>
                                    <ul class="uk-nestable">
                                        <li class="uk-nestable-item md-list-item-disabled">
                                            <div class="md-list-addon-element">
                                                <input type="checkbox" data-md-icheck checked />
                                            </div>
                                            <div class="md-list-content">
                                                <span class="md-list-heading">Task 1 subtask 1</span>
                                                <span class="uk-text-small uk-text-muted"><?php echo $faker->sentence(8); ?></span>
                                            </div>
                                        </li>
                                        <li class="uk-nestable-item">
                                            <div class="md-list-addon-element">
                                                <input type="checkbox" data-md-icheck />
                                            </div>
                                            <div class="md-list-content">
                                                <a href="#" class="md-list-action"><i class="md-icon material-icons">&#xE872;</i></a>
                                                <span class="md-list-heading uk-text-success">Task 1 subtask 2</span>
                                                <span class="uk-text-small uk-text-success"><?php echo $faker->sentence(8); ?></span>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="uk-nestable-item md-list-item-disabled">
                                    <div class="md-list-addon-element">
                                        <input type="checkbox" data-md-icheck checked />
                                    </div>
                                    <div class="md-list-content">
                                        <a href="#" class="md-list-action"><i class="md-icon material-icons">&#xE872;</i></a>
                                        <span class="md-list-heading">Task 2</span>
                                        <span class="uk-text-small uk-text-muted"><?php echo $faker->sentence(8); ?></span>
                                    </div>
                                </li>
                                <li class="uk-nestable-item md-list-item-disabled">
                                    <div class="md-list-addon-element">
                                        <input type="checkbox" data-md-icheck checked />
                                    </div>
                                    <div class="md-list-content">
                                        <a href="#" class="md-list-action"><i class="md-icon material-icons">&#xE872;</i></a>
                                        <span class="md-list-heading">Task 3</span>
                                        <span class="uk-text-small uk-text-muted"><?php echo $faker->sentence(8); ?></span>
                                    </div>
                                </li>
                            </ul>
                            <a href="#" class="md-btn md-btn-flat md-btn-flat-primary">Add new task</a>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="md-fab-wrapper">
        <a class="md-fab md-fab-accent" href="#new_todo">
            <i class="material-icons">&#xE03B;</i>
        </a>
    </div>
