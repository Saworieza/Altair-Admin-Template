<?php defined('safe_access') or die('Restricted access!'); ?>

    <div id="page_content">
        <div id="page_content_inner">

            <div class="uk-width-medium-8-10 uk-container-center">
                <div class="uk-grid uk-grid-collapse" data-uk-grid-margin>
                    <div class="uk-width-large-7-10">
                        <div class="md-card md-card-single">
                            <div class="md-card-toolbar">
                                <div class="md-card-toolbar-actions hidden-print">
                                    <div class="md-card-dropdown" data-uk-dropdown="{pos:'bottom-right'}">
                                        <i class="md-icon material-icons">&#xE3B7;</i>
                                        <div class="uk-dropdown">
                                            <ul class="uk-nav" id="chat_colors">
                                                <li class="uk-nav-header">Message Colors</li>
                                                <li class="uk-active"><a href="#" data-chat-color="chat_box_colors_a">Grey/Green</a></li>
                                                <li><a href="#" data-chat-color="chat_box_colors_b">Blue/Dark Blue</a></li>
                                                <li><a href="#" data-chat-color="chat_box_colors_c">Orange/Light Gray</a></li>
                                                <li><a href="#" data-chat-color="chat_box_colors_d">Deep Purple/Light Grey</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <i class="md-icon  material-icons">&#xE5CD;</i>
                                </div>
                                <h3 class="md-card-toolbar-heading-text large">
                                    <span class="uk-text-muted">Chat with</span> <a href="#"><?php echo $faker->firstNameMale; ?> <?php echo $faker->lastName; ?></a>
                                </h3>
                            </div>
                            <div class="md-card-content padding-reset">
                                <div class="chat_box_wrapper">
                                    <div class="chat_box touchscroll chat_box_colors_a" id="chat">
                                        <div class="chat_message_wrapper">
                                            <div class="chat_user_avatar">
                                                <img class="md-user-image" src="assets/img/avatars/avatar_11_tn.png" alt=""/>
                                            </div>
                                            <ul class="chat_message">
                                                <li>
                                                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio, eum? </p>
                                                </li>
                                                <li>
                                                    <p> Lorem ipsum dolor sit amet.<span class="chat_message_time">13:38</span> </p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="chat_message_wrapper chat_message_right">
                                            <div class="chat_user_avatar">
                                                <img class="md-user-image" src="assets/img/avatars/avatar_03_tn.png" alt=""/>
                                            </div>
                                            <ul class="chat_message">
                                                <li>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem delectus distinctio dolor earum est hic id impedit ipsum minima mollitia natus nulla perspiciatis quae quasi, quis recusandae, saepe, sunt totam.
                                                        <span class="chat_message_time">13:34</span>
                                                    </p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="chat_message_wrapper">
                                            <div class="chat_user_avatar">
                                                <img class="md-user-image" src="assets/img/avatars/avatar_11_tn.png" alt=""/>
                                            </div>
                                            <ul class="chat_message">
                                                <li>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque ea mollitia pariatur porro quae sed sequi sint tenetur ut veritatis.
                                                        <span class="chat_message_time">23 Jun 1:10am</span>
                                                    </p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="chat_message_wrapper chat_message_right">
                                            <div class="chat_user_avatar">
                                                <img class="md-user-image" src="assets/img/avatars/avatar_03_tn.png" alt=""/>
                                            </div>
                                            <ul class="chat_message">
                                                <li>
                                                    <p> Lorem ipsum dolor sit amet, consectetur. </p>
                                                </li>
                                                <li>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                        <span class="chat_message_time">Friday 13:34</span>
                                                    </p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="chat_submit_box" id="chat_submit_box">
                                        <div class="uk-input-group">
                                            <input type="text" class="md-input" name="submit_message" id="submit_message" placeholder="Send message">
                                            <span class="uk-input-group-addon">
                                                <a href="#"><i class="material-icons md-24">&#xE163;</i></a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="uk-width-large-3-10 uk-visible-large">
                        <div class="md-list-outside-wrapper">
                            <ul class="md-list md-list-addon md-list-outside" id="chat_user_list">
                                <li>
                                    <div class="md-card-dropdown md-list-action-dropdown" data-uk-dropdown="{pos:'bottom-right'}">
                                        <i class="md-icon material-icons">&#xE5D4;</i>
                                        <div class="uk-dropdown uk-dropdown-small">
                                            <ul class="uk-nav">
                                                <li><a href="#">Add to chat</a></li>
                                                <li><a href="#" class="uk-text-danger">Remove</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="md-list-addon-element">
                                        <span class="element-status element-status-danger"></span>
                                        <img class="md-user-image md-list-addon-avatar" src="assets/img/avatars/avatar_02_tn.png" alt=""/>
                                    </div>
                                    <div class="md-list-content">
                                        <div class="md-list-action-placeholder"></div>
                                        <span class="md-list-heading"><?php echo $faker->firstNameFemale; echo ' '.$faker->lastName; ?></span>
                                        <span class="uk-text-small uk-text-muted uk-text-truncate"><?php echo $faker->sentence(4); ?></span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-card-dropdown md-list-action-dropdown" data-uk-dropdown="{pos:'bottom-right'}">
                                        <i class="md-icon material-icons">&#xE5D4;</i>
                                        <div class="uk-dropdown uk-dropdown-small">
                                            <ul class="uk-nav">
                                                <li><a href="#">Add to chat</a></li>
                                                <li><a href="#" class="uk-text-danger">Remove</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="md-list-addon-element">
                                        <span class="element-status element-status-success"></span>
                                        <img class="md-user-image md-list-addon-avatar" src="assets/img/avatars/avatar_07_tn.png" alt=""/>
                                    </div>
                                    <div class="md-list-content">
                                        <div class="md-list-action-placeholder"></div>
                                        <span class="md-list-heading"><?php echo $faker->firstNameMale; echo ' '.$faker->lastName; ?></span>
                                        <span class="uk-text-small uk-text-muted uk-text-truncate"><?php echo $faker->sentence(4); ?></span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-card-dropdown md-list-action-dropdown" data-uk-dropdown="{pos:'bottom-right'}">
                                        <i class="md-icon material-icons">&#xE5D4;</i>
                                        <div class="uk-dropdown uk-dropdown-small">
                                            <ul class="uk-nav">
                                                <li><a href="#">Add to chat</a></li>
                                                <li><a href="#" class="uk-text-danger">Remove</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="md-list-addon-element">
                                        <span class="element-status element-status-success"></span>
                                        <img class="md-user-image md-list-addon-avatar" src="assets/img/avatars/avatar_06_tn.png" alt=""/>
                                    </div>
                                    <div class="md-list-content">
                                        <div class="md-list-action-placeholder"></div>
                                        <span class="md-list-heading"><?php echo $faker->firstNameFemale; echo ' '.$faker->lastName; ?></span>
                                        <span class="uk-text-small uk-text-muted uk-text-truncate"><?php echo $faker->sentence(4); ?></span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-card-dropdown md-list-action-dropdown" data-uk-dropdown="{pos:'bottom-right'}">
                                        <i class="md-icon material-icons">&#xE5D4;</i>
                                        <div class="uk-dropdown uk-dropdown-small">
                                            <ul class="uk-nav">
                                                <li><a href="#">Add to chat</a></li>
                                                <li><a href="#" class="uk-text-danger">Remove</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="md-list-addon-element">
                                        <span class="element-status element-status-danger"></span>
                                        <img class="md-user-image md-list-addon-avatar" src="assets/img/avatars/avatar_01_tn.png" alt=""/>
                                    </div>
                                    <div class="md-list-content">
                                        <div class="md-list-action-placeholder"></div>
                                        <span class="md-list-heading"><?php echo $faker->firstNameFemale; echo ' '.$faker->lastName; ?></span>
                                        <span class="uk-text-small uk-text-muted uk-text-truncate"><?php echo $faker->sentence(4); ?></span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-card-dropdown md-list-action-dropdown" data-uk-dropdown="{pos:'bottom-right'}">
                                        <i class="md-icon material-icons">&#xE5D4;</i>
                                        <div class="uk-dropdown uk-dropdown-small">
                                            <ul class="uk-nav">
                                                <li><a href="#">Add to chat</a></li>
                                                <li><a href="#" class="uk-text-danger">Remove</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="md-list-addon-element">
                                        <span class="element-status element-status-warning"></span>
                                        <img class="md-user-image md-list-addon-avatar" src="assets/img/avatars/avatar_08_tn.png" alt=""/>
                                    </div>
                                    <div class="md-list-content">
                                        <div class="md-list-action-placeholder"></div>
                                        <span class="md-list-heading"><?php echo $faker->firstNameFemale; echo ' '.$faker->lastName; ?></span>
                                        <span class="uk-text-small uk-text-muted uk-text-truncate"><?php echo $faker->sentence(4); ?></span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-card-dropdown md-list-action-dropdown" data-uk-dropdown="{pos:'bottom-right'}">
                                        <i class="md-icon material-icons">&#xE5D4;</i>
                                        <div class="uk-dropdown uk-dropdown-small">
                                            <ul class="uk-nav">
                                                <li><a href="#">Add to chat</a></li>
                                                <li><a href="#" class="uk-text-danger">Remove</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="md-list-addon-element">
                                        <span class="element-status element-status-success"></span>
                                        <img class="md-user-image md-list-addon-avatar" src="assets/img/avatars/avatar_04_tn.png" alt=""/>
                                    </div>
                                    <div class="md-list-content">
                                        <div class="md-list-action-placeholder"></div>
                                        <span class="md-list-heading"><?php echo $faker->firstNameFemale; echo ' '.$faker->lastName; ?></span>
                                        <span class="uk-text-small uk-text-muted uk-text-truncate"><?php echo $faker->sentence(4); ?></span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div id="sidebar_secondary">
        <div class="sidebar_secondary_wrapper uk-margin-remove"></div>
    </div>