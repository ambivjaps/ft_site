const navLinks = document.querySelectorAll("nav a.nav-link"),
  url = window.location.href;

if (url.includes("articles")) {
  navLinks[1].classList.add("active");

} else if (url.includes("emcees")) {
  navLinks[2].classList.add("active");

} else if (url.includes("videos")) {
  navLinks[3].classList.add("active");

} else if (url.includes("promos")) {
  navLinks[4].classList.add("active");

} else if (url.includes("lyrics")) {
  navLinks[5].classList.add("active");

} else if (url.includes("about")) {
  navLinks[6].classList.add("active");

} else {
  navLinks[0].classList.add("active");
}

 /*
   * Light YouTube Embeds by @labnol
   * Credit: https://www.labnol.org/
   */

  function labnolIframe(div) {
    var iframe = document.createElement('iframe');
    iframe.setAttribute(
      'src',
      'https://www.youtube.com/embed/' + div.dataset.id + '?autoplay=1&rel=0'
    );
    iframe.setAttribute('frameborder', '0');
    iframe.setAttribute('allowfullscreen', '1');
    iframe.setAttribute(
      'allow',
      'accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture'
    );
    div.parentNode.replaceChild(iframe, div);
  }

  function initYouTubeVideos() {
    var playerElements = document.getElementsByClassName('youtube-player');
    for (var n = 0; n < playerElements.length; n++) {
      var videoId = playerElements[n].dataset.id;
      var div = document.createElement('div');
      div.setAttribute('data-id', videoId);
      var thumbNode = document.createElement('img');
      thumbNode.src = '//i.ytimg.com/vi/ID/hqdefault.jpg'.replace(
        'ID',
        videoId
      );
      div.appendChild(thumbNode);
      var playButton = document.createElement('div');
      playButton.setAttribute('class', 'play');
      div.appendChild(playButton);
      div.onclick = function () {
        labnolIframe(this);
      };
      playerElements[n].appendChild(div);
    }
  }

  document.addEventListener('DOMContentLoaded', initYouTubeVideos);