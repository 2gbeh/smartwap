<?php include_once 'inc/top.inc.php'; ?>  
<table border="0"><tr valign="top"><td width="310"> <!-- start of frame -->
		<?php include_once 'inc/aside.inc.php'; ?>  
  </td><td>
  <main class="tmp-base">     
		<?php $list_nav_key = 'Help Desk'; include_once 'inc/nav.inc.php'; ?>
    
    <form class="tmp-form" <?php echo FORM_ATTRIB; ?>>
      <fieldset>    
        <table class="tmp-grid" border="0">
        	<tr> 
          	<td colspan="4">
              <label for="message">
              	<var id="char_count_var">0/750</var>
              	&nbsp; <i class="far fa-question-circle"></i>
                &nbsp; Technical Report :                 
              </label>
              <textarea name="message" id="message" rows="25" maxlength="750"  
                placeholder="Type a message.." onkeyup="charCount(this, 'char_count_var')" 
                required><?php echo $_POST['message']; ?></textarea>
            </td>            
          </tr>                       
         </table>
        <div class="action">
          <input type="hidden" name="user_id" value="<?php echo $ID; ?>" readonly />
          <button type="reset" class="sec">Clear</button> &nbsp;
          <button type="submit" class="pri">Submit</button>
        </div>
      </fieldset>
    </form>
  </main>    
</td></tr></table> <!-- end of frame -->
<?php include_once 'inc/footer.inc.php'; ?>
<?php include_once 'inc/end.inc.php'; ?>