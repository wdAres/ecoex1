<?php include 'nav.php' ?>

<!-- SECTION-1 Include from membership-->
<section id="member-sec-1" class="container d-flex justify-content-center align-items-center flex-column py-4 my-2 ">
    <div class="fw-semibold" style="font-size:17px ;">Help environment!</div>
    <div class="mb-2 fs-1 fw-5" style="color: var(--dgreen);">Resources</div>
    <div class="mb-2 fw-semibold text-center" style="font-size:17px ;">We are help to building future to clean , sustainable</div>
</section>
<!-- SECTION-1 -->


    <!-- SECTION-1 -->
    <section id="res-sec-1" class="container pb-5 text-center">

        <!-- <h3 class="mb-3">Resources</h3> -->

        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Search Resources" aria-label="Recipient's username" aria-describedby="res-btn">
            <button class="btn" type="button" id="res-btn"><i class="bi bi-search"></i></button>
          </div>

    </section>
    <!-- SECTION-1 -->

    <!-- SECTION-2  -->
    <section id="res-sec-2">
        <div class="align-items-center d-flex flex-column flex-sm-row justify-content-between px-4 py-2">
            <div class="opacity-0">hello world thor</div>
            <h3 class="">Central Goverment</h3>
            <div class="btn-group" role="group">
                <button type="button" class="btn flex-box"><i class="fas fa-chevron-left"></i></button>
                <button type="button" class="btn flex-box"><i class="fas fa-chevron-right"></i></button>
              </div>
        </div>
        <div class="container mx-0 px-3 my-4 row justify-content-between mx-auto">

        <?php
         /* check if data exist */
         $select = mysqli_query($conn, "select * from resources");
         $inc = 0;
         while ($item = mysqli_fetch_array($select)) {
            $inc++ ?>
            <div class="mb-4 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 ">
                <div class="res-media-card shadow rounded-3 p-3 flex-box flex-column">
                    <div class="res-card-img"><i class="bi bi-file-earmark-pdf"></i></div>
                    <div class="res-card-title text-center"><?php echo $item['label'] ;?></div>
                    <div class="res-card-detail">
                        <p><?php echo number_format(filesize($host.$item['file']) / 1024 / 1024, 2) ;?>MB</p>
                    </div>
                    <a class="btn btn-cust" href="<?php echo $host.$item['file'] ;?>" target="_blank" download="<?php echo $host.$item['file'] ;?>">DOWNLOAD</a>
                </div>
            </div>
            <?php }
         ?>
            <div class="mb-4 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 ">
                <div class="res-media-card shadow rounded-3 p-3 flex-box flex-column">
                    <div class="res-card-img"><i class="bi bi-file-earmark-pdf"></i></div>
                    <div class="res-card-title text-center">PWM (Amendment) Rules, 2022</div>
                    <div class="res-card-detail">
                        <p>1.2MB</p>
                    </div>
                    <button class="btn">DOWNLOAD</button>
                </div>
            </div>
            <div class="mb-4 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 ">
                <div class="res-media-card shadow rounded-3 p-3 flex-box flex-column">
                    <div class="res-card-img"><i class="bi bi-file-earmark-pdf"></i></div>
                    <div class="res-card-title text-center">PWM (Amendment) Rules, 2022</div>
                    <div class="res-card-detail">
                        <p>1.2MB</p>
                    </div>
                    <button class="btn">DOWNLOAD</button>
                </div>
            </div>
            <div class="mb-4 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 ">
                <div class="res-media-card shadow rounded-3 p-3 flex-box flex-column">
                    <div class="res-card-img"><i class="bi bi-file-earmark-pdf"></i></div>
                    <div class="res-card-title text-center">PWM (Amendment) Rules, 2022</div>
                    <div class="res-card-detail">
                        <p>1.2MB</p>
                    </div>
                    <button class="btn">DOWNLOAD</button>
                </div>
            </div>
            <div class="mb-4 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 ">
                <div class="res-media-card shadow rounded-3 p-3 flex-box flex-column">
                    <div class="res-card-img"><i class="bi bi-file-earmark-pdf"></i></div>
                    <div class="res-card-title text-center">PWM (Amendment) Rules, 2022</div>
                    <div class="res-card-detail">
                        <p>1.2MB</p>
                    </div>
                    <button class="btn">DOWNLOAD</button>
                </div>
            </div>
            <div class="mb-4 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 ">
                <div class="res-media-card shadow rounded-3 p-3 flex-box flex-column">
                    <div class="res-card-img"><i class="bi bi-file-earmark-pdf"></i></div>
                    <div class="res-card-title text-center">PWM (Amendment) Rules, 2022</div>
                    <div class="res-card-detail">
                        <p>1.2MB</p>
                    </div>
                    <button class="btn">DOWNLOAD</button>
                </div>
            </div>
            <div class="mb-4 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 ">
                <div class="res-media-card shadow rounded-3 p-3 flex-box flex-column">
                    <div class="res-card-img"><i class="bi bi-file-earmark-pdf"></i></div>
                    <div class="res-card-title text-center">PWM (Amendment) Rules, 2022</div>
                    <div class="res-card-detail">
                        <p>1.2MB</p>
                    </div>
                    <button class="btn">DOWNLOAD</button>
                </div>
            </div>
            <div class="mb-4 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 ">
                <div class="res-media-card shadow rounded-3 p-3 flex-box flex-column">
                    <div class="res-card-img"><i class="bi bi-file-earmark-pdf"></i></div>
                    <div class="res-card-title text-center">PWM (Amendment) Rules, 2022</div>
                    <div class="res-card-detail">
                        <p>1.2MB</p>
                    </div>
                    <button class="btn">DOWNLOAD</button>
                </div>
            </div>


        </div>
    </section>
    <!-- SECTION-2  -->


    <?php include 'footer.php' ?>
</body>

</html>