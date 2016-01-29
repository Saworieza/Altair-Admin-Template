<?php defined('safe_access') or die('Restricted access!'); ?>

    <div id="page_content">
        <div id="page_content_inner">

            <div class="md-card">
                <div class="md-card-content">
                    <div class="uk-grid" data-uk-grid-margin>
                        <div class="uk-width-large-1-2">
                            <ul id="kUI_panelbar">
                                <li class="k-state-active">
                                    Today
                                    <ul>
                                        <li>Jane King</li>
                                        <li>Bob Fuller</li>
                                        <li>Lynda Kallahan</li>
                                        <li>Matt Sutnar</li>
                                    </ul>
                                </li>
                                <li>
                                    Yesterday
                                    <ul>
                                        <li>Stewart</li>
                                        <li>Jane King</li>
                                        <li>Steven</li>
                                        <li>Ken Stone</li>
                                    </ul>
                                </li>
                                <li>
                                    <?php $moment = new Moment\Moment(); echo $moment->subtractDays(1)->format('l, dS F Y'); ?>

                                    <ul>
                                        <li>Jane King</li>
                                        <li>Lynda Kallahan</li>
                                        <li>Todd</li>
                                        <li>Bob Fuller</li>
                                    </ul>
                                </li>
                                <li>
                                    <?php $moment = new Moment\Moment(); echo $moment->subtractDays(2)->format('l, dS F Y'); ?>

                                    <ul>
                                        <li>Emily Davolio</li>
                                        <li>Matt Sutnar</li>
                                        <li>Bob Fuller</li>
                                        <li>Jenn Heinlein</li>
                                    </ul>
                                </li>
                                <li>
                                    <?php $moment = new Moment\Moment(); echo $moment->subtractDays(3)->format('l, dS F Y'); ?>

                                    <ul>
                                        <li>Matt Sutnar</li>
                                        <li>Joshua</li>
                                        <li>Michael</li>
                                        <li>Jenn Heinlein</li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="uk-width-large-1-2">
<pre class="line-numbers"><code class="language-javascript">//panelBar
$(list).kendoPanelBar();</code></pre>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
