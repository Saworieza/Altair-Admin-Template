<?php defined('safe_access') or die('Restricted access!'); ?>

    <div id="page_content">
        <div id="page_content_inner">

            <h3 class="heading_b uk-margin-bottom">Google Maps</h3>

            <div class="uk-grid" data-uk-grid-margin>
                <div class="uk-width-large-1-2">
                    <div class="md-card">
                        <div class="md-card-toolbar">
                            <div class="md-card-toolbar-actions">
                                <i class="md-icon material-icons" data-uk-modal="{target:'#gmap_route_modal'}">&#xE52E;</i>
                            </div>
                            <h3 class="md-card-toolbar-heading-text">
                                Milan, Italy - Munich, Germany <span class="route_km"></span>
                            </h3>
                        </div>
                        <div class="md-card-content">
                            <div id="gmap_route" class="gmap" style="width:100%;height:400px;"></div>
                        </div>
                    </div>
                    <div class="uk-modal" id="gmap_route_modal">
                        <div class="uk-modal-dialog">
                            <button type="button" class="uk-modal-close uk-close"></button>
                            <div class="uk-modal-header">
                                <h3 class="uk-modal-title">Milan, Italy - Munich, Germany<span class="route_km"></span></h3>
                            </div>
                            <div class="uk-overflow-container">
                                <div id="route_directions"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-width-large-1-2">
                    <div class="md-card">
                        <div class="md-card-toolbar">
                            <h3 class="md-card-toolbar-heading-text">
                                Markers
                            </h3>
                        </div>
                        <div class="md-card-content">
                            <div class="uk-grid" data-uk-grid-margin>
                                <div class="uk-width-1-1">
                                    <div id="gmap_markers" class="gmap" style="width:100%;height:400px;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="uk-grid" data-uk-grid-margin>
                <div class="uk-width-medium-3-5">
                    <div class="md-card">
                        <div class="md-card-toolbar">
                            <h3 class="md-card-toolbar-heading-text">
                                Styled map (neutral blue)
                            </h3>
                        </div>
                        <div class="md-card-content">
                            <div id="gmap_style_a" class="gmap" style="width:100%;height:300px;"></div>
                        </div>
                    </div>
                </div>
                <div class="uk-width-medium-2-5">
                    <div class="md-card">
                        <div class="md-card-toolbar">
                            <h3 class="md-card-toolbar-heading-text">
                                Styled map (subtle greyscale)
                            </h3>
                        </div>
                        <div class="md-card-content">
                            <div id="gmap_style_b" class="gmap" style="width:100%;height:300px;"></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
