<?php
$url = isset($_GET['url']);
//echo $_GET['url'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex, nofollow">
    <title>Video Player</title>
    <script type="text/javascript" src="/music/ap.js"></script>

<style>
     #aplayer_display .jwpreview {
    opacity: 1;
    visibility: visible;
    background-image: url('//s-media-cache-ak0.pinimg.com/originals/09/3a/2c/093a2ca8c22d2e4670a4573ea862fe25.gif"');
}
    </style>

<center>

<div class="player">
    <div id="player3" style="background-size:800px 300px;background-image: url('//s-media-cache-ak0.pinimg.com/originals/09/3a/2c/093a2ca8c22d2e4670a4573ea862fe25.gif');" class="aplayer"></div>

   
 <script type="text/javascript">
  var ap3 = new APlayer({
   element: document.getElementById('player3'),
   narrow: false,
   autoplay: true,
   showlrc: 3,
   mutex: true,
   theme: '#615754',
   mode: 'circulation',
   music: {
    title: 'Audio & Lyric Player',
    author: 'Shawon Khan',
    url: '<?php echo $_GET['url'];?>',
    pic: 'https://is3-ssl.mzstatic.com/image/thumb/Purple122/v4/24/d4/62/24d462c5-f0b1-339c-cf5d-6bd579ccdd52/source/256x256bb.jpg',
    lrc: "/getlink/getsub.php?sub=<?php echo  $_GET['sub'];?>"
   }
  });
 </script>
</center>
</div>


</body>
</html>