$(function() {
    // mailbox init functions
    altair_mailbox.init();
});

// variables
var $mailbox = $('#mailbox'),
    $split_view_btn = $('#mailbox_list_split'),
    $combined_view_btn = $('#mailbox_list_combined'),
    $msg_list = $mailbox.find('.md-card-list'),
    anim_duration = 250;

altair_mailbox = {
    init: function() {
        // split/combined list
        altair_mailbox.list_switch();
        // assign colors to each message (data-message-category-color)
        altair_mailbox.list_category_color();
        // select messages
        altair_mailbox.select_messages();
        // show/hide single message
        altair_mailbox.toggle_message();
        // compose message
        altair_mailbox.create_message();
    },
    // split/combined list
    list_switch: function() {
        $combined_view_btn.on('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            $combined_view_btn.velocity("transition.expandOut", {
                duration: anim_duration,
                easing: easing_swiftOut,
                begin: function() {
                    $mailbox
                        .addClass('md-card-list-combined')
                        .find('.md-card-list-header').not('.md-card-list-header-combined')
                        .velocity("transition.expandOut", {
                            duration: anim_duration,
                            easing: easing_swiftOut,
                            begin: function() {
                                $msg_list.each(function(index) {
                                    if(index != 0 ) {
                                        $(this).velocity({
                                            marginTop: '0'
                                        }, {
                                            duration: anim_duration + 200,
                                            easing: easing_swiftOut
                                        })
                                    }
                                });
                            },
                            complete: function() {
                                $mailbox.find('.md-card-list-header-combined').velocity("transition.expandIn", {
                                    duration: anim_duration,
                                    easing: easing_swiftOut
                                })
                            }
                        });
                },
                complete: function() {
                    $split_view_btn.velocity("transition.expandIn", {
                        duration: anim_duration,
                        easing: easing_swiftOut
                    })
                }
            });
        });

        $split_view_btn.on('click', function(e) {
            e.preventDefault();
            $split_view_btn.velocity("transition.expandOut", {
                duration: anim_duration,
                easing: easing_swiftOut,
                begin: function() {
                    var $list = $mailbox.find('.md-card-list'),
                        list_length = $list.length;

                    $mailbox
                        .find('.md-card-list-header-combined')
                        .velocity("transition.expandOut", {
                            duration: anim_duration,
                            easing: easing_swiftOut
                        });

                    $list.reverse().each(function(index) {
                        if(index != list_length-1 ) {
                            $(this).velocity("reverse", {
                                duration: anim_duration + 200,
                                easing: easing_swiftOut
                            })
                        }
                    });
                    setTimeout(function() {
                        $mailbox.removeClass('md-card-list-combined');
                        $('.md-card-list-header')
                            .not('.md-card-list-header-combined')
                            .show()
                            .velocity("reverse");
                    },500);
                },
                complete: function() {
                    $combined_view_btn.velocity("transition.expandIn", {
                        duration: anim_duration,
                        easing: easing_swiftOut
                    })
                }
            });

        });

        if($mailbox.hasClass('md-card-list-combined')) {
            $combined_view_btn.click();
        } else {
            $split_view_btn.hide();
        }

    },
    // assign colors to each message (data-message-category-color)
    list_category_color: function() {
        $('.md-card-list > ul > li').each(function() {
            $this = $(this);
            var thisCatColor = $this.attr('data-message-category-color');
            if(thisCatColor) {
                $(this).find('span.md-card-list-item-avatar').css({
                    backgroundColor: '#'+thisCatColor
                })
            }
        })
    },
    // select messages
    select_messages: function () {

        $mailbox.on('ifChanged', '[data-md-icheck]', function() {
            $(this).is(':checked')
                ?
                $(this).closest('li').addClass('md-card-list-item-selected')
                :
                $(this).closest('li').removeClass('md-card-list-item-selected');
        });

        $('#mailbox_select_all').on('ifChanged',function() {
            var $this = $(this);
            $mailbox.find('[data-md-icheck]').each(function() {
                $this.is(':checked')
                    ?
                    $(this).iCheck('check')
                    :
                    $(this).iCheck('uncheck');
            })
        });
    },
    // show/hide single message
    toggle_message: function() {

        $mailbox.on('click', '.md-card-list ul > li', function(e) {

            if ( !$(e.target).closest('.md-card-list-item-menu').length && !$(e.target).closest('.md-card-list-item-select').length ) {

                var $this = $(this);

                if (!$this.hasClass('item-shown')) {
                    // get height of clicked message
                    var el_min_height = $this.height() + $this.children('.md-card-list-item-content-wrapper').actual("height");

                    // hide opened message
                    $mailbox.find('.item-shown').velocity("reverse", {
                        begin: function (elements) {
                            $(elements).removeClass('item-shown').children('.md-card-list-item-content-wrapper').hide().velocity("reverse");
                        }
                    });

                    // show message
                    $this.velocity({
                        marginTop: 40,
                        marginBottom: 40,
                        marginLeft: -20,
                        marginRight: -20,
                        minHeight: el_min_height
                    }, {
                        duration: 300,
                        easing: easing_swiftOut,
                        begin: function (elements) {
                            $(elements).addClass('item-shown');
                        },
                        complete: function (elements) {
                            // show: message content, reply form
                            $(elements).children('.md-card-list-item-content-wrapper').show().velocity({
                                opacity: 1
                            });

                            // scroll to message
                            var container = $('body'),
                                scrollTo = $(elements);
                            container.animate({
                                scrollTop: scrollTo.offset().top - $page_content.offset().top - 8
                            }, 1000, bez_easing_swiftOut);

                        }
                    });
                }
            }

        });
        // hide message on: outside click, esc button
        $(document).on('click keydown', function(e) {
            if (
                ( !$(e.target).closest('li.item-shown').length ) || e.which == 27
            ) {
                $mailbox.find('.item-shown').velocity("reverse", {
                    begin: function(elements) {
                        $(elements).removeClass('item-shown').children('.md-card-list-item-content-wrapper').hide().velocity("reverse");
                    }
                });
            }
        });
    },
    // compose message
    create_message: function() {

        // callback on modal show
        $('#mailbox_new_message').on('show.uk.modal',function() {
        });

        // file upload (check dropzone.js for more complex component)
        var progressbar = $("#mail_progressbar"),
            bar         = progressbar.find('.uk-progress-bar'),
            settings    = {
                action: './upload/', // upload url
                single: false,
                loadstart: function() {
                    bar.css("width", "0%").text("0%");
                    progressbar.removeClass("uk-hidden uk-progress-danger");
                },
                progress: function(percent) {
                    percent = Math.ceil(percent);
                    bar.css("width", percent+"%").text(percent+"%");
                    if(percent == '100') {
                        setTimeout(function(){
                            //progressbar.addClass("uk-hidden");
                        }, 1500);
                    }
                },
                error: function(event) {
                    progressbar.addClass("uk-progress-danger");
                    bar.css({'width':'100%'}).text('100%');
                },
                abort: function(event) {
                    console.log(event);
                },
                complete: function(response, xhr) {
                    console.log(response);
                }
            };

        var select = UIkit.uploadSelect($("#mail_upload-select"), settings),
            drop   = UIkit.uploadDrop($("#mail_upload-drop"), settings);

    }
};