const product = [
    {
            id: 1,
            image:"assets/images/bg_pic1.jpg",
            title: "Soslu Kalamar",
            price: 55.50,
        
    },
    {
        id: 2,
        image:"assets/images/bg_pic2.jpg",
        title: "Tavuklu Sıcak Salata",
        price: 45.50,
    },
    {
        id: 3,
        image:"assets/images/bg_pic3.jpg",
        title: 'Sebzeli Dana Rosto',
        price: 70.50,
    },
    {
        id: 4,
        image:"assets/images/bg_pic4.jpg",
        title: "Sebzeli Tatlı Tavuk",
        price: 55.50,
    },
    {
        id: 5,
        image:"assets/images/bg_pic5.jpg",
        title: "Soslu Istakoz",
        price: 85.20,
    },
    {
        id: 6,
        image:"assets/images/bg_pic6.jpg",
        title: "İtalyan Sote",
        price: 35.90,
    },
    {
        id: 7,
        image:"assets/images/bg_pic7.jpg",
        title: "Klasik Meyve Salata",
        price: 22.75,
    },
    {
        id: 8,
        image:"assets/images/bg_pic8.jpg",
        title: "Doldurulmuş Hindi",
        price: 25.50,
    },
    {
        id: 9,
        image:"assets/images/bg_pic9.jpg",
        title: "Sıcak Sebze Tabağı",
        price: 14.90,
    },
    {
        id: 3,
        image:"assets/images/bg_pic3.jpg",
        title: 'Sebzeli Dana Rosto',
        price: 70.50,
    },
    {
        id: 11,
        image:"assets/images/page4_pic2.jpg",
        title: "Yedi Bilgeler",
        price: 800,
    },
    {
        id: 12,
        image:"assets/images/page4_pic1.jpg",
        title: "Pamukkale Misket",
        price: 380,
    },
];
const categories = [...new Set(product.map((item)=>
    {return item}))]
    let i=0;
document.getElementById('root').innerHTML = categories.map((item)=>
{
    var {image, title, price} = item;
    return(
        `<div class='box'>
            <div class='img-box'>
                <img class='images' src=${image}></img>
            </div>
        <div class='bottom'>
        <p>${title}</p>
        <h2>₺ ${price}</h2>`+
        "<button onclick='addtocart("+(i++)+")'>Sepete Ekle</button>"+
        `</div>
        </div>`
    )
}).join('')

var cart =[];

function addtocart(a){
    cart.push({...categories[a]});
    displaycart();
}
function delElement(a){
    cart.splice(a, 1);
    displaycart();
}

function displaycart(){
    let j = 0, total=0;
    document.getElementById("count").innerHTML=cart.length;
    if(cart.length==0){
        document.getElementById('cartItem').innerHTML = "Sepetiniz Boş";
        document.getElementById("total").innerHTML = "₺ "+0+"";
    }
    else{
        document.getElementById("cartItem").innerHTML = cart.map((items)=>
        {
            var {image, title, price} = items;
            total=total+price;
            document.getElementById("total").innerHTML = "₺ "+total+"";
            return(
                `<div class='cart-item'>
                <div class='row-img'>
                    <img class='rowimg' src=${image}>
                </div>
                <p style='font-size:12px;'>${title}</p>
                <h2 style='font-size: 15px;'>₺ ${price}</h2>`+
                "<i class='fa-solid fa-trash' onclick='delElement("+ (j++) +")'></i></div>"
            );
        }).join('');
    }

// Sepeti Onayla düğmesine tıklanınca çağrılacak fonksiyon
function onayla() {
    alert("Siparişiniz onaylanmıştır, restoran hazırlamaya başlamıştır");
  
    localStorage.removeItem("cart");
  
    location.reload();
  
    // Click event'ini kaldır
    document.querySelector(".odeme").removeEventListener("click", onayla);
  }
  
  // Click event'ini ekle
  document.querySelector(".odeme").addEventListener("click", onayla);
}
