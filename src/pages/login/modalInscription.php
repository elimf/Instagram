<div class="container">
    <div class="row mb-4">
        <div class="col text-center">
            <a
                href="#"
                class="btn btn-secondary"
                data-toggle="modal"
                data-target="#largeModal"
                >S'inscrire</a
            >
        </div>
    </div>

    <!-- large modal -->
    <div
        class="modal fade"
        id="largeModal"
        tabindex="-1"
        role="dialog"
        aria-labelledby="basicModal"
        aria-hidden="true"
    >
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Inscription</h4>
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
                     <form method="post" action="/actions/signup.php">
                            <div class="form-group ">
                                <label for="">Your name</label>
                                <input type="text" class="form-control" class="form-control" name="name" placeholder="Write your name ">
                            
                            </div>
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="text" class="form-control" class="form-control" name="email" placeholder="Write your email">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Your Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Write your Password">
                            </div>
                            <button type="submit" class="btn btn-primary">Sign up</button>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
