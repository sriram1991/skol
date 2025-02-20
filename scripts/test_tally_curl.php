<?php
/* This is PHP code to insert an entry in Tally. All required XML tags by Tally are taken here in a string and name for Ledger is taken by posted value from HTML form. */

test_tally('test');

function test_tally($name){
		$requestXML = '<?xml version="1.0"?>
		<ENVELOPE>
		  <HEADER>
			<TALLYREQUEST>Import Data</TALLYREQUEST>
		  </HEADER>
		  <BODY>
			<IMPORTDATA>
			  <REQUESTDESC>
				<REPORTNAME>Vouchers</REPORTNAME>
				<STATICVARIABLES>
				  <SVCURRENTCOMPANY>Mobisir</SVCURRENTCOMPANY>
				</STATICVARIABLES>
			  </REQUESTDESC>
			  <REQUESTDATA>
				<TALLYMESSAGE xmlns:UDF="TallyUDF">
				  <VOUCHER REMOTEID="123" VCHTYPE="Receipt" VCHKEY="321" ACTION="Create" OBJVIEW="Accounting Voucher View">
					<OLDAUDITENTRIES.LIST>    </OLDAUDITENTRIES.LIST>
					<ACCOUNTAUDITENTRIES.LIST>    </ACCOUNTAUDITENTRIES.LIST>
					<AUDITENTRIES.LIST>    </AUDITENTRIES.LIST>
					<OLDAUDITENTRYIDS.LIST TYPE="Number">
					  <OLDAUDITENTRYIDS>-1</OLDAUDITENTRYIDS>
					</OLDAUDITENTRYIDS.LIST>
					<DATE>20150407</DATE>
					<GUID>f6c10ce3-4a15-42b8-961e-143a512a9e62-00000009</GUID>
					<VOUCHERTYPENAME>Receipt</VOUCHERTYPENAME>
					<VOUCHERNUMBER>3</VOUCHERNUMBER>
					<PARTYLEDGERNAME>'.$name.'</PARTYLEDGERNAME>
					<CSTFORMISSUETYPE/>
					<CSTFORMRECVTYPE/>
					<FBTPAYMENTTYPE>Default</FBTPAYMENTTYPE>
					<PERSISTEDVIEW>Accounting Voucher View</PERSISTEDVIEW>
					<VCHGSTCLASS/>
					<DIFFACTUALQTY>No</DIFFACTUALQTY>
					<AUDITED>No</AUDITED>
					<FORJOBCOSTING>No</FORJOBCOSTING>
					<ISOPTIONAL>No</ISOPTIONAL>
					<EFFECTIVEDATE>20150407</EFFECTIVEDATE>
					<ISFORJOBWORKIN>No</ISFORJOBWORKIN>
					<ALLOWCONSUMPTION>No</ALLOWCONSUMPTION>
					<USEFORINTEREST>No</USEFORINTEREST>
					<USEFORGAINLOSS>No</USEFORGAINLOSS>
					<USEFORGODOWNTRANSFER>No</USEFORGODOWNTRANSFER>
					<USEFORCOMPOUND>No</USEFORCOMPOUND>
					<ALTERID>20</ALTERID>
					<EXCISEOPENING>No</EXCISEOPENING>
					<USEFORFINALPRODUCTION>No</USEFORFINALPRODUCTION>
					<ISCANCELLED>No</ISCANCELLED>
					<HASCASHFLOW>Yes</HASCASHFLOW>
					<ISPOSTDATED>No</ISPOSTDATED>
					<USETRACKINGNUMBER>No</USETRACKINGNUMBER>
					<ISINVOICE>No</ISINVOICE>
					<MFGJOURNAL>No</MFGJOURNAL>
					<HASDISCOUNTS>No</HASDISCOUNTS>
					<ASPAYSLIP>No</ASPAYSLIP>
					<ISCOSTCENTRE>No</ISCOSTCENTRE>
					<ISSTXNONREALIZEDVCH>No</ISSTXNONREALIZEDVCH>
					<ISEXCISEMANUFACTURERON>No</ISEXCISEMANUFACTURERON>
					<ISBLANKCHEQUE>No</ISBLANKCHEQUE>
					<ISDELETED>No</ISDELETED>
					<ASORIGINAL>No</ASORIGINAL>
					<VCHISFROMSYNC>No</VCHISFROMSYNC>
					<MASTERID>9</MASTERID>
					<VOUCHERKEY>177657027231784</VOUCHERKEY>
					<INVOICEDELNOTES.LIST>    </INVOICEDELNOTES.LIST>
					<INVOICEORDERLIST.LIST>    </INVOICEORDERLIST.LIST>
					<INVOICEINDENTLIST.LIST>    </INVOICEINDENTLIST.LIST>
					<ATTENDANCEENTRIES.LIST>    </ATTENDANCEENTRIES.LIST>
					<ORIGINVOICEDETAILS.LIST>    </ORIGINVOICEDETAILS.LIST>
					<INVOICEEXPORTLIST.LIST>    </INVOICEEXPORTLIST.LIST>
					<ALLLEDGERENTRIES.LIST>
					  <AMOUNT>200000.00</AMOUNT>
					  <OLDAUDITENTRYIDS.LIST TYPE="Number">
						<OLDAUDITENTRYIDS>-1</OLDAUDITENTRYIDS>
					  </OLDAUDITENTRYIDS.LIST>
					  <LEDGERNAME>'.$name.'</LEDGERNAME>
					  <GSTCLASS/>
					  <ISDEEMEDPOSITIVE>No</ISDEEMEDPOSITIVE>
					  <LEDGERFROMITEM>No</LEDGERFROMITEM>
					  <REMOVEZEROENTRIES>No</REMOVEZEROENTRIES>
					  <ISPARTYLEDGER>Yes</ISPARTYLEDGER>
					  <ISLASTDEEMEDPOSITIVE>No</ISLASTDEEMEDPOSITIVE>
					  <BANKALLOCATIONS.LIST></BANKALLOCATIONS.LIST>
					  <BILLALLOCATIONS.LIST></BILLALLOCATIONS.LIST>
					  <INTERESTCOLLECTION.LIST></INTERESTCOLLECTION.LIST>
					  <OLDAUDITENTRIES.LIST></OLDAUDITENTRIES.LIST>
					  <ACCOUNTAUDITENTRIES.LIST></ACCOUNTAUDITENTRIES.LIST>
					  <AUDITENTRIES.LIST></AUDITENTRIES.LIST>
					  <TAXBILLALLOCATIONS.LIST></TAXBILLALLOCATIONS.LIST>
					  <TAXOBJECTALLOCATIONS.LIST></TAXOBJECTALLOCATIONS.LIST>
					  <TDSEXPENSEALLOCATIONS.LIST></TDSEXPENSEALLOCATIONS.LIST>
					  <VATSTATUTORYDETAILS.LIST></VATSTATUTORYDETAILS.LIST>
					  <COSTTRACKALLOCATIONS.LIST></COSTTRACKALLOCATIONS.LIST>
					</ALLLEDGERENTRIES.LIST>
					<ALLLEDGERENTRIES.LIST>
					  <OLDAUDITENTRYIDS.LIST TYPE="Number">
						<OLDAUDITENTRYIDS>-1</OLDAUDITENTRYIDS>
					  </OLDAUDITENTRYIDS.LIST>
					  <LEDGERNAME>Bank of Maharashtra</LEDGERNAME>
					  <GSTCLASS/>
					  <ISDEEMEDPOSITIVE>Yes</ISDEEMEDPOSITIVE>
					  <LEDGERFROMITEM>No</LEDGERFROMITEM>
					  <REMOVEZEROENTRIES>No</REMOVEZEROENTRIES>
					  <ISPARTYLEDGER>Yes</ISPARTYLEDGER>
					  <ISLASTDEEMEDPOSITIVE>Yes</ISLASTDEEMEDPOSITIVE>
					  <AMOUNT>-200000.00</AMOUNT>
					  <BANKALLOCATIONS.LIST>
						<DATE>20150407</DATE>
						<INSTRUMENTDATE>20150407</INSTRUMENTDATE>
						<BANKBRANCHNAME>Warje</BANKBRANCHNAME>
						<TRANSACTIONTYPE>Cheque/DD</TRANSACTIONTYPE>
						<BANKNAME>AXIS</BANKNAME>
						<PAYMENTFAVOURING>'.$name.'</PAYMENTFAVOURING>
						<INSTRUMENTNUMBER>50026</INSTRUMENTNUMBER>
						<UNIQUEREFERENCENUMBER>38ROUrdV00QEKOhl</UNIQUEREFERENCENUMBER>
						<STATUS>No</STATUS>
						<CHEQUEPRINTED>-1</CHEQUEPRINTED>
						<AMOUNT>-200000.00</AMOUNT>
					  </BANKALLOCATIONS.LIST>
					  <BILLALLOCATIONS.LIST></BILLALLOCATIONS.LIST>
					  <INTERESTCOLLECTION.LIST></INTERESTCOLLECTION.LIST>
					  <OLDAUDITENTRIES.LIST></OLDAUDITENTRIES.LIST>
					  <ACCOUNTAUDITENTRIES.LIST></ACCOUNTAUDITENTRIES.LIST>
					  <AUDITENTRIES.LIST></AUDITENTRIES.LIST>
					  <TAXBILLALLOCATIONS.LIST></TAXBILLALLOCATIONS.LIST>
					  <TAXOBJECTALLOCATIONS.LIST></TAXOBJECTALLOCATIONS.LIST>
					  <TDSEXPENSEALLOCATIONS.LIST></TDSEXPENSEALLOCATIONS.LIST>
					  <VATSTATUTORYDETAILS.LIST> </VATSTATUTORYDETAILS.LIST>
					  <COSTTRACKALLOCATIONS.LIST> </COSTTRACKALLOCATIONS.LIST>
					</ALLLEDGERENTRIES.LIST>
					<ATTDRECORDS.LIST> </ATTDRECORDS.LIST>
				  </VOUCHER>
				</TALLYMESSAGE>
				<TALLYMESSAGE xmlns:UDF="TallyUDF">
				  <COMPANY>
					<REMOTECMPINFO.LIST MERGE="Yes">
					  <NAME>12</NAME>
					  <REMOTECMPNAME>SAVH</REMOTECMPNAME>
					  <REMOTECMPSTATE>Maharashtra</REMOTECMPSTATE>
					</REMOTECMPINFO.LIST>
					<REMOTECMPINFO.LIST MERGE="Yes">
					  <NAME>f6c10ce3-4a15-42b8-961e-143a512a9e62</NAME>
					  <REMOTECMPNAME>SAVH</REMOTECMPNAME>
					  <REMOTECMPSTATE>Maharashtra</REMOTECMPSTATE>
					</REMOTECMPINFO.LIST>
				  </COMPANY>
				</TALLYMESSAGE>
				<TALLYMESSAGE xmlns:UDF="TallyUDF">
				  <COMPANY>
					<REMOTECMPINFO.LIST MERGE="Yes">
					  <NAME>12</NAME>
					  <REMOTECMPNAME>SAVH</REMOTECMPNAME>
					  <REMOTECMPSTATE>Maharashtra</REMOTECMPSTATE>
					</REMOTECMPINFO.LIST>
					<REMOTECMPINFO.LIST MERGE="Yes">
					  <NAME>f6c10ce3-4a15-42b8-961e-143a512a9e62</NAME>
					  <REMOTECMPNAME>SAVH</REMOTECMPNAME>
					  <REMOTECMPSTATE>Maharashtra</REMOTECMPSTATE>
					</REMOTECMPINFO.LIST>
				  </COMPANY>
				</TALLYMESSAGE>
			  </REQUESTDATA>
			</IMPORTDATA>
		  </BODY>
		</ENVELOPE>';

	/* Actual code for importing goes here */
		//$server = '192.168.1.71:9000';
		$server = '182.64.219.101:9000';
		$headers = array( "Content-type: text/xml" ,"Content-length: ".strlen($requestXML) ,"Connection: close" );
		
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $server);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_TIMEOUT, 100);
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $requestXML);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		$data = curl_exec($ch);
		
		if(curl_errno($ch)){
			print curl_error($ch);
			echo "  something went wrong..... try later";
		}else{
			echo " request accepted";
			print $data;
			curl_close($ch);
		}
	}
