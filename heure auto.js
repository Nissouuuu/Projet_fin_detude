let input = document.getElementById('heure'); 
function updateTime() {
    let date = new Date();
    let hours = date.getHours();
    let minutes = date.getMinutes();
    hours = hours < 10 ? '0' + hours : hours;
    minutes = minutes < 10 ? '0' + minutes : minutes;
    input.value = hours + ':' + minutes;
}
setInterval(updateTime, 1000); 