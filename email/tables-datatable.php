<?php
$fileName = 'email';
require_once '../header.php';
?>
	<div class="main-content scroll-content clearfix">
        <h3>Email Server Datatable <span class="label label-info">Updated May 2014</span></h3>
        <small>by Conner Bernhard</small><br>
        <br><br>

        <table class="table table-bordered datatable" id="table-3">
            <thead>
                <tr class="replace-inputs">
                    <th class="th-19">Provider</th>
                    <th class="th-10">Protocol</th>
                    <th class="th-15">SSL or TLS Enabled</th>
                    <th class="th-15">Incoming Mail Server</th>
                    <th class="th-12">Incoming Port</th>
                    <th class="th-15">Outgoing Mail Server</th>
                    <th class="th-12">Outgoing Port</th>
                </tr>
                <tr>
                    <th>Provider</th>
                    <th>Protocol</th>
                    <th>SSL or TLS Enabled</th>
                    <th>Incoming Mail Server</th>
                    <th>Incoming Port</th>
                    <th>Outgoing Mail Server</th>
                    <th>Outgoing Port</th>
                </tr>
            </thead>
            <tbody>
                <tr class="gradeA">
                    <td>Yahoo</td>
                    <td>IMAP</td>
                    <td class="center-me"><span class="label label-success">IMAP</span> <span class="label label-success">SMTP</span></td>
                    <td>imap.mail.yahoo.com</td>
                    <td>993</td>
                    <td>smtp.mail.yahoo.com</td>
                    <td>465 or 587</td>
                </tr>
                <tr class="gradeA">
                    <td>Rocketmail Yahoo</td>
                    <td>IMAP</td>
                    <td class="center-me"><span class="label label-success">IMAP</span> <span class="label label-success">SMTP</span></td>
                    <td>imap.mail.yahoo.com</td>
                    <td>993</td>
                    <td>smtp.mail.yahoo.com</td>
                    <td>465 or 587</td>
                </tr>
                <tr class="gradeA">
                    <td>Hushmail</td>
                    <td>IMAP</td>
                    <td class="center-me"><span class="label label-success">IMAP</span> <span class="label label-success">SMTP</span></td>
                    <td>imap.hushmail.com</td>
                    <td>993</td>
                    <td>smtp.hushmail.com</td>
                    <td>465 or 587</td>
                </tr>
                <tr class="gradeA">
                    <td>Hushmail</td>
                    <td>POP3</td>
                    <td class="center-me"><span class="label label-success">POP3</span> <span class="label label-success">SMTP</span></td>
                    <td>pop.hushmail.com</td>
                    <td>995</td>
                    <td>smtp.hushmail.com</td>
                    <td>465 or 587</td>
                </tr>
    			<tr class="gradeA">
                    <td>MRIS</td>
                    <td>IMAP</td>
                    <td class="center-me"><span class="label label-danger">IMAP</span> <span class="label label-danger">SMTP</span></td>
                    <td>pop.mris.com</td>
                    <td>110</td>
                    <td>smtp.mris.com</td>
                    <td>587</td>
                </tr>
                <tr class="gradeA">
                    <td>Ameritech</td>
                    <td>POP3</td>
                    <td class="center-me"><span class="label label-success">POP3</span> <span class="label label-success">SMTP</span></td>
                    <td>pop.att.yahoo.com</td>
                    <td>995</td>
                    <td>smtp.att.yahoo.com</td>
                    <td>465</td>
                </tr>
                <tr class="gradeA">
                    <td>UOL Mail</td>
                    <td>IMAP</td>
                    <td class="center-me"><span class="label label-success">IMAP</span> <span class="label label-success">SMTP</span></td>
                    <td>imap.uol.com.br</td>
                    <td>993</td>
                    <td>smtps.uol.com.br</td>
                    <td>587 or 465</td>
                </tr>
                <tr class="gradeA">
                    <td>Yahoo</td>
                    <td>POP3</td>
                    <td class="center-me"><span class="label label-success">POP3</span> <span class="label label-success">SMTP</span></td>
                    <td>pop.mail.yahoo.com</td>
                    <td>995</td>
                    <td>smtp.mail.yahoo.com</td>
                    <td>465 or 587</td>
                </tr>
                <tr class="gradeA">
                    <td>WOWway</td>
                    <td>POP3</td>
                    <td class="center-me"><span class="label label-danger">POP3</span> <span class="label label-success">SMTP</span></td>
                    <td>pop3.mail.wowway.com</td>
                    <td>110</td>
                    <td>smtp.mail.wowway.com</td>
                    <td>587</td>
                </tr>
    			<tr class="gradeA">
                    <td>Erols or RCN.com</td>
                    <td>POP3</td>
                    <td class="center-me"><span class="label label-danger">POP3</span> <span class="label label-danger">SMTP</span></td>
                    <td>pop.rcn.com</td>
                    <td>110</td>
                    <td>smtp.rcn.com</td>
                    <td>25 or 587</td>
                </tr>
                <tr class="gradeA">                        
                    <td>SWBell Yahoo</td>
                    <td>POP3</td>
                    <td class="center-me"><span class="label label-success">POP3</span> <span class="label label-success">SMTP</span></td>
                    <td>pop.att.yahoo.com</td>
                    <td>995</td>
                    <td>smtp.att.yahoo.com</td>
                    <td>465</td>
                </tr>
                <tr class="gradeA">                        
                    <td>Wans Net</td>
                    <td>POP3</td>
                    <td class="center-me"><span class="label label-success">POP3</span> <span class="label label-success">SMTP</span></td>
                    <td>pop.att.yahoo.com</td>
                    <td>995</td>
                    <td>smtp.att.yahoo.com</td>
                    <td>465</td>
                </tr>
                <tr class="gradeA">                        
                    <td>SNet Yahoo</td>
                    <td>POP3</td>
                    <td class="center-me"><span class="label label-success">POP3</span> <span class="label label-success">SMTP</span></td>
                    <td>pop.att.yahoo.com</td>
                    <td>995</td>
                    <td>smtp.att.yahoo.com</td>
                    <td>465</td>
                </tr>
                <tr class="gradeA">                        
                    <td>Gmail Google</td>
                    <td>POP3</td>
                    <td class="center-me"><span class="label label-success">POP3</span> <span class="label label-success">SMTP</span></td>
                    <td>pop.gmail.com</td>
                    <td>995</td>
                    <td>smtp.gmail.com</td>
                    <td>465 or 587</td>
                </tr>
    			<tr class="gradeA">
                    <td>Prodigy</td>
                    <td>IMAP</td>
                    <td class="center-me"><span class="label label-success">IMAP</span> <span class="label label-success">SMTP</span></td>
                    <td>imap.mail.yahoo.com</td>
                    <td>993</td>
                    <td>smtp.att.yahoo.com</td>
                    <td>465</td>
                </tr>
                <tr class="gradeA">
                    <td>Prodigy</td>
                    <td>POP3</td>
                    <td class="center-me"><span class="label label-success">POP3</span> <span class="label label-success">SMTP</span></td>
                    <td>pop.att.yahoo.com</td>
                    <td>993</td>
                    <td>smtp.att.yahoo.com</td>
                    <td>465</td>
                </tr>
                <tr class="gradeA">                        
                    <td>Gmail Google</td>
                    <td>IMAP</td>
                    <td class="center-me"><span class="label label-success">IMAP</span> <span class="label label-success">SMTP</span></td>
                    <td>imap.gmail.com</td>
                    <td>993</td>
                    <td>smtp.gmail.com</td>
                    <td>465 or 587</td>
                </tr>
                <tr class="gradeA">
                    <td>Hotmail</td>
                    <td>POP3</td>
                    <td class="center-me"><span class="label label-success">POP3</span> <span class="label label-success">SMTP</span></td>
                    <td>pop3.live.com</td>
                    <td>995</td>
                    <td>smtp.live.com</td>
                    <td>587 or 25</td>
                </tr>
                <tr class="gradeA">
                        <td>Cogeco</td>
                    <td>POP3</td>
                    <td class="center-me"><span class="label label-danger">POP3</span> <span class="label label-danger">SMTP</span></td>
                    <td>pop.cgocable.ca</td>
                    <td>110</td>
                    <td>smtp.cgocable.ca</td>
                    <td>25</td>
                </tr>
                <tr class="gradeA">
                    <td>Cogeco</td>
                    <td>IMAP</td>
                    <td class="center-me"><span class="label label-danger">IMAP</span> <span class="label label-danger">SMTP</span></td>
                    <td>imap.cgocable.ca</td>
                    <td>143</td>
                    <td>smtp.cgocable.ca</td>
                    <td>25</td>
                </tr>
    			<tr class="gradeA">
                    <td>O2.uk</td>
                    <td>POP3</td>
                    <td class="center-me"><span class="label label-success">POP3</span> <span class="label label-success">SMTP</span></td>
                    <td>mail.o2.co.uk</td>
                    <td>995 or 110</td>
                    <td>smtp.o2.co.uk</td>
                    <td>465 or 25</td>
                </tr>
                <tr class="gradeA">
                    <td>O2</td>
                    <td>POP3</td>
                    <td class="center-me"><span class="label label-success">POP3</span> <span class="label label-success">SMTP</span></td>
                    <td>pop3.o2.ie</td>
                    <td>995 or 110</td>
                    <td>smtp.o2.ie</td>
                    <td>465 or 25</td>
                </tr>
    			<tr class="gradeA">
                    <td>GoDaddy</td>
                    <td>POP3</td>
                    <td class="center-me"><span class="label label-success">POP3</span> <span class="label label-success">SMTP</span></td>
                    <td>pop.secureserver.net</td>
                    <td>110 or 995</td>
                    <td>smtpout.secureserver.net</td>
                    <td>465, 587, 25, 80 or 3535</td>
                </tr>
                <tr class="gradeA">
                    <td>MSN <span class="label label-danger">Outdated</span></td>
                    <td>POP3</td>
                    <td class="center-me"><span class="label label-success">POP3</span> <span class="label label-success">SMTP</span></td>
                    <td>pop3.email.msn.com</td>
                    <td>995 or 110</td>
                    <td>smtp.email.msn.com</td>
                    <td>587 or 25</td>
                </tr>
                <tr class="gradeA">
                    <td>MSN</td>
                    <td>POP3</td>
                    <td class="center-me"><span class="label label-success">POP3</span> <span class="label label-success">SMTP</span></td>
                    <td>pop3.live.com</td>
                    <td>995 or 110</td>
                    <td>smtp.live.com</td>
                    <td>587 or 25</td>
                </tr>
                <tr class="gradeA">
                    <td>Live</td>
                    <td>POP3</td>
                    <td class="center-me"><span class="label label-success">POP3</span> <span class="label label-success">SMTP</span></td>
                    <td>pop.live.com</td>
                    <td>995</td>
                    <td>smtp.live.com</td>
                    <td>587 or 25</td>
                </tr>
                <tr class="gradeA">
                    <td>AOL</td>
                    <td>POP3</td>
                    <td class="center-me"><span class="label label-success">POP3</span> <span class="label label-success">SMTP</span></td>
                    <td>pop.aol.com</td>
                    <td>995 or 110</td>
                    <td>smtp.aol.com</td>
                    <td>465 or 587</td>
                </tr>
                <tr class="gradeA">
                    <td>AOL</td>
                    <td>IMAP</td>
                    <td class="center-me"><span class="label label-success">IMAP</span> <span class="label label-success">SMTP</span></td>
                    <td>imap.aol.com</td>
                    <td>993 or 143</td>
                    <td>smtp.aol.com</td>
                    <td>465 or 587</td>
                </tr>
                <tr class="gradeA">
                    <td>AT&amp;T att.net</td>
                    <td>POP3</td>
                    <td class="center-me"><span class="label label-success">POP3</span> <span class="label label-success">SMTP</span></td>
                    <td>pop.att.yahoo.com</td>
                    <td>995</td>
                    <td>smtp.mail.att.net</td>
                    <td>465</td>
                </tr>
    			 <tr class="gradeA">
                    <td>Charter Mobile</td>
                    <td>IMAP</td>
                    <td class="center-me"><span class="label label-success">IMAP</span> <span class="label label-success">SMTP</span></td>
                    <td>mobile.charter.net</td>
                    <td>993</td>
                    <td>mobile.charter.net</td>
                    <td>587</td>
                </tr>
                <tr class="gradeA">
                    <td>Charter</td>
                    <td>POP3</td>
                    <td class="center-me"><span class="label label-danger">POP3</span> <span class="label label-danger">SMTP</span></td>
                    <td>pop.charter.net</td>
                    <td>110</td>
                    <td>smtp.charter.net</td>
                    <td>25</td>
                </tr>
                <tr class="gradeA">
                    <td>Charter</td>
                    <td>IMAP</td>
                    <td class="center-me"><span class="label label-danger">IMAP</span> <span class="label label-danger">SMTP</span></td>
                    <td>imap.charter.net</td>
                    <td>143</td>
                    <td>smtp.charter.net</td>
                    <td>25</td>
                </tr>
                <tr class="gradeA">
                    <td>DLS</td>
                    <td>POP3</td>
                    <td class="center-me"><span class="label label-success">POP3</span> <span class="label label-danger">SMTP</span></td>
                    <td>mail.dls.net</td>
                    <td>993</td>
                    <td>mail.dls.net</td>
                    <td>25</td>
                </tr>
    			<tr class="gradeA">
                    <td>Sanchamet</td>
                    <td>POP3</td>
                    <td class="center-me"><span class="label label-success">POP3</span> <span class="label label-success">SMTP</span></td>
                    <td>mail.bsnl.in</td>
                    <td>110</td>
                    <td>smtp.bsnl.in</td>
                    <td>25</td>
                </tr>
    			<tr class="gradeA">
                    <td>Sancharnet</td>
                    <td>POP3</td>
                    <td class="center-me"><span class="label label-success">POP3</span> <span class="label label-success">SMTP</span></td>
                    <td>nmma.bsnl.in</td>
                    <td>110</td>
                    <td>nmra.bsnl.in</td>
                    <td>25</td>
                </tr>
    			<tr class="gradeA">
                    <td>South West Bell</td>
                    <td>IMAP</td>
                    <td class="center-me"><span class="label label-success">IMAP</span> <span class="label label-success">SMTP</span></td>
                    <td>imap.mail.yahoo.com</td>
                    <td>993</td>
                    <td>smtp.att.yahoo.com</td>
                    <td>465</td>
                </tr>
    			<tr class="gradeA">
                    <td>Sancharnet</td>
                    <td>POP3</td>
                    <td class="center-me"><span class="label label-success">POP3</span> <span class="label label-success">SMTP</span></td>
                    <td>nmma.sancharnet.in</td>
                    <td>110</td>
                    <td>nmra.sancharnet.in</td>
                    <td>25</td>
                </tr>
    			<tr class="gradeA">
                    <td>SuddenLink</td>
                    <td>POP3</td>
                    <td class="center-me"><span class="label label-danger">POP3</span> <span class="label label-danger">SMTP</span></td>
                    <td>pop.suddenlink.net</td>
                    <td>110</td>
                    <td>smtp.suddenlink.net</td>
                    <td>25</td>
                </tr>
    			<tr class="gradeA">
                    <td>Dataone</td>
                    <td>POP3</td>
                    <td class="center-me"><span class="label label-success">POP3</span> <span class="label label-success">SMTP</span></td>
                    <td>nmma.dataone.in</td>
                    <td>110</td>
                    <td>nmra.dataone.in</td>
                    <td>25</td>
                </tr>
    			<tr class="gradeA">
                    <td>Windstream</td>
                    <td>POP3</td>
                    <td class="center-me"><span class="label label-danger">POP3</span> <span class="label label-danger">SMTP</span></td>
                    <td>pop.windstream.net</td>
                    <td>110</td>
                    <td>smtp.windstream.net</td>
                    <td>25</td>
                </tr>
    			<tr class="gradeA">
                    <td>Windstream Hosting</td>
                    <td>POP3</td>
                    <td class="center-me"><span class="label label-danger">POP3</span> <span class="label label-danger">SMTP</span></td>
                    <td>mail.windstreamhosting.com</td>
                    <td>110</td>
                    <td>mail.windstreamhosting.com</td>
                    <td>25 or 1025</td>
                </tr>
    			<tr class="gradeA">
                    <td>Windstream Hosting</td>
                    <td>IMAP</td>
                    <td class="center-me"><span class="label label-danger">IMAP</span> <span class="label label-danger">SMTP</span></td>
                    <td>mail.windstreamhosting.com</td>
                    <td>143</td>
                    <td>mail.windstreamhosting.com</td>
                    <td>25 or 1025</td>
                </tr>
    			<tr class="gradeA">
                    <td>Windstream</td>
                    <td>POP3</td>
                    <td class="center-me"><span class="label label-success">POP3</span> <span class="label label-success">SMTP</span></td>
                    <td>securemail.windstreamhosting.com</td>
                    <td>995</td>
                    <td>securemail.windstreamhosting.com</td>
                    <td>465</td>
                </tr>
    		    <tr class="gradeA">
                    <td>Multiplay</td>
                    <td>POP3</td>
                    <td class="center-me"><span class="label label-success">POP3</span> <span class="label label-success">SMTP</span></td>
                    <td>pop.bsnl.in</td>
                    <td>110</td>
                    <td>smtp.bsnl.in</td>
                    <td>25</td>
                </tr>
    			<tr class="gradeA">
                    <td>AT&amp;T Worldnet</td>
                    <td>POP3</td>
                    <td class="center-me"><span class="label label-success">POP3</span> <span class="label label-success">SMTP</span></td>
                    <td>ipostoffice.worldnet.att.net</td>
                    <td>965</td>
                    <td>imailhost.worldnet.att.net</td>
                    <td>465</td>
                </tr>
    			<tr class="gradeA">
                    <td>Cox Central</td>
                    <td>POP3</td>
                    <td class="center-me"><span class="label label-success">POP3</span> <span class="label label-success">SMTP</span></td>
                    <td>pop.central.cox.net</td>
                    <td>995</td>
                    <td>smtp.central.cox.net</td>
                    <td>587</td>
                </tr>
    			<tr class="gradeA">
                    <td>Cox East</td>
                    <td>POP3</td>
                    <td class="center-me"><span class="label label-success">POP3</span> <span class="label label-success">SMTP</span></td>
                    <td>pop.east.cox.net</td>
                    <td>110 or 995</td>
                    <td>smtp.east.cox.net</td>
                    <td>25 or 587</td>
                </tr>
    			<tr class="gradeA">
                    <td>Cox West</td>
                    <td>POP3</td>
                    <td class="center-me"><span class="label label-success">POP3</span> <span class="label label-success">SMTP</span></td>
                    <td>pop.west.cox.net</td>
                    <td>995</td>
                    <td>smtp.west.cox.net</td>
                    <td>587</td>
                </tr>
                 <tr class="gradeA">
                    <td>AT&amp;T att.net</td>
                    <td>IMAP</td>
                    <td class="center-me"><span class="label label-success">IMAP</span> <span class="label label-success">SMTP</span></td>
                    <td>imap.att.yahoo.com</td>
                    <td>993</td>
                    <td>smtp.mail.att.net</td>
                    <td>465</td>
                </tr>
                <tr class="gradeA">
                    <td>Comcast</td>
                    <td>POP3</td>
                    <td class="center-me"><span class="label label-success">POP3</span> <span class="label label-success">SMTP</span></td>
                    <td>mail.comcast.net</td>
                    <td>995 or 110</td>
                    <td>smtp.comcast.net</td>
                    <td>465 or 587</td>
                </tr>
                <tr class="gradeA">
                    <td>iCloud me.com</td>
                    <td>IMAP</td>
                    <td class="center-me"><span class="label label-success">IMAP</span> <span class="label label-success">SMTP</span></td>
                    <td>imap.mail.me.com</td>
                    <td>993</td>
                    <td>smtp.me.com</td>
                    <td>587</td>
                </tr>
    			<tr class="gradeA">
                    <td>Bluelight</td>
                    <td>POP3</td>
                    <td class="center-me"><span class="label label-success">POP3</span> <span class="label label-success">SMTP</span></td>
                    <td>pop.mybluelight.com</td>
                    <td>995</td>
                    <td>smtp.mybluelight.com</td>
                    <td>465</td>
                </tr>
    			<tr class="gradeA">
                    <td>BT Internet</td>
                    <td>IMAP</td>
                    <td class="center-me"><span class="label label-success">IMAP</span> <span class="label label-success">SMTP</span></td>
                    <td>mail.btinternet.com</td>
                    <td>993</td>
                    <td>mail.btinternet.com</td>
                    <td>465</td>
                </tr>
    			<tr class="gradeA">
                    <td>BT Internet</td>
                    <td>POP3</td>
                    <td class="center-me"><span class="label label-success">POP3</span> <span class="label label-success">SMTP</span></td>
                    <td>mail.btinternet.com</td>
                    <td>995</td>
                    <td>mail.btinternet.com</td>
                    <td>465</td>
                </tr>
                <tr class="gradeA">
                    <td>Moblie Me me.com <span class="label label-danger">Outdated</span></td>
                    <td>IMAP</td>
                    <td class="center-me"><span class="label label-danger">IMAP</span> <span class="label label-danger">SMTP</span></td>
                    <td>mail.me.com</td>
                    <td>143</td>
                    <td>smtp.me.com</td>
                    <td>25</td>
                </tr>
                <tr class="gradeA">
                    <td>Moblie Me me.com <span class="label label-danger">Outdated</span></td>
                    <td>POP3</td>
                    <td class="center-me"><span class="label label-danger">POP3</span> <span class="label label-danger">SMTP</span></td>
                    <td>mail.me.com</td>
                    <td>110</td>
                    <td>smtp.me.com</td>
                    <td>25</td>
                </tr>
                <tr class="gradeA">
                    <td>Outlook</td>
                    <td>IMAP</td>
                    <td class="center-me"><span class="label label-success">IMAP</span> <span class="label label-success">SMTP</span></td>
                    <td>imap-mail.outlook.com</td>
                    <td>993</td>
                    <td>smtp-mail.outlook.com</td>
                    <td>587</td>
                </tr>
                <tr class="gradeA">
                    <td>Outlook</td>
                    <td>POP3</td>
                    <td class="center-me"><span class="label label-success">POP3</span> <span class="label label-success">SMTP</span></td>
                    <td>pop3.live.com</td>
                    <td>995</td>
                    <td>smtp.live.com</td>
                    <td>587</td>
                </tr>
                <tr class="gradeA">
                    <td>Frontier</td>
                    <td>POP3</td>
                    <td class="center-me"><span class="label label-success">POP3</span> <span class="label label-success">SMTP</span></td>
                    <td>pop3.frontier.com</td>
                    <td>995</td>
                    <td>smtp.frontier.com</td>
                    <td>465</td>
                </tr>
                <tr class="gradeA">
                    <td>Verizon <span class="label label-danger">Outdated</span></td>
                    <td>IMAP</td>
                    <td class="center-me"><span class="label label-success">IMAP</span> <span class="label label-success">SMTP</span></td>
                    <td>incoming.verizon.net</td>
                    <td>995 or 110</td>
                    <td>outgoing.verizon.net</td>
                    <td>465 or 587</td>
                </tr>
                <tr class="gradeA">
                    <td>Verizon</td>
                    <td>POP3</td>
                    <td class="center-me"><span class="label label-success">POP3</span> <span class="label label-success">SMTP</span></td>
                    <td>pop.verizon.net</td>
                    <td>995</td>
                    <td>smtp.verizon.net</td>
                    <td>587 or 465</td>
                </tr>
                <tr class="gradeA">
                    <td>Yahoo Mail Plus</td>
                    <td>POP3</td>
                    <td class="center-me"><span class="label label-success">POP3</span> <span class="label label-success">SMTP</span></td>
                    <td>plus.pop.mail.yahoo.com</td>
                    <td>995</td>
                    <td>plus.smtp.mail.yahoo.com</td>
                    <td>465</td>
                </tr>
                <tr class="gradeA">
                    <td>Yahoo Verizon.net</td>
                    <td>POP3</td>
                    <td class="center-me"><span class="label label-success">POP3</span> <span class="label label-success">SMTP</span></td>
                    <td>incoming.yahoo.verizon.net</td>
                    <td>995</td>
                    <td>outgoing.yahoo.verizon.net</td>
                    <td>465 or 587</td>
                </tr>
                <tr class="gradeA">
                    <td>Yahoo Hosted</td>
                    <td>POP3</td>
                    <td class="center-me"><span class="label label-success">POP3</span> <span class="label label-success">SMTP</span></td>
                    <td>incoming.yahoo.verizon.net</td>
                    <td>995 or 110</td>
                    <td>outgoing.yahoo.verizon.net</td>
                    <td>587</td>
                </tr>
                <tr class="gradeA">
                    <td>Yahoo yahoo.co.uk</td>
                    <td>IMAP</td>
                    <td class="center-me"><span class="label label-success">IMAP</span> <span class="label label-success">SMTP</span></td>
                    <td>imap.mail.yahoo.co.uk</td>
                    <td>993</td>
                    <td>smtp.mail.yahoo.co.uk</td>
                    <td>465 or 587</td>
                </tr>
                <tr class="gradeA">
                    <td>Yahoo yahoo.co.uk</td>
                    <td>POP3</td>
                    <td class="center-me"><span class="label label-success">POP3</span> <span class="label label-success">SMTP</span></td>
                    <td>pop.mail.yahoo.co.uk</td>
                    <td>995</td>
                    <td>smtp.mail.yahoo.co.uk</td>
                    <td>465 or 587</td>
                </tr>
                <tr class="gradeA">
                    <td>RoadRunner rr.com</td>
                    <td>POP3</td>
                    <td class="center-me"><span class="label label-success">POP3</span> <span class="label label-success">SMTP</span></td>
                    <td>pop-server.rr.com</td>
                    <td>995</td>
                    <td>smtp-server.rr.com</td>
                    <td>587 or 465</td>
                </tr>
                <tr class="gradeA">
                    <td>RoadRunner adelphia.com</td>
                    <td>POP3</td>
                    <td class="center-me"><span class="label label-success">POP3</span> <span class="label label-success">SMTP</span></td>
                    <td>pop-server.roadrunner.com</td>
                    <td>110 or 995</td>
                    <td>smtp-server.roadrunner.com</td>
                    <td>25 or 587</td>
                </tr>
                <tr class="gradeA">
                    <td>Yahoo AU/NZ</td>
                    <td>IMAP</td>
                    <td class="center-me"><span class="label label-success">IMAP</span> <span class="label label-success">SMTP</span></td>
                    <td>imap.mail.yahoo.au</td>
                    <td>993</td>
                    <td>smtp.mail.yahoo.au</td>
                    <td>465</td>
                </tr>
                <tr class="gradeA">
                    <td>Adelphia</td>
                    <td>POP3</td>
                    <td class="center-me"><span class="label label-success">POP3</span> <span class="label label-success">SMTP</span></td>
                    <td>mail.adelphia.net</td>
                    <td>110 or 995</td>
                    <td>mail.adelphia.net</td>
                    <td>25 or 587</td>
                </tr>
    			<tr class="gradeA">
                    <td>Adelphia</td>
                    <td>IMAP</td>
                    <td class="center-me"><span class="label label-success">IMAP</span> <span class="label label-success">SMTP</span></td>
                    <td>mail.adelphia.net</td>
                    <td>110 or 995</td>
                    <td>mail.adelphia.net</td>
                    <td>143 or 587</td>
                </tr>
                <tr class="gradeA">
                    <td>Sky</td>
                    <td>IMAP</td>
                    <td class="center-me"><span class="label label-success">IMAP</span> <span class="label label-success">SMTP</span></td>
                    <td>imap.tools.sky.com</td>
                    <td>993</td>
                    <td>smtp.tools.sky.com</td>
                    <td>465</td>
                </tr>
                <tr class="gradeA">
                    <td>Yahoo AT&amp;T</td>
                    <td>IMAP</td>
                    <td class="center-me"><span class="label label-success">IMAP</span> <span class="label label-success">SMTP</span></td>
                    <td>imap.att.yahoo.com</td>
                    <td>993</td>
                    <td>smtp.att.yahoo.com</td>
                    <td>465</td>
                </tr>
                <tr class="gradeA">
                    <td>Sky</td>
                    <td>POP3</td>
                    <td class="center-me"><span class="label label-success">POP3</span> <span class="label label-success">SMTP</span></td>
                    <td>pop.tools.sky.com</td>
                    <td>995</td>
                    <td>smtp.tools.sky.com</td>
                    <td>465</td>
                </tr>
                <tr class="gradeA">
                    <td>Mail.com</td>
                    <td>IMAP</td>
                    <td class="center-me"><span class="label label-success">IMAP</span> <span class="label label-success">SMTP</span></td>
                    <td>imap.mail.com</td>
                    <td>993</td>
                    <td>smtp.mail.com</td>
                    <td>465</td>
                </tr>
                <tr class="gradeA">
                    <td>Zoho Mail</td>
                    <td>POP3</td>
                    <td class="center-me"><span class="label label-success">POP3</span> <span class="label label-success">SMTP</span></td>
                    <td>pop.zoho.com</td>
                    <td>995</td>
                    <td>smtp.zoho.com</td>
                    <td>465</td>
                </tr>
                <tr class="gradeA">
                    <td>Mail.com</td>
                    <td>POP3</td>
                    <td class="center-me"><span class="label label-success">POP3</span> <span class="label label-success">SMTP</span></td>
                    <td>pop.mail.com</td>
                    <td>995</td>
                    <td>smtp.mail.com</td>
                    <td>465</td>
                </tr>
                <tr class="gradeA">
                    <td>Mail.com</td>
                    <td>POP3</td>
                    <td class="center-me"><span class="label label-danger">POP3</span> <span class="label label-danger">SMTP</span></td>
                    <td>pop1.mail.com</td>
                    <td>110</td>
                    <td>Local ISP</td>
                    <td>Local ISP</td>
                </tr>
                <tr class="gradeA">
                    <td>Virgin Media virginmedia.com</td>
                    <td>POP3</td>
                    <td class="center-me"><span class="label label-success">POP3</span> <span class="label label-success">SMTP</span></td>
                    <td>pop3.virginmedia.com</td>
                    <td>995</td>
                    <td>smtp.virginmedia.com</td>
                    <td>465</td>
                </tr>
                <tr class="gradeA">
                    <td>Virgin Media blueyonder.co.uk</td>
                    <td>POP3</td>
                    <td class="center-me"><span class="label label-success">POP3</span> <span class="label label-success">SMTP</span></td>
                    <td>pop3.blueyonder.co.uk</td>
                    <td>995</td>
                    <td>smtp.blueyonder.co.uk</td>
                    <td>465</td>
                </tr>
                <tr class="gradeA">
                    <td>Virgin Media ntlworld.com</td>
                    <td>POP3</td>
                    <td class="center-me"><span class="label label-success">POP3</span> <span class="label label-success">SMTP</span></td>
                    <td>pop.ntlworld.com</td>
                    <td>995</td>
                    <td>smtp.ntlworld.com</td>
                    <td>465</td>
                </tr>
                <tr class="gradeA">
                    <td>SBCGlobal</td>
                    <td>IMAP</td>
                    <td class="center-me"><span class="label label-success">IMAP</span> <span class="label label-success">SMTP</span></td>
                    <td>imap.mail.yahoo.com</td>
                    <td>993</td>
                    <td>smtp.att.yahoo.com</td>
                    <td>465</td>
                </tr>
                <tr class="gradeA">
                    <td>SBCGlobal</td>
                    <td>POP3</td>
                    <td class="center-me"><span class="label label-success">POP3</span> <span class="label label-success">SMTP</span></td>
                    <td>pop.att.yahoo.com</td>
                    <td>995</td>
                    <td>smtp.att.yahoo.com</td>
                    <td>465</td>
                </tr>
                <tr class="gradeA">
                    <td>TalkTalk talktalk.net</td>
                    <td>IMAP</td>
                    <td class="center-me"><span class="label label-danger">IMAP</span> <span class="label label-success">SMTP</span></td>
                    <td>mail.talktalk.net</td>
                    <td>143</td>
                    <td>smtp.talktalk.net</td>
                    <td>587</td>
                </tr>
                <tr class="gradeA">
                    <td>TalkTalk talktalk.net <span class="label label-danger">Outdated</span></td>
                    <td>IMAP</td>
                    <td class="center-me"><span class="label label-danger">IMAP</span> <span class="label label-success">SMTP</span></td>
                    <td>imap.talktalk.net</td>
                    <td>143</td>
                    <td>smtp.talktalk.net</td>
                    <td>587</td>
                </tr>
                <tr class="gradeA">
                    <td>TalkTalk talktalk.net</td>
                    <td>POP3</td>
                    <td class="center-me"><span class="label label-success">POP3</span> <span class="label label-success">SMTP</span></td>
                    <td>mail.talktalk.net</td>
                    <td>110</td>
                    <td>smtp.talktalk.net</td>
                    <td>587</td>
                </tr>
                <tr class="gradeA">
                    <td>EarthLink earthlink.net</td>
                    <td>POP3</td>
                    <td class="center-me"><span class="label label-success">POP3</span> <span class="label label-success">SMTP</span></td>
                    <td>pop.earthlink.net</td>
                    <td>110</td>
                    <td>smtpauth.earthlink.net</td>
                        <td>587</td>
                </tr>
                <tr class="gradeA">
                    <td>EarthLink mindspring.com</td>
                    <td>POP3</td>
                    <td class="center-me"><span class="label label-success">POP3</span> <span class="label label-success">SMTP</span></td>
                    <td>pop.mindspring.com</td>
                    <td>110</td>
                    <td>smtpauth.earthlink.net</td>
                    <td>587</td>
                </tr>
                <tr class="gradeA">
                    <td>EarthLink onemain.com</td>
                    <td>POP3</td>
                    <td class="center-me"><span class="label label-success">POP3</span> <span class="label label-success">SMTP</span></td>
                    <td>pop.onemain.com</td>
                    <td>110</td>
                    <td>smtpauth.earthlink.net</td>
                    <td>587</td>
                </tr>
                <tr class="gradeA">
                    <td>IServ</td>
                    <td>POP3</td>
                    <td class="center-me"><span class="label label-success">POP3</span> <span class="label label-danger">SMTP</span></td>
                    <td>mail.iserv.net</td>
                    <td>993</td>
                    <td>mail.iserv.net</td>
                    <td>25</td>
                </tr>
                <tr class="gradeA">
                    <td>Juno</td>
                    <td>POP3</td>
                    <td class="center-me"><span class="label label-danger">POP3</span> <span class="label label-danger">SMTP</span></td>
                    <td>pop.juno.com</td>
                    <td>110</td>
                    <td>smtp.juno.com</td>
                    <td>25</td>
                </tr>
    			<tr class="gradeA">
                    <td>1&amp;1 1and1.com</td>
                    <td>IMAP</td>
                    <td class="center-me"><span class="label label-success">IMAP</span> <span class="label label-success">SMTP</span></td>
                    <td>imap.1and1.com</td>
                    <td>993 or 143</td>
                    <td>smtp.1and1.com</td>
                    <td>587 or 25</td>
                </tr>
    			<tr class="gradeA">
                    <td>1&amp;1 1and1.com</td>
                    <td>POP3</td>
                    <td class="center-me"><span class="label label-success">POP3</span> <span class="label label-success">SMTP</span></td>
                    <td>pop.1and1.com</td>
                    <td>995 or 110</td>
                    <td>smtp.1and1.com</td>
                    <td>587 or 25</td>
                </tr>
                <tr class="gradeA">
                    <td>1&amp;1 Deutschland</td>
                    <td>POP3</td>
                    <td class="center-me"><span class="label label-success">POP3</span> <span class="label label-success">SMTP</span></td>
                    <td>pop.1und1.de</td>
                    <td>995</td>
                    <td>smtp.1und1.de</td>
                    <td>587</td>
                </tr>
                <tr class="gradeA">
                    <td>BT Connect</td>
                    <td>POP3</td>
                    <td class="center-me"><span class="label label-danger">POP3</span> <span class="label label-danger">SMTP</span></td>
                    <td>pop3.btconnect.com</td>
                    <td>110</td>
                    <td>mail.btconnect.com</td>
                    <td>25</td>
                </tr>
                <tr class="gradeA">
                    <td>BT Openworld</td>
                    <td>POP3</td>
                    <td class="center-me"><span class="label label-danger">POP3</span> <span class="label label-danger">SMTP</span></td>
                    <td>mail.btopenworld.com</td>
                    <td>110</td>
                    <td>mail.btopenworld.com</td>
                    <td>25</td>
                </tr>
                <tr class="gradeA">
                    <td>BT Internet</td>
                    <td>POP3</td>
                    <td class="center-me"><span class="label label-danger">POP3</span> <span class="label label-danger">SMTP</span></td>
                    <td>mail.btinternet.com</td>
                    <td>110</td>
                    <td>mail.btinternet.com</td>
                    <td>25</td>
                </tr>
                <tr class="gradeA">
                    <td>T-Online Deutschland</td>
                    <td>POP3</td>
                    <td class="center-me"><span class="label label-danger">POP3</span> <span class="label label-danger">SMTP</span></td>
                    <td>securepop.t-online.de</td>
                    <td>995</td>
                    <td>securesmtp.t-online.de</td>
                    <td>587</td>
                </tr>
                <tr class="gradeA">
                    <td>Orange</td>
                    <td>POP3</td>
                    <td class="center-me"><span class="label label-danger">POP3</span> <span class="label label-danger">SMTP</span></td>
                    <td>pop.orange.net</td>
                    <td>110</td>
                    <td>smtp.orange.net</td>
                    <td>25</td>
                </tr>
                <tr class="gradeA">
                    <td>NetZero</td>
                    <td>POP3</td>
                    <td class="center-me"><span class="label label-danger">POP3</span> <span class="label label-danger">SMTP</span></td>
                    <td>pop.netzero.net</td>
                    <td>110</td>
                    <td>smtp.netzero.net</td>
                    <td>25</td>
                </tr>
                <tr class="gradeA">
                    <td>NVBell Yahoo</td>
                    <td>POP3</td>
                    <td class="center-me"><span class="label label-success">POP3</span> <span class="label label-success">SMTP</span></td>
                    <td>pop.att.yahoo.com</td>
                    <td>995</td>
                    <td>smtp.att.yahoo.com</td>
                    <td>465</td>
                </tr>
                <tr class="gradeA">
                    <td>PacBell Yahoo</td>
                    <td>POP3</td>
                    <td class="center-me"><span class="label label-success">POP3</span> <span class="label label-success">SMTP</span></td>
                    <td>pop.att.yahoo.com</td>
                    <td>995</td>
                    <td>smtp.att.yahoo.com</td>
                    <td>465</td>
                </tr>
                <tr class="gradeA">
                    <td>O2 Online Deutschland</td>
                    <td>POP3</td>
                    <td class="center-me"><span class="label label-danger">POP3</span> <span class="label label-danger">SMTP</span></td>
                    <td>pop.o2online.de</td>
                    <td>110</td>
                    <td>mail.o2online.de</td>
                    <td>25</td>
                </tr>
                <tr class="gradeA">
                    <td>Orange.uk</td>
                    <td>POP3</td>
                    <td class="center-me"><span class="label label-danger">POP3</span> <span class="label label-danger">SMTP</span></td>
                    <td>pop.orange.co.uk</td>
                    <td>110</td>
                    <td>smtp.orange.co.uk</td>
                    <td>25</td>
                </tr>
                <tr class="gradeA">
                    <td>Wanadoo UK</td>
                    <td>POP3</td>
                    <td class="center-me"><span class="label label-danger">POP3</span> <span class="label label-danger">SMTP</span></td>
                    <td>pop.wanadoo.co.uk</td>
                    <td>110</td>
                    <td>smtp.wanadoo.co.uk</td>
                    <td>25</td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <th>Provider</th>
                    <th>Protocol</th>
                    <th>SSL or TLS Enabled</th>
                    <th>Incoming Mail Server</th>
                    <th>Incoming Port</th>
                    <th>Outgoing Mail Server</th>
                    <th>Outgoing Port</th>
                </tr>
            </tfoot>
        </table>
    </div>
<?php require_once '../footer.php'; ?>