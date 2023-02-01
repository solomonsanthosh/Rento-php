<?php include('header.php') ?>
<?php

if (!empty($_POST["city"])) {
    header("Location: /borrow.php?city=" . strtolower($_POST['city']));
}

?>
<div class="popup1 position-absolute w-100 h-100    justify-content-center align-items-center" style="top: 0;z-index: 100; background-color:#00000099;">
    <div class=" bg-dark d-flex   justify-content-center   align-items-center  p-4" style="height:30%;width:45%">
        <form action="" method="post" class="d-flex flex-column">
            <label for="city" class="mb-4 fs-5 ">
                <p>enter your city</p>
            </label>
            <div class="d-flex ">
                <input type="text" name="city" id="city">

                <input type="submit" class=" btn btn-success" style="margin-left: 2rem;" value="Submit">

            </div>
        </form>
    </div>
</div>


<div class="vh-100 vw-100 bg">
    <!-- <div class="image">
                <img src="pngegg.png" alt="" />

        </div> -->

    <div class="content d-flex align-items-center">

        <h1 class="title">Rento</h1>
        <p class="sub_title">Lease or rent <span>wheels</span></p>
        <div class="btns">

            <a href="/rent.php"><span>Lease</span><i></i></a>
            <a class="/borrow"><span style="color: white;">Rent</span><i></i></a>

        </div>
        <!-- <div>
        

        </div> -->
    </div>
</div>
<script type="text/javascript">
    TweenMax.from(".title", 1, {
        opacity: 0,
        x: -20,
        ease: Expo.easeInOut
    })
    TweenMax.from(".sub_title", 1, {
        opacity: 0,
        delay: .5,
        x: -20,
        ease: Expo.easeInOut
    })
    TweenMax.staggerFrom("a", 1, {
        opacity: 0,
        delay: .5,
        x: -20,
        ease: Power3.easeInOut
    }, 0.08)
</script>
<script src="index.js" type="text/javascript" />
<?php include('footer.php') ?>