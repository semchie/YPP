<?php 
// Chapter 3 Panel layout: stacked right sidebar with bricks 
?>
<div class="panel-wrap panel-rightthreecolflex" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?> >

  <div class="panel-main-wrap bricks-wrap"><div class="panel-wrap-inner">
  
    <?php if($content['main_row1']): ?>
      <div class="panel-one-col row main-row1 clear-block">
        <div class="panel-inner">
          <?php print $content['main_row1']; ?>
        </div> <!-- /.panel-inner -->      
      </div> <!-- /.panel-one-col -->
    <div class="panel-row-separator"></div>
    <?php endif; ?>
      
    <?php
	$myclasses = "";
	$columncounter = 0;
	if(!empty($content['main_left_row2'])){
	  $myclasses .= "main-left-row2 ";
	  $columncounter += 1;
	}
	else{
	  $myclasses .= "empty-main-left-row2 ";
	}
	if(!empty($content['main_center_row2'])){
	  $myclasses .= "main-center-row2 ";
	  $columncounter += 1;
	}
	else{
	  $myclasses .= "empty-main-center-row2 ";
	}
	if(!empty($content['main_right_row2'])){
	  $myclasses .= "main-right-row2 ";
	  $columncounter += 1;
	}
	else{
	  $myclasses .= "empty-main-right-row2 ";
	}
    ?>
	    <?php if(!$columncounter==0): ?>
	  <div class="panel-three-col-wrap clear-block row main-row2 <?php print($myclasses); ?>">
	    <div class="panel-main-left row2">
		  <div class="panel-inner">
		    <?php print $content['main_left_row2']; ?>
		  </div> <!-- /.panel-inner -->
	    </div> <!-- /.panel-left -->
	    <div class="panel-main-center row2">
		  <div class="panel-inner">
		    <?php print $content['main_center_row2']; ?>
		  </div> <!-- /.panel-inner -->
	    </div> <!-- /.panel-center -->  
	    <div class="panel-main-right row2">
		  <div class="panel-inner">
		    <?php print $content['main_right_row2']; ?>
		  </div> <!-- /.panel-inner -->
	    </div> <!-- /.panel-right -->     
	  </div> <!-- /.panel-three-col-wrap -->
    <div class="panel-row-separator"></div>
    <?php endif; ?>

    <?php if($content['main_row3']): ?>
    <div class="panel-one-col row main-row3 clear-block">
      <div class="panel-inner">
        <?php print $content['main_row3']; ?>
      </div> <!-- /.panel-inner -->      
    </div> <!-- /.panel-one-col -->
    <div class="panel-row-separator"></div>
    <?php endif; ?>


    <?php
	$myclasses = "";
	$columncounter = 0;
	if(!empty($content['main_left_row4'])){
	  $myclasses .= "main-left-row4 ";
	  $columncounter += 1;
	}
	else{
	  $myclasses .= "empty-main-left-row4 ";
	}
	if(!empty($content['main_center_row4'])){
	  $myclasses .= "main-center-row4 ";
	  $columncounter += 1;
	}
	else{
	  $myclasses .= "empty-main-center-row4 ";
	}
	if(!empty($content['main_right_row4'])){
	  $myclasses .= "main-right-row4 ";
	  $columncounter += 1;
	}
	else{
	  $myclasses .= "empty-main-right-row4 ";
	}
    ?>

    <?php if(!$columncounter==0): ?>
    <div class="panel-three-col-wrap clear-block row main-row4 <?php print($myclasses); ?>">
      <div class="panel-main-left row4">
        <div class="panel-inner">
          <?php print $content['main_left_row4']; ?>
        </div> <!-- /.panel-inner -->
      </div> <!-- /.panel-left -->     
      <div class="panel-main-center row4">
        <div class="panel-inner">
          <?php print $content['main_center_row4']; ?>
        </div> <!-- /.panel-inner -->
      </div> <!-- /.panel-main-center -->   
      <div class="panel-main-right row4">
        <div class="panel-inner">
          <?php print $content['main_right_row4']; ?>
        </div> <!-- /.panel-inner -->
      </div> <!-- /.panel-main-right -->      
    </div> <!-- /.panel-three-col-wrap -->
    <div class="panel-row-separator"></div>
    <?php endif; ?>

    <?php if($content['main_row5']): ?>
    <div class="panel-one-col row main-row5 clear-block">
      <div class="panel-inner">
        <?php print $content['main_row5']; ?>
      </div> <!-- /.panel-inner -->      
    </div> <!-- /.panel-one-col -->
    <div class="panel-row-separator"></div>
    <?php endif; ?>

  </div></div> <!-- /.panel-wrap-inner -->  <!-- /panel-main-wrap, .bricks-wrap -->
	
  <div class="panel-right">
    <div class="panel-inner">
      <?php print $content['right']; ?>
    </div> <!-- /.panel-inner -->
  </div> <!-- /.panel-sidebar-right -->
	
	<div class="end-of-panel"> </div>

</div> <!-- /.panel-stacked-right-sidebar -->
