<style>
    body {
        background-color: white;
    }

    .container {
        padding: 0;
        width: 100%;
        padding-top: 3px;

    }

    .width-80 {
        width: 86%;
        padding: 10px;
        margin: 0px auto;
    }

    .bg-dark {
        background-color: #1f1f1f;
    }

    .bg-red {
        background-color: #ff3838;
    }

    .mb-0 {
        margin-bottom: 0px;
    }

    .mt-0 {
        margin-top: 0;
    }

    .container_banner {
        width: 100%;
        overflow: hidden;
        background-color: #ffffff;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 500px;
    }

    .banner {
        display: flex;
        flex-direction: row;
        width: 90%;
        justify-content: center;
        margin: 0px auto;
    }

    .banner .gambar {
        width: 40%;
        max-width: 40%;
    }

    .gambar img {
        float: right;
        max-width: 400px;
        width: 400px;
    }

    .box_text {
        width: 50%;

        text-align: justify;

        padding-right: 5rem;
    }

    .box_text h1 {
        font-size: 40px;
    }

    .box_text p {
        font-size: 15px;
        line-height: 28px;
        display: block;
        margin-bottom: 0px;
        margin-top: 0;
    }

    .box_text p button {
        cursor: pointer;
        padding: 16px 36px;
        display: block;
        border-radius: 4px;
        font-size: 15px;
        border: 0px;
        background-color: #ff3838;
        color: #ffffff;
        box-shadow: 5px 5px 5px rgba(0, 0, 0, 0.304);
    }

    .konten_cards {
        display: grid;

        grid-template-columns: repeat(4, 1fr);

        grid-auto-rows: auto;

        grid-gap: 1rem;
    }

    .card_new {
        cursor: pointer;

        border: 1px solid #e7e7e7;

        border-radius: 4px;
        overflow: hidden;

        height: 400px;
        background-size: cover;
        background-position: center;
    }

    .card-overlay {
        cursor: pointer;
        border-radius: 20px;
        display: block;
        height: 120px;

        position: relative;
        background-color: #ffffff;
        bottom: -300px;
        left: 0px;
        padding-left: 10px;
        padding-top: 2px;
        color: black;


        transition-duration: 0.3s;
    }

    .card_new:hover .card-overlay {
        border-radius: 0px;
        bottom: 0px;
        height: 500px;
        background-color: #222222ff;
        color: white;

    }


    .p-0 {
        padding: 0rem;
    }

    .card_new button {
        cursor: pointer;
        padding: 15px 36px;
        display: block;
        border-radius: 40px;
        border: 1px solid white;

        background-color: #222;
        color: white;
    }

    .card_new button:hover {

        border: 1px solid white;

        background-color: #ff3838;
        color: #fff;
    }
</style>
<div class="container_banner">

    <div class="banner">
        <div class="box_text">
            <h1 class="mb-0">Your Style Is Our Priority</h1>
            <h3 class="mt-0">Sub sambutan untuk calon cust</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                ac ante dapibus, lobortis ipsum a, ullamcorper lorem. Donec et ligula ut ex egestas vehicula a non mi.
                Proin volutpat ultrices lectus at lacinia. Nam nulla nunc, lacinia in nibh vitae, fringilla laoreet ante. Phasellus rhoncus nulla et viverra sollicitudin. Etiam vitae sapien tellus. Duis tempor pulvinar mauris et tincidunt.</p>

            <p style="margin-top: 20px"><button>Check Here</button></p>
        </div>
        <div class="gambar">
            <img class="" src="img/img_home/g-removebg-preview.png" alt="">
        </div>
    </div>

</div>
<div class="container">
    <div class="konten width-80">
        <h1 class="mt-0">New Arivals</h1>

        <div class="konten_cards">
            <div class="card_new" style="background-image:url('img/img_home/1.webp');">
                <div class="card-overlay">
                    <h4 class="mb-0">Two Tone Navy & Fuchsia</h4>
                    <h2 style="color:#ff3838; " class="mt-0">Rp.150,000</h2>
                    <p class="mb-0">Shirt dress warna navy-fuchsia ini memakai material bahan katun yang halus dan nyaman dipakai.</p>
                    <p class="mt-0">Detail Bahan dan Ukuran :</p>
                    <ul>
                        <li> Bahan : Katun</li>
                        <li> Lingkar Dada : 110 cm</li>
                        <li> Lingkar Lengan : 50 cm</li>
                        <li> Panjang Lengan : 51 cm</li>
                        <li> Panjang Blus : 86 cm</li>
                    </ul>
                    <center><button>BUY NOW</button></center>
                </div>
            </div>
            <div class="card_new" style="background-image:url('img/img_home/2.webp');">
                <div class="card-overlay">
                    <h4 class="mb-0">Two Tone Navy & Fuchsia</h4>
                    <h2 style="color:#ff3838; " class="mt-0">Rp.150,000</h2>
                    <p class="mb-0">Shirt dress warna navy-fuchsia ini memakai material bahan katun yang halus dan nyaman dipakai.</p>
                    <p class="mt-0">Detail Bahan dan Ukuran :</p>
                    <ul>
                        <li> Bahan : Katun</li>
                        <li> Lingkar Dada : 110 cm</li>
                        <li> Lingkar Lengan : 50 cm</li>
                        <li> Panjang Lengan : 51 cm</li>
                        <li> Panjang Blus : 86 cm</li>
                    </ul>
                    <center><button>BUY NOW</button></center>
                </div>
            </div>
            <div class="card_new" style="background-image:url('img/img_home/3.webp');">
                <div class="card-overlay">
                    <h4 class="mb-0">Two Tone Navy & Fuchsia</h4>
                    <h2 style="color:#ff3838; " class="mt-0">Rp.150,000</h2>
                    <p class="mb-0">Shirt dress warna navy-fuchsia ini memakai material bahan katun yang halus dan nyaman dipakai.</p>
                    <p class="mt-0">Detail Bahan dan Ukuran :</p>
                    <ul>
                        <li> Bahan : Katun</li>
                        <li> Lingkar Dada : 110 cm</li>
                        <li> Lingkar Lengan : 50 cm</li>
                        <li> Panjang Lengan : 51 cm</li>
                        <li> Panjang Blus : 86 cm</li>
                    </ul>
                    <center><button>BUY NOW</button></center>
                </div>
            </div>
            <div class="card_new" style="background-image:url('img/img_home/4.webp');">
                <div class="card-overlay">
                    <h4 class="mb-0">Two Tone Navy & Fuchsia</h4>
                    <h2 style="color:#ff3838; " class="mt-0">Rp.150,000</h2>
                    <p class="mb-0">Shirt dress warna navy-fuchsia ini memakai material bahan katun yang halus dan nyaman dipakai.</p>
                    <p class="mt-0">Detail Bahan dan Ukuran :</p>
                    <ul>
                        <li> Bahan : Katun</li>
                        <li> Lingkar Dada : 110 cm</li>
                        <li> Lingkar Lengan : 50 cm</li>
                        <li> Panjang Lengan : 51 cm</li>
                        <li> Panjang Blus : 86 cm</li>
                    </ul>
                    <center><button>BUY NOW</button></center>
                </div>
            </div>

        </div>
    </div>
</div>