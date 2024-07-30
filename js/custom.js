function addTitleToExLink() {
   $('a[target="_blank"]').each(function(){
    $(this).attr({title: "Link opens in a new window"})
    })
}


function insertScript(url) {

    function isScriptLoaded(url) {
        var scripts = document.getElementsByTagName('script');
        for (var i = scripts.length; i--;) {
            if (scripts[i].src == url) return true;
        }
        return false;
    }

    if (!isScriptLoaded(url)) {
        var head = document.getElementsByTagName('head')[0];
            var script = document.createElement('script');
            script.type = 'text/javascript';
            script.src = url;
            head.appendChild(script);
    }

}


function insertStyles(file, id) {
    var DynamicCss = document.getElementById(id);
        if(!DynamicCss){
          var cssFile = file;
          var link = document.createElement( "link" );
          link.href = cssFile;
          link.id= id;
          link.type = "text/css";
          link.rel = "stylesheet";
          document.getElementsByTagName( "head" )[0].appendChild( link );
        }
}


  // Search Icon on click
  $(document).ready(function() {
    $(".search-icon").click(function(e) {
      e.preventDefault();
      $(".search-wrapper").show();
    });

    $('.closebtn').click(function(e) {
      e.preventDefault();
      if ($(".search-wrapper").is(':visible')) {
        $(".search-wrapper").hide();
      }
    });

     $('.search-wrapper').click(function(e) {
      e.preventDefault();
      if ($(".search-wrapper").is(':visible')) {
        $(".search-wrapper").hide();
      }
    });
    $('.search-wrapper form').click(function(e) {
      e.stopPropagation();
    });
  });


$(this).one('mousemove', function() {
    console.log('test-move')
        if (mobileDevice) {
           insertStyles(TEMPDIR + '/plugins/fontawesome/css/all.min.css', 'fontAwesome');
        }
        //insertScript('https://www.bots.ekwa.com/chatbox/10529/loader.js');
         insertScript('https://assets.pinterest.com/js/pinit.js');
          addTitleToExLink();
          if(contactBlock){
            insertScript(TEMPDIR + '/template-parts/default-blocks/' + contactScriptsDir + '/contact-form.js');
          }
          if(appForm){
            insertScript(TEMPDIR + '/template-parts/default-blocks/' + AppScriptsDir + '/validation.js');
          }

    }).one('scroll', function(){

    console.log('test-scroll');
        if (mobileDevice) {
           insertStyles(TEMPDIR + '/plugins/fontawesome/css/all.min.css', 'fontAwesome');

                setTimeout(function() {
                  $('.footer-icons, .scrollup').show();
                }, 1000);
        }
       // insertScript('https://www.bots.ekwa.com/chatbox/10529/loader.js');
        insertScript('https://assets.pinterest.com/js/pinit.js');
         addTitleToExLink();
         if(contactBlock){
            insertScript(TEMPDIR + '/template-parts/default-blocks/' + contactScriptsDir + '/contact-form.js');
          }
          if(appForm){
            insertScript(TEMPDIR + '/template-parts/default-blocks/' + AppScriptsDir + '/validation.js');
          }

    });



$(document).ready(function(){
     $(".ekwa-read-more-btn").click(function(e){
        e.preventDefault();
        $(".ekwa-hidden-content").slideToggle();
     })
});