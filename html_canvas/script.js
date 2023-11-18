const canvas = document.getElementById('drawingCanvas');
const context = canvas.getContext('2d');
let isDrawing = false;

function enableDrawing() {
    isDrawing = true;
    canvas.addEventListener('mousedown', startDrawing);
    canvas.addEventListener('mousemove', draw);
    canvas.addEventListener('mouseup', stopDrawing);
}

function enableErasing() {
    isDrawing = false;
    canvas.addEventListener('mousedown', startErasing);
    canvas.addEventListener('mousemove', erase);
    canvas.addEventListener('mouseup', stopErasing);
}

function clearCanvas() {
    context.clearRect(0, 0, canvas.width, canvas.height);
}

function startDrawing(e) {
    context.beginPath();
    context.moveTo(e.clientX - canvas.offsetLeft, e.clientY - canvas.offsetTop);
}

function draw(e) {
    if (!isDrawing) return;
    context.lineTo(e.clientX - canvas.offsetLeft, e.clientY - canvas.offsetTop);
    context.stroke();
}

function stopDrawing() {
    context.closePath();
    canvas.removeEventListener('mousedown', startDrawing);
    canvas.removeEventListener('mousemove', draw);
    canvas.removeEventListener('mouseup', stopDrawing);
}

function startErasing(e) {
    context.clearRect(e.clientX - canvas.offsetLeft, e.clientY - canvas.offsetTop, 10, 10);
}

function erase(e) {
    if (!isDrawing) return;
    context.clearRect(e.clientX - canvas.offsetLeft, e.clientY - canvas.offsetTop, 10, 10);
}

function stopErasing() {
    canvas.removeEventListener('mousedown', startErasing);
    canvas.removeEventListener('mousemove', erase);
    canvas.removeEventListener('mouseup', stopErasing);
}
