<?php include_once 'inc/top.inc.php'; ?>  
<table border="0"><tr valign="top"><td width="310"> <!-- start of frame -->
		<?php include_once 'inc/aside.inc.php'; ?>  
  </td><td>
  <main class="tmp-base">     
		<?php $list_nav_key = 'Admin Account'; include_once 'inc/nav.inc.php'; ?>
  
    <table class="tmp-table" border="0">
      <tr>
        <th width="1">#</th>        
        <th>Email Address</th>
        <th>Telephone No.</th>
        <th>Username</th>
        <th>Password</th>
        <th>Privilege</th>
        <th>Date Created</th>
        <th>&nbsp;</th>
      </tr>
      
			<tbody>
      	<?php echo $rows; ?>
      </tbody>
    </table>
  </main>    
</td></tr></table> <!-- end of frame -->
<?php include_once 'inc/footer.inc.php'; ?>
<?php include_once 'inc/end.inc.php'; ?>