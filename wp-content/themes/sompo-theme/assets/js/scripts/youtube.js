$=jQuery;

if (!window['YT']) {var YT = {loading: 0,loaded: 0};}if (!window['YTConfig']) {var YTConfig = {'host': 'https://youtube.com'};}if (!YT.loading) {YT.loading = 1;(function(){var l = [];YT.ready = function(f) {if (YT.loaded) {f();} else {l.push(f);}};window.onYTReady = function() {YT.loaded = 1;for (var i = 0; i < l.length; i++) {try {l[i]();} catch (e) {}}};YT.setConfig = function(c) {for (var k in c) {if (c.hasOwnProperty(k)) {YTConfig[k] = c[k];}}};var a = document.createElement('script');a.type = 'text/javascript';a.id = 'www-widgetapi-script';a.src = 'https://s.ytimg.com/yts/jsbin/www-widgetapi-vflN2g023/www-widgetapi.js';a.async = true;var c = document.currentScript;if (c) {var n = c.nonce || c.getAttribute('nonce');if (n) {a.setAttribute('nonce', n);}}var b = document.getElementsByTagName('footer')[0];/*b.parentNode.insertBefore(a, b);*/a.defer = true;a.async = true;insertAfter(a,b)})();}

// Load the IFrame Player API code asynchronously.
var tag = document.createElement('script');
tag.src = "https://www.youtube.com/player_api";
tag.defer = true;
tag.async = true;
var firstScriptTag = document.getElementsByTagName('footer')[0];
//firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
//firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
insertAfter(tag, firstScriptTag);

// Replace the 'ytplayer' element with an <iframe> and
// YouTube player after the API code downloads.
var player;
var players =[];
function onYouTubePlayerAPIReady() {
    $('.youtube-player').each(function( index ) {
        var videoPlayerId = $(this).attr('data-id');
        var videoHeight = $(this).attr('data-height');
        var videoWidth = $(this).attr('data-width');
        player = new YT.Player(this, {
            height: videoHeight,
            width: videoWidth,
            videoId: videoPlayerId,
            
            playerVars: {
                autoplay: 0, autohide: 1, modestbranding: 1, rel: 0, showinfo: 0, controls: 0, disablekb: 0, enablejsapi: 1, iv_load_policy: 3, loop: 1, origin: window.location.origin,
            },
            events: {
                'onReady': onPlayerReady,
                'onStateChange': onPlayerStateChange
            }
        });
        players[index] = player;

    });


    
}
function onPlayerReady(event) {
    //event.target.mute(); 
    //event.target.playVideo();
     

    
}
function onPlayerStateChange(event) {
    //console.log(event.data);
   if(event.data == YT.PlayerState.PAUSED){
        $('.imagem-capa').fadeIn();       
        
    }else if(event.data == YT.PlayerState.PLAYING){
        $('.imagem-capa').fadeOut();
        
    }
}

// if($(window).width() < 993 && $('#home').length > 0){
//     $(document).on('tap click', function(){
//         //player.playVideo();
//         //console.log('play');
//     });
// }
// $('#voltar').on('click', function(e){
    
//     e.preventDefault();
//     player.seekTo(player.getCurrentTime() - 10);
// });
// $('#avancar').on('click', function(e){
    
//     e.preventDefault();
//     player.seekTo(player.getCurrentTime() + 10);
// });
$('#video .imagem-capa').on('click', function(){
    
    player.playVideo();

    


});



function insertAfter(newNode, existingNode) {
    existingNode.parentNode.insertBefore(newNode, existingNode.nextSibling);
}