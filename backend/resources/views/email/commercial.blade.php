<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Commercial Request</title>
</head>
<body>

<h2>Commercial Service Request</h2>

<p><strong>Name:</strong> {{ $data['name'] }}</p>
<p><strong>Email:</strong> {{ $data['email'] }}</p>
<p><strong>Phone:</strong> {{ $data['phone'] }}</p>
<p><strong>Country:</strong> {{ $data['country'] }}</p>
<p><strong>Service Type:</strong> {{ $data['service_type'] }}</p>
<p><strong>Service Name:</strong> {{ $data['service_name'] }}</p>

<p><strong>Message:</strong></p>
<p>{{ $data['messages'] }}</p>

</body>
</html>
