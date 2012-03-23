<?php
  $events = ypp_list_events();
?>
<div class="<?php print $classes; ?>">
  <?php if ($admin_links): ?>
    <div class="views-admin-links views-hide">
      <?php print $admin_links; ?>
    </div>
  <?php endif; ?>
  <?php if ($header): ?>
    <div class="view-header">
      <?php print $header; ?>
    </div>
  <?php endif; ?>

  <?php if ($exposed): ?>
    <div class="view-filters">
      <?php print $exposed; ?>
    </div>
  <?php endif; ?>

  <?php if ($attachment_before): ?>
    <div class="attachment attachment-before">
      <?php print $attachment_before; ?>
    </div>
  <?php endif; ?>

  <?php if ($events): ?>
    <div class="view-content">
    <?php
      $i=0;
      $count = count($events);
      foreach($events as $k => $v) {
        $edate = format_date(strtotime($v['date']), 'custom', 'l, F d, Y - h:i A');
	if($i == 0) {
          print '<div class="views-row views-row-first">';
 	} elseif($i == $count-1) { 
          print '<div class="views-row views-row-last">';
	} else {
          print '<div class="views-row views-row-odd">';
	}
  	print '<div class="views-field-field-event-date-value">';
          print '<span class="field-content">';
	  print '<a href="http://dmlcentral.net/events/'.$k.'" target="_blank">'.$v['title'].'</a> - ';
	  print '<span class="date-display-single">'.$edate.'</span>';
	  print '</span>';
	print '</div>';

  	print '<div class="views-field-teaser">';
	print '<div class="field-content">'.$v['body'].'</div>';
	print '</div></div>';
	$i++;
      }
    ?>
    </div>
  <?php elseif ($empty): ?>
    <div class="view-empty">
      <?php print $empty; ?>
    </div>
  <?php endif; ?>

  <?php if ($pager): ?>
    <?php print $pager; ?>
  <?php endif; ?>

  <?php if ($attachment_after): ?>
    <div class="attachment attachment-after">
      <?php print $attachment_after; ?>
    </div>
  <?php endif; ?>

  <?php if ($more): ?>
    <?php print $more; ?>
  <?php endif; ?>

  <?php if ($footer): ?>
    <div class="view-footer">
      <?php print $footer; ?>
    </div>
  <?php endif; ?>

  <?php if ($feed_icon): ?>
    <div class="feed-icon">
      <?php print $feed_icon; ?>
    </div>
  <?php endif; ?>

</div> <?php /* class view */ ?>
