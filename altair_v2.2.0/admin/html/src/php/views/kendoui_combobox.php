<?php defined('safe_access') or die('Restricted access!'); ?>

    <div id="page_content">
        <div id="page_content_inner">
            <div class="md-card">
                <div class="md-card-content">
                    <div class="uk-grid" data-uk-grid-margin>
                        <div class="uk-width-large-1-2">
                            <form class="uk-form-stacked">
                                <label for="kUI_combobox_input" class="uk-form-label">From an <code>&lt;input&gt;</code> HTML element</label>
                                <input id="kUI_combobox_input" placeholder="Select fabric..." class="uk-form-width-medium" />
                            </form>
                        </div>
                        <div class="uk-width-large-1-2">
<pre class="line-numbers"><code class="language-javascript">// create ComboBox from input HTML element
$('input').kendoComboBox({
  dataTextField: "text",
  dataValueField: "value",
  dataSource: [
    { text: "Cotton", value: "1" },
    { text: "Polyester", value: "2" },
    { text: "Cotton/Polyester", value: "3" },
    { text: "Rib Knit", value: "4" }
  ],
  filter: "contains",
  suggest: true,
  index: 3
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
                                <label for="kUI_combobox_select" class="uk-form-label">From an <code>&lt;select&gt;</code> HTML element</label>
                                <select id="kUI_combobox_select" placeholder="Select size..." class="uk-form-width-medium">
                                    <option>X-Small</option>
                                    <option>Small</option>
                                    <option>Medium</option>
                                    <option>Large</option>
                                    <option>X-Large</option>
                                    <option>2X-Large</option>
                                </select>
                            </form>
                        </div>
                        <div class="uk-width-large-1-2">
<pre class="line-numbers"><code class="language-javascript">// create ComboBox from select HTML element
$('select').kendoComboBox();</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="md-card">
                <div class="md-card-content">
                    <div class="uk-grid" data-uk-grid-margin>
                        <div class="uk-width-large-1-2">
                            <form class="uk-form-stacked">
                                <label for="kUI_combobox_select" class="uk-form-label">Cascading Combobox</label>
                                <div class="uk-form-row">
                                    <input id="kUI_combobox_cascade_a" placeholder="Combobox A" class="uk-form-width-medium" />
                                </div>
                                <div class="uk-form-row">
                                    <input id="kUI_combobox_cascade_b" placeholder="Combobox B" class="uk-form-width-medium" />
                                </div>
                                <div class="uk-form-row">
                                    <input id="kUI_combobox_cascade_c" placeholder="Combobox C" class="uk-form-width-medium" />
                                </div>
                            </form>
                        </div>
                        <div class="uk-width-large-1-2">
<pre class="line-numbers"><code class="language-javascript">// Cascading combobox
var $kUI_combobox_cascade_a = $('#kUI_combobox_cascade_a');
var $kUI_combobox_cascade_b = $('#kUI_combobox_cascade_b');
var $kUI_combobox_cascade_c = $('#kUI_combobox_cascade_c');

if($kUI_combobox_cascade_a.length && $kUI_combobox_cascade_b.length && $kUI_combobox_cascade_c.length) {
  $kUI_combobox_cascade_a.kendoComboBox({
    dataTextField: "name",
    dataValueField: "id",
    dataSource: [
      {name: "Parent1", id: 1},
      {name: "Parent2", id: 2}
    ]
  });
  $kUI_combobox_cascade_b.kendoComboBox({
    cascadeFrom: "kUI_combobox_cascade_a",
    cascadeFromField: "parentId",
    dataTextField: "name",
    dataValueField: "id",
    dataSource: [
      {name: "Child1_1", id: 1, parentId: 1},
      {name: "Child1_2", id: 1, parentId: 1},
      {name: "Child2_1", id: 2, parentId: 2},
      {name: "Child2_2", id: 2, parentId: 2}
    ]
  });
  $kUI_combobox_cascade_c.kendoComboBox({
    cascadeFrom: "kUI_combobox_cascade_b",
    cascadeFromField: "parentId",
    dataTextField: "name",
    dataValueField: "id",
    dataSource: [
      {name: "Child1_1_1", id: 1, parentId: 1},
      {name: "Child1_1_2", id: 3, parentId: 1},
      {name: "Child1_2_1", id: 3, parentId: 2},
      {name: "Child1_2_2", id: 4, parentId: 2},
      {name: "Child2_1_1", id: 5, parentId: 3},
      {name: "Child2_1_2", id: 6, parentId: 3},
      {name: "Child2_2_1", id: 7, parentId: 4},
      {name: "Child2_2_2", id: 8, parentId: 4}
    ]
  });
}</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
