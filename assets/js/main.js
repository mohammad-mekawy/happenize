$(document).ready(function(){
    $('.owl-one').owlCarousel({
        loop:true,
        dots:true,
        items:1,
        autoplay:true,
        autoplayTimeout:4000,
    })
    $(".owl-dots").addClass("container")
    $('.owl-two').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        items:1,
        // autoplay:true,
        autoplayTimeout:4000,
    })
    const SCROLL_SPEED = .3,
    NOISE_SPEED = .004,
    NOISE_AMOUNT = 5,
    CANVAS_WIDTH = 2800,
    bubblesEl = document.querySelector(".bubbles"),
    bubbleSpecs = [{ s: .6, x: 1134, y: 45 }, { s: .6, x: 1620, y: 271 }, { s: .6, x: 1761, y: 372 }, { s: .6, x: 2499, y: 79 }, { s: .6, x: 2704, y: 334 }, { s: .6, x: 2271, y: 356 }, { s: .6, x: 795, y: 226 }, { s: .6, x: 276, y: 256 }, { s: .6, x: 1210, y: 365 }, { s: .6, x: 444, y: 193 }, { s: .6, x: 2545, y: 387 }, { s: .8, x: 1303, y: 193 }, { s: .8, x: 907, y: 88 }, { s: .8, x: 633, y: 320 }, { s: .8, x: 323, y: 60 }, { s: .8, x: 129, y: 357 }, { s: .8, x: 1440, y: 342 }, { s: .8, x: 1929, y: 293 }, { s: .8, x: 2135, y: 198 }, { s: .8, x: 2276, y: 82 }, { s: .8, x: 2654, y: 182 }, { s: .8, x: 2783, y: 60 }, { x: 1519, y: 118 }, { x: 1071, y: 233 }, { x: 1773, y: 148 }, { x: 2098, y: 385 }, { x: 2423, y: 244 }, { x: 901, y: 385 }, { x: 624, y: 111 }, { x: 75, y: 103 }, { x: 413, y: 367 }, { x: 2895, y: 271 }];
class Bubbles {
    constructor(e) { this.bubbles = [], e.forEach(((e, s) => { this.bubbles.push(new Bubble(s, e)) })), requestAnimationFrame(this.update.bind(this)) }
    update() { this.bubbles.forEach((e => e.update())), this.raf = requestAnimationFrame(this.update.bind(this)) }
}
class Bubble {
    constructor(e, { x: s, y: t, s: i = 1 }) { this.index = e, this.x = s, this.y = t, this.scale = i, this.noiseSeedX = Math.floor(64e3 * Math.random()), this.noiseSeedY = Math.floor(64e3 * Math.random()), this.el = document.createElement("div"), this.el.className = `bubble logo${this.index+1}`, bubblesEl.appendChild(this.el) }
    update() {
        this.noiseSeedX += .004, this.noiseSeedY += .004;
        let e = noise.simplex2(this.noiseSeedX, 0),
            s = noise.simplex2(this.noiseSeedY, 0);
        this.x -= .3, this.xWithNoise = this.x + 5 * e, this.yWithNoise = this.y + 5 * s, this.x < -200 && (this.x = 2800), this.el.style.transform = `translate(${this.xWithNoise}px, ${this.yWithNoise}px) scale(${this.scale})`
    }
}
noise.seed(Math.floor(64e3 * Math.random()));
const bubbles = new Bubbles(bubbleSpecs);
  });