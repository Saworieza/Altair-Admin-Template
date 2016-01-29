$(function() {
    // dynamic grid
    altair_contact_list.init();
});

altair_contact_list = {
    init: function() {
        // get all filters
        var userArray = [];
        $('#contact_list').children().each(function() {
            var thisfilter = $(this).attr('data-uk-filter');
            if ( $.inArray( thisfilter, userArray ) == -1) {
                userArray.push(thisfilter.split(',')[1]);
            }
        });
        var userArray_length = userArray.length;

        // initialize dynamic grid
        var myGrid = UIkit.grid($('#contact_list'),{
            controls: '#contact_list_filter',
            gutter: 20
        });

        // find user
        $("#contact_list_search").keyup(function(){
            var sValue = $(this).val().toLowerCase();

            if(sValue.length > 2) {
                var filteredItems = '';
                for($i=0;$i<userArray_length;$i++) {
                    if(userArray[$i].toLowerCase().indexOf(sValue) !== -1) {
                        filteredItems += (filteredItems.length > 1 ? ',' : '') + userArray[$i];
                    }
                }
                if(filteredItems){
                    // filter grid items
                    myGrid.filter(filteredItems);
                    filteredItems = '';
                } else {
                    // show all
                    myGrid.filter('all');
                }
            } else {
                // reset filter
                myGrid.filter();
            }

        }).on('blur',function() {
            // clear search input
            $(this).val('');
        });

    }
};




