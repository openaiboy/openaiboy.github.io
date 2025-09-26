 <?php include('config.php'); ?>
<!DOCTYPE html>
<html lang="<?= htmlspecialchars($lang) ?>">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="content-language" content="<?= htmlspecialchars($lang) ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title><?= htmlspecialchars($page_title) ?></title>
  <meta name="description" content="<?= htmlspecialchars($page_description) ?>" />
  <meta name="keywords" content="<?= htmlspecialchars($page_keywords) ?>" />
  <meta name="robots" content="index, follow" />
  <meta name="author" content="OK交易平台" />
  <meta name="googlebot" content="index, follow" />
  <meta name="bingbot" content="index, follow" />
  <link rel="canonical" href="<?= htmlspecialchars($page_url) ?>" />
  <!-- Open Graph -->
  <meta property="og:title" content="<?= htmlspecialchars($page_title) ?>" />
  <meta property="og:description" content="<?= htmlspecialchars($page_description) ?>" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="<?= htmlspecialchars($page_url) ?>" />
  <meta property="og:image" content="<?= htmlspecialchars($page_image) ?>" />
  <meta property="og:site_name" content="OK交易平台" />
  <meta property="og:locale" content="<?= ($lang === 'en') ? 'en_US' : 'zh_CN' ?>" />

  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="<?= htmlspecialchars($page_title) ?>" />
  <meta name="twitter:description" content="<?= htmlspecialchars($page_description) ?>" />
  <meta name="twitter:image" content="<?= htmlspecialchars($page_image) ?>" />
  <meta name="twitter:site" content="@OKX_official" />
  <meta name="twitter:creator" content="@OKX_official" />
  <!-- 图标和 PWA 支持 -->
  <link rel="icon" href="<?= htmlspecialchars($domain) ?>/favicon.ico" type="image/x-icon" />
  <link rel="apple-touch-icon" sizes="180x180" href="<?= htmlspecialchars($domain) ?>/img/apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="<?= htmlspecialchars($domain) ?>/favicon.ico" />
  <link rel="icon" type="image/png" sizes="16x16" href="<?= htmlspecialchars($domain) ?>/favicon.ico" />

  <!-- 样式文件 -->
<link href="https://cdn.bootcdn.net/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet"
      onerror="this.onerror=null;this.href='https://cdn.staticfile.net/tailwindcss/2.2.19/tailwind.min.css'">
  <link rel="stylesheet" href="<?= htmlspecialchars($domain) ?>/css/app.css" />

  <!-- 结构化数据 Schema -->
  <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/schema.php'; ?>
</head>
<style>
.logo {
  position: relative;
  display: inline-block;
  overflow: hidden;
}

.logo img {
  display: block;
  max-width: 200px; /* 根据需要调整大小 */
  height: auto;
}

.logo::before {
  content: '';
  position: absolute;
  top: 0;
  left: -75%; /* 从左边开始 */
  width: 50%;
  height: 100%;
  background: linear-gradient(
    120deg,
    rgba(255, 255, 255, 0) 0%,
    rgba(255, 255, 255, 0.6) 50%,
    rgba(255, 255, 255, 0) 100%
  );
  transform: skewX(-25deg);
  animation: shine 2.5s infinite;
}

@keyframes shine {
  0% {
    left: -75%;
  }
  100% {
    left: 125%;
  }
}
</style>

 

<body class="min-h-screen">
    <div class="px-4 py-4 border-b border-gray-800">
        <!-- Navigation body 防止复制 oncontextmenu="return false" onselectstart="return false" oncopy="return false" oncut="return false" -->
        <nav class="max-w-6xl mx-auto flex flex-col sm:flex-row items-center justify-between space-y-4 sm:space-y-0" aria-label="主导航">
            <a href="/" title="欧易下载平台" class="flex items-center space-x-2 hover:opacity-80 transition">
                <div class="logo">
              <img src="/logo.png" alt="欧易 OKX App 下载中心" class="w-10 h-10" />
              </div>
            </a>
            <div class="flex flex-wrap items-center justify-center gap-4 sm:gap-8">
                <a href="/" title="OK官网" class="hover:text-[#00aaff]">首页</a>
                <a href="/ouyi/ios/" title="OK交易所下载" class="hover:text-[#00aaff]">OK iOS版</a>
                <a href="/ouyi/" title="OK交易所下载" class="hover:text-[#00aaff]">OK 安卓版</a>
                <a href="https://okx.okbbi.com" title="OK今日价格" class="hover:text-[#00aaff]">今日价格</a>
                <div class="relative inline-block text-left" id="download-menu">
                    <button id="download-link" aria-haspopup="true" aria-expanded="false" aria-controls="dropdown-menu" class="inline-flex justify-center w-full rounded-md border border-transparent bg-[#0077b3] px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-[#0099ff] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-400 transition">
                        立即下载 ▾
                    </button>
                    <div id="dropdown-menu" role="menu" aria-label="下载选项" class="absolute right-0 mt-2 w-40 origin-top-right rounded-md bg-gray-900 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none hidden z-50">
                        <a href="<?= $domain ?>/apk/" title="OK交易App下载" class="block px-4 py-2 text-sm text-gray-100 hover:bg-cyan-600 hover:text-white transition" role="menuitem" tabindex="-1">安卓版</a>
                        <a href="<?= $domain ?>/ios/" title="OK交易App苹果版下载" class="block px-4 py-2 text-sm text-gray-100 hover:bg-cyan-600 hover:text-white transition" role="menuitem" tabindex="-1">苹果版</a>
                        <a href="<?= $domain ?>/win/" title="OK官网注册入口" class="block px-4 py-2 text-sm text-gray-100 hover:bg-cyan-600 hover:text-white transition" role="menuitem" tabindex="-1">电脑版</a>
                    </div>
                </div>
            </div>
            <a id="installLink" href="#" class="inline-block px-8 py-3 text-white font-semibold text-lg rounded-xl border border-cyan-400 bg-gradient-to-r from-cyan-600 to-blue-600 hover:from-cyan-500 hover:to-blue-500 hover:scale-105 transition-transform shadow-lg hidden">
                下载OK交易App客户端
            </a>
        </nav>
    </div>
