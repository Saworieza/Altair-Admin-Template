<?php defined('safe_access') or die('Restricted access!'); ?>

<?php $task_status = ['minor','critical','blocker']; ?>

    <div id="page_content" class="uk-height-1-1">

        <div class="scrum_board_overflow">
            <div id="scrum_board" class="uk-clearfix">
                <div>
                    <div class="scrum_column_heading">To Do</div>
                    <div class="scrum_column">
                        <div id="scrum_column_todo">
<?php for($i=0;$i<3;$i++) { ?>
                            <div>
                                <div class="scrum_task<?php echo ' '.$task_status[array_rand($task_status)]; ?>">
                                    <h3 class="scrum_task_title"><a href="#task_info" data-uk-modal="{ center:true }">Altair-<?php echo rand(1,80);?></a></h3>
                                    <p class="scrum_task_description"><?php echo $faker->sentence(8); ?></p>
                                    <p class="scrum_task_info"><span class="uk-text-muted">Assignee:</span> <a href="#"><?php echo $faker->firstName; echo ' '.$faker->lastName; ?></a></p>
                                </div>
                            </div>
<?php } ?>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="scrum_column_heading">In analysis</div>
                    <div class="scrum_column">
                        <div id="scrum_column_inAnalysis">
<?php for($i=0;$i<5;$i++) { ?>
                            <div>
                                <div class="scrum_task<?php echo ' '.$task_status[array_rand($task_status)]; ?>">
                                    <h3 class="scrum_task_title"><a href="#task_info" data-uk-modal="{ center:true }">Altair-<?php echo rand(81,160);?></a></h3>
                                    <p class="scrum_task_description"><?php echo $faker->sentence(8); ?></p>
                                    <p class="scrum_task_info"><span class="uk-text-muted">Assignee:</span> <a href="#"><?php echo $faker->firstName; echo ' '.$faker->lastName; ?></a></p>
                                </div>
                            </div>
<?php } ?>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="scrum_column_heading">In progress</div>
                    <div class="scrum_column">
                        <div id="scrum_column_inProgress">
<?php for($i=0;$i<2;$i++) { ?>
                            <div>
                                <div class="scrum_task<?php echo ' '.$task_status[array_rand($task_status)]; ?>">
                                    <h3 class="scrum_task_title"><a href="#task_info" data-uk-modal="{ center:true }">Altair-<?php echo rand(161,280);?></a></h3>
                                    <p class="scrum_task_description"><?php echo $faker->sentence(8); ?></p>
                                    <p class="scrum_task_info"><span class="uk-text-muted">Assignee:</span> <a href="#"><?php echo $faker->firstName; echo ' '.$faker->lastName; ?></a></p>
                                </div>
                            </div>
<?php } ?>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="scrum_column_heading">Done</div>
                    <div class="scrum_column">
                        <div id="scrum_column_done">
<?php for($i=0;$i<4;$i++) { ?>
                            <div>
                                <div class="scrum_task<?php echo ' '.$task_status[array_rand($task_status)]; ?>">
                                    <h3 class="scrum_task_title"><a href="#task_info" data-uk-modal="{ center:true }">Altair-<?php echo rand(281,380);?></a></h3>
                                    <p class="scrum_task_description"><?php echo $faker->sentence(8); ?></p>
                                    <p class="scrum_task_info"><span class="uk-text-muted">Assignee:</span> <a href="#"><?php echo $faker->firstName; echo ' '.$faker->lastName; ?></a></p>
                                </div>
                            </div>
<?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="md-fab-wrapper">
        <a class="md-fab md-fab-accent" href="#new_task" data-uk-modal="{ center:true }">
            <i class="material-icons">&#xE145;</i>
        </a>
    </div>

    <div class="uk-modal" id="new_task">
        <div class="uk-modal-dialog">
            <div class="uk-modal-header">
                <h3 class="uk-modal-title">ALTAIR-<?php echo rand(1,200);?></h3>
            </div>
            <form class="uk-form-stacked">
                <div class="uk-margin-medium-bottom">
                    <label for="task_title">Title</label>
                    <input type="text" class="md-input" id="Task_title" name="snippet_title"/>
                </div>
                <div class="uk-margin-medium-bottom">
                    <label for="task_description">Description</label>
                    <textarea class="md-input" id="task_description" name="task_description"></textarea>
                </div>
                <div class="uk-margin-medium-bottom">
                    <label for="task_assignee" class="uk-form-label">Assignee</label>
                    <select class="uk-form-width-medium" name="task_assignee" id="task_assignee" data-md-selectize-inline>
                        <option value="user_me">Me</option>
                        <option value="user_1"><?php echo $faker->firstName; echo ' '.$faker->lastName; ?></option>
                        <option value="user_2"><?php echo $faker->firstName; echo ' '.$faker->lastName; ?></option>
                        <option value="user_3"><?php echo $faker->firstName; echo ' '.$faker->lastName; ?></option>
                        <option value="user_4"><?php echo $faker->firstName; echo ' '.$faker->lastName; ?></option>
                    </select>
                </div>
                <div class="uk-margin-medium-bottom">
                    <label for="task_priority" class="uk-form-label">Priority</label>
                    <div>
                        <span class="icheck-inline">
                            <input type="radio" name="task_priority" id="task_priority_minor" data-md-icheck />
                            <label for="task_priority_minor" class="inline-label uk-badge uk-badge-success">MINOR</label>
                        </span>
                        <span class="icheck-inline">
                            <input type="radio" name="task_priority" id="task_priority_critical" data-md-icheck />
                            <label for="task_priority_critical" class="inline-label uk-badge uk-badge-warning">CRITICAL</label>
                        </span>
                        <span class="icheck-inline">
                            <input type="radio" name="task_priority" id="task_priority_blocker" data-md-icheck />
                            <label for="task_priority_blocker" class="inline-label uk-badge uk-badge-danger">BLOCKER</label>
                        </span>
                    </div>
                </div>
                <div class="uk-modal-footer uk-text-right">
                    <button type="button" class="md-btn md-btn-flat uk-modal-close">Close</button><button type="button" class="md-btn md-btn-flat md-btn-flat-primary" id="snippet_new_save">Add Task</button>
                </div>
            </form>
        </div>
    </div>

    <div class="uk-modal" id="task_info">
        <div class="uk-modal-dialog">
            <div class="uk-modal-header">
                <span class="uk-badge uk-badge-danger uk-float-right">Blocker</span>
                <h3 class="uk-modal-title">ALTAIR-<?php echo rand(1,200);?></h3>
            </div>
            <form class="uk-form-stacked">
                <div class="uk-margin-medium-bottom">
                    <p class="uk-margin-small-bottom uk-text-muted">Title</p>
                    <p class="uk-margin-remove uk-text-large"><?php echo $faker->sentence(8); ?></p>
                </div>
                <div class="uk-margin-medium-bottom">
                    <p class="uk-margin-small-bottom uk-text-muted">Description</p>
                    <p class="uk-margin-remove"><?php echo $faker->sentence(28); ?></p>
                </div>
                <div class="uk-margin-medium-bottom">
                    <p class="uk-margin-small-bottom uk-text-muted">Assignee</p>
                    <p class="uk-margin-remove"><?php echo $faker->firstName; echo ' '.$faker->lastName; ?></p>
                </div>
                <div class="uk-modal-footer uk-text-right">
                    <button type="button" class="md-btn md-btn-flat uk-modal-close">Close</button>
                </div>
            </form>
        </div>
    </div>