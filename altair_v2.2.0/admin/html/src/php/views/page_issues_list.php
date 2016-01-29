<?php defined('safe_access') or die('Restricted access!'); ?>

    <div id="page_content">

        <div id="page_heading" data-uk-sticky="{ top: 48, media: 960 }">
            <div class="heading_actions">
                <a href="#" data-uk-tooltip="{pos:'bottom'}" title="Archive"><i class="md-icon material-icons">&#xE149;</i></a>
                <a href="#" data-uk-tooltip="{pos:'bottom'}" title="Print"><i class="md-icon material-icons">&#xE8AD;</i></a>
                <div data-uk-dropdown>
                    <i class="md-icon material-icons">&#xE5D4;</i>
                    <div class="uk-dropdown uk-dropdown-small">
                        <ul class="uk-nav">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Other Action</a></li>
                            <li><a href="#">Other Action</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <h1>Issue Tracker</h1>
            <span class="uk-text-upper uk-text-small"><a href="#">Project Name</a></span>
        </div>

        <div id="page_content_inner">
            <div class="md-card">
                <div class="md-card-content">
                    <div class="uk-overflow-container uk-margin-bottom">
                        <table class="uk-table uk-table-align-vertical uk-table-nowrap tablesorter tablesorter-altair" id="ts_issues">
                            <thead>
                                <tr>
                                    <th class="uk-text-center">Key</th>
                                    <th>Title</th>
                                    <th>Assignee</th>
                                    <th>Priority</th>
                                    <th>Created</th>
                                    <th>Updated</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th class="uk-text-center">Key</th>
                                    <th>Title</th>
                                    <th>Assignee</th>
                                    <th>Priority</th>
                                    <th>Created</th>
                                    <th>Updated</th>
                                    <th>Status</th>
                                </tr>
                            </tfoot>
                            <tbody>
<?php
    $task_priority = [
        'minor' => 'info',
        'major' => 'success',
        'critical' => 'warning',
        'blocker' => 'danger'
    ];
    $task_status = ['closed','open','reopened'];
    for($i=1;$i<=48;$i++) {
        $rand_el = array_rand($task_priority);
        $priority = $task_priority[$rand_el];
?>

                                <tr>
                                    <td class="uk-text-center"><span class="uk-text-small uk-text-muted uk-text-nowrap">ALTR-<?php echo $i;?></span></td>
                                    <td>
                                        <a href="page_issue_details.html"><?php echo ' '.$faker->sentence(6); ?></a>
                                    </td>
                                    <td><?php echo $faker->firstName; echo ' ' . $faker->lastName; ?></td>
                                    <td><span class="uk-badge uk-badge-<?php echo $priority;?>"><?php echo $rand_el; ?></span></td>
                                    <td class="uk-text-small"><?php echo rand(8,28);?>/Jun/16</td>
                                    <td class="uk-text-small"><?php echo rand(8,28);?>/Jun/16</td>
                                    <td><span class="uk-badge uk-badge-outline uk-text-upper"><?php echo $task_status[array_rand($task_status)] ?></span></td>
                                </tr>

<?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <ul class="uk-pagination ts_pager">
                        <li data-uk-tooltip title="Select Page">
                            <select class="ts_gotoPage ts_selectize"></select>
                        </li>
                        <li class="first"><a href="javascript:void(0)"><i class="uk-icon-angle-double-left"></i></a></li>
                        <li class="prev"><a href="javascript:void(0)"><i class="uk-icon-angle-left"></i></a></li>
                        <li><span class="pagedisplay"></span></li>
                        <li class="next"><a href="javascript:void(0)"><i class="uk-icon-angle-right"></i></a></li>
                        <li class="last"><a href="javascript:void(0)"><i class="uk-icon-angle-double-right"></i></a></li>
                        <li data-uk-tooltip title="Page Size">
                            <select class="pagesize ts_selectize">
                                <option value="5">5</option>
                                <option value="10">10</option>
                                <option value="25">25</option>
                                <option value="50">50</option>
                            </select>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>

    <div class="md-fab-wrapper">
        <a class="md-fab md-fab-accent" href="#new_issue" data-uk-modal="{ center:true }">
            <i class="material-icons">&#xE145;</i>
        </a>
    </div>

    <div class="uk-modal" id="new_issue">
        <div class="uk-modal-dialog">
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
                    <button type="button" class="md-btn md-btn-flat uk-modal-close">Close</button><button type="button" class="md-btn md-btn-flat md-btn-flat-primary" id="snippet_new_save">Add Issue</button>
                </div>
            </form>
        </div>
    </div>