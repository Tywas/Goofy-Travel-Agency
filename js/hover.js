console.log("hover.js in play");

$("#startadventure").hover(function(){
    console.log("mouse enter");
},function(){
    console.log("mouse leave");
});



$("#startadventure").click(function(){
    console.log("clicked");
});