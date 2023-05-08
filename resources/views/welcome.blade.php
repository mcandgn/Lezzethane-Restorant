
<!DOCTYPE html>
<html lang="tr">
<head>
<title>LEZZETHANE</title>
<meta charset="utf-8">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:700,400' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Yesteryear' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="assets/css/reset.css" >
<link rel="stylesheet" href="assets/css/style.css" >
<link rel="stylesheet" href="assets/css/prettyPhoto.css" >
<link rel="stylesheet" href="assets/css/grid.css" >
<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="assets/js/jquery-1.7.1.js"></script>
<script src="assets/js/jquery.easing.js"></script>
<script src="assets/js/jquery.animate-colors-min.js"></script>
<script src="assets/js/forms.js"></script>
<script src="assets/js/googleMap.js"></script>
<script src="assets/js/switcher.js"></script>
<script src="assets/js/superfish.js"></script>
<script src="assets/js/bgStretch.js"></script>
<script src="assets/js/sImg.js"></script>
<script src="assets/js/sprites.js"></script>
<script src="assets/js/jquery.prettyPhoto.js"></script>
<script src="assets/js/uScroll.js"></script>
<script src="assets/js/MathUtils.js"></script>
<script src="assets/js/jquery.mousewheel.js"></script>
<script src="assets/js/gallery.js"></script>
<script src="assets/js/scripts.js"></script>
<!--[if lt IE 9]>
  	<script src="js/html5.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:700' rel='stylesheet' type='text/css'>
  <![endif]-->
	<!--[if lt IE 8]>
		<div style=' clear: both; text-align:center; position: relative;'>
			<a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode"><img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." /></a>
		</div>
	<![endif]-->
  <!--[if IE]>
  <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
  <![endif]-->
</head>
<body>
    <div class="page_spinner"></div>
    <div class="spinner_bg"></div>
    <div class="white_bg"></div>
    <div id="bgStretch"><img src="assets/images/bg_pic1.jpg" alt=""></div>
    <div id="glob">
        <div class="arrowL">
            <a href="#"></a>
        </div>                        
        <div class="arrowR">
            <a href="#" class="nextBtn"></a>
        </div>
    <!--header -->
    <header>
        <div class="container_24 height1"> 
           
            <div class="grid_14"><h1><img id="logo" src="assets/images/logo.jpg" alt=""></h1></div>
            
            <div class="grid_5 omega header_pad_top ml-5 pl-5">
            <h1>Hoşgeldiniz!</h1><br><br>
        
           
            </div>
           
            <div class="grid_5 header_pad_top">
              <span class="header_txt1">BURSA - NİLÜFER,<br>16/A ÖZLÜCE,<br>ALTINŞEHİR</span>
            </div>
            <a href="{{ route('logout') }}" class=" btn btn-secondary btn-lg active cikis" role="button" aria-pressed="true">|Çıkış Yap|</a>
            
        </div>
        <div class="lineH"></div>
      <div class="main"> 
          <nav class="menu">
            <ul id="menu">
            <li><a href="#!/"><span></span>Anasayfa</a></li>
            <li><a href="{{ route('urunler') }}"><span></span>Menü</a></li>
            <li><a href="#!/page_wine"><span></span>İçeceklerimiz</a></li>
            <li><a href="#!/page_about"><span></span>Biz Kimiz?</a></li>
           
           
            
            
            <li><a href="#!/page_contacts"><span></span>İletişim</a></li>
          </ul>
        </nav>
        <ul class="follow-icon">
          <li><a href="#"><img src="assets/images/social_icon_1_act.png" alt="" class="img_act"><img src="assets/images/social_icon_1.png" alt=""></a></li>
          <li><a href="#"><img src="assets/images/social_icon_2_act.png" alt="" class="img_act"><img src="assets/images/social_icon_2.png" alt=""></a></li>
          
        </ul>
      </div>
    </header>
    <!--header end-->
    <div class="container_24"> 
    <!--content -->
		<article id="content">
      <!--splash -->
      <div id="splash"></div>
      <!--splash end--> 
			<ul>
        <li id="page_about">
          <div>
            <div class="grid_8 alpha suffix_1">
                <h2>Hoşgeldiniz!</h2>
                <h3>Kararlıyız.<br>Taze ve Yenilikçi Olacağız<br>Hızlı &amp; Leziz</h3>
                <p>Lezzethane, Turizm Bakanlığı denetiminde hizmet sunan bir restoran ve kafeye sahiptir. Restoran, zarif ve seçkin mobilyaları, piyanosu, şöminesi, kitapları ve mumları ile birlikte büyülü bir bahçeye açılır.  </p>
                <a class="more" href="#!/page_more">Devamını Oku..</a>
                
               
            </div>
            <div class="grid_15">
                <div class="grid_5 alpha">
                    <h4>Geleneksel<br>Mutfağımız:</h4>
                    <a class="img_over" href="#!/page_more"><div class="img_border"></div><img src="assets/images/page2_pic1.jpg" alt=""></a>
                    <p><span class="bold">Türk kültüründe gelenekselliğini hemen hiç bozmayan mekanımızda;</span>Bütün bu geleneksel kullanıma ve hazırlıklara rağmen, günümüzdeki kent hayatı, hızlı yaşayışı mutfağımıza aktardık.</p>

                </div>  
                <div class="grid_5">

                    <h4>En Romantik<br>Mekan:</h4>
                    <a class="img_over" href="#!/page_more"><div class="img_border"></div><img src="assets/images/page2_pic2.jpg" alt=""></a>
                    <p><span class="bold">Sevgimizi sizlerle yaşayacağımız eşsiz mekanımızda;</span>Tüm romantik, mutlu anlarınıza tanıklık ediyor ve sizlere eşlik ediyoruz.</p>
                    
                </div> 
                <div class="grid_5 omega">
                    <h4>Benzersiz <br> Servis:</h4>
                    <a class="img_over" href="#!/page_more"><div class="img_border"></div><img src="assets/images/page2_pic3.jpg" alt=""></a>
                    <p><span class="bold">Türkiye'de en geniş kadroya sahip mekanımızda;</span>Tam 5 şefi, 35 Garsonu ve 35 Komisiyle birlikte hizmetinize hazırız.</p>
                   
                </div> 
            </div>
          </div>
        </li>
        <li id="page_cuisine">
          <div>

            
          </div>
        </li>
        <li id="page_wine">
          <div>
            <div class="grid_16 alpha suffix_1 sagakaydir">
                <h5 class="baslik">İçecek Listesi</h5>
                <div class="scroll">
                  <div>
                    <div class="wrapper">
                      <div class="grid_4 alpha">
                        <h6>Chamlija Nev'i <br>Şahsına Münhasır</h6>
                        <a class="img_over" href="#!/page_more"><div class="img_border3"></div><img src="assets/images/page4_pic1.jpg" alt="" class="mar_top1"></a>
                        <h2 class="fiyat">₺ 960</h2>
                        <p>Istranca Bağları'nın güney eteklerinde yer alan Chamlija Bağları'nda yetişen Merlot,24 ay bu fıçılarda yaşlandırılmıştır.</p>
                        
                      </div>
                      <div class="grid_4">
                        <h6>Yedi<br>Bilgeler</h6>
                        <a class="img_over" href="#!/page_more"><div class="img_border3"></div><img src="assets/images/page4_pic2.jpg" alt="" class="mar_top1"></a>
                        <h2 class="fiyat">₺ 800</h2>
                        <p>7 Bilgeler'in Denizli-Güney Platosunun 840 metre rakımlı bağlarının Sauvignon Blanc üzümlerinden yapılmış olan şaraba, bölgede yaşamış antik çağ filozoflarından birinin adı verilmiştir.</p>
                      </div>
                      <div class="grid_4">
                        <h6>Nif  <br>Bağları</h6>
                        <a class="img_over" href="#!/page_more"><div class="img_border3"></div><img src="assets/images/page4_pic3.jpg" alt="" class="mar_top1"></a>
                        <h2 class="fiyat">₺ 600</h2>
                        <p>Düşük verimle yetiştirilen Chardonnay, Viognier ve Narince üzümleri elle seçilerek küçük kasalarda toplanmış, Dünya'da az sayıda örneği olan "Gravity Flow" (Yerçekimi Akışı) sistemiyle çalışan Nif Bağları Şaraphanesinde üretilmiştir.</p>
                      </div>
                      <div class="grid_4 omega">
                        <h6>Pamukkale  <br>Mulier Misket</h6>
                        <a class="img_over" href="#!/page_more"><div class="img_border3"></div><img src="assets/images/page4_pic4.jpg" alt="" class="mar_top1"></a>
                        <h2 class="fiyat">₺ 380</h2>
                        <p>Burunda beyaz şeftali, liçi meyvesi, limon ve gül notaları, damakta; tropikal meyveler, nektarin ve bergamot aromalarına sahip bu dömi-sec beyaz şarap, canlı ve uzun bitişlidir.</p>
                      </div>
                    </div>
                   
                  </div>
                </div>
                <div class="scroll-btns right">
                  <a href="#" class="scroll_btn_down" data-type="scrollUp"></a>
                  <a href="#" class="scroll_btn_up" data-type="scrollDown"></a>
                </div>
            </div>
            <div class="grid_7 omega">
                
            </div>
          </div>
        </li>
       
        <li id="page_contacts">
          <div>
            <div class="grid_13 alpha suffix_1">
                <h5>Bize Ulaşın</h5>
                <iframe class="google_map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12185.301453580554!2d28.928335450000006!3d40.2240675!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14ca1160797d1887%3A0x38c6e0ecbe0f36d8!2zQWx0xLFuxZ9laGlyLCAxNjEyMCBOaWzDvGZlci9CdXJzYQ!5e0!3m2!1str!2str!4v1682849409803!5m2!1str!2str" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <div class="grid_7 alpha">
                  <span class="bold">16000/Bursa,<br>Altınşehir, ÖZlüce.</span>
                </div>
                <div class="grid_6 omega">
                  <div class="address">
                    <span>
                        
                        Telefon: <span class="">+90 444 5 444</span><br>
                        
                        E-mail: <a class="mailLink" href="mailto:">LHane@Outlook.com</a>
                        
                    </span>
                 </div>
                </div>
            </div>
            <div class="grid_10">
                <h5>Görüşleriniz</h5>
                <form id="form1">
                <div class="success"> 
                  <div class="success_txt"> 
                  İletişim formu gönderildi!<br><strong>yakında iletişime geçeceğiz.</strong> 
                  </div>
                </div>
                <fieldset>
                  <label class="name">
                    <input type="text" value="Adınız:">
                    <span class="error">*Bu geçerli bir ad değil.</span> <span class="empty">*Bu alan gereklidir.</span> </label>
                  <br>
                  <label class="phone">
                    <input type="tel" value="Telefon:">
                    <span class="error">*Bu geçerli bir telefon numarası değil.</span> <span class="empty">*Bu alan gereklidir.</span> </label>
                  <br>
                  <label class="email">
                    <input type="email" value="E-mail:">
                    <span class="error">*Bu geçerli bir e-mail değil.</span> <span class="empty">*Bu alan gereklidir.</span> </label>
                  <br>
                  <label class="message">
                    <textarea>Mesaj:</textarea>
                    <span class="error">*Mesajınız Çok kısa.</span> <span class="empty">*Bu alan gereklidir.</span> </label>
                  <br>
                  <div class="btns right"><a href="#" class="more" data-type="reset"><span></span>Yenile</a><a href="#" class="more" data-type="submit"><span></span>Gönder</a></div>
                </fieldset>
              </form>
            </div>
          </div>
        </li>
        <li id="page_privacy">
          <div>
            <div class="grid_24">
                <h5>GİZLİLİK POLİTİKASI</h5>
                <p><span class="bold">Lezzethane, Turizm Bakanlığı denetiminde hizmet sunan bir restoran ve kafeye sahiptir. Restoran, zarif ve seçkin mobilyaları, piyanosu, şöminesi, kitapları ve mumları ile birlikte büyülü bir bahçeye açılır.  Açıldığı günden bugüne her zaman en çok ilgiyi toplayan, usta şeflerin denetiminde hazırlanan menüsü ile şehrin tercih edilen mekanlarından. Misafirlerimiz kahvaltı ve 5 çaylarını yazın ıhlamur ve iğde ağaçlarının altında,kışın şömine başında almaktadırlar. Misafirlerimizi rahatsız etmemek için kapanış saati konusunda dikkatli davranıyoruz.</p>
                
            </div>
          </div>
        </li>
        <li id="page_more">
          <div>
            <div class="grid_24">
                <h5>LEZZETHANE</h5>
                <p><span class="bold">Lezzethane, Turizm Bakanlığı denetiminde hizmet sunan bir restoran ve kafeye sahiptir. Restoran, zarif ve seçkin mobilyaları, piyanosu, şöminesi, kitapları ve mumları ile birlikte büyülü bir bahçeye açılır.  Açıldığı günden bugüne her zaman en çok ilgiyi toplayan, usta şeflerin denetiminde hazırlanan menüsü ile şehrin tercih edilen mekanlarından. Misafirlerimiz kahvaltı ve 5 çaylarını yazın ıhlamur ve iğde ağaçlarının altında,kışın şömine başında almaktadırlar. Misafirlerimizi rahatsız etmemek için kapanış saati konusunda dikkatli davranıyoruz.</p>
          
            </div>
          </div>
        </li>
			</ul>
		</article>
		<!--content end-->
    </div>
	 <!--footer -->
		<footer>
   

    <div class="gallery">
                <div class="pagin">
                    <ul>
                        <li class="active"><a href="assets/images/bg_pic1.jpg"><span><span class="txt1">Deniz Ürünü<br>Soslu Kalamar</span><span class="txt2">₺55.50</span> <span></span></span><img src="assets/images/thumb1.jpg" alt></a></li>
                        <li><a href="assets/images/bg_pic2.jpg"><span><span class="txt1">Tavuklu<br>Sıcak Salata</span><span class="txt2">₺45.50</span></span><img src="assets/images/thumb2.jpg" alt></a><button type="submit" name="sepete_ekle">Sepete Ekle</button></li>
                        <li><a href="assets/images/bg_pic3.jpg"><span><span class="txt1">Sebzeli<br>Dana Rosto</span><span class="txt2">₺70.50</span></span><img src="assets/images/thumb3.jpg" alt></a></li>
                        <li><a href="assets/images/bg_pic4.jpg"><span><span class="txt1">Sebzeli<br>Tatlı Tavuk</span><span class="txt2">₺55.50</span></span><img src="assets/images/thumb4.jpg" alt></a></li>
                        <li><a href="assets/images/bg_pic5.jpg"><span><span class="txt1">Soslu<br>Istakoz</span><span class="txt2">₺85.20</span></span><img src="assets/images/thumb5.jpg" alt></a></li>
                        <li><a href="assets/images/bg_pic6.jpg"><span><span class="txt1">italyan<br>Sote </span><span class="txt2">₺35.90</span></span><img src="assets/images/thumb6.jpg" alt></a></li>
                        <li><a href="assets/images/bg_pic7.jpg"><span><span class="txt1">Klasik Meyve<br>salata</span><span class="txt2">₺22.75</span></span><img src="assets/images/thumb7.jpg" alt></a></li>
                        <li><a href="assets/images/bg_pic8.jpg"><span><span class="txt1">Doldurulmuş<br>Hindi</span><span class="txt2">₺25.50</span></span><img src="assets/images/thumb8.jpg" alt></a></li>
                        <li><a href="assets/images/bg_pic9.jpg"><span><span class="txt1">Sıcak<br>Sebze Tabağı </span><span class="txt2">₺14.90</span></span><img src="assets/images/thumb9.jpg" alt></a></li>
                        <li><a href="assets/images/bg_pic2.jpg"><span><span class="txt1">Tavuklu<br>Sıcak Salata</span><span class="txt2">₺45.50</span></span><img src="assets/images/thumb2.jpg" alt></a></li>
                        <li><a href="assets/images/bg_pic3.jpg"><span><span class="txt1">Sebzeli<br>Dana Rosto</span><span class="txt2">₺70.50</span></span><img src="assets/images/thumb3.jpg" alt></a></li>
                        <li><a href="assets/images/bg_pic4.jpg"><span><span class="txt1">Sebzeli<br>Tatlı Tavuk</span><span class="txt2">₺55.50</span></span><img src="assets/images/thumb4.jpg" alt></a></li>
                    </ul>
                </div>
            </div>
            </form>
            <div class="line_footer "></div>
            <div class="bg_bot"> 
      			<div class="main pad_top1">
              <div class=" container_24"> 
                <div class="grid_5">
                  <p><span class="logo2"><img src="assets/images/logo.jpg" alt=""></span></p>
          			
          				<!-- {%FOOTER_LINK} -->
                </div>
                <div class="grid_10 right">
                <span class="footer_txt1">Pazartesi - Cuma<br><span class="color1">09:00 - 17:00</span><br>Cumartesi - Pazar<br><span class="color1">10:00 - 15:00</span></span>
                </div>
                <div class="grid_5">
                 <p><span class="color1 footer_txt1">Mehmet Can DOĞAN  <br class= "color1 footer_txt1">&copy; 2023 <br><a href="#!/page_privacy">Gizlilik Politikası</a></span></p>
                </div>
              </div>
            </div>
    		</div>
		</footer>
		 <!--footer end-->
    </div>
<script>
$(window).load(function() {	
	$('.page_spinner').delay(600).fadeOut(1600);
	$('body').css({overflow:'visible'})
})
</script>
<!-- coded by Val -->
</body>
</html>