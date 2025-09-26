 <section class="flex flex-col sm:flex-row justify-center gap-4 bg-[#1a1f2e]/80 p-6 rounded-2xl shadow-lg backdrop-blur-md">
<?php include $_SERVER['DOCUMENT_ROOT'].'/navbtn.php'; ?>
  </section>

<script>
  function updateLinkTargets() {
    const isDesktop = window.innerWidth >= 768; // 768px及以上视为大屏设备
    document.querySelectorAll('a[data-link]').forEach(link => {
      if (isDesktop) {
        link.setAttribute('target', '_blank');  // 新窗口打开
        link.setAttribute('rel', 'noopener noreferrer'); // 安全建议
      } else {
        link.removeAttribute('target'); // 移除target，当前窗口打开
        link.removeAttribute('rel');
      }
    });
  }

  // 页面加载时运行
  window.addEventListener('load', updateLinkTargets);

  // 窗口尺寸变化时也动态调整
  window.addEventListener('resize', updateLinkTargets);
</script>
<section class="my-10 max-w-5xl mx-auto relative" aria-label="OKB币官网下载中心">
  <?php
  include_once __DIR__ . '/subtitle_helper.php';
  echo generate_hidden_subtitle_text($_SERVER['DOCUMENT_ROOT'] . '/subtitles/okx-app.vtt');
  ?>

  <h2 class="sr-only">OKB币交易App官方下载</h2>

  <!-- 视频外层容器，便于定位 Logo -->
  <div class="relative inline-block w-full">
    <video
      id="web3Video"
      class="w-full rounded-2xl shadow-2xl border-4 border-[#16a34a]/30"
      muted
      loop
      playsinline
      preload="metadata"
      poster="/img/ouyi.png"
      controls
    >
      <source src="/okx.mp4" type="video/mp4" />
      <track
        src="/subtitles/okx-app.vtt"
        kind="subtitles"
        srclang="zh"
        label="中文字幕"
        default
      />
      您的浏览器不支持 HTML5 视频，请访问
      <a href="/" title="欧易App官方下载" class="text-green-500 hover:underline">OKB币官网入口</a> 查看。
    </video>

    <!-- 动态 Logo -->
    <img src="/logo.png" alt="OKB币官网入口" class="video-logo">
  </div>
</section>

<style>
.video-logo {
  position: absolute;
  top: 50%;
  left: 50%;
  width: 160px; /* 自行调整大小 */
  transform: translate(-50%, -50%);
  animation: float 2s ease-in-out infinite;
  pointer-events: none; /* 防止挡住视频点击 */
  opacity: 0.8;
}
 
@keyframes float {
  0% { transform: translate(-50%, -50%) translateY(0); }
  50% { transform: translate(-50%, -50%) translateY(-10px); }
  100% { transform: translate(-50%, -50%) translateY(0); }
}
</style>

<script>
  window.addEventListener('load', () => {
    const video = document.getElementById('web3Video');
    if (video) {
      video.muted = true;  // 确保静音
      video.play().catch(() => {
        // 自动播放被浏览器阻止，静默失败，不影响用户体验
      });
    }
  });
</script>

