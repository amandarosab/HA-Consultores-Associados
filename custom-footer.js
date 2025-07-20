// 1) Função de compartilhamento do Genesis Blocks
function genesisBlocksShare(url, title, w, h) {
    var left = (window.innerWidth / 2) - (w / 2);
    var top = (window.innerHeight / 2) - (h / 2);
    return window.open(
      url, title,
      'toolbar=no, location=no, directories=no, status=no, menubar=no, ' +
      'scrollbars=no, resizable=no, copyhistory=no, width=600, height=600, ' +
      'top=' + top + ', left=' + left
    );
  }
  
  // 2) Configuração do objeto `dsg`
  /* <![CDATA[ */
  var dsg = {
    "loadMoreURL": "https://www.dsgco.com/wp-json/dsg/v1/posts",
    "nonce": "7b0a7c4b9a"
  };
  /* ]]> */
  
  // 3) IIFE do Cloudflare (aparecia duas vezes; mantive só uma)
  (function () {
    function c() {
      var b = a.contentDocument || a.contentWindow.document;
      if (b) {
        var d = b.createElement('script');
        d.innerHTML =
          "window.__CF$cv$params={r:'95d54a48a507201b',t:'MTc1MjIwNTMzOS4wMDAwMDA='};" +
          "var a=document.createElement('script');a.nonce='';" +
          "a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';" +
          "document.getElementsByTagName('head')[0].appendChild(a);";
        b.getElementsByTagName('head')[0].appendChild(d);
      }
    }
    if (document.body) {
      var a = document.createElement('iframe');
      a.height = 1; a.width = 1;
      a.style.position = 'absolute';
      a.style.top = 0; a.style.left = 0;
      a.style.border = 'none';
      a.style.visibility = 'hidden';
      document.body.appendChild(a);
      if (document.readyState !== 'loading') c();
      else if (window.addEventListener)
        document.addEventListener('DOMContentLoaded', c);
      else {
        var prev = document.onreadystatechange || function () {};
        document.onreadystatechange = function (e) {
          prev(e);
          if (document.readyState !== 'loading') {
            document.onreadystatechange = prev;
            c();
          }
        };
      }
    }
  })();