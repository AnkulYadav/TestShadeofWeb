<?php
$curl = curl_init();
curl_setopt_array($curl, [
    CURLOPT_URL => "https://devsow.wpengine.com/wp-json/communities/all/",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => [
        "Authorization: Basic bmVoYTowI21JdkJCdzRBdWJoKTU5QXhEQ0hIQTU=",
        "content-type: application/json"
    ],
]);
$response = curl_exec($curl);
$err = curl_error($curl);
curl_close($curl);

if ($err) {
    echo "cURL Error #:" . $err;
}
?>

<!doctype html>
<html lang="en">

<head>
    <title>Problem Shades of Web</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <!--linking owl carousel css files  -->
    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/owl.theme.green.css">
<!-- Css file -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <section class="blog-section">
        <div class="container">
            <div class="d-flex justify-content-center pb-70">
                <h2>COMMUNITIES WE MANAGE</h2>
            </div>
            <div class="news-wrap">
                <div class="row">
                    <?php
                    $response_data = json_decode($response);
                    $data = $response_data->data;
                    $i = 1;
                    foreach ($data as $singleBlog) {
                        echo "<div class='col-xl-4 col-md-6 col-xs-12 mb-5'>
                            <div class='news-item'> 
                                <a href='$singleBlog->post_url' class='news-img-link'>
                                    <div class='news-item-img' id='blog-image-container-$i' data-image='$singleBlog->image_url'>
                                       
                                    </div>
                                </a>
                                <div class='news-item-text'>
                                    <div class='news-item-descr big-news'>
                                        <p>$singleBlog->post_excerpt</p>
                                    </div>
                                    <div class='news-item-bottom'>
                                        <a href='$singleBlog->post_url' class='news-link'>$singleBlog->post_title</a>
                                    </div>
                                </div>
                            </div>
                        </div>";
                        $i++;
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== Start Our Location Section ========== -->
    <section class="location pt-100">
        <div class="container">
            <div class="d-flex justify-content-center pb-70">
                <h2>OUR SERVICES</h2>
            </div>
            <div class="row location-items owl-carousel owl-theme">
                <?php
                $response_data = json_decode($response);
                $data = $response_data->data;
                $i = 1;
                foreach ($data as $singleBlog) {
                    echo "<div class='item col-lg-4 col-md-6 col-xs-12 landscapes sale' >
                    <a href='$singleBlog->post_url' class='locationLink'>
                        <div class='location-image img-center' style='background: linear-gradient(180deg, rgba(255, 255, 255, 0.00) 50.13%, rgba(0, 0, 0, 0.60) 99.86%), url($singleBlog->image_url);background-size:cover;background-position:center;background-repeat:no-repeat;'>
                        <div class='location-details'>
                            <div class='location-title'>$singleBlog->post_title</div>
                        </div>
                        </div>
                    </a>

                </div>";
                }
                ?>
            </div>
        </div>
    </section>
    <!-- ========== End Our Location Section ========== -->

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
    <!-- linking owl carousel jquery and js file here  -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <!-- myscript -->
    <script src="assets/js/script.js"></script>
</body>
</html>