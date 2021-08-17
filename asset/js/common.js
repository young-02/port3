

function pageClick() {   
    document.querySelectorAll(".page__click").forEach((elem) => {
        elem.addEventListener("click", (e) => {
            e.preventDefault();
            const dataName = elem.getAttribute('href');
            document.querySelector("#loading").classList.add('close')

            setTimeout(() => {
                window.location.href =
                    "http://youngee01.dothome.co.kr/port3/" + dataName;

            }, 2000);
            
        });
    });
}
pageClick();



 