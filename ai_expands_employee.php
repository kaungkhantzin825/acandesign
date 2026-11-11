<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="theme-color" content="#ffffff" />
  <?php $seo = [
    'title'       => 'AIが広げる、社員の可能性と会社の未来 | A CAN SOLUTIONS',
    'description' => 'セキュリティ対応を通じて見えてきた、メンバーの成長とAIエージェント活用の可能性 - A CAN SOLUTIONS',
    'path'        => '/ai_expands_employee',
    'type'        => 'article',
    'published'   => '2026-11-08',
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
    <h1 class="blog-post__title--sr">AIが広げる、社員の可能性と会社の未来</h1>

    <div class="blog-post__hero-image">
      <img src="assets/img/width_800_044.png" alt="AIが広げる、社員の可能性と会社の未来" loading="lazy" decoding="async" width="800" height="450" />
    </div>

    <div class="blog-post__container">

      <!-- Metadata Section -->
      <header class="blog-post__header">

        <div class="blog-post__meta">
          <time class="blog-post__date" datetime="2026-11-08">2026/11/8</time>
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
          <span class="blog-post__tag">#AIエージェント</span>
          <span class="blog-post__tag">#人材育成</span>
          <span class="blog-post__tag">#組織づくり</span>
          <span class="blog-post__tag">#AI活用</span>
          <span class="blog-post__tag">#ミャンマーBPO</span>
          <span class="blog-post__tag">#BPOからKPOへ</span>
          <span class="blog-post__tag">#オフショア開発</span>
          <span class="blog-post__tag">#経営者の視点</span>
          <span class="blog-post__tag">#社員の成長</span>
          <span class="blog-post__tag">#ACANSOLUTIONS</span>
        </div>
      </header>

      <!-- Body -->
      <section class="blog-post__content">
        <h2 class="blog-post__section-title">AIが広げる、社員の可能性と会社の未来</h2>

        <p>ここ数週間、弊社のプログラマーたちは、Webサイトのセキュリティ対応や保守業務に多くの時間を費やしています。</p>
        <p>PHPの脆弱性への対応から始まり、既存システムの確認、修正、動作検証、そして再発防止に向けた取り組みです。</p>
        <p>どれも、お客様の大切なシステムを守るために欠かせない仕事です。</p>
        <p>ただ、経営者として、少し申し訳ない気持ちもありました。</p>
        <p>せっかくプログラマーとして技術を身につけ、経験を積んできたメンバーなのだから、もっと新しいシステムを開発したり、自分たちのアイデアを形にしたりする仕事を経験させてあげたい。</p>
        <p>そんな思いがあったのです。</p>

        <h3 class="blog-post__subsection-title">私が思う「成長」と、彼らが感じる「成長」</h3>
        <p>セキュリティ対応や保守業務は、決して華やかな仕事ではありません。</p>
        <p>不具合を調査し、原因を探り、必要な修正を行い、何度も動作を確認する。</p>
        <p>新しい機能を開発する仕事と比べると、成果が目に見えにくいこともあります。</p>
        <p>特に今回は、既存のWebサイトを安全に運用するための作業が中心でした。</p>
        <p>私は、彼らが単調に感じているのではないか、もっと創造的な仕事をしたいと思っているのではないかと気にしていました。</p>
        <p>ところが、メンバーから返ってきた言葉は、私が想像していたものとは違いました。</p>
        <div class="blog-post__intro">
          <p>「こういう仕事も嫌ではありません」<br />「勉強になります」</p>
        </div>
        <p>そんな意見が上がってきたのです。</p>
        <p>正直なところ、安堵しました。</p>
        <p>同時に、自分自身の考え方が少し狭かったのかもしれないと感じました。</p>
        <p>私は、新しいものを生み出す仕事こそが、技術者にとって成長につながると考えていたのかもしれません。</p>
        <p>しかし、システムの仕組みを理解し、問題の原因を探り、安全性を確認する仕事にも、多くの学びがあります。</p>
        <p>むしろ、既存のシステムを理解し、適切に維持できることは、優れた技術者になるための大切な基礎なのだと思います。</p>
        <div class="blog-post__intro">
          <p>何を経験させるかだけでなく、その経験から何を学ぶか。</p>
        </div>
        <p>彼らの言葉から、そんなことを改めて教えてもらいました。</p>

        <h3 class="blog-post__subsection-title">プログラマーではないメンバーにも、変化が生まれている</h3>
        <p>もう一つ、最近うれしく感じていることがあります。</p>
        <p>それは、プログラマーではないメンバーが、AIツールを使って画像生成などの新しい仕事に取り組み始めていることです。</p>
        <p>これまでの業務は、ある程度専門的な知識や経験がなければ、挑戦すること自体が難しい仕事もありました。</p>
        <p>画像を制作するには、デザインの知識や専用ソフトウェアの操作技術が求められます。</p>
        <p>プログラムを書くには、プログラミング言語を理解する必要があります。</p>
        <p>もちろん、AIが登場したからといって、こうした専門知識が不要になったわけではありません。</p>
        <p>しかし、以前であれば専門家に依頼するしかなかった作業にも、AIの力を借りることで、挑戦できるようになってきています。</p>
        <p>これまで画像制作を担当していなかったメンバーが、自分でAIに指示を出し、結果を確認し、修正を重ねながら画像を作り上げていく。</p>
        <p>そうした姿を見ると、仕事の可能性が確実に広がっていると感じます。</p>
        <p>大切なのは、AIが画像を作ってくれることだけではありません。</p>
        <div class="blog-post__intro">
          <p>「どうすれば、もっと良いものができるだろう」<br />「どのように指示すれば、意図が伝わるだろう」<br />「この結果は、お客様の求めているものになっているだろうか」</p>
        </div>
        <p>そんなことを、メンバー自身が考えるようになることです。</p>
        <p>AIを使うことが目的ではなく、AIを使いながら考える力を身につけていく。</p>
        <p>私は、そこに大きな価値があると思っています。</p>

        <h3 class="blog-post__subsection-title">AIエージェントは、仕事を代わりにするだけの存在ではない</h3>
        <p>今回のセキュリティ対応でも、AIの存在は大きな助けになりました。</p>
        <p>複雑な技術情報を整理し、調査の方向性を考え、対応方法を検討する。</p>
        <p>従来であれば、多くの時間や経験を必要としていた作業も、AIエージェントを活用することで、取り組みやすくなっています。</p>
        <p>もちろん、AIの回答がすべて正しいわけではありません。</p>
        <p>セキュリティに関わる仕事であればなおさら、提案された内容を人間が確認し、実際の環境で検証することが不可欠です。</p>
        <p>AIに判断を丸投げすることはできません。</p>
        <p>ただ、AIが調査や検討を支援してくれることで、人間は、その結果が適切かどうかを考えることに、より多くの時間を使えるようになります。</p>
        <p>画像生成も同じです。</p>
        <p>AIが制作を支援してくれるからこそ、メンバーは完成形をイメージし、品質を評価し、より良くする方法を考えられます。</p>
        <p>これまで難しかった仕事に、挑戦する機会が生まれるのです。</p>
        <p>私は、AIエージェントの本当の価値は、単なる業務の効率化だけではないと考えています。</p>
        <div class="blog-post__intro">
          <p>人が持っている能力を引き出し、できる仕事の範囲を広げること。</p>
        </div>
        <p>そこに、これからの会社経営にとって大きな可能性があるのではないでしょうか。</p>

        <h3 class="blog-post__subsection-title">AIが成長するのではなく、人が成長する会社に</h3>
        <p>A CAN SOLUTIONSでは、BPOからKPOへ、そしてAIを活用した新しい業務へと、少しずつ仕事の領域を広げています。</p>
        <p>これまでも、決められた作業を正確にこなすだけではなく、業務の意味を理解し、改善を提案できる組織になりたいと考えてきました。</p>
        <p>AIの進化は、その取り組みを後押ししてくれています。</p>
        <p>ただし、AIツールを導入するだけで、会社の実力が上がるわけではありません。</p>
        <p>使い方を覚え、結果を検証し、失敗を経験し、次の仕事に生かす。</p>
        <p>その積み重ねが、初めて組織の力になるのだと思います。</p>
        <p>そして最近、うれしいことに、その姿勢が経営側からの指示だけではなく、現場のメンバーからも見えるようになってきました。</p>
        <p>与えられた仕事から学びを見つけるプログラマー。<br />AIを使って、これまで経験のなかった仕事に挑戦するメンバー。</p>
        <p>それぞれが、自分なりの方法で新しい能力を身につけようとしています。</p>
        <p>こうした変化を見ることが、今の私にとって大きな喜びになっています。</p>

        <h3 class="blog-post__subsection-title">彼らの可能性を、私が決めつけてはいけない</h3>
        <p>今回、もう一つ気づいたことがあります。</p>
        <p>それは、経営者である私が、メンバーの可能性や成長の形を決めつけてはいけないということです。</p>
        <p>私は、プログラマーにはもっと創造的な仕事をさせてあげたいと思っていました。</p>
        <p>もちろん、その気持ちは今も変わりません。</p>
        <p>しかし、今取り組んでいる基礎的な仕事にも価値を見つけ、前向きに学んでいるメンバーがいる。</p>
        <p>また、専門職でなくても、新しい技術を使いこなし、自分たちの仕事の幅を広げようとしているメンバーがいる。</p>
        <p>彼らは、私が想像していた以上に、自分たちで成長する方法を見つけ始めているのかもしれません。</p>
        <p>私の役割は、彼らの成長の方向を細かく決めることではなく、挑戦できる仕事と環境を用意することなのだと思います。</p>
        <p>そして、失敗を恐れず、新しいことに取り組める組織をつくっていくこと。</p>
        <p>AIは、そのための心強い道具になります。</p>
        <p>ただし、道具を使いこなすのは、あくまでも人間です。</p>
        <p>私は、AIがどれほど進化しても、この考え方を大切にしたいと思っています。</p>
        <div class="blog-post__intro">
          <p>AIが賢くなった分だけ、人も賢くなる。</p>
        </div>
        <p>そんな会社にしていきたい。</p>
        <p>社員一人ひとりができることを増やし、その結果として会社ができる仕事も増えていく。</p>
        <p>会社の成長と社員の成長が、同じ方向を向いて進んでいく。</p>
        <p>それが、私の理想とするA CAN SOLUTIONSの姿です。</p>
        <p>今週は、そんな未来が少し見えたような気がしました。</p>
        <p>彼らの前向きな姿勢をうれしく思うとともに、私自身も、まだまだ学ばなければならないと感じた一週間でした。</p>

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
