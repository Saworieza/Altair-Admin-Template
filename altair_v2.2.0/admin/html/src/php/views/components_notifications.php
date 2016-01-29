<?php defined('safe_access') or die('Restricted access!'); ?>

    <div id="page_content">
        <div id="page_content_inner">

            <h3 class="heading_b uk-margin-bottom">Notify</h3>
            <div class="md-card">
                <div class="md-card-content">
                    <div class="uk-grid" data-uk-grid-margin>
                        <div class="uk-width-medium-1-4">
                            <button class="md-btn" data-message="<a href='#' class='notify-action'>Undo</a> Message deleted" data-timeout="0">Click me</button>
                        </div>
                        <div class="uk-width-medium-1-4">
                            <button class="md-btn" data-message="Callback onClose" data-callback="notify_callback">Callback</button>
                        </div>
                    </div>
                    <h4 class="heading_a">Positions</h4>
                    <div class="uk-grid" data-uk-grid-margin>
                        <div class="uk-width-medium-1-4">
                            <button class="md-btn" data-message="Top Center">Top Center</button>
                        </div>
                        <div class="uk-width-medium-1-4">
                            <button class="md-btn" data-message="Top Left" data-pos="top-left">Top Left</button>
                        </div>
                        <div class="uk-width-medium-1-4">
                            <button class="md-btn" data-message="Top Right" data-pos="top-right">Top Right</button>
                        </div>
                    </div>
                    <div class="uk-grid" data-uk-grid-margin>
                        <div class="uk-width-medium-1-4">
                            <button class="md-btn" data-message="Bottom Center" data-pos="bottom-center">Bottom Center</button>
                        </div>
                        <div class="uk-width-medium-1-4">
                            <button class="md-btn" data-message="Bottom Left" data-pos="bottom-left">Bottom Left</button>
                        </div>
                        <div class="uk-width-medium-1-4">
                            <button class="md-btn" data-message="Bottom Right" data-pos="bottom-right">Bottom Right</button>
                        </div>
                    </div>
                    <h4 class="heading_a">Status</h4>
                    <div class="uk-grid" data-uk-grid-margin>
                        <div class="uk-width-medium-1-4">
                            <button class="md-btn" data-message="<a href='#' class='notify-action'>Remove</a> Info" data-status="info" data-pos="bottom-center">Info</button>
                        </div>
                        <div class="uk-width-medium-1-4">
                            <button class="md-btn" data-message="<a href='#' class='notify-action'>Clear</a> Success Message" data-status="success" data-pos="bottom-center">Success</button>
                        </div>
                        <div class="uk-width-medium-1-4">
                            <button class="md-btn" data-message="<a href='#' class='notify-action'>Refresh</a> Warning Message" data-status="warning" data-pos="bottom-center">Warning</button>
                        </div>
                        <div class="uk-width-medium-1-4">
                            <button class="md-btn" data-message="<a href='#' class='notify-action'>Undo</a> Danger message" data-status="danger" data-pos="bottom-center">Danger</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="md-fab-wrapper">
                <a class="md-fab md-fab-danger" href="#">
                    <i class="material-icons">&#xE150;</i>
                </a>
            </div>

        </div>
    </div>
