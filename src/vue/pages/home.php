<?php
$title = "Home";
//Affiche toutes les publications    
$sql = 'SELECT 
    P.id_publication,
    P.user_id AS utilisateur_id_publication,
    P.url_publication,
    U.*,
    P.legende,
    P.created_at AS date_publication,
    COUNT(DISTINCT L.id_like) AS number_pub_like,
    C.id_comment,
    C.contenu,
    C.created_at AS date_commentaire,
    COUNT(DISTINCT LC.id_like) AS nombre_likes_commentaire,
    UCU.pseudo 
FROM publication P
LEFT JOIN likes L ON P.id_publication = L.publication_id
LEFT JOIN comment C ON P.id_publication = C.publication_id
LEFT JOIN likes LC ON C.id_comment = LC.comment_id
LEFT JOIN users U ON P.user_id = U.id_user
LEFT JOIN comment UC ON U.id_user= UC.user_id
LEFT JOIN users UCU ON UC.user_id = UCU.id_user
GROUP BY P.id_publication, C.id_comment
ORDER BY P.id_publication, C.id_comment;

 ';
$query = $db->prepare($sql);
$query->execute([]);
$listPost = $query->fetchAll(PDO::FETCH_ASSOC);
shuffle($listPost);
ob_start() ?>

<section class="main-content grid">
  <div class="main-gallery-wrapper flex-container">
    <div class="pop-wrapper flex-container">
      <span class="pop flex-container">
        <div class="pop-img-container">
          <img src="https://images.unsplash.com/photo-1488161628813-04466f872be2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=764&q=80" alt="" class="pop-img">
        </div>
        <p class="pop-text">Lorem.</p>
      </span>
      <span class="pop flex-container">
        <div class="pop-img-container">
          <img src="https://images.unsplash.com/photo-1657214059189-6bace4ad1ab8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=735&q=80" alt="" class="pop-img">
        </div>
        <p class="pop-text">Lorem.</p>
      </span>
      <span class="pop flex-container">
        <div class="pop-img-container">
          <img src="https://images.unsplash.com/photo-1548366565-6bbab241282d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80" alt="" class="pop-img">
        </div>
        <p class="pop-text">Lorem.</p>
      </span>
      <span class="pop flex-container">
        <div class="pop-img-container">
          <img src="https://images.unsplash.com/photo-1521146764736-56c929d59c83?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80" alt="" class="pop-img">
        </div>
        <p class="pop-text">Lorem.</p>
      </span>
      <span class="pop flex-container">
        <div class="pop-img-container">
          <img src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80" alt="" class="pop-img">
        </div>
        <p class="pop-text">Lorem.</p>
      </span>
      <span class="pop flex-container">
        <div class="pop-img-container">
          <img src="https://images.unsplash.com/photo-1657003963857-ec800f2cce43?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=702&q=80" alt="" class="pop-img">
        </div>
        <p class="pop-text">Lorem.</p>
      </span>

      <span class="pop flex-container">
        <div class="pop-img-container">
          <img src="https://images.unsplash.com/photo-1488161628813-04466f872be2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=764&q=80" alt="" class="pop-img">
        </div>
        <p class="pop-text">Lorem.</p>
      </span>

      <span class="pop flex-container">
        <div class="pop-img-container">
          <img src="https://images.unsplash.com/photo-1657214059189-6bace4ad1ab8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=735&q=80" alt="" class="pop-img">
        </div>
        <p class="pop-text">Lorem.</p>
      </span>
      <span class="pop flex-container">
        <div class="pop-img-container">
          <img src="https://images.unsplash.com/photo-1548366565-6bbab241282d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80" alt="" class="pop-img">
        </div>
        <p class="pop-text">Lorem.</p>
      </span>
      <span class="pop flex-container">
        <div class="pop-img-container">
          <img src="https://images.unsplash.com/photo-1521146764736-56c929d59c83?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80" alt="" class="pop-img">
        </div>
        <p class="pop-text">Lorem.</p>
      </span>
      <span class="pop flex-container">
        <div class="pop-img-container">
          <img src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80" alt="" class="pop-img">
        </div>
        <p class="pop-text">Lorem.</p>
      </span>
      <span class="pop flex-container">
        <div class="pop-img-container">
          <img src="https://images.unsplash.com/photo-1657003963857-ec800f2cce43?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=702&q=80" alt="" class="pop-img">
        </div>
        <p class="pop-text">Lorem.</p>
      </span>

    </div>
    <?php
    foreach ($listPost as $post) : ?>
      <div class="card-wrapper flex-container">
        <div class="card-header grid">
          <div class="header-img-container flex-container">
            <img class="card-header-img" src=" <?= $post["url_profile"] ?>" alt="">
          </div>
          <span class="card-title">
            <?= $post["pseudo"] ?>
          </span>

          <span class="card-subtitle"> <?= empty($post["location"]) ? "" : $post["location"] ?></span>
          <div class="card-opt-btn flex-container"><i class="bi bi-three-dots"></i></div>
        </div>
        <div class="card-img-container">
          <img class="card-img" src="<?= $post["url_publication"] ?>" alt="">
        </div>
        <div class="card-data flex-container">
          <div class="card-icons flex-container">
            <span class="card-icon card-icon-left"><i class="bi bi-heart"></i></span>
            <span class="card-icon card-icon-left"><i class="bi bi-chat"></i></span>
            <span class="card-icon card-icon-left"><i class="bi bi-send"></i></span>
            <span class="card-icon card-icon-right"><i class="bi bi-bookmark"></i></span>
          </div>
          <span class="bold card-text"><?= $post["number_pub_like"] ?> Likes</span>
          <span class="card-text"><span class="bold title-margin"><?= $post["pseudo"] ?></span><?= $post["legende"] ?></span>
          <span class="card-text comments-btn">See more comments</span>
          <span class="card-time"></span>
          <div class="add-comment-container flex-container">
            <span class="card-icon"><i class="bi bi-emoji-smile"></i></span>
            <div class="comment-container">
              <input class="comment-input" type="text" placeholder="Add a comment....">
            </div>

            <a href="#" class="publish">Publish</a>
          </div>

        </div>

      </div>
    <?php
    endforeach; ?>

  </div>
  <div class="sidebar">
    <div class="sidebar-menu-container">
      <div class="sidebar-card sidebar-header grid">
        <img src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80" alt="" class="sidebar-img sidebar-hd-img">
        <span class="sidebar-title card-title">
          Lorem, ipsum.
        </span>
        <span class="card-subtitle sidebar-subtitle">Lorem.</span>
        <span class="sidebar-btn">
          Change
        </span>
      </div>
      <div class="suggestions-header grid">
        <span class="suggestions-text">
          Suggestions for you
        </span>
        <span class="sidebar-btn-alt">
          See all
        </span>
      </div>
      <div class="sidebar-card sidebar-card-alt grid">
        <img src="https://images.unsplash.com/photo-1657000529335-5c1bf76204af?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80" alt="" class="sidebar-img side-bar-img-alt">
        <span class="sidebar-title card-title">
          Lorem, ipsum.
        </span>
        <span class="card-subtitle sidebar-subtitle sidebar-subtitle-alt">Lorem.</span>
        <span class="sidebar-btn">
          Follow
        </span>
      </div>
      <div class="sidebar-card sidebar-card-alt grid">
        <img src="https://images.unsplash.com/photo-1656143269388-e65183fac19f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80" alt="" class="sidebar-img side-bar-img-alt">
        <span class="sidebar-title card-title">
          Lorem, ipsum.
        </span>
        <span class="card-subtitle sidebar-subtitle sidebar-subtitle-alt">Lorem.</span>
        <span class="sidebar-btn">
          Follow
        </span>
      </div>
      <div class="sidebar-card sidebar-card-alt grid">
        <img src="https://images.unsplash.com/photo-1656863949585-2bd7f7d0f3d0?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80" alt="" class="sidebar-img side-bar-img-alt">
        <span class="sidebar-title card-title">
          Lorem, ipsum.
        </span>
        <span class="card-subtitle sidebar-subtitle sidebar-subtitle-alt">Lorem.</span>
        <span class="sidebar-btn">
          Follow
        </span>
      </div>
      <div class="sidebar-card sidebar-card-alt grid">
        <img src="https://images.unsplash.com/photo-1656858772675-49e73a27d22b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80" alt="" class="sidebar-img side-bar-img-alt">
        <span class="sidebar-title card-title">
          Lorem, ipsum.
        </span>
        <span class="card-subtitle sidebar-subtitle sidebar-subtitle-alt">Lorem.</span>
        <span class="sidebar-btn">
          Follow
        </span>
      </div>



    </div>
  </div>
</section>



<?php $content = ob_get_clean(); ?>