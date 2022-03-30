
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('public/Mailtemplate/css/style.css')}}">
    <title>Template</title>
    <style>
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
html, body {
    max-width: 100%;
    overflow-x: hidden;
    font-family: 'Montserrat', sans-serif;
}


.forumbtn{
    background: #5f378d;

    display: inline-block;
    padding: 8px 20px;
    font-family: "Montserrat", sans-serif;
    font-size: 16px;
    font-weight: 600;
    border: 0;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
    text-align: center;
    color: #fff !important;
    text-transform: capitalize;
    -webkit-transition: 0.5s;
    -moz-transition: 0.5s;
    -o-transition: 0.5s;
    transition: 0.5s;
    cursor: pointer;
    letter-spacing: 2px;
    text-decoration: none;
}
.forumbtn:hover{
    background: #4BA8FD;
    color: #fff !important;
}
.mainsec{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    padding: 30px;
    text-align: center;
    gap: 30px;
}
.formBox{
    /* box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px; */
    padding: 40px;
    border-radius: 4px;
  
    gap:23px;
    text-align: left;
}
.formBox h2{

    font-weight: 600;
    font-size: 20px;
}
.formBox span{
    color: #5f378d;
}
.footer{
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    background: #5f378d;
    padding: 10px;
    color: white;
    text-align: center;
    gap: 20px;
}

.copyright{
    width: 100%;
    padding: 5px 0;

}
.copyright p {
    margin: 0;
    color: rgb(223, 215, 215);
}
.formBox h2{
    margin: 8px 3px;
}
    </style>
</head>
<body>
    <header class="topBar">
{{-- <img src="{{asset('public/Mailtemplate/images/logo.jpg')}}" alt=""> --}}
    </header>
    <main class="mainsec">
<div class="formBox" style="">

<h2>
    Full Name: <span>{{$formdata['fname']}} {{$formdata['surname']}}</span>
</h2>
<br>
<h2>
    Company: <span>{{$formdata['companyname']}}</span>, <span>{{$formdata['city']}}</span>, <span>{{$formdata['country']}}</span>
</h2>
<br>
<h2>
    Website: <span>{{$formdata['webUrl']}}</span>
</h2>
<br>

<h2>
    Email: <span>{{$formdata['email']}}</span>
</h2>

</div>
<a href="{{route('customer-profile',$formdata['id'])}}" class="forumbtn" style="margin:10px 3px;">Check Form</a>

    </main>
    <footer class="footer">


<div class="copyright">
    <p>

Copyright @pixelnuts 2019-2022 All rights reserved.
    </p>
</div>
    </footer>
</body>
</html>


