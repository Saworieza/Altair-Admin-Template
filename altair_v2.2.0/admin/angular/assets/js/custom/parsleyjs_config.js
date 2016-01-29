window.ParsleyConfig = {
    excluded: 'input[type=button], input[type=submit], input[type=reset], input[type=hidden], input.exclude_validation',
    trigger: 'change',
    errorsWrapper: '<div class="parsley-errors-list"></div>',
    errorTemplate: '<span></span>',
    errorClass: 'md-input-danger',
    successClass: 'md-input-success',
    errorsContainer: function (ParsleyField) {
        var element = ParsleyField.$element;
        return element.closest('.parsley-row');
    },
    classHandler: function (ParsleyField) {
        var element = ParsleyField.$element,
            selectize = element.attr('selectize');
        if( element.is(':checkbox') || element.is(':radio') || element.parent().is('label') || $(element).is('[selectize]') ) {
            return element.closest('.parsley-row');
        }
    }
};

// extra validators
window.ParsleyConfig = window.ParsleyConfig || {};
window.ParsleyConfig.validators = window.ParsleyConfig.validators || {};

window.ParsleyConfig.validators.americandate = {
    fn: function (value) {
        if (!/^([01]?[1-9])[.\/-]([0-3]?[0-9])[.\/-]([0-9]{4}|[0-9]{2})$/.test(value)) {
            return false;
        }
        var parts = value.split(/[.\/-]+/);
        var day = parseInt(parts[1], 10);
        var month = parseInt(parts[0], 10);
        var year = parseInt(parts[2], 10);
        if (year == 0 || month == 0 || month > 12) {
            return false;
        }
        var monthLength = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
        if (year % 400 == 0 || (year % 100 != 0 && year % 4 == 0)) {
            monthLength[1] = 29;
        }
        return day > 0 && day <= monthLength[month - 1];
    },
    priority: 256
};