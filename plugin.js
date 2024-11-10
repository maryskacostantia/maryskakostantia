(function($) {
    $.fn.changeBgColor = function(options) {
        var settings = $.extend({
            background: 'red'
        }, options);

        return this.each(function() {
            $(this).css('background-color', settings.background);
        });
    };
})(jQuery);
