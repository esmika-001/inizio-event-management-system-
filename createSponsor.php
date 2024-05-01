<?php
require_once 'classes/Sponsor.php';
require_once 'classes/SponsorTableGateway.php';
require_once 'classes/Connection.php';
require_once 'validateSponsor.php';

$formdata = array();
$errors = array();

validateSponsor(INPUT_POST, $formdata, $errors);

if (empty($errors)) {
    $sponsorName = $formdata['Name'];
    $sponsorAddress = $formdata['Address'];    
    $managerFName = $formdata['ManagerFName'];
    $managerLName = $formdata['ManagerLName'];
    $managerEmail = $formdata['ManagerEmail'];
    $phoneNumber = $formdata['PhoneNumber'];

    $sponsor = new Sponsor(-1, $sponsorName, $sponsorAddress, $managerFName, $managerLName, $managerEmail, $phoneNumber);

    $connection = Connection::getInstance();

    $gateway = new SponsorTableGateway($connection);

    $id = $gateway->insert($sponsor);

    header('Location: homeIn.php');
} else {
    require 'createSponsorForm.php';
}
?>
