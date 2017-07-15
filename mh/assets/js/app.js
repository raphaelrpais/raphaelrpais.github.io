$(function() {
 
    //Set up instafeed
    var feed = new Instafeed({
        clientId: '15562b546cae42058a5f3ebc32809d5c',
        accessToken:'1353146587.1677ed0.b54b29d95efd4136a174e7c2a88d35de',
        target: 'instafeed',
        get: 'user',
        userId: '1353146587',
        sortBy: 'most-recent',
        links: true,
        limit: 9,
        resolution: 'standard_resolution',
        template: '<div class="portfolio identity" data-cat="identity" style="display: inline-block;  opacity: 1;"><div class="portfolio-wrapper"><a href="{{link}}" target="_blank"><img class="insta_gallery" src="{{image}}"></a></div></div>'
    });
    feed.run();
 
});