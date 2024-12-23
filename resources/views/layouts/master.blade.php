<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>skrepkaSkrepka</title>
    </head>
    <body>
    
    @if (isset($errors) && $errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
               <li>{{ $error }} </li>
             @endforeach
            </ul>
        </div>
    @endif 

        @if (session()->has('error'))
        <div class="alert alert-danger">
            {{ session()->get('error') }}
        </div>
   @endif
   @yield('content')
    </body>
</html> 
