<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="boot/css/bootstrap.min.css" type="text/css">
        <script src="boot/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="boot/js/jquery-3.2.1.min.js" type="text/javascript"></script> 
    
    <style>
    input.numbox{
                width:30px;
                height:20px;
                }
    textarea.mainbox{
                    width:200px;
                    height:100px;
                    font-size:30;
                    font-weight:bold;
                    }
    </style>
    </head>
<body>
    <div class="navbar navbar-inverse" style="padding:0; margin:0;"> 
    </div>
    <div>    
        <p><h3><a href="selection.php">Sort-By</a><span class="glyphicon glyphicon-sort"></span></h3></p>
    </div>
    <div style="padding-top:100px; padding-bottom:100px;">
            <center>
                <h1>Add-Camp</h1>
                <div class="row">
                    <div class="col-lg-9">
                        <div style="padding-left:200px; margin-left:200px;">
                            <form action = "send_post.php" method="post">
                                <div class="form-group">
                                    <input type="text" placeholder="Camp Name" name="name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="text" placeholder="Camp City" name="campcity" class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="date" placeholder="Camp Date" name="campdate" class="form-control">
                                </div>
                                <div class="form-group">
                                    <select name = "type" class="form-control">
                                        <option value = "Educational">Educational</option>
                                        <option value = "GovtMininstries">Government Ministries</option>
                                        <option value = "Social">Social</option>
                                        <option value = "Commercial">Commercial</option>
                                        <option value = "Bank">Banks</option>
                                        <option value = "Hotels">Hotels</option>
                                        <option value = "Services">Services</option>
                                        <option value = "State Branches">State Brances</option>
                                        <option value = "Political camps">Political Camps</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="text"  placeholder="Camp expected turnout" name="one" class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="text" placeholder="Camp turnout" name="two" class="form-control">
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-default btn-block btn-primary">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </center>
	           </form>
        </div>
</body>
</html>
