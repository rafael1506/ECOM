<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/style2.css') }}"/>
</head>

<body>
    
@if(session('error'))
<div class="alert alert-error">
	{{session('error')}}
</div>
@endif

@if(count($errors) > 0)
<div class="alert alert-danger">
	<strong>Perhatian</strong>
	<br/>
	<ul>
		@foreach ($errors->all() as $error)
		<li> {{ $error }} </li>
		@endforeach
	</ul>
	</div>
@endif

	@csrf
	
	<section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <form method="POST" class="register-form" id="register-form" action="{{url('customers')}}">
                           @csrf
        
        @if(!empty($siswa))
            @method('PATCH')
            @endif
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" value="{{ old('name',  @$customers->name) }}" placeholder="Your Name"/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="text" name="email" value="{{ old('email',  @$customers->email) }}"placeholder="example@email.com"/>
                            </div>
                                
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="text" name="password" value="{{ old('password',  @$customers->password) }}"placeholder="Password"/>
                            </div>
                            
                            
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="alamat" value="{{ old('alamat',  @$customers->alamat) }}"placeholder="Address"/>
                            </div>
                            
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="telp" value="{{ old('telp',  @$customers->telp) }}"placeholder="Contact"/>
                            </div>
                            
                            <div class="signup-image">
                                <figure><input type="submit" value="Signup"/></figure>
                            </div>
                        </form>
                        <div class="signup-image">
                            <figure><img src="./image/signup-image.jpg"></figure>
                            <a href="" class="signup-image-link" method="POST">I am already member</a>
                            
                        </div>
                    </div>
                    </div>
                    </div>
            </section>
                        
</body>             
</html>
