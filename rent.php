<?php include('header.php') ?>
<?php include('database.php') ?>
<?php

if (isset($_POST['submit']) && (isset($_POST['location'])) &&
 (isset($_POST['type'])) && (isset($_POST['name'])) && 
 (isset($_POST['email'])) && (isset($_POST['vehicle'])) && 
 (isset($_POST['description']))) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $location = $_POST['location'];
    $type = $_POST['type'];
    $vehicle = $_POST['vehicle'];
    $description = $_POST['description'];
    $sql = "INSERT into rent (name,email,location,type,vehicle,description) VALUES ('$name','$email','$location','$type','$vehicle','$description')";

    if (mysqli_query($conn, $sql)) {
        header('Location:index.php');
    } else {
        echo 'Error';
    }
} else {
    echo "fill the form";
}

?>




<div class="w-50 mx-auto mt-5">
    <h1 class="fs-4">Rent your vehicle</h1>
    <form class="mt-5" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <div class="mb-4">
            <label for="name" class="form-label"><p>Name</p></label>
            <input name="name" type="text" class="form-control" id="name" placeholder="Enter your name">
        </div>
        <div class="mb-4">
            <label for="exampleFormControlInput1" class="form-label"><p>Email address</p></label>
            <input name="email" type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="mb-4">
            <label for="location" class="form-label"><p>Location</p></label>
            <select name="location" class="form-select" id="location" aria-label="Floating label select example">
                <option selected disabled>Select a type</option>
                <option value="2">chennai</option>
                <option value="4">ss</option>

            </select>
        </div>
        <div class="mb-4">
            <label for="type" class="form-label"><p>Type of Vehicle</p></label>
            <select name="type" class="form-select" id="type" aria-label="Floating label select example">
                <option selected disabled>Select a type</option>
                <option value="2">Two wheeler</option>
                <option value="4">Four wheeler</option>

            </select>
        </div>
        <div v class="mb-4">
            <label for="vehicle" class="form-label"><p>Vechicle Name</p></label>
            <input name="vehicle" type="text" class="form-control" id="vehicle" placeholder="Enter your name">
        </div>
        <div class="mb-4">
            <label for="description" class="form-label"><p>Description</p></label>
            <textarea name="description" class="form-control" id="description" rows="4"></textarea>
        </div>
        <input class="btn btn-primary mb-4" type="submit" value="Submit" name="submit">
    </form>
</div>




<?php include('footer.php') ?>