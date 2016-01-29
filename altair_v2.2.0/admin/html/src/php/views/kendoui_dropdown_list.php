<?php defined('safe_access') or die('Restricted access!'); ?>

    <div id="page_content">
        <div id="page_content_inner">

            <div class="md-card">
                <div class="md-card-content">
                    <div class="uk-grid" data-uk-grid-margin>
                        <div class="uk-width-large-1-2">
                            <form class="uk-form-stacked">
                                <label class="uk-form-label" for="kUI_dropdown_basic_input">From <code>&lt;input&gt;</code> element</label>
                                <input id="kUI_dropdown_basic_input" type="text" value="1" class="uk-form-width-medium" />
                            </form>
                        </div>
                        <div class="uk-width-large-1-2">
<pre class="line-numbers"><code class="language-javascript">var data = [
  {text: "Black", value: "1"},
  {text: "Orange", value: "2"},
  {text: "Grey", value: "3"}
];
$(input).kendoDropDownList({
  dataTextField: "text",
  dataValueField: "value",
  dataSource: data,
  index: 0
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
                                <label class="uk-form-label" for="kUI_dropdown_basic_select">From <code>&lt;select&gt;</code> element</label>
                                <select id="kUI_dropdown_basic_select" class="uk-form-width-medium">
                                    <option>S - 6 3/4</option>
                                    <option>M - 7 1/4</option>
                                    <option>L - 7 1/8</option>
                                    <option>XL - 7 5/8</option>
                                </select>
                            </form>
                        </div>
                        <div class="uk-width-large-1-2">
<pre class="line-numbers"><code class="language-javascript">$(select).kendoDropDownList();</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
