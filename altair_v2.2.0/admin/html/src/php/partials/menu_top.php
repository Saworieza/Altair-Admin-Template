<div id="top_bar">
    <div class="md-top-bar">
        <ul id="menu_top" class="uk-clearfix">
            <li><a href="index.html"><i class="material-icons md-24">&#xE88A;</i></a></li>
            <li data-uk-dropdown>
                <a href="#">Forms</a>
                <div class="uk-dropdown">
                    <ul class="uk-nav uk-nav-dropdown">
                        <li<?php if($sPage == "forms_regular") { echo ' class="act_item"'; }; ?>><a href="forms_regular.html">Regular Elements</a></li>
                        <li<?php if($sPage == "forms_advanced") { echo ' class="act_item"'; }; ?>><a href="forms_advanced.html">Advanced Elements</a></li>
                        <li<?php if($sPage == "forms_file_upload") { echo ' class="act_item"'; }; ?>><a href="forms_file_upload.html">File Upload</a></li>
                        <li<?php if($sPage == "forms_validation") { echo ' class="act_item"'; }; ?>><a href="forms_validation.html">Validation</a></li>
                        <li<?php if($sPage == "forms_wizard") { echo ' class="act_item"'; }; ?>><a href="forms_wizard.html">Wizard</a></li>
                        <li class="uk-nav-header">WYSIWYG Editors</li>
                        <li<?php if($sPage == "forms_wysiwyg_ckeditor") { echo ' class="act_item"'; }; ?>><a href="forms_wysiwyg_ckeditor.html">CKeditor</a></li>
                        <li<?php if($sPage == "forms_wysiwyg_tinymce") { echo ' class="act_item"'; }; ?>><a href="forms_wysiwyg_tinymce.html">TinyMCE</a></li>
                    </ul>
                </div>
            </li>
            <li data-uk-dropdown>
                <a href="#">Components</a>
                <div class="uk-dropdown uk-dropdown-scrollable">
                    <ul class="uk-nav uk-nav-dropdown">
                        <li<?php if($sPage == "components_accordion") { echo ' class="act_item"'; }; ?>><a href="components_accordion.html">Accordions</a></li>
                        <li<?php if($sPage == "components_buttons") { echo ' class="act_item"'; }; ?>><a href="components_buttons.html"> Buttons</a></li>
                        <li<?php if($sPage == "components_cards") { echo ' class="act_item"'; }; ?>><a href="components_cards.html">Cards</a></li>
                        <li<?php if($sPage == "components_colors") { echo ' class="act_item"'; }; ?>><a href="components_colors.html">Colors</a></li>
                        <li<?php if($sPage == "components_common") { echo ' class="act_item"'; }; ?>><a href="components_common.html">Common</a></li>
                        <li<?php if($sPage == "components_dropdowns") { echo ' class="act_item"'; }; ?>><a href="components_dropdowns.html">Dropdowns</a></li>
                        <li<?php if($sPage == "components_dynamic_grid") { echo ' class="act_item"'; }; ?>><a href="components_dynamic_grid.html">Dynamic Grid</a></li>
                        <li<?php if($sPage == "components_grid") { echo ' class="act_item"'; }; ?>><a href="components_grid.html">Grid</a></li>
                        <li<?php if($sPage == "components_icons") { echo ' class="act_item"'; }; ?>><a href="components_icons.html">Icons</a></li>
                        <li<?php if($sPage == "components_modal") { echo ' class="act_item"'; }; ?>><a href="components_modal.html">Lightbox/Modal</a></li>
                        <li<?php if($sPage == "components_lists") { echo ' class="act_item"'; }; ?>><a href="components_lists.html">Lists</a></li>
                        <li<?php if($sPage == "components_nestable") { echo ' class="act_item"'; }; ?>><a href="components_nestable.html">Nestable</a></li>
                        <li<?php if($sPage == "components_notifications") { echo ' class="act_item"'; }; ?>><a href="components_notifications.html">Notifications</a></li>
                        <li<?php if($sPage == "components_preloaders") { echo ' class="act_item"'; }; ?>><a href="components_preloaders.html">Preloaders</a></li>
                        <li<?php if($sPage == "components_sortable") { echo ' class="act_item"'; }; ?>><a href="components_sortable.html">Sortable</a></li>
                        <li<?php if($sPage == "components_tables") { echo ' class="act_item"'; }; ?>><a href="components_tables.html">Tables</a></li>
                        <li<?php if($sPage == "components_tables_examples") { echo ' class="act_item"'; }; ?>><a href="components_tables_examples.html">Tables Examples</a></li>
                        <li<?php if($sPage == "components_tabs") { echo ' class="act_item"'; }; ?>><a href="components_tabs.html">Tabs</a></li>
                        <li<?php if($sPage == "components_tooltips") { echo ' class="act_item"'; }; ?>><a href="components_tooltips.html">Tooltips</a></li>
                        <li<?php if($sPage == "components_typography") { echo ' class="act_item"'; }; ?>><a href="components_typography.html">Typography</a></li>
                    </ul>
                </div>
            </li>
            <li data-uk-dropdown="justify:'#top_bar'">
                <a href="#">Mega</a>
                <div class="uk-dropdown uk-dropdown-width-4">
                    <div class="uk-grid uk-dropdown-grid" data-uk-grid-margin>
                        <div class="uk-width-1-4">
                            <ul class="uk-nav uk-nav-dropdown uk-panel">
                                <li><a href="#">Item</a></li>
                                <li><a href="#">Another item</a></li>
                                <li class="uk-nav-header">Header</li>
                                <li><a href="#">Item</a></li>
                                <li><a href="#">Another item</a></li>
                                <li class="uk-nav-divider"></li>
                                <li><a href="#">Separated item</a></li>
                            </ul>
                        </div>
                        <div class="uk-width-1-4">
                            <div class="uk-accordion" data-uk-accordion="{showfirst:false}">
                                <h3 class="uk-accordion-title">Heading 1</h3>
                                <div class="uk-accordion-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                                <h3 class="uk-accordion-title">Heading 2</h3>
                                <div class="uk-accordion-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                                <h3 class="uk-accordion-title">Heading 3</h3>
                                <div class="uk-accordion-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                            </div>
                        </div>
                        <div class="uk-width-2-4">
                            <ul class="md-list md-list-addon">
                                <li>
                                    <div class="md-list-addon-element">
                                        <img class="md-user-image md-list-addon-avatar" src="assets/img/avatars/avatar_02_tn.png" alt=""/>
                                    </div>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Heading</span>
                                        <span class="uk-text-small uk-text-muted"><?php echo $faker->sentence(8); ?></span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-addon-element">
                                        <img class="md-user-image md-list-addon-avatar" src="assets/img/avatars/avatar_07_tn.png" alt=""/>
                                    </div>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Heading</span>
                                        <span class="uk-text-small uk-text-muted"><?php echo $faker->sentence(8); ?></span>
                                    </div>
                                </li>
                                <li>
                                    <div class="md-list-addon-element">
                                        <img class="md-user-image md-list-addon-avatar" src="assets/img/avatars/avatar_06_tn.png" alt=""/>
                                    </div>
                                    <div class="md-list-content">
                                        <span class="md-list-heading">Heading</span>
                                        <span class="uk-text-small uk-text-muted"><?php echo $faker->sentence(8); ?></span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>