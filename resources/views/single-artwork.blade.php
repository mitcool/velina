@extends('layout')

@section('seo')
    <title>{{ $artwork->name_en }} | {{ $artwork->name }} | velinagrebenska.com</title>
    <meta name="description" content="">
    <meta name="author" content="Velina Grebenska">
@endsection

@section('css')

<style>
.split-layout * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

.split-layout {
    display: flex;
    gap: 60px;
    padding: 0 60px;
    min-height: 100vh;
}

.image-section,
.form-section {
    margin-top:100px;
    flex: 1;
    min-width: 0;
    padding: 30px 0;
}


/* Image */

.image-section img {
    width: 100%;
    height: auto;
    object-fit: cover;
    display: block;
    margin:0 auto;
}

.image-section p{
    width:100%;
}

/* Form */

.form-section {
    display: flex;
    justify-content: center;
    align-items: flex-start;
}

.form-wrapper {
    width: 100%;
    max-width: 500px;
    padding: 40px;
    background: #fff;
    border: 1px solid #eee;
    border-radius: 12px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.06);
}

.form-eyebrow {
    font-size: 0.8rem;
    letter-spacing: 0.15em;
    text-transform: uppercase;
    color: #a81c51;
    margin-bottom: 8px;
}

.form-wrapper h1 {
    font-size: 1.8rem;
    line-height: 1.25;
    margin-bottom: 10px;
}

.form-wrapper .form-intro {
    margin-bottom: 30px;
    color: #666;
    line-height: 1.6;
}

.form-alert {
    padding: 12px 16px;
    margin-bottom: 20px;
    border-radius: 8px;
    background: #f3faf5;
    border: 1px solid #b7e0c3;
    color: #1e6b34;
}

.contact-form .form-group {
    margin-bottom: 20px;
}

.contact-form label {
    display: block;
    margin-bottom: 8px;
    font-size: 0.85rem;
    font-weight: 600;
    letter-spacing: 0.03em;
    color: #333;
}

.contact-form input,
.contact-form textarea {
    width: 100%;
    padding: 12px 14px;
    border: 1px solid #ddd;
    border-radius: 8px;
    background: #fafafa;
    font-size: 16px;
    font-family: inherit;
    color: #222;
    transition: border-color 0.2s, box-shadow 0.2s, background 0.2s;
}

.contact-form input:focus,
.contact-form textarea:focus {
    outline: none;
    background: #fff;
    border-color: #a81c51;
    box-shadow: 0 0 0 3px rgba(168, 28, 81, 0.15);
}

.contact-form .is-invalid {
    border-color: #d33;
}

.contact-form .field-error {
    display: block;
    margin-top: 6px;
    font-size: 0.85rem;
    color: #d33;
}

.contact-form textarea {
    resize: vertical;
    min-height: 130px;
}

.contact-form .hp-field {
    position: absolute;
    left: -9999px;
    width: 1px;
    height: 1px;
    overflow: hidden;
}

.contact-form button {
    width: 100%;
    padding: 14px;
    border: none;
    border-radius: 8px;
    background: #a81c51;
    color: #fff;
    font-size: 16px;
    font-weight: 600;
    letter-spacing: 0.03em;
    cursor: pointer;
    transition: background 0.2s, transform 0.1s;
}

.contact-form button:hover {
    background: #8a1642;
}

.contact-form button:active {
    transform: translateY(1px);
}

/* Responsive */

@media (max-width: 768px) {

    .split-layout {
        flex-direction: column;
        gap: 40px;
        padding: 0 20px;
    }

    .image-section,
    .form-section {
        width: 100%;
    }

    .form-section {
        margin-top: 0;
        padding: 0 0 40px;
    }

    .form-wrapper {
        padding: 24px;
    }
    .share-text{
        display: flex;
        justify-content: flex-end;
        width:100%;
    }
}
</style>
@endsection

@section('content')
{{-- #main is closed in the footer component --}}
<div id="main">
        <div class="split-layout">

            <div class="image-section">
            
                <img src="{{ asset('images/artwork') }}/{{ $artwork->image }}" alt="{{ $artwork->name() }}">
                
                <p class="share-text" style="text-align:right;margin-top:10px;margin-left:auto;margin-right:auto;">
                    {{ trans('artwork.share') }}&nbsp;  
                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->url()) }}" target="_blank" aria-label="{{ trans('artwork.share-facebook') }}">
                        <i style="color:#a81c51;font-size:1.2rem;" class="fa fa-brands fa-facebook"></i>
                    </a>&nbsp; 
                    <a href="https://www.reddit.com/submit?url={{ urlencode(request()->url()) }}" target="_blank" aria-label="{{ trans('artwork.share-reddit') }}">
                        <i style="color:#a81c51;font-size:1.2rem;" class="fa fa-brands fa-reddit"></i>
                    </a>&nbsp;
                    <a href="https://www.instagram.com/" target="_blank" aria-label="Instagram">
                        <i style="color:#a81c51;font-size:1.2rem;" class="fa fa-brands fa-instagram"></i>
                    </a>
                </p>
            </div>
            <div class="form-section">
                <div class="form-wrapper">
                    <p class="form-eyebrow">{{ trans('artwork.eyebrow') }}</p>
                    <h1>{{ $artwork->name() }}</h1>
                    <p class="form-intro">{{ trans('artwork.intro') }}</p>

                    @if (session('success'))
                        <div class="form-alert" role="status">{{ session('success') }}</div>
                    @endif

                    <form class="contact-form" action="{{ route('more-information', $artwork->slug) }}" method="POST">
                        @csrf

                        <div class="hp-field" aria-hidden="true">
                            <label for="website">Website</label>
                            <input type="text" id="website" name="website" tabindex="-1" autocomplete="off">
                        </div>

                        <div class="form-group">
                            <label for="name">{{ trans('artwork.name') }}</label>
                            <input type="text" id="name" name="name" value="{{ old('name') }}" placeholder="{{ trans('artwork.name-placeholder') }}" autocomplete="name" maxlength="100" required @class(['is-invalid' => $errors->has('name')])>
                            @error('name')<span class="field-error">{{ $message }}</span>@enderror
                        </div>

                        <div class="form-group">
                            <label for="email">{{ trans('artwork.email') }}</label>
                            <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="{{ trans('artwork.email-placeholder') }}" autocomplete="email" required @class(['is-invalid' => $errors->has('email')])>
                            @error('email')<span class="field-error">{{ $message }}</span>@enderror
                        </div>

                        <div class="form-group">
                            <label for="message">{{ trans('artwork.message') }}</label>
                            <textarea id="message" name="message" rows="5" maxlength="3000" placeholder="{{ trans('artwork.message-placeholder') }}" required @class(['is-invalid' => $errors->has('message')])>{{ old('message') }}</textarea>
                            @error('message')<span class="field-error">{{ $message }}</span>@enderror
                        </div>

                        <button type="submit">{{ trans('artwork.send') }}</button>
                    </form>

                </div>

            </div>
        </div>
@endsection
