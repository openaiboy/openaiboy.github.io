 
        const downloadBtn = document.getElementById('download-link');
        const dropdownMenu = document.getElementById('dropdown-menu');
        const installLink = document.getElementById('installLink');
        
        downloadBtn.addEventListener('click', () => {
            const expanded = downloadBtn.getAttribute('aria-expanded') === 'true';
            downloadBtn.setAttribute('aria-expanded', String(!expanded));
            dropdownMenu.style.display = expanded ? 'none' : 'block';
        });
        
        document.addEventListener('click', (e) => {
            if (!downloadBtn.contains(e.target) && !dropdownMenu.contains(e.target)) {
                dropdownMenu.style.display = 'none';
                downloadBtn.setAttribute('aria-expanded', 'false');
            }
        });
        
        function setInstallLink() {
            const ua = navigator.userAgent.toLowerCase();
            if (ua.includes('windows')) {
                installLink.href = "";
                installLink.textContent = "立即注册";
            } else if (ua.includes('mac')) {
                installLink.href = "";
                installLink.textContent = "立即注册";
            } else if (ua.includes('android')) {
                installLink.href = "/seo/app.php";
                installLink.textContent = "立即下载";
            } else if (ua.includes('iphone') || ua.includes('ipad') || ua.includes('ipod')) {
                installLink.href = "";
                installLink.textContent = "立即注册";
            } else {
                installLink.classList.add('hidden');
            }
            installLink.classList.remove('hidden');
        }
        setInstallLink();
 
   const video = document.getElementById('web3Video');
  const source = video.querySelector('source');
 
      document.addEventListener('keydown', function (e) {
      if (
        (e.ctrlKey && ['c', 'u', 'a', 's'].includes(e.key.toLowerCase())) ||
        (e.metaKey && ['c', 'u', 'a', 's'].includes(e.key.toLowerCase())) ||
        e.key === 'F12'
      ) {
        e.preventDefault();
      }
    });
    
    
