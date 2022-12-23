<?php require_once 'Views/Templates/header.php' ?>
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Usuarios</h1>
</div>
<!-- Modal trigger button -->
<button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#newUser">Nuevo</button>
<!-- Modal Body -->
<!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
<div class="modal fade" id="newUser" tabindex="-1" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTitleId">New user</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="post" id='frmUsuario'>
                    <div class="mb-3">
                        <label for="firstname" class="form-label">First name</label>
                        <input type="text" name="firstname" id="firstname" class="form-control" placeholder="First Name" aria-describedby="helpId">
                    </div>
                    <div class="mb-3">
                        <label for="lastname" class="form-label">Last name</label>
                        <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Last name" aria-describedby="helpId">
                    </div>
                    <div class="mb-3">
                        <label for="nickname" class="form-label">Nick name</label>
                        <input type="text" name="nickname" id="nickname" class="form-control" placeholder="Nick name" aria-describedby="helpId">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Email" aria-describedby="helpId">
                    </div>
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Password" aria-describedby="helpId">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="confirm" class="form-label">Confirm</label>
                            <input type="password" name="confirm" id="confirm" class="form-control" placeholder="Confirm paswword" aria-describedby="helpId">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="rol" class="form-label">Rol</label>
                        <select class="form-select" name="rol" id="rol">
                            <?php foreach ($data['roles'] as $rol) : ?>
                                <option value="<?= $rol['id_rol'] ?>"><?= $rol['nom_rol'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" onclick="registerUser(event)">Save</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<div class="table-responsive-xxl">
    <table class="table table-primary" id='tblUsuarios'>
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">First name</th>
                <th scope="col">Last name</th>
                <th scope="col">Nick name</th>
                <th scope="col">Email</th>
                <th scope="col">Rol</th>
                <th scope="col">Estado</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>



<?php require_once 'Views/Templates/footer.php' ?>