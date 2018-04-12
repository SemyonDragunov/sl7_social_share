(function ($, Drupal, window, document, undefined) {

  var SL7Share = {

    cookie_name: 'sl7_social_share',

    setCookie: function(key, value)
    {
      var expires = new Date();
      expires.setTime(expires.getTime() + 31536000000);
      document.cookie = key + '=' + value + ';expires=' + expires.toUTCString();
    },

    getCookie: function(key)
    {
      var keyValue = document.cookie.match('(^|;) ?' + key + '=([^;]*)(;|$)');
      return keyValue ? keyValue[2] : null;
    },

    toggle: function()
    {
      var $container = $('#social-share');

      if ($container.hasClass('open')) {
        $container.removeClass('open');
        this.setCookie(this.cookie_name, 'close');
      }
      else {
        $container.addClass('open');
        this.setCookie(this.cookie_name, 'open');
      }
    },

    init: function()
    {
      var $container = $('#social-share');
      var cookie = SL7Share.getCookie(this.cookie_name);

      if (window.screen.width <= 1200) {
        $container.removeClass('open');
        this.setCookie(this.cookie_name, 'close');
      }
      else {
        if (cookie == null) {
          $container.addClass('open');
          this.setCookie(this.cookie_name, 'open');
        }
        if (cookie == 'open') {
          $container.addClass('open');
        }
        if (cookie == 'close') {
          $container.removeClass('open');
        }
      }
    }

  };

  $(document).ready(function() {
    var $container = $('#social-share');
    var share = SL7Share;
    $container.socialLikes();
    share.init();

    $container.find('.toggle').on('click', function() {
      share.toggle();
    });
  });

})(jQuery, Drupal, this, this.document);