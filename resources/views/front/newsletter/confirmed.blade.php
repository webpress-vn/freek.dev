@extends('front.layouts.app', [
    'title' => 'Subscribed!',
])

@section('content')
    <div class="markup">
        <h1>Subscribed!</h1>
        <p>
            Awesome! You are now subscribed to my newsletter. Every two weeks you can expect some nice links to cool stuff on Laravel, PHP and JavaScript in your mailbox.
        </p>
        <p>
            By clicking [this link](https://twitter.com/intent/tweet?url=https%3A%2F%2Ffreek.dev%2Fnewsletter&text=I%27ve%20just%20signed%20up%20for%20the%20newsletter%20on%20Laravel%2C%20PHP%20and%20JavaScript%20by%20@freekmurze.%20You%20can%20sign%20up%20via%20this%20link%3A&hashtags=laravel%2C%20php%2C%20javascript) you can share your subscription with your followers on Twitter.
        </p>
    </div>
@endsection
