$(document).ready(function() {

    /////////////////////////////////////
    //        CAROUSEL SWIPE           //
    /////////////////////////////////////   
    $("#dragonic-carousel").swiperight(function() {
    $(this).carousel('prev');
    });
    $("#dragonic-carousel").swipeleft(function() {
    $(this).carousel('next');
    });

    //////////////////////////////////////
    //          SNIPPETS                //
    //////////////////////////////////////
    $(function() {
    $('a[href^="#"]').on('click',function (e) {
    e.preventDefault();

        var target = this.hash;
        var $target = $(target);

    $('html, body').stop().animate({
        'scrollTop': $target.offset().top
    }, 900, 'swing');
    });
    });

    /////////////////////////////////////
    //      MODAL WINDOW GALLERY       //
    /////////////////////////////////////
    $('.gallery-item').on('click', function() {
        var label = $('#myModalLabel');
        var img = $('#showcase-img');
        var price = $('#modal-price-tag');
        var body = $('#modalBody');
        var dataModel = $(this).find('img');
        var modelfeats = $('#model-feats').find('li');

        label.text('Dragonic: ' + $(this).find('.item-name-caption').text());
        price.text($(this).find('.item-price-caption').text());
        img.attr('src', dataModel.attr('src'));
    });

    $('div.thumbnail-50').on('click', function(){
        $('img.img-thumbnail').addClass('thumb-50');
        $('ul#model-feats').addClass('hide');
    });

    $('article.thumbnail-100').on('click', function(){
        $('img.img-thumbnail').removeClass('thumb-50');
        $('ul#model-feats').removeClass('hide');
    });

    /////////////////////////////////////
    //      MODAL WINDOW FEATURES      //
    /////////////////////////////////////
    $('.features-item').on('click', function() {
        var label = $('#myModalLabel');
        var img = $('#showcase-img');
        var price = $('#modal-price-tag');
        var body = $('#modalBody');
        var dataModel = $(this).find('img');
        var modelfeats = $('#model-feats').find('li');

        label.text('Hero Name: ' + $(this).find('.item-name-caption').text());
        price.text($(this).find('.item-price-caption').text());
        img.attr('src', dataModel.attr('src'));


        $(modelfeats[0]).text('Strength: ' + dataModel.data('strength')); //Strength
        $(modelfeats[1]).text('Dexterity: ' + dataModel.data('dexterity')); //Dexterity
        $(modelfeats[2]).text('Agility: ' + dataModel.data('agility')); //Agility
        $(modelfeats[3]).text('Willpower: ' + dataModel.data('willpower')); //Willpower
        $(modelfeats[4]).text('Intelligence: ' + dataModel.data('intelligence')); //Intelligence
    });

    $('.shop-modal-hide').on('click', function(){
        $('#shop-modal').modal('hide');
    }); 

  


    var styles = [{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#ffcc88"}]},{"featureType":"administrative","elementType":"labels.text.stroke","stylers":[{"color":"#331111"}]},{"featureType":"administrative.country","elementType":"geometry","stylers":[{"visibility":"on"}]},{"featureType":"administrative.province","elementType":"geometry.stroke","stylers":[{"visibility":"off"}]},{"featureType":"administrative.province","elementType":"labels.text","stylers":[{"weight":"0.01"},{"saturation":"0"},{"color":"#ffcc88"},{"visibility":"simplified"}]},{"featureType":"administrative.locality","elementType":"labels.text","stylers":[{"visibility":"on"}]},{"featureType":"administrative.locality","elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"weight":"2.00"}]},{"featureType":"administrative.neighborhood","elementType":"labels.text","stylers":[{"visibility":"on"}]},{"featureType":"administrative.land_parcel","elementType":"labels.text","stylers":[{"visibility":"off"}]},{"featureType":"landscape.man_made","elementType":"all","stylers":[{"color":"#331111"},{"gamma":1.57}]},{"featureType":"landscape.man_made","elementType":"labels.text","stylers":[{"visibility":"on"}]},{"featureType":"landscape.man_made","elementType":"labels.text.fill","stylers":[{"visibility":"on"}]},{"featureType":"landscape.natural","elementType":"all","stylers":[{"color":"#331111"},{"gamma":1.39}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#331111"},{"gamma":1.22}]},{"featureType":"poi","elementType":"labels.text.fill","stylers":[{"color":"#ffcc88"},{"visibility":"on"}]},{"featureType":"poi","elementType":"labels.text.stroke","stylers":[{"color":"#331111"},{"weight":2.6}]},{"featureType":"poi","elementType":"labels.icon","stylers":[{"visibility":"simplified"},{"lightness":-100},{"gamma":1},{"saturation":-72},{"weight":0.1}]},{"featureType":"road","elementType":"geometry","stylers":[{"color":"#331111"}]},{"featureType":"road","elementType":"labels.text.fill","stylers":[{"color":"#ffcc88"}]},{"featureType":"road","elementType":"labels.text.stroke","stylers":[{"color":"#331111"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#331111"}]},{"featureType":"transit.station.airport","elementType":"labels.text.fill","stylers":[{"color":"#331111"},{"gamma":"2"}]},{"featureType":"transit.station.airport","elementType":"labels.text.stroke","stylers":[{"color":"#331111"}]},{"featureType":"transit.station.airport","elementType":"labels.icon","stylers":[{"visibility":"on"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#331111"}]},{"featureType":"water","elementType":"labels.text.fill","stylers":[{"color":"#331111"},{"gamma":"1.50"}]},{"featureType":"water","elementType":"labels.text.stroke","stylers":[{"weight":"2"}]}];



});

    /* Light YouTube Embeds by @labnol */
    /* Web: http://labnol.org/?p=27941 */
    document.addEventListener("DOMContentLoaded",
        function() {
            var div, n,
                v = document.getElementsByClassName("youtube-player");
            for (n = 0; n < v.length; n++) {
                div = document.createElement("div");
                div.setAttribute("data-id", v[n].dataset.id);
                div.innerHTML = labnolThumb(v[n].dataset.id);
                div.onclick = labnolIframe;
                v[n].appendChild(div);
            }
        });

    function labnolThumb(id) {
        var thumb = '<img src="https://i.ytimg.com/vi/ID/hqdefault.jpg">',
            play = '<div class="play"></div>';
        return thumb.replace("ID", id) + play;
    }

    function labnolIframe() {
        var iframe = document.createElement("iframe");
        var embed = "https://www.youtube.com/embed/ID?autoplay=1";
        iframe.setAttribute("src", embed.replace("ID", this.dataset.id));
        iframe.setAttribute("frameborder", "0");
        iframe.setAttribute("allowfullscreen", "1");
        this.parentNode.replaceChild(iframe, this);
    }

    /////////////////////////////////////
    //   CHANGE CLASSES RESPONSIVE     //
    /////////////////////////////////////  
$(window).resize(function(){
var width = $(window).width();
if(width >= 300 && width <= 1024){
    $('.item-1, .item-2, .item-3').removeClass('col-sm-3 col-xs-5').addClass('col-sm-5 col-xs-12');
    $('.features-item').removeClass('col-md-3').addClass('col-md-6');
    $('.item-3').removeClass('col-sm-offset-1').addClass('col-sm-offset-3');
    $('.item-2').removeClass('col-xs-offset-2').addClass('col-xs-offset-0');       
}
else{
    $('.item-1, .item-2, .item-3').removeClass('col-sm-5 col-xs-12').addClass('col-sm-3 col-xs-5');
    $('.features-item').removeClass('col-md-6').addClass('col-md-3');
    $('.item-3').removeClass('col-sm-offset-3').addClass('col-sm-offset-1');
    $('.item-2').removeClass('col-xs-offset-0').addClass('col-xs-offset-2');        
}
})
.resize();//trigger the resize event on page load.

    /////////////////////////////////////
    //        STOP PINCH ZOOM          //
    /////////////////////////////////////  
document.addEventListener('gesturestart', function (e) {
    e.preventDefault();
});

const poap_events = ['57278','57279'];

document.getElementById('connect-button').addEventListener('click', event => {
    if (typeof window.ethereum == 'undefined') { 
        alert('You need to install metamask in desktop or browse this web using metamask app from your mobile phone.');
    }
    let account;
    ethereum.request({method: 'eth_requestAccounts'}).then(accounts => {
      account = accounts[0];
      $('#connect-button-text').text('Loading POAPs...');

      //Reset gallery
      for(i=0;i<poap_events.length;i++){
            if(poap_events.includes(poap_events[i])){
                $('#poap-' + poap_events[i] + '-img').attr('img',$('#poap-' + poap_events[i] + '-img').attr('hidden-img'));
                $('#poap-' + poap_events[i] + '-data-target').attr('data-target','#anonymous');
                $('#poap-' + poap_events[i] + '-button').removeClass('button-game-bg-mid');
                $('#poap-' + poap_events[i] + '-button').addClass('button-game-bg-mid-disabled');
                $('#poap-' + poap_events[i] + '-button-text').html('Not achieved');
            }
        }

      $.getJSON('web3/collected.php?address='+account,function(data){

        var POAPS = 0;
        try{
            for(i=0;i<Object.keys(data).length;i++){
                if(poap_events.includes(data[i].eventId)){
                    $('#poap-' + data[i].eventId + '-img').attr('img',$('#poap-' + data[i].eventId + '-img').attr('card-img'));
                    $('#poap-' + data[i].eventId + '-data-target').attr('data-target','#alberto');
                    $('#poap-' + data[i].eventId + '-button').removeClass('button-game-bg-mid-disabled');
                    $('#poap-' + data[i].eventId + '-button').addClass('button-game-bg-mid');
                    $('#poap-' + data[i].eventId + '-button-text').html('Completed&nbsp;&nbsp;|&nbsp;&nbsp;View');
                    POAPS++;
                }
            }  
           }catch(e){}
        if(POAPS == 0){
            $('#poap-message').text('You have not yet met any Web3 Hero. Your quest has just begin!');

        }else{
            $('#poap-message').text('Hey! You have met some characters!, check the gallery.');
        }
        $('#poap-message').show();
        $('#connect-button-text').text('0x(...)' + account.substr(account.length - 7) + ' | update.');
       }).fail(function(){
        $('#connect-button-text').text('Error. Try again.');
       });
    });
});