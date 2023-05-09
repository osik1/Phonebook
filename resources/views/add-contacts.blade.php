<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <title>Add Contact</title>
</head>
<body>
    <div class="page-wrapper">
        <div class="illustration">
            <img src="{{asset('images/addffiles.png')}}" alt="">
        </div>
        <div class="app-page">
            <div class="app-content">
                <div class="logobox">
                    <a href="{{url('/')}}">
                    <img src="{{asset('images/logo.png')}}" alt="logo">
                    <span>Phone Book App</span>
                    </a>
                </div>
                
                 <div class="form-box">
                    <div class="form-heading">
                        <h1>Add Contacts</h1>
                    </div>
                    <form action="{{url('store-contact')}}" method="POST">
                    @csrf
                        <input type="hidden" name="id" value =""> 
                        <div>
                            <label for="">First Name</label>
                            <input type="text" name="first_name" value ="{{old('first_name')}}" class="text-input" placeholder="Enter your first name">
                            @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('first_name') }}</span>
                            @endif
                        </div>
                        <div>
                            <label for="">Last Name</label>
                            <input type="text" name="last_name"  value ="{{old('last_name')}}" class="text-input" placeholder="Enter your last name">
                            @if ($errors->has('last_name'))
                                <span class="text-danger">{{ $errors->first('last_name') }}</span>
                            @endif
                        </div>
                        <div>
                            <label for="">Phone Number</label>
                            <input type="tel" name="phone"  value ="{{old('phone')}}" class="text-input" placeholder="Phone number">
                            @if ($errors->has('phone'))
                                <span class="text-danger">{{ $errors->first('phone') }}</span>
                            @endif
                        </div>
                        
                        <br> 
                        <div>
                            <button type="submit" name="register-btn" class="btn btn-big">+ Save</button>
                        </div>
                    </form>
                 </div>
                
          
            </div>
            
        </div>
    </div>
</body>
</html>