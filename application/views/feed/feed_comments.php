<div class="comments-wrap">
<div class="feed-comment-m clearfix" > 
    <div id="feed-coment">
    <a class="button is-rounded" onclick="comments(<?php echo $post->ID ?>)">Comment reply</a>
    </div>
  </div>
  <div id="feed-comments-spot-<?php echo $post->ID ?>">
    <?php include("feed_comments_single.php"); ?>
  </div>


</div>




