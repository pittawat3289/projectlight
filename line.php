 <?php
  

function send_LINE($msg){
 $access_token = 'AMFGQfTppQCmjVUGj7m3+umNWJf1yBn+1RQCICFJcxxYqKT0yKOrItgRsoKevOtZ4CG8dJD3PV+bdR6y1vS4W9Px6Dsum0drX38YMDPrMu3dFp5GXhHC9oSlbLnehr8on4djU0E1FqmxnYyQmNrLaAdB04t89/1O/w1cDnyilFU='; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => 'U9a857106772b2083bca347d87e033985',
        'messages' => [$messages],
      ];
      $post = json_encode($data);
      $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      $result = curl_exec($ch);
      curl_close($ch);

      echo $result . "\r\n"; 
}

?>
