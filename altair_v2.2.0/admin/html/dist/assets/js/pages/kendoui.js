$(function() {
	kendoUI.autocomplete_widget();
    kendoUI.calendar_widget();
    kendoUI.color_picker_widget();
    kendoUI.combobox_widget();
    kendoUI.datepicker_widget();
    kendoUI.datetimepicker_widget();
    kendoUI.dropdownList_widget();
    kendoUI.masked_input_widget();
    kendoUI.menu_widget();
    kendoUI.multiselect_widget();
    kendoUI.numeric_textbox_widget();
    kendoUI.panelbar_widget();
    kendoUI.timepicker_widget();
    kendoUI.toolbar_widget();
    kendoUI.window_widget();
});

kendoUI = {
    autocomplete_widget: function() {
        // basic example
        var $kUI_autocomplete = $('#kUI_automplete');
        if($kUI_autocomplete.length) {
            var countries = ["Albania", "Andorra", "Armenia", "Austria", "Azerbaijan", "Belarus", "Belgium", "Bosnia & Herzegovina", "Bulgaria", "Croatia", "Cyprus", "Czech Republic", "Denmark", "Estonia", "Finland", "France", "Georgia", "Germany", "Greece", "Hungary", "Iceland", "Ireland", "Italy", "Kosovo", "Latvia", "Liechtenstein", "Lithuania", "Luxembourg", "Macedonia", "Malta", "Moldova", "Monaco", "Montenegro", "Netherlands", "Norway", "Poland", "Portugal", "Romania", "Russia", "San Marino", "Serbia", "Slovakia", "Slovenia", "Spain", "Sweden", "Switzerland", "Turkey", "Ukraine", "United Kingdom", "Vatican City"];
            var countriesDS = new kendo.data.DataSource({
                data: countries
            });
            var getFilters = function (filter) {
                var filters = [];
                filters.push(filter);
                var values = autoComplete.value().split(", ");
                values.pop();
                $.each(values, function (index, item) {
                    filters.push({field: "", ignoreCase: true, operator: "neq", value: item});
                });
                return filters;
            };
            var autoComplete = $kUI_autocomplete.kendoAutoComplete({
                filter: "startswith",
                placeholder: "Select country...",
                separator: ", ",
                dataSource: {
                    transport: {
                        read: function (options, operation) {
                            countriesDS.read();
                            countriesDS.filter({logic: "and", filters: getFilters(options.data.filter.filters[0])});
                            options.success(countriesDS.view());
                        }
                    },
                    serverFiltering: true
                }
            }).data("kendoAutoComplete");
        }

        // custom template
        var $kUI_autocomplete_template = $('#kUI_automplete_template');
        if($kUI_autocomplete_template.length) {
            $kUI_autocomplete_template.kendoAutoComplete({
                minLength: 2,
                dataTextField: "ContactName",
                template:
                '<div class="k-list-wrapper">'+
                    '<span class="k-state-default k-list-wrapper-addon">' +
                        '<img src=\"assets/img/avatars/avatar_#:data.CustomerID#_tn.png\" alt=\"#:data.CustomerID#\" />' +
                    '</span>' +
                    '<span class="k-state-default k-list-wrapper-content">' +
                        '<p>#: data.ContactName #</p>' +
                        '<span class="uk-text-muted uk-text-small">#: data.CompanyName #</span>' +
                    '</span>' +
                '</div>',
                dataSource: {
                    transport: {
                        read: {
                            dataType: "json",
                            url: "data/kUI_users_data.min.json"
                        }
                    }
                },
                height: 204
            }).data("kendoAutoComplete");
        }
    },
    calendar_widget: function() {
        var $kUI_calendar = $('#kUI_calendar');
        if($kUI_calendar.length) {
            $kUI_calendar.kendoCalendar();
        }
    },
    color_picker_widget: function() {
        function preview(e) {
            $(".icon_preview").find('.material-icons').css("color", e.value);
        }

        var $kUI_color_palette = $('#kUI_color_palette');
        if($kUI_color_palette.length) {
            $kUI_color_palette.kendoColorPalette({
                columns: 5,
                tileSize: {
                    width: 24,
                    height: 16
                },
                palette: [
                    "#e53935", "#d81b60", "#8e24aa", "#5e35b1", "#3949ab",
                    "#1e88e5", "#039be5", "#00acc1", "#00897b", "#43a047",
                    "#7cb342", "#c0ca33", "#fdd835", "#ffb300", "#fb8c00",
                    "#f4511e", "#6d4c41", "#757575", "#546e7a"
                ],
                change: preview
            });
        }
        var $kUI_color_picker = $('#kUI_color_picker');
        if($kUI_color_picker.length) {
            $kUI_color_picker.kendoColorPicker({
                value: "#fff",
                buttons: false,
                select: preview
            });
        }

    },
    combobox_widget: function() {
        // from <input>
        var $kUI_combobox_input = $('#kUI_combobox_input');
        if($kUI_combobox_input.length) {
            var $kUI_combobox_input_data = $kUI_combobox_input.kendoComboBox({
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
            }).data("kendoComboBox");

            /* add readonly attribute to combobox
            $kUI_combobox_input_data.input
                .attr("readonly", true)
                .on("keydown", function (e) {
                    if (e.keyCode === 8) {
                        e.preventDefault();
                    }
                });
            */
        }

        // from <select>
        var $kUI_combobox_select = $('#kUI_combobox_select');
        if($kUI_combobox_select.length) {
            $kUI_combobox_select.kendoComboBox();
            var $kUI_combobox_select_data = $("#size").data("kendoComboBox");
        }

        // cascade combobox
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
                    {name: "Child1_2", id: 2, parentId: 1},
                    {name: "Child2_1", id: 3, parentId: 2},
                    {name: "Child2_2", id: 4, parentId: 2}
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
        }
    },
    datepicker_widget: function() {
        var $kUI_datepicker_a = $('#kUI_datepicker_a');
        if($kUI_datepicker_a.length) {
            $kUI_datepicker_a.kendoDatePicker({
                format: "d-MM-yyyy"
            });
        }
        var $kUI_datepicker_b = $('#kUI_datepicker_b');
        if($kUI_datepicker_b.length) {
            $kUI_datepicker_b.kendoDatePicker({
                start: "year",
                depth: "year",
                format: "MMMM yyyy"
            });
        }
    },
    datetimepicker_widget: function() {
        var $kUI_datetimepicker_a = $('#kUI_datetimepicker_basic');
        if($kUI_datetimepicker_a.length) {
            $kUI_datetimepicker_a.kendoDateTimePicker({
                value: new Date()
            });
        }
        var $kUI_datetimepicker_range_start = $('#kUI_datetimepicker_range_start');
        var $kUI_datetimepicker_range_end = $('#kUI_datetimepicker_range_end');
        if($kUI_datetimepicker_range_start.length && $kUI_datetimepicker_range_end.length) {
            function startChange() {
                var startDate = start.value(),
                    endDate = end.value();

                if (startDate) {
                    startDate = new Date(startDate);
                    startDate.setDate(startDate.getDate());
                    end.min(startDate);
                } else if (endDate) {
                    start.max(new Date(endDate));
                } else {
                    endDate = new Date();
                    start.max(endDate);
                    end.min(endDate);
                }
            }

            function endChange() {
                var endDate = end.value(),
                    startDate = start.value();

                if (endDate) {
                    endDate = new Date(endDate);
                    endDate.setDate(endDate.getDate());
                    start.max(endDate);
                } else if (startDate) {
                    end.min(new Date(startDate));
                } else {
                    endDate = new Date();
                    start.max(endDate);
                    end.min(endDate);
                }
            }

            var today = kendo.date.today();

            var start = $kUI_datetimepicker_range_start.kendoDateTimePicker({
                value: today,
                change: startChange,
                parseFormats: ["MM/dd/yyyy"]
            }).data("kendoDateTimePicker");

            var end = $kUI_datetimepicker_range_end.kendoDateTimePicker({
                value: today,
                change: endChange,
                parseFormats: ["MM/dd/yyyy"]
            }).data("kendoDateTimePicker");

            start.max(end.value());
            end.min(start.value());
        }

    },
    dropdownList_widget: function() {
        var $kUI_dropdown_basic_input = $('#kUI_dropdown_basic_input');
        if($kUI_dropdown_basic_input.length) {
            var data = [
                {text: "Black", value: "1"},
                {text: "Orange", value: "2"},
                {text: "Grey", value: "3"}
            ];
            $kUI_dropdown_basic_input.kendoDropDownList({
                dataTextField: "text",
                dataValueField: "value",
                dataSource: data,
                index: 0
            });
        }

        var $kUI_dropdown_basic_select = $('#kUI_dropdown_basic_select');
        if($kUI_dropdown_basic_select.length) {
            $kUI_dropdown_basic_select.kendoDropDownList();
        }
    },
    masked_input_widget: function() {
        var $kUI_masked_phone = $('#kUI_masked_phone');
        if($kUI_masked_phone.length) {
            $kUI_masked_phone.kendoMaskedTextBox({
                mask: "(999) 000-0000"
            });
        }
        var $kUI_masked_credit_card = $('#kUI_masked_credit_card');
        if($kUI_masked_credit_card.length) {
            $kUI_masked_credit_card.kendoMaskedTextBox({
                mask: "0000 0000 0000 0000"
            });
        }
        var $kUI_masked_ssn = $('#kUI_masked_ssn');
        if($kUI_masked_ssn.length) {
            $kUI_masked_ssn.kendoMaskedTextBox({
                mask: "000-00-0000"
            });
        }
        var $kUI_masked_postcode = $('#kUI_masked_postcode');
        if($kUI_masked_postcode.length) {
            $kUI_masked_postcode.kendoMaskedTextBox({
                mask: "L0L 0LL"
            });
        }
    },
    menu_widget: function() {
        var $kUI_menu = $('#kUI_menu');
        if($kUI_menu.length) {
            $kUI_menu.kendoMenu();
        }
    },
    multiselect_widget: function() {
        var $kUI_multiselect_basic = $('#kUI_multiselect_basic');
        if($kUI_multiselect_basic.length) {
            $kUI_multiselect_basic.kendoMultiSelect();
        }
        var $kUI_multiselect_custom_template = $('#kUI_multiselect_custom_template');
        if($kUI_multiselect_custom_template.length) {
            $kUI_multiselect_custom_template.kendoMultiSelect({
                dataTextField: "ContactName",
                dataValueField: "CustomerID",
                itemTemplate:
                    '<div class="k-list-wrapper">'+
                        '<span class="k-state-default k-list-wrapper-addon">' +
                            '<img src=\"assets/img/avatars/avatar_#:data.CustomerID#_tn.png\" alt=\"#:data.CustomerID#\" />' +
                        '</span>' +
                        '<span class="k-state-default k-list-wrapper-content">' +
                            '<p>#: data.ContactName #</p>' +
                            '<span class="uk-text-muted uk-text-small">#: data.CompanyName #</span>' +
                        '</span>' +
                    '</div>',
                tagTemplate:
                    '<img class="k-tag-image" src=\"assets/img/avatars/avatar_#:data.CustomerID#_tn.png\" alt=\"${data.CustomerID}\" />' +
                    '#: data.ContactName #',
                dataSource: {
                    transport: {
                        read: {
                            dataType: "json",
                            url: "data/kUI_users_data.min.json"
                        }
                    }
                },
                value: [
                    { ContactName: "William Block", CustomerID: 3 }
                ],
                height: 204
            }).data("kendoMultiSelect");

        }
    },
    numeric_textbox_widget: function() {
        var $kUI_numeric_price = $('#kUI_numeric_price');
        if($kUI_numeric_price.length) {
            $kUI_numeric_price.kendoNumericTextBox({
                format: "c",
                decimals: 3
            });
        }
        var $kUI_numeric_price_discount = $('#kUI_numeric_price_discount');
        if($kUI_numeric_price_discount.length) {
            $kUI_numeric_price_discount.kendoNumericTextBox({
                format: "p0",
                min: 0,
                max: 0.1,
                step: 0.01
            });
        }
        var $kUI_numeric_weight = $('#kUI_numeric_weight');
        if($kUI_numeric_weight.length) {
            $kUI_numeric_weight.kendoNumericTextBox({
                format: "#.00 kg"
            });
        }
        var $kUI_numeric_stock = $('#kUI_numeric_stock');
        if($kUI_numeric_stock.length) {
            $kUI_numeric_stock.kendoNumericTextBox();
        }
    },
    panelbar_widget: function() {
        var $kUI_panelbar = $('#kUI_panelbar');
        if($kUI_panelbar.length) {
            $kUI_panelbar.kendoPanelBar();
        }
    },
    timepicker_widget: function() {
        //  basic example
        var $kUI_timepicker = $('#kUI_timepicker');
        if($kUI_timepicker.length) {
            $kUI_timepicker.kendoTimePicker();
        }
        // range selection
        var $kUI_timepicker_range_start = $('#kUI_timepicker_range_start');
        var $kUI_timepicker_range_end = $('#kUI_timepicker_range_end');
        if($kUI_timepicker_range_start.length && $kUI_timepicker_range_end.length) {
            function startChange() {
                var startTime = start.value();
                if (startTime) {
                    startTime = new Date(startTime);
                    end.max(startTime);
                    startTime.setMinutes(startTime.getMinutes() + this.options.interval);
                    end.min(startTime);
                    end.value(startTime);
                }
            }

            var start = $kUI_timepicker_range_start.kendoTimePicker({
                change: startChange
            }).data("kendoTimePicker");

            var end = $kUI_timepicker_range_end.kendoTimePicker().data("kendoTimePicker");

            start.min("8:00 AM");
            start.max("6:00 PM");

            end.min("8:00 AM");
            end.max("7:30 AM");

        }

    },
    toolbar_widget: function() {
        var $kUI_toolBar = $('#kUI_toolBar');
        if($kUI_toolBar.length) {

            $kUI_toolBar.kendoToolBar({
                items: [
                    { type: "button", text: "Button" },
                    { type: "button", text: "Toggle Button", togglable: true },
                    {
                        type: "splitButton",
                        text: "Insert",
                        menuButtons: [
                            { text: "Insert above", icon: "insert-n" },
                            { text: "Insert between", icon: "insert-m" },
                            { text: "Insert below", icon: "insert-s" }
                        ]
                    },
                    { type: "separator" },
                    { template: "<label>Format:</label>" },
                    {
                        template: "<input id='kUI_dropdown' class='uk-form-width-medium' />",
                        overflow: "never"
                    },
                    { type: "separator" },
                    {
                        type: "buttonGroup",
                        buttons: [
                            { spriteCssClass: "k-tool-icon k-justifyLeft", text: "Left", togglable: true, group: "text-align" },
                            { spriteCssClass: "k-tool-icon k-justifyCenter", text: "Center", togglable: true, group: "text-align" },
                            { spriteCssClass: "k-tool-icon k-justifyRight", text: "Right", togglable: true, group: "text-align" }
                        ]
                    },
                    {
                        type: "buttonGroup",
                        buttons: [
                            { spriteCssClass: "k-tool-icon k-bold", text: "Bold", togglable: true, showText: "overflow" },
                            { spriteCssClass: "k-tool-icon k-italic", text: "Italic", togglable: true, showText: "overflow" },
                            { spriteCssClass: "k-tool-icon k-underline", text: "Underline", togglable: true, showText: "overflow" }
                        ]
                    },
                    {
                        type: "button",
                        text: "Action",
                        overflow: "always"
                    },
                    {
                        type: "button",
                        text: "Another Action",
                        overflow: "always"
                    },
                    {
                        type: "button",
                        text: "Something else here",
                        overflow: "always"
                    }
                ]
            });

            $("#kUI_dropdown").kendoDropDownList({
                optionLabel: "Paragraph",
                dataTextField: "text",
                dataValueField: "value",
                dataSource: [
                    { text: "Heading 1", value: 1 },
                    { text: "Heading 2", value: 2 },
                    { text: "Heading 3", value: 3 },
                    { text: "Title", value: 4 },
                    { text: "Subtitle", value: 5 }
                ]
            });

        }
    },
    window_widget: function() {
        var $kUI_window = $('#kUI_window');
        var $kUI_undo = $('#kUI_undo');
        if($kUI_window.length) {
            var k_window = $kUI_window,
                k_undo = $kUI_undo
                    .bind("click", function () {
                        k_window.data("kendoWindow").open();
                        k_undo.hide();
                    });

            var onClose = function () {
                k_undo.show();
            };

            if (!k_window.data("kendoWindow")) {
                k_window.kendoWindow({
                    width: "600px",
                    title: "Lorem ipsum dolor sit",
                    actions: [
                        "Pin",
                        "Minimize",
                        "Maximize",
                        "Close"
                    ],
                    close: onClose
                });
            }
        }
    }
};