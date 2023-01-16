<?php
include "conn.php";
$data = mysqli_query($con, "SELECT * FROM info_pelajar");
$rowcount = mysqli_num_rows($data);
$rowcount++;
if (isset($_POST["update"])) {
    $NAMA = $_POST["NAMA"];
    $IC = $_POST["IC"];
    $NDP =$_POST["NDP"];
    $EMAIL=$_POST["EMAIL"];
    $JANTINA = $_POST["JANTINA"];
    $result = mysqli_query(
        $con,
        "INSERT INTO info_pelajar SET id='$rowcount',nama_pelajar='$NAMA',no_kp='$IC',no_ndp='$NDP',email='$EMAIL' , jantina='$JANTINA'"
    );

    if ($result) { ?>
            <main x-data="app">
              <button type="button" @click="closeToast()" x-show="open" x-transition.duration.300ms class="fixed top-4 right-4 z-50 rounded-md bg-green-500 px-4 py-2 text-white transition hover:bg-green-600">
                <div class="flex items-center space-x-2">
                  <span class="text-3xl"><i class="bx bx-check"></i></span>
                  <p class="font-bold">Success!</p>
                </div>
              </button>
            </main>
                <?php } else { ?>
    <main x-data="app">
      <button type="button" @click="closeToast()" x-show="open" x-transition.duration.300ms class="fixed top-4 right-4 z-50 rounded-md bg-red-500 px-4 py-2 text-white transition hover:bg-red-600">
        <div class="flex items-center space-x-2">
          <span class="text-3xl"><i class="bx bx-x"></i></span>
          <p class="font-bold">Fail!</p>
        </div>
      </button>
    </main>
        <?php }
}
?><link rel="stylesheet" href="style.css">
<div class="p-7 m-7 rounded-lg bg-white">
    <a lass="row1" href="index.php">BACK</a>
</div>
<div class="flex items-center justify-center">
    <div class="px-8 py-6 text-left bg-white shadow-lg rounded-lg">
        <h3 class="row1">ADD MAKLUMAT</h3>
        <form method="post" enctype='multipart/form-data'>
            <div class="mt-4">
                <div class="mt-4">
                <label class="block">Nama</label>
                <input name="NAMA" type="text" required class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">  
                </div>
                <div class="mt-4">
                <label class="block">No Kp</label>
                <input maxlength="12" name="IC" type="text" required class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">  
                </div>
                <div class="mt-4">
                <label class="block">No Ndp</label>
                <input maxlength="12" name="NDP" type="text" required class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">  
                </div>
              
                <div class="mt-4">
                <label class="block">Email</label>
                <input name="EMAIL" type="text" required class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">  
                </div>
                <div class="mt-4">
                <label class="block">Jantina</label>
                <select class="form-select appearance-none block w-full px-3 mt-2 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label="Default select example" name="JANTINA" required>
                <option disabled selected value> -- select an option -- </option>  
                <option value="Lelaki">Lelaki</option>
                  <option value="Perempuan">Perempuan</option>
      </select>  
                </div>
                <button type="submit" name="update" class="px-6 py-2 mt-4 text-white bg-blue-600 rounded-lg hover:bg-blue-900">Update</button>
                    <button type="reset"><a class="text-sm text-blue-600 hover:underline">Clear</a></button>
                </div>
            </div>
        </form>
    </div>
</div>