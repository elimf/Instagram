<?php
$title = "Creating";
ob_start() ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h2>Add a post efficiently!</h2>

        </div>
        <div class="col-12">

            <?php require __DIR__ . '/../partials/result/postResult.php' ?>
        </div>
        <div class="col-12">
            <form method="post" class="row" action="/actions/post.php">
                <div class="col-12">
                    <div class="field">
                        <label>Location</label>
                        <input type="text" id="exampleInputEmail1" name="post_location" placeholder="Choose a description">
                    </div>
                </div>
                <div class="col-6">
                    <div class="field">
                        <label for="exampleInputPassword1">Enter your url *</label>
                        <input type="text" name="post_picture" placeholder="Url please">
                    </div>
                </div>

                <div class="col-6">
                    <!-- Prévisualisation de l'image -->
                    <div class="field">
                        <label>Image Preview</label>
                        <div id="imagePreview"></div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="field">
                        <textarea name="post_caption" rows="3" placeholder="Enter a caption for the image "></textarea>
                    </div>
                </div>

                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
            <div class="col-12 mt-5">
                <a href="/?Home"><button class="btn btn-dark">Back to the home</button></a>
            </div>
        </div>


    </div>
</div>

<script>
    const imageInput = document.querySelector('input[name="post_picture"]');
    const imagePreview = document.getElementById('imagePreview');

    imageInput.addEventListener('input', () => {
        const imageUrl = imageInput.value;
        imagePreview.innerHTML = imageUrl ? `<img src="${imageUrl}" alt="Image Preview" style="max-width: 100%;">` : '';
    });
</script>

<?php $content = ob_get_clean(); ?>