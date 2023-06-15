<!DOCTYPE html>
<html>
   <head>
      <title>Загрузка</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
   </head>
   <body>
      <div class="container mt-5">
         <div class="panel panel-primary">
            <div class="panel-heading">
               <h2>Выгрузка всех видео</h2>
            @foreach($data as $el)
            <div class="media">
        <div class="media-body">
        <video src="{!! $el -> path !!}" type="video/mp4" loop class="hover-to-play w-100">
        </video>
        <p> {{$el -> title}}
        {{$el -> description}}
        <small>{{$el -> created_at}}</small></p>
                </div>
</div>
                <!--Попытка создания лайков-->
            @endforeach
           
                        </form>
                     </div>
                  </div>
            </div>
   </body>
</html>