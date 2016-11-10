<?php 
    $page_title = "Candid Collection";
    include_once '../source/base_head.php'; 
?>
    <div id="top" data-page-type="candid"></div>
    
    <div id="page" class="animsition equal" data-animsition-in="fade-in" data-animsition-out="fade-out-up-sm" data-loader-type="loader2" data-page-loader-text="Volar" style="transform-origin: 50% 50vh;">
    <?php echo $page_name; ?>
        <!--<section id="home-section" class="project-header work02-bg overlay full-screen">
            <div class="hs-content">
                <div class="hs-content-inner">
                    <div class=" init-animation-2 delay0-4s">
                        <h1 class="hs-text-11">ennax group</h1>
                    </div>
                    <div class="init-animation-2 delay0-6s">
                        <h2 class="hs-text-6">volar, a template at the heart of the beauty</h2>
                    </div>
                </div>
            </div>
        </section>
        <!- - page-header -->
        <!-- Navbar -->
        <?php include '../source/nav01.php'; ?>
        <!--/ End Navbar -->
        <!-- Do not remove the div below if you want to a sticky navbar! -->
        <section id="about-section" class="container section">
            <div id="workCopy">
                <div class="section-title text-left">
                    <div>
                        <h2 class="section-title-heading"><span>Ennax Group</span> project</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 text-justify">
                        <p class="workDesc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum sapiente ab facere numquam explicabo doloremque nesciunt iure labore nam facilis, quae ullam vel magnam, ipsum cumque pariatur deserunt sit nihil.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis sed, quos mollitia voluptas! Omnis enim saepe, facere qui est odit voluptas. Quod consectetur odio at necessitatibus quo soluta dignissimos modi!</p>
                    </div>
                </div>
            </div>
        </section>
        <?php include '../source/project_collection.php'; ?>
        <!--<div class="portfolio-nav row">
            <a href="project_page01.html" class="prev-proj col-sm-5 col-xs-4 animsition-link font-second"><i class="ci-icon-uniE8D1"></i> prev project</a>
            <a href="/index.html#portfolio-section" class="all-works col-sm-2 col-xs-4 font-second animsition-link "><i class="ci-icon-uniE8DE"></i><span> all works</span></a>
            <a href="project_page02.html" class="next-proj col-sm-5 col-xs-4 animsition-link font-second">next project <i class="ci-icon-uniE8BE"></i></a>
        </div>-->
        <!-- container -->
        <!-- Footer Section -->
        <?php include '../source/footer_social_section.php';?>
        <!--/ End Footer Section -->
    </div>
    <!-- JS Scripts -->
    <?php include '../source/footer.php'; ?>
    <script type="text/javascript">
    window.onload = function(){
        pagename = document.getElementById("top").getAttribute("data-page-type");
        alert(<?php $page_name= $page_title;?>);

    }
    </script>
    <!--/ End JS Scripts -->