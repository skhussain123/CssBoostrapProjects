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
            grid-template-columns: 1.4fr 0.8fr 1fr 1fr 1.2fr 1.6fr;
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
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id officia reprehenderit</p>
                        </div>

                        <div class="card text-start text-white bg-dark pages-col">
                            <ul class="list-unstyled">
                                <h5>Pages</h5>
                                <li class="mt-3">Home</li>
                                <li class="mt-2">About</li>
                                <li class="mt-2">Contact</li>
                                <li class="mt-2">Services</li>
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
                                <h5>Essay</h5>
                                <li class="mt-3">School</li>
                                <li class="mt-2">College</li>
                                <li class="mt-2">University</li>
                                <li class="mt-2">Academic</li>
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

                        <div class="card text-start text-white bg-dark contact-col">
                            <ul class="list-unstyled">
                                <h5>Contact US</h5>
                                <li class="mt-3">Email: hussainkhan123@gmail.com</li>
                                <li class="mt-3">Phone: 03112805656</li>

                                <span class="mt-3">

                                    <br>
                                    <h5>Subscribe Now</h5>
                                    <input type="text" placeholder="Enter your email" class="form-control mt-2 mb-2" style="width: 65%; display: inline-block;">
                                    <button type="button" class="btn btn-primary mt-2 mb-2" style="width: 30%; display: inline-block;">Submit</button>

                                </span>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="row border-top border-light bg-dark">
            <div class="col-12 text-center py-3" style="display: flex;">
                <p class="text-light text-center mb-0">© 2023 Company Name. All rights reserved.</p>
                <p style="margin-left: auto;">Privacy Policy || Terms of Use</p>
            </div>
        </div>

    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
</body>

</html>