<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace pub\fonts;
/**
 * Description of style
 *
 * @author toshiha
 */
class style {
    //put your code here
    
    public function __construct() {
        ?>
<style>
    @font-face {
  font-family: 'icn';
  src:  url('/pub/fonts/fonts/icn.eot?1q16by');
  src:  url('fonts/icn.eot?1q16by#iefix') format('embedded-opentype'),
     
      
    url('pub/fonts/fonts/icn.ttf?1q16by') format('truetype'),
    url('pub/fonts/fonts/icn.woff?1q16by') format('woff'),
    url('pub/fonts/fonts/icn.svg?1q16by#icn') format('svg');
  font-weight: normal;
  font-style: normal;
  font-display: block;
}

.icn {
  /* use !important to prevent issues with browser extensions that change fonts */
  font-family: 'icn' !important;
  speak: none;
  font-style: normal;
  font-weight: normal;
  font-variant: normal;
  text-transform: none;
  line-height: 1;

  /* Better Font Rendering =========== */
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

.icn-times:before {
  content: "\e900";
}
.icn-tick:before {
  content: "\e901";
}
.icn-plus1:before {
  content: "\e902";
}
.icn-minus1:before {
  content: "\e903";
}
.icn-equals:before {
  content: "\e904";
}
.icn-divide:before {
  content: "\e905";
}
.icn-chevron-right:before {
  content: "\e906";
}
.icn-chevron-left:before {
  content: "\e907";
}
.icn-arrow-right-thick:before {
  content: "\e908";
}
.icn-arrow-left-thick:before {
  content: "\e909";
}
.icn-th-small:before {
  content: "\e90a";
}
.icn-th-menu:before {
  content: "\e90b";
}
.icn-th-list:before {
  content: "\e90c";
}
.icn-th-large:before {
  content: "\e90d";
}
.icn-home1:before {
  content: "\e90e";
}
.icn-arrow-forward:before {
  content: "\e90f";
}
.icn-arrow-back:before {
  content: "\e910";
}
.icn-rss1:before {
  content: "\e911";
}
.icn-location1:before {
  content: "\e912";
}
.icn-link1:before {
  content: "\e913";
}
.icn-image1:before {
  content: "\e914";
}
.icn-arrow-up-thick:before {
  content: "\e915";
}
.icn-arrow-down-thick:before {
  content: "\e916";
}
.icn-starburst:before {
  content: "\e917";
}
.icn-starburst-outline:before {
  content: "\e918";
}
.icn-star:before {
  content: "\e919";
}
.icn-flow-children:before {
  content: "\e91a";
}
.icn-export:before {
  content: "\e91b";
}
.icn-delete:before {
  content: "\e91c";
}
.icn-delete-outline:before {
  content: "\e91d";
}
.icn-cloud-storage:before {
  content: "\e91e";
}
.icn-wi-fi:before {
  content: "\e91f";
}
.icn-heart1:before {
  content: "\e920";
}
.icn-flash:before {
  content: "\e921";
}
.icn-cancel:before {
  content: "\e922";
}
.icn-backspace:before {
  content: "\e923";
}
.icn-attachment1:before {
  content: "\e924";
}
.icn-arrow-move:before {
  content: "\e925";
}
.icn-warning1:before {
  content: "\e926";
}
.icn-user1:before {
  content: "\e927";
}
.icn-radar:before {
  content: "\e928";
}
.icn-lock-open:before {
  content: "\e929";
}
.icn-lock-closed:before {
  content: "\e92a";
}
.icn-location-arrow:before {
  content: "\e92b";
}
.icn-info1:before {
  content: "\e92c";
}
.icn-user-delete:before {
  content: "\e92d";
}
.icn-user-add:before {
  content: "\e92e";
}
.icn-media-pause:before {
  content: "\e92f";
}
.icn-group:before {
  content: "\e930";
}
.icn-chart-pie:before {
  content: "\e931";
}
.icn-chart-line:before {
  content: "\e932";
}
.icn-chart-bar:before {
  content: "\e933";
}
.icn-chart-area:before {
  content: "\e934";
}
.icn-video:before {
  content: "\e935";
}
.icn-point-of-interest:before {
  content: "\e936";
}
.icn-infinity:before {
  content: "\e937";
}
.icn-globe:before {
  content: "\e938";
}
.icn-eye1:before {
  content: "\e939";
}
.icn-cog1:before {
  content: "\e93a";
}
.icn-camera1:before {
  content: "\e93b";
}
.icn-upload1:before {
  content: "\e93c";
}
.icn-scissors1:before {
  content: "\e93d";
}
.icn-refresh:before {
  content: "\e93e";
}
.icn-pin:before {
  content: "\e93f";
}
.icn-key1:before {
  content: "\e940";
}
.icn-info-large:before {
  content: "\e941";
}
.icn-eject1:before {
  content: "\e942";
}
.icn-download1:before {
  content: "\e943";
}
.icn-zoom:before {
  content: "\e944";
}
.icn-zoom-out1:before {
  content: "\e945";
}
.icn-zoom-in1:before {
  content: "\e946";
}
.icn-sort-numerically:before {
  content: "\e947";
}
.icn-sort-alphabetically:before {
  content: "\e948";
}
.icn-input-checked:before {
  content: "\e949";
}
.icn-calender:before {
  content: "\e94a";
}
.icn-world:before {
  content: "\e94b";
}
.icn-notes:before {
  content: "\e94c";
}
.icn-code:before {
  content: "\e94d";
}
.icn-arrow-sync:before {
  content: "\e94e";
}
.icn-arrow-shuffle:before {
  content: "\e94f";
}
.icn-arrow-repeat:before {
  content: "\e950";
}
.icn-arrow-minimise:before {
  content: "\e951";
}
.icn-arrow-maximise:before {
  content: "\e952";
}
.icn-arrow-loop:before {
  content: "\e953";
}
.icn-anchor:before {
  content: "\e954";
}
.icn-spanner:before {
  content: "\e955";
}
.icn-puzzle:before {
  content: "\e956";
}
.icn-power1:before {
  content: "\e957";
}
.icn-plane:before {
  content: "\e958";
}
.icn-pi:before {
  content: "\e959";
}
.icn-phone1:before {
  content: "\e95a";
}
.icn-microphone:before {
  content: "\e95b";
}
.icn-media-rewind:before {
  content: "\e95c";
}
.icn-flag1:before {
  content: "\e95d";
}
.icn-adjust-brightness:before {
  content: "\e95e";
}
.icn-waves:before {
  content: "\e95f";
}
.icn-social-twitter:before {
  content: "\e960";
}
.icn-social-facebook:before {
  content: "\e961";
}
.icn-social-dribbble:before {
  content: "\e962";
}
.icn-media-stop:before {
  content: "\e963";
}
.icn-media-record:before {
  content: "\e964";
}
.icn-media-play:before {
  content: "\e965";
}
.icn-media-fast-forward:before {
  content: "\e966";
}
.icn-media-eject:before {
  content: "\e967";
}
.icn-social-vimeo:before {
  content: "\e968";
}
.icn-social-tumbler:before {
  content: "\e969";
}
.icn-social-skype:before {
  content: "\e96a";
}
.icn-social-pinterest:before {
  content: "\e96b";
}
.icn-social-linkedin:before {
  content: "\e96c";
}
.icn-social-last-fm:before {
  content: "\e96d";
}
.icn-social-github:before {
  content: "\e96e";
}
.icn-social-flickr:before {
  content: "\e96f";
}
.icn-at:before {
  content: "\e970";
}
.icn-times-outline:before {
  content: "\e971";
}
.icn-plus-outline:before {
  content: "\e972";
}
.icn-minus-outline:before {
  content: "\e973";
}
.icn-tick-outline:before {
  content: "\e974";
}
.icn-th-large-outline:before {
  content: "\e975";
}
.icn-equals-outline:before {
  content: "\e976";
}
.icn-divide-outline:before {
  content: "\e977";
}
.icn-chevron-right-outline:before {
  content: "\e978";
}
.icn-chevron-left-outline:before {
  content: "\e979";
}
.icn-arrow-right-outline:before {
  content: "\e97a";
}
.icn-arrow-left-outline:before {
  content: "\e97b";
}
.icn-th-small-outline:before {
  content: "\e97c";
}
.icn-th-menu-outline:before {
  content: "\e97d";
}
.icn-th-list-outline:before {
  content: "\e97e";
}
.icn-news:before {
  content: "\e97f";
}
.icn-home-outline:before {
  content: "\e980";
}
.icn-arrow-up-outline:before {
  content: "\e981";
}
.icn-arrow-forward-outline:before {
  content: "\e982";
}
.icn-arrow-down-outline:before {
  content: "\e983";
}
.icn-arrow-back-outline:before {
  content: "\e984";
}
.icn-trash:before {
  content: "\e985";
}
.icn-rss-outline:before {
  content: "\e986";
}
.icn-message:before {
  content: "\e987";
}
.icn-location-outline:before {
  content: "\e988";
}
.icn-link-outline:before {
  content: "\e989";
}
.icn-image-outline:before {
  content: "\e98a";
}
.icn-export-outline:before {
  content: "\e98b";
}
.icn-cross1:before {
  content: "\e98c";
}
.icn-wi-fi-outline:before {
  content: "\e98d";
}
.icn-star-outline:before {
  content: "\e98e";
}
.icn-media-pause-outline:before {
  content: "\e98f";
}
.icn-mail1:before {
  content: "\e990";
}
.icn-heart-outline:before {
  content: "\e991";
}
.icn-flash-outline:before {
  content: "\e992";
}
.icn-cancel-outline:before {
  content: "\e993";
}
.icn-beaker:before {
  content: "\e994";
}
.icn-arrow-move-outline:before {
  content: "\e995";
}
.icn-watch:before {
  content: "\e996";
}
.icn-warning-outline:before {
  content: "\e997";
}
.icn-time:before {
  content: "\e998";
}
.icn-radar-outline:before {
  content: "\e999";
}
.icn-lock-open-outline:before {
  content: "\e99a";
}
.icn-location-arrow-outline:before {
  content: "\e99b";
}
.icn-info-outline:before {
  content: "\e99c";
}
.icn-backspace-outline:before {
  content: "\e99d";
}
.icn-attachment-outline:before {
  content: "\e99e";
}
.icn-user-outline:before {
  content: "\e99f";
}
.icn-user-delete-outline:before {
  content: "\e9a0";
}
.icn-user-add-outline:before {
  content: "\e9a1";
}
.icn-lock-closed-outline:before {
  content: "\e9a2";
}
.icn-group-outline:before {
  content: "\e9a3";
}
.icn-chart-pie-outline:before {
  content: "\e9a4";
}
.icn-chart-line-outline:before {
  content: "\e9a5";
}
.icn-chart-bar-outline:before {
  content: "\e9a6";
}
.icn-chart-area-outline:before {
  content: "\e9a7";
}
.icn-video-outline:before {
  content: "\e9a8";
}
.icn-point-of-interest-outline:before {
  content: "\e9a9";
}
.icn-map1:before {
  content: "\e9aa";
}
.icn-key-outline:before {
  content: "\e9ab";
}
.icn-infinity-outline:before {
  content: "\e9ac";
}
.icn-globe-outline:before {
  content: "\e9ad";
}
.icn-eye-outline:before {
  content: "\e9ae";
}
.icn-cog-outline:before {
  content: "\e9af";
}
.icn-camera-outline:before {
  content: "\e9b0";
}
.icn-upload-outline:before {
  content: "\e9b1";
}
.icn-support:before {
  content: "\e9b2";
}
.icn-scissors-outline:before {
  content: "\e9b3";
}
.icn-refresh-outline:before {
  content: "\e9b4";
}
.icn-info-large-outline:before {
  content: "\e9b5";
}
.icn-eject-outline:before {
  content: "\e9b6";
}
.icn-download-outline:before {
  content: "\e9b7";
}
.icn-battery-mid:before {
  content: "\e9b8";
}
.icn-battery-low:before {
  content: "\e9b9";
}
.icn-battery-high:before {
  content: "\e9ba";
}
.icn-zoom-outline:before {
  content: "\e9bb";
}
.icn-zoom-out-outline:before {
  content: "\e9bc";
}
.icn-zoom-in-outline:before {
  content: "\e9bd";
}
.icn-tag:before {
  content: "\e9be";
}
.icn-tabs-outline:before {
  content: "\e9bf";
}
.icn-pin-outline:before {
  content: "\e9c0";
}
.icn-message-typing:before {
  content: "\e9c1";
}
.icn-directions:before {
  content: "\e9c2";
}
.icn-battery-full:before {
  content: "\e9c3";
}
.icn-battery-charge:before {
  content: "\e9c4";
}
.icn-pipette:before {
  content: "\e9c5";
}
.icn-pencil1:before {
  content: "\e9c6";
}
.icn-folder1:before {
  content: "\e9c7";
}
.icn-folder-delete:before {
  content: "\e9c8";
}
.icn-folder-add:before {
  content: "\e9c9";
}
.icn-edit:before {
  content: "\e9ca";
}
.icn-document:before {
  content: "\e9cb";
}
.icn-document-delete:before {
  content: "\e9cc";
}
.icn-document-add:before {
  content: "\e9cd";
}
.icn-brush:before {
  content: "\e9ce";
}
.icn-thumbs-up:before {
  content: "\e9cf";
}
.icn-thumbs-down:before {
  content: "\e9d0";
}
.icn-pen1:before {
  content: "\e9d1";
}
.icn-sort-numerically-outline:before {
  content: "\e9d2";
}
.icn-sort-alphabetically-outline:before {
  content: "\e9d3";
}
.icn-social-last-fm-circular:before {
  content: "\e9d4";
}
.icn-social-github-circular:before {
  content: "\e9d5";
}
.icn-compass1:before {
  content: "\e9d6";
}
.icn-bookmark1:before {
  content: "\e9d7";
}
.icn-input-checked-outline:before {
  content: "\e9d8";
}
.icn-code-outline:before {
  content: "\e9d9";
}
.icn-calender-outline:before {
  content: "\e9da";
}
.icn-business-card:before {
  content: "\e9db";
}
.icn-arrow-up1:before {
  content: "\e9dc";
}
.icn-arrow-sync-outline:before {
  content: "\e9dd";
}
.icn-arrow-right1:before {
  content: "\e9de";
}
.icn-arrow-repeat-outline:before {
  content: "\e9df";
}
.icn-arrow-loop-outline:before {
  content: "\e9e0";
}
.icn-arrow-left1:before {
  content: "\e9e1";
}
.icn-flow-switch:before {
  content: "\e9e2";
}
.icn-flow-parallel:before {
  content: "\e9e3";
}
.icn-flow-merge:before {
  content: "\e9e4";
}
.icn-document-text:before {
  content: "\e9e5";
}
.icn-clipboard1:before {
  content: "\e9e6";
}
.icn-calculator1:before {
  content: "\e9e7";
}
.icn-arrow-minimise-outline:before {
  content: "\e9e8";
}
.icn-arrow-maximise-outline:before {
  content: "\e9e9";
}
.icn-arrow-down1:before {
  content: "\e9ea";
}
.icn-gift1:before {
  content: "\e9eb";
}
.icn-film1:before {
  content: "\e9ec";
}
.icn-database1:before {
  content: "\e9ed";
}
.icn-bell1:before {
  content: "\e9ee";
}
.icn-anchor-outline:before {
  content: "\e9ef";
}
.icn-adjust-contrast:before {
  content: "\e9f0";
}
.icn-world-outline:before {
  content: "\e9f1";
}
.icn-shopping-bag:before {
  content: "\e9f2";
}
.icn-power-outline:before {
  content: "\e9f3";
}
.icn-notes-outline:before {
  content: "\e9f4";
}
.icn-device-tablet:before {
  content: "\e9f5";
}
.icn-device-phone:before {
  content: "\e9f6";
}
.icn-device-laptop:before {
  content: "\e9f7";
}
.icn-device-desktop:before {
  content: "\e9f8";
}
.icn-briefcase1:before {
  content: "\e9f9";
}
.icn-stopwatch1:before {
  content: "\e9fa";
}
.icn-spanner-outline:before {
  content: "\e9fb";
}
.icn-puzzle-outline:before {
  content: "\e9fc";
}
.icn-printer1:before {
  content: "\e9fd";
}
.icn-pi-outline:before {
  content: "\e9fe";
}
.icn-lightbulb:before {
  content: "\e9ff";
}
.icn-flag-outline:before {
  content: "\ea00";
}
.icn-contacts:before {
  content: "\ea01";
}
.icn-archive:before {
  content: "\ea02";
}
.icn-weather-stormy:before {
  content: "\ea03";
}
.icn-weather-shower:before {
  content: "\ea04";
}
.icn-weather-partly-sunny:before {
  content: "\ea05";
}
.icn-weather-downpour:before {
  content: "\ea06";
}
.icn-weather-cloudy:before {
  content: "\ea07";
}
.icn-plane-outline:before {
  content: "\ea08";
}
.icn-phone-outline:before {
  content: "\ea09";
}
.icn-microphone-outline:before {
  content: "\ea0a";
}
.icn-weather-windy:before {
  content: "\ea0b";
}
.icn-weather-windy-cloudy:before {
  content: "\ea0c";
}
.icn-weather-sunny:before {
  content: "\ea0d";
}
.icn-weather-snow:before {
  content: "\ea0e";
}
.icn-weather-night:before {
  content: "\ea0f";
}
.icn-media-stop-outline:before {
  content: "\ea10";
}
.icn-media-rewind-outline:before {
  content: "\ea11";
}
.icn-media-record-outline:before {
  content: "\ea12";
}
.icn-media-play-outline:before {
  content: "\ea13";
}
.icn-media-fast-forward-outline:before {
  content: "\ea14";
}
.icn-media-eject-outline:before {
  content: "\ea15";
}
.icn-wine:before {
  content: "\ea16";
}
.icn-waves-outline:before {
  content: "\ea17";
}
.icn-ticket1:before {
  content: "\ea18";
}
.icn-tags:before {
  content: "\ea19";
}
.icn-plug:before {
  content: "\ea1a";
}
.icn-headphones1:before {
  content: "\ea1b";
}
.icn-credit-card1:before {
  content: "\ea1c";
}
.icn-coffee:before {
  content: "\ea1d";
}
.icn-book1:before {
  content: "\ea1e";
}
.icn-beer:before {
  content: "\ea1f";
}
.icn-volume:before {
  content: "\ea20";
}
.icn-volume-up:before {
  content: "\ea21";
}
.icn-volume-mute1:before {
  content: "\ea22";
}
.icn-volume-down:before {
  content: "\ea23";
}
.icn-social-vimeo-circular:before {
  content: "\ea24";
}
.icn-social-twitter-circular:before {
  content: "\ea25";
}
.icn-social-pinterest-circular:before {
  content: "\ea26";
}
.icn-social-linkedin-circular:before {
  content: "\ea27";
}
.icn-social-facebook-circular:before {
  content: "\ea28";
}
.icn-social-dribbble-circular:before {
  content: "\ea29";
}
.icn-tree1:before {
  content: "\ea2a";
}
.icn-thermometer:before {
  content: "\ea2b";
}
.icn-social-tumbler-circular:before {
  content: "\ea2c";
}
.icn-social-skype-outline:before {
  content: "\ea2d";
}
.icn-social-flickr-circular:before {
  content: "\ea2e";
}
.icn-social-at-circular:before {
  content: "\ea2f";
}
.icn-shopping-cart:before {
  content: "\ea30";
}
.icn-messages:before {
  content: "\ea31";
}
.icn-leaf1:before {
  content: "\ea32";
}
.icn-feather:before {
  content: "\ea33";
}
.icn-add-to-list:before {
  content: "\ea34";
}
.icn-classic-computer:before {
  content: "\ea35";
}
.icn-controller-fast-backward:before {
  content: "\ea36";
}
.icn-creative-commons-attribution:before {
  content: "\ea37";
}
.icn-creative-commons-noderivs:before {
  content: "\ea38";
}
.icn-creative-commons-noncommercial-eu:before {
  content: "\ea39";
}
.icn-creative-commons-noncommercial-us:before {
  content: "\ea3a";
}
.icn-creative-commons-public-domain:before {
  content: "\ea3b";
}
.icn-creative-commons-remix:before {
  content: "\ea3c";
}
.icn-creative-commons-share:before {
  content: "\ea3d";
}
.icn-creative-commons-sharealike:before {
  content: "\ea3e";
}
.icn-creative-commons:before {
  content: "\ea3f";
}
.icn-document-landscape:before {
  content: "\ea40";
}
.icn-remove-user:before {
  content: "\ea41";
}
.icn-warning2:before {
  content: "\ea42";
}
.icn-arrow-bold-down:before {
  content: "\ea43";
}
.icn-arrow-bold-left:before {
  content: "\ea44";
}
.icn-arrow-bold-right:before {
  content: "\ea45";
}
.icn-arrow-bold-up:before {
  content: "\ea46";
}
.icn-arrow-down3:before {
  content: "\ea47";
}
.icn-arrow-left3:before {
  content: "\ea48";
}
.icn-arrow-long-down:before {
  content: "\ea49";
}
.icn-arrow-long-left:before {
  content: "\ea4a";
}
.icn-arrow-long-right:before {
  content: "\ea4b";
}
.icn-arrow-long-up:before {
  content: "\ea4c";
}
.icn-arrow-right3:before {
  content: "\ea4d";
}
.icn-arrow-up3:before {
  content: "\ea4e";
}
.icn-arrow-with-circle-down:before {
  content: "\ea4f";
}
.icn-arrow-with-circle-left:before {
  content: "\ea50";
}
.icn-arrow-with-circle-right:before {
  content: "\ea51";
}
.icn-arrow-with-circle-up:before {
  content: "\ea52";
}
.icn-bookmark2:before {
  content: "\ea53";
}
.icn-bookmarks1:before {
  content: "\ea54";
}
.icn-chevron-down:before {
  content: "\ea55";
}
.icn-chevron-left1:before {
  content: "\ea56";
}
.icn-chevron-right1:before {
  content: "\ea57";
}
.icn-chevron-small-down:before {
  content: "\ea58";
}
.icn-chevron-small-left:before {
  content: "\ea59";
}
.icn-chevron-small-right:before {
  content: "\ea5a";
}
.icn-chevron-small-up:before {
  content: "\ea5b";
}
.icn-chevron-thin-down:before {
  content: "\ea5c";
}
.icn-chevron-thin-left:before {
  content: "\ea5d";
}
.icn-chevron-thin-right:before {
  content: "\ea5e";
}
.icn-chevron-thin-up:before {
  content: "\ea5f";
}
.icn-chevron-up:before {
  content: "\ea60";
}
.icn-chevron-with-circle-down:before {
  content: "\ea61";
}
.icn-chevron-with-circle-left:before {
  content: "\ea62";
}
.icn-chevron-with-circle-right:before {
  content: "\ea63";
}
.icn-chevron-with-circle-up:before {
  content: "\ea64";
}
.icn-cloud1:before {
  content: "\ea65";
}
.icn-controller-fast-forward:before {
  content: "\ea66";
}
.icn-controller-jump-to-start:before {
  content: "\ea67";
}
.icn-controller-next:before {
  content: "\ea68";
}
.icn-controller-paus:before {
  content: "\ea69";
}
.icn-controller-play:before {
  content: "\ea6a";
}
.icn-controller-record:before {
  content: "\ea6b";
}
.icn-controller-stop:before {
  content: "\ea6c";
}
.icn-controller-volume:before {
  content: "\ea6d";
}
.icn-dot-single:before {
  content: "\ea6e";
}
.icn-dots-three-horizontal:before {
  content: "\ea6f";
}
.icn-dots-three-vertical:before {
  content: "\ea70";
}
.icn-dots-two-horizontal:before {
  content: "\ea71";
}
.icn-dots-two-vertical:before {
  content: "\ea72";
}
.icn-download4:before {
  content: "\ea73";
}
.icn-emoji-flirt:before {
  content: "\ea74";
}
.icn-flow-branch:before {
  content: "\ea75";
}
.icn-flow-cascade:before {
  content: "\ea76";
}
.icn-flow-line:before {
  content: "\ea77";
}
.icn-flow-parallel1:before {
  content: "\ea78";
}
.icn-flow-tree:before {
  content: "\ea79";
}
.icn-install:before {
  content: "\ea7a";
}
.icn-layers:before {
  content: "\ea7b";
}
.icn-open-book:before {
  content: "\ea7c";
}
.icn-resize-100:before {
  content: "\ea7d";
}
.icn-resize-full-screen:before {
  content: "\ea7e";
}
.icn-save:before {
  content: "\ea7f";
}
.icn-select-arrows:before {
  content: "\ea80";
}
.icn-sound-mute:before {
  content: "\ea81";
}
.icn-sound:before {
  content: "\ea82";
}
.icn-trash1:before {
  content: "\ea83";
}
.icn-triangle-down:before {
  content: "\ea84";
}
.icn-triangle-left:before {
  content: "\ea85";
}
.icn-triangle-right:before {
  content: "\ea86";
}
.icn-triangle-up:before {
  content: "\ea87";
}
.icn-uninstall:before {
  content: "\ea88";
}
.icn-upload-to-cloud:before {
  content: "\ea89";
}
.icn-upload4:before {
  content: "\ea8a";
}
.icn-add-user:before {
  content: "\ea8b";
}
.icn-address:before {
  content: "\ea8c";
}
.icn-adjust:before {
  content: "\ea8d";
}
.icn-air:before {
  content: "\ea8e";
}
.icn-aircraft-landing:before {
  content: "\ea8f";
}
.icn-aircraft-take-off:before {
  content: "\ea90";
}
.icn-aircraft:before {
  content: "\ea91";
}
.icn-align-bottom:before {
  content: "\ea92";
}
.icn-align-horizontal-middle:before {
  content: "\ea93";
}
.icn-align-left:before {
  content: "\ea94";
}
.icn-align-right:before {
  content: "\ea95";
}
.icn-align-top:before {
  content: "\ea96";
}
.icn-align-vertical-middle:before {
  content: "\ea97";
}
.icn-archive1:before {
  content: "\ea98";
}
.icn-area-graph:before {
  content: "\ea99";
}
.icn-attachment2:before {
  content: "\ea9a";
}
.icn-awareness-ribbon:before {
  content: "\ea9b";
}
.icn-back-in-time:before {
  content: "\ea9c";
}
.icn-back:before {
  content: "\ea9d";
}
.icn-bar-graph:before {
  content: "\ea9e";
}
.icn-battery:before {
  content: "\ea9f";
}
.icn-beamed-note:before {
  content: "\eaa0";
}
.icn-bell2:before {
  content: "\eaa1";
}
.icn-blackboard:before {
  content: "\eaa2";
}
.icn-block:before {
  content: "\eaa3";
}
.icn-book2:before {
  content: "\eaa4";
}
.icn-bowl:before {
  content: "\eaa5";
}
.icn-box:before {
  content: "\eaa6";
}
.icn-briefcase2:before {
  content: "\eaa7";
}
.icn-browser:before {
  content: "\eaa8";
}
.icn-brush1:before {
  content: "\eaa9";
}
.icn-bucket:before {
  content: "\eaaa";
}
.icn-cake:before {
  content: "\eaab";
}
.icn-calculator2:before {
  content: "\eaac";
}
.icn-calendar1:before {
  content: "\eaad";
}
.icn-camera2:before {
  content: "\eaae";
}
.icn-ccw:before {
  content: "\eaaf";
}
.icn-chat:before {
  content: "\eab0";
}
.icn-check:before {
  content: "\eab1";
}
.icn-circle-with-cross:before {
  content: "\eab2";
}
.icn-circle-with-minus:before {
  content: "\eab3";
}
.icn-circle-with-plus:before {
  content: "\eab4";
}
.icn-circle:before {
  content: "\eab5";
}
.icn-circular-graph:before {
  content: "\eab6";
}
.icn-clapperboard:before {
  content: "\eab7";
}
.icn-clipboard2:before {
  content: "\eab8";
}
.icn-clock1:before {
  content: "\eab9";
}
.icn-code1:before {
  content: "\eaba";
}
.icn-cog2:before {
  content: "\eabb";
}
.icn-colours:before {
  content: "\eabc";
}
.icn-compass3:before {
  content: "\eabd";
}
.icn-copy1:before {
  content: "\eabe";
}
.icn-credit-card2:before {
  content: "\eabf";
}
.icn-credit:before {
  content: "\eac0";
}
.icn-cross2:before {
  content: "\eac1";
}
.icn-cup:before {
  content: "\eac2";
}
.icn-cw:before {
  content: "\eac3";
}
.icn-cycle:before {
  content: "\eac4";
}
.icn-database2:before {
  content: "\eac5";
}
.icn-dial-pad:before {
  content: "\eac6";
}
.icn-direction:before {
  content: "\eac7";
}
.icn-document1:before {
  content: "\eac8";
}
.icn-documents:before {
  content: "\eac9";
}
.icn-drink:before {
  content: "\eaca";
}
.icn-drive1:before {
  content: "\eacb";
}
.icn-drop:before {
  content: "\eacc";
}
.icn-edit1:before {
  content: "\eacd";
}
.icn-email:before {
  content: "\eace";
}
.icn-emoji-happy:before {
  content: "\eacf";
}
.icn-emoji-neutral:before {
  content: "\ead0";
}
.icn-emoji-sad:before {
  content: "\ead1";
}
.icn-erase:before {
  content: "\ead2";
}
.icn-eraser:before {
  content: "\ead3";
}
.icn-export1:before {
  content: "\ead4";
}
.icn-eye2:before {
  content: "\ead5";
}
.icn-feather1:before {
  content: "\ead6";
}
.icn-flag2:before {
  content: "\ead7";
}
.icn-flash1:before {
  content: "\ead8";
}
.icn-flashlight:before {
  content: "\ead9";
}
.icn-flat-brush:before {
  content: "\eada";
}
.icn-folder-images:before {
  content: "\eadb";
}
.icn-folder-music:before {
  content: "\eadc";
}
.icn-folder-video:before {
  content: "\eadd";
}
.icn-folder2:before {
  content: "\eade";
}
.icn-forward1:before {
  content: "\eadf";
}
.icn-funnel:before {
  content: "\eae0";
}
.icn-game-controller:before {
  content: "\eae1";
}
.icn-gauge:before {
  content: "\eae2";
}
.icn-globe1:before {
  content: "\eae3";
}
.icn-graduation-cap:before {
  content: "\eae4";
}
.icn-grid:before {
  content: "\eae5";
}
.icn-hair-cross:before {
  content: "\eae6";
}
.icn-hand:before {
  content: "\eae7";
}
.icn-heart-outlined:before {
  content: "\eae8";
}
.icn-heart2:before {
  content: "\eae9";
}
.icn-help-with-circle:before {
  content: "\eaea";
}
.icn-help:before {
  content: "\eaeb";
}
.icn-home4:before {
  content: "\eaec";
}
.icn-hour-glass1:before {
  content: "\eaed";
}
.icn-image-inverted:before {
  content: "\eaee";
}
.icn-image2:before {
  content: "\eaef";
}
.icn-images1:before {
  content: "\eaf0";
}
.icn-inbox:before {
  content: "\eaf1";
}
.icn-infinity1:before {
  content: "\eaf2";
}
.icn-info-with-circle:before {
  content: "\eaf3";
}
.icn-info2:before {
  content: "\eaf4";
}
.icn-key3:before {
  content: "\eaf5";
}
.icn-keyboard1:before {
  content: "\eaf6";
}
.icn-lab-flask:before {
  content: "\eaf7";
}
.icn-landline:before {
  content: "\eaf8";
}
.icn-language:before {
  content: "\eaf9";
}
.icn-laptop1:before {
  content: "\eafa";
}
.icn-leaf2:before {
  content: "\eafb";
}
.icn-level-down:before {
  content: "\eafc";
}
.icn-level-up:before {
  content: "\eafd";
}
.icn-lifebuoy1:before {
  content: "\eafe";
}
.icn-light-bulb:before {
  content: "\eaff";
}
.icn-light-down:before {
  content: "\eb00";
}
.icn-light-up:before {
  content: "\eb01";
}
.icn-line-graph:before {
  content: "\eb02";
}
.icn-link2:before {
  content: "\eb03";
}
.icn-list1:before {
  content: "\eb04";
}
.icn-location-pin:before {
  content: "\eb05";
}
.icn-location3:before {
  content: "\eb06";
}
.icn-lock-open1:before {
  content: "\eb07";
}
.icn-lock1:before {
  content: "\eb08";
}
.icn-log-out:before {
  content: "\eb09";
}
.icn-login:before {
  content: "\eb0a";
}
.icn-loop1:before {
  content: "\eb0b";
}
.icn-magnet1:before {
  content: "\eb0c";
}
.icn-magnifying-glass:before {
  content: "\eb0d";
}
.icn-mail5:before {
  content: "\eb0e";
}
.icn-man1:before {
  content: "\eb0f";
}
.icn-map3:before {
  content: "\eb10";
}
.icn-mask:before {
  content: "\eb11";
}
.icn-medal:before {
  content: "\eb12";
}
.icn-megaphone:before {
  content: "\eb13";
}
.icn-menu1:before {
  content: "\eb14";
}
.icn-message1:before {
  content: "\eb15";
}
.icn-mic1:before {
  content: "\eb16";
}
.icn-minus2:before {
  content: "\eb17";
}
.icn-mobile1:before {
  content: "\eb18";
}
.icn-modern-mic:before {
  content: "\eb19";
}
.icn-moon:before {
  content: "\eb1a";
}
.icn-mouse:before {
  content: "\eb1b";
}
.icn-music1:before {
  content: "\eb1c";
}
.icn-network:before {
  content: "\eb1d";
}
.icn-new-message:before {
  content: "\eb1e";
}
.icn-new:before {
  content: "\eb1f";
}
.icn-news1:before {
  content: "\eb20";
}
.icn-note:before {
  content: "\eb21";
}
.icn-notification1:before {
  content: "\eb22";
}
.icn-old-mobile:before {
  content: "\eb23";
}
.icn-old-phone:before {
  content: "\eb24";
}
.icn-palette:before {
  content: "\eb25";
}
.icn-paper-plane:before {
  content: "\eb26";
}
.icn-pencil3:before {
  content: "\eb27";
}
.icn-phone2:before {
  content: "\eb28";
}
.icn-pie-chart1:before {
  content: "\eb29";
}
.icn-pin1:before {
  content: "\eb2a";
}
.icn-plus2:before {
  content: "\eb2b";
}
.icn-popup:before {
  content: "\eb2c";
}
.icn-power-plug:before {
  content: "\eb2d";
}
.icn-price-ribbon:before {
  content: "\eb2e";
}
.icn-price-tag1:before {
  content: "\eb2f";
}
.icn-print:before {
  content: "\eb30";
}
.icn-progress-empty:before {
  content: "\eb31";
}
.icn-progress-full:before {
  content: "\eb32";
}
.icn-progress-one:before {
  content: "\eb33";
}
.icn-progress-two:before {
  content: "\eb34";
}
.icn-publish:before {
  content: "\eb35";
}
.icn-quote:before {
  content: "\eb36";
}
.icn-radio:before {
  content: "\eb37";
}
.icn-reply-all:before {
  content: "\eb38";
}
.icn-reply1:before {
  content: "\eb39";
}
.icn-retweet:before {
  content: "\eb3a";
}
.icn-rocket1:before {
  content: "\eb3b";
}
.icn-round-brush:before {
  content: "\eb3c";
}
.icn-rss3:before {
  content: "\eb3d";
}
.icn-ruler:before {
  content: "\eb3e";
}
.icn-scissors2:before {
  content: "\eb3f";
}
.icn-share-alternitive:before {
  content: "\eb40";
}
.icn-share1:before {
  content: "\eb41";
}
.icn-shareable:before {
  content: "\eb42";
}
.icn-shield1:before {
  content: "\eb43";
}
.icn-shop:before {
  content: "\eb44";
}
.icn-shopping-bag1:before {
  content: "\eb45";
}
.icn-shopping-basket:before {
  content: "\eb46";
}
.icn-shopping-cart1:before {
  content: "\eb47";
}
.icn-shuffle1:before {
  content: "\eb48";
}
.icn-signal:before {
  content: "\eb49";
}
.icn-sound-mix:before {
  content: "\eb4a";
}
.icn-sports-club:before {
  content: "\eb4b";
}
.icn-spreadsheet:before {
  content: "\eb4c";
}
.icn-squared-cross:before {
  content: "\eb4d";
}
.icn-squared-minus:before {
  content: "\eb4e";
}
.icn-squared-plus:before {
  content: "\eb4f";
}
.icn-star-outlined:before {
  content: "\eb50";
}
.icn-star1:before {
  content: "\eb51";
}
.icn-stopwatch2:before {
  content: "\eb52";
}
.icn-suitcase:before {
  content: "\eb53";
}
.icn-swap:before {
  content: "\eb54";
}
.icn-sweden:before {
  content: "\eb55";
}
.icn-switch1:before {
  content: "\eb56";
}
.icn-tablet1:before {
  content: "\eb57";
}
.icn-tag1:before {
  content: "\eb58";
}
.icn-text-document-inverted:before {
  content: "\eb59";
}
.icn-text-document:before {
  content: "\eb5a";
}
.icn-text:before {
  content: "\eb5b";
}
.icn-thermometer1:before {
  content: "\eb5c";
}
.icn-thumbs-down1:before {
  content: "\eb5d";
}
.icn-thumbs-up1:before {
  content: "\eb5e";
}
.icn-thunder-cloud:before {
  content: "\eb5f";
}
.icn-ticket2:before {
  content: "\eb60";
}
.icn-time-slot:before {
  content: "\eb61";
}
.icn-tools:before {
  content: "\eb62";
}
.icn-traffic-cone:before {
  content: "\eb63";
}
.icn-tree2:before {
  content: "\eb64";
}
.icn-trophy1:before {
  content: "\eb65";
}
.icn-tv1:before {
  content: "\eb66";
}
.icn-typing:before {
  content: "\eb67";
}
.icn-unread:before {
  content: "\eb68";
}
.icn-untag:before {
  content: "\eb69";
}
.icn-user2:before {
  content: "\eb6a";
}
.icn-users1:before {
  content: "\eb6b";
}
.icn-v-card:before {
  content: "\eb6c";
}
.icn-video1:before {
  content: "\eb6d";
}
.icn-vinyl:before {
  content: "\eb6e";
}
.icn-voicemail:before {
  content: "\eb6f";
}
.icn-wallet:before {
  content: "\eb70";
}
.icn-water:before {
  content: "\eb71";
}
.icn-500px-with-circle:before {
  content: "\eb72";
}
.icn-500px1:before {
  content: "\eb73";
}
.icn-basecamp1:before {
  content: "\eb74";
}
.icn-behance1:before {
  content: "\eb75";
}
.icn-creative-cloud:before {
  content: "\eb76";
}
.icn-dropbox1:before {
  content: "\eb77";
}
.icn-evernote:before {
  content: "\eb78";
}
.icn-flattr1:before {
  content: "\eb79";
}
.icn-foursquare1:before {
  content: "\eb7a";
}
.icn-google-drive1:before {
  content: "\eb7b";
}
.icn-google-hangouts:before {
  content: "\eb7c";
}
.icn-grooveshark:before {
  content: "\eb7d";
}
.icn-icloud:before {
  content: "\eb7e";
}
.icn-mixi:before {
  content: "\eb7f";
}
.icn-onedrive1:before {
  content: "\eb80";
}
.icn-paypal1:before {
  content: "\eb81";
}
.icn-picasa:before {
  content: "\eb82";
}
.icn-qq:before {
  content: "\eb83";
}
.icn-rdio-with-circle:before {
  content: "\eb84";
}
.icn-renren1:before {
  content: "\eb85";
}
.icn-scribd:before {
  content: "\eb86";
}
.icn-sina-weibo1:before {
  content: "\eb87";
}
.icn-skype-with-circle:before {
  content: "\eb88";
}
.icn-skype1:before {
  content: "\eb89";
}
.icn-slideshare:before {
  content: "\eb8a";
}
.icn-smashing:before {
  content: "\eb8b";
}
.icn-soundcloud1:before {
  content: "\eb8c";
}
.icn-spotify-with-circle:before {
  content: "\eb8d";
}
.icn-spotify1:before {
  content: "\eb8e";
}
.icn-swarm:before {
  content: "\eb8f";
}
.icn-vine-with-circle:before {
  content: "\eb90";
}
.icn-vine1:before {
  content: "\eb91";
}
.icn-vk-alternitive:before {
  content: "\eb92";
}
.icn-vk-with-circle:before {
  content: "\eb93";
}
.icn-vk1:before {
  content: "\eb94";
}
.icn-xing-with-circle:before {
  content: "\eb95";
}
.icn-xing1:before {
  content: "\eb96";
}
.icn-yelp1:before {
  content: "\eb97";
}
.icn-dribbble-with-circle:before {
  content: "\eb98";
}
.icn-dribbble1:before {
  content: "\eb99";
}
.icn-facebook-with-circle:before {
  content: "\eb9a";
}
.icn-facebook1:before {
  content: "\eb9b";
}
.icn-flickr-with-circle:before {
  content: "\eb9c";
}
.icn-flickr1:before {
  content: "\eb9d";
}
.icn-github-with-circle:before {
  content: "\eb9e";
}
.icn-github1:before {
  content: "\eb9f";
}
.icn-google-with-circle:before {
  content: "\eba0";
}
.icn-google1:before {
  content: "\eba1";
}
.icn-instagram-with-circle:before {
  content: "\eba2";
}
.icn-instagram1:before {
  content: "\eba3";
}
.icn-lastfm-with-circle:before {
  content: "\eba4";
}
.icn-lastfm1:before {
  content: "\eba5";
}
.icn-linkedin-with-circle:before {
  content: "\eba6";
}
.icn-linkedin1:before {
  content: "\eba7";
}
.icn-pinterest-with-circle:before {
  content: "\eba8";
}
.icn-pinterest1:before {
  content: "\eba9";
}
.icn-rdio:before {
  content: "\ebaa";
}
.icn-stumbleupon-with-circle:before {
  content: "\ebab";
}
.icn-stumbleupon1:before {
  content: "\ebac";
}
.icn-tumblr-with-circle:before {
  content: "\ebad";
}
.icn-tumblr1:before {
  content: "\ebae";
}
.icn-twitter-with-circle:before {
  content: "\ebaf";
}
.icn-twitter1:before {
  content: "\ebb0";
}
.icn-vimeo-with-circle:before {
  content: "\ebb1";
}
.icn-vimeo1:before {
  content: "\ebb2";
}
.icn-youtube-with-circle:before {
  content: "\ebb3";
}
.icn-youtube1:before {
  content: "\ebb4";
}
.icn-add-outline:before {
  content: "\ebb5";
}
.icn-add-solid:before {
  content: "\ebb6";
}
.icn-adjust1:before {
  content: "\ebb7";
}
.icn-airplane1:before {
  content: "\ebb8";
}
.icn-album:before {
  content: "\ebb9";
}
.icn-align-center:before {
  content: "\ebba";
}
.icn-align-justified:before {
  content: "\ebbb";
}
.icn-align-left1:before {
  content: "\ebbc";
}
.icn-align-right1:before {
  content: "\ebbd";
}
.icn-anchor1:before {
  content: "\ebbe";
}
.icn-announcement:before {
  content: "\ebbf";
}
.icn-apparel:before {
  content: "\ebc0";
}
.icn-arrow-down4:before {
  content: "\ebc1";
}
.icn-arrow-left4:before {
  content: "\ebc2";
}
.icn-arrow-outline-down:before {
  content: "\ebc3";
}
.icn-arrow-outline-left:before {
  content: "\ebc4";
}
.icn-arrow-outline-right:before {
  content: "\ebc5";
}
.icn-arrow-outline-up:before {
  content: "\ebc6";
}
.icn-arrow-right4:before {
  content: "\ebc7";
}
.icn-arrow-thick-down:before {
  content: "\ebc8";
}
.icn-arrow-thick-left:before {
  content: "\ebc9";
}
.icn-arrow-thick-right:before {
  content: "\ebca";
}
.icn-arrow-thick-up:before {
  content: "\ebcb";
}
.icn-arrow-thin-down:before {
  content: "\ebcc";
}
.icn-arrow-thin-left:before {
  content: "\ebcd";
}
.icn-arrow-thin-right:before {
  content: "\ebce";
}
.icn-arrow-thin-up:before {
  content: "\ebcf";
}
.icn-arrow-up4:before {
  content: "\ebd0";
}
.icn-artist:before {
  content: "\ebd1";
}
.icn-at-symbol:before {
  content: "\ebd2";
}
.icn-attachment3:before {
  content: "\ebd3";
}
.icn-backspace1:before {
  content: "\ebd4";
}
.icn-backward1:before {
  content: "\ebd5";
}
.icn-backward-step:before {
  content: "\ebd6";
}
.icn-badge:before {
  content: "\ebd7";
}
.icn-battery-full1:before {
  content: "\ebd8";
}
.icn-battery-half:before {
  content: "\ebd9";
}
.icn-battery-low1:before {
  content: "\ebda";
}
.icn-beverage:before {
  content: "\ebdb";
}
.icn-block1:before {
  content: "\ebdc";
}
.icn-bluetooth:before {
  content: "\ebdd";
}
.icn-bolt:before {
  content: "\ebde";
}
.icn-book-reference:before {
  content: "\ebdf";
}
.icn-bookmark3:before {
  content: "\ebe0";
}
.icn-bookmarkcopy2:before {
  content: "\ebe1";
}
.icn-bookmarkcopy3:before {
  content: "\ebe2";
}
.icn-bookmark-outline:before {
  content: "\ebe3";
}
.icn-bookmark-outline-add:before {
  content: "\ebe4";
}
.icn-border-all:before {
  content: "\ebe5";
}
.icn-border-bottom:before {
  content: "\ebe6";
}
.icn-border-horizontal:before {
  content: "\ebe7";
}
.icn-border-inner:before {
  content: "\ebe8";
}
.icn-border-left:before {
  content: "\ebe9";
}
.icn-border-none:before {
  content: "\ebea";
}
.icn-border-outer:before {
  content: "\ebeb";
}
.icn-border-right:before {
  content: "\ebec";
}
.icn-border-top:before {
  content: "\ebed";
}
.icn-border-vertical:before {
  content: "\ebee";
}
.icn-box1:before {
  content: "\ebef";
}
.icn-brightness-down:before {
  content: "\ebf0";
}
.icn-brightness-up:before {
  content: "\ebf1";
}
.icn-browser-window:before {
  content: "\ebf2";
}
.icn-browser-window-new:before {
  content: "\ebf3";
}
.icn-browser-window-open:before {
  content: "\ebf4";
}
.icn-bug1:before {
  content: "\ebf5";
}
.icn-buoy:before {
  content: "\ebf6";
}
.icn-calculator3:before {
  content: "\ebf7";
}
.icn-calendar2:before {
  content: "\ebf8";
}
.icn-camera3:before {
  content: "\ebf9";
}
.icn-chart:before {
  content: "\ebfa";
}
.icn-chart-bar1:before {
  content: "\ebfb";
}
.icn-chart-pie1:before {
  content: "\ebfc";
}
.icn-chat-bubble-dots:before {
  content: "\ebfd";
}
.icn-checkmark1:before {
  content: "\ebfe";
}
.icn-checkmark-outline:before {
  content: "\ebff";
}
.icn-cheveron-down:before {
  content: "\ec00";
}
.icn-cheveron-left:before {
  content: "\ec01";
}
.icn-cheveron-outline-down:before {
  content: "\ec02";
}
.icn-cheveron-outline-left:before {
  content: "\ec03";
}
.icn-cheveron-outline-right:before {
  content: "\ec04";
}
.icn-cheveron-outline-up:before {
  content: "\ec05";
}
.icn-cheveron-right:before {
  content: "\ec06";
}
.icn-cheveron-up:before {
  content: "\ec07";
}
.icn-clipboard3:before {
  content: "\ec08";
}
.icn-close:before {
  content: "\ec09";
}
.icn-close-outline:before {
  content: "\ec0a";
}
.icn-close-solid:before {
  content: "\ec0b";
}
.icn-cloud2:before {
  content: "\ec0c";
}
.icn-cloud-upload1:before {
  content: "\ec0d";
}
.icn-code2:before {
  content: "\ec0e";
}
.icn-coffee1:before {
  content: "\ec0f";
}
.icn-cog3:before {
  content: "\ec10";
}
.icn-color-palette:before {
  content: "\ec11";
}
.icn-compose:before {
  content: "\ec12";
}
.icn-computer-desktop:before {
  content: "\ec13";
}
.icn-computer-laptop:before {
  content: "\ec14";
}
.icn-conversation:before {
  content: "\ec15";
}
.icn-copy2:before {
  content: "\ec16";
}
.icn-credit-card3:before {
  content: "\ec17";
}
.icn-currency-dollar:before {
  content: "\ec18";
}
.icn-dashboard:before {
  content: "\ec19";
}
.icn-date-add:before {
  content: "\ec1a";
}
.icn-dial-pad1:before {
  content: "\ec1b";
}
.icn-directions1:before {
  content: "\ec1c";
}
.icn-document2:before {
  content: "\ec1d";
}
.icn-document-add1:before {
  content: "\ec1e";
}
.icn-dots-horizontal-double:before {
  content: "\ec1f";
}
.icn-dots-horizontal-triple:before {
  content: "\ec20";
}
.icn-download5:before {
  content: "\ec21";
}
.icn-duplicate:before {
  content: "\ec22";
}
.icn-edit-copy:before {
  content: "\ec23";
}
.icn-edit-crop:before {
  content: "\ec24";
}
.icn-edit-cut:before {
  content: "\ec25";
}
.icn-edit-pencil:before {
  content: "\ec26";
}
.icn-education:before {
  content: "\ec27";
}
.icn-envelope:before {
  content: "\ec28";
}
.icn-exclamation-outline:before {
  content: "\ec29";
}
.icn-exclamation-solid:before {
  content: "\ec2a";
}
.icn-explore:before {
  content: "\ec2b";
}
.icn-factory:before {
  content: "\ec2c";
}
.icn-fast-forward:before {
  content: "\ec2d";
}
.icn-fast-rewind:before {
  content: "\ec2e";
}
.icn-film2:before {
  content: "\ec2f";
}
.icn-filter1:before {
  content: "\ec30";
}
.icn-flag3:before {
  content: "\ec31";
}
.icn-flashlight1:before {
  content: "\ec32";
}
.icn-folder3:before {
  content: "\ec33";
}
.icn-folder-outline:before {
  content: "\ec34";
}
.icn-folder-outline-add:before {
  content: "\ec35";
}
.icn-format-bold:before {
  content: "\ec36";
}
.icn-format-font-size:before {
  content: "\ec37";
}
.icn-format-italic:before {
  content: "\ec38";
}
.icn-format-text-size:before {
  content: "\ec39";
}
.icn-format-underline:before {
  content: "\ec3a";
}
.icn-forward4:before {
  content: "\ec3b";
}
.icn-forward-step:before {
  content: "\ec3c";
}
.icn-gift2:before {
  content: "\ec3d";
}
.icn-globe2:before {
  content: "\ec3e";
}
.icn-hand-stop:before {
  content: "\ec3f";
}
.icn-hard-drive:before {
  content: "\ec40";
}
.icn-headphones2:before {
  content: "\ec41";
}
.icn-heart3:before {
  content: "\ec42";
}
.icn-home5:before {
  content: "\ec43";
}
.icn-hot:before {
  content: "\ec44";
}
.icn-hour-glass2:before {
  content: "\ec45";
}
.icn-inbox1:before {
  content: "\ec46";
}
.icn-inbox-check:before {
  content: "\ec47";
}
.icn-inbox-download:before {
  content: "\ec48";
}
.icn-inbox-full:before {
  content: "\ec49";
}
.icn-indent-decrease1:before {
  content: "\ec4a";
}
.icn-indent-increase1:before {
  content: "\ec4b";
}
.icn-information-outline:before {
  content: "\ec4c";
}
.icn-information-solid:before {
  content: "\ec4d";
}
.icn-key4:before {
  content: "\ec4e";
}
.icn-keyboard2:before {
  content: "\ec4f";
}
.icn-layers1:before {
  content: "\ec50";
}
.icn-library1:before {
  content: "\ec51";
}
.icn-light-bulb1:before {
  content: "\ec52";
}
.icn-link3:before {
  content: "\ec53";
}
.icn-list3:before {
  content: "\ec54";
}
.icn-list-add:before {
  content: "\ec55";
}
.icn-list-bullet:before {
  content: "\ec56";
}
.icn-load-balancer:before {
  content: "\ec57";
}
.icn-location4:before {
  content: "\ec58";
}
.icn-location-current:before {
  content: "\ec59";
}
.icn-location-food:before {
  content: "\ec5a";
}
.icn-location-gas-station:before {
  content: "\ec5b";
}
.icn-location-hotel:before {
  content: "\ec5c";
}
.icn-location-marina:before {
  content: "\ec5d";
}
.icn-location-park:before {
  content: "\ec5e";
}
.icn-location-restroom:before {
  content: "\ec5f";
}
.icn-location-shopping:before {
  content: "\ec60";
}
.icn-lock-closed1:before {
  content: "\ec61";
}
.icn-lock-open2:before {
  content: "\ec62";
}
.icn-map4:before {
  content: "\ec63";
}
.icn-menu5:before {
  content: "\ec64";
}
.icn-mic2:before {
  content: "\ec65";
}
.icn-minus-outline1:before {
  content: "\ec66";
}
.icn-minus-solid:before {
  content: "\ec67";
}
.icn-mobile-devices:before {
  content: "\ec68";
}
.icn-mood-happy-outline:before {
  content: "\ec69";
}
.icn-mood-happy-solid:before {
  content: "\ec6a";
}
.icn-mood-neutral-outline:before {
  content: "\ec6b";
}
.icn-mood-neutral-solid:before {
  content: "\ec6c";
}
.icn-mood-sad-outline:before {
  content: "\ec6d";
}
.icn-mood-sad-solid:before {
  content: "\ec6e";
}
.icn-mouse1:before {
  content: "\ec6f";
}
.icn-music-album:before {
  content: "\ec70";
}
.icn-music-artist:before {
  content: "\ec71";
}
.icn-music-notes:before {
  content: "\ec72";
}
.icn-music-playlist:before {
  content: "\ec73";
}
.icn-navigation-more:before {
  content: "\ec74";
}
.icn-network1:before {
  content: "\ec75";
}
.icn-news-paper:before {
  content: "\ec76";
}
.icn-notification2:before {
  content: "\ec77";
}
.icn-notifications:before {
  content: "\ec78";
}
.icn-notifications-outline:before {
  content: "\ec79";
}
.icn-paste1:before {
  content: "\ec7a";
}
.icn-pause1:before {
  content: "\ec7b";
}
.icn-pause-outline:before {
  content: "\ec7c";
}
.icn-pause-solid:before {
  content: "\ec7d";
}
.icn-pen-tool:before {
  content: "\ec7e";
}
.icn-phone3:before {
  content: "\ec7f";
}
.icn-photo:before {
  content: "\ec80";
}
.icn-php-elephant:before {
  content: "\ec81";
}
.icn-pin2:before {
  content: "\ec82";
}
.icn-play1:before {
  content: "\ec83";
}
.icn-play-outline:before {
  content: "\ec84";
}
.icn-playlist:before {
  content: "\ec85";
}
.icn-plugin:before {
  content: "\ec86";
}
.icn-portfolio:before {
  content: "\ec87";
}
.icn-printer2:before {
  content: "\ec88";
}
.icn-pylon:before {
  content: "\ec89";
}
.icn-question1:before {
  content: "\ec8a";
}
.icn-queue:before {
  content: "\ec8b";
}
.icn-radar1:before {
  content: "\ec8c";
}
.icn-radarcopy2:before {
  content: "\ec8d";
}
.icn-radio1:before {
  content: "\ec8e";
}
.icn-refresh1:before {
  content: "\ec8f";
}
.icn-reload:before {
  content: "\ec90";
}
.icn-reply2:before {
  content: "\ec91";
}
.icn-reply-all1:before {
  content: "\ec92";
}
.icn-repost:before {
  content: "\ec93";
}
.icn-save-disk:before {
  content: "\ec94";
}
.icn-screen-full:before {
  content: "\ec95";
}
.icn-search1:before {
  content: "\ec96";
}
.icn-send:before {
  content: "\ec97";
}
.icn-servers:before {
  content: "\ec98";
}
.icn-share3:before {
  content: "\ec99";
}
.icn-share-01:before {
  content: "\ec9a";
}
.icn-share-alt:before {
  content: "\ec9b";
}
.icn-shield2:before {
  content: "\ec9c";
}
.icn-shopping-cart2:before {
  content: "\ec9d";
}
.icn-show-sidebar:before {
  content: "\ec9e";
}
.icn-shuffle2:before {
  content: "\ec9f";
}
.icn-stand-by:before {
  content: "\eca0";
}
.icn-star-full1:before {
  content: "\eca1";
}
.icn-station:before {
  content: "\eca2";
}
.icn-step-backward:before {
  content: "\eca3";
}
.icn-step-forward:before {
  content: "\eca4";
}
.icn-stethoscope:before {
  content: "\eca5";
}
.icn-store-front:before {
  content: "\eca6";
}
.icn-stroke-width:before {
  content: "\eca7";
}
.icn-subdirectory-left:before {
  content: "\eca8";
}
.icn-subdirectory-right:before {
  content: "\eca9";
}
.icn-swap1:before {
  content: "\ecaa";
}
.icn-tablet2:before {
  content: "\ecab";
}
.icn-tag2:before {
  content: "\ecac";
}
.icn-target1:before {
  content: "\ecad";
}
.icn-text-box:before {
  content: "\ecae";
}
.icn-text-decoration:before {
  content: "\ecaf";
}
.icn-thermometer2:before {
  content: "\ecb0";
}
.icn-thumbs-down2:before {
  content: "\ecb1";
}
.icn-thumbs-up2:before {
  content: "\ecb2";
}
.icn-ticket3:before {
  content: "\ecb3";
}
.icn-time1:before {
  content: "\ecb4";
}
.icn-timer:before {
  content: "\ecb5";
}
.icn-toolscopy:before {
  content: "\ecb6";
}
.icn-translate:before {
  content: "\ecb7";
}
.icn-trash2:before {
  content: "\ecb8";
}
.icn-travel:before {
  content: "\ecb9";
}
.icn-travel-bus:before {
  content: "\ecba";
}
.icn-travel-car:before {
  content: "\ecbb";
}
.icn-travel-case:before {
  content: "\ecbc";
}
.icn-travel-taxi-cab:before {
  content: "\ecbd";
}
.icn-travel-train:before {
  content: "\ecbe";
}
.icn-travel-walk:before {
  content: "\ecbf";
}
.icn-trophy2:before {
  content: "\ecc0";
}
.icn-tuning:before {
  content: "\ecc1";
}
.icn-upload5:before {
  content: "\ecc2";
}
.icn-usb:before {
  content: "\ecc3";
}
.icn-user3:before {
  content: "\ecc4";
}
.icn-user-add1:before {
  content: "\ecc5";
}
.icn-user-group:before {
  content: "\ecc6";
}
.icn-user-solid-circle:before {
  content: "\ecc7";
}
.icn-user-solid-square:before {
  content: "\ecc8";
}
.icn-vector:before {
  content: "\ecc9";
}
.icn-video-camera1:before {
  content: "\ecca";
}
.icn-view-carousel:before {
  content: "\eccb";
}
.icn-view-column:before {
  content: "\eccc";
}
.icn-view-hide:before {
  content: "\eccd";
}
.icn-view-list:before {
  content: "\ecce";
}
.icn-view-show:before {
  content: "\eccf";
}
.icn-view-tile:before {
  content: "\ecd0";
}
.icn-volume-down1:before {
  content: "\ecd1";
}
.icn-volume-mute3:before {
  content: "\ecd2";
}
.icn-volume-off:before {
  content: "\ecd3";
}
.icn-volume-up1:before {
  content: "\ecd4";
}
.icn-wallet1:before {
  content: "\ecd5";
}
.icn-watch1:before {
  content: "\ecd6";
}
.icn-window:before {
  content: "\ecd7";
}
.icn-window-new:before {
  content: "\ecd8";
}
.icn-window-open:before {
  content: "\ecd9";
}
.icn-wrench1:before {
  content: "\ecda";
}
.icn-yin-yang:before {
  content: "\ecdb";
}
.icn-zoom-in2:before {
  content: "\ecdc";
}
.icn-zoom-out2:before {
  content: "\ecdd";
}
.icn-heart4:before {
  content: "\ecde";
}
.icn-cloud3:before {
  content: "\ecdf";
}
.icn-star2:before {
  content: "\ece0";
}
.icn-tv2:before {
  content: "\ece1";
}
.icn-sound1:before {
  content: "\ece2";
}
.icn-video2:before {
  content: "\ece3";
}
.icn-trash3:before {
  content: "\ece4";
}
.icn-user4:before {
  content: "\ece5";
}
.icn-key5:before {
  content: "\ece6";
}
.icn-search2:before {
  content: "\ece7";
}
.icn-settings:before {
  content: "\ece8";
}
.icn-camera4:before {
  content: "\ece9";
}
.icn-tag3:before {
  content: "\ecea";
}
.icn-lock2:before {
  content: "\eceb";
}
.icn-bulb:before {
  content: "\ecec";
}
.icn-pen2:before {
  content: "\eced";
}
.icn-diamond:before {
  content: "\ecee";
}
.icn-display1:before {
  content: "\ecef";
}
.icn-location5:before {
  content: "\ecf0";
}
.icn-eye3:before {
  content: "\ecf1";
}
.icn-bubble1:before {
  content: "\ecf2";
}
.icn-stack1:before {
  content: "\ecf3";
}
.icn-cup1:before {
  content: "\ecf4";
}
.icn-phone4:before {
  content: "\ecf5";
}
.icn-news2:before {
  content: "\ecf6";
}
.icn-mail6:before {
  content: "\ecf7";
}
.icn-like:before {
  content: "\ecf8";
}
.icn-photo1:before {
  content: "\ecf9";
}
.icn-note1:before {
  content: "\ecfa";
}
.icn-clock3:before {
  content: "\ecfb";
}
.icn-paperplane:before {
  content: "\ecfc";
}
.icn-params:before {
  content: "\ecfd";
}
.icn-banknote:before {
  content: "\ecfe";
}
.icn-data:before {
  content: "\ecff";
}
.icn-music2:before {
  content: "\ed00";
}
.icn-megaphone1:before {
  content: "\ed01";
}
.icn-study:before {
  content: "\ed02";
}
.icn-lab1:before {
  content: "\ed03";
}
.icn-food:before {
  content: "\ed04";
}
.icn-t-shirt:before {
  content: "\ed05";
}
.icn-fire1:before {
  content: "\ed06";
}
.icn-clip:before {
  content: "\ed07";
}
.icn-shop1:before {
  content: "\ed08";
}
.icn-calendar3:before {
  content: "\ed09";
}
.icn-wallet2:before {
  content: "\ed0a";
}
.icn-vynil:before {
  content: "\ed0b";
}
.icn-truck1:before {
  content: "\ed0c";
}
.icn-world1:before {
  content: "\ed0d";
}
.icn-1password:before {
  content: "\ed0e";
  color: #0094f5;
}
.icn-500px2:before {
  content: "\ed0f";
  color: #0099e5;
}
.icn-abbrobotstudio:before {
  content: "\ed10";
  color: #ff9e0f;
}
.icn-about-dot-me:before {
  content: "\ed11";
  color: #00a98f;
}
.icn-abstract:before {
  content: "\ed12";
}
.icn-academia:before {
  content: "\ed13";
}
.icn-accusoft:before {
  content: "\ed14";
  color: #ff7e4a;
}
.icn-acm:before {
  content: "\ed15";
  color: #0085ca;
}
.icn-addthis:before {
  content: "\ed16";
  color: #ff6550;
}
.icn-adguard:before {
  content: "\ed17";
  color: #66b574;
}
.icn-adobe:before {
  content: "\ed18";
  color: #f00;
}
.icn-adobeacrobatreader:before {
  content: "\ed19";
  color: #ee3f24;
}
.icn-adobeaftereffects:before {
  content: "\ed1a";
  color: #d291ff;
}
.icn-adobeaudition:before {
  content: "\ed1b";
  color: #00e4bb;
}
.icn-adobecreativecloud:before {
  content: "\ed1c";
  color: #d41818;
}
.icn-adobedreamweaver:before {
  content: "\ed1d";
  color: #35fa00;
}
.icn-adobeillustrator:before {
  content: "\ed1e";
  color: #ff7c00;
}
.icn-adobeindesign:before {
  content: "\ed1f";
  color: #fd3f93;
}
.icn-adobelightroomcc:before {
  content: "\ed20";
  color: #3df0f0;
}
.icn-adobelightroomclassic:before {
  content: "\ed21";
  color: #add5ec;
}
.icn-adobephotoshop:before {
  content: "\ed22";
  color: #00c8ff;
}
.icn-adobepremiere:before {
  content: "\ed23";
  color: #ea77ff;
}
.icn-adobetypekit:before {
  content: "\ed24";
  color: #87ec00;
}
.icn-adobexd:before {
  content: "\ed25";
  color: #ff2bc2;
}
.icn-airbnb:before {
  content: "\ed26";
  color: #ff5a5f;
}
.icn-airplayaudio:before {
  content: "\ed27";
}
.icn-airplayvideo:before {
  content: "\ed28";
}
.icn-algolia:before {
  content: "\ed29";
  color: #5468ff;
}
.icn-alliedmodders:before {
  content: "\ed2a";
  color: #1578d3;
}
.icn-amazon1:before {
  content: "\ed2b";
  color: #f90;
}
.icn-amazonalexa:before {
  content: "\ed2c";
  color: #00caff;
}
.icn-amazonaws:before {
  content: "\ed2d";
}
.icn-amd:before {
  content: "\ed2e";
  color: #ed1c24;
}
.icn-americanexpress:before {
  content: "\ed2f";
  color: #2e77bc;
}
.icn-anaconda:before {
  content: "\ed30";
  color: #42b029;
}
.icn-analogue:before {
  content: "\ed31";
}
.icn-anchor2:before {
  content: "\ed32";
  color: #8940fa;
}
.icn-android1:before {
  content: "\ed33";
  color: #3ddc84;
}
.icn-angellist:before {
  content: "\ed34";
}
.icn-angular:before {
  content: "\ed35";
  color: #dd0031;
}
.icn-angularuniversal:before {
  content: "\ed36";
  color: #00acc1;
}
.icn-ansible:before {
  content: "\ed37";
  color: #e00;
}
.icn-apache:before {
  content: "\ed38";
  color: #d22128;
}
.icn-apacheairflow:before {
  content: "\ed39";
  color: #007a88;
}
.icn-apachecordova:before {
  content: "\ed3a";
  color: #e8e8e8;
}
.icn-apacheflink:before {
  content: "\ed3b";
  color: #e6526f;
}
.icn-apachekafka:before {
  content: "\ed3c";
}
.icn-apachenetbeanside:before {
  content: "\ed3d";
  color: #1b6ac6;
}
.icn-apacheopenoffice:before {
  content: "\ed3e";
  color: #0e85cd;
}
.icn-apacherocketmq:before {
  content: "\ed3f";
  color: #d77310;
}
.icn-apachespark:before {
  content: "\ed40";
  color: #e25a1c;
}
.icn-apple:before {
  content: "\ed41";
  color: #999;
}
.icn-applemusic:before {
  content: "\ed42";
}
.icn-applepay:before {
  content: "\ed43";
}
.icn-applepodcasts:before {
  content: "\ed44";
  color: #93c;
}
.icn-appveyor:before {
  content: "\ed45";
  color: #00b3e0;
}
.icn-aral:before {
  content: "\ed46";
  color: #0063cb;
}
.icn-archiveofourown:before {
  content: "\ed47";
  color: #900;
}
.icn-archlinux:before {
  content: "\ed48";
  color: #1793d1;
}
.icn-arduino:before {
  content: "\ed49";
  color: #00979d;
}
.icn-artstation:before {
  content: "\ed4a";
  color: #13aff0;
}
.icn-arxiv:before {
  content: "\ed4b";
  color: #b31b1b;
}
.icn-asana:before {
  content: "\ed4c";
}
.icn-asciidoctor:before {
  content: "\ed4d";
  color: #e40046;
}
.icn-at-and-t:before {
  content: "\ed4e";
  color: #00a8e0;
}
.icn-atlassian:before {
  content: "\ed4f";
  color: #0052cc;
}
.icn-atom:before {
  content: "\ed50";
  color: #66595c;
}
.icn-audi:before {
  content: "\ed51";
  color: #bb0a30;
}
.icn-audible:before {
  content: "\ed52";
  color: #f8991c;
}
.icn-aurelia:before {
  content: "\ed53";
  color: #ed2b88;
}
.icn-auth0:before {
  content: "\ed54";
  color: #eb5424;
}
.icn-automatic:before {
  content: "\ed55";
  color: #7d8084;
}
.icn-autotask:before {
  content: "\ed56";
  color: #e51937;
}
.icn-aventrix:before {
  content: "\ed57";
  color: #09d;
}
.icn-awesomewm:before {
  content: "\ed58";
  color: #535d6c;
}
.icn-azureartifacts:before {
  content: "\ed59";
  color: #cb2e6d;
}
.icn-azuredevops:before {
  content: "\ed5a";
  color: #0078d7;
}
.icn-azurepipelines:before {
  content: "\ed5b";
  color: #2560e0;
}
.icn-babel:before {
  content: "\ed5c";
  color: #f9dc3e;
}
.icn-baidu:before {
  content: "\ed5d";
  color: #2319dc;
}
.icn-bamboo:before {
  content: "\ed5e";
  color: #0052cc;
}
.icn-bancontact:before {
  content: "\ed5f";
  color: #005498;
}
.icn-bandcamp:before {
  content: "\ed60";
  color: #408294;
}
.icn-bandlab:before {
  content: "\ed61";
  color: #dc3710;
}
.icn-basecamp2:before {
  content: "\ed62";
  color: #5ecc62;
}
.icn-bathasu:before {
  content: "\ed63";
  color: #00a3e0;
}
.icn-beats:before {
  content: "\ed64";
  color: #005571;
}
.icn-beatsbydre:before {
  content: "\ed65";
  color: #e01f3d;
}
.icn-behance3:before {
  content: "\ed66";
  color: #1769ff;
}
.icn-bigcartel:before {
  content: "\ed67";
}
.icn-bing:before {
  content: "\ed68";
  color: #008373;
}
.icn-bit:before {
  content: "\ed69";
  color: #73398d;
}
.icn-bitbucket:before {
  content: "\ed6a";
  color: #0052cc;
}
.icn-bitcoin:before {
  content: "\ed6b";
  color: #f7931a;
}
.icn-bitdefender:before {
  content: "\ed6c";
  color: #ed1c24;
}
.icn-bitly:before {
  content: "\ed6d";
  color: #ee6123;
}
.icn-bitrise:before {
  content: "\ed6e";
  color: #683d87;
}
.icn-blackberry:before {
  content: "\ed6f";
}
.icn-blender:before {
  content: "\ed70";
  color: #f5792a;
}
.icn-blogger1:before {
  content: "\ed71";
  color: #ff5722;
}
.icn-bmcsoftware:before {
  content: "\ed72";
  color: #fe5000;
}
.icn-boeing:before {
  content: "\ed73";
  color: #1d439c;
}
.icn-boost:before {
  content: "\ed74";
  color: #f69220;
}
.icn-bootstrap:before {
  content: "\ed75";
  color: #563d7c;
}
.icn-bower:before {
  content: "\ed76";
  color: #ef5734;
}
.icn-box2:before {
  content: "\ed77";
  color: #0061d5;
}
.icn-brand-dot-ai:before {
  content: "\ed78";
  color: #0aa0ff;
}
.icn-brandfolder:before {
  content: "\ed79";
  color: #40d1f5;
}
.icn-brave:before {
  content: "\ed7a";
  color: #fb542b;
}
.icn-breaker:before {
  content: "\ed7b";
  color: #003dad;
}
.icn-broadcom:before {
  content: "\ed7c";
  color: #cc092f;
}
.icn-buddy:before {
  content: "\ed7d";
  color: #1a86fd;
}
.icn-buffer:before {
  content: "\ed7e";
  color: #168eea;
}
.icn-buymeacoffee:before {
  content: "\ed7f";
  color: #ff813f;
}
.icn-buzzfeed:before {
  content: "\ed80";
  color: #e32;
}
.icn-c:before {
  content: "\ed81";
  color: #a8b9cc;
}
.icn-cakephp:before {
  content: "\ed82";
  color: #d33c43;
}
.icn-campaignmonitor:before {
  content: "\ed83";
  color: #509cf6;
}
.icn-canva:before {
  content: "\ed84";
  color: #00c4cc;
}
.icn-cashapp:before {
  content: "\ed85";
  color: #00c244;
}
.icn-cassandra:before {
  content: "\ed86";
  color: #1287b1;
}
.icn-castorama:before {
  content: "\ed87";
  color: #0078d7;
}
.icn-castro:before {
  content: "\ed88";
  color: #00b265;
}
.icn-centos:before {
  content: "\ed89";
  color: #262577;
}
.icn-cevo:before {
  content: "\ed8a";
  color: #1eabe2;
}
.icn-chase:before {
  content: "\ed8b";
  color: #117aca;
}
.icn-chef:before {
  content: "\ed8c";
  color: #f09820;
}
.icn-circle1:before {
  content: "\ed8d";
  color: #8669ae;
}
.icn-circleci:before {
  content: "\ed8e";
}
.icn-cirrusci:before {
  content: "\ed8f";
}
.icn-cisco:before {
  content: "\ed90";
  color: #1ba0d7;
}
.icn-civicrm:before {
  content: "\ed91";
  color: #81c459;
}
.icn-clockify:before {
  content: "\ed92";
  color: #03a9f4;
}
.icn-clojure:before {
  content: "\ed93";
  color: #5881d8;
}
.icn-cloudbees:before {
  content: "\ed94";
  color: #1997b5;
}
.icn-cloudflare:before {
  content: "\ed95";
  color: #f38020;
}
.icn-cmake:before {
  content: "\ed96";
  color: #064f8c;
}
.icn-co-op:before {
  content: "\ed97";
  color: #00b1e7;
}
.icn-codacy:before {
  content: "\ed98";
}
.icn-codecademy:before {
  content: "\ed99";
  color: #1f4056;
}
.icn-codechef:before {
  content: "\ed9a";
  color: #5b4638;
}
.icn-codeclimate:before {
  content: "\ed9b";
}
.icn-codecov:before {
  content: "\ed9c";
  color: #f01f7a;
}
.icn-codefactor:before {
  content: "\ed9d";
  color: #f44a6a;
}
.icn-codeforces:before {
  content: "\ed9e";
  color: #1f8acb;
}
.icn-codeigniter:before {
  content: "\ed9f";
  color: #ee4623;
}
.icn-codepen1:before {
  content: "\eda0";
}
.icn-coderwall:before {
  content: "\eda1";
  color: #3e8dcc;
}
.icn-codesandbox:before {
  content: "\eda2";
}
.icn-codeship:before {
  content: "\eda3";
  color: #3c4858;
}
.icn-codewars:before {
  content: "\eda4";
  color: #ad2c27;
}
.icn-codio:before {
  content: "\eda5";
  color: #4574e0;
}
.icn-coffeescript:before {
  content: "\eda6";
}
.icn-coinbase:before {
  content: "\eda7";
  color: #0667d0;
}
.icn-commonworkflowlanguage:before {
  content: "\eda8";
  color: #b5314c;
}
.icn-composer:before {
  content: "\eda9";
  color: #885630;
}
.icn-compropago:before {
  content: "\edaa";
  color: #00aaef;
}
.icn-conda-forge:before {
  content: "\edab";
}
.icn-conekta:before {
  content: "\edac";
  color: #414959;
}
.icn-confluence:before {
  content: "\edad";
}
.icn-coronarenderer:before {
  content: "\edae";
  color: #e6502a;
}
.icn-coursera:before {
  content: "\edaf";
  color: #2a73cc;
}
.icn-coveralls:before {
  content: "\edb0";
  color: #3f5767;
}
.icn-cpanel:before {
  content: "\edb1";
  color: #ff6c2c;
}
.icn-cplusplus:before {
  content: "\edb2";
  color: #00599c;
}
.icn-creativecommons:before {
  content: "\edb3";
  color: #ef9421;
}
.icn-crehana:before {
  content: "\edb4";
  color: #4b22f4;
}
.icn-crunchbase:before {
  content: "\edb5";
  color: #0288d1;
}
.icn-crunchyroll:before {
  content: "\edb6";
  color: #f47521;
}
.icn-cryengine:before {
  content: "\edb7";
}
.icn-csharp:before {
  content: "\edb8";
  color: #239120;
}
.icn-css31:before {
  content: "\edb9";
  color: #1572b6;
}
.icn-csswizardry:before {
  content: "\edba";
  color: #f43059;
}
.icn-curl:before {
  content: "\edbb";
}
.icn-d3-dot-js:before {
  content: "\edbc";
  color: #f9a03c;
}
.icn-dailymotion:before {
  content: "\edbd";
  color: #0066dc;
}
.icn-dart:before {
  content: "\edbe";
  color: #0175c2;
}
.icn-dashlane:before {
  content: "\edbf";
  color: #007c97;
}
.icn-datacamp:before {
  content: "\edc0";
  color: #3ac;
}
.icn-dazn:before {
  content: "\edc1";
  color: #f8f8f5;
}
.icn-dblp:before {
  content: "\edc2";
  color: #004f9f;
}
.icn-debian:before {
  content: "\edc3";
  color: #a81d33;
}
.icn-deepin:before {
  content: "\edc4";
  color: #007cff;
}
.icn-deezer:before {
  content: "\edc5";
  color: #feaa2d;
}
.icn-delicious1:before {
  content: "\edc6";
  color: #39f;
}
.icn-deliveroo:before {
  content: "\edc7";
  color: #00ccbc;
}
.icn-dell:before {
  content: "\edc8";
  color: #007db8;
}
.icn-deno:before {
  content: "\edc9";
}
.icn-dependabot:before {
  content: "\edca";
  color: #025e8c;
}
.icn-designernews:before {
  content: "\edcb";
  color: #2d72d9;
}
.icn-dev-dot-to:before {
  content: "\edcc";
}
.icn-deviantart1:before {
  content: "\edcd";
  color: #05cc47;
}
.icn-devrant:before {
  content: "\edce";
  color: #f99a66;
}
.icn-diaspora:before {
  content: "\edcf";
}
.icn-digg:before {
  content: "\edd0";
}
.icn-digitalocean:before {
  content: "\edd1";
  color: #0080ff;
}
.icn-directus:before {
  content: "\edd2";
}
.icn-discord:before {
  content: "\edd3";
  color: #7289da;
}
.icn-discourse:before {
  content: "\edd4";
}
.icn-discover:before {
  content: "\edd5";
  color: #ff6000;
}
.icn-disqus:before {
  content: "\edd6";
  color: #2e9fff;
}
.icn-disroot:before {
  content: "\edd7";
  color: #50162d;
}
.icn-django:before {
  content: "\edd8";
}
.icn-dlna:before {
  content: "\edd9";
  color: #48a842;
}
.icn-docker:before {
  content: "\edda";
  color: #1488c6;
}
.icn-docusign:before {
  content: "\eddb";
  color: #fc2;
}
.icn-dolby:before {
  content: "\eddc";
}
.icn-dot-net:before {
  content: "\eddd";
  color: #5c2d91;
}
.icn-draugiem-dot-lv:before {
  content: "\edde";
  color: #f60;
}
.icn-dribbble2:before {
  content: "\eddf";
  color: #ea4c89;
}
.icn-drone:before {
  content: "\ede0";
}
.icn-dropbox2:before {
  content: "\ede1";
  color: #0061ff;
}
.icn-drupal:before {
  content: "\ede2";
  color: #0678be;
}
.icn-dtube:before {
  content: "\ede3";
  color: #f00;
}
.icn-duckduckgo:before {
  content: "\ede4";
  color: #de5833;
}
.icn-dunked:before {
  content: "\ede5";
  color: #2da9d7;
}
.icn-duolingo:before {
  content: "\ede6";
  color: #58cc02;
}
.icn-dynatrace:before {
  content: "\ede7";
  color: #1496ff;
}
.icn-ebay:before {
  content: "\ede8";
  color: #e53238;
}
.icn-eclipseide:before {
  content: "\ede9";
  color: #2c2255;
}
.icn-elastic:before {
  content: "\edea";
  color: #005571;
}
.icn-elasticcloud:before {
  content: "\edeb";
  color: #005571;
}
.icn-elasticsearch:before {
  content: "\edec";
  color: #005571;
}
.icn-elasticstack:before {
  content: "\eded";
  color: #005571;
}
.icn-electron:before {
  content: "\edee";
  color: #47848f;
}
.icn-elementary:before {
  content: "\edef";
  color: #64baff;
}
.icn-eleventy:before {
  content: "\edf0";
}
.icn-ello1:before {
  content: "\edf1";
}
.icn-elsevier:before {
  content: "\edf2";
  color: #ff6c00;
}
.icn-ember-dot-js:before {
  content: "\edf3";
  color: #e04e39;
}
.icn-emlakjet:before {
  content: "\edf4";
  color: #0ae524;
}
.icn-empirekred:before {
  content: "\edf5";
  color: #72be50;
}
.icn-envato:before {
  content: "\edf6";
  color: #81b441;
}
.icn-epel:before {
  content: "\edf7";
  color: #fc0000;
}
.icn-epicgames:before {
  content: "\edf8";
}
.icn-epson:before {
  content: "\edf9";
  color: #039;
}
.icn-esea:before {
  content: "\edfa";
  color: #0e9648;
}
.icn-eslint:before {
  content: "\edfb";
  color: #4b32c3;
}
.icn-ethereum:before {
  content: "\edfc";
}
.icn-etsy:before {
  content: "\edfd";
  color: #f16521;
}
.icn-eventbrite:before {
  content: "\edfe";
  color: #f05537;
}
.icn-eventstore:before {
  content: "\edff";
  color: #5ab552;
}
.icn-evernote1:before {
  content: "\ee00";
  color: #00a82d;
}
.icn-everplaces:before {
  content: "\ee01";
  color: #fa4b32;
}
.icn-evry:before {
  content: "\ee02";
  color: #063a54;
}
.icn-exercism:before {
  content: "\ee03";
  color: #009cab;
}
.icn-expertsexchange:before {
  content: "\ee04";
  color: #00aae7;
}
.icn-expo:before {
  content: "\ee05";
}
.icn-eyeem:before {
  content: "\ee06";
}
.icn-f-droid:before {
  content: "\ee07";
  color: #1976d2;
}
.icn-f-secure:before {
  content: "\ee08";
  color: #00baff;
}
.icn-facebook3:before {
  content: "\ee09";
  color: #1877f2;
}
.icn-faceit:before {
  content: "\ee0a";
  color: #f50;
}
.icn-fandango:before {
  content: "\ee0b";
  color: #ff7300;
}
.icn-favro:before {
  content: "\ee0c";
  color: #512da8;
}
.icn-feathub:before {
  content: "\ee0d";
  color: #9b9b9b;
}
.icn-fedora:before {
  content: "\ee0e";
  color: #294172;
}
.icn-feedly:before {
  content: "\ee0f";
  color: #2bb24c;
}
.icn-fidoalliance:before {
  content: "\ee10";
  color: #ffbf3b;
}
.icn-figma:before {
  content: "\ee11";
  color: #f24e1e;
}
.icn-filezilla:before {
  content: "\ee12";
  color: #bf0000;
}
.icn-firebase:before {
  content: "\ee13";
  color: #ffca28;
}
.icn-fitbit:before {
  content: "\ee14";
  color: #00b0b9;
}
.icn-fiverr:before {
  content: "\ee15";
  color: #1dbf73;
}
.icn-flask:before {
  content: "\ee16";
}
.icn-flattr2:before {
  content: "\ee17";
}
.icn-flickr5:before {
  content: "\ee18";
  color: #0063dc;
}
.icn-flipboard:before {
  content: "\ee19";
  color: #e12828;
}
.icn-floatplane:before {
  content: "\ee1a";
  color: #00aeef;
}
.icn-flutter:before {
  content: "\ee1b";
  color: #02569b;
}
.icn-fnac:before {
  content: "\ee1c";
  color: #e1a925;
}
.icn-formstack:before {
  content: "\ee1d";
  color: #21b573;
}
.icn-fossa:before {
  content: "\ee1e";
  color: #90a1b8;
}
.icn-fossilscm:before {
  content: "\ee1f";
  color: #548294;
}
.icn-foursquare2:before {
  content: "\ee20";
  color: #f94877;
}
.icn-framer:before {
  content: "\ee21";
  color: #05f;
}
.icn-freebsd:before {
  content: "\ee22";
  color: #ab2b28;
}
.icn-freecodecamp:before {
  content: "\ee23";
  color: #006400;
}
.icn-fujifilm:before {
  content: "\ee24";
  color: #ed1a3a;
}
.icn-fujitsu:before {
  content: "\ee25";
  color: #f00;
}
.icn-furaffinity:before {
  content: "\ee26";
  color: #faaf3a;
}
.icn-furrynetwork:before {
  content: "\ee27";
  color: #2e75b4;
}
.icn-garmin:before {
  content: "\ee28";
  color: #007cc3;
}
.icn-gatsby:before {
  content: "\ee29";
  color: #639;
}
.icn-gauges:before {
  content: "\ee2a";
  color: #2fa66a;
}
.icn-genius:before {
  content: "\ee2b";
  color: #ffff64;
}
.icn-gentoo:before {
  content: "\ee2c";
  color: #54487a;
}
.icn-geocaching:before {
  content: "\ee2d";
  color: #00874d;
}
.icn-gerrit:before {
  content: "\ee2e";
  color: #eee;
}
.icn-ghost:before {
  content: "\ee2f";
  color: #738a94;
}
.icn-gimp:before {
  content: "\ee30";
  color: #5c5543;
}
.icn-git1:before {
  content: "\ee31";
  color: #f05032;
}
.icn-gitea:before {
  content: "\ee32";
  color: #609926;
}
.icn-github2:before {
  content: "\ee33";
}
.icn-gitlab:before {
  content: "\ee34";
  color: #fca121;
}
.icn-gitpod:before {
  content: "\ee35";
  color: #1aa6e4;
}
.icn-gitter:before {
  content: "\ee36";
  color: #ed1965;
}
.icn-glassdoor:before {
  content: "\ee37";
  color: #0caa41;
}
.icn-glitch:before {
  content: "\ee38";
  color: #33f;
}
.icn-gmail:before {
  content: "\ee39";
  color: #d14836;
}
.icn-gnome:before {
  content: "\ee3a";
  color: #4a86cf;
}
.icn-gnu:before {
  content: "\ee3b";
  color: #a42e2b;
}
.icn-gnuicecat:before {
  content: "\ee3c";
  color: #002f5b;
}
.icn-gnuprivacyguard:before {
  content: "\ee3d";
  color: #0093dd;
}
.icn-gnusocial:before {
  content: "\ee3e";
  color: #a22430;
}
.icn-go:before {
  content: "\ee3f";
  color: #00add8;
}
.icn-godotengine:before {
  content: "\ee40";
  color: #478cbf;
}
.icn-gog-dot-com:before {
  content: "\ee41";
  color: #86328a;
}
.icn-goldenline:before {
  content: "\ee42";
  color: #f1b92b;
}
.icn-goodreads:before {
  content: "\ee43";
  color: #630;
}
.icn-google4:before {
  content: "\ee44";
  color: #4285f4;
}
.icn-googleads:before {
  content: "\ee45";
  color: #4285f4;
}
.icn-googleanalytics:before {
  content: "\ee46";
  color: #ffc107;
}
.icn-googlechrome:before {
  content: "\ee47";
  color: #4285f4;
}
.icn-googlecloud:before {
  content: "\ee48";
  color: #4285f4;
}
.icn-googledrive:before {
  content: "\ee49";
  color: #4285f4;
}
.icn-googlehangouts:before {
  content: "\ee4a";
  color: #0c9d58;
}
.icn-googlehangoutschat:before {
  content: "\ee4b";
  color: #00897b;
}
.icn-googlekeep:before {
  content: "\ee4c";
  color: #fb0;
}
.icn-googlepay:before {
  content: "\ee4d";
  color: #5f6368;
}
.icn-googleplay:before {
  content: "\ee4e";
  color: #607d8b;
}
.icn-googlepodcasts:before {
  content: "\ee4f";
  color: #4285f4;
}
.icn-googlescholar:before {
  content: "\ee50";
  color: #4885ed;
}
.icn-googlesearchconsole:before {
  content: "\ee51";
  color: #458cf5;
}
.icn-gov-dot-uk:before {
  content: "\ee52";
  color: #005ea5;
}
.icn-gradle:before {
  content: "\ee53";
}
.icn-grafana:before {
  content: "\ee54";
  color: #f46800;
}
.icn-graphcool:before {
  content: "\ee55";
  color: #27ae60;
}
.icn-graphql:before {
  content: "\ee56";
  color: #e10098;
}
.icn-grav:before {
  content: "\ee57";
}
.icn-gravatar:before {
  content: "\ee58";
  color: #1e8cbe;
}
.icn-greenkeeper:before {
  content: "\ee59";
  color: #00c775;
}
.icn-greensock:before {
  content: "\ee5a";
  color: #88ce02;
}
.icn-groovy:before {
  content: "\ee5b";
  color: #4298b8;
}
.icn-groupon:before {
  content: "\ee5c";
  color: #53a318;
}
.icn-gulp:before {
  content: "\ee5d";
  color: #da4648;
}
.icn-gumroad:before {
  content: "\ee5e";
  color: #36a9ae;
}
.icn-gumtree:before {
  content: "\ee5f";
  color: #72ef36;
}
.icn-gutenberg:before {
  content: "\ee60";
}
.icn-habr:before {
  content: "\ee61";
  color: #77a2b6;
}
.icn-hackaday:before {
  content: "\ee62";
}
.icn-hackerearth:before {
  content: "\ee63";
  color: #323754;
}
.icn-hackerone:before {
  content: "\ee64";
  color: #494649;
}
.icn-hackerrank:before {
  content: "\ee65";
  color: #2ec866;
}
.icn-hackhands:before {
  content: "\ee66";
  color: #00acbd;
}
.icn-hackster:before {
  content: "\ee67";
  color: #1bacf7;
}
.icn-happycow:before {
  content: "\ee68";
  color: #7c4ec4;
}
.icn-hashnode:before {
  content: "\ee69";
  color: #2962ff;
}
.icn-haskell:before {
  content: "\ee6a";
  color: #5d4f85;
}
.icn-hatenabookmark:before {
  content: "\ee6b";
  color: #00a4de;
}
.icn-haxe:before {
  content: "\ee6c";
  color: #ea8220;
}
.icn-helm:before {
  content: "\ee6d";
  color: #277a9f;
}
.icn-here:before {
  content: "\ee6e";
  color: #48dad0;
}
.icn-heroku:before {
  content: "\ee6f";
  color: #430098;
}
.icn-hexo:before {
  content: "\ee70";
  color: #0e83cd;
}
.icn-highly:before {
  content: "\ee71";
  color: #ff3c00;
}
.icn-hipchat:before {
  content: "\ee72";
  color: #0052cc;
}
.icn-hitachi:before {
  content: "\ee73";
  color: #e60027;
}
.icn-hockeyapp:before {
  content: "\ee74";
  color: #009ee1;
}
.icn-homeassistant:before {
  content: "\ee75";
  color: #41bdf5;
}
.icn-homify:before {
  content: "\ee76";
  color: #7dcda3;
}
.icn-hootsuite:before {
  content: "\ee77";
}
.icn-houzz:before {
  content: "\ee78";
  color: #4dbc15;
}
.icn-hp:before {
  content: "\ee79";
  color: #0096d6;
}
.icn-html5:before {
  content: "\ee7a";
  color: #e34f26;
}
.icn-htmlacademy:before {
  content: "\ee7b";
  color: #302683;
}
.icn-huawei:before {
  content: "\ee7c";
  color: #f00;
}
.icn-hubspot:before {
  content: "\ee7d";
  color: #ff7a59;
}
.icn-hulu:before {
  content: "\ee7e";
  color: #3dbb3d;
}
.icn-humblebundle:before {
  content: "\ee7f";
  color: #cc2929;
}
.icn-hurriyetemlak:before {
  content: "\ee80";
  color: #e02826;
}
.icn-hypothesis:before {
  content: "\ee81";
  color: #bd1c2b;
}
.icn-iata:before {
  content: "\ee82";
  color: #004e81;
}
.icn-ibm:before {
  content: "\ee83";
  color: #054ada;
}
.icn-icloud1:before {
  content: "\ee84";
  color: #3693f3;
}
.icn-icomoon:before {
  content: "\ee85";
  color: #825794;
}
.icn-icon:before {
  content: "\ee86";
  color: #31b8bb;
}
.icn-iconjar:before {
  content: "\ee87";
  color: #16a5f3;
}
.icn-icq:before {
  content: "\ee88";
  color: #7ebd00;
}
.icn-ideal:before {
  content: "\ee89";
  color: #c06;
}
.icn-ifixit:before {
  content: "\ee8a";
  color: #0071ce;
}
.icn-imdb:before {
  content: "\ee8b";
  color: #e6b91e;
}
.icn-imgur:before {
  content: "\ee8c";
  color: #1bb76e;
}
.icn-indeed:before {
  content: "\ee8d";
  color: #2164f3;
}
.icn-influxdb:before {
  content: "\ee8e";
  color: #22adf6;
}
.icn-inkscape:before {
  content: "\ee8f";
}
.icn-instacart:before {
  content: "\ee90";
  color: #43b02a;
}
.icn-instagram2:before {
  content: "\ee91";
  color: #e4405f;
}
.icn-instapaper:before {
  content: "\ee92";
}
.icn-intel:before {
  content: "\ee93";
  color: #0071c5;
}
.icn-intellijidea:before {
  content: "\ee94";
}
.icn-intercom:before {
  content: "\ee95";
  color: #1f8ded;
}
.icn-internetarchive:before {
  content: "\ee96";
}
.icn-internetexplorer:before {
  content: "\ee97";
  color: #0076d6;
}
.icn-invision:before {
  content: "\ee98";
  color: #f36;
}
.icn-invoiceninja:before {
  content: "\ee99";
}
.icn-ionic:before {
  content: "\ee9a";
  color: #3880ff;
}
.icn-ios:before {
  content: "\ee9b";
}
.icn-ipfs:before {
  content: "\ee9c";
  color: #65c2cb;
}
.icn-issuu:before {
  content: "\ee9d";
  color: #f36d5d;
}
.icn-itch-dot-io:before {
  content: "\ee9e";
  color: #fa5c5c;
}
.icn-itunes:before {
  content: "\ee9f";
  color: #fb5bc5;
}
.icn-jabber:before {
  content: "\eea0";
  color: #c00;
}
.icn-java:before {
  content: "\eea1";
  color: #007396;
}
.icn-javascript:before {
  content: "\eea2";
  color: #f7df1e;
}
.icn-jekyll:before {
  content: "\eea3";
  color: #c00;
}
.icn-jenkins:before {
  content: "\eea4";
  color: #d24939;
}
.icn-jest:before {
  content: "\eea5";
  color: #c21325;
}
.icn-jet:before {
  content: "\eea6";
  color: #fbba00;
}
.icn-jetbrains:before {
  content: "\eea7";
}
.icn-jinja:before {
  content: "\eea8";
  color: #b41717;
}
.icn-jira:before {
  content: "\eea9";
}
.icn-joomla1:before {
  content: "\eeaa";
  color: #5091cd;
}
.icn-jquery:before {
  content: "\eeab";
  color: #0769ad;
}
.icn-jsdelivr:before {
  content: "\eeac";
  color: #e84d3d;
}
.icn-jsfiddle:before {
  content: "\eead";
  color: #4679a4;
}
.icn-json:before {
  content: "\eeae";
}
.icn-jupyter:before {
  content: "\eeaf";
  color: #f37626;
}
.icn-justgiving:before {
  content: "\eeb0";
  color: #ad29b6;
}
.icn-kaggle:before {
  content: "\eeb1";
  color: #20beff;
}
.icn-kaios:before {
  content: "\eeb2";
  color: #6f02b5;
}
.icn-kaspersky:before {
  content: "\eeb3";
  color: #009982;
}
.icn-kentico:before {
  content: "\eeb4";
  color: #f05a22;
}
.icn-keras:before {
  content: "\eeb5";
  color: #d00000;
}
.icn-keybase:before {
  content: "\eeb6";
  color: #33a0ff;
}
.icn-keycdn:before {
  content: "\eeb7";
  color: #3686be;
}
.icn-khanacademy:before {
  content: "\eeb8";
  color: #14bf96;
}
.icn-kibana:before {
  content: "\eeb9";
  color: #005571;
}
.icn-kickstarter:before {
  content: "\eeba";
  color: #2bde73;
}
.icn-kik:before {
  content: "\eebb";
  color: #82bc23;
}
.icn-kirby:before {
  content: "\eebc";
  color: #ff0100;
}
.icn-klout:before {
  content: "\eebd";
  color: #e44600;
}
.icn-known:before {
  content: "\eebe";
}
.icn-ko-fi:before {
  content: "\eebf";
  color: #f16061;
}
.icn-kodi:before {
  content: "\eec0";
  color: #17b2e7;
}
.icn-koding:before {
  content: "\eec1";
  color: #00b057;
}
.icn-kotlin:before {
  content: "\eec2";
  color: #0095d5;
}
.icn-krita:before {
  content: "\eec3";
  color: #3babff;
}
.icn-kubernetes:before {
  content: "\eec4";
  color: #326ce5;
}
.icn-laravel:before {
  content: "\eec5";
  color: #ff2d20;
}
.icn-laravelhorizon:before {
  content: "\eec6";
  color: #405263;
}
.icn-laravelnova:before {
  content: "\eec7";
}
.icn-last-dot-fm:before {
  content: "\eec8";
  color: #d51007;
}
.icn-lastpass:before {
  content: "\eec9";
  color: #d32d27;
}
.icn-latex:before {
  content: "\eeca";
  color: #008080;
}
.icn-launchpad:before {
  content: "\eecb";
  color: #f8c300;
}
.icn-leetcode:before {
  content: "\eecc";
  color: #f89f1b;
}
.icn-lenovo:before {
  content: "\eecd";
  color: #e2231a;
}
.icn-letsencrypt:before {
  content: "\eece";
  color: #003a70;
}
.icn-letterboxd:before {
  content: "\eecf";
  color: #00d735;
}
.icn-lgtm:before {
  content: "\eed0";
  color: #fff;
}
.icn-liberapay:before {
  content: "\eed1";
  color: #f6c915;
}
.icn-librarything:before {
  content: "\eed2";
}
.icn-libreoffice1:before {
  content: "\eed3";
  color: #18a303;
}
.icn-line:before {
  content: "\eed4";
  color: #00c300;
}
.icn-linewebtoon:before {
  content: "\eed5";
  color: #00d564;
}
.icn-linkedin3:before {
  content: "\eed6";
  color: #0077b5;
}
.icn-linode:before {
  content: "\eed7";
  color: #00a95c;
}
.icn-linux:before {
  content: "\eed8";
  color: #fcc624;
}
.icn-linuxfoundation:before {
  content: "\eed9";
  color: #009bee;
}
.icn-linuxmint:before {
  content: "\eeda";
  color: #87cf3e;
}
.icn-livejournal:before {
  content: "\eedb";
  color: #00b0ea;
}
.icn-livestream:before {
  content: "\eedc";
  color: #cf202e;
}
.icn-llvm:before {
  content: "\eedd";
}
.icn-logstash:before {
  content: "\eede";
  color: #005571;
}
.icn-loop3:before {
  content: "\eedf";
  color: #f29400;
}
.icn-lua:before {
  content: "\eee0";
  color: #2c2d72;
}
.icn-lufthansa:before {
  content: "\eee1";
  color: #05164d;
}
.icn-lumen:before {
  content: "\eee2";
  color: #e74430;
}
.icn-lyft:before {
  content: "\eee3";
  color: #ff00bf;
}
.icn-macys:before {
  content: "\eee4";
  color: #e21a2c;
}
.icn-magento:before {
  content: "\eee5";
  color: #ee672f;
}
.icn-magisk:before {
  content: "\eee6";
  color: #00af9c;
}
.icn-mail-dot-ru:before {
  content: "\eee7";
  color: #168de2;
}
.icn-mailchimp:before {
  content: "\eee8";
  color: #ffe01b;
}
.icn-makerbot:before {
  content: "\eee9";
  color: #ff1e0d;
}
.icn-manageiq:before {
  content: "\eeea";
  color: #ef2929;
}
.icn-manjaro:before {
  content: "\eeeb";
  color: #35bf5c;
}
.icn-mapbox:before {
  content: "\eeec";
}
.icn-markdown:before {
  content: "\eeed";
}
.icn-marketo:before {
  content: "\eeee";
  color: #5c4c9f;
}
.icn-mastercard:before {
  content: "\eeef";
  color: #eb001b;
}
.icn-mastodon:before {
  content: "\eef0";
  color: #3088d4;
}
.icn-materialdesign:before {
  content: "\eef1";
  color: #757575;
}
.icn-mathworks:before {
  content: "\eef2";
  color: #0076a8;
}
.icn-matrix:before {
  content: "\eef3";
}
.icn-mattermost:before {
  content: "\eef4";
  color: #0072c6;
}
.icn-matternet:before {
  content: "\eef5";
}
.icn-mcafee:before {
  content: "\eef6";
  color: #c01818;
}
.icn-mdnwebdocs:before {
  content: "\eef7";
}
.icn-mediafire:before {
  content: "\eef8";
  color: #1299f3;
}
.icn-mediatemple:before {
  content: "\eef9";
}
.icn-medium:before {
  content: "\eefa";
}
.icn-meetup:before {
  content: "\eefb";
  color: #ed1c40;
}
.icn-mega:before {
  content: "\eefc";
  color: #d9272e;
}
.icn-mendeley:before {
  content: "\eefd";
  color: #9d1620;
}
.icn-mercedes:before {
  content: "\eefe";
}
.icn-messenger:before {
  content: "\eeff";
  color: #00b2ff;
}
.icn-meteor:before {
  content: "\ef00";
  color: #de4f4f;
}
.icn-micro-dot-blog:before {
  content: "\ef01";
  color: #fd8308;
}
.icn-microgenetics:before {
  content: "\ef02";
  color: #f00;
}
.icn-microsoft:before {
  content: "\ef03";
  color: #666;
}
.icn-microsoftaccess:before {
  content: "\ef04";
  color: #ba141a;
}
.icn-microsoftazure:before {
  content: "\ef05";
  color: #0089d6;
}
.icn-microsoftedge:before {
  content: "\ef06";
  color: #0078d7;
}
.icn-microsoftexcel:before {
  content: "\ef07";
  color: #217346;
}
.icn-microsoftoffice:before {
  content: "\ef08";
  color: #e74025;
}
.icn-microsoftonedrive:before {
  content: "\ef09";
  color: #094ab2;
}
.icn-microsoftonenote:before {
  content: "\ef0a";
  color: #80397b;
}
.icn-microsoftoutlook:before {
  content: "\ef0b";
  color: #0072c6;
}
.icn-microsoftpowerpoint:before {
  content: "\ef0c";
  color: #d24726;
}
.icn-microsoftteams:before {
  content: "\ef0d";
  color: #6264a7;
}
.icn-microsoftword:before {
  content: "\ef0e";
  color: #2b579a;
}
.icn-microstrategy:before {
  content: "\ef0f";
  color: #d9232e;
}
.icn-minds:before {
  content: "\ef10";
  color: #fed12f;
}
.icn-minetest:before {
  content: "\ef11";
  color: #53ac56;
}
.icn-minutemailer:before {
  content: "\ef12";
  color: #3abfe6;
}
.icn-mix:before {
  content: "\ef13";
  color: #ff8126;
}
.icn-mixcloud:before {
  content: "\ef14";
  color: #314359;
}
.icn-mixer:before {
  content: "\ef15";
  color: #002050;
}
.icn-mojang:before {
  content: "\ef16";
  color: #db1f29;
}
.icn-monero:before {
  content: "\ef17";
  color: #f60;
}
.icn-mongodb:before {
  content: "\ef18";
  color: #47a248;
}
.icn-monkeytie:before {
  content: "\ef19";
  color: #ffc619;
}
.icn-monogram:before {
  content: "\ef1a";
  color: #fdb22a;
}
.icn-monster:before {
  content: "\ef1b";
  color: #6e46ae;
}
.icn-monzo:before {
  content: "\ef1c";
}
.icn-moo:before {
  content: "\ef1d";
  color: #00945e;
}
.icn-mozilla:before {
  content: "\ef1e";
}
.icn-mozillafirefox:before {
  content: "\ef1f";
  color: #ff7139;
}
.icn-musescore:before {
  content: "\ef20";
  color: #1a70b8;
}
.icn-mxlinux:before {
  content: "\ef21";
}
.icn-myspace:before {
  content: "\ef22";
}
.icn-mysql:before {
  content: "\ef23";
  color: #4479a1;
}
.icn-nativescript:before {
  content: "\ef24";
  color: #3655ff;
}
.icn-nec:before {
  content: "\ef25";
  color: #1414a0;
}
.icn-neo4j:before {
  content: "\ef26";
  color: #008cc1;
}
.icn-netflix:before {
  content: "\ef27";
  color: #e50914;
}
.icn-netlify:before {
  content: "\ef28";
  color: #00c7b7;
}
.icn-next-dot-js:before {
  content: "\ef29";
}
.icn-nextcloud:before {
  content: "\ef2a";
  color: #0082c9;
}
.icn-nextdoor:before {
  content: "\ef2b";
  color: #00b246;
}
.icn-nginx:before {
  content: "\ef2c";
  color: #269539;
}
.icn-nim:before {
  content: "\ef2d";
  color: #ffe953;
}
.icn-nintendo:before {
  content: "\ef2e";
  color: #8f8f8f;
}
.icn-nintendo3ds:before {
  content: "\ef2f";
  color: #d12228;
}
.icn-nintendogamecube:before {
  content: "\ef30";
  color: #6a5fbb;
}
.icn-nintendoswitch:before {
  content: "\ef31";
  color: #e60012;
}
.icn-node-dot-js:before {
  content: "\ef32";
  color: #393;
}
.icn-node-red:before {
  content: "\ef33";
  color: #8f0000;
}
.icn-nodemon:before {
  content: "\ef34";
  color: #76d04b;
}
.icn-nokia:before {
  content: "\ef35";
  color: #124191;
}
.icn-notion:before {
  content: "\ef36";
}
.icn-notist:before {
  content: "\ef37";
}
.icn-npm1:before {
  content: "\ef38";
  color: #cb3837;
}
.icn-nucleo:before {
  content: "\ef39";
  color: #766dcc;
}
.icn-nuget:before {
  content: "\ef3a";
  color: #004880;
}
.icn-nutanix:before {
  content: "\ef3b";
  color: #024da1;
}
.icn-nuxt-dot-js:before {
  content: "\ef3c";
  color: #00c58e;
}
.icn-nvidia:before {
  content: "\ef3d";
  color: #76b900;
}
.icn-obsstudio:before {
  content: "\ef3e";
}
.icn-ocaml:before {
  content: "\ef3f";
  color: #ec6813;
}
.icn-octave:before {
  content: "\ef40";
  color: #0790c0;
}
.icn-octopusdeploy:before {
  content: "\ef41";
  color: #2f93e0;
}
.icn-oculus:before {
  content: "\ef42";
}
.icn-odnoklassniki:before {
  content: "\ef43";
  color: #f4731c;
}
.icn-openaccess:before {
  content: "\ef44";
  color: #f68212;
}
.icn-openapiinitiative:before {
  content: "\ef45";
  color: #6ba539;
}
.icn-opencollective:before {
  content: "\ef46";
  color: #7fadf2;
}
.icn-openid:before {
  content: "\ef47";
  color: #f78c40;
}
.icn-opensourceinitiative:before {
  content: "\ef48";
  color: #3da639;
}
.icn-openssl:before {
  content: "\ef49";
  color: #721412;
}
.icn-openstreetmap:before {
  content: "\ef4a";
  color: #7ebc6f;
}
.icn-opensuse:before {
  content: "\ef4b";
  color: #73ba25;
}
.icn-openvpn:before {
  content: "\ef4c";
  color: #ea7e20;
}
.icn-opera1:before {
  content: "\ef4d";
  color: #ff1b2d;
}
.icn-opsgenie:before {
  content: "\ef4e";
}
.icn-oracle:before {
  content: "\ef4f";
  color: #f80000;
}
.icn-orcid:before {
  content: "\ef50";
  color: #a6ce39;
}
.icn-origin:before {
  content: "\ef51";
  color: #f56c2d;
}
.icn-osmc:before {
  content: "\ef52";
}
.icn-overcast:before {
  content: "\ef53";
  color: #fc7e0f;
}
.icn-overleaf:before {
  content: "\ef54";
  color: #47a141;
}
.icn-ovh:before {
  content: "\ef55";
  color: #123f6d;
}
.icn-pagekit:before {
  content: "\ef56";
}
.icn-palantir:before {
  content: "\ef57";
}
.icn-paloaltosoftware:before {
  content: "\ef58";
  color: #83da77;
}
.icn-pandora:before {
  content: "\ef59";
  color: #005483;
}
.icn-pantheon:before {
  content: "\ef5a";
  color: #efd01b;
}
.icn-parse-dot-ly:before {
  content: "\ef5b";
  color: #5ba745;
}
.icn-pastebin:before {
  content: "\ef5c";
  color: #02456c;
}
.icn-patreon:before {
  content: "\ef5d";
  color: #f96854;
}
.icn-paypal2:before {
  content: "\ef5e";
  color: #00457c;
}
.icn-peertube:before {
  content: "\ef5f";
  color: #f1680d;
}
.icn-periscope:before {
  content: "\ef60";
  color: #40a4c4;
}
.icn-php:before {
  content: "\ef61";
  color: #777bb4;
}
.icn-pi-hole:before {
  content: "\ef62";
  color: #f60d1a;
}
.icn-picarto-dot-tv:before {
  content: "\ef63";
  color: #1da456;
}
.icn-pinboard:before {
  content: "\ef64";
  color: #00f;
}
.icn-pingdom:before {
  content: "\ef65";
  color: #fff000;
}
.icn-pingup:before {
  content: "\ef66";
  color: #00b1ab;
}
.icn-pinterest3:before {
  content: "\ef67";
  color: #bd081c;
}
.icn-pivotaltracker:before {
  content: "\ef68";
  color: #517a9e;
}
.icn-pjsip:before {
  content: "\ef69";
  color: #f86001;
}
.icn-plangrid:before {
  content: "\ef6a";
  color: #0085de;
}
.icn-player-dot-me:before {
  content: "\ef6b";
  color: #c0379a;
}
.icn-playerfm:before {
  content: "\ef6c";
  color: #c8122a;
}
.icn-playstation:before {
  content: "\ef6d";
  color: #003791;
}
.icn-playstation3:before {
  content: "\ef6e";
  color: #003791;
}
.icn-playstation4:before {
  content: "\ef6f";
  color: #003791;
}
.icn-plesk:before {
  content: "\ef70";
  color: #52bbe6;
}
.icn-plex:before {
  content: "\ef71";
  color: #e5a00d;
}
.icn-pluralsight:before {
  content: "\ef72";
  color: #f15b2a;
}
.icn-plurk:before {
  content: "\ef73";
  color: #ff574d;
}
.icn-pocket:before {
  content: "\ef74";
  color: #ef3f56;
}
.icn-pocketcasts:before {
  content: "\ef75";
  color: #f43e37;
}
.icn-postgresql:before {
  content: "\ef76";
  color: #336791;
}
.icn-postman:before {
  content: "\ef77";
  color: #ff6c37;
}
.icn-postwoman:before {
  content: "\ef78";
  color: #50fa7b;
}
.icn-powershell:before {
  content: "\ef79";
  color: #5391fe;
}
.icn-prestashop:before {
  content: "\ef7a";
  color: #df0067;
}
.icn-prettier:before {
  content: "\ef7b";
  color: #f7b93e;
}
.icn-prismic:before {
  content: "\ef7c";
  color: #484a7a;
}
.icn-probot:before {
  content: "\ef7d";
  color: #00b0d8;
}
.icn-processwire:before {
  content: "\ef7e";
  color: #ef145f;
}
.icn-producthunt:before {
  content: "\ef7f";
  color: #da552f;
}
.icn-prometheus:before {
  content: "\ef80";
  color: #e6522c;
}
.icn-proto-dot-io:before {
  content: "\ef81";
  color: #34a7c1;
}
.icn-protonmail:before {
  content: "\ef82";
  color: #8b89cc;
}
.icn-proxmox:before {
  content: "\ef83";
  color: #e57000;
}
.icn-publons:before {
  content: "\ef84";
  color: #369;
}
.icn-purescript:before {
  content: "\ef85";
}
.icn-pypi:before {
  content: "\ef86";
  color: #3775a9;
}
.icn-python:before {
  content: "\ef87";
  color: #3776ab;
}
.icn-pytorch:before {
  content: "\ef88";
  color: #ee4c2c;
}
.icn-pyup:before {
  content: "\ef89";
  color: #9f55ff;
}
.icn-qemu:before {
  content: "\ef8a";
  color: #f60;
}
.icn-qgis:before {
  content: "\ef8b";
  color: #589632;
}
.icn-qiita:before {
  content: "\ef8c";
  color: #55c500;
}
.icn-qualcomm:before {
  content: "\ef8d";
  color: #3253dc;
}
.icn-quantcast:before {
  content: "\ef8e";
}
.icn-quantopian:before {
  content: "\ef8f";
  color: #c50000;
}
.icn-quarkus:before {
  content: "\ef90";
  color: #4695eb;
}
.icn-quicktime:before {
  content: "\ef91";
  color: #1c69f0;
}
.icn-quip:before {
  content: "\ef92";
  color: #f27557;
}
.icn-quora:before {
  content: "\ef93";
  color: #b92b27;
}
.icn-qwiklabs:before {
  content: "\ef94";
  color: #f5cd0e;
}
.icn-qzone:before {
  content: "\ef95";
  color: #fece00;
}
.icn-r:before {
  content: "\ef96";
  color: #276dc3;
}
.icn-rabbitmq:before {
  content: "\ef97";
  color: #f60;
}
.icn-radiopublic:before {
  content: "\ef98";
  color: #ce262f;
}
.icn-rails:before {
  content: "\ef99";
  color: #c00;
}
.icn-raspberrypi:before {
  content: "\ef9a";
  color: #c51a4a;
}
.icn-react:before {
  content: "\ef9b";
  color: #61dafb;
}
.icn-reactos:before {
  content: "\ef9c";
  color: #08c;
}
.icn-reactrouter:before {
  content: "\ef9d";
  color: #ca4245;
}
.icn-readthedocs:before {
  content: "\ef9e";
  color: #8ca1af;
}
.icn-realm:before {
  content: "\ef9f";
  color: #39477f;
}
.icn-reason:before {
  content: "\efa0";
  color: #dd4b39;
}
.icn-reasonstudios:before {
  content: "\efa1";
  color: #fff;
}
.icn-redbubble:before {
  content: "\efa2";
  color: #e41321;
}
.icn-reddit1:before {
  content: "\efa3";
  color: #ff4500;
}
.icn-redhat:before {
  content: "\efa4";
  color: #e00;
}
.icn-redis:before {
  content: "\efa5";
  color: #d82c20;
}
.icn-redux:before {
  content: "\efa6";
  color: #764abc;
}
.icn-renren2:before {
  content: "\efa7";
  color: #217dc6;
}
.icn-repl-dot-it:before {
  content: "\efa8";
  color: #667881;
}
.icn-researchgate:before {
  content: "\efa9";
  color: #0cb;
}
.icn-reverbnation:before {
  content: "\efaa";
  color: #e43526;
}
.icn-riot:before {
  content: "\efab";
  color: #368bd6;
}
.icn-ripple:before {
  content: "\efac";
  color: #0085c0;
}
.icn-riseup:before {
  content: "\efad";
  color: #5e9ee3;
}
.icn-rollup-dot-js:before {
  content: "\efae";
  color: #ec4a3f;
}
.icn-roots:before {
  content: "\efaf";
  color: #525ddc;
}
.icn-roundcube:before {
  content: "\efb0";
  color: #37beff;
}
.icn-rss4:before {
  content: "\efb1";
  color: #ffa500;
}
.icn-rstudio:before {
  content: "\efb2";
  color: #75aadb;
}
.icn-ruby:before {
  content: "\efb3";
  color: #cc342d;
}
.icn-rubygems:before {
  content: "\efb4";
  color: #e9573f;
}
.icn-runkeeper:before {
  content: "\efb5";
  color: #2dc9d7;
}
.icn-rust:before {
  content: "\efb6";
}
.icn-safari1:before {
  content: "\efb7";
}
.icn-sahibinden:before {
  content: "\efb8";
  color: #ffe800;
}
.icn-salesforce:before {
  content: "\efb9";
  color: #00a1e0;
}
.icn-saltstack:before {
  content: "\efba";
  color: #00eace;
}
.icn-samsung:before {
  content: "\efbb";
  color: #1428a0;
}
.icn-samsungpay:before {
  content: "\efbc";
  color: #1428a0;
}
.icn-sap:before {
  content: "\efbd";
  color: #008fd3;
}
.icn-sass:before {
  content: "\efbe";
  color: #c69;
}
.icn-saucelabs:before {
  content: "\efbf";
  color: #e2231a;
}
.icn-scala:before {
  content: "\efc0";
  color: #dc322f;
}
.icn-scaleway:before {
  content: "\efc1";
  color: #4f0599;
}
.icn-scribd1:before {
  content: "\efc2";
  color: #1a7bba;
}
.icn-scrutinizerci:before {
  content: "\efc3";
  color: #8a9296;
}
.icn-seagate:before {
  content: "\efc4";
  color: #72be4f;
}
.icn-sega:before {
  content: "\efc5";
  color: #0089cf;
}
.icn-sellfy:before {
  content: "\efc6";
  color: #21b352;
}
.icn-semaphoreci:before {
  content: "\efc7";
  color: #19a974;
}
.icn-sensu:before {
  content: "\efc8";
  color: #89c967;
}
.icn-sentry:before {
  content: "\efc9";
  color: #fb4226;
}
.icn-serverfault:before {
  content: "\efca";
  color: #e7282d;
}
.icn-shazam:before {
  content: "\efcb";
  color: #08f;
}
.icn-shell:before {
  content: "\efcc";
  color: #ffd500;
}
.icn-shopify:before {
  content: "\efcd";
  color: #7ab55c;
}
.icn-showpad:before {
  content: "\efce";
  color: #2d2e83;
}
.icn-siemens:before {
  content: "\efcf";
  color: #099;
}
.icn-signal1:before {
  content: "\efd0";
  color: #2592e9;
}
.icn-simpleicons:before {
  content: "\efd1";
}
.icn-sinaweibo:before {
  content: "\efd2";
  color: #e6162d;
}
.icn-sitepoint:before {
  content: "\efd3";
  color: #258aaf;
}
.icn-sketch:before {
  content: "\efd4";
  color: #f7b500;
}
.icn-skillshare:before {
  content: "\efd5";
  color: #17c5cb;
}
.icn-skyliner:before {
  content: "\efd6";
  color: #2fcea0;
}
.icn-skype2:before {
  content: "\efd7";
  color: #00aff0;
}
.icn-slack:before {
  content: "\efd8";
  color: #4a154b;
}
.icn-slashdot:before {
  content: "\efd9";
  color: #026664;
}
.icn-slickpic:before {
  content: "\efda";
  color: #ff880f;
}
.icn-slides:before {
  content: "\efdb";
  color: #e4637c;
}
.icn-smashingmagazine:before {
  content: "\efdc";
  color: #e85c33;
}
.icn-smugmug:before {
  content: "\efdd";
  color: #6db944;
}
.icn-snapchat:before {
  content: "\efde";
  color: #fffc00;
}
.icn-snapcraft:before {
  content: "\efdf";
  color: #82bea0;
}
.icn-snyk:before {
  content: "\efe0";
  color: #4c4a73;
}
.icn-society6:before {
  content: "\efe1";
}
.icn-socket-dot-io:before {
  content: "\efe2";
}
.icn-sogou:before {
  content: "\efe3";
  color: #fb6022;
}
.icn-solus:before {
  content: "\efe4";
  color: #5294e2;
}
.icn-sonarcloud:before {
  content: "\efe5";
  color: #f3702a;
}
.icn-sonarlint:before {
  content: "\efe6";
  color: #cc2026;
}
.icn-sonarqube:before {
  content: "\efe7";
  color: #4e9bcd;
}
.icn-sonarsource:before {
  content: "\efe8";
  color: #cb3032;
}
.icn-songkick:before {
  content: "\efe9";
  color: #f80046;
}
.icn-sonicwall:before {
  content: "\efea";
  color: #f60;
}
.icn-sonos:before {
  content: "\efeb";
}
.icn-soundcloud3:before {
  content: "\efec";
  color: #f30;
}
.icn-sourceengine:before {
  content: "\efed";
  color: #f79a10;
}
.icn-sourceforge:before {
  content: "\efee";
  color: #535353;
}
.icn-sourcegraph:before {
  content: "\efef";
  color: #00b4f2;
}
.icn-spacemacs:before {
  content: "\eff0";
  color: #9266cc;
}
.icn-spacex:before {
  content: "\eff1";
  color: #005288;
}
.icn-sparkfun:before {
  content: "\eff2";
  color: #e53525;
}
.icn-sparkpost:before {
  content: "\eff3";
  color: #fa6423;
}
.icn-spdx:before {
  content: "\eff4";
  color: #4398cc;
}
.icn-speakerdeck:before {
  content: "\eff5";
  color: #396;
}
.icn-spectrum:before {
  content: "\eff6";
  color: #7b16ff;
}
.icn-spotify2:before {
  content: "\eff7";
  color: #1ed760;
}
.icn-spotlight:before {
  content: "\eff8";
  color: #352a71;
}
.icn-spreaker:before {
  content: "\eff9";
  color: #f5c300;
}
.icn-spring:before {
  content: "\effa";
  color: #6db33f;
}
.icn-sprint:before {
  content: "\effb";
  color: #ffce0a;
}
.icn-square:before {
  content: "\effc";
}
.icn-squarespace:before {
  content: "\effd";
}
.icn-stackbit:before {
  content: "\effe";
  color: #3eb0fd;
}
.icn-stackexchange:before {
  content: "\efff";
  color: #1e5397;
}
.icn-stackoverflow1:before {
  content: "\f000";
  color: #fe7a16;
}
.icn-stackpath:before {
  content: "\f001";
}
.icn-stackshare:before {
  content: "\f002";
  color: #0690fa;
}
.icn-stadia:before {
  content: "\f003";
  color: #cd2640;
}
.icn-statamic:before {
  content: "\f004";
}
.icn-staticman:before {
  content: "\f005";
}
.icn-statuspage:before {
  content: "\f006";
}
.icn-steam1:before {
  content: "\f007";
}
.icn-steamworks:before {
  content: "\f008";
}
.icn-steem:before {
  content: "\f009";
  color: #4ba2f2;
}
.icn-steemit:before {
  content: "\f00a";
  color: #06d6a9;
}
.icn-steinberg:before {
  content: "\f00b";
  color: #c90827;
}
.icn-stencyl:before {
  content: "\f00c";
  color: #8e1c04;
}
.icn-stitcher:before {
  content: "\f00d";
}
.icn-storify:before {
  content: "\f00e";
  color: #3a98d9;
}
.icn-storybook:before {
  content: "\f00f";
  color: #ff4785;
}
.icn-strapi:before {
  content: "\f010";
  color: #2e7eea;
}
.icn-strava:before {
  content: "\f011";
  color: #fc4c02;
}
.icn-stripe:before {
  content: "\f012";
  color: #008cdd;
}
.icn-strongswan:before {
  content: "\f013";
  color: #e00033;
}
.icn-stubhub:before {
  content: "\f014";
  color: #003168;
}
.icn-styled-components:before {
  content: "\f015";
  color: #db7093;
}
.icn-styleshare:before {
  content: "\f016";
}
.icn-stylus:before {
  content: "\f017";
}
.icn-sublimetext:before {
  content: "\f018";
  color: #ff9800;
}
.icn-subversion:before {
  content: "\f019";
  color: #809cc9;
}
.icn-superuser:before {
  content: "\f01a";
  color: #2eace3;
}
.icn-svelte:before {
  content: "\f01b";
  color: #ff3e00;
}
.icn-svg1:before {
  content: "\f01c";
  color: #ffb13b;
}
.icn-svgo:before {
  content: "\f01d";
  color: #14b9ff;
}
.icn-swagger:before {
  content: "\f01e";
  color: #85ea2d;
}
.icn-swarm1:before {
  content: "\f01f";
  color: #ffa633;
}
.icn-swift:before {
  content: "\f020";
  color: #fa7343;
}
.icn-symantec:before {
  content: "\f021";
  color: #fdb511;
}
.icn-symfony:before {
  content: "\f022";
}
.icn-synology:before {
  content: "\f023";
  color: #b6b5b6;
}
.icn-t-mobile:before {
  content: "\f024";
  color: #e20074;
}
.icn-tableau:before {
  content: "\f025";
  color: #e97627;
}
.icn-tails:before {
  content: "\f026";
  color: #56347c;
}
.icn-tailwindcss:before {
  content: "\f027";
  color: #38b2ac;
}
.icn-tapas:before {
  content: "\f028";
  color: #ffce00;
}
.icn-teamviewer:before {
  content: "\f029";
  color: #0e8ee9;
}
.icn-ted:before {
  content: "\f02a";
  color: #e62b1e;
}
.icn-teespring:before {
  content: "\f02b";
  color: #39ace6;
}
.icn-telegram1:before {
  content: "\f02c";
  color: #2ca5e0;
}
.icn-tencentqq:before {
  content: "\f02d";
  color: #eb1923;
}
.icn-tencentweibo:before {
  content: "\f02e";
  color: #20b8e5;
}
.icn-tensorflow:before {
  content: "\f02f";
  color: #ff6f00;
}
.icn-teradata:before {
  content: "\f030";
  color: #f37440;
}
.icn-terraform:before {
  content: "\f031";
  color: #623ce4;
}
.icn-tesla:before {
  content: "\f032";
  color: #c00;
}
.icn-themighty:before {
  content: "\f033";
  color: #d0072a;
}
.icn-themoviedatabase:before {
  content: "\f034";
  color: #01d277;
}
.icn-tidal:before {
  content: "\f035";
}
.icn-tiktok:before {
  content: "\f036";
}
.icn-timescale:before {
  content: "\f037";
  color: #fdb515;
}
.icn-tinder:before {
  content: "\f038";
  color: #ff6b6b;
}
.icn-todoist:before {
  content: "\f039";
  color: #e44332;
}
.icn-toggl:before {
  content: "\f03a";
  color: #e01b22;
}
.icn-topcoder:before {
  content: "\f03b";
  color: #29a8e0;
}
.icn-toptal:before {
  content: "\f03c";
  color: #3863a0;
}
.icn-tor:before {
  content: "\f03d";
  color: #7e4798;
}
.icn-toshiba:before {
  content: "\f03e";
  color: #f00;
}
.icn-trainerroad:before {
  content: "\f03f";
  color: #e12726;
}
.icn-trakt:before {
  content: "\f040";
  color: #ed1c24;
}
.icn-travisci:before {
  content: "\f041";
  color: #3eaaaf;
}
.icn-treehouse:before {
  content: "\f042";
  color: #5fcf80;
}
.icn-trello1:before {
  content: "\f043";
  color: #0079bf;
}
.icn-trendmicro:before {
  content: "\f044";
  color: #d71921;
}
.icn-tripadvisor:before {
  content: "\f045";
  color: #00af87;
}
.icn-trulia:before {
  content: "\f046";
  color: #53b50a;
}
.icn-trustpilot:before {
  content: "\f047";
  color: #00b67a;
}
.icn-tumblr3:before {
  content: "\f048";
  color: #36465d;
}
.icn-turkishairlines:before {
  content: "\f049";
  color: #c70a0c;
}
.icn-twilio:before {
  content: "\f04a";
  color: #f22f46;
}
.icn-twitch1:before {
  content: "\f04b";
  color: #6441a4;
}
.icn-twitter2:before {
  content: "\f04c";
  color: #1da1f2;
}
.icn-twoo:before {
  content: "\f04d";
  color: #ff7102;
}
.icn-typescript:before {
  content: "\f04e";
  color: #007acc;
}
.icn-typo3:before {
  content: "\f04f";
  color: #ff8700;
}
.icn-uber:before {
  content: "\f050";
}
.icn-ubereats:before {
  content: "\f051";
  color: #5fb709;
}
.icn-ubisoft:before {
  content: "\f052";
}
.icn-ublockorigin:before {
  content: "\f053";
  color: #800000;
}
.icn-ubuntu:before {
  content: "\f054";
  color: #e95420;
}
.icn-udacity:before {
  content: "\f055";
  color: #01b3e3;
}
.icn-udemy:before {
  content: "\f056";
  color: #ec5252;
}
.icn-uikit:before {
  content: "\f057";
  color: #2396f3;
}
.icn-umbraco:before {
  content: "\f058";
  color: #00bec1;
}
.icn-unity:before {
  content: "\f059";
}
.icn-unrealengine:before {
  content: "\f05a";
}
.icn-unsplash:before {
  content: "\f05b";
}
.icn-untappd:before {
  content: "\f05c";
  color: #ffc000;
}
.icn-upwork:before {
  content: "\f05d";
  color: #6fda44;
}
.icn-v:before {
  content: "\f05e";
  color: #5d87bf;
}
.icn-v8:before {
  content: "\f05f";
  color: #4b8bf5;
}
.icn-vagrant:before {
  content: "\f060";
  color: #1563ff;
}
.icn-valve:before {
  content: "\f061";
  color: #f74843;
}
.icn-veeam:before {
  content: "\f062";
  color: #00b336;
}
.icn-venmo:before {
  content: "\f063";
  color: #3d95ce;
}
.icn-verizon:before {
  content: "\f064";
  color: #cd040b;
}
.icn-viadeo:before {
  content: "\f065";
  color: #f88d2d;
}
.icn-viber:before {
  content: "\f066";
  color: #665cac;
}
.icn-vim:before {
  content: "\f067";
  color: #019733;
}
.icn-vimeo3:before {
  content: "\f068";
  color: #1ab7ea;
}
.icn-vine2:before {
  content: "\f069";
  color: #11b48a;
}
.icn-virb:before {
  content: "\f06a";
  color: #0093da;
}
.icn-visa:before {
  content: "\f06b";
  color: #142787;
}
.icn-visualstudio:before {
  content: "\f06c";
  color: #5c2d91;
}
.icn-visualstudiocode:before {
  content: "\f06d";
  color: #007acc;
}
.icn-vk2:before {
  content: "\f06e";
  color: #4680c2;
}
.icn-vlcmediaplayer:before {
  content: "\f06f";
  color: #f80;
}
.icn-vodafone:before {
  content: "\f070";
  color: #e60000;
}
.icn-volkswagen:before {
  content: "\f071";
  color: #151f5d;
}
.icn-vsco:before {
  content: "\f072";
}
.icn-vue-dot-js:before {
  content: "\f073";
  color: #4fc08d;
}
.icn-w3c:before {
  content: "\f074";
  color: #005a9c;
}
.icn-wattpad:before {
  content: "\f075";
  color: #f68d12;
}
.icn-waze:before {
  content: "\f076";
  color: #333665;
}
.icn-weasyl:before {
  content: "\f077";
  color: #900;
}
.icn-webauthn:before {
  content: "\f078";
  color: #3423a6;
}
.icn-webcomponents-dot-org:before {
  content: "\f079";
  color: #29abe2;
}
.icn-webmin:before {
  content: "\f07a";
  color: #7da0d0;
}
.icn-webpack:before {
  content: "\f07b";
  color: #8dd6f9;
}
.icn-webstorm:before {
  content: "\f07c";
}
.icn-wechat:before {
  content: "\f07d";
  color: #7bb32e;
}
.icn-whatsapp1:before {
  content: "\f07e";
  color: #25d366;
}
.icn-wheniwork:before {
  content: "\f07f";
  color: #51a33d;
}
.icn-whitesource:before {
  content: "\f080";
  color: #161d4e;
}
.icn-wii:before {
  content: "\f081";
  color: #8b8b8b;
}
.icn-wiiu:before {
  content: "\f082";
  color: #8b8b8b;
}
.icn-wikipedia1:before {
  content: "\f083";
}
.icn-windows1:before {
  content: "\f084";
  color: #0078d6;
}
.icn-wire:before {
  content: "\f085";
}
.icn-wireguard:before {
  content: "\f086";
  color: #88171a;
}
.icn-wish:before {
  content: "\f087";
  color: #2fb7ec;
}
.icn-wix:before {
  content: "\f088";
  color: #faad4d;
}
.icn-wolfram:before {
  content: "\f089";
  color: #d10;
}
.icn-wolframlanguage:before {
  content: "\f08a";
  color: #d10;
}
.icn-wolframmathematica:before {
  content: "\f08b";
  color: #d10;
}
.icn-wordpress1:before {
  content: "\f08c";
  color: #21759b;
}
.icn-workplace:before {
  content: "\f08d";
}
.icn-wpengine:before {
  content: "\f08e";
  color: #40bac8;
}
.icn-write-dot-as:before {
  content: "\f08f";
  color: #5bc4ee;
}
.icn-x-dot-org:before {
  content: "\f090";
  color: #f28834;
}
.icn-x-pack:before {
  content: "\f091";
  color: #005571;
}
.icn-xamarin:before {
  content: "\f092";
  color: #4393d4;
}
.icn-xbox:before {
  content: "\f093";
  color: #107c10;
}
.icn-xcode:before {
  content: "\f094";
  color: #1575f9;
}
.icn-xdadevelopers:before {
  content: "\f095";
  color: #f59812;
}
.icn-xero:before {
  content: "\f096";
  color: #13b5ea;
}
.icn-xfce:before {
  content: "\f097";
  color: #2284f2;
}
.icn-xiaomi:before {
  content: "\f098";
  color: #fa6709;
}
.icn-xing3:before {
  content: "\f099";
  color: #006567;
}
.icn-xmpp:before {
  content: "\f09a";
  color: #002b5c;
}
.icn-xrp:before {
  content: "\f09b";
  color: #25a768;
}
.icn-xsplit:before {
  content: "\f09c";
  color: #0095de;
}
.icn-yahoo1:before {
  content: "\f09d";
  color: #6001d2;
}
.icn-yamahacorporation:before {
  content: "\f09e";
  color: #4b1e78;
}
.icn-yamahamotorcorporation:before {
  content: "\f09f";
  color: #e60012;
}
.icn-yammer:before {
  content: "\f0a0";
  color: #0072c6;
}
.icn-yandex:before {
  content: "\f0a1";
  color: #f00;
}
.icn-yarn:before {
  content: "\f0a2";
  color: #2c8ebb;
}
.icn-ycombinator:before {
  content: "\f0a3";
  color: #f0652f;
}
.icn-yelp2:before {
  content: "\f0a4";
  color: #d32323;
}
.icn-youtube3:before {
  content: "\f0a5";
  color: #f00;
}
.icn-zalando:before {
  content: "\f0a6";
  color: #ff6900;
}
.icn-zapier:before {
  content: "\f0a7";
  color: #ff4a00;
}
.icn-zeit:before {
  content: "\f0a8";
}
.icn-zend:before {
  content: "\f0a9";
  color: #0679ea;
}
.icn-zendesk:before {
  content: "\f0aa";
}
.icn-zendframework:before {
  content: "\f0ab";
  color: #68b604;
}
.icn-zeromq:before {
  content: "\f0ac";
  color: #df0000;
}
.icn-zerply:before {
  content: "\f0ad";
  color: #9dbc7a;
}
.icn-zhihu:before {
  content: "\f0ae";
  color: #0084ff;
}
.icn-zillow:before {
  content: "\f0af";
  color: #0074e4;
}
.icn-zingat:before {
  content: "\f0b0";
  color: #009cfb;
}
.icn-zoom1:before {
  content: "\f0b1";
  color: #2d8cff;
}
.icn-zorin:before {
  content: "\f0b2";
  color: #0cc1f3;
}
.icn-zulip:before {
  content: "\f0b3";
  color: #52c2af;
}
.icn-home:before {
  content: "\f0b4";
}
.icn-home2:before {
  content: "\f0b5";
}
.icn-home3:before {
  content: "\f0b6";
}
.icn-office:before {
  content: "\f0b7";
}
.icn-newspaper:before {
  content: "\f0b8";
}
.icn-pencil:before {
  content: "\f0b9";
}
.icn-pencil2:before {
  content: "\f0ba";
}
.icn-quill:before {
  content: "\f0bb";
}
.icn-pen:before {
  content: "\f0bc";
}
.icn-blog:before {
  content: "\f0bd";
}
.icn-eyedropper:before {
  content: "\f0be";
}
.icn-droplet:before {
  content: "\f0bf";
}
.icn-paint-format:before {
  content: "\f0c0";
}
.icn-image:before {
  content: "\f0c1";
}
.icn-images:before {
  content: "\f0c2";
}
.icn-camera:before {
  content: "\f0c3";
}
.icn-headphones:before {
  content: "\f0c4";
}
.icn-music:before {
  content: "\f0c5";
}
.icn-play:before {
  content: "\f0c6";
}
.icn-film:before {
  content: "\f0c7";
}
.icn-video-camera:before {
  content: "\f0c8";
}
.icn-dice:before {
  content: "\f0c9";
}
.icn-pacman:before {
  content: "\f0ca";
}
.icn-spades:before {
  content: "\f0cb";
}
.icn-clubs:before {
  content: "\f0cc";
}
.icn-diamonds:before {
  content: "\f0cd";
}
.icn-bullhorn:before {
  content: "\f0ce";
}
.icn-connection:before {
  content: "\f0cf";
}
.icn-podcast:before {
  content: "\f0d0";
}
.icn-feed:before {
  content: "\f0d1";
}
.icn-mic:before {
  content: "\f0d2";
}
.icn-book:before {
  content: "\f0d3";
}
.icn-books:before {
  content: "\f0d4";
}
.icn-library:before {
  content: "\f0d5";
}
.icn-file-text:before {
  content: "\f0d6";
}
.icn-profile:before {
  content: "\f0d7";
}
.icn-file-empty:before {
  content: "\f0d8";
}
.icn-files-empty:before {
  content: "\f0d9";
}
.icn-file-text2:before {
  content: "\f0da";
}
.icn-file-picture:before {
  content: "\f0db";
}
.icn-file-music:before {
  content: "\f0dc";
}
.icn-file-play:before {
  content: "\f0dd";
}
.icn-file-video:before {
  content: "\f0de";
}
.icn-file-zip:before {
  content: "\f0df";
}
.icn-copy:before {
  content: "\f0e0";
}
.icn-paste:before {
  content: "\f0e1";
}
.icn-stack:before {
  content: "\f0e2";
}
.icn-folder:before {
  content: "\f0e3";
}
.icn-folder-open:before {
  content: "\f0e4";
}
.icn-folder-plus:before {
  content: "\f0e5";
}
.icn-folder-minus:before {
  content: "\f0e6";
}
.icn-folder-download:before {
  content: "\f0e7";
}
.icn-folder-upload:before {
  content: "\f0e8";
}
.icn-price-tag:before {
  content: "\f0e9";
}
.icn-price-tags:before {
  content: "\f0ea";
}
.icn-barcode:before {
  content: "\f0eb";
}
.icn-qrcode:before {
  content: "\f0ec";
}
.icn-ticket:before {
  content: "\f0ed";
}
.icn-cart:before {
  content: "\f0ee";
}
.icn-coin-dollar:before {
  content: "\f0ef";
}
.icn-coin-euro:before {
  content: "\f0f0";
}
.icn-coin-pound:before {
  content: "\f0f1";
}
.icn-coin-yen:before {
  content: "\f0f2";
}
.icn-credit-card:before {
  content: "\f0f3";
}
.icn-calculator:before {
  content: "\f0f4";
}
.icn-lifebuoy:before {
  content: "\f0f5";
}
.icn-phone:before {
  content: "\f0f6";
}
.icn-phone-hang-up:before {
  content: "\f0f7";
}
.icn-address-book:before {
  content: "\f0f8";
}
.icn-envelop:before {
  content: "\f0f9";
}
.icn-pushpin:before {
  content: "\f0fa";
}
.icn-location:before {
  content: "\f0fb";
}
.icn-location2:before {
  content: "\f0fc";
}
.icn-compass:before {
  content: "\f0fd";
}
.icn-compass2:before {
  content: "\f0fe";
}
.icn-map:before {
  content: "\f0ff";
}
.icn-map2:before {
  content: "\f100";
}
.icn-history:before {
  content: "\f101";
}
.icn-clock:before {
  content: "\f102";
}
.icn-clock2:before {
  content: "\f103";
}
.icn-alarm:before {
  content: "\f104";
}
.icn-bell:before {
  content: "\f105";
}
.icn-stopwatch:before {
  content: "\f106";
}
.icn-calendar:before {
  content: "\f107";
}
.icn-printer:before {
  content: "\f108";
}
.icn-keyboard:before {
  content: "\f109";
}
.icn-display:before {
  content: "\f10a";
}
.icn-laptop:before {
  content: "\f10b";
}
.icn-mobile:before {
  content: "\f10c";
}
.icn-mobile2:before {
  content: "\f10d";
}
.icn-tablet:before {
  content: "\f10e";
}
.icn-tv:before {
  content: "\f10f";
}
.icn-drawer:before {
  content: "\f110";
}
.icn-drawer2:before {
  content: "\f111";
}
.icn-box-add:before {
  content: "\f112";
}
.icn-box-remove:before {
  content: "\f113";
}
.icn-download:before {
  content: "\f114";
}
.icn-upload:before {
  content: "\f115";
}
.icn-floppy-disk:before {
  content: "\f116";
}
.icn-drive:before {
  content: "\f117";
}
.icn-database:before {
  content: "\f118";
}
.icn-undo:before {
  content: "\f119";
}
.icn-redo:before {
  content: "\f11a";
}
.icn-undo2:before {
  content: "\f11b";
}
.icn-redo2:before {
  content: "\f11c";
}
.icn-forward:before {
  content: "\f11d";
}
.icn-reply:before {
  content: "\f11e";
}
.icn-bubble:before {
  content: "\f11f";
}
.icn-bubbles:before {
  content: "\f120";
}
.icn-bubbles2:before {
  content: "\f121";
}
.icn-bubble2:before {
  content: "\f122";
}
.icn-bubbles3:before {
  content: "\f123";
}
.icn-bubbles4:before {
  content: "\f124";
}
.icn-user:before {
  content: "\f125";
}
.icn-users:before {
  content: "\f126";
}
.icn-user-plus:before {
  content: "\f127";
}
.icn-user-minus:before {
  content: "\f128";
}
.icn-user-check:before {
  content: "\f129";
}
.icn-user-tie:before {
  content: "\f12a";
}
.icn-quotes-left:before {
  content: "\f12b";
}
.icn-quotes-right:before {
  content: "\f12c";
}
.icn-hour-glass:before {
  content: "\f12d";
}
.icn-spinner:before {
  content: "\f12e";
}
.icn-spinner2:before {
  content: "\f12f";
}
.icn-spinner3:before {
  content: "\f130";
}
.icn-spinner4:before {
  content: "\f131";
}
.icn-spinner5:before {
  content: "\f132";
}
.icn-spinner6:before {
  content: "\f133";
}
.icn-spinner7:before {
  content: "\f134";
}
.icn-spinner8:before {
  content: "\f135";
}
.icn-spinner9:before {
  content: "\f136";
}
.icn-spinner10:before {
  content: "\f137";
}
.icn-spinner11:before {
  content: "\f138";
}
.icn-binoculars:before {
  content: "\f139";
}
.icn-search:before {
  content: "\f13a";
}
.icn-zoom-in:before {
  content: "\f13b";
}
.icn-zoom-out:before {
  content: "\f13c";
}
.icn-enlarge:before {
  content: "\f13d";
}
.icn-shrink:before {
  content: "\f13e";
}
.icn-enlarge2:before {
  content: "\f13f";
}
.icn-shrink2:before {
  content: "\f140";
}
.icn-key:before {
  content: "\f141";
}
.icn-key2:before {
  content: "\f142";
}
.icn-lock:before {
  content: "\f143";
}
.icn-unlocked:before {
  content: "\f144";
}
.icn-wrench:before {
  content: "\f145";
}
.icn-equalizer:before {
  content: "\f146";
}
.icn-equalizer2:before {
  content: "\f147";
}
.icn-cog:before {
  content: "\f148";
}
.icn-cogs:before {
  content: "\f149";
}
.icn-hammer:before {
  content: "\f14a";
}
.icn-magic-wand:before {
  content: "\f14b";
}
.icn-aid-kit:before {
  content: "\f14c";
}
.icn-bug:before {
  content: "\f14d";
}
.icn-pie-chart:before {
  content: "\f14e";
}
.icn-stats-dots:before {
  content: "\f14f";
}
.icn-stats-bars:before {
  content: "\f150";
}
.icn-stats-bars2:before {
  content: "\f151";
}
.icn-trophy:before {
  content: "\f152";
}
.icn-gift:before {
  content: "\f153";
}
.icn-glass:before {
  content: "\f154";
}
.icn-glass2:before {
  content: "\f155";
}
.icn-mug:before {
  content: "\f156";
}
.icn-spoon-knife:before {
  content: "\f157";
}
.icn-leaf:before {
  content: "\f158";
}
.icn-rocket:before {
  content: "\f159";
}
.icn-meter:before {
  content: "\f15a";
}
.icn-meter2:before {
  content: "\f15b";
}
.icn-hammer2:before {
  content: "\f15c";
}
.icn-fire:before {
  content: "\f15d";
}
.icn-lab:before {
  content: "\f15e";
}
.icn-magnet:before {
  content: "\f15f";
}
.icn-bin:before {
  content: "\f160";
}
.icn-bin2:before {
  content: "\f161";
}
.icn-briefcase:before {
  content: "\f162";
}
.icn-airplane:before {
  content: "\f163";
}
.icn-truck:before {
  content: "\f164";
}
.icn-road:before {
  content: "\f165";
}
.icn-accessibility:before {
  content: "\f166";
}
.icn-target:before {
  content: "\f167";
}
.icn-shield:before {
  content: "\f168";
}
.icn-power:before {
  content: "\f169";
}
.icn-switch:before {
  content: "\f16a";
}
.icn-power-cord:before {
  content: "\f16b";
}
.icn-clipboard:before {
  content: "\f16c";
}
.icn-list-numbered:before {
  content: "\f16d";
}
.icn-list:before {
  content: "\f16e";
}
.icn-list2:before {
  content: "\f16f";
}
.icn-tree:before {
  content: "\f170";
}
.icn-menu:before {
  content: "\f171";
}
.icn-menu2:before {
  content: "\f172";
}
.icn-menu3:before {
  content: "\f173";
}
.icn-menu4:before {
  content: "\f174";
}
.icn-cloud:before {
  content: "\f175";
}
.icn-cloud-download:before {
  content: "\f176";
}
.icn-cloud-upload:before {
  content: "\f177";
}
.icn-cloud-check:before {
  content: "\f178";
}
.icn-download2:before {
  content: "\f179";
}
.icn-upload2:before {
  content: "\f17a";
}
.icn-download3:before {
  content: "\f17b";
}
.icn-upload3:before {
  content: "\f17c";
}
.icn-sphere:before {
  content: "\f17d";
}
.icn-earth:before {
  content: "\f17e";
}
.icn-link:before {
  content: "\f17f";
}
.icn-flag:before {
  content: "\f180";
}
.icn-attachment:before {
  content: "\f181";
}
.icn-eye:before {
  content: "\f182";
}
.icn-eye-plus:before {
  content: "\f183";
}
.icn-eye-minus:before {
  content: "\f184";
}
.icn-eye-blocked:before {
  content: "\f185";
}
.icn-bookmark:before {
  content: "\f186";
}
.icn-bookmarks:before {
  content: "\f187";
}
.icn-sun:before {
  content: "\f188";
}
.icn-contrast:before {
  content: "\f189";
}
.icn-brightness-contrast:before {
  content: "\f18a";
}
.icn-star-empty:before {
  content: "\f18b";
}
.icn-star-half:before {
  content: "\f18c";
}
.icn-star-full:before {
  content: "\f18d";
}
.icn-heart:before {
  content: "\f18e";
}
.icn-heart-broken:before {
  content: "\f18f";
}
.icn-man:before {
  content: "\f190";
}
.icn-woman:before {
  content: "\f191";
}
.icn-man-woman:before {
  content: "\f192";
}
.icn-happy:before {
  content: "\f193";
}
.icn-happy2:before {
  content: "\f194";
}
.icn-smile:before {
  content: "\f195";
}
.icn-smile2:before {
  content: "\f196";
}
.icn-tongue:before {
  content: "\f197";
}
.icn-tongue2:before {
  content: "\f198";
}
.icn-sad:before {
  content: "\f199";
}
.icn-sad2:before {
  content: "\f19a";
}
.icn-wink:before {
  content: "\f19b";
}
.icn-wink2:before {
  content: "\f19c";
}
.icn-grin:before {
  content: "\f19d";
}
.icn-grin2:before {
  content: "\f19e";
}
.icn-cool:before {
  content: "\f19f";
}
.icn-cool2:before {
  content: "\f1a0";
}
.icn-angry:before {
  content: "\f1a1";
}
.icn-angry2:before {
  content: "\f1a2";
}
.icn-evil:before {
  content: "\f1a3";
}
.icn-evil2:before {
  content: "\f1a4";
}
.icn-shocked:before {
  content: "\f1a5";
}
.icn-shocked2:before {
  content: "\f1a6";
}
.icn-baffled:before {
  content: "\f1a7";
}
.icn-baffled2:before {
  content: "\f1a8";
}
.icn-confused:before {
  content: "\f1a9";
}
.icn-confused2:before {
  content: "\f1aa";
}
.icn-neutral:before {
  content: "\f1ab";
}
.icn-neutral2:before {
  content: "\f1ac";
}
.icn-hipster:before {
  content: "\f1ad";
}
.icn-hipster2:before {
  content: "\f1ae";
}
.icn-wondering:before {
  content: "\f1af";
}
.icn-wondering2:before {
  content: "\f1b0";
}
.icn-sleepy:before {
  content: "\f1b1";
}
.icn-sleepy2:before {
  content: "\f1b2";
}
.icn-frustrated:before {
  content: "\f1b3";
}
.icn-frustrated2:before {
  content: "\f1b4";
}
.icn-crying:before {
  content: "\f1b5";
}
.icn-crying2:before {
  content: "\f1b6";
}
.icn-point-up:before {
  content: "\f1b7";
}
.icn-point-right:before {
  content: "\f1b8";
}
.icn-point-down:before {
  content: "\f1b9";
}
.icn-point-left:before {
  content: "\f1ba";
}
.icn-warning:before {
  content: "\f1bb";
}
.icn-notification:before {
  content: "\f1bc";
}
.icn-question:before {
  content: "\f1bd";
}
.icn-plus:before {
  content: "\f1be";
}
.icn-minus:before {
  content: "\f1bf";
}
.icn-info:before {
  content: "\f1c0";
}
.icn-cancel-circle:before {
  content: "\f1c1";
}
.icn-blocked:before {
  content: "\f1c2";
}
.icn-cross:before {
  content: "\f1c3";
}
.icn-checkmark:before {
  content: "\f1c4";
}
.icn-checkmark2:before {
  content: "\f1c5";
}
.icn-spell-check:before {
  content: "\f1c6";
}
.icn-enter:before {
  content: "\f1c7";
}
.icn-exit:before {
  content: "\f1c8";
}
.icn-play2:before {
  content: "\f1c9";
}
.icn-pause:before {
  content: "\f1ca";
}
.icn-stop:before {
  content: "\f1cb";
}
.icn-previous:before {
  content: "\f1cc";
}
.icn-next:before {
  content: "\f1cd";
}
.icn-backward:before {
  content: "\f1ce";
}
.icn-forward2:before {
  content: "\f1cf";
}
.icn-play3:before {
  content: "\f1d0";
}
.icn-pause2:before {
  content: "\f1d1";
}
.icn-stop2:before {
  content: "\f1d2";
}
.icn-backward2:before {
  content: "\f1d3";
}
.icn-forward3:before {
  content: "\f1d4";
}
.icn-first:before {
  content: "\f1d5";
}
.icn-last:before {
  content: "\f1d6";
}
.icn-previous2:before {
  content: "\f1d7";
}
.icn-next2:before {
  content: "\f1d8";
}
.icn-eject:before {
  content: "\f1d9";
}
.icn-volume-high:before {
  content: "\f1da";
}
.icn-volume-medium:before {
  content: "\f1db";
}
.icn-volume-low:before {
  content: "\f1dc";
}
.icn-volume-mute:before {
  content: "\f1dd";
}
.icn-volume-mute2:before {
  content: "\f1de";
}
.icn-volume-increase:before {
  content: "\f1df";
}
.icn-volume-decrease:before {
  content: "\f1e0";
}
.icn-loop:before {
  content: "\f1e1";
}
.icn-loop2:before {
  content: "\f1e2";
}
.icn-infinite:before {
  content: "\f1e3";
}
.icn-shuffle:before {
  content: "\f1e4";
}
.icn-arrow-up-left:before {
  content: "\f1e5";
}
.icn-arrow-up:before {
  content: "\f1e6";
}
.icn-arrow-up-right:before {
  content: "\f1e7";
}
.icn-arrow-right:before {
  content: "\f1e8";
}
.icn-arrow-down-right:before {
  content: "\f1e9";
}
.icn-arrow-down:before {
  content: "\f1ea";
}
.icn-arrow-down-left:before {
  content: "\f1eb";
}
.icn-arrow-left:before {
  content: "\f1ec";
}
.icn-arrow-up-left2:before {
  content: "\f1ed";
}
.icn-arrow-up2:before {
  content: "\f1ee";
}
.icn-arrow-up-right2:before {
  content: "\f1ef";
}
.icn-arrow-right2:before {
  content: "\f1f0";
}
.icn-arrow-down-right2:before {
  content: "\f1f1";
}
.icn-arrow-down2:before {
  content: "\f1f2";
}
.icn-arrow-down-left2:before {
  content: "\f1f3";
}
.icn-arrow-left2:before {
  content: "\f1f4";
}
.icn-circle-up:before {
  content: "\f1f5";
}
.icn-circle-right:before {
  content: "\f1f6";
}
.icn-circle-down:before {
  content: "\f1f7";
}
.icn-circle-left:before {
  content: "\f1f8";
}
.icn-tab:before {
  content: "\f1f9";
}
.icn-move-up:before {
  content: "\f1fa";
}
.icn-move-down:before {
  content: "\f1fb";
}
.icn-sort-alpha-asc:before {
  content: "\f1fc";
}
.icn-sort-alpha-desc:before {
  content: "\f1fd";
}
.icn-sort-numeric-asc:before {
  content: "\f1fe";
}
.icn-sort-numberic-desc:before {
  content: "\f1ff";
}
.icn-sort-amount-asc:before {
  content: "\f200";
}
.icn-sort-amount-desc:before {
  content: "\f201";
}
.icn-command:before {
  content: "\f202";
}
.icn-shift:before {
  content: "\f203";
}
.icn-ctrl:before {
  content: "\f204";
}
.icn-opt:before {
  content: "\f205";
}
.icn-checkbox-checked:before {
  content: "\f206";
}
.icn-checkbox-unchecked:before {
  content: "\f207";
}
.icn-radio-checked:before {
  content: "\f208";
}
.icn-radio-checked2:before {
  content: "\f209";
}
.icn-radio-unchecked:before {
  content: "\f20a";
}
.icn-crop:before {
  content: "\f20b";
}
.icn-make-group:before {
  content: "\f20c";
}
.icn-ungroup:before {
  content: "\f20d";
}
.icn-scissors:before {
  content: "\f20e";
}
.icn-filter:before {
  content: "\f20f";
}
.icn-font:before {
  content: "\f210";
}
.icn-ligature:before {
  content: "\f211";
}
.icn-ligature2:before {
  content: "\f212";
}
.icn-text-height:before {
  content: "\f213";
}
.icn-text-width:before {
  content: "\f214";
}
.icn-font-size:before {
  content: "\f215";
}
.icn-bold:before {
  content: "\f216";
}
.icn-underline:before {
  content: "\f217";
}
.icn-italic:before {
  content: "\f218";
}
.icn-strikethrough:before {
  content: "\f219";
}
.icn-omega:before {
  content: "\f21a";
}
.icn-sigma:before {
  content: "\f21b";
}
.icn-page-break:before {
  content: "\f21c";
}
.icn-superscript:before {
  content: "\f21d";
}
.icn-subscript:before {
  content: "\f21e";
}
.icn-superscript2:before {
  content: "\f21f";
}
.icn-subscript2:before {
  content: "\f220";
}
.icn-text-color:before {
  content: "\f221";
}
.icn-pagebreak:before {
  content: "\f222";
}
.icn-clear-formatting:before {
  content: "\f223";
}
.icn-table:before {
  content: "\f224";
}
.icn-table2:before {
  content: "\f225";
}
.icn-insert-template:before {
  content: "\f226";
}
.icn-pilcrow:before {
  content: "\f227";
}
.icn-ltr:before {
  content: "\f228";
}
.icn-rtl:before {
  content: "\f229";
}
.icn-section:before {
  content: "\f22a";
}
.icn-paragraph-left:before {
  content: "\f22b";
}
.icn-paragraph-center:before {
  content: "\f22c";
}
.icn-paragraph-right:before {
  content: "\f22d";
}
.icn-paragraph-justify:before {
  content: "\f22e";
}
.icn-indent-increase:before {
  content: "\f22f";
}
.icn-indent-decrease:before {
  content: "\f230";
}
.icn-share:before {
  content: "\f231";
}
.icn-new-tab:before {
  content: "\f232";
}
.icn-embed:before {
  content: "\f233";
}
.icn-embed2:before {
  content: "\f234";
}
.icn-terminal:before {
  content: "\f235";
}
.icn-share2:before {
  content: "\f236";
}
.icn-mail:before {
  content: "\f237";
}
.icn-mail2:before {
  content: "\f238";
}
.icn-mail3:before {
  content: "\f239";
}
.icn-mail4:before {
  content: "\f23a";
}
.icn-amazon:before {
  content: "\f23b";
}
.icn-google:before {
  content: "\f23c";
}
.icn-google2:before {
  content: "\f23d";
}
.icn-google3:before {
  content: "\f23e";
}
.icn-google-plus:before {
  content: "\f23f";
}
.icn-google-plus2:before {
  content: "\f240";
}
.icn-google-plus3:before {
  content: "\f241";
}
.icn-hangouts:before {
  content: "\f242";
}
.icn-google-drive:before {
  content: "\f243";
}
.icn-facebook:before {
  content: "\f244";
}
.icn-facebook2:before {
  content: "\f245";
}
.icn-instagram:before {
  content: "\f246";
}
.icn-whatsapp:before {
  content: "\f247";
}
.icn-spotify:before {
  content: "\f248";
}
.icn-telegram:before {
  content: "\f249";
}
.icn-twitter:before {
  content: "\f24a";
}
.icn-vine:before {
  content: "\f24b";
}
.icn-vk:before {
  content: "\f24c";
}
.icn-renren:before {
  content: "\f24d";
}
.icn-sina-weibo:before {
  content: "\f24e";
}
.icn-rss:before {
  content: "\f24f";
}
.icn-rss2:before {
  content: "\f250";
}
.icn-youtube:before {
  content: "\f251";
}
.icn-youtube2:before {
  content: "\f252";
}
.icn-twitch:before {
  content: "\f253";
}
.icn-vimeo:before {
  content: "\f254";
}
.icn-vimeo2:before {
  content: "\f255";
}
.icn-lanyrd:before {
  content: "\f256";
}
.icn-flickr:before {
  content: "\f257";
}
.icn-flickr2:before {
  content: "\f258";
}
.icn-flickr3:before {
  content: "\f259";
}
.icn-flickr4:before {
  content: "\f25a";
}
.icn-dribbble:before {
  content: "\f25b";
}
.icn-behance:before {
  content: "\f25c";
}
.icn-behance2:before {
  content: "\f25d";
}
.icn-deviantart:before {
  content: "\f25e";
}
.icn-500px:before {
  content: "\f25f";
}
.icn-steam:before {
  content: "\f260";
}
.icn-steam2:before {
  content: "\f261";
}
.icn-dropbox:before {
  content: "\f262";
}
.icn-onedrive:before {
  content: "\f263";
}
.icn-github:before {
  content: "\f264";
}
.icn-npm:before {
  content: "\f265";
}
.icn-basecamp:before {
  content: "\f266";
}
.icn-trello:before {
  content: "\f267";
}
.icn-wordpress:before {
  content: "\f268";
}
.icn-joomla:before {
  content: "\f269";
}
.icn-ello:before {
  content: "\f26a";
}
.icn-blogger:before {
  content: "\f26b";
}
.icn-blogger2:before {
  content: "\f26c";
}
.icn-tumblr:before {
  content: "\f26d";
}
.icn-tumblr2:before {
  content: "\f26e";
}
.icn-yahoo:before {
  content: "\f26f";
}
.icn-yahoo2:before {
  content: "\f270";
}
.icn-tux:before {
  content: "\f271";
}
.icn-appleinc:before {
  content: "\f272";
}
.icn-finder:before {
  content: "\f273";
}
.icn-android:before {
  content: "\f274";
}
.icn-windows:before {
  content: "\f275";
}
.icn-windows8:before {
  content: "\f276";
}
.icn-soundcloud:before {
  content: "\f277";
}
.icn-soundcloud2:before {
  content: "\f278";
}
.icn-skype:before {
  content: "\f279";
}
.icn-reddit:before {
  content: "\f27a";
}
.icn-hackernews:before {
  content: "\f27b";
}
.icn-wikipedia:before {
  content: "\f27c";
}
.icn-linkedin:before {
  content: "\f27d";
}
.icn-linkedin2:before {
  content: "\f27e";
}
.icn-lastfm:before {
  content: "\f27f";
}
.icn-lastfm2:before {
  content: "\f280";
}
.icn-delicious:before {
  content: "\f281";
}
.icn-stumbleupon:before {
  content: "\f282";
}
.icn-stumbleupon2:before {
  content: "\f283";
}
.icn-stackoverflow:before {
  content: "\f284";
}
.icn-pinterest:before {
  content: "\f285";
}
.icn-pinterest2:before {
  content: "\f286";
}
.icn-xing:before {
  content: "\f287";
}
.icn-xing2:before {
  content: "\f288";
}
.icn-flattr:before {
  content: "\f289";
}
.icn-foursquare:before {
  content: "\f28a";
}
.icn-yelp:before {
  content: "\f28b";
}
.icn-paypal:before {
  content: "\f28c";
}
.icn-chrome:before {
  content: "\f28d";
}
.icn-firefox:before {
  content: "\f28e";
}
.icn-IE:before {
  content: "\f28f";
}
.icn-edge:before {
  content: "\f290";
}
.icn-safari:before {
  content: "\f291";
}
.icn-opera:before {
  content: "\f292";
}
.icn-file-pdf:before {
  content: "\f293";
}
.icn-file-openoffice:before {
  content: "\f294";
}
.icn-file-word:before {
  content: "\f295";
}
.icn-file-excel:before {
  content: "\f296";
}
.icn-libreoffice:before {
  content: "\f297";
}
.icn-html-five:before {
  content: "\f298";
}
.icn-html-five2:before {
  content: "\f299";
}
.icn-css3:before {
  content: "\f29a";
}
.icn-git:before {
  content: "\f29b";
}
.icn-codepen:before {
  content: "\f29c";
}
.icn-svg:before {
  content: "\f29d";
}
.icn-IcoMoon:before {
  content: "\f29e";
}

</style>


<?php
    }
}
