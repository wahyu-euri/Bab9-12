let h1node = document.getElementsByTagName('h1');

h1node[0].addEventListener('click', function(e) {
    e.target.style.textAlign = 'right';
});
