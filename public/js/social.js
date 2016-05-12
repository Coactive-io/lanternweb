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