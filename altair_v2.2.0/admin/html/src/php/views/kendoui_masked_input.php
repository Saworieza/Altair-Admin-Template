<?php defined('safe_access') or die('Restricted access!'); ?>

    <div id="page_content">
        <div id="page_content_inner">

            <div class="md-card">
                <div class="md-card-content">
                    <form class="uk-form-stacked">

                        <div class="uk-grid uk-grid-width-large-1-2 uk-grid-width-xlarge-1-4" data-uk-grid-margin>
                            <div>
                                <label class="uk-form-label" for="kUI_masked_phone">Phone number</label>
                                <input id="kUI_masked_phone" type="text" class="uk-form-width-medium" />
                                <span class="uk-form-help-block">(999) 000-0000</span>
                            </div>
                            <div>
                                <label class="uk-form-label" for="kUI_masked_credit_card">Credit Card</label>
                                <input id="kUI_masked_credit_card" type="text" class="uk-form-width-medium" />
                                <span class="uk-form-help-block">0000 0000 0000 0000</span>
                            </div>
                            <div>
                                <label class="uk-form-label" for="kUI_masked_ssn">SSN</label>
                                <input id="kUI_masked_ssn" type="text" class="uk-form-width-medium" />
                                <span class="uk-form-help-block">000-00-0000</span>
                            </div>
                            <div>
                                <label class="uk-form-label" for="kUI_masked_postcode">Post Code</label>
                                <input id="kUI_masked_postcode" type="text" class="uk-form-width-medium" />
                                <span class="uk-form-help-block">L0L 0LL</span>
                            </div>
                        </div>

                        <div class="uk-grid" data-uk-grid-margin="">
                            <div class="uk-width-1-1">
<pre class="line-numbers"><code class="language-javascript">$(input).kendoMaskedTextBox({
    mask: "(999) 000-0000"
});
$(input).kendoMaskedTextBox({
    mask: "0000 0000 0000 0000"
});
$(input).kendoMaskedTextBox({
    mask: "000-00-0000"
});
$(input).kendoMaskedTextBox({
    mask: "L0L 0LL"
});</code></pre>
                            </div>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>
