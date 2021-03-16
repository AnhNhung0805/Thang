productScroll();

function productScroll() {
    let slider = document.getElementById("productSlider");
    let next = document.getElementsByClassName("pro-next");
    let prev = document.getElementsByClassName("pro-prev");
    let item = document.getElementById("slider");

    for (let i = 0; i < next.length; i++) {

        let position = 0;

        prev[i].addEventListener("click", function() {
            if (position > 0) {
                position -= 1;
                translateX(position);
            }
        });

        next[i].addEventListener("click", function() {
            if (position >= 0 && position < hiddenItems()) {
                position += 1;
                translateX(position);
            }
        });
    }

    function hiddenItems() {
        let items = getCount(item, false);
        let visibleItems = slider.offsetWidth / 310;
        return items - Math.ceil(visibleItems);
    }
}

function translateX(position) {
    let slide = document.getElementById("slider");
    slide.style.left = position * -310 + "px";
}

function getCount(parent, getChildrensChildren) {
    let relevantChildren = 0;
    let children = parent.childNodes.length;
    for (let i = 0; i < children; i++) {
        if (parent.childNodes[i].nodeType != 3) {
            if (getChildrensChildren)
                relevantChildren += getCount(parent.childNodes[i], true);
                relevantChildren++;
        }
    }
    return relevantChildren;
}