function bouncyReadMore(more) {
  let moreText = document.querySelector(`[data-more="${more}"]`); 
  let btnText = document.querySelector(`[data-morebtn="${more}"]`);
  let btnTranslatedLabel = btnText.getAttribute('translated-label');
  let btnLabel = btnText.getAttribute('label');
  if (moreText.style.display === "none") {
      btnText.innerHTML = btnTranslatedLabel;
      moreText.style.display = "inline";
      
  } else {
      btnText.innerHTML = btnLabel; 
      moreText.style.display = "none";
  }
}