<?php
$fileName = 'dns';
require_once '../header.php';
?>
	<div class="main-content scroll-content">
		<h3>Public DNS Server Datatable <span class="label label-info">Updated March 2014</span></h3>
		<small>by Conner Bernhard</small>
		<br><br>
		<table class="table table-bordered responsive">
			<thead>
				<tr>
					<th class="th-15">Provider</th>
					<th class="th-10">Type</th>
					<th>Server Location</th>
					<th>IPv4 Primary DNS Server</th>
					<th>IPv4 Secondary DNS Server</th>
					<th>IPv6 Primary DNS Server</th>
					<th>IPv6 Secondary DNS Server</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Google</td>
					<td class="center-me"><span class="label label-success">IPv4</span> <span class="label label-success">IPv6</span></td>
					<td>Mountion View CA, US</td>
					<td>8.8.8.8</td>
					<td>8.8.4.4</td>
					<td>2001:4860:4860::8888</td>
					<td>2001:4860:4860::8844</td>
				</tr>
				<tr>
					<td>Level3</td>
					<td class="center-me"><span class="label label-success">IPv4</span> <span class="label label-warning">IPv6</span></td>
					<td>Long Beach CA, US</td>
					<td>209.244.0.3</td>
					<td>209.244.0.4</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>OpenDNS</td>
					<td class="center-me"><span class="label label-success">IPv4</span> <span class="label label-warning">IPv6</span></td>
					<td>San Francisco CA, US</td>
					<td>208.67.222.222</td>
					<td>208.67.220.220</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>Comodo Secure</td>
					<td class="center-me"><span class="label label-success">IPv4</span> <span class="label label-warning">IPv6</span></td>
					<td>Louisville KY, US</td>
					<td>8.26.56.26</td>
					<td>8.20.247.20</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>DNS Advantage</td>
					<td class="center-me"><span class="label label-success">IPv4</span> <span class="label label-warning">IPv6</span></td>
					<td>Sterling VA, US</td>
					<td>156.154.70.1</td>
					<td>156.154.71.1</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>Norton ConnectSafe</td>
					<td class="center-me"><span class="label label-success">IPv4</span> <span class="label label-warning">IPv6</span></td>
					<td>Cupertino CA, US</td>
					<td>199.85.126.10</td>
					<td>199.85.127.10</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>Verizon</td>
					<td class="center-me"><span class="label label-success">IPv4</span> <span class="label label-warning">IPv6</span></td>
					<td>Routes to Level3 Nodes</td>
					<td>4.2.2.1</td>
					<td>4.2.2.2</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>GreenTeam</td>
					<td class="center-me"><span class="label label-success">IPv4</span> <span class="label label-warning">IPv6</span></td>
					<td>Or Yehuda Israel, Asia</td>
					<td>81.218.119.11</td>
					<td>209.88.198.133</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>SafeDNS</td>
					<td class="center-me"><span class="label label-success">IPv4</span> <span class="label label-warning">IPv6</span></td>
					<td>Russia, EU</td>
					<td>195.46.39.39</td>
					<td>195.46.39.40</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>OpenNIC</td>
					<td class="center-me"><span class="label label-success">IPv4</span> <span class="label label-warning">IPv6</span></td>
					<td>Denver CO, US</td>
					<td>216.87.84.211</td>
					<td>23.90.4.6</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>Public-Root</td>
					<td class="center-me"><span class="label label-success">IPv4</span> <span class="label label-warning">IPv6</span></td>
					<td>Des Moines IA, US</td>
					<td>199.5.157.131</td>
					<td>208.71.35.137</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>SmartViper</td>
					<td class="center-me"><span class="label label-success">IPv4</span> <span class="label label-warning">IPv6</span></td>
					<td>Tampa FL, US</td>
					<td>208.76.50.50</td>
					<td>208.76.51.51</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>Dyn</td>
					<td class="center-me"><span class="label label-success">IPv4</span> <span class="label label-warning">IPv6</span></td>
					<td>Manchester NH, US</td>
					<td>216.146.35.35</td>
					<td>216.146.36.36</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>CensurFridns.dk</td>
					<td class="center-me"><span class="label label-success">IPv4</span> <span class="label label-success">IPv6</span></td>
					<td>Copenhagen Denmark, EU</td>
					<td>89.233.43.71</td>
					<td>89.104.194.142</td>
					<td>2002:d596:2a92:1:71:53::</td>
					<td>2002:5968:c28e::53</td>
				</tr>
				<tr>
					<td>Hurricane Electric</td>
					<td class="center-me"><span class="label label-success">IPv4</span> <span class="label label-success">IPv6</span></td>
					<td>Fremont CA, US</td>
					<td>74.82.42.42</td>
					<td></td>
					<td>2001:470:20::2</td>
					<td></td>
				</tr>
				<tr>
					<td>puntCAT</td>
					<td class="center-me"><span class="label label-success">IPv4</span> <span class="label label-success">IPv6</span></td>
					<td>Barcelona Spain, EU</td>
					<td>109.69.8.51</td>
					<td></td>
					<td>2a00:1508:0:4::9</td>
					<td></td>
				</tr>
			</tbody>
		</table>
	</div>
<?php require_once '../footer.php'; ?>