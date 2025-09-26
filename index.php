<?php
$protocol = "https://";
$domain = $protocol . $_SERVER['HTTP_HOST'];
include __DIR__ . '/includes/seo.php';
include "includes/header.php";
?>

<main class="max-w-6xl mx-auto px-4 py-8 text-center">
  <section class="mb-2">
    <h1 class="text-4xl font-bold mb-4">OK交易APP官方下载</h1>
    <p class="text-xl text-gray-300 mb-2">
      OK 支持 安卓Android、苹果iOS 及 电脑PC 多端使用体验。安装OK官方客户端，享受专业、稳定、安全的数字服务。
    </p>
<?php
// Download Page
include __DIR__ . '/includes/download.php';
?>

  <section class="max-w-6xl mx-auto px-4 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 mb-2 mt-10">
    <article class="info-box green"><h3 class="text-xl font-bold text-green-400 mb-2">稳定运行</h3><p class="text-gray-300">平台工具组件支持多端数据一致性保障，操作高效稳定。</p></article>
    <article class="info-box blue"><h3 class="text-xl font-bold text-blue-400 mb-2">实时掌握</h3><p class="text-gray-300">系统状态动态反馈机制，辅助用户作出精准判断。</p></article>
    <article class="info-box red"><h3 class="text-xl font-bold text-red-400 mb-2">多系统兼容</h3><p class="text-gray-300">一键安装，适配多种终端场景，移动桌面皆可运行。</p></article>
  </section>

  <section class="max-w-6xl mx-auto px-4 py-12 grid grid-cols-1 md:grid-cols-2 items-center gap-10 bg-[#1a1f2e]/80 rounded-2xl shadow-lg backdrop-blur-md">
    <div class="flex justify-center">
      <img src="/img/OK-app-download.webp" alt="OK 欧易 App 下载平台" class="w-full rounded-xl shadow-2xl ring-cyan-400/30 hover:scale-105 transition-transform duration-300" />
    </div>
    <div class="text-white">
      <h2 class="text-4xl font-extrabold mb-2 leading-snug">欧易 App<br /><span class="text-cyan-400">科技驱动每一步</span></h2>
      <p class="text-lg text-gray-300 mb-6">提供智能数据同步机制与高可用服务体系，为用户账户提供多方位支持与辅助。</p>
      <a href="/" title="欧易" class="inline-block px-8 py-3 text-white font-semibold text-lg rounded-xl border border-cyan-400 bg-gradient-to-r from-cyan-600 to-blue-600 hover:from-cyan-500 hover:to-blue-500 hover:scale-105 transition-transform shadow-lg">立即下载</a>
    </div>
  </section>
<section class="max-w-6xl mx-auto px-4 mb-2">
  <h2 class="text-3xl font-bold text-center mb-12">为什么选择欧易OK？</h2>
  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
    <div class="flex flex-col space-y-2 bg-gray-800 p-6 rounded-lg">
      <h3 class="text-xl font-semibold">操作简便</h3>
      <p>界面友好、流程顺畅，无论新手还是资深用户都能快速上手。</p>
    </div>
    <div class="flex flex-col space-y-2 bg-gray-800 p-6 rounded-lg">
      <h3 class="text-xl font-semibold">安全保障</h3>
      <p>多重加密与风险控制体系，全方位守护您的资产与隐私安全。</p>
    </div>
    <div class="flex flex-col space-y-2 bg-gray-800 p-6 rounded-lg">
      <h3 class="text-xl font-semibold">全天候支持</h3>
      <p>专业客服团队7×24小时在线，随时解决您的疑问与需求。</p>
    </div>
    <div class="flex flex-col space-y-2 bg-gray-800 p-6 rounded-lg">
      <h3 class="text-xl font-semibold">币种丰富</h3>
      <p>涵盖多种主流数字货币，满足不同投资者多样化需求。</p>
    </div>
    <div class="flex flex-col space-y-2 bg-gray-800 p-6 rounded-lg">
      <h3 class="text-xl font-semibold">性能卓越</h3>
      <p>领先技术支持，保障平台运行流畅、交易快速高效。</p>
    </div>
    <div class="flex flex-col space-y-2 bg-gray-800 p-6 rounded-lg">
      <h3 class="text-xl font-semibold">全球覆盖</h3>
      <p>服务全球千万用户，业务遍及多个国家和地区。</p>
    </div>
  </div>
</section>

  <section class="max-w-6xl mx-auto px-4 py-12 grid grid-cols-1 md:grid-cols-2 items-center gap-10 bg-[#1a1f2e]/80 rounded-2xl shadow-lg backdrop-blur-md">
    <div class="text-white order-2 md:order-1">
      <h2 class="text-4xl font-extrabold mb-2 leading-snug">欧易 OK<br /><span class="text-cyan-400">掌握未来节奏</span></h2>
      <p class="text-lg text-gray-300 mb-6">多端协同平台，打造稳定、安全、可靠的账户工具服务体系，开启信息智能新体验。</p>
      <a href="/" title="欧易OK App下载中心" class="inline-block px-8 py-3 text-white font-semibold text-lg rounded-xl border border-cyan-400 bg-gradient-to-r from-cyan-600 to-blue-600 hover:from-cyan-500 hover:to-blue-500 hover:scale-105 transition-transform shadow-lg">立即下载OK</a>
    </div>
    <div class="flex justify-center order-1 md:order-2">
      <img src="/img/OK-app.webp" alt="OK交易App下载中心" class="w-full rounded-xl shadow-2xl ring-cyan-400/30 hover:scale-105 transition-transform duration-300" />
    </div>
  </section>
 
</main>

<?php include "includes/footer.php"; ?>
