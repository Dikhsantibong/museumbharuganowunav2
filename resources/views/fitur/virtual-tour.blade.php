@extends('layout.app')
@section('title', 'Virtual Tour')
@section('content')
@include('components.header')

<section class="about-company py-5">
    <div class="container">
        <div class="row justify-content-center" data-aos="fade-up">
            <div class="col-12 col-lg-10">
                <div class="mb-4 text-center">
                    <h1 style="color: #bd632f; font-weight: 700; font-size: 2.1rem; margin-bottom: 8px;">
                        Virtual Tour Museum
                    </h1>
                    <p style="font-size: 1.08rem; color: #000;">
                        Jelajahi berbagai sudut Museum Bharugano Wuna secara virtual dengan pengalaman 360° interaktif.
                    </p>
                </div>
                <div style="
                    background: #fff;
                    border-radius: 20px;
                    box-shadow: 0 4px 16px 0 rgba(70,112,182,.10), 0 1.5px 9px 0 rgba(100,100,100,.07);
                    overflow: hidden;
                    ">
                    <div id="viewer"
                         style="width:100%;height:80vh;min-height:500px;background:#000;border-radius:20px 20px 0 0;">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/three@0.121.1/build/three.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/panolens@0.12.0/build/panolens.min.js"></script>
<script>
    // Sederhana: disable auto rotate, no extra UI, tetap bisa navigasi antar panorama.
    const viewer = new PANOLENS.Viewer({
        container: document.getElementById('viewer'),
        controlBar: true,
        cameraFov: 90,
        autoRotate: false
    });

    const panoramas = [
        new PANOLENS.ImagePanorama('/panoramas/pintu-masuk.jpg'),
        new PANOLENS.ImagePanorama('/panoramas/dalam-benteng.jpg'),
        new PANOLENS.ImagePanorama('/panoramas/dalam-museum1.jpg'),
        new PANOLENS.ImagePanorama('/panoramas/dalam-museum2.jpg'),
        new PANOLENS.ImagePanorama('/panoramas/dalam-museum3.jpg'),
        new PANOLENS.ImagePanorama('/panoramas/dalam-museum4.jpg'),
        new PANOLENS.ImagePanorama('/panoramas/dalam-museum5.jpg'),
        new PANOLENS.ImagePanorama('/panoramas/dalam-museum6.jpg'),
        new PANOLENS.ImagePanorama('/panoramas/dalam-museum7.jpg'),
        new PANOLENS.ImagePanorama('/panoramas/dalam-museum8.jpg'),
        new PANOLENS.ImagePanorama('/panoramas/dalam-museum9.jpg'),
        new PANOLENS.ImagePanorama('/panoramas/dalam-museum10.jpg')
    ];

    function addArrow(fromPano, toPano, x, y, z) {
        const arrow = new PANOLENS.Infospot(320, PANOLENS.DataImage.Arrow);
        arrow.position.set(x, y, z);
        arrow.addEventListener('click', () => {
            viewer.setPanorama(toPano);
        });
        fromPano.add(arrow);
    }

    for (let i = 0; i < panoramas.length; i++) {
        // Next arrow
        if (i < panoramas.length - 1) {
            addArrow(panoramas[i], panoramas[i + 1], 1800, 0, 0);
        }
        // Prev arrow
        if (i > 0) {
            addArrow(panoramas[i], panoramas[i - 1], -1800, 0, 0);
        }
        viewer.add(panoramas[i]);
    }
</script>

@include('components.footer')
@endsection