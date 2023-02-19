function popupfunction(x)
{
	 document.getElementById('popup'+x).style.display='block';
	 document.getElementById('fade'+x).style.display='block';
}

function popupclose(x)
{
	document.getElementById('popup'+x).style.display='none';
	document.getElementById('fade'+x).style.display='none';
}

function display_desc(x)
{
    //alert(x);
    document.getElementById(x).style.display="block";
    document.getElementById(prev_x).style.display="none";
    if(prev_x == x)
        prev_x='0';
    else
        prev_x = x;
}

function add_to_cart(x, price){
    alert("Successfully added item to cart.");
    document.getElementById("cart-items").value += x + "                     $" + price + "\n";
    amount = document.getElementById("amount");
    Totalprice = parseInt(amount.textContent) + price;
    amount.textContent = Totalprice;
}