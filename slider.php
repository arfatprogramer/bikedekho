<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Swiper demo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- Demo styles -->
    <style>
        html,
        body {
            position: relative;
            height: 100%;
        }

        body {
            background: #eee;
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
            font-size: 14px;
            color: #000;
            margin: 0;
            padding: 0;
        }

        .swiper {
            width: 100%;
            height: 500px;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        @media (max-width: 760px) {
            .swiper-button-next {
                right: 20px;
                transform: rotate(90deg);
            }

            .swiper-button-prev {
                left: 20px;
                transform: rotate(90deg);
            }
        }
    </style>
</head>

<body>

    <!-- Swiper -->
    <div class="swiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="card">
                    <div class="card-img">
                        <p class="discount">50%</p>
                        <img src="./Images/bike1.png" alt="">
                    </div>
                    <div class="card-text">
                        <h2>Card Title</h2>
                        <h3>(Disk Brake )</h3>
                        <p class="Prise"> Rs 2 00 000 </p>
                        <button class="card-btn">Know More</button>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="card">
                    <div class="card-img">
                        <p class="discount">50%</p>
                        <img src="./Images/bike1.png" alt="">
                    </div>
                    <div class="card-text">
                        <h2>Card Title</h2>
                        <h3>(Disk Brake )</h3>
                        <p class="Prise"> Rs 2 00 000 </p>
                        <button class="card-btn">Know More</button>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="card">
                    <div class="card-img">
                        <p class="discount">50%</p>
                        <img src="./Images/bike1.png" alt="">
                    </div>
                    <div class="card-text">
                        <h2>Card Title</h2>
                        <h3>(Disk Brake )</h3>
                        <p class="Prise"> Rs 2 00 000 </p>
                        <button class="card-btn">Know More</button>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="card">
                    <div class="card-img">
                        <p class="discount">50%</p>
                        <img src="./Images/bike1.png" alt="">
                    </div>
                    <div class="card-text">
                        <h2>Card Title</h2>
                        <h3>(Disk Brake )</h3>
                        <p class="Prise"> Rs 2 00 000 </p>
                        <button class="card-btn">Know More</button>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="card">
                    <div class="card-img">
                        <p class="discount">50%</p>
                        <img src="./Images/bike1.png" alt="">
                    </div>
                    <div class="card-text">
                        <h2>Card Title</h2>
                        <h3>(Disk Brake )</h3>
                        <p class="Prise"> Rs 2 00 000 </p>
                        <button class="card-btn">Know More</button>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="card">
                    <div class="card-img">
                        <p class="discount">50%</p>
                        <img src="./Images/bike1.png" alt="">
                    </div>
                    <div class="card-text">
                        <h2>Card Title</h2>
                        <h3>(Disk Brake )</h3>
                        <p class="Prise"> Rs 2 00 000 </p>
                        <button class="card-btn">Know More</button>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="card">
                    <div class="card-img">
                        <p class="discount">50%</p>
                        <img src="./Images/bike1.png" alt="">
                    </div>
                    <div class="card-text">
                        <h2>Card Title</h2>
                        <h3>(Disk Brake )</h3>
                        <p class="Prise"> Rs 2 00 000 </p>
                        <button class="card-btn">Know More</button>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="card">
                    <div class="card-img">
                        <p class="discount">50%</p>
                        <img src="./Images/bike1.png" alt="">
                    </div>
                    <div class="card-text">
                        <h2>Card Title</h2>
                        <h3>(Disk Brake )</h3>
                        <p class="Prise"> Rs 2 00 000 </p>
                        <button class="card-btn">Know More</button>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="card">
                    <div class="card-img">
                        <p class="discount">50%</p>
                        <img src="./Images/bike1.png" alt="">
                    </div>
                    <div class="card-text">
                        <h2>Card Title</h2>
                        <h3>(Disk Brake )</h3>
                        <p class="Prise"> Rs 2 00 000 </p>
                        <button class="card-btn">Know More</button>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="card">
                    <div class="card-img">
                        <p class="discount">50%</p>
                        <img src="./Images/bike1.png" alt="">
                    </div>
                    <div class="card-text">
                        <h2>Card Title</h2>
                        <h3>(Disk Brake )</h3>
                        <p class="Prise"> Rs 2 00 000 </p>
                        <button class="card-btn">Know More</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper('.swiper', {
            slidesPerView: 3,
            direction: getDirection(),
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            on: {
                resize: function () {
                    swiper.changeDirection(getDirection());
                },
            },
        });

        function getDirection() {
            var windowWidth = window.innerWidth;
            var direction = window.innerWidth <= 760 ? 'vertical' : 'horizontal';

            return direction;
        }
    </script>
</body>

</html>