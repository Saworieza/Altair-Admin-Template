<?php defined('safe_access') or die('Restricted access!'); ?>

    <div id="page_content">
        <div id="page_content_inner">

            <div class="uk-width-medium-8-10 uk-container-center reset-print">

                <div class="uk-grid uk-grid-collapse" data-uk-grid-margin>
                    <div class="uk-width-large-3-10 hidden-print uk-visible-large">
                        <div class="md-list-outside-wrapper">
                            <ul class="md-list md-list-outside notes_list" id="notes_list">
<?php
    $note_id = array('','','1','2','3','4','5','6','7','8','9','10','','11','12','13','14','15','16','17','18','19','20','21','22','23','24','25','26');
    for($i=1;$i<=28;$i++) {
        $moment = new Moment\Moment();
        $date = $moment->format('d M Y');
        $note_title = $faker->sentence(4);
?>
            <?php if($i == 1 ) { ?>

                                <li class="heading_list uk-text-danger">Important Notes</li>
            <?php } elseif($i == 12 ) { ?>

                                <li class="heading_list">Other Notes</li>
            <?php } else { ?>
        <li>
                                    <a href="#" class="md-list-content note_link" data-note-id="<?php echo $note_id[$i]; ?>">
                                        <span class="md-list-heading uk-text-truncate"><?php echo $note_title  ?></span>
                                        <span class="uk-text-small uk-text-muted"><?php echo $date; ?></span>
                                    </a>
                                </li>
            <?php }; ?>
<?php }; ?>
                </ul>
                        </div>
                    </div>
                    <div class="uk-width-large-7-10">
                        <div class="md-card md-card-single">
                            <form action="">
                                <div class="md-card-toolbar hidden-print">
                                    <div class="md-card-toolbar-actions">
                                        <i class="md-icon material-icons">&#xE161;</i>
                                        <div class="md-card-dropdown" data-uk-dropdown="{pos:'bottom-right'}">
                                            <i class="md-icon material-icons">&#xE5D4;</i>
                                            <div class="uk-dropdown uk-dropdown-small">
                                                <ul class="uk-nav">
                                                    <li><a href="#"><i class="material-icons uk-margin-small-right">&#xE80D;</i> Share</a></li>
                                                    <li><a href="#"><i class="material-icons uk-margin-small-right">&#xE149;</i> Archive</a></li>
                                                    <li><a href="#"><i class="material-icons uk-margin-small-right">&#xE872;</i> Delete</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <input name="note_title" id="note_title" class="md-card-toolbar-input" type="text" value="" placeholder="Add title" />
                                </div>
                                <div class="md-card-content">
                                    <textarea name="note_content" id="note_content" class="textarea_autosize md-input" cols="30" rows="12" placeholder="Add content"></textarea>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <div class="md-fab-wrapper">
        <a class="md-fab md-fab-danger" href="#" id="note_add">
            <i class="material-icons">&#xE145;</i>
        </a>
    </div>

    <div id="sidebar_secondary">
        <div class="sidebar_secondary_wrapper uk-margin-remove"></div>
    </div>
