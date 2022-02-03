<?php include_once 'inc/top.inc.php'; ?>  
<table border="0"><tr valign="top"><td width="310"> <!-- start of frame -->
		<?php include_once 'inc/aside.inc.php'; ?>  
  </td><td>
  <main class="tmp-base">     
		<?php $list_nav_key = 'My Account'; include_once 'inc/nav.inc.php'; ?>
    
    <section class="tmp-profile">
      <ul>
        <li>
          <img src="<?php echo $passport_buf; ?>" 
            alt="Attach Passport Photograph (35mm x 45mm)" 
            title="<?php echo $row['username']; ?>" />
        </li>
        <li>
          <table border="0">
            <tr>
              <td><i class="fas fa-star"></i></td>
              <td>
                <?php echo $row['username']; ?>
                <label>Username</label>
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
              <td><i class="fas fa-lock"></i></td>
              <td>
                <?php echo $row['password_buf']; ?>
                <label>Password <a href="password.php" style="text-decoration: none;">(update)</a></label>
              </td>
            </tr>
            <tr>
              <td><i class="fas fa-wheelchair"></i></td>
              <td>
                <?php echo $row['status_buf']; ?>
                <label>Privilege</label>
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
<?php include_once 'inc/footer.inc.php'; ?>
<?php include_once 'inc/end.inc.php'; ?>


