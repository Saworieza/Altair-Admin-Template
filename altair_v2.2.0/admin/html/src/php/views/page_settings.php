<?php defined('safe_access') or die('Restricted access!'); ?>

    <div id="page_content">
        <div id="page_content_inner">

            <h4 class="heading_a uk-margin-bottom">Basic settings</h4>
            <form action="" class="uk-form-stacked" id="page_settings">
                <div class="uk-grid" data-uk-grid-margin>
                    <div class="uk-width-large-1-3 uk-width-medium-1-1">
                        <div class="md-card">
                            <div class="md-card-content">
                                <div class="uk-form-row">
                                    <label for="settings_site_name">Site Name</label>
                                    <input class="md-input" type="text" id="settings_site_name" name="settings_site_name" value="Altair Admin"/>
                                </div>
                                <div class="uk-form-row">
                                    <label for="settings_page_description">Page description</label>
                                    <textarea class="md-input" name="settings_page_description" id="settings_page_description" cols="30" rows="4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ad, alias aliquid assumenda dicta ducimus eos harum impedit modi obcaecati odit possimus quibusdam quidem rerum, tempora tenetur ullam ut voluptates?</textarea>
                                </div>
                                <div class="uk-form-row">
                                    <label for="settings_admin_email">Admin email</label>
                                    <input class="md-input" type="text" id="settings_admin_email" name="settings_admin_email" value="altair_admin@example.com"/>
                                </div>
                                <div class="uk-form-row">
                                    <div class="uk-grid uk-grid-width-1-1 uk-grid-width-medium-1-2" data-uk-grid-margin>
                                        <div>
                                            <label for="settings_time_format" class="uk-form-label">Time Format</label>
                                            <select id="settings_time_format" name="settings_time_format" data-md-selectize>
                                                <option value="">Select</option>
                                                <option value="H:i">08:25</option>
                                                <option value="H:i:s">08:25:16</option>
                                                <option value="g:i a">08:25 am</option>
                                                <option value="g:i A">08:25 AM</option>
                                            </select>
                                        </div>
                                        <div>
                                            <label for="settings_date_format" class="uk-form-label">Date Format</label>
                                            <select id="settings_date_format" name="settings_date_format" data-md-selectize>
                                                <option value="">Select</option>
                                                <option value="j/n/Y">29/11/2013</option>
                                                <option value="j-n-Y">29-11-2013</option>
                                                <option value="j.n.Y">29.11.2013</option>
                                                <option value="n/j/Y">11/29/2013</option>
                                                <option value="d/m/Y">29/11/2013</option>
                                                <option value="d-m-Y">29-11-2013</option>
                                                <option value="d.m.Y">29.11.2013</option>
                                                <option value="m/d/Y">11/29/2013</option>
                                                <option value="m-d-Y">11-29-2013</option>
                                                <option value="m.d.Y">11.29.2013</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="uk-width-large-1-3 uk-width-medium-1-2">
                        <div class="md-card">
                            <div class="md-card-content">
                                <ul class="md-list">
                                    <li>
                                        <div class="md-list-content">
                                            <div class="uk-float-right">
                                                <input type="checkbox" data-switchery checked id="settings_site_online" name="settings_site_online" />
                                            </div>
                                            <span class="md-list-heading">Site Online</span>
                                            <span class="uk-text-muted uk-text-small">Lorem ipsum dolor sit amet&hellip;</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="md-list-content">
                                            <div class="uk-float-right">
                                                <input type="checkbox" data-switchery id="settings_seo" name="settings_seo" />
                                            </div>
                                            <span class="md-list-heading">Search Engine Friendly URLs</span>
                                            <span class="uk-text-muted uk-text-small">Lorem ipsum dolor sit amet&hellip;</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="md-list-content">
                                            <div class="uk-float-right">
                                                <input type="checkbox" data-switchery id="settings_url_rewrite" name="settings_url_rewrite" />
                                            </div>
                                            <span class="md-list-heading">Use URL rewriting</span>
                                            <span class="uk-text-muted uk-text-small">Lorem ipsum dolor sit amet&hellip;</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="uk-width-large-1-3 uk-width-medium-1-2">
                        <div class="md-card">
                            <div class="md-card-content">
                                <ul class="md-list">
                                    <li>
                                        <div class="md-list-content">
                                            <div class="uk-float-right">
                                                <input type="checkbox" data-switchery data-switchery-color="#7cb342" checked id="settings_top_bar" name="settings_top_bar" />
                                            </div>
                                            <span class="md-list-heading">Top Bar Enabled</span>
                                            <span class="uk-text-muted uk-text-small">Lorem ipsum dolor sit amet&hellip;</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="md-list-content">
                                            <div class="uk-float-right">
                                                <input type="checkbox" data-switchery data-switchery-color="#7cb342" id="settings_api" name="settings_api" />
                                            </div>
                                            <span class="md-list-heading">Api Enabled</span>
                                            <span class="uk-text-muted uk-text-small">Lorem ipsum dolor sit amet&hellip;</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="md-list-content">
                                            <div class="uk-float-right">
                                                <input type="checkbox" data-switchery data-switchery-color="#d32f2f" id="settings_minify_static" checked name="settings_minify_static" />
                                            </div>
                                            <span class="md-list-heading">Minify JS files automatically</span>
                                            <span class="uk-text-muted uk-text-small">Lorem ipsum dolor sit amet&hellip;</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <h3 class="heading_a">Other settings</h3>

                <div class="uk-grid" data-uk-grid-margin>
                    <div class="uk-width-medium-1-2">
                        <div class="md-card">
                            <div class="md-card-content">
                                <div class="uk-form-row">
                                    <label for="settings_visitors_languages">Select the languages that are accessible for visitors</label>
                                    <select id="settings_visitors_languages" name="settings_visitors_languages" multiple>
                                        <option value="gb" selected>English</option>
                                        <option value="fr" selected>French</option>
                                    </select>
                                </div>
                                <div class="uk-form-row">
                                    <label for="settings_admin_email" class="uk-form-label">Cache type</label>
                                    <div>
                                        <span class="icheck-inline">
                                            <input type="radio" name="settings_cache_type" id="settings_cache_file" data-md-icheck checked />
                                            <label for="settings_cache_file" class="inline-label">File system</label>
                                        </span>
                                        <span class="icheck-inline">
                                            <input type="radio" name="settings_cache_type" id="settings_cache_mysql" data-md-icheck />
                                            <label for="settings_cache_mysql" class="inline-label">MySQL</label>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="uk-width-medium-1-2">
                        <div class="md-card">
                            <div class="md-card-content">
                                <ul class="uk-tab" data-uk-tab="{connect:'#settings_users', animation: 'slide-horizontal' }">
                                    <li class="uk-active"><a href="#">Admin</a></li>
                                    <li><a href="#">Editor</a></li>
                                    <li><a href="#">author</a></li>
                                </ul>
                                <ul id="settings_users" class="uk-switcher uk-margin">
                                    <li>
                                        <ul class="md-list">
                                            <li>
                                                <div class="md-list-content">
                                                    <div class="uk-float-right">
                                                        <input type="checkbox" name="settings_user_admin_editor" checked id="settings_user_admin_editor" data-md-icheck />
                                                    </div>
                                                    <span class="md-list-heading">Disable the visual editor when writing</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="md-list-content">
                                                    <div class="uk-float-right">
                                                        <input type="checkbox" name="settings_user_admin_toolbar" id="settings_user_admin_toolbar" data-md-icheck />
                                                    </div>
                                                    <span class="md-list-heading">Show Toolbar when viewing site</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="md-list-content">
                                                    <div class="uk-float-right">
                                                        <input type="checkbox" name="settings_user_admin_sitemap" checked id="settings_user_admin_sitemap" data-md-icheck />
                                                    </div>
                                                    <span class="md-list-heading">Exclude user from Author-sitemap</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <ul class="md-list">
                                            <li>
                                                <div class="md-list-content">
                                                    <div class="uk-float-right">
                                                        <input type="checkbox" name="settings_user_editor_editor" checked id="settings_user_editor_editor" data-md-icheck />
                                                    </div>
                                                    <span class="md-list-heading">Disable the visual editor when writing</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="md-list-content">
                                                    <div class="uk-float-right">
                                                        <input type="checkbox" name="settings_user_editor_toolbar" checked id="settings_user_editor_toolbar" data-md-icheck />
                                                    </div>
                                                    <span class="md-list-heading">Show Toolbar when viewing site</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="md-list-content">
                                                    <div class="uk-float-right">
                                                        <input type="checkbox" name="settings_user_editor_sitemap" id="settings_user_editor_sitemap" data-md-icheck />
                                                    </div>
                                                    <span class="md-list-heading">Exclude user from Author-sitemap</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <ul class="md-list">
                                            <li>
                                                <div class="md-list-content">
                                                    <div class="uk-float-right">
                                                        <input type="checkbox" name="settings_user_author_editor" id="settings_user_author_editor" data-md-icheck />
                                                    </div>
                                                    <span class="md-list-heading">Disable the visual editor when writing</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="md-list-content">
                                                    <div class="uk-float-right">
                                                        <input type="checkbox" name="settings_user_author_toolbar" checked id="settings_user_author_toolbar" data-md-icheck />
                                                    </div>
                                                    <span class="md-list-heading">Show Toolbar when viewing site</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="md-list-content">
                                                    <div class="uk-float-right">
                                                        <input type="checkbox" name="settings_user_author_sitemap" id="settings_user_author_sitemap" data-md-icheck />
                                                    </div>
                                                    <span class="md-list-heading">Exclude user from Author-sitemap</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="md-fab-wrapper">
                    <button type="submit" class="md-fab md-fab-primary" href="#" id="page_settings_submit">
                        <i class="material-icons">&#xE161;</i>
                    </button>
                </div>

            </form>

        </div>
    </div>