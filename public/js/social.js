/**
 * Created by georg on 5/12/2016.
 */
$(".share-btn-facebook").on('click', function(){
    console.log(this);
    var message = $(this).data('message');
    FB.ui({
        method: 'share',
        href: 'https://getlanternapp.co',
        quote: message
    }, function(response){});
});


$('.share-btn-twitter').click(function(event) {
        var message = $(this).data('message');
        var width  = 575,
            height = 400,
            left   = ($(window).width()  - width)  / 2,
            top    = ($(window).height() - height) / 2,
            url    = this.href,
            opts   = 'status=1' +
                ',width='  + width  +
                ',height=' + height +
                ',top='    + top    +
                ',left='   + left;

        window.open(url+'?text='+message, 'twitter', opts);
        return false;
    });