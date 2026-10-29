<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="theme-color" content="#ffffff" />
  <?php $seo = [
    'title'       => 'トラブルのときに見える、組織の本当の力 | A CAN SOLUTIONS',
    'description' => 'PHPの脆弱性対応に追われた一週間を通じて感じた、技術力以上に大切な「仕事に対する責任感」について - A CAN SOLUTIONS',
    'path'        => '/organization-power',
    'type'        => 'article',
    'published'   => '2026-10-25',
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
    <h1 class="blog-post__title--sr">トラブルのときに見える、組織の本当の力</h1>

    <div class="blog-post__hero-image">
      <img src="assets/img/width_1600blog.png" alt="トラブルのときに見える、組織の本当の力" loading="lazy" decoding="async" width="800" height="450" />
    </div>

    <div class="blog-post__container">

      <!-- Metadata Section -->
      <header class="blog-post__header">

        <div class="blog-post__meta">
          <time class="blog-post__date" datetime="2026-10-25">2026/10/25</time>
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
          <span class="blog-post__tag">#組織の力</span>
          <span class="blog-post__tag">#チームワーク</span>
          <span class="blog-post__tag">#ミャンマーBPO</span>
          <span class="blog-post__tag">#組織づくり</span>
          <span class="blog-post__tag">#経営者の視点</span>
          <span class="blog-post__tag">#人材育成</span>
          <span class="blog-post__tag">#オフショア開発</span>
          <span class="blog-post__tag">#リスク管理</span>
          <span class="blog-post__tag">#信頼関係</span>
          <span class="blog-post__tag">#A CAN SOLUTIONS</span>
        </div>
      </header>

      <!-- Body -->
      <section class="blog-post__content">
        <h2 class="blog-post__section-title">トラブルのときに見える、組織の本当の力</h2>

        <p>先週は、久しぶりに緊張感のある一週間でした。</p>
        <p>PHPに関する脆弱性が明らかになり、関係するWebサイトの確認と対応に追われることになりました。</p>
        <p>Webサイトは、普段何事もなく表示されていることが当たり前です。</p>
        <p>しかし、その当たり前を維持するためには、目に見えないところで多くの作業が必要になります。</p>
        <p>今回は、その当たり前が脅かされる事態となりました。</p>
        <p>脆弱性への対応は、単にプログラムを修正すれば終わるものではありません。</p>
        <p>影響範囲を確認し、必要な対策を講じ、動作を検証する。そして、安全性を確認したうえで再公開する。</p>
        <p>一つひとつの作業に慎重さが求められます。</p>
        <p>しかも、お客様のWebサイトです。</p>
        <p>私たちの都合で対応を先延ばしにするわけにはいきません。</p>
        <p>結果として、メンバーは土曜日も日曜日も、そして深夜も対応を続け、なんとか全サイトの再公開にこぎつけることができました。</p>
        <p>もちろん、これですべてが終わったわけではありません。引き続き確認しなければならないこともあります。</p>
        <p>それでも、まずは大きな山を越えることができました。</p>
        <p>今回、私が強く感じたのは、技術力以上に大切なものがあるということです。</p>
        <p>それは、自分たちの仕事に対する責任感です。</p>

        <h3 class="blog-post__subsection-title">距離があっても、自分たちで動いてくれるメンバー</h3>
        <p>私たちの開発・運用メンバーの多くは、ミャンマーにいます。</p>
        <p>日本とミャンマーには距離があり、時差もあります。</p>
        <p>日本にいる私が、現地で行われている作業のすべてを直接確認できるわけではありません。</p>
        <p>以前の私であれば、進捗が気になり、何度も確認の連絡を入れていたかもしれません。</p>
        <p>しかし、今回は少し違いました。</p>
        <p>メンバーが状況を共有し、必要な対応を進めてくれる。</p>
        <p>私がすべてを指示しなくても、それぞれが自分の役割を理解して動いてくれる。</p>
        <p>そんな姿を見ながら、組織として少しずつ成長していることを感じました。</p>

        <h3 class="blog-post__subsection-title">緊急対応だけで終わらせてはいけない</h3>
        <p>もちろん、休日や深夜まで働くことが素晴らしいと言いたいわけではありません。</p>
        <p>本来であれば、こうした緊急対応が発生しないよう、日頃から仕組みを整えておくことが重要です。</p>
        <p>今回の経験を、今後の保守体制やリスク管理の改善につなげなければなりません。</p>
        <p>ただ、予期せぬ問題が発生したとき、誰かに言われるからではなく、自分たちの仕事として向き合ってくれたこと。</p>
        <p>その姿勢が、私には何よりもうれしかったことです。</p>

        <h3 class="blog-post__subsection-title">問題が起きたときにこそ、本当の違いが表れる</h3>
        <p>BPOやKPO、システム開発といった仕事では、品質や納期、コストが評価の中心になります。</p>
        <p>それは当然のことです。</p>
        <p>しかし、長く仕事を続けていると、もう一つ大切な要素があることに気づきます。</p>
        <p>問題が起きたときに、逃げずに向き合えるか。</p>
        <p>平常時には、どの会社も一定の品質を提供できるかもしれません。</p>
        <p>本当の違いが表れるのは、予定どおりに物事が進まなくなったときではないでしょうか。</p>
        <p>今回、メンバーはその大切さを、行動で示してくれました。</p>

        <h3 class="blog-post__subsection-title">経営者としての反省</h3>
        <p>一方で、経営者として反省することもあります。</p>
        <p>彼らの責任感に甘えてはいけないということです。</p>
        <p>緊急時に頑張ってくれるメンバーがいるからこそ、次は同じ負担をかけない仕組みをつくる。</p>
        <p>個人の努力に依存するのではなく、組織として問題に対応できる体制を整える。</p>
        <p>それが、私の仕事なのだと思います。</p>

        <h3 class="blog-post__subsection-title">距離があるからこそ、任せられる</h3>
        <p>日本で営業活動をする時間が増え、ミャンマーの現場とは物理的に離れることになりました。</p>
        <p>当初は、その距離が組織の弱さにつながるのではないかと心配していました。</p>
        <p>しかし、今は少し違う考えを持っています。</p>
        <p>距離があるからこそ、メンバーが自分で考え、自分で判断する機会が増えているのかもしれません。</p>
        <p>そして私は、彼らを管理すること以上に、信頼し、仕事がしやすい環境をつくることの大切さを学んでいます。</p>

        <h3 class="blog-post__subsection-title">まとめ</h3>
        <p>今回の対応を終えて、改めてメンバーに感謝しています。</p>
        <p>本当にお疲れさまでした。そして、ありがとう。</p>
        <p>トラブルは、できれば起きてほしくないものです。</p>
        <p>それでも、今回の出来事は、私たちの組織がどこまで成長してきたのか、そしてこれから何を改善しなければならないのかを教えてくれました。</p>
        <div class="blog-post__intro">
          <p>会社の力とは、問題が起きないことだけではなく、問題が起きたときに、みんなで乗り越えられることなのかもしれません。</p>
        </div>
        <p>そんなことを考えた、10月最後の日曜日でした。</p>
      </section>

    </div>

    <!-- CTA Section -->
    <?php include '3buttonsection.php'; ?>
  </article>

  <script src="assets/js/main.js" defer></script>
  <?php include 'footer.php'; ?>
</body>
</html>
