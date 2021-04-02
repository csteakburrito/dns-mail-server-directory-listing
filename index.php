<?php
$fileName = 'index';
require_once 'header.php';
?>
	<div class="main-content homepage clearfix">
        <select id="cd-dropdown" class="cd-select clearfix">
            <option value="-1" selected>Choose Your Datatable</option>
            <option value="dns">DNS Datatable</option>
            <option value="email">Email Datatable</option>
        </select>
    </div>
<?php require_once 'footer.php'; ?>
