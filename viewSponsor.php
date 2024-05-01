<?php
require_once 'utils/functions.php';
require_once 'classes/Sponsor.php';
require_once 'classes/SponsorTableGateway.php';
require_once 'classes/Connection.php';

$connection = Connection::getInstance();
$gateway = new SponsorTableGateway($connection);

start_session();

if (!is_logged_in()) {
    header("Location: login_form.php");
    exit(); // Add exit() after redirection to stop further execution
}

$user = $_SESSION['user'];

// Handle search query
$searchName = isset($_GET['searchName']) ? $_GET['searchName'] : '';

if (!empty($searchName)) {
    $statement = $gateway->getSponsorByName($searchName);
} else {
    $statement = $gateway->getSponsors();
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title></title>
    <?php require 'utils/styles.php'; ?>
    <?php require 'utils/scripts.php'; ?>
</head>
<body>
    <?php require 'utils/header.php'; ?>
    <div class="content">
        <div class="container">
            <h1>Sponsors</h1>
            <!-- Search form -->
            <form method="GET" action="">
                <div class="form-group">
                    <label for="searchName">Search Sponsor:</label>
                    <input type="text" class="form-control" id="searchName" name="searchName" placeholder="Enter sponsor name">
                </div>
                <button type="submit" class="btn btn-primary">Search</button>
            </form>
            <div class="container">
                <div class="col-md-12">
                    <hr>
                </div>
            </div>

            <?php 
            if (isset($message)) {
                echo '<p>'.$message.'</p>';
            }
            ?>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>SponsorID</th>
                        <th>Name</th>
                        <th>Address</th>                    
                        <th>Manager First Name</th>
                        <th>Manager Last Name</th>
                        <th>Manager Email</th>
                        <th>Phone Number</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
                        echo '<tr>';
                        echo '<td>' . $row['SponsorID'] . '</td>';
                        echo '<td>' . $row['Name'] . '</td>';
                        echo '<td>' . $row['Address'] . '</td>';                    
                        echo '<td>' . $row['ManagerFName'] . '</td>';
                        echo '<td>' . $row['ManagerLName'] . '</td>';
                        echo '<td>' . $row['ManagerEmail'] . '</td>';
                        echo '<td>' . $row['PhoneNumber'] . '</td>';
                        echo '</tr>';
                    }
                    ?>
                </tbody>
            </table>
            <a class="btn btn-default" href="createSponsorForm.php">Add Sponsor</a>
        </div>
        <div class="container">
            <div class="col-md-12">
                <hr>
            </div>
        </div>
        <?php require 'utils/footer.php'; ?>
    </div>

</body>
</html>

