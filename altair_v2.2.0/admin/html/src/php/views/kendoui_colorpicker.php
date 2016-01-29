<?php defined('safe_access') or die('Restricted access!'); ?>

    <div id="page_content">
        <div id="page_content_inner">
            <div class="uk-grid">
                <div class="uk-width-1-1">
                    <div class="md-card">
                        <div class="md-card-content">
                            <div class="uk-grid" data-uk-grid-margin>
                                <div class="uk-width-large-1-2">
                                    <div class="icon_preview uk-margin-medium-bottom">
                                        <div class="uk-grid uk-grid-divider uk-text-center" data-uk-grid-margin>
                                            <div class="uk-width-medium-1-5 uk-width-1-2">
                                                <i class="material-icons md-48">&#xE195;</i>
                                            </div>
                                            <div class="uk-width-medium-1-5 uk-width-1-2">
                                                <i class="material-icons md-48">&#xE2BD;</i>
                                            </div>
                                            <div class="uk-width-medium-1-5 uk-width-1-2">
                                                <i class="material-icons md-48">&#xE3AF;</i>
                                            </div>
                                            <div class="uk-width-medium-1-5 uk-width-1-2">
                                                <i class="material-icons md-48">&#xE52F;</i>
                                            </div>
                                            <div class="uk-width-medium-1-5 uk-width-1-2">
                                                <i class="material-icons md-48">&#xE545;</i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-grid uk-grid-divider" data-uk-grid-margin>
                                        <div class="uk-width-medium-1-2">
                                            <h4 class="heading_list">Color Palette</h4>
                                            <div id="kUI_color_palette"></div>
                                        </div>
                                        <div class="uk-width-medium-1-2">
                                            <h4 class="heading_list">Color Picker</h4>
                                            <div id="kUI_color_picker"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-width-large-1-2">
<pre class="line-numbers"><code class="language-javascript">function preview(e) {
  $(".icon_preview").children('i').css("color", e.value);
}

// color palette
$(selector).kendoColorPalette({
  columns: 5,
  tileSize: {
    width: 24,
    height: 16
  },
  palette: [
    "#e53935", "#d81b60", "#8e24aa", "#5e35b1", "#3949ab",
    "#1e88e5", "#039be5", "#00acc1", "#00897b", "#43a047",
    "#7cb342", "#c0ca33", "#fdd835", "#ffb300", "#fb8c00",
    "#f4511e", "#6d4c41", "#757575", "#546e7a"
  ],
  change: preview
});

// color picker
$(selector).kendoColorPicker({
  value: "#fff",
  buttons: false,
  select: preview
});</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
