<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SajiloStay</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        /* Custom Styles */
        .gallery_section {
            padding: 50px 0;
            background-color: #f8f9fa;
        }
        .gallery_item {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.3s ease;
        }
        .gallery_item:hover {
            transform: translateY(-5px);
        }
        .gallery_img {
            width: 100%;
            height: 250px; /* Fixed height for uniform image sizes */
            overflow: hidden;
            border-radius: 10px;
        }
        .gallery_img img {
            width: 100%;
            height: 100%;
            object-fit: cover; /* Maintain aspect ratio while covering the area */
            transition: transform 0.3s ease;
        }
        .gallery_item:hover .gallery_img img {
            transform: scale(1.1);
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        @include('header')
    </header>

    <!-- Gallery Section -->
    <section class="gallery_section">
        <div class="container">
            <div class="title mt-5">
                <h2>Gallery</h2>
            </div>
            <div class="row">
                @foreach($galleries as $gallery)
                <div class="col-md-4">
                    <div class="gallery_item mb-3">
                        <div class="gallery_img">
                            <img src="{{ asset('images/gallery/' . $gallery->photopath) }}" alt="{{ $gallery->title }}">
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        @include('footer')
    </footer>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

