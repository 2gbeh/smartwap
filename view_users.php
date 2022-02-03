<?php include_once 'inc/top.inc.php';?>
<table border="0"><tr valign="top"><td width="310"> <!-- start of frame -->
		<?php include_once 'inc/aside.inc.php';?>
  </td><td>
  <main class="tmp-base">
		<?php $list_nav_key = 'Manage Users';include_once 'inc/nav.inc.php';?>

    <form class="tmp-form tmp-form-toolbar" <?php echo FORM_ATTRIB_GET; ?>>
      <table border="0">
        <tr valign="bottom">
          <td>
            <div class="fieldset-lft">
          	  <input type="search" name="q" placeholder="Search username.." list="hint_username" style="padding-top:13px; padding-left:50px;" required />
              <?php echo $hint_username; ?>
              <i class="fas fa-search"></i>
            </div>
          </td>
          <td align="right" width="1">
            <input type="hidden" name="s" value="true" />
            <button type="submit" class="pri">Search</button>
          </td>
        </tr>
      </table>
    </form>

    <table class="tmp-table" border="0">
      <tr>
        <th>&nbsp;</th>
        <th width="1">#</th>
        <th>Account Info</th>
        <th>Email Address</th>
        <th>BTC Address</th>
        <th nw>Balance ($)</th>
        <!-- <th>Referral Code</th> -->
        <!-- <th>Referrals</th> -->
        <th nw><a title="Commission">Bonus ($)</a></th>
        <th>Date Created</th>
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
<?php include_once 'inc/footer.inc.php';?>
<?php include_once 'inc/end.inc.php';?>