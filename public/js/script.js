document.addEventListener("DOMContentLoaded", function(event) {
   
const showNavbar = (toggleId, navId, bodyId, headerId) =>{
    const toggle = document.getElementById(toggleId),
    nav = document.getElementById(navId),
    bodypd = document.getElementById(bodyId),
    headerpd = document.getElementById(headerId)

    // Validate that all variables exist
    if(toggle && nav && bodypd && headerpd){
        toggle.addEventListener('click', ()=>{
        // show navbar
        nav.classList.toggle('show')
        // change icon
        toggle.classList.toggle('bx-menu-alt-left')
        // add padding to body
        bodypd.classList.toggle('body-pd')
        // add padding to header
        headerpd.classList.toggle('body-pd')
        })
    }
}

showNavbar('header-toggle','nav-bar','body-pd','header')

/*===== LINK ACTIVE =====*/
const linkColor = document.querySelectorAll('.nav_link')

function colorLink(){
if(linkColor){
linkColor.forEach(l=> l.classList.remove('active'))
this.classList.add('active')
}
}
linkColor.forEach(l=> l.addEventListener('click', colorLink))

    // Your code to run since DOM is loaded and ready
    const map = L.map('map', {
        center: [-29.50, 145],
        zoom: 3.5
    });
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', { attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors' }).addTo(map);
    const marker1 = L.marker([-37.699450, 176.279420]).addTo(map);
    const marker2 = L.marker([-27.643310, 153.305140]).addTo(map);
    const marker3 = L.marker([-33.956330, 122.150270]).addTo(map);
    const marker4 = L.marker([-34.962390, 117.391220]).addTo(map);
    const marker5 = L.marker([-17.961210, 122.214820]).addTo(map);
    const marker6 = L.marker([-16.505960, 151.751520]).addTo(map);
    const marker7 = L.marker([-22.594400, 167.484440]).addTo(map);
    const marker8 = L.marker([-37.977000, 177.057000]).addTo(map);
    const marker9 = L.marker([-41.037600, 173.017000]).addTo(map);
    const marker10 = L.marker([-37.670300, 176.212000]).addTo(map);
});

