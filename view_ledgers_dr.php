<?php include_once 'inc/top.inc.php'; ?>  
<table border="0"><tr valign="top"><td width="310"> <!-- start of frame -->
		<?php include_once 'inc/aside.inc.php'; ?>  
  </td><td>
  <main class="tmp-base">     
		<?php $list_nav_key = 'Manage Ledgers'; $list_nav_bread = 'Withdrawals'; include_once 'inc/nav.inc.php'; ?>    
  
    <table class="tmp-table" border="0">
      <tr>
        <th>&nbsp;</th> 
        <th width="1">#</th>
        <th>Account Info</th>
        <th>BTC Address</th>
        <th nw><a title="Available Balance">Balance ($)</a></th>
        <th nw><a title="Withdrawal Balance">Amount ($)</a></th>
        <th>Description</th>        
        <th>Transaction Date</th>
        <th>Status</th>
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