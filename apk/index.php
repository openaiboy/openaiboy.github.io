<?php
$protocol = "https://";
$domain = $protocol . $_SERVER['HTTP_HOST'];
include __DIR__ . '/../includes/seo.php';
include "../includes/header.php";
?>


<main class="max-w-6xl mx-auto px-4 py-8 text-center">
  <section class="mb-6">
    <h1 class="text-4xl font-bold mb-6">OK安卓版</h1>
    <p class="text-xl text-gray-300 mb-6">
立即在线免费下载官方正版安卓版欧易OK，畅享极速、安全的数字资产管理服务，让您的数字财富轻松增长。
    </p>
  </section>

<?php
// Download Page
include __DIR__ . '/../includes/download.php';
?>

  <section class="max-w-6xl mx-auto px-4 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 mb-6">
    <article class="bg-white/5 border border-green-400/20 rounded-2xl p-6 text-center shadow-xl hover:shadow-green-500/30">
      <h3 class="text-xl font-bold text-green-400 mb-6">数据加密</h3>
      <p class="text-gray-300">多重加密机制，保障隐私与操作安全。</p>
    </article>
    <article class="bg-white/5 border border-blue-400/20 rounded-2xl p-6 text-center shadow-xl hover:shadow-blue-500/30">
      <h3 class="text-xl font-bold text-blue-400 mb-6">运行流畅</h3>
      <p class="text-gray-300">轻量架构，运行稳定快速，适配广泛设备。</p>
    </article>
    <article class="bg-white/5 border border-purple-400/20 rounded-2xl p-6 text-center shadow-xl hover:shadow-purple-500/30">
      <h3 class="text-xl font-bold text-purple-400 mb-6">多端支持</h3>
      <p class="text-gray-300">支持 Android / iOS / PC，数据无缝协同。</p>
    </article>
  </section>

  <section class="max-w-6xl mx-auto px-4 py-12 grid grid-cols-1 md:grid-cols-2 items-center gap-10 bg-[#1a1f2e]/80 rounded-2xl shadow-lg">
    <div class="flex justify-center">
      <img src="/img/OK-app-download.webp" alt="客户端演示" class="w-full rounded-xl shadow-2xl hover:scale-105 transition-transform duration-300" />
    </div>
    <div class="text-white">
      <h2 class="text-4xl font-extrabold mb-6 leading-snug">OK安卓版<br /><span class="text-cyan-400">立即下载安装</span></h2>
      <p class="text-lg text-gray-300 mb-6">下载后即可体验移动端便捷操作，快速访问账户及各项服务，随时随地轻松管理您的数字资产。</p>
      <a href="/" class="inline-block px-8 py-3 text-white font-semibold text-lg rounded-xl border border-cyan-400 bg-gradient-to-r from-cyan-600 to-blue-600 hover:scale-105 transition-transform shadow-lg">立即获取</a>
    </div>
  </section>

  <div class="h-6"></div>
  <section class="max-w-6xl mx-auto px-4 mb-6">
    <h2 class="text-3xl font-bold text-center mb-6">推荐理由</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
      <div class="flex flex-col space-y-2 bg-gray-800 p-6 rounded-lg">
        <h3 class="text-xl font-semibold">简洁操作</h3>
        <p>界面直观，快速上手，适合初学与进阶用户。</p>
      </div>
      <div class="flex flex-col space-y-2 bg-gray-800 p-6 rounded-lg">
        <h3 class="text-xl font-semibold">隐私守护</h3>
        <p>通信数据全程加密，确保个人信息不泄露。</p>
      </div>
      <div class="flex flex-col space-y-2 bg-gray-800 p-6 rounded-lg">
        <h3 class="text-xl font-semibold">稳定支持</h3>
        <p>7x24 技术团队维护，稳定运行更安心。</p>
      </div>
      <div class="flex flex-col space-y-2 bg-gray-800 p-6 rounded-lg">
        <h3 class="text-xl font-semibold">品类丰富</h3>
        <p>支持多种服务与工具模块，满足多样需求。</p>
      </div>
      <div class="flex flex-col space-y-2 bg-gray-800 p-6 rounded-lg">
        <h3 class="text-xl font-semibold">架构先进</h3>
        <p>高效系统框架，保障数据处理与响应速度。</p>
      </div>
      <div class="flex flex-col space-y-2 bg-gray-800 p-6 rounded-lg">
        <h3 class="text-xl font-semibold">区域优化</h3>
        <p>全面适配海内外网络环境，自适应加载策略。</p>
      </div>
    </div>
  </section>
   <section class="max-w-6xl mx-auto px-4 py-12 grid grid-cols-1 md:grid-cols-2 items-center gap-10 bg-[#1a1f2e]/80 rounded-2xl shadow-lg backdrop-blur-md">
        <!-- 左文 -->
        <div class="text-white order-2 md:order-1">
            <h2 class="text-4xl font-extrabold mb-6 leading-snug">欧易OK<br /><span class="text-cyan-400">智能掌控未来</span></h2>
            <p class="text-lg text-gray-300 mb-6">
                欧易 OK 支持多种主流币种，提供极速撮合与强大风控机制，满足专业与新手用户需求。立即下载 欧易安卓版App，体验专业级数字资产交易！
            </p>
            <a href="/" title="欧易安卓下载" class="inline-block px-8 py-3 text-white font-semibold text-lg rounded-xl border border-cyan-400 bg-gradient-to-r from-cyan-600 to-blue-600 hover:from-cyan-500 hover:to-blue-500 hover:scale-105 transition-transform shadow-lg">
                立即下载
            </a>
        </div>

        <!-- 右图 -->
        <div class="flex justify-center order-1 md:order-2">
            <img src="/img/OK-app.webp" alt="欧易 App 智能掌控未来" class="w-full rounded-xl shadow-2xl ring-cyan-400/30 hover:scale-105 transition-transform duration-300" />
        </div>
    </section>
</main>
 
<?php include "../includes/footer.php"; ?>
