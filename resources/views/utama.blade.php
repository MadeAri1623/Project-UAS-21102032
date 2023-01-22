<!DOCTYPE html>
<html lang="en">
<head>

<nav class="navbar navbar-expand-lg  bg-success">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{url('/')}}">HOME</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">

        
          <a class="nav-link active" aria-current="page" href="{{url('home')}}">TABLE</a>
        </li>
        <a class="nav-link active" aria-current="page" href="{{url('code')}}">CODE</a>
        <li class="nav-item">

        
          
          </li>
      
        </li>
      </ul>
    </div>
  </div>
</nav>



    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Project UAS</title>
    

    @stack('before-style')
    @include('includes.style')
    @stack('after-style')
  
</head>
  
<body>
<div class="text-bg-info p-3">
                <mb-><center><h>PROJECT UAS WEB PROGRAMING</h></center></mb-9>
    <h3><center>SMART LIGHT MENGGUNAKAN ARDUINO UNO DENGAN PHOTO RESISTOR</center></h3>

    <div class="container text-center"></div>
    <tr>
            <center><img src="img/utama.jpeg" width="300px" ></center>
            </tr>
    <h5><center>Alat ini menggunakan mikrokontroler Arduino UNO, sensor Photo Resistor yang berfungsi mendeteksi adanya cahaya, modul relay yang berfungsi untuk menghidupkan dan mematikan peralatan listrik, untuk daya yang di gunakan untuk alat ini terdapat dari 2 masukan daya, yang pertama dari baterai atai powerbank dan juga listrik tipe AC untuk mengghidupkan lampu yang di gunakan. Lampu yang di gunakan adalah lampu yang memerlukan daya sebesar 3A.</center></h5>

<div class="container text-center"></div>
    <div class ="row">
        @stack('before-content')
        @yield('content')
        @stack('after-content')
    </div>

    @stack('before-script')
    @include('includes.script')
    @stack('after-script')
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.tiny.cloud/1/88y8ggw1yrpr2u8d18th02iceyad2cc267qn0cyqunvmiu5w/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
    tinymce.init({
      selector: 'textarea',
      plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
      toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
    });
    </div>
</body>

</html>