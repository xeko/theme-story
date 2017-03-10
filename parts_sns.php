<?php
  $url_encode=urlencode(get_permalink());
  $site_title_encode=urlencode(get_home_url());
  $title_encode=urlencode(get_the_title());
  $tw_url = get_the_author_meta( 'twitter' );
  $tw_domain = array("http://twitter.com/"=>"","https://twitter.com/"=>"","//twitter.com/"=>"");
  $tw_user = '&via=' . strtr($tw_url , $tw_domain);
  $fdly_url = array("http%3A%2F%2F"=>"","https%3A%2F%2F"=>"");
  $plainurl= strtr( $site_title_encode, $fdly_url );
?>

<div class="share-social">
	<ul class="list-inline list-unstyled">
	<!--ツイートボタン-->
	<li class="twitter col-xs-4"> 
	<a target="blank" href="http://twitter.com/intent/tweet?url=<?php echo $url_encode ?>&text=<?php echo urlencode( the_title( "" , "" , 0 ) ) ?><?php if(get_the_author_meta('twitter')) : ?><?php echo $tw_user ;?><?php endif ;?>&tw_p=tweetbutton" onclick="window.open(this.href, 'tweetwindow', 'width=550, height=450,personalbar=0,toolbar=0,scrollbars=1,resizable=1'); return false;"><i class="fa fa-twitter"></i><span class="text">ツイート</span><span class="count"><?php if(function_exists('hoatv_get_share_twitter')) echo (hoatv_get_share_twitter()==0)?'':hoatv_get_share_twitter(); ?></span></a>
	</li>

	<!--Facebookボタン-->      
	<li class="facebook col-xs-4">
	<a href="http://www.facebook.com/share.php?u=<?php the_permalink(); ?>" onclick="window.open(this.href, 'FBwindow', 'width=650, height=450, menubar=no, toolbar=no, scrollbars=yes'); return false;"><i class="fa fa-facebook"></i>
	<span class="text">シェア</span><span class="count"><?php if(function_exists('hoatv_get_share_facebook')) echo (hoatv_get_share_facebook(get_permalink())==0)?'':hoatv_get_share_facebook(get_permalink()); ?></span></a>
	</li>

	<!--Google+1ボタン-->
	<li class="googleplus col-xs-4">
	<a href="https://plusone.google.com/_/+1/confirm?hl=ja&url=<?php echo get_permalink() ?>" onclick="window.open(this.href, 'window', 'width=550, height=450,personalbar=0,toolbar=0,scrollbars=1,resizable=1'); return false;" rel="tooltip" data-toggle="tooltip" data-placement="top" title="GooglePlusで共有"><i class="fa fa-google-plus"></i><span class="text">Google+</span><span class="count"><?php if(function_exists('hoatv_get_share_gplus')) echo (hoatv_get_share_gplus()==0)?'':hoatv_get_share_gplus(); ?></span></a>
	</li>

	</ul>
</div><!--End .share-social-->