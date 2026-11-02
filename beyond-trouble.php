<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="theme-color" content="#ffffff" />
  <?php $seo = [
    'title'       => 'トラブルを乗り越えた、その先にあるもの | A CAN SOLUTIONS',
    'description' => '頑張ってくれる仲間に、いつまでも甘えてはいけない — Webサイトのセキュリティ対応を通じて考えた、本当に強い組織のかたち - A CAN SOLUTIONS',
    'path'        => '/beyond-trouble',
    'type'        => 'article',
    'published'   => '2026-11-01',
    'image'       => '/assets/img/og/og-default.jpg',
  ]; include 'seo-head.php'; ?>
  <link rel="icon" type="image/webp" href="assets/img/logo.webp" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Anonymous+Pro:wght@400;700&family=Noto+Sans+JP:wght@400;500;700;900&family=Roboto+Mono:wght@400;500;700&display=swap"
    rel="stylesheet"
  />
  <link rel="stylesheet" href="assets/css/main.css" />
  <link rel="stylesheet" href="assets/css/blog-post.css" />
  <style>
    .blog-post__hero-image {
      max-width: 760px;
      margin: 0 auto;
      padding: 0 1.25rem;
      box-sizing: border-box;
    }

    .blog-post__hero-image img {
      display: block;
      width: 100%;
      height: auto;
    }

    .blog-post__title--sr {
      position: absolute;
      width: 1px;
      height: 1px;
      overflow: hidden;
      clip: rect(0 0 0 0);
      white-space: nowrap;
    }

    .blog-post__note {
      margin-top: 2rem;
      font-size: 0.8rem;
      color: #888;
    }

    .site-header__nav {
      gap: 3.75rem;
    }
    .site-header__nav a {
      text-decoration: none;
      color: var(--color-ink);
      font-size: 15px;
      font-weight: bold;
      font-family: "Anonymous Pro", monospace;
      white-space: nowrap;
      transition: color var(--transition);
    }
    .site-header__cta {
      display: inline-flex;
      align-items: center;
      gap: 0.3rem;
      padding: 0.45rem 1.1rem;
      background: #004aad;
      color: #fff;
      text-decoration: none;
      border-radius: 999px;
      font-size: 16px;
      font-weight: 700;
      font-family: "Anonymous Pro", monospace;
      white-space: nowrap;
      flex-shrink: 0;
      transition: background var(--transition), opacity var(--transition);
    }
    .site-header__cta--dl {
      background: #dc2626;
    }
    .site-header__cta--dl:hover {
      background: #b91c1c;
    }
  </style>
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-P0PTLK09E6"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-P0PTLK09E6');
  </script>
</head>
<body>
  <!-- Site Header -->
  <?php include 'menu.php'; ?>
  <!-- Blog Post -->
  <article class="blog-post">

    <!-- Title Section - Full Width Hero -->
    <h1 class="blog-post__title--sr">トラブルを乗り越えた、その先にあるもの</h1>

    <div class="blog-post__hero-image">
      <img src="assets/img/width_888800.png" alt="トラブルを乗り越えた、その先にあるもの" loading="lazy" decoding="async" width="800" height="450" />
    </div>

    <div class="blog-post__container">

      <!-- Metadata Section -->
      <header class="blog-post__header">

        <div class="blog-post__meta">
          <time class="blog-post__date" datetime="2026-11-01">2026/11/1</time>
          <div class="blog-post__meta-row">
            <div class="blog-post__category">日曜コラム</div>

            <!-- Social Share Buttons -->
            <div class="blog-post__share">
              <a href="https://substack.com/@acankado" target="_blank" rel="noopener" class="share-btn share-btn--substack">
                <img src="assets/img/Substack_logo.webp" alt="Substack" loading="lazy" decoding="async" width="1920" height="330" />
              </a>
              <a href="https://www.linkedin.com/in/mkado-acan-sol/" target="_blank" rel="noopener" class="share-btn share-btn--linkedin">
                <img src="assets/img/linkedin-removebg-preview.webp" alt="LinkedIn" loading="lazy" decoding="async" width="287" height="78" />
              </a>
            </div>
          </div>
        </div>

        <div class="blog-post__tags">
          <span class="blog-post__tag">#組織づくり</span>
          <span class="blog-post__tag">#経営者の視点</span>
          <span class="blog-post__tag">#ミャンマーBPO</span>
          <span class="blog-post__tag">#AI活用</span>
          <span class="blog-post__tag">#Webサイト保守</span>
        </div>
      </header>

      <!-- Body -->
      <section class="blog-post__content">
        <h2 class="blog-post__section-title">トラブルを乗り越えた、その先にあるもの</h2>
        <p>頑張ってくれる仲間に、いつまでも甘えてはいけない。</p>

        <p>先週、私たちはWebサイトのセキュリティ問題への対応に追われました。</p>
        <p>突発的な問題発覚から、状況確認、対策の検討、修正、動作確認、そして再公開。</p>
        <p>日本とミャンマーのメンバーが連携し、土日や深夜も対応にあたってくれたおかげで、何とか対象サイトの公開に漕ぎ着けました。</p>
        <p>正直なところ、今回のメンバーの動きには助けられました。</p>
        <p>そして、改めて自分たちの組織の強さを感じました。</p>
        <div class="blog-post__intro">
          <p>「今回もみんなが頑張ってくれた。それで終わらせてはいけない」</p>
        </div>
        <p>という気持ちです。</p>

        <h3 class="blog-post__subsection-title">トラブルのたびに、誰かが頑張る会社</h3>
        <p>会社が頑張っている。予期しない問題にも、柔軟に対応している。</p>
        <p>システムの不具合、お客様からのお問い合わせ、予定を大幅に上回る受注、顧客要望の品質問題。</p>
        <p>その度に、誰かが頑張ってくれている。</p>
        <p>時間を調整してくれる。休日にも対応してくれる。普段とは違う役割を引き受けてくれる。</p>
        <p>経営者としては、こう言う状況はありがたいものです。</p>
        <p>でも、少し考えてみると、ふとあることに気づきました。</p>
        <div class="blog-post__intro">
          <p>誰かの頑張りに頼っている組織は、本当に強い組織なのだろうか。</p>
        </div>
        <p>もちろん、緊急時には通常とは違う対応が必要な場面もあります。</p>
        <p>しかし、いつもそれを「仕方ない」で片付けていては、組織の体制は強くなりません。</p>

        <h3 class="blog-post__subsection-title">ミャンマーのメンバーが教えてくれたこと</h3>
        <p>私たちはミャンマーで10年以上の事業を展開しています。</p>
        <p>物価、通信障害、政治情勢の変化。</p>
        <p>日本では珍しくない困難が、日常の業務運営に影響することもありました。</p>
        <p>そんな環境の中で、メンバーは少しずつ、自分たちで考え、自分たちで判断できるようになってきました。</p>
        <p>以前は、問題が発生すると私が指示を出すことが多かったと思います。</p>
        <p>しかし、最近は違います。</p>
        <p>問題が起きたら、現場で状況を確認する。<br />対応方法を相談する。<br />必要な情報を日本へ共有する。<br />そして、解決に向けて動き始める。</p>
        <p>私がすべてを把握して、すべてを言わなくても、仕事が動いていく。</p>
        <p>これは10年間で積み重ねてきた、大きな変化です。</p>
        <p>ただ、次の段階では、さらに進むべきことがあると考えています。</p>

        <h3 class="blog-post__subsection-title">次は「問題が起きにくい仕組み」をつくる</h3>
        <p>今回のWebサイトの問題では、メンバーの対応力には助けられました。</p>
        <p>しかし、同じような問題が今後発生する可能性は0ではありません。</p>
        <p>大切なのは、今回の経験を次に活かすことです。</p>
        <p>例えば、Webサイトの運用であれば、PHPや周辺ソフトウェアの安定性を定期的に確認する。<br />脆弱性情報を継続的に収集すること。<br />バックアップと復旧手順を整備すること。<br />問題発生時の連絡体制と役割分担を明確にすること。<br />そして、対応記録を残し、同じ課題を繰り返さないこと。</p>
        <p>どれも当たり前のことかもしれません。</p>
        <p>でも、その当たり前を日常業務の一部として運用できるかどうかが、組織の力を左右すると思います。</p>
        <p>日々の業務に追われていると、どうしてもこの種の整備は後回しになりがちです。</p>
        <p>だからこそ、個人の注意力だけに頼るのではなく、仕組みとして運用する必要があると思います。</p>

        <h3 class="blog-post__subsection-title">AIは、人の頑張りを支える存在になれる</h3>
        <p>私は最近、AIを仕事のパートナーとして一層活用しています。</p>
        <p>文章の作成や調査だけでなく、業務の整理、チェックリストの作成、プログラムの修正、作業手順の標準化にも活かしています。</p>
        <p>AIがすべての問題を解決してくれるわけではありません。</p>
        <p>しかし、人間だけでは気づけないことを補ったり、膨大な情報を整理したり、定期的な確認作業を効率化したりすることはできます。</p>
        <p>例えば、システムの不安定な兆候を定期的に確認する仕組み。<br />異常が発生した際、担当者へ知らせる仕組み。<br />過去のトラブル対応を蓄積し、次の対応に活かす仕組み。</p>
        <p>AIと自動化を組み合わせることで、こうした運用を支える場面は増えていくでしょう。</p>
        <p>もちろん、最終的な確認や判断、責任は人間が担う必要があります。</p>
        <div class="blog-post__intro">
          <p>AIは人間の代わりに責任を負うものではなく、人間が責任を果たしやすくするための道具である。</p>
        </div>
        <p>最近は、そんなことを考えています。</p>

        <h3 class="blog-post__subsection-title">本当に強い組織とは</h3>
        <p>今回のトラブルでは、メンバーが自発的に動いてくれました。</p>
        <p>そのことには、心から感謝しています。</p>
        <p>でも、経営者としては、そこで満足してはいけない。</p>
        <p>トラブルが起きても、特定の人に負担が集中しない。<br />問題が発生しても、誰が何をすべきか分かっている。<br />そして、同じ問題を繰り返さない。</p>
        <p>そんな組織をつくることが、次の私の仕事なのだと思います。</p>
        <div class="blog-post__intro">
          <p>人が頑張ることで乗り越える組織から、人の力を仕組みで支える組織へ。</p>
        </div>
        <p>もちろん、すぐに実現できるものではありません。</p>
        <p>私たちも、まだまだ道半ばです。</p>
        <p>それでも今回の出来事は、組織として次の段階に進むための、大切なきっかけになったと思います。</p>

        <h3 class="blog-post__subsection-title">最後に</h3>
        <p>私は、ミャンマーのメンバーを誇りに思っています。</p>
        <p>厳しい環境の中でも、お客様の仕事を大切に、自分たちで考え、行動してくれる。</p>
        <p>そんなチームをつくってくれたマネージャー、業務リーダー、そして一人ひとりのメンバーに感謝しています。</p>
        <p>だからこそ、これからは、組織の仕組みに頼れる会社にしていきたいです。</p>
        <div class="blog-post__intro">
          <p>優秀な人がいるから強い会社ではなく、優秀な人が安心して活躍できるから強い会社。</p>
        </div>
        <p>だからこそA CAN SOLUTIONSで、これからもつくっていきたいと思います。</p>

        <p class="blog-post__note">A CAN SOLUTIONSでは、日本とミャンマーのチーム体制で、BPO/KPO、AI活用開発、Webサイトの保守・セキュリティ対応まで幅広く対応しております。</p>
      </section>

    </div>

    <!-- CTA Section -->
    <?php include '3buttonsection.php'; ?>
  </article>

  <script src="assets/js/main.js" defer></script>
  <?php include 'footer.php'; ?>
</body>
</html>
