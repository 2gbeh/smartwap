<?php include_once 'inc/top.inc.php'; ?>  
<table border="0"><tr valign="top"><td width="310"> <!-- start of frame -->
		<?php include_once 'inc/aside.inc.php'; ?>  
  </td><td>
  <main class="tmp-base">     
		<?php $list_nav_key = 'Help Desk';  $list_nav_size = $sizeof_ticket; include_once 'inc/nav.inc.php'; ?>
  
    <table class="tmp-table" border="0">
      <tr>
        <th width="1">#</th>        
        <th>Ticket ID</th>
        <th nw>Sender Info</th>
        <th>Message Summary</th>
        <th nw>Date Sent</th>
        <th nw>Response Status</th>
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