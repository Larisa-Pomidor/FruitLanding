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

setInterval(() => {
    $(".banner__words .is-hidden").attr("class", "temp-visible");
    $(".banner__words .is-visible").attr("class", "is-hidden");
    $(".banner__words .temp-visible").attr("class", "is-visible");
}, 4000);

