<!DOCTYPE html>
<html>
<head>
    <title>Profil</title>
    <style>
        .img{
            height: 250px;
            width: 200px;
        }
    </style>
</head>
<body>
    <center><p>Nurmansyah Putra Bachtyar 1461900173</p>
    <section>
    <nav>
        <a href="{{url('/home')}}">
            <input type="button" value="HOME"></input>
        </a>
        <a href="{{url('/artikel')}}">
            <input type="button" value="ARTIKEL"></input>
        </a>
        <a href="{{url('/profil')}}">
            <input type="button" value="CONTACT US"></input>
        </a>
    </nav>
    </br>
    <article>
    <div>
        <img src="{{url('/foto.jpg')}}" class="img"></img>
    </div>
    <div>
        <a>Nama : Nurmansyah Putra Bachtyar</a></br>
        <a>No Telp : 081515985743</a></br>
        <a>Email : nurmansyahbachtyar@gmail.com</a></br>
        <a>Instagram : @bachtyarrrr</a>
    </div>
    </article>
    </section>
</body>
</html>