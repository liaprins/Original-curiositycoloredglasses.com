<!-- This snippet lives inside the header-close.php snippet. -->
<!-- The Facebook SDK is supposed to be inserted "directly after ... -->
<!-- ... the opening <body> tag on each page you want to load it" -->
<!-- Being within header-close.php, it will be available to every page I want a share button on. -->

<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1816213758596939',
      xfbml      : true,
      version    : 'v2.8'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>