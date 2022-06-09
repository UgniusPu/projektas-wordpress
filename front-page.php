<?php

//Template Name: main
get_header();
?>
<header>
    <div class="hero container-fluid">
        <h1>
            <b>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit,
                dignissimos!</b>
        </h1>
        <p>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Natus iste
            molestias blanditiis iusto deleniti! Doloremque exercitationem commodi
            consequatur omnis quibusdam nemo, maxime ratione quasi, neque itaque
            modi voluptatum harum, voluptates est repellendus expedita suscipit?
            Accusantium sapiente voluptas ipsam eligendi, excepturi ea in eius
            sint esse suscipit possimus earum sit quibusdam!
        </p>
        <br /><br />
        <p>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Animi
            deleniti nihil fugiat vero impedit quo placeat repellat obcaecati
            distinctio quis ipsum doloremque possimus, vitae numquam, cupiditate
            quia unde, accusamus saepe! Aliquid quisquam facilis magni a omnis
            quaerat, sint ad eos maxime expedita deleniti at tempora dignissimos
            possimus obcaecati eligendi provident?
        </p>
    </div>
</header>
<div id="carouselExampleDark" class="carousel carousel-light slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="10000">
            <img src="http://localhost/test/assets/wp-content/uploads/2022/06/drop_water_glare_299693_1920x1080.jpg" class="d-block w-100" alt="..." />
            <div class="carousel-caption d-none d-md-block">
                <h1>Lorem ipsum dolor sit amet.</h1>
                <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Adipisci
                    dolorem corporis vero cumque, alias quia.
                </p>
            </div>
        </div>
        <div class="carousel-item" data-bs-interval="2000">
            <img src="http://localhost/test/assets/wp-content/uploads/2022/06/galaxy_stars_andromeda_299833_1920x1080.jpg" class="d-block w-100" alt="..." />
            <div class="carousel-caption d-none d-md-block">
                <h1>Lorem ipsum dolor sit amet.</h1>
                <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Adipisci
                    dolorem corporis vero cumque, alias quia.
                </p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="http://localhost/test/assets/wp-content/uploads/2022/06/magician_silhouette_deity_299750_1920x1080.jpg" class="d-block w-100" alt="..." />
            <div class="carousel-caption d-none d-md-block">
                <h1>Lorem ipsum dolor sit amet.</h1>
                <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Adipisci
                    dolorem corporis vero cumque, alias quia.
                </p>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<?php get_footer(); ?>