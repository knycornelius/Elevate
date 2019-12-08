<!DOCTYPE html>
<html>

<head>
    <?= $header; ?>
</head>

<body>
    <div class="breadcrumbs">
        <div class="container">
            <ol class="breadcrumb breadcrumb1 animated wow slideInLeft animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInLeft;">
                <li><a href="<?= base_url(' '); ?>"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
                <li><a href="<?= base_url('index.php/profile'); ?>">Profile</a></li>
                <li class="active">Edit Profile</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <?php echo $this->session->flashdata('message'); ?>
        </div>
    </div>
    <div class="profile">
        <div class="container">
            <?= form_open_multipart('profile/editprofile'); ?>
            <div class="row">
                <div class="col-lg-8">


                    <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="email" name="email" value="<?= $user['email'] ?>" readonly>
                            <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>


                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Full name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" name="name" value="<?= $user['name'] ?>">
                            <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>

                        </div>


                    </div>
                    <div class="form-group row">
                        <div class="col-sm-2">Picture</div>
                        <div class="col-sm-10">
                            <div class="row">
                                <div class="col-sm-3">
                                    <img src="<?= base_url('assets/images/profile/') . $user['image']; ?>" class="img-thumbnail">
                                </div>
                                <div class="col-sm-9">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="image" name="image">
                                        <label class="custom-file-label" for="image">Choose file</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row justify-content-end">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Edit</button>
                            </div>
                        </div>

                    </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <?= $footer; ?>
</body>

</html>