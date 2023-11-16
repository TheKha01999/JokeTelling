@extends('master')

@section('content')
    <section class="mb-3">
        <div class="container py-5">
            <p> {{ $jokeElement->content }}</p>
        </div>
    </section>
    <hr>
    <section>
        <div class="container pt-3 pb-5 d-flex justify-content-center"">
            <div class="d-flex" style="gap:30px">
                <a href="{{ route('update', ['id' => $jokeElement->id, 'like' => 'dislike']) }}" class="btn btn-primary"
                    style="width: 150px">This is not Funny!</a>
                <a href="{{ route('update', ['id' => $jokeElement->id, 'like' => 'like']) }}" class="btn btn-success"
                    style="width: 150px">This Is Funny!</a>
            </div>
        </div>
    </section>
    <hr>
@endsection
