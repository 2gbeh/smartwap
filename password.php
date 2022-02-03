<?php include_once 'inc/top.inc.php';?>
<table border="0"><tr valign="top"><td width="310"> <!-- start of frame -->
		<?php include_once 'inc/aside.inc.php';?>
  </td><td>
  <main class="tmp-base">
		<?php $list_nav_key = 'My Account';include_once 'inc/nav.inc.php';?>

    <form class="tmp-form" <?php echo FORM_ATTRIB; ?>>
      <fieldset>
        <table class="tmp-grid" border="0">
        	<tr>
          	<td colspan="4">
              <label>Current Password:</label>
              <div class="fieldset">
                <input type="password" name="password" id="password" value="<?php echo $_POST['password']; ?>" placeholder="**** ****" required />
                <i class="fas fa-eye" onclick="togglePassword()" title="Hide/Show"></i>
              </div>
            </td>
          </tr>
        	<tr>
          	<td colspan="2">
              <label>New Password:</label>
              <div class="fieldset">
                <input type="password" name="new_password" value="<?php echo $_POST['new_password']; ?>" required />
                <i class="fas fa-lock"></i>
              </div>
            </td>
          	<td colspan="2">
              <label>Re-type New Password:</label>
              <div class="fieldset">
                <input type="password" name="cfm_password" value="<?php echo $_POST['cfm_password']; ?>" required />
                <i class="fas fa-lock"></i>
              </div>
            </td>
          </tr>
         </table>
        <div class="action">
          <input type="hidden" name="old_password" value="<?php echo $_USER['password']; ?>" required readonly />
          <input type="hidden" name="ID" value="<?php echo $_USER['ID']; ?>" required readonly />
          <button type="submit" class="pri">Save &amp; Logout</button>
        </div>
      </fieldset>
    </form>
  </main>
</td></tr></table> <!-- end of frame -->
<?php include_once 'inc/footer.inc.php';?>
<?php include_once 'inc/end.inc.php';?>


