<div id="footer" class="fixed-bottom">
        <div class="container-fluid text-center" style="background-color:black">
          <div class="container">
          <a>&nbsp;</a>
            <div class="row">
                <div class="col-md">
                  <a href="https://join.gamerparty.eu/ts" class="hiddenhref"><i class="fab fa-teamspeak"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
                  <a href="https://join.gamerparty.eu/twitter" class="hiddenhref"><i class="fab fa-twitter"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
                  <a href="https://join.gamerparty.eu/steam" class="hiddenhref"><i class="fab fa-steam"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
                  <a href="https://join.gamerparty.eu/discord" class="hiddenhref"><i class="fab fa-discord"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
                  <a href="https://join.gamerparty.eu/twitch" class="hiddenhref"><i class="fab fa-twitch"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
                </div>
            </div>
            <a>&nbsp;</a>
            <div class="row">
              <div class="col-sm">
                <a href="https://gamerparty.eu/impressum.php">Impressum</a>
              </div>
              <div class="col-sm">
                <a href="https://www.gamerparty.eu/">© 2021 gamerparty.eu</a>
              </div>
              <div class="col-sm">
                <a href="https://gamerparty.eu/datenschutz.php">Datenschutz</a>
              </div>
            </div>
            <a>&nbsp;</a>
          </div>
        </div>
      </div>

      <script src="https://code.jquery.com/jquery-3.3.1.min.js" crossorigin="anonymous"></script>
      <script src="https://gamerparty.eu/js/bootstrap/bootstrap.min.js"></script>
      <script src="https://gamerparty.eu/js/gallery.js"></script>
      <script src="https://vjs.zencdn.net/7.10.2/video.min.js"></script>
      <script src="https://github.com/videojs/http-streaming/releases/download/v2.12.0/videojs-http-streaming.min.js"></script>
      <script>
        if (document.getElementById("marquee")) {
          var laufschrift = document.getElementById("marquee");
          len = laufschrift.innerHTML.length;
          
          var nodes = document.getElementById('marquee').getElementsByTagName("span");
          for(var i=0; i<nodes.length; i++) { // weil jeder whitespace als child zählt
              nodes[i].style.animationDuration = len/15 +"s";
          }
        }
      </script>

<script>
 //let height = (window.innerHeight * 1.4);
 //let body = document.body;
 //if(height < body.scrollHeight)
 //{
  // $("#footer").removeClass("fixed-bottom");
 //}
</script>