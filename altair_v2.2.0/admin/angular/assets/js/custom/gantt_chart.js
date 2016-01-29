/*
*  Altair Admin
*  Gantt Chart
*/

/*! jquery.kinetic - v2.1.0 - 2015-06-23 http://the-taylors.org/jquery.kinetic
 * Copyright (c) 2015 Dave Taylor; Licensed MIT */
!function(a){"use strict";var b="kinetic-active";window.requestAnimationFrame||(window.requestAnimationFrame=function(){return window.webkitRequestAnimationFrame||window.mozRequestAnimationFrame||window.oRequestAnimationFrame||window.msRequestAnimationFrame||function(a){window.setTimeout(a,1e3/60)}}()),a.support=a.support||{},a.extend(a.support,{touch:"ontouchend"in document});var c=function(){return!1},d=function(b,c){return this.settings=c,this.el=b,this.$el=a(b),this._initElements(),this};d.DATA_KEY="kinetic",d.DEFAULTS={cursor:"move",decelerate:!0,triggerHardware:!1,threshold:0,y:!0,x:!0,slowdown:.9,maxvelocity:40,throttleFPS:60,movingClass:{up:"kinetic-moving-up",down:"kinetic-moving-down",left:"kinetic-moving-left",right:"kinetic-moving-right"},deceleratingClass:{up:"kinetic-decelerating-up",down:"kinetic-decelerating-down",left:"kinetic-decelerating-left",right:"kinetic-decelerating-right"}},d.prototype.start=function(b){this.settings=a.extend(this.settings,b),this.velocity=b.velocity||this.velocity,this.velocityY=b.velocityY||this.velocityY,this.settings.decelerate=!1,this._move()},d.prototype.end=function(){this.settings.decelerate=!0},d.prototype.stop=function(){this.velocity=0,this.velocityY=0,this.settings.decelerate=!0,a.isFunction(this.settings.stopped)&&this.settings.stopped.call(this)},d.prototype.detach=function(){this._detachListeners(),this.$el.removeClass(b).css("cursor","")},d.prototype.attach=function(){this.$el.hasClass(b)||(this._attachListeners(this.$el),this.$el.addClass(b).css("cursor",this.settings.cursor))},d.prototype._initElements=function(){this.$el.addClass(b),a.extend(this,{xpos:null,prevXPos:!1,ypos:null,prevYPos:!1,mouseDown:!1,throttleTimeout:1e3/this.settings.throttleFPS,lastMove:null,elementFocused:null}),this.velocity=0,this.velocityY=0,a(document).mouseup(a.proxy(this._resetMouse,this)).click(a.proxy(this._resetMouse,this)),this._initEvents(),this.$el.css("cursor",this.settings.cursor),this.settings.triggerHardware&&this.$el.css({"-webkit-transform":"translate3d(0,0,0)","-webkit-perspective":"1000","-webkit-backface-visibility":"hidden"})},d.prototype._initEvents=function(){var b=this;this.settings.events={touchStart:function(a){var c;b._useTarget(a.target,a)&&(c=a.originalEvent.touches[0],b.threshold=b._threshold(a.target,a),b._start(c.clientX,c.clientY),a.stopPropagation())},touchMove:function(a){var c;b.mouseDown&&(c=a.originalEvent.touches[0],b._inputmove(c.clientX,c.clientY),a.preventDefault&&a.preventDefault())},inputDown:function(a){b._useTarget(a.target,a)&&(b.threshold=b._threshold(a.target,a),b._start(a.clientX,a.clientY),b.elementFocused=a.target,"IMG"===a.target.nodeName&&a.preventDefault(),a.stopPropagation())},inputEnd:function(a){b._useTarget(a.target,a)&&(b._end(),b.elementFocused=null,a.preventDefault&&a.preventDefault())},inputMove:function(a){b.mouseDown&&(b._inputmove(a.clientX,a.clientY),a.preventDefault&&a.preventDefault())},scroll:function(c){a.isFunction(b.settings.moved)&&b.settings.moved.call(b,b.settings),c.preventDefault&&c.preventDefault()},inputClick:function(a){return Math.abs(b.velocity)>0?(a.preventDefault(),!1):void 0},dragStart:function(a){return b._useTarget(a.target,a)&&b.elementFocused?!1:void 0}},this._attachListeners(this.$el,this.settings)},d.prototype._inputmove=function(b,c){{var d=this.$el;this.el}if((!this.lastMove||new Date>new Date(this.lastMove.getTime()+this.throttleTimeout))&&(this.lastMove=new Date,this.mouseDown&&(this.xpos||this.ypos))){var e=b-this.xpos,f=c-this.ypos;if(this.threshold>0){var g=Math.sqrt(e*e+f*f);if(this.threshold>g)return;this.threshold=0}this.elementFocused&&(a(this.elementFocused).blur(),this.elementFocused=null,d.focus()),this.settings.decelerate=!1,this.velocity=this.velocityY=0;var h=this.scrollLeft(),i=this.scrollTop();this.scrollLeft(this.settings.x?h-e:h),this.scrollTop(this.settings.y?i-f:i),this.prevXPos=this.xpos,this.prevYPos=this.ypos,this.xpos=b,this.ypos=c,this._calculateVelocities(),this._setMoveClasses(this.settings.movingClass),a.isFunction(this.settings.moved)&&this.settings.moved.call(this,this.settings)}},d.prototype._calculateVelocities=function(){this.velocity=this._capVelocity(this.prevXPos-this.xpos,this.settings.maxvelocity),this.velocityY=this._capVelocity(this.prevYPos-this.ypos,this.settings.maxvelocity)},d.prototype._end=function(){this.xpos&&this.prevXPos&&this.settings.decelerate===!1&&(this.settings.decelerate=!0,this._calculateVelocities(),this.xpos=this.prevXPos=this.mouseDown=!1,this._move())},d.prototype._useTarget=function(b,c){return a.isFunction(this.settings.filterTarget)?this.settings.filterTarget.call(this,b,c)!==!1:!0},d.prototype._threshold=function(b,c){return a.isFunction(this.settings.threshold)?this.settings.threshold.call(this,b,c):this.settings.threshold},d.prototype._start=function(a,b){this.mouseDown=!0,this.velocity=this.prevXPos=0,this.velocityY=this.prevYPos=0,this.xpos=a,this.ypos=b},d.prototype._resetMouse=function(){this.xpos=!1,this.ypos=!1,this.mouseDown=!1},d.prototype._decelerateVelocity=function(a,b){return 0===Math.floor(Math.abs(a))?0:a*b},d.prototype._capVelocity=function(a,b){var c=a;return a>0?a>b&&(c=b):0-b>a&&(c=0-b),c},d.prototype._setMoveClasses=function(a){var b=this.settings,c=this.$el;c.removeClass(b.movingClass.up).removeClass(b.movingClass.down).removeClass(b.movingClass.left).removeClass(b.movingClass.right).removeClass(b.deceleratingClass.up).removeClass(b.deceleratingClass.down).removeClass(b.deceleratingClass.left).removeClass(b.deceleratingClass.right),this.velocity>0&&c.addClass(a.right),this.velocity<0&&c.addClass(a.left),this.velocityY>0&&c.addClass(a.down),this.velocityY<0&&c.addClass(a.up)},d.prototype._move=function(){var b=(this.$el,this.el),c=this,d=c.settings;d.x&&b.scrollWidth>0?(this.scrollLeft(this.scrollLeft()+this.velocity),Math.abs(this.velocity)>0&&(this.velocity=d.decelerate?c._decelerateVelocity(this.velocity,d.slowdown):this.velocity)):this.velocity=0,d.y&&b.scrollHeight>0?(this.scrollTop(this.scrollTop()+this.velocityY),Math.abs(this.velocityY)>0&&(this.velocityY=d.decelerate?c._decelerateVelocity(this.velocityY,d.slowdown):this.velocityY)):this.velocityY=0,c._setMoveClasses(d.deceleratingClass),a.isFunction(d.moved)&&d.moved.call(this,d),Math.abs(this.velocity)>0||Math.abs(this.velocityY)>0?this.moving||(this.moving=!0,window.requestAnimationFrame(function(){c.moving=!1,c._move()})):c.stop()},d.prototype._getScroller=function(){var b=this.$el;return(this.$el.is("body")||this.$el.is("html"))&&(b=a(window)),b},d.prototype.scrollLeft=function(a){var b=this._getScroller();return"number"!=typeof a?b.scrollLeft():(b.scrollLeft(a),void(this.settings.scrollLeft=a))},d.prototype.scrollTop=function(a){var b=this._getScroller();return"number"!=typeof a?b.scrollTop():(b.scrollTop(a),void(this.settings.scrollTop=a))},d.prototype._attachListeners=function(){var b=this.$el,d=this.settings;a.support.touch&&b.bind("touchstart",d.events.touchStart).bind("touchend",d.events.inputEnd).bind("touchmove",d.events.touchMove),b.mousedown(d.events.inputDown).mouseup(d.events.inputEnd).mousemove(d.events.inputMove),b.click(d.events.inputClick).scroll(d.events.scroll).bind("selectstart",c).bind("dragstart",d.events.dragStart)},d.prototype._detachListeners=function(){var b=this.$el,d=this.settings;a.support.touch&&b.unbind("touchstart",d.events.touchStart).unbind("touchend",d.events.inputEnd).unbind("touchmove",d.events.touchMove),b.unbind("mousedown",d.events.inputDown).unbind("mouseup",d.events.inputEnd).unbind("mousemove",d.events.inputMove),b.unbind("click",d.events.inputClick).unbind("scroll",d.events.scroll).unbind("selectstart",c).unbind("dragstart",d.events.dragStart)},a.Kinetic=d,a.fn.kinetic=function(b,c){return this.each(function(){var e=a(this),f=e.data(d.DATA_KEY),g=a.extend({},d.DEFAULTS,e.data(),"object"==typeof b&&b);f||e.data(d.DATA_KEY,f=new d(this,g)),"string"==typeof b&&f[b](c)})}}(window.jQuery||window.Zepto);

/*
 jQuery.ganttView v.0.8.8
 Copyright (c) 2010 JC Grubbs - jc.grubbs@devmynd.com
 MIT License Applies
 */


(function (jQuery) {

    jQuery.fn.ganttView = function () {

        var args = Array.prototype.slice.call(arguments);

        if (args.length == 1 && typeof(args[0]) == "object") {
            build.call(this, args[0]);
        }

        if (args.length == 2 && typeof(args[0]) == "string") {
            handleMethod.call(this, args[0], args[1]);
        }
    };

    function build(options) {

        var els = this;
        var defaults = {
            showWeekends: true,
            toggleProjects: true,
            cellWidth: 20,
            slideWidth: 400,
            kineticScroll: true,
            behavior: {
                clickable: true,
                draggable: true,
                resizable: true
            }
        };

        var opts = jQuery.extend(true, defaults, options);

        if (opts.data) {
            build();
        } else if (opts.dataUrl) {
            jQuery.getJSON(opts.dataUrl, function (data) { opts.data = data; build(); });
        }

        function build() {

            var minDays = Math.floor((opts.slideWidth / opts.cellWidth)  + 5);
            var startEnd = DateUtils.getBoundaryDatesFromData(opts.data, minDays);
            opts.start = startEnd[0];
            opts.end = startEnd[1];

            els.each(function () {

                var container = jQuery(this);
                var div = jQuery("<div>", { "class": "ganttview" });
                new Chart(div, opts).render();
                container.append(div);

                var w = jQuery("div.ganttview-vtheader", container).outerWidth() +
                    jQuery("div.ganttview-slide-container", container).outerWidth();

                new Behavior(container, opts).apply();
            });
        }
    }

    function handleMethod(method, value) {

        if (method == "setSlideWidth") {
            var div = $("div.ganttview", this);
            div.each(function () {
                var vtWidth = $("div.ganttview-vtheader", div).outerWidth();
                $(div).width(vtWidth + value + 1);
                $("div.ganttview-slide-container", this).width(value);
            });
        }
    }

    var Chart = function(div, opts) {

        function render() {
            addVtHeader(div, opts.data);

            var slideDiv = jQuery("<div>", {
                "class": "ganttview-slide-container"
            });

            dates = getDates(opts.start, opts.end);
            addHzHeader(slideDiv, dates, opts.cellWidth, opts.showWeekends);
            addGrid(slideDiv, opts.data, dates, opts.cellWidth, opts.showWeekends);
            addBlockContainers(slideDiv, opts.data);
            addBlocks(slideDiv, opts.data, opts.cellWidth, opts.start);
            div.append(slideDiv);
            applyLastClass(div.parent());
            if(opts.toggleProjects) {
                toggleProjects(div);
            }
            if(opts.kineticScroll && !Modernizr.touch) {
                kineticScroll(div);
            }
        }

        // Creates a 3 dimensional array [year][month][day] of every day
        // between the given start and end dates
        function getDates(start, end) {
            var dates = [];
            dates[start.getFullYear()] = [];
            dates[start.getFullYear()][start.getMonth()] = [start];
            var last = start;
            while (moment(end).isAfter(last)) {
                var next = moment(last).add(1,'days')._d;
                if (!dates[next.getFullYear()]) { dates[next.getFullYear()] = []; }
                if (!dates[next.getFullYear()][next.getMonth()]) {
                    dates[next.getFullYear()][next.getMonth()] = [];
                }
                dates[next.getFullYear()][next.getMonth()].push(next);
                last = next;
            }
            return dates;
        }

        function addVtHeader(div, data) {
            var headerDiv = jQuery("<div>", { "class": "ganttview-vtheader" });
            for (var i = 0; i < data.length; i++) {
                var itemDiv = jQuery("<div>", { "class": "ganttview-vtheader-group" });
                itemDiv.append(jQuery("<div>", {
                    "class": "ganttview-vtheader-group-name",
                    "id": "groupId_" + i
                }).append(data[i].name).append('<span/>'));
                var seriesDiv = jQuery("<div>", { "class": "ganttview-vtheader-series" });
                for (var j = 0; j < data[i].series.length; j++) {
                    seriesDiv
                        .append(jQuery("<div>", { "class": "ganttview-vtheader-series-row" })
                        .append(
                            function() {
                                var avatar =
                                    (data[i].series[j].user_avatar)
                                    ?   "<div class='series-user' title='"+ data[i].series[j].user_name +"'><img src='"+ data[i].series[j].user_avatar +"' /></div>"
                                    :   "";

                                return avatar +
                                    "<div class='series-content'>" +
                                        data[i].series[j].name +
                                        "<span class='series-date'>" +
                                            moment(data[i].series[j].start,"MM/DD/YYYY").format('D MMM') +
                                            " - " +
                                    moment(data[i].series[j].end,"MM/DD/YYYY").format('D MMM') +
                                        "</span>" +
                                    "</div>"
                            }
                        )
                    );
                }
                itemDiv.append(seriesDiv);
                headerDiv.append(itemDiv);
            }
            div.append(headerDiv);
        }

        function addHzHeader(div, dates, cellWidth, showWeekends) {
            var headerDiv = jQuery("<div>", { "class": "ganttview-hzheader" });
            var monthsDiv = jQuery("<div>", { "class": "ganttview-hzheader-months" });
            var daysDiv = jQuery("<div>", { "class": "ganttview-hzheader-days" });
            var totalW = 0;
            for (var y in dates) {
                for (var m in dates[y]) {
                    var w = dates[y][m].length * cellWidth;
                    totalW = totalW + w;
                    monthsDiv.append(jQuery("<div>", {
                        "class": "ganttview-hzheader-month",
                        "css": { "width": (w - 1) + "px" }
                    }).append(moment(parseInt(m)+1,"M").format('MMMM') + " " + y));
                    for (var d in dates[y][m]) {
                        var headerDay = jQuery("<div>", { "class": "ganttview-hzheader-day" });
                        if (DateUtils.isWeekend(dates[y][m][d]) && showWeekends) {
                            headerDay.addClass("ganttview-weekend");
                        }
                        daysDiv.append( headerDay.append(dates[y][m][d].getDate()) );
                    }
                }
            }
            monthsDiv.css("width", totalW + "px");
            daysDiv.css("width", totalW + "px");
            headerDiv.append(monthsDiv).append(daysDiv);
            div.append(headerDiv);
        }

        function addGrid(div, data, dates, cellWidth, showWeekends) {
            var gridDiv = jQuery("<div>", { "class": "ganttview-grid" });
            var rowDiv = jQuery("<div>", { "class": "ganttview-grid-row" });
            for (var y in dates) {
                for (var m in dates[y]) {
                    for (var d in dates[y][m]) {
                        var cellDiv = jQuery("<div>", { "class": "ganttview-grid-row-cell" });
                        if (DateUtils.isWeekend(dates[y][m][d]) && showWeekends) {
                            cellDiv.addClass("ganttview-weekend");
                        }
                        rowDiv.append(cellDiv);
                    }
                }
            }
            var w = jQuery("div.ganttview-grid-row-cell", rowDiv).length * cellWidth;
            rowDiv.css("width", w + "px");
            gridDiv.css("width", w + "px");
            for (var i = 0; i < data.length; i++) {
                gridDiv.append(jQuery("<div>", {
                    "class": "ganttview-grid-spacer",
                    "data-click-target": "groupId_" + i
                }));
                for (var j = 0; j < data[i].series.length; j++) {
                    gridDiv.append(rowDiv.clone().addClass('groupId_' + i));
                }
            }
            div.append(gridDiv);
        }

        function addBlockContainers(div, data) {
            var blocksDiv = jQuery("<div>", {
                "class": "ganttview-blocks",
                "css": {
                    width: $(div).width()
                }
            });
            for (var i = 0; i < data.length; i++) {
                blocksDiv.append(jQuery("<div>", { "class": "ganttview-block-spacer" }));
                for (var j = 0; j < data[i].series.length; j++) {
                    blocksDiv.append(jQuery("<div>", {
                        "class": "ganttview-block-container groupId_" + i

                    }));
                }
            }
            div.append(blocksDiv);
        }

        function addBlocks(div, data, cellWidth, start) {
            var rows = jQuery("div.ganttview-blocks div.ganttview-block-container", div);
            var rowIdx = 0;
            for (var i = 0; i < data.length; i++) {
                for (var j = 0; j < data[i].series.length; j++) {
                    var series = data[i].series[j];
                    var size = DateUtils.daysBetween(series.start, series.end) + 1;
                    var offset = DateUtils.daysBetween(start, series.start);
                    var $series_name = (series.name).replace(/(<([^>]+)>)/ig," ");
                    var block = jQuery("<div>", {
                        "class": "ganttview-block",
                        "title": $series_name,
                        "css": {
                            "width": ((size * cellWidth) - 9) + "px",
                            "margin-left": ((offset * cellWidth) + 3) + "px"
                        }
                    });
                    addBlockData(block, data[i], series);
                    if (data[i].series[j].color) {
                        block.css("background-color", data[i].series[j].color);
                    }
                    block.append(jQuery("<div>", { "class": "ganttview-block-text" }).text( moment.duration(size,'days').humanize() ));
                    jQuery(rows[rowIdx]).append(block);
                    rowIdx++;
                }
            }
        }

        function addBlockData(block, data, series) {
            // This allows custom attributes to be added to the series data objects
            // and makes them available to the 'data' argument of click, resize, and drag handlers
            var blockData = { id: data.id, name: data.name };
            jQuery.extend(blockData, series);
            block.data("block-data", blockData);
        }

        function applyLastClass(div) {
            jQuery("div.ganttview-grid-row div.ganttview-grid-row-cell:last-child", div).addClass("last");
            jQuery("div.ganttview-hzheader-days div.ganttview-hzheader-day:last-child", div).addClass("last");
            jQuery("div.ganttview-hzheader-months div.ganttview-hzheader-month:last-child", div).addClass("last");
        }

        function toggleProjects(div) {

            $('div.ganttview-vtheader-group-name',div).addClass('toggle_enabled').on('click', function() {
                $thisId = $(this).attr('id');
                if(!$(this).hasClass('projectHidden')) {
                    $(this)
                        .addClass('projectHidden')
                        .next('div')
                        .children()
                        .velocity("slideUp",{
                            duration: 280,
                            easing: easing_swiftOut
                        });

                    $('.ganttview-block-container.'+$thisId).hide();

                    $('.ganttview-grid-row.'+$thisId)
                        .velocity("slideUp",{
                            duration: 280,
                            easing: easing_swiftOut
                        });

                } else {
                    $(this)
                        .removeClass('projectHidden')
                        .next('div')
                        .children()
                        .velocity("slideDown",{
                            duration: 280,
                            easing: easing_swiftOut
                        });

                    $('.ganttview-block-container.'+$thisId).show();

                    $('.ganttview-grid-row.'+$thisId)
                        .velocity("slideDown",{
                            duration: 280,
                            easing: easing_swiftOut
                        });

                }
            });

            $('div.ganttview-grid-spacer',div).on('click', function() {
                $('#'+$(this).attr('data-click-target')).click()
            });

        }

        function kineticScroll(div) {
            var container = jQuery("div.ganttview-slide-container", div);
            $(container).kinetic({
                y: false,
                filterTarget: function(target, e){
                    return !($(target).closest(".ganttview-block").length || $(target).closest(".ganttview-grid-spacer").length);
                }
            });
        }

        return {
            render: render
        };
    };

    var Behavior = function (div, opts) {

        function apply() {

            if (opts.behavior.clickable) {
                bindBlockClick(div, opts.behavior.onClick);
            }

            if (opts.behavior.resizable) {
                bindBlockResize(div, opts.cellWidth, opts.start, opts.behavior.onResize);
            }

            if (opts.behavior.draggable) {
                bindBlockDrag(div, opts.cellWidth, opts.start, opts.behavior.onDrag);
            }
        }

        function bindBlockClick(div, callback) {
            jQuery("div.ganttview-block", div).on("click", function () {
                if (callback) { callback(jQuery(this).data("block-data")); }
            });
        }

        function bindBlockResize(div, cellWidth, startDate, callback) {
            jQuery("div.ganttview-block", div).resizable({
                grid: cellWidth,
                handles: "e,w",
                stop: function () {
                    var block = jQuery(this);
                    updateDataAndPosition(div, block, cellWidth, startDate);
                    if (callback) { callback(block.data("block-data")); }
                }
            });
        }

        function bindBlockDrag(div, cellWidth, startDate, callback) {
            jQuery("div.ganttview-block", div).draggable({
                axis: "x",
                grid: [cellWidth, cellWidth],
                stop: function () {
                    var block = jQuery(this);
                    updateDataAndPosition(div, block, cellWidth, startDate);
                    if (callback) { callback(block.data("block-data")); }
                }
            });
        }

        function updateDataAndPosition(div, block, cellWidth, startDate) {
            var container = jQuery("div.ganttview-slide-container", div);
            var scroll = container.scrollLeft();
            var offset = block.offset().left - container.offset().left - 1 + scroll;

            // Set new start date
            var daysFromStart = Math.round(offset / cellWidth);
            var newStart = moment(startDate).add(daysFromStart,'days');
            block.data("block-data").start = newStart;

            // Set new end date
            var width = block.outerWidth();
            var numberOfDays = Math.round(width / cellWidth) - 1;
            block.data("block-data").end = moment(newStart).add(numberOfDays,'days');
            jQuery("div.ganttview-block-text", block).text( moment.duration(numberOfDays+1,'days').humanize());

            // Remove top and left properties to avoid incorrect block positioning,
            // set position to relative to keep blocks relative to scrollbar when scrolling
            block.css("top", "").css("left", "")
                .css("position", "relative").css("margin-left", offset + "px");
        }

        return {
            apply: apply
        };
    };

    var DateUtils = {

        daysBetween: function (start, end) {
            if (!start || !end) { return 0; }
            start = Date.parse(start); end = Date.parse(end);
            if (moment(start)._d.getYear() == 1901 || moment(end)._d.getYear() == 8099) { return 0; }
            return moment(end).diff(moment(start),'days');
        },

        isWeekend: function (date) {
            return date.getDay() % 6 == 0;
        },

        getBoundaryDatesFromData: function (data, minDays) {
            var minStart = new Date(); maxEnd = new Date();
            for (var i = 0; i < data.length; i++) {
                for (var j = 0; j < data[i].series.length; j++) {
                    var start = Date.parse(data[i].series[j].start);
                    var end = Date.parse(data[i].series[j].end);
                    if (i == 0 && j == 0) { minStart = start; maxEnd = end; }
                    if (moment(minStart).isAfter(start)) { minStart = start; }
                    if (moment(maxEnd).isBefore(end)) { maxEnd = end; }
                }
            }

            // Insure that the width of the chart is at least the slide width to avoid empty
            // whitespace to the right of the grid
            if (moment(maxEnd).diff(minStart,'days') < minDays) {
                maxEnd = moment(minStart).add(minDays, 'days');
            }

            return [moment(minStart)._d, moment(maxEnd)._d];
        }
    };

})(jQuery);
