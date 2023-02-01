<?php include('header.php') ?>
<?php include('database.php') ?>
<?php
$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://api.countrystatecity.in/v1/countries/IN/states/TN/cities',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HTTPHEADER => array(
        'X-CSCAPI-KEY: OGViU0l1Snd1Vk1SVmliVGgyV2pCNjE2V2pTZ0R2S25udVFaU05kSA=='
    ),
));

$response = $curl;

$response = curl_exec($curl);
curl_close($curl);

$data = json_decode($response);


// if (!empty($_POST["location"])) {
//     echo $_POST["location"];
//     curl_setopt_array($curl2, array(
//         CURLOPT_URL => 'https://api.countrystatecity.in/v1/countries/IN/states',
//         CURLOPT_RETURNTRANSFER => true,
//         CURLOPT_HTTPHEADER => array(
//             'X-CSCAPI-KEY: OGViU0l1Snd1Vk1SVmliVGgyV2pCNjE2V2pTZ0R2S25udVFaU05kSA=='
//         ),
//     ));
//     $response2 = $curl2;

//     $response2 = curl_exec($curl2);
//     curl_close($curl2);

//     $data2 = json_decode($response2);
//     var_dump($data2);
// }



if (
    isset($_POST['submit']) && (!empty($_POST['location'])) &&
    (!empty($_POST['type'])) && (!empty($_POST['name'])) &&
    (!empty($_POST['email'])) && (!empty($_POST['vehicle'])) &&
    (!empty($_POST['description']))
) {
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
            <label for="name" class="form-label">
                <p>Name</p>
            </label>
            <input name="name" type="text" class="form-control" id="name" placeholder="Enter your name">
        </div>
        <div class="mb-4">
            <label for="exampleFormControlInput1" class="form-label">
                <p>Email address</p>
            </label>
            <input name="email" type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="mb-4">
            <label for="location" class="form-label">
                <p>Location</p>
            </label>


            <select name="location" class="form-select" id="location" aria-label="Floating label select example">
                <option selected disabled>Select your City</option>
                <?php foreach ($data as $key => $value) : ?>
                    <option value="<?php echo $value->name ?>"><?php echo $value->name; ?></option>

                <?php endforeach ?>

            </select>


        </div>

        <div class="mb-4">
            <label for="type" class="form-label">
                <p>Type of Vehicle</p>
            </label>
            <select name="type" class="form-select" id="type" aria-label="Floating label select example">
                <option selected disabled>Select a type</option>
                <option value="2">Two wheeler</option>
                <option value="4">Four wheeler</option>

            </select>
        </div>
        <div v class="mb-4">
            <label for="vehicle" class="form-label">
                <p>Vechicle Name</p>
            </label>
            <input name="vehicle" type="text" class="form-control" id="vehicle" placeholder="Enter your name">
        </div>
        <div class="mb-4">
            <label for="description" class="form-label">
                <p>Description</p>
            </label>
            <textarea name="description" class="form-control" id="description" rows="4"></textarea>
        </div>


        <input class="btn btn-primary mb-4" type="submit" value="Submit" name="submit">
    </form>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="api.js" type="text/javascript" />
<?php include('footer.php') ?>