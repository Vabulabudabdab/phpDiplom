<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <title>
            Подготовительные задания к курсу
        </title>
        <meta name="description" content="Chartist.html">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
        <link id="vendorsbundle" rel="stylesheet" media="screen, print" href="css/vendors.bundle.css">
        <link id="appbundle" rel="stylesheet" media="screen, print" href="css/app.bundle.css">
        <link id="myskin" rel="stylesheet" media="screen, print" href="css/skins/skin-master.css">
        <link rel="stylesheet" media="screen, print" href="css/statistics/chartist/chartist.css">
        <link rel="stylesheet" media="screen, print" href="css/miscellaneous/lightgallery/lightgallery.bundle.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-solid.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-brands.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-regular.css">
    </head>
    <body class="mod-bg-1 mod-nav-link ">
        <main id="js-page-content" role="main" class="page-content">
            <div class="col-md-6">
                <div id="panel-1" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Задание
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <?php
                            $elements = [
                            [
                            "alt" => "Sunny A. (UI/UX Expert)",
                            "src" => "img/demo/authors/sunny.png",
                            "href" => "https://twitter.com/@myplaneticket",
                            "target" => "@myplaneticket",
                            "hrefSec" => "https://wrapbootstrap.com/user/myorange",
                            "name" => "Sunny A."
                            ],
                            [
                            "alt" => "Jos K. (ASP.NET Developer)",
                            "src" => "img/demo/authors/josh.png",
                            "href" => "https://twitter.com/@atlantez",
                            "target" => "@atlantez",
                            "hrefSec" => "https://wrapbootstrap.com/user/Walapa",
                            "name" => "Jos K."
                            ],
                            ];
                            ?>

                            <?php foreach ($elements as $element) :?>

                           <div class="d-flex flex-wrap demo demo-h-spacing mt-3 mb-3">
                            <div class="rounded-pill bg-white shadow-sm p-2 border-faded mr-3 d-flex flex-row align-items-center justify-content-center flex-shrink-0">
                                <img src="<?php echo $element['src']?>" alt="<?php echo $element['alt'] ?>" class="img-thumbnail img-responsive rounded-circle" style="width:5rem; height: 5rem;">
                                <div class="ml-2 mr-3">
                                    <h5 class="m-0">
                                        <?php echo $element['alt']?>
                                        <small class="m-0 fw-300">
                                            Lead Author
                                        </small>
                                    </h5>
                                    <a href="<?php echo $element['hrefSec']?>" class="text-info fs-sm" target="_blank"><?php echo $element['target']?></a> -
                                    <a href="<?php echo $element['href'] ?>" class="text-info fs-sm" target="_blank" title="Contact Sunny"><i class="fal fa-envelope"></i></a>
                                </div>
                            </div>
                               <?php endforeach;?>
                               <?php $user = [ [
                                   "alt" => "Jovanni L. (PHP Developer)",
                                   "src" => "img/demo/authors/jovanni.png",
                                   "href" => "https://twitter.com/@lodev09",
                                   "target" => "@myplaneticket",
                                   "hrefSec" => "https://wrapbootstrap.com/user/lodev09",
                                   "name" => "Jovanni L."
                               ],
                                   [
                                       "alt" => "Roberto R. (Rails Developer)",
                                       "src" => "img/demo/authors/roberto.png",
                                       "href" => "https://twitter.com/@sildur",
                                       "target" => "@sildur",
                                       "hrefSec" => "https://wrapbootstrap.com/user/sildur",
                                       "name" => "Roberto R."
                                   ],
                               ]  ?>
                               <?php foreach ($user as $use):?>
                               <div class="banned rounded-pill bg-white shadow-sm p-2 border-faded mr-3 d-flex flex-row align-items-center justify-content-center flex-shrink-0">
                                   <img src="<?php echo $use['src'] ?>" alt="<?php echo $use['alt']?>" class="img-thumbnail img-responsive rounded-circle" style="width:5rem; height: 5rem;">
                                   <div class="ml-2 mr-3">
                                       <h5 class="m-0">
                                           <?php echo $use['alt']?>
                                           <small class="m-0 fw-300">
                                               Partner &amp; Contributor
                                           </small>
                                       </h5>
                                       <a href="<?php echo $use['hrefSec'];?>" class="text-info fs-sm" target="<?php echo $use['target']; ?>"><?php echo $use['target']; ?></a> -
                                       <a href="<?php echo $use['href'];?>" class="text-info fs-sm" target="<?php echo $use['target']; ?>" title="Contact Jovanni"><i class="fal fa-envelope"></i></a>
                                   </div>
                               </div>

                               <?php endforeach;?>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        

        <script src="js/vendors.bundle.js"></script>
        <script src="js/app.bundle.js"></script>
        <script>
            // default list filter
            initApp.listFilter($('#js_default_list'), $('#js_default_list_filter'));
            // custom response message
            initApp.listFilter($('#js-list-msg'), $('#js-list-msg-filter'));
        </script>
    </body>
</html>
