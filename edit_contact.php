<?php include_once 'inc/top.inc.php';?>
<table border="0"><tr valign="top"><td width="310"> <!-- start of frame -->
		<?php include_once 'inc/aside.inc.php';?>
  </td><td>
  <main class="tmp-base">
		<?php $list_nav_key = 'Manage Enquires';include_once 'inc/nav.inc.php';?>

    <form class="tmp-form" <?php echo FORM_ATTRIB; ?>>
      <fieldset>
        <table class="tmp-grid" border="0">
        	<tr>
          	<td colspan="1">
              <label>Enquirer Name :</label>
					    <input type="text" name="names" value="<?php echo $_POST['names']; ?>" placeholder="(surname first)" required readonly />
            </td>
          	<td colspan="1">
              <label>Email Address :</label>
					    <input type="email" name="email" value="<?php echo $_POST['email']; ?>" placeholder="Ex. example@domain.com" required readonly />
            </td>
          	<td colspan="1">
              <label>Subject :</label>
              <input type="search" name="subject" value="<?php echo $_POST['subject']; ?>" placeholder="Re:" required readonly />
            </td>
          	<td colspan="1">
              <label>Date Received :</label>
              <input type="text" name="DATE" value="<?php echo $_POST['DATE']; ?>" placeholder="MM/DD/YYYY" required readonly />
            </td>
          </tr>
        	<tr>
          	<td colspan="4">
              <label>Message :</label>
              <textarea name="message" rows="15" required readonly><?php echo $_POST['message']; ?></textarea>
            </td>
          </tr>
          <tr><td colspan="4" hr>&nbsp;</td></tr>
        	<tr>
            <td colspan="3">&nbsp;</td>
          	<td colspan="1">
              <label><x>*</x> Response Status :</label>
              <select name="STATUS" required>
                <option></option>
                <?php echo $ddl_status; ?>
              </select>
            </td>
          </tr>
         </table>

        <div class="action">
          <input type="hidden" name="ID" value="<?php echo $_POST['ID']; ?>" readonly /> &nbsp;
          <button type="submit" class="pri">Update</button>
        </div>
      </fieldset>
    </form>
  </main>
</td></tr></table> <!-- end of frame -->
<?php include_once 'inc/footer.inc.php';?>
<?php include_once 'inc/end.inc.php';?>

