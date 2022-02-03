<?php include_once 'inc/top.inc.php';?>
<table border="0"><tr valign="top"><td width="310"> <!-- start of frame -->
		<?php include_once 'inc/aside.inc.php';?>
  </td><td>
  <main class="tmp-base">
		<?php $list_nav_key = 'Admin Account';include_once 'inc/nav.inc.php';?>

    <form class="tmp-form" <?php echo FORM_ATTRIB; ?>>
      <fieldset>
        <table class="tmp-grid" border="0">
        	<tr>
          	<td colspan="4">
              <label><x>*</x> Username:</label>
              <div class="fieldset">
                <input type="text" name="username" value="<?php echo $_POST['username']; ?>" placeholder="" required />
                <i class="fas fa-user-alt" onclick="togglePassword()" title="Hide/Show"></i>
              </div>
              <span class="info"><i class="fas fa-info-circle"></i>&nbsp; Password is auto-generated</span>
            </td>
          </tr>
        	<tr>
          	<td colspan="2">
              <label>Email Address:</label>
              <div class="fieldset">
                <input type="email" name="email" value="<?php echo $_POST['email']; ?>" placeholder="Ex. example@domain.com" />
                <i class="fas fa-envelope"></i>
              </div>
            </td>
          	<td colspan="2">
              <label>Phone Number:</label>
              <div class="fieldset">
                <input type="tel" name="phone" value="<?php echo $_POST['phone']; ?>" placeholder="Ex. +234(0)" maxlength="25" />
                <i class="fas fa-phone-square-alt"></i>
              </div>
            </td>
          </tr>
        	<tr>
          	<td colspan="4">
              <label><x>*</x> Access Rights:</label>
              <select name="STATUS" required>
                <option></option>
                <?php echo $ddl_status; ?>
              </select>
            </td>
          </tr>
         </table>
        <div class="action">
          <button type="reset" class="sec">Clear</button> &nbsp;
          <button type="submit" class="pri">Save</button>
        </div>
      </fieldset>
    </form>
  </main>
</td></tr></table> <!-- end of frame -->
<?php include_once 'inc/footer.inc.php';?>
<?php include_once 'inc/end.inc.php';?>


