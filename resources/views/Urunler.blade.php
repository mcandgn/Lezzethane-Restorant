<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="assets/css/addtocart.css">
        <script src="https://kit.fontawesome.com/92d70a2fd8.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="header">
            <p class="logo">Lezzethane</p>
            <ul id="menu">
            <li ><a href="{{ route('welcome') }}"><span class="urunlerduzen">Anasayfa</span></a></li>
            <a href="{{ route('logout') }}" class=" btn btn-secondary btn-lg active cikis" role="button" aria-pressed="true"><span class="urunlerduzen">Çıkış Yap</span></a></li></a>

            </ul>
            <div class="cart"><i class="fa-solid fa-cart-shopping"></i><p id="count">0</p></div>
        </div>
        <div class="container">
            <div id="root"></div>
            <div class="sidebar">
                <div class="head"><p>Sepetim</p></div>
                <div id="cartItem">Sepetiniz Boş</div>
                <div class="foot">
                    <h3>Toplam</h3>
                    <h2 id="total">₺ 0.00</h2>
                    
                </div>
                <div class="checkout">
    <h3>Ödeme Bilgileri</h3>
    <label for="adSoyad">Adı Soyadı:</label>
    <input type="text" id="adSoyad" name="adSoyad">
    <label for="adres">Adres:</label>
    <input type="text" id="adres" name="adres">
    <label for="telefon">Telefon Numarası:</label>
    <input type="text" id="telefon" name="telefon">
    <label for="odemeTipi">Ödeme Tipi:</label>
    <select id="odemeTipi" name="odemeTipi">
      <option value="nakit">Nakit</option>
      <option value="kapidaKrediKarti">Kapıda Kredi Kartı</option>
    </select>
    <button class="odeme"  id="onayla">Sepeti Onayla</button>
  </div>
            </div>
           
        </div>
        
        <script src="assets/js/addtocart.js"></script>
    </body>
</html>