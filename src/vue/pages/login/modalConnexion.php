<div class="container">
    <div class="row mb-4">
        <div class="col text-center">
            <a
                href="#"
                class="btn btn-primary"
                data-toggle="modal"
                data-target="#connected"
                >Se connecter</a
            >
        </div>
    </div>

    <!-- large modal -->
    <div
        class="modal fade"
        id="connected"
        tabindex="-1"
        role="dialog"
        aria-labelledby="basicModal"
        aria-hidden="true"
    >
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Connexion</h4>
                    <button
                        type="button"
                        class="close"
                        data-dismiss="modal"
                        aria-label="Close"
                    >
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                   <form method="post" action="/actions/login.php">
                            <div class="form-group ">
                                <div class="col-3">
                                    <label for="">Your Email</label>
                                </div>
                                
                                <input type="text" class="form-control" class="form-control" name="email" placeholder="Write your email ">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>
                            <div class="form-group">
                                <div class="col-3">
                                     <label for="">Password</label>
                                </div>
                                <input type="password" class="form-control" class="form-control" name="password" placeholder="Write your password">
                            </div>
                            <button type="submit" class="btn btn-primary">Connect </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
