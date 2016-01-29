<?php defined('safe_access') or die('Restricted access!'); ?>

    <div id="page_content">
        <div id="page_content_inner">

            <div class="uk-width-medium-9-10 uk-container-center">

                <div class="uk-grid uk-grid-collapse" data-uk-grid-margin>
                    <div class="uk-width-large-8-10">
                        <div class="md-card md-card-single md-card-CodeMirror">
                            <div class="md-card-toolbar">
                                <div class="md-card-toolbar-actions">
                                    <i class="md-icon material-icons" id="code_editor_fullscreen">&#xE5D0;</i>
                                    <div class="md-card-dropdown" data-uk-dropdown="{pos:'bottom-right'}">
                                        <i class="md-icon material-icons">&#xE3B7;</i>
                                        <div class="uk-dropdown uk-dropdown-scrollable">
                                            <ul class="uk-nav" id="code_editor_theme">
                                                <li class="uk-nav-header">Editor Theme</li>
                                                <li class="uk-active"><a href="#" data-editor-theme="default">default</a></li>
                                                <li><a href="#" data-editor-theme="3024-day">3024-day</a></li>
                                                <li><a href="#" data-editor-theme="3024-night">3024-night</a></li>
                                                <li><a href="#" data-editor-theme="abcdef">abcdef</a></li>
                                                <li><a href="#" data-editor-theme="ambiance">ambiance</a></li>
                                                <li><a href="#" data-editor-theme="base16-dark">base16-dark</a></li>
                                                <li><a href="#" data-editor-theme="base16-light">base16-light</a></li>
                                                <li><a href="#" data-editor-theme="blackboard">blackboard</a></li>
                                                <li><a href="#" data-editor-theme="cobalt">cobalt</a></li>
                                                <li><a href="#" data-editor-theme="colorforth">colorforth</a></li>
                                                <li><a href="#" data-editor-theme="dracula">dracula</a></li>
                                                <li><a href="#" data-editor-theme="eclipse">eclipse</a></li>
                                                <li><a href="#" data-editor-theme="elegant">elegant</a></li>
                                                <li><a href="#" data-editor-theme="erlang-dark">erlang-dark</a></li>
                                                <li><a href="#" data-editor-theme="icecoder">icecoder</a></li>
                                                <li><a href="#" data-editor-theme="lesser-dark">lesser-dark</a></li>
                                                <li><a href="#" data-editor-theme="liquibyte">liquibyte</a></li>
                                                <li><a href="#" data-editor-theme="material">material</a></li>
                                                <li><a href="#" data-editor-theme="mbo">mbo</a></li>
                                                <li><a href="#" data-editor-theme="mdn-like">mdn-like</a></li>
                                                <li><a href="#" data-editor-theme="midnight">midnight</a></li>
                                                <li><a href="#" data-editor-theme="monokai">monokai</a></li>
                                                <li><a href="#" data-editor-theme="neat">neat</a></li>
                                                <li><a href="#" data-editor-theme="neo">neo</a></li>
                                                <li><a href="#" data-editor-theme="night">night</a></li>
                                                <li><a href="#" data-editor-theme="paraiso-dark">paraiso-dark</a></li>
                                                <li><a href="#" data-editor-theme="paraiso-light">paraiso-light</a></li>
                                                <li><a href="#" data-editor-theme="pastel-on-dark">pastel-on-dark</a></li>
                                                <li><a href="#" data-editor-theme="rubyblue">rubyblue</a></li>
                                                <li><a href="#" data-editor-theme="seti">seti</a></li>
                                                <li><a href="#" data-editor-theme="solarized dark">solarized dark</a></li>
                                                <li><a href="#" data-editor-theme="solarized light">solarized light</a></li>
                                                <li><a href="#" data-editor-theme="the-matrix">the-matrix</a></li>
                                                <li><a href="#" data-editor-theme="tomorrow-night-bright">tomorrow-night-bright</a></li>
                                                <li><a href="#" data-editor-theme="tomorrow-night-eighties">tomorrow-night-eighties</a></li>
                                                <li><a href="#" data-editor-theme="ttcn">ttcn</a></li>
                                                <li><a href="#" data-editor-theme="twilight">twilight</a></li>
                                                <li><a href="#" data-editor-theme="vibrant-ink">vibrant-ink</a></li>
                                                <li><a href="#" data-editor-theme="xq-dark">xq-dark</a></li>
                                                <li><a href="#" data-editor-theme="xq-light">xq-light</a></li>
                                                <li><a href="#" data-editor-theme="yeti">yeti</a></li>
                                                <li><a href="#" data-editor-theme="zenburn">zenburn</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <h3 class="md-card-toolbar-heading-text">
                                    Code Editor
                                </h3>
                            </div>
                            <div class="md-card-content padding-reset">
                                <form><textarea class="CodeMirror_textarea" name="codeEditor" id="codeEditor" cols="30" rows="10"><?php include('data/codemirror/email_template.html'); ?></textarea></form>
                            </div>
                        </div>

                    </div>
                    <div class="uk-width-large-2-10 uk-visible-large">
                        <div class="md-list-outside-wrapper">
                            <ul class="md-list md-list-outside file_list" id="file_list">
                                <li class="heading_list">Files</li>
                                <li class="md-list-item-active">
                                    <a href="#" class="md-list-content" data-editor-file="email_template.html" data-editor-mode="html">
                                        <span class="md-list-heading uk-text-truncate">Email template</span>
                                        <span class="uk-text-small uk-text-muted">email_template.html</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="md-list-content" data-editor-file="main.js" data-editor-mode="js">
                                        <span class="md-list-heading uk-text-truncate">Core functions</span>
                                        <span class="uk-text-small uk-text-muted">main.js</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="md-list-content" data-editor-file="data.json" data-editor-mode="json">
                                        <span class="md-list-heading uk-text-truncate">Main Data</span>
                                        <span class="uk-text-small uk-text-muted">data.json</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="md-list-content" data-editor-file="wp_config.php" data-editor-mode="php">
                                        <span class="md-list-heading uk-text-truncate">WP Config</span>
                                        <span class="uk-text-small uk-text-muted">wp_config.php</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="md-list-content">
                                        <span class="md-list-heading uk-text-truncate uk-text-danger">Access Denied</span>
                                        <span class="uk-text-small uk-text-muted">some_file.php</span>
                                    </a>
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
