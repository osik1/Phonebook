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
                    <a href="{{url('/')}}">
                    <img src="{{asset('images/logo.png')}}" alt="logo">
                    <span>Phone Book App</span>
                    </a>
                </div>
                <div class="heading">
                    <h1>Contacts</h1>
                    <a href="{{url('add-contact')}}"><button class="btn">+ Add Contact</button></a>
                </div>
                <!-- search form -->
                <form action="{{ route('search') }}" method="GET" id="search-form">
                <div class="search-form">
                    <input type="search" name="query" id="" class="text-input" placeholder="Search for contact by last name...">
                </div>
                </form>
                <!-- //alert message  -->
                @if(session('success'))
                    <br>
                    <div class="alert alert-success" role="alert">
                        {{session('success')}}
                    </div>
                    <br>
                @endif 
                <div class="contact-list">
                @if (isset($contact))
                    @foreach ($contact as $contacts)
                        <div class="contact">
                            <div class="details">
                                <div class="name">
                                    <p>{{$contacts->first_name}} {{$contacts->last_name}}</p>
                                </div>
                                <div class="number">
                                <p>{{$contacts->phone}}</p>
                                </div>
                            </div>
                            <div class="delete-box">
                                <a href="{{url('del-contact/'.$contacts->id)}}"><img src="{{asset('images/delete.png')}}" alt=""></a>
                            </div>
                        </div>
                    @endforeach
                   @endif
                </div>
            </div>
            
        </div>
    </div>
    <script>
    document.getElementById('search-form').addEventListener('submit', function(event) {
        event.preventDefault(); // prevent the form from submitting normally
        window.location.href = "{{ route('search') }}?filter[last_name]=" + encodeURIComponent(document.getElementsByName('query')[0].value);
    });
</script>
</body>
</html>