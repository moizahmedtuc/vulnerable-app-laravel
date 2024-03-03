<form method="POST" action="{{ route('register') }}">
    @csrf
    <input type="text" name="name" placeholder="Name" required>
    <input type="email" name="email" placeholder="Email" required>
    <!-- Add this inside the <form> tag -->
<div>
    <label for="password">Password</label>
    <input type="password" id="password" name="password" required>
</div>

    <input type="checkbox" name="admin" value="1"> Admin
    <button type="submit">Register</button>
</form>
