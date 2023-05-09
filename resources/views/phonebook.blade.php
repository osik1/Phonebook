<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <title>PhoneBook</title>
</head>
<body>
    <div class="page-wrapper">
        <div class="illustration">
            <img src="{{asset('images/phonecall.png')}}" alt="">
        </div>
        <div class="app-page">
            <div class="app-content">
                <div class="logobox">
                    <img src="{{asset('images/logo.png')}}" alt="logo">
                    <span>Phone Book App</span>
                </div>
                <div class="heading">
                    <h1>Contacts</h1>
                    <a href="{{url('add-contact')}}"><button class="btn">+ Add Contact</button></a>
                </div>
                <div class="search-form">
                    <input type="search" name="" id="" class="text-input" placeholder="Search for contact by last name...">
                </div>
                <div class="contact-list">
                    <div class="contact">
                        <div class="details">
                            <div class="name">
                                <p>Eric Eliot</p>
                            </div>
                            <div class="number">
                            <p>222-555-6575</p>
                            </div>
                        </div>
                        <div class="delete-box">
                            <a href=""><img src="{{asset('images/delete.png')}}" alt=""></a>
                        </div>
                    </div>
                    <div class="contact">
                        <div class="details">
                            <div class="name">
                                <p>Steve Jobs</p>
                            </div>
                            <div class="number">
                            <p>220-454-6754</p> 
                            </div>
                        </div>
                        <div class="delete-box">
                            <a href=""><img src="{{asset('images/delete.png')}}" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</body>
</html>