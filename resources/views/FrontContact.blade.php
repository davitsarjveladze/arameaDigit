@extends('layouts.app')

@section('content')

    <div class="content container ">
        <h2 class="h2-home">Contact</h2>

        <div class="row">
        <div class="col-lg-7">
        <div class="alert alert-primary mb-3" role="alert">
            U can send only 3 message in day
        </div>
        <form action="/contact/store" method="post">
            @csrf
            <div class="form-group">
                <label for="exampleFormControlInput1">Subject</label>
                <input type="text" class="form-control" id="" required name="subject" maxlength="50" >
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">text</label>
                <textarea class="form-control" id="text"  maxlength="2000" required name="text" rows="3"></textarea>
            </div>
            <div>
                <button class="btn btn-primary" type="submit"> Send</button>
            </div>
        </form>
        </div>
        <div class="col-lg-5">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid a
                nimi debitis deserunt, dicta eligendi id illo itaque laborum libero
                odit quia rem saepe sapiente sunt ullam vel vero voluptas voluptatem.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Consequatur, corporis cumque distinctio dolore dolores
                eius facilis fugiat hic inventore ipsam iste numquam pariatur
                possimus provident quos ratione repellat sed similique!
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Assumenda dignissimos dolore eos est excepturi facilis molestias
                nemo non nulla optio, placeat tempore vero vitae. Fuga fugiat natus quas similique tempora.
            </p>
        </div>
        </div>
    </div>
@endsection