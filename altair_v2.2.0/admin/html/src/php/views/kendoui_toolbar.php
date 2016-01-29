<?php defined('safe_access') or die('Restricted access!'); ?>

    <div id="page_content">
        <div id="page_content_inner">

            <div class="md-card">
                <div class="md-card-content">
                    <div id="kUI_toolBar" class="uk-margin-large-bottom"></div>
<pre class="line-numbers"><code class="language-javascript">$(selector).kendoToolBar({
items: [
  { type: &quot;button&quot;, text: &quot;Button&quot; },
  { type: &quot;button&quot;, text: &quot;Toggle Button&quot;, togglable: true },
  {
    type: &quot;splitButton&quot;,
    text: &quot;Insert&quot;,
    menuButtons: [
      { text: &quot;Insert above&quot;, icon: &quot;insert-n&quot; },
      { text: &quot;Insert between&quot;, icon: &quot;insert-m&quot; },
      { text: &quot;Insert below&quot;, icon: &quot;insert-s&quot; }
    ]
  },
  { type: &quot;separator&quot; },
  { template: &quot;&lt;label&gt;Format:&lt;/label&gt;&quot; },
  {
    template: &quot;&lt;input id='kUI_dropdown' class='uk-form-width-medium' /&gt;&quot;,
    overflow: &quot;never&quot;
  },
  { type: &quot;separator&quot; },
  {
    type: &quot;buttonGroup&quot;,
    buttons: [
      { spriteCssClass: &quot;k-tool-icon k-justifyLeft&quot;, text: &quot;Left&quot;, togglable: true, group: &quot;text-align&quot; },
      { spriteCssClass: &quot;k-tool-icon k-justifyCenter&quot;, text: &quot;Center&quot;, togglable: true, group: &quot;text-align&quot; },
      { spriteCssClass: &quot;k-tool-icon k-justifyRight&quot;, text: &quot;Right&quot;, togglable: true, group: &quot;text-align&quot; }
    ]
  },
  {
    type: &quot;buttonGroup&quot;,
    buttons: [
      { spriteCssClass: &quot;k-tool-icon k-bold&quot;, text: &quot;Bold&quot;, togglable: true, showText: &quot;overflow&quot; },
      { spriteCssClass: &quot;k-tool-icon k-italic&quot;, text: &quot;Italic&quot;, togglable: true, showText: &quot;overflow&quot; },
      { spriteCssClass: &quot;k-tool-icon k-underline&quot;, text: &quot;Underline&quot;, togglable: true, showText: &quot;overflow&quot; }
    ]
  },
  {
    type: &quot;button&quot;,
    text: &quot;Action&quot;,
    overflow: &quot;always&quot;
  },
  {
    type: &quot;button&quot;,
    text: &quot;Another Action&quot;,
    overflow: &quot;always&quot;
  },
  {
    type: &quot;button&quot;,
    text: &quot;Something else here&quot;,
    overflow: &quot;always&quot;
  }
]
});

$(&quot;#kUI_dropdown&quot;).kendoDropDownList({
  optionLabel: &quot;Paragraph&quot;,
  dataTextField: &quot;text&quot;,
  dataValueField: &quot;value&quot;,
  dataSource: [
    { text: &quot;Heading 1&quot;, value: 1 },
    { text: &quot;Heading 2&quot;, value: 2 },
    { text: &quot;Heading 3&quot;, value: 3 },
    { text: &quot;Title&quot;, value: 4 },
    { text: &quot;Subtitle&quot;, value: 5 }
  ]
});</code></pre>
                </div>
            </div>

        </div>
    </div>
