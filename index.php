<?php include_once 'inc/top.inc.php';?>
  <main class="tmp-landing">
    <form class="tmp-form tmp-form-login" <?php echo FORM_ATTRIB; ?>>
      <fieldset>

        <label for="username">Username:</label>
        <div class="fieldset">
          <input type="search" name="username" id="username" value="<?php echo $_POST['username']; ?>" placeholder="example@domain.com" required />
          <i class="fas fa-user-alt"></i>
        </div>

        <label for="password">Password:</label>
        <div class="fieldset">
          <input type="password" name="password" id="password" value="<?php echo $_POST['password']; ?>" placeholder="**** ****" required />
          <i class="fas fa-lock" onClick="togglePassword()" title="Hide/Show"></i>
        </div>

        <button type="submit" class="pri">Login</button>
      </fieldset>
    </form>
<?php include_once 'inc/end_alt.inc.php';?>
