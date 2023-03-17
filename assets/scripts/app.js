// cursor animation

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

// title animation

setInterval(() => {
    $(".banner__words .is-hidden").attr("class", "temp-visible");
    $(".banner__words .is-visible").attr("class", "is-hidden");
    $(".banner__words .temp-visible").attr("class", "is-visible");
}, 4000);

//winner animation

const createWinner = (name, price, image) => {
    return `
        <div class="live__win-item">
            <div class="live__win-image">
                <img src="assets/img/win-` + image + `.png" alt=""></div>
            <div class="live__win-info">
                <div class="live__win-name">`
        + name +
        `</div>
                <div class="live__win-price">
                    $` + price + `,000
                </div>
            </div>
        </div>
    `
}

const createComment = (comment) => {
    return `
    <div class="live__comment-item">
        <div class="live__comment-image">
            <img src="assets/img/anonym.png" alt="">
        </div>
        <div class="live__comment-info">
            <div class="live__comment-name">
                <span>#</span>Anonym
            </div>
            <div class="live__comment-text">
                ` + comment + `
            </div>
        </div>
        <div class="live__comment-controll">
            <div class="live__comment-date">0 min</div>
            <div class="live__comment-meta">
                <div class="live__comment-view">
                    1 <i class="fa fa-eye" aria-hidden="true"></i>
                </div>
                <div class="live__comment-share">
                    <i class="fa fa-share" aria-hidden="true"></i>
                </div>
            </div>
        </div>
    </div>
    `
}

const setWinners = () => {
    let winners = [];

    $.ajax({
        type: "POST",
        url: 'assets/php/winner.php',
        success: function (response) {
            winners = JSON.parse(response);
            winners.forEach(item => {
                $(".live__win-item:nth-child(1)").remove();
                $(".live__win-list").fadeIn(300, function () { $(this).append(createWinner(item.name, item.price, item.image)); });
            })
        }
    });
}

setWinners();

setInterval(() => {
    setWinners();
}, 24000);

$("#comment-btn").click(() => {
    if ($(".live__comments-form textarea").val() != '') {
        $(".live__comments-list-inner").fadeIn(300, function () {
            $(this).prepend(createComment($(".live__comments-form textarea").val()));
        });
    }
})

//comments

