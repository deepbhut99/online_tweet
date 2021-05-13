<?php foreach($posts->result() as $r) : ?>

<?php if(!empty($r->share_id)) : ?>
<?php include("share_feed.php"); ?>
<?php else : ?>
<?php include("feed_single.php"); ?>

<?php endif?>
<?php endforeach; ?>
<?php if(isset($a_url) && $posts->num_rows() > 0) : ?>
<a href="<?php echo $a_url ?>" class="load_next"><?php echo lang("ctn_512") ?></a>
<?php endif; ?>
