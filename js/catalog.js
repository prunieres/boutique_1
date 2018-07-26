$(function(){
    for(var i = 0; i < catalog.length ; i++){
        var button = $('<a class="btn btn-danger" href="product.html?product_id='+i+'">Voir plus</a>');
        var quantity = $('<span class="price">'+catalog[i].quantity+'</span>');
        var price = $('<span class="price">'+catalog[i].price+"€"+'</span>');
        var description = $('<p>'+catalog[i].description+'</p>');
        var title3 = $('<h3 class="mt-0">'+catalog[i].name+'</h3>');
        var media_body = $('<div class="media-body"></div');
        var image = $('<img class="mr-3 thumb" src='+catalog[i].thumb   +' alt="from">');
        var media_m3 = $('<div class="media m-3"></div');
        var title2 = $('<h2>Products</h2>');
        var col_prod = $('<div class="col">');
        var article_m5 = $('<article class="m-5"></article');
        var col = $('<div class ="col-md-6">');
        var row = $('<div class = "row">');
        //`` alt gr6 + espace pour echapper des valeurs

        $(media_body).append(title3);
        $(media_body).append(description);
        $(media_body).append(quantity);
        $(media_body).append(price);
        $(media_body).append(button);

        $(media_m3).append(image);
        $(media_m3).append(media_body );
        $(col_md_6).append(title2);
        $(col_md_6).append(media_m3);
        $(article_m5).append(col_prod);

        $(col).append(article_m5);
        $(row).append(col);
        $('main').append($(row));
}

})
