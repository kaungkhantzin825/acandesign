<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="theme-color" content="#ffffff" />
  <?php $seo = [
    'title'       => '信頼は、順調なときではなく、困難なときに生まれる | A CAN SOLUTIONS',
    'description' => 'Webサイトのトラブル対応への評価がきっかけで、お客様から新たな業務をお任せいただいた話 - A CAN SOLUTIONS',
    'path'        => '/trust-in-difficulty',
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
    <h1 class="blog-post__title--sr">信頼は、順調なときではなく、困難なときに生まれる</h1>

    <div class="blog-post__hero-image">
      <img src="assets/img/width_999900.png" alt="信頼は、順調なときではなく、困難なときに生まれる" loading="lazy" decoding="async" width="800" height="450" />
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
          <span class="blog-post__tag">#経営者の視点</span>
          <span class="blog-post__tag">#信頼関係</span>
          <span class="blog-post__tag">#組織づくり</span>
          <span class="blog-post__tag">#ミャンマーBPO</span>
          <span class="blog-post__tag">#オフショア開発</span>
          <span class="blog-post__tag">#Webサイト保守</span>
          <span class="blog-post__tag">#チームワーク</span>
          <span class="blog-post__tag">#人材育成</span>
          <span class="blog-post__tag">#A CAN SOLUTIONS</span>
        </div>
      </header>

      <!-- Body -->
      <section class="blog-post__content">
        <h2 class="blog-post__section-title">信頼は、順調なときではなく、困難なときに生まれる</h2>

        <p>先週の日曜コラムでは、PHPの脆弱性への対応を通じて感じた、組織の力について書きました。</p>
        <p>土日や深夜を問わず、問題の解決に向けて動いてくれたメンバー。</p>
        <p>その姿を見て、離れた場所にいても、同じ責任感を持って仕事に向き合える組織になったことを実感しました。</p>
        <p>そして今週、その出来事には、もう一つの続きがありました。</p>
        <div class="blog-post__intro">
          <p>トラブルへの対応を評価していただき、お客様から新たな業務をお任せいただくことになったのです。</p>
        </div>
        <p>私にとって、これは本当にうれしい出来事でした。</p>

        <h3 class="blog-post__subsection-title">Webサイトの保守は、信頼がなければ任せてもらえない</h3>
        <p>Webサイトの制作と、その後の保守運用。</p>
        <p>同じWebに関わる仕事ですが、私は少し性質が違うものだと考えています。</p>
        <p>制作は、完成したものを見ていただき、品質やデザイン、機能を評価していただけます。</p>
        <p>一方、保守は違います。</p>
        <p>普段は何も起きないことが、何よりも大切です。</p>
        <p>何か問題が発生したときには、迅速に原因を確認し、適切な対応を行う。</p>
        <p>場合によっては、お客様の事業や信用にも関わる重要な判断を求められます。</p>
        <p>つまり、保守を任せていただくということは、技術だけではなく、私たちの対応力や責任を信頼していただくということでもあります。</p>
        <p>ましてや、Webサイトの管理には、サーバーやシステム、場合によってはお客様の大切な情報も関わります。</p>
        <div class="blog-post__intro">
          <p>「この会社なら、何かあってもきちんと向き合ってくれる」</p>
        </div>
        <p>そう思っていただけなければ、簡単に任せていただける仕事ではありません。</p>
        <p>今回の業務拡大は、私たちにとって、何よりもありがたい信頼の証だと感じています。</p>

        <h3 class="blog-post__subsection-title">海外だから、対応が遅い？</h3>
        <p>A CAN SOLUTIONSは、ミャンマーにエンジニアチームを持つオフショア型の企業です。</p>
        <p>海外に開発拠点を持つと聞くと、コスト面のメリットを想像される方が多いかもしれません。</p>
        <p>一方で、レスポンスの遅さやコミュニケーションの難しさを心配されることもあります。</p>
        <div class="blog-post__intro">
          <p>「海外だから、すぐには対応してもらえないのではないか」<br />「急なトラブルが起きたとき、本当に大丈夫なのか」</p>
        </div>
        <p>こうした不安は、私にも理解できます。</p>
        <p>実際、海外で仕事をしてきた中で、時差や商習慣、仕事に対する考え方の違いから、苦労した経験もあります。</p>
        <p>ただ、私はいつも思うのです。</p>
        <div class="blog-post__intro">
          <p>対応の速さや責任感は、国境や距離だけで決まるものではない。</p>
        </div>
        <p>大切なのは、その仕事を誰が、どのような気持ちで引き受けているかではないでしょうか。</p>
        <p>今回のトラブル対応は、それを改めて実感する機会になりました。</p>

        <h3 class="blog-post__subsection-title">2時間30分の時差を、弱みではなく強みにする</h3>
        <p>日本とミャンマーには、2時間30分の時差があります。</p>
        <p>日本の方が、2時間30分進んでいます。</p>
        <p>この時差を、私は以前から業務運営に活用してきました。</p>
        <p>日本で夕方になっても、ミャンマーではまだ午後です。</p>
        <p>日本側で確認や判断を行い、その内容を現地メンバーに引き継ぐことで、作業を進める時間を確保できます。</p>
        <p>もちろん、時差があるだけで仕事がうまく進むわけではありません。</p>
        <p>情報共有が不足していれば、逆に大きなロスにもなります。</p>
        <p>今回の対応でも重要だったのは、時差そのものではなく、メンバーが状況を理解し、必要な情報を共有しながら、作業を進めてくれたことです。</p>
        <p>問題が発生すれば、まず状況を確認する。<br />原因を調査し、必要な対策を検討する。<br />修正を行い、動作を確認する。<br />そして、最後まで責任を持って対応する。</p>
        <p>一つのタスクが終わるまで、メンバーが真摯に向き合ってくれました。</p>
        <p>こうした積み重ねが、今回のお客様からの評価につながったのだと思います。</p>
        <p>海外に拠点があることは、決して対応力の弱さを意味しません。</p>
        <div class="blog-post__intro">
          <p>むしろ、運営の仕組みとメンバーの意識次第で、距離や時差を強みに変えることができる。</p>
        </div>
        <p>そう感じています。</p>

        <h3 class="blog-post__subsection-title">トラブルを喜ぶことはできないけれど</h3>
        <p>今回のPHPの脆弱性対応は、決して望んで発生した仕事ではありません。</p>
        <p>お客様にもご心配やご不便をおかけしました。</p>
        <p>できることなら、こうした問題は起きない方が良いに決まっています。</p>
        <p>ただ、問題が起きたときに、どのように向き合うか。</p>
        <p>そこには、会社の本質が表れるのだと思います。</p>
        <p>問題を先送りしない。<br />都合の悪い状況も共有する。<br />自分たちにできることを考え、最後まで対応する。</p>
        <p>言葉にすると当たり前のことばかりですが、それを実際の行動に移すことは、決して簡単ではありません。</p>
        <p>そして今回、その当たり前を実践してくれたのは、ミャンマーのメンバーでした。</p>
        <p>私は彼らを誇りに思っています。</p>
        <p>同時に、彼らの頑張りに頼るだけでなく、次のトラブルを未然に防ぐ仕組みを整え、緊急時の負担を減らしていくことも、私たち経営側の責任だと考えています。</p>

        <h3 class="blog-post__subsection-title">信頼が、次の仕事を生む</h3>
        <p>営業活動では、自社の技術力や実績、対応できる業務範囲を説明します。</p>
        <p>もちろん、それは大切なことです。</p>
        <p>しかし、どれほど立派な資料を作っても、実際の行動に勝るものはないのかもしれません。</p>
        <p>今回、お客様から新たな業務をお任せいただけたのは、私たちの説明ではなく、メンバーの行動を見ていただけたからだと思っています。</p>
        <p>そして、この信頼は、私たちが一方的に得たものではありません。</p>
        <p>お客様が私たちを信じて仕事を任せてくださった。<br />その期待に、メンバーが一生懸命応えてくれた。<br />その結果として、次の仕事につながった。</p>
        <p>私は、この関係を大切にしていきたいと思っています。</p>

        <h3 class="blog-post__subsection-title">彼らを信じ、ともに成長していく</h3>
        <p>日本に事務所を構え、私自身が日本での営業活動に軸足を移してから、ミャンマーのメンバーとの物理的な距離は遠くなりました。</p>
        <p>それでも、仕事を通じて感じる心の距離は、以前より近くなっている気がします。</p>
        <p>私が細かく指示を出さなくても、自分たちで考え、動いてくれる。</p>
        <p>お客様の期待を理解し、それに応えようとしてくれる。</p>
        <p>そんなメンバーがいることは、経営者として本当にありがたいです。</p>
        <p>もちろん、まだまだ改善すべきことはあります。</p>
        <p>組織として未熟な部分もありますし、技術面でも運営面でも、もっと成長しなければなりません。</p>
        <p>ただ、私は彼らの可能性を信じています。</p>
        <p>そして、彼らにも、この会社で仕事をすることを通じて、自分自身の成長を実感してほしいと思っています。</p>
        <p>会社が成長するから、社員が成長する。<br />社員が成長するから、会社が成長する。</p>
        <p>そんな関係を、これからもつくっていきたい。</p>
        <div class="blog-post__intro">
          <p>信頼は、言葉でお願いするものではなく、日々の行動の積み重ねによって生まれるもの。</p>
        </div>
        <p>今回の一週間は、そのことを改めて教えてくれました。</p>
        <p>そして何より、信頼に応えてくれたメンバーに、心から感謝しています。</p>
        <p>彼らを信じ、これからも一緒に成長していきたい。</p>
        <p>そんなことを考えた、11月最初の日曜日でした。</p>

        <p class="blog-post__note">A CAN SOLUTIONSでは、日本とミャンマーのチームが連携し、Webサイトの保守・運用、BPO/KPO、AIを活用した業務改善に取り組んでいます。<br />Webサイトの運用体制や業務改善についてのご相談お待ちしております。</p>
      </section>

    </div>

    <!-- CTA Section -->
    <?php include '3buttonsection.php'; ?>
  </article>

  <script src="assets/js/main.js" defer></script>
  <?php include 'footer.php'; ?>
</body>
</html>
