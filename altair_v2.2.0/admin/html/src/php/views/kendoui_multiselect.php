<?php defined('safe_access') or die('Restricted access!'); ?>

    <div id="page_content">
        <div id="page_content_inner">

            <div class="md-card">
                <div class="md-card-content">
                    <div class="uk-grid" data-uk-grid-margin>
                        <div class="uk-width-large-1-2">
                            <form class="uk-form-stacked">
                                <label for="kUI_multiselect_basic" class="uk-form-label">Basic usage</label>
                                <select id="kUI_multiselect_basic" multiple="multiple" data-placeholder="Select attendees...">
                                    <option>Steven White</option>
                                    <option>Nancy King</option>
                                    <option>Nancy Davolio</option>
                                    <option>Robert Davolio</option>
                                    <option>Michael Leverling</option>
                                    <option>Andrew Callahan</option>
                                    <option>Michael Suyama</option>
                                    <option selected>Anne King</option>
                                    <option>Laura Peacock</option>
                                    <option>Robert Fuller</option>
                                    <option>Janet White</option>
                                    <option>Nancy Leverling</option>
                                    <option>Robert Buchanan</option>
                                    <option>Margaret Buchanan</option>
                                    <option selected>Andrew Fuller</option>
                                    <option>Anne Davolio</option>
                                    <option>Andrew Suyama</option>
                                    <option>Nige Buchanan</option>
                                    <option>Laura Fuller</option>
                                </select>
                            </form>
                        </div>
                        <div class="uk-width-large-1-2">
<pre class="line-numbers"><code class="language-javascript">$(select).kendoMultiSelect();</code></pre>
                        </div>
                    </div>
                </div>
            </div>

            <div class="md-card">
                <div class="md-card-content">
                    <div class="uk-grid" data-uk-grid-margin>
                        <div class="uk-width-large-1-2">
                            <form class="uk-form-stacked">
                                <label for="kUI_multiselect_custom_template" class="uk-form-label">Customizing templates</label>
                                <select id="kUI_multiselect_custom_template" multiple="multiple" data-placeholder="Select attendees..."></select>
                            </form>
                        </div>
                        <div class="uk-width-large-1-2">
<pre class="line-numbers"><code class="language-javascript">$(select).kendoMultiSelect({
  dataTextField: &quot;ContactName&quot;,
  dataValueField: &quot;CustomerID&quot;,
  itemTemplate:
    '&lt;div class=&quot;k-list-wrapper&quot;&gt;'+
      '&lt;span class=&quot;k-state-default k-list-wrapper-addon&quot;&gt;' +
        '&lt;img src=\&quot;assets/img/avatars/avatar#:data.CustomerID#.png\&quot; alt=\&quot;#:data.CustomerID#\&quot; /&gt;' +
      '&lt;/span&gt;' +
      '&lt;span class=&quot;k-state-default k-list-wrapper-content&quot;&gt;' +
        '&lt;p&gt;#: data.ContactName #&lt;/p&gt;' +
        '&lt;span class=&quot;uk-text-muted uk-text-small&quot;&gt;#: data.CompanyName #&lt;/span&gt;' +
      '&lt;/span&gt;' +
    '&lt;/div&gt;',
  tagTemplate:
    '&lt;img class=&quot;k-tag-image&quot; src=\&quot;assets/img/avatars/avatar#:data.CustomerID#.png\&quot; alt=\&quot;${data.CustomerID}\&quot; /&gt;' +
    '#: data.ContactName #',
  dataSource: {
    transport: {
      read: {
        dataType: &quot;json&quot;,
        url: &quot;data/kUI_users_data.json&quot;
      }
    }
  },
  value: [
    { ContactName: &quot;William Block&quot;, CustomerID: 3 }
  ],
  height: 204
});</code></pre>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
