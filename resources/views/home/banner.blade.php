<section id="banner" class=" mt-5">

    <h2 class="text-center text-4xl font-bold">
        Our Associates
    </h2>
    <div class="container1 mx-auto px-4">
        <div class="carousel-view">
            <button id="prev-btn" class="prev-btn ">
                <svg viewBox="0 0 512 512" width="20" title="chevron-circle-left">
                    <path
                        d="M256 504C119 504 8 393 8 256S119 8 256 8s248 111 248 248-111 248-248 248zM142.1 273l135.5 135.5c9.4 9.4 24.6 9.4 33.9 0l17-17c9.4-9.4 9.4-24.6 0-33.9L226.9 256l101.6-101.6c9.4-9.4 9.4-24.6 0-33.9l-17-17c-9.4-9.4-24.6-9.4-33.9 0L142.1 239c-9.4 9.4-9.4 24.6 0 34z" />
                </svg>
            </button>
            <div id="item-list1" class="item-list">
                <img id="item1" class="item" src="services/advice.jpg" />
                <img id="item1" class="item" src="services/graphics.jpg" />
                <img id="item1" class="item" src="services/ios.jpg" />
                <img id="item1" class="item" src="services/switch.jpg" />
                <img id="item1" class="item" src="services/website.jpg" />
                <img id="item1" class="item" src="services/seo.jpg" />
            </div>
            <button id="next-btn" class="next-btn">
                <svg viewBox="0 0 512 512" width="20" title="chevron-circle-right">
                    <path
                        d="M256 8c137 0 248 111 248 248S393 504 256 504 8 393 8 256 119 8 256 8zm113.9 231L234.4 103.5c-9.4-9.4-24.6-9.4-33.9 0l-17 17c-9.4 9.4-9.4 24.6 0 33.9L285.1 256 183.5 357.6c-9.4 9.4-9.4 24.6 0 33.9l17 17c9.4 9.4 24.6 9.4 33.9 0L369.9 273c9.4-9.4 9.4-24.6 0-34z" />
                </svg>
            </button>
        </div>
    </div>
</section>
<script>
    const prev = document.getElementById('prev-btn')
    const next = document.getElementById('next-btn')
    const list = document.getElementById('item-list1')

    const itemWidth = 150
    const padding = 10
    const scrollAmount = itemWidth + padding
    const intervalTime = 600

    let scrollingInterval
    const scrollNext = () => {
        if (list.scrollLeft + list.offsetWidth >= list.scrollWidth) {
            // If close to the end, scroll back to the beginning
            list.scrollLeft = 0;
        } else {
            // Otherwise, scroll to the next item
            list.scrollLeft += scrollAmount;
        }
    }
    const startAutoScroll = () => {
        scrollingInterval = setInterval(scrollNext, intervalTime)
    }
    const stopAutoScroll = () => {
        clearInterval(scrollingInterval)
    }
    prev.addEventListener('click', () => {
        list.scrollLeft -= scrollAmount
        stopAutoScroll()
    })
    next.addEventListener('click', () => {
        list.scrollLeft += scrollAmount
        stopAutoScroll()
    })
    startAutoScroll()
    list.addEventListener('mouseenter', stopAutoScroll)
    list.addEventListener('mouseleave', startAutoScroll)
</script>
