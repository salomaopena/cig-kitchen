/*JS*/

//watch

let watch = document.querySelector("#top-watch");
if (watch != null) {
    let watch_time = new Date();
    watch.innerHTML = watch_time.toLocaleTimeString();
    setInterval(() => {
        watch_time = new Date();
        watch.innerHTML = watch_time.toLocaleTimeString();
    }, 1000);
}