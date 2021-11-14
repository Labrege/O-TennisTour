<script>
$(document).ready(function(){
    $(".side-bar-btn").on("click" ,function(){
      $(".side-bar").toggleClass('closed');
      $(".left-arrow").toggleClass('closed');
      $(".right-arrow").toggleClass('closed');
    });
});
</script>


<div class="side-bar closed">
    <div class="side-bar-text">
        <a href="espace_membre_index.php"> Profil </a>
        <a href="espace_membre_informations.php"> Informations </a>
        <a href="../Admin/admin-post.php" target='_blank'> Mes dispos </a>
    </div>
    <div class="side-bar-btn-container">
        <button class="side-bar-btn">
            <span class="left-arrow">
                <i class="fa fa-arrow-right" aria-hidden="true"></i>
            </span>
            <span class="right-arrow closed">
                <i class="fa fa-arrow-left" aria-hidden="true"></i>
            </span>
        </button>
    </div>
</div>

