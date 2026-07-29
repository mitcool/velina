@extends('layout')

@section('seo')
    <title>{{ $artwork->name_en }} | {{ $artwork->name }} | velinagrebenska.com</title>
    <meta name="description" content="">
    <meta name="author" content="Velina Grebenska">
@endsection

@section('css')

<style>
    ul li{
        font-size:1.2rem;
        text-align: left;
    }
    p.font-weight-bold{
        font-size:1.6rem;
        font-weight:bold;
        color:#a81c51;
    }
    
    #main h5{
        font-size:1.6rem;
    }
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

.split-layout {
    display: flex;
    min-height: 100vh;
}

.image-section,
.form-section {
    margin-top:100px;
    width: 50%;
    padding:30px;
}


/* Image */

.image-section img {
    width: 75%;
    height: auto%;
    object-fit: cover;
    display: block;
    margin:0 auto;
}

/* Form */

.form-section {
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 60px;;
}

.form-wrapper {
    width: 100%;
    max-width: 500px;
}

.form-wrapper h1 {
    font-size: 2rem;
    margin-bottom: 10px;
}

.form-wrapper p {
    margin-bottom: 30px;
    color: #666;
}

.form-group {
    margin-bottom: 20px;
}

label {
    display: block;
    margin-bottom: 8px;
    font-weight: bold;
}

input,
textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 6px;
    font-size: 16px;
}

textarea {
    resize: vertical;
}

button {
    width: 100%;
    padding: 14px;
    border: none;
    background: #000;
    color: #fff;
    cursor: pointer;
    font-size: 16px;
    border-radius: 6px;
}

button:hover {
    background: #333;
}

/* Responsive */

@media (max-width: 768px) {

    .split-layout {
        flex-direction: column;
    }

    .image-section,
    .form-section {
        width: 100%;
    }

    .image-section {
        height: 300px;
    }

    .form-section {
        padding: 40px 20px;
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
<!-- **Wrapper** -->
<div class="wrapper">
	<div class="inner-wrapper">
        <div class="split-layout">

            <div class="image-section">
            
                <img src="{{ asset('images/artwork') }}/{{ $artwork->image }}" alt="Artwork" style="width: 100%">
                <hr>
                <p class="share-text" style="width: 100%;text-align:right;margin-top:10px;">
                    Share&nbsp;  
                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ request()->url() }}" target="_blank" aria-label="Share on Facebook">
                        <i style="color:#a81c51;font-size:1.2rem;" class="fa fa-brands fa-facebook"></i>
                    </a>&nbsp; 
                    <a href="https://www.reddit.com/submit?url={{ request()->url() }}" target="_blank" aria-label="Share on Reddit">
                        <i style="color:#a81c51;font-size:1.2rem;" class="fa fa-brands fa-reddit"></i>
                    </a>&nbsp;
                    <a href="https://www.instagram.com/" target="_blank" aria-label="Instagram">
                        <i style="color:#a81c51;font-size:1.2rem;" class="fa fa-brands fa-instagram"></i>
                    </a>
                </p>
            </div>
            <div class="form-section">
                <div class="form-wrapper">
                    <h1>Contact Us</h1>
                    <p>We'd love to hear from you.</p>

                    <form action="{{ route('more-information',$artwork->id) }}" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" placeholder="Your name" name="name" required>
                        </div>

                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" placeholder="Your email" name="email" required>
                        </div>

                        <div class="form-group">
                            <label>Message</label>
                            <textarea rows="5" name="message" required placeholder="Your Message"></textarea>
                        </div>

                        <button type="submit">Send Message</button>

                    </form>

                </div>

            </div>
        </div>
    </div>
</div>
    
@endsection
