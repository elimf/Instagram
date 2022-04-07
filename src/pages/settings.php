<?php 
$title="Settings";

// Afficher tout les utilisateurs pour l'admin
        $sql ='SELECT * FROM `users` WHERE roles ="users"';
        $query = $db->prepare($sql);
        $query->execute([]);
        $listUsers = $query->fetchAll(PDO::FETCH_ASSOC);
        
ob_start() ?>
<?php if ($_SESSION['user']['roles']=="admin") { ?>
<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <!-- Button trigger modal -->
            <button
                type="button"
                class="btn btn-outline-info btn-lg float-left"
                data-toggle="modal"
                data-target="#exampleModal"
            >
                Settings Admin
            </button>

            <!-- Modal -->
            <div
                class="modal fade"
                id="exampleModal"
                tabindex="-1"
                aria-labelledby="exampleModalLabel"
                aria-hidden="true"
            >
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="exampleModalLabel">
                                Table of users
                            </h4>
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
                            <table class="table table-hover">
                                <thead>
                                    <?php foreach ($listUsers as $key =>
                                    $value) { ?>
                                    <tr>
                                        <th scope="col"><?= $value['id'] ?></th>
                                        <th scope="col">
                                            <?= $value['pseudo'] ?>
                                        </th>
                                        <th scope="col">
                                            <?= $value['email'] ?>
                                        </th>
                                    </tr>
                                </thead>
                                <?php  } ?>
                            </table>
                        </div>
                        <div class="modal-footer"></div>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
        <div class="col-12">
            <div class="tab">
                <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">Activity</button>
                <button class="tablinks" onclick="openCity(event, 'Paris')">Paris</button>
                <button class="tablinks" onclick="openCity(event, 'Tokyo')">Modifier le profil</button>
                </div>

                <div id="London" class="tabcontent">
                <h3>London</h3>
                <p>London is the capital city of England.</p>
                </div>

                <div id="Paris" class="tabcontent">
                <h3>Paris</h3>
                <p>Paris is the capital of France.</p> 
                </div>

                <div id="Tokyo" class="tabcontent">
                    <form action="" method="post">
                        <div class="form-group row">
                            		<div class="form-group">
                                        <label for="file">Choose a Image:</label>
                                        <input type="file" 
                                                    name="image" 
                                                    id="file">
                                    </div>
                                    
                                    <div class="preview">
                                        <!--UserName goes here-->
                                        <p id="username"> </p>
                                        <!--selected image goes here -->
                                        <img src="" 
                                                id="image" 
                                                width="250" 
                                                height="auto">
                                </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label"
                                >Email</label
                                >
                            <div class="col-sm-10">
                                <input
                                    type="email"
                                    class="form-control"
                                    id="inputEmail3"
                                    placeholder="Email"
                                    />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label"
                                >Password</label
                                >
                            <div class="col-sm-10">
                                <input
                                    type="password"
                                    class="form-control"
                                    id="inputPassword3"
                                    placeholder="Password"
                                    />
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Sign in</button>
                            </div>
                        </div>
                    </form>
                </div>

        </div>
    </div>  
</div>

    
<script>
    function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
    }

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();

</script>
   
<?php $content = ob_get_clean(); ?>