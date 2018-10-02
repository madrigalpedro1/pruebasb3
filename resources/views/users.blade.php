@include('header')
<body>
    <h1>{{$title}}</h1>

    @if(! empty($users))
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
        <ul class="navbar-nav">
            @foreach($users as $users)
            <li class="nav-item">{{$users}}</li>
            @endforeach
        </ul>
        </nav>
    @else
        <p>No hay usuarios Registrados</p>
    @endif
</body>
</html>