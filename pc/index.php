 <?php
$protocol = "https://";
$domain = $protocol . $_SERVER['HTTP_HOST'];
include __DIR__ . '/../includes/seo.php';
include "../includes/header.php";
?>
    <main class="max-w-6xl mx-auto px-4 py-8 text-center">
               <section class="mb-6">
            <h1 class="text-4xl font-bold mb-6">欧易OK 电脑版</h1>
                        <p class="text-xl text-gray-300 mb-6">立即下载欧易OKX官方最新版电脑客户端,支持Windows/MacOS多端同步,轻松交易加密数字货币,掌控未来数字资产.</p>
        </section>
<?php
// Download Page
include __DIR__ . '/../includes/download.php';
?>
 
 
<section class="max-w-6xl mx-auto px-4 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 mb-6">

  <article class="bg-white/5 border border-green-400/20 backdrop-blur-md rounded-2xl p-6 text-center shadow-xl hover:shadow-green-500/30 transition-shadow">
    <h3 class="text-xl font-bold text-green-400 mb-6">安全保障</h3>
    <p class="text-gray-300">采用多重风控和顶级加密技术，保障资产安全无忧。</p>
  </article>

  <article class="bg-white/5 border border-blue-400/20 backdrop-blur-md rounded-2xl p-6 text-center shadow-xl hover:shadow-blue-500/30 transition-shadow">
    <h3 class="text-xl font-bold text-blue-400 mb-6">极速交易</h3>
    <p class="text-gray-300">全球领先撮合引擎，订单秒级成交，交易畅快无阻。</p>
  </article>

  <article class="bg-white/5 border border-purple-400/20 backdrop-blur-md rounded-2xl p-6 text-center shadow-xl hover:shadow-purple-500/30 transition-shadow">
    <h3 class="text-xl font-bold text-purple-400 mb-6">多端同步</h3>
    <p class="text-gray-300">支持手机、平板、PC多设备，数据实时同步。</p>
  </article>
</section>
 
<section class="max-w-6xl mx-auto px-4 py-12 grid grid-cols-1 md:grid-cols-2 items-center gap-10 bg-[#1a1f2e]/80 rounded-2xl shadow-lg backdrop-blur-md">
    <!-- 左图 -->
    <div class="flex justify-center">
        <img src="/img/okx-app-download.webp" 
             alt="欧易 App 下载平台"
             class="w-full rounded-xl shadow-2xl  ring-cyan-400/30 hover:scale-105 transition-transform duration-300" />
    </div>

    <!-- 右文 -->
    <div class="text-white">
        <h2 class="text-4xl font-extrabold mb-6 leading-snug">欧易 OK <br /><span class="text-cyan-400">交易所注册入口</span></h2>
        <p class="text-lg text-gray-300 mb-6">
            立即注册欧易 OKX 电脑版，开启智能交易之旅。随时掌握币圈动态，轻松交易比特币、以太坊等主流币种，助你掌控未来数字资产！
        </p>
        <a href="/"  title="欧易注册入口" 
           class="inline-block px-8 py-3 text-white font-semibold text-lg rounded-xl border border-cyan-400 bg-gradient-to-r from-cyan-600 to-blue-600 hover:from-cyan-500 hover:to-blue-500 hover:scale-105 transition-transform shadow-lg">
            立即注册
        </a>
    </div>
</section>
 

     <div class="h-4 sm:h-6"></div>
    <section class="max-w-6xl mx-auto px-4 mb-6">
        <h2 class="text-3xl font-bold text-center mb-6">为什么选择欧易(OKX) App ？</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
            <div class="flex flex-col space-y-2 bg-gray-800 p-6 rounded-lg">
                <h3 class="text-xl font-semibold">简单易用</h3>
                <p>欧易电脑版界面友好，操作简单，适合新老用户快速上手，超有心。</p>
            </div>
            <div class="flex flex-col space-y-2 bg-gray-800 p-6 rounded-lg">
                <h3 class="text-xl font-semibold">隐私安全</h3>
                <p>多层安全防护，欧易电脑版保障用户资产和信息隐私安全，超放心。</p>
            </div>
            <div class="flex flex-col space-y-2 bg-gray-800 p-6 rounded-lg">
                <h3 class="text-xl font-semibold">全天候服务</h3>
                <p>欧易电脑版拥有专业客服团队，7x24小时全天候在线支持，超贴心。</p>
            </div>
            <div class="flex flex-col space-y-2 bg-gray-800 p-6 rounded-lg">
                <h3 class="text-xl font-semibold">丰富品种</h3>
                <p>欧易电脑版支持多种主流数字货币交易，满足多样化投资，超精心。</p>
            </div>
            <div class="flex flex-col space-y-2 bg-gray-800 p-6 rounded-lg">
                <h3 class="text-xl font-semibold">高效稳定</h3>
                <p>欧易电脑版底层技术领先，来保障交易平台稳定顺畅运行，超安心。</p>
            </div>
            <div class="flex flex-col space-y-2 bg-gray-800 p-6 rounded-lg">
                <h3 class="text-xl font-semibold">全球布局</h3>
                <p>欧易电脑版覆盖全球多个地区，服务全球数千万数字用户，超用心。</p>
            </div>
        </div>
    </section>

<section class="max-w-6xl mx-auto px-4 py-12 grid grid-cols-1 md:grid-cols-2 items-center gap-10 bg-[#1a1f2e]/80 rounded-2xl shadow-lg backdrop-blur-md">
    <!-- 左文 -->
    <div class="text-white order-2 md:order-1">
        <h2 class="text-4xl font-extrabold mb-6 leading-snug">欧易 OK <br /><span class="text-cyan-400">电脑网页版入口</span></h2>
        <p class="text-lg text-gray-300 mb-6">
          原生支持 130+ 网络，助你畅游 Web3，探索去中心化世界的无限可能，你的数字资产与隐私由你自主掌控，参与 NODE 竞赛 赢取 $200,000 奖励
        </p>
        <a href="/" 
           class="inline-block px-8 py-3 text-white font-semibold text-lg rounded-xl border border-cyan-400 bg-gradient-to-r from-cyan-600 to-blue-600 hover:from-cyan-500 hover:to-blue-500 hover:scale-105 transition-transform shadow-lg">
            立即注册
        </a>
    </div>

    <!-- 右图 -->
    <div class="flex justify-center order-1 md:order-2">
        <img src="/img/okx-app.webp" 
             alt="欧易 App 智能掌控未来"
             class="w-full rounded-xl shadow-2xl ring-cyan-400/30 hover:scale-105 transition-transform duration-300" />
    </div>
</section>
 
</main>

<?php
include '../includes/footer.php';
?>
