<?php defined('safe_access') or die('Restricted access!'); ?>

    <div id="page_content">
        <div id="page_content_inner">

            <div class="uk-width-medium-8-10 uk-container-center reset-print">
                <div class="uk-grid uk-grid-collapse" data-uk-grid-margin>
                    <div class="uk-width-large-7-10">
                        <div class="md-card md-card-single main-print" id="invoice">
                            <div id="invoice_preview"></div>
                            <div id="invoice_form"></div>
                        </div>
                    </div>
                    <div class="uk-width-large-3-10 hidden-print uk-visible-large">
                        <div class="md-list-outside-wrapper">
                            <ul class="md-list md-list-outside invoices_list" id="invoices_list">
    <?php
    $overdue_array = [4,12,15];
    for($i=1;$i<=22;$i++) {
        $moment = new Moment\Moment();
        $date = $moment->format('d');

        if($i<8) {
            $moment = new Moment\Moment();
            $olderMoment = $moment->subtractDays($i-1)->format('j M');
        } else {
            $moment = new Moment\Moment();
            $olderMoment = $moment->subtractMonths(rand(1,4))->subtractDays(rand(1,30))->format('j M');
        }

        $note_title = $faker->sentence(4);
        ?>
        <?php if($i == 1 ) { ?>
                    <li class="heading_list"><?php $moment = new Moment\Moment(); echo $date = $moment->format('F Y'); ?></li>
        <?php } else if($i == 8 ) { ?>

                                <li class="heading_list">Oldest</li>
        <?php } else { ?>
            <li>
                                    <a href="#" class="md-list-content" data-invoice-id="1">
        <?php if(in_array($i, $overdue_array)) { ?>
                                <span class="uk-badge uk-badge-danger">Overdue</span>
        <?php }; ?>
                                <span class="md-list-heading uk-text-truncate">Invoice <?php echo rand(1,200);?>/2015 <span class="uk-text-small uk-text-muted">(<?php echo $olderMoment; ?>)</span></span>
                                        <span class="uk-text-small uk-text-muted"><?php echo $faker->company; ?></span>
                                    </a>
                                </li>
        <?php }; ?>
    <?php }; ?>
                </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="md-fab-wrapper">
        <a class="md-fab md-fab-accent" href="#" id="invoice_add">
            <i class="material-icons">&#xE145;</i>
        </a>
    </div>

    <div id="sidebar_secondary">
        <div class="sidebar_secondary_wrapper uk-margin-remove"></div>
    </div>

    <script id="invoice_template" type="text/x-handlebars-template">
        <div class="md-card-toolbar">
            <div class="md-card-toolbar-actions hidden-print">
                <i class="md-icon material-icons" id="invoice_print">&#xE8ad;</i>
                <div class="md-card-dropdown" data-uk-dropdown="{pos:'bottom-right'}">
                    <i class="md-icon material-icons">&#xE5D4;</i>
                    <div class="uk-dropdown uk-dropdown-small">
                        <ul class="uk-nav">
                            <li><a href="#">Archive</a></li>
                            <li><a href="#" class="uk-text-danger">Remove</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <h3 class="md-card-toolbar-heading-text large" id="invoice_name">
                Invoice {{invoice_id.invoice_number}}
            </h3>
        </div>
        <div class="md-card-content">
            <div class="uk-margin-medium-bottom">
                <span class="uk-text-muted uk-text-small uk-text-italic">Date:</span> {{invoice_id.invoice_date}}
                <br/>
                <span class="uk-text-muted uk-text-small uk-text-italic">Due Date:</span> {{invoice_id.invoice_due_date}}
            </div>
            <div class="uk-grid" data-uk-grid-margin>
                <div class="uk-width-small-3-5">
                    <div class="uk-margin-bottom">
                        <span class="uk-text-muted uk-text-small uk-text-italic">From:</span>
                        <address>
                            <p><strong>{{invoice_id.invoice_from_company}}</strong></p>
                            <p>{{invoice_id.invoice_from_address_1}}</p>
                            <p>{{invoice_id.invoice_from_address_2}}</p>
                        </address>
                    </div>
                    <div class="uk-margin-medium-bottom">
                        <span class="uk-text-muted uk-text-small uk-text-italic">To:</span>
                        <address>
                            <p><strong>{{invoice_id.invoice_to_company}}</strong></p>
                            <p>{{invoice_id.invoice_to_address_1}}</p>
                            <p>{{invoice_id.invoice_to_address_2}}</p>
                        </address>
                    </div>
                </div>
                <div class="uk-width-small-2-5">
                    <span class="uk-text-muted uk-text-small uk-text-italic">Total:</span>
                    <p class="heading_b uk-text-success">{{invoice_id.invoice_total_value}}</p>
                    <p class="uk-text-small uk-text-muted uk-margin-top-remove">Incl. VAT - {{invoice_id.invoice_vat_value}}</p>
                </div>
            </div>
            <div class="uk-grid uk-margin-large-bottom">
                <div class="uk-width-1-1">
                    <table class="uk-table">
                        <thead>
                        <tr class="uk-text-upper">
                            <th>Description</th>
                            <th>Rate</th>
                            <th class="uk-text-center">Hours</th>
                            <th class="uk-text-center">Vat</th>
                            <th class="uk-text-center">Total</th>
                        </tr>
                        </thead>
                        <tbody>
                        {{#each invoice_id.invoice_services}}
                            <tr class="uk-table-middle">
                                <td>
                                    <span class="uk-text-large">{{ service_name }}</span><br/>
                                    <span class="uk-text-muted uk-text-small">{{ service_description }}</span>
                                </td>
                                <td>
                                    {{ service_rate }}
                                </td>
                                <td class="uk-text-center">
                                    {{ service_hours }}
                                </td>
                                <td class="uk-text-center">
                                    {{ service_vat }}
                                </td>
                                <td class="uk-text-center">
                                    {{ service_total }}
                                </td>
                            </tr>
                        {{/each}}
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="uk-grid">
                <div class="uk-width-1-1">
                    <span class="uk-text-muted uk-text-small uk-text-italic">Payment to:</span>
                    <p class="uk-margin-top-remove">
                        {{{ invoice_id.invoice_payment_info }}}
                    </p>
                    <p class="uk-text-small">Please pay within {{ invoice_id.invoice_payment_due }} days</p>
                </div>
            </div>
        </div>
    </script>

    <script id="invoice_form_template" type="text/x-handlebars-template">
        <form action="" class="uk-form-stacked">
            <div class="md-card-toolbar">
                <div class="md-card-toolbar-actions">
                    <i class="md-icon material-icons">&#xE161;</i>
                </div>
                <input name="invoice_number" id="invoice_number" class="md-card-toolbar-input" type="text" value="" placeholder="Invoice number" />
            </div>
            <div class="md-card-content large-padding">
                <div class="uk-grid" data-uk-grid-margin>
                    <div class="uk-width-medium-1-2">
                        <label class="uk-form-label" for="hobbies">Issue date:</label>
                        <div class="uk-input-group">
                            <span class="uk-input-group-addon"><i class="uk-input-group-icon uk-icon-calendar"></i></span>
                            <label for="invoice_dp">Select date</label>
                            <input class="md-input" type="text" id="invoice_dp" value="" data-uk-datepicker="{format:'DD.MM.YYYY'}">
                        </div>
                    </div>
                    <div class="uk-width-medium-1-2">
                        <label class="uk-form-label uk-margin-bottom" for="hobbies">Due date (days):</label>
                        <span class="icheck-inline">
                            <input type="radio" name="invoice_due_date" id="invoice_due_date_7" data-md-icheck />
                            <label for="invoice_due_date_7" class="inline-label">7</label>
                        </span>
                        <span class="icheck-inline">
                            <input type="radio" name="invoice_due_date" id="invoice_due_date_14" data-md-icheck />
                            <label for="invoice_due_date_14" class="inline-label">14</label>
                        </span>
                        <span class="icheck-inline">
                            <input type="radio" name="invoice_due_date" id="invoice_due_date_21" data-md-icheck />
                            <label for="invoice_due_date_21" class="inline-label">21</label>
                        </span>
                    </div>
                </div>
                <div class="uk-grid uk-grid-divider grid-block" data-uk-grid-margin>
                    <div class="uk-width-medium-1-2">
                        <label class="uk-form-label uk-margin-bottom" for="hobbies">From:</label>
                        <div class="uk-form-row">
                            <label for="invoice_from_company">Company Name</label>
                            <input type="text" class="md-input" id="invoice_from_company" name="invoice_from_company"/>
                        </div>
                        <div class="uk-form-row">
                            <label for="invoice_from_address_1">Address 1</label>
                            <input type="text" class="md-input" id="invoice_from_address_1" name="invoice_from_address_1" />
                        </div>
                        <div class="uk-form-row">
                            <label for="invoice_from_address_2">Address 2</label>
                            <input type="text" class="md-input" id="invoice_from_address_2" name="invoice_from_address_2" />
                        </div>
                    </div>
                    <div class="uk-width-medium-1-2">
                        <label class="uk-form-label uk-margin-bottom" for="hobbies">To:</label>
                        <div class="uk-form-row">
                            <label for="invoice_to_company">Company Name</label>
                            <input type="text" class="md-input" id="invoice_to_company" name="invoice_to_company"/>
                        </div>
                        <div class="uk-form-row">
                            <label for="invoice_to_address_1">Address 1</label>
                            <input type="text" class="md-input" id="invoice_to_address_1" name="invoice_to_address_1" />
                        </div>
                        <div class="uk-form-row">
                            <label for="invoice_to_address_2">Address 2</label>
                            <input type="text" class="md-input" id="invoice_to_address_2" name="invoice_to_address_2" />
                        </div>
                    </div>
                </div>
                <div class="uk-grid" data-uk-grid-margin>
                    <div class="uk-width-1-1">
                        <div id="form_invoice_services"></div>
                        <div class="uk-text-center uk-margin-medium-top uk-margin-bottom">
                            <a href="#" class="md-btn md-btn-flat md-btn-flat-primary" id="invoice_form_append_service_btn">Add new</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </script>
    <script id="invoice_form_template_services" type="text/x-handlebars-template">
        {{#ifCond invoice_service_id '!==' 1}}
        <hr class="md-hr"/>
        {{/ifCond}}
        <div class="uk-grid" data-uk-grid-margin data-service-number="{{invoice_service_id}}">
            <div class="uk-width-medium-1-10 uk-text-center">
                <p class="uk-text-large">{{invoice_service_id}}.</p>
            </div>
            <div class="uk-width-medium-9-10">
                <div class="uk-grid uk-grid-small" data-uk-grid-margin>
                    <div class="uk-width-medium-5-10">
                        <label for="inv_service_{{invoice_service_id}}">Service Name</label>
                        <input type="text" class="md-input" id="inv_service_{{invoice_service_id}}" name="inv_service_id_{{invoice_service_id}}" />
                    </div>
                    <div class="uk-width-medium-1-10">
                        <label for="inv_service_{{invoice_service_id}}_rate">Rate</label>
                        <input type="text" class="md-input" id="inv_service_{{invoice_service_id}}_rate" name="inv_service_{{invoice_service_id}}_rate" />
                    </div>
                    <div class="uk-width-medium-1-10">
                        <label for="inv_service_{{invoice_service_id}}_hours">Hours</label>
                        <input type="text" class="md-input" id="inv_service_{{invoice_service_id}}_hours" name="inv_service_{{invoice_service_id}}_hours" />
                    </div>
                    <div class="uk-width-medium-1-10">
                        <label for="inv_service_{{invoice_service_id}}_vat">VAT</label>
                        <input type="text" class="md-input" id="inv_service_{{invoice_service_id}}_vat" name="inv_service_{{invoice_service_id}}_vat" />
                    </div>
                    <div class="uk-width-medium-2-10">
                        <label for="inv_service_{{invoice_service_id}}_vat">Total</label>
                        <input type="text" class="md-input" id="inv_service_{{invoice_service_id}}_vat" name="inv_service_{{invoice_service_id}}_vat" readonly/>
                    </div>
                </div>
                <div class="uk-grid" data-uk-grid-margin>
                    <div class="uk-width-medium-1-1">
                        <label for="inv_service_{{invoice_service_id}}_desc">Description</label>
                        <textarea class="md-input" id="inv_service_{{invoice_service_id}}_desc" name="invoice_service_id_{{invoice_service_id}}_desc" cols="30" rows="2"></textarea>
                    </div>
                </div>
            </div>
        </div>
    </script>
