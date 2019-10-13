@extends('layouts.front_page')
@section('title','Jadwal')

@section('text')
<marquee>
    <p>
        @foreach($news as $new)
        {{ strtoupper($new->content) }}
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        @endforeach
    </p>
</marquee>
@endsection

@section('content')
<div id="content">

</div>
@endsection

@section('script')
<script>
    $('#content').load("{{ url('/loading') }}");
    setInterval(() => {
        $('#content').load("{{ url('/loading') }}");
    }, 3000);
</script>
@endsection