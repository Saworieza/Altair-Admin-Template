<?php defined('safe_access') or die('Restricted access!'); ?>

    <div id="page_content">
        <div id="page_content_inner">

            <div class="md-card">
                <div class="md-card-content">
                    <h3 class="heading_a">
                        Upload Component
                        <span class="sub-heading">Allow users to upload files through a file input form element or a placeholder area.</span>
                    </h3>
                    <div class="uk-grid">
                        <div class="uk-width-1-1">
                            <div id="file_upload-drop" class="uk-file-upload">
                                <p class="uk-text">Drop file to upload</p>
                                <p class="uk-text-muted uk-text-small uk-margin-small-bottom">or</p>
                                <a class="uk-form-file md-btn">choose file<input id="file_upload-select" type="file"></a>
                            </div>
                            <div id="file_upload-progressbar" class="uk-progress uk-hidden">
                                <div class="uk-progress-bar" style="width:0">0%</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="md-card">
                <div class="md-card-content">
                    <h3 class="heading_a">
                        Form file
                        <span class="sub-heading">Replace the default file input with your own HTML content, like a button.</span>
                    </h3>
                    <div class="uk-grid">
                        <div class="uk-width-1-1">
                            <div class="uk-form-file md-btn md-btn-primary">
                                Select
                                <input id="form-file" type="file">
                            </div>
                            You can also use
                            <div class="uk-form-file uk-text-primary">text<input id="form-file" type="file"></div>.
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
