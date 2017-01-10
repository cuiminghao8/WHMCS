<?php
if (!defined("WHMCS"))
    die("This file cannot be accessed directly");

function geninvoices_config() {
    $configarray = array(
    "name" => "Geninvoices",
    "description" => "此插件可让用户自行创建续费账单",
    "version" => "1.0",
    "author" => "<a href=\"http://yzs.me\" target=\"_blank\" title=\"微宇宙\">Extreme</a>",
    "language" => "english",
    "fields" => array(
        #"option1" => array ("FriendlyName" => "Option1", "Type" => "text", "Size" => "25", "Description" => "Textbox", "Default" => "Example", ),
        #"option2" => array ("FriendlyName" => "Option2", "Type" => "password", "Size" => "25", "Description" => "Password", ),
        #"option3" => array ("FriendlyName" => "Option3", "Type" => "yesno", "Size" => "25", "Description" => "Sample Check Box", ),
        #"option4" => array ("FriendlyName" => "Option4", "Type" => "dropdown", "Options" => "1,2,3,4,5", "Description" => "Sample Dropdown", "Default" => "3", ),
        #"option5" => array ("FriendlyName" => "Option5", "Type" => "radio", "Options" => "Demo1,Demo2,Demo3", "Description" => "Radio Options Demo", ),
        #"option6" => array ("FriendlyName" => "Option6", "Type" => "textarea", "Rows" => "3", "Cols" => "50", "Description" => "Description goes here", "Default" => "Test", ),
    ));
    return $configarray;
}

function geninvoices_activate() {

    # Create Custom DB Table
    #$query = "CREATE TABLE `mod_addonexample` (`id` INT( 1 ) NOT NULL AUTO_INCREMENT PRIMARY KEY ,`demo` TEXT NOT NULL )";
    #$result = full_query($query);

    # Return Result
    return array('status'=>'success','description'=>'插件激活成功。');
    #return array('status'=>'error','description'=>'You can use the error status return to indicate there was a problem activating the module');
    #return array('status'=>'info','description'=>'You can use the info status return to display a message to the user');

}

function geninvoices_deactivate() {

    # Remove Custom DB Table
    #$query = "DROP TABLE `mod_addonexample`";
    #$result = full_query($query);

    # Return Result
    return array('status'=>'success','description'=>'插件停用成功。');
    #return array('status'=>'error','description'=>'If an error occurs you can return an error message for display here');
    #return array('status'=>'info','description'=>'If you want to give an info message to a user you can return it here');

}

function geninvoices_clientarea($vars) {

if($_POST['geninvoiceitem']) {
 $command = "geninvoices";
 $adminuser = "";
 $values["clientid"] = $_SESSION['uid'];
 $values["serviceids"] = $_POST['geninvoiceitem'];
 
 $results = localAPI($command,$values,$adminuser);
if($results['result'] == 'success') {
 	$geninvoicelatestinvoiceid = $results['latestinvoiceid'];
 	if ($geninvoicelatestinvoiceid == "0") {
 		$geninvoicereturn = "<div class=\"alert alert-danger\" role=\"alert\">您所选择的服务目前无法创建续费账单。</div>";
 	} else {
 		$geninvoicereturn = "<div class=\"alert alert-success\" role=\"alert\">已成功为您所选的服务创建<a href=\"/viewinvoice.php?id=$geninvoicelatestinvoiceid\" target=\"_blank\" title=\"账单 $geninvoicelatestinvoiceid\">账单 #$geninvoicelatestinvoiceid</a></div>";
 	}
	#print_r($results);	
}
	
}

$command = "getclientsproducts";
$adminuser = "";
$values["clientid"] = $_SESSION['uid'];
 
$results = localAPI($command,$values,$adminuser);
#print_r($results);
$productlist = "<form method=\"post\"><table class=\"table\">
      <thead>
        <tr>
          <th>服务ID</th>
          <th>服务名称</th>
          <th>域名</th>
          <th>创建时间</th>
          <th>到期时间</th>
          <th>续费价格</th>
          <th>创建续费账单</th>
        </tr>
      </thead>
      <tbody>";
foreach($results['products']['product'] as $producedetails) {
	if ($producedetails['status'] == "Active") {
	$serviceid = $producedetails['id'];
	$servicename = $producedetails['name'];
	$servicedomain = $producedetails['domain'];
	$serviceregdate = $producedetails['regdate'];
	$servicenextduedate = $producedetails['nextduedate'];
	$servicerecurringamount = $producedetails['recurringamount'];
	$productlist .= "        <tr>
          <td>$serviceid</td>
          <td>$servicename</td>
          <td>$servicedomain</td>
          <td>$serviceregdate</td>
          <td>$servicenextduedate</td>
          <td>$servicerecurringamount</td>
          <td><input type=\"checkbox\" name=\"geninvoiceitem[]\" value=\"$serviceid\"></td>
        </tr>";
        }
}
$productlist .= "</tbody>
    </table><p align=\"center\"><input class=\"btn btn-success\" type=\"submit\" value=\"创建续费账单\"></p></form>";

    return array(
        'pagetitle' => '创建续费账单',
        'breadcrumb' => array('index.php?m=Geninvoices'=>'Geninvoices'),
        'templatefile' => 'clienthome',
        'requirelogin' => true, # or false
        'vars' => array(
            'geninvoicereturn' => $geninvoicereturn,
            'productlist' => $productlist,
        ),
    );

}