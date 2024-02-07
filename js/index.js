var tl = gsap.timeline();


// ***main section
tl.from("#nav a", {
    duration: 1,
    y: -100,
    opacity: 0,
    ease: "bounce.out",
    stagger: 0.2
})

tl.from("#sub-main h1", {
    opacity: 0,
    delay: 0.3,
    duration: 0.8,
    y: 100,
},"1.3");

tl.from(".shape-divider", {
    opacity: 0,
    delay: 0.3,
    duration: 0.8,
    y: 60,
},"1.3");

gsap.from("#img-1", { duration: 1, x: -200, opacity: 0, ease: "power2.out" });
gsap.from("#img-2", { duration: 1, x: 200, opacity: 0, ease: "power2.out", delay: 0.2 });
gsap.from("#img-3", { duration: 1, y: 200, opacity: 0, ease: "power2.out", delay: 0.4 });


// ***page-2
gsap.to("#page2", {
    scale: 1,  // Change the scale property from 0 to 1
    duration: 1,
    scrollTrigger: {
        trigger: "#page2",
        start: "top 100%",
        end: "top 60%",
        scrub: 3,
        // markers: true,
    },
});

// <!---featured catagories---> 
gsap.from(".small-container h2.title", {
    opacity: 0,
    y: 50,
    duration: 1,
    stagger: 0.2,
    scrollTrigger: {
      trigger: ".small-container",
      start: "top 50%",
    },
  });

 //  "Featured Product" section
gsap.from(".small-container h2.title, .col-4", {
    opacity: 0,
    y: 50,
    duration: 1,
    stagger: 0.2,
    scrollTrigger: {
      trigger: ".small-container h2.title", // Update the trigger to target the title
      start: "top center", // Set the start point to "top center" of the trigger
    },
  });
//  "Latest Products" section
gsap.from(".small-container h2.title + .row .col-4", {
    opacity: 0,
    y: 50,
    duration: 1,
    stagger: 0.2,
    scrollTrigger: {
      trigger: ".small-container h2.title", 
      start: "top 80%",
      end: "top 30%",
    },
  });
  

  //  "Special Offer" section
  gsap.from(".offer-img, .offer p, .offer h1, .offer small, .offer a", {
    
    x: -500,
    duration: 1,
    stagger: 0.2,
    scrollTrigger: {
      trigger: ".offer",
      start: "top 80%",
    },
  });


   //  "Testimonial" section
  gsap.from(".testimonial-container .col-3", {
    opacity: 0,
    y: 50,
    duration: 1,
    stagger: 0.2,
    scrollTrigger: {
      trigger: ".testimonial-container",
      start: "top 80%",
    },
});


  //  "Download our App" section
  gsap.from(".footer-col-1 img, .footer-col-1 p, .footer-col-1 .app-logo img", {
    opacity: 0,
    x: 500,
    duration: 1,
    stagger: 0.2,
    scrollTrigger: {
      trigger: ".footer-col-1",
      start: "top 80%",
    },
  });

  //  "Useful Links" section
  gsap.from(".footer-col-3 ul li", {
    opacity: 0,
    x: -50,
    duration: 1,
    stagger: 0.2,
    scrollTrigger: {
      trigger: ".footer-col-3",
      start: "top 80%",
    },
  });

  //  "Follow Us" section
  gsap.from(".footer-col-4 ul li", {
    opacity: 0,
    x: -50,
    duration: 1,
    stagger: 0.2,
    scrollTrigger: {
      trigger: ".footer-col-4",
      start: "top 80%",
    },
  });