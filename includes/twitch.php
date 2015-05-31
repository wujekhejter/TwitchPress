<?php
    echo 'Wolololo';
      $request = json_decode( @file_get_contents( 'https://api.twitch.tv/kraken/streams/' . $twitch ) );
      return ( ! is_null( $request->stream ) ) ? TRUE : FALSE;
      var_dump($request) ;

?>
