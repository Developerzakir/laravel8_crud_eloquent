<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 offset-md-3">
           

            <div class="card">
                <div class="card-header bg-primary text-light">
                Edit Post

                </div>

                <div class="card-body">

                    @if(Session::has('update_post'))

                    <div class="alert alert-success" role="alert">
                        {{Session::get('update_post')}}

                    </div>

                    @endif
                    <form method="POST" action="{{route('updatePost')}}">
                        @csrf 

                        <input type="hidden" name="id" value="{{$post->id}}">

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Post Title</label>
                            <input type="text" name="title" value="{{$post->title}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Post Description</label>
                            <textarea name="body" class="form-control"   rows="5">{{$post->body}}</textarea>
                        </div>
                      
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
    


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>