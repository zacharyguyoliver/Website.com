<?php 
  $marketingMessages = loadSettings('marketing-message.json');
  $html = '';
  $dots = '';
  $length = count($marketingMessages);
  $count = 1;
  foreach($marketingMessages as $message){
    $html.="<div class='mySlides' style='background-image: url(/modules/marketing-message/images/$message->image);background-size: cover;'>
              <div class='numbertext'>$count / $length</div>
              <div class='text'>
                <h1>$message->title</h1>
                <p>$message->content</p>
              </div>
            </div>";
    $dots.="<span class='dot' data-id='$count'></span>";
      $count++;
  }

?>

<!-- Slideshow container -->
<div class="slideshow-container">

  <?=$html?>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <?=$dots?>
</div>
<script type="text/javascript" src="<?=autoCreateVersion('/modules/marketing-message/js/marketing-message.js')?>"></script>