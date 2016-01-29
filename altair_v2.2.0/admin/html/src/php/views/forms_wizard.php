<?php defined('safe_access') or die('Restricted access!'); ?>

    <div id="page_content">
        <div id="page_content_inner">

            <h2 class="heading_b uk-margin-bottom">Advanced Wizard</h2>

            <div class="md-card uk-margin-large-bottom">
                <div class="md-card-content">
                    <form class="uk-form-stacked" id="wizard_advanced_form">
                        <div id="wizard_advanced" data-uk-observe>

                            <!-- first section -->
                            <h3>Owner information</h3>
                            <section>
                                <h2 class="heading_a">
                                    Owner Information
                                    <span class="sub-heading">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>
                                </h2>
                                <hr class="md-hr"/>
                                <div class="uk-grid">
                                    <div class="uk-width-medium-1-1 parsley-row">
                                        <label for="wizard_fullname">Full Name<span class="req">*</span></label>
                                        <input type="text" name="wizard_fullname" id="wizard_fullname" required class="md-input" />
                                    </div>
                                </div>
                                <div class="uk-grid">
                                    <div class="uk-width-medium-1-1 parsley-row">
                                        <label for="wizard_address">Address<span class="req">*</span></label>
                                        <input type="text" name="wizard_address" id="wizard_address" required class="md-input" />
                                    </div>
                                </div>
                                <div class="uk-grid" data-uk-grid-margin>
                                    <div class="uk-width-medium-1-3 parsley-row">
                                        <label for="wizard_birth">Birth Date<span class="req">*</span></label>
                                        <input type="text" name="wizard_birth" id="wizard_birth" required class="md-input" data-parsley-date data-parsley-date-message="This value should be a valid date" data-uk-datepicker="{format:'MM.DD.YYYY'}" />
                                    </div>
                                    <div class="uk-width-medium-1-3 parsley-row">
                                        <select id="wizard_birth_place" name="wizard_birth_place" required>
                                            <option value="">Place of Birth</option>
                                            <?php for($i=0;$i<20;$i++) { ?>
                                                <option value="<?php echo 'city_'.$i; ?>"><?php echo $faker->city;?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="uk-width-medium-1-3 parsley-row">
                                        <label class="uk-form-label">Martial Status<span class="req">*</span></label>
                                        <span class="icheck-inline">
                                            <input type="radio" name="wizard_status" id="wizard_status_married" required class="wizard-icheck" value="married" />
                                            <label for="wizard_status_married" class="inline-label">Married</label>
                                        </span>
                                        <span class="icheck-inline">
                                            <input type="radio" name="wizard_status" id="wizard_status_single" class="wizard-icheck" value="single" />
                                            <label for="wizard_status_single" class="inline-label">Single</label>
                                        </span>
                                    </div>
                                </div>
                                <div class="uk-grid uk-grid-width-medium-1-2 uk-grid-width-large-1-4" data-uk-grid-margin>
                                    <div class="parsley-row">
                                        <div class="uk-input-group">
                                            <span class="uk-input-group-addon">
                                                <a href="#"><i class="material-icons">&#xE0CD;</i></a>
                                            </span>
                                            <label for="wizard_phone">Phone Number</label>
                                            <input type="text" class="md-input" name="wizard_phone" id="wizard_phone" />
                                        </div>
                                    </div>
                                    <div class=" parsley-row">
                                        <div class="uk-input-group">
                                            <span class="uk-input-group-addon">
                                                <a href="#"><i class="material-icons">&#xE0BE;</i></a>
                                            </span>
                                            <label for="wizard_email">Email</label>
                                            <input type="text" class="md-input" name="wizard_email" id="wizard_email" />
                                        </div>
                                    </div>
                                    <div class="parsley-row">
                                        <div class="uk-input-group">
                                            <span class="uk-input-group-addon">
                                                <a href="#"><i class="uk-icon-skype"></i></a>
                                            </span>
                                            <label for="wizard_skype">Skype</label>
                                            <input type="text" class="md-input" name="wizard_skype" id="wizard_skype" />
                                        </div>
                                    </div>
                                    <div class="parsley-row">
                                        <div class="uk-input-group">
                                            <span class="uk-input-group-addon">
                                                <a href="#"><i class="uk-icon-twitter"></i></a>
                                            </span>
                                            <label for="wizard_twitter">Twitter</label>
                                            <input type="text" class="md-input" name="wizard_twitter" id="wizard_twitter" />
                                        </div>
                                    </div>
                                </div>
                            </section>

                            <!-- second section -->
                            <h3>Vehicle information</h3>
                            <section>
                                <h2 class="heading_a">
                                    Vehicle information
                                    <span class="sub-heading">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>
                                </h2>
                                <hr class="md-hr"/>
                                <div class="uk-grid uk-grid-width-large-1-2 uk-grid-width-xlarge-1-4" data-uk-grid-margin>
                                    <div class="parsley-row">
                                        <label for="wizard_vehicle_title_number">Title Number<span class="req">*</span></label>
                                        <input type="text" name="wizard_vehicle_title_number" id="wizard_vehicle_title_number" required class="md-input" />
                                    </div>
                                    <div class="parsley-row">
                                        <label for="wizard_vehicle_vin">VIN<span class="req">*</span></label>
                                        <input type="text" name="wizard_vehicle_vin" id="wizard_vehicle_vin" required class="md-input" />
                                    </div>
                                    <div class="parsley-row">
                                        <label for="wizard_vehicle_plate_number">Current Plate Number<span class="req">*</span></label>
                                        <input type="text" name="wizard_vehicle_plate_number" id="wizard_vehicle_plate_number" required class="md-input" />
                                    </div>
                                    <div class="parsley-row">
                                        <label for="wizard_vehicle_expiration">Expiration Date<span class="req">*</span></label>
                                        <input type="text" name="wizard_vehicle_expiration" id="wizard_vehicle_expiration" required class="md-input" data-parsley-americandate data-parsley-americandate-message="This value should be a valid date (MM.DD.YYYY)" data-uk-datepicker="{format:'MM.DD.YYYY'}" />
                                    </div>
                                </div>
                                <div class="uk-grid uk-grid-width-large-1-3 uk-grid-width-xlarge-1-6" data-uk-grid-margin>
                                    <div class="parsley-row">
                                        <label for="wizard_vehicle_year">Registration Year</label>
                                        <input type="text" name="wizard_vehicle_year" id="wizard_vehicle_year" class="md-input" data-uk-datepicker="{format:'MM.YYYY'}" />
                                    </div>
                                    <div class="parsley-row">
                                        <label for="wizard_vehicle_make">Make</label>
                                        <input type="text" name="wizard_vehicle_make" id="wizard_vehicle_make" class="md-input" />
                                    </div>
                                    <div class="parsley-row">
                                        <label for="wizard_vehicle_model">Model<span class="req">*</span></label>
                                        <input type="text" name="wizard_vehicle_model" id="wizard_vehicle_model" required class="md-input" />
                                    </div>
                                    <div class="parsley-row">
                                        <label for="wizard_vehicle_body">Body Type<span class="req">*</span></label>
                                        <input type="text" name="wizard_vehicle_body" id="wizard_vehicle_body" required class="md-input" />
                                    </div>
                                    <div class="parsley-row">
                                        <label for="wizard_vehicle_axles">Axles</label>
                                        <input type="text" name="wizard_vehicle_axles" id="wizard_vehicle_axles" class="md-input" />
                                    </div>
                                    <div class="parsley-row">
                                        <label for="wizard_vehicle_fuel">Fuel<span class="req">*</span></label>
                                        <input type="text" name="wizard_vehicle_fuel" id="wizard_vehicle_fuel" required class="md-input" />
                                    </div>
                                </div>
                            </section>

                            <!-- third section -->
                            <h3>Additional information</h3>
                            <section>
                                <h2 class="heading_a">
                                    Additional information
                                    <span class="sub-heading">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>
                                </h2>
                                <hr class="md-hr"/>
                                <div class="uk-grid uk-margin-large-bottom" data-uk-grid-margin>
                                    <div class="uk-width-1-1">
                                        <label class="uk-form-label">Location Where Vehicle is Principally Garaged</label>
                                        <div class="uk-grid" data-uk-grid-margin="">
                                            <div class="uk-width-medium-2-10 parsley-row">
                                                <span class="icheck-inline uk-margin-top uk-margin-left">
                                                    <input type="radio" name="wizard_additional_location" id="wizard_status_location_city" class="wizard-icheck" value="City" />
                                                    <label for="wizard_status_location_city" class="inline-label">City</label>
                                                </span>
                                            </div>
                                            <div class="uk-width-medium-2-10 parsley-row">
                                                <span class="icheck-inline uk-margin-top uk-margin-left">
                                                    <input type="radio" name="wizard_additional_location" id="wizard_status_location_county" class="wizard-icheck" value="County" />
                                                    <label for="wizard_status_location_county" class="inline-label">County</label>
                                                </span>
                                            </div>
                                            <div class="uk-width-medium-3-10 parsley-row">
                                                <div class="uk-input-group">
                                                    <span class="uk-input-group-addon">
                                                       <input type="radio" name="wizard_additional_location" class="wizard-icheck" value="town" />
                                                    </span>
                                                    <label for="wizard_location_town">Town of</label>
                                                    <input type="text" class="md-input" name="wizard_location_town" id="wizard_location_town" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <span class="uk-alert uk-alert-info">If you would like your registration renewals sent to an address other than your residence/business address, enter it below.</span>
                                <div class="uk-grid" data-uk-grid-margin>
                                    <div class="uk-width-medium-2-6 parsley-row">
                                        <label for="wizard_vehicle_registration_address">Registration Mailing Address</label>
                                        <input type="text" name="wizard_vehicle_registration_address" id="wizard_vehicle_registration_address" required class="md-input" />
                                    </div>
                                    <div class="uk-width-medium-1-6 parsley-row">
                                        <label for="wizard_vehicle_registration_city">City<span class="req">*</span></label>
                                        <input type="text" name="wizard_vehicle_registration_city" id="wizard_vehicle_registration_city" required class="md-input" />
                                    </div>
                                    <div class="uk-width-medium-1-6 parsley-row">
                                        <label for="wizard_vehicle_registration_state">State<span class="req">*</span></label>
                                        <input type="text" name="wizard_vehicle_registration_state" id="wizard_vehicle_registration_state" required class="md-input" />
                                    </div>
                                    <div class="uk-width-medium-1-6 parsley-row">
                                        <label for="wizard_vehicle_registration_zip">ZIP<span class="req">*</span></label>
                                        <input type="text" name="wizard_vehicle_registration_zip" id="wizard_vehicle_registration_zip" required class="md-input" />
                                    </div>
                                    <div class="uk-width-medium-1-6 parsley-row">
                                        <label for="wizard_vehicle_registration_code">Code<span class="req">*</span></label>
                                        <input type="text" name="wizard_vehicle_registration_code" id="wizard_vehicle_registration_code" required class="md-input" />
                                    </div>
                                </div>
                            </section>

                        </div>
                    </form>
                </div>
            </div>

            <h2 class="heading_b uk-margin-bottom">UIkit Get Started</h2>

            <div class="md-card">
                <div class="md-card-content">
                    <div id="wizard_vertical">

                        <h3>Get started</h3>
                        <section>
                            <h2 class="heading_b">
                                Get started
                                <span class="sub-heading">Get familiar with the basic setup and structure of UIkit.</span>
                            </h2>
                            <hr class="md-hr">
                            <h3 class="heading_a">File structure</h3>
                            <p>In the ZIP file you will find all CSS, JavaScript and font files ready to use for your project. The core framework of UIkit has almost no styling in order to keep it slim. Therefore we provide two addidional distributions with a gradient and an almost flat style. Each style comes as a single CSS file as well as a minified version.</p>
<pre class="line-numbers"><code class="language-markup">
    /css
    &lt;!-- UIkit with the basic style --&gt;
    uikit.css
    uikit.min.css

    &lt;!-- UIkit with Gradient style --&gt;
    uikit.gradient.css
    uikit.gradient.min.css

    &lt;!-- UIkit with Almost flat style --&gt;
    uikit.almost-flat.css
    uikit.almost-flat.min.css

    &lt;!-- Advanced components --&gt;
    /components

    /fonts
    &lt;!-- FontAwesome webfont --&gt;
    fontawesome-webfont.eot
    fontawesome-webfont.ttf
    fontawesome-webfont.woff
    FontAwesome.otf

    /js
    &lt;!-- JavaScript and minified version --&gt;
    uikit.js
    uikit.min.js

    &lt;!-- Advanced components --&gt;
    /components

    &lt;!-- Core components --&gt;
    /core</code></pre>
                            <p class="uk-text-large">&hellip;</p>
                        </section>
                        <h3>How to customize</h3>
                        <section>
                            <h2 class="heading_b">
                                How to customize
                                <span class="sub-heading">Create your own style with the customizer.</span>
                            </h2>
                            <hr class="md-hr">
                            <p>UIkit comes with a customizer that enables you to make adjustments to the theme you are using with just a few clicks and no need for any CSS knowledge. You can then download your new CSS and even the pending Less variables, all ready to use.</p>
                            <p><span class="uk-badge uk-badge-primary">NOTE</span> To optimize performance, we recommend disabling add-ons, like Web Developer and Firebug in <code>Firefox</code></p>
                            <h3 class="heading_a">Usage</h3>
                            <p>Choose the theme that you would like to customize from the select box. Click inside a color square to open the dialog and change your color. To adjust a numeric value, like width or margin, just click in the text area and type your own value. You can even use a different unit and the customizer will recalculate automatically. Once you are satisfied with your adjustments, hit Get CSS to download your new theme and copy it into your UIkit <code>/css</code> folder.</p>
                            <h4 class="heading_c">Advanced mode</h4>
                            <p>The variables within the customizer are separated into two main parts. First, variables which are displayed by default and variables which only appear in the Advanced Mode. The visible variables are often the global ones, because they usually define the value of component variables. To see the component variables, just check the Advanced mode box.</p>
                            <h4 class="heading_c">More</h4>
                            <p>By default, variables whose value is defined through another variable are hidden. In Advanced mode you can see a (More) button next to groups that include these kinds of variables. This option is extremely powerful as it enables you to set your own value for any component variable.</p>
                        </section>
                        <h3>Less & Sass files</h3>
                        <section>
                            <h2 class="heading_b">
                                Less & Sass files
                                <span class="sub-heading">A separate Bower UIkit repository contains all distribution files including Less and Sass.</span>
                            </h2>
                            <hr class="md-hr">
                            <p>The great thing about UIkit is that you can easily integrate its source files in your project to keep your custom project workflow for building assets and stay with your preferred CSS preprocessor.</p>
                            <p>UIkit uses the package manager <a href="http://bower.io/">Bower</a> to load assets. Therefore UIkit automatically generates the distributions into a separate <a href="https://github.com/uikit/bower-uikit">Bower UIkit repository</a>. It contains all CSS, Less, SCSS and JavaScript files from UIkit and its components.</p>
                            <p class="uk-text-large">&hellip;</p>
                        </section>

                    </div>
                </div>
            </div>

        </div>
    </div>
