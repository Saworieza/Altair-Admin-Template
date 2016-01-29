$(function() {
    // product edit
    altair_product_edit.init();
});

altair_product_edit = {
    init: function() {
        // product edit form
        altair_product_edit.edit_form();
        // product tags
        altair_product_edit.product_tags();
    },
    edit_form: function() {
        // form variables
        var $product_edit_form = $('#product_edit_form'),
            $product_edit_submit_btn = $('#product_edit_submit'),
            product_name = $('#product_edit_name'),
            product_name_control= $('#product_edit_name_control'),
            product_sn = $('#product_edit_sn'),
            product_sn_control = $('#product_edit_sn_control'),
            product_manufacturer_control = $('#product_edit_manufacturer_control'),
            product_color_control = $('#product_edit_color_control'),
            product_memory_control = $('#product_edit_memory_control');


        // change full product name
        var product_name_change = function() {
            return product_name.text(product_manufacturer_control.val() + ' ' + product_name_control.val() + ', ' + product_memory_control.val() + ', ' + product_color_control.val())
        };

        product_name_control
            // change product name on keyup
            .on('keyup',function() {
                product_name_change();
            });

        product_manufacturer_control
            // change product name on keyup
            .on('keyup',function() {
                product_name_change();
            });

        product_sn_control
            // change product name on product serial number keyup
            .on('keyup',function() {
                product_sn.text(product_sn_control.val());
            });

        product_color_control
            // change product name on product color change
            .on('change',function() {
                product_name_change();
            });

        product_memory_control
            // change product name on product memory change
            .on('change',function() {
                product_name_change();
            });

        // submit form
        $product_edit_submit_btn.on('click',function(e) {
            e.preventDefault();
            var form_serialized = JSON.stringify( $product_edit_form.serializeObject(), null, 2 );
            UIkit.modal.alert('<p>Product data:</p><pre>' + form_serialized + '</pre>');
        })
    },
    product_tags: function() {

        $('#product_edit_tags_control').selectize({
            plugins: {
                'remove_button': {
                    label: ''
                }
            },
            placeholder: 'Select product tag(s)',
            options: [
                {id: 1, title: 'LTE', value: 'lte'},
                {id: 2, title: 'Quad HD', value: 'quad_hd'},
                {id: 3, title: 'Android™ 5.0', value: 'android_5'},
                {id: 4, title: '64GB', value: '64gb'}
            ],
            render: {
                option: function(data, escape) {
                    return  '<div class="option">' +
                        '<span>' + escape(data.title) + '</span>' +
                        '</div>';
                },
                item: function(data, escape) {
                    return '<div class="item">' + escape(data.title) + '</div>';
                }
            },
            maxItems: null,
            valueField: 'value',
            labelField: 'title',
            searchField: 'title',
            create: true,
            onDropdownOpen: function($dropdown) {
                $dropdown
                    .hide()
                    .velocity('slideDown', {
                        begin: function() {
                            $dropdown.css({'margin-top':'0'})
                        },
                        duration: 200,
                        easing: easing_swiftOut
                    })
            },
            onDropdownClose: function($dropdown) {
                $dropdown
                    .show()
                    .velocity('slideUp', {
                        complete: function() {
                            $dropdown.css({'margin-top':''})
                        },
                        duration: 200,
                        easing: easing_swiftOut
                    })
            }
        });
    }
};