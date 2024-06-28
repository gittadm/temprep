<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8"/>
    <title>CSS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="{{ asset('mystyle.css') }}" rel="stylesheet">
</head>
<body>
    <div class="row">
        <div class="col-4 pt-5">
            <div class="alert alert-danger" role="alert">
                A simple danger alert—check it out!
            </div>
            <form>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control form-control-sm" id="exampleInputPassword1">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
            </form>
        </div>
        <div class="col-4">
            <div class="progress mt-5">
                <div class="progress-bar" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80%</div>
            </div>
        </div>
        <div class="col-4">
            <button type="button" class="btn btn-primary">
                Notifications <span class="badge bg-success">4</span>
            </button>
        </div>
    </div>
<hr>
<h1>Заголовок</h1>
<h1 class="main strict">Заголовок 2</h1>
<h1>Заголовок 3</h1>
<h2 style="color: red; font-size: 12px;">Заголовок</h2>
<button>Click</button>
<p class="main">Lorem ipsum <span class="abc">dolor</span> sit amet, consectetur adipisicing elit. Ad consequatur deleniti est illo natus nihil officia perspiciatis quod saepe, voluptate? Culpa cumque distinctio ea harum maiores nam quod veritatis voluptatum.</p>
<div id="block">Блок</div>
</body>
</html>
