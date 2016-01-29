<?php defined('safe_access') or die('Restricted access!'); ?>

    <div id="page_content">
        <div id="page_content_inner">

            <div class="md-card">
                <div class="md-card-content">
                    <h3 class="heading_a">Input fields</h3>
                    <div class="uk-grid" data-uk-grid-margin>
                        <div class="uk-width-medium-1-2">
                            <div class="uk-form-row">
                                <div class="uk-grid">
                                    <div class="uk-width-medium-1-2">
                                        <label>Label</label>
                                        <input type="text" class="md-input" />
                                    </div>
                                    <div class="uk-width-medium-1-2">
                                        <label>Label fixed</label>
                                        <input type="text" class="md-input label-fixed" />
                                    </div>
                                </div>
                            </div>
                            <div class="uk-form-row">
                                <label>Passsword</label>
                                <input type="password" class="md-input"  />
                            </div>
                            <div class="uk-form-row">
                                <label>Disabled</label>
                                <input type="text" class="md-input" disabled />
                            </div>
                        </div>
                        <div class="uk-width-medium-1-2">
                            <div class="uk-form-row">
                                <label>Prefilled</label>
                                <input type="text" class="md-input" value="Lorem ipsum dolor sit" />
                            </div>
                            <div class="uk-form-row">
                                <label>Error</label>
                                <input type="text" class="md-input md-input-danger" value="Something wrong" />
                            </div>
                            <div class="uk-form-row">
                                <label>Success</label>
                                <input type="text" class="md-input md-input-success" value="All ok" />
                            </div>
                        </div>
                    </div>
                    <div class="uk-grid" data-uk-grid-margin>
                        <div class="uk-width-large-1-4 uk-width-medium-1-2">
                            <div class="uk-input-group">
                                <span class="uk-input-group-addon"><input type="checkbox" data-md-icheck/></span>
                                <label>Checkbox addon</label>
                                <input type="text" class="md-input" />
                            </div>
                        </div>
                        <div class="uk-width-large-1-4 uk-width-medium-1-2">
                            <div class="uk-input-group">
                                <label>Button addon</label>
                                <input type="text" class="md-input" />
                                <span class="uk-input-group-addon"><a class="md-btn" href="#">Save</a></span>
                            </div>
                        </div>
                        <div class="uk-width-large-1-4 uk-width-medium-1-2">
                            <div class="uk-input-group">
                                <label>Icon addon</label>
                                <input type="text" class="md-input" />
                                <span class="uk-input-group-addon">
                                    <a href="#"><i class="material-icons">&#xE163;</i></a>
                                </span>
                            </div>
                        </div>
                        <div class="uk-width-large-1-4 uk-width-medium-1-2">
                            <div class="uk-input-group">
                                <span class="uk-input-group-addon">$</span>
                                <label>Text addon</label>
                                <input type="text" class="md-input" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="md-card">
                <div class="md-card-content">
                    <h3 class="heading_a">Textareas (auto resize)</h3>
                    <div class="uk-grid">
                        <div class="uk-width-1-1">
                            <div class="uk-form-row">
                                <label>Textarea</label>
                                <textarea cols="30" rows="4" class="md-input"><?php echo $faker->sentence(60);?></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="md-card">
                <div class="md-card-content">
                    <h3 class="heading_a">Select</h3>
                    <div class="uk-grid" data-uk-grid-margin>
                        <div class="uk-width-medium-1-3 uk-width-large-1-2">
                            <select id="select_demo_1" data-md-selectize>
                                <option value="">Select...</option>
                                <optgroup label="Group 1">
                                    <option value="a">Item A</option>
                                    <option value="b">Item B</option>
                                    <option value="c">Item C</option>
                                </optgroup>
                                <optgroup label="Group 2">
                                    <option value="a">Item A</option>
                                    <option value="b">Item B</option>
                                    <option value="c">Item C</option>
                                    <option value="d">Item D</option>
                                </optgroup>
                            </select>
                            <span class="uk-form-help-block">Default</span>
                        </div>
                        <div class="uk-width-medium-1-3 uk-width-large-1-2">
                            <select id="select_demo_1" data-md-selectize disabled>
                                <option value="">Select...</option>
                                <option value="a">Item A</option>
                                <option value="b">Item B</option>
                                <option value="c">Item C</option>
                            </select>
                            <span class="uk-form-help-block">Disabled</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="md-card">
                <div class="md-card-content">
                    <h3 class="heading_a">Switches</h3>
                    <div class="uk-grid" data-uk-grid-margin>
                        <div class="uk-width-medium-1-3">
                            <input type="checkbox" data-switchery checked id="switch_demo_1" />
                            <label for="switch_demo_1" class="inline-label">Service offline</label>
                            <span class="uk-form-help-block">Checked</span>
                        </div>
                        <div class="uk-width-medium-1-3">
                            <input type="checkbox" data-switchery id="switch_demo_2" />
                            <label for="switch_demo_2" class="inline-label">Show Email</label>
                            <span class="uk-form-help-block">Unchecked</span>
                        </div>
                        <div class="uk-width-medium-1-3">
                            <input type="checkbox" data-switchery disabled />
                            <span class="uk-form-help-block">Disabled</span>
                        </div>
                    </div>
                    <div class="uk-grid" data-uk-grid-margin>
                        <div class="uk-width-medium-1-3">
                            <input type="checkbox" data-switchery data-switchery-size="large" checked id="switch_demo_large" />
                            <label for="switch_demo_large" class="inline-label">Label</label>
                            <span class="uk-form-help-block">Large</span>
                        </div>
                        <div class="uk-width-medium-1-3">
                            <input type="checkbox" data-switchery data-switchery-size="small" id="switch_demo_small" />
                            <label for="switch_demo_small" class="inline-label">Label</label>
                            <span class="uk-form-help-block">Small</span>
                        </div>
                    </div>
                    <div class="uk-grid" data-uk-grid-margin>
                        <div class="uk-width-medium-1-4">
                            <input type="checkbox" data-switchery data-switchery-color="#1e88e5" checked id="switch_demo_primary" />
                            <label for="switch_demo_primary" class="inline-label">Label</label>
                        </div>
                        <div class="uk-width-medium-1-4">
                            <input type="checkbox" data-switchery data-switchery-color="#d32f2f" checked id="switch_demo_danger" />
                            <label for="switch_demo_danger" class="inline-label">Label</label>
                        </div>
                        <div class="uk-width-medium-1-4">
                            <input type="checkbox" data-switchery data-switchery-color="#ffb300" checked id="switch_demo_warning" />
                            <label for="switch_demo_warning" class="inline-label">Label</label>
                        </div>
                        <div class="uk-width-medium-1-4">
                            <input type="checkbox" data-switchery data-switchery-color="#7cb342" checked id="switch_demo_success" />
                            <label for="switch_demo_success" class="inline-label">Label</label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="uk-grid" data-uk-grid-margin>
                <div class="uk-width-medium-1-2">
                    <div class="md-card">
                        <div class="md-card-content">
                            <h3 class="heading_a">Radio Buttons</h3>
                            <div class="uk-grid" data-uk-grid-margin>
                                <div class="uk-width-medium-2-5">
                                    <p>
                                        <input type="radio" name="radio_demo" id="radio_demo_1" data-md-icheck />
                                        <label for="radio_demo_1" class="inline-label">Mercury</label>
                                    </p>
                                    <p>
                                        <input type="radio" name="radio_demo" id="radio_demo_2" data-md-icheck />
                                        <label for="radio_demo_2" class="inline-label">Venus</label>
                                    </p>
                                    <p>
                                        <input type="radio" name="radio_demo" id="radio_demo_3" data-md-icheck disabled />
                                        <label for="radio_demo_3" class="inline-label">Earth</label>
                                    </p>
                                    <p>
                                        <input type="radio" name="radio_demo" id="radio_demo_4" data-md-icheck checked />
                                        <label for="radio_demo_4" class="inline-label">Mars</label>
                                    </p>
                                </div>
                                <div class="uk-width-medium-3-5">
                                    <span class="icheck-inline">
                                        <input type="radio" name="radio_demo_inline" id="radio_demo_inline_1" data-md-icheck />
                                        <label for="radio_demo_inline_1" class="inline-label">Mercury</label>
                                    </span>
                                    <span class="icheck-inline">
                                        <input type="radio" name="radio_demo_inline" id="radio_demo_inline_2" data-md-icheck />
                                        <label for="radio_demo_inline_2" class="inline-label">Venus</label>
                                    </span>
                                    <span class="icheck-inline">
                                        <input type="radio" name="radio_demo_inline" id="radio_demo_inline_3" data-md-icheck />
                                        <label for="radio_demo_inline_3" class="inline-label">Earth</label>
                                    </span>
                                    <span class="uk-form-help-block">Inline</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-width-medium-1-2">
                    <div class="md-card">
                        <div class="md-card-content">
                            <h3 class="heading_a">Checkboxes</h3>
                            <div class="uk-grid" data-uk-grid-margin>
                                <div class="uk-width-medium-2-5">
                                    <p>
                                        <input type="checkbox" name="checkbox_demo" id="checkbox_demo_1" data-md-icheck />
                                        <label for="checkbox_demo_1" class="inline-label">Mercury</label>
                                    </p>
                                    <p>
                                        <input type="checkbox" name="checkbox_demo" id="checkbox_demo_2" data-md-icheck />
                                        <label for="checkbox_demo_2" class="inline-label">Venus</label>
                                    </p>
                                    <p>
                                        <input type="checkbox" name="checkbox_demo" id="checkbox_demo_3" data-md-icheck disabled />
                                        <label for="checkbox_demo_3" class="inline-label">Earth</label>
                                    </p>
                                    <p>
                                        <input type="checkbox" name="checkbox_demo" id="checkbox_demo_4" data-md-icheck checked />
                                        <label for="checkbox_demo_4" class="inline-label">Mars</label>
                                    </p>
                                </div>
                                <div class="uk-width-medium-3-5">
                                    <span class="icheck-inline">
                                        <input type="checkbox" name="checkbox_demo_inline" id="checkbox_demo_inline_1" data-md-icheck />
                                        <label for="checkbox_demo_inline_1" class="inline-label">Mercury</label>
                                    </span>
                                    <span class="icheck-inline">
                                        <input type="checkbox" name="checkbox_demo_inline" id="checkbox_demo_inline_2" data-md-icheck />
                                        <label for="checkbox_demo_inline_2" class="inline-label">Venus</label>
                                    </span>
                                    <span class="icheck-inline">
                                        <input type="checkbox" name="checkbox_demo_inline" id="checkbox_demo_inline_3" data-md-icheck />
                                        <label for="checkbox_demo_inline_3" class="inline-label">Earth</label>
                                    </span>
                                    <span class="uk-form-help-block">Inline</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
