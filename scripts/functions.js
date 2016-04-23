/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


function EndZoom(src) {
    if (selectedBox !== "" && src !== selectedBox) {
        selectedBox.mouseenter(function () {
            $(this).animate({boxShadow: '0 0 20px #000'});
        });
        selectedBox.mouseleave(function () {
            $(this).animate({boxShadow: '0 0 20px #666'});
        });
        selectedBox.animate({boxShadow: '0 0 20px #666'});
    }
    src.unbind("mouseenter");
    src.unbind("mouseleave");
    selectedBox = src;
}

$(document).ready(function () {
    var time = 0;

    var randomNumbers = new Array();

    while (randomNumbers.length < 12) {
        var number = Math.floor((Math.random() * 12) + 1);
        var found = false;
        for (var i = 0; i < randomNumbers.length; i++) {
            if (randomNumbers[i] === number) {
                found = true;
                break
            }
        }
        if (!found)
            randomNumbers[randomNumbers.length] = number;
    }

    for (var i = 0; i < randomNumbers.length; i++) {
        $('.box' + randomNumbers[i]).delay(time).animate({boxShadow: '0 0 20px #000'}, 1000).animate({boxShadow: '0 0 20px #666'}, 1000);
        ;
        time += 100;
    }

    selectedBox = "";

    $(".box").each(function () {
        $(this).zoomTarget({
            targetsize: 1.0,
            root: $("body"),
            closeclick: false
        });

        $(this).mouseenter(function () {
            $(this).animate({boxShadow: '0 0 20px #000'});
        });

        $(this).mouseleave(function () {
            $(this).animate({boxShadow: '0 0 20px #666'});
        });

        $(this).click(function () {
            EndZoom($(this));
        });
    });
    
    $("#PageContents").click(function () {
        if (selectedBox !== "") {
            selectedBox.mouseenter(function () {
                $(this).animate({boxShadow: '0 0 20px #000'});
            });
            selectedBox.mouseleave(function () {
                $(this).animate({boxShadow: '0 0 20px #666'});
            });
            selectedBox.animate({boxShadow: '0 0 20px #666'});
            selectedBox = "";
        }
    });
});
