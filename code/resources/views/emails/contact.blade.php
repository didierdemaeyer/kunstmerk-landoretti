<p>Name: {{ $request->get('name') }}</p>
<p>Email: {{ $request->get('email') }}</p>
@if($auction)
	<p>About auction: {{ $auction->title }} - {{ $auction->artist }}</p>
@endif
<p>Message:</p>
<p>
	{{ $request->get('message') }}
</p>
