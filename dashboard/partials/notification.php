<?php if (isset($_GET['success']) && !empty($_GET['success'])) : ?>
    <div class="row mt-3">
        <div class="alert alert-success">
            <?php if ($_GET['success'] == "profilecreated") : ?>
                <p class="mb-0 fs-3 fw-bold text-center">Profile Created Successfully</p>
            <?php endif ?>


            <?php if ($_GET['success'] == "loggedin") : ?>
                <p class="mb-0 fs-3 fw-bold text-center">Welcome Back!</p>
            <?php endif ?>


            <?php if ($_GET['success'] == "saved" && $_GET['type'] == "survey") : ?>
                <p class="mb-0 fs-3 fw-bold text-center">Survey Created Successfully</p>
            <?php endif ?>

            <?php if ($_GET['success'] == "updated" && $_GET['type'] == "survey") : ?>
                <p class="mb-0 fs-3 fw-bold text-center">Survey Updated Successfully</p>
            <?php endif ?>


            <?php if ($_GET['success'] == "deleted" && $_GET['type'] == "survey") : ?>
                <p class="mb-0 fs-3 fw-bold text-center">Survey Deleted Successfully</p>
            <?php endif ?>

            <?php if ($_GET['success'] == "saved" && $_GET['type'] == "question") : ?>
                <p class="mb-0 fs-3 fw-bold text-center">Question Created Successfully</p>
            <?php endif ?>
            
            
        </div>
    </div>
<?php endif ?>




<?php if (isset($_GET['error']) && !empty($_GET['error'])) : ?>
    <div class="row mt-3">
        <div class="alert alert-danger">
            <?php if ($_GET['error'] == "emptyfield") : ?>
                <p class="mb-0 fs-5 fw-bold text-center">Please fill all required fields</p>
            <?php endif ?>

            <?php if ($_GET['error'] == "notcreated") : ?>
                <p class="mb-0 fs-5 fw-bold text-center">Email Address already exist!</p>
            <?php endif ?>

            <?php if ($_GET['error'] == "profilenotcreated") : ?>
                <p class="mb-0 fs-5 fw-bold text-center">Sorry! Profile not created please try again!</p>
            <?php endif ?>

            <?php if ($_GET['error'] == "usernameexists") : ?>
                <p class="mb-0 fs-5 fw-bold text-center">Sorry! Username not available</p>
            <?php endif ?>

            <?php if ($_GET['error'] == "updatenotallowed" && $_GET['type'] == "survey") : ?>
                <p class="mb-0 fs-3 fw-bold text-center">You cannot update a published survey!</p>
            <?php endif ?>

            <?php if ($_GET['error'] == "deletenotallowed" && $_GET['type'] == "survey") : ?>
                <p class="mb-0 fs-3 fw-bold text-center">You cannot delete a published survey!</p>
            <?php endif ?>

            <?php if ($_GET['error'] == "savefailed" && $_GET['type'] == "survey") : ?>
                <p class="mb-0 fs-3 fw-bold text-center">Survey Not Saved!</p>
            <?php endif ?>

            <?php if ($_GET['error'] == "deletefailed" && $_GET['type'] == "survey") : ?>
                <p class="mb-0 fs-3 fw-bold text-center">Survey Delete Failed!</p>
            <?php endif ?>

            <?php if ($_GET['error'] == "savefailed" && $_GET['type'] == "question") : ?>
                <p class="mb-0 fs-3 fw-bold text-center">Question Not Saved!</p>
            <?php endif ?>

            <?php if ($_GET['error'] == "updatenotallowed" && $_GET['type'] == "question") : ?>
                <p class="mb-0 fs-3 fw-bold text-center">You cannot update the question a published survey!</p>
            <?php endif ?>

        </div>
    </div>
<?php endif ?>