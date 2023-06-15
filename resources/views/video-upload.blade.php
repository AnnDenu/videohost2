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
               <h2>Загрузите видео</h2>
            </div>
            <div class="panel-body">
               @if ($message = Session::get('success'))
                   <div class="alert alert-success alert-block">
                      <button type="button" class="close" data-dismiss="alert">×</button>
                      <strong>{{ $message }}</strong>
                   </div>
               @endif
 
               @if (count($errors) > 0)
               <div class="alert alert-danger">
                  <strong>Упс!</strong> Исправьте ошибку)
                  <ul>
                     @foreach ($errors->all() as $error)
                     <li>{{ $error }}</li>
                     @endforeach
                  </ul>
               </div>
               @endif
 
               <form action="{{ route('store.video') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="row">
 
                     <div class="col-md-12">
                        <div class="col-md-6 form-group">
                           <label>Заголовок:</label>
                           <input type="text" name="title" class="form-control"/>
                        </div>
                        <div class="col-md-6 form-group">
                           <label>Описание:</label>
                           <input type="text" name="description" class="form-control"/>
                        </div>
                        <div class="col-md-6 form-group">
                           <label>Видео:</label>
                           <input type="file" name="video" class="form-control"/>
                        </div>
                        <div class="col-md-6 form-group">
                           <button type="submit" class="btn btn-success">Сохранить</button>
                        
                        </div>
                        <button type="submit" class="btn btn-danger"><a href = "dashboard">Вернуться на главную</a></button>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </body>
</html>