<?php defined('safe_access') or die('Restricted access!'); ?>

    <div id="top_bar">
        <div class="md-top-bar">
            <div class="uk-width-large-8-10 uk-container-center">
                <div class="uk-clearfix">
                    <div class="md-top-bar-actions-left">
                        <div class="md-top-bar-checkbox">
                            <input type="checkbox" name="mailbox_select_all" id="mailbox_select_all" data-md-icheck />
                        </div>
                    </div>
                    <div class="md-top-bar-actions-right">
                        <div class="md-top-bar-icons">
                            <i id="mailbox_list_split" class=" md-icon material-icons">&#xE8EE;</i>
                            <i id="mailbox_list_combined" class="md-icon material-icons">&#xE8F2;</i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="page_content">
        <div id="page_content_inner">

            <div class="md-card-list-wrapper" id="mailbox">
                <div class="uk-width-large-8-10 uk-container-center">
                    <div class="md-card-list">
                        <div class="md-card-list-header heading_list">Today</div>
                        <div class="md-card-list-header md-card-list-header-combined heading_list" style="display: none">All Messages</div>
                        <ul class="hierarchical_slide">
<?php
    $randColor = [ ' md-bg-cyan', ' md-bg-light-green', ' md-bg-grey' ];
    $randSentence = [
        $faker->sentence(100,2000),
        $faker->sentence(50,2000),
        $faker->sentence(200,2000),
        $faker->sentence(500,2000)
    ];
    $randSentenceLenght = rand(5,10);
    $moment = new Moment\Moment();
    $date_today = $moment->format('j M');
    for($i=0;$i<4;$i++) {
        $randImg = rand(1,10);
        $randAvatar = [ 0, 1 ];
        $randSenderArr = [ $faker->email, $faker->name ];
        $randSender = $randSenderArr[array_rand($randSenderArr)];
        $reply_rand = rand(1,2000);
?>
                            <li>
                                <div class="md-card-list-item-menu" data-uk-dropdown="{mode:'click',pos:'bottom-right'}">
                                    <a href="#" class="md-icon material-icons">&#xE5D4;</a>
                                    <div class="uk-dropdown uk-dropdown-small">
                                        <ul class="uk-nav">
                                            <li><a href="#"><i class="material-icons">&#xE15E;</i> Reply</a></li>
                                            <li><a href="#"><i class="material-icons">&#xE149;</i> Archive</a></li>
                                            <li><a href="#"><i class="material-icons">&#xE872;</i> Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <span class="md-card-list-item-date"><?php echo $date_today; ?></span>
                                <div class="md-card-list-item-select">
                                    <input type="checkbox" data-md-icheck />
                                </div>
                                <div class="md-card-list-item-avatar-wrapper">
                <?php if($randAvatar[array_rand($randAvatar)] == 1) { ?>
                    <img src="assets/img/avatars/avatar_<?php if($randImg < 10) echo '0'; echo $randImg; ?>_tn.png" class="md-card-list-item-avatar" alt="" />
                <?php } else { ?>
                    <span class="md-card-list-item-avatar<?php echo $randColor[array_rand($randColor)]; ?>"><?php echo $letters[array_rand($letters)]; echo $letters[array_rand($letters)]; ?></span>
                <?php }; ?>
                </div>
                                <div class="md-card-list-item-sender">
                                    <span><?php echo $randSender; ?></span>
                                </div>
                                <div class="md-card-list-item-subject">
                                    <div class="md-card-list-item-sender-small">
                                        <span><?php echo $randSender; ?></span>
                                    </div>
                                    <span><?php echo $faker->sentence($randSentenceLenght); ?></span>
                                </div>
                                <div class="md-card-list-item-content-wrapper">
                                    <div class="md-card-list-item-content">
                                        <?php echo $randSentence[array_rand($randSentence)]; ?>
                                    </div>
                                    <form class="md-card-list-item-reply">
                                        <label for="mailbox_reply_<?php echo $reply_rand; ?>">Reply to <span><?php echo $randSender ?></span></label>
                                        <textarea class="md-input md-input-full" name="mailbox_reply_<?php echo $reply_rand; ?>" id="mailbox_reply_<?php echo $reply_rand; ?>" cols="30" rows="4"></textarea>
                                        <button class="md-btn md-btn-flat md-btn-flat-primary">Send</button>
                                    </form>
                                </div>
                            </li>
<?php } ?>
                        </ul>
                    </div>
                    <div class="md-card-list">
                        <div class="md-card-list-header heading_list">Yesterday</div>
                        <ul class="hierarchical_slide">
<?php
    $moment = new Moment\Moment();
    $date_yesterday = $moment->subtractDays('1')->format('j M');
    for($i=0;$i<7;$i++) {
        $randImg = rand(1,10);
        $randAvatar = [ 0, 1 ];
        $randSenderArr = [ $faker->email, $faker->name ];
        $randSender = $randSenderArr[array_rand($randSenderArr)];
        $reply_rand = rand(1,10000);
?>
                            <li>
                                <div class="md-card-list-item-menu" data-uk-dropdown="{mode:'click',pos:'bottom-right'}">
                                    <a href="#" class="md-icon material-icons">&#xE5D4;</a>
                                    <div class="uk-dropdown uk-dropdown-small">
                                        <ul class="uk-nav">
                                            <li><a href="#"><i class="material-icons">&#xE15E;</i> Reply</a></li>
                                            <li><a href="#"><i class="material-icons">&#xE149;</i> Archive</a></li>
                                            <li><a href="#"><i class="material-icons">&#xE872;</i> Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <span class="md-card-list-item-date"><?php echo $date_yesterday; ?></span>
                                <div class="md-card-list-item-select">
                                    <input type="checkbox" data-md-icheck />
                                </div>
                                <div class="md-card-list-item-avatar-wrapper">
                <?php if($randAvatar[array_rand($randAvatar)] == 1) { ?>
                    <img src="assets/img/avatars/avatar_<?php if($randImg < 10) echo '0'; echo $randImg; ?>_tn.png" class="md-card-list-item-avatar" alt="" />
                <?php } else { ?>
                    <span class="md-card-list-item-avatar<?php echo $randColor[array_rand($randColor)]; ?>"><?php echo $letters[array_rand($letters)]; echo $letters[array_rand($letters)]; ?></span>
                <?php }; ?>
                </div>
                                <div class="md-card-list-item-sender">
                                    <span><?php echo $randSender; ?></span>
                                </div>
                                <div class="md-card-list-item-subject">
                                    <div class="md-card-list-item-sender-small">
                                        <span><?php echo $randSender; ?></span>
                                    </div>
                                    <span><?php echo $faker->sentence($randSentenceLenght); ?></span>
                                </div>
                                <div class="md-card-list-item-content-wrapper">
                                    <div class="md-card-list-item-content">
                                        <?php echo $faker->sentence(rand(100,1000)); ?>
                                    </div>
                                    <form class="md-card-list-item-reply">
                                        <label for="mailbox_reply_<?php echo $reply_rand; ?>">Reply to <span><?php echo $randSender?></span></label>
                                        <textarea class="md-input md-input-full" name="mailbox_reply_<?php echo $reply_rand; ?>" id="mailbox_reply_<?php echo $reply_rand; ?>" cols="30" rows="4"></textarea>
                                        <button class="md-btn md-btn-flat md-btn-flat-primary">Send</button>
                                    </form>
                                </div>
                            </li>
<?php } ?>
                        </ul>
                    </div>
                    <div class="md-card-list">
                        <div class="md-card-list-header heading_list">This Month</div>
                        <ul class="hierarchical_slide">
<?php
    $moment = new Moment\Moment();
    $date_month = $moment->format('M');
    $date_month_day_array = [];
    $moment = new Moment\Moment();
    $date_month_s1d = $moment->format('j')-1;
    for($i=0;$i<15;$i++) {
        $date_month_day = rand(1,$date_month_s1d);
        $date_month_day_array[] = $date_month_day;
    }
    sort($date_month_day_array, SORT_NUMERIC);
    $arr_reversed = array_reverse($date_month_day_array);
    for($i=0;$i<15;$i++) {
        $randImg = rand(1,10);
        $randAvatar = [ 0, 1 ];
        $randSenderArr = [ $faker->email, $faker->name ];
        $randSender = $randSenderArr[array_rand($randSenderArr)];
        $reply_rand = rand(1,3000);
?>
                            <li>
                                <div class="md-card-list-item-menu" data-uk-dropdown="{mode:'click',pos:'bottom-right'}">
                                    <a href="#" class="md-icon material-icons">&#xE5D4;</a>
                                    <div class="uk-dropdown uk-dropdown-small">
                                        <ul class="uk-nav">
                                            <li><a href="#"><i class="material-icons">&#xE15E;</i> Reply</a></li>
                                            <li><a href="#"><i class="material-icons">&#xE149;</i> Archive</a></li>
                                            <li><a href="#"><i class="material-icons">&#xE872;</i> Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <span class="md-card-list-item-date"><?php echo $arr_reversed[$i].' '. $date_month; ?></span>
                                <div class="md-card-list-item-select">
                                    <input type="checkbox" data-md-icheck />
                                </div>
                                <div class="md-card-list-item-avatar-wrapper">
                <?php if($randAvatar[array_rand($randAvatar)] == 1) { ?>
                    <img src="assets/img/avatars/avatar_<?php if($randImg < 10) echo '0'; echo $randImg; ?>_tn.png" class="md-card-list-item-avatar" alt="" />
                <?php } else { ?>
                    <span class="md-card-list-item-avatar<?php echo $randColor[array_rand($randColor)]; ?>"><?php echo $letters[array_rand($letters)]; echo $letters[array_rand($letters)]; ?></span>
                <?php }; ?>
                </div>
                                <div class="md-card-list-item-sender">
                                    <span><?php echo $randSender; ?></span>
                                </div>
                                <div class="md-card-list-item-subject">
                                    <div class="md-card-list-item-sender-small">
                                        <span><?php echo $randSender; ?></span>
                                    </div>
                                    <span><?php echo $faker->sentence($randSentenceLenght); ?></span>
                                </div>
                                <div class="md-card-list-item-content-wrapper">
                                    <div class="md-card-list-item-content">
                                        <?php echo $randSentence[array_rand($randSentence)]; ?>
                                    </div>
                                    <form class="md-card-list-item-reply">
                                        <label for="mailbox_reply_<?php echo $reply_rand; ?>">Reply to <span><?php echo $randSender?></span></label>
                                        <textarea class="md-input md-input-full" name="mailbox_reply_<?php echo $reply_rand; ?>" id="mailbox_reply_<?php echo $reply_rand; ?>" cols="30" rows="4"></textarea>
                                        <button class="md-btn md-btn-flat md-btn-flat-primary">Send</button>
                                    </form>
                                </div>
                            </li>
<?php } ?>
                        </ul>
                    </div>
                    <div class="md-card-list">
                        <div class="md-card-list-header heading_list">Older Messages</div>
                        <ul class="hierarchical_slide">
<?php
    for($i=0;$i<28;$i++) {
        $randImg = rand(1,10);
        $randAvatar = [ 0, 1 ];
        $randSenderArr = [ $faker->email, $faker->name ];
        $randSender = $randSenderArr[array_rand($randSenderArr)];
        $randM = rand(1,3);
        $randD = rand(1,30);
        $moment = new Moment\Moment();
        $olderMoment = $moment->subtractMonths($randM)->subtractDays($randD)->format('j M');
        $reply_rand = rand(1,1000);
?>
                            <li>
                                <div class="md-card-list-item-menu" data-uk-dropdown="{mode:'click',pos:'bottom-right'}">
                                    <a href="#" class="md-icon material-icons">&#xE5D4;</a>
                                    <div class="uk-dropdown uk-dropdown-small">
                                        <ul class="uk-nav">
                                            <li><a href="#"><i class="material-icons">&#xE15E;</i> Reply</a></li>
                                            <li><a href="#"><i class="material-icons">&#xE149;</i> Archive</a></li>
                                            <li><a href="#"><i class="material-icons">&#xE872;</i> Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <span class="md-card-list-item-date"><?php echo $olderMoment; ?></span>
                                <div class="md-card-list-item-select">
                                    <input type="checkbox" data-md-icheck />
                                </div>
                                <div class="md-card-list-item-avatar-wrapper">
                <?php if($randAvatar[array_rand($randAvatar)] == 1) { ?>
                    <img src="assets/img/avatars/avatar_<?php if($randImg < 10) echo '0'; echo $randImg; ?>_tn.png" class="md-card-list-item-avatar" alt="" />
                <?php } else { ?>
                    <span class="md-card-list-item-avatar<?php echo $randColor[array_rand($randColor)]; ?>"><?php echo $letters[array_rand($letters)]; echo $letters[array_rand($letters)]; ?></span>
                <?php }; ?>
                </div>
                                <div class="md-card-list-item-sender">
                                    <span><?php echo $randSender; ?></span>
                                </div>
                                <div class="md-card-list-item-subject">
                                    <div class="md-card-list-item-sender-small">
                                        <span><?php echo $randSender; ?></span>
                                    </div>
                                    <span><?php echo $faker->sentence($randSentenceLenght); ?></span>
                                </div>
                                <div class="md-card-list-item-content-wrapper">
                                    <div class="md-card-list-item-content">
                                        <?php echo $randSentence[array_rand($randSentence)]; ?>
                                    </div>
                                    <form class="md-card-list-item-reply">
                                        <label for="mailbox_reply_<?php echo $reply_rand; ?>">Reply to <span><?php echo $randSender?></span></label>
                                        <textarea class="md-input md-input-full" name="mailbox_reply_<?php echo $reply_rand; ?>" id="mailbox_reply_<?php echo $reply_rand; ?>" cols="30" rows="4"></textarea>
                                        <button class="md-btn md-btn-flat md-btn-flat-primary">Send</button>
                                    </form>
                                </div>
                            </li>
<?php }; ?>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="md-fab-wrapper">
        <a class="md-fab md-fab-accent" href="#mailbox_new_message" data-uk-modal="{center:true}">
            <i class="material-icons">&#xE150;</i>
        </a>
    </div>

    <div class="uk-modal" id="mailbox_new_message">
        <div class="uk-modal-dialog">
            <button class="uk-modal-close uk-close" type="button"></button>
            <form>
                <div class="uk-modal-header">
                    <h3 class="uk-modal-title">Compose Message</h3>
                </div>
                <div class="uk-margin-medium-bottom">
                    <label for="mail_new_to">To</label>
                    <input type="text" class="md-input" id="mail_new_to"/>
                </div>
                <div class="uk-margin-large-bottom">
                    <label for="mail_new_message">Message</label>
                    <textarea name="mail_new_message" id="mail_new_message" cols="30" rows="6" class="md-input"></textarea>
                </div>
                <div id="mail_upload-drop" class="uk-file-upload">
                    <p class="uk-text">Drop file to upload</p>
                    <p class="uk-text-muted uk-text-small uk-margin-small-bottom">or</p>
                    <a class="uk-form-file md-btn">choose file<input id="mail_upload-select" type="file"></a>
                </div>
                <div id="mail_progressbar" class="uk-progress uk-hidden">
                    <div class="uk-progress-bar" style="width:0">0%</div>
                </div>
                <div class="uk-modal-footer">
                    <a href="#" class="md-icon-btn"><i class="md-icon material-icons">&#xE226;</i></a>
                    <button type="button" class="uk-float-right md-btn md-btn-flat md-btn-flat-primary">Send</button>
                </div>
            </form>
        </div>
    </div>