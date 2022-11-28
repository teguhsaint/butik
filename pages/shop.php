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
        width: 90% !important;

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
        max-height: 450px;
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
    width: 230px;
    max-height: 330px;
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
            <img src="img/hh.jpg" alt="">
            <h3>Volorie Dress</h3>
            <p class="price">Rp.999.000</p>
        </div>
        <div class="card grid-item">
            <img src="img/hu.jpg" alt="">
            <h3>Elaiza Dress</h3>
            <p class="price">Rp.0</p>
        </div>
        <div class="card grid-item">
            <img src="img/je.jpg" alt="">
            <h3>Rosalia Dress</h3>
            <p class="price">Rp.0</p>
        </div>
        <div class="card grid-item">
            <img src="img/ok.jpg" alt="">
            <h3>Lydyna Dress</h3>
            <p class="price">Rp.0</p>
        </div>
        <div class="card grid-item">
            <img src="img/po.jpg" alt="">
            <h3>Jania Dress</h3>
            <p class="price">Rp.0</p>
        </div>
        <div class="card grid-item">
            <img src="img/re.jpg" alt="">
            <h3>Aleesha Dress</h3>
            <p class="price">Rp.0</p>
        </div>
        <div class="card grid-item">
            <img src="img/ya.jpg" alt="">
            <h3>Felicia Dress</h3>
            <p class="price">Rp.0</p>
        </div>
        <div class="card grid-item">
            <img src="img/yu.jpg" alt="">
            <h3>Jeanie Dress</h3>
            <p class="price">Rp.0</p>
        </div>
    </div>
    <h2 class="judul1">Outer/Blazer</h2>
    <div class="kolom">
        <div class="card grid-item">
            <img src="img/11.jpg" alt="">
            <h3>Wyta Blazer</h3>
            <p class="price">Rp.0</p>
        </div>
        <div class="card grid-item">
            <img src="img/12.jpg" alt="">
            <h3>Auria Shawll Blazer</h3>
            <p class="price">Rp.0</p>
        </div>
        <div class="card grid-item">
            <img src="img/13.jpg" alt="">
            <h3>belllona Blazer</h3>
            <p class="price">Rp.0</p>
        </div>
        <div class="card grid-item">
            <img src="img/14.jpg" alt="">
            <h3>Elyse Blazer</h3>
            <p class="price">Rp.0</p>
        </div>
        <div class="card grid-item">
            <img src="img/15.jpg" alt="">
            <h3>Trinity Blazer</h3>
            <p class="price">Rp.0</p>
        </div>
        <div class="card grid-item">
            <img src="img/16.jpg" alt="">
            <h3>Gracia Blazer</h3>
            <p class="price">Rp.0</p>
        </div>
        <div class="card grid-item">
            <img src="img/17.jpg" alt="">
            <h3>Lannia Blazer</h3>
            <p class="price">Rp.0</p>
        </div>
        <div class="card grid-item">
            <img src="img/18.jpg" alt="">
            <h3>Michalis Blazer</h3>
            <p class="price">Rp.0</p>
        </div>
    </div>
