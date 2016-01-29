<?php defined('safe_access') or die('Restricted access!'); ?>

    <div id="page_content">
        <div id="page_content_inner">

            <div class="md-card">
                <div class="md-card-content">
                    <h3 class="heading_a">Character Counter</h3>
                    <div class="uk-grid" data-uk-grid-margin>
                        <div class="uk-width-medium-1-3">
                            <label>Default</label>
                            <input type="text" class="input-count md-input" id="input_counter" maxlength="60" />
                        </div>
                        <div class="uk-width-medium-1-3">
                            <label>Error</label>
                            <input type="text" class="md-input md-input-danger input-count" maxlength="40" value="Something wrong" />
                        </div>
                        <div class="uk-width-medium-1-3">
                            <label>Success</label>
                            <input type="text" class="md-input md-input-success input-count" maxlength="40" value="All ok" />
                        </div>
                    </div>
                </div>
            </div>

            <div class="md-card">
                <div class="md-card-content">
                    <h3 class="heading_a">Sliders</h3>
                    <div class="uk-grid" data-uk-grid-margin>
                        <div class="uk-width-medium-1-3">
                            <input type="text" id="ionslider_1" name="ionslider_1" data-ion-slider data-min="0" data-max="100" data-from="50" />
                            <span class="uk-form-help-block">Basic</span>
                        </div>
                        <div class="uk-width-medium-1-3">
                            <input type="text" id="ionslider_2" name="ionslider_2" data-ion-slider data-min="0" data-max="1000" data-from="150" data-to="650" data-type="double" data-grid="true" data-prefix="$" />
                            <span class="uk-form-help-block">Double</span>
                        </div>
                        <div class="uk-width-medium-1-3">
                            <input type="text" id="ionslider_3" name="ionslider_3" data-ion-slider data-min="0" data-max="100" data-from="40" data-disable="true" />
                            <span class="uk-form-help-block">Disabled</span>
                        </div>
                    </div>
                    <div class="uk-grid" data-uk-grid-margin>
                        <div class="uk-width-medium-1-2">
                            <input type="text" id="ionslider_movement_limit" name="ionslider_movement_limit" />
                            <span class="uk-form-help-block">Movement limit</span>
                        </div>
                        <div class="uk-width-medium-1-2">
                            <input type="text" id="ionslider_date" name="ionslider_date" />
                            <span class="uk-form-help-block">Dates (using moment.js)</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="md-card">
                <div class="md-card-content">
                    <h3 class="heading_a">Advanced Selects</h3>
                    <div class="uk-grid" data-uk-grid-margin>
                        <div class="uk-width-large-1-2">
                            <select id="selec_adv_1" name="selec_adv_1" multiple>
                                <option value="2" selected>Venus</option>
                                <option value="3" selected>Earth</option>
                            </select>
                        </div>
                        <div class="uk-width-large-1-2">
                            <select id="selec_adv_2" name="selec_adv_2" multiple>
                                <option value="">Select email...</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="uk-grid" data-uk-grid-margin>
                <div class="uk-width-medium-1-2">
                    <div class="md-card">
                        <div class="md-card-content">
                            <h3 class="heading_a">Datepicker</h3>
                            <div class="uk-grid">
                                <div class="uk-width-large-1-2 uk-width-medium-1-1">
                                    <div class="uk-input-group">
                                        <span class="uk-input-group-addon"><i class="uk-input-group-icon uk-icon-calendar"></i></span>
                                        <label for="uk_dp_1">Select date</label>
                                        <input class="md-input" type="text" id="uk_dp_1" data-uk-datepicker="{format:'DD.MM.YYYY'}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-width-medium-1-2">
                    <div class="md-card">
                        <div class="md-card-content">
                            <h3 class="heading_a">Timepicker</h3>
                            <div class="uk-grid">
                                <div class="uk-width-large-1-2 uk-width-medium-1-1">
                                    <div class="uk-input-group">
                                        <span class="uk-input-group-addon"><i class="uk-input-group-icon uk-icon-clock-o"></i></span>
                                        <label for="uk_tp_1">Select time</label>
                                        <input class="md-input" type="text" id="uk_tp_1" data-uk-timepicker>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="uk-grid">
                <div class="uk-width-1-1">
                    <div class="md-card">
                        <div class="md-card-content">
                            <h3 class="heading_a">Date range</h3>
                            <div class="uk-grid" data-uk-grid-margin>
                                <div class="uk-width-large-1-2 uk-width-medium-1-1">
                                    <div class="uk-input-group">
                                        <span class="uk-input-group-addon"><i class="uk-input-group-icon uk-icon-calendar"></i></span>
                                        <label for="uk_dp_start">Start Date</label>
                                        <input class="md-input" type="text" id="uk_dp_start">
                                    </div>
                                </div>
                                <div class="uk-width-large-1-2 uk-width-medium-1-1">
                                    <div class="uk-input-group">
                                        <span class="uk-input-group-addon"><i class="uk-input-group-icon uk-icon-calendar"></i></span>
                                        <label for="uk_dp_end">End Date</label>
                                        <input class="md-input" type="text" id="uk_dp_end">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="uk-grid" data-uk-grid-match="{target:'.md-card'}" data-uk-grid-margin>
                <div class="uk-width-medium-1-2">
                    <div class="md-card">
                        <div class="md-card-content">
                            <h3 class="heading_a">Password</h3>
                            <input type="password" class="md-input" value="password" />
                            <a href="" class="uk-form-password-toggle" data-uk-form-password>show</a>
                        </div>
                    </div>
                </div>
                <div class="uk-width-medium-1-2">
                    <div class="md-card">
                        <div class="md-card-content">
                            <h3 class="heading_a uk-margin-bottom">Form file</h3>
                            <div class="uk-form-file md-btn md-btn-primary">
                                Select
                                <input id="form-file" type="file">
                            </div>
                            You can also use
                            <div class="uk-form-file uk-text-primary">text<input id="form-file" type="file"></div>.
                        </div>
                    </div>
                </div>
            </div>

            <div class="md-card">
                <div class="md-card-content">
                    <h3 class="heading_a">Progressbars</h3>
                    <div class="uk-grid" data-uk-grid-margin>
                        <div class="uk-width-medium-1-2">
                            <div class="uk-progress">
                                <div class="uk-progress-bar" style="width: 40%;">40%</div>
                            </div>
                            <div class="uk-progress uk-progress-small">
                                <div class="uk-progress-bar" style="width: 20%;"></div>
                            </div>
                            <div class="uk-progress uk-progress-mini">
                                <div class="uk-progress-bar" style="width: 70%;"></div>
                            </div>
                        </div>
                        <div class="uk-width-medium-1-2">
                            <div class="uk-progress uk-progress-success uk-progress-small">
                                <div class="uk-progress-bar" style="width: 20%;"></div>
                            </div>
                            <div class="uk-progress uk-progress-warning uk-progress-small">
                                <div class="uk-progress-bar" style="width: 40%;"></div>
                            </div>
                            <div class="uk-progress uk-progress-danger uk-progress-small">
                                <div class="uk-progress-bar" style="width: 60%;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="uk-grid" data-uk-grid-margin>
                        <div class="uk-width-medium-1-2">
                            <div class="uk-progress uk-progress-striped uk-active uk-progress-small">
                                <div class="uk-progress-bar" style="width: 60%;"></div>
                            </div>
                        </div>
                        <div class="uk-width-medium-1-2">
                            <div class="uk-progress uk-progress-success uk-progress-striped uk-active uk-progress-mini">
                                <div class="uk-progress-bar" style="width: 88%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="md-card">
                <div class="md-card-content">
                    <h3 class="heading_a">Masked inputs</h3>
                    <div class="uk-grid" data-uk-grid-margin>
                        <div class="uk-width-medium-1-4">
                            <label for="masked_date">Date</label>
                            <input class="md-input masked_input" id="masked_date" type="text" data-inputmask="'alias': 'mm/dd/yyyy'" data-inputmask-showmaskonhover="false" />
                        </div>
                        <div class="uk-width-medium-1-4">
                            <label for="masked_phone">Phone</label>
                            <input class="md-input masked_input" id="masked_phone" type="text" data-inputmask="'mask': '999 - 999 999 999'" data-inputmask-showmaskonhover="false" />
                        </div>
                        <div class="uk-width-medium-1-4">
                            <label for="masked_currency">Currency</label>
                            <input class="md-input masked_input" id="masked_currency" type="text" data-inputmask="'alias': 'numeric', 'groupSeparator': ',', 'autoGroup': true, 'digits': 2, 'digitsOptional': false, 'prefix': '$ ', 'placeholder': '0'" data-inputmask-showmaskonhover="false" />
                        </div>
                        <div class="uk-width-medium-1-4">
                            <label for="masked_email">Email</label>
                            <input class="md-input masked_input" id="masked_email" type="text" data-inputmask="'alias': 'email'" data-inputmask-showmaskonhover="false" />
                        </div>
                    </div>
                </div>
            </div>

            <div class="md-card">
                <div class="md-card-content">
                    <h3 class="heading_a uk-margin-bottom">Html Editor</h3>
                    <textarea data-uk-htmleditor="{ maxsplitsize:1220, codemirror : { mode: 'text/html' } }"><h1 class="heading_b">Heading</h1>

<p>Lorem ipsum dolor sit <strong>amet</strong>, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <a href="#" class="uk-text-upper">This is a link</a></p>

<ul class="md-list">
  <li>
    <div class="md-list-content">
      <span class="md-list-heading">Heading</span>
      <span class="uk-text-small uk-text-muted">Lorem ipsum dolor sit amet.</span>
    </div>
  </li>
  <li>
    <div class="md-list-content">
      <span class="md-list-heading">Heading</span>
      <span class="uk-text-small uk-text-muted">Lorem ipsum dolor sit amet.</span>
    </div>
  </li>
  <li>
    <div class="md-list-content">
      <span class="md-list-heading">Heading</span>
      <span class="uk-text-small uk-text-muted">Lorem ipsum dolor sit amet.</span>
    </div>
  </li>
</ul>

<div class="uk-alert" data-uk-alert>
  <a href="#" class="uk-alert-close uk-close"></a>
  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.
</div></textarea>
                </div>
            </div>

        </div>
    </div>
