<style>
    * {
    margin: 0;
    padding: 0;
    text-decoration: none;
}

body {
     font-family: sans-serif;
}
.judul{
    text-align: center;
    font-size: 80px;
}
.judul1{
    width: 100%;
    padding-top: 20px;
    padding-left: 10px;
}
    /* CARD */
.kolom{
    display: grid;
        column-gap: 10px;
        row-gap: 20px;
        grid-template-columns: auto auto auto auto;
        /* background-color: #2196f3; */

        padding: 10px;

}
.grid-item{
    display: block;
        width: 80% !important;

        aspect-ratio: 9/16;
        background-color: white;
        border-radius: 5px;
        border: 1px solid rgb(161, 161, 161);
        margin: 0;
}
.card{
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        text-align: center;
        font-family: arial;
        display: inline-block;
        max-height: 350px;
        overflow: hidden;
        margin: 0;
}
.price{
    color: grey;
    font-size: 22px;
    transition-duration: 0.5s;
}
.card button{
    border: none;
    outline: 22px;
    padding: 12px;
    color: white;
    background-color: #000;
    text-align: center;
    cursor: pointer;
    width: 100%;
    font-size: 18px;
}
.card button:hover{
    opacity: 0.7;
}
.card img{
    width: 200px;
    max-height: 200px;
    margin-top: 20px;
    transition-duration: 0.5s;
    margin-bottom: 20px;
}
.card:hover img {
    transform: scale(1.2);
}
</style>
<div class="logo" 
    style="text-align: 
            center; 
            margin-top: 20px;
            width: auto;
            height: 150px;
            background-color: bisque;">
            <div class="judul"> All Products </div>
        <h4>The best clothes, will take you to extraordinary places</h4>
    
    </div>
    <h2 class="judul1">DRESS</h2>
    <div class="kolom">

        <div class="card grid-item">
            <img src="img/rr.jpg" alt="">
            <h3>Midi White Dress</h3>
            <p class="price">Rp.0</p>
        </div>
        <div class="card grid-item">
            <img src="img/tt.jpg" alt="">
            <h3>Midi White Dress</h3>
            <p class="price">Rp.0</p>
        </div>
        <div class="card grid-item">
            <img src="img/uu.jpg" alt="">
            <h3>Midi White Dress</h3>
            <p class="price">Rp.0</p>
        </div>
        <div class="card grid-item">
            <img src="img/drs1.jpg" alt="">
            <h3>Midi White Dress</h3>
            <p class="price">Rp.0</p>
        </div>
        <div class="card grid-item">
            <img src="img/drs2.jpg" alt="">
            <h3>Midi White Dress</h3>
            <p class="price">Rp.0</p>
        </div>
        <div class="card grid-item">
            <img src="img/drs3.jpg" alt="">
            <h3>Midi White Dress</h3>
            <p class="price">Rp.0</p>
        </div>
        <div class="card grid-item">
            <img src="img/drs4.jpg" alt="">
            <h3>Midi White Dress</h3>
            <p class="price">Rp.0</p>
        </div>
        <div class="card grid-item">
            <img src="img/drs5.jpg" alt="">
            <h3>Midi White Dress</h3>
            <p class="price">Rp.0</p>
        </div>
    </div>
    
    <h2 class="judul1">JAKET</h2>
    <div class="kolom">
        <div class="card grid-item">
            <img src="img/ww.jpg" alt="">
            <h3>Jaket Milea</h3>
            <p class="price">Rp.0</p>
        </div>
        <div class="card grid-item">
            <img src="img/ee.jpg" alt="">
            <h3>Jaket Parasut</h3>
            <p class="price">Rp.0</p>
        </div>
        <div class="card grid-item">
            <img src="img/ll.jpg" alt="">
            <h3>Jaket hoodie</h3>
            <p class="price">Rp.0</p>
        </div>
        <div class="card grid-item">
            <img src="img/zz.jpg" alt="">
            <h3>Jaket Bulu</h3>
            <p class="price">Rp.0</p>
        </div>
        <div class="card grid-item">
            <img src="img/bb.jpg" alt="">
            <h3>Jaket Musim Dingin</h3>
            <p class="price">Rp.0</p>
        </div>
        <div class="card grid-item">
            <img src="img/gg.jpg" alt="">
            <h3>Jaket Dilan</h3>
            <p class="price">Rp.0</p>
        </div>
        <div class="card grid-item">
            <img src="img/ss.jpg" alt="">
            <h3>Jaket Baseball</h3>
            <p class="price">Rp.0</p>
        </div>
        <div class="card grid-item">
            <img src="img/qq.jpg" alt="">
            <h3>Jaket Bomber</h3>
            <p class="price">Rp.0</p>
        </div>
    </div>
    <h2 class="judul1">GAUN</h2>
    <div class="kolom">
    <div class="card grid-item">
            <img src="img/gn1.jpg" alt="">
            <h3>Gaun a</h3>
            <p class="price">Rp.0</p>
        </div>
        <div class="card grid-item">
            <img src="img/gn2.jpg" alt="">
            <h3>Gaun b</h3>
            <p class="price">Rp.0</p>
        </div>
        <div class="card grid-item">
            <img src="img/gn3.jpg" alt="">
            <h3>Gaun c</h3>
            <p class="price">Rp.0</p>
        </div>
        <div class="card grid-item">
            <img src="img/gn4.jpg" alt="">
            <h3>Gaun d</h3>
            <p class="price">Rp.0</p>
        </div>
        <div class="card grid-item">
            <img src="img/gn5.jpg" alt="">
            <h3>Gaun d</h3>
            <p class="price">Rp.0</p>
        </div>
        <div class="card grid-item">
            <img src="img/gn6.jpg" alt="">
            <h3>Gaun d</h3>
            <p class="price">Rp.0</p>
        </div>
        <div class="card grid-item">
            <img src="img/gn7.jpg" alt="">
            <h3>Gaun d</h3>
            <p class="price">Rp.0</p>
        </div>
        <div class="card grid-item">
            <img src="img/gn8.jpg" alt="">
            <h3>Gaun d</h3>
            <p class="price">Rp.0</p>
        </div>
    </div>
       