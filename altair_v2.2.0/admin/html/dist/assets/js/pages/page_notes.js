$(function() {
    // copy notes list to sidebar
    altair_notes.copy_list_sidebar();
    // notes init functions
    altair_notes.init();
});

var $note_add_btn = $('#note_add'),
    $card_note = $('.md-card-single'),
    notes_list_class = '.notes_list', // main/sidebar list
    $notes_list = $('#notes_list');

altair_notes = {
    init: function () {
        altair_notes.add_new_note();
        altair_notes.open_note();
    },
    add_new_note: function() {
        if($note_add_btn) {
            var clear_inputs = function() {
                $card_note.find('#note_title,#note_content').val('');
                $notes_list.find('li').removeClass('md-list-item-active');
                $card_note.find('#note_title').focus();
            };
            $note_add_btn.on('click', function(e) {
                e.preventDefault();
                altair_md.card_show_hide($card_note,undefined,clear_inputs,undefined)
            })
        }
    },
    open_note: function() {
        // show note content
        var fill_inputs = function($this_note) {
            var note_content = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. A amet beatae eaque earum, eligendi error et iste iure iusto magni minus obcaecati quas qui quis quisquam, sit suscipit voluptas voluptatum.';
            $card_note.find('#note_title').val($this_note.children('.md-list-heading').text());
            $card_note.find('#note_content').val( "Note " + $this_note.attr('data-note-id') + " content \r\n" + note_content);
        };
        $(notes_list_class).find('a').on('click',function(e) {
            e.preventDefault();
            var $this_note = $(this);
            altair_md.card_show_hide($card_note,undefined,fill_inputs,$this_note);
            $(this).closest('li')
                .siblings('li').removeClass('md-list-item-active')
                .end()
                .addClass('md-list-item-active');
        });
    },
    copy_list_sidebar: function() {
        // hide secondary sidebar toggle btn for large screens
        $sidebar_secondary_toggle.addClass('uk-hidden-large');

        var notes_list_sidebar = $notes_list.clone();

        notes_list_sidebar.attr('id','notes_list_sidebar');

        $sidebar_secondary
            .find('.sidebar_secondary_wrapper').html(notes_list_sidebar);

    }
};