var tl = gsap.timeline();

tl.from("#main a", {
    duration: 1,
    y: -100,
    opacity: 0,
    ease: "power2.out",
    stagger: 0.2
})
tl.from("#sub-main #img-1", {
    opacity: 0,
    delay: 0.3,
    duration: 0.8,
    y: 60,
},"1")
tl.from("#sub-main #img-2", {
    opacity: 0,
    delay: 0.3,
    duration: 0.8,
    x: 60,
},"1")
tl.from("#sub-main #img-3", {
    opacity: 0,
    delay: 0.3,
    duration: 0.8,
    y: -60,
},"1")
tl.from("#sub-main h1", {
    opacity: 0,
    delay: 0.3,
    duration: 0.8,
    y: -60,
},"1.3");
tl.from(".shape-divider", {
    opacity: 0,
    delay: 0.3,
    duration: 0.8,
    y: 60,
},"1.3");



gsap.from(["#page2 p" , "#page2 h1", "about-us"],{
    opacity: 0,
    y: 20,
    duration: 1,
    stagger: 0.4,
    scrollTrigger: {
        trigger: "#page2 p",
        tlscroller: "body",
        // markers: true,  //it is just to see the marker of the scroll start , end etc.
        delay: 0.3,
        start: "top 65%"  // it is the starting point when the scroller starter start this starting point of the animation then the animation will start
    }
},"1.3")