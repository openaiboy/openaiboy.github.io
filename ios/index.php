<?php
$protocol = "https://";
$domain = $protocol . $_SERVER['HTTP_HOST'];
 include __DIR__ . '/../includes/seo.php';
include "../includes/header.php";
?>

<main class="max-w-6xl mx-auto px-4 py-8 text-center">
  <section class="mb-6">
    <h1 class="text-4xl font-bold mb-6">OK iOS 客户端</h1>
    <p class="text-xl text-gray-300 mb-6">
      支持 iPhone 与 iPad，适配主流 iOS 系统版本。
      <br />轻松安装、快速体验、安全稳定，是你可靠的移动工具助手。
    </p>
  </section>
<?php
// Download Page
include __DIR__ . '/../includes/download.php';
?>
 
  <section class="max-w-6xl mx-auto px-4 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 mb-6">
    <article class="bg-white/5 border border-green-400/20 rounded-2xl p-6 text-center shadow-xl hover:shadow-green-500/30">
      <h3 class="text-xl font-bold text-green-400 mb-6">隐私保护</h3>
      <p class="text-gray-300">通信加密与设备识别，保障用户使用安全。</p>
    </article>
    <article class="bg-white/5 border border-blue-400/20 rounded-2xl p-6 text-center shadow-xl hover:shadow-blue-500/30">
      <h3 class="text-xl font-bold text-blue-400 mb-6">兼容性强</h3>
      <p class="text-gray-300">适配多系统版本，稳定运行不闪退。</p>
    </article>
    <article class="bg-white/5 border border-purple-400/20 rounded-2xl p-6 text-center shadow-xl hover:shadow-purple-500/30">
      <h3 class="text-xl font-bold text-purple-400 mb-6">数据同步</h3>
      <p class="text-gray-300">与安卓/PC客户端无缝协同，实现同步管理。</p>
    </article>
  </section>

  <section class="max-w-6xl mx-auto px-4 py-12 grid grid-cols-1 md:grid-cols-2 items-center gap-10 bg-[#1a1f2e]/80 rounded-2xl shadow-lg">
    <div class="flex justify-center">
      <img src="/img/OK-app-download.webp" alt="客户端界面展示" class="w-full rounded-xl shadow-2xl hover:scale-105 transition-transform duration-300" />
    </div>
    <div class="text-white">
      <h2 class="text-4xl font-extrabold mb-6 leading-snug">OK iOS 客户端<br /><span class="text-cyan-400">便捷安全，快速上手</span></h2>
      <p class="text-lg text-gray-300 mb-6">移动设备专用，支持在线操作、通知接收与数据分析。</p>
      <a href="javascript:void(0);" onclick="loadRegLink();" class="inline-block px-8 py-3 text-white font-semibold text-lg rounded-xl border border-cyan-400 bg-gradient-to-r from-cyan-600 to-blue-600 hover:scale-105 transition-transform shadow-lg">立即获取</a>
    </div>
  </section>

  <div class="h-6"></div>
  <section class="max-w-6xl mx-auto px-4 mb-6">
    <h2 class="text-3xl font-bold text-center mb-12">推荐理由</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
      <div class="flex flex-col space-y-2 bg-gray-800 p-6 rounded-lg">
        <h3 class="text-xl font-semibold">操作简单</h3>
        <p>界面简洁清晰，快速掌握使用流程。</p>
      </div>
      <div class="flex flex-col space-y-2 bg-gray-800 p-6 rounded-lg">
        <h3 class="text-xl font-semibold">实时更新</h3>
        <p>支持推送与自动检查机制，确保版本新鲜。</p>
      </div>
      <div class="flex flex-col space-y-2 bg-gray-800 p-6 rounded-lg">
        <h3 class="text-xl font-semibold">区域优化</h3>
        <p>智能选择访问路径，自适应国内外网络。</p>
      </div>
      <div class="flex flex-col space-y-2 bg-gray-800 p-6 rounded-lg">
        <h3 class="text-xl font-semibold">数据安全</h3>
        <p>采用端到端加密技术，全程安全无忧。</p>
      </div>
      <div class="flex flex-col space-y-2 bg-gray-800 p-6 rounded-lg">
        <h3 class="text-xl font-semibold">服务支持</h3>
        <p>配备在线客服及常见问题帮助文档。</p>
      </div>
      <div class="flex flex-col space-y-2 bg-gray-800 p-6 rounded-lg">
        <h3 class="text-xl font-semibold">节能运行</h3>
        <p>低功耗设计，保障设备续航与性能。</p>
      </div>
    </div>
  </section>
      <section class="max-w-6xl mx-auto px-4 py-12 grid grid-cols-1 md:grid-cols-2 items-center gap-10 bg-[#1a1f2e]/80 rounded-2xl shadow-lg backdrop-blur-md">
        <!-- 左文 -->
        <div class="text-white order-2 md:order-1">
            <h2 class="text-4xl font-extrabold mb-6 leading-snug">欧易 OK <br /><span class="text-cyan-400">智能掌控未来</span></h2>
            <p class="text-lg text-gray-300 mb-6">
                欧易 OK 支持多种主流币种，提供极速撮合与强大风控机制，满足专业与新手用户需求。立即下载OK iOS App，体验专业级数字资产交易！
            </p>
            <a href="/" title="欧易OK App下载中心" class="inline-block px-8 py-3 text-white font-semibold text-lg rounded-xl border border-cyan-400 bg-gradient-to-r from-cyan-600 to-blue-600 hover:from-cyan-500 hover:to-blue-500 hover:scale-105 transition-transform shadow-lg">
                立即下载
            </a>
        </div>

        <!-- 右图 -->
        <div class="flex justify-center order-1 md:order-2">
            <img src="/img/OK-app.webp" alt="欧易 App 智能掌控未来" class="w-full rounded-xl shadow-2xl ring-cyan-400/30 hover:scale-105 transition-transform duration-300" />
        </div>
    </section>
</main>

 
  <style>
    .download-btn {
      display: block;
      padding: 1rem 2rem;
      font-size: 1.1rem;
      border-radius: 1rem;
      font-weight: 600;
      transition: all 0.3s ease;
      color: white;
      text-align: center;
      width: 100%;
    }
    .green { background: linear-gradient(to right, #16a34a, #059669); border: 1px solid #4ade80; }
    .pink { background: linear-gradient(to right, #db2777, #9333ea); }
    .blue { background: linear-gradient(to right, #3b82f6, #6366f1); border: 1px solid #60a5fa; }
    .red { background: linear-gradient(to right, #dc2626, #059669); }
    .purple { border: 1px solid #c084fc; }
    .download-btn:hover { transform: scale(1.05); }

    .info-box {
      backdrop-filter: blur(8px);
      padding: 1.5rem;
      border-radius: 1rem;
      text-align: center;
      color: #d1d5db;
    }
  </style>

<?php include "../includes/footer.php"; ?>