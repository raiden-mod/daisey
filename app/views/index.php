<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $data['title']; ?></title>
    <link rel="shortcut icon" href="./images/daisey.jpg" type="icon">
    <link rel="stylesheet" href="./resources/css/app.css">
    <link rel="stylesheet" href="./resources/css/font.css">
    <link rel="stylesheet" href="./vendors/boxicons/css/boxicons.css">
    <link rel="stylesheet" href="./vendors/fontawesome/css/all.css">
</head>

<body>
    <header class="header" data-header>
        <div class="container">
            <div class="overlay" data-overlay></div>
            <a href="#" class="logo">
                <h2>DAIZEY</h2>
            </a>
            <nav class="navbar" data-navbar>
                <ul class="navbar-list">
                    <li>
                        <a href="#home" class="navbar-link" data-nav-link>Home</a>
                    </li>
                    <li>
                        <a href="#featured-car" class="navbar-link" data-nav-link>Explore Products</a>
                    </li>
                    <li>
                        <a href="#" class="navbar-link" data-nav-link>About us</a>
                    </li>
                    <li>
                        <a href="#blog" class="navbar-link" data-nav-link>Feeds</a>
                    </li>
                </ul>
            </nav>
            <div class="header-actions">
                <div class="header-contact">
                    <a href="tel:88002345678" class="contact-link">+234 813 36 717 38 </a>
                    <span class="contact-time">Mon - Sat: 9:00 am - 6:00 pm</span>
                </div>
                <a href="#featured-car" class="btn" aria-labelledby="aria-label-txt">
                    <i class="bx bx-shopping-bag"><span class="count_cart">2</span></i>
                    <span id="aria-label-txt">cart (1)</span>
                </a>
                <?php if(isset($_SESSION['daisy_user'])) : ?>
                    <a href="#" class="btn" aria-labelledby="aria-label-txt">
                        <i class="bx bx-user-circle"><span class="notifier"></span></i>
                    </a>
                <?php else: ?>
                    <a href="./users/login" class="btn" aria-labelledby="aria-label-txt">
                        <i class="bx bx-user-circle"></i>
                    </a>
                <?php endif ?>
                <button class="nav-toggle-btn" data-nav-toggle-btn aria-label="Toggle Menu">
                    <span class="one"></span>
                    <span class="two"></span>
                    <span class="three"></span>
                </button>
            </div>
        </div>
    </header>
    <main>
        <article>
            <section class="section hero" id="home">
                <div class="container home-section">
                    <div class="hero-content">
                        <h2 class="h1 hero-title">Your Skin Daizey...</h2>
                        <p class="hero-text">
                            We have a saviour for your skin.
                        </p>
                        <form action="" class="hero-form">
                            <div class="input-wrapper">
                                <label for="input-1" class="input-label">Skin care product, syrup, oil, soap... </label>
                                <input type="text" name="car-model" id="input-1" class="input-field"
                                    placeholder="What product are you looking?">
                            </div>
                            <div class="input-wrapper">
                                <label for="input-3" class="input-label">Price Range</label>
                                <input type="text" name="year" id="input-3" class="input-field" placeholder="Price Range">
                            </div>
                            <button type="submit" class="btn"><span class="jpac">Search</span>
                            </button>
                        </form>
                    </div>
                    <div class="hero-banner"></div>
                </div>
            </section>
            <section>
                <div class="container about-page">
                    <div class="about-page-img-blk">
                        <div class="about-img-container one">
                            <img src="./images/product5.jpg" alt="" >
                            <img src="./images/pexels-shiny-diamond-3762454 (1).jpg" alt="" >
                        </div>
                        <div  class="about-img-container two">
                            <img src="./images/pexels-shiny-diamond-3762533.jpg" alt="" >
                        </div>
                    </div>
                    <div class="about-page-detail-blk">
                        <h2>we have the saviour for your skin.</h2>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Autem atque nam, totam quibusdam aliquid dicta iusto rem deleniti dolor cupiditate corrupti commodi unde modi saepe quos nobis? Dolorum iste maiores alias magni laborum amet.</p>
                        <p style="margin-top: 30px;">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Expedita, debitis illum? Maiores ratione tempora eos ex quis obcaecati iste, saepe dolorem laborum optio molestias nisi quasi architecto est veniam beatae.</p>
                        <button>Learn More</button>
                    </div>
                </div>
            </section>
            <section>
                <div class="container">
                    <div class="product-blk-hdr">
                        <h2>Products</h2>
                        <div class="list-options">
                            <ul>
                                <li>All</li>
                                <li class="active">Skincare</li>
                                <li>serum</li>
                                <li>body</li>
                                <li>hair</li>
                                <li>gift</li>
                            </ul>
                        </div>
                        <div>
                            <h4>Most Popular</h4>
                            <p>See All</p>
                        </div>
                    </div>
                    <div class="product-container">
                        <div class="product-blk">
                            <?php $i = 0; ?>
                            <?php foreach($data['products'] as $product): ?>
                            <div class="products" style="background-image: url(./images/<?= $product->{"product_image"}; ?>);">
                            <?php $i += 1 ; ?>
                                <div class="produt-detl">
                                    <div class="product-name">
                                        <p><?= $product->{"product_name"}; ?></p>
                                        <h4><?= $product->{"product_price"}; ?><span>/pcs</span></h4>
                                        <p class="rating">
                                            <i class="bx bxs-star"></i>
                                            <span>4.8</span>
                                            <span class="amt-sld">(1.5k Sold)</span>
                                        </p>
                                    </div>
                                    <div class="produxt-rnkng">
                                        <span class="product-rnkng-no">#<?= $i; ?></span>
                                        <i class="bx bxs-shopping-bag" title="Add to Cart"></i>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div class="container">
                    <div class="advert">
                        <div class="advert-container">
                            <div class="advert-detl">
                                <h2>every one can use daizey beauty product</h2>
                            </div>
                            <div class="advert-img">
                                <img src="./images/background.png" alt="">
                            </div>
                        </div>
                        <div class="promotions">
                            <i class="bx icon-shift bx-chevrons-left" id="left-btn"></i>
                            <div class="promotions-blk-container" id="promotions-blk-container">
                                <div class="promotions-blk">
                                    <span>Use BEAUTY50 T0 Get 50% Discount</span>
                                    <span>Use BEAUTY50 T0 Get 50% Discount</span>
                                    <span>Use BEAUTY50 T0 Get 50% Discount</span>
                                    <span>Use BEAUTY50 T0 Get 50% Discount</span>
                                    <span>Use BEAUTY50 T0 Get 50% Discount</span>
                                </div>
                            </div>
                            <i class="bx icon-shift bx-chevrons-right" id="right-btn"></i>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div class="container">
                    <div class="product-blk-hdr">
                        <div>
                            <h4>Newly Arrived</h4>
                            <p>See All</p>
                        </div>
                    </div>
                    <div class="product-container">
                        <div class="product-blk newly">
                            <div class="products" style="background-image: url(./images/product1.jpg);">
                                <div class="produt-detl">
                                    <div class="product-name">
                                        <p>Exfoliating Serum</p>
                                        <p>the best...</p>
                                    </div>
                                    <div class="produxt-rnkng">
                                        <h4>$18<span>/pcs</span></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="products" style="background-image: url(./images/product2.jpg);">
                                <div class="produt-detl">
                                    <div class="product-name">
                                        <p>Face eye mask</p>
                                        <p>the best...</p>
                                    </div>
                                    <div class="produxt-rnkng">
                                        <h4>$18<span>/pcs</span></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="products" style="background-image: url(./images/product3.jpg);">
                                <div class="produt-detl">
                                    <div class="product-name">
                                        <p>Body Moisturizer</p>
                                        <p>the best...</p>
                                    </div>
                                    <div class="produxt-rnkng">
                                        <h4>$18<span>/pcs</span></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="products" style="background-image: url(./images/product4.jpg);">
                                <div class="produt-detl">
                                    <div class="product-name">
                                        <p>Body Serum Loti...</p>
                                        <p>the best...</p>
                                    </div>
                                    <div class="produxt-rnkng">
                                        <h4>$18<span>/pcs</span></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="products" style="background-image: url(./images/product5.jpg);">
                                <div class="produt-detl">
                                    <div class="product-name">
                                        <p>eye mask</p>
                                        <p>the best...</p>
                                    </div>
                                    <div class="produxt-rnkng">
                                        <h4>$18<span>/pcs</span></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="navi-button">
                        <button>see more products</button>
                    </div>
                </div>
            </section>
        </article>
    </main>
    <footer class="footer">
        <div class="container">
            <div class="footer-top">
                <div class="footer-brand">
                    <a href="#" class="logo">
                        <h2>DAIZEY</h2>
                    </a>
                    <p class="footer-text">
                        Search for cheap rental cars in New York. With a diverse fleet of 19,000 vehicles, Waydex offers
                        its
                        consumers an
                        attractive and fun selection.
                    </p>
                </div>
                <ul class="footer-list">
                    <li>
                        <p class="footer-list-title">Company</p>
                    </li>
                    <li>
                        <a href="#" class="footer-link">About us</a>
                    </li>
                    <li>
                        <a href="#" class="footer-link">Pricing plans</a>
                    </li>
                    <li>
                        <a href="#" class="footer-link">Our blog</a>
                    </li>
                    <li>
                        <a href="#" class="footer-link">Contacts</a>
                    </li>
                </ul>
                <ul class="footer-list">
                    <li>
                        <p class="footer-list-title">Support</p>
                    </li>
                    <li>
                        <a href="#" class="footer-link">Help center</a>
                    </li>
                    <li>
                        <a href="#" class="footer-link">Ask a question</a>
                    </li>
                    <li>
                        <a href="#" class="footer-link">Privacy policy</a>
                    </li>
                    <li>
                        <a href="#" class="footer-link">Terms & conditions</a>
                    </li>
                </ul>
                <ul class="footer-list">
                    <li>
                        <p class="footer-list-title">Neighborhoods in New York</p>
                    </li>
                    <li>
                        <a href="#" class="footer-link">Manhattan</a>
                    </li>
                    <li>
                        <a href="#" class="footer-link">Central New York City</a>
                    </li>
                    <li>
                        <a href="#" class="footer-link">Upper East Side</a>
                    </li>
                    <li>
                        <a href="#" class="footer-link">Queens</a>
                    </li>
                    <li>
                        <a href="#" class="footer-link">Theater District</a>
                    </li>
                    <li>
                        <a href="#" class="footer-link">Midtown</a>
                    </li>
                    <li>
                        <a href="#" class="footer-link">SoHo</a>
                    </li>
                    <li>
                        <a href="#" class="footer-link">Chelsea</a>
                    </li>
                </ul>
            </div>
            <div class="footer-bottom">
                <ul class="social-list">
                    <li>
                        <a href="#" class="social-link">
                            <i name="bx bx-facebook"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="social-link">
                            <i name="bx bx-instagram"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="social-link">
                            <i name="bx bx-twiter"></i>
                        </a>
                    </li>
                </ul>
                <p class="copyright">
                    &copy; 2022 <a href="#">codewithsadee</a>. All Rights Reserved
                </p>
            </div>
        </div>
    </footer>
<div class="navigation">
    <ul>
        <li class="list">
            <a href="">
                <span class="nav-icon"><i class="bx bxs-home-smile active-nav"></i></span>
                <span class="nav-text" style="color: hsl(240, 22%, 25%);font-weight: bold;">Home</span>
            </a>
        </li>
        <li class="list">
            <a href="#">
                <span class="nav-icon"><i class="bx bx-image" id="open-category"></i></span>
                <span class="nav-text">Feeds</span>
            </a>
        </li>
        <li class="list">
            <?php if(isset($_SESSION['daisy_user'])) : ?>
                <a href="">
            <?php else: ?>
                <a href="./users/login">
            <?php endif; ?>
                <span class="nav-icon"><i class="bx bx-heart-circle jpac"></i></span>
                <span class="nav-text">Wishlist</span>
            </a>
        </li>
        <li class="list">
            <a href="">
                <span class="nav-icon"><i class="bx bx-wallet"></i></span>
                <span class="nav-text">Transactions</span>
            </a>
        </li>
    </ul>
</div>
    <script src="./resources/js/app.js"></script>

</body>

</html>