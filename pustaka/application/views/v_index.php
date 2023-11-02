<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo $judul ?> | Web Programming</title>
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css" type="text/css">
</head>


<body>
    <div id="wrapper">
        <header> 
            <hgroup>
                <h1>Web rahayu </h1>
                <h3>Info Seputar Kampus BSI</h3>
            </hgroup>
            <nav>
                <ul>
                    <li><a href="<?php echo base_url() . 'index.php/web'?>">Home</a></li>
                    <li><a href="<?php echo base_url() . 'index.php/blog'?>">Blog</a></li>
                    <li><a href="<?php echo base_url() . 'index.php/about'?>">About</a></li>

                </ul>
            </nav>
            <div class="clear"></div>
        </header>
        <section>
            <h1> <?php echo $judul ?></h1>
            <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore rerum maiores eum numquam dignissimos tenetur quos, non dolor facilis animi aut voluptatibus libero explicabo cupiditate placeat sapiente vero mollitia, eaque ab nulla exercitationem beatae ratione architecto. Saepe culpa mollitia molestias, asperiores, error minima eaque odit quia quo vitae sequi voluptates.
            </p>
        </section>
        <footer>
            <a href="rahayu.ac.id">Web Resmi BSI</a>
        </footer>
    </div>
</body>

</html>