
<!DOCTYPE html>
<html xmlns:fb="http://ogp.me/ns/fb">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta charset="utf-8" />
<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />
<link type="text/css" href="https://my.visme.co/css/player.css?v=2199" rel="stylesheet" />
<script src="https://assets.visme.co/js/TweenMax.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400" rel="stylesheet">
<link href="https:////fonts.googleapis.com/css?family=Roboto:500,400italic,100,300,700,100italic,300italic,400" rel="stylesheet" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
<link rel="shortcut icon" href="https://my.visme.co/images/favicon.png" />
<script src="https://my.visme.co/js/playerlibs.js?v=2199"></script>
<script src="https://my.visme.co/js/player.js?v=2199"></script>
<title>Untitled Project | Infographic</title>
<script>!window.jQuery && document.write('<script src="js/jquery.js"><\/script>')</script>
<meta name="viewport" content="user-scalable=yes" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="twitter:card" content="photo" />
<meta name="description" content="Untitled Project -  VisME is the Swiss Knife for creating Awesome Visual Content and effective story telling.">
<meta property="og:title" content="Untitled Project" />
<meta property="og:url" content="https://my.visme.co/index.php" />
<meta property="og:image" content="http://static.visme.co/08/e5/4c/5d/89e3dd4df6a2b3c8429604351bfb6635_f.jpg" />
<meta property="og:description" content="https://my.visme.co/index.php" />
<script src="https://my.visme.co/js/jquery.mobile.custom.min.js"></script>
<script type="text/javascript">

      $( document ).ready(function() {

        var viewportmeta = document.querySelector('meta[name="viewport"]');
        var scale = 0;

        if (window.innerHeight < window.innerWidth) {
          $("#logos").addClass('hidden-mobile');
          $("#profile").addClass('hidden-mobile');
          scale = window.innerHeight / window.innerWidth;
          viewportmeta.content = viewportmeta.content + ',initial-scale=1.0';
        } else {
          scale = window.innerWidth / window.innerHeight;
        }
        // Bind an event to window.orientationchange that, when the device is turned,
        // gets the orientation and displays it to on screen.
        $(window).on('orientationchange', function (event) {
          if (event.orientation == "landscape") {
            viewportmeta.content = viewportmeta.content.replace(/initial-scale=[^,]+/, 'initial-scale=1.0');
            $("#logos").addClass('hidden-mobile');
            $("#profile").addClass('hidden-mobile');
          } else {
            viewportmeta.content = viewportmeta.content.replace(/initial-scale=[^,]+/, 'initial-scale=' + scale);
            $("#logos").removeClass('hidden-mobile');
            $("#profile").removeClass('hidden-mobile');
          }
          setTimeout(function () {
            $('body,html').animate({
              scrollTop: 0
            }, 300);
          }, 500);
        });

        $("#content").on("tap", function () {
          $(".play").click();
        });
// You can also manually force this event to fire.

        // $('#controls').addClass('hidden-mobile');

        $("#content").on("swipeleft", function () {
          $("#next_slide").click();
        });

        $("#content").on("swiperight", function () {
          $("#prev_slide").click();
        });

      });
    </script>
<style>
      /*#profile-content h1 {
        font-size: 45px !important;
        margin-top: 13px !important;
      }

      .publ_h2 {
        font-size: 24px !important;
        margin-top: 0 !important;
      }*/

      #slide-controls {
        width: 145px !important;
        height: 32px !important;
      }

      #profile .p_profile {
        width: calc(100% - 80px) !important;
      }
    </style>

</head>
<body data-c="2019/09/05 00:43:58" style="
               background: #283444;
      
        " class="player">

<svg xmlns="http://www.w3.org/2000/svg" style="display:none;">
<symbol id="s-right">
<path class="color-fill" style="fill:#FFFFFF;" d="m0.019213,21.208622l9.17,-9.17l-9.17,-9.17l2.83,-2.83l12,12l-12,12l-2.83,-2.83z" />
</symbol>
<symbol id="s-left">
<path class="color-fill" style="fill:#FFFFFF;" d="m14.900306,21.236143l-9.17,-9.17l9.17,-9.17l-2.83,-2.83l-12,12l12,12l2.83,-2.83z" />
</symbol>
<symbol id="unmute" viewBox="0 0 33.5 30.7">
<path class="color-fill" style="fill:#FFFFFF;" d="M18.6,1.9c-0.6-0.3-1.2-0.3-1.8,0c0,0-0.1,0-0.1,0.1L9,8.6H2.8c-0.3,0-0.6,0.3-0.6,0.6v11
		c0,0.2,0.1,0.3,0.2,0.4c0.1,0.1,0.3,0.2,0.4,0.2l6.1,0l7.8,7.2c0,0,0.1,0,0.1,0.1c0.3,0.2,0.6,0.3,0.9,0.3c0.3,0,0.6-0.1,0.9-0.2
		c0.6-0.3,0.9-0.9,0.9-1.6V3.5C19.5,2.8,19.2,2.2,18.6,1.9z" />
<path class="color-fill" style="fill:#FFFFFF;" d="M24.6,4C24.3,3.9,24,4,23.9,4.3c-0.1,0.3,0.1,0.6,0.4,0.7c4.1,1.4,6.8,5.2,6.8,9.5
		c0,4.3-2.7,8.2-6.8,9.5c-0.3,0.1-0.5,0.4-0.4,0.7c0.1,0.2,0.3,0.4,0.5,0.4c0.1,0,0.1,0,0.2,0c4.6-1.6,7.6-5.8,7.6-10.6
		C32.2,9.8,29.2,5.5,24.6,4z" />
<path class="color-fill" style="fill:#FFFFFF;" d="M27.1,14.6c0-3.4-2.3-6.5-5.6-7.5c-0.3-0.1-0.6,0.1-0.7,0.4c-0.1,0.3,0.1,0.6,0.4,0.7
		c2.8,0.8,4.8,3.4,4.8,6.4c0,2.9-2,5.6-4.8,6.4c-0.3,0.1-0.5,0.4-0.4,0.7c0.1,0.3,0.3,0.4,0.6,0.4c0.1,0,0.1,0,0.2,0
		C24.7,21.1,27.1,18.1,27.1,14.6z" />
</symbol>
<symbol id="mute" viewBox="0 0 33.5 30.7">
<path class="color-fill" style="fill:#FFFFFF;" d="M18.6,1.9c-0.6-0.3-1.2-0.3-1.8,0c0,0-0.1,0-0.1,0.1L9,8.6H2.8c-0.3,0-0.6,0.3-0.6,0.6v11
					c0,0.2,0.1,0.3,0.2,0.4c0.1,0.1,0.3,0.2,0.4,0.2l6.1,0l7.8,7.2c0,0,0.1,0,0.1,0.1c0.3,0.2,0.6,0.3,0.9,0.3
					c0.3,0,0.6-0.1,0.9-0.2c0.6-0.3,0.9-0.9,0.9-1.6V3.5C19.5,2.8,19.2,2.2,18.6,1.9z M18.4,26.4c0,0.2-0.1,0.5-0.3,0.6
					c-0.1,0.1-0.3,0.1-0.6,0l-7.7-7.1v-2.6c0-0.3-0.3-0.6-0.6-0.6c-0.3,0-0.6,0.3-0.6,0.6v2.3l-5.2,0V9.7h5.2V12
					c0,0.3,0.3,0.6,0.6,0.6c0.3,0,0.6-0.3,0.6-0.6V9.4l7.7-6.5c0.3-0.1,0.5,0,0.6,0c0.2,0.1,0.3,0.3,0.3,0.6V26.4z" />
<path class="color-fill" style="fill:#FFFFFF;" d="M24.6,4C24.3,3.9,24,4,23.9,4.3c-0.1,0.3,0.1,0.6,0.4,0.7c4.1,1.4,6.8,5.2,6.8,9.5
					c0,4.3-2.7,8.2-6.8,9.5c-0.3,0.1-0.5,0.4-0.4,0.7c0.1,0.2,0.3,0.4,0.5,0.4c0.1,0,0.1,0,0.2,0c4.6-1.6,7.6-5.8,7.6-10.6
					C32.2,9.8,29.2,5.5,24.6,4z" />
<path class="color-fill" style="fill:#FFFFFF;" d="M27.1,14.6c0-3.4-2.3-6.5-5.6-7.5c-0.3-0.1-0.6,0.1-0.7,0.4c-0.1,0.3,0.1,0.6,0.4,0.7
					c2.8,0.8,4.8,3.4,4.8,6.4s-2,5.6-4.8,6.4c-0.3,0.1-0.5,0.4-0.4,0.7c0.1,0.3,0.3,0.4,0.6,0.4c0.1,0,0.1,0,0.2,0
					C24.7,21.1,27.1,18.1,27.1,14.6z" />
<path class="color-fill" style="fill:#FFFFFF;" d="M3,9.1h5.9l7.4-5.9c0,0,1.5-1.5,2.2,0s0.7,21.5,0.7,21.5l-0.7,3l-2.2-0.7l-7.4-6.7H3V9.1z" />
<path class="color-fill" style="fill:#324151;" d="M2.5,30.7c-0.7,0-1.4-0.3-1.9-0.8c-0.9-1-0.8-2.6,0.2-3.5L29.4,0.6c1-0.9,2.6-0.8,3.5,0.2
			c0.9,1,0.8,2.6-0.2,3.5L4.2,30C3.7,30.5,3.1,30.7,2.5,30.7z" />
<path class="color-fill" style="fill:#FFFFFF;" d="M3,28.7c-0.3,0-0.5-0.1-0.7-0.3c-0.4-0.4-0.3-1,0.1-1.4l28-25.2c0.4-0.4,1-0.3,1.4,0.1
			s0.3,1-0.1,1.4l-28,25.2C3.5,28.6,3.3,28.7,3,28.7z" />
</symbol>
<symbol id="play-btn">
<polygon class="color-fill" style="fill:#FFFFFF;" points="2.4,28 25.6,14 2.4,0 " />
</symbol>
<symbol id="pause-btn" viewBox="0 0 32 32">
<rect class="color-fill" style="fill:#FFFFFF;" height="32" width="8" x="0" y="0" />
<rect class="color-fill" style="fill:#FFFFFF;" height="32" width="8" x="18" y="0" />
</symbol>
<symbol id="download-btn" viewBox="0 0 30 30">
<polygon class="color-fill" style="fill:#FFFFFF;" points="23.2,10.1 16.8,10.8 17,0 11.1,0 11.3,10.8 4.8,10.1 14,19.3 " />
<rect class="color-fill" x="2.6" y="24.7" style="fill:#FFFFFF;" width="22.7" height="3.3" />
<rect class="color-fill" x="1.2" y="23" transform="matrix(-1.836970e-16 1 -1 -1.836970e-16 28.957 20.3608)" style="fill:#FFFFFF;" width="6.2" height="3.3" />
<rect class="color-fill" x="20.6" y="23" transform="matrix(-1.836970e-16 1 -1 -1.836970e-16 48.3608 0.957)" style="fill:#FFFFFF;" width="6.2" height="3.3" />
</symbol>
<symbol id="share-btn" viewBox="0 0 30 30">
<circle class="color-fill" style="fill:#FFFFFF;" cx="5.8" cy="14" r="4.9" />
<circle class="color-fill" style="fill:#FFFFFF;" cx="22.2" cy="4.9" r="4.9" />
<circle class="color-fill" style="fill:#FFFFFF;" cx="22.2" cy="23.1" r="4.9" />
<line class="color-stroke" style="fill:none;stroke:#FFFFFF;stroke-width:1.5;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" x1="17.7" y1="7.4" x2="10.3" y2="11.5" />
<line class="color-stroke" style="fill:none;stroke:#FFFFFF;stroke-width:1.5;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" x1="17.7" y1="20.6" x2="10.3" y2="16.5" />
</symbol>
<symbol id="logo-small" viewBox="0 0 118 27">
<g fill="#FFF"><path d="M57.3 7.1l-4.8 12.6c-.1.4-.4.6-.8.6h-2.1c-.4 0-.7-.2-.8-.6L44 7.1h2.5l3.2 9.2c.2.5.4 1.3.8 2.3h.4l.8-2.3 3.2-9.2h2.4zM62.3 20.2H60V7.1h2.3v13.1zM72.6 14.9l-3.8-.9c-1.1-.3-1.8-.7-2.3-1.2-.5-.6-.7-1.4-.7-2.5 0-1.5.4-2.3 1.2-2.8.8-.5 2.1-.5 4-.5h5.5v1.7h-5.2c-1.3 0-2.2.1-2.6.2-.4.2-.6.6-.6 1.4 0 .6.1 1.1.4 1.3s.8.4 1.5.6l3.8.9c1.1.3 1.9.7 2.3 1.2.5.5.7 1.3.7 2.4 0 1.5-.4 2.3-1.2 2.8-.8.5-2 .7-4.4.7h-5v-1.8h4.5c1.5 0 2.6-.1 3.1-.4.5-.2.8-.6.8-1.4 0-.6-.2-1-.5-1.2-.2-.1-.8-.3-1.5-.5zM82.6 7.1v1.8c1.8-1.4 3.5-2.2 5.1-2.2 1.8 0 2.9.8 3.3 2.3 1.8-1.5 3.5-2.3 5.3-2.3 1.1 0 2 .3 2.6.9s.9 1.5.9 2.7v9.9h-2.3V11c0-.8-.2-1.4-.5-1.8-.3-.4-.8-.6-1.6-.6-.6 0-1.2.1-1.8.4-.6.3-1.4.8-2.5 1.6v9.5H89V11c0-.8-.2-1.4-.5-1.8-.3-.4-.9-.5-1.6-.5-.6 0-1.2.1-1.8.4-.6.3-1.4.8-2.5 1.6v9.5h-2.3V7.1h2.3zM111.9 14.8h-6.1c.1 1.5.5 2.5 1.1 3s1.6.6 3.1.6h4.6v1.8h-4.9s-3.9-.2-4.8-1.3c-1-1.1-1.4-2.8-1.4-5.4 0-2.5.5-4.3 1.4-5.3s2.5-1.5 4.6-1.5c2 0 3.4.4 4.3 1.1s1.3 1.8 1.3 3.2c-.1 2.5-1.1 3.8-3.2 3.8zm-6.2-1.8h5.6c1 0 1.4-.6 1.4-1.9 0-.8-.3-1.4-.8-1.8-.5-.4-1.3-.5-2.5-.5-1.4 0-2.3.3-2.9.9-.5.5-.7 1.6-.8 3.3z" /></g><path fill="#F05E4E" d="M32.9 17.2l5.6-2.9c-1.7-1.1-10.4-5.3-13.8-1.7l-.7.7c3.6.6 6.7 2 8.9 3.9z" /><path fill="#B23232" d="M30.2 15.4l4.8-2.7c-4.4-1.8-6.8-1.3-9.7.5-.2.1-.3.2-.5.3 2.1.4 3.9 1 5.4 1.9z" /><path fill="#6CC294" d="M19.7 13.2c3.5-.2 6.8.5 9.5 1.7 0 0 1.6-1.3 4-2.9s3.9-2.8 3.9-2.8c-1.2-.9-4.3-1.6-6.1-1.9-5.6-.8-10.2 2-12 6 .2-.1.5-.1.7-.1z" /><path fill="#4B9F71" d="M19.7 13.2c2.7-.1 5.3.2 7.5.9l2.2-7c-5.4-.2-10.1 2.5-11.6 6.1v.1c.6 0 1.2-.1 1.9-.1z" /><path fill="#F3DE3C" d="M19.7 13.2c2.1-.1 4.2.1 6.1.5l3.1-11.4c-2.4-.2-5 .1-7.6.8-7 2.1-11.2 7.3-10 12.2 2.4-1.2 5.3-2 8.4-2.1z" /><path fill="#CDAF31" d="M19.7 13.2h2.7l-3.8-9c-5.3 2.5-8.3 7-7.3 11.2 2.4-1.3 5.3-2.1 8.4-2.2z" /><path fill="#19ABD6" d="M19.7 13.2h1.1c-.3-.7-1.2-2.9-2.7-5.4-1.8-3.1-2.9-5.1-2.9-5.1-2.7 1-5.9 2.7-7.8 4.6-4.1 4.1-4.5 9.2-1.5 12.9 2.3-3.9 7.6-6.7 13.8-7z" /><path fill="#FFF" d="M24.2 18.4l-3.5 2.4 1.2-3.7c-.3-.1-.7-.1-1.2-.1-2.5 0-4.5 1.7-4.5 3.9 0 2.1 2 3.9 4.5 3.9s4.5-1.7 4.5-3.9c0-1-.4-1.8-1-2.5z" />
</symbol>
<symbol id="logo" viewBox="0 0 78.4 47">
<path fill="#19ABD6" d="M37.1,14.4L37.1,14.4c-0.6-0.3-1.2-0.5-1.8-0.7c-0.1,0-0.3-0.1-0.4-0.1l0.1-0.1c2.7-1.8,4.4-3.1,4.4-3.1
    	c-1.4-1-4.8-1.8-6.9-2.1c-0.9-0.1-1.8-0.2-2.6-0.1c-0.4,0-0.8,0-1.2,0.1l1.5-5.4c-2.7-0.2-5.6,0.1-8.4,0.9c-1.1,0.3-2.1,0.7-3,1.2
    	l0,0c-0.3,0-0.5,0.1-0.8,0.3c-0.1,0-0.2,0.1-0.3,0.1C17.3,5.6,17,5.8,16.6,6l0,0c-1-1.8-1.7-2.9-1.7-2.9c-3,1.1-6.6,3-8.7,5.1
    	c-4.6,4.6-5,10.2-1.7,14.4c1.3-2.1,3.5-4,6.1-5.4l0,0c0,0,0.1,0,0.2-0.1c2.1-1,4.4-1.8,7-2.1c0.7-0.1,1.4-0.2,2.1-0.2
    	c0.6,0,1.3,0,1.9,0c0.5,0,1,0,1.5,0.1c0.1,0,0.1,0,0.2,0c1.1,0.1,2.2,0.3,3.2,0.5l0,0h0.1c0.4,0.1,0.7,0.2,1.1,0.3
    	c0.2,0.1,0.4,0.1,0.6,0.2c0.1,0,0.2,0.1,0.2,0.1c0.1,0,0.2,0.1,0.3,0.1c0.4,0.1,0.8,0.3,1.2,0.5c0,0,0.1,0,0.1,0.1
    	c0.1,0,0.2,0.1,0.3,0.1c0.3,0.2,0.7,0.3,1,0.5c1.1,0.6,2.2,1.3,3,2.1l0,0l6.2-3.2C40.3,15.9,38.9,15.1,37.1,14.4z" />
<path fill="#F05E4E" d="M34.7,19.5L34.7,19.5l6.3-3.2c-1.9-1.2-11.6-5.9-15.4-1.9c-0.3,0.3-0.5,0.5-0.8,0.8
    	C28.8,15.7,32.3,17.3,34.7,19.5z" />
<path fill="#B23232" d="M31.7,17.4l5.4-3c-4.9-2-7.6-1.4-10.8,0.5c-0.2,0.1-0.4,0.2-0.6,0.4C28,15.7,30,16.5,31.7,17.4z" />
<path fill="#6CC294" d="M20,14.9c3.9-0.2,7.6,0.5,10.6,1.9l0,0c0,0,1.8-1.4,4.5-3.3c2.7-1.8,4.4-3.1,4.4-3.1c-1.4-1-4.8-1.8-6.9-2.1
    	c-6.3-0.9-11.4,2.2-13.4,6.7C19.4,15,19.7,15,20,14.9z" />
<path fill="#4B9F71" d="M20,14.9c3-0.2,5.9,0.2,8.4,1l2.5-7.8c-6-0.2-11.2,2.8-13,6.9v0.1C18.5,15.1,19.2,15,20,14.9z" />
<path fill="#F3DE3C" d="M20,14.9c2.4-0.1,4.7,0.1,6.8,0.6l3.5-12.7c-2.7-0.2-5.6,0.1-8.4,0.9C14,6.1,9.4,11.9,10.7,17.3
    	C13.3,16,16.5,15.1,20,14.9z" />
<path fill="#CDAF31" d="M20,14.9c1-0.1,2.1,0,3.1,0l-4.3-10c-6,2.8-9.2,7.8-8.1,12.5C13.3,16,16.5,15.1,20,14.9z" />
<path fill="#19ABD6" d="M20,14.9c0.4,0,0.8,0,1.2,0c-0.3-0.8-1.3-3.2-3-6c-2-3.5-3.3-5.7-3.3-5.7c-3,1.1-6.6,3-8.7,5.1
    	c-4.6,4.6-5,10.2-1.7,14.4C7.2,18.5,13,15.3,20,14.9z" />
<path fill="#FFFFFF" d="M17.2,30.8l-4.9,12.8c-0.1,0.4-0.4,0.6-0.8,0.6H9.3c-0.4,0-0.7-0.2-0.8-0.6L3.6,30.8h2.5l3.3,9.4
    	c0.2,0.5,0.5,1.3,0.8,2.3h0.4l0.8-2.3l3.3-9.4C14.7,30.8,17.2,30.8,17.2,30.8z" />
<path fill="#FFFFFF" d="M22.3,44.2H20V30.8h2.3V44.2z" />
<path fill="#FFFFFF" d="M32.8,38.8l-3.9-0.9c-1.1-0.3-1.9-0.7-2.3-1.2c-0.5-0.6-0.7-1.4-0.7-2.5c0-1.5,0.4-2.4,1.2-2.9
    	c0.8-0.5,2.1-0.5,4.1-0.5c2.3,0,5.6,0,5.6,0v1.7c0,0-4.7,0-5.3,0c-1.4,0-2.3,0.1-2.7,0.2c-0.4,0.2-0.6,0.6-0.6,1.4
    	c0,0.6,0.1,1.1,0.4,1.3s0.8,0.4,1.5,0.6l3.9,0.9c1.1,0.3,1.9,0.7,2.4,1.2s0.7,1.4,0.7,2.5c0,1.6-0.4,2.4-1.3,2.9
    	c-0.9,0.5-2,0.7-4.5,0.7c-1.9,0-5.1,0-5.1,0v-1.8c0,0,3.1,0,4.6,0c1.6,0,2.6-0.1,3.1-0.4c0.5-0.2,0.8-0.6,0.8-1.4
    	c0-0.6-0.2-1-0.5-1.3C34.1,39.2,33.6,39,32.8,38.8z" />
<path fill="#FFFFFF" d="M43,30.8v1.9c1.8-1.5,3.5-2.2,5.2-2.2c1.9,0,3,0.8,3.4,2.4c1.8-1.6,3.6-2.4,5.4-2.4c1.2,0,2,0.3,2.7,0.9
    	c0.6,0.6,0.9,1.5,0.9,2.8v10.1h-2.3v-9.4c0-0.8-0.2-1.4-0.5-1.8c-0.3-0.4-0.9-0.6-1.6-0.6c-0.6,0-1.3,0.1-1.9,0.4
    	c-0.6,0.3-1.4,0.8-2.5,1.7v9.7h-2.3v-9.4c0-0.8-0.2-1.5-0.5-1.8c-0.3-0.4-0.9-0.6-1.6-0.6c-0.6,0-1.3,0.1-1.9,0.4
    	c-0.6,0.3-1.4,0.8-2.6,1.6v9.7h-2.3V30.8H43z" />
<path fill="#FFFFFF" d="M72.9,38.7h-6.3c0.1,1.5,0.5,2.6,1.1,3.1s1.7,0.7,3.1,0.7c1.5,0,4.7,0,4.7,0v1.8c0,0-2.7,0-5,0
    	s-4-0.2-4.9-1.3c-1-1.1-1.5-2.9-1.5-5.5s0.5-4.4,1.4-5.4c1-1,2.5-1.6,4.7-1.6c2,0,3.5,0.4,4.4,1.1s1.4,1.8,1.4,3.3
    	C76.1,37.4,75.1,38.7,72.9,38.7z M66.6,36.9h5.7c1,0,1.5-0.7,1.5-2c0-0.9-0.3-1.5-0.8-1.8c-0.5-0.4-1.3-0.6-2.5-0.6
    	c-1.4,0-2.4,0.3-2.9,0.9C66.9,34,66.6,35.2,66.6,36.9z" />
<path fill="#FFFFFF" d="M25,20.8l-3.9,2.7l1.4-4.1c-0.4-0.1-0.9-0.2-1.4-0.2c-2.8,0-5,1.9-5,4.3s2.2,4.3,5,4.3s5-1.9,5-4.3
    	C26.1,22.5,25.7,21.6,25,20.8z" />
</symbol>
<symbol id="t-left" viewBox="0 0 17 32">
<path fill="#FFF" d="M15.9 28.6L5 16 15.9 3.4l-2.2-2L1.1 16l12.6 14.6" />
</symbol>
<symbol id="t-right" viewBox="0 0 17 32">
<path fill="#FFF" d="M1.1 28.6L12 16 1.1 3.4l2.2-2L15.9 16 3.3 30.6" />
</symbol>
<symbol id="fullscreen" viewBox="0 0 28 28">
<path class="color-fill" style="fill:#FFFFFF;" d="M16.9,0l4.3,3.5l-5.4,5.2l3.5,3.5l5.2-5.4l3.5,4.4V0H16.9z M8.7,15.8l-5.2,5.4L0,16.8V28h11.2
		l-4.3-3.5l5.4-5.2L8.7,15.8z M8.7,15.8" />
</symbol>
<symbol id="presentationnotes" viewBox="0 0 36 34">
<path class="color-fill" style="fill:#FFFFFF;" d="M30.4,31H3c-1.3,0-2.3-1-2.3-2.3V10.3C0.7,9.1,1.7,8,3,8h27.4c1.3,0,2.3,1,2.3,2.3v18.4
	C32.7,30,31.7,31,30.4,31z" />
<path class="color-fill" style="fill:#FFFFFF;" d="M29.6,6.9H3.7C1.7,6.8,0,8.5,0,10.6v17.6c0,2.1,1.7,3.7,3.7,3.7h3.5l-2.4,2.7
					c-0.3,0.3-0.3,0.8,0.1,1.1c0.1,0.1,0.3,0.2,0.5,0.2c0.2,0,0.4-0.1,0.6-0.3l3.3-3.7h15.1l3.2,3.7c0.1,0.2,0.3,0.3,0.6,0.3
					c0.2,0,0.4-0.1,0.5-0.2c0.3-0.3,0.3-0.8,0.1-1.1l-2.4-2.7h3.4c2.1,0,3.7-1.6,3.7-3.7V10.6C33.4,8.5,31.7,6.8,29.6,6.9z
					 M31.9,28.2c0,1.2-1,2.2-2.2,2.2H3.7c-1.2,0-2.2-1-2.2-2.2V10.6c0-1.2,1-2.2,2.2-2.2h25.9c1.2,0,2.2,1,2.2,2.2V28.2z" />
<path class="color-fill" style="fill:#FFFFFF;" d="M27.3,3.4H6c-0.4,0-0.7,0.3-0.7,0.7S5.6,4.9,6,4.9h21.3c0.4,0,0.7-0.3,0.7-0.7S27.7,3.4,27.3,3.4z" />
<path class="color-fill" style="fill:#FFFFFF;" d="M21.2,0h-9.1c-0.4,0-0.7,0.3-0.7,0.7s0.3,0.7,0.7,0.7h9.1c0.4,0,0.7-0.3,0.7-0.7S21.6,0,21.2,0z" />
<polygon style="fill:#324151;" points="12.7,26 22.9,19.9 12.7,13.8 " />
</symbol>
<symbol id="visme-logo-s" x="0px" y="0px" width="77px" height="50px" viewBox="0 0 77 50">
<path style="fill:#F15E4F;" d="M64.5,33.3L64.5,33.3L76.9,27c-3.7-2.4-23-11.7-30.7-3.8c-0.5,0.6-1,1-1.5,1.6
		C52.7,25.9,59.6,28.9,64.5,33.3z" />
<path style="fill:#B33332;" d="M58.6,29.1l10.6-5.9c-9.8-4-15.1-2.9-21.3,0.9c-0.4,0.3-0.7,0.5-1.1,0.7
		C51.2,25.9,55.2,27.3,58.6,29.1z" />
<path style="fill:#6CC395;" d="M35.2,24.3c7.8-0.4,15.1,1,21.1,3.7c0,0,0,0,0.1,0c0,0,3.6-2.9,8.9-6.5s8.7-6.2,8.7-6.2
		c-2.8-1.9-9.5-3.6-13.7-4.2c-12.4-1.8-22.7,4.4-26.8,13.3C34.2,24.3,34.7,24.3,35.2,24.3z" />
<path style="fill:#4BA072;" d="M35.2,24.3c5.9-0.3,11.7,0.5,16.7,2l4.8-15.5c-12-0.4-22.4,5.5-25.9,13.7c0,0.1-0.1,0.2-0.1,0.3
		C32.2,24.5,33.7,24.4,35.2,24.3z" />
<path style="fill:#F3DF3D;" d="M35.2,24.3c4.7-0.3,9.4,0.3,13.6,1.2l6.9-25.4C50.3-0.2,44.5,0.3,38.9,2C23.3,6.6,14,18.2,16.7,29
		C21.9,26.3,28.3,24.7,35.2,24.3z" />
<path style="fill:#CEB031;" d="M35.2,24.3c2-0.1,4.1-0.1,6.1,0.1L32.9,4.3C21.1,9.9,14.5,19.8,16.7,29.1
		C21.9,26.3,28.3,24.7,35.2,24.3z" />
<path style="fill:#1CACD7;" d="M35.2,24.3c0.8,0,1.6-0.1,2.4-0.1c-0.7-1.6-2.7-6.4-5.9-12c-4-6.9-6.5-11.3-6.5-11.3
		C19.2,3.1,12,6.9,7.8,11c-9.2,9.2-10,20.3-3.3,28.7C9.8,31.3,21.4,25,35.2,24.3z" />
<path style="fill:#FCFCFC;" d="M45.2,35.9l-7.6,5.4l2.8-8.2c-0.8-0.2-1.9-0.4-2.8-0.4c-5.5,0-9.9,3.9-9.9,8.6
		c0,4.7,4.5,8.6,9.9,8.6s9.9-3.9,9.9-8.6C47.4,39.3,46.5,37.4,45.2,35.9z" />
</symbol>
<symbol id="magnify-btn" x="0px" y="0px" width="24px" height="24px" viewBox="0 0 24 24">
<path style="fill:#FFFFFF;" d="M14.1,2.3c4.3,0,7.7,3.5,7.7,7.7s-3.5,7.7-7.7,7.7S6.4,14.2,6.4,10S9.8,2.3,14.1,2.3 M14.1,0.3
			c-5.4,0-9.7,4.4-9.7,9.7s4.4,9.7,9.7,9.7s9.7-4.4,9.7-9.7S19.5,0.3,14.1,0.3L14.1,0.3z" />
<line style="fill:none;stroke:#FFFFFF;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" x1="1.3" y1="22.8" x2="7.4" y2="16.7" />
</symbol>
</svg>
<div id="autoplay-notify">
<span>Allow Background Music?</span><br><br>
<a class="allow_bgm">Yes</a>
<a class="ban_bgm">No</a>
</div>
<div id='editor-loading-overlay' class="player-loading-overlay">
<div class="sk-cube-grid">
<div class="sk-cube sk-cube1"></div>
<div class="sk-cube sk-cube2"></div>
<div class="sk-cube sk-cube3"></div>
<div class="sk-cube sk-cube4"></div>
<div class="sk-cube sk-cube5"></div>
<div class="sk-cube sk-cube6"></div>
<div class="sk-cube sk-cube7"></div>
<div class="sk-cube sk-cube8"></div>
<div class="sk-cube sk-cube9"></div>
</div>
<span>Loading...</span>
</div>
<div id="wrapper">
<header id="logos" class="ui-standard-el" style="

   background-color: #314151;
">
<a href="http://www.visme.co/?vc=Top-Bar-CTA" id="default-logo" target="_blank">
<svg width="47px" height="30px" viewBox="0 0 77 50">
<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#visme-logo-s"></use>
</svg>
</a>
<style>
        header {
            height: 70px !important;
        }

        header #default-logo svg {
            margin: 24px 0 10px 15px;
        }
    </style>
<div id="mobile-header-menu-btn">
<svg version="1.1" id="layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="45px" height="45px" viewBox="0 0 45 45" style="enable-background:new 0 0 45 45;" xml:space="preserve">
<g>
<line style="fill:none;stroke:#FFFFFF;stroke-width:3;stroke-miterlimit:10;" x1="1" y1="10.9" x2="44" y2="10.9" />
<line style="fill:none;stroke:#FFFFFF;stroke-width:3;stroke-miterlimit:10;" x1="1" y1="34.1" x2="44" y2="34.1" />
<line style="fill:none;stroke:#FFFFFF;stroke-width:3;stroke-miterlimit:10;" x1="1" y1="22.5" x2="44" y2="22.5" />
</g>
</div>
<div id="mobile-header-menu">
<a class="close_menu">X</a>
<div class="menu-buttons">
<a class="large_logo" href="https://www.visme.co" target="_blank">
<i></i>
</a>
<a href="https://www.visme.co" target="_blank">About Visme</a>
<a href="https://www.visme.co/templates?vc=Top-Bar-CTA" target="_blank">Templates</a>
<a href="https://www.visme.co/gallery/?vc=Top-Bar-CTA" target="_blank">Gallery</a>
<a href="https://www.visme.co/pricing/?vc=Top-Bar-CTA" target="_blank">Pricing</a>
<a href="http://blog.visme.co/?vc=Top-Bar-CTA" target="_blank">Blog</a>
<a class="btn-widget" href="https://dashboard.visme.co/register?v=test&c=my.visme.co" target="_self">Create your Visme</a>
</div>
</div>
<script>
        $('#mobile-header-menu-btn').click(function () {
            $('#mobile-header-menu').css('left', 0);
        });

        $('.close_menu').click(function () {
            $('#mobile-header-menu').css('left', '100vw');
        });
    </script>
</header>
<div id="content">
<div id="infoblock_wrapper"><section class="stage " id="sl1" style="width: 800px; height:500px;display: none; visibility: inherit; opacity: 0;">
<div class="page-loading"></div>
<article style="width: 800px; height: 500px; position:absolute;"><div class='el ' id='el1' data-type="iframe" style='
    width:799.3224666143px;
    height:456.75569520817px;
    z-index:0;
    -ms-transform: translate(0px, 12px) rotate(0deg);
    -webkit-transform: translate(0px, 12px) rotate(0deg);
    transform: translate(0px, 12px) rotate(0deg);

    
          opacity: 1;
    
    
    
         display: none
      '>
<iframe height="456.75569520817" width="799.3224666143"></iframe>
<div class='drag-helper' style='width:799.3224666143px;height:456.75569520817px;
    '>
<div class='drag-inner' style='width:799.3224666143px;height:456.75569520817px;'></div>
</div>
</div></article>
</section>
</div>
</div>
</div>
<div id="profile" class="ui-standard-el" style="background: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI1IiBoZWlnaHQ9IjUiPgo8cmVjdCB3aWR0aD0iNSIgaGVpZ2h0PSI1IiBmaWxsPSIjZThlOGU4Ij48L3JlY3Q+CjxwYXRoIGQ9Ik0wIDVMNSAwWk02IDRMNCA2Wk0tMSAxTDEgLTFaIiBzdHJva2U9IiNmZmYiIHN0cm9rZS13aWR0aD0iMSI+PC9wYXRoPgo8L3N2Zz4=');">
<div id="profile-content">
<div class="avatar">
<img src="https://www.gravatar.com/avatar/6242cd02eb7dce77b8c5c8946f7befce?d=https%3A%2F%2Fmy.visme.co%2Fimages%2Fplayer%2Fava2.png&s=70" style="
border-top-left-radius: 50% 50%;
  border-top-right-radius: 50% 50%;
  border-bottom-right-radius: 50% 50%;
  border-bottom-left-radius: 50% 50%;
" />
</div>
<div class="p_profile">
<div class="p_profile_wrap">
<h1 class="pname">Untitled Project</h1>
<h2 class="publ_h2">jose perez | September 05, 2019</h2>
</div>
</div>
</div>
<div class="mobile_share">
<a target="_blank" href="https://www.facebook.com/sharer.php?u=http://my.visme.co/projects/dmpryv1e-untitled-project" class="fb">fb</a>
<a target="_blank" href="https://twitter.com/share?url=http://my.visme.co/projects/dmpryv1e-untitled-project&amp;text=Check my new presentation created in visme" class="tw">twitter</a>
<a target="_blank" href="/cdn-cgi/l/email-protection#a29df1d7c0c8c7c1d69fe1cac7c1c982cfdb82ccc7d582d2d0c7d1c7ccd6c3d6cbcdcc82c1d0c7c3d6c7c682cbcc82d4cbd1cfc784c3cfd299e0cdc6db9fe1cac7c1c982cfdb82ccc7d582d2d0c7d1c7ccd6c3d6cbcdcc82c1d0c7c3d6c7c682cbcc82d4cbd1cfc782cad6d6d2d1988d8dcfdb8cd4cbd1cfc78cc1cd8dd2d0cdc8c7c1d6d18dc6cfd2d0dbd493c78fd7ccd6cbd6cec7c68fd2d0cdc8c7c1d6" class="mail">mail</a>
<a target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&amp;url=http://my.visme.co/projects/dmpryv1e-untitled-project" class="in">in</a>
</div>
<div class="ui-standard-el" id="comments">
<button class="show-comments">Show comments</button>
<script data-cfasync="false" src="https://my.visme.co/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>

  $(document).ready(function() {
      $('.show-comments').on('click', function(){
            var disqus_shortname = 'visme'; // Replace this value with *your* username.

            // ajax request to load the disqus javascript
            $.ajax({
                    type: "GET",
                    url: "//" + disqus_shortname + ".disqus.com/embed.js",
                    dataType: "script",
                    cache: true
            });
            // hide the button once comments load
            $(this).fadeOut();
      });
  });
</script>
<div id="disqus_thread" style="width:950px; margin: 50px auto;"></div>
</div>
<div id="standard_share" class="ui-standard-el">
<script type="text/javascript">
  var addthis_share =
  {
    templates: {
    twitter: 'Untitled Project - ' + 'https://my.visme.co/index.php',
  }
  }
  var addthis_config = addthis_config||{};
      addthis_config.pubid = 'ra-5411da2048bc494d';
  setTimeout(function(){

    var addthisScript = document.createElement('script');
    addthisScript.setAttribute('src', '//s7.addthis.com/js/300/addthis_widget.js#domready=1')
    document.body.appendChild(addthisScript)

  }, 2000);
  </script>
</div>
<script type="text/template" id="slide-template">
      <section class="stage " id="<%= id %>" style="width: <%= width %>px; height:<%= height %>px;display: none; visibility: inherit; opacity: 0;">
  <div class="page-loading"></div>
  <article style="width: <%= width %>px; height: <%= height %>px; position:absolute;"></article>
  </section>
    </script>
<script type="text/template" id="slide-panel-template">
  <div class="slide-zone" style="width: <%= thumbWidth %>px;">
    <div class="slide" id="thumb-<%= id %>" style="width: <%= thumbWidth %>px;">
      <div class="slide_mask"></div>
      <div class="section_wrap" style="width: <%= thumbWidth %>px;">
        <section id="small-<%= id %>"></section>
      </div>
      <div class="slide_num">
        <%= (order + 1) %>
      </div>
    </div>
  </div>
</script>
<a href="https://www.visme.co?vc=Made-With-Visme&utm_source=CTA&utm_medium=Watermark" target="_blank" class="presentation_water">
<svg width="124px" height="25px" viewBox="0 0 124 25" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">

<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
<rect fill="#FFFFFF" fill-rule="nonzero" x="0" y="0" width="124" height="25" rx="3"></rect>
<rect x="0" y="0" width="124" height="25" rx="3"></rect>
<g transform="translate(8.000000, 5.000000)" fill="#324251" font-size="12">
<text font-family="Montserrat-Regular, Montserrat" font-weight="normal">
<tspan x="0.312" y="12">Made with</tspan>
</text>
<text font-family="Montserrat-Medium, Montserrat" font-weight="400">
<tspan x="68.244" y="12">VISME</tspan>
</text>
</g>
</g>
</svg>

</a>
<script type='text/template' id='object'>
<div class='el <% if (!_.isUndefined(object.link) && object.link) { %>linked<% } %>' id='<%- object.id %>'  data-type ='<%- object.type %>' style='
    width:<%- object.width %>px;
    height:<%- object.height %>px;
    z-index:<%- object.order %>;
    -ms-transform: translate(<%- object.x %>px, <%- object.y %>px) rotate(<%- object.rotation %>deg);
    -webkit-transform: translate(<%- object.x %>px, <%- object.y %>px) rotate(<%- object.rotation %>deg);
    transform: translate(<%- object.x %>px, <%- object.y %>px) rotate(<%- object.rotation %>deg);

    <% if (object.backgroundColor) { %>
      background: <%= object.backgroundColor %>;
    <% } %>

    <% if (!_.isUndefined(object.opacity)) { %>
      opacity: <%- object.opacity / 100 %>;
    <% } %>

    <% if (object.borderStyle && object.borderStyle != "none") { %>
      border: <%- object.borderStyle %>  <%- object.borderWidth %>px <% if (object.borderColor && object.borderColor != "none") { %><%- object.borderColor %><% } else { %>#000 <% } %>;
    <% } %>

    <% if (object.borderRadius && object.borderRadius !=0) { %>
      border-radius: <%- object.borderRadius %>px;
    <% } %>

      '
>
  <%= template(object) %>
<div class='drag-helper' style='width:<%= object.width %>px;height:<%= object.height %>px;
    <% if (object.borderStyle && object.borderStyle != "none" && object.borderWidth) { %>
      margin-left: -<%= object.borderWidth %>px;
      margin-top: -<%= object.borderWidth %>px;
    <% } %>'>
<div class='drag-inner' style='width:<%= object.width %>px;height:<%= object.height %>px;'><!-- --></div>
</div>


<% if (object.connectionPoints) { %>
<div id="nn-point" class="connection-point"></div>
<div id="ee-point" class="connection-point"></div>
<div id="ss-point" class="connection-point"></div>
<div id="ww-point" class="connection-point"></div>

<div id="ne-point" class="connection-point"></div>
<div id="nw-point" class="connection-point"></div>
<div id="se-point" class="connection-point"></div>
<div id="sw-point" class="connection-point"></div>
<% if (object.backgroundShape == 'hexagon') { %>
<div id="ne1-point" class="connection-point"></div>
<div id="nw1-point" class="connection-point"></div>
<div id="se1-point" class="connection-point"></div>
<div id="sw1-point" class="connection-point"></div>
<% } %>
<% } %>
<% if (app.settings.get('mode') == 'player.render' && object.link && object.link.type == 'hyperlink' ) { %>
  <a href="<%= object.link.target %>" target="_blank"
style="
    width:<%= object.width %>px;
    height:<%= object.height %>px;
    z-index:<%= object.order %>;
    top: 0px;
    left: 0px;
    display:block;
    float:left;
    overflow: hidden;
    position: absolute;
"><!-- --></a>
<% } %>
</div>
<% if (app.settings.get('mode') == 'player.render' && object.link && object.link.type == 'hyperlink' ) { %><% } %>
</script>
<script type='text/template' id='backgroundWrapper'><div class="slide-background" id="<%= object.id %>"><%= template(object) %></div></script>
<script type='text/template' id='background'><div class="background-wrapper" <% if (bgtype != 'image') { %>style="background:<%= colors[0] %>;<%= backgrounds %>"<% } %>>
  <div class="crop_wrapper" <% if (bgtype != 'image') { %>style="display:none"<% } else { %>style='transform: translate(<%= x %>px, <%= y %>px);'<% } %>>
    <svg class="clip-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" x="0" y="0" width="100%" height="100%"
    style="width:<%= width * ( scale / 100 ) %>px;height:<%= height * ( scale / 100 ) %>px;<% if(flipX || flipY) { %>transform:scale(<%= flipX ? -1: 1 %>, <%= flipY ? -1: 1 %>)<% } %>"
    >
    <defs>
      <filter id="filter-<%= id %>">
        <feGaussianBlur in="SourceGraphic" stdDeviation="0" color-interpolation-filters="sRGB"/>
        <feComponentTransfer id="brightness" color-interpolation-filters="sRGB">
          <feFuncR type="linear" slope="0"/>
          <feFuncG type="linear" slope="0"/>
          <feFuncB type="linear" slope="0"/>
        </feComponentTransfer>
        <feComponentTransfer id="contrast" color-interpolation-filters="sRGB">
          <feFuncR type="linear" slope="0"/>
          <feFuncG type="linear" slope="0"/>
          <feFuncB type="linear" slope="0"/>
        </feComponentTransfer>
        <feColorMatrix id="hue" type="hueRotate" values="0" color-interpolation-filters="sRGB"/>
      </filter>
    </defs>
    <defs>
      <filter id="filter2-<%= id %>" x="0" y="0">
        <feColorMatrix id="saturate" result="feColorMatrix" in="SourceGraphic" type="saturate" values="1" color-interpolation-filters="sRGB"/>
        <feFlood id="imageColorOverlay" result="floodFill" x="0" y="0" width="100%" height="100%" flood-color="green" flood-opacity="1" color-interpolation-filters="sRGB"/>
        <feBlend in2="feColorMatrix" in="floodFill" mode="normal" color-interpolation-filters="sRGB"/>
      </filter>
    </defs>
    <defs>
      <linearGradient id="alphaLinear-<%= id %>" x1="0%" y1="100%" x2="0%" y2="0%">
        <stop offset="0%" stop-color="#FFFFF" stop-opacity="0%" />
        <stop offset="40%" stop-color="#FFFFF" stop-opacity="20%" />
        <stop offset="100%" stop-color="#999999" stop-opacity="100%" />
      </linearGradient>

      <mask id="mask-ref-<%= id %>">
        <rect x="0" y="0" width="100%" height="100%" fill="url(#alphaLinear-<%= id %>)"  />
      </mask>
    </defs>


        <g class="imageObj" clip-path="url(#path-none)">
          <image height="<%= height * ( scale / 100 ) %>px" width="<%= width * ( scale / 100 ) %>px" xlink:href="<% if (src) { %><%= usersDataStorage %><%= src %><% } %>" preserveAspectRatio="none" style="opacity:<%= opacity / 100 %>"/>
          <rect id="imageColorOverlay" fill="transparent" width="100%" height="100%" />
        </g>

    </svg>


  </div>
  
<div class="qLoverlay loader_code" style="" >
    <div class='loader'  style="">
        <div class="loader_wrap" style="">
            <div class="container">
                <div class="ring1">
                    <div class="ring2">
                        <div class="ring3"></div>
                    </div>
                </div>
            </div>
            <br />
            <div class="c_awesome">LOADING AWESOME</div>
        </div>
    </div>
</div>
</div>
</script>
<script type='text/template' id='image'><div class="crop_wrapper">
  <svg class="clip-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" x="0" y="0" width="100%" height="100%">
      <defs>
        <filter id="filter-<%= id %>">
          <feGaussianBlur in="SourceGraphic" stdDeviation="0" color-interpolation-filters="sRGB"/>
          <feComponentTransfer id="brightness" color-interpolation-filters="sRGB">
            <feFuncR type="linear" slope="0"/>
            <feFuncG type="linear" slope="0"/>
            <feFuncB type="linear" slope="0"/>
          </feComponentTransfer>
          <feComponentTransfer id="contrast" color-interpolation-filters="sRGB">
            <feFuncR type="linear" slope="0"/>
            <feFuncG type="linear" slope="0"/>
            <feFuncB type="linear" slope="0"/>
          </feComponentTransfer>
          <feColorMatrix id="hue" type="hueRotate" values="0" color-interpolation-filters="sRGB"/>
        </filter>
      </defs>
      <defs>
        <filter id="filter2-<%= id %>" x="0" y="0">
          <feColorMatrix id="saturate" result="feColorMatrix" in="SourceGraphic" type="saturate" values="1" color-interpolation-filters="sRGB"/>
          <feFlood id="imageColorOverlay" result="floodFill" x="0" y="0" width="100%" height="100%" flood-color="green" flood-opacity="1" color-interpolation-filters="sRGB"/>
          <feBlend in2="feColorMatrix" in="floodFill" mode="normal" color-interpolation-filters="sRGB"/>
        </filter>
      </defs>
      <defs>
        <linearGradient id="alphaLinear-<%= id %>" x1="0%" y1="100%" x2="0%" y2="0%">
          <stop offset="0%" stop-color="#FFFFF" stop-opacity="0%" />
          <stop offset="40%" stop-color="#FFFFF" stop-opacity="20%" />
          <stop offset="100%" stop-color="#999999" stop-opacity="100%" />
        </linearGradient>

        <mask id="mask-ref-<%= id %>">
          <rect x="0" y="0" width="100%" height="100%" fill="url(#alphaLinear-<%= id %>)"  />
        </mask>
      </defs>
      <defs>
        <clipPath id="path-<%= id %>-circle">
          <ellipse cx="50" cy="50" rx="50" ry="50"/>
        </clipPath>
      </defs>
      <defs>
        <clipPath id="path-<%= id %>-rectangle">
          <rect x="0" y="0" rx="0" ry="0" width="100" height="100"/>
        </clipPath>
      </defs>
      <defs>
        <clipPath id="path-<%= id %>-none">
          <rect x="0" y="0" rx="0" ry="0" width="100" height="100"/>
        </clipPath>
      </defs>
      <defs>
        <clipPath id="path-<%= id %>-rectangle1">
          <rect x="0" y="0" rx="10" ry="10" width="100" height="100"/>
        </clipPath>
      </defs>
      <defs>
        <clipPath id="path-<%= id %>-rectangle2">
          <path d="M1,0.06A0.06,0.06,0,0,1,.94,0H0.06A0.06,0.06,0,0,1,0,.06V0.94A0.06,0.06,0,0,1,.06,1H0.94A0.06,0.06,0,0,1,1,.94V0.06Z"/>
        </clipPath>
      </defs>
      <defs>
        <clipPath id="path-<%= id %>-triangle">
          <path d="M 0 100 L 50 0 L 100 100 L 0 100"/>
        </clipPath>
      </defs>
      <defs>
        <clipPath id="path-<%= id %>-triangle-r">
          <path d="M 0 0 L 50 100 L 100 0 L 0 0" />
        </clipPath>
      </defs>

      <defs>
        <clipPath id="path-<%= id %>-shape1">
          <path d="M0.972,0.536c0-0.007,0.001-0.013,0.001-0.02l0.013-0.056l0.014-0.059l-0.037-0.048l-0.03-0.039c-0.003-0.006-0.006-0.013-0.009-0.019L0.909,0.24
    l-0.015-0.058l-0.055-0.025l-0.04-0.018l-0.032-0.04l-0.038-0.047l-0.061,0l-0.05,0c-0.007-0.002-0.014-0.003-0.021-0.005l-0.052-0.022L0.489,0l-0.054,0.028l-0.044,0.023
    c-0.007,0.002-0.014,0.004-0.021,0.006l-0.057,0.005l-0.06,0.005l-0.034,0.05l-0.028,0.041c-0.005,0.005-0.01,0.009-0.015,0.014l-0.048,0.031l-0.051,0.033l-0.007,0.06l-0.005,0.049
    c-0.003,0.007-0.005,0.014-0.007,0.021L0.03,0.414l-0.03,0.053l0.022,0.056l0.018,0.046c0.001,0.007,0.002,0.014,0.003,0.021l-0.001,0.057l-0.001,0.06l0.046,0.039l0.038,0.032
    c0.004,0.006,0.008,0.011,0.013,0.016l0.026,0.051l0.027,0.054l0.059,0.013l0.048,0.01c0.007,0.003,0.013,0.006,0.02,0.009l0.046,0.033l0.049,0.035l0.058-0.016l0.048-0.014
    c0.007,0,0.014-0.001,0.02-0.001l0.057,0.007l0.06,0.008l0.044-0.042l0.036-0.034c0.006-0.003,0.012-0.007,0.018-0.011l0.054-0.02l0.057-0.021l0.019-0.057l0.016-0.047
    c0.004-0.006,0.007-0.012,0.011-0.018L0.95,0.69l0.04-0.045l-0.01-0.06L0.972,0.536z" />
        </clipPath>
      </defs>

      <defs>
        <clipPath id="path-<%= id %>-shape2" >
          <path d="m0.957,0.594c0,-0.001 0,-0.002 0.001,-0.003l0.014,-0.015l0.028,-0.031l-0.024,-0.035l-0.009,-0.013c0,-0.001 0,-0.002 0,-0.003l0.011,-0.018l0.021,-0.036l-0.031,-0.028l-0.012,-0.011c0,-0.001 0,-0.002 -0.001,-0.003l0.007,-0.02l0.013,-0.04l-0.036,-0.022l-0.014,-0.008c0,-0.001 -0.001,-0.002 -0.001,-0.003l0.002,-0.021l0.004,-0.041l-0.04,-0.014l-0.015,-0.005c-0.001,-0.001 -0.001,-0.002 -0.002,-0.002l-0.002,-0.021l-0.003,-0.041l-0.042,-0.005l-0.016,-0.002c-0.001,-0.001 -0.001,-0.001 -0.002,-0.002l-0.007,-0.02l-0.013,-0.04l-0.042,0.004l-0.016,0.001c-0.001,0 -0.002,-0.001 -0.003,-0.001l-0.01,-0.018l-0.02,-0.037l-0.04,0.012l-0.015,0.005c-0.001,0 -0.002,-0.001 -0.003,-0.001l-0.014,-0.016l-0.028,-0.031l-0.037,0.02l-0.014,0.008c-0.001,0 -0.002,0 -0.003,0l-0.017,-0.012l-0.034,-0.025l-0.032,0.027l-0.012,0.011c-0.001,0 -0.002,0 -0.003,0l-0.019,-0.008l-0.03008,-0.017l-0.025,0.033l-0.01,0.013c-0.001,0 -0.002,0.001 -0.003,0.001l-0.02,-0.005l-0.041,-0.009l-0.018,0.038l-0.007,0.015c-0.001,0.001 -0.002,0.001 -0.003,0.001l-0.021,0l-0.042,0l-0.009,0.041l-0.004,0.016c-0.001,0.001 -0.001,0.001 -0.002,0.002l-0.021,0.004l-0.041,0.009l-0.001,0.042l0,0.016c0,0 0,0.001 -0.001,0.001l-0.019,0.009l-0.038,0.017l0.008,0.041l0.003,0.016c0,0.001 -0.001,0.002 -0.001,0.003l-0.017,0.012l-0.035,0.024l0.016,0.038l0.006,0.015c0,0.001 0,0.002 -0.001,0.003l-0.014,0.015l-0.027,0.031l0.024,0.035l0.009,0.013c0,0.001 0,0.002 0,0.003l-0.011,0.018l-0.02,0.036l0.031,0.028l0.012,0.011c0,0.001 0,0.002 0.001,0.003l-0.007,0.02l-0.013,0.04l0.036,0.022l0.014,0.008c0,0.001 0.001,0.002 0.001,0.003l-0.002,0.021l-0.004,0.041l0.04,0.014l0.015,0.005c0.001,0.001 0.001,0.002 0.002,0.002l0.002,0.021l0.004,0.041l0.042,0.005l0.016,0.002c0.001,0.001 0.001,0.001 0.002,0.002l0.007,0.02l0.013,0.04l0.042,-0.004l0.016,-0.001c0.001,0 0.002,0.001 0.003,0.001l0.01,0.018l0.021,0.036l0.04,-0.012l0.015,-0.005c0.001,0 0.002,0.001 0.003,0.001l0.014,0.015l0.028,0.031l0.037,-0.02l0.014,-0.008c0.001,0 0.002,0 0.003,0l0.017,0.012l0.034,0.025l0.032,-0.027l0.012,-0.011c0.001,0 0.002,0 0.003,0l0.019,0.009l0.038,0.017l0.025,-0.033l0.01,-0.013c0.001,0 0.002,-0.001 0.003,-0.001l0.021,0.004l0.041,0.009l0.018,-0.038l0.007,-0.015c0.001,-0.001 0.002,-0.001 0.003,-0.001l0.021,0l0.042,0l0.009,-0.041l0.004,-0.016c0.001,-0.001 0.001,-0.001 0.002,-0.002l0.021,-0.004l0.041,-0.009l0.001,-0.042l0,-0.016c0.001,-0.001 0.001,-0.001 0.002,-0.002l0.014,-0.006l0.038,-0.017l-0.008,-0.041l-0.003,-0.016c0,-0.001 0.001,-0.002 0.001,-0.003l0.017,-0.012l0.034,-0.024l-0.016,-0.038l-0.006,-0.015z" />
        </clipPath>
      </defs>

      <defs>
        <clipPath id="path-<%= id %>-pentagon">
          <polygon points="0.5 0, 1 0.4, 0.8 1, 0.2 1, 0 0.4" />
        </clipPath>
      </defs>

      <defs>
        <clipPath id="path-<%= id %>-hexagon">
          <polygon points="0.5 0, 1 0.25, 1 0.75, 0.5 1, 0 0.75, 0 0.25" />
        </clipPath>
      </defs>

      <defs>
        <clipPath id="path-<%= id %>-heptagon">
          <polygon points="0.5 0, 0.9 0.2, 1 0.6, 0.75 1, 0.25 1, 0 0.6, 0.1 0.2" />
        </clipPath>
      </defs>

      <defs>
        <clipPath id="path-<%= id %>-octagon">
          <polygon points="0.3 0, 0.7 0, 1 0.3, 1 0.7, 0.7 1, 0.3 1, 0 0.7, 0 0.3" />
        </clipPath>
      </defs>

      <defs>
        <clipPath id="path-<%= id %>-rhomboid">
          <polygon points="0 1, 0.3 0, 1 0, 0.7 1" />
        </clipPath>
      </defs>

      <defs>
        <clipPath id="path-<%= id %>-rhombus">
          <polygon points="0.5 0, 1 0.5, 0.5 1, 0 0.5" />
        </clipPath>
      </defs>

      <defs>
        <clipPath id="path-<%= id %>-kite">
          <polygon points="0.5 0, 1 0.3, 0.5 1, 0 0.3" />
        </clipPath>
      </defs>

      <defs>
        <clipPath id="path-<%= id %>-kite-r">
          <polygon points="0.5 0, 1 0.7, 0.5 1, 0 0.7" />
        </clipPath>
      </defs>

      <defs>
        <clipPath id="path-<%= id %>-trapezoid">
          <polygon points="0 1, 0.3 0, 0.7 0, 1 1" />
        </clipPath>
      </defs>

      <defs>
        <clipPath id="path-<%= id %>-trapezoid-r">
          <polygon points="0 0, 0.3 1, 0.7 1, 1 0" />
        </clipPath>
      </defs>

      <defs>
        <clipPath id="path-<%= id %>-shape3">
          <polygon points="0.854,0.646 1,0.5 0.854,0.354 0.854,0.146 0.646,0.146 0.50,0 0.354,0.146 0.146,0.146 0.146,0.354 0,0.50   0.146,0.646 0.146,0.854 0.354,0.854 0.50,1 0.646,0.854 0.854,0.854 " />
        </clipPath>
      </defs>

      <defs>
        <clipPath id="path-<%= id %>-shape4">
          <path d="m0.931,0.50c0.056,-0.026 0.083,-0.092 0.062,-0.155c-0.021,-0.063 -0.083,-0.10 -0.144,-0.09c0.029,-0.053 0.011,-0.121 -0.044,-0.16c-0.055,-0.039 -0.129,-0.034 -0.171,0.009c-0.009,-0.058 -0.066,-0.104 -0.134,-0.104s-0.125,0.046 -0.133,0.105c-0.043,-0.043 -0.116,-0.048 -0.171,-0.009c-0.055,0.039 -0.073,0.108 -0.044,0.16c-0.061,-0.01 -0.123,0.027 -0.144,0.09c-0.022,0.062 0.006,0.128 0.061,0.154c-0.056,0.026 -0.083,0.092 -0.062,0.155c0.021,0.063 0.083,0.10 0.144,0.09c-0.029,0.053 -0.011,0.121 0.044,0.16c0.055,0.039 0.129,0.034 0.171,-0.009c0.009,0.058 0.066,0.104 0.134,0.104s0.125,-0.046 0.133,-0.105c0.043,0.043 0.116,0.048 0.171,0.009c0.055,-0.039 0.073,-0.108 0.044,-0.16c0.061,0.01 0.123,-0.027 0.144,-0.09c0.022,-0.062 -0.006,-0.128 -0.061,-0.154z" />
        </clipPath>
      </defs>

      <defs>
        <clipPath id="path-<%= id %>-shape5">
          <path d="m0.933,0.609l0.06,-0.022l-0.049,-0.041l-0.008,-0.006c0,-0.001 0,-0.002 0,-0.003l0.009,-0.005l0.055,-0.032l-0.055,-0.032l-0.009,-0.005c0,-0.001 0,-0.002 0,-0.003l0.008,-0.006l0.049,-0.041l-0.06,-0.022l-0.009,-0.003c0,-0.001 -0.001,-0.002 -0.001,-0.003l0.006,-0.008l0.041,-0.049l-0.063,-0.011l-0.01,-0.002c0,-0.001 -0.001,-0.002 -0.001,-0.002l0.005,-0.009l0.032,-0.055l-0.064,0l-0.01,0c0,-0.001 -0.001,-0.001 -0.001,-0.002l0.003,-0.009l0.022,-0.06l-0.063,0.012l-0.01,0.002c0,-0.001 -0.001,-0.002 -0.001,-0.002l0.002,-0.01l0.011,-0.063l-0.06,0.022l-0.009,0.003c-0.001,0 -0.001,-0.001 -0.002,-0.001l0,-0.01l0,-0.064l-0.055,0.032l-0.009,0.005c-0.001,0 -0.002,-0.001 -0.002,-0.001l-0.002,-0.01l-0.012,-0.063l-0.049,0.041l-0.008,0.006c-0.001,0 -0.002,-0.001 -0.003,-0.001l-0.003,-0.009l-0.022,-0.06l-0.041,0.049l-0.006,0.008c-0.001,0 -0.002,0 -0.003,0l-0.005,-0.009l-0.031,-0.055l-0.032,0.055l-0.005,0.009c-0.001,0 -0.002,0 -0.003,0l-0.006,-0.008l-0.041,-0.049l-0.022,0.06l-0.003,0.009c-0.001,0 -0.002,0.001 -0.003,0.001l-0.008,-0.006l-0.048,-0.041l-0.011,0.063l-0.002,0.01c-0.001,0 -0.002,0.001 -0.002,0.001l-0.009,-0.005l-0.055,-0.032l0,0.064l0,0.01c-0.001,0 -0.001,0.001 -0.002,0.001l-0.009,-0.003l-0.06,-0.022l0.011,0.063l0.002,0.01c-0.001,0 -0.002,0.001 -0.002,0.001l-0.01,-0.001l-0.063,-0.011l0.022,0.06l0.003,0.009c0,0.001 -0.001,0.001 -0.001,0.002l-0.01,0l-0.064,0l0.032,0.055l0.005,0.009c0,0.001 -0.001,0.002 -0.001,0.002l-0.01,0.002l-0.063,0.011l0.041,0.049l0.006,0.008c0,0.001 -0.001,0.002 -0.001,0.003l-0.009,0.003l-0.06,0.022l0.049,0.041l0.008,0.006c0,0.001 0,0.002 0,0.003l-0.009,0.005l-0.055,0.031l0.055,0.032l0.009,0.005c0,0.001 0,0.002 0,0.003l-0.008,0.006l-0.049,0.041l0.06,0.022l0.009,0.003c0,0.001 0.001,0.002 0.001,0.003l-0.006,0.008l-0.041,0.048l0.063,0.011l0.01,0.002c0,0.001 0.001,0.002 0.001,0.002l-0.005,0.009l-0.032,0.055l0.064,0l0.01,0c0,0.001 0.001,0.001 0.001,0.002l-0.003,0.009l-0.022,0.06l0.063,-0.011l0.01,-0.002c0.001,0.001 0.001,0.001 0.002,0.002l-0.002,0.01l-0.011,0.063l0.06,-0.022l0.009,-0.003c0.001,0 0.001,0.001 0.002,0.001l0,0.01l0,0.064l0.055,-0.032l0.009,-0.005c0.001,0 0.002,0.001 0.002,0.001l0.002,0.01l0.011,0.063l0.049,-0.041l0.008,-0.006c0.001,0 0.002,0.001 0.003,0.001l0.003,0.009l0.022,0.06l0.041,-0.049l0.006,-0.008c0.001,0 0.002,0 0.003,0l0.005,0.009l0.031,0.055l0.032,-0.055l0.005,-0.009c0.001,0 0.002,0 0.003,0l0.006,0.008l0.041,0.049l0.022,-0.06l0.003,-0.009c0.001,0 0.002,-0.001 0.003,-0.001l0.008,0.006l0.049,0.041l0.011,-0.063l0.002,-0.01c0.001,0 0.002,-0.001 0.002,-0.001l0.009,0.005l0.055,0.032l0,-0.064l0,-0.01c0.001,0 0.001,-0.001 0.002,-0.001l0.009,0.003l0.06,0.022l-0.012,-0.063l-0.002,-0.01c0.001,-0.001 0.001,-0.001 0.002,-0.002l0.01,0.002l0.063,0.011l-0.022,-0.06l-0.003,-0.009c0,-0.001 0.001,-0.001 0.001,-0.002l0.01,0l0.064,0l-0.032,-0.055l-0.005,-0.009c0,-0.001 0.001,-0.002 0.001,-0.002l0.01,-0.002l0.063,-0.011l-0.041,-0.049l-0.006,-0.008c0,-0.001 0.001,-0.002 0.001,-0.003l0.009,-0.002z" />
        </clipPath>
      </defs>

      <defs>
        <clipPath id="path-<%= id %>-shape6">
          <polygon points="0.962,0.592 1,0.50 0.962,0.408 0.962,0.309 0.892,0.238 0.854,0.146 0.762,0.108 0.691,0.038 0.592,0.038   0.50,0 0.408,0.038 0.309,0.038 0.238,0.108 0.146,0.146 0.108,0.238 0.038,0.309 0.038,0.408 0,0.50 0.038,0.592 0.038,0.691 0.108,0.762 0.146,0.854 0.238,0.892   0.309,0.962 0.408,0.962 0.50,1 0.592,0.962 0.691,0.962 0.762,0.892 0.854,0.854 0.892,0.762 0.962,0.691 " />
        </clipPath>
      </defs>

      <defs>
        <clipPath id="path-<%= id %>-shape7">
          <polygon points="0.916,0.584 1,0.50 0.916,0.416 0.916,0.328 0.854,0.265 0.854,0.146 0.735,0.146 0.672,0.084 0.584,0.084   0.50,0 0.416,0.084 0.328,0.084 0.265,0.146 0.146,0.146 0.146,0.265 0.084,0.328 0.084,0.416 0,0.50 0.084,0.584 0.084,0.672 0.146,0.735 0.146,0.854 0.265,0.854   0.328,0.916 0.416,0.916 0.50,1 0.584,0.916 0.672,0.916 0.735,0.854 0.854,0.854 0.854,0.735 0.916,0.672 " />
        </clipPath>
      </defs>

      <defs>
        <clipPath id="path-<%= id %>-shape8">
          <path d="m1,0.50l-0.037,-0.037c-0.025,-0.025 -0.039,-0.059 -0.039,-0.094l0,-0.199c0,-0.052 -0.042,-0.094 -0.094,-0.094l-0.199,0c-0.035,0 -0.069,-0.014 -0.094,-0.039l-0.037,-0.037l-0.037,0.037c-0.025,0.025 -0.059,0.039 -0.094,0.039l-0.199,0c-0.052,0 -0.094,0.042 -0.094,0.094l0,0.199c0,0.035 -0.014,0.069 -0.039,0.094l-0.037,0.037l0.037,0.037c0.025,0.025 0.039,0.059 0.039,0.094l0,0.199c0,0.052 0.042,0.094 0.094,0.094l0.199,0c0.035,0 0.069,0.014 0.094,0.039l0.037,0.037l0.037,-0.037c0.025,-0.025 0.059,-0.039 0.094,-0.039l0.199,0c0.052,0 0.094,-0.042 0.094,-0.094l0,-0.199c0,-0.035 0.014,-0.069 0.039,-0.094l0.037,-0.037z"/>
        </clipPath>
      </defs>

      <defs>
        <clipPath id="path-<%= id %>-shape9">
          <path d="m0.92,1l-0.92,0l0,-0.92c0,-0.044 0.036,-0.08 0.08,-0.08l0.92,0l0,0.92c0,0.044 -0.036,0.08 -0.08,0.08z"/>
        </clipPath>
      </defs>

      <defs>
        <clipPath id="path-<%= id %>-shape10">
          <polygon points="0.118,0 0,0.118 0,0.882 0.118,1 0.882,1 1,0.882 1,0.118 0.882,0 "/>
        </clipPath>
      </defs>

      <defs>
        <clipPath id="path-<%= id %>-shape11">
          <polygon points="0.081,0 0,0.081 0,0.919 0.081,1 0.919,1 1,0.919 1,0.081 0.919,0 "/>
        </clipPath>
      </defs>

      <defs>
        <clipPath id="path-<%= id %>-shape12">
          <path d="m1,0.839l0,-0.678c-0.089,0 -0.161,-0.072 -0.161,-0.161l-0.678,0c0,0.089 -0.072,0.161 -0.161,0.161l0,0.678c0.089,0 0.161,0.072 0.161,0.161l0.678,0c0,-0.089 0.072,-0.161 0.161,-0.161z"/>
        </clipPath>
      </defs>

      <g class="imageObj" clip-path="url(#path-none)">
        <image height="100%" width="100%" xlink:href="<%= usersDataStorage %><%= src %>" preserveAspectRatio="none"/>
      </g>
  </svg>

  <svg class="clip-svg svg-reflect" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" x="0" y="0" width="100%" height="100%" mask="url(#mask-ref-<%= id %>)" >
    <g class="imageObjRef" transform="translate(0 <%= height %>) scale(1 -1)">
      <image height="100%" width="100%" xlink:href="<%= usersDataStorage %><%= src %>" preserveAspectRatio="none"/>
    </g>
  </svg>

</div>


<div class="qLoverlay loader_code" style="" >
    <div class='loader'  style="">
        <div class="loader_wrap" style="">
            <div class="container">
                <div class="ring1">
                    <div class="ring2">
                        <div class="ring3"></div>
                    </div>
                </div>
            </div>
            <br />
            <div class="c_awesome">LOADING AWESOME</div>
        </div>
    </div>
</div>
</script>
<script type='text/template' id='pdf'><div class="crop_wrapper">
	<iframe src="https://docs.google.com/gview?url=<%= usersDataStorage %><%= src %>&embedded=true" 
	style="width:100%; height:100%;" frameborder="0"></iframe>
</div>

<div class="qLoverlay loader_code" style="" >
    <div class='loader'  style="">
        <div class="loader_wrap" style="">
            <div class="container">
                <div class="ring1">
                    <div class="ring2">
                        <div class="ring3"></div>
                    </div>
                </div>
            </div>
            <br />
            <div class="c_awesome">LOADING AWESOME</div>
        </div>
    </div>
</div>
</script>
<script type='text/template' id='text'><div class = 'vm-text'
     style = 'padding:<%= padding.vertical %>px <%= padding.horizontal %>px;
              width: calc(<%= width %>px - <%=  padding.horizontal %>px * 2 - <% if (borderStyle && borderStyle != "none") { %><%= borderWidth %>px * 2<% } else { %> 0px <% } %>);
              line-height: <%= lineHeight %>;
              <% if (font.size) { %>
              font-size: <%= font.size %>px;
              <% } %>
              <% if (font.name) { %>
              font-family: <%= font.name %>;
              <% } %>
              text-align: <%= align %>;
              letter-spacing: <%= letterSpacing / 10 %>pt;
              '
><%= text %></div>
</script>
<script type='text/template' id='svg'>
</script>
<script type='text/template' id='audio'><audio controls hidden>
  <source src="<%= audioStorage %><%= hash %>.mp3" type="audio/mpeg">
  <source src="<%= audioStorage %><%= hash %>.ogg" type="audio/ogg">
</audio>
</script>
<script type='text/template' id='infogr-widget'><canvas></canvas>
</script>
<script type='text/template' id='array'><div class="array-wrapper">
	<div class="array-spot">
	</div>
</div>
</script>
<script type='text/template' id='clock'><div class="svg-wrapper">
	<svg id="clock1" xmlns="http://www.w3.org/2000/svg" width="200px" height="200px" viewbox="0 0 200 200" style="display: none;" >
		<image class="frame" xlink:href="https://assets.visme.co/svgwidgets/clocks/clock1-frame.svg" src="https://assets.visme.co/svgwidgets/clocks/clock1-frame.svg" width="100%" height="100%"/>		
		<image class="handle-hour" xlink:href="https://assets.visme.co/svgwidgets/clocks/clock1-hour.svg" src="https://assets.visme.co/svgwidgets/clocks/clock1-hour.svg" width="100%" height="100%"/>
		<image class="handle-minute" xlink:href="https://assets.visme.co/svgwidgets/clocks/clock1-minute.svg" src="https://assets.visme.co/svgwidgets/clocks/clock1-minute.svg" width="100%" height="100%"/>
		<image class="handle-second" xlink:href="https://assets.visme.co/svgwidgets/clocks/clock1-second.svg" src="https://assets.visme.co/svgwidgets/clocks/clock1-second.svg" width="100%" height="100%"/>
		<image class="center" xlink:href="https://assets.visme.co/svgwidgets/clocks/clock1-center.svg" src="https://assets.visme.co/svgwidgets/clocks/clock1-center.svg" width="100%" height="100%"/>
		<text  class="period" fill="#000" font-family="Verdana" font-size="12" x="65%" y="40%" width="100%" height="100%"></text>
	</svg>
	<svg id="clock2" xmlns="http://www.w3.org/2000/svg" width="200px" height="200px" viewbox="0 0 200 200" style="display: none;" >
		<image class="frame" xlink:href="https://assets.visme.co/svgwidgets/clocks/clock2-frame.svg" src="https://assets.visme.co/svgwidgets/clocks/clock2-frame.svg" width="100%" height="100%"/>		
		<image class="handle-hour" xlink:href="https://assets.visme.co/svgwidgets/clocks/clock2-hour.svg" src="https://assets.visme.co/svgwidgets/clocks/clock2-hour.svg" width="100%" height="100%"/>
		<image class="handle-minute" xlink:href="https://assets.visme.co/svgwidgets/clocks/clock2-minute.svg" src="https://assets.visme.co/svgwidgets/clocks/clock2-minute.svg" width="100%" height="100%"/>
		<image class="handle-second" xlink:href="https://assets.visme.co/svgwidgets/clocks/clock2-second.svg" src="https://assets.visme.co/svgwidgets/clocks/clock1-second.svg" width="100%" height="100%"/>
		<text  class="period" fill="#fff" font-family="Verdana" font-size="10" x="55%" y="65%" width="100%" height="100%"></text>
	</svg>
	<svg id="clock3" xmlns="http://www.w3.org/2000/svg" width="200px" height="200px" viewbox="0 0 200 200" style="display: none;" >
		<image class="frame" xlink:href="https://assets.visme.co/svgwidgets/clocks/clock3-frame.svg" src="https://assets.visme.co/svgwidgets/clocks/clock3-frame.svg" width="100%" height="100%"/>		
		<image class="frame" xlink:href="https://assets.visme.co/svgwidgets/clocks/clock3-frame2.svg" src="https://assets.visme.co/svgwidgets/clocks/clock3-frame2.svg" width="100%" height="100%"/>
		<text  class="time" fill="#a0a18a" font-family="Verdana" font-size="30" x="0" y="0" width="100%" height="100%"></text>
		<text  class="period" fill="#a0a18a" font-family="Verdana" font-size="12" x="146" y="135" width="100%" height="100%"></text>
	</svg>
</div></script>
<script type='text/template' id='countdown'><div class="svg-wrapper"> 
	<svg id="countdown1" xmlns="http://www.w3.org/2000/svg" width="200px" height="200px" viewbox="0 0 200 200" style="display: none;" >
		<circle class="bg" cx="100" cy="100" r="90" stroke="transparent" stroke-width="0" fill="#fff"/></circle>
		<circle class="range" cx="100" cy="100" r="51" stroke="#ef8122" stroke-width="32" fill="transparent"/></circle>
		<path class="bgValue" fill="#114e7d" d="m100,65c-19.3,0 -35,15.7 -35,35s15.7,35 35,35c19.3,0 35,-15.7 35,-35s-15.7,-35 -35,-35zm0,-65c-55.2,0 -100,44.8 -100,100s44.8,100 100,100c55.2,0 100,-44.8 100,-100s-44.8,-100 -100,-100zm84.5,108.1l-1.9,-0.2l-0.2,1.6l1.9,0.2c-0.3,2.4 -0.6,4.8 -1.1,7.2l-1.9,-0.4l-0.3,1.5l1.8,0.4c-0.5,2.4 -1.1,4.7 -1.9,7l-1.8,-0.6l-0.5,1.5l1.8,0.6c-0.8,2.3 -1.6,4.6 -2.6,6.8l-1.7,-0.8l-0.7,1.5l1.7,0.8c-1,2.2 -2.1,4.4 -3.3,6.5l-4.2,-2.4l-0.8,1.4l4.2,2.4c-1.2,2.1 -2.6,4.1 -4,6.1l-1.5,-1.1l-1,1.3l1.5,1.1c-1.4,1.9 -3,3.8 -4.6,5.6l-1.4,-1.3l-1.1,1.2l1.4,1.3c-1.6,1.8 -3.4,3.5 -5.1,5.1l-1.3,-1.4l-1.2,1.1l1.3,1.4c-1.8,1.6 -3.7,3.1 -5.6,4.6l-1.1,-1.5l-1.3,1l1.1,1.5c-2,1.4 -4,2.7 -6.1,4l-2.4,-4.2l-1.4,0.8l2.4,4.2c-2.1,1.2 -4.3,2.3 -6.5,3.3l-0.8,-1.7l-1.5,0.7l0.8,1.7c-2.2,1 -4.5,1.8 -6.8,2.6l-0.6,-1.8l-1.5,0.5l0.6,1.8c-2.3,0.7 -4.6,1.3 -7,1.9l-0.3,-1.9l-1.6,0.3l0.4,1.9c-2.4,0.5 -4.8,0.8 -7.2,1.1l-0.2,-1.9l-1.6,0.2l0.2,1.9c-2.4,0.2 -4.8,0.3 -7.3,0.4l0,-9.4l-1.6,0l0,9.4c-2.4,0 -4.9,-0.1 -7.3,-0.4l0.2,-1.9l-1.6,-0.2l-0.2,1.9c-2.4,-0.3 -4.8,-0.6 -7.2,-1.1l0.4,-1.9l-1.4,-0.3l-0.4,1.8c-2.4,-0.5 -4.7,-1.1 -7,-1.9l0.6,-1.8l-1.5,-0.5l-0.6,1.8c-2.3,-0.8 -4.6,-1.6 -6.8,-2.6l0.8,-1.7l-1.5,-0.7l-0.8,1.7c-2.2,-1 -4.4,-2.1 -6.5,-3.3l2.4,-4.2l-1.4,-0.8l-2.4,4.2c-2.1,-1.2 -4.1,-2.6 -6.1,-4l1.1,-1.5l-1.3,-1l-1.1,1.5c-1.9,-1.4 -3.8,-3 -5.6,-4.6l1.3,-1.4l-1.2,-1.1l-1.3,1.4c-1.8,-1.6 -3.5,-3.4 -5.1,-5.1l1.4,-1.3l-1.1,-1.2l-1.4,1.3c-1.6,-1.8 -3.1,-3.7 -4.6,-5.6l1.5,-1.1l-1,-1.3l-1.5,1.1c-1.4,-2 -2.7,-4 -4,-6.1l4.2,-2.4l-0.8,-1.4l-4.2,2.4c-1.2,-2.1 -2.3,-4.3 -3.3,-6.5l1.7,-0.8l-0.7,-1.5l-1.7,0.8c-1,-2.2 -1.8,-4.5 -2.6,-6.8l1.8,-0.6l-0.5,-1.5l-1.8,0.6c-0.7,-2.3 -1.3,-4.6 -1.9,-7l1.9,-0.3l-0.3,-1.6l-1.9,0.4c-0.5,-2.4 -0.8,-4.8 -1.1,-7.2l1.9,-0.2l-0.2,-1.6l-1.9,0.2c-0.2,-2.4 -0.3,-4.8 -0.4,-7.3l9.4,0l0,-1.6l-9.4,0c0,-2.4 0.1,-4.9 0.4,-7.3l1.9,0.2l0.2,-1.6l-1.9,-0.2c0.3,-2.4 0.6,-4.8 1.1,-7.2l1.9,0.4l0.3,-1.4l-1.8,-0.4c0.5,-2.4 1.1,-4.7 1.9,-7l1.8,0.6l0.5,-1.5l-1.9,-0.7c0.8,-2.3 1.6,-4.6 2.6,-6.8l1.7,0.8l0.7,-1.5l-1.7,-0.8c1,-2.2 2.1,-4.4 3.3,-6.5l4.2,2.4l0.8,-1.4l-4.2,-2.4c1.2,-2.1 2.6,-4.1 4,-6.1l1.5,1.1l1,-1.3l-1.5,-1.1c1.4,-1.9 3,-3.8 4.6,-5.6l1.4,1.3l1.1,-1.2l-1.4,-1.3c1.6,-1.8 3.4,-3.5 5.1,-5.1l1.3,1.4l1.2,-1.1l-1.3,-1.4c1.8,-1.6 3.7,-3.1 5.6,-4.6l1.1,1.5l1.3,-1l-1.1,-1.5c2,-1.4 4,-2.7 6.1,-4l2.4,4.2l1.4,-0.8l-2.4,-4.2c2.1,-1.2 4.3,-2.3 6.5,-3.3l0.8,1.7l1.5,-0.7l-0.8,-1.7c2.2,-1 4.5,-1.8 6.8,-2.6l0.6,1.8l1.5,-0.5l-0.7,-1.7c2.3,-0.7 4.6,-1.3 7,-1.9l0.5,1.9l1.6,-0.3l-0.4,-1.9c2.4,-0.5 4.8,-0.8 7.2,-1.1l0.2,1.9l1.6,-0.2l-0.2,-1.9c2.4,-0.2 4.8,-0.3 7.3,-0.4l0,9.4l1.6,0l0,-9.4c2.4,0 4.9,0.1 7.3,0.4l-0.2,1.9l1.6,0.2l0.2,-1.9c2.4,0.3 4.8,0.6 7.2,1.1l-0.4,1.9l1.4,0.3l0.4,-1.8c2.4,0.5 4.7,1.1 7,1.9l-0.6,1.8l1.5,0.5l0.6,-1.8c2.3,0.8 4.6,1.6 6.8,2.6l-0.8,1.7l1.5,0.7l0.8,-1.7c2.2,1 4.4,2.1 6.5,3.3l-2.4,4.2l1.4,0.8l2.4,-4.2c2.1,1.2 4.1,2.6 6.1,4l-1.1,1.5l1.3,1l1.1,-1.5c1.9,1.4 3.8,3 5.6,4.6l-1.3,1.4l1.2,1.1l1.3,-1.4c1.8,1.6 3.5,3.4 5.1,5.1l-1.4,1.3l1.1,1.2l1.4,-1.3c1.6,1.8 3.1,3.7 4.6,5.6l-1.5,1.1l1,1.3l1.5,-1.1c1.4,2 2.7,4 4,6.1l-4.2,2.4l0.8,1.4l4.2,-2.4c1.2,2.1 2.3,4.3 3.3,6.5l-1.7,0.8l0.7,1.5l1.7,-0.8c1,2.2 1.8,4.5 2.6,6.8l-1.8,0.6l0.5,1.5l1.8,-0.6c0.7,2.3 1.3,4.6 1.9,7l-1.9,0.3l0.3,1.6l1.9,-0.4c0.5,2.4 0.8,4.8 1.1,7.2l-1.9,0.2l0.2,1.6l1.9,-0.2c0.2,2.4 0.3,4.8 0.4,7.3l-9.4,0l0,1.6l9.4,0c-0.1,2.4 -0.2,4.8 -0.4,7.2z"/>
		<text  class="value" fill="#fff" font-family="Verdana" font-size="34" x="78" y="105" width="100%" height="100%"></text>
		<text  class="format" fill="#fff" font-family="Verdana" font-size="13" x="89" y="120" width="100%" height="100%"></text>
	</svg>
	<svg id="countdown2" xmlns="http://www.w3.org/2000/svg" width="200px" height="200px" viewbox="0 0 200 200" style="display: none;" >
		<circle class="bg" cx="100" cy="100" r="90" stroke="transparent" stroke-width="0" fill="#fff"/></circle>
		<circle class="range" cx="100" cy="100" r="70" stroke="#f69c81" stroke-width="38" fill="transparent"/></circle>
		<circle class="bgValue" cx="100" cy="100" r="52" stroke="transparent" stroke-width="0" fill="#35c0c7"/></circle>
		<image class="frame" xlink:href="https://assets.visme.co/svgwidgets/counter/countdown2-frame.svg" src="https://assets.visme.co/svgwidgets/counter/countdown2-frame.svg" width="100%" height="100%"/>
		<text  class="value" fill="#fff" font-family="Verdana" font-size="50" x="69" y="105" width="100%" height="100%"></text>
		<text  class="format" fill="#fff" font-family="Verdana" font-size="30" x="75" y="135" width="100%" height="100%"></text>
	</svg>
	<svg id="countdown3" xmlns="http://www.w3.org/2000/svg" width="200px" height="200px" viewbox="0 0 200 200" style="display: none;" >
		<circle class="bg" cx="100" cy="113" r="84" stroke="transparent" stroke-width="0" fill="#fff"/></circle>
		<circle class="range" cx="87" cy="100" r="50" stroke="#29bfd0" stroke-width="40" fill="transparent"/></circle>
		<image class="frame" xlink:href="https://assets.visme.co/svgwidgets/counter/countdown3-frame.svg" src="https://assets.visme.co/svgwidgets/counter/countdown3-frame.svg" width="100%" height="100%"/>
		<circle class="bgValue" cx="100" cy="113" r="32" stroke="#828284" stroke-width="1" fill="#fff"/></circle>
		<text  class="value" fill="#232323" font-family="Verdana" font-size="34" x="78" y="118" width="100%" height="100%"></text>
		<text  class="format" fill="#232323" font-family="Verdana" font-size="13" x="89" y="133" width="100%" height="100%"></text>
	</svg>
</div></script>
<script type='text/template' id='thermometer'><div class="svg-wrapper svg-wrapper-thermometer svg-wrapper-<%= style %>">
	<% if (style == 'thermometer-1') { %>
	<svg class="thermometer-1" xmlns="http://www.w3.org/2000/svg" width="127.79px" height="400px" viewbox="0 0 127.79 400" >
		<path xmlns="http://www.w3.org/2000/svg" class="Background" fill=<%= colors[0] %> d="M63.9,0L63.9,0C28.6,0,0,28.6,0,63.9v272.9c0,35.3,28.6,63.9,63.9,63.9h0  c35.3,0,63.9-28.6,63.9-63.9V63.9C127.7,28.6,99.1,0,63.9,0z"/>

		<path xmlns="http://www.w3.org/2000/svg" class="ProgressBarBg" fill=<%= colors[1] %> d="M74.9,327.2v-289H54.7v288.2C44.4,330.1,37,340,37,351.6c0,14.8,12,26.8,26.8,26.8  c14.8,0,26.8-12,26.8-26.8C90.7,340.7,84.2,331.4,74.9,327.2z M63.9,370.7c-10.7,0-19.5-8.7-19.5-19.5c0-8.1,5.2-15.5,12.8-18.3  l4.8-1.8v-9.4h5.5v9.8l4.3,2c7,3.2,11.4,10.1,11.4,17.7C83.3,361.9,74.6,370.7,63.9,370.7z"/>

		<polygon xmlns="http://www.w3.org/2000/svg" class="Measurements-right" fill="rgba(255,255,255,0.2)" points="98.1,78.8 98.1,76.8 83,76.8 83,65.2 93.2,65.2 93.2,63.2 83,63.2 83,51.5 97.3,51.5   97.3,49.5 83,49.5 83,49.5 81,49.5 80.6,322.8 82.6,322.8 82.6,322.8 96.8,322.8 96.8,320.8 82.6,320.8 82.7,310.3 92.6,310.3   92.6,308.3 82.7,308.3 82.7,297.4 98.1,297.4 98.1,295.4 82.7,295.4 82.7,283.8 93.2,283.8 93.2,281.8 82.7,281.8 82.7,270.1   98.1,270.1 98.1,268.1 82.7,268.1 82.7,256.4 93.2,256.4 93.2,254.4 82.7,254.4 82.7,242.8 98.1,242.8 98.1,240.8 82.8,240.8   82.8,229.1 93.2,229.1 93.2,227.1 82.8,227.1 82.8,215.4 98.1,215.4 98.1,213.4 82.8,213.4 82.8,201.8 93.2,201.8 93.2,199.8   82.8,199.8 82.8,188.1 98.1,188.1 98.1,186.1 82.8,186.1 82.8,174.5 93.2,174.5 93.2,172.5 82.9,172.5 82.9,160.8 98.1,160.8   98.1,158.8 82.9,158.8 82.9,147.1 93.2,147.1 93.2,145.1 82.9,145.1 82.9,133.5 98.1,133.5 98.1,131.5 82.9,131.5 82.9,119.8   93.2,119.8 93.2,117.8 82.9,117.8 82.9,106.1 98.1,106.1 98.1,104.1 83,104.1 83,92.5 93.2,92.5 93.2,90.5 83,90.5 83,78.8 "/>
		<polygon xmlns="http://www.w3.org/2000/svg" class="Measurements-left" fill="rgba(255,255,255,0.2)" points="46.8,49.5 46.8,49.5 46.8,49.5 46.8,51.5 46.8,51.5 46.8,53.6 46.8,61.7 46.8,61.7 46.8,62   36.8,62 36.8,64 46.8,64 46.7,74.8 31.3,74.8 31.3,76.8 46.7,76.8 46.7,88.5 36.2,88.5 36.2,90.5 46.7,90.5 46.7,102.1 31.3,102.1   31.3,104.1 46.7,104.1 46.7,115.8 36.2,115.8 36.2,117.8 46.7,117.8 46.7,129.5 31.3,129.5 31.3,131.5 46.7,131.5 46.6,143.1   36.2,143.1 36.2,145.1 46.6,145.1 46.6,156.8 31.3,156.8 31.3,158.8 46.6,158.8 46.6,170.5 36.2,170.5 36.2,172.5 46.6,172.5   46.6,184.1 31.3,184.1 31.3,186.1 46.6,186.1 46.6,197.8 36.2,197.8 36.2,199.8 46.6,199.8 46.5,211.4 31.3,211.4 31.3,213.4   46.5,213.4 46.5,225.1 36.2,225.1 36.2,227.1 46.5,227.1 46.5,238.8 31.3,238.8 31.3,240.8 46.5,240.8 46.5,252.4 36.2,252.4   36.2,254.4 46.5,254.4 46.5,266.1 31.3,266.1 31.3,268.1 46.5,268.1 46.4,279.8 36.2,279.8 36.2,281.8 46.4,281.8 46.4,293.4   31.3,293.4 31.3,295.4 46.4,295.4 46.4,307.1 36.2,307.1 36.2,309.1 46.4,309.1 46.4,319.6 46.4,322.8 48.4,322.8 48.8,49.5 "/>

		<g class="ProgressBarTank" stroke=<%= colors[2] %> fill=<%= colors[2] %>>
			<text xmlns="http://www.w3.org/2000/svg" class="MeasurementMax" dx="42" dy="55" text-anchor="end" stroke-width="0" style="font-family:'Helvetica'; font-size:16px;">100</text>
			<text xmlns="http://www.w3.org/2000/svg" class="MeasurementMin" dx="42" dy="327" text-anchor="end" stroke-width="0" style="font-family:'Helvetica'; font-size:16px;">0</text>

			<line xmlns="http://www.w3.org/2000/svg" class="ProgressBar" x1="65" y1="325" x2="65" y2="48" stroke-width="6" stroke=<%= colors[2] %>/>
			<line xmlns="http://www.w3.org/2000/svg" x1="65" y1="322" x2="65" y2="335" stroke-width="6"/>
			<circle xmlns="http://www.w3.org/2000/svg" cx="64" cy="352" r="21" stroke="black" stroke-width="0"/>			
		</g>
		<text xmlns="http://www.w3.org/2000/svg" class="thermometerValue" dx="64" dy="357" text-anchor="middle" fill=<%= textColor %> style="font-family:'Helvetica'; font-size:16px;">100</text>
	</svg>
	<% } %>

	<% if (style == 'thermometer-2') { %>
	<svg class="thermometer-2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="103.75px" height="200px" viewBox="0 0 207.5 400" xml:space="preserve">
		<path class="Background" fill=<%= colors[0] %> d="M169.8,278.3c-4.3-2-7.1-6.1-7.1-10.7V20.2c0-10.7-8.3-19.6-18.6-19.9C138.9,0.1,134,2,130.2,5.7  c-3.8,3.6-5.8,8.5-5.8,13.8v248.2c0,4.5-2.7,8.7-7,10.6c-24.4,11.1-39.4,36.5-37.2,63.3c2.6,31.2,28,56.1,59.3,58.1  c1.4,0.1,2.7,0.1,4.1,0.1c16.2,0,31.5-6,43.5-17.2c12.7-12,20-28.9,20-46.3C207.1,311.3,192.5,288.6,169.8,278.3z"/>
		<path class="ProgressBarBg" fill=<%= colors[1] %> d="M168.5,281c-5.5-2.5-9-7.8-9-13.6V19.9c0-8.9-6.9-16.4-15.4-16.6c-0.2,0-0.3,0-0.5,0  c-4.2,0-8.1,1.6-11.1,4.5c-3.1,3-4.8,7.1-4.8,11.4v248.2c0,5.8-3.5,11.2-8.9,13.6c-23.2,10.5-37.4,34.6-35.3,60  c2.4,29.6,26.6,53.2,56.2,55.1c16.9,1.1,32.9-4.7,45.1-16.2c12.3-11.5,19-27.1,19-43.9C203.9,312.3,190,290.8,168.5,281z"/>
		<g class="ProgressBarTank" stroke=<%= colors[2] %> fill=<%= colors[2] %>>
			<path xmlns="http://www.w3.org/2000/svg" d="M173.4,292.1l-80.9,64.3c1.5,4.1,3.6,7.9,6,11.5l84.8-67.5C180.4,297.3,177.1,294.5,173.4,292.1z   M166,288c-3.9-1.8-7-4.6-9.2-8l-67.5,53.7c-0.2,2.8-0.2,5.6,0,8.5c0.2,2.3,0.6,4.6,1.1,6.9l76.3-60.7  C166.5,288.3,166.3,288.1,166,288z M132.9,273.2l-0.5,0.4c-1.5,6.2-5.7,11.6-11.6,14.3c-14.8,6.8-25.5,20-29.6,35.3l61.9-50H132.9z   M196.3,324.4L118.9,386c4.4,2.3,9.2,3.9,14.2,4.9l64.8-51.5c0-0.6,0-1.2,0-1.8C198,333.1,197.4,328.7,196.3,324.4z M180.8,377.2  c8.1-7.6,13.5-17.2,15.9-27.8L143.2,392C157.3,392.1,170.5,386.9,180.8,377.2z M187.8,306l-84.9,67.6c2.9,3.2,6.1,6.1,9.6,8.6  l81.5-64.9C192.4,313.2,190.3,309.5,187.8,306z"/>
			<path xmlns="http://www.w3.org/2000/svg" d="M133.3,262.3l20-15.9v-16.2l-20,15.9V262.3z M133.3,211.8l20-15.9v-16.2l-20,15.9V211.8z   M152.8,257.1l-19.9,16.1h20.2l0.2-0.2c-0.3-1.4-0.5-2.7-0.5-4.2V257.1z M133.3,19.5v15l18.9-15H133.3z M133.3,186.2l20-15.9V154  l-20,15.9V186.2z M133.3,237.1l20-15.9v-16.2l-20,15.9V237.1z M133.3,85.1l20-15.9V52.9l-20,15.9V85.1z M133.3,43.5v16.2l20-15.9  V27.6L133.3,43.5z M133.3,135.6l20-15.9v-16.2l-20,15.9V135.6z M133.3,160.9l20-15.9v-16.2l-20,15.9V160.9z M133.3,110.3l20-15.9  V78.2l-20,15.9V110.3z"/>

		</g>
		<line class="ProgressBar" xmlns="http://www.w3.org/2000/svg" x1="143" y1="17" x2="143" y2="265" stroke-width="24" stroke=<%= colors[1] %>/>
		<polygon class="arrow" fill=<%= colors[0] %> points="115.4,95.9 105.5,103.3 95.6,110.7 95.6,95.9 95.6,81.2 105.5,88.5 "/>
		<text class="thermometerValue" dx="92" dy="107" text-anchor="end" fill=<%= textColor %> style="font-family:'Helvetica'; font-size:32px;">73%</text>
	</svg>
	<% } %>

	<% if (style == 'thermometer-3') { %>
	<svg class="thermometer-3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="300px" height="174px" viewBox="0 0 300 174" xml:space="preserve">
		<rect class="Background" x="88" y="88" fill=<%= colors[0] %> width="124" height="62"/>
		<g class="ProgressBarTank" stroke=<%= colors[2] %> fill=<%= colors[2] %>>
			<text xmlns="http://www.w3.org/2000/svg" class="MeasurementMax" dx="258" dy="171" text-anchor="middle" stroke-width="0" style="font-family:'Helvetica'; font-size:20px;">100</text>
			<text xmlns="http://www.w3.org/2000/svg" class="MeasurementMin" dx="42" dy="171" text-anchor="middle" stroke-width="0" style="font-family:'Helvetica'; font-size:20px;">0</text>
		</g>
		<circle xmlns="http://www.w3.org/2000/svg" class="ProgressBarBg" cx="150" cy="150" r="105" fill="rgba(0,0,0,0)" stroke-width="90" stroke=<%= colors[1] %> />
		<circle xmlns="http://www.w3.org/2000/svg" class="ProgressBar" cx="150" cy="150" r="105" fill="rgba(0,0,0,0)" stroke-width="90" stroke=<%= colors[2] %> />
		<text xmlns="http://www.w3.org/2000/svg" class="thermometerValue" dx="150" dy="140" text-anchor="middle" fill=<%= textColor %> style="font-family:'Helvetica'; font-size:28px;">100</text>
	</svg>
	<% } %>

</div></script>
<script type='text/template' id='radial'><div class="svg-wrapper svg-wrapper-radial svg-wrapper-<%= style %>">
	<% if (style == 'radial-1') { %>
	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" class="radial-1" x="0px" y="0px" width="200px" height="200px" viewBox="0 0 200 200" xml:space="preserve">
		<circle xmlns="http://www.w3.org/2000/svg" class="ProgressBarBg" cx="100" cy="100" r="92" fill="rgba(0,0,0,0)" stroke-width="16" stroke="#414042" />

		<circle xmlns="http://www.w3.org/2000/svg" class="ProgressBar" cx="100" cy="100" r="92" fill="rgba(0,0,0,0)" transform="matrix(0,-1,1,0,0,200)" stroke-width="16" stroke="#1DAFBA"/>

		<text xmlns="http://www.w3.org/2000/svg" class="radialValue" fill="<%= textColor %>"" dx="100" dy="122" text-anchor="middle" style="font-family:'Roboto', sans-serif; font-size:64px; fill: #414042;">100%</text>
	</svg>
	<% } %>

	<% if (style == 'radial-2') { %>
	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" class="radial-2" x="0px" y="0px" width="200px" height="200px" viewBox="0 0 200 200" xml:space="preserve">
		<circle class="Background" fill="#1DAFBA" cx="100" cy="100" r="80"/>

		<circle xmlns="http://www.w3.org/2000/svg" class="ProgressBarBg" cx="100" cy="100" r="95" fill="rgba(0,0,0,0)" stroke-width="10" stroke="#414042" />

		<circle xmlns="http://www.w3.org/2000/svg" class="ProgressBar" cx="100" cy="100" r="95" fill="rgba(0,0,0,0)" transform="matrix(0,-1,1,0,0,200)" stroke-width="10" stroke="#1DAFBA" />

		<text xmlns="http://www.w3.org/2000/svg" class="radialValue" fill="<%= textColor %>" dx="100" dy="115" text-anchor="middle" style="font-family:'Roboto', sans-serif; font-size:42px; fill: #fff;">100%</text>
	</svg>
	<% } %>

	<% if (style == 'radial-3') { %>
	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" class="radial-3" x="0px" y="0px" width="200px" height="200px" viewBox="0 0 200 200" xml:space="preserve">
		<circle xmlns="http://www.w3.org/2000/svg" class="ProgressBarBg" cx="100" cy="100" r="80" fill="rgba(0,0,0,0)" stroke-width="40" stroke="#414042" />

		<circle xmlns="http://www.w3.org/2000/svg" class="ProgressBar" cx="100" cy="100" r="80" fill="rgba(0,0,0,0)" transform="matrix(0,-1,1,0,0,200)" stroke-width="40" stroke="#1DAFBA" />

		<circle class="Background" fill="#1DAFBA" cx="100" cy="100" r="62"/>
		<text xmlns="http://www.w3.org/2000/svg" class="radialValue" fill="<%= textColor %>" dx="100" dy="115" text-anchor="middle" style="font-family:'Roboto', sans-serif; font-size:42px; fill: #fff;">100%</text>
	</svg>
	<% } %>

	<% if (style == 'radial-4') { %>
	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" class="radial-4" x="0px" y="0px" width="200px" height="200px" viewBox="0 0 200 200" xml:space="preserve">
		<circle xmlns="http://www.w3.org/2000/svg" class="ProgressBarBg" cx="100" cy="100" r="80" fill="rgba(0,0,0,0)" stroke-width="40" stroke="#414042" />

		<circle xmlns="http://www.w3.org/2000/svg" class="ProgressBar" cx="100" cy="100" r="80" fill="rgba(0,0,0,0)" transform="matrix(0,-1,1,0,0,200)" stroke-width="40" stroke="#1DAFBA" />

		<circle class="Background" fill="#1DAFBA" cx="100" cy="100" r="62"/>
		<text xmlns="http://www.w3.org/2000/svg" class="radialValue" fill="<%= textColor %>" dx="130" dy="108" text-anchor="middle" style="font-family:'Roboto', sans-serif; font-size:19px; fill: #fff;">100%</text>
		<line xmlns="http://www.w3.org/2000/svg" class="divider" x1="99" y1="88" x2="99" y2="112" stroke="#808285" stroke-width="2"/>
		<text xmlns="http://www.w3.org/2000/svg" class="radialValueRest" dx="70" dy="108" text-anchor="middle" style="font-family:'Roboto', sans-serif; font-size:19px; fill: #fff;">100%</text>
	</svg>
	<% } %>

	<% if (style == 'radial-5') { %>
	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" class="radial-5" x="0px" y="0px" width="200px" height="200px" viewBox="0 0 200 200" xml:space="preserve">
		<defs>
			<linearGradient class="path" x1="0%" y1="0%" x2="0%" y2="100%">
				<stop class="step-1" offset="0%" style="stop-color:#ccc;stop-opacity:1" />
				<stop class="step-2" offset="65%" style="stop-color:#ccc;stop-opacity:1" />
				<stop class="step-3" offset="65%" style="stop-color:#00b2da;stop-opacity:1" />
				<stop class="step-4" offset="100%" style="stop-color:#00b2da;stop-opacity:1" />
			</linearGradient>
		</defs>
		<circle class="ProgressBarBg" fill="url(#grad1)" cx="100" cy="100" r="85"/>

		<circle xmlns="http://www.w3.org/2000/svg" class="Background" cx="100" cy="100" r="86" fill="rgba(0,0,0,0)" stroke-width="24" stroke="#FFF" />

		<circle xmlns="http://www.w3.org/2000/svg" class="ProgressBar" cx="100" cy="100" r="86" fill="rgba(0,0,0,0)" transform="matrix(0,-1,1,0,0,200)" stroke-width="6" stroke="#1DAFBA"/>
		<text xmlns="http://www.w3.org/2000/svg" class="radialValue" fill="<%= textColor %>" dx="100" dy="120" text-anchor="middle" style="font-family:'Roboto', sans-serif; font-size:54px; fill: #fff;">100%</text>
	</svg>
	<% } %>

	<% if (style == 'radial-6') { %>
	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" class="radial-6" x="0px" y="0px" width="240px" height="300px" viewBox="0 0 240 300" xml:space="preserve">
		<circle class="ProgressBarBg" cx="137.4" cy="197.9" r="51.05" fill="rgba(0,0,0,0)" stroke="#1DB0D6" stroke-width="102.1"/>
		<circle class="ProgressBar" cx="137.4" cy="197.9" r="51.05" fill="rgba(0,0,0,0)" transform="matrix(0,-1,1,0,-60.5,335.3)" stroke="#1DB0D6" stroke-width="102.1"/>
		<circle class="Center" cx="137.4" cy="197.9" r="5.4" fill="<%= textColor %>"/>
		<rect class="Line" x="135.7" y="50.5" fill=<%= textColor %> width="3.5" height="147.7"/>
		<polygon class="Background" fill="#B7B7B7" points="0,0 9.6,11.5 19.1,23 9.6,34.5 0,45.9 139.2,45.9 139.2,0"/>
		<polygon class="BackgroundShadow" fill="#ACABAB" points="107,45.9 139.2,45.9 139.2,0"/>
		<text xmlns="http://www.w3.org/2000/svg" class="radialValue" fill="<%= textColor %>" dx="70" dy="36" text-anchor="middle" style="font-family:'Roboto', sans-serif; font-weight:300; font-size:34px; fill: #a1a1a1;">100%</text>
	</svg>
	<% } %>

</div></script>
<script type='text/template' id='progressbar'><div class="svg-wrapper svg-wrapper-progressbar svg-wrapper-<%= style %>">
	<% if (style == 'progressbar-1') { %>
	<svg class="progressbar-1" xmlns="http://www.w3.org/2000/svg" width="300px" height="43.2px" viewbox="0 0 300 43.2" >
		<line xmlns="http://www.w3.org/2000/svg" class="ProgressBarBg" stroke-linecap="round" x1="11" y1="21.6" x2="289" y2="21.6" stroke="#414042" stroke-width="22"/>
		<line xmlns="http://www.w3.org/2000/svg" class="ProgressBar" stroke-linecap="round" x1="11" y1="21.6" x2="289" y2="21.6" stroke="#1DAFBA" stroke-width="22"/>
		<circle xmlns="http://www.w3.org/2000/svg" class="Background" style="fill:#1DAFBA; stroke:#414042; stroke-width: 2px;" cx="20.5" cy="21.6" r="20"/>
		<text xmlns="http://www.w3.org/2000/svg" class="progressbarValue" dx="20.5" dy="26.5" fill=<%= textColor %> text-anchor="middle" style="font-family:'Roboto', sans-serif; font-weight:200; font-size:13px;">100%</text>
	</svg>
	<% } %>

	<% if (style == 'progressbar-1v') { %>
	<svg class="progressbar-1v" xmlns="http://www.w3.org/2000/svg" height="300px" width="43.2px" viewbox="0 0 43.2 300" >
		<line xmlns="http://www.w3.org/2000/svg" class="ProgressBarBg" stroke-linecap="round" y2="11" x2="21.6" y1="289" x1="21.6" stroke="#414042" stroke-width="22"/>
		<line xmlns="http://www.w3.org/2000/svg" class="ProgressBar" stroke-linecap="round" y2="11" x2="21.6" y1="289" x1="21.6" stroke="#1DAFBA" stroke-width="22"/>
		<circle xmlns="http://www.w3.org/2000/svg" class="Background" style="fill:#1DAFBA; stroke:#414042; stroke-width: 2px;" cy="20.5" cx="21.6" r="20"/>
		<text xmlns="http://www.w3.org/2000/svg" class="progressbarValue" dy="24.7" dx="21.6" fill=<%= textColor %> text-anchor="middle" style="font-family:'Roboto', sans-serif; font-weight:200; font-size:13px;">100%</text>
	</svg>
	<% } %>

	<% if (style == 'progressbar-2') { %>
	<svg class="progressbar-2" xmlns="http://www.w3.org/2000/svg" width="300px" height="43.2px" viewbox="0 0 300 43.2" >
		<defs>
			<linearGradient class="path" x1="66" y1="0" x2="288" y2="0" gradientUnits="userSpaceOnUse">
				<stop class="step-1" offset="0%" style="stop-color:#ccc;stop-opacity:1" />
				<stop class="step-2" offset="50%" style="stop-color:#ccc;stop-opacity:1" />
				<stop class="step-3" offset="50%" style="stop-color:#00b2da;stop-opacity:1" />
				<stop class="step-4" offset="100%" style="stop-color:#00b2da;stop-opacity:1" />
			</linearGradient>
		</defs>
		<line xmlns="http://www.w3.org/2000/svg" class="Background" stroke-linecap="round" x1="21.6" y1="21.6" x2="278.4" y2="21.6" stroke="#414042" stroke-width="43.2"/>
		<line xmlns="http://www.w3.org/2000/svg" class="ProgressBarBg" stroke-linecap="round" x1="75" y1="21.6" x2="278.4" y2="21.6" stroke="#FFFFFF" stroke-width="30"/>
		<line xmlns="http://www.w3.org/2000/svg" class="ProgressBar" stroke-linecap="round" x1="75" y1="21.6" x2="278.4" y2="21.6" stroke="url(#grad1)" stroke-width="19"/>
		<text xmlns="http://www.w3.org/2000/svg" class="progressbarValue" dx="32" dy="28" fill=<%= textColor %> text-anchor="middle" style="font-family:'Roboto', sans-serif; font-weight:200; font-size:18px;">100%</text>
	</svg>
	<% } %>

	<% if (style == 'progressbar-2v') { %>
	<svg class="progressbar-2v" xmlns="http://www.w3.org/2000/svg" height="300px" width="43.2px" viewbox="0 0 43.2 300" >
		<defs>
			<linearGradient class="path" y1="254" x2="0" y2="12" x1="0" gradientUnits="userSpaceOnUse">
				<stop class="step-1" offset="0%" style="stop-color:#ccc;stop-opacity:1" />
				<stop class="step-2" offset="50%" style="stop-color:#ccc;stop-opacity:1" />
				<stop class="step-3" offset="50%" style="stop-color:#00b2da;stop-opacity:1" />
				<stop class="step-4" offset="100%" style="stop-color:#00b2da;stop-opacity:1" />
			</linearGradient>
		</defs>
		<line xmlns="http://www.w3.org/2000/svg" class="Background" stroke-linecap="round" y1="21.6" x1="21.6" y2="278.4" x2="21.6" stroke="#414042" stroke-width="43.2"/>
		<line xmlns="http://www.w3.org/2000/svg" class="ProgressBarBg" stroke-linecap="round" y1="245" x1="21.6" y2="21.6" x2="21.6" stroke="#FFFFFF" stroke-width="30"/>
		<line xmlns="http://www.w3.org/2000/svg" class="ProgressBar" stroke-linecap="round" y1="245" x1="21.6" y2="21.6" x2="21.6" stroke="url(#grad1)" stroke-width="19"/>
		<text xmlns="http://www.w3.org/2000/svg" class="progressbarValue" dy="282" dx="21.6" fill=<%= textColor %> text-anchor="middle" style="font-family:'Roboto', sans-serif; font-weight:200; font-size:15px;">100%</text>
	</svg>
	<% } %>

	<% if (style == 'progressbar-3') { %>
	<svg class="progressbar-3" xmlns="http://www.w3.org/2000/svg" width="210px" height="33px" viewbox="0 0 210 33" >
		<defs>
			<linearGradient class="path" x1="5" y1="0" x2="160" y2="0" gradientUnits="userSpaceOnUse">
				<stop class="step-1" offset="0%" style="stop-color:#ccc;stop-opacity:1" />
				<stop class="step-2" offset="50%" style="stop-color:#ccc;stop-opacity:1" />
				<stop class="step-3" offset="50%" style="stop-color:#00b2da;stop-opacity:1" />
				<stop class="step-4" offset="100%" style="stop-color:#00b2da;stop-opacity:1" />
			</linearGradient>
		</defs>
		<rect xmlns="http://www.w3.org/2000/svg" class="ProgressBarBg" width="163" height="29" x="1" y="1" style="fill:#fff;" />

		<path xmlns="http://www.w3.org/2000/svg" class="Background" style="fill:#808285;" d="M165.5,5.5V0H0v31.4h165.5v-5.5h9.5V5.5H165.5z M162.6,28.4H2.8V2.9h159.8V28.4z"/>

		<path xmlns="http://www.w3.org/2000/svg" class="ProgressBar" fill="#61A29E" d="M5.1,25.9h11.8V5.5H5.1V25.9z M21.1,25.9h11.8V5.5H21.1V25.9z M52.9,25.9h11.8  V5.5H52.9V25.9z M37,25.9h11.8V5.5H37V25.9z M68.9,5.5v20.4h11.8V5.5H68.9 M84.8,25.9h11.8V5.5H84.8V25.9z M100.7,25.9h11.8V5.5h-11.8V25.9z M148.5,5.5v20.4  h11.8V5.5H148.5z M116.7,25.9h11.8V5.5h-11.8V25.9z M132.6,25.9h11.8V5.5h-11.8V25.9z"/>

		<text xmlns="http://www.w3.org/2000/svg" class="progressbarValue" dx="193" dy="19.7" fill=<%= textColor %> text-anchor="middle" style="font-family:'Roboto', sans-serif; font-weight:300; font-size:12px;">100%</text>
	</svg>
	<% } %>

	<% if (style == 'progressbar-3v') { %>
	<svg class="progressbar-3v" xmlns="http://www.w3.org/2000/svg" height="210px" width="33px" viewbox="0 0 33 210" >
		<defs>
			<linearGradient class="path" x1="5" y1="0" x2="160" y2="0" gradientUnits="userSpaceOnUse">
				<stop class="step-1" offset="0%" style="stop-color:#ccc;stop-opacity:1" />
				<stop class="step-2" offset="50%" style="stop-color:#ccc;stop-opacity:1" />
				<stop class="step-3" offset="50%" style="stop-color:#00b2da;stop-opacity:1" />
				<stop class="step-4" offset="100%" style="stop-color:#00b2da;stop-opacity:1" />
			</linearGradient>
		</defs>
		<rect xmlns="http://www.w3.org/2000/svg" class="ProgressBarBg" height="163" width="29" y="47" x="2" style="fill:#fff;" />

		<path xmlns="http://www.w3.org/2000/svg" class="Background"  transform="rotate(-90) translate(-210, 0)" style="fill:#808285;" d="M165.5,5.5V0H0v31.4h165.5v-5.5h9.5V5.5H165.5z M162.6,28.4H2.8V2.9h159.8V28.4z"/>

		<path xmlns="http://www.w3.org/2000/svg" class="ProgressBar"  transform="rotate(-90) translate(-210, 0)"  fill="#61A29E" d="M5.1,25.9h11.8V5.5H5.1V25.9z M21.1,25.9h11.8V5.5H21.1V25.9z M52.9,25.9h11.8  V5.5H52.9V25.9z M37,25.9h11.8V5.5H37V25.9z M68.9,5.5v20.4h11.8V5.5H68.9 M84.8,25.9h11.8V5.5H84.8V25.9z M100.7,25.9h11.8V5.5h-11.8V25.9z M148.5,5.5v20.4  h11.8V5.5H148.5z M116.7,25.9h11.8V5.5h-11.8V25.9z M132.6,25.9h11.8V5.5h-11.8V25.9z"/>

		<text xmlns="http://www.w3.org/2000/svg" class="progressbarValue" dy="29" dx="16.5" fill=<%= textColor %> text-anchor="middle" style="font-family:'Roboto', sans-serif; font-weight:300; font-size:12px;">100%</text>
	</svg>
	<% } %>

	<% if (style == 'progressbar-4') { %>
	<svg class="progressbar-4" xmlns="http://www.w3.org/2000/svg" width="300px" height="44px" viewbox="0 0 300 44" >
		<defs>
			<linearGradient class="path" x1="8" y1="0" x2="292" y2="0" gradientUnits="userSpaceOnUse">
				<stop class="step-1" offset="0%" style="stop-color:#ccc;stop-opacity:1" />
				<stop class="step-2" offset="50%" style="stop-color:#ccc;stop-opacity:1" />
				<stop class="step-3" offset="50%" style="stop-color:#00b2da;stop-opacity:1" />
				<stop class="step-4" offset="100%" style="stop-color:#00b2da;stop-opacity:1" />
			</linearGradient>
		</defs>
		<line xmlns="http://www.w3.org/2000/svg" class="Background" stroke-linecap="round" x1="14" y1="30" x2="286" y2="30" stroke="#414042" stroke-width="28"/>
		<line xmlns="http://www.w3.org/2000/svg" class="ProgressBarBg" stroke-linecap="round" x1="14" y1="30" x2="286" y2="30" stroke="#ffffff" stroke-width="22"/>
		<line xmlns="http://www.w3.org/2000/svg" class="ProgressBar" stroke-linecap="round" x1="14" y1="30" x2="286" y2="30" stroke="#1DAFBA" stroke-width="12"/>
		<polygon xmlns="http://www.w3.org/2000/svg" class="arrow" style="fill:#414042;" points="9,12.6 1.5,0.6 17.5,0.6"/>
		<text xmlns="http://www.w3.org/2000/svg" class="progressbarValue" dx="37" dy="12.5" fill=<%= textColor %> text-anchor="middle" style="font-family:'Roboto', sans-serif; font-weight:200; font-size:18px;">100%</text>
	</svg>
	<% } %>

	<% if (style == 'progressbar-4v') { %>
	<svg class="progressbar-4v" xmlns="http://www.w3.org/2000/svg" height="300px" width="88px" viewbox="0 0 88 300" >
		<defs>
			<linearGradient class="path" y2="8" x2="0" y1="292" x1="0" gradientUnits="userSpaceOnUse">
				<stop class="step-1" offset="0%" style="stop-color:#ccc;stop-opacity:1" />
				<stop class="step-2" offset="50%" style="stop-color:#ccc;stop-opacity:1" />
				<stop class="step-3" offset="50%" style="stop-color:#00b2da;stop-opacity:1" />
				<stop class="step-4" offset="100%" style="stop-color:#00b2da;stop-opacity:1" />
			</linearGradient>
		</defs>
		<line xmlns="http://www.w3.org/2000/svg" class="Background" stroke-linecap="round" y1="14" x1="74" y2="286" x2="74" stroke="#414042" stroke-width="28"/>
		<line xmlns="http://www.w3.org/2000/svg" class="ProgressBarBg" stroke-linecap="round" y1="14" x1="74" y2="286" x2="74" stroke="#ffffff" stroke-width="22"/>
		<line xmlns="http://www.w3.org/2000/svg" class="ProgressBar" stroke-linecap="round" y1="14" x1="74" y2="286" x2="74" stroke="#1DAFBA" stroke-width="12"/>
		<polygon xmlns="http://www.w3.org/2000/svg" class="arrow" style="fill:#414042;" points="56.6,9 44.6,1.5 44.6,17.5"/>
		<text xmlns="http://www.w3.org/2000/svg" class="progressbarValue" dy="16" dx="21.5" fill=<%= textColor %> text-anchor="middle" style="font-family:'Roboto', sans-serif; font-weight:300; font-size:18px;">100%</text>
	</svg>
	<% } %>

	<% if (style == 'progressbar-5') { %>
	<svg class="progressbar-5" xmlns="http://www.w3.org/2000/svg" width="65px" height="305px" viewbox="0 0 65 305" >
		<defs>
			<linearGradient class="path" x1="0" y1="300" x2="0" y2="30" gradientUnits="userSpaceOnUse">
				<stop class="step-1" offset="0%" style="stop-color:#ccc;stop-opacity:1" />
				<stop class="step-2" offset="50%" style="stop-color:#ccc;stop-opacity:1" />
				<stop class="step-3" offset="50%" style="stop-color:#00b2da;stop-opacity:1" />
				<stop class="step-4" offset="100%" style="stop-color:#00b2da;stop-opacity:1" />
			</linearGradient>
		</defs>
		<path xmlns="http://www.w3.org/2000/svg" class="ProgressBar" fill="#61A29E" stroke-width="2" stroke-location="inside" d="M60.5,279.5H4.4c-2.4,0-4.4,2-4.4,4.4v11.7c0,2.4,2,4.4,4.4,4.4h56.1  c2.4,0,4.4-2,4.4-4.4v-11.7C65,281.4,63,279.5,60.5,279.5z M60.5,251.6H4.4c-2.4,0-4.4,2-4.4,4.4v11.7c0,2.4,2,4.4,4.4,4.4h56.1  c2.4,0,4.4-2,4.4-4.4v-11.7C65,253.6,63,251.6,60.5,251.6z M60.5,223.8H4.4c-2.4,0-4.4,2-4.4,4.4v11.7c0,2.4,2,4.4,4.4,4.4h56.1  c2.4,0,4.4-2,4.4-4.4v-11.7C65,225.8,63,223.8,60.5,223.8z M60.5,196H4.4C2,196,0,198,0,200.4v11.7c0,2.4,2,4.4,4.4,4.4h56.1  c2.4,0,4.4-2,4.4-4.4v-11.7C65,198,63,196,60.5,196z M60.5,168.2H4.4c-2.4,0-4.4,2-4.4,4.4v11.7c0,2.4,2,4.4,4.4,4.4h56.1  c2.4,0,4.4-2,4.4-4.4v-11.7C65,170.2,63,168.2,60.5,168.2z M60.5,84.7H4.4c-2.4,0-4.4,2-4.4,4.4v11.7c0,2.4,2,4.4,4.4,4.4h56.1  c2.4,0,4.4-2,4.4-4.4V89.1C65,86.7,63,84.7,60.5,84.7z M60.5,140.4H4.4c-2.4,0-4.4,2-4.4,4.4v11.7c0,2.4,2,4.4,4.4,4.4h56.1  c2.4,0,4.4-2,4.4-4.4v-11.7C65,142.3,63,140.4,60.5,140.4z M60.5,112.5H4.4c-2.4,0-4.4,2-4.4,4.4v11.7c0,2.4,2,4.4,4.4,4.4h56.1  c2.4,0,4.4-2,4.4-4.4V117C65,114.5,63,112.5,60.5,112.5z M60.5,29.1H4.4c-2.4,0-4.4,2-4.4,4.4v11.7c0,2.4,2,4.4,4.4,4.4h56.1  c2.4,0,4.4-2,4.4-4.4V33.5C65,31.1,63,29.1,60.5,29.1z M60.5,56.9H4.4c-2.4,0-4.4,2-4.4,4.4V73c0,2.4,2,4.4,4.4,4.4h56.1  c2.4,0,4.4-2,4.4-4.4V61.3C65,58.9,63,56.9,60.5,56.9z"/>
		<text xmlns="http://www.w3.org/2000/svg" class="progressbarValue" dx="32.5" dy="22.3" fill=<%= textColor %> text-anchor="middle" style="font-family:'Roboto', sans-serif; font-weight:300; font-size:22px;">100%</text>
	</svg>
	<% } %>

	<% if (style == 'progressbar-6') { %>
	<svg class="progressbar-6" xmlns="http://www.w3.org/2000/svg" width="595px" height="70.3px" viewbox="0 0 595 70.3" >
		<rect class="ProgressBarPart1" y="36.3" style="fill:#1DAFBA;" width="127" height="34"/>
		<text xmlns="http://www.w3.org/2000/svg" class="progressbarText" dx="60" dy="62" text-anchor="middle" fill=<%= textColor %> style="font-family:'Roboto', sans-serif; font-size:22px;"><%= text %></text>
		<polygon class="ProgressBarPart2" style="fill:#1B8E8E;" points="103,14.9 103,36.3 127,36.3 "/>
		<polygon class="ProgressBarPart3" style="fill:#1DAFBA;" points="103.5,14.6 127.8,36.1 127.8,48.7 153.4,48.7 153.4,14.6  "/>
		<line xmlns="http://www.w3.org/2000/svg" class="ProgressBar" x1="152" y1="31.65" x2="474" y2="31.65" stroke="#1DAFBA" stroke-width="33.7"/>
		<polygon class="arrow" style="fill:#1DAFBA;" points="486.7,16.2 473.2,0.8 473.2,60.8 473.2,60.8 473.2,62.4 486.7,47 500.1,31.6  "/>
		<text xmlns="http://www.w3.org/2000/svg" class="progressbarValue" dx="550" dy="45" text-anchor="middle" fill="#FFFFFF" style="font-family:'Roboto', sans-serif; font-weight:200; font-size:35px;">100%</text>
	</svg>
	<% } %>

	<% if (style == 'progressbar-7') { %>
	<svg class="progressbar-7" xmlns="http://www.w3.org/2000/svg" width="300px" height="18px" viewbox="0 0 300 18" >
		<defs>
			<linearGradient class="path" x1="52" y1="-13" x2="285" y2="52" gradientUnits="userSpaceOnUse">
				<stop class="step-1" offset="0%" style="stop-color:#ccc;stop-opacity:1" />
				<stop class="step-2" offset="50%" style="stop-color:#ccc;stop-opacity:1" />
				<stop class="step-3" offset="50%" style="stop-color:#00b2da;stop-opacity:1" />
				<stop class="step-4" offset="100%" style="stop-color:#00b2da;stop-opacity:1" />
			</linearGradient>
		</defs>
		<path xmlns="http://www.w3.org/2000/svg" class="ProgressBar" fill="#1DAFBA" d="M130.3,0l-5.3,18h5.8L136,0H130.3z M137.1,0l-5.3,18h5.8l5.3-18H137.1z M116.6,0  l-5.3,18h5.8l5.3-18H116.6z M164.3,0L159,18h5.8l5.3-18H164.3z M157.5,0l-5.3,18h5.8l5.3-18H157.5z M109.8,0l-5.3,18h5.8l5.3-18  H109.8z M150.7,0l-5.3,18h5.8l5.3-18H150.7z M143.9,0l-5.3,18h5.8l5.3-18H143.9z M123.4,0l-5.3,18h5.8l5.3-18H123.4z M55.3,0L50,18  h5.8L61,0H55.3z M68.9,0l-5.3,18h5.8l5.3-18H68.9z M62.1,0l-5.3,18h5.8l5.3-18H62.1z M48.5,0l-5.3,18h5.8l5.3-18H48.5z M89.4,0  L84,18h5.8l5.3-18H89.4z M96.2,0l-5.3,18h5.8l5.3-18H96.2z M103,0l-5.3,18h5.8l5.3-18H103z M75.7,0l-5.3,18h5.8l5.3-18H75.7z   M82.6,0l-5.3,18H83l5.3-18H82.6z M198.4,0l-5.3,18h5.8l5.3-18H198.4z M253,0l-5.3,18h5.8l5.3-18H253z M239.3,0L234,18h5.8l5.3-18  H239.3z M259.8,0l-5.3,18h5.8l5.3-18H259.8z M246.1,0l-5.3,18h5.8l5.3-18H246.1z M266.6,0l-5.3,18h5.8l5.3-18H266.6z M287,0l-5.3,18  h5.8l5.3-18H287z M293.9,0l-5.3,18h5.8l5.3-18H293.9z M280.2,0l-5.3,18h5.8L286,0H280.2z M273.4,0l-5.3,18h5.8l5.3-18H273.4z   M218.9,0l-5.3,18h5.8l5.3-18H218.9z M184.8,0l-5.3,18h5.8l5.3-18H184.8z M191.6,0l-5.3,18h5.8l5.3-18H191.6z M205.2,0l-5.3,18h5.8  L211,0H205.2z M178,0l-5.3,18h5.8l5.3-18H178z M225.7,0l-5.3,18h5.8l5.3-18H225.7z M232.5,0l-5.3,18h5.8l5.3-18H232.5z M212.1,0  l-5.3,18h5.8l5.3-18H212.1z M171.2,0l-5.3,18h5.8l5.3-18H171.2z"/>
		<text xmlns="http://www.w3.org/2000/svg" class="progressbarValue" dx="23" dy="15" fill=<%= textColor %> text-anchor="middle" style="font-family:'Roboto', sans-serif; font-weight:300; font-size:14px;">100%</text>
	</svg>
	<% } %>

	<% if (style == 'progressbar-7v') { %>
	<svg class="progressbar-7v" xmlns="http://www.w3.org/2000/svg" width="32px" height="280px" viewbox="0 0 32 280" >
		<defs>
			<linearGradient class="path" x1="52" y1="-13" x2="285" y2="52" gradientUnits="userSpaceOnUse">
				<stop class="step-1" offset="0%" style="stop-color:#ccc;stop-opacity:1" />
				<stop class="step-2" offset="50%" style="stop-color:#ccc;stop-opacity:1" />
				<stop class="step-3" offset="50%" style="stop-color:#00b2da;stop-opacity:1" />
				<stop class="step-4" offset="100%" style="stop-color:#00b2da;stop-opacity:1" />
			</linearGradient>
		</defs>
		<path xmlns="http://www.w3.org/2000/svg" transform="rotate(-90) translate(-300, 8)" class="ProgressBar" fill="#1DAFBA" d="M130.3,0l-5.3,18h5.8L136,0H130.3z M137.1,0l-5.3,18h5.8l5.3-18H137.1z M116.6,0  l-5.3,18h5.8l5.3-18H116.6z M164.3,0L159,18h5.8l5.3-18H164.3z M157.5,0l-5.3,18h5.8l5.3-18H157.5z M109.8,0l-5.3,18h5.8l5.3-18  H109.8z M150.7,0l-5.3,18h5.8l5.3-18H150.7z M143.9,0l-5.3,18h5.8l5.3-18H143.9z M123.4,0l-5.3,18h5.8l5.3-18H123.4z M55.3,0L50,18  h5.8L61,0H55.3z M68.9,0l-5.3,18h5.8l5.3-18H68.9z M62.1,0l-5.3,18h5.8l5.3-18H62.1z M48.5,0l-5.3,18h5.8l5.3-18H48.5z M89.4,0  L84,18h5.8l5.3-18H89.4z M96.2,0l-5.3,18h5.8l5.3-18H96.2z M103,0l-5.3,18h5.8l5.3-18H103z M75.7,0l-5.3,18h5.8l5.3-18H75.7z   M82.6,0l-5.3,18H83l5.3-18H82.6z M198.4,0l-5.3,18h5.8l5.3-18H198.4z M253,0l-5.3,18h5.8l5.3-18H253z M239.3,0L234,18h5.8l5.3-18  H239.3z M259.8,0l-5.3,18h5.8l5.3-18H259.8z M246.1,0l-5.3,18h5.8l5.3-18H246.1z M266.6,0l-5.3,18h5.8l5.3-18H266.6z M287,0l-5.3,18  h5.8l5.3-18H287z M293.9,0l-5.3,18h5.8l5.3-18H293.9z M280.2,0l-5.3,18h5.8L286,0H280.2z M273.4,0l-5.3,18h5.8l5.3-18H273.4z   M218.9,0l-5.3,18h5.8l5.3-18H218.9z M184.8,0l-5.3,18h5.8l5.3-18H184.8z M191.6,0l-5.3,18h5.8l5.3-18H191.6z M205.2,0l-5.3,18h5.8  L211,0H205.2z M178,0l-5.3,18h5.8l5.3-18H178z M225.7,0l-5.3,18h5.8l5.3-18H225.7z M232.5,0l-5.3,18h5.8l5.3-18H232.5z M212.1,0  l-5.3,18h5.8l5.3-18H212.1z M171.2,0l-5.3,18h5.8l5.3-18H171.2z"/>
		<text xmlns="http://www.w3.org/2000/svg" class="progressbarValue" dx="16" dy="276" fill=<%= textColor %> text-anchor="middle" style="font-family:'Roboto', sans-serif; font-weight:300; font-size:12px;">100%</text>
	</svg>
	<% } %>

	<% if (style == 'progressbar-8') { %>
	<svg class="progressbar-8" xmlns="http://www.w3.org/2000/svg" width="65px" height="300px" viewbox="0 0 65 300" >
		<defs>
			<linearGradient class="path" x1="52" y1="-13" x2="285" y2="52" gradientUnits="userSpaceOnUse">
				<stop class="step-1" offset="0%" style="stop-color:#ccc;stop-opacity:1" />
				<stop class="step-2" offset="50%" style="stop-color:#ccc;stop-opacity:1" />
				<stop class="step-3" offset="50%" style="stop-color:#00b2da;stop-opacity:1" />
				<stop class="step-4" offset="100%" style="stop-color:#00b2da;stop-opacity:1" />
			</linearGradient>
		</defs>

		<line xmlns="http://www.w3.org/2000/svg" class="ProgressBarBg" x1="32.5" y1="286.2" x2="32.5" y2="13.8" stroke="#E6E7E8" stroke-width="65"/>
		<ellipse xmlns="http://www.w3.org/2000/svg" class="ProgressBarBgCap" style="fill:#E6E7E8;" cx="32.5" cy="13.8" rx="32.5" ry="13.8"/>
 		<ellipse xmlns="http://www.w3.org/2000/svg" class="ProgressBarBot" style="fill:#1DAFBA;" cx="32.5" cy="286.2" rx="32.5" ry="13.8"/>
		<line xmlns ="http://www.w3.org/2000/svg" class="ProgressBar" x1="32.5" y1="286.2" x2="32.5" y2="13.8" stroke="#1DAFBA" stroke-width="65"/>
		<ellipse xmlns="http://www.w3.org/2000/svg" class="ProgressBarCap" style="fill:#A3CCCC;" cx="32.5" cy="13.8" rx="32.5" ry="13.8"/>
		<ellipse xmlns="http://www.w3.org/2000/svg" class="ProgressBarBgCap" style="fill:rgba(144,144,144,0.4);" cx="32.5" cy="13.8" rx="32.5" ry="13.8"/>
		<text xmlns="http://www.w3.org/2000/svg" class="progressbarValue" dx="32.5" dy="285" fill=<%= textColor %> text-anchor="middle" style="font-family:'Roboto', sans-serif; font-weight:200; font-size:22px;">100%</text>
	</svg>
	<% } %>

	<% if (style == 'progressbar-9') { %>
	<svg class="progressbar-9" xmlns="http://www.w3.org/2000/svg" width="183.3px" height="341.3px" viewbox="0 0 183.3 341.3" >
		<defs>
			<linearGradient class="path-top" x1="91.65" y1="180" x2="91.65" y2="70" gradientUnits="userSpaceOnUse">
				<stop class="step-1" offset="0%" style="stop-color:#ccc;stop-opacity:1" />
				<stop class="step-2" offset="50%" style="stop-color:#ccc;stop-opacity:1" />
				<stop class="step-3" offset="50%" style="stop-color:#00b2da;stop-opacity:1" />
				<stop class="step-4" offset="100%" style="stop-color:#00b2da;stop-opacity:1" />
			</linearGradient>
			<linearGradient class="path-bot" x1="91.65" y1="313" x2="91.65" y2="202" gradientUnits="userSpaceOnUse">
				<stop class="step-1" offset="0%" style="stop-color:#ccc;stop-opacity:1" />
				<stop class="step-2" offset="50%" style="stop-color:#ccc;stop-opacity:1" />
				<stop class="step-3" offset="50%" style="stop-color:#00b2da;stop-opacity:1" />
				<stop class="step-4" offset="100%" style="stop-color:#00b2da;stop-opacity:1" />
			</linearGradient>
		</defs>

		<path class="ProgressBarBg" fill="#FFFFFF" stroke="#414042" stroke-width="3px" d="M144.3,114c0-0.5,0-1,0-1.4c0-27.1-23.6-49.2-52.7-49.2S39,85.4,39,112.6c0,0.5,0,1,0,1.4  l0.1,1.8H39v10.3c0,8.3,3.4,16.3,9.5,22.3l43.1,42.8l-43.1,42.8c-6.1,6.1-9.5,14-9.5,22.3v10.3H39l0,1.8c0,0.5,0,1,0,1.4  c0,27.1,23.6,49.2,52.7,49.2s52.7-22.1,52.7-49.2c0-0.5,0-1,0-1.4l-0.1-1.8h0.1v-10.3c0-8.3-3.4-16.3-9.5-22.3l-43.1-42.8l43.1-42.8  c6.1-6.1,9.5-14,9.5-22.3v-10.3h-0.1L144.3,114z"/>
		<path class="Background" fill="#414042" d="M183.3,54.5V41.3H0v13.2h16.6v128.3c-1.8,1.3-3,3.5-3,5.9s1.2,4.5,3,5.9v133.5H0v13.2  h183.3v-13.2h-16.8V197.2c1.8-1.3,3-3.5,3-5.9c0-2.4-1.2-4.5-3-5.9V54.5H183.3z M157.9,185.4c-1.8,1.3-3,3.5-3,5.9  c0,2.4,1.2,4.5,3,5.9v130.9H25.2V194.6c1.8-1.3,3-3.5,3-5.9s-1.2-4.5-3-5.9V54.5h132.7V185.4z"/>
		<path class="ProgressBarTop" fill="#1DAFBA" d="M130.6,144.4c5-4.9,7.7-11.4,7.7-18.1v-11.7l0-0.8l0-0.3c0-0.3,0-0.5,0-0.8  c0-23.8-20.9-43.2-46.7-43.2S45,88.9,45,112.7l0,0.2l0,13.4c0,6.7,2.7,13.1,7.7,18.1l39,38.8L130.6,144.4z"/>
		<path class="ProgressBarBot" fill="#1DAFBA" d="M52.7,238.5c-5,4.9-7.7,11.4-7.7,18.1v11.7l0,0.8l0,0.3c0,0.3,0,0.5,0,0.8  c0,23.8,20.9,43.2,46.7,43.2s46.7-19.4,46.7-43.2l0-0.2l0-13.4c0-6.7-2.7-13.1-7.7-18.1l-39-38.8L52.7,238.5z"/>
		<line xmlns ="http://www.w3.org/2000/svg" class="ProgressBarLine" x1="50%" y1="200" x2="50%" y2="313" stroke="#1DAFBA" stroke-width="2"/>
		<text xmlns="http://www.w3.org/2000/svg" class="progressbarValue" dx="91.65" dy="32" fill=<%= textColor %> text-anchor="middle" style="font-family:'Roboto', sans-serif; font-weight:200; font-size:40px;">100%</text>
	</svg>
	<% } %>

	<% if (style == 'progressbar-10') { %>
	<svg class="progressbar-10" xmlns="http://www.w3.org/2000/svg" width="172.6px" height="323.2px" viewbox="0 0 172.6 323.2" >
		<defs>
			<linearGradient class="path-top" x1="91.65" y1="190" x2="91.65" y2="81" gradientUnits="userSpaceOnUse">
				<stop class="step-1" offset="0%" style="stop-color:#ccc;stop-opacity:1" />
				<stop class="step-2" offset="50%" style="stop-color:#ccc;stop-opacity:1" />
				<stop class="step-3" offset="50%" style="stop-color:#00b2da;stop-opacity:1" />
				<stop class="step-4" offset="100%" style="stop-color:#00b2da;stop-opacity:1" />
			</linearGradient>
			<linearGradient class="path-bot" x1="91.65" y1="295" x2="91.65" y2="185" gradientUnits="userSpaceOnUse">
				<stop class="step-1" offset="0%" style="stop-color:#ccc;stop-opacity:1" />
				<stop class="step-2" offset="50%" style="stop-color:#ccc;stop-opacity:1" />
				<stop class="step-3" offset="50%" style="stop-color:#00b2da;stop-opacity:1" />
				<stop class="step-4" offset="100%" style="stop-color:#00b2da;stop-opacity:1" />
			</linearGradient>
		</defs>

		<path class="ProgressBarBg" fill="#FFFFFF" stroke="#414042" stroke-width="4px" d="M154.5,111.6V71.8H18v39.8c0,22.6,9.6,44.3,26.2,59.6l17.8,16.3l-17.8,16.3  c-16.7,15.3-26.2,37-26.2,59.6v39.8h136.5v-39.8c0-22.6-9.6-44.3-26.2-59.6l-17.8-16.3l17.8-16.3C145,155.9,154.5,134.2,154.5,111.6  z"/>
		<g class="Background" fill="#414042">
			<rect y="51.7"  width="172.6" height="16.7"/>
			<rect y="306.5" width="172.6" height="16.7"/>
		</g>
		<path class="ProgressBarBot" fill="#1DAFBA" d="M121.6,212.5l-27-22.6c-0.1-0.1-0.2-0.2-0.3-0.3c-0.1,0-0.1-0.1-0.2-0.1  c-0.3-0.1-0.5-0.3-0.8-0.5l-0.2-0.1l-2.1-1.2c-2.9-1.7-6.5-1.7-9.3,0l-2.1,1.2l-0.3,0.2c-0.2,0.2-0.3,0.3-0.5,0.4  c-0.4,0.3-0.8,0.7-1.2,1c0,0-0.1,0-0.1,0.1l-26.3,22c-14.6,13.4-23,32.4-23,52.2v20.5c0,5.2,4.2,9.4,9.4,9.4h97.8  c5.2,0,9.4-4.2,9.4-9.4v-20.5C144.5,244.9,136.2,225.8,121.6,212.5z"/>
		<path class="ProgressBarTop" fill="#1DAFBA" d="M51,164.7l27,22.6c0.1,0.1,0.2,0.2,0.3,0.3c0.1,0,0.1,0.1,0.2,0.1  c0.3,0.1,0.5,0.3,0.8,0.5l0.2,0.1l2.1,1.2c2.9,1.7,6.5,1.7,9.3,0l2.1-1.2l0.3-0.2c0.2-0.2,0.3-0.3,0.5-0.4c0.4-0.3,0.8-0.7,1.2-1  c0,0,0.1,0,0.1-0.1l26.3-22c14.6-13.4,23-32.4,23-52.2V92c0-5.2-4.2-9.4-9.4-9.4H37.4c-5.2,0-9.4,4.2-9.4,9.4v20.5  C28,132.3,36.4,151.3,51,164.7z"/>
		<line xmlns ="http://www.w3.org/2000/svg" class="ProgressBarLine" x1="50%" y1="190" x2="50%" y2="295" stroke="#1DAFBA" stroke-width="2"/>
		<text xmlns="http://www.w3.org/2000/svg" class="progressbarValue" dx="86.3" dy="38" fill=<%= textColor %> text-anchor="middle" style="font-family:'Roboto', sans-serif; font-weight:200; font-size:48px;">100%</text>
	</svg>
	<% } %>

	<% if (style == 'progressbar-11') { %>
	<svg class="progressbar-11" xmlns="http://www.w3.org/2000/svg" width="300px" height="26.4px" viewbox="0 0 300 26.4" >
		<rect class="level-1" fill="#8EC349" stroke="#414042" stroke-width="2" x="1" y="1" width="24.4" height="24.4"/>
		<rect class="level-2" fill="#8EC349" stroke="#414042" stroke-width="2" x="25.7" y="1" width="24.4" height="24.4"/>
		<rect class="level-3" fill="#8EC349" stroke="#414042" stroke-width="2" x="50.1" y="1" width="24.4" height="24.4"/>
		<rect class="level-4" fill="#8EC349" stroke="#414042" stroke-width="2" x="73.7" y="1" width="24.4" height="24.4"/>
		<rect class="level-5" fill="#FEDF50" stroke="#414042" stroke-width="2" x="98.3" y="1" width="24.4" height="24.4"/>
		<rect class="level-6" fill="#FEDF50" stroke="#414042" stroke-width="2" x="122.3" y="1" width="24.4" height="24.4"/>
		<rect class="level-7" fill="#FEDF50" stroke="#414042" stroke-width="2" x="147" y="1" width="24.4" height="24.4"/>
		<rect class="level-8" fill="#E5422F" stroke="#414042" stroke-width="2" x="171.4" y="1" width="24.4" height="24.4"/>
		<rect class="level-9" fill="#E5422F" stroke="#414042" stroke-width="2" x="195" y="1" width="24.4" height="24.4"/>
		<rect class="level-10" fill="#E5422F" stroke="#414042" stroke-width="2" x="219.6" y="1" width="24.4" height="24.4"/>			
		<text xmlns="http://www.w3.org/2000/svg" class="progressbarValue" dx="275" dy="20" fill=<%= textColor %> text-anchor="middle" style="font-family:'Roboto', sans-serif; font-weight:300; font-size:20px;">100%</text>
	</svg>
	<% } %>

	<% if (style == 'progressbar-12') { %>
	<svg class="progressbar-12" xmlns="http://www.w3.org/2000/svg" width="562px" height="43.4px" viewbox="0 0 562 43.4" >
		<rect class="ProgressBarPart1" x="0" y="9.4" fill="#64348D" width="127" height="34"/>
		<text xmlns="http://www.w3.org/2000/svg" class="progressbarText" dx="60" dy="34" text-anchor="middle" fill=<%= textColor %> style="font-family:'Roboto', sans-serif; font-size:22px;"><%= text %></text>
		<polygon class="ProgressBarPart2" fill="#2A163A" points="127,43.4 127,34 106.5,34 "/>
		<rect class="ProgressBarPart3" x="106.5" y="0" fill="#64348D" width="46" height="34"/>
		<line xmlns="http://www.w3.org/2000/svg" class="ProgressBar" x1="151" y1="17" x2="474" y2="17" stroke="#64348D" stroke-width="34"/>
		<text xmlns="http://www.w3.org/2000/svg" class="progressbarValue" dx="520" dy="29" text-anchor="middle" style="font-family:'Roboto', sans-serif; font-weight:300; font-size:30px;">100%</text>
	</svg>
	<% } %>

</div></script>
<script type='text/template' id='c-line'><div class="svg-wrapper svg-wrapper-line svg-wrapper-line-<%= style %>">
	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve">
	</svg>
</div></script>
<script type="text/template" id="youtube-video"><iframe class="ytplayer<% if (mute) { %> muted<% } %>"
  type="text/html"
  width="<%= width %>"
  height="<%= height %>"
  src="<%= src %>"
  frameborder="0"
  allowfullscreen
  id="ytv<%= id %>"
  >
</iframe>
</script>
<script type="text/template" id="vimeo-video"><iframe id="vplayer_<%= id %>"
  class="vplayer"
  src="<%= src %>" 
  width="WIDTH"
  height="HEIGHT"
  frameborder="0"
  webkitallowfullscreen
  mozallowfullscreen
  allowfullscreen>
</iframe>
</script>
<script type="text/template" id="visme-video"><video id="vismevid<%= id %>"
        onended=""
        class="video-js vjs-default-skin vjs-big-play-centered"
        <% if (mute) { %>muted<% } %>
        <% if (controls) { %>controls<% } %>
        <% if (autoplay) { %>autoplay<% } %>
        <% if (loop) { %>loop<% } %>
        preload="none"
        width="<%= width %>"
        height="<%= height %>"
   	    poster="<%= thumbnail %>">
     <source src="<%= src %>" type="video/mp4"  />
   	 <source src="<%= src %>" type="video/webm"  />
   	 <source src="<%= src %>" type="video/ogg"  />
   	 <p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
</video>
</script>
<script type="text/template" id="video-thumb"><img src="<%= thumbnail %>" style="width:<%= width %>px;height:<%= height %>px">
</script>
<script type="text/template" id="iframe"><iframe height="<%= height %>" width="<%= width %>"></iframe>
</script>
<script type="text/template" id="map"><div class="map-container" style="width: 100%; height: 100%;"></div></script>
<script type="text/template" id="chart"><div id="<%= id %>-amchart" class="ct-chart" style="height: 100%;"></div>
</script>
<script type="text/template" id="table"><div class = 'vm-table<% if (newversion) { %>s<% } %> vm-text'
     style = 'width: calc(<%= width %>px - <%=  padding.horizontal %>px * 2 - <% if (borderStyle && borderStyle != "none") { %><%= borderWidth %>px * 2<% } else { %> 0px <% } %>);
              height: calc(<%= height %>px - <%=  padding.vertical %>px * 2 - <% if (borderStyle && borderStyle != "none") { %><%= borderWidth %>px * 2<% } else { %> 0px <% } %>);
              padding:<%= padding.vertical %>px <%= padding.horizontal %>px;
              line-height: <%= lineHeight %>;
              <% if (font.size) { %>
                font-size: <%= font.size %>px;
              <% } %>
              font-family: <%= font.name %>;
              text-align: <%= align %>;
              '>
    <%= text %>
</div>
</script>
<script type="text/template" id="group"><div class="group-object"></div>
</script>
<script>
      app.bootstrap('pid', "1458399122" );
        app.bootstrap('project_url', "dmpryv1e-untitled-project" );
          app.bootstrap('is_share', "1" );
        app.bootstrap('is_responsive', "0" );
        app.bootstrap('auto_advance', "1" );
        app.bootstrap('is_profile_hidden', "0" );
        app.bootstrap('background_music', "" );
        app.bootstrap('background_music_volume', null );
        app.bootstrap('background_music_settings', null );
        app.bootstrap('is_loop_background_music', "0" );
        app.bootstrap('is_comments', "1" );
        app.bootstrap('is_control_bar', "1" );
        app.bootstrap('is_autoplay_animation', "1" );
        app.bootstrap('is_registration', "0" );
        app.bootstrap('enable_parallax_animation', "1" );
        app.bootstrap('loop_presentation', "0" );
        app.bootstrap('background', "" );
        app.bootstrap('is_presenter_view', "0" );
        app.bootstrap('project_description', null );
        app.bootstrap('allow_search_index', "1" );
        app.bootstrap('document_view', "0" );
        app.bootstrap('screenshot', "http:\/\/static.visme.co\/08\/e5\/4c\/5d\/89e3dd4df6a2b3c8429604351bfb6635_f.jpg" );
        app.bootstrap('project_name', "Untitled Project" );
        app.bootstrap('project_date', 1567658516 );
        app.bootstrap('project_data', "{\"width\":800,\"height\":500,\"colorPallete\":[{\"color\":\"#CF000F\"},{\"color\":\"#4183D7\"},{\"color\":\"#F7CA18\"},{\"color\":\"#913D88\"},{\"color\":\"#26A65B\"},{\"color\":\"#E67E22\"},{\"color\":\"#2B2B2B\"},{\"color\":\"#F2F2F2\"}],\"template\":\"ah-LljDqFqlzHsrpw0ipBL-hN4RK8e8WvWR_pEMKvnA=\",\"templateTypeId\":0,\"templateType\":\"\",\"templatePalette\":\"none\",\"slides\":[{\"id\":\"sl1\",\"name\":\"Slide 1\",\"type\":\"regular\",\"order\":0,\"width\":800,\"height\":500,\"hidden\":false,\"editable\":true,\"transition\":{\"effect\":\"fade\",\"duration\":0.5,\"type\":\"onclick\"},\"background\":{\"blur\":0,\"brightness\":0,\"colorOverlay\":0,\"contrast\":0,\"filter\":\"no-filter\",\"scale\":100,\"flipX\":false,\"flipY\":false,\"color\":[\"#ffffff\"],\"height\":0,\"hue\":0,\"opacity\":100,\"saturate\":0,\"type\":\"solid\",\"width\":0,\"x\":-5,\"y\":-5},\"objects\":[{\"type\":\"iframe\",\"height\":456.75569520817,\"width\":799.3224666143,\"src\":\"https:\\\/\\\/fast.wistia.net\\\/embed\\\/iframe\\\/ovv7i2skqv?seo=false&videoFoam=true\",\"id\":\"el1\",\"y\":12,\"name\":\"iframe\",\"frameBorder\":\"0\",\"allowFullScreen\":\"\",\"iframeClass\":\"wistia_embed\",\"allowScroll\":false,\"order\":0}]}]}" );
        app.bootstrap('project_type', "blockinfographic" );
        app.bootstrap('project_version', "4" );
        app.bootstrap('visibility', "Published" );
        app.bootstrap('customHeader', false );
        app.bootstrap('project_id', "1458399122" );
        app.bootstrap('session_id', "test" );
        app.bootstrap('mode', "player" );
        app.bootstrap('usersDataStorage', "https:\/\/static.visme.co\/" );
        app.bootstrap('assetsStorage', "https:\/\/assets.visme.co\/" );
        app.bootstrap('audioStorage', "https:\/\/static.visme.co\/" );
        app.bootstrap('permissions', ["sadface","space:100"] );
        app.bootstrap('livereload', 0 );
        app.bootstrap('is_mobile', true );
        app.bootstrap('allowPlayerDownload', false );
        app.bootstrap('title_postfix', " | Infographic" );
        app.bootstrap('presentation_mode', 0 );
  $(function() {
  app.init();
});
</script>
<script>
    window.ga=window.ga||function(){(ga.q=ga.q||[]).push(arguments)};ga.l=+new Date;
      ga('create', 'UA-39223879-2', 'auto');
    ga('send', 'pageview');
    </script>
<script async src='https://www.google-analytics.com/analytics.js'></script>
<script>
    jQuery.cachedScript = function( url, options ) {
      options = $.extend( options || {}, {
      dataType: "script",
      cache: true,
      url: url
    });
    return jQuery.ajax( options );
  };

  $(document).ready(function() {
    $.cachedScript( "//a.visme.co/a.js" )
     .done(function( script, textStatus ) {
      VismeStats.track("V-3357283-1458399122", "public");
     })
     .fail(function( jqxhr, settings, exception ) {
       console.log( "ERROR analytics" );
     });
  });

    </script>
</body>
</html>
