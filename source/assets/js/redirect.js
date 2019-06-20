// document.addEventListener( 'wpcf7mailsent', function( event ) {
//     location = 'http://example.com/';
// }, false );

document.addEventListener( 'wpcf7mailsent', function( event ) {
    if(event.detail.contactFormId == '840') {
        location = 'http://speak-like-a-boss.tilda.ws/video';
    } else {
        //location = 'http://irinapalko.com/stranica-blagodarnosti/';
        window.open( 'http://irinapalko.com/stranica-blagodarnosti/' , '_blank' );
    }
}, false );