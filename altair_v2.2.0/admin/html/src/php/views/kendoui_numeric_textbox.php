<?php defined('safe_access') or die('Restricted access!'); ?>

    <div id="page_content">
        <div id="page_content_inner">

            <div class="md-card">
                <div class="md-card-content">
                    <div class="uk-grid" data-uk-grid-margin>
                        <div class="uk-width-large-1-2">
                            <form class="uk-form-stacked">
                                <div class="uk-form-row">
                                    <label class="uk-form-label" for="kUI_numeric_price">Price</label>
                                    <input id="kUI_numeric_price" type="number" class="uk-form-width-medium" value="30" min="0" max="100" />
                                </div>
                                <div class="uk-form-row">
                                    <label class="uk-form-label" for="kUI_numeric_price_discount">Price Discount</label>
                                    <input id="kUI_numeric_price_discount" type="number" class="uk-form-width-medium" value="0.05" />
                                </div>
                                <div class="uk-form-row">
                                    <label class="uk-form-label" for="kUI_numeric_weight">Weight</label>
                                    <input id="kUI_numeric_weight" type="number" class="uk-form-width-medium" value="2" />
                                </div>
                                <div class="uk-form-row">
                                    <label class="uk-form-label" for="kUI_numeric_stock">Currently in stock</label>
                                    <input id="kUI_numeric_stock" class="uk-form-width-medium" type="number" value="17" min="0" max="100" step="1" />
                                </div>
                            </form>
                        </div>
                        <div class="uk-width-large-1-2">
<pre class="line-numbers"><code class="language-javascript">// price
$(input).kendoNumericTextBox();

// price discount
$(input).kendoNumericTextBox({
  format: "c",
  decimals: 3
});

// weight
$(input).kendoNumericTextBox({
  format: "p0",
  min: 0,
  max: 0.1,
  step: 0.01
});

// currently in stock
$(input).kendoNumericTextBox({
  format: "#.00 kg"
});</code></pre>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
