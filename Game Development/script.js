
var avatar = document.getElementById("avatar");
var block = document.getElementById("obstacle");
var block1 = document.getElementById("obstacle1");
var counter = 0;

function jump() {
    if (avatar.classList == "jump-animate") {return}
        avatar.classList.add("jump-animate");
        
        setTimeout(function() {
            avatar.classList.remove("jump-animate");
    }, 300);
}

var checkGameOver = setInterval(function() {
    let blockLeft = parseInt(window.getComputedStyle(block).getPropertyValue("left"));
    let blockLeft1 = parseInt(window.getComputedStyle(block1).getPropertyValue("left"));
    let avatarAbove = parseInt(window.getComputedStyle(avatar).getPropertyValue("top"));

    if ((blockLeft < 16  && avatarAbove >= 130) || (blockLeft1 < 16  && avatarAbove >= 130)) {
        block.style.animation = "none";
        block1.style.animation = "none";

        
        alert("Game Over. Score: " + Math.floor(counter/100));
        counter=0;

    } else {
        counter++;
        document.getElementById("scoreSpan").innerHTML = Math.floor(counter/100);
    }
}, 10);