<!doctype html>
<html lang="ru">
  <head>
       <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
   <title>Hello, world!</title>
  
    <h1>Hello, world!</h1>
    <style>
      [class^="col"] {
         min-height: 100px;
         border: 3px solid black;
         box-sizing: border-box; 
      }
      .vertical {
           min-height: 400px;
            border: 3px dashed red;
         }
      .my_class
       {min-height: 100px;
       }
      </style>
  </head>
  <body>
    <div class="container">
      <div class="row bg-warning">
        <div class="col-4">1</div>
        <div class="col-3">2</div>
        <div class="col-5">3</div>
      </div>
    </div> 
    <div class="container">
      <div class="row">
        <div class="col-sm">4</div>
        <div class="col-sm">5</div>
        <div class="col-sm">6</div>
      </div>
    </div>
  
    <div class="container">
      <div class="row row-cols-2">
        <div class="col-1">7</div>
        <div class="col-2">8</div>
        <div class="col-6">9</div>
        <div class="col-3">10</div>
      </div>
    </div>
    <div class="row bg-warning mt-2">
        <div class="col-12">AA</div>
        <div class="col-5">BB</div>
        <div class="col">CC</div>
        <div class="col">DD</div>
        <div class="col">EE</div>
      </div>
    </div
    <div class="container">
    <div class="row mt-2 vertical align-items-center">
        <div class="col my class">NN</div>
        <div class="col my class">FF</div>
        <div class="col my class">JJ</div>
      </div>
    </div
    <div class="container">
    <div class="row  vertical mt-2 bg-warning">
        <div class="col my_class align-self-start">NN</div>
        <div class="col my_class align-self-centr">FF</div>
        <div class="col my_class align-self-end">JJ</div>
      </div>
    </div
    <div class="container">
    <div class="row mt-2 vertical bg-green align-items-center">
        <div class="col-2">rr</div>
        <div class="col-2">ww</div>
        <div class="col-2">ss</div>
      </div>
    </div
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    
    
    
    
    <div class="container-xs">
      <div class="row  mt-2">
        <div class="col-12">1</div>
        <div class="col-invisible">2</div>
        <div class="col-12">3</div>
        <div class="col-invisible">4</div>
        <div class="col-12">5</div>
        <div class="col-invisible">7</div>
        <div class="col-12">8</div>
        <div class="col-12">6</div>
      </div>
    </div>
    <div class="container-sm">
      <div class="row mt-2">
        <div class="col-12">1</div>
        <div class="col-invisible">2</div>
        <div class="col-invisible">3</div>
        <div class="col-4">4</div>
        <div class="col-8">5</div>
        <div class="col-8">6</div>
        <div class="col-2">7</div>
         <div class="col-2">8</div>
      </div>
    </div>
    <div class="container-md">
      <div class="row  mt-2">
        <div class="col-4">1</div>
        <div class="col-5">2</div>
        <div class="col-3">3</div>
        <div class="col-5">4</div>
        <div class="col-2"></div>
        <div class="col-5">5</div>
        <div class="col-7">6</div>
        <div class="col-5">4</div>
        <div class="col-1"></div>
        <div class="col-2">7</div>
        <div class="col-1"></div>
        <div class="col-1">8</div>
      </div>
    </div>
    <div class="container-lg">
      <div class="row  mt-2">
        <div class="col-12">1</div>
        <div class="col-5">3</div>
        <div class="col-7">2</div>
        <div class="col-2">5</div>
        <div class="col-2">6</div>
        <div class="col-4">4</div>
        <div class="col-1">7</div>
        <div class="col-3">8</div>
      </div>
    </div>
  </body>           
</html>     