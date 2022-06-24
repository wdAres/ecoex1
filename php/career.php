<?php include 'nav.php' ?>




<!-- SECTION-1 Include from membership-->
<section id="member-sec-1" class="container d-flex justify-content-center align-items-center flex-column py-4 mt-2 mb-5">
    <div class="fw-semibold" style="font-size:17px ;">Let's Make!</div>
    <div class="mb-2 fs-1 fw-5" style="color: var(--dgreen);">Career</div>
    <div class="mb-2 fw-semibold text-center" style="font-size:17px ;">Professionals having relevant experience from Plastic Waste Management <br> or any Waste management agency will be preferred.</div>
</section>
<!-- SECTION-1 -->


<!-- SECTION-1 -->
<section id="career-sec-1">
    <!-- <h3 class="text-center my-4">Career</h3> -->
    <div class="container my-5">
        <div class="row justify-content-between">
            <div class="col-md-4 pe-md-3 col-12 rounded-3 mb-5 mb-md-0 position-relative pt-1">
                <div class="position-absolute img-text">Career at <br> Ecoex </div>
                <img src="../background/contact.jpg" width="100%" style="height: 555px;border-radius: 10px;" alt="">
            </div>
            <div class="col-md-8 col-12">
                <form action="">
                    <div class="row mb-4">
                        <div class="col">
                            <label for="first-name" class="mb-1">First Name</label>
                            <input type="text" class="form-control" name="first-name" id="first-name" aria-label="First name">
                        </div>
                        <div class="col">
                            <label for="last-name" class="mb-1">Last Name</label>
                            <input type="text" class="form-control" name="last-name" id="last-name" aria-label="last name">
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col">
                            <label for="designation" class="mb-1">Designation</label>
                            <input type="text" class="form-control" name="designation" id="designation" aria-label="designation">
                        </div>
                        <div class="col">
                            <label for="dob" class="mb-1">Date Of Birth</label>
                            <input type="date" class="form-control" name="dob" id="dob" aria-label="dob">
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col">
                            <label for="from-how" class="mb-1">Where did you know about us</label>
                            <input type="text" class="form-control" id="from-how" name="from-how">
                        </div>
                        <div class="col">
                        <label for="cv-taker" class="mb-1">Upload CV</label>
                            <input class="form-control" type="file" id="cv-taker" name="cv-taker" placeholder="Upload CV">
                            
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col">
                            <label for="Description" class="mb-1">Description</label>
                            <textarea style="min-height: 195px;" class="form-control" name="Description" id="Description"></textarea>
                        </div>
                    </div>
                    <div class="row justify-content-end pe-2">
                        <button class="btn">
                            Apply
                        </button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</section>

<!-- SECTION-1 -->


<?php include 'footer.php' ?>


</body>

</html>