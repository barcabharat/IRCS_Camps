<html>
<head>
    <link rel="stylesheet" href="boot/css/bootstrap.min.css" type="text/css">
    <script src="boot/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="boot/js/jquery-3.2.1.min.js" type="text/javascript"></script> 
    
	<title>SelectSortOption</title>
</head>
<body>
    <div class="navbar navbar-inverse" style="padding:0; margin:0;"> 
    </div>
    <div style="padding-top:100px; padding-bottom:100px;">
            <center>
                <div class="row">
                    <div class="col-lg-6">
                        <div style="padding-left:350px; margin-left:200px;">
                            <form action = "sortby.php" method="post">
                                <div>
                                    <input type="text" placeholder="Sorting Value" name="sort" class="form-control"><br/>
                                </div>
                                <div>
                                    <input type="radio" name="sortoption" value="Greater than">Greater than<br/>
                                    <input type="radio" name="sortoption" value="Less than">Less than<br/>
                                 <div class="form-group">
                                    <button class="btn btn-default btn-block btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </center>
    </div>
</body>
</html>