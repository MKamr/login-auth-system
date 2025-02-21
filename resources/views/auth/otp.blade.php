<!DOCTYPE html>
<html>
<head>
    <title>OTP Verification</title>
</head>
<body>
    <h2>Enter OTP</h2>
    <form method="POST" action="{{ route('otp.verify') }}">
        @csrf
        <label>OTP:</label>
        <input type="text" name="otp" required><br>
        <button type="submit">Verify OTP</button>
    </form>
</body>
</html>
