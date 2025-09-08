// import './bootstrap';
// window.addEventListener('click', function() {
//     alert('Halo, ini adalah alert');
// });

let h1node = document.getElementsByTagName('h1');

h1node[0].addEventListener('click', function(e) {
    e.target.style.backgroundColor = 'tomato';
    e.target.style.color = 'black';
});
