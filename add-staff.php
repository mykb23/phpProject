<?php
    require_once 'connection.php';
	require_once 'key.php';
    require_once 'templates/head.php';
?>
<body>
    <div class="container-fluid">
        <h3 class="mb-3 text-white">Create A New Staff</h3>
        <div class="row">
                <div class="col-lg-12 mb-2">
                    <form action="add-staff-process.php" class="p-1" method="POST">
                        <div class="form-group">
                            <label for="labelEmail">Email</label>
                            <input type="email" class="form-control" name="mail" id="labelEmail" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="labelPassword" class="label-material">Password</label>
                            <input type="password" class="form-control " name="pass" id="labelPassword" placeholder="Password">
                        </div>
                        <button type="submit" name="send" class="btn btn-info">Create</button>
                    </form>
                </div>
        </div>
    </div>
</body>