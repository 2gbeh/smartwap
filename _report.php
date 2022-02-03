<?php include_once 'inc/top.inc.php';?>
<table border="0"><tr valign="top"><td width="310"> <!-- start of frame -->
		<?php include_once 'inc/aside.inc.php';?>
  </td><td>
  <main class="tmp-base">
		<?php $list_nav_key = 'Report Summary';include_once 'inc/nav.inc.php';?>

    <form class="tmp-report" <?php echo FORM_ATTRIB; ?>>
      <fieldset>
        <legend>Format Report</legend>

        <label for="STATUS">Group by :</label>
        <select name="STATUS" id="STATUS" required>
          <option></option>
          <option>Ascending</option>
          <option>Descending</option>
        </select>     

        <label for="DATE">Filter by :</label>
        <select name="DATE" id="DATE" required>
          <option></option>
          <option>Ascending</option>
          <option>Descending</option>
        </select>

        <label for="ID">Sort by :</label>
        <select name="ID" id="ID" required>
          <option></option>
          <option>Ascending</option>
          <option>Descending</option>
        </select>     

        <div class="action">
          <button type="submit" class="pri">
            <i class="fas fa-database"></i>
            Query
          </button>
          <button type="button" class="sec" onclick="printer()">
            <i class="fas fa-print"></i>
            Print
          </button>
        </div>
      </fieldset>
    </form>
    <p></p>

    <table class="tmp-table tmp-report" border="0">
      <tr>
        <th>&nbsp;</th>
        <th nw>Qty/Vol.</th>
        <th nw>Unit Price (N)</th>
        <th nw>Total Cost (N)</th>
      </tr>
      <tbody>
        <?php echo $rows; ?>

        <tr>
          <td rowspan="5">WHOIS - Website domain registration "tvbutler.com.ng" (*valid for 1 year) </td>
          <td>1</td>
          <td>1,100</td>
          <td>1,100.00</td>
        </tr>
        <tr>
          <td>1</td>
          <td>5,000</td>
          <td>5,000.00</td>
        </tr>
        <tr>
          <td>1</td>
          <td>8,600</td>
          <td>8,600.00</td>
        </tr>
        <tr>
          <td>1</td>
          <td>40,000</td>
          <td>40,000.00</td>
        </tr>
        <tr>
          <td>1</td>
          <td>5,000</td>
          <td>5,000.00</td>
        </tr>
        <tr class="tfoot">
          <th>Total</th>
          <td>1</td>
          <td>5,000</td>
          <td>5,000.00</td>
        </tr>        

        <tr>
          <td rowspan="5">WHOIS - Website domain registration "tvbutler.com.ng" (*valid for 1 year) </td>
          <td>1</td>
          <td>1,100</td>
          <td>1,100.00</td>
        </tr>
        <tr>
          <td>1</td>
          <td>5,000</td>
          <td>5,000.00</td>
        </tr>
        <tr>
          <td>1</td>
          <td>8,600</td>
          <td>8,600.00</td>
        </tr>
        <tr>
          <td>1</td>
          <td>40,000</td>
          <td>40,000.00</td>
        </tr>
        <tr>
          <td>1</td>
          <td>5,000</td>
          <td>5,000.00</td>
        </tr>
        <tr class="tfoot">
          <th>Total</th>
          <td>1</td>
          <td>5,000</td>
          <td>5,000.00</td>
        </tr>         

        <tr>
          <td rowspan="5">WHOIS - Website domain registration "tvbutler.com.ng" (*valid for 1 year) </td>
          <td>1</td>
          <td>1,100</td>
          <td>1,100.00</td>
        </tr>
        <tr>
          <td>1</td>
          <td>5,000</td>
          <td>5,000.00</td>
        </tr>
        <tr>
          <td>1</td>
          <td>8,600</td>
          <td>8,600.00</td>
        </tr>
        <tr>
          <td>1</td>
          <td>40,000</td>
          <td>40,000.00</td>
        </tr>
        <tr>
          <td>1</td>
          <td>5,000</td>
          <td>5,000.00</td>
        </tr>   
        <tr class="tfoot">
          <th>Total</th>
          <td>1</td>
          <td>5,000</td>
          <td>5,000.00</td>
        </tr>                              
      </tbody>                    
    </table>
  </main>
</td></tr></table> <!-- end of frame -->
<?php include_once 'inc/footer.inc.php';?>
<?php include_once 'inc/end.inc.php';?>