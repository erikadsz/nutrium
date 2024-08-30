document.addEventListener('DOMContentLoaded', () => {
    const slider = document.querySelectorAll('.slider');
    const btnPrev = document.getElementById('prev-button');
    const btnNext = document.getElementById('next-button');
  
    let currentSlide = 0;
  
    function hideSlider() {
        slider.forEach(item => item.classList.remove('on'))
    }
  
    function showSlider() {
        slider[currentSlide].classList.add('on')
    }
  
    function nextSlider() {
        hideSlider()
        if (currentSlide === slider.length - 1) {
            currentSlide = 0
        } else {
            currentSlide++
        }
        showSlider()
    }
  
    function prevSlider() {
        hideSlider()
        if (currentSlide === 0) {
            currentSlide = slider.length - 1
        } else {
            currentSlide--
        }
        showSlider()
    }
  
    btnNext.addEventListener('click', nextSlider)
    btnPrev.addEventListener('click', prevSlider)
  });
  



  document.querySelectorAll('.editar').forEach(button => {
    button.addEventListener('click', editarClickHandler);
  });
  
  function editarClickHandler(event) {
    const button = event.target;
    const li = button.parentNode.parentNode;
    const inputs = li.querySelectorAll('input');
    inputs.forEach(input => {
      input.disabled = false;
    });
    button.textContent = 'Salvar';
    button.removeEventListener('click', editarClickHandler);
    button.addEventListener('click', salvarClickHandler);
  }
  
  function salvarClickHandler(event) {
    const button = event.target;
    const li = button.parentNode.parentNode;
    const inputs = li.querySelectorAll('input');
    const valores = Array.from(inputs).map(input => input.value);
    console.log('Alterações salvas:', valores);
    inputs.forEach(input => {
      input.disabled = true;
    });
    button.textContent = 'Editar';
    button.removeEventListener('click', salvarClickHandler);
    button.addEventListener('click', editarClickHandler);
  }
  
  document.querySelectorAll('.excluir').forEach(button => {
    button.addEventListener('click', () => {
      const li = button.parentNode.parentNode;
      li.remove();
    });
  });

  