<?php
OC_Util::addStyle('gallery', 'styles');
OC_Util::addScript('gallery', 'album_cover');
OC_Util::addScript('files_imageviewer', 'jquery.mousewheel-3.0.4.pack');
OC_Util::addScript('files_imageviewer', 'jquery.fancybox-1.3.4.pack');
OC_Util::addStyle( 'files_imageviewer', 'jquery.fancybox-1.3.4' );
?>
<script type="text/javascript">
  $(document).ready(function() {
    $("a[rel=images]").fancybox({
    'titlePosition': 'inside'
    });
  });
</script>

<div id="controls">
  <a href="?"><input type="button" value="Back" /></a><br/>
</div>
<div id="gallery_list">
<?php
foreach ($_['photos'] as $a) {
?>
<a rel="images" href="../../files/ajax/download.php?files=<?php echo $a; ?>"><img src="ajax/thumbnail.php?img=<?php echo $a ?>"></a>
<?php
  }
?>

</div>
