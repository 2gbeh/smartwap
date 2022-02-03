<?php include_once 'inc/top.inc.php';?>
<table border="0"><tr valign="top"><td width="310"> <!-- start of frame -->
		<?php include_once 'inc/aside.inc.php';?>
  </td><td>
  <main class="tmp-base">
		<?php $list_nav_key = 'Edit User';include_once 'inc/nav.inc.php';?>

    <form class="tmp-form" <?php echo FORM_ATTRIB; ?>>
      <fieldset>
        <table class="tmp-grid" border="0">
        	<tr>
          	<td colspan="3">
              <label><x>*</x> Account Name :</label>
					    <input type="text" name="names" value="<?php echo $_POST['names']; ?>" placeholder="(surname first)" required />
            </td>
          	<td colspan="1">
              <label><x>*</x> BTC Address :</label>
              <input type="search" name="wal" value="<?php echo $_POST['wal']; ?>" placeholder="" maxlength="35" required />
            </td>
          </tr>
        	<tr>
          	<td colspan="1">
              <label><x>*</x> Email Address :</label>
					    <input type="email" name="email" value="<?php echo $_POST['email']; ?>" placeholder="Ex. example@domain.com" required  readonly />
            </td>
          	<!-- <td colspan="2">
              <label><x>*</x> Username :</label>
              <input type="text" name="username" value="<?php echo $_POST['username']; ?>" placeholder="" required />
            </td> -->
          	<td colspan="1">
              <label><x>*</x> Password :</label>
              <input type="text" name="password" id="password" value="<?php echo $_POST['password']; ?>" placeholder="" ondblclick="togglePassword()" required />
            </td>
          </tr>
          <tr><td colspan="4" hr>&nbsp;</td></tr>
        	<tr>
          	<!-- <td colspan="2">
              <label>Telephone No. :</label>
					    <input type="tel" name="phone" value="<?php echo $_POST['phone']; ?>" placeholder="Ex. +234(0)" maxlength="25" />
            </td> -->
          	<!-- <td colspan="2">
              <label>2FA Secret Question :</label>
					    <input type="search" name="question" value="<?php echo $_POST['question']; ?>" placeholder="Ex. Name of my first pet ?" />
            </td> -->
          </tr>
        	<tr>
          	<!-- <td colspan="2">
              <label>Referred By :</label>
              <input type="search" name="ref" value="<?php echo $_POST['ref']; ?>" list="hint_ref" placeholder="Ex. JOHN$1" />
              <?php echo $hint_ref; ?>
            </td> -->
          	<!-- <td colspan="2">
              <label>2FA Secret Answer :</label>
					    <input type="text" name="answer" value="<?php echo $_POST['answer']; ?>" placeholder="Ex. Bingo" />
            </td> -->
          </tr>
        	<tr>
          	<td colspan="2">
              <label>Account Balance ($) :</label>
              <input type="number" min="0" name="bal" value="<?php echo null_f($_POST['bal'], 0); ?>" placeholder="" />
            </td>
          	<td colspan="2">
              <label>Commission Balance ($) :</label>
					    <input type="number" min="0" name="bonus" value="<?php echo null_f($_POST['bonus'], 0); ?>" placeholder="" />
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

