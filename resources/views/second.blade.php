<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <script defer src="js/js.js">
</script>
    <title>Document</title>
</head>
<body>

  <!-- strat form  -->
  

  <div class="container mt-5 p-5 shadow-lg p-3 mb-5 bg-white rounded">

  <form class="row g-3" action="{{URL::to('/second')}}"  method="post">
  @csrf

        <div class="col-md-12">
          <div>
         <hr style="width:75%" class=" mb-2  mt-0 mb-0 hrt">

       </div>
         <div for="inputEmail4" class="form-label">2/3</div> 
        <label for="inputEmail4" class="form-label w">PLease fill with your details</label>
        <input onkeyup="isEmpty2()" type="text" class="form-control-cs form-control" name="UserName" placeholder="User name">
           @if($opol!="0")
               <span class="pb-0 text-danger Italic text">{{$opol}}</span>
    
            @endif
  </div>
  <div class="col-12">
    
         <input onkeyup="isEmpty2()" type="password" class="form-control-cs     form-control" name="Password" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">

          @if($muin!="0")
               <span class="pb-0 text-danger Italic text">{{$muin}}</span>
    
            @endif
  </div>
  <div class="col-12">
  
          <input onkeyup="isEmpty2()" type="password" class="form-control-cs form-control" name="CPassword" placeholder="Confirm password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
  </div>
  
  
       <div>
        <hr class="second-hr mb-0">
      </div>
  
   <div class="col-12 d-flex justify-content-end ">

      
   
  
     <button
            class="btn btn-primary me-2"
            type="button"
            onclick="location.href='{{ url('/') }}'"
        >Prev</button>
   


         
      

  <button id="next-btn2" type="submit" class="btn btn-primary" disabled>Next</button>
  </div>

  </form>
</div>

<script src="{{ asset('/js/script.js')}} "></script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    
</body>
</html>