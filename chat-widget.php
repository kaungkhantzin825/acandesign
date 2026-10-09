<!-- AI Chat Bot Widget (backend: Cloud Run) — included once, as early in <body> as possible -->
<link rel="preconnect" href="https://api-p2ednb2kcq-dt.a.run.app" crossorigin />
<link rel="preload" href="assets/img/chat-avatar.webp" as="image" />
<script>
  window.ACanChatConfig = {
    apiBase: "https://api-p2ednb2kcq-dt.a.run.app",
    avatarUrl: "assets/img/chat-avatar.webp",
    avatarTalkingUrl: "assets/img/chat-avatar-talking.webp",
    title: "A CAN AIアシスタント",
    subtitle: "オンライン・24時間対応",
    launcherLabel: "AIアシスタントに相談する",
    teaser: "ご相談内容を教えてください。AIが最適なサービスをご案内します！",
    // Rendered locally so the panel doesn't wait on /api/bootstrap (Cloud Run cold start).
    greeting: {
      text: "こんにちは！A CAN SOLUTIONSのAIアシスタントです。\nどのようなご相談でしょうか？\nお客様に最適なサービスをご提案します！",
      quickReplies: [
        { label: "サービスについて相談したい", value: "サービスについて相談したいです。" },
        { label: "見積もりをしてほしい", value: "見積もりをお願いしたいです。" },
        { label: "AIアノテーションについて知りたい", value: "AIアノテーションについて知りたいです。" },
        { label: "ミャンマー人材について知りたい", value: "ミャンマー人材について知りたいです。" },
        { label: "その他の質問をする", value: "その他の質問があります。" }
      ]
    },
    primaryColor: "#1546a0",
    primaryDark: "#0f3576",
    accentColor: "#e02b2b",
    position: "right",
    autoOpen: false,
    teaserDelay: 1000
  };
</script>
<script src="assets/js/embed.js" async></script>
