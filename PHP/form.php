

<!DOCTYPE html>


    <html itemscope itemtype="https://schema.org/QAPage" class="html__responsive " lang="pt-BR">

    <head>

        <title>javascript - Fazer l&#226;mpada acender e apagar - Stack Overflow em Portugu&#234;s</title>
        <link rel="shortcut icon" href="https://cdn.sstatic.net/Sites/br/Img/favicon.ico?v=20661a71f17b">
        <link rel="apple-touch-icon" href="https://cdn.sstatic.net/Sites/br/Img/apple-touch-icon.png?v=e57f45c9cfaf">
        <link rel="image_src" href="https://cdn.sstatic.net/Sites/br/Img/apple-touch-icon.png?v=e57f45c9cfaf"> 
        <link rel="search" type="application/opensearchdescription+xml" title="Stack Overflow em Portugu&#xEA;s" href="/opensearch.xml">
        <link rel="canonical" href="https://pt.stackoverflow.com/questions/295004/fazer-l%c3%a2mpada-acender-e-apagar" />
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, minimum-scale=1.0">
        <meta name="bingbot" content="noarchive">         
        <meta property="og:type" content= "website" />
        <meta property="og:url" content="https://pt.stackoverflow.com/questions/295004/fazer-l%c3%a2mpada-acender-e-apagar"/>
        <meta property="og:site_name" content="Stack Overflow em Portugu&#xEA;s" />
        <meta property="og:image" itemprop="image primaryImageOfPage" content="https://cdn.sstatic.net/Sites/br/Img/apple-touch-icon@2.png?v=2bb2b60be04f" />
        <meta name="twitter:card" content="summary"/>
        <meta name="twitter:domain" content="pt.stackoverflow.com"/>
        <meta name="twitter:title" property="og:title" itemprop="name" content="Fazer l&#xE2;mpada acender e apagar" />
        <meta name="twitter:description" property="og:description" itemprop="description" content="eu estou estudando javascript e fiz um exerc&#xED;cio onde tenho uma imagem de uma l&#xE2;mpada apagada onde ao clicar ele troca a l&#xE2;mpada colocando uma acesa, como se estivesse acendendo uma l&#xE2;mpada, por&#xE9;m ..." />
    <script id="webpack-public-path" type="text/uri-list">https://cdn.sstatic.net/</script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script><script src="https://code.jquery.com/jquery-migrate-3.4.1.min.js"></script>
    <script defer src="https://cdn.sstatic.net/Js/third-party/npm/@stackoverflow/stacks/dist/js/stacks.min.js?v=d5f780ae3281"></script>
    <script src="https://cdn.sstatic.net/Js/stub.pt-BR.js?v=c7f44327d9cb"></script>

    <link rel="stylesheet" type="text/css" href="https://cdn.sstatic.net/Shared/stacks.css?v=b9ac03f92096">
    <link rel="stylesheet" type="text/css" href="https://cdn.sstatic.net/Sites/br/primary.css?v=cb328bc05757">


    
            <link rel="alternate" type="application/atom+xml" title="Feed para a pergunta &#x27;Fazer l&#xE2;mpada acender e apagar&#x27;" href="/feeds/question/295004">
        <script>
            StackExchange.ready(function () {

                    StackExchange.using("snippets", function () {
                        StackExchange.snippets.initSnippetRenderer();
                    });
                    
                StackExchange.using("postValidation", function () {
                    StackExchange.postValidation.initOnBlurAndSubmit($('#post-form'), 2, 'answer');
                });


                StackExchange.question.init({showAnswerHelp:true,totalCommentCount:1,shownCommentCount:1,enableTables:true,questionId:295004});

                styleCode();

                    StackExchange.realtime.subscribeToQuestion('526', '295004');
                    StackExchange.using("gps", function () { StackExchange.gps.trackOutboundClicks('#content', '.js-post-body'); });


            });
        </script>

        
        
        
        <link rel="stylesheet" type="text/css" href="https://cdn.sstatic.net/Shared/Channels/channels.css?v=5981bb1a5bd7">

        
        


    <script>
        StackExchange.ready(function () {
            StackExchange.realtime.init('wss://qa.sockets.stackexchange.com');
                StackExchange.realtime.subscribeToReputationNotifications('526');
        StackExchange.realtime.subscribeToTopBarNotifications('526');
        });
    </script>
    <script type="application/json" data-role="module-args" data-module-name="Shared/options.mod">{"options":{"locale":"pt-BR","serverTime":1723991229,"routeName":"Questions/Show","stackAuthUrl":"https://stackauth.com","networkMetaHostname":"meta.stackexchange.com","site":{"name":"Stack Overflow em Português","description":"Perguntas e respostas para programadores profissionais e entusiastas","isNoticesTabEnabled":true,"enableNewTagCreationWarning":true,"insertSpaceAfterNameTabCompletion":false,"id":526,"cookieDomain":".stackoverflow.com","childUrl":"https://pt.meta.stackoverflow.com","negativeVoteScoreFloor":null,"enableSocialMediaInSharePopup":true,"protocol":"https"},"user":{"fkey":"e75e6e01c7a8f9220a22ea6f9d4bb88b1786aff68307f011fcd7e5f46c23b3cc","tid":"e313942f-3d2d-40f1-85d6-4c263c240852","rep":0,"isAnonymous":true,"isAnonymousNetworkWide":true},"realtime":{"newest":true,"active":true,"tagged":true,"staleDisconnectIntervalInHours":0},"events":{"postType":{"question":1},"postEditionSection":{"title":1,"body":2,"tags":3}}}}</script>
<script type="application/json" data-role="module-args" data-module-name="Shared/settings.mod">{"settings":{"intercom":{"appId":"inf0secd"},"paths":{"jQueryUIJSPath":"https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.0/jquery-ui.min.js","jQueryUICSSPath":"https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.0/themes/smoothness/jquery-ui.css"},"snippets":{"snippetsEnabled":true,"renderDomain":"stacksnippets.net"},"tags":{"allowNonAsciiTags":true},"legal":{"useCustomConsent":false,"oneTrustTCFConfigId":"0a011478-8083-4749-bb1b-d32dce001aff"},"auth":{"oauthInPopup":true},"search":{},"questions":{"enableSavesFeature":true,"maxTitleSize":150,"enableQuestionTitleLengthLiveWarning":true,"questionTitleLengthStartLiveWarningChars":50},"comments":{},"site":{"styleCode":true,"enableUserHovercards":true,"forceHttpsImages":true,"enableImageHttps":true,"allowImageUploads":true,"stacksEditorPreviewEnabled":true},"subscriptions":{"defaultFreemiumMaxTrueUpSeats":50,"defaultBasicMaxTrueUpSeats":250,"defaultMaxTrueUpSeats":1000},"accounts":{"currentPasswordRequiredForChangingStackIdPassword":true},"markdown":{"enableTables":true},"elections":{"opaVoteResultsBaseUrl":"https://www.opavote.com/results/"},"mentions":{"maxNumUsersInDropdown":50},"flags":{"allowRetractingFlags":true,"allowRetractingCommentFlags":true},"userMessaging":{"showNewFeatureNotice":true},"image":{"maxImageUploadSizeInBytesAnimatedGif":2097152,"maxImageUploadSizeInBytes":10485760}}}</script>
<script>StackExchange.init();</script>

    <script>
        StackExchange.using.setCacheBreakers({"Js/adops.pt-BR.js":"6da43f5e0a84","Js/ask.pt-BR.js":"","Js/begin-edit-event.pt-BR.js":"20edbaccceae","Js/copy-transpiled.pt-BR.js":"e4317722f282","Js/events.pt-BR.js":"","Js/explore-qlist.pt-BR.js":"ee2a4f8c3992","Js/full-anon.pt-BR.js":"f713704ccc4b","Js/full.pt-BR.js":"0812b15fbe86","Js/highlightjs-loader.pt-BR.js":"dec53251ce5d","Js/inline-tag-editing.pt-BR.js":"174c75a14589","Js/keyboard-shortcuts.pt-BR.js":"d223f5e4d7e3","Js/markdown-it-loader.pt-BR.js":"5818ef89ff9d","Js/mentions-transpiled.pt-BR.js":"9f4f86e19b71","Js/moderator.pt-BR.js":"cb5d42f62fe5","Js/postCollections-transpiled.pt-BR.js":"ba40d63b9fec","Js/post-validation.pt-BR.js":"d6dd836da487","Js/question-editor.pt-BR.js":"","Js/review-v2-transpiled.pt-BR.js":"644d23ebaade","Js/revisions.pt-BR.js":"133cdae80d22","Js/stacks-editor.pt-BR.js":"c70084e552cb","Js/tageditor.pt-BR.js":"2ed4628a31f1","Js/tageditornew.pt-BR.js":"c8ddbd384fff","Js/tagsuggestions.pt-BR.js":"737209872209","Js/unlimited-transpiled.pt-BR.js":"8713a979101d","Js/wmd.pt-BR.js":"fb62b617e1f9","Js/snippet-javascript-codemirror.pt-BR.js":"ae1dcf38deb7"});
        StackExchange.using("gps", function() {
             StackExchange.gps.init(false);
        });
    </script>
    <noscript id="noscript-css"><style>body,.s-topbar{margin-top:1.9em}</style></noscript>
    </head>
    <body class="question-page unified-theme">

        
<div id="signup-modal-container"></div>
<script type="application/json" data-role="module-args" data-module-name="islands/signup-modal/index.mod">{"ContainerElementId":"signup-modal-container","FKey":"e75e6e01c7a8f9220a22ea6f9d4bb88b1786aff68307f011fcd7e5f46c23b3cc","TriggerEvent":"signupModalShow","OauthInPopup":true,"ReturnUrl":"https://pt.stackoverflow.com/questions/295004/fazer-l%C3%A2mpada-acender-e-apagar","ReturnUrlForPopup":"https://pt.stackoverflow.com/users/after-signup/oauth-only","SiteName":"Stack Overflow em Português","SiteLogoPath":"https://cdn.sstatic.net/Sites/br/Img/icon-48.png?v=335d92a3f33c","AuthProviders":["Google","GitHub"],"ParentSiteUrl":"","IsInitiallyVisible":false}</script>
<script defer src="https://cdn.sstatic.net/Js/webpack-chunks/svelte.pt-BR.js?v=b5eebbe9c478"></script><script defer src="https://cdn.sstatic.net/Js/webpack-chunks/stacks-svelte.pt-BR.js?v=be1969c6e0d0"></script><script defer src="https://cdn.sstatic.net/Js/webpack-chunks/8213.pt-BR.js?v=a9ac94f12622"></script><script defer src="https://cdn.sstatic.net/Js/islands/signup-modal.pt-BR.js?v=0cd2affdfcbd"></script>

<script defer>
    dispatchEvent(new CustomEvent("openSignupModal"));
</script>
    
        <div id="one-tap-container"></div>
<script type="application/json" data-role="module-args" data-module-name="islands/one-tap/index.mod">{"ContainerElementId":"one-tap-container","FKey":"e75e6e01c7a8f9220a22ea6f9d4bb88b1786aff68307f011fcd7e5f46c23b3cc","GoogleClientId":"717762328687-iludtf96g1hinl76e4lc1b9a82g457nn.apps.googleusercontent.com","Autoselect":false,"ReturnUrl":"https%3a%2f%2fpt.stackoverflow.com%2fquestions%2f295004%2ffazer-l%25C3%25A2mpada-acender-e-apagar","OneTapNotShownEvent":"one-tap-not-shown"}</script><script defer src="https://cdn.sstatic.net/Js/webpack-chunks/svelte.pt-BR.js?v=b5eebbe9c478"></script><script defer src="https://cdn.sstatic.net/Js/islands/one-tap.pt-BR.js?v=ccf319b34861"></script>    <div id="notify-container"></div>
    <div id="custom-header"></div>
        

<header class="s-topbar ps-fixed t0 l0 js-top-bar">
    <a href="#content" class="s-topbar--skip-link">Skip to main content</a>
	<div class="s-topbar--container">
			<a href="#" class="s-topbar--menu-btn js-left-sidebar-toggle" role="menuitem" aria-haspopup="true" aria-controls="left-sidebar" aria-expanded="false"><span></span></a>
			<div class="topbar-dialog leftnav-dialog js-leftnav-dialog dno">
				<div class="left-sidebar js-unpinned-left-sidebar" data-can-be="left-sidebar" data-is-here-when="sm"></div>
			</div>
				<a href="https://pt.stackoverflow.com" class="s-topbar--logo js-gps-track"
		   data-gps-track="top_nav.click({is_current:false, location:2, destination:8}); homelogo_nav.click({location:2})">
					<span class="-img _glyph">Stack Overflow em Portugu&#xEA;s</span>
				</a>





		        <form id="search" role="search" action=/search class="s-topbar--searchbar js-searchbar " autocomplete="off">
                        <div class="s-topbar--searchbar--input-group">
                            <input name="q"
                                   type="text"
                                   role="combobox"
                                   placeholder="Pesquisar..."
                                   value=""
                                   autocomplete="off"
                                   maxlength="240"
                                   class="s-input s-input__search js-search-field wmn1 "
                                   aria-label="Pesquisar"
                                   aria-controls="top-search" 
                                   data-controller="s-popover"
                                   data-action="focus->s-popover#show"
                                   data-s-popover-placement="bottom-start" />
                            <svg aria-hidden="true" class="s-input-icon s-input-icon__search svg-icon iconSearch" width="18" height="18"  viewBox="0 0 18 18"><path  d="m18 16.5-5.14-5.18h-.35a7 7 0 1 0-1.19 1.19v.35L16.5 18zM12 7A5 5 0 1 1 2 7a5 5 0 0 1 10 0"/></svg>
                            <div class="s-popover p0 wmx100 wmn4 sm:wmn-initial js-top-search-popover" id="top-search" role="menu">
    <div class="s-popover--arrow"></div>
    <div class="s-popover--content">
        <div class="js-spinner p24 d-flex ai-center jc-center d-none">
            <div class="s-spinner s-spinner__sm fc-orange-400">
                <div class="v-visible-sr">Carregando&#x2026;</div>
            </div>
        </div>

        <span class="v-visible-sr js-screen-reader-info"></span>
        <div class="js-ac-results overflow-y-auto hmx3 d-none"></div>

        <div class="js-search-hints" aria-describedby="Tips for searching"></div>
    </div>
</div>
                        </div>
                </form>
		

<nav class="h100 ml-auto overflow-x-auto pr12" aria-label="Topbar">
    <ol class="s-topbar--content" role="menubar">
    
        <li role="none">
            <a href="/help" class="s-topbar--item js-help-button" role="menuitem" title="Central de ajuda e outros recursos" aria-haspopup="true" aria-controls="topbar-help-dialog"
           data-ga="[&quot;top navigation&quot;,&quot;help menu click&quot;,null,null,null]"><svg aria-hidden="true" class="svg-icon iconHelp" width="18" height="18"  viewBox="0 0 18 18"><path  d="M9 1C4.64 1 1 4.64 1 9s3.64 8 8 8 8-3.64 8-8-3.64-8-8-8m.81 12.13c-.02.71-.55 1.15-1.24 1.13-.66-.02-1.17-.49-1.15-1.2.02-.72.56-1.18 1.22-1.16.7.03 1.2.51 1.17 1.23M11.77 8c-.59.66-1.78 1.09-2.05 1.97a4 4 0 0 0-.09.75c0 .05-.03.16-.18.16H7.88c-.16 0-.18-.1-.18-.15.06-1.35.66-2.2 1.83-2.88.39-.29.7-.75.7-1.24.01-1.24-1.64-1.82-2.35-.72-.21.33-.18.73-.18 1.1H5.75c0-1.97 1.03-3.26 3.03-3.26 1.75 0 3.47.87 3.47 2.83 0 .57-.2 1.05-.48 1.44"/></svg></a>
        </li>
        <div class="topbar-dialog help-dialog js-help-dialog dno" id="topbar-help-dialog" role="menu">
            <div class="modal-content">
                <ul>
                        <li>
                            <a href="/tour" class="js-gps-track s-block-link" data-gps-track="help_popup.click({ item_type:1 })"
                       data-ga="[&quot;top navigation&quot;,&quot;tour submenu click&quot;,null,null,null]">
                                Tour
                                <span class="item-summary">
                                    Comece aqui para obter uma vis&#xE3;o geral r&#xE1;pida do site
                                </span>
                            </a>
                        </li>
                    <li>
                        <a href="/help" class="js-gps-track s-block-link"
                       data-gps-track="help_popup.click({ item_type:4 })"
                       data-ga="[&quot;top navigation&quot;,&quot;help center&quot;,null,null,null]">
                            Central de ajuda
                            <span class="item-summary">
                                Respostas detalhadas a qualquer pergunta que voc&#xEA; tiver
                            </span>
                        </a>
                    </li>
                                <li>
                                    <a href="https://pt.meta.stackoverflow.com" class="js-gps-track s-block-link" data-gps-track="help_popup.click({ item_type:2 })"
                       data-ga="[&quot;top navigation&quot;,&quot;meta submenu click&quot;,null,null,null]">
                                        Meta
                                        <span class="item-summary">
                                            Discutir o funcionamento e as pol&#xED;ticas deste site
                                        </span>
                                    </a>
                                </li>
                            <li>
                                <a href="https://stackoverflow.co/" class="js-gps-track s-block-link" data-gps-track="help_popup.click({ item_type:6 })"
                       data-ga="[&quot;top navigation&quot;,&quot;about us submenu click&quot;,null,null,null]">
                                    Sobre N&#xF3;s
                                    <span class="item-summary">
                                        Learn more about Stack Overflow the company, and our products
                                    </span>
                                </a>
                            </li>
                </ul>
            </div>
        </div>
        <li role="none">
            <a href="https://stackexchange.com" class="s-topbar--item js-site-switcher-button js-gps-track" data-gps-track="site_switcher.show"
           aria-label="Site switcher"
           role="menuitem"
           title="Todos os 183 sites do Stack Exchange"
           aria-haspopup="true" aria-expanded="false"
           data-ga="[&quot;top navigation&quot;,&quot;stack exchange click&quot;,null,null,null]">
                <svg aria-hidden="true" class="svg-icon iconStackExchange" width="18" height="18"  viewBox="0 0 18 18"><path  d="M15 1H3a2 2 0 0 0-2 2v2h16V3a2 2 0 0 0-2-2M1 13c0 1.1.9 2 2 2h8v3l3-3h1a2 2 0 0 0 2-2v-2H1zm16-7H1v4h16z"/></svg>
            </a>
        </li>
    
    
        <li class="js-topbar-dialog-corral" role="presentation">
                

    <div class="topbar-dialog siteSwitcher-dialog dno" role="menu">
        <div class="header fw-wrap">
            <h3 class="flex--item">
                <a href="https://pt.stackoverflow.com">comunidade atual</a>
            </h3>
            <div class="flex--item fl1">
                <div class="ai-center d-flex jc-end">
                    <button
                        class="js-close-button s-btn s-btn__muted p0 ml8 d-none sm:d-block"
                        type="button"
                        aria-label="Close"
                    >
                        <svg aria-hidden="true" class="svg-icon iconClear" width="18" height="18"  viewBox="0 0 18 18"><path  d="M15 4.41 13.59 3 9 7.59 4.41 3 3 4.41 7.59 9 3 13.59 4.41 15 9 10.41 13.59 15 15 13.59 10.41 9z"/></svg>
                    </button>
                </div>
            </div>
        </div>
        <div class="modal-content bg-blue-200 current-site-container">
            <ul class="current-site">
                    <li class="d-flex">
                            <div class="fl1">
                <a href="https://pt.stackoverflow.com"  
       class="current-site-link d-flex gx8 site-link js-gps-track"
       data-id="526"
       data-gps-track="site_switcher.click({ item_type:3 })">
        <div class="favicon favicon-br site-icon flex--item" title="Stack Overflow em Português"></div>
        <span class="flex--item fl1">
            Stack Overflow em Portugu&#xEA;s
        </span>
    </a>

    </div>
    <div class="related-links">
            <a href="https://pt.stackoverflow.com/help" class="js-gps-track" data-gps-track="site_switcher.click({ item_type:14 })">ajuda</a>
            <a href="https://chat.stackexchange.com?tab=site&amp;host=pt.stackoverflow.com" class="js-gps-track" data-gps-track="site_switcher.click({ item_type:6 })">chat</a>
    </div>

                    </li>
                    <li class="related-site d-flex">
                            <div class="L-shaped-icon-container">
        <span class="L-shaped-icon"></span>
    </div>

                            <a href="https://pt.meta.stackoverflow.com"  
       class="s-block-link px16 d-flex gx8 site-link js-gps-track"
       data-id="527"
       data-gps-track="site.switch({ target_site:527, item_type:3 }),site_switcher.click({ item_type:4 })">
        <div class="favicon favicon-brmeta site-icon flex--item" title="Stack Overflow em Português Meta"></div>
        <span class="flex--item fl1">
            Stack Overflow em Portugu&#xEA;s Meta
        </span>
    </a>

                    </li>
            </ul>
        </div>

        <div class="header" id="your-communities-header">
            <h3>
suas comunidades            </h3>

        </div>
        <div class="modal-content" id="your-communities-section">

                <div class="call-to-login">
Fa&#231;a <a href="https://pt.stackoverflow.com/users/login?ssrc=site_switcher&amp;returnurl=https%3a%2f%2fpt.stackoverflow.com%2fquestions%2f295004%2ffazer-l%25C3%25A2mpada-acender-e-apagar" class="login-link js-gps-track" data-gps-track="site_switcher.click({ item_type:11 })">log in</a> ou <a href="https://pt.stackoverflow.com/users/signup?ssrc=site_switcher&amp;returnurl=https%3a%2f%2fpt.stackoverflow.com%2fquestions%2f295004%2ffazer-l%25C3%25A2mpada-acender-e-apagar" class="login-link js-gps-track" data-gps-track="site_switcher.click({ item_type:10 })">registre-se</a> para personalizar suas comunidades                </div>
        </div>

        <div class="header">
            <h3><a href="https://stackexchange.com/sites">mais comunidades stack exchange</a>
            </h3>
            <a href="https://stackoverflow.blog" class="float-right">Blog da empresa</a>
        </div>
        <div class="modal-content">
                <div class="child-content"></div>
        </div>        
    </div>

        </li>
    
            <li role="none"><button class="s-topbar--item s-btn s-btn__icon s-btn__muted d-none sm:d-inline-flex js-searchbar-trigger" role="menuitem" aria-label="Pesquisar" aria-haspopup="true" aria-controls="search" title="Click to show search"><svg aria-hidden="true" class="svg-icon iconSearch" width="18" height="18"  viewBox="0 0 18 18"><path  d="m18 16.5-5.14-5.18h-.35a7 7 0 1 0-1.19 1.19v.35L16.5 18zM12 7A5 5 0 1 1 2 7a5 5 0 0 1 10 0"/></svg></button></li>
                        <li role="none">
                            <a href="https://pt.stackoverflow.com/users/login?ssrc=head&returnurl=https%3a%2f%2fpt.stackoverflow.com%2fquestions%2f295004%2ffazer-l%25C3%25A2mpada-acender-e-apagar" class="s-topbar--item s-topbar--item__unset s-btn s-btn__outlined ws-nowrap js-gps-track" role="menuitem" rel="nofollow"
                               data-gps-track="login.click" data-ga="[&quot;top navigation&quot;,&quot;login button click&quot;,null,null,null]">Log-in</a>
                        </li>
                        <li role="none"><a href="https://pt.stackoverflow.com/users/signup?ssrc=head&returnurl=https%3a%2f%2fpt.stackoverflow.com%2fquestions%2f295004%2ffazer-l%25C3%25A2mpada-acender-e-apagar" class="s-topbar--item s-topbar--item__unset ml4 s-btn s-btn__filled ws-nowrap js-signup-button js-gps-track" role="menuitem" rel="nofollow" data-gps-track="signup.topbar.click" data-ga="[&quot;sign up&quot;,&quot;Sign Up Navigation&quot;,&quot;Header&quot;,null,null]">Registrar-se</a></li>
    </ol>
</nav>


	</div>
</header>

	<script>
		StackExchange.ready(function () { StackExchange.topbar.init(); });
		StackExchange.scrollPadding.setPaddingTop(50, 10); 
	</script>



            <div id="signup-dialog-container"></div>
<script type="application/json" data-role="module-args" data-module-name="islands/signup-dialog/index.mod">{"ContainerElementId":"signup-dialog-container","FKey":"e75e6e01c7a8f9220a22ea6f9d4bb88b1786aff68307f011fcd7e5f46c23b3cc","VisitTimeout":30,"ReshowFrequency":3,"ReshowOffset":0,"InactiveTimeBeforeReshow":1.0,"OauthInPopup":true,"ReturnUrlForPopup":"https://pt.stackoverflow.com/users/after-signup/oauth-only","ShowOnlyAfterEvent":true,"TriggerEvent":"one-tap-not-shown","SiteName":"Stack Overflow em Português","SiteLogoPath":"https://cdn.sstatic.net/Sites/br/Img/icon-48.png?v=335d92a3f33c","IsDarkModeEnabledOnSite":true}</script><script defer src="https://cdn.sstatic.net/Js/webpack-chunks/svelte.pt-BR.js?v=b5eebbe9c478"></script><script defer src="https://cdn.sstatic.net/Js/webpack-chunks/stacks-svelte.pt-BR.js?v=be1969c6e0d0"></script><script defer src="https://cdn.sstatic.net/Js/islands/signup-dialog.pt-BR.js?v=7190a03fa297"></script>

    <div class="container">
                


<div id="left-sidebar" data-is-here-when="md lg" class="left-sidebar js-pinned-left-sidebar ps-relative">
    <div class="left-sidebar--sticky-container js-sticky-leftnav">
        <nav aria-label="Prim&#xE1;rias">
            <ol class="nav-links">
                <li>
                    <ol class="nav-links">
                        

<li class="ps-relative"  aria-current="false">


    <a
       href="/"
       class="s-block-link pl8 js-gps-track nav-links--link -link__with-icon"
       
       data-gps-track="top_nav.click({is_current: false, location:2, destination:8,  has_activity_notification:False});home_nav.click({location:2})"
       aria-controls=""
       data-controller=" "
       data-s-popover-placement="right"
       aria-current="false"
       data-s-popover-auto-show="true" data-s-popover-hide-on-outside-click="never"
    >
        <div class="d-flex ai-center">
<svg aria-hidden="true" class="svg-icon iconHome" width="18" height="18"  viewBox="0 0 18 18"><path  d="M15 10v5a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-5H0l9-9 9 9zm-8 1v6h4v-6z"/></svg>                <span class="-link--channel-name pl6">In&#xED;cio</span>

        </div>
    </a>
</li>



                        

<li class="ps-relative  youarehere"  aria-current="true">


    <a id="nav-questions"
       href="/questions"
       class="s-block-link pl8 js-gps-track nav-links--link -link__with-icon"
       
       data-gps-track="top_nav.click({is_current: true, location:2, destination:1,  has_activity_notification:False})"
       aria-controls=""
       data-controller=" "
       data-s-popover-placement="right"
       aria-current="false"
       data-s-popover-auto-show="true" data-s-popover-hide-on-outside-click="never"
    >
        <div class="d-flex ai-center">
<svg aria-hidden="true" class="svg-icon iconQuestionPt" width="18" height="18"  viewBox="0 0 18 18"><path  d="M9.13 7.84q.66 0 1-.3.35-.31.35-.89t-.35-.95a1.3 1.3 0 0 0-.96-.38H7.65v2.52zM1 18l3-3h11c1.09 0 2-.91 2-2V4c0-1.09-.91-2-2-2H3a2 2 0 0 0-2 2zm6.65-5.98H6V3.98h3.13q.9 0 1.6.33.68.33 1.05.95.37.6.37 1.38 0 1.18-.81 1.87-.8.68-2.24.68H7.65z"/></svg>                <span class="-link--channel-name pl6">Perguntas</span>

        </div>
    </a>
</li>






                        

<li class="ps-relative"  aria-current="false">


    <a
       href="/tags"
       class="s-block-link pl8 js-gps-track nav-links--link -link__with-icon"
       
       data-gps-track="top_nav.click({is_current: false, location:2, destination:2,  has_activity_notification:False})"
       aria-controls=""
       data-controller=" "
       data-s-popover-placement="right"
       aria-current="false"
       data-s-popover-auto-show="true" data-s-popover-hide-on-outside-click="never"
    >
        <div class="d-flex ai-center">
<svg aria-hidden="true" class="svg-icon iconTags" width="18" height="18"  viewBox="0 0 18 18"><path  d="M9.24 1a3 3 0 0 0-2.12.88l-5.7 5.7a2 2 0 0 0-.38 2.31 3 3 0 0 1 .67-1.01l6-6A3 3 0 0 1 9.83 2H14a3 3 0 0 1 .79.1A2 2 0 0 0 13 1z" opacity=".4"/><path  d="M9.83 3a2 2 0 0 0-1.42.59l-6 6a2 2 0 0 0 0 2.82L6.6 16.6a2 2 0 0 0 2.82 0l6-6A2 2 0 0 0 16 9.17V5a2 2 0 0 0-2-2zM12 9a2 2 0 1 1 0-4 2 2 0 0 1 0 4"/></svg>                <span class="-link--channel-name pl6">Tags</span>

        </div>
    </a>
</li>


                        
                        <li class="pb24"></li>


                        

<li class="ps-relative"  aria-current="false">


    <a id="nav-users"
       href="/users"
       class="s-block-link pl8 js-gps-track nav-links--link -link__with-icon"
       
       data-gps-track="top_nav.click({is_current: false, location:2, destination:3,  has_activity_notification:False})"
       aria-controls=""
       data-controller=" "
       data-s-popover-placement="right"
       aria-current="false"
       data-s-popover-auto-show="true" data-s-popover-hide-on-outside-click="never"
    >
        <div class="d-flex ai-center">
<svg aria-hidden="true" class="svg-icon iconPeople" width="18" height="18"  viewBox="0 0 18 18"><path  d="M17 14c0 .44-.45 1-1 1H9a1 1 0 0 1-1-1H2c-.54 0-1-.56-1-1 0-2.63 3-4 3-4s.23-.4 0-1c-.84-.62-1.06-.59-1-3s1.37-3 2.5-3 2.44.58 2.5 3-.16 2.38-1 3c-.23.59 0 1 0 1s1.55.71 2.42 2.09c.78-.72 1.58-1.1 1.58-1.1s.23-.4 0-1c-.84-.61-1.06-.58-1-3s1.37-3 2.5-3 2.44.59 2.5 3c.05 2.42-.16 2.39-1 3-.23.6 0 1 0 1s3 1.38 3 4"/></svg>                <span class="-link--channel-name pl6">Usu&#xE1;rios</span>

        </div>
    </a>
</li>



                            

<li class="ps-relative"  aria-current="false">


    <a id="nav-unanswered"
       href="/unanswered"
       class="s-block-link pl8 js-gps-track nav-links--link -link__with-icon"
       
       data-gps-track="top_nav.click({is_current: false, location:2, destination:5,  has_activity_notification:False})"
       aria-controls=""
       data-controller=" "
       data-s-popover-placement="right"
       aria-current="false"
       data-s-popover-auto-show="true" data-s-popover-hide-on-outside-click="never"
    >
        <div class="d-flex ai-center">
<svg aria-hidden="true" class="svg-icon iconAnswerPt" width="18" height="18"  viewBox="0 0 18 18"><path  d="M9.02 7.73q.63 0 .97-.31t.34-.88-.33-.9q-.32-.31-.99-.32H7.7v2.41zM3 15h11l3 3V4c0-1.09-.91-2-2-2H3a2 2 0 0 0-2 2v9c0 1.09.91 2 2 2m4.69-5.93v2.95H6.03V3.98h2.98q1.43 0 2.2.64.77.63.77 1.79 0 .82-.36 1.37-.35.55-1.07.88l1.74 3.28v.08H10.5L9 9.07z"/></svg>                <span class="-link--channel-name pl6">Sem resposta</span>

        </div>
    </a>
</li>





                    </ol>
                </li>
                
                


            </ol>
        </nav>
    </div>







</div>



        <div id="content" class="snippet-hidden">

            

<div itemprop="mainEntity" itemscope itemtype="https://schema.org/Question">
    <link itemprop="image" href="https://cdn.sstatic.net/Sites/br/Img/apple-touch-icon.png?v=e57f45c9cfaf">

    <div class="inner-content clearfix">
        

            <div id="question-header" class="d-flex sm:fd-column">
                        <h1 itemprop="name" class="fs-headline1 ow-break-word mb8 flex--item fl1"><a href="/questions/295004/fazer-l%c3%a2mpada-acender-e-apagar" class="question-hyperlink">Fazer l&#226;mpada acender e apagar</a></h1>

                <div class="ml12 aside-cta flex--item sm:ml0 sm:mb12 sm:order-first d-flex jc-end">

                        <div class="ml12 aside-cta flex--item print:d-none">
                                <a href="/questions/ask" class="ws-nowrap s-btn s-btn__filled">
        Fa&#xE7;a uma pergunta
    </a>

                        </div>
                </div>
            </div>
            <div class="d-flex fw-wrap pb8 mb16 bb bc-black-200">
                    <div class="flex--item ws-nowrap mr16 mb8" title="2018-04-29 21:17:19Z">
                        <span class="fc-black-400 mr2">Perguntada</span>
                        <time itemprop="dateCreated" datetime="2018-04-29T21:17:19">6 anos, 3 meses atr&#225;s</time>
                    </div>
                    <div class="flex--item ws-nowrap mr16 mb8">
                        <span class="fc-black-400 mr2">Modified</span>
                        <a href="?lastactivity" class="s-link s-link__inherit" title="2018-05-19 00:59:12Z">6 anos, 3 meses atr&#225;s</a>
                    </div>
                    <div class="flex--item ws-nowrap mb8" title="Visto 6.729 vezes">
                        <span class="fc-black-400 mr2">Vista</span>
                        7mil vezes
                    </div>
            </div>

            <div id="mainbar" role="main" aria-label="pergunta e respostas">
                
<div class="question js-question" data-questionid="295004" data-position-on-page="0" data-score="2"  id="question">
    <style>
    </style>
<div class="js-zone-container zone-container-main">
    <div id="dfp-tlb" class="everyonelovesstackoverflow everyoneloves__top-leaderboard everyoneloves__leaderboard"></div>
		<div class="js-report-ad-button-container " style="width: 728px"></div>
</div>


    <div class="post-layout ">
        <div class="votecell post-layout--left">
            

<div class="js-voting-container d-flex jc-center fd-column ai-center gs4 fc-black-300" data-post-id="295004" data-referrer="None">
        <button class="js-vote-up-btn flex--item s-btn s-btn__muted s-btn__outlined bar-pill bc-black-225 f:bc-theme-secondary-400 f:bg-theme-secondary-400 f:fc-black-050 h:bg-theme-primary-200"
                data-controller="s-tooltip"
                data-s-tooltip-placement="right"
                title="Esta pergunta mostra esfor&#xE7;o de pesquisa; &#xE9; &#xFA;til e clara"
                aria-pressed="false"
                aria-label="Up vote"
                data-selected-classes="fc-theme-primary bc-theme-primary bg-theme-primary-100"
                data-unselected-classes="bc-black-225 f:bc-theme-secondary-400 f:bg-theme-secondary-400 f:fc-black-050 h:bg-theme-primary-200">
            <svg aria-hidden="true" class="svg-icon iconArrowUp" width="18" height="18"  viewBox="0 0 18 18"><path  d="M1 12h16L9 4z"/></svg>
        </button>
        <input type="hidden" id="voteUpHash" value="68:3:31e,16:3dbb8266f3a146ad,10:1723991229,16:a82a5de874d379fe,6:295004,705bae9eec90cb02ab480eeb4c7ebe9e5f11ac2bfa0397e45172df50ee311d88" />
        <div class="js-vote-count flex--item d-flex fd-column ai-center fc-theme-body-font fw-bold fs-subheading py4"
             itemprop="upvoteCount"
             data-value="2">
            2
        </div>
        <button
                class="js-vote-down-btn js-vote-down-question flex--item mb8 s-btn s-btn__muted s-btn__outlined bar-pill bc-black-225 f:bc-theme-secondary-400 f:bg-theme-secondary-400 f:fc-black-050 h:bg-theme-primary-200"
                title="Esta pergunta n&#xE3;o mostra nenhum esfor&#xE7;o de pesquisa; ela n&#xE3;o &#xE9; clara ou n&#xE3;o &#xE9; &#xFA;til"
                aria-pressed="false"
                aria-label="Down vote"
                data-selected-classes="fc-theme-primary bc-theme-primary bg-theme-primary-100"
                data-unselected-classes="bc-black-225 f:bc-theme-secondary-400 f:bg-theme-secondary-400 f:fc-black-050 h:bg-theme-primary-200">
            <svg aria-hidden="true" class="svg-icon iconArrowDown" width="18" height="18"  viewBox="0 0 18 18"><path  d="M1 6h16l-8 8z"/></svg>
        </button>
        <input type="hidden" id="voteDownHash" value="68:3:31e,16:b65bc85d43f24c42,10:1723991229,16:a3cba08463fdeaa7,6:295004,c600ab43d17af4b15be1e67ddb575810ff4a18e677140f26bc4652afd13b09cd" />


        
<button class="js-saves-btn s-btn s-btn__unset c-pointer py4"
        type="button"
        id="saves-btn-295004"
        data-controller="s-tooltip"
        data-s-tooltip-placement="right"
        data-s-popover-placement=""
        title="Save this question."
        aria-pressed="false"
        data-post-id="295004"
        data-post-type-id="1"
        data-user-privilege-for-post-click="0"
        aria-controls=""
        data-s-popover-auto-show="false"
>
    <svg aria-hidden="true" class="fc-theme-primary-400 js-saves-btn-selected d-none svg-icon iconBookmark" width="18" height="18"  viewBox="0 0 18 18"><path  d="M3 17V3c0-1.1.9-2 2-2h8a2 2 0 0 1 2 2v14l-6-4z"/></svg>
    <svg aria-hidden="true" class="js-saves-btn-unselected svg-icon iconBookmarkAlt" width="18" height="18"  viewBox="0 0 18 18"><path  d="m9 10.6 4 2.66V3H5v10.26zM3 17V3c0-1.1.9-2 2-2h8a2 2 0 0 1 2 2v14l-6-4z"/></svg>
</button>








    
    <a class="js-post-issue flex--item s-btn s-btn__unset c-pointer py6 mx-auto" href="/posts/295004/timeline" data-shortcut="T" data-ks-title="linha do tempo" data-controller="s-tooltip" data-s-tooltip-placement="right" title="Exibir atividade dessa publica&#xE7;&#xE3;o" aria-label="Linha do tempo"><svg aria-hidden="true" class="mln2 mr0 svg-icon iconHistory" width="19" height="18"  viewBox="0 0 19 18"><path  d="M3 9a8 8 0 1 1 3.73 6.77L8.2 14.3A6 6 0 1 0 5 9l3.01-.01-4 4-4-4zm7-4h1.01L11 9.36l3.22 2.1-.6.93L10 10z"/></svg></a>

</div>

        </div>

        

<div class="postcell post-layout--right">
    
    <div class="s-prose js-post-body" itemprop="text">
                
<p>eu estou estudando javascript e fiz um exercício onde tenho uma imagem de uma lâmpada apagada onde ao clicar ele troca a lâmpada colocando uma acesa, como se estivesse acendendo uma lâmpada, porém estou na dúvida não sei como fazer a mesma trocar a imagem para fazer o efeito de apagar novamente. Segue o código abaixo de como implementei.</p>

<pre><code>&lt;script&gt;
    function ligar(){
        document.getElementById('lamp').src = "images/lampada-on.jpg";
    }
&lt;/script&gt;
</code></pre>

<p></p>
    </div>

        <div class="mt24 mb12">
            <div class="post-taglist d-flex gs4 gsy fd-column">
                <div class="d-flex ps-relative fw-wrap">
                    
                    <ul class='ml0 list-ls-none js-post-tag-list-wrapper d-inline'><li class='d-inline mr4 js-post-tag-list-item'><a href="/questions/tagged/javascript" class="s-tag post-tag" title="mostrar perguntas com a tag &#39;javascript&#39;" aria-label="mostrar perguntas com a tag &#39;javascript&#39;" rel="tag" aria-labelledby="tag-javascript-tooltip-container" data-tag-menu-origin="Unknown">javascript</a></li></ul>
                </div>
            </div>
        </div>

    <div class="mb0 ">
        <div class="mt16 d-flex gs8 gsy fw-wrap jc-end ai-start pt4 mb16">
            <div class="flex--item mr16 fl1 w96">
                


<div class="js-post-menu pt2" data-post-id="295004" data-post-type-id="1">

    <div class="d-flex gs8 s-anchors s-anchors__muted fw-wrap">

        <div class="flex--item">
            <a href="/q/295004"
               rel="nofollow"
               itemprop="url"
               class="js-share-link js-gps-track"
               title="permalink curto para esta pergunta"
               data-gps-track="post.click({ item: 2, priv: 0, post_type: 1 })"
               data-controller="se-share-sheet"
               data-se-share-sheet-title="Compartilhe um link para esta pergunta"
               data-se-share-sheet-subtitle=""
               data-se-share-sheet-post-type="question"
               data-se-share-sheet-social="facebook twitter "
               data-se-share-sheet-location="1"
               data-se-share-sheet-license-url="https%3a%2f%2fcreativecommons.org%2flicenses%2fby-sa%2f3.0%2f"
               data-se-share-sheet-license-name="CC BY-SA 3.0"
               data-s-popover-placement="bottom-start">Compartilhar</a>
        </div>


                    <div class="flex--item">
                        <a href="/posts/295004/edit" class="js-suggest-edit-post js-gps-track" data-gps-track="post.click({ item: 6, priv: 0, post_type: 1 })" title="">Melhore esta pergunta</a>
                    </div>

                <div class="flex--item">
                    <button type="button"
                            id="btnFollowPost-295004" class="s-btn s-btn__link js-follow-post js-follow-question js-gps-track"
                            data-gps-track="post.click({ item: 14, priv: 0, post_type: 1 })"
                            data-controller="s-tooltip " data-s-tooltip-placement="bottom"
                            data-s-popover-placement="bottom" aria-controls=""
                            title="Siga esta pergunta para receber notifica&#xE7;&#xF5;es">
                        Seguir
                        <input type="hidden" id="voteFollowHash" value="68:3:31e,16:d42b36fb6c960258,10:1723991229,16:8e881dbf8d0de643,6:295004,5af3cfea3f2ab8de588ebc2189ca5343e99a0b9896ec5685e19223675d7f59f0" />
                    </button>
                </div>






    </div>
    <div class="js-menu-popup-container"></div>
</div>
            </div>

            <div class="post-signature owner flex--item">
                <div class="user-info ">
    <div class="d-flex ">
        <div class="user-action-time fl-grow1">
            perguntada <span title='2018-04-29 21:17:19Z' class='relativetime'>29/04/2018 às 21:17</span>
        </div>
        
    </div>
    <div class="user-gravatar32">
        <a href="/users/109797/arisson"><div class="gravatar-wrapper-32"><img src="https://i.sstatic.net/qtbMS.jpg?s=64" alt="Arisson&#39;s user avatar" width="32" height="32" class="bar-sm"></div></a>
    </div>
    <div class="user-details" itemprop="author" itemscope itemtype="http://schema.org/Person">
        <a href="/users/109797/arisson">Arisson</a><span class="d-none" itemprop="name">Arisson</span>
        <div class="-flair">
            <span class="reputation-score" title="pontos de reputação " dir="ltr">21</span><span title="1 medalhas de prata" aria-hidden="true"><span class="badge2"></span><span class="badgecount">1</span></span><span class="v-visible-sr">1 medalhas de prata</span><span title="4 medalhas de bronze" aria-hidden="true"><span class="badge3"></span><span class="badgecount">4</span></span><span class="v-visible-sr">4 medalhas de bronze</span>
        </div>
    </div>
</div>


            </div>
        </div>
    </div>
    
</div>




            <span class="d-none" itemprop="commentCount">1</span> 
    <div class="post-layout--right js-post-comments-component">
        <div id="comments-295004" class="comments js-comments-container bt bc-black-200 mt12 " data-post-id="295004" data-min-length="15">
            <ul class="comments-list js-comments-list"
                    data-remaining-comments-count="0"
                    data-canpost="false"
                    data-cansee="true"
                    data-comments-unavailable="false"
                    data-addlink-disabled="true">

                        <li id="comment-613403" class="comment js-comment " data-comment-id="613403" data-comment-owner-id="8063" data-comment-score="0">
        <div class="js-comment-actions comment-actions">
            <div class="comment-score js-comment-score js-comment-edit-hide">
            </div>
        </div>
        <div class="comment-text  js-comment-text-and-form">
            <div class="comment-body js-comment-edit-hide">
                
                <span class="comment-copy">Por favor, marque uma das resposta com ✓. N&#227;o deixe a pergunta em aberto. MArque ✓ na resposta que resolveu seu problema.</span>
                
                <div class="d-inline-flex ai-center">
&ndash;&nbsp;<a href="/users/8063/sam"
                                title="80.716 reputa&#xE7;&#xE3;o"
                                class="comment-user">Sam</a>
                </div>
                <span class="comment-date" dir="ltr">
                    <span class="v-visible-sr">Commented</span>
                    <span title='2018-05-27 06:16:39Z, Licen&#231;a: CC BY-SA 4.0' class='relativetime-clean'>27/05/2018 às 6:16</span>
                </span>
            </div>
        </div>
    </li>

            </ul>
	    </div>

        <div id="comments-link-295004" data-rep=50 data-anon=true>
                    <a class="js-add-link comments-link disabled-link" title="Use coment&#xE1;rios para pedir mais informa&#xE7;&#xF5;es ou sugerir melhorias. Evite responder perguntas em coment&#xE1;rios."  href="#" role="button">Adicione um coment&#xE1;rio</a>
                <span class="js-link-separator dno">&nbsp;|&nbsp;</span>
            <a class="js-show-link comments-link dno" title="ver todos os coment&#xE1;rios desta publica&#xE7;&#xE3;o" href=# onclick="" role="button"></a>
        </div>         
    </div>
    </div>

</div>



                
                
                <div id="answers">
                    <a name="tab-top"></a>
                    <div id="answers-header">
                        <div class="answers-subheader d-flex ai-center mb8">
                            <div class="flex--item fl1">
                                <h2 class="mb0" data-answercount="5">
                                        5 Respostas
                                    <span style="display:none;" itemprop="answerCount">5</span>
                                </h2>
                            </div>
                            <div class="flex--item">
                                

<div class="d-flex g4 gsx ai-center sm:fd-column sm:ai-start">
    <div class="d-flex fd-column ai-end sm:ai-start">
        <label class="flex--item fs-caption" for="answer-sort-dropdown-select-menu">
            Ordenado por:
        </label>
        <a 
            class="js-sort-preference-change s-link flex--item fs-fine d-none"
            data-value="ScoreDesc"
            href="/questions/295004/fazer-l%c3%a2mpada-acender-e-apagar?answertab=scoredesc#tab-top"
        >
            Restaurar predefini&#xE7;&#xE3;o
        </a>
    </div>
    <div class="flex--item s-select">
        <select id="answer-sort-dropdown-select-menu">
                    <option
                        value=scoredesc
                        selected=selected
                    >
                        Maior pontua&#xE7;&#xE3;o (predefini&#xE7;&#xE3;o)
                    </option>
                    <option
                        value=modifieddesc
                    >
                        Data de modifica&#xE7;&#xE3;o (mais recente primeiro)
                    </option>
                    <option
                        value=createdasc
                    >
                        Data de cria&#xE7;&#xE3;o (mais antiga primeiro)
                    </option>
        </select>
    </div>
</div>


                            </div>
                        </div>
                    </div>


                                    
<a name="295011"></a>
<div id="answer-295011" class="answer js-answer" data-answerid="295011" data-parentid="295004" data-score="6" data-position-on-page="1" data-highest-scored="1" data-question-has-accepted-highest-score="0"  itemprop="acceptedAnswer" itemscope itemtype="https://schema.org/Answer">
    <div class="post-layout">
        <div class="votecell post-layout--left">
            

<div class="js-voting-container d-flex jc-center fd-column ai-center gs4 fc-black-300" data-post-id="295011" data-referrer="None">
        <button class="js-vote-up-btn flex--item s-btn s-btn__muted s-btn__outlined bar-pill bc-black-225 f:bc-theme-secondary-400 f:bg-theme-secondary-400 f:fc-black-050 h:bg-theme-primary-200"
                data-controller="s-tooltip"
                data-s-tooltip-placement="right"
                title="Esta resposta &#xE9; &#xFA;til"
                aria-pressed="false"
                aria-label="Up vote"
                data-selected-classes="fc-theme-primary bc-theme-primary bg-theme-primary-100"
                data-unselected-classes="bc-black-225 f:bc-theme-secondary-400 f:bg-theme-secondary-400 f:fc-black-050 h:bg-theme-primary-200">
            <svg aria-hidden="true" class="svg-icon iconArrowUp" width="18" height="18"  viewBox="0 0 18 18"><path  d="M1 12h16L9 4z"/></svg>
        </button>
        <input type="hidden" id="voteUpHash" value="68:3:31e,16:6ea3c04a647cf1bb,10:1723991229,16:42cb12df68a1c252,6:295011,5d011bb451cab99800b21f867770ca58a889d6e6ac7fd3be74d0aa14310ad801" />
        <div class="js-vote-count flex--item d-flex fd-column ai-center fc-theme-body-font fw-bold fs-subheading py4"
             itemprop="upvoteCount"
             data-value="6">
            6
        </div>
        <button
                class="js-vote-down-btn flex--item mb8 s-btn s-btn__muted s-btn__outlined bar-pill bc-black-225 f:bc-theme-secondary-400 f:bg-theme-secondary-400 f:fc-black-050 h:bg-theme-primary-200"
                title="Esta resposta n&#xE3;o &#xE9; &#xFA;til"
                aria-pressed="false"
                aria-label="Down vote"
                data-selected-classes="fc-theme-primary bc-theme-primary bg-theme-primary-100"
                data-unselected-classes="bc-black-225 f:bc-theme-secondary-400 f:bg-theme-secondary-400 f:fc-black-050 h:bg-theme-primary-200">
            <svg aria-hidden="true" class="svg-icon iconArrowDown" width="18" height="18"  viewBox="0 0 18 18"><path  d="M1 6h16l-8 8z"/></svg>
        </button>
        <input type="hidden" id="voteDownHash" value="68:3:31e,16:c3a0c8d7af9381d8,10:1723991229,16:80d6e197872d2975,6:295011,08fe05fe5a73057ab1b2dfbc79d2d15669e811bf13947ddf304e1455318cd358" />


        
<button class="js-saves-btn s-btn s-btn__unset c-pointer py4"
        type="button"
        id="saves-btn-295011"
        data-controller="s-tooltip"
        data-s-tooltip-placement="right"
        data-s-popover-placement=""
        title="Save this answer."
        aria-pressed="false"
        data-post-id="295011"
        data-post-type-id="2"
        data-user-privilege-for-post-click="0"
        aria-controls=""
        data-s-popover-auto-show="false"
>
    <svg aria-hidden="true" class="fc-theme-primary-400 js-saves-btn-selected d-none svg-icon iconBookmark" width="18" height="18"  viewBox="0 0 18 18"><path  d="M3 17V3c0-1.1.9-2 2-2h8a2 2 0 0 1 2 2v14l-6-4z"/></svg>
    <svg aria-hidden="true" class="js-saves-btn-unselected svg-icon iconBookmarkAlt" width="18" height="18"  viewBox="0 0 18 18"><path  d="m9 10.6 4 2.66V3H5v10.26zM3 17V3c0-1.1.9-2 2-2h8a2 2 0 0 1 2 2v14l-6-4z"/></svg>
</button>







            <div class="js-accepted-answer-indicator flex--item fc-green-400 py6 mtn8 d-none" data-s-tooltip-placement="right" title="Carregando quando esta resposta foi aceita&#x2026;" tabindex="0" role="note" aria-label="Aceito">
                <div class="ta-center">
                    <svg aria-hidden="true" class="svg-icon iconCheckmarkLg" width="36" height="36"  viewBox="0 0 36 36"><path  d="m6 14 8 8L30 6v8L14 30l-8-8z"/></svg>
                </div>
            </div>

    
    <a class="js-post-issue flex--item s-btn s-btn__unset c-pointer py6 mx-auto" href="/posts/295011/timeline" data-shortcut="T" data-ks-title="linha do tempo" data-controller="s-tooltip" data-s-tooltip-placement="right" title="Exibir atividade dessa publica&#xE7;&#xE3;o" aria-label="Linha do tempo"><svg aria-hidden="true" class="mln2 mr0 svg-icon iconHistory" width="19" height="18"  viewBox="0 0 19 18"><path  d="M3 9a8 8 0 1 1 3.73 6.77L8.2 14.3A6 6 0 1 0 5 9l3.01-.01-4 4-4-4zm7-4h1.01L11 9.36l3.22 2.1-.6.93L10 10z"/></svg></a>

</div>

        </div>

        

<div class="answercell post-layout--right">
    
    <div class="s-prose js-post-body" itemprop="text">
<p>Você pode fazer desta forma</p>

<p><div class="snippet" data-lang="js" data-hide="false" data-console="true" data-babel="false">
<div class="snippet-code">
<pre class="snippet-code-js lang-js prettyprint-override"><code>function ligarDesliga(){

    var imagem = document.getElementById('lamp').src;
    var imagem_ligado = 'https://www.w3schools.com/js/pic_bulbon.gif';
    var imagem_desligado = 'https://www.w3schools.com/js/pic_bulboff.gif';
    
    if(imagem == imagem_ligado){
    	document.getElementById('lamp').src = imagem_desligado;
    }else{
    	document.getElementById('lamp').src = imagem_ligado;
    }
}
document.getElementById("lamp").addEventListener("click", ligarDesliga);</code></pre>
<pre class="snippet-code-css lang-css prettyprint-override"><code>#lamp{
  cursor: pointer;
  cursor: hand;
}</code></pre>
<pre class="snippet-code-html lang-html prettyprint-override"><code>&lt;img id="lamp" src="https://www.w3schools.com/js/pic_bulboff.gif"&gt;</code></pre>
</div>
</div>
</p>

<p><strong>HTML</strong></p>

<pre><code>&lt;img id="lamp" src="images/lampada-off.jpg"&gt;
</code></pre>

<p><strong>JavaScript</strong></p>

<p>Isso é só para deixar o cursor da mesma forma de um link "maozinha", para o usuário entender que é possível clicar naquela imagem.</p>

<pre><code>#lamp{
  cursor: pointer;
  cursor: hand;
}
</code></pre>

<p><strong>JavaScript</strong></p>

<pre><code>function ligarDesliga(){

    var imagem = document.getElementById('lamp').src;
    var imagem_ligado = 'images/lampada-on.jpg';
    var imagem_desligado = 'images/lampada-off.jpg';

    if(imagem == imagem_ligado){
        document.getElementById('lamp').src = imagem_desligado;
    }else{
        document.getElementById('lamp').src = imagem_ligado;
    }
}
document.getElementById("lamp").addEventListener("click", ligarDesliga);
</code></pre>

<p>Criei um evento click para o id "lamp" e a função "ligarDesliga" verifica qual imagem esta presente na tag e a altera, fazendo o efeito de liga e desliga.</p>

<p><strong>Update</strong></p>

<blockquote>
  <p>Outro exemplo do w3 <a href="https://www.w3schools.com/js/tryit.asp?filename=tryjs_intro_lightbulb" rel="nofollow noreferrer">Tryjs Intro Lightbuld</a></p>
</blockquote>
    </div>
    <div class="mt24">
        <div class="d-flex fw-wrap ai-start jc-end gs8 gsy">
            <time itemprop="dateCreated" datetime="2018-04-29T21:38:50"></time>
            <div class="flex--item mr16" style="flex: 1 1 100px;">
                


<div class="js-post-menu pt2" data-post-id="295011" data-post-type-id="2">

    <div class="d-flex gs8 s-anchors s-anchors__muted fw-wrap">

        <div class="flex--item">
            <a href="/a/295011"
               rel="nofollow"
               itemprop="url"
               class="js-share-link js-gps-track"
               title="permalink curto para esta resposta"
               data-gps-track="post.click({ item: 2, priv: 0, post_type: 2 })"
               data-controller="se-share-sheet"
               data-se-share-sheet-title="Compartilhe um link para esta resposta"
               data-se-share-sheet-subtitle=""
               data-se-share-sheet-post-type="answer"
               data-se-share-sheet-social="facebook twitter "
               data-se-share-sheet-location="2"
               data-se-share-sheet-license-url="https%3a%2f%2fcreativecommons.org%2flicenses%2fby-sa%2f3.0%2f"
               data-se-share-sheet-license-name="CC BY-SA 3.0"
               data-s-popover-placement="bottom-start">Compartilhar</a>
        </div>


                    <div class="flex--item">
                        <a href="/posts/295011/edit" class="js-suggest-edit-post js-gps-track" data-gps-track="post.click({ item: 6, priv: 0, post_type: 2 })" title="">Melhore esta resposta</a>
                    </div>

                <div class="flex--item">
                    <button type="button"
                            id="btnFollowPost-295011" class="s-btn s-btn__link js-follow-post js-follow-answer js-gps-track"
                            data-gps-track="post.click({ item: 14, priv: 0, post_type: 2 })"
                            data-controller="s-tooltip " data-s-tooltip-placement="bottom"
                            data-s-popover-placement="bottom" aria-controls=""
                            title="Siga esta resposta para receber notifica&#xE7;&#xF5;es">
                        Seguir
                        <input type="hidden" id="voteFollowHash" value="68:3:31e,16:1dc199e0fb0c495c,10:1723991229,16:70ea0c7248697006,6:295011,54b436f442599b3c912e9cd0459b483a896cb47ab3ba5a703ee21138d1126b70" />
                    </button>
                </div>






    </div>
    <div class="js-menu-popup-container"></div>
</div>
            </div>
            <div class="post-signature flex--item fl0">
<div class="user-info user-hover ">
    <div class="d-flex ">
        <div class="user-action-time fl-grow1">
            <a href="/posts/295011/revisions" title="mostrar todas as edições desta publicação"
                         class="js-gps-track"
                         data-gps-track="post.click({ item: 4, priv: 0, post_type: 2 })">editada <span title='2018-04-29 23:47:45Z' class='relativetime'>29/04/2018 às 23:47</span></a>
        </div>
        
    </div>
    <div class="user-gravatar32">
        <a href="/users/54880/novic"><div class="gravatar-wrapper-32"><img src="https://i.sstatic.net/qVIri.png?s=64" alt="novic&#39;s user avatar" width="32" height="32" class="bar-sm"></div></a>
    </div>
    <div class="user-details">
        <a href="/users/54880/novic">novic</a>
        <div class="-flair">
            <span class="reputation-score" title="pontos de reputação 36.682" dir="ltr">36,7mil</span><span title="4 medalhas de ouro" aria-hidden="true"><span class="badge1"></span><span class="badgecount">4</span></span><span class="v-visible-sr">4 medalhas de ouro</span><span title="31 medalhas de prata" aria-hidden="true"><span class="badge2"></span><span class="badgecount">31</span></span><span class="v-visible-sr">31 medalhas de prata</span><span title="69 medalhas de bronze" aria-hidden="true"><span class="badge3"></span><span class="badgecount">69</span></span><span class="v-visible-sr">69 medalhas de bronze</span>
        </div>
    </div>
</div>
            </div>


            <div class="post-signature flex--item fl0">
                <div class="user-info user-hover ">
    <div class="d-flex ">
        <div class="user-action-time fl-grow1">
            respondida <span title='2018-04-29 21:38:50Z' class='relativetime'>29/04/2018 às 21:38</span>
        </div>
        
    </div>
    <div class="user-gravatar32">
        <a href="/users/74441/wictor-chaves"><div class="gravatar-wrapper-32"><img src="https://i.sstatic.net/Msm58.png?s=64" alt="Wictor Chaves&#39;s user avatar" width="32" height="32" class="bar-sm"></div></a>
    </div>
    <div class="user-details" itemprop="author" itemscope itemtype="http://schema.org/Person">
        <a href="/users/74441/wictor-chaves">Wictor Chaves</a><span class="d-none" itemprop="name">Wictor Chaves</span>
        <div class="-flair">
            <span class="reputation-score" title="pontos de reputação " dir="ltr">8.646</span><span title="2 medalhas de ouro" aria-hidden="true"><span class="badge1"></span><span class="badgecount">2</span></span><span class="v-visible-sr">2 medalhas de ouro</span><span title="28 medalhas de prata" aria-hidden="true"><span class="badge2"></span><span class="badgecount">28</span></span><span class="v-visible-sr">28 medalhas de prata</span><span title="62 medalhas de bronze" aria-hidden="true"><span class="badge3"></span><span class="badgecount">62</span></span><span class="v-visible-sr">62 medalhas de bronze</span>
        </div>
    </div>
</div>


            </div>
        </div>
        
    
    </div>
    
</div>




            <span class="d-none" itemprop="commentCount">7</span> 
    <div class="post-layout--right js-post-comments-component">
        <div id="comments-295011" class="comments js-comments-container bt bc-black-200 mt12 " data-post-id="295011" data-min-length="15">
            <ul class="comments-list js-comments-list"
                    data-remaining-comments-count="2"
                    data-canpost="false"
                    data-cansee="true"
                    data-comments-unavailable="false"
                    data-addlink-disabled="true">

                        <li id="comment-599471" class="comment js-comment " data-comment-id="599471" data-comment-owner-id="64969" data-comment-score="1">
        <div class="js-comment-actions comment-actions">
            <div class="comment-score js-comment-score js-comment-edit-hide">
                    <span title="n&#xFA;mero de votos para &#x27;coment&#xE1;rios &#xFA;teis&#x27; recebidos"
                            class="cool">1</span>
            </div>
        </div>
        <div class="comment-text  js-comment-text-and-form">
            <div class="comment-body js-comment-edit-hide">
                
                <span class="comment-copy">Eu acho que fica melhor por como snippet do que refer&#234;ncia externa...</span>
                
                <div class="d-inline-flex ai-center">
&ndash;&nbsp;<a href="/users/64969/jefferson-quesado"
                                title="23.452 reputa&#xE7;&#xE3;o"
                                class="comment-user">Jefferson Quesado</a>
                </div>
                <span class="comment-date" dir="ltr">
                    <span class="v-visible-sr">Commented</span>
                    <span title='2018-04-29 21:40:15Z, Licen&#231;a: CC BY-SA 3.0' class='relativetime-clean'>29/04/2018 às 21:40</span>
                </span>
            </div>
        </div>
    </li>
    <li id="comment-599472" class="comment js-comment " data-comment-id="599472" data-comment-owner-id="64969" data-comment-score="0">
        <div class="js-comment-actions comment-actions">
            <div class="comment-score js-comment-score js-comment-edit-hide">
            </div>
        </div>
        <div class="comment-text  js-comment-text-and-form">
            <div class="comment-body js-comment-edit-hide">
                
                <span class="comment-copy">Aproveitando, os soquetes das l&#226;mpadas apagada e ligada s&#227;o distintos xD Pode me chamar de louco, mas me chamou a aten&#231;&#227;o imediatamente quando eu vi</span>
                
                <div class="d-inline-flex ai-center">
&ndash;&nbsp;<a href="/users/64969/jefferson-quesado"
                                title="23.452 reputa&#xE7;&#xE3;o"
                                class="comment-user">Jefferson Quesado</a>
                </div>
                <span class="comment-date" dir="ltr">
                    <span class="v-visible-sr">Commented</span>
                    <span title='2018-04-29 21:41:03Z, Licen&#231;a: CC BY-SA 3.0' class='relativetime-clean'>29/04/2018 às 21:41</span>
                </span>
            </div>
        </div>
    </li>
    <li id="comment-599473" class="comment js-comment " data-comment-id="599473" data-comment-owner-id="74441" data-comment-score="1">
        <div class="js-comment-actions comment-actions">
            <div class="comment-score js-comment-score js-comment-edit-hide">
                    <span title="n&#xFA;mero de votos para &#x27;coment&#xE1;rios &#xFA;teis&#x27; recebidos"
                            class="cool">1</span>
            </div>
        </div>
        <div class="comment-text  js-comment-text-and-form">
            <div class="comment-body js-comment-edit-hide">
                
                <span class="comment-copy">Agora a lampada esta feia, mas &#233; a mesma rsrs.</span>
                
                <div class="d-inline-flex ai-center">
&ndash;&nbsp;<a href="/users/74441/wictor-chaves"
                                title="8.646 reputa&#xE7;&#xE3;o"
                                class="comment-user">Wictor Chaves</a>
                </div>
                <span class="comment-date" dir="ltr">
                    <span class="v-visible-sr">Commented</span>
                    <span title='2018-04-29 21:45:26Z, Licen&#231;a: CC BY-SA 3.0' class='relativetime-clean'>29/04/2018 às 21:45</span>
                </span>
            </div>
        </div>
    </li>
    <li id="comment-599508" class="comment js-comment " data-comment-id="599508" data-comment-owner-id="54880" data-comment-score="1">
        <div class="js-comment-actions comment-actions">
            <div class="comment-score js-comment-score js-comment-edit-hide">
                    <span title="n&#xFA;mero de votos para &#x27;coment&#xE1;rios &#xFA;teis&#x27; recebidos"
                            class="cool">1</span>
            </div>
        </div>
        <div class="comment-text  js-comment-text-and-form">
            <div class="comment-body js-comment-edit-hide">
                
                <span class="comment-copy">Eu coloquei no pr&#243;prio Snippet !!!</span>
                
                <div class="d-inline-flex ai-center">
&ndash;&nbsp;<a href="/users/54880/novic"
                                title="36.682 reputa&#xE7;&#xE3;o"
                                class="comment-user">novic</a>
                </div>
                <span class="comment-date" dir="ltr">
                    <span class="v-visible-sr">Commented</span>
                    <span title='2018-04-29 23:48:27Z, Licen&#231;a: CC BY-SA 3.0' class='relativetime-clean'>29/04/2018 às 23:48</span>
                </span>
                        <span title="Este coment&#xE1;rio foi editado 1 vez">
                            <svg aria-hidden="true" class="va-text-bottom o50 svg-icon iconPencilSm" width="14" height="14"  viewBox="0 0 14 14"><path fill="#F1B600" d="m2 10.12 6.37-6.43 1.88 1.88L3.88 12H2z"/><path fill="#E87C87" d="m11.1 1.71 1.13 1.12c.2.2.2.51 0 .71L11.1 4.7 9.21 2.86l1.17-1.15c.2-.2.51-.2.71 0"/></svg>
                        </span>
            </div>
        </div>
    </li>
    <li id="comment-599510" class="comment js-comment " data-comment-id="599510" data-comment-owner-id="74441" data-comment-score="2">
        <div class="js-comment-actions comment-actions">
            <div class="comment-score js-comment-score js-comment-edit-hide">
                    <span title="n&#xFA;mero de votos para &#x27;coment&#xE1;rios &#xFA;teis&#x27; recebidos"
                            class="cool">2</span>
            </div>
        </div>
        <div class="comment-text  js-comment-text-and-form">
            <div class="comment-body js-comment-edit-hide">
                
                <span class="comment-copy">Obrigado @VirgilioNovic, eu n&#227;o sabia que este recurso se chamava Snippet, quando o &quot;Jefferson&quot; me falou isso, pesquisei aqui no google o significado e entendi que era outra coisa.</span>
                
                <div class="d-inline-flex ai-center">
&ndash;&nbsp;<a href="/users/74441/wictor-chaves"
                                title="8.646 reputa&#xE7;&#xE3;o"
                                class="comment-user">Wictor Chaves</a>
                </div>
                <span class="comment-date" dir="ltr">
                    <span class="v-visible-sr">Commented</span>
                    <span title='2018-04-29 23:53:40Z, Licen&#231;a: CC BY-SA 3.0' class='relativetime-clean'>29/04/2018 às 23:53</span>
                </span>
            </div>
        </div>
    </li>

            </ul>
	    </div>

        <div id="comments-link-295011" data-rep=50 data-anon=true>
                    <a class="js-add-link comments-link dno" title="Use coment&#xE1;rios para pedir mais informa&#xE7;&#xF5;es ou sugerir melhorias. Evite coment&#xE1;rios como &#x201C;&#x2B;1&#x201D; ou &#x201C;obrigado&#x201D;."  href="#" role="button"></a>
                <span class="js-link-separator dno">&nbsp;|&nbsp;</span>
            <a class="js-show-link comments-link " title="ver todos os coment&#xE1;rios desta publica&#xE7;&#xE3;o" href=# onclick="" role="button">Mostrar mais <b>2</b> coment&#225;rios</a>
        </div>         
    </div>
    </div>
</div>

<div class="js-zone-container zone-container-main">
    <div id="dfp-mlb" class="everyonelovesstackoverflow everyoneloves__mid-leaderboard everyoneloves__leaderboard"></div>
		<div class="js-report-ad-button-container " style="width: 728px"></div>
</div>
                                    
<a name="295111"></a>
<div id="answer-295111" class="answer js-answer" data-answerid="295111" data-parentid="295004" data-score="3" data-position-on-page="2" data-highest-scored="0" data-question-has-accepted-highest-score="0"  itemprop="suggestedAnswer" itemscope itemtype="https://schema.org/Answer">
    <div class="post-layout">
        <div class="votecell post-layout--left">
            

<div class="js-voting-container d-flex jc-center fd-column ai-center gs4 fc-black-300" data-post-id="295111" data-referrer="None">
        <button class="js-vote-up-btn flex--item s-btn s-btn__muted s-btn__outlined bar-pill bc-black-225 f:bc-theme-secondary-400 f:bg-theme-secondary-400 f:fc-black-050 h:bg-theme-primary-200"
                data-controller="s-tooltip"
                data-s-tooltip-placement="right"
                title="Esta resposta &#xE9; &#xFA;til"
                aria-pressed="false"
                aria-label="Up vote"
                data-selected-classes="fc-theme-primary bc-theme-primary bg-theme-primary-100"
                data-unselected-classes="bc-black-225 f:bc-theme-secondary-400 f:bg-theme-secondary-400 f:fc-black-050 h:bg-theme-primary-200">
            <svg aria-hidden="true" class="svg-icon iconArrowUp" width="18" height="18"  viewBox="0 0 18 18"><path  d="M1 12h16L9 4z"/></svg>
        </button>
        <input type="hidden" id="voteUpHash" value="68:3:31e,16:97efb69951750053,10:1723991229,16:0fd5c0993eb9c2b9,6:295111,8b945d7e88cc95890683492a6e13e000fd4cd1e5190c20ab89860f9b7959fe94" />
        <div class="js-vote-count flex--item d-flex fd-column ai-center fc-theme-body-font fw-bold fs-subheading py4"
             itemprop="upvoteCount"
             data-value="3">
            3
        </div>
        <button
                class="js-vote-down-btn flex--item mb8 s-btn s-btn__muted s-btn__outlined bar-pill bc-black-225 f:bc-theme-secondary-400 f:bg-theme-secondary-400 f:fc-black-050 h:bg-theme-primary-200"
                title="Esta resposta n&#xE3;o &#xE9; &#xFA;til"
                aria-pressed="false"
                aria-label="Down vote"
                data-selected-classes="fc-theme-primary bc-theme-primary bg-theme-primary-100"
                data-unselected-classes="bc-black-225 f:bc-theme-secondary-400 f:bg-theme-secondary-400 f:fc-black-050 h:bg-theme-primary-200">
            <svg aria-hidden="true" class="svg-icon iconArrowDown" width="18" height="18"  viewBox="0 0 18 18"><path  d="M1 6h16l-8 8z"/></svg>
        </button>
        <input type="hidden" id="voteDownHash" value="68:3:31e,16:2c4f75a3f2b3e319,10:1723991229,16:d7d109808f44a14a,6:295111,97170389934080cdbd0c3d4323a55060c94a0dda6c86455cf25c7b76796e8580" />


        
<button class="js-saves-btn s-btn s-btn__unset c-pointer py4"
        type="button"
        id="saves-btn-295111"
        data-controller="s-tooltip"
        data-s-tooltip-placement="right"
        data-s-popover-placement=""
        title="Save this answer."
        aria-pressed="false"
        data-post-id="295111"
        data-post-type-id="2"
        data-user-privilege-for-post-click="0"
        aria-controls=""
        data-s-popover-auto-show="false"
>
    <svg aria-hidden="true" class="fc-theme-primary-400 js-saves-btn-selected d-none svg-icon iconBookmark" width="18" height="18"  viewBox="0 0 18 18"><path  d="M3 17V3c0-1.1.9-2 2-2h8a2 2 0 0 1 2 2v14l-6-4z"/></svg>
    <svg aria-hidden="true" class="js-saves-btn-unselected svg-icon iconBookmarkAlt" width="18" height="18"  viewBox="0 0 18 18"><path  d="m9 10.6 4 2.66V3H5v10.26zM3 17V3c0-1.1.9-2 2-2h8a2 2 0 0 1 2 2v14l-6-4z"/></svg>
</button>







            <div class="js-accepted-answer-indicator flex--item fc-green-400 py6 mtn8 d-none" data-s-tooltip-placement="right" title="Carregando quando esta resposta foi aceita&#x2026;" tabindex="0" role="note" aria-label="Aceito">
                <div class="ta-center">
                    <svg aria-hidden="true" class="svg-icon iconCheckmarkLg" width="36" height="36"  viewBox="0 0 36 36"><path  d="m6 14 8 8L30 6v8L14 30l-8-8z"/></svg>
                </div>
            </div>

    
    <a class="js-post-issue flex--item s-btn s-btn__unset c-pointer py6 mx-auto" href="/posts/295111/timeline" data-shortcut="T" data-ks-title="linha do tempo" data-controller="s-tooltip" data-s-tooltip-placement="right" title="Exibir atividade dessa publica&#xE7;&#xE3;o" aria-label="Linha do tempo"><svg aria-hidden="true" class="mln2 mr0 svg-icon iconHistory" width="19" height="18"  viewBox="0 0 19 18"><path  d="M3 9a8 8 0 1 1 3.73 6.77L8.2 14.3A6 6 0 1 0 5 9l3.01-.01-4 4-4-4zm7-4h1.01L11 9.36l3.22 2.1-.6.93L10 10z"/></svg></a>

</div>

        </div>

        

<div class="answercell post-layout--right">
    
    <div class="s-prose js-post-body" itemprop="text">
<blockquote>
  <p>Let`s Go!</p>
</blockquote>

<p><div class="snippet" data-lang="js" data-hide="false" data-console="true" data-babel="false">
<div class="snippet-code">
<pre class="snippet-code-js lang-js prettyprint-override"><code>$('.cube-switch .switch').click(function() {
    if ($('.cube-switch').hasClass('active')) {
        $('.cube-switch').removeClass('active');
        $('#light-bulb2').css({'opacity': '0'});
    } else {
        $('.cube-switch').addClass('active');
        $('#light-bulb2').css({'opacity': '1'});
    }
});</code></pre>
<pre class="snippet-code-css lang-css prettyprint-override"><code>body {
  background: rgb(70, 72, 75);
}

/* SWITCH */
.cube-switch {
    border-radius:10px;
    border:1px solid rgba(0,0,0,0.4);
    box-shadow: 0 0 8px rgba(0,0,0,0.6), inset 0 100px 50px rgba(255,255,255,0.1);
    /* Prevents clics on the back */
    cursor:default;    
    display: block;
    height: 100px;
    position: relative;
    margin: 5% 0px 0px 10%;
    overflow:hidden;
    /* Prevents clics on the back */
    pointer-events:none;
    width: 100px;
    white-space: nowrap;
    background:#333;
}

/* The switch */
.cube-switch .switch {
    border:1px solid rgba(0,0,0,0.6);
    border-radius:0.7em;
    box-shadow:
    inset 0 1px 0 rgba(255,255,255,0.3),
    inset 0 -7px 0 rgba(0,0,0,0.2),
    inset 0 50px 10px rgba(0,0,0,0.2),
    0 1px 0 rgba(255,255,255,0.2);
    display:block;
    width: 60px;
    height: 60px;
    margin-left:-30px;
    margin-top:-30px;
    position:absolute;
    top: 50%;
    left: 50%;
    width: 60px;
 
    background:#666;
    transition: all 0.2s ease-out;

    /* Allows click */
    cursor:pointer;
    pointer-events:auto;
}

/* SWITCH Active State */
.cube-switch.active {
    /*background:#222;
    box-shadow:
    0 0 5px rgba(0,0,0,0.5),
    inset 0 50px 50px rgba(55,55,55,0.1);*/
}

.cube-switch.active .switch {
    background:#333;
    box-shadow:
    inset 0 6px 0 rgba(255,255,255,0.1),
    inset 0 7px 0 rgba(0,0,0,0.2),
    inset 0 -50px 10px rgba(0,0,0,0.1),
    0 1px 0 rgba(205,205,205,0.1);
}

.cube-switch.active:after,
.cube-switch.active:before {
    background:#333; 
    box-shadow:
    0 1px 0 rgba(255,255,255,0.1),
    inset 1px 2px 1px rgba(0,0,0,0.5),
    inset 3px 6px 2px rgba(200,200,200,0.1),
    inset -1px -2px 1px rgba(0,0,0,0.3);
}

.cube-switch.active .switch:after,
.cube-switch.active .switch:before {
    background:#222;
    border:none;
    margin-top:0;
    height:1px;
}

.cube-switch .switch-state {
    display: block;
    position: absolute;
    left: 40%;
    color: #FFF;

    font-size: .5em;
    text-align: center;
}

/* SWITCH On State */
.cube-switch .switch-state.on {
    bottom: 15%;
}

/* SWITCH Off State */
.cube-switch .switch-state.off {
    top: 15%;
}

#light-bulb2 {
width: 150px;
height: 150px;
background: url(https://lh4.googleusercontent.com/-katLGTSCm2Q/UJC0_N7XCrI/AAAAAAAABq0/6GxNfNW-Ra4/s300/lightbulb.png) no-repeat 0 0;
}

#light-bulb {
position: absolute;
width: 150px;
height: 150px;
top: 5%;
left: 40%;
background: url(https://lh4.googleusercontent.com/-katLGTSCm2Q/UJC0_N7XCrI/AAAAAAAABq0/6GxNfNW-Ra4/s300/lightbulb.png) no-repeat -150px 0;
cursor: move;
z-index: 800;
}</code></pre>
<pre class="snippet-code-html lang-html prettyprint-override"><code>&lt;script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"&gt;&lt;/script&gt;
&lt;div href="" class="cube-switch"&gt;
        &lt;span class="switch"&gt;
            &lt;span class="switch-state off"&gt;Off&lt;/span&gt;
            &lt;span class="switch-state on"&gt;On&lt;/span&gt;
        &lt;/span&gt;
&lt;/div&gt;
&lt;div id="light-bulb" class="off ui-draggable" &gt;&lt;div id="light-bulb2" style="opacity: 0; "&gt;&lt;/div&gt;&lt;/div&gt;</code></pre>
</div>
</div>
</p>
    </div>
    <div class="mt24">
        <div class="d-flex fw-wrap ai-start jc-end gs8 gsy">
            <time itemprop="dateCreated" datetime="2018-04-30T13:47:57"></time>
            <div class="flex--item mr16" style="flex: 1 1 100px;">
                


<div class="js-post-menu pt2" data-post-id="295111" data-post-type-id="2">

    <div class="d-flex gs8 s-anchors s-anchors__muted fw-wrap">

        <div class="flex--item">
            <a href="/a/295111"
               rel="nofollow"
               itemprop="url"
               class="js-share-link js-gps-track"
               title="permalink curto para esta resposta"
               data-gps-track="post.click({ item: 2, priv: 0, post_type: 2 })"
               data-controller="se-share-sheet"
               data-se-share-sheet-title="Compartilhe um link para esta resposta"
               data-se-share-sheet-subtitle=""
               data-se-share-sheet-post-type="answer"
               data-se-share-sheet-social="facebook twitter "
               data-se-share-sheet-location="2"
               data-se-share-sheet-license-url="https%3a%2f%2fcreativecommons.org%2flicenses%2fby-sa%2f3.0%2f"
               data-se-share-sheet-license-name="CC BY-SA 3.0"
               data-s-popover-placement="bottom-start">Compartilhar</a>
        </div>


                    <div class="flex--item">
                        <a href="/posts/295111/edit" class="js-suggest-edit-post js-gps-track" data-gps-track="post.click({ item: 6, priv: 0, post_type: 2 })" title="">Melhore esta resposta</a>
                    </div>

                <div class="flex--item">
                    <button type="button"
                            id="btnFollowPost-295111" class="s-btn s-btn__link js-follow-post js-follow-answer js-gps-track"
                            data-gps-track="post.click({ item: 14, priv: 0, post_type: 2 })"
                            data-controller="s-tooltip " data-s-tooltip-placement="bottom"
                            data-s-popover-placement="bottom" aria-controls=""
                            title="Siga esta resposta para receber notifica&#xE7;&#xF5;es">
                        Seguir
                        <input type="hidden" id="voteFollowHash" value="68:3:31e,16:0e3fea9196c723a6,10:1723991229,16:016bd359799762a1,6:295111,2492eeb9fc0625487c1a76a56c407a5c78dd2ffb011d4af62f55143538dcc93c" />
                    </button>
                </div>






    </div>
    <div class="js-menu-popup-container"></div>
</div>
            </div>


            <div class="post-signature flex--item fl0">
                <div class="user-info user-hover ">
    <div class="d-flex ">
        <div class="user-action-time fl-grow1">
            respondida <span title='2018-04-30 13:47:57Z' class='relativetime'>30/04/2018 às 13:47</span>
        </div>
        
    </div>
    <div class="user-gravatar32">
        <a href="/users/18077/lollipop"><div class="gravatar-wrapper-32"><img src="https://i.sstatic.net/rguvm.jpg?s=64" alt="Lollipop&#39;s user avatar" width="32" height="32" class="bar-sm"></div></a>
    </div>
    <div class="user-details" itemprop="author" itemscope itemtype="http://schema.org/Person">
        <a href="/users/18077/lollipop">Lollipop</a><span class="d-none" itemprop="name">Lollipop</span>
        <div class="-flair">
            <span class="reputation-score" title="pontos de reputação " dir="ltr">4.994</span><span title="2 medalhas de ouro" aria-hidden="true"><span class="badge1"></span><span class="badgecount">2</span></span><span class="v-visible-sr">2 medalhas de ouro</span><span title="23 medalhas de prata" aria-hidden="true"><span class="badge2"></span><span class="badgecount">23</span></span><span class="v-visible-sr">23 medalhas de prata</span><span title="48 medalhas de bronze" aria-hidden="true"><span class="badge3"></span><span class="badgecount">48</span></span><span class="v-visible-sr">48 medalhas de bronze</span>
        </div>
    </div>
</div>


            </div>
        </div>
        
    
    </div>
    
</div>




            <span class="d-none" itemprop="commentCount"></span> 
    <div class="post-layout--right js-post-comments-component">
        <div id="comments-295111" class="comments js-comments-container bt bc-black-200 mt12  dno" data-post-id="295111" data-min-length="15">
            <ul class="comments-list js-comments-list"
                    data-remaining-comments-count="0"
                    data-canpost="false"
                    data-cansee="true"
                    data-comments-unavailable="false"
                    data-addlink-disabled="true">

            </ul>
	    </div>

        <div id="comments-link-295111" data-rep=50 data-anon=true>
                    <a class="js-add-link comments-link disabled-link" title="Use coment&#xE1;rios para pedir mais informa&#xE7;&#xF5;es ou sugerir melhorias. Evite coment&#xE1;rios como &#x201C;&#x2B;1&#x201D; ou &#x201C;obrigado&#x201D;."  href="#" role="button">Adicione um coment&#xE1;rio</a>
                <span class="js-link-separator dno">&nbsp;|&nbsp;</span>
            <a class="js-show-link comments-link dno" title="ver todos os coment&#xE1;rios desta publica&#xE7;&#xE3;o" href=# onclick="" role="button"></a>
        </div>         
    </div>
    </div>
</div>

                                    
<a name="295214"></a>
<div id="answer-295214" class="answer js-answer" data-answerid="295214" data-parentid="295004" data-score="1" data-position-on-page="3" data-highest-scored="0" data-question-has-accepted-highest-score="0"  itemprop="suggestedAnswer" itemscope itemtype="https://schema.org/Answer">
    <div class="post-layout">
        <div class="votecell post-layout--left">
            

<div class="js-voting-container d-flex jc-center fd-column ai-center gs4 fc-black-300" data-post-id="295214" data-referrer="None">
        <button class="js-vote-up-btn flex--item s-btn s-btn__muted s-btn__outlined bar-pill bc-black-225 f:bc-theme-secondary-400 f:bg-theme-secondary-400 f:fc-black-050 h:bg-theme-primary-200"
                data-controller="s-tooltip"
                data-s-tooltip-placement="right"
                title="Esta resposta &#xE9; &#xFA;til"
                aria-pressed="false"
                aria-label="Up vote"
                data-selected-classes="fc-theme-primary bc-theme-primary bg-theme-primary-100"
                data-unselected-classes="bc-black-225 f:bc-theme-secondary-400 f:bg-theme-secondary-400 f:fc-black-050 h:bg-theme-primary-200">
            <svg aria-hidden="true" class="svg-icon iconArrowUp" width="18" height="18"  viewBox="0 0 18 18"><path  d="M1 12h16L9 4z"/></svg>
        </button>
        <input type="hidden" id="voteUpHash" value="68:3:31e,16:0cdc77572dfb0766,10:1723991229,16:661cc25715b03a10,6:295214,10cfb584fabf0088577499bc5d53f0df8cd8927c65933b96e572b5185b554322" />
        <div class="js-vote-count flex--item d-flex fd-column ai-center fc-theme-body-font fw-bold fs-subheading py4"
             itemprop="upvoteCount"
             data-value="1">
            1
        </div>
        <button
                class="js-vote-down-btn flex--item mb8 s-btn s-btn__muted s-btn__outlined bar-pill bc-black-225 f:bc-theme-secondary-400 f:bg-theme-secondary-400 f:fc-black-050 h:bg-theme-primary-200"
                title="Esta resposta n&#xE3;o &#xE9; &#xFA;til"
                aria-pressed="false"
                aria-label="Down vote"
                data-selected-classes="fc-theme-primary bc-theme-primary bg-theme-primary-100"
                data-unselected-classes="bc-black-225 f:bc-theme-secondary-400 f:bg-theme-secondary-400 f:fc-black-050 h:bg-theme-primary-200">
            <svg aria-hidden="true" class="svg-icon iconArrowDown" width="18" height="18"  viewBox="0 0 18 18"><path  d="M1 6h16l-8 8z"/></svg>
        </button>
        <input type="hidden" id="voteDownHash" value="68:3:31e,16:30409e4e7e237411,10:1723991229,16:d959b76a3708b56d,6:295214,71e39e24372fa43015f28f6b801a513d0f5069ecb1bf988338d44d3768454645" />


        
<button class="js-saves-btn s-btn s-btn__unset c-pointer py4"
        type="button"
        id="saves-btn-295214"
        data-controller="s-tooltip"
        data-s-tooltip-placement="right"
        data-s-popover-placement=""
        title="Save this answer."
        aria-pressed="false"
        data-post-id="295214"
        data-post-type-id="2"
        data-user-privilege-for-post-click="0"
        aria-controls=""
        data-s-popover-auto-show="false"
>
    <svg aria-hidden="true" class="fc-theme-primary-400 js-saves-btn-selected d-none svg-icon iconBookmark" width="18" height="18"  viewBox="0 0 18 18"><path  d="M3 17V3c0-1.1.9-2 2-2h8a2 2 0 0 1 2 2v14l-6-4z"/></svg>
    <svg aria-hidden="true" class="js-saves-btn-unselected svg-icon iconBookmarkAlt" width="18" height="18"  viewBox="0 0 18 18"><path  d="m9 10.6 4 2.66V3H5v10.26zM3 17V3c0-1.1.9-2 2-2h8a2 2 0 0 1 2 2v14l-6-4z"/></svg>
</button>







            <div class="js-accepted-answer-indicator flex--item fc-green-400 py6 mtn8 d-none" data-s-tooltip-placement="right" title="Carregando quando esta resposta foi aceita&#x2026;" tabindex="0" role="note" aria-label="Aceito">
                <div class="ta-center">
                    <svg aria-hidden="true" class="svg-icon iconCheckmarkLg" width="36" height="36"  viewBox="0 0 36 36"><path  d="m6 14 8 8L30 6v8L14 30l-8-8z"/></svg>
                </div>
            </div>

    
    <a class="js-post-issue flex--item s-btn s-btn__unset c-pointer py6 mx-auto" href="/posts/295214/timeline" data-shortcut="T" data-ks-title="linha do tempo" data-controller="s-tooltip" data-s-tooltip-placement="right" title="Exibir atividade dessa publica&#xE7;&#xE3;o" aria-label="Linha do tempo"><svg aria-hidden="true" class="mln2 mr0 svg-icon iconHistory" width="19" height="18"  viewBox="0 0 19 18"><path  d="M3 9a8 8 0 1 1 3.73 6.77L8.2 14.3A6 6 0 1 0 5 9l3.01-.01-4 4-4-4zm7-4h1.01L11 9.36l3.22 2.1-.6.93L10 10z"/></svg></a>

</div>

        </div>

        

<div class="answercell post-layout--right">
    
    <div class="s-prose js-post-body" itemprop="text">
<p>Acredito que isso faça o que você precisa:</p>

<pre><code>function liga_desliga(){

    const lamp = document.querySelector('#lamp');

    var src = ['lampada-on.jpg','lampada-off.jpg']
        .filter((value) =&gt; {
            var a = lamp.src.match(/\/(lampada-.+)/i)[1];
            return value != a;
        })[0];
    lamp.src = `images/${src}`;

}
</code></pre>
    </div>
    <div class="mt24">
        <div class="d-flex fw-wrap ai-start jc-end gs8 gsy">
            <time itemprop="dateCreated" datetime="2018-04-30T19:19:44"></time>
            <div class="flex--item mr16" style="flex: 1 1 100px;">
                


<div class="js-post-menu pt2" data-post-id="295214" data-post-type-id="2">

    <div class="d-flex gs8 s-anchors s-anchors__muted fw-wrap">

        <div class="flex--item">
            <a href="/a/295214"
               rel="nofollow"
               itemprop="url"
               class="js-share-link js-gps-track"
               title="permalink curto para esta resposta"
               data-gps-track="post.click({ item: 2, priv: 0, post_type: 2 })"
               data-controller="se-share-sheet"
               data-se-share-sheet-title="Compartilhe um link para esta resposta"
               data-se-share-sheet-subtitle=""
               data-se-share-sheet-post-type="answer"
               data-se-share-sheet-social="facebook twitter "
               data-se-share-sheet-location="2"
               data-se-share-sheet-license-url="https%3a%2f%2fcreativecommons.org%2flicenses%2fby-sa%2f3.0%2f"
               data-se-share-sheet-license-name="CC BY-SA 3.0"
               data-s-popover-placement="bottom-start">Compartilhar</a>
        </div>


                    <div class="flex--item">
                        <a href="/posts/295214/edit" class="js-suggest-edit-post js-gps-track" data-gps-track="post.click({ item: 6, priv: 0, post_type: 2 })" title="">Melhore esta resposta</a>
                    </div>

                <div class="flex--item">
                    <button type="button"
                            id="btnFollowPost-295214" class="s-btn s-btn__link js-follow-post js-follow-answer js-gps-track"
                            data-gps-track="post.click({ item: 14, priv: 0, post_type: 2 })"
                            data-controller="s-tooltip " data-s-tooltip-placement="bottom"
                            data-s-popover-placement="bottom" aria-controls=""
                            title="Siga esta resposta para receber notifica&#xE7;&#xF5;es">
                        Seguir
                        <input type="hidden" id="voteFollowHash" value="68:3:31e,16:cb6024a444267358,10:1723991229,16:02b560fb53bb24e9,6:295214,5db260953f18a14d9863318817a33b2d01560f03ad53027a59d90cff2a1dd133" />
                    </button>
                </div>






    </div>
    <div class="js-menu-popup-container"></div>
</div>
            </div>


            <div class="post-signature flex--item fl0">
                <div class="user-info ">
    <div class="d-flex ">
        <div class="user-action-time fl-grow1">
            respondida <span title='2018-04-30 19:19:44Z' class='relativetime'>30/04/2018 às 19:19</span>
        </div>
        
    </div>
    <div class="user-gravatar32">
        <a href="/users/111792/gabriel-minatto"><div class="gravatar-wrapper-32"><img src="https://www.gravatar.com/avatar/2f7ec457a21dd12419e5459b992e7fe0?s=64&amp;d=identicon&amp;r=PG" alt="Gabriel Minatto&#39;s user avatar" width="32" height="32" class="bar-sm"></div></a>
    </div>
    <div class="user-details" itemprop="author" itemscope itemtype="http://schema.org/Person">
        <a href="/users/111792/gabriel-minatto">Gabriel Minatto</a><span class="d-none" itemprop="name">Gabriel Minatto</span>
        <div class="-flair">
            <span class="reputation-score" title="pontos de reputação " dir="ltr">11</span><span title="1 medalhas de bronze" aria-hidden="true"><span class="badge3"></span><span class="badgecount">1</span></span><span class="v-visible-sr">1 medalhas de bronze</span>
        </div>
    </div>
</div>


            </div>
        </div>
        
    
    </div>
    
</div>




            <span class="d-none" itemprop="commentCount">2</span> 
    <div class="post-layout--right js-post-comments-component">
        <div id="comments-295214" class="comments js-comments-container bt bc-black-200 mt12 " data-post-id="295214" data-min-length="15">
            <ul class="comments-list js-comments-list"
                    data-remaining-comments-count="0"
                    data-canpost="false"
                    data-cansee="true"
                    data-comments-unavailable="false"
                    data-addlink-disabled="true">

                        <li id="comment-599920" class="comment js-comment " data-comment-id="599920" data-comment-owner-id="97477" data-comment-score="0">
        <div class="js-comment-actions comment-actions">
            <div class="comment-score js-comment-score js-comment-edit-hide">
            </div>
        </div>
        <div class="comment-text  js-comment-text-and-form">
            <div class="comment-body js-comment-edit-hide">
                
                <span class="comment-copy">Fazer s&#243; com CSS &#233; uma op&#231;&#227;o para vc ou como vc est&#225; estudando tem que ser com Script mesmo?</span>
                
                <div class="d-inline-flex ai-center">
&ndash;&nbsp;<a href="/users/97477/hugocsl"
                                title="66.854 reputa&#xE7;&#xE3;o"
                                class="comment-user">hugocsl</a>
                </div>
                <span class="comment-date" dir="ltr">
                    <span class="v-visible-sr">Commented</span>
                    <span title='2018-04-30 19:53:34Z, Licen&#231;a: CC BY-SA 3.0' class='relativetime-clean'>30/04/2018 às 19:53</span>
                </span>
            </div>
        </div>
    </li>
    <li id="comment-600167" class="comment js-comment " data-comment-id="600167" data-comment-owner-id="109797" data-comment-score="0">
        <div class="js-comment-actions comment-actions">
            <div class="comment-score js-comment-score js-comment-edit-hide">
            </div>
        </div>
        <div class="comment-text  js-comment-text-and-form">
            <div class="comment-body js-comment-edit-hide">
                
                <span class="comment-copy">Eu estou estudando javascript mesmo puro e n&#227;o jQuery</span>
                
                <div class="d-inline-flex ai-center">
&ndash;&nbsp;<a href="/users/109797/arisson"
                                title="21 reputa&#xE7;&#xE3;o"
                                class="comment-user owner">Arisson</a>
                </div>
                <span class="comment-date" dir="ltr">
                    <span class="v-visible-sr">Commented</span>
                    <span title='2018-05-01 14:31:54Z, Licen&#231;a: CC BY-SA 3.0' class='relativetime-clean'>1/05/2018 às 14:31</span>
                </span>
            </div>
        </div>
    </li>

            </ul>
	    </div>

        <div id="comments-link-295214" data-rep=50 data-anon=true>
                    <a class="js-add-link comments-link disabled-link" title="Use coment&#xE1;rios para pedir mais informa&#xE7;&#xF5;es ou sugerir melhorias. Evite coment&#xE1;rios como &#x201C;&#x2B;1&#x201D; ou &#x201C;obrigado&#x201D;."  href="#" role="button">Adicione um coment&#xE1;rio</a>
                <span class="js-link-separator dno">&nbsp;|&nbsp;</span>
            <a class="js-show-link comments-link dno" title="ver todos os coment&#xE1;rios desta publica&#xE7;&#xE3;o" href=# onclick="" role="button"></a>
        </div>         
    </div>
    </div>
</div>

<div class="js-zone-container zone-container-main">
    <div id="dfp-smlb" class="everyonelovesstackoverflow everyoneloves__mid-second-leaderboard everyoneloves__leaderboard"></div>
		<div class="js-report-ad-button-container " style="width: 728px"></div>
</div>
                                    
<a name="295525"></a>
<div id="answer-295525" class="answer js-answer" data-answerid="295525" data-parentid="295004" data-score="1" data-position-on-page="4" data-highest-scored="0" data-question-has-accepted-highest-score="0"  itemprop="suggestedAnswer" itemscope itemtype="https://schema.org/Answer">
    <div class="post-layout">
        <div class="votecell post-layout--left">
            

<div class="js-voting-container d-flex jc-center fd-column ai-center gs4 fc-black-300" data-post-id="295525" data-referrer="None">
        <button class="js-vote-up-btn flex--item s-btn s-btn__muted s-btn__outlined bar-pill bc-black-225 f:bc-theme-secondary-400 f:bg-theme-secondary-400 f:fc-black-050 h:bg-theme-primary-200"
                data-controller="s-tooltip"
                data-s-tooltip-placement="right"
                title="Esta resposta &#xE9; &#xFA;til"
                aria-pressed="false"
                aria-label="Up vote"
                data-selected-classes="fc-theme-primary bc-theme-primary bg-theme-primary-100"
                data-unselected-classes="bc-black-225 f:bc-theme-secondary-400 f:bg-theme-secondary-400 f:fc-black-050 h:bg-theme-primary-200">
            <svg aria-hidden="true" class="svg-icon iconArrowUp" width="18" height="18"  viewBox="0 0 18 18"><path  d="M1 12h16L9 4z"/></svg>
        </button>
        <input type="hidden" id="voteUpHash" value="68:3:31e,16:0596a1f49fc33e2f,10:1723991229,16:c94bf466c50d9975,6:295525,5cfdf722a8a9f21cbc90c7a7c81f917667c37cf5e837252cac08cda3ff4b2e26" />
        <div class="js-vote-count flex--item d-flex fd-column ai-center fc-theme-body-font fw-bold fs-subheading py4"
             itemprop="upvoteCount"
             data-value="1">
            1
        </div>
        <button
                class="js-vote-down-btn flex--item mb8 s-btn s-btn__muted s-btn__outlined bar-pill bc-black-225 f:bc-theme-secondary-400 f:bg-theme-secondary-400 f:fc-black-050 h:bg-theme-primary-200"
                title="Esta resposta n&#xE3;o &#xE9; &#xFA;til"
                aria-pressed="false"
                aria-label="Down vote"
                data-selected-classes="fc-theme-primary bc-theme-primary bg-theme-primary-100"
                data-unselected-classes="bc-black-225 f:bc-theme-secondary-400 f:bg-theme-secondary-400 f:fc-black-050 h:bg-theme-primary-200">
            <svg aria-hidden="true" class="svg-icon iconArrowDown" width="18" height="18"  viewBox="0 0 18 18"><path  d="M1 6h16l-8 8z"/></svg>
        </button>
        <input type="hidden" id="voteDownHash" value="68:3:31e,16:2698ed552303dd5a,10:1723991229,16:c4bdd8fb900f0e3d,6:295525,ccbe781e604d372c29c8144aa15ffde9951795b9e42ba34bc4d344d456a0cce9" />


        
<button class="js-saves-btn s-btn s-btn__unset c-pointer py4"
        type="button"
        id="saves-btn-295525"
        data-controller="s-tooltip"
        data-s-tooltip-placement="right"
        data-s-popover-placement=""
        title="Save this answer."
        aria-pressed="false"
        data-post-id="295525"
        data-post-type-id="2"
        data-user-privilege-for-post-click="0"
        aria-controls=""
        data-s-popover-auto-show="false"
>
    <svg aria-hidden="true" class="fc-theme-primary-400 js-saves-btn-selected d-none svg-icon iconBookmark" width="18" height="18"  viewBox="0 0 18 18"><path  d="M3 17V3c0-1.1.9-2 2-2h8a2 2 0 0 1 2 2v14l-6-4z"/></svg>
    <svg aria-hidden="true" class="js-saves-btn-unselected svg-icon iconBookmarkAlt" width="18" height="18"  viewBox="0 0 18 18"><path  d="m9 10.6 4 2.66V3H5v10.26zM3 17V3c0-1.1.9-2 2-2h8a2 2 0 0 1 2 2v14l-6-4z"/></svg>
</button>







            <div class="js-accepted-answer-indicator flex--item fc-green-400 py6 mtn8 d-none" data-s-tooltip-placement="right" title="Carregando quando esta resposta foi aceita&#x2026;" tabindex="0" role="note" aria-label="Aceito">
                <div class="ta-center">
                    <svg aria-hidden="true" class="svg-icon iconCheckmarkLg" width="36" height="36"  viewBox="0 0 36 36"><path  d="m6 14 8 8L30 6v8L14 30l-8-8z"/></svg>
                </div>
            </div>

    
    <a class="js-post-issue flex--item s-btn s-btn__unset c-pointer py6 mx-auto" href="/posts/295525/timeline" data-shortcut="T" data-ks-title="linha do tempo" data-controller="s-tooltip" data-s-tooltip-placement="right" title="Exibir atividade dessa publica&#xE7;&#xE3;o" aria-label="Linha do tempo"><svg aria-hidden="true" class="mln2 mr0 svg-icon iconHistory" width="19" height="18"  viewBox="0 0 19 18"><path  d="M3 9a8 8 0 1 1 3.73 6.77L8.2 14.3A6 6 0 1 0 5 9l3.01-.01-4 4-4-4zm7-4h1.01L11 9.36l3.22 2.1-.6.93L10 10z"/></svg></a>

</div>

        </div>

        

<div class="answercell post-layout--right">
    
    <div class="s-prose js-post-body" itemprop="text">
<p>Você pode fazer um código parecido com o meu para alterar a imagem da lâmpada.</p>

<pre><code>&lt;script&gt;

    var atual_state = 'DESLIGADA';

    function mudaEstado() {
        atual_state === 'DESLIGADA' ? atual_state = 'LIGADA' : atual_state = 'DESLIGADA';
        return atual_state;
    }

    function ligaDesliga() {

        if (atual_state === 'DESLIGADA')
            document.getElementById('lampada').src = 'ligada.jpg';
        else
            document.getElementById('lampada').src = 'desligada.jpg';


        mudaEstado();

    }
&lt;/script&gt;

&lt;button onclick="ligaDesliga()"&gt;&lt;/button&gt;
&lt;img id="lampada" src="desligada.jpg"&gt;
</code></pre>
    </div>
    <div class="mt24">
        <div class="d-flex fw-wrap ai-start jc-end gs8 gsy">
            <time itemprop="dateCreated" datetime="2018-05-02T11:08:49"></time>
            <div class="flex--item mr16" style="flex: 1 1 100px;">
                


<div class="js-post-menu pt2" data-post-id="295525" data-post-type-id="2">

    <div class="d-flex gs8 s-anchors s-anchors__muted fw-wrap">

        <div class="flex--item">
            <a href="/a/295525"
               rel="nofollow"
               itemprop="url"
               class="js-share-link js-gps-track"
               title="permalink curto para esta resposta"
               data-gps-track="post.click({ item: 2, priv: 0, post_type: 2 })"
               data-controller="se-share-sheet"
               data-se-share-sheet-title="Compartilhe um link para esta resposta"
               data-se-share-sheet-subtitle=""
               data-se-share-sheet-post-type="answer"
               data-se-share-sheet-social="facebook twitter "
               data-se-share-sheet-location="2"
               data-se-share-sheet-license-url="https%3a%2f%2fcreativecommons.org%2flicenses%2fby-sa%2f4.0%2f"
               data-se-share-sheet-license-name="CC BY-SA 4.0"
               data-s-popover-placement="bottom-start">Compartilhar</a>
        </div>


                    <div class="flex--item">
                        <a href="/posts/295525/edit" class="js-suggest-edit-post js-gps-track" data-gps-track="post.click({ item: 6, priv: 0, post_type: 2 })" title="">Melhore esta resposta</a>
                    </div>

                <div class="flex--item">
                    <button type="button"
                            id="btnFollowPost-295525" class="s-btn s-btn__link js-follow-post js-follow-answer js-gps-track"
                            data-gps-track="post.click({ item: 14, priv: 0, post_type: 2 })"
                            data-controller="s-tooltip " data-s-tooltip-placement="bottom"
                            data-s-popover-placement="bottom" aria-controls=""
                            title="Siga esta resposta para receber notifica&#xE7;&#xF5;es">
                        Seguir
                        <input type="hidden" id="voteFollowHash" value="68:3:31e,16:115f1e67d0d5805c,10:1723991229,16:f1e1c4052f7ff3d4,6:295525,d5e2ca541a132cc42ea8bce10a276b417947e69b5415a845763c505c70b2f39c" />
                    </button>
                </div>






    </div>
    <div class="js-menu-popup-container"></div>
</div>
            </div>


            <div class="post-signature flex--item fl0">
                <div class="user-info user-hover ">
    <div class="d-flex ">
        <div class="user-action-time fl-grow1">
            respondida <span title='2018-05-02 11:08:49Z' class='relativetime'>2/05/2018 às 11:08</span>
        </div>
        
    </div>
    <div class="user-gravatar32">
        <a href="/users/89537/lucas-brogni"><div class="gravatar-wrapper-32"><img src="https://graph.facebook.com/1909090586081652/picture?type=large" alt="Lucas Brogni&#39;s user avatar" width="32" height="32" class="bar-sm"></div></a>
    </div>
    <div class="user-details" itemprop="author" itemscope itemtype="http://schema.org/Person">
        <a href="/users/89537/lucas-brogni">Lucas Brogni</a><span class="d-none" itemprop="name">Lucas Brogni</span>
        <div class="-flair">
            <span class="reputation-score" title="pontos de reputação " dir="ltr">1.009</span><span title="6 medalhas de prata" aria-hidden="true"><span class="badge2"></span><span class="badgecount">6</span></span><span class="v-visible-sr">6 medalhas de prata</span><span title="15 medalhas de bronze" aria-hidden="true"><span class="badge3"></span><span class="badgecount">15</span></span><span class="v-visible-sr">15 medalhas de bronze</span>
        </div>
    </div>
</div>


            </div>
        </div>
        
    
    </div>
    
</div>




            <span class="d-none" itemprop="commentCount"></span> 
    <div class="post-layout--right js-post-comments-component">
        <div id="comments-295525" class="comments js-comments-container bt bc-black-200 mt12  dno" data-post-id="295525" data-min-length="15">
            <ul class="comments-list js-comments-list"
                    data-remaining-comments-count="0"
                    data-canpost="false"
                    data-cansee="true"
                    data-comments-unavailable="false"
                    data-addlink-disabled="true">

            </ul>
	    </div>

        <div id="comments-link-295525" data-rep=50 data-anon=true>
                    <a class="js-add-link comments-link disabled-link" title="Use coment&#xE1;rios para pedir mais informa&#xE7;&#xF5;es ou sugerir melhorias. Evite coment&#xE1;rios como &#x201C;&#x2B;1&#x201D; ou &#x201C;obrigado&#x201D;."  href="#" role="button">Adicione um coment&#xE1;rio</a>
                <span class="js-link-separator dno">&nbsp;|&nbsp;</span>
            <a class="js-show-link comments-link dno" title="ver todos os coment&#xE1;rios desta publica&#xE7;&#xE3;o" href=# onclick="" role="button"></a>
        </div>         
    </div>
    </div>
</div>

                                    
<a name="300177"></a>
<div id="answer-300177" class="answer js-answer" data-answerid="300177" data-parentid="295004" data-score="1" data-position-on-page="5" data-highest-scored="0" data-question-has-accepted-highest-score="0"  itemprop="suggestedAnswer" itemscope itemtype="https://schema.org/Answer">
    <div class="post-layout">
        <div class="votecell post-layout--left">
            

<div class="js-voting-container d-flex jc-center fd-column ai-center gs4 fc-black-300" data-post-id="300177" data-referrer="None">
        <button class="js-vote-up-btn flex--item s-btn s-btn__muted s-btn__outlined bar-pill bc-black-225 f:bc-theme-secondary-400 f:bg-theme-secondary-400 f:fc-black-050 h:bg-theme-primary-200"
                data-controller="s-tooltip"
                data-s-tooltip-placement="right"
                title="Esta resposta &#xE9; &#xFA;til"
                aria-pressed="false"
                aria-label="Up vote"
                data-selected-classes="fc-theme-primary bc-theme-primary bg-theme-primary-100"
                data-unselected-classes="bc-black-225 f:bc-theme-secondary-400 f:bg-theme-secondary-400 f:fc-black-050 h:bg-theme-primary-200">
            <svg aria-hidden="true" class="svg-icon iconArrowUp" width="18" height="18"  viewBox="0 0 18 18"><path  d="M1 12h16L9 4z"/></svg>
        </button>
        <input type="hidden" id="voteUpHash" value="68:3:31e,16:e59ee8b6f1cd2fae,10:1723991229,16:d47a073fb5598dc3,6:300177,54182b3cbf8d68c23a1fba08ec58e78eb038de3dd07b613312693454cae63a53" />
        <div class="js-vote-count flex--item d-flex fd-column ai-center fc-theme-body-font fw-bold fs-subheading py4"
             itemprop="upvoteCount"
             data-value="1">
            1
        </div>
        <button
                class="js-vote-down-btn flex--item mb8 s-btn s-btn__muted s-btn__outlined bar-pill bc-black-225 f:bc-theme-secondary-400 f:bg-theme-secondary-400 f:fc-black-050 h:bg-theme-primary-200"
                title="Esta resposta n&#xE3;o &#xE9; &#xFA;til"
                aria-pressed="false"
                aria-label="Down vote"
                data-selected-classes="fc-theme-primary bc-theme-primary bg-theme-primary-100"
                data-unselected-classes="bc-black-225 f:bc-theme-secondary-400 f:bg-theme-secondary-400 f:fc-black-050 h:bg-theme-primary-200">
            <svg aria-hidden="true" class="svg-icon iconArrowDown" width="18" height="18"  viewBox="0 0 18 18"><path  d="M1 6h16l-8 8z"/></svg>
        </button>
        <input type="hidden" id="voteDownHash" value="68:3:31e,16:b8248404dc4ccf72,10:1723991229,16:9b01f6dbfe878d62,6:300177,695496a3246dfd52f3203dcdb10ce837939d3b66de07bc06fd15a6d68c6a93bc" />


        
<button class="js-saves-btn s-btn s-btn__unset c-pointer py4"
        type="button"
        id="saves-btn-300177"
        data-controller="s-tooltip"
        data-s-tooltip-placement="right"
        data-s-popover-placement=""
        title="Save this answer."
        aria-pressed="false"
        data-post-id="300177"
        data-post-type-id="2"
        data-user-privilege-for-post-click="0"
        aria-controls=""
        data-s-popover-auto-show="false"
>
    <svg aria-hidden="true" class="fc-theme-primary-400 js-saves-btn-selected d-none svg-icon iconBookmark" width="18" height="18"  viewBox="0 0 18 18"><path  d="M3 17V3c0-1.1.9-2 2-2h8a2 2 0 0 1 2 2v14l-6-4z"/></svg>
    <svg aria-hidden="true" class="js-saves-btn-unselected svg-icon iconBookmarkAlt" width="18" height="18"  viewBox="0 0 18 18"><path  d="m9 10.6 4 2.66V3H5v10.26zM3 17V3c0-1.1.9-2 2-2h8a2 2 0 0 1 2 2v14l-6-4z"/></svg>
</button>







            <div class="js-accepted-answer-indicator flex--item fc-green-400 py6 mtn8 d-none" data-s-tooltip-placement="right" title="Carregando quando esta resposta foi aceita&#x2026;" tabindex="0" role="note" aria-label="Aceito">
                <div class="ta-center">
                    <svg aria-hidden="true" class="svg-icon iconCheckmarkLg" width="36" height="36"  viewBox="0 0 36 36"><path  d="m6 14 8 8L30 6v8L14 30l-8-8z"/></svg>
                </div>
            </div>

    
    <a class="js-post-issue flex--item s-btn s-btn__unset c-pointer py6 mx-auto" href="/posts/300177/timeline" data-shortcut="T" data-ks-title="linha do tempo" data-controller="s-tooltip" data-s-tooltip-placement="right" title="Exibir atividade dessa publica&#xE7;&#xE3;o" aria-label="Linha do tempo"><svg aria-hidden="true" class="mln2 mr0 svg-icon iconHistory" width="19" height="18"  viewBox="0 0 19 18"><path  d="M3 9a8 8 0 1 1 3.73 6.77L8.2 14.3A6 6 0 1 0 5 9l3.01-.01-4 4-4-4zm7-4h1.01L11 9.36l3.22 2.1-.6.93L10 10z"/></svg></a>

</div>

        </div>

        

<div class="answercell post-layout--right">
    
    <div class="s-prose js-post-body" itemprop="text">
<p>Uma forma bem simples e enxuta de fazer isso:</p>

<p><div class="snippet" data-lang="js" data-hide="false" data-console="true" data-babel="false">
<div class="snippet-code">
<pre class="snippet-code-js lang-js prettyprint-override"><code>function ligarApagar(e){
   e.src = "images/lampada-"+( ~e.src.indexOf("-on") ? "off" : "on" )+".jpg";
   
   // daqui pra baixo é apenas exemplo para mostrar o texto
   // pode apagar
   document.querySelector("b").textContent = e.src;
   
}</code></pre>
<pre class="snippet-code-html lang-html prettyprint-override"><code>&lt;img height="100" id="lamp" src="images/lampada-on.jpg"&gt;
&lt;b&gt; https://stacksnippets.net/images/lampada-on.jpg &lt;/b&gt;
&lt;br&gt;
&lt;button type="button" id="controle" onclick="ligarApagar(document.getElementById('lamp'))"&gt;Ligar/Apagar&lt;/button&gt;</code></pre>
</div>
</div>
</p>
    </div>
    <div class="mt24">
        <div class="d-flex fw-wrap ai-start jc-end gs8 gsy">
            <time itemprop="dateCreated" datetime="2018-05-19T00:59:12"></time>
            <div class="flex--item mr16" style="flex: 1 1 100px;">
                


<div class="js-post-menu pt2" data-post-id="300177" data-post-type-id="2">

    <div class="d-flex gs8 s-anchors s-anchors__muted fw-wrap">

        <div class="flex--item">
            <a href="/a/300177"
               rel="nofollow"
               itemprop="url"
               class="js-share-link js-gps-track"
               title="permalink curto para esta resposta"
               data-gps-track="post.click({ item: 2, priv: 0, post_type: 2 })"
               data-controller="se-share-sheet"
               data-se-share-sheet-title="Compartilhe um link para esta resposta"
               data-se-share-sheet-subtitle=""
               data-se-share-sheet-post-type="answer"
               data-se-share-sheet-social="facebook twitter "
               data-se-share-sheet-location="2"
               data-se-share-sheet-license-url="https%3a%2f%2fcreativecommons.org%2flicenses%2fby-sa%2f4.0%2f"
               data-se-share-sheet-license-name="CC BY-SA 4.0"
               data-s-popover-placement="bottom-start">Compartilhar</a>
        </div>


                    <div class="flex--item">
                        <a href="/posts/300177/edit" class="js-suggest-edit-post js-gps-track" data-gps-track="post.click({ item: 6, priv: 0, post_type: 2 })" title="">Melhore esta resposta</a>
                    </div>

                <div class="flex--item">
                    <button type="button"
                            id="btnFollowPost-300177" class="s-btn s-btn__link js-follow-post js-follow-answer js-gps-track"
                            data-gps-track="post.click({ item: 14, priv: 0, post_type: 2 })"
                            data-controller="s-tooltip " data-s-tooltip-placement="bottom"
                            data-s-popover-placement="bottom" aria-controls=""
                            title="Siga esta resposta para receber notifica&#xE7;&#xF5;es">
                        Seguir
                        <input type="hidden" id="voteFollowHash" value="68:3:31e,16:8cb02ed1fa93a066,10:1723991229,16:84c4241622ad8207,6:300177,2e39f2c4054927a9db4b1597e3ba0c8ec9b9a91e3e6fde5aa3088a04a991d6e7" />
                    </button>
                </div>






    </div>
    <div class="js-menu-popup-container"></div>
</div>
            </div>


            <div class="post-signature flex--item fl0">
                <div class="user-info user-hover ">
    <div class="d-flex ">
        <div class="user-action-time fl-grow1">
            respondida <span title='2018-05-19 00:59:12Z' class='relativetime'>19/05/2018 às 0:59</span>
        </div>
        
    </div>
    <div class="user-gravatar32">
        <a href="/users/8063/sam"><div class="gravatar-wrapper-32"><img src="https://i.sstatic.net/YjVmFrUx.jpg?s=64" alt="Sam&#39;s user avatar" width="32" height="32" class="bar-sm"></div></a>
    </div>
    <div class="user-details" itemprop="author" itemscope itemtype="http://schema.org/Person">
        <a href="/users/8063/sam">Sam</a><span class="d-none" itemprop="name">Sam</span>
        <div class="-flair">
            <span class="reputation-score" title="pontos de reputação 80.716" dir="ltr">80,7mil</span><span title="22 medalhas de ouro" aria-hidden="true"><span class="badge1"></span><span class="badgecount">22</span></span><span class="v-visible-sr">22 medalhas de ouro</span><span title="72 medalhas de prata" aria-hidden="true"><span class="badge2"></span><span class="badgecount">72</span></span><span class="v-visible-sr">72 medalhas de prata</span><span title="126 medalhas de bronze" aria-hidden="true"><span class="badge3"></span><span class="badgecount">126</span></span><span class="v-visible-sr">126 medalhas de bronze</span>
        </div>
    </div>
</div>


            </div>
        </div>
        
    
    </div>
    
</div>




            <span class="d-none" itemprop="commentCount"></span> 
    <div class="post-layout--right js-post-comments-component">
        <div id="comments-300177" class="comments js-comments-container bt bc-black-200 mt12  dno" data-post-id="300177" data-min-length="15">
            <ul class="comments-list js-comments-list"
                    data-remaining-comments-count="0"
                    data-canpost="false"
                    data-cansee="true"
                    data-comments-unavailable="false"
                    data-addlink-disabled="true">

            </ul>
	    </div>

        <div id="comments-link-300177" data-rep=50 data-anon=true>
                    <a class="js-add-link comments-link disabled-link" title="Use coment&#xE1;rios para pedir mais informa&#xE7;&#xF5;es ou sugerir melhorias. Evite coment&#xE1;rios como &#x201C;&#x2B;1&#x201D; ou &#x201C;obrigado&#x201D;."  href="#" role="button">Adicione um coment&#xE1;rio</a>
                <span class="js-link-separator dno">&nbsp;|&nbsp;</span>
            <a class="js-show-link comments-link dno" title="ver todos os coment&#xE1;rios desta publica&#xE7;&#xE3;o" href=# onclick="" role="button"></a>
        </div>         
    </div>
    </div>
</div>

                                <h2 class="bottom-notice">
                                    Voc&#234; deve <a href="/users/login?ssrc=question_page&amp;returnurl=https%3a%2f%2fpt.stackoverflow.com%2fquestions%2f295004">fazer log-in</a> para responder a esta pergunta.
                                </h2>



                            <h2 class="bottom-notice" data-loc="1">
                                <div>
Esta n&#xE3;o &#xE9; a resposta que voc&#xEA; est&#xE1; procurando? Pesquise outras perguntas com a tag <ul class='ml0 list-ls-none js-post-tag-list-wrapper d-inline'><li class='d-inline mr4 js-post-tag-list-item'><a href="/questions/tagged/javascript" class="s-tag post-tag" title="mostrar perguntas com a tag &#39;javascript&#39;" aria-label="mostrar perguntas com a tag &#39;javascript&#39;" rel="tag" aria-labelledby="tag-javascript-tooltip-container" data-tag-menu-origin="Unknown">javascript</a></li></ul>.                                </div>
                            </h2>
                                    
                </div>
            </div>

            
<div id="sidebar" class="show-votes" role="complementary" aria-label="barra lateral">
        

    
    <div class="s-sidebarwidget s-sidebarwidget__yellow s-anchors s-anchors__grayscale mb16" data-tracker="cb=1">
        <ul class="d-block p0 m0">
                        <li class="s-sidebarwidget--header s-sidebarwidget__small-bold-text d-flex fc-black-500 d:fc-black-600 bb bbw1">
                            Em destaque no Meta
                        </li>
        <li class="s-sidebarwidget--item d-flex px16">
            <div class="flex--item1 fl-shrink0">
<div class="favicon favicon-stackexchangemeta" title="Meta Stack Exchange"></div>            </div>
            <div class="flex--item wmn0 ow-break-word">
                <a href="https://meta.stackexchange.com/questions/401841/weve-made-changes-to-our-terms-of-service-privacy-policy-july-2024" class="js-gps-track" data-ga="[&quot;community bulletin board&quot;,&quot;Em destaque no Meta&quot;,&quot;https://meta.stackexchange.com/questions/401841/weve-made-changes-to-our-terms-of-service-privacy-policy-july-2024&quot;,null,null]" data-gps-track="communitybulletin.click({ priority: 3, position: 0, location: questionpage })">We&#39;ve made changes to our Terms of Service &amp; Privacy Policy - July 2024</a>
            </div>
        </li>
        <li class="s-sidebarwidget--item d-flex px16">
            <div class="flex--item1 fl-shrink0">
<div class="favicon favicon-stackexchangemeta" title="Meta Stack Exchange"></div>            </div>
            <div class="flex--item wmn0 ow-break-word">
                <a href="https://meta.stackexchange.com/questions/402121/bringing-clarity-to-status-tag-usage-on-meta-sites" class="js-gps-track" data-ga="[&quot;community bulletin board&quot;,&quot;Em destaque no Meta&quot;,&quot;https://meta.stackexchange.com/questions/402121/bringing-clarity-to-status-tag-usage-on-meta-sites&quot;,null,null]" data-gps-track="communitybulletin.click({ priority: 3, position: 1, location: questionpage })">Bringing clarity to status tag usage on meta sites</a>
            </div>
        </li>
        <li class="s-sidebarwidget--item d-flex px16">
            <div class="flex--item1 fl-shrink0">
<div class="favicon favicon-brmeta" title="Stack Overflow em Português Meta"></div>            </div>
            <div class="flex--item wmn0 ow-break-word">
                <a href="https://pt.meta.stackoverflow.com/questions/8842/conte%c3%bado-gerado-por-chatgpt-e-similares-n%c3%a3o-%c3%a9-permitido-no-stack-overflow-em-por" class="js-gps-track" title="Conte&#xFA;do gerado por ChatGPT e similares n&#xE3;o &#xE9; permitido no Stack Overflow em Portugu&#xEA;s" data-ga="[&quot;community bulletin board&quot;,&quot;Em destaque no Meta&quot;,&quot;https://pt.meta.stackoverflow.com/questions/8842/conte%c3%bado-gerado-por-chatgpt-e-similares-n%c3%a3o-%c3%a9-permitido-no-stack-overflow-em-por&quot;,null,null]" data-gps-track="communitybulletin.click({ priority: 6, position: 2, location: questionpage })">Conte&#250;do gerado por ChatGPT e similares n&#227;o &#233; permitido no Stack Overflow em...</a>
            </div>
        </li>
        <li class="s-sidebarwidget--item d-flex px16">
            <div class="flex--item1 fl-shrink0">
<div class="favicon favicon-brmeta" title="Stack Overflow em Português Meta"></div>            </div>
            <div class="flex--item wmn0 ow-break-word">
                <a href="https://pt.meta.stackoverflow.com/questions/7586/minhas-perguntas-s%c3%a3o-fechadas-rapidamente-%c3%89-normal-isso" class="js-gps-track" data-ga="[&quot;community bulletin board&quot;,&quot;Em destaque no Meta&quot;,&quot;https://pt.meta.stackoverflow.com/questions/7586/minhas-perguntas-s%c3%a3o-fechadas-rapidamente-%c3%89-normal-isso&quot;,null,null]" data-gps-track="communitybulletin.click({ priority: 6, position: 3, location: questionpage })">Minhas perguntas s&#227;o fechadas rapidamente! &#201; normal isso?</a>
            </div>
        </li>
        <li class="s-sidebarwidget--item d-flex px16">
            <div class="flex--item1 fl-shrink0">
<div class="favicon favicon-brmeta" title="Stack Overflow em Português Meta"></div>            </div>
            <div class="flex--item wmn0 ow-break-word">
                <a href="https://pt.meta.stackoverflow.com/questions/700/como-come%c3%a7ar-aqui-no-stack-overflow-em-portugu%c3%aas" class="js-gps-track" data-ga="[&quot;community bulletin board&quot;,&quot;Em destaque no Meta&quot;,&quot;https://pt.meta.stackoverflow.com/questions/700/como-come%c3%a7ar-aqui-no-stack-overflow-em-portugu%c3%aas&quot;,null,null]" data-gps-track="communitybulletin.click({ priority: 6, position: 4, location: questionpage })">Como come&#231;ar aqui no Stack Overflow em Portugu&#234;s</a>
            </div>
        </li>
        <li class="s-sidebarwidget--item d-flex px16">
            <div class="flex--item1 fl-shrink0">
<div class="favicon favicon-brmeta" title="Stack Overflow em Português Meta"></div>            </div>
            <div class="flex--item wmn0 ow-break-word">
                <a href="https://pt.meta.stackoverflow.com/questions/699/faq-da-comunidade" class="js-gps-track" data-ga="[&quot;community bulletin board&quot;,&quot;Em destaque no Meta&quot;,&quot;https://pt.meta.stackoverflow.com/questions/699/faq-da-comunidade&quot;,null,null]" data-gps-track="communitybulletin.click({ priority: 6, position: 5, location: questionpage })">FAQ da comunidade</a>
            </div>
        </li>
        <li class="s-sidebarwidget--item d-flex px16">
            <div class="flex--item1 fl-shrink0">
<div class="favicon favicon-brmeta" title="Stack Overflow em Português Meta"></div>            </div>
            <div class="flex--item wmn0 ow-break-word">
                <a href="https://pt.meta.stackoverflow.com/questions/8388/que-erro-cometi-ao-formular-minha-pergunta" class="js-gps-track" data-ga="[&quot;community bulletin board&quot;,&quot;Em destaque no Meta&quot;,&quot;https://pt.meta.stackoverflow.com/questions/8388/que-erro-cometi-ao-formular-minha-pergunta&quot;,null,null]" data-gps-track="communitybulletin.click({ priority: 6, position: 6, location: questionpage })">Que erro cometi ao formular minha pergunta?</a>
            </div>
        </li>
        </ul>
    </div>


<div class="js-zone-container zone-container-sidebar">
    <div id="dfp-tsb" class="everyonelovesstackoverflow everyoneloves__top-sidebar"></div>
		<div class="js-report-ad-button-container " style="width: 300px"></div>
</div>
        

    


        <div class="module sidebar-related">
            <h4 id="h-related">Relacionado</h4>
            <div class="related js-gps-related-questions" data-tracker="rq=1">
                    <div class="spacer" data-question-id="49221">
                        <a href="/q/49221" title="Question score (upvotes - downvotes)" >
                            <div class="answer-votes answered-accepted default">3</div>
                        </a>
                        <a href="/questions/49221/como-apagar-cookies-de-um-site" class="question-hyperlink">Como apagar cookies de um site?</a>
                    </div>
                    <div class="spacer" data-question-id="55013">
                        <a href="/q/55013" title="Question score (upvotes - downvotes)" >
                            <div class="answer-votes answered-accepted default">5</div>
                        </a>
                        <a href="/questions/55013/apagar-todos-logs-do-console" class="question-hyperlink">Apagar todos logs do console</a>
                    </div>
                    <div class="spacer" data-question-id="130330">
                        <a href="/q/130330" title="Question score (upvotes - downvotes)" >
                            <div class="answer-votes answered-accepted default">1</div>
                        </a>
                        <a href="/questions/130330/apagar-variavel-fornecida-ao-desmarcar-checkbox" class="question-hyperlink">Apagar variavel fornecida ao desmarcar Checkbox</a>
                    </div>
                    <div class="spacer" data-question-id="167783">
                        <a href="/q/167783" title="Question score (upvotes - downvotes)" >
                            <div class="answer-votes default">2</div>
                        </a>
                        <a href="/questions/167783/apagar-options-dentro-de-optgroup" class="question-hyperlink">Apagar options dentro de optgroup</a>
                    </div>
                    <div class="spacer" data-question-id="178516">
                        <a href="/q/178516" title="Question score (upvotes - downvotes)" >
                            <div class="answer-votes answered-accepted default">6</div>
                        </a>
                        <a href="/questions/178516/canvas-apagar-texto-correto" class="question-hyperlink">Canvas apagar texto correto</a>
                    </div>
                    <div class="spacer" data-question-id="237900">
                        <a href="/q/237900" title="Question score (upvotes - downvotes)" >
                            <div class="answer-votes answered-accepted default">0</div>
                        </a>
                        <a href="/questions/237900/acender-e-apagar-conte%c3%bado-do-background-com-animation" class="question-hyperlink">Acender e apagar conte&#250;do do background com animation</a>
                    </div>
                    <div class="spacer" data-question-id="261910">
                        <a href="/q/261910" title="Question score (upvotes - downvotes)" >
                            <div class="answer-votes answered-accepted default">3</div>
                        </a>
                        <a href="/questions/261910/por-qual-motivo-tenho-de-dar-um-duplo-clique-no-bookmarklet-pra-inserir-um-cont" class="question-hyperlink">Por qual motivo, tenho de dar um duplo clique no bookmarklet pra inserir um conte&#250;do din&#226;mico</a>
                    </div>
                    <div class="spacer" data-question-id="404793">
                        <a href="/q/404793" title="Question score (upvotes - downvotes)" >
                            <div class="answer-votes answered-accepted default">1</div>
                        </a>
                        <a href="/questions/404793/como-verificar-se-uma-imagem-foi-clicado-ou-nao" class="question-hyperlink">Como verificar se uma imagem foi clicado ou nao</a>
                    </div>
            </div>
        </div>
        <script type="text/javascript">
                 $(function() {
                     $(".js-gps-related-questions .spacer").on("click", function () {
                        fireRelatedEvent($(this).index() + 1, $(this).data('question-id'));
                     });

                 function fireRelatedEvent(position, questionId) {
                     StackExchange.using("gps", function() {
                         StackExchange.gps.track('related_questions.click',
                         {
                             position: position,
                             originQuestionId: 295004,
                             relatedQuestionId: +questionId,
                             location: 'sidebar',
                             source: 'Baseline'
                         });    
                     });
                 }
             });
         </script>


    
    

    

                <div id="feed-link" class="js-feed-link">
        <a href="/feeds/question/295004" title="Feed desta pergunta e suas respostas">
            <svg aria-hidden="true" class="fc-orange-400 svg-icon iconRss" width="18" height="18"  viewBox="0 0 18 18"><path  d="M3 1a2 2 0 0 0-2 2v12c0 1.1.9 2 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2zm0 1.5c6.9 0 12.5 5.6 12.5 12.5H13C13 9.55 8.45 5 3 5zm0 5c4.09 0 7.5 3.41 7.5 7.5H8c0-2.72-2.28-5-5-5zm0 5c1.36 0 2.5 1.14 2.5 2.5H3z"/></svg>
            Feed de perguntas
        </a>
    </div>
    <aside class="s-modal js-feed-link-modal" tabindex="-1" role="dialog" aria-labelledby="feed-modal-title" aria-describedby="feed-modal-description" aria-hidden="true">
        <div class="s-modal--dialog js-modal-dialog wmx4" role="document"  data-controller="se-draggable">
            <h1 class="s-modal--header fw-bold js-first-tabbable" id="feed-modal-title" data-se-draggable-target="handle" tabindex="0">
                Assine o RSS
            </h1>
            <div class="d-flex gs4 gsy fd-column">
                <div class="flex--item">
                    <label class="d-block s-label c-default" for="feed-url">
                        Feed de perguntas
                        <p class="s-description mt2" id="feed-modal-description">Para assinar este feed RSS, copie e cole esta URL no seu leitor RSS.</p>
                    </label>
                </div>
                <div class="d-flex ps-relative">
                    <input class="s-input" type="text" name="feed-url" id="feed-url" readonly="readonly" value="https://pt.stackoverflow.com/feeds/question/295004" />
                    <svg aria-hidden="true" class="s-input-icon fc-orange-400 svg-icon iconRss" width="18" height="18"  viewBox="0 0 18 18"><path  d="M3 1a2 2 0 0 0-2 2v12c0 1.1.9 2 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2zm0 1.5c6.9 0 12.5 5.6 12.5 12.5H13C13 9.55 8.45 5 3 5zm0 5c4.09 0 7.5 3.41 7.5 7.5H8c0-2.72-2.28-5-5-5zm0 5c1.36 0 2.5 1.14 2.5 2.5H3z"/></svg>
                </div>
            </div>
            <a class="s-modal--close s-btn s-btn__muted js-modal-close js-last-tabbable" href="#" aria-label="Fechar">
                <svg aria-hidden="true" class="svg-icon iconClearSm" width="14" height="14"  viewBox="0 0 14 14"><path  d="M12 3.41 10.59 2 7 5.59 3.41 2 2 3.41 5.59 7 2 10.59 3.41 12 7 8.41 10.59 12 12 10.59 8.41 7z"/></svg>
            </a>
        </div>
    </aside>

</div>

    </div>
<script>StackExchange.ready(function(){$.get('/posts/295004/ivc/084f?prg=dc258aca-fa29-4b2d-9500-b7e5fd91df97');});</script>
<noscript><div><img src="/posts/295004/ivc/084f?prg=dc258aca-fa29-4b2d-9500-b7e5fd91df97" class="dno" alt="" width="0" height="0"></div></noscript><div style="display:none" id="js-codeblock-lang">lang-js</div></div>

                        


        </div>
    </div>

    

        
    <script type="text/javascript">
    var cam = cam || { opt: {} };
    var clcGamLoaderOptions = cam || { opt: {} };
    var opt = clcGamLoaderOptions.opt;

    opt.refresh = !1;
    opt.refreshInterval = 0;
    opt.sf = !1;
    opt.hb = !1;
    opt.ll = !0;
    opt.tlb_position = 0;
    opt.personalization_consent = !0;
    opt.targeting_consent = !0;
    opt.performance_consent = !1;

    opt.targeting = {Registered:['false'],Reputation:['new'],'pt.so-tag':['javascript'],NumberOfAnswers:['5']};
    opt.adReportEnabled = !1;
    opt.adReportUrl = '/ads/report-ad';
    opt.adReportText = 'Denunciar este anúncio';
	opt.adReportFileTypeErrorMessage = 'Please select a PNG or JPG file.';
    opt.adReportFileSizeErrorMessage = 'The file must be under 2 MiB.';
	opt.adReportErrorText = 'Error uploading ad report.';
	opt.adReportThanksText = 'Thanks for your feedback. We’ll review this against our code of conduct and take action if necessary.';
    opt.adReportLoginExpiredMessage = 'Your login session has expired, please login and try again.';
    opt.adReportLoginErrorMessage = 'Ocorreu um erro ao carregar o formulário de relatório - tente novamente';
	opt.adReportModalClass = 'js-ad-report';
    opt.countryCode = 'BR';
    opt.qualtricsSurveyData = '{"isRegistered":"False","repBucket":"new","referrer":"https%3a%2f%2fpt.stackoverflow.com%2fquestions%2f295004%2ffazer-l%c3%a2mpada-acender-e-apagar","accountAge":"0"}';

        opt.brandSurveyEnabled = false;
    opt.perRequestGuid = 'dc258aca-fa29-4b2d-9500-b7e5fd91df97';
    opt.responseHash = 'rqCIc5yYR/MGFLqOb/RoiUex42vAisYgH0GXzSg&#x2B;UvU=';


    opt.targeting.TargetingConsent = ['True'];
    opt.allowAccountTargetingForThisRequest = !1;

    const urlParams = new URLSearchParams(window.location.search);
    if (urlParams.has('dfptestads')) {
        const dfptestads = urlParams.get('dfptestads');
        opt.targeting.DfpTestAds = dfptestads;
    }
</script>
<script>;(()=>{"use strict";var __webpack_modules__={23:(e,t,s)=>{s.d(t,{Z7:()=>c,eq:()=>l,kG:()=>d});const n="248424177",o=(a=location.pathname,/^\/tags\//.test(a)||/^\/questions\/tagged\//.test(a)?"tag-pages":/^\/discussions\//.test(a)||/^\/beta\/discussions/.test(a)?"discussions":/^\/$/.test(a)||/^\/home/.test(a)?"home-page":/^\/jobs$/.test(a)||/^\/jobs\//.test(a)?"jobs":"question-pages");var a;let i=location.hostname;const r={slots:{lb:[[728,90]],mlb:[[728,90]],smlb:[[728,90]],bmlb:[[728,90]],sb:e=>"dfp-tsb"===e?[[300,250],[300,600]]:[[300,250]],"tag-sponsorship":[[730,135]],"mobile-below-question":[[320,50],[300,250]],msb:[[300,250],[300,600]],"talent-conversion-tracking":[[1,1]],"site-sponsorship":[[230,60]]},ids:{"dfp-tlb":"lb","dfp-mlb":"mlb","dfp-smlb":"smlb","dfp-bmlb":"bmlb","dfp-tsb":"sb","dfp-isb":"sb","dfp-tag":"tag-sponsorship","dfp-msb":"msb","dfp-sspon":"site-sponsorship","dfp-m-aq":"mobile-below-question"},idsToExcludeFromAdReports:["dfp-sspon"]};function d(){return Object.keys(r.ids)}function l(e){return r.idsToExcludeFromAdReports.indexOf(e)<0}function c(e){var t=e.split("_")[0];const s=r.ids[t];let a=r.slots[s];return"function"==typeof a&&(a=a(t)),{path:`/${n}/${i}/${s}/${o}`,sizes:a,zone:s}}},865:(e,t,s)=>{function n(e){return"string"==typeof e?document.getElementById(e):e}function o(e){return!!(e=n(e))&&"none"===getComputedStyle(e).display}function a(e){return!o(e)}function i(e){return!!e}function r(e){return/^\s*$/.test(n(e).innerHTML)}function d(e){const{style:t}=e;t.height=t.maxHeight=t.minHeight="auto",t.display="none"}function l(e){const{style:t}=e;t.height=t.maxHeight=t.minHeight="auto",t.display="none",[].forEach.call(e.children,l)}function c(e){const{style:t}=e;t.height=t.maxHeight=t.minHeight="auto",t.removeProperty("display")}function g(e){const t=document.createElement("script");t.src=e,document.body.appendChild(t)}function p(e){return s=e,(t=[]).push=function(e){return s(),delete this.push,this.push(e)},t;var t,s}function h(e){let t="function"==typeof HTMLTemplateElement;var s=document.createElement(t?"template":"div");return e=e.trim(),s.innerHTML=e,t?s.content.firstChild:s.firstChild}s.d(t,{$Z:()=>c,Bv:()=>h,Gx:()=>g,Nj:()=>n,QZ:()=>p,cf:()=>d,pn:()=>a,wo:()=>l,xb:()=>r,xj:()=>o,yb:()=>i})},763:(__unused_webpack_module,__webpack_exports__,__webpack_require__)=>{__webpack_require__.d(__webpack_exports__,{t:()=>AdReports});var _common_helper__WEBPACK_IMPORTED_MODULE_2__=__webpack_require__(865),_console__WEBPACK_IMPORTED_MODULE_1__=__webpack_require__(276),_ad_units__WEBPACK_IMPORTED_MODULE_0__=__webpack_require__(23);class AdReports{constructor(e,t){if(this.googletag=e,this.cam=t,this.allowedFileTypes=["image/png","image/jpg","image/jpeg"],this.ignoreValidation=!1,_console__WEBPACK_IMPORTED_MODULE_1__.cM("Ad reporting init"),this.cam=t,this.callOnButtonClick=e=>this.onButtonClick(e),this.googletag.pubads().addEventListener("slotRenderEnded",e=>this.handleSlotRendered(e)),Array.isArray(t.slotsRenderedEvents)){_console__WEBPACK_IMPORTED_MODULE_1__.cM("Adding report button to "+t.slotsRenderedEvents.length+" events that have transpired");for(var s=0;s<t.slotsRenderedEvents.length;s++)this.handleSlotRendered(t.slotsRenderedEvents[s])}}handleSlotRendered(e){if(e&&e.slot&&!e.isEmpty&&(e.creativeId||e.lineItemId||!e.isEmpty)){var t=e.slot.getSlotElementId();if(t){var s=document.getElementById(t);if(s)if((0,_ad_units__WEBPACK_IMPORTED_MODULE_0__.eq)(t)){var n=s?.closest(".js-zone-container")?.querySelector(".js-report-ad-button-container");n?(n.innerHTML="",n.append(this.createButton(e)),n.style.height="24px",_console__WEBPACK_IMPORTED_MODULE_1__.cM("Added report button to the bottom of "+t)):_console__WEBPACK_IMPORTED_MODULE_1__.cM("Ad report button not found, may be intentional, element: "+t)}else _console__WEBPACK_IMPORTED_MODULE_1__.cM("Not adding report button to the bottom of "+t+": shouldHaveReportButton = false");else _console__WEBPACK_IMPORTED_MODULE_1__.cM("Not adding report button to the bottom of "+t+": resolved invalid adUnit element")}else _console__WEBPACK_IMPORTED_MODULE_1__.cM("Not adding report button to the bottom of element: invalid adUnitElementId")}else _console__WEBPACK_IMPORTED_MODULE_1__.cM("Not adding report button to the bottom of element: invalid SlotRenderEndedEvent")}async onButtonClick(e){e.preventDefault();let t=e.target;const s=t.dataset.modalUrl,n=t.dataset.googleEventData;return await this.loadModal(s,t,n),!1}createButton(e){let t=document.createElement("button");var s=JSON.stringify(e);return t.dataset.googleEventData=s,t.dataset.modalUrl=this.cam.opt.adReportUrl,t.dataset.adUnit=e.slot.getSlotElementId(),t.classList.add("js-report-ad","s-btn","s-btn__link","fs-fine","mt2","float-right"),t.append(document.createTextNode(this.cam.opt.adReportText)),t.removeEventListener("click",this.callOnButtonClick),t.addEventListener("click",this.callOnButtonClick),t}async loadModal(url,$link,googleEventData){try{await window.StackExchange.helpers.loadModal(url,{returnElements:window.$($link)}),this.initForm(googleEventData)}catch(e){var message="",response=e.responseText?eval(`(${e.responseText})`):null;message=response&&response.isLoggedOut?this.cam.opt.adReportLoginExpiredMessage:this.cam.opt.adReportLoginErrorMessage,window.StackExchange.helpers.showToast(message,{type:"danger"})}}removeModal(){window.StackExchange.helpers.closePopups(document.querySelectorAll("."+this.cam.opt.adReportModalClass),"dismiss")}initForm(e,t=!1){this.ignoreValidation=t,this.$form=document.querySelector(".js-ad-report-form"),this.$googleEventData=this.$form.querySelector(".js-json-data"),this.$adReportReasons=this.$form.querySelectorAll(".js-ad-report-reason"),this.$adReportReasonOther=this.$form.querySelector(".js-ad-report-reason-other"),this.$fileUploaderInput=this.$form.querySelector(".js-file-uploader-input"),this.$imageUploader=this.$form.querySelector(".js-image-uploader"),this.$clearImageUpload=this.$form.querySelector(".js-clear-image-upload"),this.$imageUploaderText=this.$form.querySelector(".js-image-uploader-text"),this.$imageUploaderPreview=this.$form.querySelector(".js-image-uploader-preview"),this.$fileErrorMessage=this.$form.querySelector(".js-file-error");const s=this.$form.querySelector(".js-drag-drop-enabled"),n=this.$form.querySelector(".js-drag-drop-disabled");this.$googleEventData.value=e,this.$adReportReasons.forEach((e,t)=>e.addEventListener("change",e=>{this.$adReportReasonOther.classList.toggle("d-none","3"!==e.target.value)})),this.$fileUploaderInput.addEventListener("change",()=>{this.validateFileInput()&&this.updateImagePreview(this.$fileUploaderInput.files)}),this.$clearImageUpload.addEventListener("click",e=>{e.preventDefault(),this.clearImageUpload()});try{this.$fileUploaderInput[0].value="",this.$imageUploader.addEventListener("dragenter dragover dragleave drop",this.preventDefaults),this.$imageUploader.addEventListener("dragenter dragover",this.handleDragStart),this.$imageUploader.addEventListener("dragleave drop",this.handleDragEnd),this.$imageUploader.addEventListener("drop",this.handleDrop)}catch(e){s.classList.add("d-none"),n.classList.remove("d-none")}this.$form.removeEventListener("",this.handleDragEnd),this.$form.addEventListener("submit",async e=>(e.preventDefault(),this.submitForm(),!1))}clearImageUpload(){this.$fileUploaderInput.value="",this.$imageUploaderPreview.setAttribute("src",""),this.$imageUploaderPreview.classList.add("d-none"),this.$clearImageUpload.classList.add("d-none"),this.$imageUploaderText.classList.remove("d-none"),this.$imageUploader.classList.add("p16","ba","bas-dashed","bc-black-100")}preventDefaults(e){e.preventDefault(),e.stopPropagation()}handleDragStart(e){this.$imageUploader.classList.remove("bas-dashed"),this.$imageUploader.classList.add("bas-solid","bc-black-100")}handleDragEnd(e){this.$imageUploader.classList.remove("bas-solid","bc-black-100"),this.$imageUploader.classList.add("bas-dashed")}handleDrop(e){var t=e.originalEvent.dataTransfer.files;FileReader&&t&&1===t.length&&(this.$fileUploaderInput.files=t,this.validateFileInput()&&this.updateImagePreview(t))}setError(e){this.$fileErrorMessage.parentElement.classList.toggle("has-error",e)}updateImagePreview(e){this.$imageUploader.classList.remove("p16","ba","bas-dashed","bc-black-100"),this.$clearImageUpload.classList.remove("d-none"),this.$imageUploaderText.classList.add("d-none");var t=new FileReader;t.onload=e=>{null!=e.target&&(this.$imageUploaderPreview.setAttribute("src",e.target.result),this.$imageUploaderPreview.classList.remove("d-none"))},t.readAsDataURL(e[0])}validateFileInput(){if(this.ignoreValidation)return!0;const e=this.cam.opt.adReportFileTypeErrorMessage,t=this.cam.opt.adReportFileSizeErrorMessage;if(null==this.$fileUploaderInput.files)return!1;var s=this.$fileUploaderInput.files[0];return null==s?(this.setError(!0),!1):this.allowedFileTypes.indexOf(s.type)<0?(this.$fileErrorMessage.textContent=e,this.$fileErrorMessage.classList.remove("d-none"),this.setError(!0),!1):s.size>2097152?(this.$fileErrorMessage.textContent=t,this.$fileErrorMessage.classList.remove("d-none"),this.setError(!0),!1):(this.$fileErrorMessage.classList.add("d-none"),this.setError(!1),!0)}async gatherDiagnosticInfo(){return{BrowserVersion:await this.getBrowserVersion()}}getElementSource(e){return e.outerHTML}getNestedIFrameElement(e){var t=e.querySelector("iframe");return t.contentDocument?t.contentDocument.documentElement:t.contentWindow.document.documentElement}async getBrowserVersion(){return await navigator.userAgentData.getHighEntropyValues(["fullVersionList"]).then(e=>JSON.stringify(e.fullVersionList))}async submitForm(){if(!this.validateFileInput())return!1;this.$form.querySelector("[type=submit]").setAttribute("disabled","true");var e=JSON.parse(this.$googleEventData.value||"{}");e.Reason=parseInt(this.$form.querySelector(".js-ad-report-reason:checked").value,10),e.Description=this.$adReportReasonOther.value,this.$googleEventData.value=JSON.stringify(e);var t=new FormData(this.$form);if("1"===t.get("shareDiagnosticInfo")){var s=await this.gatherDiagnosticInfo();Object.keys(s).forEach(e=>t.append(e,s[e]))}try{const e=await window.fetch(this.$form.getAttribute("action"),{method:this.$form.getAttribute("method"),body:t,cache:"no-cache"}),s=e.headers.get("content-type")||"",o=await e.text();if(!e.ok)throw new Error("response not valid");if(0===s.indexOf("text/html")){var n=(0,_common_helper__WEBPACK_IMPORTED_MODULE_2__.Bv)(o);const e=n?n.querySelector(".js-modal-content"):null;if(_console__WEBPACK_IMPORTED_MODULE_1__.cM("$popupContent"),_console__WEBPACK_IMPORTED_MODULE_1__.cM(e),!e)throw new Error(`Could not find .js-modal-content in response from ${this.$form.getAttribute("action")}`);document.querySelector(".js-modal-content").replaceWith(e)}else window.StackExchange.helpers.showToast(this.cam.opt.adReportThanksText,{type:"success"}),this.removeModal()}catch(e){window.StackExchange.helpers.showToast(this.cam.opt.adReportErrorText,{type:"danger"})}finally{let e=this.$form.querySelector("[type=submit]");e&&e.removeAttribute("disabled")}}}},276:(e,t,s)=>{function n(...e){}function o(...e){}s.d(t,{cM:()=>n,vU:()=>o})}},__webpack_module_cache__={};function __webpack_require__(e){var t=__webpack_module_cache__[e];if(void 0!==t)return t.exports;var s=__webpack_module_cache__[e]={exports:{}};return __webpack_modules__[e](s,s.exports,__webpack_require__),s.exports}__webpack_require__.d=(e,t)=>{for(var s in t)__webpack_require__.o(t,s)&&!__webpack_require__.o(e,s)&&Object.defineProperty(e,s,{enumerable:!0,get:t[s]})},__webpack_require__.o=(e,t)=>Object.prototype.hasOwnProperty.call(e,t);var __webpack_exports__={};(()=>{var e=__webpack_require__(276),t=(e=>(e[e.Above=0]="Above",e[e.Below=1]="Below",e))(t||{});const s=Object.assign({},{"lib":"https://cdn.sstatic.net/clc/bundles/js/gam_loader_script.bundle.741.25e3e63be9a306287d9f.js?v=d5f908ccaade","style":null,"u":null,"wa":true,"kt":2000,"tto":true,"h":"clc.stackoverflow.com","allowed":"^(((talent\\.)?stackoverflow)|(blog\\.codinghorror)|(.*\\.googlesyndication)|(serverfault|askubuntu|superuser)|([^\\.]+\\.stackexchange))\\.com$","wv":true,"al":false,"abd":true,"cpa_liid":[5882654614],"cpa_cid":[138377597667],"dp":false,"tgt_to":1000,"tgt_u":"https://clc.stackoverflow.com/get-user-acct-tgt","tgt_e":true,"tgt_p":100,"dv_enabled":false});var n=__webpack_require__(23),o=__webpack_require__(865),a=__webpack_require__(763);class i{constructor(t,s){this.googletag=t,this.interval=s,e.cM("Ad refresh init. interval: "+s),this.googletag.pubads().addEventListener("impressionViewable",e=>this.onImpressionViewable(e)),e.cM("done enabling ad refresh")}onImpressionViewable(t){var s=t.slot;e.cM("ad refresh - slot "+s.getSlotElementId()+" is viewable, initializing refresh"),this.scheduleRefresh(s)}scheduleRefresh(e){setTimeout(()=>this.refreshAdSlot(e),1e3*this.interval)}static refreshMyAd(t,s){let n=t.pubads().getSlots().find(e=>e.getSlotElementId()===s);n&&(e.cM("refreshMyAd - refreshing ad slot "+s),t.pubads().refresh([n]))}static removeMyAd(t,s){let n=t.pubads().getSlots().find(e=>e.getSlotElementId()===s);n&&(e.cM("removeMyAd - destroying ad slot "+s),t.destroySlots([n]))}refreshAdSlot(t){var s=t.getSlotElementId();this.isElementVisibleInBrowser(s)?(e.cM("refreshing ad slot "+s),googletag.pubads().refresh([t])):(e.cM("refresh skipped this time; ad slot not viewable:"+s),this.scheduleRefresh(t))}isElementVisibleInBrowser(e){var t=document.getElementById(e);if(null!==t){var s=t.getBoundingClientRect();if(s.top>=0&&s.left>=0&&s.bottom<=(window.innerHeight||document.documentElement.clientHeight)&&s.right<=(window.innerWidth||document.documentElement.clientWidth))return!0}return!1}}var r=(e=>(e.Off="Off",e.PreSurvey="PreSurvey",e.Collect="Collect",e.PostSurvey="PostSurvey",e))(r||{});class d{constructor(e,t){this.lineItemImpressions=[],this.surveysIdsCompleted=[],this.lineItemImpressions=e,this.surveysIdsCompleted=t}addImpression(e,t){let s={brandId:e,lineItemId:t,timestamp:new Date};this.lineItemImpressions.push(s)}addBrandSurveyCompleted(e){-1===this.surveysIdsCompleted.indexOf(e)&&this.surveysIdsCompleted.push(e)}getTotalBrandImpressions(){let e=new Map;for(let t of this.lineItemImpressions)if(e.has(t.brandId)){let s=e.get(t.brandId);e.set(t.brandId,s+1)}else e.set(t.brandId,1);return e}getBrandLineItemImpressions(e){let t={};for(let s of this.lineItemImpressions)if(s.brandId==e)if(void 0!==t[s.lineItemId]){let e=t[s.lineItemId];t[s.lineItemId]=e+1}else t[s.lineItemId]=1;return t}}class l{constructor(){this.surveyEngagementLocalStorageKey="clc-survey-engagement"}getBrandSurveyEngagement(){let e=localStorage.getItem(this.surveyEngagementLocalStorageKey);if(null===e)return new d([],[]);let t=JSON.parse(e);return new d(t.lineItemImpressions,t.surveysIdsCompleted)}saveBrandSurveyEngagement(e){let t=JSON.stringify(e);localStorage.setItem(this.surveyEngagementLocalStorageKey,t)}}class c{constructor(){this.surveyRepository=new l}getBrandSurveyEngagement(){return this.surveyRepository.getBrandSurveyEngagement()}recordImpression(e,t){let s=this.getBrandSurveyEngagement();s.addImpression(e,t),this.surveyRepository.saveBrandSurveyEngagement(s)}recordBrandSurveyCompleted(e){let t=this.getBrandSurveyEngagement();t.addBrandSurveyCompleted(e),this.surveyRepository.saveBrandSurveyEngagement(t)}}class g{constructor(t,s){this.googletag=t,this.brandSettings=s,this.brandSlotMap=new Map,this.brandSurveyEngagementService=new c,e.cM("Brand Survey init: "+JSON.stringify(s)),void 0!==s?(this.googletag.pubads().addEventListener("slotRenderEnded",e=>this.handleSlotRendered(e)),this.googletag.pubads().addEventListener("impressionViewable",e=>this.onImpressionViewable(e)),e.cM("done enabling Brand Survey")):e.cM("Brand Survey init: brandSettings is undefined, not initializing")}handleSlotRendered(t){e.cM("Brand Survey - slot rendered - slot:"+JSON.stringify(t.slot.getSlotElementId())+" lineItem: "+t.lineItemId);let s=this.findItemWithId(t.lineItemId);if(null===s||s.mode!==r.Collect)this.brandSlotMap.delete(t.slot.getSlotElementId());else{let e={brandId:s.brandId,lineItemId:t.lineItemId};this.brandSlotMap.set(t.slot.getSlotElementId(),e)}}onImpressionViewable(t){let s=t.slot;if(e.cM("ad - Brand Survey - impression viewable.  Details: "+JSON.stringify(s.getSlotElementId())),e.cM("ad - Brand Survey - slot "+s.getSlotElementId()+" is viewable"),this.brandSlotMap.has(s.getSlotElementId())){let t=this.brandSlotMap.get(s.getSlotElementId());e.cM("Brand Survey - brand "+t.brandId+" is viewable"),this.recordImpression(this.brandSlotMap.get(s.getSlotElementId()))}}recordImpression(t){e.cM("ad - Brand Survey - recording impression for brand "+t.brandId),this.brandSurveyEngagementService.recordImpression(t.brandId,t.lineItemId)}findItemWithId(t){return e.cM("brand settings: "+JSON.stringify(this.brandSettings)),this.brandSettings.find(e=>e.lineItemIds.includes(t))||null}}const p="response-brand-survey-submit|",h="request-brand-survey-metadata|",m="record-metric-on-server|",u="request-dsp-tags",f="response-dsp-tags|";class v{static refreshAdIfBrandSurveyIsDuplicated(e,t,s){if(this.alreadyCompletedThisBrandSurvey(t)){var n=document.getElementById(s).closest(".js-zone-container");i.removeMyAd(e,s),n&&n.remove()}}static alreadyCompletedThisBrandSurvey(e){return(new c).getBrandSurveyEngagement().surveysIdsCompleted.includes(e)}}window.cam=new class{constructor(t=null){if(this.gptImported=!1,this.slotsRenderedEvents=[],this.collapsed={},e.cM("constructor"),this.clc_options=s,window.clcGamLoaderOptions)Object.assign(this,window.clcGamLoaderOptions);else if(void 0===this.opt){let e=window.opt;e&&(this.opt=e)}}init(){if(e.cM("init"),void 0===this.opt)throw new Error("opt not set, required by GAM Loader");e.cM("init brand survey service"),this.getUserMetaPromise=this.getUserMeta(),e.cM("setup message handler"),window.addEventListener("message",e=>{this.onmessage(e)})}handleSlotRenderedNoAdReport(){if(googletag.pubads().addEventListener("slotRenderEnded",e=>this.applyExtraMarginBottom(e)),Array.isArray(this.slotsRenderedEvents))for(var e=0;e<this.slotsRenderedEvents.length;e++)this.applyExtraMarginBottom(this.slotsRenderedEvents[e])}onmessage(t){let s="omni";if(t.data&&("string"==typeof t.data||t.data instanceof String))if(0===t.data.indexOf("get-omni-")){e.cM("Recevied get-omni message, sending back omni");var n=t.source,a=this.opt.omni,i="string"==typeof a?a:"";n.postMessage([s,i,this.opt.perRequestGuid].join("|"),"*")}else if(0===t.data.indexOf("collapse-")){e.cM("Recevied collapse message, collapse ad iframe"),e.cM(t);for(var r=t.source.window,d=document.getElementsByTagName("IFRAME"),l=0;l<d.length;l++){var g=d[l];if(g.contentWindow==r)return void(0,o.wo)(g.parentElement.parentElement.parentElement)}}else if(0===t.data.indexOf("resize|")){e.cM("Recevied resize message, resize ad iframe"),e.cM(t);let s=this._getFrameByEvent(t),n=t.data.indexOf("|")+1,o=t.data.slice(n),a=parseFloat(o)+.5;e.cM("New iframe height "+a),s.height=a.toString(),s.parentElement.style.height=a.toString()+"px"}else if(0===t.data.indexOf("getmarkup|")){let s=t.data.indexOf("|")+1,n=t.data.slice(s);e.cM("Recevied get markup message: "+n);let o=this._getFrameByEvent(t).closest(".everyonelovesstackoverflow");const a=document.createElement("script");a.dataset.adZoneId=o.id,a.src=n,document.body.appendChild(a)}else if(0===t.data.indexOf("window-location|")){let s=t.data.indexOf("|")+1,n=t.data.slice(s);e.cM("Recevied window location message: "+n),n.startsWith("/")||(n="/"+n),window.open(window.location.protocol+"//"+window.location.host+n,"_blank")}else if(0===t.data.indexOf("request-brand-survey-submit|")){let s=t.data.split("|"),n=s[1],o=s[2],a=s[3],i=JSON.parse(a);e.cM(n),e.cM(o),e.cM(a),e.cM("Received brand survey "+n+" response message: "+o);var _=new FormData;for(var b in i)_.append(b,i[b]);let r=this._getFrameByEvent(t);if(v.alreadyCompletedThisBrandSurvey(+n))return e.cM("Already completed this brand survey.  Not submitting duplicate to server."),void r.contentWindow.postMessage("response-brand-survey-submit-duplicate|","*");e.cM("Send the brand survey to the server"),fetch(o,{method:"POST",body:_}).then(e=>e.json()).then(e=>r.contentWindow.postMessage({messageType:p},"*")).catch(e=>r.contentWindow.postMessage({messageType:p},"*"))}else if(0===t.data.indexOf("brand-survey-completed-store|")){let s=t.data.split("|"),n=(s[1],s[2]);if(e.cM("Received brand survey completed store message for survey ID "+n),v.alreadyCompletedThisBrandSurvey(+n))return void e.cM("Already completed this brand survey.  Not recording duplicate locally.");e.cM("Record brand survey completion locally"),(new c).recordBrandSurveyCompleted(+n)}else if(0===t.data.indexOf(h)){let s=t.data.split("|"),n=s[1],o=s[2];e.cM("Received message: "+h+" with Brand Survey ID "+o);let a=(new c).getBrandSurveyEngagement().getBrandLineItemImpressions(+n),i=JSON.stringify(a),r=this._getFrameByEvent(t);e.cM("sending impression data: "+i),r.contentWindow.postMessage("response-brand-survey-metadata|"+this.opt.responseHash+"|"+this.opt.perRequestGuid+"|"+i+"|"+this.opt.countryCode+"|"+this.opt.qualtricsSurveyData,"*")}else if(0===t.data.indexOf("refresh-if-duplicate-brand-survey|")){let e=t.data.split("|")[1],s=this.getSlotElementIdByEvent(t);v.refreshAdIfBrandSurveyIsDuplicated(googletag,+e,s)}else if(0===t.data.indexOf(m)){e.cM("Received message: "+m+" with args: "+t.data);let s=t.data.split("|"),n=s[1],o=s[2],a=s[3],i=s[4],r=new FormData;r.append("brandSurveyId",a.toString()),r.append("responseHash",this.opt.responseHash),r.append("perRequestGuid",this.opt.perRequestGuid),r.append("questionNumber",n.toString()),r.append("metricType",i.toString()),fetch(o,{method:"POST",body:r}).then(e=>e.ok).catch(t=>{e.cM("SendMetricToServer: Error sending metric to server: "+t)})}else if(0===t.data.indexOf(u)){e.cM("Received message: "+u+" with args: "+t.data);let s=this._getFrameByEvent(t);if(!this.opt.targeting["so-tag"])return void s.contentWindow.postMessage(f,"*");const n=this.opt.targeting["so-tag"].join(",");e.cM("sending targeting tags: "+n),s.contentWindow.postMessage(f+n,"*")}else e.cM("Received unhandled message")}getSlotElementIdByEvent(e){let t=this._getFrameByEvent(e),s=t.parentElement?.parentElement?.id;return s||""}_getFrameByEvent(e){return Array.from(document.getElementsByTagName("iframe")).filter(t=>t.contentWindow===e.source)[0]}classifyZoneIds(e){const t=e.map(o.Nj).filter(o.yb);return{eligible:t.filter(o.xb).filter(o.pn),ineligible:t.filter(o.xj)}}applyExtraMarginBottom(t){if(t&&t.slot&&!t.isEmpty&&(t.creativeId||t.lineItemId||!t.isEmpty)){var s=t.slot.getSlotElementId();if(s){var o=document.getElementById(s);if(o)if((0,n.eq)(s)){var a=o?.closest(".js-zone-container");a.style.marginBottom="24px",e.cM("Applied extra margin to the bottom of "+s)}else e.cM("Not applying extra margin to the bottom of "+s+": shouldHaveReportButton = false");else e.cM("Not applying extra margin to the bottom of "+s+": resolved invalid adUnit element")}else e.cM("Not applying extra margin to the bottom of element: invalid adUnitElementId")}else e.cM("Not applying extra margin to the bottom of element: invalid SlotRenderEndedEvent")}async load(s=(0,n.kG)()){const r=this.opt.tlb_position===t.Above?["dfp-mlb","dfp-smlb"]:["dfp-mlb","dfp-smlb","dfp-tlb"];if(!this.isGptReady())return e.cM("Initializing..."),this.initGpt(),void googletag.cmd.push(()=>this.load(s));this.opt.adReportEnabled?(e.cM("Ad reporting enabled"),this.adReports=new a.t(googletag,this)):(e.cM("Ad reporting not enabled"),this.handleSlotRenderedNoAdReport()),this.opt.refresh?(e.cM("Ad refresh enabled"),this.adRefresh=new i(googletag,this.opt.refreshInterval)):e.cM("Ad refresh not enabled"),this.opt.brandSurveyEnabled&&(e.cM("Brand Survey enabled"),this.brandSurvey=new g(googletag,this.opt.brandSurveySettings)),e.cM("Attempting to load ads into ids: ",s);const{eligible:d,ineligible:l}=this.classifyZoneIds(s);if(this.initDebugPanel(googletag,d.concat(l)),d.forEach(e=>(0,o.cf)(e)),l.forEach(o.wo),0===d.length)return void e.cM("Found no ad ids on page");e.cM("Eligible ids:",d),this.opt.abd&&this.appendAdblockDetector();var c=googletag.pubads().getSlots();if(c){var p=c.filter(e=>s.indexOf(e.getSlotElementId())>=0);googletag.destroySlots(p)}this.opt.sf&&(googletag.pubads().setForceSafeFrame(!0),googletag.pubads().setSafeFrameConfig({allowOverlayExpansion:!0,allowPushExpansion:!0,sandbox:!0})),e.cM("Targeting consent: Checking...");let h=!1,m=!1;void 0!==this.opt.targeting_consent&&(m=!0,e.cM("Targeting consent: Parameter set"),e.cM("Targeting consent: Consent given? ",this.opt.targeting_consent),h=this.opt.targeting_consent),void 0!==this.opt.personalization_consent&&(e.cM("Personalization consent: Parameter set"),e.cM("Personalization consent: Consent given? ",this.opt.personalization_consent),h=h&&this.opt.personalization_consent),h=h&&m,this.setPrivacySettings(h),this.opt.ll||googletag.pubads().enableSingleRequest(),cam.sreEvent||(googletag.pubads().addEventListener("slotRenderEnded",e=>this.onSlotRendered(e)),cam.sreEvent=!0),await this.setTargeting();var u=d.filter(e=>!this.opt.ll||r.indexOf(e.id)<0),f=d.filter(e=>!!this.opt.ll&&r.indexOf(e.id)>=0);e.cM("Up front ids:",u),e.cM("Lazy loaded ids:",f),u.forEach(t=>{e.cM(`Defining ad for element ${t.id}`),this.defineSlot(t.id,googletag),t.setAttribute("data-dfp-zone","true")}),googletag.enableServices(),u.forEach(t=>{e.cM(`Displaying ad for element ${t.id}`),this.clc_options.dv_enabled?window.onDvtagReady(function(){googletag.display(t.id)}):googletag.cmd.push(()=>googletag.display(t.id))}),this.opt.ll&&(e.cM("Enabling lazy loading for GAM"),googletag.pubads().enableLazyLoad({fetchMarginPercent:0,renderMarginPercent:0}),e.cM("Setting up lazy loaded ad units"),f.forEach(t=>{e.cM(`Lazy loading - Defining Slot ${t.id}`),this.defineSlot(t.id,googletag)}),f.forEach(t=>{e.cM(`Lazy loading - Displaying ad for element ${t.id}`),this.clc_options.dv_enabled?window.onDvtagReady(function(){googletag.display(t.id)}):googletag.cmd.push(()=>googletag.display(t.id))}))}setPrivacySettings(e){e||googletag.pubads().setPrivacySettings({nonPersonalizedAds:!0})}async setTargeting(){if(!googletag)throw new Error("googletag not defined");let t=this.opt.targeting;if(!t)throw new Error("Targeting not defined (is "+typeof t+")");Object.keys(t).forEach(s=>{e.cM(`-> targeting - ${s}: ${t[s]}`),googletag.pubads().setTargeting(s,t[s])});let s=!1;if(void 0!==this.opt.targeting_consent&&(s=this.opt.targeting_consent),s){let t=(new c).getBrandSurveyEngagement();if(t.getTotalBrandImpressions().forEach((t,s)=>{e.cM(`-> targeting - BrandImpressions: ${s}: ${t}`),googletag.pubads().setTargeting("brand_"+s.toString()+"_impressions",t.toString())}),t.surveysIdsCompleted.forEach(t=>{e.cM(`-> targeting - SurveysTaken: ${t}`),googletag.pubads().setTargeting("survey_"+t+"_taken","true")}),this.clc_options.tgt_e&&this.getUserMetaPromise){let t=await this.getUserMetaPromise;t&&t.tgt_acct?(e.cM("-> targeting - User Account: "+t.tgt_acct),googletag.pubads().setTargeting("user-acct",t.tgt_acct.company_name),googletag.pubads().setTargeting("user_acct_top",t.tgt_acct.company_name),googletag.pubads().setTargeting("user_industry",t.tgt_acct.industry),googletag.pubads().setTargeting("user_employee_count",t.tgt_acct.employee_range)):e.cM("-> targeting - User Account: Not Found"),t&&Object.prototype.hasOwnProperty.call(t,"is_high_rep_earner")?(e.cM("-> targeting - High Rep Earner: "+t.is_high_rep_earner),googletag.pubads().setTargeting("IsHighRepEarner",t.is_high_rep_earner?"true":"false")):e.cM("-> targeting - High Rep Earner: not found")}if(localStorage){e.cM('Checking local storage for "jobs-last-clicked" key.');let t=localStorage.getItem("jobs-last-clicked")?"true":"false";e.cM(`-> targeting - jobs_clicked: ${t}`),googletag.pubads().setTargeting("jobs_clicked",t)}}}appendAdblockDetector(){const e=document.createElement("div");e.className="adsbox",e.id="clc-abd",e.style.position="absolute",e.style.pointerEvents="none",e.innerHTML="&nbsp;",document.body.appendChild(e)}onSlotRendered(s){try{const i=s.slot.getSlotElementId();let r=[];i||r.push("id=0");const d=document.getElementById(i);if(i&&!d&&r.push("el=0"),0!==r.length)return void this.stalled(r.join("&"));const{path:l,sizes:c,zone:g}=(0,n.Z7)(i);if(this.collapsed[g]&&s.isEmpty)return e.cM(`No line item for the element #${d.id}... collapsing.`),void(0,o.wo)(d);if(this.slotsRenderedEvents.push(s),s.lineItemId||s.creativeId||!s.isEmpty){e.cM(`Rendered ad for element #${d.id} [line item #${s.lineItemId}]`),e.cM(s);var a=d.parentElement;if(a.classList.contains("js-zone-container")){switch((0,o.cf)(a),i){case"dfp-tlb":this.opt.tlb_position===t.Above?a.classList.add("mb8"):a.classList.add("mt16");break;case"dfp-tag":a.classList.add("mb8");break;case"dfp-msb":a.classList.add("mt16");break;case"dfp-mlb":case"dfp-smlb":case"dfp-bmlb":a.classList.add("my8");break;case"dfp-isb":a.classList.add("mt24");break;case"dfp-m-aq":a.classList.add("my12"),a.classList.add("mx-auto")}(0,o.$Z)(a),(0,o.$Z)(d)}else e.cM(`No ad for element #${d.id}, collapsing`),e.cM(s),(0,o.wo)(d)}}catch(t){e.cM("Exception thrown onSlotRendered"),e.cM(t),this.stalled("e=1")}}stalled(e){(new Image).src=`https://${this.clc_options.h}/stalled.gif?${e}`}defineSlot(t,s){"dfp-isb"===t&&(e.cM("-> targeting - Sidebar: Inline"),s.pubads().setTargeting("Sidebar",["Inline"])),"dfp-tsb"===t&&(e.cM("-> targeting - Sidebar: Right"),s.pubads().setTargeting("Sidebar",["Right"]));const{path:o,sizes:a,zone:i}=(0,n.Z7)(t);e.cM(`Defining slot for ${t}: ${o}, sizes: ${JSON.stringify(a)}`),s.defineSlot(o,a,t).addService(s.pubads())}importGptLibrary(){this.gptImported||(this.gptImported=!0,void 0===this.opt.targeting_consent||this.opt.targeting_consent?(0,o.Gx)("https://securepubads.g.doubleclick.net/tag/js/gpt.js"):(0,o.Gx)("https://pagead2.googlesyndication.com/tag/js/gpt.js"))}importDvLibrary(){this.clc_options.dv_enabled&&(e.cM("Adding DoubleVerify library"),(0,o.Gx)("https://pub.doubleverify.com/dvtag/21569774/DV1289064/pub.js"),e.cM("Adding DoubleVerify onDvtagReady handler"),window.onDvtagReady=function(t,s=750){e.cM("DoubleVerify onDvtagReady called"),window.dvtag=window.dvtag||{},dvtag.cmd=dvtag.cmd||[];const n={callback:t,timeout:s,timestamp:(new Date).getTime()};dvtag.cmd.push(function(){dvtag.queueAdRequest(n)}),setTimeout(function(){const e=n.callback;n.callback=null,e&&e()},s)})}isGptReady(){return"undefined"!=typeof googletag&&!!googletag.apiReady}initGpt(){"undefined"==typeof googletag&&(window.googletag={cmd:(0,o.QZ)(()=>{this.importGptLibrary(),this.importDvLibrary()})})}getUserMeta(){if(this.opt.allowAccountTargetingForThisRequest&&this.clc_options.tgt_e&&this.clc_options.tgt_p>0){if(e.cM("Targeting enabled."),this.clc_options.tgt_p<100){e.cM("Targeting rate limit enabled.  Rolling the dice...");const t=Math.floor(100*Math.random())+1;if(e.cM("Rolled "+t+" and the max is "+this.clc_options.tgt_p),t>this.clc_options.tgt_p)return void e.cM("Will not request targeting.")}return e.cM("Will request targeting."),function(e,t,s,n){if(t){const t=new Headers;return t.append("Accept","application/json"),async function(e,t={},s=5e3){if("number"!=typeof s&&null!=s&&!1!==s){if("string"!=typeof s)throw new Error("fetchWithTimeout: timeout must be a number");if(s=parseInt(s),isNaN(s))throw new Error("fetchWithTimeout: timeout must be a number (or string that can be parsed to a number)")}const n=new AbortController,{signal:o}=n,a=fetch(e,{...t,signal:o}),i=setTimeout(()=>n.abort(),s);try{const e=await a;return clearTimeout(i),e}catch(e){throw clearTimeout(i),e}}(s+"?"+new URLSearchParams({omni:e}),{method:"GET",mode:"cors",headers:t},n).then(e=>e.json())}return Promise.reject("No consent")}(this.opt.omni,this.opt.targeting_consent,this.clc_options.tgt_u,this.clc_options.tgt_to).catch(t=>{e.vU("Error fetching user account targeting"),e.vU(t)})}e.cM("Targeting disabled.  Will not request account targeting data.")}initDebugPanel(t,s){e.cM("initDebugPanel"),e.cM("Not showing debug panel.")}},window.clcGamLoaderOptions&&(cam.init(),cam.load())})()})();</script>
        
    <footer id="footer" class="site-footer js-footer" role="contentinfo">
        <div class="site-footer--container">
            <nav class="site-footer--nav" aria-label="Footer">
                    <div class="site-footer--col">
                        <h5 class="-title"><a href="/">Stack Overflow em Portugu&#xEA;s</a></h5>
                        <ul class="-list js-primary-footer-links">
                                    <li><a class="js-gps-track -link" data-gps-track="footer.click({ location: 2, link: 2 })" href="/tour">Tour</a></li>
                                <li><a href="/help" class="js-gps-track -link" data-gps-track="footer.click({ location: 2, link: 3 })">Ajuda</a></li>
                                    <li><a class="js-gps-track -link" data-gps-track="footer.click({ location: 2, link: 5 })" href="https://chat.stackexchange.com?tab=site&host=pt.stackoverflow.com">Chat</a></li>
                            <li><a class="js-gps-track -link" data-gps-track="footer.click({ location: 2, link: 13 })" href="/contact">Contato</a></li>
                                <li><a class="js-gps-track -link" data-gps-track="footer.click({ location: 2, link: 14 })" href="https://pt.meta.stackoverflow.com">Feedback</a></li>
                        </ul>
                    </div>
                <div class="site-footer--col">
                    <h5 class="-title"><a class="js-gps-track" data-gps-track="footer.click({ location: 2, link: 1 })" href="https://stackoverflow.co/">Empresa</a></h5>
                    <ul class="-list">
                            <li><a href="https://stackoverflow.com" class="js-gps-track -link" data-gps-track="footer.click({ location: 2, link: 15})">Stack Overflow</a></li>
                            <li><a href="https://stackoverflow.co/teams/" class="js-gps-track -link" data-gps-track="footer.click({ location: 2, link: 29 })">Teams</a></li>
                            <li><a href="https://stackoverflow.co/advertising/" class="js-gps-track -link" data-gps-track="footer.click({ location: 2, link: 21 })">Advertising</a></li>
                            <li><a href="https://stackoverflow.co/collectives/" class="js-gps-track -link" data-gps-track="footer.click({ location: 2, link: 40 })">Collectives</a></li>
                            <li><a href="https://stackoverflow.co/advertising/employer-branding/" class="js-gps-track -link" data-gps-track="footer.click({ location: 2, link: 20 })">Talent</a></li>
                                <li><a class="js-gps-track -link" data-gps-track="footer.click({ location: 2, link: 1 })" href="https://stackoverflow.co/">Sobre</a></li>
                        <li><a class="js-gps-track -link" data-gps-track="footer.click({ location: 2, link: 27 })" href="https://stackoverflow.co/company/press/">Imprensa</a></li>
                        <li><a class="js-gps-track -link" data-gps-track="footer.click({ location: 2, link: 7 })" href="https://stackoverflow.com/legal">Legal</a></li>
                        <li><a class="js-gps-track -link" data-gps-track="footer.click({ location: 2, link: 8 })" href="https://stackoverflow.com/legal/privacy-policy">Pol&#xED;tica de Privacidade</a></li>
                        <li><a class="js-gps-track -link" data-gps-track="footer.click({ location: 2, link: 37 })" href="https://stackoverflow.com/legal/terms-of-service/public">Termos de servi&#xE7;o</a></li>
                            <li id="consent-footer-link"><button type="button" data-controller="cookie-settings" data-action="click->cookie-settings#toggle" class="s-btn s-btn__link py4 js-gps-track -link" data-gps-track="footer.click({ location: 2, link: 38 })" data-consent-popup-loader="footer">Configura&#xE7;&#xF5;es dos Cookies</button></li>
                        <li><a class="js-gps-track -link" data-gps-track="footer.click({ location: 2, link: 39 })" href="https://stackoverflow.com/legal/cookie-policy">Pol&#xED;tica dos Cookies</a></li>
                    </ul>
                </div>
                <div class="site-footer--col site-footer--categories-nav">
                    <div>
                        <h5 class="-title"><a href="https://stackexchange.com" data-gps-track="footer.click({ location: 2, link: 30 })">Rede Stack Exchange</a></h5>
                        <ul class="-list">
                            <li>
                                <a href="https://stackexchange.com/sites#technology" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 24 })">
                                    Technology
                                </a>
                            </li>
                            <li>
                                <a href="https://stackexchange.com/sites#culturerecreation" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 24 })">
                                    Culture &amp; recreation
                                </a>
                            </li>
                            <li>
                                <a href="https://stackexchange.com/sites#lifearts" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 24 })">
                                    Life &amp; arts
                                </a>
                            </li>
                            <li>
                                <a href="https://stackexchange.com/sites#science" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 24 })">
                                    Science
                                </a>
                            </li>
                            <li>
                                <a href="https://stackexchange.com/sites#professional" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 24 })">
                                    Professional
                                </a>
                            </li>
                            <li>
                                <a href="https://stackexchange.com/sites#business" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 24 })">
                                    Neg&#xF3;cios
                                </a>
                            </li>

                            <li class="mt16 md:mt0">
                                <a href="https://api.stackexchange.com/" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 24 })">
                                    API
                                </a>
                            </li>

                            <li>
                                <a href="https://data.stackexchange.com/" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 24 })">
                                    Data
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="site-footer--copyright fs-fine md:mt24">
                <ul class="-list -social md:mb8">
                    <li><a class="js-gps-track -link" data-gps-track="footer.click({ location: 2, link:4 })" href="https://stackoverflow.blog?blb=1">Blog</a></li>
                    <li><a href="https://www.facebook.com/officialstackoverflow/" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 31 })">Facebook</a></li>
                    <li><a href="https://twitter.com/stackoverflow" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 32 })">Twitter</a></li>
                    <li><a href="https://linkedin.com/company/stack-overflow" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 33 })">LinkedIn</a></li>
                    <li><a href="https://www.instagram.com/thestackoverflow" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 36 })">Instagram</a></li>
                </ul>

                <p class="md:mb0">
Site design / logo &#169; 2024 Stack Exchange Inc; user contributions licensed under <span class='td-underline'><a href="https://stackoverflow.com/help/licensing">CC BY-SA</a></span>.                    <span id="svnrev">rev&nbsp;2024.8.15.14019</span>
                </p>
            </div>
        </div>

    </footer>


    

            <!-- Google tag (gtag.js) -->
            <script async src="https://www.googletagmanager.com/gtag/js?id=G-S812YQPLT2"></script>
            <script>
                window.dataLayer = window.dataLayer || [];
                function gtag() { dataLayer.push(arguments); }
            </script>
        <script>
            StackExchange.ready(function() {

                var ga3Settings = {
                    autoLink: ["stackoverflow.blog","info.stackoverflowsolutions.com","stackoverflowsolutions.com"],
                    sendTitles: true,
                    tracker: window.ga,
                    trackingCodes: [
                        'UA-108242619-5'
                    ],
                    checkDimension: 'dimension42'
                };

                var customGA4Dimensions = {};


                customGA4Dimensions["requestid"] = "dc258aca-fa29-4b2d-9500-b7e5fd91df97";

                    customGA4Dimensions["routename"] = "Questions/Show";


                    customGA4Dimensions["post_id"] = "295004";


                    customGA4Dimensions["tags"] = "|javascript|";


                var ga4Settings = {
                    tracker: gtag,
                    trackingCodes: [
                        'G-S812YQPLT2'
                    ],
                    consentsToPerformanceCookies: "denied",
                    consentsToTargetingCookies: "granted",
                    eventParameters: customGA4Dimensions,
                    checkForAdBlock: true,
                    sendTitles: true,
                    trackClicks: false,
                };

                StackExchange.ga.init({ GA3: ga3Settings, GA4: ga4Settings });


                StackExchange.ga.setDimension('dimension2', '|javascript|');


                StackExchange.ga.setDimension('dimension3', 'Questions/Show');


                StackExchange.ga.setDimension('dimension7', "1723991229.247628746");

                StackExchange.ga.trackPageView();
            });
        </script>
        
            <script src="https://cdn.cookielaw.org/scripttemplates/otSDKStub.js" charset="UTF-8" data-document-language="true" data-domain-script="0a011478-8083-4749-bb1b-d32dce001aff"></script>
<script defer src="https://cdn.sstatic.net/Js/modules/cookie-consent.pt-BR.js?v=36bebc18e04f"></script>

    
    </body>
    </html>
