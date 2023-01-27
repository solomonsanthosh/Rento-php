<?php include('header.php') ?>
<div class="vh-100 vw-100 bg">
        <!-- <div class="image">
                <img src="pngegg.png" alt="" />

        </div> -->
    <div class="content d-flex align-items-center">

            <h1 class="title">Rento</h1>
            <p class="sub_title">Lease or rent <span>wheels</span></p>
            <div class="btns">
                 
                    <a href="/rento/rent.php"><span>Lease</span><i></i></a>
                    <a href="/rento/borrow.php"><span>Rent</span><i></i></a>
                    
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
TweenMax.staggerFrom("a",1, {
            opacity: 0,
            delay: .5,
            x: -20,
            ease: Power3.easeInOut
        }, 0.08)
</script>
<?php include('footer.php') ?>
