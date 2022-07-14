fetch('../BackEnd/dbMovies.php').then((data)=>{
    return data.json();
}).then((completedata)=>{
    let data1="";
    completedata.map((values)=>{
        
        data1 += `<div class="card">
                <img class="images" src="../image/${values.image}">
                <p class="heading">${values.name}</p>
                <a href="../FrontEnd/PurchasePage.php?id= ${values.id}" class="btn btn-primary">Buy Now </a>
            </div>`;
    });
    document.getElementById("cards").innerHTML=data1;
    
}).catch ((err)=> {
    console.log(err);
});


