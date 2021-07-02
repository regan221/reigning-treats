<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body>
        <div class="conatainer p-5">
            <form class="form-horizontal" action="cake" method="POST">
                @csrf
                <div class="form-group">
                  <label class="control-label col-sm-2" for="cake_name">Cake Name:</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="cake_name" id="cake_name" placeholder="Enter cake name">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2" for="cake_description">Cake description:</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="cake_description" id="cake_description" placeholder="Enter cake description">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </div>
            </form> 
            
        </div>
     
    </body>
</html>
