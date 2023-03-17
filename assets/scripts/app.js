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


//comments

$("#comment-btn").click(() => {
    if ($(".live__comments-form textarea").val() != '') {
        $(".live__comments-list-inner").fadeIn(300, function () {
            $(this).prepend(createComment($(".live__comments-form textarea").val()));
        });
    }
})

// sparticles

tsParticles.load("tsparticles", {
    detectRetina: true,
    fpsLimit: 32,
    interactivity: {
        detectsOn: "canvas",
        events: {
            onClick: {
                enable: true,
                mode: "push"
            },
            onDiv: {
                elementId: "repulse-div",
                enable: false,
                mode: "repulse"
            },
            onHover: {
                enable: true,
                mode: "bubble",
                parallax: {
                    enable: false,
                    force: 60,
                    smooth: 10
                }
            },
            resize: true
        },
        modes: {
            bubble: {
                distance: 400,
                duration: 2,
                opacity: 1,
                size: 40,
                speed: 3
            },
            connect: {
                distance: 80,
                lineLinked: {
                    opacity: 0.5
                },
                radius: 60
            },
            grab: {
                distance: 400,
                lineLinked: {
                    opacity: 1
                }
            },
            push: {
                quantity: 4
            },
            remove: {
                quantity: 2
            },
            repulse: {
                distance: 200,
                duration: 0.4
            }
        }
    },
    particles: {
        color: {
            value: "#ffffff"
        },
        lineLinked: {
            blink: false,
            color: "#000",
            consent: false,
            distance: 150,
            enable: false,
            opacity: 0,
            width: 0
        },
        rotate: {
            value: 0,
            random: true,
            direction: "clockwise",
            animation: {
                enable: true,
                speed: 5,
                sync: false
            }
        },
        move: {
            attract: {
                enable: false,
                rotateX: 600,
                rotateY: 1200
            },
            bounce: false,
            direction: "none",
            enable: true,
            outMode: "bounce",
            random: false,
            speed: 2,
            straight: false
        },
        number: {
            density: {
                enable: true,
                area: 1000
            },
            limit: 0,
            value: 80
        },
        opacity: {
            animation: {
                enable: false,
                minimumValue: 0.1,
                speed: 1,
                sync: false
            },
            random: false,
            value: 0.8
        },
        shape: {
            character: {
                fill: false,
                font: "Verdana",
                style: "",
                value: "*",
                weight: "400"
            },
            // image: [
            //     {
            //         src: "https://particles.js.org/images/fruits/apple.png",
            //         width: 32,
            //         height: 32
            //     },
            //     {
            //         src: "https://particles.js.org/images/fruits/avocado.png",
            //         width: 32,
            //         height: 32
            //     },
            //     {
            //         src: "https://particles.js.org/images/fruits/banana.png",
            //         width: 32,
            //         height: 32
            //     },
            //     {
            //         src: "https://particles.js.org/images/fruits/berries.png",
            //         width: 32,
            //         height: 32
            //     },
            //     {
            //         src: "https://particles.js.org/images/fruits/cherry.png",
            //         width: 32,
            //         height: 32
            //     }
            // ],
            image: [
                {
                    src: "assets/img/symb-1.png",
                    width: 32,
                    height: 32
                },
                {
                    src: "assets/img/symb-2.png",
                    width: 32,
                    height: 32
                },
                {
                    src: "assets/img/symb-3.png",
                    width: 32,
                    height: 32
                },
                {
                    src: "assets/img/symb-4.png",
                    width: 32,
                    height: 32
                },
                {
                    src: "assets/img/symb-5.png",
                    width: 32,
                    height: 32
                }
            ],
            polygon: {
                nb_sides: 5
            },
            stroke: {
                color: "#000000",
                width: 0
            },
            type: "image"
        },
        size: {
            animation: {
                enable: false,
                minimumValue: 0.1,
                speed: 40,
                sync: false
            },
            random: false,
            value: 16
        }
    },
    polygon: {
        draw: {
            enable: false,
            lineColor: "#ffffff",
            lineWidth: 0.5
        },
        move: {
            radius: 10
        },
        scale: 1,
        type: "none",
        url: ""
    }
});


