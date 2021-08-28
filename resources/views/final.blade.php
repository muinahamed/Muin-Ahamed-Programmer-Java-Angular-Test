<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/cf17740b74.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>

  <!-- strat form  -->
  

  <div class="container mt-5 p-5 shadow-lg p-3 mb-5 bg-white rounded">



      <div>
           <hr style="width:100%" class=" mb-2  mt-0 mb-0 hrt">

     </div>

     <div for="inputEmail4" class="form-label">3/3</div> 
    <label for="inputEmail4" class="form-label w">Summary</label>
    
    <section class=" ">
             
                   <span class="border border-dark rounded-circle ps-1 pe-1 me-4">1</span>
                 
  
               <span class="w w1 c">Personal Details</span>
            

    
             <div class="mt-3 ms-5 w1">

                  <p>
                   <span class="w me-2">First Name :</span>{{session('FirstName')}}
                  </p>
                  <p>
                  <span class="w me-2 ">Last Name :</span>{{session('LastName')}}
                  </p>
                  <p>
                  <span class="w me-2">Email :</span>{{session('Email')}}
                  </p>
                  <p>
                  <span class="w me-2">Country :</span>{{session('Country')}}
           
                  </p>
    
            </span> 
   

     </section>

    <!-- end section -->


             <div>
                <hr>
            </div>


       <section class=" ">

              <span class="border border-dark rounded-circle ps-1 pe-1 me-4">2</span>
              <span class="w w1 c">Account Details</span>

              <div class="mt-3 ms-5 w1">
              <p>
                <span class="w me-2">User Name :</span>{{session('UserName')}}
              </p>
              <p>
               <span class="w me-2">Password :</span>{{session('Password')}}
             </p>
              </div>

   
        </section>

    
         <div> 
           <hr>
        </div>

    <div class="col-12 d-flex justify-content-end ">


            <button
            class="btn btn-primary me-2"
            type="button"
            onclick="location.href='{{ url('/finalprev') }}'">Prev
            </button>



            <button
            class="btn btn-primary "
            type="button"
            onclick="location.href='{{ url('/registration') }}'"
            >Submit   <i class="fas fa-check"></i>
            </button>



       </div>
    
  </div>
  

  


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    
</body>
</html>