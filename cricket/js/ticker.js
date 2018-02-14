(function($) {
       
    $.fn.textWidth = function(){
            return $(this).width();
        };
           $.fn.textWidthTrue = function(){
  var html_org = $(this).html();
  var html_calc = '<span>' + html_org + '</span>';
  $(this).html(html_calc);
  var width = $(this).find('span:first').width();
  $(this).html(html_org);
  return width;
}; 

        $.fn.marquee = function(args) {
            var that = $(this);
            var $textWidth = that.textWidth(),
                offset = that.width(),
                width = offset,
                css = {
                    'text-indent' : that.css('text-indent'),
                    'overflow' : that.css('overflow'), 
                    'white-space' : that.css('white-space')
                },
                marqueeCss = {
                    'text-indent' : width,
                    'overflow' : 'hidden',
                    'white-space' : 'nowrap'
                },
                args = $.extend(true, { count: -1, speed: 1e1, leftToRight: false }, args),
                i = 0,
                stop = $textWidth*-1,
                dfd = $.Deferred();
            function go() {
                if (that.data('isStopped') != 1)
                {
                if(!that.length) return dfd.reject();
                if(width == stop) {
                    i++;
                    if(i == args.count) {
                        that.css(css);
                        return dfd.resolve();
                    }
                    if(args.leftToRight) {
                        width = $textWidth*-1;
                    } else {
                        width = offset;
                    }
                }
                that.css('text-indent', width + 'px');
                if(args.leftToRight) {
                    width++;
                } else {
                    width--;
                }
            }
                
                setTimeout(go, 10);
            };
            if(args.leftToRight) {
                width = $textWidth*-1;
                width++;
                stop = offset;
            } else {
                width--;            
            }
            that.css(marqueeCss);
            that.data('isStopped', 0);
            that.bind('mouseover', function() { $(this).data('isStopped', 1); }).bind('mouseout', function() { $(this).data('isStopped', 0); });
            go();
            return dfd.promise();
        };        
    })(jQuery);
        $('h1').marquee();
$('#ticker').marquee();

$('#ticker').find('.event').each(function(i){
   $(this).width($(this).textWidthTrue());
});
