<?php
include("elements/header.php");
?>

<body>
    <div class="photo-gallery">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Junk Car Gallery</h2>
                <p class="text-center">Here are some vehicles that have been towed by Best Cash Car Deals. One of these cars that have been towed could be just like yours. Just click Get a Quote to get your free quote today.</p>
            </div>
            <div class="row photos" id="instafeed">
            </div>
        </div>
    </div>

    <?php
    include("elements/footer.php");
    ?>
    <script src="assets/js/instafeed.min.js"></script>
    <script>
    var userFeed = new Instafeed({
    get: 'user',
    userId: '8104403386',
    limit :20,
    resolution: 'standard_resolution',
    accessToken: '8104403386.1677ed0.c6215bf6031348e58d12f162d991e4d9',
    sortBy: 'most-recent',
    template: '<div class="col-sm-6 col-md-4 col-lg-3 item"><a href="{{image}}" title="{{caption}}"data-lightbox="photos"><img class="img-fluid" alt="{{caption}}" src="{{image}}"></a></div>',
  });
  userFeed.run();
  console.log(userFeed.run());

    </script>
