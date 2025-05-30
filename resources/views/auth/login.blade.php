

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Login Form</title>
  <style>
    /* Reset some default */
    * {
      box-sizing: border-box;
    }
    body, html {
      margin: 0;
      height: 100%;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(135deg, #6a11cb, #2575fc);
      display: flex;
      justify-content: center;
      align-items: center;
      color: #333;
    }
    .login-container {
      background: #fff;
      padding: 2.5rem 3rem;
      border-radius: 12px;
      box-shadow: 0 10px 30px rgba(0,0,0,0.1);
      width: 320px;
      text-align: center;
    }
    h2 {
      margin-bottom: 1.5rem;
      color: #2575fc;
    }
    form {
      display: flex;
      flex-direction: column;
      gap: 1.25rem;
    }
    label {
      text-align: left;
      font-weight: 600;
      color: #444;
      font-size: 0.9rem;
    }
    input[type="email"],
    input[type="password"] {
      padding: 0.75rem 1rem;
      border: 1.8px solid #ddd;
      border-radius: 8px;
      font-size: 1rem;
      transition: border-color 0.3s ease;
    }
    input[type="email"]:focus,
    input[type="password"]:focus {
      border-color: #2575fc;
      outline: none;
      box-shadow: 0 0 8px rgba(37, 117, 252, 0.4);
    }
    button {
      margin-top: 0.5rem;
      padding: 0.85rem 1.5rem;
      background: #2575fc;
      color: white;
      border: none;
      border-radius: 8px;
      font-weight: 700;
      font-size: 1rem;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }
    button:hover {
      background: #1a52d1;
    }
    .footer-text {
      margin-top: 1.25rem;
      font-size: 0.85rem;
      color: #666;
    }
    .footer-text a {
      color: #2575fc;
      text-decoration: none;
    }
    .footer-text a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <div class="login-container" role="main">
    <h2>Login</h2>
     @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('login') }}" method="POST"  autocomplete="off" novalidate>
        @csrf
        <div>
            <label>Email:</label>
            <input id="email" name="email" type="email"  required>
        </div>
        <div>
            <label>Password:</label>
            <input type="password" name="password" required>
        </div>
        <button type="submit">Login</button>
    </form>
    
  </div>
  <script>
    // Clear password field on page load to prevent autofill retention after reload
    window.addEventListener('load', () => {
      const passwordInput = document.getElementById('password');
      if(passwordInput) {
        passwordInput.value = '';
      }
    });

    // Simple client-side validation example
    document.getElementById('loginForm').addEventListener('submit', function(event) {
      event.preventDefault();
      const email = this.email.value.trim();
      const password = this.password.value.trim();

      if (!email) {
        alert('Please enter your email.');
        this.email.focus();
        return;
      }
      if (!password) {
        alert('Please enter your password.');
        this.password.focus();
        return;
      }
      // For demo purposes, just print the inputs
      alert(`Logging in with\nEmail: ${email}\nPassword: ${'*'.repeat(password.length)}`);
    });
  </script>
</body>
</html>

