<?php include 'nav.php' ?>


<!-- SECTION-1 -->
<section id="media-sec-1">
    <div class="container py-5">
        <div class="row ps-2" id="media-btns-container">
            <button onclick="filterSelection('interview-container')" class="media-btn media-active-btn btn col-1 rounded-0">Interviews</button>
            <button onclick="filterSelection('media-container')" class="media-btn btn col-1 rounded-0">Media</button>
            <button onclick="filterSelection('videos-container')" class="media-btn btn col-1 rounded-0">Video</button>
            <button onclick="filterSelection('article-container')" class="media-btn btn col-1 rounded-0">Articles</button>
        </div>
        <hr class="m-0 p-0">
        <div id="media-cards-container" class="my-5 row">

            <div class="filterDiv interview-container">
                <div class="row px-0 mx-0">
                    <div class="d-flex justify-content-center align-items-center col-6  col-sm-6 col-md-4 col-lg-3  col-xxl-3 mb-5">
                        <div class="interview-card shadow rounded-3">
                            <a href="#!">
                                <div class="interview-card-img"><img src="../images/int-1.jpg" alt=""></div>
                            </a>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center align-items-center col-6  col-sm-6 col-md-4 col-lg-3  col-xxl-3 mb-5">
                        <div class="interview-card shadow rounded-3">
                            <a href="#!">
                                <div class="interview-card-img"><img src="../images/int-2.jpg" alt=""></div>
                            </a>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center align-items-center col-6  col-sm-6 col-md-4 col-lg-3  col-xxl-3 mb-5">
                        <div class="interview-card shadow rounded-3">
                            <a href="#!">
                                <div class="interview-card-img"><img src="../images/int-3.jpg" alt=""></div>
                            </a>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center align-items-center col-6  col-sm-6 col-md-4 col-lg-3  col-xxl-3 mb-5">
                        <div class="interview-card shadow rounded-3">
                            <a href="#!">
                                <div class="interview-card-img"><img src="../images/int-4.jpg" alt=""></div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="filterDiv media-container px-0">

                <?php
                /* check if data exist */
                $select = mysqli_query($conn, "select * from media");
                $inc = 0;
                while ($item = mysqli_fetch_array($select)) {
                    $inc++
                ?>
                    <div class="d-flex justify-content-center align-items-center col-6  col-sm-6 col-md-4 col-lg-3  col-xxl-4 mb-5">
                        <div class="media-card shadow rounded-3 p-3">
                            <div class="media-card-img"><img src="../dashboard/<?php echo $item['logo']; ?>" alt=""></div>
                            <div class="media-card-title"><?php echo $item['title']; ?></div>
                            <div class="media-card-detail">
                                <p><?php echo $item['content']; ?></p>
                            </div>
                            <div class="media-card-btn">
                                <button class="btn" style="background-color: var(--dgreen) ;"><a href="<?php echo $item['link']; ?>" class="text-decoration-none text-light fw-6">View</a></button>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>

                <!-- BY PUNEET SHRIVASTAV  -->

                <div class="row px-0">



                    <?php

                    // $data = array(

                    //     array(
                    //         'name' => 'allen',
                    //         'image' => 'e1',
                    //         'desc'  => 'lorem'
                    //     )
                    // );




                    $data =
                        array(
                            array(
                                "name" => "The Policy Times",
                                "img" => "e1",
                            ),

                            array(
                                "name" => "Issuu",
                                "img" => "e2",
                            ),

                            array(
                                "name" => "TIB Business",
                                "img" => "e3",
                            ),

                            array(
                                "name" => "Rebublic Business",
                                "img" => "e4",
                            ),

                            array(
                                "name" => "Entrepreneur Saga",
                                "img" => "e5",
                            ),

                            array(
                                "name" => "Deccan Business",
                                "img" => "e6",
                            ),

                            array(
                                "name" => "Business Reporter",
                                "img" => "e7",
                            ),

                            array(
                                "name" => "Ani ",
                                "img" => "e8",
                            ),

                            array(
                                "name" => "Business Standard",
                                "img" => "e9",
                            ),

                            array(
                                "name" => "Dailyhunt",
                                "img" => "e10",
                            ),

                            array(
                                "name" => "The Week",
                                "img" => "e11",
                            ),

                            array(
                                "name" => "Business Standard",
                                "img" => "e12",
                            ),

                            array(
                                "name" => "Zee5",
                                "img" => "e13",
                            ),

                            array(
                                "name" => "Indo-Asian News",
                                "img" => "e14",
                            ),

                            array(
                                "name" => "BW Smartcities",
                                "img" => "e15",
                            ),

                            array(
                                "name" => "The Daily Gaurdian",
                                "img" => "e16",
                            ),

                            array(
                                "name" => "Dailyhunt",
                                "img" => "e17",
                            ),

                            array(
                                "name" => "ahoo Style",
                                "img" => "e18",
                            ),

                            array(
                                "name" => "Yahoo Finance",
                                "img" => "e19",
                            ),

                            array(
                                "name" => "IBTN9",
                                "img" => "e20",
                            ),

                            array(
                                "name" => "HTDS",
                                "img" => "e21",
                            ),

                            array(
                                "name" => "EducationDiary.com",
                                "img" => "e22",
                            ),

                            array(
                                "name" => "BL",
                                "img" => "e23",
                            ),

                            array(
                                "name" => "Press Trust of India",
                                "img" => "e24",
                            ),

                            array(
                                "name" => "UNI",
                                "img" => "e25",
                            ),

                            array(
                                "name" => "Mangalore Mirror",
                                "img" => "e26",
                            ),

                            array(
                                "name" => "Press Aman India",
                                "img" => "e27",
                            ),

                            array(
                                "name" => "Yahoo News",
                                "img" => "e28",
                            ),

                            array(
                                "name" => "Latest LY",
                                "img" => "e29",
                            ),

                            array(
                                "name" => "New Delhi Times",
                                "img" => "e30",
                            ),

                            array(
                                "name" => "INVC",
                                "img" => "e31",
                            ),

                            array(
                                "name" => "SME Channels",
                                "img" => "e32",
                            ),

                            array(
                                "name" => "TG",
                                "img" => "e33",
                            ),

                            array(
                                "name" => "Tech Smart World",
                                "img" => "e34",
                            ),

                            array(
                                "name" => "Timestech.com",
                                "img" => "e35",
                            ),

                            array(
                                "name" => "ANI",
                                "img" => "e36",
                            ),

                            array(
                                "name" => "Navyug",
                                "img" => "e37",
                            ),

                            array(
                                "name" => "Punjab News Express",
                                "img" => "e38",
                            ),

                            array(
                                "name" => "Smart Tech Today",
                                "img" => "e39",
                            ),

                            array(
                                "name" => "Startup City",
                                "img" => "e40",
                            ),

                            array(
                                "name" => "Techphile",
                                "img" => "e41",
                            ),

                            array(
                                "name" => "Lokmat",
                                "img" => "e42",
                            ),

                            array(
                                "name" => "Outlook",
                                "img" => "e43",
                            ),

                            array(
                                "name" => "THE Weekend",
                                "img" => "e44",
                            ),

                            array(
                                "name" => "BW Business",
                                "img" => "e45",
                            ),

                            array(
                                "name" => "Devdiscourse",
                                "img" => "e46",
                            ),

                            array(
                                "name" => "SN",
                                "img" => "e47",
                            ),

                            array(
                                "name" => "Businessline",
                                "img" => "e48",
                            ),

                            array(
                                "name" => "The Policy Times",
                                "img" => "e49"
                            ),


                        );

                    $data = json_encode($data);
                    $data = json_decode($data);

                    foreach ($data as $value) {
                    ?>


                        <div class="d-flex justify-content-center align-items-center col-6  col-sm-6 col-md-4 col-lg-3  col-xxl-4 mb-5">
                            <div class="media-card shadow rounded-3 p-3">
                                <div class="media-card-img"><img src="../media/<?php echo $value->img; ?>.jpg" alt=""></div>
                                <div class="media-card-title"><?php echo $value->name; ?></div>
                                <div class="media-card-detail">
                                    <p>Lorem ipsum dolor sit amet.</p>
                                </div>
                                <div class="media-card-btn">
                                    <a style="background-color: var(--dgreen); color: white;" href="#!" class="btn fw-semibold">View</a>
                                </div>
                            </div>
                        </div>



                    <?php
                    }
                    ?>

                </div>






            </div>
            <div class="filterDiv videos-container mb-3">
                <div class="row px-0 mx-0 ">
                    <div class="col-xxl-4 col-xl-4 col-md-6 col-sm-6 col-12 mb-4 video-box">
                        <iframe src="https://www.youtube.com/embed/fJ2Zwh2SG5A" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-md-6 col-sm-6 col-12 mb-4 video-box">
                        <iframe src="https://www.youtube.com/embed/fJ2Zwh2SG5A" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-md-6 col-sm-6 col-12 mb-4 video-box">
                        <iframe src="https://www.youtube.com/embed/9Y6uPFr1IYk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-md-6 col-sm-6 col-12 mb-4 video-box">
                        <iframe src="https://www.youtube.com/embed/9ZRmXOrl0NU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-md-6 col-sm-6 col-12 mb-4 video-box">
                        <iframe src="https://www.youtube.com/embed/rdsWvcRvD2w" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-md-6 col-sm-6 col-12 mb-4 video-box">
                        <iframe src="https://www.youtube.com/embed/k1vIOylzfUI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-md-6 col-sm-6 col-12 mb-4 video-box">
                        <iframe src="https://www.youtube.com/embed/tP3y_exUXe4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <div class="filterDiv article-container">
                <div class="row mx-0 px-0">
                    <div class="col-12 mb-5 article-box">
                        <h3 class="fw-semibold mb-3 ">Future scenarios of global plastic waste generation and disposal</h3>

                        <div class="mb-2 text-secondary">By <a style="color:var(--dgreen) ;" href="#!">Ecoex</a> on August 31st, 2021 in <a style="color:var(--dgreen) ;" href="#!">Media Article</a></div>
                        <p class="">
                            The foundation of today’s fast-paced world is laid on the bricks of plastics. Undoubtedly, Epr plastic has innumerable uses, but humans have become dependent on single-use or disposable plastic. Plastic pollution has become one of the most pressing environmental issues, as the rapidly increasing production of disposable plastic products overwhelms the world’s ability to deal with them. Almost a million plastic bottles are purchased in a minute around the world. And studies show that around 5 trillion plastic bags are used worldwide in 1 year. Looking at the total plastic production, we can conclude that half of the plastic produced […]


                        </p>

                        <a style="background-color: var(--dgreen); color: white;" href="#!" class="btn fw-semibold">Read More</a>
                    </div>
                    <div class="col-12 mb-5 article-box">
                        <h3 class="fw-semibold mb-3 ">Top 8 Ways To Reduce Plastic Waste?</h3>

                        <div class="mb-2 text-secondary">By <a style="color:var(--dgreen) ;" href="#!">Ecoex</a> on August 31st, 2021 in <a style="color:var(--dgreen) ;" href="#!">Media Article</a></div>
                        <p class="">
                            Plastics have become an inextricable component of our everyday life. While plastics are undeniably convenient, efficient, and make all of our lives a little simpler, they have resulted in significant worldwide plastic pollution for which the world has no definite remedy. Because of its pervasiveness, giving it up may be tough; it necessitates not just a change in behaviour, but also a shift in mentality. Plastic is problematic because it is non-biodegradable and therefore lasts much longer (for example, up to 1000 years) than other types of trash. Fortunately, organisations and governments all across the world are proposing policies to […]


                        </p>

                        <a style="background-color: var(--dgreen); color: white;" href="#!" class="btn fw-semibold">Read More</a>
                    </div>
                    <div class="col-12 mb-5 article-box">
                        <h3 class="fw-semibold mb-3 ">How can plastic producers make recycling viable?</h3>

                        <div class="mb-2 text-secondary">By <a style="color:var(--dgreen) ;" href="#!">Ecoex</a> on August 31st, 2021 in <a style="color:var(--dgreen) ;" href="#!">Media Article</a></div>
                        <p class="">
                            Leo Baekeland was a Belgian-American chemist who invented plastic accidentally. Still, its invention got a lot of praise due to the “n” number of advantages of plastic, such as being easy to carry, readily available, cheap, waterproof, and most importantly, its life span. But now, years later, its durability is causing problems, and its advantages are changing into disadvantages. Due to its extended lifespan, it is not degrading into inorganic or organic substances and filling up the massive landfills & polluting the ambiance by releasing poisonous gases. So, to solve this issue, authorities have introduced an EPR scheme for plastic, just like […]
                        </p>

                        <a style="background-color: var(--dgreen); color: white;" href="#!" class="btn fw-semibold">Read More</a>
                    </div>
                    <div class="col-12 mb-5 article-box">
                        <h3 class="fw-semibold mb-3 ">How to Reduce Plastic Waste?</h3>

                        <div class="mb-2 text-secondary">By <a style="color:var(--dgreen) ;" href="#!">Ecoex</a> on August 31st, 2021 in <a style="color:var(--dgreen) ;" href="#!">Media Article</a></div>
                        <p class="">
                            India is one of the leading developing countries in the world and yet, it has been unable to come up with innovative solutions for its population that would help them reduce plastic waste and improve the environment at the same time. Here are some simple steps you could take at your workplace to reduce plastic waste at work: * Store items that can be reused. Try using reusable containers instead of plastic containers to store recyclable waste. Store glass jars or milk jugs tightly so as to avoid leaking. Keep small plastic waste receptacles where employees can put their used […]


                        </p>

                        <a style="background-color: var(--dgreen); color: white;" href="#!" class="btn fw-semibold">Read More</a>
                    </div>
                    <div class="col-12 mb-5 article-box">
                        <h3 class="fw-semibold mb-3 ">How to Deal with the Perils of Plastic Items?</h3>

                        <div class="mb-2 text-secondary">By <a style="color:var(--dgreen) ;" href="#!">Ecoex</a> on August 31st, 2021 in <a style="color:var(--dgreen) ;" href="#!">Media Article</a></div>
                        <p class="">

                            The global plastic market today is valued at a net worth of $468.3 billion as of 2020 and it is expected to grow at 6.0% CAGR between the years 2020 to 2025. As per the data derived from various sources, the production of plastic increased from 1.5 million metric tonnes in 1950 to 368 million metric tonnes in 2019. Due to such rapid expansion of the plastic industry, the perils of ineffective disposal of plastic items are ever-increasing. The perils are, however, not irreversible and can be kept under check by adopting certain measures of waste disposal. But before we […]

                        </p>

                        <a style="background-color: var(--dgreen); color: white;" href="#!" class="btn fw-semibold">Read More</a>
                    </div>
                    <div class="col-12 mb-5 article-box">
                        <h3 class="fw-semibold mb-3 ">Why Is Waste Management A Challenge in India?</h3>

                        <div class="mb-2 text-secondary">By <a style="color:var(--dgreen) ;" href="#!">Ecoex</a> on August 31st, 2021 in <a style="color:var(--dgreen) ;" href="#!">Media Article</a></div>
                        <p class="">
                            The problem of waste management in India is as vast as it is tricky. The country generates more than 960 million tonnes of waste each year which is inclusive of organic waste, recyclable waste, and hazardous waste. However, the collection of waste remains inadequate with less than 60% of the waste being collected, of which a mere 15% is processed. With the increase in urban population, the shortcomings owing to collection transport, and disposal of waste have been on the rise. There has been an increasing attempt to incorporate waste management systems that retain resources from the utilization of specialized […]


                        </p>

                        <a style="background-color: var(--dgreen); color: white;" href="#!" class="btn fw-semibold">Read More</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- SECTION-1 -->

<?php include 'footer.php' ?>
</body>

</html>