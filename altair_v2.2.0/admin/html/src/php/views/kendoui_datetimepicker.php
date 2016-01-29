<?php defined('safe_access') or die('Restricted access!'); ?>

    <div id="page_content">
        <div id="page_content_inner">

            <div class="md-card">
                <div class="md-card-content">
                    <div class="uk-grid" data-uk-grid-margin>
                        <div class="uk-width-large-1-2">
                            <form class="uk-form-stacked">
                                <label for="kUI_datetimepicker_basic" class="uk-form-label">Datetimepicker (basic)</label>
                                <input id="kUI_datetimepicker_basic" />
                            </form>
                        </div>
                        <div class="uk-width-large-1-2">
<pre class="line-numbers"><code class="language-javascript">$(input).kendoDateTimePicker({
  value: new Date()
});</code></pre>
                        </div>
                    </div>
                </div>
            </div>

            <div class="md-card">
                <div class="md-card-content">
                    <h3 class="heading_list">Range selection</h3>
                    <div class="uk-grid" data-uk-grid-margin>
                        <div class="uk-width-large-1-2">
                            <form class="uk-form-stacked">
                                <div class="uk-form-row">
                                    <label for="kUI_datetimepicker_range_start" class="uk-form-label">Start date:</label>
                                    <input id="kUI_datetimepicker_range_start" />
                                </div>
                                <div class="uk-form-row">
                                    <label for="kUI_datetimepicker_range_end" class="uk-form-label">End date:</label>
                                    <input id="kUI_datetimepicker_range_end" />
                                </div>
                            </form>
                        </div>
                        <div class="uk-width-large-1-2">
<pre class="line-numbers"><code class="language-javascript">
function startChange() {
  var startDate = start.value(),
      endDate = end.value();

  if (startDate) {
    startDate = new Date(startDate);
    startDate.setDate(startDate.getDate());
    end.min(startDate);
  } else if (endDate) {
    start.max(new Date(endDate));
  } else {
    endDate = new Date();
    start.max(endDate);
    end.min(endDate);
  }
}

function endChange() {
  var endDate = end.value(),
      startDate = start.value();

  if (endDate) {
    endDate = new Date(endDate);
    endDate.setDate(endDate.getDate());
    start.max(endDate);
  } else if (startDate) {
    end.min(new Date(startDate));
  } else {
    endDate = new Date();
    start.max(endDate);
    end.min(endDate);
  }
}

var today = kendo.date.today();

var start = $(input).kendoDateTimePicker({
  value: today,
  change: startChange,
  parseFormats: ["MM/dd/yyyy"]
}).data("kendoDateTimePicker");

var end = $(input).kendoDateTimePicker({
  value: today,
  change: endChange,
  parseFormats: ["MM/dd/yyyy"]
}).data("kendoDateTimePicker");

start.max(end.value());
end.min(start.value());</code></pre>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
