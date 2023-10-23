var prev = 0;

function mostrar(index) {
  document.getElementById(prev).style.display = 'none';
  document.getElementById(index).style.display = 'block';
  prev = index;
};
