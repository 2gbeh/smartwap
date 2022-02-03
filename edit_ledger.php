<?php include_once 'inc/top.inc.php';?>
<table border="0"><tr valign="top"><td width="310"> <!-- start of frame -->
		<?php include_once 'inc/aside.inc.php';?>
  </td><td>
  <main class="tmp-base">
		<?php $list_nav_key = 'Manage Ledgers';include_once 'inc/nav.inc.php';?>

    <form class="tmp-form" <?php echo FORM_ATTRIB; ?>>
      <fieldset>
        <table class="tmp-grid" border="0">
        	<tr>
          	<td colspan="3">
              <label>Account Name :</label>
					    <input type="text" name="" value="<?php echo $row_user['names_buf']; ?>" placeholder="(surname first)" readonly />
            </td>
          	<!-- <td colspan="1">
              <label>Username :</label>
              <input type="text" name="" value="<?php echo $row_user['username']; ?>" placeholder="" readonly />
            </td> -->
          </tr>
        	<tr>
          	<td colspan="2">
              <label>Email Address :</label>
					    <input type="text" name="" value="<?php echo $row_user['email']; ?>" placeholder="Ex. example@domain.com"  readonly />
            </td>
          	<!-- <td colspan="1">
              <label>Telephone No. :</label>
              <input type="text" name="" value="<?php echo $row_user['phone_buf']; ?>" placeholder="Ex. +234(0)" maxlength="25" readonly />
            </td> -->
          	<!-- <td colspan="1">
              <label>Referral Code :</label>
              <input type="text" name="" value="<?php echo $row_user['ref_code']; ?>" placeholder="Ex. JOHN$1" readonly />
            </td> -->
          </tr>
        	<tr>
          	<td colspan="3">
              <label>BTC Address :</label>
              <input type="text" name="" value="<?php echo $row_user['wal']; ?>" placeholder="" maxlength="35" readonly />
            </td>
          	<td colspan="1">
              <label>Available Balance ($) :</label>
					    <input type="text" name="" value="$ <?php echo $row_user['bal_buf']; ?>.00" placeholder="" readonly />
            </td>
          </tr>
          <tr><td colspan="4" hr>&nbsp;</td></tr>
        	<tr>
          	<td colspan="2">
              <label>Transaction Amount ($) :</label>
					    <input type="text" name="" value="$ <?php echo $row_ledger['amt_buf']; ?>.00" placeholder="" readonly />
            </td>
          	<td colspan="2">
              <label title="Deposit or Withdrawal">Description :</label>
					    <input type="text" name="" value="<?php echo $row_ledger['why_buf']; ?>" placeholder="" readonly />
            </td>
          </tr>
        	<tr>
          	<td colspan="2">
              <label>Transaction ID :</label>
              <input type="text" name="" value="<?php echo $row_ledger['id_buf']; ?>" placeholder="" readonly />
            </td>
          	<td colspan="1">
              <label>Transaction Date :</label>
					    <input type="text" name="" value="<?php echo $row_ledger['date_buf']; ?>" placeholder="" readonly />
            </td>
          	<td colspan="1">
              <label><x>*</x> Transaction Status :</label>
              <select name="STATUS" required>
                <option></option>
                <?php echo $ddl_status; ?>
              </select>
            </td>
          </tr>
         </table>

        <div class="action">
          <input type="hidden" name="user_id" value="<?php echo $row_ledger['user_id']; ?>" readonly />
          <input type="hidden" name="type" value="<?php echo $row_ledger['type']; ?>" readonly />
          <input type="hidden" name="amt" value="<?php echo $row_ledger['amt']; ?>" readonly />
          <input type="hidden" name="ID" value="<?php echo $row_ledger['ID']; ?>" readonly />
          <input type="hidden" name="bal" value="<?php echo $row_user['bal']; ?>" readonly />
          &nbsp;
          <button type="submit" class="pri">Update</button>
        </div>
      </fieldset>
    </form>
  </main>
</td></tr></table> <!-- end of frame -->
<?php include_once 'inc/footer.inc.php';?>
<?php include_once 'inc/end.inc.php';?>

