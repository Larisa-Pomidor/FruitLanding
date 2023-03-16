var e = 200,
    t = 200,
    o = document.querySelector(".circle-cursor-bottom"),
    a = document.querySelector(".circle-cursor-top");
document.addEventListener("mousemove", (o) => {
    (e = o.clientX), (t = o.clientY);
}),
    requestAnimationFrame(function s() {
        (a.style.transform = `translate(${e}px, ${t}px)`),
            (o.style.transform = `translate(${e}px, ${t}px)`),
            requestAnimationFrame(s);
    });
