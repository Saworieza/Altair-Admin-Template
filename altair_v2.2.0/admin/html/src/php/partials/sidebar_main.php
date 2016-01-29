    <!-- main sidebar -->
    <aside id="sidebar_main">
        <?php if($sPage !== "layout_header_full") { ?>

        <div class="sidebar_main_header">
            <div class="sidebar_logo">
                <a href="index.html" class="sSidebar_hide"><img src="assets/img/logo_main.png" alt="" height="15" width="71"/></a>
                <a href="index.html" class="sSidebar_show"><img src="assets/img/logo_main_small.png" alt="" height="32" width="32"/></a>
            </div>
            <div class="sidebar_actions">
                <select id="lang_switcher" name="lang_switcher">
                    <option value="gb" selected>English</option>
                </select>
            </div>
        </div>
        <?php }; ?>

        <div class="menu_section">
            <ul>
                <li<?php if($sPage == "index") { echo ' class="current_section"'; }; ?> title="Dashboard">
                    <a href="index.html">
                        <span class="menu_icon"><i class="material-icons">&#xE871;</i></span>
                        <span class="menu_title">Dashboard</span>
                    </a>
                </li>
                <li<?php if($sPage == "page_mailbox") { echo ' class="current_section"'; }; ?> title="Mailbox">
                    <a href="page_mailbox.html">
                        <span class="menu_icon"><i class="material-icons">&#xE158;</i></span>
                        <span class="menu_title">Mailbox</span>
                    </a>
                </li>
                <li<?php if($sPage == "page_invoices") { echo ' class="current_section"'; }; ?> title="Invoices">
                    <a href="page_invoices.html">
                        <span class="menu_icon"><i class="material-icons">&#xE53E;</i></span>
                        <span class="menu_title">Invoices</span>
                    </a>
                </li>
                <li<?php if($sPage == "page_chat") { echo ' class="current_section"'; }; ?>  title="Chat">
                    <a href="page_chat.html">
                        <span class="menu_icon"><i class="material-icons">&#xE0B9;</i></span>
                        <span class="menu_title">Chat</span>
                    </a>
                </li>
                <li<?php if($sPage == "page_scrum_board") { echo ' class="current_section"'; }; ?> title="Scrum Board">
                    <a href="page_scrum_board.html">
                        <span class="menu_icon"><i class="material-icons">&#xE85C;</i></span>
                        <span class="menu_title">Scrum Board</span>
                    </a>
                </li>
                <li<?php if($sPage == "page_snippets") { echo ' class="current_section"'; }; ?> title="Snippets">
                    <a href="page_snippets.html">
                        <span class="menu_icon"><i class="material-icons">&#xE86F;</i></span>
                        <span class="menu_title">Snippets</span>
                    </a>
                </li>
                <li<?php if($sPage == "page_user_profile") { echo ' class="current_section"'; }; ?> title="User Profile">
                    <a href="page_user_profile.html">
                        <span class="menu_icon"><i class="material-icons">&#xE87C;</i></span>
                        <span class="menu_title">User Profile</span>
                    </a>
                </li>
                <li<?php if($sPage == "forms") { echo ' class="act_section"'; }; ?>>
                    <a href="#">
                        <span class="menu_icon"><i class="material-icons">&#xE8D2;</i></span>
                        <span class="menu_title">Forms</span>
                    </a>
                    <ul>
                        <li<?php if($sPage == "forms_regular") { echo ' class="act_item"'; }; ?>><a href="forms_regular.html">Regular Elements</a></li>
                        <li<?php if($sPage == "forms_advanced") { echo ' class="act_item"'; }; ?>><a href="forms_advanced.html">Advanced Elements</a></li>
                        <li<?php if($sPage == "forms_file_upload") { echo ' class="act_item"'; }; ?>><a href="forms_file_upload.html">File Upload</a></li>
                        <li<?php if($sPage == "forms_validation") { echo ' class="act_item"'; }; ?>><a href="forms_validation.html">Validation</a></li>
                        <li<?php if($sPage == "forms_wizard") { echo ' class="act_item"'; }; ?>><a href="forms_wizard.html">Wizard</a></li>
                        <li class="menu_subtitle">WYSIWYG Editors</li>
                        <li<?php if($sPage == "forms_wysiwyg_ckeditor") { echo ' class="act_item"'; }; ?>><a href="forms_wysiwyg_ckeditor.html">CKeditor</a></li>
                        <li<?php if($sPage == "forms_wysiwyg_tinymce") { echo ' class="act_item"'; }; ?>><a href="forms_wysiwyg_tinymce.html">TinyMCE</a></li>
                    </ul>
                </li>
                <li<?php if($sPage == "layout") { echo ' class="act_section"'; }; ?>>
                    <a href="#">
                        <span class="menu_icon"><i class="material-icons">&#xE8F1;</i></span>
                        <span class="menu_title">Layout</span>
                    </a>
                    <ul>
                        <li<?php if($sPage == "layout_top_menu") { echo ' class="act_item"'; }; ?>><a href="layout_top_menu.html">Top Menu</a></li>
                        <li<?php if($sPage == "layout_header_full") { echo ' class="act_item"'; }; ?>><a href="layout_header_full.html">Full Header</a></li>
                    </ul>
                </li>
                <?php $kendoui_subpages = array('kendoui_autocomplete','kendoui_calendar','kendoui_colorpicker','kendoui_combobox')?>

                <li<?php if(in_array($sPage, $kendoui_subpages)) echo ' class="act_section"'; ?>>
                    <a href="#">
                        <span class="menu_icon"><i class="material-icons">&#xE1BD;</i></span>
                        <span class="menu_title">Kendo UI Widgets</span>
                    </a>
                    <ul>
                        <li<?php if($sPage == "kendoui_autocomplete") { echo ' class="act_item"'; }; ?>><a href="kendoui_autocomplete.html">Autocomplete</a></li>
                        <li<?php if($sPage == "kendoui_calendar") { echo ' class="act_item"'; }; ?>><a href="kendoui_calendar.html">Calendar</a></li>
                        <li<?php if($sPage == "kendoui_colorpicker") { echo ' class="act_item"'; }; ?>><a href="kendoui_colorpicker.html">ColorPicker</a></li>
                        <li<?php if($sPage == "kendoui_combobox") { echo ' class="act_item"'; }; ?>><a href="kendoui_combobox.html">ComboBox</a></li>
                        <li<?php if($sPage == "kendoui_datepicker") { echo ' class="act_item"'; }; ?>><a href="kendoui_datepicker.html">DatePicker</a></li>
                        <li<?php if($sPage == "kendoui_datetimepicker") { echo ' class="act_item"'; }; ?>><a href="kendoui_datetimepicker.html">DateTimePicker</a></li>
                        <li<?php if($sPage == "kendoui_dropdown_list") { echo ' class="act_item"'; }; ?>><a href="kendoui_dropdown_list.html">DropDownList</a></li>
                        <li<?php if($sPage == "kendoui_masked_input") { echo ' class="act_item"'; }; ?>><a href="kendoui_masked_input.html">Masked Input</a></li>
                        <li<?php if($sPage == "kendoui_menu") { echo ' class="act_item"'; }; ?>><a href="kendoui_menu.html">Menu</a></li>
                        <li<?php if($sPage == "kendoui_multiselect") { echo ' class="act_item"'; }; ?>><a href="kendoui_multiselect.html">MultiSelect</a></li>
                        <li<?php if($sPage == "kendoui_numeric_textbox") { echo ' class="act_item"'; }; ?>><a href="kendoui_numeric_textbox.html">Numeric TextBox</a></li>
                        <li<?php if($sPage == "kendoui_panelbar") { echo ' class="act_item"'; }; ?>><a href="kendoui_panelbar.html">PanelBar</a></li>
                        <li<?php if($sPage == "kendoui_timepicker") { echo ' class="act_item"'; }; ?>><a href="kendoui_timepicker.html">TimePicker</a></li>
                        <li<?php if($sPage == "kendoui_toolbar") { echo ' class="act_item"'; }; ?>><a href="kendoui_toolbar.html">Toolbar</a></li>
                        <li<?php if($sPage == "kendoui_window") { echo ' class="act_item"'; }; ?>><a href="kendoui_window.html">Window</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <span class="menu_icon"><i class="material-icons">&#xE87B;</i></span>
                        <span class="menu_title">Components</span>
                    </a>
                    <ul>
                        <li<?php if($sPage == "components_accordion") { echo ' class="act_item"'; }; ?>><a href="components_accordion.html">Accordions</a></li>
                        <li<?php if($sPage == "components_buttons") { echo ' class="act_item"'; }; ?>><a href="components_buttons.html">Buttons</a></li>
                        <li<?php if($sPage == "components_fab") { echo ' class="act_item"'; }; ?>><a href="components_fab.html">Buttons: FAB</a></li>
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
                        <li<?php if($sPage == "components_panels") { echo ' class="act_item"'; }; ?>><a href="components_panels.html">Panels</a></li>
                        <li<?php if($sPage == "components_preloaders") { echo ' class="act_item"'; }; ?>><a href="components_preloaders.html">Preloaders</a></li>
                        <li<?php if($sPage == "components_sortable") { echo ' class="act_item"'; }; ?>><a href="components_sortable.html">Sortable</a></li>
                        <li<?php if($sPage == "components_tables") { echo ' class="act_item"'; }; ?>><a href="components_tables.html">Tables</a></li>
                        <li<?php if($sPage == "components_tables_examples") { echo ' class="act_item"'; }; ?>><a href="components_tables_examples.html">Tables Examples</a></li>
                        <li<?php if($sPage == "components_tabs") { echo ' class="act_item"'; }; ?>><a href="components_tabs.html">Tabs</a></li>
                        <li<?php if($sPage == "components_tooltips") { echo ' class="act_item"'; }; ?>><a href="components_tooltips.html">Tooltips</a></li>
                        <li<?php if($sPage == "components_typography") { echo ' class="act_item"'; }; ?>><a href="components_typography.html">Typography</a></li>
                    </ul>
                </li>
                <li <?php if($sPage == "e-commerce") { echo ' class="act_section"'; }; ?>>
                    <a href="#">
                        <span class="menu_icon"><i class="material-icons">&#xE8CB;</i></span>
                        <span class="menu_title">E-commerce</span>
                    </a>
                    <ul>
                        <li<?php if($sPage == "ecommerce_product_details") { echo ' class="act_item"'; }; ?>><a href="ecommerce_product_details.html">Product Details</a></li>
                        <li<?php if($sPage == "ecommerce_product_edit") { echo ' class="act_item"'; }; ?>><a href="ecommerce_product_edit.html">Product Edit</a></li>
                        <li<?php if($sPage == "ecommerce_products_grid") { echo ' class="act_item"'; }; ?>><a href="ecommerce_products_grid.html">Products Grid</a></li>
                        <li<?php if($sPage == "ecommerce_products_list") { echo ' class="act_item"'; }; ?>><a href="ecommerce_products_list.html">Products List</a></li>
                    </ul>
                </li>
                <li <?php if($sPage == "plugins") { echo ' class="act_section"'; }; ?>>
                    <a href="#">
                        <span class="menu_icon"><i class="material-icons">&#xE8C0;</i></span>
                        <span class="menu_title">Plugins</span>
                    </a>
                    <ul>
                        <li<?php if($sPage == "plugins_calendar") { echo ' class="act_item"'; }; ?>><a href="plugins_calendar.html">Calendar</a></li>
                        <li<?php if($sPage == "plugins_charts") { echo ' class="act_item"'; }; ?>><a href="plugins_charts.html">Charts</a></li>
                        <li<?php if($sPage == "plugins_code_editor") { echo ' class="act_item"'; }; ?>><a href="plugins_code_editor.html">Code Editor</a></li>
                        <li<?php if($sPage == "plugins_crud_table") { echo ' class="act_item"'; }; ?>><a href="plugins_crud_table.html">CRUD Table</a></li>
                        <li<?php if($sPage == "plugins_datatables") { echo ' class="act_item"'; }; ?>><a href="plugins_datatables.html">Datatables</a></li>
                        <li<?php if($sPage == "plugins_diff") { echo ' class="act_item"'; }; ?>><a href="plugins_diff.html">Diff View</a></li>
                        <li<?php if($sPage == "plugins_gantt_chart") { echo ' class="act_item"'; }; ?>><a href="plugins_gantt_chart.html">Gantt Chart</a></li>
                        <li<?php if($sPage == "plugins_google_maps") { echo ' class="act_item"'; }; ?>><a href="plugins_google_maps.html">Google Maps</a></li>
                        <li<?php if($sPage == "plugins_tablesorter") { echo ' class="act_item"'; }; ?>><a href="plugins_tablesorter.html">Tablesorter</a></li>
                        <li<?php if($sPage == "plugins_vector_maps") { echo ' class="act_item"'; }; ?>><a href="plugins_vector_maps.html">Vector Maps</a></li>
                    </ul>
                </li>
                <li <?php if($sPage == "pages") { echo ' class="act_section"'; }; ?>>
                    <a href="#">
                        <span class="menu_icon"><i class="material-icons">&#xE24D;</i></span>
                        <span class="menu_title">Pages</span>
                    </a>
                    <ul>
                        <li<?php if($sPage == "page_blank") { echo ' class="act_item"'; }; ?>><a href="page_blank.html">Blank</a></li>
                        <li<?php if($sPage == "page_contact_list") { echo ' class="act_item"'; }; ?>><a href="page_contact_list.html">Contact List</a></li>
                        <li<?php if($sPage == "page_gallery") { echo ' class="act_item"'; }; ?>><a href="page_gallery.html">Gallery</a></li>
                        <li<?php if($sPage == "page_help") { echo ' class="act_item"'; }; ?>><a href="page_help.html">Help/Faq</a></li>
                        <li><a href="login.html">Login Page</a></li>
                        <li<?php if($sPage == "page_notes") { echo ' class="act_item"'; }; ?>><a href="page_notes.html">Notes</a></li>
                        <li<?php if($sPage == "page_pricing_tables") { echo ' class="act_item"'; }; ?>><a href="page_pricing_tables.html">Pricing Tables</a></li>
                        <li<?php if($sPage == "page_settings") { echo ' class="act_item"'; }; ?>><a href="page_settings.html">Settings</a></li>
                        <li<?php if($sPage == "page_todo") { echo ' class="act_item"'; }; ?>><a href="page_todo.html">Todo</a></li>
                        <li<?php if($sPage == "page_user_edit") { echo ' class="act_item"'; }; ?>><a href="page_user_edit.html">User edit</a></li>
                        <li class="menu_subtitle">Issue Tracker</li>
                        <li<?php if($sPage == "page_issues_list") { echo ' class="act_item"'; }; ?>><a href="page_issues_list.html">List View</a></li>
                        <li<?php if($sPage == "page_issue_details") { echo ' class="act_item"'; }; ?>><a href="page_issue_details.html">Issue Details</a></li>

                        <li class="menu_subtitle">Blog</li>
                        <li<?php if($sPage == "page_blog_list") { echo ' class="act_item"'; }; ?>><a href="page_blog_list.html">Blog List</a></li>
                        <li<?php if($sPage == "page_blog_article") { echo ' class="act_item"'; }; ?>><a href="page_blog_article.html">Blog Article</a></li>
                        <li class="menu_subtitle">Errors</li>
                        <li><a href="error_404.html">Error 404</a></li>
                        <li><a href="error_500.html">Error 500</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </aside><!-- main sidebar end -->