<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Virtual Tour</title>

    <!-- THREE & PANOLENS -->
    <script src="https://cdn.jsdelivr.net/npm/three@0.121.1/build/three.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/panolens@0.12.0/build/panolens.min.js"></script>

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        body { margin: 0; overflow: hidden; }
        #viewer { width: 100vw; height: 100vh; background: #000; }

        /* SIDEBAR */
        #sidebar {
            position: fixed;
            top: 20px;
            left: 20px;
            width: 230px;
            padding: 15px;
            background: rgba(0,0,0,0.35);
            color: #fff;
            border-radius: 12px;
            z-index: 9999;
            font-family: Arial, sans-serif;
            max-height: 90vh;
            overflow-y: auto;
            backdrop-filter: blur(4px);
        }

        #sidebar h3 {
            font-size: 18px;
            margin-bottom: 10px;
            border-bottom: 1px solid rgba(255,255,255,0.3);
            padding-bottom: 6px;
        }

        .room-btn {
            padding: 10px;
            margin-bottom: 8px;
            background: rgba(255,255,255,0.15);
            color: white;
            border-radius: 8px;
            cursor: pointer;
            transition: 0.2s;
        }

        .room-btn:hover {
            background: rgba(255,255,255,0.30);
        }

        /* ICON BUTTON BOTTOM */
        .sidebar-icons {
            margin-top: 15px;
            display: flex;
            justify-content: space-around;
            background: rgba(255,255,255,0.15);
            padding: 10px;
            border-radius: 8px;
        }

        .icon-btn {
            font-size: 22px;
            cursor: pointer;
            transition: .2s;
            color: white;
        }
        .icon-btn:hover {
            transform: scale(1.2);
            color: #ffeb3b;
        }

        /* POPUP */
        .popup {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%) scale(0);
            background: rgba(0,0,0,0.9);
            color: white;
            padding: 20px;
            border-radius: 10px;
            z-index: 99999;
            width: 70vw;
            height: 70vh;
            display: flex;
            flex-direction: column;
            opacity: 0;
            transition: 0.3s;
        }

        .popup.show {
            transform: translate(-50%, -50%) scale(1);
            opacity: 1;
        }

        .popup-close {
            text-align: right;
            font-size: 25px;
            cursor: pointer;
        }

        .thumb-grid img {
            width: 140px;
            margin: 8px;
            border-radius: 8px;
            cursor: pointer;
            transition: .2s;
        }
        .thumb-grid img:hover {
            transform: scale(1.1);
        }
    </style>

</head>
<body>

<!-- SIDEBAR -->
<div id="sidebar">
    <h3>Pilih Ruangan</h3>

    <div class="room-btn" onclick="goToRoom(0)">Pintu Masuk</div>
    <div class="room-btn" onclick="goToRoom(1)">Halaman Depan</div>
    <div class="room-btn" onclick="goToRoom(2)">Ruang tengah</div>
    <div class="room-btn" onclick="goToRoom(3)">Baju Adat Muna</div>
    <div class="room-btn" onclick="goToRoom(4)">Museum 3</div>
    <div class="room-btn" onclick="goToRoom(5)">Museum 4</div>
    <div class="room-btn" onclick="goToRoom(6)">Museum 5</div>
    <div class="room-btn" onclick="goToRoom(7)">Museum 6</div>
    <div class="room-btn" onclick="goToRoom(8)">Museum 7</div>
    <div class="room-btn" onclick="goToRoom(9)">Museum 8</div>
    <div class="room-btn" onclick="goToRoom(10)">Museum 9</div>
    <div class="room-btn" onclick="goToRoom(11)">Museum 10</div>

    <!-- ICONS BAWAH -->
    <div class="sidebar-icons">
        <i class="fa-solid fa-map-location-dot icon-btn" onclick="togglePopup('mapPopup')"></i>
        <i class="fa-brands fa-youtube icon-btn" onclick="togglePopup('videoPopup')"></i>
        <i class="fa-solid fa-table-cells-large icon-btn" onclick="togglePopup('thumbPopup')"></i>
        <i class="fa-solid fa-layer-group icon-btn" onclick="togglePopup('denahPopup')"></i>
    </div>

</div>

<!-- VIEWER -->
<div id="viewer"></div>

<!-- POPUP MAP -->
<div class="popup" id="mapPopup">
    <div class="popup-close" onclick="togglePopup('mapPopup')">✖</div>
    <iframe src="https://www.google.com/maps/embed?pb=YOUR_MAP_URL"
            width="100%" height="100%" style="border:0;"></iframe>
</div>

<!-- POPUP VIDEO -->
<div class="popup" id="videoPopup">
    <div class="popup-close" onclick="togglePopup('videoPopup')">✖</div>
    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/YOUR_VIDEO_ID"
            frameborder="0" allowfullscreen></iframe>
</div>

<!-- POPUP THUMBNAIL -->
<div class="popup" id="thumbPopup">
    <div class="popup-close" onclick="togglePopup('thumbPopup')">✖</div>
    <div class="thumb-grid">
        <img src="/panoramas/pintu-masuk.jpg" onclick="goToRoom(0)">
        <img src="/panoramas/dalam-benteng.jpg" onclick="goToRoom(1)">
        <img src="/panoramas/dalam-museum1.jpg" onclick="goToRoom(2)">
        <img src="/panoramas/dalam-museum2.jpg" onclick="goToRoom(3)">
        <!-- lanjutkan sesuai ruangan -->
    </div>
</div>

<!-- POPUP DENAH -->
<div class="popup" id="denahPopup">
    <div class="popup-close" onclick="togglePopup('denahPopup')">✖</div>
    <img src="/panoramas/denah.png" style="width:100%; border-radius:10px;">
</div>

<script>

function togglePopup(id) {
    document.getElementById(id).classList.toggle("show");
}

const viewer = new PANOLENS.Viewer({
    container: document.querySelector('#viewer'),
    autoRotate: false,
    cameraFov: 90
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

for (let p of panoramas) viewer.add(p);

function goToRoom(i) {
    viewer.setPanorama(panoramas[i]);
}

</script>

</body>
</html>
