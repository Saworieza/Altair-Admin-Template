<?php defined('safe_access') or die('Restricted access!'); ?>

    <div id="page_content">
        <div id="page_content_inner">

            <div class="md-card">
                <div class="md-card-content">
                    <div class="uk-grid" data-uk-grid-margin>
                        <div class="uk-width-large-1-2">
                            <form class="uk-form-stacked">
                                <label class="uk-form-label" for="kUI_timepicker">Basic Example</label>
                                <input id="kUI_timepicker" type="number" class="uk-form-width-medium" />
                            </form>
                        </div>
                        <div class="uk-width-large-1-2">
<pre class="line-numbers"><code class="language-javascript">// basic example
$(input).kendoTimePicker();</code></pre>
                        </div>
                    </div>
                </div>
            </div>

            <div class="md-card">
                <div class="md-card-content">
                    <div class="uk-grid" data-uk-grid-margin>
                        <div class="uk-width-large-1-2">
                            <form class="uk-form-stacked">
                                <label class="uk-form-label">Range selection</label>
                                <div class="uk-grid" data-uk-grid-margin>
                                    <div class="uk-width-large-1-2">
                                        <input id="kUI_timepicker_range_start" type="number" class="uk-form-width-medium" />
                                    </div>
                                    <div class="uk-width-large-1-2">
                                        <input id="kUI_timepicker_range_end" type="number" class="uk-form-width-medium" />
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="uk-width-large-1-2">
<pre class="line-numbers"><code class="language-javascript">// range selection
function startChange() {
  var startTime = start.value();
  if (startTime) {
    startTime = new Date(startTime);
    end.max(startTime);
    startTime.setMinutes(startTime.getMinutes() + this.options.interval);
    end.min(startTime);
    end.value(startTime);
  }
}

var start = $kUI_timepicker_range_start.kendoTimePicker({
  change: startChange
}).data("kendoTimePicker");

var end = $kUI_timepicker_range_end.kendoTimePicker().data("kendoTimePicker");

start.min("8:00 AM");
start.max("6:00 PM");

end.min("8:00 AM");
end.max("7:30 AM");</code></pre>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
