<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Event Registration</title>
    <?php require 'utils/styles.php'; ?>
    <?php require 'utils/scripts.php'; ?>
</head>
<body>
    <?php require 'utils/header.php'; ?>
    <div class="content">
        <div class="container">
        <div class="row">
                <section>
                    <div class="container">
                    <h1>Event Details</h1>
            <div class="container">
            <div class="col-md-12">
                <hr>
            </div>
        </div>
                        <div class="col-md-4">
                            <img src="images/arman.jpg" class="img-responsive"><!-- Replace with Armaan Malik image -->
                        </div>
                        <div class="modal fade" id="armamalik" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel">Armaan Malik Live</h4>
                                    </div>
                                    <div class="row">
                                        <div class="modal-body">
                                            <div class="col-md-6">
                                                <img src="images/arman.jpg" class="img-responsive"><!-- Replace with Armaan Malik image -->
                                            </div>
                                            <div class="modaltext1 col-md-6">
                                                <h4>Armaan Malik Live Concert</h4>
                                                <p>
                                                    Experience the electrifying beats and soul-stirring melodies at our upcoming concert, where music transcends boundaries and memories are made. Join us for a night of unforgettable performances and camaraderie under the stars.
                                                </p>
                                                <h5>Event Details</h5>
                                                <ul>
                                                    <li><strong>Event Time:</strong> 23 May 2024</li>
                                                    <li><strong>Event Duration:</strong> 4 hours</li>
                                                    <li><strong>Venue:</strong> Vienna Convention</li>
                                                    <li><strong>Registration Fees:</strong> 20,000 INR</li>
                                                    <li><strong>Age groups allowed:</strong> Any Age</li>
                                                    <li><strong>Event ID:</strong> arman24</li>
                                                </ul>
                                                <h5>Owner Details:</h5>
                                                <p>
                                                    Owner: XYZ Entertainment<br>
                                                    Phone Number: +91-9876543210<br>
                                                    Email: info@xyzentertainment.com<br>
                                                    Address: 123 Entertainment Lane, Mumbai
                                                </p>
                                            </div> 
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default closebtn" data-dismiss="modal">Close</button><p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="subcontent col-md-8">
                            <h1 class="title">Armaan Malik Live</h1>
                            <p class="location">Bollywood, Pop, Regional | Telugu, Hindi | 4hrs</p>
                            <p class="definition">
                                Experience the electrifying beats and soul-stirring melodies at our upcoming concert, where music transcends boundaries and memories are made. Join us for a night of unforgettable performances and camaraderie under the stars.
                            </p>
                            <hr class="customline3">   
                            <button type="button" class="btn btn-default btn-md" data-toggle="modal" data-target="#armamalik">
                                More Details  <span class="glyphicon glyphicon-new-window" aria-hidden="true"></span> 
                            </button>
                        </div>
                    </div>
                </section>
            </div>
            <div class="container">
            <div class="col-md-12">
                <hr>
            </div>
        </div>

            <h1>Event Registration</h1>
            <div class="container">
            <div class="col-md-12">
                <hr>
            </div>
        </div>
            
            <form action="registerEvent.php" method="POST" class="form-horizontal">
                <div class="form-group">
                    <label for="Name" class="col-md-2 control-label">Name</label>
                    <div class="col-md-5">
                        <input type="text" class="form-control" id="Name" name="Name" required />
                    </div>
                </div>
                <div class="form-group">
                    <label for="Email" class="col-md-2 control-label">Email</label>
                    <div class="col-md-5">
                        <input type="email" class="form-control" id="Email" name="Email" required />
                    </div>
                </div>
                <div class="form-group">
                    <label for="Phone" class="col-md-2 control-label">Phone</label>
                    <div class="col-md-5">
                        <input type="text" class="form-control" id="Phone" name="Phone" required />
                    </div>
                </div>
                <div class="form-group">
                    <label for="EventID" class="col-md-2 control-label">Event ID</label>
                    <div class="col-md-5">
                        <input type="text" class="form-control" id="EventID" name="EventID" required />
                    </div>
                </div>
                <div class="form-group">
                    <label for="Comments" class="col-md-2 control-label">Comments</label>
                    <div class="col-md-5">
                        <textarea class="form-control" id="Comments" name="Comments" rows="3"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-offset-2 col-md-10">
                        <button type="submit" class="btn btn-default">Register</button>
                        <a class="btn btn-default" href="viewEvents.php">Cancel</a>
                    </div>
                </div>
            </form>
        </div>
        <div class="container">
            <div class="col-md-12">
                <hr>
            </div>
        </div>

        <?php require 'utils/footer.php'; ?>

        
        
