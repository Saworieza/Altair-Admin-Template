<?php defined('safe_access') or die('Restricted access!'); ?>

    <div id="page_content">
        <div id="page_content_inner">

            <div class="md-card">
                <div class="md-card-content">
                    <div class="uk-grid" data-uk-grid-margin>
                        <div class="uk-width-large-1-2">
                            <form class="uk-form-stacked">
                                <div class="uk-form-row">
                                    <label for="kUI_automplete" class="uk-form-label">Choose shipping countries:</label>
                                    <input id="kUI_automplete" class="uk-width-1-1" />
                                </div>
                            </form>
                        </div>
                        <div class="uk-width-large-1-2">
<pre class="line-numbers"><code class="language-javascript">// AutoComplete (basic usage)
var countries = ["Albania", "Andorra", "Armenia", "Austria", "Azerbaijan", "Belarus", "Belgium", "Bosnia & Herzegovina", "Bulgaria", "Croatia", "Cyprus", "Czech Republic", "Denmark", "Estonia", "Finland", "France", "Georgia", "Germany", "Greece", "Hungary", "Iceland", "Ireland", "Italy", "Kosovo", "Latvia", "Liechtenstein", "Lithuania", "Luxembourg", "Macedonia", "Malta", "Moldova", "Monaco", "Montenegro", "Netherlands", "Norway", "Poland", "Portugal", "Romania", "Russia", "San Marino", "Serbia", "Slovakia", "Slovenia", "Spain", "Sweden", "Switzerland", "Turkey", "Ukraine", "United Kingdom", "Vatican City"];

var countriesDS = new kendo.data.DataSource({
  data: countries
});

var getFilters = function (filter) {
  var filters = [];
  filters.push(filter);
  values = autoComplete.value().split(", ");
  values.pop();
  $.each(values, function (index, item) {
    filters.push({field: "", ignoreCase: true, operator: "neq", value: item});
  });
  return filters;
};

var autoComplete = $(selector).kendoAutoComplete({
  filter: "startswith",
  placeholder: "Select country...",
  separator: ", ",
  dataSource: {
    transport: {
      read: function (options, operation) {
        countriesDS.read();
        countriesDS.filter({logic: "and", filters: getFilters(options.data.filter.filters[0])});
        options.success(countriesDS.view());
      }
    },
    serverFiltering: true
  }
}).data("kendoAutoComplete");</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="md-card">
                <div class="md-card-content">
                    <div class="uk-grid" data-uk-grid-margin>
                        <div class="uk-width-large-1-2">
                            <form class="uk-form-stacked">
                                <div class="uk-form-row">
                                    <label for="kUI_automplete_template" class="uk-form-label">Contacts:</label>
                                    <input id="kUI_automplete_template" class="uk-width-1-1" />
                                    <span class="uk-form-help-block">Hint: type "am" or "wi"</span>
                                </div>
                            </form>
                        </div>
                        <div class="uk-width-large-1-2">
<pre class="line-numbers"><code class="language-javascript">// AutoComplete (custom template)
$(selector).kendoAutoComplete({
  minLength: 2,
  dataTextField: &quot;ContactName&quot;,
  template:
    '&lt;div class=&quot;k-list-wrapper&quot;&gt;'+
      '&lt;span class=&quot;k-state-default k-list-wrapper-addon&quot;&gt;' +
          '&lt;img src=\&quot;assets/img/avatars/avatar#:data.CustomerID#.png\&quot; alt=\&quot;#:data.CustomerID#\&quot; /&gt;' +
      '&lt;/span&gt;' +
      '&lt;span class=&quot;k-state-default k-list-wrapper-content&quot;&gt;' +
          '&lt;p&gt;#: data.ContactName #&lt;/p&gt;' +
          '&lt;span class=&quot;uk-text-muted uk-text-small&quot;&gt;#: data.CompanyName #&lt;/span&gt;' +
      '&lt;/span&gt;' +
    '&lt;/div&gt;',
  dataSource: {
  transport: {
    read: {
      dataType: &quot;json&quot;,
        url: &quot;data/autocomplete_data.json&quot;
      }
    }
  },
  height: 204
}).data(&quot;kendoAutoComplete&quot;);</code></pre>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
