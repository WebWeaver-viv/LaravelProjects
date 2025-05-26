<!DOCTYPE html>
<html>
<head>
    <title>Signup</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container mx-auto mt-10">
        <h2 class="text-2xl font-bold mb-4">Signup</h2>

        @if ($errors->any())
            <div class="bg-red-100 text-red-700 p-2 mb-4 rounded">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('signup') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label>Name:</label>
                <input type="text" name="name" value="{{ old('name') }}" class="border p-2 w-full">
            </div>

            <div class="mb-4">
                <label>Email:</label>
                <input type="email" name="email" value="{{ old('email') }}" class="border p-2 w-full">
            </div>

            <div class="mb-4">
                <label>Password:</label>
                <input type="password" name="password" class="border p-2 w-full">
            </div>

            <div class="mb-4">
                <label>Confirm Password:</label>
                <input type="password" name="password_confirmation" class="border p-2 w-full">
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2">Signup</button>
        </form>
    </div>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <title>Signup</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container mx-auto mt-10">
        <h2 class="text-2xl font-bold mb-4">Signup</h2>

        @if ($errors->any())
            <div class="bg-red-100 text-red-700 p-2 mb-4 rounded">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('signup') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label>Name:</label>
                <input type="text" name="name" value="{{ old('name') }}" class="border p-2 w-full">
            </div>

            <div class="mb-4">
                <label>Email:</label>
                <input type="email" name="email" value="{{ old('email') }}" class="border p-2 w-full">
            </div>

            <div class="mb-4">
                <label>Password:</label>
                <input type="password" name="password" class="border p-2 w-full">
            </div>

            <div class="mb-4">
                <label>Confirm Password:</label>
                <input type="password" name="password_confirmation" class="border p-2 w-full">
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2">Signup</button>
        </form>
    </div>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <title>Signup</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container mx-auto mt-10">
        <h2 class="text-2xl font-bold mb-4">Signup</h2>

        @if ($errors->any())
            <div class="bg-red-100 text-red-700 p-2 mb-4 rounded">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('signup') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label>Name:</label>
                <input type="text" name="name" value="{{ old('name') }}" class="border p-2 w-full">
            </div>

            <div class="mb-4">
                <label>Email:</label>
                <input type="email" name="email" value="{{ old('email') }}" class="border p-2 w-full">
            </div>

            <div class="mb-4">
                <label>Password:</label>
                <input type="password" name="password" class="border p-2 w-full">
            </div>

            <div class="mb-4">
                <label>Confirm Password:</label>
                <input type="password" name="password_confirmation" class="border p-2 w-full">
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2">Signup</button>
        </form>
    </div>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <title>Signup</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container mx-auto mt-10">
        <h2 class="text-2xl font-bold mb-4">Signup</h2>

        @if ($errors->any())
            <div class="bg-red-100 text-red-700 p-2 mb-4 rounded">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('signup') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label>Name:</label>
                <input type="text" name="name" value="{{ old('name') }}" class="border p-2 w-full">
            </div>

            <div class="mb-4">
                <label>Email:</label>
                <input type="email" name="email" value="{{ old('email') }}" class="border p-2 w-full">
            </div>

            <div class="mb-4">
                <label>Password:</label>
                <input type="password" name="password" class="border p-2 w-full">
            </div>

            <div class="mb-4">
                <label>Confirm Password:</label>
                <input type="password" name="password_confirmation" class="border p-2 w-full">
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2">Signup</button>
        </form>
    </div>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <title>Signup</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container mx-auto mt-10">
        <h2 class="text-2xl font-bold mb-4">Signup</h2>

        @if ($errors->any())
            <div class="bg-red-100 text-red-700 p-2 mb-4 rounded">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('signup') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label>Name:</label>
                <input type="text" name="name" value="{{ old('name') }}" class="border p-2 w-full">
            </div>

            <div class="mb-4">
                <label>Email:</label>
                <input type="email" name="email" value="{{ old('email') }}" class="border p-2 w-full">
            </div>

            <div class="mb-4">
                <label>Password:</label>
                <input type="password" name="password" class="border p-2 w-full">
            </div>

            <div class="mb-4">
                <label>Confirm Password:</label>
                <input type="password" name="password_confirmation" class="border p-2 w-full">
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2">Signup</button>
        </form>
    </div>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <title>Signup</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container mx-auto mt-10">
        <h2 class="text-2xl font-bold mb-4">Signup</h2>

        @if ($errors->any())
            <div class="bg-red-100 text-red-700 p-2 mb-4 rounded">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('signup') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label>Name:</label>
                <input type="text" name="name" value="{{ old('name') }}" class="border p-2 w-full">
            </div>

            <div class="mb-4">
                <label>Email:</label>
                <input type="email" name="email" value="{{ old('email') }}" class="border p-2 w-full">
            </div>

            <div class="mb-4">
                <label>Password:</label>
                <input type="password" name="password" class="border p-2 w-full">
            </div>

            <div class="mb-4">
                <label>Confirm Password:</label>
                <input type="password" name="password_confirmation" class="border p-2 w-full">
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2">Signup</button>
        </form>
    </div>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <title>Signup</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container mx-auto mt-10">
        <h2 class="text-2xl font-bold mb-4">Signup</h2>

        @if ($errors->any())
            <div class="bg-red-100 text-red-700 p-2 mb-4 rounded">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('signup') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label>Name:</label>
                <input type="text" name="name" value="{{ old('name') }}" class="border p-2 w-full">
            </div>

            <div class="mb-4">
                <label>Email:</label>
                <input type="email" name="email" value="{{ old('email') }}" class="border p-2 w-full">
            </div>

            <div class="mb-4">
                <label>Password:</label>
                <input type="password" name="password" class="border p-2 w-full">
            </div>

            <div class="mb-4">
                <label>Confirm Password:</label>
                <input type="password" name="password_confirmation" class="border p-2 w-full">
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2">Signup</button>
        </form>
    </div>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <title>Signup</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container mx-auto mt-10">
        <h2 class="text-2xl font-bold mb-4">Signup</h2>

        @if ($errors->any())
            <div class="bg-red-100 text-red-700 p-2 mb-4 rounded">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('signup') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label>Name:</label>
                <input type="text" name="name" value="{{ old('name') }}" class="border p-2 w-full">
            </div>

            <div class="mb-4">
                <label>Email:</label>
                <input type="email" name="email" value="{{ old('email') }}" class="border p-2 w-full">
            </div>

            <div class="mb-4">
                <label>Password:</label>
                <input type="password" name="password" class="border p-2 w-full">
            </div>

            <div class="mb-4">
                <label>Confirm Password:</label>
                <input type="password" name="password_confirmation" class="border p-2 w-full">
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2">Signup</button>
        </form>
    </div>
</body>
</html>
