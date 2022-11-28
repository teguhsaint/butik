<style>
body{
    background: #D3CCE3;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #E9E4F0, #D3CCE3);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #E9E4F0, #D3CCE3); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
}
.inp input{
    width :530px;
    height: 40px;
    margin: 10px;
}


</style>


<h2 class="judul" style="color=#F2F3F3">CONTACT US</h2>
<hr class="horizontal">

<div class="inp">
<form action="contact.php" method="post">
<input type="text" name="firstn" placeholder= "first name" style="width: 250px">
<input type="text" name="lastn" placeholder= "last name" style="width: 250px">

<br>
<input type="email" name="akun" placeholder= "email" >
<br>
<input type="number" name="nomor" placeholder= "phone number">
<br>
<input type="text" name="komentar" placeholder= "what is your question?">
<br>
<input type="submit" value="SUBMIT" style="width: 540px">
</form>
</div>