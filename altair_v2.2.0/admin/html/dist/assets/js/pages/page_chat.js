$(function() {
    // copy user list to sidebar
    altair_chat.copy_user_list();
    // chat colors
    altair_chat.change_colors();
});

var $chat = $('#chat'),
    $user_list = $('#chat_user_list'),
    $dubmit_message_box = $('#submit_message_box'),
    $dropdown_chat_colors = $('#chat_colors');

altair_chat = {
    submit_message: function() {

    },
    change_colors: function() {
        $dropdown_chat_colors.find('a').click(function(e) {
            e.preventDefault();
            var thisColor = $(this).attr('data-chat-color');

            $chat
                .removeClass('chat_box_colors_a chat_box_colors_b chat_box_colors_c chat_box_colors_d')
                .addClass(thisColor);

            $(this)
                .closest('li').addClass('uk-active')
                .siblings('li').removeClass('uk-active');

        })
    },
    copy_user_list: function() {
        // hide secondary sidebar toggle btn for large screens
        $sidebar_secondary_toggle.addClass('uk-hidden-large');

        var user_list_sidebar = $user_list.clone();

        user_list_sidebar.attr('id','notes_list_sidebar');

        $sidebar_secondary
            .find('.sidebar_secondary_wrapper').html(user_list_sidebar);

    }
};