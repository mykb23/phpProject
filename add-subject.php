<?php
    require_once 'connection.php';
	require_once 'key.php';
    require_once 'templates/head.php';
?>
<body>
    <div class="container-fluid">
        <h3 class="mb-3 text-white">Create A New Subject</h3>
        <div class="row">
                <div class="col-lg-12 mb-2">
                    <form action="add-subject-process.php" class="p-1" method="POST">
                        <div class="form-group">
                            <label for="labelCourse">Course</label>
                            <input type="text" class="form-control" name="course" id="labelCourse" placeholder="Course">
                        </div>
                        <div class="form-group">
                            <label for="labelCode" class="label-material">Course Code</label>
                            <input type="text" class="form-control " name="code" id="labelCode" placeholder="Course Code">
                        </div>
                        <div class="form-group">
                            <label for="labelScore" class="label-material">Score</label>
                            <input type="text" class="form-control " name="score" id="labelScore" placeholder="Score">
                        </div>
                        <button type="submit" name="send" class="btn btn-info">Create</button>
                    </form>
                </div>
        </div>
    </div>
</body>