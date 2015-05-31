<?php
  $your_url = $youtube;

  function get_youtube_id_from_url($url)
  {
    if (stristr($url,'youtu.be/'))
        {preg_match('/(https:|http:|)(\/\/www\.|\/\/|)(.*?)\/(.{11})/i', $url, $final_ID); return $final_ID[4]; }
    else
        {@preg_match('/(https:|http:|):(\/\/www\.|\/\/|)(.*?)\/(embed\/|watch.*?v=|)([a-z_A-Z0-9\-]{11})/i', $url, $IDD); return $IDD[5]; }
      }

      $videoId = get_youtube_id_from_url($your_url);
?>


<div id="player" width="1280" height="720"></div>
  <script>      // This code loads the IFrame Player API code asynchronously.
    var tag = document.createElement('script');
    tag.src = "https://www.youtube.com/player_api";
    var firstScriptTag = document.getElementsByTagName('script')[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

    // This function creates an <iframe> (and YouTube player)
    // after the API code downloads.
    var player;
    function onYouTubePlayerAPIReady() {
      player = new YT.Player('player', {
        width: '1920',
        height: '1080',
        playerVars: {
          'autoplay': 1,
          'controls': 0,
          'autohide':0,
          'showinfo':0,
          'wmode':'transparent',
          'modestbranding': 1
          },
        videoId: '<?php echo $videoId; ?>',
        events: {
          'onReady': onPlayerReady}
      });
    }

    // The API will call this function when the video player is ready.
    function onPlayerReady(event) {
      event.target.mute();
    }
  </script>
