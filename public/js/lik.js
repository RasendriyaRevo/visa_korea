function showText($indots,$inmore,$inmyBtn) {
    var dots = document.getElementById($indots);
    var moreText = document.getElementById($inmore);
    var btnText = document.getElementById($inmyBtn);

    if (dots.style.display === "none") {
        dots.style.display = "inline";
        btnText.innerHTML = "Read more";
        moreText.style.display = "none";
    } else {
        dots.style.display = "none";
        btnText.innerHTML = "Read less";
        moreText.style.display = "inline";
    }
} 