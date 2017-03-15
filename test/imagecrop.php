<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
(function($) {
    $.fn.imageResize = function(options) {

        var that = this;
        var settings = {
            width: 150,
            height: 150
        };
        options = $.extend(settings, options);

        if (!that.is('img')) {
            return;
        }

        return that.each(function() {

            var maxWidth = options.width;
            var maxHeight = options.height;
            var ratio = 0;
            var width = $(that).width();
            var height = $(that).height();

            if (width > maxWidth) {
                ratio = maxWidth / width;
                $(that).css('width', maxWidth);
                $(that).css('height', height * ratio);

            }

            if (height > maxHeight) {
                ratio = maxHeight / height;
                $(that).css('height', maxHeight);
                $(that).css('width', width * ratio);

            }

        });

    };
})(jQuery);


$('img', '#original').click(function() {
    $(this).imageResize();
});
</script>
 

</head>
<body>
	<div id="original">
	<img src="https://lh3.googleusercontent.com/-I_jvkhAtzlM/Tk6TfaPnypI/AAAAAAAAAqw/ddMw0tBE42c/s600/typography-2.jpg" alt="" />
	</div>
</body>
</html>










