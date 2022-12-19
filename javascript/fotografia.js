navigator.mediaDevices.getUserMedia({video: true}).then(function (mediaStream) {
    const video = document.querySelector('#video');
    video.srcObject = mediaStream;
    video.play();
});

document.querySelector('#capture').addEventListener('click', function (e) {
    var canvas = document.querySelector("#canvas");  
    canvas.height = video.videoHeight;
    canvas.width = video.videoWidth;
    var context = canvas.getContext('2d');
    context.drawImage(video, 0, 0)
})

function salvar(){
    var imgData = canvas.toDataURL();
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
}
};

xhttp.open("POST", "fotografia.php", true);
xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
xhttp.send("imgData=" + encodeURIComponent(imgData));
}