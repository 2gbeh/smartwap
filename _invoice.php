<?php include_once 'inc/top.inc.php';?>
<table border="0"><tr valign="top"><td width="310"> <!-- start of frame -->
		<?php include_once 'inc/aside.inc.php';?>
  </td><td>
  <main class="tmp-base">
		<?php $list_nav_key = 'Sales Invoice';include_once 'inc/nav.inc.php';?>

    <table class="tmp-invoice" border="0">
      <caption>
        <a href="#download.php" class="btn btn-sec">
          <i class="fas fa-download"></i>
          Download
        </a>
        <a href="javascript:void(0)" onclick="printer()" class="btn btn-pri">
          <i class="fas fa-print"></i>
          Print
        </a>
      </caption>
      <tr>
        <th>Sent to</th>
        <th>From</th>
        <th colspan="2">Invoice Summary</th>
      </tr>
      <tr>
        <td>
          <b>TAHA Group</b> <br/>
          No. 6, Orikeze Avenue, Agbor-Obi, <br/>
          Agbor, Delta <br/>
          <b>Email:</b> etugbeh@tahagroup.com <br/>
          <b>Tel.:</b> &nbsp; &nbsp; (234)81-1739-0235
        </td>
        <td>
          <b>HWP LABS</b> <br/>
          No. 39b, Uwasota Road, Ugbowo, <br/>
          Benin City, Edo <br/>
          <b>Email:</b> webmaster@hwplabs.com <br/>
          <b>Tel.:</b> &nbsp; &nbsp; (234)81-6996-0927
        </td>
        <td ar>
          <label>Invoice No.</label>
          <label>Invoice Date</label>
          <label>Due Date</label>
          <label>Total (&#8358;)</label>
        </td>
        <td ar>
          <input type="text" value="#1151121" readonly />
          <input type="text" value="Nov 15, 2021" readonly />
          <input type="text" value="Nov 22, 2021" readonly />
          <input type="text" value="64,177.50" readonly />
        </td>
      </tr>
    </table>
    <p></p>

    <table class="tmp-table tmp-invoice-tfoot" border="0">
      <tr>
        <th width="1">#</th>
        <th>Description</th>
        <th>Qty/Vol.</th>
        <th nw>Unit Price (N)</th>
        <th nw>Total Cost (N)</th>
      </tr>
      <tbody>
        <?php echo $rows; ?>

        <tr>
          <td width="1">1</td>
          <td>WHOIS - Website domain registration "tvbutler.com.ng" (*valid for 1 year) </td>
          <td>1</td>
          <td>1,100</td>
          <td>1,100.00</td>
          
        </tr>
        <tr>
          <td width="1">2</td>
          <td>Linux - Standard web server with 3GB memory and 15GB bandwidth per month (*valid for 1 year)</td>
          <td>1</td>
          <td>5,000</td>
          <td>5,000.00</td>
          
        </tr>
        <tr>
          <td width="1">3</td>
          <td>RapidSSL - Secure Hypertext Transfer Protocol "https://" with URL padlock icon (*valid for 1 year)</td>
          <td>1</td>
          <td>8,600</td>
          <td>8,600.00</td>
          
        </tr>
        <tr>
          <td width="1">4</td>
          <td>ZENTRY - HWP Labs Enterprise Application Software design and development</td>
          <td>1</td>
          <td>40,000</td>
          <td>40,000.00</td>
          
        </tr>
        <tr>
          <td width="1">5</td>
          <td>WHMCS - cPanel, Webmail, MySQL database setup and configuration</td>
          <td>1</td>
          <td>5,000</td>
          <td>5,000.00</td>
          
        </tr>
      </tbody>
      <tfoot>
        <tr>
          <th colspan="4">Sub Total (N)</th>
          <td>59,700.00</td>
          
        </tr>
        <tr>
          <th colspan="4">Discount (0%)</th>
          <td>&minus; 0.00</td>
          
        </tr>
        <tr>
          <th colspan="4">VAT (7.5%)</th>
          <td>4,477.50</td>
          
        </tr>
        <tr>
          <th colspan="4"><b>TOTAL (N)</b></th>
          <td><b>64,177.50</b></td>
          
        </tr>
      <tfoot>

      <caption>        
        <article>
          <h1>NOTES</h1>
          Invoice item #3, "RapidSSL - Secure Hypertext Transfer Protocol..." is optional and stated price is valid for 1 year.          
          <h1>TERMS</h1>
          Website domain and hosting fees are subject to changes by the web hosting manager (WHMCS), and
          VAT charges are deducted by the internet service provider (ISP).
        </article>
        <var>------------------ (SIGN/DATE) -------</var>
      </caption>                      
    </table>
  </main>
</td></tr></table> <!-- end of frame -->
<?php include_once 'inc/footer.inc.php';?>
<?php include_once 'inc/end.inc.php';?>