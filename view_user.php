<?php include_once 'inc/top.inc.php';?>
<table border="0"><tr valign="top"><td width="310"> <!-- start of frame -->
		<?php include_once 'inc/aside.inc.php';?>
  </td><td>
  <main class="tmp-base">
		<?php $list_nav_key = 'Manage Users';
$list_nav_bread = 'Bio';include_once 'inc/nav.inc.php';?>

    <section class="tmp-profile tmp-profile-">
      <ul>
        <li>
        	<img src="<?php echo $passport_buf; ?>" 
            alt="Attach Passport Photograph (35mm x 45mm)" 
            title="<?php echo $row['names_buf']; ?>" />
          <p></p>
          <div class="action">
            <a href="<?php echo $nav_user_login; ?>" target="_blank">
              <button class="btn btn-alt" title="Login">
            	  <i class="fas fa-sign-in-alt"></i>
              </button>
            </a> &nbsp;
            <button class="btn btn-pri" onclick="onEdit(<?php echo $row['ID']; ?>)" title="Edit">
            	<i class="fas fa-pencil-alt"></i>
            </button>
            <button class="btn btn-sec" onclick="onDelete(<?php echo $row['ID']; ?>)" title="Delete">
            	<i class="fas fa-trash-alt"></i>
            </button>
          </div>
        </li>
        <li>
          <table border="0">
           <tr>
              <td><i class="fas fa-user-alt"></i></td>
              <td>
                <?php echo $row['names_buf']; ?>
                <label>Names</label>
              </td>
            </tr>
           <tr>
              <td><i class="fas fa-paper-plane"></i></td>
              <td>
                <?php echo $row['email_buf']; ?>
                <label>Email</label>
              </td>
            </tr>
           <tr>
              <td><i class="fas fa-phone fa-flip-horizontal"></i></td>
              <td>
                <?php echo $row['phone_buf']; ?>
                <label>Telephone</label>
              </td>
            </tr>
            <tr>
              <td><i class="fas fa-star"></i></td>
              <td>
                <?php echo null_f($row['username']); ?>
                <label>Username</label>
              </td>
            </tr>
            <tr>
              <td><i class="fas fa-lock"></i></td>
              <td>
                <?php echo $row['password_buf']; ?>
                <a href="#" style="text-decoration: none;">(masked)</a>
                <label>Password</label>
              </td>
            </tr>
           <tr>
              <td><i class="fas fa-user-secret"></i></td>
              <td>
                <?php echo $row['question_buf']; ?>
                <label>2FA Question</label>
              </td>
            </tr>
           <tr>
              <td><i class="fas fa-key"></i></td>
              <td>
                <?php echo $row['answer_buf']; ?>
                <label>2FA Answer</label>
              </td>
            </tr>
          </table>
        </li>
        <li>
          <table border="0">
           <tr>
              <td><i class="fas fa-wallet"></i></td>
              <td>
                <kbd><?php echo $row['wal_buf']; ?></kbd>
                <label>BTC Address</label>
              </td>
            </tr>
           <tr>
              <td><i class="fas fa-money-bill-wave"></i></td>
              <td>
                <b>$ <?php echo $row['bal_buf']; ?>.00</b>
                <label>Balance</label>
              </td>
            </tr>
            <tr>
              <td><i class="fas fa-hands-helping"></i></td>
              <td>
                <?php echo $row['ref_buf']; ?>
                <label>Referred By</label>
              </td>
            </tr>
           <tr>
              <td><i class="fas fa-code"></i></td>
              <td>
                <?php echo $row['ref_code']; ?>
                <label>Referral Code</label>
              </td>
            </tr>
           <tr>
              <td><i class="fas fa-user-friends"></i></td>
              <td>
                <?php echo $row['refs_buf']; ?>
                <label>Referrals</label>
              </td>
            </tr>
           <tr>
              <td><i class="fas fa-award"></i></td>
              <td>
                <b>$ <?php echo $row['bonus_buf']; ?>.00</b>
                <label>Commission</label>
              </td>
            </tr>
            <tr>
              <td><i class="fas fa-calendar-alt"></i></td>
              <td>
                <?php echo $row['date_buf']; ?>
                <label>Created</label>
              </td>
            </tr>
          </table>
        </li>
      </ul>
    </section>
  </main>
</td></tr></table> <!-- end of frame -->
<?php include_once 'inc/footer.inc.php';?>
<?php include_once 'inc/end.inc.php';?>


