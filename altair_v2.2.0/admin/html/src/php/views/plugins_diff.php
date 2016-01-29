<?php defined('safe_access') or die('Restricted access!'); ?>

    <div id="top_bar">
        <div class="md-top-bar">
            <div class="uk-clearfix">
                <div class="md-top-bar-actions-left">
                    <div class="md-top-bar-checkbox">
                        <span class="icheck-inline">
                            <input type="radio" name="diff_type" class="diff_radio" id="diff_chars" data-md-icheck checked value="diffChars" />
                            <label for="diff_chars" class="inline-label">Chars</label>
                        </span>
                        <span class="icheck-inline">
                            <input type="radio" name="diff_type" class="diff_radio" id="diff_words" data-md-icheck value="diffWords" />
                            <label for="diff_words" class="inline-label">Words</label>
                        </span>
                        <span class="icheck-inline">
                            <input type="radio" name="diff_type" class="diff_radio" id="diff_lines" data-md-icheck value="diffLines" />
                            <label for="diff_lines" class="inline-label">Lines</label>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="page_content">
        <div id="page_content_inner">

            <div class="uk-grid" data-uk-grid-margin data-uk-grid-match="{target: '.md-card'}">
                <div class="uk-width-medium-1-2">
                    <div class="md-card">
                        <div class="md-card-content">
                            <p class="uk-text-upper uk-margin-small-bottom">Panel A Content</p>
<textarea name="diff_panel_a" id="diff_panel_a" class="md-input" cols="30" rows="4">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
Accusamus amet dolores eum eveniet hic ipsa necessitatibus,
nemo nulla odit perspiciatis quam quas quibusdam quos
recusandae rerum saepe soluta ut voluptatibus.</textarea>
                        </div>
                    </div>
                </div>
                <div class="uk-width-medium-1-2">
                    <div class="md-card">
                        <div class="md-card-content">
                            <p class="uk-text-upper uk-margin-small-bottom">Panel B Content</p>
<textarea name="diff_panel_b" id="diff_panel_b" class="md-input" cols="30" rows="4">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
Ab blanditiis consectetur cum debitis dignissimos dolorem
eaque earum id labore magnam pariatur porro praesentium
quam quis rem similique ullam, vitae voluptatibus.</textarea>
                        </div>
                    </div>
                </div>
            </div>

            <div class="uk-grid">
                <div class="uk-width-1-1">
                    <div class="md-card">
                        <div class="md-card-content">
                            <p class="uk-text-upper uk-margin-small-bottom">Result</p>
<pre><code id="diff_result" class="large_code"></code></pre>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>