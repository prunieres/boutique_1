$(function(){
        var i = GET_PARAM("product_id");//pour envoyer l'urldu produit grâce à la fonction de get_param.js
        var button = $('<a class="btn btn-danger cart" href="product.html?product_id='+i+'">Ajouter au panier</a>');
        var quantity = $('<span class="quantity">Quantité désirée : '+catalog[i].quantity+'</span>');
        var price = $('<span class="price">Prix : '+catalog[i].price+"€"+'</span>');
        var description = $('<p>'+catalog[i].description+'</p>');
        var title3 = $('<h3 class="mt-0">Description</h3>');
        var media_body = $('<div class="media-body"></div');
        var image = $('<img class="mr-3 thumb" src='+catalog[i].thumb   +' alt="from">');
        var media_m3 = $('<div class="media m-3"></div');
        var title2 = $('<h2 class="mt-0">'+catalog[i].name+'</h2>');
        var col_md_6 = $('<div class="col-md-6 col-sm-12">');
        var article_m5 = $('<article class="m-5"></article');

        $(media_body).append(title3);
        $(media_body).append(description);
        $(media_body).append(quantity);
        $(media_body).append(price);
        $(media_body).append(button);

        $(media_m3).append(image);
        $(media_m3).append(media_body );

        $(col_md_6).append(title2);
        $(col_md_6).append(media_m3);
        $(article_m5).append(col_md_6);

        $(article_m5).append(col_md_6);
        $('main').append($(article_m5));

})
