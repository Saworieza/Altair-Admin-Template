<?php defined('safe_access') or die('Restricted access!'); ?>

    <div id="page_content">
        <div id="page_content_inner">

            <h3 class="heading_b uk-margin-bottom">
                Material Design Preloaders
                <span class="sub-heading">SVG + CSS3 animations</span>
            </h3>

            <div class="md-card uk-margin-medium-bottom">
                <div class="md-card-content">
                    <h4 class="heading_a">Colors</h4>
                    <div class="uk-grid" data-uk-grid-margin>
                        <div class="uk-width-medium-1-4">
                            <div class="md-preloader"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" height="48" width="48" viewbox="0 0 75 75"><circle cx="37.5" cy="37.5" r="33.5" stroke-width="4"/></svg></div>
                        </div>
                        <div class="uk-width-medium-1-4">
                            <div class="md-preloader md-preloader-warning"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" height="48" width="48" viewbox="0 0 75 75"><circle cx="37.5" cy="37.5" r="33.5" stroke-width="4"/></svg></div>
                        </div>
                        <div class="uk-width-medium-1-4">
                            <div class="md-preloader md-preloader-success"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" height="48" width="48" viewbox="0 0 75 75"><circle cx="37.5" cy="37.5" r="33.5" stroke-width="4"/></svg></div>
                        </div>
                        <div class="uk-width-medium-1-4">
                            <div class="md-preloader md-preloader-danger"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" height="48" width="48" viewbox="0 0 75 75"><circle cx="37.5" cy="37.5" r="33.5" stroke-width="4"/></svg></div>
                        </div>
                    </div>
                    <h4 class="heading_a">Sizes and stroke width</h4>
                    <div class="uk-grid" data-uk-grid-margin>
                        <div class="uk-width-medium-1-4">
                            <div class="md-preloader"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" height="96" width="96" viewbox="0 0 75 75"><circle cx="37.5" cy="37.5" r="33.5" stroke-width="4"/></svg></div>
                        </div>
                        <div class="uk-width-medium-1-4">
                            <div class="md-preloader"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" height="32" width="32" viewbox="0 0 75 75"><circle cx="37.5" cy="37.5" r="33.5" stroke-width="6"/></svg></div>
                        </div>
                        <div class="uk-width-medium-1-4">
                            <div class="md-preloader"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" height="48" width="48" viewbox="0 0 75 75"><circle cx="37.5" cy="37.5" r="33.5" stroke-width="8"/></svg></div>
                        </div>
                        <div class="uk-width-medium-1-4">
                            <div class="md-preloader"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" height="48" width="48" viewbox="0 0 75 75"><circle cx="37.5" cy="37.5" r="33.5" stroke-width="2"/></svg></div>
                        </div>
                    </div>
                    <h4 class="heading_a">Content preloader</h4>
                    <div class="uk-grid" data-uk-grid-margin>
                        <div class="uk-width-large-1-3">
                            <button class="md-btn" id="show_preloader_md">Show</button>
<pre class="line-numbers uk-margin-top"><code class="language-javascript">
// show preloader
altair_helpers.content_preloader_show();
// hide preloader
altair_helpers.content_preloader_hide();</code></pre>
                        </div>
                    </div>
                </div>
            </div>

            <h3 class="heading_b uk-margin-bottom">
                Regular Preloaders
                <span class="sub-heading">gif images</span>
            </h3>

            <div class="md-card">
                <div class="md-card-content">
                    <h4 class="heading_a">Colors</h4>
                    <div class="uk-grid" data-uk-grid-margin>
                        <div class="uk-width-medium-1-4">
                            <img src="<?php echo $img_path;?>/spinners/spinner.gif" alt="" width="32" height="32">
                        </div>
                        <div class="uk-width-medium-1-4">
                            <img src="<?php echo $img_path;?>/spinners/spinner_warning.gif" alt="" width="32" height="32">
                        </div>
                        <div class="uk-width-medium-1-4">
                            <img src="<?php echo $img_path;?>/spinners/spinner_success.gif" alt="" width="32" height="32">
                        </div>
                        <div class="uk-width-medium-1-4">
                            <img src="<?php echo $img_path;?>/spinners/spinner_danger.gif" alt="" width="32" height="32">
                        </div>
                    </div>
                    <h4 class="heading_a">Sizes</h4>
                    <div class="uk-grid" data-uk-grid-margin>
                        <div class="uk-width-medium-1-4">
                            <img src="<?php echo $img_path;?>/spinners/spinner_small.gif" alt="" width="24" height="24">
                        </div>
                        <div class="uk-width-medium-1-4">
                            <img src="<?php echo $img_path;?>/spinners/spinner_medium.gif" alt="" width="48" height="48">
                        </div>
                        <div class="uk-width-medium-1-4">
                            <img src="<?php echo $img_path;?>/spinners/spinner_large.gif" alt="" width="64" height="64">
                        </div>
                    </div>
                    <h4 class="heading_a">Content preloader</h4>
                    <div class="uk-grid" data-uk-grid-margin>
                        <div class="uk-width-large-1-3">
                            <button class="md-btn" id="show_preloader_regular">Show</button>
<pre class="line-numbers uk-margin-top"><code class="language-javascript">
// show preloader
altair_helpers.content_preloader_show('regular');
// hide preloader
altair_helpers.content_preloader_hide();</code></pre>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
