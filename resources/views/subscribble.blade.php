<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Join Our Mailing List</title>
    {{-- A little bit of styling to make it look nice --}}
    <style>
        body { font-family: sans-serif; background-color: #f4f4f9; display: flex; justify-content: center; align-items: center; min-height: 100vh; padding: 2rem 0; margin: 0; }
        .form-container { background: white; padding: 2rem; border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); width: 100%; max-width: 400px; }
        h2 { text-align: center; color: #333; }
        .form-group { margin-bottom: 1rem; }
        label { display: block; margin-bottom: 0.5rem; color: #555; }
        input[type="text"], input[type="email"], input[type="password"], input[type="date"] { width: 100%; padding: 0.75rem; border: 1px solid #ddd; border-radius: 4px; box-sizing: border-box; }
        .btn-submit { width: 100%; padding: 0.75rem; border: none; background-color: #007bff; color: white; border-radius: 4px; font-size: 1rem; cursor: pointer; }
        .btn-submit:hover { background-color: #0056b3; }
        .alert { padding: 1rem; margin-bottom: 1rem; border-radius: 4px; }
        .alert-success { background-color: #d4edda; color: #155724; }
        .alert-danger { color: #721c24; font-size: 0.875rem; margin-top: 0.25rem; }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Join Our Mailing List 📧</h2>

        {{-- Display success message if it exists --}}
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form method="POST" action="{{ route('subscribe.store') }}">
            @csrf

            {{-- Username Input --}}
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" value="{{ old('username') }}" required>
                @error('username')
                    <div class="alert-danger">{{ $message }}</div>
                @enderror
            </div>

            {{-- Email Input --}}
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" required>
                @error('email')
                    <div class="alert-danger">{{ $message }}</div>
                @enderror
            </div>

            {{-- NEW: Birthday Input --}}
            <div class="form-group">
                <label for="birthday">Birthday</label>
                <input type="date" id="birthday" name="birthday" value="{{ old('birthday') }}" required>
                @error('birthday')
                    <div class="alert-danger">{{ $message }}</div>
                @enderror
            </div>

            {{-- NEW: Password Input --}}
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
                @error('password')
                    <div class="alert-danger">{{ $message }}</div>
                @enderror
            </div>

            {{-- NEW: Confirm Password Input --}}
            <div class="form-group">
                <label for="password_confirmation">Confirm Password</label>
                <input type="password" id="password_confirmation" name="password_confirmation" required>
            </div>

            <button type="submit" class="btn-submit">Subscribe</button>
        </form>
    </div>
</body>
</html>
