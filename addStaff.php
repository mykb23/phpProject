<?php
    require_once './templates/head.php';
?>
<body>
    <div class="container-fluid">
        <div class="row">
            <h3 class="text-center p-2">Create A New Staff</h3>
                <div class="col-md-6 offset-md-6">
                    <form action="addStaff_process.php" class="form col-6 offset-3 p-1" method="POST">
                        <div class="form-group">
                            <label for="labelEmail">Email</label>
                            <input type="text" class="form-control" name="mail" id="labelEmail" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="labelPassword">Password</label>
                            <input type="text" class="form-control" name="pass" id="labelPassword" placeholder="Password">
                        </div>
                        <button type="submit" name="send" class="btn btn-primary">Submit</button>
                    </form>
                </div>
        </div>
    </div>
</body>