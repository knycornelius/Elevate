<!DOCTYPE html>
<html>

<head>
    <?= $header ?>
</head>

<body>

    <div class="breadcrumbs">
        <div class="container">
            <ol class="breadcrumb breadcrumb1 animated wow slideInLeft animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInLeft;">
                <li><a href="<?= base_url(' '); ?>"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
                <li class="active">Profile</li>
            </ol>
        </div>
    </div>
    <div class="profile">
        <form method="" action="<?= base_url('profile/editprofile') ?>">
            <div class="container">
                <h3>User Profile</h3>
                <div class="row">
                    <div class="col-md-6 img">
                        <img src="<?= base_url('assets/images/profile/') . $user['image']; ?>" alt="" class="img-rounded">
                    </div>
                    <div class="col-md-6 details">
                        <blockquote>
                            <h5><?= $user['name']; ?></h5>
                            <small><?= $user['email']; ?></small>
                        </blockquote>
                        <p>
                            <?= "Member since " . date('d F Y', $user['date_created']); ?>
                        </p>
                        <button type="submit" class="btn btn-block"> Edit Profile </button>
                    </div>
                </div>
            </div>
        </form>
    </div> <?= $footer; ?>
</body>

</html>