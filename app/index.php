<?php
$protocol = "https://";
$domain = $protocol . $_SERVER['HTTP_HOST'];
include __DIR__ . '/../includes/seo.php';
include "../includes/header.php";
?>

<main class="max-w-6xl mx-auto px-4 py-8 text-center">
  <!-- 顶部介绍区 -->
  <section class="mb-6">
    <h1 class="text-4xl font-bold mb-6">欧易OK下载</h1>
    <p class="text-xl text-gray-300 mb-6">
    欧易OK是全球知名的数字资产交易平台，现提供官方欧易App下载，支持 Android 安卓、iOS 及 PC 多端登录。
    </p>
  </section>
<?php
// Download Page
include __DIR__ . '/../includes/download.php';
?>

  <!-- 功能模块展示 -->
  <section class="max-w-6xl mx-auto px-4 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 mb-6">
    <article class="bg-white/5 border border-green-400/20 backdrop-blur-md rounded-2xl p-6 text-center shadow-xl hover:shadow-green-500/30 transition-shadow">
      <h3 class="text-xl font-bold text-green-400 mb-6">资金安全</h3>
      <p class="text-gray-300">欧易App集成 OK钱包，多重风控与加密机制，保障每一位用户的数字资产安全。</p>
    </article>
    <article class="bg-white/5 border border-blue-400/20 backdrop-blur-md rounded-2xl p-6 text-center shadow-xl hover:shadow-blue-500/30 transition-shadow">
      <h3 class="text-xl font-bold text-blue-400 mb-6">极速撮合</h3>
      <p class="text-gray-300">OK安卓App 使用全球领先撮合引擎，实现订单秒级成交，高效流畅。</p>
    </article>
    <article class="bg-white/5 border border-purple-400/20 backdrop-blur-md rounded-2xl p-6 text-center shadow-xl hover:shadow-purple-500/30 transition-shadow">
      <h3 class="text-xl font-bold text-purple-400 mb-6">多端支持</h3>
      <p class="text-gray-300">欧易App同步支持 Android、iOS 与 PC 设备，账户信息实时更新。</p>
    </article>
  </section>

  <!-- 图文介绍模块1 -->
  <section class="max-w-6xl mx-auto px-4 py-12 grid grid-cols-1 md:grid-cols-2 items-center gap-10 bg-[#1a1f2e]/80 rounded-2xl shadow-lg backdrop-blur-md">
    <div class="flex justify-center">
      <img src="/img/OK-app-download.webp" alt="OK 安卓 App 下载平台" class="w-full rounded-xl shadow-2xl  ring-cyan-400/30 hover:scale-105 transition-transform duration-300" />
    </div>
    <div class="text-white">
      <h2 class="text-4xl font-extrabold mb-6 leading-snug">下载OKp<br /><span class="text-cyan-400">畅享数字货币交易自由</span></h2>
      <p class="text-lg text-gray-300 mb-6">
        欧易App整合 OK交易所、欧易钱包、行情分析、币种管理等功能，深受全球投资者喜爱。通过安卓手机即可快速完成充值、买币、提币等操作。
      </p>
      <a href="/" class="inline-block px-8 py-3 text-white font-semibold text-lg rounded-xl border border-cyan-400 bg-gradient-to-r from-cyan-600 to-blue-600 hover:from-cyan-500 hover:to-blue-500 hover:scale-105 transition-transform shadow-lg">
        立即下载OK
      </a>
    </div>
  </section>

  <!-- OK优势展示区 -->
  <section class="max-w-6xl mx-auto px-4 mb-6">
    <h2 class="text-3xl font-bold text-center mb-6">选择欧易App的六大理由</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
      <div class="flex flex-col space-y-2 bg-gray-800 p-6 rounded-lg">
        <h3 class="text-xl font-semibold">操作简洁</h3>
        <p>欧易App 下载后即用，界面简洁直观，新手也能轻松上手。</p>
      </div>
      <div class="flex flex-col space-y-2 bg-gray-800 p-6 rounded-lg">
        <h3 class="text-xl font-semibold">隐私保障</h3>
        <p>欧易App内置 OK钱包，保障用户数据和资产隐私。</p>
      </div>
      <div class="flex flex-col space-y-2 bg-gray-800 p-6 rounded-lg">
        <h3 class="text-xl font-semibold">客服支持</h3>
        <p>OK官方提供7x24小时 App 使用及交易支持服务。</p>
      </div>
      <div class="flex flex-col space-y-2 bg-gray-800 p-6 rounded-lg">
        <h3 class="text-xl font-semibold">币种丰富</h3>
        <p>OK App支持比特币、以太坊等主流币及热门代币交易。</p>
      </div>
      <div class="flex flex-col space-y-2 bg-gray-800 p-6 rounded-lg">
        <h3 class="text-xl font-semibold">技术先进</h3>
        <p>欧易App在安卓系统运行流畅，支持鸿蒙等主流国产系统。</p>
      </div>
      <div class="flex flex-col space-y-2 bg-gray-800 p-6 rounded-lg">
        <h3 class="text-xl font-semibold">全球信赖</h3>
        <p>作为全球知名的数字货币交易平台，OK官网入口深受用户认可。</p>
      </div>
    </div>
  </section>

  <!-- 图文介绍模块2 -->
  <section class="max-w-6xl mx-auto px-4 py-12 grid grid-cols-1 md:grid-cols-2 items-center gap-10 bg-[#1a1f2e]/80 rounded-2xl shadow-lg backdrop-blur-md">
    <div class="text-white order-2 md:order-1">
      <h2 class="text-4xl font-extrabold mb-6 leading-snug">OK官网入口<br /><span class="text-cyan-400">开启数字资产自由新时代</span></h2>
      <p class="text-lg text-gray-300 mb-6">
        访问 OK官网，下载OK安卓版本，即可体验去中心化交易、欧易钱包存储、链上资产管理、币种兑换等强大功能，全面掌握您的加密资产！
      </p>
      <a href="/" class="inline-block px-8 py-3 text-white font-semibold text-lg rounded-xl border border-cyan-400 bg-gradient-to-r from-cyan-600 to-blue-600 hover:from-cyan-500 hover:to-blue-500 hover:scale-105 transition-transform shadow-lg">
        前往 OK 官网下载 App
      </a>
    </div>
    <div class="flex justify-center order-1 md:order-2">
      <img src="/img/OK-app.webp" alt="OK App 安卓官方下载入口" class="w-full rounded-xl shadow-2xl ring-cyan-400/30 hover:scale-105 transition-transform duration-300" />
    </div>
  </section>
</main>
 <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebPage",
  "name": "欧易App 下载 - OK官网入口",
  "url": "/app/",
  "description": "立即下载欧易App (OK 安卓版)，体验币种交易、欧易钱包、多链资产支持与实时行情服务。官方 OK官网入口提供安全下载通道。",
  "inLanguage": "zh-CN"
}
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "欧易OK怎么下载？",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "您可通过 OK官网入口或本站提供的官方下载链接，点击下载按钮，即可获取欧易App安卓安装包。无需谷歌服务也可正常安装使用。"
      }
    },
    {
      "@type": "Question",
      "name": "欧易OK是否支持中文？",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "是的，欧易App默认支持中文界面，首次启动即可自动识别设备语言，切换简体或繁体中文。"
      }
    },
    {
      "@type": "Question",
      "name": "欧易OK安全吗？",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "欧易App由全球知名交易平台OK开发，采用多重加密与风控机制，配备冷热钱包隔离存储和风险防护系统，确保用户资产安全。"
      }
    },
    {
      "@type": "Question",
      "name": "安卓手机能直接安装欧易OK吗？",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "可以，欧易App安卓版本支持国内安卓系统（含鸿蒙、小米、OPPO等），无需谷歌框架即可使用。"
      }
    },
    {
      "@type": "Question",
      "name": "欧易OK支持哪些功能？",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "欧易App支持币种行情查看、币币交易、合约交易、快捷买币、钱包管理、链上资产操作、Web3连接等多种功能。"
      }
    }
  ]
}
</script>


<?php include "../includes/footer.php"; ?>
