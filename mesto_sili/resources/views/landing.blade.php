<!DOCTYPE html>
<html>
<head>
    <title>Mesto Sili - Booking</title>
</head>
<body>
    <h1>Book Your Spot</h1>

    @if(session('success'))
        <p style="color:green">{{ session('success') }}</p>
    @endif

    <form method="POST" action="/book">
        @csrf
        <input type="text" name="name" placeholder="Name" required><br><br>
        <input type="email" name="email" placeholder="Email" required><br><br>
        <input type="text" name="phone" placeholder="Phone"><br><br>
        <input type="date" name="date" required><br><br>
        <input type="time" name="time" required><br><br>
        <textarea name="notes" placeholder="Notes"></textarea><br><br>
        <button type="submit">Book Now</button>
    </form>
</body>
</html>
