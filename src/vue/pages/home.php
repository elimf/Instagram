<?php 
$title="Home";
//Affiche toutes les publications    
        $sql = 'SELECT url, contenu,likes,idPost,users.pseudo,tag, post.id FROM post,users WHERE post.id = users.id';
        $query = $db->prepare($sql);
        $query->execute([]);
        $listPost = $query->fetchAll(PDO::FETCH_ASSOC);
        //shuffle($listPost);
 //Afficher les commentaires       
        $sql = 'SELECT comment.contenuCom,comment.timeCom,comment.idPost, comment.idComment, users.pseudo FROM `comment`, `users` WHERE comment.id = users.id  ';
        $query = $db->prepare($sql);
        $query->execute([]);
        $listCom = $query->fetchAll(PDO::FETCH_ASSOC);

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
      
    </div>
    
    <div class="card-wrapper flex-container">
      <div class="card-header grid">
        <div class="header-img-container flex-container">
          <img class="card-header-img" src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80" alt="">
        </div>
        <span class="card-title">
          Lorem, ipsum.
        </span>
          
         <span class="card-subtitle">Lorem, ipsum.</span>
        <div class="card-opt-btn flex-container"><i class="bi bi-three-dots"></i></div>
      </div>
      <div class="card-img-container">
        <img class="card-img" src="https://images.unsplash.com/photo-1587502624372-45627391a31f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=735&q=80" alt="">
      </div>
      <div class="card-data flex-container">
        <div class="card-icons flex-container"> 
        <span class="card-icon card-icon-left"><i class="bi bi-heart"></i></span>
        <span class="card-icon card-icon-left"><i class="bi bi-chat"></i></span>
        <span class="card-icon card-icon-left"><i class="bi bi-send"></i></span>
        <span class="card-icon card-icon-right"><i class="bi bi-bookmark"></i></span>
        </div>
        <span class="bold card-text">701 Likes</span>
        <span class="card-text"><span class="bold title-margin">Lorem, ipsum.</span>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Porro, nesciunt. Lorem, ipsum dolor.</span>
        <span class="card-text comments-btn">See more comments</span>
        <span class="card-time"></span>
        <div class="add-comment-container flex-container">
          <span class="card-icon"><i class="bi bi-emoji-smile"></i></span>
          <div class="comment-container">
            <input class="comment-input" type="text" placeholder="Add a comment....">
          </div>
          
          <a href="#" class="publish" >Publish</a>
        </div>
        
      </div>
  
    </div>
    
    <div class="card-wrapper flex-container">
      <div class="card-header grid">
        <div class="header-img-container flex-container">
        <img class="card-header-img" src="https://images.unsplash.com/photo-1521146764736-56c929d59c83?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80" alt="">
          </div>
        <span class="card-title">
          Lorem, ipsum.
        </span>
          
         <span class="card-subtitle">Lorem, ipsum.</span>
        <div class="card-opt-btn flex-container"><i class="bi bi-three-dots"></i></div>
      </div>
      <div class="card-img-container">
        <img class="card-img" src="https://images.unsplash.com/photo-1657214058650-31cc8400713b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=736&q=80" alt="">
      </div>
      <div class="card-data flex-container">
        <div class="card-icons flex-container"> 
        <span class="card-icon card-icon-left"><i class="bi bi-heart"></i></span>
        <span class="card-icon card-icon-left"><i class="bi bi-chat"></i></span>
        <span class="card-icon card-icon-left"><i class="bi bi-send"></i></span>
        <span class="card-icon card-icon-right"><i class="bi bi-bookmark"></i></span>
        </div>
        <span class="bold card-text">701 Likes</span>
        <span class="card-text"><span class="bold title-margin">Lorem, ipsum.</span>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Porro, nesciunt. Lorem, ipsum dolor.</span>
        <span class="card-text comments-btn">See more comments</span>
        <span class="card-time"></span>
        <div class="add-comment-container flex-container">
          <span class="card-icon"><i class="bi bi-emoji-smile"></i></span>
          <div class="comment-container">
            <input class="comment-input" type="text" placeholder="Add a comment....">
          </div>
          
          <a href="#" class="publish" >Publish</a>
        </div>
        
      </div>
  
    </div>

  </div>
<div class="sidebar">
  <div class="sidebar-menu-container">
    <div class="sidebar-card sidebar-header grid">
      <img  src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80" alt="" class="sidebar-img sidebar-hd-img">
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
      <img  src="https://images.unsplash.com/photo-1657000529335-5c1bf76204af?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80" alt="" class="sidebar-img side-bar-img-alt">
      <span class="sidebar-title card-title">
        Lorem, ipsum.
      </span>
      <span class="card-subtitle sidebar-subtitle sidebar-subtitle-alt">Lorem.</span>
      <span class="sidebar-btn">
        Follow
      </span>
    </div>
    <div class="sidebar-card sidebar-card-alt grid">
      <img  src="https://images.unsplash.com/photo-1656143269388-e65183fac19f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80" alt="" class="sidebar-img side-bar-img-alt">
      <span class="sidebar-title card-title">
        Lorem, ipsum.
      </span>
      <span class="card-subtitle sidebar-subtitle sidebar-subtitle-alt">Lorem.</span>
      <span class="sidebar-btn">
        Follow
      </span>
    </div>
    <div class="sidebar-card sidebar-card-alt grid">
      <img  src="https://images.unsplash.com/photo-1656863949585-2bd7f7d0f3d0?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80" alt="" class="sidebar-img side-bar-img-alt">
      <span class="sidebar-title card-title">
        Lorem, ipsum.
      </span>
      <span class="card-subtitle sidebar-subtitle sidebar-subtitle-alt">Lorem.</span>
      <span class="sidebar-btn">
        Follow
      </span>
    </div>
    <div class="sidebar-card sidebar-card-alt grid">
      <img  src="https://images.unsplash.com/photo-1656858772675-49e73a27d22b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80" alt="" class="sidebar-img side-bar-img-alt">
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

<style>
@import url('https://fonts.googleapis.com/css2?family=Satisfy&display=swap');
/*  font-family: 'Satisfy', cursive;*/
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap');
/* font-family: 'Poppins', sans-serif; */

*, * :before, * :after{
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}
html{
  font-size: 10px;
  font-family: 'Poppins', sans-serif;
}
ul, ol{
  list-style: none;
}
a{
  text-decoration: none;
  color: inherit;
}
.grid{
  display:grid;
 
}
body{
  background-color: whitesmoke;
  color: #222;
}

.main-header{
   grid-template-columns: .6fr minmax(650px, 1.4fr) .6fr;
  position: sticky;
  top: 0;
  left: 0;
  z-index: 999;
}
.flex-container{
  display: flex;
  align-items: center;
}
header{
  padding: 1rem 0;
  border-bottom: 1px solid #ddd;
  background-color: white;
}
.header-container{
  justify-content: space-between;
  grid-column: 2/3;
  gap: 4%;
  
}
.logo{
  font-family: 'Satisfy', cursive;
}
.logo-nav{
  font-size: 3rem;
  font-weight: bold;
  padding: 0 1rem;
}
.searchbar{
  flex-shrink: 1.2;
}
.searchbar-input{
  padding: .8rem 1rem;
  background-color: #eee;
  border: none;
  border-bottom-right-radius: 6px;
  border-top-right-radius: 6px;
  width: 85%;

}
.searchbar-input[type="text"]{
  font-size: 1.6rem;
  max-width: 70rem;
}
.searchbar-input:focus{
  outline-color: #ccc;
}
.search-icon-container{
  padding: .8rem 1rem;
  background-color: #eee;
    border-bottom-left-radius: 6px;
  border-top-left-radius: 6px;
}
.search-nav-icon, .searchbar-input{
  display: inline-block;
  vertical-align: middle;
}
.search-nav-icon{
  width: 18px;
  fill: #ccc;
}
.navbar{
  justify-content: flex-end;

}
.navbar-item{
  padding: .5rem 1rem;
  font-size: 2.2rem;
  border-radius: 10px;
  margin: 0 .1rem;
  cursor:pointer;
}

.navbar-item img{
  display: inline-block;
  width: 3.5rem;
  vertical-align: top;
  border-radius: 50%;
}
.navbar-item:hover{
  background-color: #eee;
  
}
.no-hover:hover{
  background-color: white;
}
/*                 MAIN                */

.main-content{
  grid-template-columns: 1fr  470px 320px 1fr;
  padding: 3rem 0;
  gap: 3rem;
  font-size: 1.1rem;
  color: #555;
}

.main-gallery-wrapper{
  grid-column: 2/3;
  width: 100%;
  height: 100%;
  gap: 1rem;
  flex-flow: column;

}
.pop-wrapper{
  max-width: 100%;
  padding: 1.4rem;
  background-color: white;
  border: 1px solid #ccc;
  border-radius: 8px;
  align-items: center;
  gap: 2rem;
  overflow:hidden;
  
}
.pop{
  flex-flow: column;
  position: relative;
  z-index: 0;
}
.pop-img{
  width: 5.8rem;
  height: 5.8rem;
  border-radius: 50%;
  padding: .2rem;
  z-index: 2;
  position: relative;
  background-color: white;

}
.pop-img-container::after{
  content:"";
  width: 6.2rem;
  height: 6.2rem;
  border-radius: 50%;
  background-color: #fce043;
background-image: linear-gradient(315deg, #fce043 0%, #fb7ba2 74%);
  z-index: 1;
  position: absolute;
  top: -.2rem;
  left: -.2rem;
  display:block;
}
.sidebar{
  grid-column: 3/4;
  width: 100%;
  height: 100%;
  position: relative;
}
/*           CARDS            */
.card-wrapper{
  width: 100%;
  border: 1px solid #ccc;
  background-color: white;
  border-radius: 10px;
  flex-flow: column;
}
.card-header{
  width:100%;
  padding: .8rem;
  align-items: center;
  grid-template-columns: 10% 1fr 10%;
  grid-template-rows: minmax(0, 1fr);
  height: 56.5px;
}
.header-img-container{
  width: 100%;
  height: 100%;
  grid-column: 1/2;
  grid-row: 1/3;
  justify-content: center;
  align-items: center;
  position:relative;
}
.card-header-img{
  position: relative;
  width: 90%;
  height: 100%;

  border-radius: 50%;
  display:inline-block;

}


.card-title{
  font-size: 1.3rem;
  font-weight: bold;
  padding-left: 1rem;
  grid-column: 2/3;
  grid-row: 1/2;
}
.card-subtitle{
  grid-column: 2/3;
  grid-row: 2/3;
  padding-left: 1rem;
}
.card-opt-btn{
  grid-column: 3/4;
  grid-row: 1/3;
  width:100%;
  height: 100%;
  justify-content: center;
  align-items: center;
  font-size: 2.5rem;
  cursor:pointer;

}
.card-img-container{
  width: 100%;
  height: 465px;
}
.card-img{
  width: 100%;
  height: 100%;
}
.card-data{
  flex-flow: column;
  padding: .8rem;
  width:100%;
  
}
.card-icons{
  gap:1.5rem;
  width:100%;
  padding:0 0 .5rem 0;
  
  color: black;
}
.card-icon i{
  font-size: 2.4rem;
  cursor: pointer;
}
.card-icon-left{
  justify-content: start;
}
.card-icon-right{
  flex-grow:1;
  text-align: right;
}
.card-icon i:hover{
  color: #777;
}
.card-text{
  width:100%;
  text-align:left;
  margin: .5rem 0;
  font-size: 1.4rem;
}
.title-margin{
  margin-right: .4rem;
}
.bold{
  font-weight: bold;
}
.add-comment-container{
  width: 100%;
  gap: 1rem;
  border-top: 1px solid #ccc;
  padding-top:.5rem;
}
.comments-btn{
  color: #999;
  cursor:pointer;
}
.comment-container{
  flex-grow: 1;
  height:100%;
}
.comment-input{
  width:100%;
  height: 100%;
  font-size: 1.3rem;
  border: none;
}
.comment-input:focus{
  outline: none;
}
.publish{
  font-size: 1.3rem;
  color: #44aaff
}
/*       SIDEBAR           */
.sidebar-menu-container{
  position: sticky;
  width: 100%;
  top: 8.6rem;
  left: 0;
}
.sidebar-card{
  align-items: center;
  grid-template-columns: minmax(0,auto)
    1fr minmax(0,auto);
}
.sidebar-header{
  padding: 1rem 0;
}
.sidebar-img{
 grid-column: 1/2;
 grid-row: 1/3;
 border-radius: 50%;
}
.sidebar-hd-img{
  width: 5.8rem;
  height: 5.8rem;
}
.side-bar-img-alt{
  width: 3.2rem;
  height: 3.2rem;
}
.sidebar-title{
  align-self: end;
}
.sidebar-subtitle{
  align-self: flex-start;
  font-size: 1.2rem;
   color: #888;
}
.sidebar-btn{
  grid-column: 3/4;
  grid-row: 1/3;
  justify-self: end;
   color: #3399ff;
  cursor:pointer;
  font-size: 1.2rem;
  font-weight: 500;
}
.suggestions-header{
  grid-template-columns: 1fr minmax(0,auto);
  padding: .5rem 0;
  margin-bottom: 1rem;
}
.suggestions-text{
  font-size: 1.3rem;
  color: #888;
  font-weight: 500;
}
.sidebar-btn-alt{
  font-size: 1.3rem;
  color: black;
  font-weight: 500;
  cursor: pointer;
}
.sidebar-subtitle-alt{
  font-size: 1.15rem;
}
.sidebar-card-alt{
  margin-bottom:.7rem;
}
@media all and (max-width: 1000px){
  .sidebar{
    display: none;
  }
  .main-content{
    grid-template-columns: 1fr  470px 1fr;
    gap: 0;
  }
}
@media all and (max-width: 650px){
  .searchbar{
    display: none;
  }
  .main-header{
    grid-template-columns: 1fr;
  }
  .header-container{
    grid-column: 1/1;
  }
  
}
@media all and (max-width: 480px){
  .main-content{
    grid-template-columns: minmax(0,1fr);
  }
  .main-gallery-wrapper{
  grid-column: 1/2;
  width: 100%;
  height: 100%;
  flex-flow: column;

}
  .header-container{
    gap: 0;
  }
  .navbar-item{
    font-size: 1.8rem;
    padding: .4rem .8rem;
  }
  .card-wrapper{
    border: none;

    border-radius: none;
  }
}
</style>
