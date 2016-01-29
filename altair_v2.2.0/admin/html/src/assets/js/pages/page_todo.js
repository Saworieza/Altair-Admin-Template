/*
*  Altair Admin
*  @version v2.2.0
*  @author tzd
*  @license http://themeforest.net/licenses
*  page_todo.js - page_todo.html
*/

$(function() {
    // tasks list
    altair_todo.init();
});

altair_todo = {
    init: function() {
        var $todo_list = $('#todo_list');
        $todo_list.find('input:checkbox')
            .on('ifChecked', function(){
                $(this).closest('li').addClass('md-list-item-disabled');
            })
            .on('ifUnchecked', function(){
                $(this).closest('li').removeClass('md-list-item-disabled');
            });
    }
};

