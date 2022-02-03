<?php include_once 'inc/top.inc.php';?>
<table border="0"><tr valign="top"><td width="310"> <!-- start of frame -->
		<?php include_once 'inc/aside.inc.php';?>
  </td><td>
  <main class="tmp-base">
		<?php $list_nav_key = 'Mailing List';include_once 'inc/nav.inc.php';?>

    <table class="tmp-mail" border="0">
      <caption>
        <button onclick="javascript:void(0)" title="Label">
          <i class="fas fa-tag"></i>
        </button>
        <button onclick="javascript:void(0)" title="Delete">
          <i class="fas fa-trash-alt"></i>
        </button>
        <button onclick="javascript:void(0)" title="Previous">
          <i class="fas fa-arrow-left"></i>
        </button>
        <button onclick="javascript:void(0)" title="Next">
          <i class="fas fa-arrow-right"></i>
        </button>
        <div class="fieldset">
          <input type="search" placeholder="Search subject..." onkeyup="javascript:void(0)" title="Search" />
          <i class="fas fa-search"></i>
        </div>
      </caption>
      <tr>
        <th>
          <ul>
            <li class="divide">Category</li>
            <li>
              <a href="#">
                <var>2,021</var>
                <i class="fas fa-ticket-alt"></i>
                Tickets
              </a>
            </li>
            <li>
              <a href="#" class="selected">
                <var>5</var>
                <i class="fas fa-star"></i>
                Priority
              </a>
            </li>
            <li>
              <a href="#">
                <var>1,992</var>
                <i class="fas fa-folder"></i>
                Queued
              </a>
            </li>
            <li>
              <a href="#">
                <var>9</var>
                <i class="fas fa-folder-open"></i>
                Opened
              </a>
            </li>
            <li>
              <a href="#">
                <var>15</var>
                <i class="fas fa-archive"></i>
                Closed
              </a>
            </li>
            </ul>

            <ul>
            <li class="divide">Utility</li>
            <li>
              <a href="#">
                <i class="fas fa-shield-alt"></i>
                Spam
              </a>
            </li>
            <li>
              <a href="#">
                <i class="fas fa-trash"></i>
                Trash
              </a>
            </li>
            <li>
              <a href="#">
                <i class="fas fa-address-book"></i>
                Contacts
              </a>
            </li>
          </ul>
        </th>
        <td>&nbsp;</td>
        <td>
<form class="tmp-form" <?php echo FORM_ATTRIB; ?>>
  <fieldset>
    <legend>
      <i class="fas fa-envelope"></i>
      Compose Mail
    </legend>
    <table class="tmp-grid" border="0">
      <tr>
        <td colspan="4">
          <input type="email" name="to" value="<?php echo $_POST['to']; ?>" placeholder="To :" required />
        </td>
      </tr>
      <tr>
        <td colspan="4">
          <input type="search" name="subject" value="<?php echo $_POST['subject']; ?>" placeholder="Subject :" required />
        </td>
      </tr>
      <tr>
        <td colspan="4">
          <input type="hidden" name="files" multiple required />
          <a onclick="javascript:void(0)" title="Bold">
            <i class="fas fa-bold"></i>
          </a>
          <a onclick="javascript:void(0)" title="Italic">
            <i class="fas fa-italic"></i>
          </a>
          <a onclick="javascript:void(0)" title="Underline">
            <i class="fas fa-underline"></i>
          </a>
          <a onclick="javascript:void(0)" title="Strikethrough">
            <i class="fas fa-strikethrough"></i>
          </a>
          <a onclick="javascript:void(0)" title="Subscript">
            <i class="fas fa-subscript"></i>
          </a>
          <a onclick="javascript:void(0)" title="Superscript">
            <i class="fas fa-superscript"></i>
          </a>
          <a onclick="javascript:void(0)" title="Quotes">
            <i class="fas fa-quote-left"></i>
          </a>
          <a onclick="javascript:void(0)" title="Number List">
            <i class="fas fa-list-ol"></i>
          </a>
          <a onclick="javascript:void(0)" title="Bullet List">
            <i class="fas fa-list-ul"></i>
          </a>
          <a onclick="javascript:void(0)" title="Indent">
            <i class="fas fa-indent"></i>
          </a>
          <a onclick="javascript:void(0)" title="Outdent">
            <i class="fas fa-outdent"></i>
          </a>
          <a onclick="javascript:void(0)" title="Hyperlink">
            <i class="fas fa-link"></i>
            Hyperlink
          </a>
          <a onclick="javascript:void(0)" title="Next">
            <i class="fas fa-image"></i>
            Image
          </a>
          <a onclick="javascript:void(0)" title="Attach">
            <i class="fas fa-paperclip"></i>
            Attach
          </a>
        </td>
      </tr>
      <tr>
        <td colspan="4">
          <textarea name="message" id="message" rows="20" placeholder=""
            required><?php echo $_POST['message']; ?></textarea>
        </td>
      </tr>
      </table>
    <div class="action">
      <!-- <input type="hidden" name="admin_id" value="<?php echo $ID; ?>" required readonly /> -->

      <button type="reset" class="sec">Save As Draft</button> &nbsp;
      <button type="submit" class="pri">Send Mail</button>
    </div>
  </fieldset>
</form>
        </td>
      </tr>
    </table>
  </main>
</td></tr></table> <!-- end of frame -->
<?php include_once 'inc/footer.inc.php';?>
<?php include_once 'inc/end.inc.php';?>