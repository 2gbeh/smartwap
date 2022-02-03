<?php include_once 'inc/top.inc.php'; ?>  
<table border="0"><tr valign="top"><td width="310"> <!-- start of frame -->
		<?php include_once 'inc/aside.inc.php'; ?>  
  </td><td>
  <main class="tmp-base">     
		<?php $list_nav_key = 'Manage Enquires'; include_once 'inc/nav.inc.php'; ?>
  
    <table class="tmp-table" border="0">
      <tr>
        <th width="1">#</th>
        <th>Enquiry ID</th>
        <th>Enquirer Info</th>
        <th>Subject</th>          
        <th>Message Summary</th>
        <th>Date Received</th>
        <th>Response Status</th>
        <th>&nbsp;</th>
      </tr>
      
			<tbody>
      	<?php echo $rows; ?>
      </tbody>
    </table> 
		<p></p>
    
		<?php echo $pager->nav; ?>      
  </main>    
</td></tr></table> <!-- end of frame -->
<?php include_once 'inc/footer.inc.php'; ?>
<?php include_once 'inc/end.inc.php'; ?>