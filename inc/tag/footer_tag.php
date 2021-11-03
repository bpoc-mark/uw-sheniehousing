<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="/js/jquery.matchHeight-min.js"></script>
<script src="/js/polyfill.js"></script>
<script src="/js/smooth-scroll.polyfills.min.js"></script>
<script src="/js/lazysizes.min.js"></script>
<script src="/js/common.js"></script>
<script>
  $(window).on("load", function() {
    let scroll = new SmoothScroll('a[href*="#"]', {
      header: "header",
      speedAsDuration: true,
      speed: 650,
      easing: 'easeInOutQuint',
    });
  });

  $('.fot_top nav li').matchHeight();
</script>

<script>
  (function(d) {
    var config = {
      kitId: 'jrc8wpq',
      scriptTimeout: 3000,
      async: true
    },
    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
  })(document);
</script>
