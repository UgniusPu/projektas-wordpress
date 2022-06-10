<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/assets/style.css" />
    <?php get_header();
    ?>
    <title>Html+css</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="http://localhost/test/main">HTML+CSS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">

                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link fs-3" aria-current="page" href="http://localhost/test/assets/main/">Home </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active fs-3" href="http://localhost/test/assets/about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-3" href="http://localhost/test/assets/c/">Contacts</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <section class="about bg-success">
        <div class="text text-center pt-3 mb-5 ">
            <span class="border bg-warning rounded-pill">
                <h1>Our *insert text*</h1>
            </span>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <div class="card " style="width: col-sm-4">
                        <img src="/assets/images/rene-padillo-d8nGnF1IqCk-unsplash.jpg" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse odit sequi qui, iste mollitia, alias ea ut recusandae exercitationem ipsa dolorem neque libero ullam animi necessitatibus soluta quo? Ut cum nisi, eius quas similique corrupti incidunt inventore delectus dolorem consequuntur, quae iusto doloribus totam autem aut in minus quibusdam explicabo?
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="card" style="width:col-sm-4">
                        <img src="/assets/images/rene-padillo-d8nGnF1IqCk-unsplash.jpg" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eius consequatur beatae cum id quidem deserunt maxime sapiente nostrum ab veritatis error odio sit corporis voluptas eaque consequuntur fuga velit delectus, labore omnis incidunt dolor est debitis dolore. Nisi, nam. Dolorum fugiat quaerat officiis qui quas quae quasi praesentium aperiam omnis!
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="card" style="width:col-sm-4">
                        <img src="/assets/images/rene-padillo-d8nGnF1IqCk-unsplash.jpg" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati explicabo sequi ea eaque ab inventore placeat officiis dolorem, qui ipsa voluptatum nobis vero voluptate quae voluptates quibusdam expedita cum quam, illum aliquid quaerat numquam ducimus rem? Atque rerum fugit hic pariatur, ab repellat commodi deserunt exercitationem.
                            </p>

                        </div>
                    </div>
                </div>


            </div>
        </div>
        </div>
        </div>

        <div class="card container-fluid w-50 p-3 text-center pb-3 mt-5">
            <div class="card-header">
                <h1>Quote</h1>
            </div>

            <div class="card-body">
                <blockquote class="blockquote mb-0 ">
                    <h2>A well-known quote, contained in a blockquote element.</h2>
                    <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                </blockquote>
            </div>
            <div class="card-header">
                <h1>Quote</h1>
            </div>

            <div class="card-body">
                <blockquote class="blockquote mb-0 ">
                    <h2>A well-known quote, contained in a blockquote element.</h2>
                    <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                </blockquote>
            </div>
        </div>
    </section>
    <div class="footer">
        <p>&copy2022 Created by:ME!</p>
    </div>
    <?php get_footer() ?>
</body>

</html>