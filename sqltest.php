

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Website</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.datatables.net/2.1.2/css/dataTables.dataTables.min.css" rel="stylesheet">
	
    <link rel="icon" href="./favicon.ico" type="image/x-icon">
  </head>
  <body>
    <main>
        <h1>Welcome to My Website</h1>  
    </main>
	
	
	<table id="example" class="display nowrap dataTable dtr-inline collapsed" style="width: 100%;" aria-describedby="example_info">
	  <colgroup>
		<col data-dt-column="0" style="width: 152.859px;">
		<col data-dt-column="1" style="width: 225.547px;">
		<col data-dt-column="2" style="width: 118.406px;">
		<col data-dt-column="3" style="width: 74.7188px;">
		<col data-dt-column="4" style="width: 119.422px;">
	  </colgroup>
	  <thead>
		<tr role="row">
		  <th data-dt-column="0" rowspan="1" colspan="1" class="dt-orderable-asc dt-orderable-desc dt-ordering-asc" aria-sort="ascending" aria-label="Name: Activate to invert sorting" tabindex="0">
			<span class="dt-column-title" role="button">Name</span>
			<span class="dt-column-order"></span>
		  </th>
		  <th data-dt-column="1" rowspan="1" colspan="1" class="dt-orderable-asc dt-orderable-desc" aria-label="Position: Activate to sort" tabindex="0">
			<span class="dt-column-title" role="button">Position</span>
			<span class="dt-column-order"></span>
		  </th>
		  <th data-dt-column="2" rowspan="1" colspan="1" class="dt-orderable-asc dt-orderable-desc" aria-label="Office: Activate to sort" tabindex="0">
			<span class="dt-column-title" role="button">Office</span>
			<span class="dt-column-order"></span>
		  </th>
		  <th data-dt-column="3" class="dt-body-right dt-type-numeric dt-orderable-asc dt-orderable-desc" rowspan="1" colspan="1" aria-label="Age: Activate to sort" tabindex="0">
			<span class="dt-column-title" role="button">Age</span>
			<span class="dt-column-order"></span>
		  </th>
		  <th data-dt-column="4" class="dt-body-right dt-right dt-orderable-asc dt-orderable-desc" rowspan="1" colspan="1" aria-label="Start date: Activate to sort" tabindex="0">
			<span class="dt-column-title" role="button">Start date</span>
			<span class="dt-column-order"></span>
		  </th>
		  <th data-dt-column="5" class="dt-body-right dt-type-numeric dt-orderable-asc dt-orderable-desc dtr-hidden" rowspan="1" colspan="1" aria-label="Salary: Activate to sort" tabindex="0" style="display: none;">
			<span class="dt-column-title" role="button">Salary</span>
			<span class="dt-column-order"></span>
		  </th>
		</tr>
	  </thead>
	  <tbody>
		<tr>
		  <td class="dtr-control sorting_1" tabindex="0">Airi Satou</td>
		  <td>Accountant</td>
		  <td>Tokyo</td>
		  <td class="dt-type-numeric dt-body-right">33</td>
		  <td class="dt-right dt-body-right">28/11/2008</td>
		  <td class="dt-type-numeric dt-body-right dtr-hidden" style="display: none;">$162,700</td>
		</tr>
		<tr>
		  <td class="sorting_1 dtr-control">Angelica Ramos</td>
		  <td>Chief Executive Officer (CEO)</td>
		  <td>London</td>
		  <td class="dt-type-numeric dt-body-right">47</td>
		  <td class="dt-right dt-body-right">09/10/2009</td>
		  <td class="dt-type-numeric dt-body-right dtr-hidden" style="display: none;">$1,200,000</td>
		</tr>
		<tr>
		  <td class="dtr-control sorting_1" tabindex="0">Ashton Cox</td>
		  <td>Junior Technical Author</td>
		  <td>San Francisco</td>
		  <td class="dt-type-numeric dt-body-right">66</td>
		  <td class="dt-right dt-body-right">12/01/2009</td>
		  <td class="dt-type-numeric dt-body-right dtr-hidden" style="display: none;">$86,000</td>
		</tr>
		<tr>
		  <td class="sorting_1 dtr-control">Bradley Greer</td>
		  <td>Software Engineer</td>
		  <td>London</td>
		  <td class="dt-type-numeric dt-body-right">41</td>
		  <td class="dt-right dt-body-right">13/10/2012</td>
		  <td class="dt-type-numeric dt-body-right dtr-hidden" style="display: none;">$132,000</td>
		</tr>
		<tr>
		  <td class="sorting_1 dtr-control">Brenden Wagner</td>
		  <td>Software Engineer</td>
		  <td>San Francisco</td>
		  <td class="dt-type-numeric dt-body-right">28</td>
		  <td class="dt-right dt-body-right">07/06/2011</td>
		  <td class="dt-type-numeric dt-body-right dtr-hidden" style="display: none;">$206,850</td>
		</tr>
		<tr>
		  <td class="dtr-control sorting_1" tabindex="0">Brielle Williamson</td>
		  <td>Integration Specialist</td>
		  <td>New York</td>
		  <td class="dt-type-numeric dt-body-right">61</td>
		  <td class="dt-right dt-body-right">02/12/2012</td>
		  <td class="dt-type-numeric dt-body-right dtr-hidden" style="display: none;">$372,000</td>
		</tr>
		<tr>
		  <td class="sorting_1 dtr-control">Bruno Nash</td>
		  <td>Software Engineer</td>
		  <td>London</td>
		  <td class="dt-type-numeric dt-body-right">38</td>
		  <td class="dt-right dt-body-right">03/05/2011</td>
		  <td class="dt-type-numeric dt-body-right dtr-hidden" style="display: none;">$163,500</td>
		</tr>
		<tr>
		  <td class="sorting_1 dtr-control">Caesar Vance</td>
		  <td>Pre-Sales Support</td>
		  <td>New York</td>
		  <td class="dt-type-numeric dt-body-right">21</td>
		  <td class="dt-right dt-body-right">12/12/2011</td>
		  <td class="dt-type-numeric dt-body-right dtr-hidden" style="display: none;">$106,450</td>
		</tr>
		<tr>
		  <td class="sorting_1 dtr-control">Cara Stevens</td>
		  <td>Sales Assistant</td>
		  <td>New York</td>
		  <td class="dt-type-numeric dt-body-right">46</td>
		  <td class="dt-right dt-body-right">06/12/2011</td>
		  <td class="dt-type-numeric dt-body-right dtr-hidden" style="display: none;">$145,600</td>
		</tr>
		<tr>
		  <td class="dtr-control sorting_1" tabindex="0">Cedric Kelly</td>
		  <td>Senior Javascript Developer</td>
		  <td>Edinburgh</td>
		  <td class="dt-type-numeric dt-body-right">22</td>
		  <td class="dt-right dt-body-right">29/03/2012</td>
		  <td class="dt-type-numeric dt-body-right dtr-hidden" style="display: none;">$433,060</td>
		</tr>
	  </tbody>
	  <tfoot>
		<tr role="row">
		  <th data-dt-column="0" rowspan="1" colspan="1">
			<span class="dt-column-title">Name</span>
		  </th>
		  <th data-dt-column="1" rowspan="1" colspan="1">
			<span class="dt-column-title">Position</span>
		  </th>
		  <th data-dt-column="2" rowspan="1" colspan="1">
			<span class="dt-column-title">Office</span>
		  </th>
		  <th class="dt-body-right dt-type-numeric" data-dt-column="3" rowspan="1" colspan="1">
			<span class="dt-column-title">Age</span>
		  </th>
		  <th class="dt-body-right dt-right" data-dt-column="4" rowspan="1" colspan="1">
			<span class="dt-column-title">Start date</span>
		  </th>
		  <th class="dt-body-right dt-type-numeric dtr-hidden" data-dt-column="5" rowspan="1" colspan="1" style="display: none;">
			<span class="dt-column-title">Salary</span>
		  </th>
		</tr>
	  </tfoot>
	</table>
	
	
	
	
	
	
	
	
	
	
	
	<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<script src="https://cdn.datatables.net/2.1.2/js/dataTables.min.js"></script>
	
	<script type="text/javascript">
	
		$(document).ready( function () {
			$('#example')
				.addClass( 'nowrap' )
				.dataTable( {
					responsive: true,
					columnDefs: [
						{
							target: 4,
							render: DataTable.render.date(),
						},
						{
							target: 5,
							render: DataTable.render.number(null, null, 0, '$'),
						},
						{
							targets: [3, 4 ,5],
							className: 'dt-body-right'
						}
					]
				} );
		} );
	
	</script>
  </body>
</html>


<?php
/*
	// Variables to tune the retry logic.
	$connectionTimeoutSeconds = 30;  // Default of 15 seconds is too short over the Internet, sometimes.
	$maxCountTriesConnectAndQuery = 3;  // You can adjust the various retry count values.
	$secondsBetweenRetries = 4;  // Simple retry strategy.
	$errNo = 0;
	$serverName = "tcp:yourdatabase.database.windows.net,1433";
	$connectionOptions = array("Database"=>"AdventureWorks",
	   "Uid"=>"yourusername", "PWD"=>"yourpassword", "LoginTimeout" => $connectionTimeoutSeconds);
	$conn = null;
	$arrayOfTransientErrors = array('08001', '08002', '08003', '08004', '08007', '08S01');
	for ($cc = 1; $cc <= $maxCountTriesConnectAndQuery; $cc++) {
		// [A.2] Connect, which proceeds to issue a query command.
		$conn = sqlsrv_connect($serverName, $connectionOptions);
		if ($conn === true) {
			echo "Connection was established";
			echo "<br>";

			$tsql = "SELECT Name FROM Production.ProductCategory";
			$stmt = sqlsrv_query($conn, $tsql);
			if ($stmt === false) {
				echo "Error in query execution";
				echo "<br>";
				die(print_r(sqlsrv_errors(), true));
			}
			while($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
				echo $row['Name'] . "<br/>" ;
			}
			sqlsrv_free_stmt($stmt);
			sqlsrv_close( $conn);
			break;
		} else {
			// [A.4] Check whether the error code is on the list of allowed transients.
			$isTransientError = false;
			$errorCode = '';
			if (($errors = sqlsrv_errors()) != null) {
				foreach ($errors as $error) {
					$errorCode = $error['code'];
					$isTransientError = in_array($errorCode, $arrayOfTransientErrors);
					if ($isTransientError) {
						break;
					}
				}
			}
			if (!$isTransientError) {
				// it is a static persistent error...
				echo("Persistent error suffered with error code = $errorCode. Program will terminate.");
				echo "<br>";
				// [A.5] Either the connection attempt or the query command attempt suffered a persistent error condition.
				// Break the loop, let the hopeless program end.
				exit(0);
			}
			// [A.6] It is a transient error from an attempt to issue a query command.
			// So let this method reloop and try again. However, we recommend that the new query
			// attempt should start at the beginning and establish a new connection.
			if ($cc >= $maxCountTriesConnectAndQuery) {
				echo "Transient errors suffered in too many retries - $cc. Program will terminate.";
				echo "<br>";
				exit(0);
			}
			echo("Transient error encountered with error code = $errorCode. Program might retry by itself.");
			echo "<br>";
			echo "$cc attempts so far. Might retry.";
			echo "<br>";
			// A very simple retry strategy, a brief pause before looping.
			sleep(1*$secondsBetweenRetries);
		}
		// [A.3] All has gone well, so let the program end.
	}








// Using an access token to connect: do not use UID or PWD connection options
// Assume $accToken is the valid byte string extracted from an OAuth JSON response
/*
$connectionInfo = array("Database"=>$azureAdDatabase, "AccessToken"=>$accToken);
$conn = sqlsrv_connect($azureAdServer, $connectionInfo);
if ($conn === false) {
    echo "Could not connect with Azure AD Access Token.\n";
    print_r(sqlsrv_errors());
} else {
    echo "Connected successfully with Azure AD Access Token.\n";
    sqlsrv_close($conn);
}
*/
?>