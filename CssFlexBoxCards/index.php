<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
</head>

<style>
    .FlexBoxContainer {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 20px;
        margin: auto;
        padding: 1px 0px 0px 0px;
    }


    .customcard {
        position: relative;
        background-color: white;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        font-weight: normal;
    }

    .online-badge {
        position: absolute;
        top: 10px;
        right: 10px;
        background-color: #28a745;
        color: white;
        padding: 4px 8px;
        font-size: 12px;
        border-radius: 20px;
    }


    .FlexBoxContainerSlider {
        display: flex;
        flex-wrap: nowrap;
        /* Prevent wrapping */
        overflow-x: auto;
        /* Horizontal scroll */
        gap: 20px;
        padding: 20px;
        scroll-behavior: smooth;
    }

    .customSlidercard {
        min-width: 280px;
        /* Fixed width for cards */
        flex: 0 0 auto;
        /* Prevent shrinking or growing */
        position: relative;
        background-color: white;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        font-weight: normal;
    }

    .online-badge-slider {
        position: absolute;
        top: 10px;
        right: 10px;
        background-color: #28a745;
        color: white;
        padding: 4px 8px;
        font-size: 12px;
        border-radius: 20px;
    }
</style>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <br>
                <br>

                <h1 class="text-center">Css Flex Box Card</h1>
                <br>
                <div class="FlexBoxContainer">
                    <div class="card customcard">
                        <span class="online-badge">Online</span>
                        <div class="d-flex align-items-center">
                            <img src="https://t3.ftcdn.net/jpg/02/43/12/34/240_F_243123463_zTooub557xEWABDLk0jJklDyLSGl2jrr.jpg"
                                alt="User Image"
                                style="width: 80px; height: 80px; border-radius: 50%; object-fit: cover; margin-right: 15px;">
                            <div class="text-start">
                                <h4 class="mb-1">M. Hussain</h4>
                                <p class="text-muted mb-0">Full Stack Developer</p>
                            </div>
                        </div>
                        <p class="mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Non corporis
                            repudiandae saepe rerum iusto reprehenderit beatae? Labore exercitationem.</p>

                        <div class="d-flex">
                            <ul style="list-style: none;" class="d-flex p-0">
                                <li><i style="font-size: 10px;color:rgb(255, 230, 0)" class="fa fa-star"></i></li>
                                <li><i style="font-size: 10px;color:rgb(255, 230, 0)" class="fa fa-star ms-1"></i></li>
                                <li><i style="font-size: 10px;color:rgb(255, 230, 0)" class="fa fa-star ms-1"></i></li>
                                <li><i style="font-size: 10px;color:rgb(255, 230, 0)" class="fa fa-star ms-1"></i></li>
                                <li><i style="font-size: 10px;color:rgb(255, 230, 0)" class="fa fa-star ms-1"></i></li>
                            </ul>
                            <p style="margin-left: auto;">Reviewd 10-sep-2002</p>
                        </div>
                    </div>

                    <div class="card customcard">
                        <span class="online-badge">Online</span>
                        <div class="d-flex align-items-center">
                            <img src="https://t3.ftcdn.net/jpg/02/43/12/34/240_F_243123463_zTooub557xEWABDLk0jJklDyLSGl2jrr.jpg"
                                alt="User Image"
                                style="width: 80px; height: 80px; border-radius: 50%; object-fit: cover; margin-right: 15px;">
                            <div class="text-start">
                                <h4 class="mb-1">M. Hussain</h4>
                                <p class="text-muted mb-0">Full Stack Developer</p>
                            </div>
                        </div>
                        <p class="mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Non corporis
                            repudiandae saepe rerum iusto reprehenderit beatae? Labore exercitationem.</p>

                        <div class="d-flex">
                            <ul style="list-style: none;" class="d-flex p-0">
                                <li><i style="font-size: 10px;color:rgb(255, 230, 0)" class="fa fa-star"></i></li>
                                <li><i style="font-size: 10px;color:rgb(255, 230, 0)" class="fa fa-star ms-1"></i></li>
                                <li><i style="font-size: 10px;color:rgb(255, 230, 0)" class="fa fa-star ms-1"></i></li>
                                <li><i style="font-size: 10px;color:rgb(255, 230, 0)" class="fa fa-star ms-1"></i></li>
                                <li><i style="font-size: 10px;color:rgb(255, 230, 0)" class="fa fa-star ms-1"></i></li>
                            </ul>
                            <p style="margin-left: auto;">Reviewd 10-sep-2002</p>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <br>
                <br>

                <h1 class="text-center">Css Flex Box Card</h1>
                <br>
                <div class="FlexBoxContainerSlider">
                    <div class="card customSlidercard ms-2">
                        <span class="online-badge-slider">Online</span>
                        <div class="d-flex align-items-center">
                            <img src="https://t3.ftcdn.net/jpg/02/43/12/34/240_F_243123463_zTooub557xEWABDLk0jJklDyLSGl2jrr.jpg"
                                alt="User Image"
                                style="width: 80px; height: 80px; border-radius: 50%; object-fit: cover; margin-right: 15px;">
                            <div class="text-start">
                                <h4 class="mb-1">M. Hussain</h4>
                                <p class="text-muted mb-0">Full Stack Developer</p>
                            </div>
                        </div>
                        <p class="mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Non corporis
                            repudiandae saepe rerum iusto reprehenderit beatae? Labore exercitationem.</p>

                        <div class="d-flex">
                            <ul style="list-style: none;" class="d-flex p-0">
                                <li><i style="font-size: 10px;color:rgb(255, 230, 0)" class="fa fa-star"></i></li>
                                <li><i style="font-size: 10px;color:rgb(255, 230, 0)" class="fa fa-star ms-1"></i></li>
                                <li><i style="font-size: 10px;color:rgb(255, 230, 0)" class="fa fa-star ms-1"></i></li>
                                <li><i style="font-size: 10px;color:rgb(255, 230, 0)" class="fa fa-star ms-1"></i></li>
                                <li><i style="font-size: 10px;color:rgb(255, 230, 0)" class="fa fa-star ms-1"></i></li>
                            </ul>
                            <p style="margin-left: auto;">Reviewd 10-sep-2002</p>
                        </div>
                    </div>

                    <div class="card customSlidercard ms-2">
                        <span class="online-badge-slider">Online</span>
                        <div class="d-flex align-items-center">
                            <img src="https://t3.ftcdn.net/jpg/02/43/12/34/240_F_243123463_zTooub557xEWABDLk0jJklDyLSGl2jrr.jpg"
                                alt="User Image"
                                style="width: 80px; height: 80px; border-radius: 50%; object-fit: cover; margin-right: 15px;">
                            <div class="text-start">
                                <h4 class="mb-1">M. Hussain</h4>
                                <p class="text-muted mb-0">Full Stack Developer</p>
                            </div>
                        </div>
                        <p class="mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Non corporis
                            repudiandae saepe rerum iusto reprehenderit beatae? Labore exercitationem.</p>

                        <div class="d-flex">
                            <ul style="list-style: none;" class="d-flex p-0">
                                <li><i style="font-size: 10px;color:rgb(255, 230, 0)" class="fa fa-star"></i></li>
                                <li><i style="font-size: 10px;color:rgb(255, 230, 0)" class="fa fa-star ms-1"></i></li>
                                <li><i style="font-size: 10px;color:rgb(255, 230, 0)" class="fa fa-star ms-1"></i></li>
                                <li><i style="font-size: 10px;color:rgb(255, 230, 0)" class="fa fa-star ms-1"></i></li>
                                <li><i style="font-size: 10px;color:rgb(255, 230, 0)" class="fa fa-star ms-1"></i></li>
                            </ul>
                            <p style="margin-left: auto;">Reviewd 10-sep-2002</p>
                        </div>
                    </div>

                    <div class="card customSlidercard ms-2">
                        <span class="online-badge-slider">Online</span>
                        <div class="d-flex align-items-center">
                            <img src="https://t3.ftcdn.net/jpg/02/43/12/34/240_F_243123463_zTooub557xEWABDLk0jJklDyLSGl2jrr.jpg"
                                alt="User Image"
                                style="width: 80px; height: 80px; border-radius: 50%; object-fit: cover; margin-right: 15px;">
                            <div class="text-start">
                                <h4 class="mb-1">M. Hussain</h4>
                                <p class="text-muted mb-0">Full Stack Developer</p>
                            </div>
                        </div>
                        <p class="mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Non corporis
                            repudiandae saepe rerum iusto reprehenderit beatae? Labore exercitationem.</p>

                        <div class="d-flex">
                            <ul style="list-style: none;" class="d-flex p-0">
                                <li><i style="font-size: 10px;color:rgb(255, 230, 0)" class="fa fa-star"></i></li>
                                <li><i style="font-size: 10px;color:rgb(255, 230, 0)" class="fa fa-star ms-1"></i></li>
                                <li><i style="font-size: 10px;color:rgb(255, 230, 0)" class="fa fa-star ms-1"></i></li>
                                <li><i style="font-size: 10px;color:rgb(255, 230, 0)" class="fa fa-star ms-1"></i></li>
                                <li><i style="font-size: 10px;color:rgb(255, 230, 0)" class="fa fa-star ms-1"></i></li>
                            </ul>
                            <p style="margin-left: auto;">Reviewd 10-sep-2002</p>
                        </div>
                    </div>
                    <div class="card customSlidercard ms-2">
                        <span class="online-badge-slider">Online</span>
                        <div class="d-flex align-items-center">
                            <img src="https://t3.ftcdn.net/jpg/02/43/12/34/240_F_243123463_zTooub557xEWABDLk0jJklDyLSGl2jrr.jpg"
                                alt="User Image"
                                style="width: 80px; height: 80px; border-radius: 50%; object-fit: cover; margin-right: 15px;">
                            <div class="text-start">
                                <h4 class="mb-1">M. Hussain</h4>
                                <p class="text-muted mb-0">Full Stack Developer</p>
                            </div>
                        </div>
                        <p class="mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Non corporis
                            repudiandae saepe rerum iusto reprehenderit beatae? Labore exercitationem.</p>

                        <div class="d-flex">
                            <ul style="list-style: none;" class="d-flex p-0">
                                <li><i style="font-size: 10px;color:rgb(255, 230, 0)" class="fa fa-star"></i></li>
                                <li><i style="font-size: 10px;color:rgb(255, 230, 0)" class="fa fa-star ms-1"></i></li>
                                <li><i style="font-size: 10px;color:rgb(255, 230, 0)" class="fa fa-star ms-1"></i></li>
                                <li><i style="font-size: 10px;color:rgb(255, 230, 0)" class="fa fa-star ms-1"></i></li>
                                <li><i style="font-size: 10px;color:rgb(255, 230, 0)" class="fa fa-star ms-1"></i></li>
                            </ul>
                            <p style="margin-left: auto;">Reviewd 10-sep-2002</p>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script>
        $(document).ready(function() {

            $('.FlexBoxContainerSlider').slick({
                centerMode: true,
                centerPadding: '60px',
                slidesToShow: 3,
                autoplay: true,
                infinite: true,
                arrows: false,
                autoplaySpeed: 600,
                responsive: [{
                        breakpoint: 768, // For screens 768px or less (tablet)
                        settings: {
                            arrows: false,
                            centerMode: true,
                            centerPadding: '40px',
                            slidesToShow: 1 // Show 2 cards on tablet
                        }
                    },
                    {
                        breakpoint: 480, // For screens 480px or less (mobile)
                        settings: {
                            arrows: false,
                            centerMode: true,
                            centerPadding: '40px',
                            slidesToShow: 1 // Show 1 card on mobile
                        }
                    }
                ]
            });

        });
    </script>

</body>

</html>