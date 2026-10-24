<h1>New website message</h1>

<p><strong>Name:</strong> {{ $senderName }}</p>
<p><strong>Email:</strong> {{ $senderEmail }}</p>

<p><strong>Message:</strong></p>
<p>{!! nl2br(e($messageBody)) !!}</p>
