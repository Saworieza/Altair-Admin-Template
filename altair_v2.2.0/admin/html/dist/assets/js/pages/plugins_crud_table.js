$(function() {
    // crud table
    altair_crud_table.init();
});

altair_crud_table = {
    init: function() {

        $('#students_crud').jtable({
            title: 'The Student List',
            paging: true, //Enable paging
            pageSize: 10, //Set page size (default: 10)
            addRecordButton: $('#recordAdd'),
            deleteConfirmation: function(data) {
                data.deleteConfirmMessage = 'Are you sure to delete student ' + data.record.Name + '?';
            },
            formCreated: function(event, data) {
                // replace click event on some clickable elements
                // to make icheck label works
                data.form.find('.jtable-option-text-clickable').each(function() {
                    var $thisTarget = $(this).prev().attr('id');
                    $(this)
                        .attr('data-click-target',$thisTarget)
                        .off('click')
                        .on('click',function(e) {
                            e.preventDefault();
                            $('#'+$(this).attr('data-click-target')).iCheck('toggle');
                        })
                });
                // create selectize
                data.form.find('select').each(function() {
                    var $this = $(this);
                    $this.after('<div class="selectize_fix"></div>')
                    .selectize({
                        dropdownParent: 'body',
                        placeholder: 'Click here to select ...',
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
                });
                // create icheck
                data.form
                    .find('input[type="checkbox"],input[type="radio"]')
                    .each(function() {
                        var $this = $(this);
                        $this.iCheck({
                            checkboxClass: 'icheckbox_md',
                            radioClass: 'iradio_md',
                            increaseArea: '20%'
                        })
                        .on('ifChecked', function(event){
                            $this.parent('div.icheckbox_md').next('span').text('Active');
                        })
                        .on('ifUnchecked', function(event){
                            $this.parent('div.icheckbox_md').next('span').text('Passive');
                        })
                    });
                // reinitialize inputs
                data.form.find('.jtable-input').children('input[type="text"],input[type="password"],textarea').not('.md-input').each(function() {
                    $(this).addClass('md-input');
                    altair_forms.textarea_autosize();
                });
                altair_md.inputs();
            },
            actions: {
                listAction: 'data/crud_table/studentsActions.php?action=list',
                createAction: 'data/crud_table/studentsActions.php?action=create',
                updateAction: 'data/crud_table/studentsActions.php?action=update',
                deleteAction: 'data/crud_table/studentsActions.php?action=delete'
            },
            fields: {
                StudentId: {
                    key: true,
                    create: false,
                    edit: false,
                    list: false
                },
                Name: {
                    title: 'Name',
                    width: '23%'
                },
                EmailAddress: {
                    title: 'Email address',
                    list: false
                },
                Password: {
                    title: 'User Password',
                    type: 'password',
                    list: false
                },
                Gender: {
                    title: 'Gender',
                    width: '13%',
                    options: {'M': 'Male', 'F': 'Female'}
                },
                CityId: {
                    title: 'City',
                    width: '12%',
                    options: 'data/crud_table/cities.json'
                },
                BirthDate: {
                    title: 'Birth Date',
                    width: '15%',
                    displayFormat: 'dd/mm/yy',
                    type: 'date',
                    input: function(data) {
                        if (data.record) {
                            return '<input class="md-input" type="text" name="BirthDate" value="' + data.value + '" data-uk-datepicker="{format:\'DD/MM/YYYY\',addClass: \'dropdown-modal\'}"/>';
                        } else {
                            return '<input class="md-input" type="text" name="BirthDate"  value="" data-uk-datepicker="{format:\'DD/MM/YYYY\',addClass: \'dropdown-modal\'}"/>';
                        }
                    }
                },
                Education: {
                    title: 'Education',
                    type: 'radiobutton',
                    options: {
                        '1': 'Primary school',
                        '2': 'High school',
                        '3': 'University'
                    }
                },
                About: {
                    title: 'About this person',
                    type: 'textarea',
                    list: false
                },
                IsActive: {
                    title: 'Status',
                    width: '12%',
                    type: 'checkbox',
                    values: { 'false': 'Passive', 'true': 'Active' },
                    defaultValue: 'true'
                },
                RecordDate: {
                    title: 'Record date',
                    width: '15%',
                    type: 'date',
                    displayFormat: 'dd/mm/yy',
                    create: false,
                    edit: false
                }
            }
        }).jtable('load');

        // change buttons visual style in ui-dialog
        $('.ui-dialog-buttonset')
            .children('button')
            .attr('class','')
            .addClass('md-btn md-btn-flat')
            .off('mouseenter focus');
        $('#AddRecordDialogSaveButton,#EditDialogSaveButton,#DeleteDialogButton').addClass('md-btn-flat-primary');

    }
};