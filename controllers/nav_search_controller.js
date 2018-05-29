$(document).ready(function(){
    var category= $("#category").val();
    var hashtag= $("#hashtag").val();
    var title= "";
    var author= "";
    var search_params= {"category":category,
                        "hashtag":hashtag,
                        "title":title,
                        "author":author};
    $.ajax({
        type:"POST",
        url: "../../models/nav_search_model.php",
        data: search_params,
        cache: false,
        success: function (results){
            $("#results").empty();
            $("#results").append("<div id='blogposts' class='left'>"
                                            +"<ul id='results_list' style='height:auto;'>");
                        for (var i=0; i<results.length; i++){
                            var date= new Date(results[i]["post_date"]);
                            var months= ["January","February","March","April","May","June","July","August","September","October","November","December"];
                            var month= months[date.getMonth()];
                            $("#results_list").append("<li>"
                                                +"<div class='blogpic left' style='background-image: url("+results[i]["post_image"]+");'></div>"
                                                +"<div class='right'>"
                                                +"<h1>"
                                                +"<a href='../../views/post_page.php?post="+results[i]["post_id"]+"'>"
                                                +results[i]["title"]
                                                +"</a>"
                                                +"</h1>"
                                                +"<p class='author'>"+results[i]["username"]+"</p>"
                                                +"<p class='date'>Posted on "+date.getDate()+" "+month+" "+date.getFullYear()+"</p>"
                                                +"</div>"
                                                +"</li>");
                        }  
                        $("#results_list").append("</ul></div>");
        }
    });
});