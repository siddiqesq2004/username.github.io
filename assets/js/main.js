/* Testimonial Slider Logic */
let currentSlide = 0;
const slides = document.querySelectorAll(".testimonial-card");
const dots = document.querySelectorAll(".slider-btn");

function changeSlide(index) {
    slides[currentSlide]?.classList.remove("active");
    dots[currentSlide]?.classList.remove("active-btn");

    currentSlide = index;

    slides[currentSlide]?.classList.add("active");
    dots[currentSlide]?.classList.add("active-btn");
}

dots[0]?.classList.add("active-btn");

/* OTP Auto Focus */
document.querySelectorAll(".otp-input").forEach((input, index, all) => {
    input.addEventListener("input", () => {
        if (input.value && index < all.length - 1) {
            all[index + 1].focus();
        }
    });
});

/* Role Selection Animation */
function selectRole(role) {
    document.getElementById("signupForm").style.display = "flex";
    document.getElementById("selectedRole").value = role;

    document.querySelectorAll(".role-card").forEach(card => {
        card.classList.remove("selected-role");
    });

    document.getElementById(role + "-card")?.classList.add("selected-role");
}
