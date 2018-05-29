<!DOCTYPE html>
<html>
<head>
    <title>Call to Interview</title>
</head>

<body>
<p>You have been called to interview for the position of</p>
<br>
<h2>{{ $position }}</h2>
<br>
<p>The time for the online interview is {{ $time }}</p>
<br>
<p>The link for the online interview is <a href="{{ route('interview_id',['id'=>$room_id]) }}">{{ route('interview_id',['id'=>$room_id]) }}</a>.</p>
<br>
<p>May the best of luck be with you always!</p>
</body>

</html>