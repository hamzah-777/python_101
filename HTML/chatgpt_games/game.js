let canvas = document.getElementById("gameCanvas");
let ctx = canvas.getContext("2d");

let player = {
    x: canvas.width / 2,
    y: canvas.height - 30,
    width: 30,
    height: 30,
    color: "black",
    dx: 2,
};

let bullets = [];
let bulletSpeed = 50;

function drawPlayer() {
    ctx.fillStyle = player.color;
    ctx.fillRect(player.x, player.y, player.width, player.height);
}

function drawBullets() {
    ctx.fillStyle = "red";
    bullets.forEach(function(bullet) {
        ctx.fillRect(bullet.x, bullet.y, bullet.width, bullet.height);
    });
}

function updateGameArea() {
    ctx.clearRect(0, 0, canvas.width, canvas.height);
    drawPlayer();
    drawBullets();
    requestAnimationFrame(updateGameArea);
}

function movePlayer(event) {
    if (event.key == "ArrowLeft") {
        player.x -= player.dx;
    } else if (event.key == "ArrowRight") {
        player.x += player.dx;
    } else if (event.key == " ") {
        bullets.push({
            x: player.x + player.width / 2,
            y: player.y,
            width: 5,
            height: 10
        });
    }
}

function moveBullets() {
    for (let i = 0; i < bullets.length; i++) {
        bullets[i].y -= bulletSpeed;
        if (bullets[i].y < 0) {
            bullets.splice(i, 1);
        }
    }
}

setInterval(moveBullets, 100);
window.addEventListener("keydown", movePlayer);
updateGameArea();


//TODO :
/**
 * change color player OK
 * change the shape of player X
 * change speed of bullet
 * 
 */