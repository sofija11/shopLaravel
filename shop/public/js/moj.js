function dodaj_putanju_na_url(string) {
    return root_url + string;
}
$(document).ready(function(){
   
$("#ran").change(function(){
    $vrednost=$(this).val();
    $("#price").html($vrednost);
    //alert($vrednost);
})

})
$('#caat li a').click(function(){
   $id=$(this).data('id');
  
   $.ajax({
    url:"/category/" + $id ,
    method:'GET',
    dataType:'JSON',
    data:{
        id : $id
    },
    success:function(data){
        console.log(data);
        printProducts(data);
    
    },
    error:function(error){
        console.log(error);
                    alert(error.responseJSON.greska);
    }
})
});
function printProducts(data){
    let html = "";
    
    console.log(data.data);
    for (let p of data.data){
        html+=`<li  class="product col-sm-6 col-md-4">
        <div class="product-thumb">
            <a href="">
                <img src="images/productsShop/${p.image}" alt="">
            </a>
            <div class="product-button">
                <a href="#" class="button-compare">Compare</a>
                <a href="#" class="button-wishlist">Wishlist</a>
                <a href="#" class="button-quickview">Quick view</a>
            </div>
        </div>
        <div class="product-info">
            <h3><a  href="#" >${p.name}</a></h3>
            <span class="product-price">${p.price}</span>
            <a href="${p.idProduct}" class="button-add-to-cart">ADD TO CART</a>
           <!-- <input type='submit' id='moj'  value="RESERVE" name='show' ></a> -->
           
        </div>
</li>
`
    }
     $("#proizvodi").html(html);
}

$('#cool li a').click(function(){
    $idc=$(this).data('id');
   
    $.ajax({
     url:"api/products/color",
     method:'GET',
     data:{
         id : $idc
     },
     success:function(){
         alert('bravo');
     },
     error:function(xhr,greska,status){
         alert( xhr.status);
     }
 })
 
 });




 $(".add-to-cart").click(addtoCart);

 function addtoCart(){


    let id = $(this).data("idprod");


    let proizvodi=proizvodiuKorpi();
    console.log(id);
    if(proizvodi){
        if(proizvodiVecUkorpi()){
            dodaj();
        }
        else {
            dodajULocalStorage();
        }

    }
    else {
        dodajPrviULocalStorage();
    }

    function proizvodiVecUkorpi(){
        return proizvodi.filter( p => p.id == id).length;
    }

    function dodajULocalStorage(){
        let proizvodi=proizvodiuKorpi();
        proizvodi.push({
            id : id,
            quantity:1,
            
        });
        localStorage.setItem("proizvodi",JSON.stringify(proizvodi));
    }
    function dodaj() {
        let proizvodi=proizvodiuKorpi();
        for(let d in proizvodi){
            if(proizvodi[d].id == id){
                proizvodi[d].quantity++;
                break;
            }
        }
        localStorage.setItem("proizvodi",JSON.stringify(proizvodi));
        
    }

    function dodajPrviULocalStorage(){
        let proizvodi=[];
        proizvodi[0]={
            id: id,
            quantity:1,
            
        }
        localStorage.setItem("proizvodi",JSON.stringify(proizvodi));
    }
}
function ocistiKorpu(){
    localStorage.removeItem("proizvodi");
}

//OBRISI
function calculatePrice(price, discount) {
    if(!discount) {
        return  price;
    } else {
        return Math.floor(parseInt(price) - discount/100*parseInt(price));
    }
} ///OBRISI PSLE






function prikaziProizvode() {
    let proizvodi = proizvodiuKorpi();

    let idProizvod = [];
    let sumQunatity = 0;
    let totalPrice = 0;
    let pricePerProduct = 0;

    for(let pro of proizvodi) {
        idProizvod.push(pro.id);
        sumQunatity += pro.quantity;
    }

    if(proizvodi.length === 0) {
        prikaziPraznuKorpu();
    }
    else {
       
        $.ajax({
            url : '/getProducts',
            method: "GET",
            dataType: "JSON",
            data: {
                idProizvod: idProizvod
            },
            success : function(data) {
                 console.log(data)   
                data = data.filter(p => {

                for(let pro of proizvodi) {
                    if(p.idProduct == pro.id) {
                        p.quantity = pro.quantity;
                        totalPrice += Math.floor(p.price * p.quantity);
                    return true;
                    }
                }
                return false;

                });
                total_with_delivery(totalPrice);

                console.log(totalPrice)
                $("#total > strong > span").text(totalPrice+50);
               
                ispisTabele(data)
            }
        });
    }

    
}
function total_with_delivery() {
    return $("#total > strong > span").val();
}

function clearAllFromCart() {
    localStorage.clear();
    prikaziPraznuKorpu();
}


function ispisTabele(proizvodi){
    let html = "";
    for(let proizvod of proizvodi) {
        html += `
        <tr class="cart_item">
<input type='hidden' name='idProduct' value="${proizvod.idProduct}"/>
        <td class="product-thumbnail">
            <a href="#">
                <img src="images/productsShop/${proizvod.image}" alt="" />
            </a>
        </td>
        <td class="product-name">
            <a href="#">${proizvod.name}</a>
           
        </td>
        <td class="product-quantity">
            
                
                <input type="number" value= "${proizvod.quantity}"  min="1" max='4' name="quantity" >
               
           
        </td>
        <td class="product-price">
            <span class="amount">${proizvod.price * proizvod.quantity}</span>
        </td>
        
        <td class="product-remove">
            <a class="remove" onclick="izbrisiIzKorpe(${proizvod.idProduct})" href="#"><i class="fa fa-times"></i></a>
        </td>
    </tr>
        `
    }
    $("#cartBody").html(html);
    $("#tableForm").html(html);
}
function prikaziPraznuKorpu() {
    $("#cartBody").html(`<tr><td > Your cart is currently empty </td></tr>`);
}
function proizvodiuKorpi(){
    return JSON.parse(localStorage.getItem("proizvodi"));
}
function izbrisiIzKorpe(id) {
    let proizvodi = proizvodiuKorpi();
    let filtrirani = proizvodi.filter(p => p.id != id);

    localStorage.setItem("proizvodi", JSON.stringify(filtrirani));
    
    prikaziProizvode();
}
let products = proizvodiuKorpi();

if(products === null){
    prikaziPraznuKorpu();}
else{
    prikaziProizvode();
}

