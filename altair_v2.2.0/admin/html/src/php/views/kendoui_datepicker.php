<?php defined('safe_access') or die('Restricted access!'); ?>

    <div id="page_content">
        <div id="page_content_inner">

            <div class="md-card">
                <div class="md-card-content">
                    <div class="uk-grid" data-uk-grid-margin>
                        <div class="uk-width-large-1-2">
                            <form class="uk-form-stacked">
                                <label for="kUI_datepicker_a" class="uk-form-label">Datepicker</label>
                                <input id="kUI_datepicker_a" value="10-06-2015" />
                            </form>
                        </div>
                        <div class="uk-width-large-1-2">
<pre class="line-numbers"><code class="language-javascript">$(input).kendoDatePicker({
  format: "d-MM-yyyy"
});</code></pre>
                        </div>
                    </div>
                </div>
            </div>

            <div class="md-card">
                <div class="md-card-content">
                    <div class="uk-grid" data-uk-grid-margin>
                        <div class="uk-width-large-1-2">
                            <form class="uk-form-stacked">
                                <label for="kUI_datepicker_b" class="uk-form-label">Datepicker (months)</label>
                                <input id="kUI_datepicker_b" value="November 2015" />
                            </form>
                        </div>
                        <div class="uk-width-large-1-2">
<pre class="line-numbers"><code class="language-javascript">$(input).kendoDatePicker({
  start: "year",
  depth: "year",
  format: "MMMM yyyy"
});</code></pre>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
