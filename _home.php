<?php include_once 'inc/top.inc.php';?>
<table border="0"><tr valign="top"><td width="310"> <!-- start of frame -->
		<?php include_once 'inc/aside.inc.php';?>
  </td><td>
  <main class="tmp-base">
		<?php $list_nav_key = 'Account Statement';include_once 'inc/nav.inc.php';?>

    <table class="tmp-table tmp-ribbon" border="0">
      <tr>
        <th>Account Holder</th>
        <th>Account Number</th>
        <th>Deposit (CR)</th>
        <th>Withdrawal (DR)</th>
        <th>Account Balance</th>
      </tr>
      <tr>
        <td style="text-transform: uppercase;">Mark Legendary</td>
        <td>0020211124</td>
        <td class="high">&#8358; 42,899.00</td>
        <td class="low">&#8358; 29,710.20</td>
        <td class="mid">&#8358; 13,188.80</td>
      </tr>
    </table>
    <p></p>

    <table class="tmp-table" border="0">
      <tr>
        <th width="1">#</th>
        <th>Date</th>
        <th>Type</th>
        <th nw>Amount (&#8358;)</th>
        <th>Narrative</th>
        <th>E-Channel</th>
        <th>Ref. No.</th>
        <th>&nbsp;</th>
      </tr>

			<tbody>
      	<?php echo $rows; ?>

        <tr>
        <tr>
			    <td>1</td>
			    <td nw>26-Nov-2021</td>
			    <td>CR</td>
			    <td>2,899.00</td>
          <td>Refund by Jumia from E-CART INTERNET SERVICE payable to MARK LEGENDARY</td>
			    <td nw>GAPS</td>
          <td nw>REF-0130877928124786328000000</td>
          <td ar>
            <button class="btn btn-prt" onclick="onView(1)" title="Print">Print</button>
          </td>
		    </tr>        
			    <td>2</td>
			    <td nw>22-Nov-2021</td>
			    <td>DR</td>
			    <td>200.00</td>
          <td>Airtime Purchase from AGBNK payable to MTN-2348169960927</td>
			    <td nw>USAT</td>
          <td nw>QL-101CT000000000003061783702</td>
          <td ar>
            <button class="btn btn-prt" onclick="onView(2)" title="Print">Print</button>
          </td>
		    </tr>
		    </tr>        
			    <td>3</td>
			    <td nw>22-Nov-2021</td>
			    <td>DR</td>
			    <td>200.00</td>
          <td>Airtime Purchase from AGBNK payable to GLO-2348117390235</td>
			    <td nw>USAT</td>
          <td nw>QL-101CT000000000003061783703</td>
          <td ar>
            <button class="btn btn-prt" onclick="onView(3)" title="Print">Print</button>
          </td>
		    </tr>        
        <tr>
			    <td>4</td>
			    <td nw>21-Nov-2021</td>
			    <td>DR</td>
			    <td>3,000.00</td>
          <td>Airtime Purchase from AGBNK payable to AIRTEL-2349012464642</td>
			    <td nw>NIPG</td>
          <td nw>QL-101CT000000000003026247573</td>
          <td ar>
            <button class="btn btn-prt" onclick="onView(4)" title="Print">Print</button>
          </td>
		    </tr>
        <tr>
			    <td>5</td>
			    <td nw>19-Nov-2021</td>
			    <td>DR</td>
			    <td>0.75</td>
          <td>VALUE ADDED TAX 000013211119072405000438453848 VAT on NIP Transfer via AGBNK POS TO MARK LEGENDARY</td>
			    <td nw>9999</td>
          <td nw>REF-GW21478613000000000010002</td>
          <td ar>
            <button class="btn btn-prt" onclick="onView(5)" title="Print">Print</button>
          </td>
		    </tr>
        <tr>
			    <td>6</td>
			    <td nw>18-Nov-2021</td>
			    <td>DR</td>
			    <td>10.00</td>
          <td>COMMISSION 000013211119072405000438453848 NIP Transfer Commission via AGBNK POS to MARK LEGENDARY</td>
			    <td nw>GWTR</td>
          <td nw>REF-GW21478613000000000010002</td>
          <td ar>
            <button class="btn btn-prt" onclick="onView(6)" title="Print">Print</button>
          </td>
		    </tr>
        <tr>
			    <td>7</td>
			    <td nw>17-Nov-2021</td>
			    <td>DR</td>
			    <td>1,000.00</td>
          <td>NIBSS Instant Payment Outward 000013211119072405000438453848 via AGBNK POS to MARK LEGENDARY</td>
			    <td nw>NIPT</td>
          <td nw>REF-GW21478613000000000010002</td>
          <td ar>
            <button class="btn btn-prt" onclick="onView(7)" title="Print">Print</button>
          </td>
		    </tr>
        <tr>
			    <td>8</td>
			    <td nw>13-Nov-2021</td>
			    <td>DR</td>
			    <td>24,999.45</td>
          <td>POS/WEB Purchase Transaction -276443- -932459- 3PG00001-COWRYWISE FINANCIAL TEC LANG</td>
			    <td nw>NIPU</td>
          <td nw>REF-0130877928124786328000000</td>
          <td ar>
            <button class="btn btn-prt" onclick="onView(8)" title="Print">Print</button>
          </td>
		    </tr>
        <tr>
			    <td>9</td>
			    <td nw>12-Nov-2021</td>
			    <td>CR</td>
			    <td>40,000.00</td>
          <td>Transfer between customers via AGBNK from JOHN, WILLIAM DOE to MARK LEGENDARY</td>
			    <td nw>0</td>
          <td nw>REF-4274462850000002111122207</td>
          <td ar>
            <button class="btn btn-prt" onclick="onView(9)" title="Print">Print</button>
          </td>
		    </tr>                  
        <tr>
			    <td>10</td>
			    <td nw>29-Oct-2021</td>
			    <td>DR</td>
			    <td>300.00</td>
          <td>Other Transaction 28/10/2021_AIRTIME/DATA Purchase_MTN_7066157335_</td>
			    <td nw>0</td>
          <td nw>REF-101CT00000000002996113048</td>
          <td ar>
            <button class="btn btn-prt" onclick="onView(10)" title="Print">Print</button>
          </td>
		    </tr>                  
      </tbody>
    </table>
  </main>
</td></tr></table> <!-- end of frame -->
<?php include_once 'inc/footer.inc.php';?>
<?php include_once 'inc/end.inc.php';?>