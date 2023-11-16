@extends('master')

@section('content')
    <section class="joke-section">
        <div class="container py-5 ">
            <p> {{ $jokeElement->content }}</p>
        </div>
    </section>

    <section class="btn-section">
        <div class="container line-box">
            <div class="line-custom">

            </div>
        </div>
        <div class="container d-flex justify-content-center"">
            <div class="d-flex" style="gap:30px">
                <a href="{{ route('update', ['id' => $jokeElement->id, 'like' => 'like']) }}" class="btn btn-primary">This
                    is Funny!</a>
                <a href="{{ route('update', ['id' => $jokeElement->id, 'like' => 'dislike']) }}"
                    class="btn btn-success">This
                    is not funny.</a>
            </div>
        </div>
    </section>
@endsection
