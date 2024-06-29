let pages = ['homepage', 'survivorspage', 'inventorypage', 'infectionpage', 'formpage'];
let menus = ['Water', 'food', 'shelter', 'clothes', 'first-aid', 'misc'];
let auth = {
    "base_url": "https://auth.eaabdura.awsps.myinstance.com/login",
    "response_type": "code",
    "client_id": "8atuid9ffsdrpa9v4s79u498o",
    "redirect_uri": "https://www.eaabdura.awsps.myinstance.com/login.php",
    "state": "zombie",
    "scope": "openid+profile",
    "url": function()
    {
        return this.base_url+"?"+
        "response_type="+this.response_type+
        "&client_id="+this.client_id+
        "&redirect_uri="+this.redirect_uri+
        "&state="+this.state+
        "&scope="+this.scope;
    }
}

function setup()
{
    document.getElementById('add').addEventListener('click',function(){
    document.getElementById('itemModal').style.display = 'flex';
});

document.getElementById('close').addEventListener('click', function () {
    document.getElementById('itemModal').style.display = 'none';
});
}

function survivalform(form)
{
    var radio = form.childNodes[95].querySelectorAll('input[type=radio]');
    
    for (var i = 0;i < radio.length;i++)
    {
        if (radio[i].checked)
        {
            radio = radio[i].value;
            break;
        }
    }
    
    var data = {
      "firstname": form.childNodes[5].childNodes[1].value,
      "lastname": form.childNodes[5].childNodes[4].value,
      "phone": form.childNodes[5].childNodes[7].value,
      "mail": form.childNodes[5].childNodes[10].value,
      "address": form.childNodes[5].childNodes[13].value,
      "city": form.childNodes[5].childNodes[16].value,
      "state": form.childNodes[5].childNodes[19].value,
      "zip": form.childNodes[5].childNodes[22].value,
      "water_have": form.childNodes[9].checked,
      "food_have": form.childNodes[14].checked,
      "weapon_have": form.childNodes[19].checked,
      "vehicle_have": form.childNodes[24].checked,
      "tool_have": form.childNodes[29].checked,
      "medicine_have": form.childNodes[34].checked,
      "clothes_have": form.childNodes[39].checked,
      "misc_have": form.childNodes[44].checked,
      "water_need": form.childNodes[52].checked,
      "food_need": form.childNodes[57].checked,
      "weapon_need": form.childNodes[62].checked,
      "vehicle_need": form.childNodes[67].checked,
      "tool_need": form.childNodes[72].checked,
      "medicine_need": form.childNodes[77].checked,
      "clothes_need": form.childNodes[82].checked,
      "misc_need": form.childNodes[87].checked,
      "survivor_count": radio
      
      
    };
    console.log(data);
    var data = JSON.stringify(data);
    
    var xhttp = new XMLHttpRequest(); 
    xhttp.open("POST", "./data.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("data=" + data);
}
function login()
{
    window.location.href = auth.url();
}

function signUp()
{
    
}

function change_page(id, category = null)
{
    if(id == "inventorypage")
        fill_inventory(category);
    else
        drop('dropcontent1', true)
        
    document.getElementById(id).style.display = "block";
    
    pages.forEach((page) => 
    {
        if(id != page)
            document.getElementById(page).style.display = "none";
    });
}

function change_menu(id)
{
    document.getElementById(id).style.display = "block";
    
    menus.forEach((menu) => 
    {
        if(id != menu)
            document.getElementById(menu).style.display = "none";
    });
}

async function fill_inventory(category)
{
    var inventory = document.getElementById('inventorytitle').innerHTML = category;
    
    var inventory = document.getElementById('inventory');
    inventory.innerHTML = "";

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) 
        {
            console.log(JSON.parse(xhttp.responseText));
        }
    };
    xhttp.open("GET", "./inventory.php?itemName=" + itemName + "&itemType=" + itemType + "&itemQuantity=" + itemQuantity + "&username=" + username, true);
    xhttp.send();
    
    for (var i = 0;i < 5;i++)
    {
        var div = document.createElement('div');
        div.className = "container";
        
        for (var j = 0;j < 4;j++)
        {
            var box = document.createElement('div');
            box.className = "testbox";
            
            div.appendChild(box);
        }
        
        inventory.appendChild(div);
    }
}

async function putInventory(form)
{
    var itemName = form[1].value, itemType = form[0].value, itemQuantity = form[2].value;

    form[1].value = '';
    form[2].value = '';

    var xhttp = new XMLHttpRequest();
    xhttp.open("GET", "./inventory.php?itemName=" + itemName + "&itemType=" + itemType + "&itemQuantity=" + itemQuantity + "&username=" + username, true);
    xhttp.send();

    document.getElementById('itemModal').style.display = 'none';
}

function drop(id, unset)
{
    if(unset)
    {
        document.getElementById(id).style.display = "none";
        return;
    }
    
    var displayed = document.getElementById(id).style.display == "block";
    if(displayed)
        document.getElementById(id).style.display = "none";
    else
        document.getElementById(id).style.display = "block";
}

function modalSetup() 
{
     var category = document.getElementById('inventorytitle').innerHTML;
     var select = document.getElementById('modalselect').querySelectorAll('option');
     
     for(var i = 0; i < select.length;i++)
     {
        if(category.toLowerCase() == select[i].value)
            select[i].selected = 'selected';
     }
}
