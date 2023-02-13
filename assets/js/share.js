/**
 * UA判別
 */
var _ua = (function (u) {
    return {
        Tablet: (u.indexOf("windows") != -1 && u.indexOf("touch") != -1 && u.indexOf(
            "tablet pc") == -1) ||
            u.indexOf("ipad") != -1 ||
            (u.indexOf("android") != -1 && u.indexOf("mobile") == -1) ||
            (u.indexOf("firefox") != -1 && u.indexOf("tablet") != -1) ||
            u.indexOf("kindle") != -1 ||
            u.indexOf("silk") != -1 ||
            u.indexOf("playbook") != -1,
        Mobile: (u.indexOf("windows") != -1 && u.indexOf("phone") != -1) ||
            u.indexOf("iphone") != -1 ||
            u.indexOf("ipod") != -1 ||
            (u.indexOf("android") != -1 && u.indexOf("mobile") != -1) ||
            (u.indexOf("firefox") != -1 && u.indexOf("mobile") != -1) ||
            u.indexOf("blackberry") != -1
    }
})(window.navigator.userAgent.toLowerCase());

/**
 * デバイス別 viewport 指定
 */
if (_ua.Mobile) {
    $("meta[name='viewport']").attr('content',
        'width=device-width, initial-scale=1');
} else if (_ua.Tablet) {
    $("meta[name='viewport']").attr('content', 'width=1200');
} else {
    $("meta[name='viewport']").attr('content', 'width=1200');
}

// device
if (_ua.Mobile) {
    $("meta[name='viewport']").attr('content', 'width=device-width, initial-scale=1,viewport-fit=cover');
    // change images with devices width
    $(document).ready(function () {
        $(function () {
            var $setElem = $('img'),
                pcName = '_pc',
                spName = '_sp',
                replaceWidth = 767;

            $setElem.each(function () {
                var $this = $(this);
                function imgSize() {
                    if (window.innerWidth > replaceWidth) {
                        $this.attr('src', $this.attr('src').replace(spName, pcName)).css({ visibility: 'visible' });
                    } else {
                        $this.attr('src', $this.attr('src').replace(pcName, spName)).css({ visibility: 'visible' });
                    }
                }
                $(window).resize(function () { imgSize(); });
                imgSize();
            });
        });
    });
} else if (_ua.Tablet) {
    $("meta[name='viewport']").attr('content', 'width=device-width,viewport-fit=cover,');
    $("body").attr('class', 'tablet');
} else {
    $("meta[name='viewport']").attr('content', 'width=device-width,initial-scale=1');
}

/**
 * internal linkスムーズスクロール
 */
$(function () {
    $('a[href*="#"]:not([href="#"])').click(function () {
        var head_h = $(".header").height();
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') &&
            location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html, body').animate({
                    scrollTop: target.offset().top - head_h
                }, 1000);
                return false;
            }
        }
    });
});

/**
 * external linkスムーズスクロール
 */
$(function () {
    setTimeout(function () {
        if (location.hash) {
            window.scrollTo(0, 0);
            target = location.hash.split('#');
            smoothScrollTo($('#' + target[1]));
        }
    }, 1);

    /**
     * taken from: https://css-tricks.com/snippets/jquery/smooth-scrolling/
     */
    $('a[href*="#"]:not([href="#"])').click(function () {
        var head_h = $(".header").height();
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') &&
            location.hostname == this.hostname) {
            smoothScrollTo($(this.hash));
            return false;
        }
    });

    function smoothScrollTo(target) {
        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');

        if (target.length) {
            $('html,body').animate({
                scrollTop: target.offset().top - 80
            }, 1000);
        }
    }
});

/**
 * header height
 */
function setHeight() {
    $headerHeight = $('header').outerHeight();
    console.log($headerHeight)
    $content = $('.js-top');
    $content.css('margin-top', $headerHeight);
}
setHeight();
$(window).resize(function () {
    setHeight();
});
/**
* loader
*/
setTimeout(function () {
    $('.js-loader').css("right", "-100%");
}, 3800);

setTimeout(function () {
    $('.mv-img').addClass('js-mv-img');
}, 6000);

/**
 * humberger-menu 
 */
$('.js-hamburger').click(function () {
    $(this).toggleClass('active');

    if ($(this).hasClass('active')) {
        $('.js-slide').addClass('active');
    } else {
        $('.js-slide').removeClass('active');
    }
});

$('body').on('change', '#image_uploads', function() {
    var name = document.getElementById('image_uploads');
    name.files.item(0).name = Math.floor(Math.random() * 100000);
    console.log('Selected file: ' + name.files.item(0).name);
    var fileName = document.getElementById('no-file');
    console.log(fileName);
    fileName.innerHTML = name.files.item(0).name;
  });
  
//   var from = document.getElementById('submit');
  $("#submit").attr('disabled','disabled');

  $('[name="checkbox-402[]"]').change(function(){
    $( "#submit" ).toggleClass('active');
    if ( $( "#submit" ).hasClass("active")) {
      $("#submit").removeAttr('disabled');
    }
    else{
        $("#submit").attr('disabled','disabled');
    }
   
  })
