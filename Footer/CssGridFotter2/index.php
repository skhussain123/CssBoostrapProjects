<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer Responsive Layout</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <style>
        .GridBox {
            display: grid;
            grid-template-columns: 2.6fr 1.5fr 1.5fr 2fr 1.5fr;
            gap: 20px;
            margin: auto;
            padding: 1px 0px 0px 0px;
        }

        @media (max-width: 768px) {
            .GridBox {
                display: flex;
                flex-wrap: wrap;
                gap: 10px;
            }

            .company-col,
            .contact-col {
                width: 100%;
            }

            .pages-col,
            .legal-col,
            .essay-col,
            .services-col {
                width: calc(50% - 10px);
                /* Side-by-side properly */
                box-sizing: border-box;
            }

            .name,
            .email {
                width: 30% !important;
            }

            .button {
                width: 9% !important;
            }


            .fotter2 {
                padding-left: 0px !important;
                padding-right: 0px !important;
            }
        }
    </style>
</head>

<body>

    <br>
    <br>
    <br>

    <div class="container-fluid text-light" style="max-width: 1440px;">
        <div class="row bg-dark" style="padding-top: 40px;padding-bottom: 40px;padding-left: 20px;padding-right: 20px;">
            <div class="col-md-12">
                <div class="fotter">
                    <div class="GridBox text-white">

                        <div class="card text-start text-white bg-dark company-col">
                            <h3>Company Name</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id official reprehenderit</p>

                            <ul class="list-inline m-0 p-0 mt-2">
                                <li class="list-inline-item">
                                    <a href="#" target="_blank" class="text-light me-3">
                                        <i class="fab fa-instagram fa-lg"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" target="_blank" class="text-light me-3">
                                        <i class="fab fa-whatsapp fa-lg"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" target="_blank" class="text-light me-3">
                                        <i class="fab fa-facebook fa-lg"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" target="_blank" class="text-light me-3">
                                        <i class="fab fa-linkedin fa-lg"></i>
                                    </a>
                                </li>
                            </ul>



                        </div>



                        <div class="card text-start text-white bg-dark legal-col">
                            <ul class="list-unstyled">
                                <h5>Legal</h5>
                                <li class="mt-3">Privacy Policy</li>
                                <li class="mt-2">Terms of Use</li>
                                <li class="mt-2">Our Guarantees</li>
                            </ul>
                        </div>

                        <div class="card text-start text-white bg-dark essay-col">
                            <ul class="list-unstyled">
                                <h5>Legal</h5>
                                <li class="mt-3">Privacy Policy</li>
                                <li class="mt-2">Terms of Use</li>
                                <li class="mt-2">Our Guarantees</li>
                            </ul>
                        </div>




                        <div class="card text-start text-white bg-dark services-col">
                            <ul class="list-unstyled">
                                <h5>Services</h5>
                                <li class="mt-3">Do My Assignment</li>
                                <li class="mt-2">Assignment Writer</li>
                                <li class="mt-2">Buy Assignment</li>
                                <li class="mt-2">Make My Assignment</li>
                            </ul>
                        </div>

                        <div class="card text-start text-white bg-dark services-col">
                            <ul class="list-unstyled">
                                <h5>Latest Porject</h5>
                                <li>
                                    <img width="70px" height="70px" src="https://plus.unsplash.com/premium_photo-1734568067100-e1c0f8fe53d2?q=80&w=1411&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                                    <img width="70px" height="70px" src="https://plus.unsplash.com/premium_photo-1734568067100-e1c0f8fe53d2?q=80&w=1411&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">


                                </li>
                                <li class="mt-2">
                                    <img width="70px" height="70px" src="https://plus.unsplash.com/premium_photo-1734568067100-e1c0f8fe53d2?q=80&w=1411&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                                    <img width="70px" height="70px" src="https://plus.unsplash.com/premium_photo-1734568067100-e1c0f8fe53d2?q=80&w=1411&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">


                                </li>
                            </ul>
                        </div>


                    </div>
                </div>
            </div>
        </div>

        <div class="row border-top border-light bg-dark">
            <div class="col-12 fotter2 text-center py-3" style="padding-left:50px;padding-right:50px;">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quos praesentium odio porro nisi ad aspernatur, quis ducimus corrupti quam ullam voluptates debitis. Omnis voluptatum corporis unde repellendus perferendis nam qui?</p>
                <input type="text" placeholder="Enter your Name" class="form-control mt-2 mb-2 name" style="width: 15%; display: inline-block;">
                <input type="text" placeholder="Enter your email" class="form-control mt-2 mb-2 email" style="width: 15%; display: inline-block;">
                <button type="button" class="btn btn-primary mt-2 mb-2 button" style="width: 10%; display: inline-block;">Submit</button>
            </div>
        </div>

        <div class="row border-top border-light bg-dark">
            <div class="col-12 text-start py-3" style="padding-left:50px;padding-right:50px;">
                <p>@Hussain Developer All Right reserved</p>
            </div>
        </div>


    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
</body>

</html>