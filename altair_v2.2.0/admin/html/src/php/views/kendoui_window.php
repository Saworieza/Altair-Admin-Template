<?php defined('safe_access') or die('Restricted access!'); ?>

    <div id="page_content">
        <div id="page_content_inner">

            <div class="md-card">
                <div class="md-card-content">
                    <div class="uk-grid" data-uk-grid-margin>
                        <div class="uk-width-large-3-5">
                            <div id="kUI_window">
                                <p><?php echo $faker->sentence(80); ?></p>
                                <hr class="md-hr"/>
                                <form>
                                    <label for="window_input">Your name</label>
                                    <input id="window_input" type="text" class="md-input"/>
                                    <button class="uk-btn md-btn md-btn-flat">Send</button>
                                </form>
                            </div>

                            <span id="kUI_undo" style="display:none" class="k-button">Click here to open the window.</span>
                        </div>
                        <div class="uk-width-large-2-5">
<pre class="line-numbers"><code class="language-javascript">var k_window = $(selector),
k_undo = $(button)
  .bind("click", function () {
    k_window.data("kendoWindow").open();
    k_undo.hide();
  });

var onClose = function () {
  k_undo.show();
};

if (!k_window.data("kendoWindow")) {
  k_window.kendoWindow({
    width: "600px",
    title: "Lorem ipsum dolor sit",
    actions: [
      "Pin",
      "Minimize",
      "Maximize",
      "Close"
    ],
    close: onClose
  });
}</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
