<?php
/**
 * Title: Brandbook
 * Slug: greenlight/brandbook
 * Categories: greenlight-general
 * Block Types: core/template-part/brandbook
 */
?>
<?php if(is_glgs_active()): ?>

<!-- wp:greenshift-blocks/element {"id":"gsbp-1e62b9d","inlineCssStyles":".brandbook-wrap \u003e div{box-shadow:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dshadow\u002d\u002dfocus, 0px 2px 4px 0px rgba(0, 0, 0, 0.07));}.gsbp-1e62b9d{display:flex;flex-direction:column;row-gap:20px;}","dynamicGClasses":[{"value":"brandbook-wrap","type":"local","label":"brandbook-wrap","localed":false,"css":"","attributes":[],"originalID":"gsbp-1e62b9d","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[{"value":" \u003e div","attributes":{"styleAttributes":{"boxShadow":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dshadow\u002d\u002dfocus, 0px 2px 4px 0px rgba(0, 0, 0, 0.07))"]}},"css":".brandbook-wrap \u003e div{box-shadow:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dshadow\u002d\u002dfocus, 0px 2px 4px 0px rgba(0, 0, 0, 0.07));}"}]}],"type":"inner","className":"brandbook-wrap","localId":"gsbp-1e62b9d","align":"wide","styleAttributes":{"display":["flex"],"flexDirection":["column"],"rowGap":["20px"]},"customJs":"document.addEventListener('DOMContentLoaded', () =\u003e {\n  const brandColorElements = document.querySelectorAll('.brandcolor');\n  const rootStyles = getComputedStyle(document.documentElement);\n\n  brandColorElements.forEach(element =\u003e {\n    const varName = element.getAttribute('data-var');\n    if (varName) {\n      const colorValue = rootStyles.getPropertyValue(varName.trim());\n      if (colorValue) {\n        element.innerHtml = colorValue.trim();\n        element.classList.add('colordone');\n      }\n    }\n  });\n});","customJsEnabled":true,"metadata":{"name":"BrandBook"}} -->
<div class="brandbook-wrap gsbp-1e62b9d alignwide"><!-- wp:greenshift-blocks/element {"id":"gsbp-2fbac82","inlineCssStyles":"body .scrol-panel{padding-top:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d20, 0.44rem) !important;padding-bottom:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d20, 0.44rem) !important;padding-right:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d50, 1.5rem) !important;padding-left:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d50, 1.5rem) !important;position:sticky !important;top:0px !important;display:flex !important;column-gap:40px !important;}body .scrol-panel a{text-decoration:none !important;font-size:18px !important;}.gsbp-2fbac82{background-color:#ffffff;color:#000000;}.gsbp-2fbac82 a{color:#000000;}","dynamicGClasses":[{"value":"scrol-panel","type":"local","label":"scrol-panel","localed":true,"css":"body .scrol-panel{padding-top:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d20, 0.44rem) !important;padding-bottom:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d20, 0.44rem) !important;padding-right:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d50, 1.5rem) !important;padding-left:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d50, 1.5rem) !important;position:sticky !important;top:0px !important;display:flex !important;column-gap:40px !important;}","attributes":{"styleAttributes":{"paddingTop":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d20, 0.44rem)"],"paddingBottom":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d20, 0.44rem)"],"paddingRight":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d50, 1.5rem)"],"paddingLeft":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d50, 1.5rem)"],"position":["sticky"],"top":["0px"],"display":["flex"],"columnGap":["40px"]}},"originalID":"gsbp-2fbac82","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[{"value":" a","attributes":{"styleAttributes":{"textDecoration":["none"],"fontSize":["18px"]}},"css":"body .scrol-panel a{text-decoration:none !important;font-size:18px !important;}"}]},{"value":"gs-smart-scroll","type":"preset","label":"gs-smart-scroll"}],"type":"inner","className":"scrol-panel gs-smart-scroll is-template-mode","localId":"gsbp-2fbac82","align":"wide","styleAttributes":{"backgroundColor":["#ffffff"],"color_A":["#000000"],"color":["#000000"]},"customJs":"document.addEventListener('DOMContentLoaded', function() {\n    const scrollContainer = document.querySelector('.gs-smart-scroll');\n    if (scrollContainer) {\n        const links = scrollContainer.querySelectorAll('a[href^=\u0022#\u0022]');\n        links.forEach(link =\u003e {\n            link.addEventListener('click', function(e) {\n                e.preventDefault();\n                const href = this.getAttribute('href');\n\n                if (href === '#' || href === '') {\n                    window.scrollTo({\n                        top: 0,\n                        behavior: 'smooth'\n                    });\n                    return;\n                }\n\n                try {\n                    const targetElement = document.querySelector(href);\n                    if (targetElement) {\n                        targetElement.scrollIntoView({\n                            behavior: 'smooth',\n                            block: 'start'\n                        });\n                    }\n                } catch (error) {\n                    console.error(\u0022Invalid selector for smooth scroll:\u0022, href);\n                }\n            });\n        });\n    }\n});","customJsEnabled":true} -->
<div class="scrol-panel gs-smart-scroll is-template-mode gsbp-2fbac82 alignwide"><!-- wp:greenshift-blocks/element {"id":"gsbp-15529ac","textContent":"Colors","tag":"a","localId":"gsbp-15529ac","href":"#colors","isVariation":"divtext"} -->
<a href="#colors">Colors</a>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-9c4046d","textContent":"Typography","tag":"a","localId":"gsbp-9c4046d","href":"#typography","isVariation":"divtext"} -->
<a href="#typography">Typography</a>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-9f5e49d","textContent":"Spacing","tag":"a","localId":"gsbp-9f5e49d","href":"#spacing","isVariation":"divtext"} -->
<a href="#spacing">Spacing</a>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-167c06b","textContent":"Size","tag":"a","localId":"gsbp-167c06b","href":"#size","isVariation":"divtext"} -->
<a href="#size">Size</a>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-d777908","textContent":"Borders","tag":"a","localId":"gsbp-d777908","href":"#borders","isVariation":"divtext"} -->
<a href="#borders">Borders</a>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-aaefac2","textContent":"Shadows","tag":"a","localId":"gsbp-aaefac2","href":"#shadows","isVariation":"divtext"} -->
<a href="#shadows">Shadows</a>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-e40413a","textContent":"Transitions","tag":"a","localId":"gsbp-e40413a","href":"#transitions","isVariation":"divtext"} -->
<a href="#transitions">Transitions</a>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-8c7449e","textContent":"Extra","tag":"a","localId":"gsbp-8c7449e","href":"#extra","isVariation":"divtext"} -->
<a href="#extra">Extra</a>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-1bc0eeb","anchor":"colors","inlineCssStyles":".gsbp-1bc0eeb{color:#000000;}","type":"inner","localId":"gsbp-1bc0eeb","align":"wide","styleAttributes":{"color":["#000000"]},"metadata":{"name":"Colors"}} -->
<div class="gsbp-1bc0eeb alignwide" id="colors"><!-- wp:greenshift-blocks/element {"id":"gspb-DTHotu2","inlineCssStyles":".brand-panel-wrap{display:flex;flex-direction:row;align-items:center;justify-content:space-between;color:rgba(0,0,0,1);background-color:#ecf0f3;padding-top:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d40, 1rem);padding-bottom:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d40, 1rem);padding-right:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d50, 1.5rem);padding-left:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d50, 1.5rem);}.gspb-DTHotu2{color:#000000;}","dynamicGClasses":[{"value":"brand-panel-wrap","type":"local","label":"brand-panel-wrap","localed":false,"css":".brand-panel-wrap{display:flex;flex-direction:row;align-items:center;justify-content:space-between;color:rgba(0,0,0,1);background-color:#ecf0f3;padding-top:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d40, 1rem);padding-bottom:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d40, 1rem);padding-right:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d50, 1.5rem);padding-left:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d50, 1.5rem);}","attributes":{"styleAttributes":{"display":["flex"],"flexDirection":["row"],"alignItems":["center"],"justifyContent":["space-between"],"color":["rgba(0,0,0,1)"],"backgroundColor":["#ecf0f3"],"paddingTop":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d40, 1rem)"],"paddingBottom":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d40, 1rem)"],"paddingRight":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d50, 1.5rem)"],"paddingLeft":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d50, 1.5rem)"]}},"originalID":"gspb-DTHotu2","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"brand-panel-wrap","localId":"gspb-DTHotu2","align":"wide","styleAttributes":{"color":["#000000"]}} -->
<div class="brand-panel-wrap gspb-DTHotu2 alignwide"><!-- wp:greenshift-blocks/element {"id":"gsbp-7bc0611","inlineCssStyles":"body .brand-panel-title:is(h1,h2,h3,h4,h5,h6){font-size:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-size\u002d\u002dxl, clamp(1.6rem, 2.75vw, 1.9rem));line-height:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dline-height\u002d\u002dxl, clamp(2.3rem, 3.45vw, 2.6rem));font-weight:500;margin-top:0px;margin-bottom:0px;}.gsbp-7bc0611{color:#000000;}","dynamicGClasses":[{"value":"brand-panel-title","type":"local","label":"brand-panel-title","localed":false,"css":"body .brand-panel-title:is(h1,h2,h3,h4,h5,h6){font-size:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-size\u002d\u002dxl, clamp(1.6rem, 2.75vw, 1.9rem));line-height:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dline-height\u002d\u002dxl, clamp(2.3rem, 3.45vw, 2.6rem));font-weight:500;margin-top:0px;margin-bottom:0px;}","attributes":{"styleAttributes":{"fontSize":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-size\u002d\u002dxl, clamp(1.6rem, 2.75vw, 1.9rem))"],"lineHeight":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dline-height\u002d\u002dxl, clamp(2.3rem, 3.45vw, 2.6rem))"],"fontWeight":["500"],"marginTop":["0px"],"marginBottom":["0px"]}},"originalID":"gsbp-7bc0611","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"textContent":"Colors","tag":"h2","className":"brand-panel-title","localId":"gsbp-7bc0611","styleAttributes":{"color":["#000000"]},"isVariation":"divtext"} -->
<h2 class="brand-panel-title gsbp-7bc0611">Colors</h2>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gspb-NdoVExv","inlineCssStyles":".gspb-NdoVExv{display:flex;flex-direction:column;column-gap:0px;row-gap:0px;justify-content:flex-start;color:rgba(0,0,0,1);}","type":"inner","localId":"gspb-NdoVExv","styleAttributes":{"display":["flex"],"flexDirection":["column"],"columnGap":["0px"],"rowGap":["0px"],"justifyContent":["flex-start"],"color":["rgba(0,0,0,1)"]}} -->
<div class="gspb-NdoVExv"><!-- wp:greenshift-blocks/element {"id":"gspb-7UE8MMY","inlineCssStyles":".brand-panel-subtitle{text-align:right;font-size:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-size\u002d\u002ds, 1rem);line-height:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dline-height\u002d\u002ds, 1.4rem);font-weight:400;color:rgba(127,134,143,1);}.gspb-7UE8MMY{color:#000000;}","dynamicGClasses":[{"value":"brand-panel-subtitle","type":"local","label":"brand-panel-subtitle","localed":false,"css":".brand-panel-subtitle{text-align:right;font-size:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-size\u002d\u002ds, 1rem);line-height:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dline-height\u002d\u002ds, 1.4rem);font-weight:400;color:rgba(127,134,143,1);}","attributes":{"styleAttributes":{"textAlign":["right"],"fontSize":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-size\u002d\u002ds, 1rem)"],"lineHeight":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dline-height\u002d\u002ds, 1.4rem)"],"fontWeight":[400],"color":["rgba(127,134,143,1)"]}},"originalID":"gspb-7UE8MMY","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"textContent":"Color styles","className":"brand-panel-subtitle","localId":"gspb-7UE8MMY","styleAttributes":{"color":["#000000"]}} -->
<div class="brand-panel-subtitle gspb-7UE8MMY">Color styles</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gspb-gf0ZxC0","inlineCssStyles":".brand-panel-subsub{text-align:right;font-size:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-size\u002d\u002ds, 1rem);font-weight:500;color:rgba(0,0,0,1);line-height:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dline-height\u002d\u002ds, 1.4rem);}.gspb-gf0ZxC0{color:#000000;}","dynamicGClasses":[{"value":"brand-panel-subsub","type":"local","label":"brand-panel-subsub","localed":false,"css":".brand-panel-subsub{text-align:right;font-size:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-size\u002d\u002ds, 1rem);font-weight:500;color:rgba(0,0,0,1);line-height:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dline-height\u002d\u002ds, 1.4rem);}","attributes":{"styleAttributes":{"textAlign":["right"],"fontSize":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-size\u002d\u002ds, 1rem)"],"fontWeight":[500],"color":["rgba(0,0,0,1)"],"lineHeight":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dline-height\u002d\u002ds, 1.4rem)"]}},"originalID":"gspb-gf0ZxC0","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"textContent":"Color Schema","className":"brand-panel-subsub","localId":"gspb-gf0ZxC0","styleAttributes":{"color":["#000000"]}} -->
<div class="brand-panel-subsub gspb-gf0ZxC0">Color Schema</div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gspb-ZzWr1uD","inlineCssStyles":".brand-panel-content{color:rgba(0,0,0,1);background-color:rgba(255,255,255,1);margin-top:0px;padding-top:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d60, 2.25rem);padding-bottom:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d60, 2.25rem);padding-right:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d60, 2.25rem);padding-left:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d60, 2.25rem);}@media (max-width: 575.98px){.brand-panel-content{padding-top:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d50, 1.5rem);padding-bottom:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d50, 1.5rem);padding-right:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d40, 1rem);padding-left:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d40, 1rem);}}.gspb-ZzWr1uD{color:#000000;}","dynamicGClasses":[{"value":"brand-panel-content","type":"local","label":"brand-panel-content","localed":false,"css":".brand-panel-content{color:rgba(0,0,0,1);background-color:rgba(255,255,255,1);margin-top:0px;padding-top:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d60, 2.25rem);padding-bottom:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d60, 2.25rem);padding-right:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d60, 2.25rem);padding-left:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d60, 2.25rem);}@media (max-width: 575.98px){.brand-panel-content{padding-top:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d50, 1.5rem);padding-bottom:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d50, 1.5rem);padding-right:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d40, 1rem);padding-left:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d40, 1rem);}}","attributes":{"styleAttributes":{"color":["rgba(0,0,0,1)"],"backgroundColor":["rgba(255,255,255,1)"],"marginTop":["0px"],"paddingTop":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d60, 2.25rem)",null,null,"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d50, 1.5rem)"],"paddingBottom":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d60, 2.25rem)",null,null,"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d50, 1.5rem)"],"paddingRight":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d60, 2.25rem)",null,null,"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d40, 1rem)"],"paddingLeft":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d60, 2.25rem)",null,null,"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d40, 1rem)"]}},"originalID":"gspb-ZzWr1uD","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"brand-panel-content","localId":"gspb-ZzWr1uD","align":"wide","styleAttributes":{"color":["#000000"]}} -->
<div class="brand-panel-content gspb-ZzWr1uD alignwide"><!-- wp:greenshift-blocks/element {"id":"gspb-xcmq46f","inlineCssStyles":".gspb-xcmq46f{flex-direction:row;column-gap:20px;row-gap:20px;align-items:stretch;justify-content:space-between;color:rgba(0,0,0,1);display:flex;}.gspb-xcmq46f\u003e*:not(style):nth-of-type(4n+1){width:calc(25% - (20px * (4 - 1) / 4));}@media (max-width: 991.98px){.gspb-xcmq46f\u003e*:not(style):nth-of-type(4n+1){width:calc(50% - (20px * (4 - 1) / 4));}}@media (max-width: 575.98px){.gspb-xcmq46f\u003e*:not(style):nth-of-type(4n+1){width:100%;}}.gspb-xcmq46f\u003e*:not(style):nth-of-type(4n+2){width:calc(25% - (20px * (4 - 1) / 4));}@media (max-width: 991.98px){.gspb-xcmq46f\u003e*:not(style):nth-of-type(4n+2){width:calc(50% - (20px * (4 - 1) / 4));}}@media (max-width: 575.98px){.gspb-xcmq46f\u003e*:not(style):nth-of-type(4n+2){width:100%;}}.gspb-xcmq46f\u003e*:not(style):nth-of-type(4n+3){width:calc(25% - (20px * (4 - 1) / 4));}@media (max-width: 991.98px){.gspb-xcmq46f\u003e*:not(style):nth-of-type(4n+3){width:calc(50% - (20px * (4 - 1) / 4));}}@media (max-width: 575.98px){.gspb-xcmq46f\u003e*:not(style):nth-of-type(4n+3){width:100%;}}.gspb-xcmq46f\u003e*:not(style):nth-of-type(4n+4){width:calc(25% - (20px * (4 - 1) / 4));}@media (max-width: 991.98px){.gspb-xcmq46f\u003e*:not(style):nth-of-type(4n+4){width:calc(50% - (20px * (4 - 1) / 4));}}@media (max-width: 575.98px){.gspb-xcmq46f\u003e*:not(style):nth-of-type(4n+4){width:100%;}}.gspb-xcmq46f{flex-wrap:wrap;}","type":"inner","localId":"gspb-xcmq46f","styleAttributes":{"flexDirection":["row"],"columnGap":["20px"],"rowGap":["20px"],"alignItems":["stretch"],"justifyContent":["space-between"],"color":["rgba(0,0,0,1)"],"gridLayout_Extra":{"desktop":{"layouts":[{"w":1,"h":1,"x":0,"y":0,"i":"0","moved":false,"static":false},{"w":1,"h":1,"x":1,"y":0,"i":"1","moved":false,"static":false},{"w":1,"h":1,"x":2,"y":0,"i":"2","moved":false,"static":false},{"w":1,"h":1,"x":3,"y":0,"i":"3","moved":false,"static":false}],"cols":4,"allowOverlap":false,"compactType":"horizontal"},"tablet":{"layouts":[{"i":"0","x":0,"y":0,"w":1,"h":1},{"i":"1","x":1,"y":0,"w":1,"h":1},{"i":"2","x":0,"y":1,"w":1,"h":1},{"i":"3","x":1,"y":1,"w":1,"h":1}],"cols":3,"allowOverlap":false,"compactType":"horizontal"},"mobile":{"layouts":[{"i":"0","x":0,"y":0,"w":1,"h":1},{"i":"1","x":0,"y":1,"w":1,"h":1},{"i":"2","x":0,"y":2,"w":1,"h":1},{"i":"3","x":0,"y":3,"w":1,"h":1}],"cols":1,"allowOverlap":false,"compactType":"horizontal"}},"gridLayoutItems_Extra":4,"display":["flex"],"flexColumns_Extra":4,"flexWidths_Extra":{"desktop":{"name":"25/25/25/25","widths":[25,25,25,25]},"tablet":{"name":"50/50/50/50","widths":[50,50,50,50]},"mobile":{"name":"100/100/100/100","widths":[100,100,100,100]}}}} -->
<div class="gspb-xcmq46f"><!-- wp:greenshift-blocks/element {"id":"gspb-afywK2O","inlineCssStyles":".brand-panel-color-panel{display:flex;flex-direction:column;row-gap:50px;align-items:stretch;justify-content:space-between;border-top-left-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmini, 5px);border-top-right-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmini, 5px);border-bottom-right-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmini, 5px);border-bottom-left-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmini, 5px);border-style:solid;border-color:#d8dfe378;borde-width:1;color:rgba(0,0,0,1);background-color:rgba(255,255,255,1);padding-top:14.5rem;padding-bottom:1.2rem;padding-right:1.2rem;padding-left:1.2rem;border-width:1px;}.brand-panel-color-panel:hover .firstcolor{display:none;}.brand-panel-color-panel .hoversecond{display:none;}.brand-panel-color-panel:hover .hoversecond{display:flex;}.gspb-afywK2O{background-color:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dbrand, #33EFAB);anchor-name:\u002d\u002dpopover_gspb-afywK2O;color:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dtext-on-brand, #000002);}.gspb-afywK2O a{color:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dtext-on-brand, #000002);}.gspb-afywK2O:hover a{color:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dtext-on-brand-hover, #000003);}.gspb-afywK2O:hover{background-color:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dbrand-hover, #7AFFCE);color:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dtext-on-brand, #000002);}","dynamicGClasses":[{"value":"brand-panel-color-panel","type":"local","label":"brand-panel-color-panel","localed":false,"css":".brand-panel-color-panel{display:flex;flex-direction:column;row-gap:50px;align-items:stretch;justify-content:space-between;border-top-left-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmini, 5px);border-top-right-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmini, 5px);border-bottom-right-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmini, 5px);border-bottom-left-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmini, 5px);border-style:solid;border-color:#d8dfe378;borde-width:1;color:rgba(0,0,0,1);background-color:rgba(255,255,255,1);padding-top:14.5rem;padding-bottom:1.2rem;padding-right:1.2rem;padding-left:1.2rem;border-width:1px;}","attributes":{"styleAttributes":{"display":["flex"],"flexDirection":["column"],"rowGap":["50px"],"alignItems":["stretch"],"justifyContent":["space-between"],"borderTopLeftRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmini, 5px)"],"borderTopRightRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmini, 5px)"],"borderBottomRightRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmini, 5px)"],"borderBottomLeftRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmini, 5px)"],"borderStyle":["solid"],"borderColor":["#d8dfe378"],"bordeWidth":[1],"color":["rgba(0,0,0,1)"],"backgroundColor":["rgba(255,255,255,1)"],"paddingTop":["14.5rem"],"paddingBottom":["1.2rem"],"paddingRight":["1.2rem"],"paddingLeft":["1.2rem"],"borderWidth":["1px"],"borderRadiusCustom_Extra":false,"borderRadiusLink_Extra":true}},"originalID":"gspb-afywK2O","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[{"value":" .firstcolor","attributes":[],"css":""},{"value":":hover .firstcolor","attributes":{"styleAttributes":{"display":["none"]}},"css":".brand-panel-color-panel:hover .firstcolor{display:none;}"},{"value":" .hoversecond","attributes":{"styleAttributes":{"display":["none"]}},"css":".brand-panel-color-panel .hoversecond{display:none;}"},{"value":":hover .hoversecond","attributes":{"styleAttributes":{"display":["flex"]}},"css":".brand-panel-color-panel:hover .hoversecond{display:flex;}"}]},{"value":"gs-parent-hover","type":"preset","label":"gs-parent-hover"}],"interactionLayers":[],"type":"inner","className":"brand-panel-color-panel gs-parent-hover","localId":"gspb-afywK2O","dynamicAttributes":[{"name":"popover-control","value":"popover_gspb-afywK2O"}],"styleAttributes":{"backgroundColor":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dbrand, #33EFAB)"],"anchorName":["\u002d\u002dpopover_gspb-afywK2O"],"color":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dtext-on-brand, #000002)"],"color_A":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dtext-on-brand, #000002)"],"backgroundColor_hover":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dbrand-hover, #7AFFCE)"],"color_A_hover":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dtext-on-brand-hover, #000003)"],"color_hover":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dtext-on-brand, #000002)"]}} -->
<div class="brand-panel-color-panel gs-parent-hover gspb-afywK2O" popover-control="popover_gspb-afywK2O"><!-- wp:greenshift-blocks/element {"id":"gspb-E4-zRjc","inlineCssStyles":".gspb-E4-zRjc{display:flex;flex-direction:column;column-gap:16px;row-gap:16px;justify-content:flex-start;}","type":"inner","className":"firstcolor","localId":"gspb-E4-zRjc","styleAttributes":{"display":["flex"],"flexDirection":["column"],"columnGap":["16px"],"rowGap":["16px"],"justifyContent":["flex-start"]}} -->
<div class="firstcolor gspb-E4-zRjc"><!-- wp:greenshift-blocks/element {"id":"gspb\u002d\u002d7kWTeo","inlineCssStyles":".brand-panel-color-title{text-align:left;font-size:21px;line-height:130%;font-weight:600;}.gspb\u002d\u002d7kWTeo{color:#000000;}","dynamicGClasses":[{"value":"brand-panel-color-title","type":"local","label":"brand-panel-color-title","localed":false,"css":".brand-panel-color-title{text-align:left;font-size:21px;line-height:130%;font-weight:600;}","attributes":{"styleAttributes":{"textAlign":["left"],"fontSize":["21px"],"lineHeight":["130%"],"fontWeight":[600]}},"originalID":"gspb\u002d\u002d7kWTeo","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"textContent":"Brand Color","className":"brand-panel-color-title","localId":"gspb\u002d\u002d7kWTeo","styleAttributes":{"color":["#000000"]}} -->
<div class="brand-panel-color-title gspb--7kWTeo">Brand Color</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gspb-ITAE0Hv","inlineCssStyles":".gspb-ITAE0Hv{display:flex;flex-direction:column;column-gap:0px;row-gap:0px;justify-content:flex-start;}","type":"inner","localId":"gspb-ITAE0Hv","styleAttributes":{"display":["flex"],"flexDirection":["column"],"columnGap":["0px"],"rowGap":["0px"],"justifyContent":["flex-start"]}} -->
<div class="gspb-ITAE0Hv"><!-- wp:greenshift-blocks/element {"id":"gspb-QD6l7PG","inlineCssStyles":".brand-panel-color-color{text-align:left;font-size:18px;line-height:140%;font-weight:400;}.gspb-QD6l7PG{color:#000000;}","dynamicGClasses":[{"value":"brand-panel-color-color","type":"local","label":"brand-panel-color-color","localed":false,"css":".brand-panel-color-color{text-align:left;font-size:18px;line-height:140%;font-weight:400;}","attributes":{"styleAttributes":{"textAlign":["left"],"fontSize":["18px"],"lineHeight":["140%"],"fontWeight":[400]}},"originalID":"gspb-QD6l7PG","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"textContent":"#33EFAB","className":"brand-panel-color-color brandcolor","localId":"gspb-QD6l7PG","dynamicAttributes":[{"name":"data-var","value":"\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dbrand"}],"styleAttributes":{"color":["#000000"]}} -->
<div class="brand-panel-color-color brandcolor gspb-QD6l7PG" data-var="--wp--preset--color--brand">#33EFAB</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gspb-737pHLr","inlineCssStyles":".brand-panel-color-var{text-align:left;font-size:14px;line-height:150%;font-weight:400;opacity:0.4;}.gspb-737pHLr{color:#000000;}","dynamicGClasses":[{"value":"brand-panel-color-var","type":"local","label":"brand-panel-color-var","localed":false,"css":".brand-panel-color-var{text-align:left;font-size:14px;line-height:150%;font-weight:400;opacity:0.4;}","attributes":{"styleAttributes":{"textAlign":["left"],"fontSize":["14px"],"lineHeight":["150%"],"fontWeight":[400],"opacity":[0.4]}},"originalID":"gspb-737pHLr","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"textContent":"\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dbrand","className":"brand-panel-color-var","localId":"gspb-737pHLr","styleAttributes":{"color":["#000000"]}} -->
<div class="brand-panel-color-var gspb-737pHLr">--wp--preset--color--brand</div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-77956a8","inlineCssStyles":".gsbp-77956a8{display:flex;flex-direction:column;column-gap:16px;row-gap:16px;justify-content:flex-start;}","type":"inner","className":"hoversecond","localId":"gsbp-77956a8","styleAttributes":{"display":["flex"],"flexDirection":["column"],"columnGap":["16px"],"rowGap":["16px"],"justifyContent":["flex-start"]}} -->
<div class="hoversecond gsbp-77956a8"><!-- wp:greenshift-blocks/element {"id":"gsbp-d46f9d1","inlineCssStyles":".gsbp-d46f9d1{color:#000000;}","dynamicGClasses":[],"textContent":"Brand Hover Color","className":"brand-panel-color-title","localId":"gsbp-d46f9d1","styleAttributes":{"color":["#000000"]}} -->
<div class="brand-panel-color-title gsbp-d46f9d1">Brand Hover Color</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-d068486","inlineCssStyles":".gsbp-d068486{display:flex;flex-direction:column;column-gap:0px;row-gap:0px;justify-content:flex-start;}","type":"inner","localId":"gsbp-d068486","styleAttributes":{"display":["flex"],"flexDirection":["column"],"columnGap":["0px"],"rowGap":["0px"],"justifyContent":["flex-start"]}} -->
<div class="gsbp-d068486"><!-- wp:greenshift-blocks/element {"id":"gsbp-3e15de9","inlineCssStyles":".gsbp-3e15de9{color:#000000;}","dynamicGClasses":[{"value":"brand-panel-color-color","type":"local","label":"brand-panel-color-color","localed":false,"css":"","attributes":[],"originalID":"gspb-QD6l7PG","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"textContent":"#7AFFCE","className":"brand-panel-color-color hoverbrand brandcolor","localId":"gsbp-3e15de9","dynamicAttributes":[{"name":"data-var","value":"\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dbrand-hover"}],"styleAttributes":{"color":["#000000"]}} -->
<div class="brand-panel-color-color hoverbrand brandcolor gsbp-3e15de9" data-var="--wp--preset--color--brand-hover">#7AFFCE</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-44c17db","inlineCssStyles":".gsbp-44c17db{color:#000000;}","dynamicGClasses":[{"value":"brand-panel-color-var","type":"local","label":"brand-panel-color-var","localed":false,"css":"","attributes":[],"originalID":"gspb-737pHLr","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"textContent":"\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dbrand-hover","className":"brand-panel-color-var","localId":"gsbp-44c17db","styleAttributes":{"color":["#000000"]}} -->
<div class="brand-panel-color-var gsbp-44c17db">--wp--preset--color--brand-hover</div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-ec1fcc5","inlineCssStyles":".gsbp-ec1fcc5{background-color:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dsecondary, #340fa0);anchor-name:\u002d\u002dpopover_gspb-afywK2O;color:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dtext-on-secondary, #fffffc);}.gsbp-ec1fcc5 a{color:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dtext-on-secondary, #fffffc);}.gsbp-ec1fcc5:hover a{color:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dtext-on-secondary-hover, #fffffd);}.gsbp-ec1fcc5:hover{background-color:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dsecondary-hover, #441999);color:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dtext-on-secondary-hover, #fffffd);}","dynamicGClasses":[{"value":"brand-panel-color-panel","type":"local","label":"brand-panel-color-panel","localed":false,"css":"","attributes":[],"originalID":"gspb-afywK2O","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"interactionLayers":[],"type":"inner","className":"brand-panel-color-panel","localId":"gsbp-ec1fcc5","dynamicAttributes":[{"name":"popover-control","value":"popover_gspb-afywK2O"}],"styleAttributes":{"backgroundColor":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dsecondary, #340fa0)"],"anchorName":["\u002d\u002dpopover_gspb-afywK2O"],"color_A":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dtext-on-secondary, #fffffc)"],"color":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dtext-on-secondary, #fffffc)"],"backgroundColor_hover":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dsecondary-hover, #441999)"],"color_A_hover":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dtext-on-secondary-hover, #fffffd)"],"color_hover":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dtext-on-secondary-hover, #fffffd)"]}} -->
<div class="brand-panel-color-panel gsbp-ec1fcc5" popover-control="popover_gspb-afywK2O"><!-- wp:greenshift-blocks/element {"id":"gsbp-d0cb355","inlineCssStyles":".gsbp-d0cb355{display:flex;flex-direction:column;column-gap:16px;row-gap:16px;justify-content:flex-start;}","type":"inner","className":"","localId":"gsbp-d0cb355","styleAttributes":{"display":["flex"],"flexDirection":["column"],"columnGap":["16px"],"rowGap":["16px"],"justifyContent":["flex-start"]}} -->
<div class="gsbp-d0cb355"><!-- wp:greenshift-blocks/element {"id":"gsbp-70c19c8","inlineCssStyles":"","dynamicGClasses":[{"value":"brand-panel-color-title","type":"local","label":"brand-panel-color-title","localed":false,"css":"","attributes":[],"originalID":"gspb\u002d\u002d7kWTeo","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"textContent":"Secondary Color","className":"brand-panel-color-title gsbp-70c19c8","localId":"gsbp-70c19c8"} -->
<div class="brand-panel-color-title gsbp-70c19c8">Secondary Color</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-b4dbe52","inlineCssStyles":".gsbp-b4dbe52{display:flex;flex-direction:column;column-gap:0px;row-gap:0px;justify-content:flex-start;}","type":"inner","localId":"gsbp-b4dbe52","styleAttributes":{"display":["flex"],"flexDirection":["column"],"columnGap":["0px"],"rowGap":["0px"],"justifyContent":["flex-start"]}} -->
<div class="gsbp-b4dbe52"><!-- wp:greenshift-blocks/element {"id":"gsbp-37f58d7","inlineCssStyles":"","dynamicGClasses":[{"value":"brand-panel-color-color","type":"local","label":"brand-panel-color-color","localed":false,"css":"","attributes":[],"originalID":"gspb-QD6l7PG","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"textContent":"#340FA0","className":"brand-panel-color-color brandcolor gsbp-37f58d7","localId":"gsbp-37f58d7","dynamicAttributes":[{"name":"data-var","value":"\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dsecondary"}]} -->
<div class="brand-panel-color-color brandcolor gsbp-37f58d7" data-var="--wp--preset--color--secondary">#340FA0</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-4fb3967","inlineCssStyles":"","dynamicGClasses":[{"value":"brand-panel-color-var","type":"local","label":"brand-panel-color-var","localed":false,"css":"","attributes":[],"originalID":"gspb-737pHLr","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"textContent":"\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dsecondary","className":"brand-panel-color-var gsbp-4fb3967","localId":"gsbp-4fb3967"} -->
<div class="brand-panel-color-var gsbp-4fb3967">--wp--preset--color--secondary</div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-600ad26","inlineCssStyles":".gsbp-600ad26{background-color:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dcard-background, #fcfcfc);anchor-name:\u002d\u002dpopover_gspb-afywK2O;border-style:solid;border-width:1px;border-color:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dcard-border, #f0f0f0);color:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dcard-text, #333333);}","dynamicGClasses":[{"value":"brand-panel-color-panel","type":"local","label":"brand-panel-color-panel","localed":false,"css":"","attributes":[],"originalID":"gspb-afywK2O","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"interactionLayers":[],"type":"inner","className":"brand-panel-color-panel","localId":"gsbp-600ad26","dynamicAttributes":[{"name":"popover-control","value":"popover_gspb-afywK2O"}],"styleAttributes":{"backgroundColor":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dcard-background, #fcfcfc)"],"anchorName":["\u002d\u002dpopover_gspb-afywK2O"],"borderStyle":["solid"],"borderWidth":["1px"],"borderColor":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dcard-border, #f0f0f0)"],"color":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dcard-text, #333333)"]}} -->
<div class="brand-panel-color-panel gsbp-600ad26" popover-control="popover_gspb-afywK2O"><!-- wp:greenshift-blocks/element {"id":"gsbp-d8d3751","inlineCssStyles":".gsbp-d8d3751{display:flex;flex-direction:column;column-gap:16px;row-gap:16px;justify-content:flex-start;}","type":"inner","className":"","localId":"gsbp-d8d3751","styleAttributes":{"display":["flex"],"flexDirection":["column"],"columnGap":["16px"],"rowGap":["16px"],"justifyContent":["flex-start"]}} -->
<div class="gsbp-d8d3751"><!-- wp:greenshift-blocks/element {"id":"gsbp-8724bd0","inlineCssStyles":"","dynamicGClasses":[{"value":"brand-panel-color-title","type":"local","label":"brand-panel-color-title","localed":false,"css":"","attributes":[],"originalID":"gspb\u002d\u002d7kWTeo","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"textContent":"Card Colors","className":"brand-panel-color-title gsbp-8724bd0","localId":"gsbp-8724bd0"} -->
<div class="brand-panel-color-title gsbp-8724bd0">Card Colors</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-1336562","inlineCssStyles":".gsbp-1336562{display:flex;flex-direction:column;column-gap:0px;row-gap:0px;justify-content:flex-start;}","type":"inner","localId":"gsbp-1336562","styleAttributes":{"display":["flex"],"flexDirection":["column"],"columnGap":["0px"],"rowGap":["0px"],"justifyContent":["flex-start"]}} -->
<div class="gsbp-1336562"><!-- wp:greenshift-blocks/element {"id":"gsbp-486f796","inlineCssStyles":".gsbp-486f796{color:#000000;}","dynamicGClasses":[{"value":"brand-panel-color-color","type":"local","label":"brand-panel-color-color","localed":false,"css":"","attributes":[],"originalID":"gspb-QD6l7PG","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"textContent":"#FCFCFC","className":"brand-panel-color-color brandcolor","localId":"gsbp-486f796","dynamicAttributes":[{"name":"data-var","value":"\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dcard-base"}],"styleAttributes":{"color":["#000000"]}} -->
<div class="brand-panel-color-color brandcolor gsbp-486f796" data-var="--wp--preset--color--card-base">#FCFCFC</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-3aece15","inlineCssStyles":".gsbp-3aece15{color:#000000;}","dynamicGClasses":[{"value":"brand-panel-color-var","type":"local","label":"brand-panel-color-var","localed":false,"css":"","attributes":[],"originalID":"gspb-737pHLr","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"textContent":"\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dcard-base","className":"brand-panel-color-var","localId":"gsbp-3aece15","styleAttributes":{"color":["#000000"]}} -->
<div class="brand-panel-color-var gsbp-3aece15">--wp--preset--color--card-base</div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-7cca01c","inlineCssStyles":".gsbp-7cca01c{background-color:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dbackground, #f9f9f9);anchor-name:\u002d\u002dpopover_gspb-afywK2O;border-style:solid;border-width:1px;border-color:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dcard-border, #f0f0f0);color:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dtextcolor, #333333);}","dynamicGClasses":[{"value":"brand-panel-color-panel","type":"local","label":"brand-panel-color-panel","localed":false,"css":"","attributes":[],"originalID":"gspb-afywK2O","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"interactionLayers":[],"type":"inner","className":"brand-panel-color-panel","localId":"gsbp-7cca01c","dynamicAttributes":[{"name":"popover-control","value":"popover_gspb-afywK2O"}],"styleAttributes":{"backgroundColor":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dbackground, #f9f9f9)"],"anchorName":["\u002d\u002dpopover_gspb-afywK2O"],"borderStyle":["solid"],"borderWidth":["1px"],"borderColor":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dcard-border, #f0f0f0)"],"color":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dtextcolor, #333333)"]}} -->
<div class="brand-panel-color-panel gsbp-7cca01c" popover-control="popover_gspb-afywK2O"><!-- wp:greenshift-blocks/element {"id":"gsbp-7731da7","inlineCssStyles":".gsbp-7731da7{display:flex;flex-direction:column;column-gap:16px;row-gap:16px;justify-content:flex-start;}","type":"inner","className":"","localId":"gsbp-7731da7","styleAttributes":{"display":["flex"],"flexDirection":["column"],"columnGap":["16px"],"rowGap":["16px"],"justifyContent":["flex-start"]}} -->
<div class="gsbp-7731da7"><!-- wp:greenshift-blocks/element {"id":"gsbp-65f999b","inlineCssStyles":".gsbp-65f999b{color:#000000;}","dynamicGClasses":[{"value":"brand-panel-color-title","type":"local","label":"brand-panel-color-title","localed":false,"css":"","attributes":[],"originalID":"gspb\u002d\u002d7kWTeo","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"textContent":"Content Colors","className":"brand-panel-color-title gsbp-8724bd0 gsbp-65f999b","localId":"gsbp-65f999b","styleAttributes":{"color":["#000000"]}} -->
<div class="brand-panel-color-title gsbp-8724bd0 gsbp-65f999b gsbp-65f999b">Content Colors</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-7bc1763","inlineCssStyles":".gsbp-7bc1763{display:flex;flex-direction:column;column-gap:0px;row-gap:0px;justify-content:flex-start;}","type":"inner","localId":"gsbp-7bc1763","styleAttributes":{"display":["flex"],"flexDirection":["column"],"columnGap":["0px"],"rowGap":["0px"],"justifyContent":["flex-start"]}} -->
<div class="gsbp-7bc1763"><!-- wp:greenshift-blocks/element {"id":"gsbp-b060455","inlineCssStyles":".gsbp-b060455{color:#000000;}","dynamicGClasses":[{"value":"brand-panel-color-color","type":"local","label":"brand-panel-color-color","localed":false,"css":"","attributes":[],"originalID":"gspb-QD6l7PG","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"textContent":"#F9F9F9","className":"brand-panel-color-color brandcolor","localId":"gsbp-b060455","dynamicAttributes":[{"name":"data-var","value":"\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dbackground"}],"styleAttributes":{"color":["#000000"]}} -->
<div class="brand-panel-color-color brandcolor gsbp-b060455" data-var="--wp--preset--color--background">#F9F9F9</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-7701d5e","inlineCssStyles":".gsbp-7701d5e{color:#000000;}","dynamicGClasses":[{"value":"brand-panel-color-var","type":"local","label":"brand-panel-color-var","localed":false,"css":"","attributes":[],"originalID":"gspb-737pHLr","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"textContent":"\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dbackground","className":"brand-panel-color-var","localId":"gsbp-7701d5e","styleAttributes":{"color":["#000000"]}} -->
<div class="brand-panel-color-var gsbp-7701d5e">--wp--preset--color--background</div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-0383712","inlineCssStyles":".gsbp-0383712{font-size:20px;font-weight:600;margin-top:40px;margin-bottom:40px;}","textContent":"Overview","localId":"gsbp-0383712","styleAttributes":{"fontSize":["20px"],"fontWeight":["600"],"marginTop":["40px"],"marginBottom":["40px"]},"isVariation":"divtext"} -->
<div class="gsbp-0383712">Overview</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-44f14a4","inlineCssStyles":".gsbp-44f14a4{border-collapse:collapse;table-layout:fixed;}.gsbp-44f14a4 td{padding-top:10px;padding-bottom:10px;padding-right:12px;padding-left:12px;border-style:solid;border-width:1px;border-color:#00000012;font-size:14px;}.gsbp-44f14a4 th{padding-top:6px;padding-bottom:6px;padding-right:12px;padding-left:12px;border-style:solid;border-width:1px;border-color:#00000012;font-size:16px;background-color:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dlightbg, #cddceb21);}.table-colors .color-table-color{margin-right:auto;margin-left:auto;width:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dr, 40px);height:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dr, 40px);border-bottom-left-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dcircle, 50%);border-bottom-right-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dcircle, 50%);border-top-left-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dcircle, 50%);border-top-right-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dcircle, 50%);}.table-colors .color-title-table{font-size:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-size\u002d\u002ds, 1rem);line-height:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dline-height\u002d\u002ds, 1.4rem);font-weight:600;}.table-colors .color-var-table{line-height:1.2rem;opacity:0.4;}.gsbp-44f14a4{width:100%;}","dynamicGClasses":[{"value":"table-colors","type":"local","label":"table-colors","localed":false,"css":"","attributes":[],"originalID":"gsbp-44f14a4","originalBlock":"greenshift-blocks/element","tag":"table","selectors":[{"value":" .color-table-color","attributes":{"styleAttributes":{"marginRight":["auto"],"marginLeft":["auto"],"width":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dr, 40px)"],"height":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dr, 40px)"],"borderBottomLeftRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dcircle, 50%)"],"borderBottomRightRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dcircle, 50%)"],"borderTopLeftRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dcircle, 50%)"],"borderTopRightRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dcircle, 50%)"],"borderRadiusCustom_Extra":false,"borderRadiusLink_Extra":true}},"css":".table-colors .color-table-color{margin-right:auto;margin-left:auto;width:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dr, 40px);height:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dr, 40px);border-bottom-left-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dcircle, 50%);border-bottom-right-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dcircle, 50%);border-top-left-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dcircle, 50%);border-top-right-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dcircle, 50%);}"},{"value":" .color-title-table","attributes":{"styleAttributes":{"fontSize":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-size\u002d\u002ds, 1rem)"],"lineHeight":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dline-height\u002d\u002ds, 1.4rem)"],"fontWeight":["600"]}},"css":".table-colors .color-title-table{font-size:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-size\u002d\u002ds, 1rem);line-height:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dline-height\u002d\u002ds, 1.4rem);font-weight:600;}"},{"value":" .color-var-table","attributes":{"styleAttributes":{"lineHeight":["1.2rem"],"opacity":[0.4]}},"css":".table-colors .color-var-table{line-height:1.2rem;opacity:0.4;}"},{"value":" .color-table-desc","attributes":[],"css":""}]}],"tag":"table","type":"inner","className":"table-colors","localId":"gsbp-44f14a4","tableStyles":{"table":{"layout":"fixed","border":"collapse"},"responsive":"yes","td":{"paddingTop":["10px"],"paddingBottom":["10px"],"paddingRight":["12px"],"paddingLeft":["12px"],"borderStyle":"solid","borderWidth":"1px","borderColor":"#00000012","fontSize":["14px"]},"th":{"paddingTop":["6px"],"paddingBottom":["6px"],"paddingRight":["12px"],"paddingLeft":["12px"],"borderStyle":"solid","borderWidth":"1px","borderColor":"#00000012","fontSize":["16px"],"backgroundColor":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dlightbg, #cddceb21)"}},"styleAttributes":{"width":["100%"]}} -->
<table class="table-colors gsbp-44f14a4"><!-- wp:greenshift-blocks/element {"id":"gsbp-c4dc593","tag":"tr","type":"inner","localId":"gsbp-c4dc593"} -->
<tr><!-- wp:greenshift-blocks/element {"id":"gsbp-c9faf34","inlineCssStyles":"table td.gsbp-c9faf34{width:75px;}","tag":"td","type":"inner","localId":"gsbp-c9faf34","styleAttributes":{"width":["75px"]}} -->
<td class="gsbp-c9faf34"><!-- wp:greenshift-blocks/element {"id":"gsbp-2133cae","inlineCssStyles":".gsbp-2133cae{background-color:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dbrand, #33EFAB);}","type":"no","className":"color-table-color","localId":"gsbp-2133cae","styleAttributes":{"backgroundColor":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dbrand, #33EFAB)"]}} -->
<div class="color-table-color gsbp-2133cae"></div>
<!-- /wp:greenshift-blocks/element --></td>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-82f9eb8","tag":"td","type":"inner","localId":"gsbp-82f9eb8"} -->
<td><!-- wp:greenshift-blocks/element {"id":"gsbp-2b52ab3","inlineCssStyles":".gsbp-2b52ab3{color:#000000;}","textContent":"Brand Color","className":"color-title-table","localId":"gsbp-2b52ab3","styleAttributes":{"color":["#000000"]},"isVariation":"divtext"} -->
<div class="color-title-table gsbp-2b52ab3">Brand Color</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-f7db290","inlineCssStyles":".gsbp-f7db290{color:#000000;}","textContent":"\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dbrand","className":"color-var-table","localId":"gsbp-f7db290","styleAttributes":{"color":["#000000"]},"isVariation":"divtext"} -->
<div class="color-var-table gsbp-f7db290">--wp--preset--color--brand</div>
<!-- /wp:greenshift-blocks/element --></td>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-d87e378","tag":"td","type":"inner","localId":"gsbp-d87e378"} -->
<td><!-- wp:greenshift-blocks/element {"id":"gsbp-7216ecf","inlineCssStyles":".gsbp-7216ecf{color:#000000;}","textContent":"Main Color. Use in buttons and highlighted elements","className":"color-table-desc","localId":"gsbp-7216ecf","styleAttributes":{"color":["#000000"]},"isVariation":"divtext"} -->
<div class="color-table-desc gsbp-7216ecf">Main Color. Use in buttons and highlighted elements</div>
<!-- /wp:greenshift-blocks/element --></td>
<!-- /wp:greenshift-blocks/element --></tr>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-8b102f6","tag":"tr","type":"inner","localId":"gsbp-8b102f6"} -->
<tr><!-- wp:greenshift-blocks/element {"id":"gsbp-91cc442","tag":"td","type":"inner","localId":"gsbp-91cc442"} -->
<td><!-- wp:greenshift-blocks/element {"id":"gsbp-4bf1480","inlineCssStyles":".gsbp-4bf1480{background-color:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dbrand-hover, #7AFFCE);}","type":"no","className":"color-table-color","localId":"gsbp-4bf1480","styleAttributes":{"backgroundColor":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dbrand-hover, #7AFFCE)"]}} -->
<div class="color-table-color gsbp-4bf1480"></div>
<!-- /wp:greenshift-blocks/element --></td>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-f0641c7","tag":"td","type":"inner","localId":"gsbp-f0641c7"} -->
<td><!-- wp:greenshift-blocks/element {"id":"gsbp-92ce6ba","inlineCssStyles":".gsbp-92ce6ba{color:#000000;}","textContent":"Brand Hover Color","className":"color-title-table","localId":"gsbp-92ce6ba","styleAttributes":{"color":["#000000"]},"isVariation":"divtext"} -->
<div class="color-title-table gsbp-92ce6ba">Brand Hover Color</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-de7836d","inlineCssStyles":".gsbp-de7836d{color:#000000;}","textContent":"\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dbrand-hover","className":"color-var-table","localId":"gsbp-de7836d","styleAttributes":{"color":["#000000"]},"isVariation":"divtext"} -->
<div class="color-var-table gsbp-de7836d">--wp--preset--color--brand-hover</div>
<!-- /wp:greenshift-blocks/element --></td>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-6fbb50f","tag":"td","type":"inner","localId":"gsbp-6fbb50f"} -->
<td><!-- wp:greenshift-blocks/element {"id":"gsbp-6add055","inlineCssStyles":".gsbp-6add055{color:#000000;}","textContent":"Color for hover on Brand Color.","className":"color-table-desc","localId":"gsbp-6add055","styleAttributes":{"color":["#000000"]},"isVariation":"divtext"} -->
<div class="color-table-desc gsbp-6add055">Color for hover on Brand Color.</div>
<!-- /wp:greenshift-blocks/element --></td>
<!-- /wp:greenshift-blocks/element --></tr>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-850f57a","tag":"tr","type":"inner","localId":"gsbp-850f57a"} -->
<tr><!-- wp:greenshift-blocks/element {"id":"gsbp-ee41b25","tag":"td","type":"inner","localId":"gsbp-ee41b25"} -->
<td><!-- wp:greenshift-blocks/element {"id":"gsbp-37cb552","inlineCssStyles":".gsbp-37cb552{background-color:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dsecondary, #340fa0);}","type":"no","className":"color-table-color","localId":"gsbp-37cb552","styleAttributes":{"backgroundColor":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dsecondary, #340fa0)"]}} -->
<div class="color-table-color gsbp-37cb552"></div>
<!-- /wp:greenshift-blocks/element --></td>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-e94b123","tag":"td","type":"inner","localId":"gsbp-e94b123"} -->
<td><!-- wp:greenshift-blocks/element {"id":"gsbp-1081c50","inlineCssStyles":".gsbp-1081c50{color:#000000;}","textContent":"Secondary Color","className":"color-title-table","localId":"gsbp-1081c50","styleAttributes":{"color":["#000000"]},"isVariation":"divtext"} -->
<div class="color-title-table gsbp-1081c50">Secondary Color</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-d57008c","inlineCssStyles":".gsbp-d57008c{color:#000000;}","textContent":"\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dsecondary","className":"color-var-table","localId":"gsbp-d57008c","styleAttributes":{"color":["#000000"]},"isVariation":"divtext"} -->
<div class="color-var-table gsbp-d57008c">--wp--preset--color--secondary</div>
<!-- /wp:greenshift-blocks/element --></td>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-0e7850e","tag":"td","type":"inner","localId":"gsbp-0e7850e"} -->
<td><!-- wp:greenshift-blocks/element {"id":"gsbp-878afcb","inlineCssStyles":".gsbp-878afcb{color:#000000;}","textContent":"Secondary Color. Use in secondary buttons and as accent for small text","className":"color-table-desc","localId":"gsbp-878afcb","styleAttributes":{"color":["#000000"]},"isVariation":"divtext"} -->
<div class="color-table-desc gsbp-878afcb">Secondary Color. Use in secondary buttons and as accent for small text</div>
<!-- /wp:greenshift-blocks/element --></td>
<!-- /wp:greenshift-blocks/element --></tr>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-541a8c4","tag":"tr","type":"inner","localId":"gsbp-541a8c4"} -->
<tr><!-- wp:greenshift-blocks/element {"id":"gsbp-3671b20","tag":"td","type":"inner","localId":"gsbp-3671b20"} -->
<td><!-- wp:greenshift-blocks/element {"id":"gsbp-7b66b93","inlineCssStyles":".gsbp-7b66b93{background-color:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dsecondary-hover, #441999);}","type":"no","className":"color-table-color","localId":"gsbp-7b66b93","styleAttributes":{"backgroundColor":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dsecondary-hover, #441999)"]}} -->
<div class="color-table-color gsbp-7b66b93"></div>
<!-- /wp:greenshift-blocks/element --></td>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-999f8dd","tag":"td","type":"inner","localId":"gsbp-999f8dd"} -->
<td><!-- wp:greenshift-blocks/element {"id":"gsbp-361da2d","inlineCssStyles":".gsbp-361da2d{color:#000000;}","textContent":"Secondary Hover Color","className":"color-title-table","localId":"gsbp-361da2d","styleAttributes":{"color":["#000000"]},"isVariation":"divtext"} -->
<div class="color-title-table gsbp-361da2d">Secondary Hover Color</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-30b1a0f","inlineCssStyles":".gsbp-30b1a0f{color:#000000;}","textContent":"\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dsecondary-hover","className":"color-var-table","localId":"gsbp-30b1a0f","styleAttributes":{"color":["#000000"]},"isVariation":"divtext"} -->
<div class="color-var-table gsbp-30b1a0f">--wp--preset--color--secondary-hover</div>
<!-- /wp:greenshift-blocks/element --></td>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-78fe64a","tag":"td","type":"inner","localId":"gsbp-78fe64a"} -->
<td><!-- wp:greenshift-blocks/element {"id":"gsbp-8a51570","inlineCssStyles":".gsbp-8a51570{color:#000000;}","textContent":"Secondary Hover Color. Use in secondary buttons and as accent for small text","className":"color-table-desc","localId":"gsbp-8a51570","styleAttributes":{"color":["#000000"]},"isVariation":"divtext"} -->
<div class="color-table-desc gsbp-8a51570">Secondary Hover Color. Use in secondary buttons and as accent for small text</div>
<!-- /wp:greenshift-blocks/element --></td>
<!-- /wp:greenshift-blocks/element --></tr>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-bd2ea2d","tag":"tr","type":"inner","localId":"gsbp-bd2ea2d"} -->
<tr><!-- wp:greenshift-blocks/element {"id":"gsbp-2fd1b35","tag":"td","type":"inner","localId":"gsbp-2fd1b35"} -->
<td><!-- wp:greenshift-blocks/element {"id":"gsbp-da194cb","inlineCssStyles":".gsbp-da194cb{background-color:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dtext-on-brand, #fffffc);border-width:1px;border-style:solid;border-color:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dedges-color, #00000012);}","type":"no","className":"color-table-color","localId":"gsbp-da194cb","styleAttributes":{"backgroundColor":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dtext-on-brand, #fffffc)"],"borderWidth":["1px"],"borderStyle":["solid"],"borderColor":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dedges-color, #00000012)"],"borderCustom_Extra":false,"borderLink_Extra":false}} -->
<div class="color-table-color gsbp-da194cb"></div>
<!-- /wp:greenshift-blocks/element --></td>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-1661894","tag":"td","type":"inner","localId":"gsbp-1661894"} -->
<td><!-- wp:greenshift-blocks/element {"id":"gsbp-c4f0bb6","inlineCssStyles":".gsbp-c4f0bb6{color:#000000;}","textContent":"Text on Brand Color","className":"color-title-table","localId":"gsbp-c4f0bb6","styleAttributes":{"color":["#000000"]},"isVariation":"divtext"} -->
<div class="color-title-table gsbp-c4f0bb6">Text on Brand Color</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-71208ab","inlineCssStyles":".gsbp-71208ab{color:#000000;}","textContent":"\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dtext-on-brand","className":"color-var-table","localId":"gsbp-71208ab","styleAttributes":{"color":["#000000"]},"isVariation":"divtext"} -->
<div class="color-var-table gsbp-71208ab">--wp--preset--color--text-on-brand</div>
<!-- /wp:greenshift-blocks/element --></td>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-34a0f94","tag":"td","type":"inner","localId":"gsbp-34a0f94"} -->
<td><!-- wp:greenshift-blocks/element {"id":"gsbp-8a7205f","inlineCssStyles":".gsbp-8a7205f{color:#000000;}","textContent":"Color of Text that placed on Brand Color","className":"color-table-desc","localId":"gsbp-8a7205f","styleAttributes":{"color":["#000000"]},"isVariation":"divtext"} -->
<div class="color-table-desc gsbp-8a7205f">Color of Text that placed on Brand Color</div>
<!-- /wp:greenshift-blocks/element --></td>
<!-- /wp:greenshift-blocks/element --></tr>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-ace9e6d","tag":"tr","type":"inner","localId":"gsbp-ace9e6d"} -->
<tr><!-- wp:greenshift-blocks/element {"id":"gsbp-f3d43e7","tag":"td","type":"inner","localId":"gsbp-f3d43e7"} -->
<td><!-- wp:greenshift-blocks/element {"id":"gsbp-8c939cc","inlineCssStyles":".gsbp-8c939cc{background-color:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dtext-on-brand-hover, #000003);border-width:1px;border-style:solid;border-color:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dedges-color, #00000012);}","type":"no","className":"color-table-color","localId":"gsbp-8c939cc","styleAttributes":{"backgroundColor":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dtext-on-brand-hover, #000003)"],"borderWidth":["1px"],"borderStyle":["solid"],"borderColor":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dedges-color, #00000012)"],"borderCustom_Extra":false,"borderLink_Extra":false}} -->
<div class="color-table-color gsbp-8c939cc"></div>
<!-- /wp:greenshift-blocks/element --></td>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-d414b14","tag":"td","type":"inner","localId":"gsbp-d414b14"} -->
<td><!-- wp:greenshift-blocks/element {"id":"gsbp-39d44b4","inlineCssStyles":".gsbp-39d44b4{color:#000000;}","textContent":"Text on Brand Hover Color","className":"color-title-table","localId":"gsbp-39d44b4","styleAttributes":{"color":["#000000"]},"isVariation":"divtext"} -->
<div class="color-title-table gsbp-39d44b4">Text on Brand Hover Color</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-ffb65d8","inlineCssStyles":".gsbp-ffb65d8{color:#000000;}","textContent":"\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dtext-on-brand-hover","className":"color-var-table","localId":"gsbp-ffb65d8","styleAttributes":{"color":["#000000"]},"isVariation":"divtext"} -->
<div class="color-var-table gsbp-ffb65d8">--wp--preset--color--text-on-brand-hover</div>
<!-- /wp:greenshift-blocks/element --></td>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-9cab06e","tag":"td","type":"inner","localId":"gsbp-9cab06e"} -->
<td><!-- wp:greenshift-blocks/element {"id":"gsbp-f69085c","inlineCssStyles":".gsbp-f69085c{color:#000000;}","textContent":"Color of Text that placed on Brand Hover Color","className":"color-table-desc","localId":"gsbp-f69085c","styleAttributes":{"color":["#000000"]},"isVariation":"divtext"} -->
<div class="color-table-desc gsbp-f69085c">Color of Text that placed on Brand Hover Color</div>
<!-- /wp:greenshift-blocks/element --></td>
<!-- /wp:greenshift-blocks/element --></tr>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-e6b9766","tag":"tr","type":"inner","localId":"gsbp-e6b9766"} -->
<tr><!-- wp:greenshift-blocks/element {"id":"gsbp-d5af63b","tag":"td","type":"inner","localId":"gsbp-d5af63b"} -->
<td><!-- wp:greenshift-blocks/element {"id":"gsbp-29a2b06","inlineCssStyles":".gsbp-29a2b06{background-color:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dtext-on-secondary, #fffffc);border-width:1px;border-style:solid;border-color:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dedges-color, #00000012);}","type":"no","className":"color-table-color","localId":"gsbp-29a2b06","styleAttributes":{"backgroundColor":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dtext-on-secondary, #fffffc)"],"borderWidth":["1px"],"borderStyle":["solid"],"borderColor":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dedges-color, #00000012)"],"borderCustom_Extra":false,"borderLink_Extra":false}} -->
<div class="color-table-color gsbp-29a2b06"></div>
<!-- /wp:greenshift-blocks/element --></td>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-862bd37","tag":"td","type":"inner","localId":"gsbp-862bd37"} -->
<td><!-- wp:greenshift-blocks/element {"id":"gsbp-a1b70ad","inlineCssStyles":".gsbp-a1b70ad{color:#000000;}","textContent":"Text on Secondary Color","className":"color-title-table","localId":"gsbp-a1b70ad","styleAttributes":{"color":["#000000"]},"isVariation":"divtext"} -->
<div class="color-title-table gsbp-a1b70ad">Text on Secondary Color</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-c3756e5","inlineCssStyles":".gsbp-c3756e5{color:#000000;}","textContent":"\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dtext-on-secondary","className":"color-var-table","localId":"gsbp-c3756e5","styleAttributes":{"color":["#000000"]},"isVariation":"divtext"} -->
<div class="color-var-table gsbp-c3756e5">--wp--preset--color--text-on-secondary</div>
<!-- /wp:greenshift-blocks/element --></td>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-1f46e29","tag":"td","type":"inner","localId":"gsbp-1f46e29"} -->
<td><!-- wp:greenshift-blocks/element {"id":"gsbp-1f3c54f","inlineCssStyles":".gsbp-1f3c54f{color:#000000;}","textContent":"Color of Text that placed on Secondary Color","className":"color-table-desc","localId":"gsbp-1f3c54f","styleAttributes":{"color":["#000000"]},"isVariation":"divtext"} -->
<div class="color-table-desc gsbp-1f3c54f">Color of Text that placed on Secondary Color</div>
<!-- /wp:greenshift-blocks/element --></td>
<!-- /wp:greenshift-blocks/element --></tr>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-284a0d8","tag":"tr","type":"inner","localId":"gsbp-284a0d8"} -->
<tr><!-- wp:greenshift-blocks/element {"id":"gsbp-85c6db0","tag":"td","type":"inner","localId":"gsbp-85c6db0"} -->
<td><!-- wp:greenshift-blocks/element {"id":"gsbp-0d381fa","inlineCssStyles":".gsbp-0d381fa{background-color:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dtext-on-secondary-hover, #fffffd);border-width:1px;border-style:solid;border-color:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dedges-color, #00000012);}","type":"no","className":"color-table-color","localId":"gsbp-0d381fa","styleAttributes":{"backgroundColor":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dtext-on-secondary-hover, #fffffd)"],"borderWidth":["1px"],"borderStyle":["solid"],"borderColor":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dedges-color, #00000012)"],"borderCustom_Extra":false,"borderLink_Extra":false}} -->
<div class="color-table-color gsbp-0d381fa"></div>
<!-- /wp:greenshift-blocks/element --></td>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-d0c22ae","tag":"td","type":"inner","localId":"gsbp-d0c22ae"} -->
<td><!-- wp:greenshift-blocks/element {"id":"gsbp-8f3b93f","inlineCssStyles":".gsbp-8f3b93f{color:#000000;}","textContent":"Text on Secondary Hover Color","className":"color-title-table","localId":"gsbp-8f3b93f","styleAttributes":{"color":["#000000"]},"isVariation":"divtext"} -->
<div class="color-title-table gsbp-8f3b93f">Text on Secondary Hover Color</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-f5abb57","inlineCssStyles":".gsbp-f5abb57{color:#000000;}","textContent":"\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dtext-on-secondary-hover","className":"color-var-table","localId":"gsbp-f5abb57","styleAttributes":{"color":["#000000"]},"isVariation":"divtext"} -->
<div class="color-var-table gsbp-f5abb57">--wp--preset--color--text-on-secondary-hover</div>
<!-- /wp:greenshift-blocks/element --></td>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-9b5de1e","tag":"td","type":"inner","localId":"gsbp-9b5de1e"} -->
<td><!-- wp:greenshift-blocks/element {"id":"gsbp-933398d","inlineCssStyles":".gsbp-933398d{color:#000000;}","textContent":"Color of Text that placed on Secondary Hover Color","className":"color-table-desc","localId":"gsbp-933398d","styleAttributes":{"color":["#000000"]},"isVariation":"divtext"} -->
<div class="color-table-desc gsbp-933398d">Color of Text that placed on Secondary Hover Color</div>
<!-- /wp:greenshift-blocks/element --></td>
<!-- /wp:greenshift-blocks/element --></tr>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-498b3c8","tag":"tr","type":"inner","localId":"gsbp-498b3c8"} -->
<tr><!-- wp:greenshift-blocks/element {"id":"gsbp-2455eed","tag":"td","type":"inner","localId":"gsbp-2455eed"} -->
<td><!-- wp:greenshift-blocks/element {"id":"gsbp-6c759eb","inlineCssStyles":".gsbp-6c759eb{background-color:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dcard-base, #fcfcfc);border-width:1px;border-style:solid;border-color:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dedges-color, #00000012);}","type":"no","className":"color-table-color","localId":"gsbp-6c759eb","styleAttributes":{"backgroundColor":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dcard-base, #fcfcfc)"],"borderWidth":["1px"],"borderStyle":["solid"],"borderColor":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dedges-color, #00000012)"],"borderCustom_Extra":false,"borderLink_Extra":false}} -->
<div class="color-table-color gsbp-6c759eb"></div>
<!-- /wp:greenshift-blocks/element --></td>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-50d0264","tag":"td","type":"inner","localId":"gsbp-50d0264"} -->
<td><!-- wp:greenshift-blocks/element {"id":"gsbp-f8c7fe2","inlineCssStyles":".gsbp-f8c7fe2{color:#000000;}","textContent":"Card Background","className":"color-title-table","localId":"gsbp-f8c7fe2","styleAttributes":{"color":["#000000"]},"isVariation":"divtext"} -->
<div class="color-title-table gsbp-f8c7fe2">Card Background</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-c5864c8","inlineCssStyles":".gsbp-c5864c8{color:#000000;}","textContent":"\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dcard-base","className":"color-var-table","localId":"gsbp-c5864c8","styleAttributes":{"color":["#000000"]},"isVariation":"divtext"} -->
<div class="color-var-table gsbp-c5864c8">--wp--preset--color--card-base</div>
<!-- /wp:greenshift-blocks/element --></td>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-75567e7","tag":"td","type":"inner","localId":"gsbp-75567e7"} -->
<td><!-- wp:greenshift-blocks/element {"id":"gsbp-580fda8","inlineCssStyles":".gsbp-580fda8{color:#000000;}","textContent":"Background color of cards, product cards and grouped content","className":"color-table-desc","localId":"gsbp-580fda8","styleAttributes":{"color":["#000000"]},"isVariation":"divtext"} -->
<div class="color-table-desc gsbp-580fda8">Background color of cards, product cards and grouped content</div>
<!-- /wp:greenshift-blocks/element --></td>
<!-- /wp:greenshift-blocks/element --></tr>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-a896bb6","tag":"tr","type":"inner","localId":"gsbp-a896bb6"} -->
<tr><!-- wp:greenshift-blocks/element {"id":"gsbp-e0d7dfd","tag":"td","type":"inner","localId":"gsbp-e0d7dfd"} -->
<td><!-- wp:greenshift-blocks/element {"id":"gsbp-0debe9b","inlineCssStyles":".gsbp-0debe9b{background-color:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dcard-border, #f0f0f0);}","type":"no","className":"color-table-color","localId":"gsbp-0debe9b","styleAttributes":{"backgroundColor":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dcard-border, #f0f0f0)"]}} -->
<div class="color-table-color gsbp-0debe9b"></div>
<!-- /wp:greenshift-blocks/element --></td>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-794e9a6","tag":"td","type":"inner","localId":"gsbp-794e9a6"} -->
<td><!-- wp:greenshift-blocks/element {"id":"gsbp-591171f","inlineCssStyles":".gsbp-591171f{color:#000000;}","textContent":"Card Border","className":"color-title-table","localId":"gsbp-591171f","styleAttributes":{"color":["#000000"]},"isVariation":"divtext"} -->
<div class="color-title-table gsbp-591171f">Card Border</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-82472dd","inlineCssStyles":".gsbp-82472dd{color:#000000;}","textContent":"\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dcard-border","className":"color-var-table","localId":"gsbp-82472dd","styleAttributes":{"color":["#000000"]},"isVariation":"divtext"} -->
<div class="color-var-table gsbp-82472dd">--wp--preset--color--card-border</div>
<!-- /wp:greenshift-blocks/element --></td>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-1e52b55","tag":"td","type":"inner","localId":"gsbp-1e52b55"} -->
<td><!-- wp:greenshift-blocks/element {"id":"gsbp-57d25be","inlineCssStyles":".gsbp-57d25be{color:#000000;}","textContent":"Border for cards","className":"color-table-desc","localId":"gsbp-57d25be","styleAttributes":{"color":["#000000"]},"isVariation":"divtext"} -->
<div class="color-table-desc gsbp-57d25be">Border for cards</div>
<!-- /wp:greenshift-blocks/element --></td>
<!-- /wp:greenshift-blocks/element --></tr>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-924db58","tag":"tr","type":"inner","localId":"gsbp-924db58"} -->
<tr><!-- wp:greenshift-blocks/element {"id":"gsbp-46cf9ae","tag":"td","type":"inner","localId":"gsbp-46cf9ae"} -->
<td><!-- wp:greenshift-blocks/element {"id":"gsbp-c821bda","inlineCssStyles":".gsbp-c821bda{background-color:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dcard-text, #333333);}","type":"no","className":"color-table-color","localId":"gsbp-c821bda","styleAttributes":{"backgroundColor":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dcard-text, #333333)"]}} -->
<div class="color-table-color gsbp-c821bda"></div>
<!-- /wp:greenshift-blocks/element --></td>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-1d0fd4a","tag":"td","type":"inner","localId":"gsbp-1d0fd4a"} -->
<td><!-- wp:greenshift-blocks/element {"id":"gsbp-6a7c606","inlineCssStyles":".gsbp-6a7c606{color:#000000;}","textContent":"Card Text","className":"color-title-table","localId":"gsbp-6a7c606","styleAttributes":{"color":["#000000"]},"isVariation":"divtext"} -->
<div class="color-title-table gsbp-6a7c606">Card Text</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-e45ac7a","inlineCssStyles":".gsbp-e45ac7a{color:#000000;}","textContent":"\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dcard-textcolor","className":"color-var-table","localId":"gsbp-e45ac7a","styleAttributes":{"color":["#000000"]},"isVariation":"divtext"} -->
<div class="color-var-table gsbp-e45ac7a">--wp--preset--color--card-textcolor</div>
<!-- /wp:greenshift-blocks/element --></td>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-c7ea0ec","tag":"td","type":"inner","localId":"gsbp-c7ea0ec"} -->
<td><!-- wp:greenshift-blocks/element {"id":"gsbp-5decbdf","inlineCssStyles":".gsbp-5decbdf{color:#000000;}","textContent":"Text color for cards and grouped content","className":"color-table-desc","localId":"gsbp-5decbdf","styleAttributes":{"color":["#000000"]},"isVariation":"divtext"} -->
<div class="color-table-desc gsbp-5decbdf">Text color for cards and grouped content</div>
<!-- /wp:greenshift-blocks/element --></td>
<!-- /wp:greenshift-blocks/element --></tr>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-0e218a5","tag":"tr","type":"inner","localId":"gsbp-0e218a5"} -->
<tr><!-- wp:greenshift-blocks/element {"id":"gsbp-f5a6dad","tag":"td","type":"inner","localId":"gsbp-f5a6dad"} -->
<td><!-- wp:greenshift-blocks/element {"id":"gsbp-fe16f68","inlineCssStyles":".gsbp-fe16f68{background-color:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dbackground, #f9f9f9);border-width:1px;border-style:solid;border-color:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dedges-color, #00000012);}","type":"no","className":"color-table-color","localId":"gsbp-fe16f68","styleAttributes":{"backgroundColor":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dbackground, #f9f9f9)"],"borderWidth":["1px"],"borderStyle":["solid"],"borderColor":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dedges-color, #00000012)"],"borderCustom_Extra":false,"borderLink_Extra":false}} -->
<div class="color-table-color gsbp-fe16f68"></div>
<!-- /wp:greenshift-blocks/element --></td>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-162f0d3","tag":"td","type":"inner","localId":"gsbp-162f0d3"} -->
<td><!-- wp:greenshift-blocks/element {"id":"gsbp-e3a6b09","inlineCssStyles":".gsbp-e3a6b09{color:#000000;}","textContent":"Background","className":"color-title-table","localId":"gsbp-e3a6b09","styleAttributes":{"color":["#000000"]},"isVariation":"divtext"} -->
<div class="color-title-table gsbp-e3a6b09">Background</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-def3b11","inlineCssStyles":".gsbp-def3b11{color:#000000;}","textContent":"\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dbackground","className":"color-var-table","localId":"gsbp-def3b11","styleAttributes":{"color":["#000000"]},"isVariation":"divtext"} -->
<div class="color-var-table gsbp-def3b11">--wp--preset--color--background</div>
<!-- /wp:greenshift-blocks/element --></td>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-9cc571a","tag":"td","type":"inner","localId":"gsbp-9cc571a"} -->
<td><!-- wp:greenshift-blocks/element {"id":"gsbp-1b1853e","inlineCssStyles":".gsbp-1b1853e{color:#000000;}","textContent":"Main Background of site (applied on body tag)","className":"color-table-desc","localId":"gsbp-1b1853e","styleAttributes":{"color":["#000000"]},"isVariation":"divtext"} -->
<div class="color-table-desc gsbp-1b1853e">Main Background of site (applied on body tag)</div>
<!-- /wp:greenshift-blocks/element --></td>
<!-- /wp:greenshift-blocks/element --></tr>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-35f19b6","tag":"tr","type":"inner","localId":"gsbp-35f19b6"} -->
<tr><!-- wp:greenshift-blocks/element {"id":"gsbp-9f67a1e","tag":"td","type":"inner","localId":"gsbp-9f67a1e"} -->
<td><!-- wp:greenshift-blocks/element {"id":"gsbp-7fbc996","inlineCssStyles":".gsbp-7fbc996{background-color:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dtextcolor, #333333);}","type":"no","className":"color-table-color","localId":"gsbp-7fbc996","styleAttributes":{"backgroundColor":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dtextcolor, #333333)"]}} -->
<div class="color-table-color gsbp-7fbc996"></div>
<!-- /wp:greenshift-blocks/element --></td>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-9f8abda","tag":"td","type":"inner","localId":"gsbp-9f8abda"} -->
<td><!-- wp:greenshift-blocks/element {"id":"gsbp-27855db","inlineCssStyles":".gsbp-27855db{color:#000000;}","textContent":"Content Text","className":"color-title-table","localId":"gsbp-27855db","styleAttributes":{"color":["#000000"]},"isVariation":"divtext"} -->
<div class="color-title-table gsbp-27855db">Content Text</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-494bbbd","inlineCssStyles":".gsbp-494bbbd{color:#000000;}","textContent":"\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dcard-text","className":"color-var-table","localId":"gsbp-494bbbd","styleAttributes":{"color":["#000000"]},"isVariation":"divtext"} -->
<div class="color-var-table gsbp-494bbbd">--wp--preset--color--card-text</div>
<!-- /wp:greenshift-blocks/element --></td>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-b9c65f3","tag":"td","type":"inner","localId":"gsbp-b9c65f3"} -->
<td><!-- wp:greenshift-blocks/element {"id":"gsbp-ab73e1b","inlineCssStyles":".gsbp-ab73e1b{color:#000000;}","textContent":"Main text color of content (applied on body tag)","className":"color-table-desc","localId":"gsbp-ab73e1b","styleAttributes":{"color":["#000000"]},"isVariation":"divtext"} -->
<div class="color-table-desc gsbp-ab73e1b">Main text color of content (applied on body tag)</div>
<!-- /wp:greenshift-blocks/element --></td>
<!-- /wp:greenshift-blocks/element --></tr>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-47b1369","tag":"tr","type":"inner","localId":"gsbp-47b1369"} -->
<tr><!-- wp:greenshift-blocks/element {"id":"gsbp-3938206","tag":"td","type":"inner","localId":"gsbp-3938206"} -->
<td><!-- wp:greenshift-blocks/element {"id":"gsbp-971d2da","inlineCssStyles":".gsbp-971d2da{background-color:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dborder, #00000012);border-width:1px;border-style:solid;border-color:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dedges-color, #00000012);}","type":"no","className":"color-table-color","localId":"gsbp-971d2da","styleAttributes":{"backgroundColor":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dborder, #00000012)"],"borderWidth":["1px"],"borderStyle":["solid"],"borderColor":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dedges-color, #00000012)"],"borderCustom_Extra":false,"borderLink_Extra":false}} -->
<div class="color-table-color gsbp-971d2da"></div>
<!-- /wp:greenshift-blocks/element --></td>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-0504558","tag":"td","type":"inner","localId":"gsbp-0504558"} -->
<td><!-- wp:greenshift-blocks/element {"id":"gsbp-97c8fc0","inlineCssStyles":".gsbp-97c8fc0{color:#000000;}","textContent":"Border","className":"color-title-table","localId":"gsbp-97c8fc0","styleAttributes":{"color":["#000000"]},"isVariation":"divtext"} -->
<div class="color-title-table gsbp-97c8fc0">Border</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-607d12f","inlineCssStyles":".gsbp-607d12f{color:#000000;}","textContent":"\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dborder","className":"color-var-table","localId":"gsbp-607d12f","styleAttributes":{"color":["#000000"]},"isVariation":"divtext"} -->
<div class="color-var-table gsbp-607d12f">--wp--preset--color--border</div>
<!-- /wp:greenshift-blocks/element --></td>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-8eb5a5a","tag":"td","type":"inner","localId":"gsbp-8eb5a5a"} -->
<td><!-- wp:greenshift-blocks/element {"id":"gsbp-eefc289","inlineCssStyles":".gsbp-eefc289{color:#000000;}","textContent":"Light transparent Borders. Use for inputs, forms, bordered content","className":"color-table-desc","localId":"gsbp-eefc289","styleAttributes":{"color":["#000000"]},"isVariation":"divtext"} -->
<div class="color-table-desc gsbp-eefc289">Light transparent Borders. Use for inputs, forms, bordered content</div>
<!-- /wp:greenshift-blocks/element --></td>
<!-- /wp:greenshift-blocks/element --></tr>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-6d160c8","tag":"tr","type":"inner","localId":"gsbp-6d160c8"} -->
<tr><!-- wp:greenshift-blocks/element {"id":"gsbp-7d08c5d","tag":"td","type":"inner","localId":"gsbp-7d08c5d"} -->
<td><!-- wp:greenshift-blocks/element {"id":"gsbp-4e7cf14","inlineCssStyles":".gsbp-4e7cf14{background-color:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dbase, #000001);border-width:1px;border-style:solid;border-color:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dedges-color, #00000012);}","type":"no","className":"color-table-color","localId":"gsbp-4e7cf14","styleAttributes":{"backgroundColor":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dbase, #000001)"],"borderWidth":["1px"],"borderStyle":["solid"],"borderColor":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dedges-color, #00000012)"],"borderCustom_Extra":false,"borderLink_Extra":false}} -->
<div class="color-table-color gsbp-4e7cf14"></div>
<!-- /wp:greenshift-blocks/element --></td>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-9ac3dd1","tag":"td","type":"inner","localId":"gsbp-9ac3dd1"} -->
<td><!-- wp:greenshift-blocks/element {"id":"gsbp-01a99a2","inlineCssStyles":".gsbp-01a99a2{color:#000000;}","textContent":"Base","className":"color-title-table","localId":"gsbp-01a99a2","styleAttributes":{"color":["#000000"]},"isVariation":"divtext"} -->
<div class="color-title-table gsbp-01a99a2">Base</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-7250c3e","inlineCssStyles":".gsbp-7250c3e{color:#000000;}","textContent":"\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dbase","className":"color-var-table","localId":"gsbp-7250c3e","styleAttributes":{"color":["#000000"]},"isVariation":"divtext"} -->
<div class="color-var-table gsbp-7250c3e">--wp--preset--color--base</div>
<!-- /wp:greenshift-blocks/element --></td>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-cff3094","tag":"td","type":"inner","localId":"gsbp-cff3094"} -->
<td><!-- wp:greenshift-blocks/element {"id":"gsbp-26faf77","inlineCssStyles":".gsbp-26faf77{color:#000000;}","textContent":"Dark base color. Use where you need flat dark color","className":"color-table-desc","localId":"gsbp-26faf77","styleAttributes":{"color":["#000000"]},"isVariation":"divtext"} -->
<div class="color-table-desc gsbp-26faf77">Dark base color. Use where you need flat dark color</div>
<!-- /wp:greenshift-blocks/element --></td>
<!-- /wp:greenshift-blocks/element --></tr>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-e282d0c","tag":"tr","type":"inner","localId":"gsbp-e282d0c"} -->
<tr><!-- wp:greenshift-blocks/element {"id":"gsbp-7cc2093","tag":"td","type":"inner","localId":"gsbp-7cc2093"} -->
<td><!-- wp:greenshift-blocks/element {"id":"gsbp-2fe59b1","inlineCssStyles":".gsbp-2fe59b1{background-color:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dborder, #00000012);border-width:1px;border-style:solid;border-color:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dedges-color, #00000012);}","type":"no","className":"color-table-color","localId":"gsbp-2fe59b1","styleAttributes":{"backgroundColor":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dborder, #00000012)"],"borderWidth":["1px"],"borderStyle":["solid"],"borderColor":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dedges-color, #00000012)"],"borderCustom_Extra":false,"borderLink_Extra":false}} -->
<div class="color-table-color gsbp-2fe59b1"></div>
<!-- /wp:greenshift-blocks/element --></td>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-bdea81a","tag":"td","type":"inner","localId":"gsbp-bdea81a"} -->
<td><!-- wp:greenshift-blocks/element {"id":"gsbp-3f17c99","inlineCssStyles":".gsbp-3f17c99{color:#000000;}","textContent":"Contrast","className":"color-title-table","localId":"gsbp-3f17c99","styleAttributes":{"color":["#000000"]},"isVariation":"divtext"} -->
<div class="color-title-table gsbp-3f17c99">Contrast</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-0c25c03","inlineCssStyles":".gsbp-0c25c03{color:#000000;}","textContent":"\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dcontrast","className":"color-var-table","localId":"gsbp-0c25c03","styleAttributes":{"color":["#000000"]},"isVariation":"divtext"} -->
<div class="color-var-table gsbp-0c25c03">--wp--preset--color--contrast</div>
<!-- /wp:greenshift-blocks/element --></td>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-aabb1ea","tag":"td","type":"inner","localId":"gsbp-aabb1ea"} -->
<td><!-- wp:greenshift-blocks/element {"id":"gsbp-5d8f20b","inlineCssStyles":".gsbp-5d8f20b{color:#000000;}","textContent":"White base color. Use where you need flat white color","className":"color-table-desc","localId":"gsbp-5d8f20b","styleAttributes":{"color":["#000000"]},"isVariation":"divtext"} -->
<div class="color-table-desc gsbp-5d8f20b">White base color. Use where you need flat white color</div>
<!-- /wp:greenshift-blocks/element --></td>
<!-- /wp:greenshift-blocks/element --></tr>
<!-- /wp:greenshift-blocks/element --></table>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-1a80c0c","anchor":"typography","inlineCssStyles":".gsbp-1a80c0c{color:#000000;}","type":"inner","localId":"gsbp-1a80c0c","align":"wide","styleAttributes":{"color":["#000000"]},"metadata":{"name":"Typography"}} -->
<div class="gsbp-1a80c0c alignwide" id="typography"><!-- wp:greenshift-blocks/element {"id":"gsbp-0238488","inlineCssStyles":".gsbp-0238488{color:#000000;}","dynamicGClasses":[{"value":"brand-panel-wrap","type":"local","label":"brand-panel-wrap","localed":false,"css":"","attributes":[],"originalID":"gspb-DTHotu2","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"brand-panel-wrap","localId":"gsbp-0238488","align":"wide","styleAttributes":{"color":["#000000"]},"metadata":{"name":"Title"}} -->
<div class="brand-panel-wrap gsbp-0238488 alignwide"><!-- wp:greenshift-blocks/element {"id":"gsbp-77072a8","inlineCssStyles":".gsbp-77072a8{color:#000000;}","dynamicGClasses":[{"value":"brand-panel-title","type":"local","label":"brand-panel-title","localed":false,"css":"","attributes":[],"originalID":"gsbp-7bc0611","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"textContent":"Typography","tag":"h2","className":"brand-panel-title","localId":"gsbp-77072a8","styleAttributes":{"color":["#000000"]},"isVariation":"divtext"} -->
<h2 class="brand-panel-title gsbp-77072a8">Typography</h2>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-13f0138","inlineCssStyles":".gsbp-13f0138{display:flex;flex-direction:column;column-gap:0px;row-gap:0px;justify-content:flex-start;color:rgba(0,0,0,1);}","type":"inner","localId":"gsbp-13f0138","styleAttributes":{"display":["flex"],"flexDirection":["column"],"columnGap":["0px"],"rowGap":["0px"],"justifyContent":["flex-start"],"color":["rgba(0,0,0,1)"]}} -->
<div class="gsbp-13f0138"><!-- wp:greenshift-blocks/element {"id":"gsbp-4f1edc5","inlineCssStyles":".gsbp-4f1edc5{color:#000000;}","dynamicGClasses":[{"value":"brand-panel-subtitle","type":"local","label":"brand-panel-subtitle","localed":false,"css":"","attributes":[],"originalID":"gspb-7UE8MMY","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"textContent":"Text styles","className":"brand-panel-subtitle","localId":"gsbp-4f1edc5","styleAttributes":{"color":["#000000"]}} -->
<div class="brand-panel-subtitle gsbp-4f1edc5">Text styles</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-1f396e7","inlineCssStyles":".gsbp-1f396e7{color:#000000;}","dynamicGClasses":[{"value":"brand-panel-subsub","type":"local","label":"brand-panel-subsub","localed":false,"css":"","attributes":[],"originalID":"gspb-gf0ZxC0","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"textContent":"Content Text Sizes","className":"brand-panel-subsub","localId":"gsbp-1f396e7","styleAttributes":{"color":["#000000"]}} -->
<div class="brand-panel-subsub gsbp-1f396e7">Content Text Sizes</div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-e2580d2","inlineCssStyles":".gsbp-e2580d2{color:#000000;}","dynamicGClasses":[{"value":"brand-panel-content","type":"local","label":"brand-panel-content","localed":false,"css":"","attributes":[],"originalID":"gspb-ZzWr1uD","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"brand-panel-content","localId":"gsbp-e2580d2","align":"wide","styleAttributes":{"color":["#000000"]},"metadata":{"name":"Content"}} -->
<div class="brand-panel-content gsbp-e2580d2 alignwide"><!-- wp:greenshift-blocks/element {"id":"gspb\u002d\u002doGyy2B","inlineCssStyles":".text-styles{display:flex;flex-direction:column;column-gap:16px;row-gap:16px;justify-content:center;color:rgba(0,0,0,1);margin-bottom:40px;}.text-styles .text-variable{opacity:0.4;line-height:1.3rem;font-size:16px;}.gspb\u002d\u002doGyy2B{color:#000000;}","dynamicGClasses":[{"value":"text-styles","type":"local","label":"text-styles","localed":false,"css":".text-styles{display:flex;flex-direction:column;column-gap:16px;row-gap:16px;justify-content:center;color:rgba(0,0,0,1);margin-bottom:40px;}","attributes":{"styleAttributes":{"display":["flex"],"flexDirection":["column"],"columnGap":["16px"],"rowGap":["16px"],"justifyContent":["center"],"color":["rgba(0,0,0,1)"],"marginBottom":["40px"]}},"originalID":"gspb\u002d\u002doGyy2B","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[{"value":" .text-title","attributes":[],"css":""},{"value":" .text-group","attributes":[],"css":""},{"value":" .text-value","attributes":[],"css":""},{"value":" .text-variable","attributes":{"styleAttributes":{"opacity":[0.4],"lineHeight":["1.3rem"],"fontSize":["16px"]}},"css":".text-styles .text-variable{opacity:0.4;line-height:1.3rem;font-size:16px;}"}]}],"type":"inner","className":"text-styles","localId":"gspb\u002d\u002doGyy2B","styleAttributes":{"color":["#000000"]}} -->
<div class="text-styles gspb--oGyy2B"><!-- wp:greenshift-blocks/element {"id":"gspb-iOI7Hih","inlineCssStyles":".gspb-iOI7Hih{font-size:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-size\u002d\u002dgod, clamp(3.5rem, 12vw, 15rem));line-height:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dline-height\u002d\u002dgod, clamp(4.2rem, 12.2vw, 20rem));}","textContent":"God","className":"text-title","localId":"gspb-iOI7Hih","styleAttributes":{"fontSize":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-size\u002d\u002dgod, clamp(3.5rem, 12vw, 15rem))"],"lineHeight":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dline-height\u002d\u002dgod, clamp(4.2rem, 12.2vw, 20rem))"]}} -->
<div class="text-title gspb-iOI7Hih">God</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gspb-RlKVGa3","inlineCssStyles":".gspb-RlKVGa3{color:#000000;}","type":"inner","className":"text-group","localId":"gspb-RlKVGa3","styleAttributes":{"color":["#000000"]}} -->
<div class="text-group gspb-RlKVGa3"><!-- wp:greenshift-blocks/element {"id":"gspb-b1d_hgH","inlineCssStyles":".gspb-b1d_hgH{color:#000000;}","textContent":"clamp(3.5rem, 12vw, 15rem) / clamp(4.2rem, 12.2vw, 20rem) ","className":"text-value","localId":"gspb-b1d_hgH","styleAttributes":{"color":["#000000"]}} -->
<div class="text-value gspb-b1d_hgH">clamp(3.5rem, 12vw, 15rem) / clamp(4.2rem, 12.2vw, 20rem) </div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gspb-vhI5xzF","inlineCssStyles":".gspb-vhI5xzF{color:#000000;}","textContent":"\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-size\u002d\u002dgod / \u002d\u002dwp\u002d\u002dcustom\u002d\u002dline-height\u002d\u002dgod ","className":"text-variable","localId":"gspb-vhI5xzF","styleAttributes":{"color":["#000000"]}} -->
<div class="text-variable gspb-vhI5xzF">--wp--preset--font-size--god / --wp--custom--line-height--god </div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-7fda8c5","inlineCssStyles":".gsbp-7fda8c5{color:#000000;}","dynamicGClasses":[{"value":"text-styles","type":"local","label":"text-styles","localed":false,"css":"","attributes":[],"originalID":"gspb\u002d\u002doGyy2B","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"text-styles","localId":"gsbp-7fda8c5","styleAttributes":{"color":["#000000"]}} -->
<div class="text-styles gsbp-7fda8c5"><!-- wp:greenshift-blocks/element {"id":"gsbp-355e3f2","inlineCssStyles":".gsbp-355e3f2{font-size:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-size\u002d\u002dcolossal, clamp(3.4rem, 9vw, 12rem));line-height:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dline-height\u002d\u002dcolossal, clamp(4.1rem, 9.35vw, 17rem));}","textContent":"Colossal","className":"text-title","localId":"gsbp-355e3f2","styleAttributes":{"fontSize":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-size\u002d\u002dcolossal, clamp(3.4rem, 9vw, 12rem))"],"lineHeight":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dline-height\u002d\u002dcolossal, clamp(4.1rem, 9.35vw, 17rem))"]}} -->
<div class="text-title gsbp-355e3f2">Colossal</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-8287ebf","inlineCssStyles":".gsbp-8287ebf{color:#000000;}","type":"inner","className":"text-group","localId":"gsbp-8287ebf","styleAttributes":{"color":["#000000"]}} -->
<div class="text-group gsbp-8287ebf"><!-- wp:greenshift-blocks/element {"id":"gsbp-329fc49","inlineCssStyles":".gsbp-329fc49{color:#000000;}","textContent":"clamp(3.4rem, 9vw, 12rem) / clamp(4.1rem, 9.35vw, 17rem) ","className":"text-value","localId":"gsbp-329fc49","styleAttributes":{"color":["#000000"]}} -->
<div class="text-value gsbp-329fc49">clamp(3.4rem, 9vw, 12rem) / clamp(4.1rem, 9.35vw, 17rem) </div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-95bbbff","inlineCssStyles":".gsbp-95bbbff{color:#000000;}","textContent":"\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-size\u002d\u002dcolossal / \u002d\u002dwp\u002d\u002dcustom\u002d\u002dline-height\u002d\u002dcolossal ","className":"text-variable","localId":"gsbp-95bbbff","styleAttributes":{"color":["#000000"]}} -->
<div class="text-variable gsbp-95bbbff">--wp--preset--font-size--colossal / --wp--custom--line-height--colossal </div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-giant-main","inlineCssStyles":".gsbp-giant-main{color:#000000;}","dynamicGClasses":[{"value":"text-styles","type":"local","label":"text-styles","localed":false,"css":"","attributes":[],"originalID":"gspb\u002d\u002doGyy2B","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"text-styles","localId":"gsbp-giant-main","styleAttributes":{"color":["#000000"]}} -->
<div class="text-styles gsbp-giant-main"><!-- wp:greenshift-blocks/element {"id":"gsbp-giant-title","inlineCssStyles":".gsbp-giant-title{font-size:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-size\u002d\u002dgiant, clamp(3.2rem, 6.2vw, 6.5rem));line-height:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dline-height\u002d\u002dgiant, clamp(4.2rem, 6.2vw, 7rem));}","textContent":"Giant","className":"text-title","localId":"gsbp-giant-title","styleAttributes":{"fontSize":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-size\u002d\u002dgiant, clamp(3.2rem, 6.2vw, 6.5rem))"],"lineHeight":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dline-height\u002d\u002dgiant, clamp(4.2rem, 6.2vw, 7rem))"]}} -->
<div class="text-title gsbp-giant-title">Giant</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-giant-group","inlineCssStyles":".gsbp-giant-group{color:#000000;}","type":"inner","className":"text-group","localId":"gsbp-giant-group","styleAttributes":{"color":["#000000"]}} -->
<div class="text-group gsbp-giant-group"><!-- wp:greenshift-blocks/element {"id":"gsbp-giant-value","inlineCssStyles":".gsbp-giant-value{color:#000000;}","textContent":"clamp(3.2rem, 6.2vw, 6.5rem) / clamp(4.2rem, 6.2vw, 7rem) ","className":"text-value","localId":"gsbp-giant-value","styleAttributes":{"color":["#000000"]}} -->
<div class="text-value gsbp-giant-value">clamp(3.2rem, 6.2vw, 6.5rem) / clamp(4.2rem, 6.2vw, 7rem) </div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-giant-var","inlineCssStyles":".gsbp-giant-var{color:#000000;}","textContent":"\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-size\u002d\u002dgiant / \u002d\u002dwp\u002d\u002dcustom\u002d\u002dline-height\u002d\u002dgiant ","className":"text-variable","localId":"gsbp-giant-var","styleAttributes":{"color":["#000000"]}} -->
<div class="text-variable gsbp-giant-var">--wp--preset--font-size--giant / --wp--custom--line-height--giant </div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-giga-main","inlineCssStyles":".gsbp-giga-main{color:#000000;}","dynamicGClasses":[{"value":"text-styles","type":"local","label":"text-styles","localed":false,"css":"","attributes":[],"originalID":"gspb\u002d\u002doGyy2B","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"text-styles","localId":"gsbp-giga-main","styleAttributes":{"color":["#000000"]}} -->
<div class="text-styles gsbp-giga-main"><!-- wp:greenshift-blocks/element {"id":"gsbp-giga-title","inlineCssStyles":".gsbp-giga-title{font-size:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-size\u002d\u002dgiga, clamp(3rem, 5vw, 4.5rem));line-height:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dline-height\u002d\u002dgiga, clamp(4rem, 6vw, 5rem));}","textContent":"Giga","className":"text-title","localId":"gsbp-giga-title","styleAttributes":{"fontSize":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-size\u002d\u002dgiga, clamp(3rem, 5vw, 4.5rem))"],"lineHeight":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dline-height\u002d\u002dgiga, clamp(4rem, 6vw, 5rem))"]}} -->
<div class="text-title gsbp-giga-title">Giga</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-giga-group","inlineCssStyles":".gsbp-giga-group{color:#000000;}","type":"inner","className":"text-group","localId":"gsbp-giga-group","styleAttributes":{"color":["#000000"]}} -->
<div class="text-group gsbp-giga-group"><!-- wp:greenshift-blocks/element {"id":"gsbp-giga-value","inlineCssStyles":".gsbp-giga-value{color:#000000;}","textContent":"clamp(3rem, 5vw, 4.5rem) / clamp(4rem, 6vw, 5rem) ","className":"text-value","localId":"gsbp-giga-value","styleAttributes":{"color":["#000000"]}} -->
<div class="text-value gsbp-giga-value">clamp(3rem, 5vw, 4.5rem) / clamp(4rem, 6vw, 5rem) </div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-giga-var","inlineCssStyles":".gsbp-giga-var{color:#000000;}","textContent":"\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-size\u002d\u002dgiga / \u002d\u002dwp\u002d\u002dcustom\u002d\u002dline-height\u002d\u002dgiga ","className":"text-variable","localId":"gsbp-giga-var","styleAttributes":{"color":["#000000"]}} -->
<div class="text-variable gsbp-giga-var">--wp--preset--font-size--giga / --wp--custom--line-height--giga </div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-grand-main","inlineCssStyles":".gsbp-grand-main{color:#000000;}","dynamicGClasses":[{"value":"text-styles","type":"local","label":"text-styles","localed":false,"css":"","attributes":[],"originalID":"gspb\u002d\u002doGyy2B","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"text-styles","localId":"gsbp-grand-main","styleAttributes":{"color":["#000000"]}} -->
<div class="text-styles gsbp-grand-main"><!-- wp:greenshift-blocks/element {"id":"gsbp-grand-title","inlineCssStyles":".gsbp-grand-title{font-size:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-size\u002d\u002dgrand, clamp(2.2rem, 4vw, 2.8rem));line-height:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dline-height\u002d\u002dgrand, clamp(2.75rem, 4.7vw, 3.5rem));}","textContent":"Grand","className":"text-title","localId":"gsbp-grand-title","styleAttributes":{"fontSize":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-size\u002d\u002dgrand, clamp(2.2rem, 4vw, 2.8rem))"],"lineHeight":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dline-height\u002d\u002dgrand, clamp(2.75rem, 4.7vw, 3.5rem))"]}} -->
<div class="text-title gsbp-grand-title">Grand</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-grand-group","inlineCssStyles":".gsbp-grand-group{color:#000000;}","type":"inner","className":"text-group","localId":"gsbp-grand-group","styleAttributes":{"color":["#000000"]}} -->
<div class="text-group gsbp-grand-group"><!-- wp:greenshift-blocks/element {"id":"gsbp-grand-value","inlineCssStyles":".gsbp-grand-value{color:#000000;}","textContent":"clamp(2.2rem, 4vw, 2.8rem) / clamp(2.75rem, 4.7vw, 3.5rem) ","className":"text-value","localId":"gsbp-grand-value","styleAttributes":{"color":["#000000"]}} -->
<div class="text-value gsbp-grand-value">clamp(2.2rem, 4vw, 2.8rem) / clamp(2.75rem, 4.7vw, 3.5rem) </div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-grand-var","inlineCssStyles":".gsbp-grand-var{color:#000000;}","textContent":"\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-size\u002d\u002dgrand / \u002d\u002dwp\u002d\u002dcustom\u002d\u002dline-height\u002d\u002dgrand ","className":"text-variable","localId":"gsbp-grand-var","styleAttributes":{"color":["#000000"]}} -->
<div class="text-variable gsbp-grand-var">--wp--preset--font-size--grand / --wp--custom--line-height--grand </div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-high-main","inlineCssStyles":".gsbp-high-main{color:#000000;}","dynamicGClasses":[{"value":"text-styles","type":"local","label":"text-styles","localed":false,"css":"","attributes":[],"originalID":"gspb\u002d\u002doGyy2B","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"text-styles","localId":"gsbp-high-main","styleAttributes":{"color":["#000000"]}} -->
<div class="text-styles gsbp-high-main"><!-- wp:greenshift-blocks/element {"id":"gsbp-high-title","inlineCssStyles":".gsbp-high-title{font-size:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-size\u002d\u002dhigh, clamp(1.9rem, 3.2vw, 2.4rem));line-height:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dline-height\u002d\u002dhigh, clamp(2.5rem, 3.7vw, 3rem));}","textContent":"High","className":"text-title","localId":"gsbp-high-title","styleAttributes":{"fontSize":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-size\u002d\u002dhigh, clamp(1.9rem, 3.2vw, 2.4rem))"],"lineHeight":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dline-height\u002d\u002dhigh, clamp(2.5rem, 3.7vw, 3rem))"]}} -->
<div class="text-title gsbp-high-title">High</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-high-group","inlineCssStyles":".gsbp-high-group{color:#000000;}","type":"inner","className":"text-group","localId":"gsbp-high-group","styleAttributes":{"color":["#000000"]}} -->
<div class="text-group gsbp-high-group"><!-- wp:greenshift-blocks/element {"id":"gsbp-high-value","inlineCssStyles":".gsbp-high-value{color:#000000;}","textContent":"clamp(1.9rem, 3.2vw, 2.4rem) / clamp(2.5rem, 3.7vw, 3rem) ","className":"text-value","localId":"gsbp-high-value","styleAttributes":{"color":["#000000"]}} -->
<div class="text-value gsbp-high-value">clamp(1.9rem, 3.2vw, 2.4rem) / clamp(2.5rem, 3.7vw, 3rem) </div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-high-var","inlineCssStyles":".gsbp-high-var{color:#000000;}","textContent":"\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-size\u002d\u002dhigh / \u002d\u002dwp\u002d\u002dcustom\u002d\u002dline-height\u002d\u002dhigh ","className":"text-variable","localId":"gsbp-high-var","styleAttributes":{"color":["#000000"]}} -->
<div class="text-variable gsbp-high-var">--wp--preset--font-size--high / --wp--custom--line-height--high </div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-xxl-main","inlineCssStyles":".gsbp-xxl-main{color:#000000;}","dynamicGClasses":[{"value":"text-styles","type":"local","label":"text-styles","localed":false,"css":"","attributes":[],"originalID":"gspb\u002d\u002doGyy2B","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"text-styles","localId":"gsbp-xxl-main","styleAttributes":{"color":["#000000"]}} -->
<div class="text-styles gsbp-xxl-main"><!-- wp:greenshift-blocks/element {"id":"gsbp-xxl-title","inlineCssStyles":".gsbp-xxl-title{font-size:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-size\u002d\u002dxxl, clamp(1.75rem, 3vw, 2.2rem));line-height:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dline-height\u002d\u002dxxl, clamp(2.4rem, 3.55vw, 2.75rem));}","textContent":"XX Large","className":"text-title","localId":"gsbp-xxl-title","styleAttributes":{"fontSize":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-size\u002d\u002dxxl, clamp(1.75rem, 3vw, 2.2rem))"],"lineHeight":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dline-height\u002d\u002dxxl, clamp(2.4rem, 3.55vw, 2.75rem))"]}} -->
<div class="text-title gsbp-xxl-title">XX Large</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-xxl-group","inlineCssStyles":".gsbp-xxl-group{color:#000000;}","type":"inner","className":"text-group","localId":"gsbp-xxl-group","styleAttributes":{"color":["#000000"]}} -->
<div class="text-group gsbp-xxl-group"><!-- wp:greenshift-blocks/element {"id":"gsbp-xxl-value","inlineCssStyles":".gsbp-xxl-value{color:#000000;}","textContent":"clamp(1.75rem, 3vw, 2.2rem) / clamp(2.4rem, 3.55vw, 2.75rem) ","className":"text-value","localId":"gsbp-xxl-value","styleAttributes":{"color":["#000000"]}} -->
<div class="text-value gsbp-xxl-value">clamp(1.75rem, 3vw, 2.2rem) / clamp(2.4rem, 3.55vw, 2.75rem) </div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-xxl-var","inlineCssStyles":".gsbp-xxl-var{color:#000000;}","textContent":"\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-size\u002d\u002dxxl / \u002d\u002dwp\u002d\u002dcustom\u002d\u002dline-height\u002d\u002dxxl ","className":"text-variable","localId":"gsbp-xxl-var","styleAttributes":{"color":["#000000"]}} -->
<div class="text-variable gsbp-xxl-var">--wp--preset--font-size--xxl / --wp--custom--line-height--xxl </div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-xl-main","inlineCssStyles":".gsbp-xl-main{color:#000000;}","dynamicGClasses":[{"value":"text-styles","type":"local","label":"text-styles","localed":false,"css":"","attributes":[],"originalID":"gspb\u002d\u002doGyy2B","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"text-styles","localId":"gsbp-xl-main","styleAttributes":{"color":["#000000"]}} -->
<div class="text-styles gsbp-xl-main"><!-- wp:greenshift-blocks/element {"id":"gsbp-xl-title","inlineCssStyles":".gsbp-xl-title{font-size:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-size\u002d\u002dxl, clamp(1.6rem, 2.75vw, 1.9rem));line-height:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dline-height\u002d\u002dxl, clamp(2.3rem, 3.45vw, 2.6rem));}","textContent":"X Large","className":"text-title","localId":"gsbp-xl-title","styleAttributes":{"fontSize":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-size\u002d\u002dxl, clamp(1.6rem, 2.75vw, 1.9rem))"],"lineHeight":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dline-height\u002d\u002dxl, clamp(2.3rem, 3.45vw, 2.6rem))"]}} -->
<div class="text-title gsbp-xl-title">X Large</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-xl-group","inlineCssStyles":".gsbp-xl-group{color:#000000;}","type":"inner","className":"text-group","localId":"gsbp-xl-group","styleAttributes":{"color":["#000000"]}} -->
<div class="text-group gsbp-xl-group"><!-- wp:greenshift-blocks/element {"id":"gsbp-xl-value","inlineCssStyles":".gsbp-xl-value{color:#000000;}","textContent":"clamp(1.6rem, 2.75vw, 1.9rem) / clamp(2.3rem, 3.45vw, 2.6rem) ","className":"text-value","localId":"gsbp-xl-value","styleAttributes":{"color":["#000000"]}} -->
<div class="text-value gsbp-xl-value">clamp(1.6rem, 2.75vw, 1.9rem) / clamp(2.3rem, 3.45vw, 2.6rem) </div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-xl-var","inlineCssStyles":".gsbp-xl-var{color:#000000;}","textContent":"\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-size\u002d\u002dxl / \u002d\u002dwp\u002d\u002dcustom\u002d\u002dline-height\u002d\u002dxl ","className":"text-variable","localId":"gsbp-xl-var","styleAttributes":{"color":["#000000"]}} -->
<div class="text-variable gsbp-xl-var">--wp--preset--font-size--xl / --wp--custom--line-height--xl </div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-l-main","inlineCssStyles":".gsbp-l-main{color:#000000;}","dynamicGClasses":[{"value":"text-styles","type":"local","label":"text-styles","localed":false,"css":"","attributes":[],"originalID":"gspb\u002d\u002doGyy2B","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"text-styles","localId":"gsbp-l-main","styleAttributes":{"color":["#000000"]}} -->
<div class="text-styles gsbp-l-main"><!-- wp:greenshift-blocks/element {"id":"gsbp-l-title","inlineCssStyles":".gsbp-l-title{font-size:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-size\u002d\u002dl, 1.55rem);line-height:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dline-height\u002d\u002dl, 2.37rem);}","textContent":"Large","className":"text-title","localId":"gsbp-l-title","styleAttributes":{"fontSize":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-size\u002d\u002dl, 1.55rem)"],"lineHeight":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dline-height\u002d\u002dl, 2.37rem)"]}} -->
<div class="text-title gsbp-l-title">Large</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-l-group","inlineCssStyles":".gsbp-l-group{color:#000000;}","type":"inner","className":"text-group","localId":"gsbp-l-group","styleAttributes":{"color":["#000000"]}} -->
<div class="text-group gsbp-l-group"><!-- wp:greenshift-blocks/element {"id":"gsbp-l-value","inlineCssStyles":".gsbp-l-value{color:#000000;}","textContent":"1.55rem / 2.37rem ","className":"text-value","localId":"gsbp-l-value","styleAttributes":{"color":["#000000"]}} -->
<div class="text-value gsbp-l-value">1.55rem / 2.37rem </div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-l-var","inlineCssStyles":".gsbp-l-var{color:#000000;}","textContent":"\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-size\u002d\u002dl / \u002d\u002dwp\u002d\u002dcustom\u002d\u002dline-height\u002d\u002dl ","className":"text-variable","localId":"gsbp-l-var","styleAttributes":{"color":["#000000"]}} -->
<div class="text-variable gsbp-l-var">--wp--preset--font-size--l / --wp--custom--line-height--l </div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-m-main","inlineCssStyles":".gsbp-m-main{color:#000000;}","dynamicGClasses":[{"value":"text-styles","type":"local","label":"text-styles","localed":false,"css":"","attributes":[],"originalID":"gspb\u002d\u002doGyy2B","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"text-styles","localId":"gsbp-m-main","styleAttributes":{"color":["#000000"]}} -->
<div class="text-styles gsbp-m-main"><!-- wp:greenshift-blocks/element {"id":"gsbp-m-title","inlineCssStyles":".gsbp-m-title{font-size:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-size\u002d\u002dm, 1.35rem);line-height:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dline-height\u002d\u002dm, 2.1rem);}","textContent":"Medium","className":"text-title","localId":"gsbp-m-title","styleAttributes":{"fontSize":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-size\u002d\u002dm, 1.35rem)"],"lineHeight":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dline-height\u002d\u002dm, 2.1rem)"]}} -->
<div class="text-title gsbp-m-title">Medium</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-m-group","inlineCssStyles":".gsbp-m-group{color:#000000;}","type":"inner","className":"text-group","localId":"gsbp-m-group","styleAttributes":{"color":["#000000"]}} -->
<div class="text-group gsbp-m-group"><!-- wp:greenshift-blocks/element {"id":"gsbp-m-value","inlineCssStyles":".gsbp-m-value{color:#000000;}","textContent":"1.35rem / 2.1rem ","className":"text-value","localId":"gsbp-m-value","styleAttributes":{"color":["#000000"]}} -->
<div class="text-value gsbp-m-value">1.35rem / 2.1rem </div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-m-var","inlineCssStyles":".gsbp-m-var{color:#000000;}","textContent":"\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-size\u002d\u002dm / \u002d\u002dwp\u002d\u002dcustom\u002d\u002dline-height\u002d\u002dm ","className":"text-variable","localId":"gsbp-m-var","styleAttributes":{"color":["#000000"]}} -->
<div class="text-variable gsbp-m-var">--wp--preset--font-size--m / --wp--custom--line-height--m </div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-r-main","inlineCssStyles":".gsbp-r-main{color:#000000;}","dynamicGClasses":[{"value":"text-styles","type":"local","label":"text-styles","localed":false,"css":"","attributes":[],"originalID":"gspb\u002d\u002doGyy2B","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"text-styles","localId":"gsbp-r-main","styleAttributes":{"color":["#000000"]}} -->
<div class="text-styles gsbp-r-main"><!-- wp:greenshift-blocks/element {"id":"gsbp-r-title","inlineCssStyles":".gsbp-r-title{font-size:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-size\u002d\u002dr, 1.2rem);line-height:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dline-height\u002d\u002dr, 1.9rem);}","textContent":"Regular","className":"text-title","localId":"gsbp-r-title","styleAttributes":{"fontSize":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-size\u002d\u002dr, 1.2rem)"],"lineHeight":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dline-height\u002d\u002dr, 1.9rem)"]}} -->
<div class="text-title gsbp-r-title">Regular</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-r-group","inlineCssStyles":".gsbp-r-group{color:#000000;}","type":"inner","className":"text-group","localId":"gsbp-r-group","styleAttributes":{"color":["#000000"]}} -->
<div class="text-group gsbp-r-group"><!-- wp:greenshift-blocks/element {"id":"gsbp-r-value","inlineCssStyles":".gsbp-r-value{color:#000000;}","textContent":"1.2rem / 1.9rem ","className":"text-value","localId":"gsbp-r-value","styleAttributes":{"color":["#000000"]}} -->
<div class="text-value gsbp-r-value">1.2rem / 1.9rem </div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-r-var","inlineCssStyles":".gsbp-r-var{color:#000000;}","textContent":"\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-size\u002d\u002dr / \u002d\u002dwp\u002d\u002dcustom\u002d\u002dline-height\u002d\u002dr ","className":"text-variable","localId":"gsbp-r-var","styleAttributes":{"color":["#000000"]}} -->
<div class="text-variable gsbp-r-var">--wp--preset--font-size--r / --wp--custom--line-height--r </div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-s-main","inlineCssStyles":".gsbp-s-main{color:#000000;}","dynamicGClasses":[{"value":"text-styles","type":"local","label":"text-styles","localed":false,"css":"","attributes":[],"originalID":"gspb\u002d\u002doGyy2B","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"text-styles","localId":"gsbp-s-main","styleAttributes":{"color":["#000000"]}} -->
<div class="text-styles gsbp-s-main"><!-- wp:greenshift-blocks/element {"id":"gsbp-s-title","inlineCssStyles":".gsbp-s-title{font-size:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-size\u002d\u002ds, 1rem);line-height:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dline-height\u002d\u002ds, 1.4rem);}","textContent":"Small","className":"text-title","localId":"gsbp-s-title","styleAttributes":{"fontSize":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-size\u002d\u002ds, 1rem)"],"lineHeight":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dline-height\u002d\u002ds, 1.4rem)"]}} -->
<div class="text-title gsbp-s-title">Small</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-s-group","inlineCssStyles":".gsbp-s-group{color:#000000;}","type":"inner","className":"text-group","localId":"gsbp-s-group","styleAttributes":{"color":["#000000"]}} -->
<div class="text-group gsbp-s-group"><!-- wp:greenshift-blocks/element {"id":"gsbp-s-value","inlineCssStyles":".gsbp-s-value{color:#000000;}","textContent":"1rem / 1.4rem ","className":"text-value","localId":"gsbp-s-value","styleAttributes":{"color":["#000000"]}} -->
<div class="text-value gsbp-s-value">1rem / 1.4rem </div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-s-var","inlineCssStyles":".gsbp-s-var{color:#000000;}","textContent":"\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-size\u002d\u002ds / \u002d\u002dwp\u002d\u002dcustom\u002d\u002dline-height\u002d\u002ds ","className":"text-variable","localId":"gsbp-s-var","styleAttributes":{"color":["#000000"]}} -->
<div class="text-variable gsbp-s-var">--wp--preset--font-size--s / --wp--custom--line-height--s </div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-xs-main","inlineCssStyles":".gsbp-xs-main{color:#000000;}","dynamicGClasses":[{"value":"text-styles","type":"local","label":"text-styles","localed":false,"css":"","attributes":[],"originalID":"gspb\u002d\u002doGyy2B","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"text-styles","localId":"gsbp-xs-main","styleAttributes":{"color":["#000000"]}} -->
<div class="text-styles gsbp-xs-main"><!-- wp:greenshift-blocks/element {"id":"gsbp-xs-title","inlineCssStyles":".gsbp-xs-title{font-size:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-size\u002d\u002dxs, 0.85rem);line-height:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dline-height\u002d\u002dxs, 1.15rem);}","textContent":"X Small","className":"text-title","localId":"gsbp-xs-title","styleAttributes":{"fontSize":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-size\u002d\u002dxs, 0.85rem)"],"lineHeight":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dline-height\u002d\u002dxs, 1.15rem)"]}} -->
<div class="text-title gsbp-xs-title">X Small</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-xs-group","inlineCssStyles":".gsbp-xs-group{color:#000000;}","type":"inner","className":"text-group","localId":"gsbp-xs-group","styleAttributes":{"color":["#000000"]}} -->
<div class="text-group gsbp-xs-group"><!-- wp:greenshift-blocks/element {"id":"gsbp-xs-value","inlineCssStyles":".gsbp-xs-value{color:#000000;}","textContent":"0.85rem / 1.15rem ","className":"text-value","localId":"gsbp-xs-value","styleAttributes":{"color":["#000000"]}} -->
<div class="text-value gsbp-xs-value">0.85rem / 1.15rem </div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-xs-var","inlineCssStyles":".gsbp-xs-var{color:#000000;}","textContent":"\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-size\u002d\u002dxs / \u002d\u002dwp\u002d\u002dcustom\u002d\u002dline-height\u002d\u002dxs ","className":"text-variable","localId":"gsbp-xs-var","styleAttributes":{"color":["#000000"]}} -->
<div class="text-variable gsbp-xs-var">--wp--preset--font-size--xs / --wp--custom--line-height--xs </div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-mini-main","inlineCssStyles":".gsbp-mini-main{color:#000000;}","dynamicGClasses":[{"value":"text-styles","type":"local","label":"text-styles","localed":false,"css":"","attributes":[],"originalID":"gspb\u002d\u002doGyy2B","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"text-styles","localId":"gsbp-mini-main","styleAttributes":{"color":["#000000"]}} -->
<div class="text-styles gsbp-mini-main"><!-- wp:greenshift-blocks/element {"id":"gsbp-mini-title","inlineCssStyles":".gsbp-mini-title{font-size:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-size\u002d\u002dmini, 11px);line-height:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dline-height\u002d\u002dmini, 14px);}","textContent":"Mini","className":"text-title","localId":"gsbp-mini-title","styleAttributes":{"fontSize":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-size\u002d\u002dmini, 11px)"],"lineHeight":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dline-height\u002d\u002dmini, 14px)"]}} -->
<div class="text-title gsbp-mini-title">Mini</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-mini-group","inlineCssStyles":".gsbp-mini-group{color:#000000;}","type":"inner","className":"text-group","localId":"gsbp-mini-group","styleAttributes":{"color":["#000000"]}} -->
<div class="text-group gsbp-mini-group"><!-- wp:greenshift-blocks/element {"id":"gsbp-mini-value","inlineCssStyles":".gsbp-mini-value{color:#000000;}","textContent":"11px / 14px ","className":"text-value","localId":"gsbp-mini-value","styleAttributes":{"color":["#000000"]}} -->
<div class="text-value gsbp-mini-value">11px / 14px </div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-mini-var","inlineCssStyles":".gsbp-mini-var{color:#000000;}","textContent":"\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-size\u002d\u002dmini / \u002d\u002dwp\u002d\u002dcustom\u002d\u002dline-height\u002d\u002dmini ","className":"text-variable","localId":"gsbp-mini-var","styleAttributes":{"color":["#000000"]}} -->
<div class="text-variable gsbp-mini-var">--wp--preset--font-size--mini / --wp--custom--line-height--mini </div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-9386f38","anchor":"spacing","inlineCssStyles":".gsbp-9386f38{color:#000000;}","type":"inner","localId":"gsbp-9386f38","align":"wide","styleAttributes":{"color":["#000000"]},"metadata":{"name":"Spacing"}} -->
<div class="gsbp-9386f38 alignwide" id="spacing"><!-- wp:greenshift-blocks/element {"id":"gsbp-71b8e69","inlineCssStyles":".gsbp-71b8e69{color:#000000;}","dynamicGClasses":[{"value":"brand-panel-wrap","type":"local","label":"brand-panel-wrap","localed":false,"css":"","attributes":[],"originalID":"gspb-DTHotu2","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"brand-panel-wrap","localId":"gsbp-71b8e69","align":"wide","styleAttributes":{"color":["#000000"]},"metadata":{"name":"Title"}} -->
<div class="brand-panel-wrap gsbp-71b8e69 alignwide"><!-- wp:greenshift-blocks/element {"id":"gsbp-35ba49d","inlineCssStyles":".gsbp-35ba49d{color:#000000;}","dynamicGClasses":[{"value":"brand-panel-title","type":"local","label":"brand-panel-title","localed":false,"css":"","attributes":[],"originalID":"gsbp-7bc0611","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"textContent":"Spacing","tag":"h2","className":"brand-panel-title","localId":"gsbp-35ba49d","styleAttributes":{"color":["#000000"]},"isVariation":"divtext"} -->
<h2 class="brand-panel-title gsbp-35ba49d">Spacing</h2>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-257c5ad","inlineCssStyles":".gsbp-257c5ad{display:flex;flex-direction:column;column-gap:0px;row-gap:0px;justify-content:flex-start;color:rgba(0,0,0,1);}","type":"inner","localId":"gsbp-257c5ad","styleAttributes":{"display":["flex"],"flexDirection":["column"],"columnGap":["0px"],"rowGap":["0px"],"justifyContent":["flex-start"],"color":["rgba(0,0,0,1)"]}} -->
<div class="gsbp-257c5ad"><!-- wp:greenshift-blocks/element {"id":"gsbp-838296b","inlineCssStyles":".gsbp-838296b{color:#000000;}","dynamicGClasses":[{"value":"brand-panel-subtitle","type":"local","label":"brand-panel-subtitle","localed":false,"css":"","attributes":[],"originalID":"gspb-7UE8MMY","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"textContent":"Spacing styles","className":"brand-panel-subtitle","localId":"gsbp-838296b","styleAttributes":{"color":["#000000"]}} -->
<div class="brand-panel-subtitle gsbp-838296b">Spacing styles</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-2cc3f54","inlineCssStyles":".gsbp-2cc3f54{color:#000000;}","dynamicGClasses":[{"value":"brand-panel-subsub","type":"local","label":"brand-panel-subsub","localed":false,"css":"","attributes":[],"originalID":"gspb-gf0ZxC0","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"textContent":"In and Our Spacing","className":"brand-panel-subsub","localId":"gsbp-2cc3f54","styleAttributes":{"color":["#000000"]}} -->
<div class="brand-panel-subsub gsbp-2cc3f54">In and Our Spacing</div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-34af54e","inlineCssStyles":".gsbp-34af54e{color:#000000;}","dynamicGClasses":[{"value":"brand-panel-content","type":"local","label":"brand-panel-content","localed":false,"css":"","attributes":[],"originalID":"gspb-ZzWr1uD","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"brand-panel-content","localId":"gsbp-34af54e","align":"wide","styleAttributes":{"color":["#000000"]},"metadata":{"name":"Content"}} -->
<div class="brand-panel-content gsbp-34af54e alignwide"><!-- wp:greenshift-blocks/element {"id":"gsbp-sp01","inlineCssStyles":".spacing-preset{display:flex;align-items:center;gap:20px;margin-bottom:15px;}@media (max-width: 575.98px){.spacing-preset{flex-direction:column;row-gap:5px;}}.spacing-preset .spacing-preset-title{width:180px;font-size:17px;}@media (max-width: 575.98px){.spacing-preset .spacing-preset-title{width:auto;}}.spacing-preset .spacing-preset-value{font-size:14px;width:180px;}@media (max-width: 575.98px){.spacing-preset .spacing-preset-value{width:auto;}}.spacing-preset .spacing-preset-var{width:400px;font-size:14px;opacity:0.5;}@media (max-width: 575.98px){.spacing-preset .spacing-preset-var{width:auto;}}.spacing-preset .preset-spacing-line{width:100%;background-color:#e0e6eb;}.gsbp-sp01{color:#000000;}","dynamicGClasses":[{"value":"spacing-preset","type":"local","label":"spacing-preset","localed":false,"css":".spacing-preset{display:flex;align-items:center;gap:20px;margin-bottom:15px;}@media (max-width: 575.98px){.spacing-preset{flex-direction:column;row-gap:5px;}}","attributes":{"styleAttributes":{"display":["flex"],"alignItems":["center"],"gap":["20px"],"marginBottom":["15px"],"flexDirection":[null,null,null,"column"],"rowGap":[null,null,null,"5px"]}},"originalID":"gsbp-sp01","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[{"value":" .spacing-preset-title","attributes":{"styleAttributes":{"width":["180px",null,null,"auto"],"fontSize":["17px"]}},"css":".spacing-preset .spacing-preset-title{width:180px;font-size:17px;}@media (max-width: 575.98px){.spacing-preset .spacing-preset-title{width:auto;}}"},{"value":" .spacing-preset-value","attributes":{"styleAttributes":{"fontSize":["14px"],"width":["180px",null,null,"auto"]}},"css":".spacing-preset .spacing-preset-value{font-size:14px;width:180px;}@media (max-width: 575.98px){.spacing-preset .spacing-preset-value{width:auto;}}"},{"value":" .spacing-preset-var","attributes":{"styleAttributes":{"width":["400px",null,null,"auto"],"fontSize":["14px"],"opacity":[0.5]}},"css":".spacing-preset .spacing-preset-var{width:400px;font-size:14px;opacity:0.5;}@media (max-width: 575.98px){.spacing-preset .spacing-preset-var{width:auto;}}"},{"value":" .preset-spacing-line","attributes":{"styleAttributes":{"width":["100%"],"backgroundColor":["#e0e6eb"]}},"css":".spacing-preset .preset-spacing-line{width:100%;background-color:#e0e6eb;}"}]}],"type":"inner","className":"spacing-preset","localId":"gsbp-sp01","styleAttributes":{"color":["#000000"]}} -->
<div class="spacing-preset gsbp-sp01"><!-- wp:greenshift-blocks/element {"id":"gsbp-sp01l","inlineCssStyles":".gsbp-sp01l{color:#000000;}","textContent":"X Small","className":"spacing-preset-title","localId":"gsbp-sp01l","styleAttributes":{"color":["#000000"]}} -->
<div class="spacing-preset-title gsbp-sp01l">X Small</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-sp01d","inlineCssStyles":".gsbp-sp01d{color:#000000;}","textContent":"0.44rem","className":"spacing-preset-value","localId":"gsbp-sp01d","styleAttributes":{"color":["#000000"]}} -->
<div class="spacing-preset-value gsbp-sp01d">0.44rem</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-fc0b5fd","inlineCssStyles":".gsbp-fc0b5fd{color:#000000;}","textContent":"\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d20","className":"spacing-preset-var","localId":"gsbp-fc0b5fd","styleAttributes":{"color":["#000000"]}} -->
<div class="spacing-preset-var gsbp-fc0b5fd">--wp--preset--spacing--20</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-sp01v","inlineCssStyles":".gsbp-sp01v{height:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d20, 0.44rem);}","type":"no","className":"preset-spacing-line","localId":"gsbp-sp01v","styleAttributes":{"height":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d20, 0.44rem)"]}} -->
<div class="preset-spacing-line gsbp-sp01v"></div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-638f17c","inlineCssStyles":".gsbp-638f17c{color:#000000;}","dynamicGClasses":[{"value":"spacing-preset","type":"local","label":"spacing-preset","localed":false,"css":"","attributes":[],"originalID":"gsbp-sp01","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"spacing-preset","localId":"gsbp-638f17c","styleAttributes":{"color":["#000000"]}} -->
<div class="spacing-preset gsbp-638f17c"><!-- wp:greenshift-blocks/element {"id":"gsbp-20cb630","inlineCssStyles":".gsbp-20cb630{color:#000000;}","textContent":"Small","className":"spacing-preset-title","localId":"gsbp-20cb630","styleAttributes":{"color":["#000000"]}} -->
<div class="spacing-preset-title gsbp-20cb630">Small</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-97150ed","inlineCssStyles":".gsbp-97150ed{color:#000000;}","textContent":"0.67rem","className":"spacing-preset-value","localId":"gsbp-97150ed","styleAttributes":{"color":["#000000"]}} -->
<div class="spacing-preset-value gsbp-97150ed">0.67rem</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-3f35eef","inlineCssStyles":".gsbp-3f35eef{color:#000000;}","textContent":"\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d30","className":"spacing-preset-var","localId":"gsbp-3f35eef","styleAttributes":{"color":["#000000"]}} -->
<div class="spacing-preset-var gsbp-3f35eef">--wp--preset--spacing--30</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-8f39c9e","inlineCssStyles":".gsbp-8f39c9e{height:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d30, 0.67rem);}","type":"no","className":"preset-spacing-line","localId":"gsbp-8f39c9e","styleAttributes":{"height":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d30, 0.67rem)"]}} -->
<div class="preset-spacing-line gsbp-8f39c9e"></div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-a1b2c3d","inlineCssStyles":".gsbp-a1b2c3d{color:#000000;}","dynamicGClasses":[{"value":"spacing-preset","type":"local","label":"spacing-preset","localed":false,"css":"","attributes":[],"originalID":"gsbp-sp01","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"spacing-preset","localId":"gsbp-a1b2c3d","styleAttributes":{"color":["#000000"]}} -->
<div class="spacing-preset gsbp-a1b2c3d"><!-- wp:greenshift-blocks/element {"id":"gsbp-a1b2c3e","inlineCssStyles":".gsbp-a1b2c3e{color:#000000;}","textContent":"Regular","className":"spacing-preset-title","localId":"gsbp-a1b2c3e","styleAttributes":{"color":["#000000"]}} -->
<div class="spacing-preset-title gsbp-a1b2c3e">Regular</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-a1b2c3f","inlineCssStyles":".gsbp-a1b2c3f{color:#000000;}","textContent":"1rem","className":"spacing-preset-value","localId":"gsbp-a1b2c3f","styleAttributes":{"color":["#000000"]}} -->
<div class="spacing-preset-value gsbp-a1b2c3f">1rem</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-a1b2c3g","inlineCssStyles":".gsbp-a1b2c3g{color:#000000;}","textContent":"\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d40","className":"spacing-preset-var","localId":"gsbp-a1b2c3g","styleAttributes":{"color":["#000000"]}} -->
<div class="spacing-preset-var gsbp-a1b2c3g">--wp--preset--spacing--40</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-a1b2c3h","inlineCssStyles":".gsbp-a1b2c3h{height:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d40, 1rem);}","type":"no","className":"preset-spacing-line","localId":"gsbp-a1b2c3h","styleAttributes":{"height":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d40, 1rem)"]}} -->
<div class="preset-spacing-line gsbp-a1b2c3h"></div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-b2c3d4e","inlineCssStyles":".gsbp-b2c3d4e{color:#000000;}","dynamicGClasses":[{"value":"spacing-preset","type":"local","label":"spacing-preset","localed":false,"css":"","attributes":[],"originalID":"gsbp-sp01","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"spacing-preset","localId":"gsbp-b2c3d4e","styleAttributes":{"color":["#000000"]}} -->
<div class="spacing-preset gsbp-b2c3d4e"><!-- wp:greenshift-blocks/element {"id":"gsbp-b2c3d4f","inlineCssStyles":".gsbp-b2c3d4f{color:#000000;}","textContent":"Medium","className":"spacing-preset-title","localId":"gsbp-b2c3d4f","styleAttributes":{"color":["#000000"]}} -->
<div class="spacing-preset-title gsbp-b2c3d4f">Medium</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-b2c3d4g","inlineCssStyles":".gsbp-b2c3d4g{color:#000000;}","textContent":"1.5rem","className":"spacing-preset-value","localId":"gsbp-b2c3d4g","styleAttributes":{"color":["#000000"]}} -->
<div class="spacing-preset-value gsbp-b2c3d4g">1.5rem</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-b2c3d4h","inlineCssStyles":".gsbp-b2c3d4h{color:#000000;}","textContent":"\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d50","className":"spacing-preset-var","localId":"gsbp-b2c3d4h","styleAttributes":{"color":["#000000"]}} -->
<div class="spacing-preset-var gsbp-b2c3d4h">--wp--preset--spacing--50</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-b2c3d4i","inlineCssStyles":".gsbp-b2c3d4i{height:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d50, 1.5rem);}","type":"no","className":"preset-spacing-line","localId":"gsbp-b2c3d4i","styleAttributes":{"height":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d50, 1.5rem)"]}} -->
<div class="preset-spacing-line gsbp-b2c3d4i"></div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-c3d4e5f","inlineCssStyles":".gsbp-c3d4e5f{color:#000000;}","dynamicGClasses":[{"value":"spacing-preset","type":"local","label":"spacing-preset","localed":false,"css":"","attributes":[],"originalID":"gsbp-sp01","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"spacing-preset","localId":"gsbp-c3d4e5f","styleAttributes":{"color":["#000000"]}} -->
<div class="spacing-preset gsbp-c3d4e5f"><!-- wp:greenshift-blocks/element {"id":"gsbp-c3d4e5g","inlineCssStyles":".gsbp-c3d4e5g{color:#000000;}","textContent":"Large","className":"spacing-preset-title","localId":"gsbp-c3d4e5g","styleAttributes":{"color":["#000000"]}} -->
<div class="spacing-preset-title gsbp-c3d4e5g">Large</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-c3d4e5h","inlineCssStyles":".gsbp-c3d4e5h{color:#000000;}","textContent":"2.25rem","className":"spacing-preset-value","localId":"gsbp-c3d4e5h","styleAttributes":{"color":["#000000"]}} -->
<div class="spacing-preset-value gsbp-c3d4e5h">2.25rem</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-c3d4e5i","inlineCssStyles":".gsbp-c3d4e5i{color:#000000;}","textContent":"\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d60","className":"spacing-preset-var","localId":"gsbp-c3d4e5i","styleAttributes":{"color":["#000000"]}} -->
<div class="spacing-preset-var gsbp-c3d4e5i">--wp--preset--spacing--60</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-c3d4e5j","inlineCssStyles":".gsbp-c3d4e5j{height:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d60, 2.25rem);}","type":"no","className":"preset-spacing-line","localId":"gsbp-c3d4e5j","styleAttributes":{"height":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d60, 2.25rem)"]}} -->
<div class="preset-spacing-line gsbp-c3d4e5j"></div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-d4e5f6g","inlineCssStyles":".gsbp-d4e5f6g{color:#000000;}","dynamicGClasses":[{"value":"spacing-preset","type":"local","label":"spacing-preset","localed":false,"css":"","attributes":[],"originalID":"gsbp-sp01","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"spacing-preset","localId":"gsbp-d4e5f6g","styleAttributes":{"color":["#000000"]}} -->
<div class="spacing-preset gsbp-d4e5f6g"><!-- wp:greenshift-blocks/element {"id":"gsbp-d4e5f6h","inlineCssStyles":".gsbp-d4e5f6h{color:#000000;}","textContent":"X Large","className":"spacing-preset-title","localId":"gsbp-d4e5f6h","styleAttributes":{"color":["#000000"]}} -->
<div class="spacing-preset-title gsbp-d4e5f6h">X Large</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-d4e5f6i","inlineCssStyles":".gsbp-d4e5f6i{color:#000000;}","textContent":"3.38rem","className":"spacing-preset-value","localId":"gsbp-d4e5f6i","styleAttributes":{"color":["#000000"]}} -->
<div class="spacing-preset-value gsbp-d4e5f6i">3.38rem</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-d4e5f6j","inlineCssStyles":".gsbp-d4e5f6j{color:#000000;}","textContent":"\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d70","className":"spacing-preset-var","localId":"gsbp-d4e5f6j","styleAttributes":{"color":["#000000"]}} -->
<div class="spacing-preset-var gsbp-d4e5f6j">--wp--preset--spacing--70</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-d4e5f6k","inlineCssStyles":".gsbp-d4e5f6k{height:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d70, 3.38rem);}","type":"no","className":"preset-spacing-line","localId":"gsbp-d4e5f6k","styleAttributes":{"height":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d70, 3.38rem)"]}} -->
<div class="preset-spacing-line gsbp-d4e5f6k"></div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-e5f6g7h","inlineCssStyles":".gsbp-e5f6g7h{color:#000000;}","dynamicGClasses":[{"value":"spacing-preset","type":"local","label":"spacing-preset","localed":false,"css":"","attributes":[],"originalID":"gsbp-sp01","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"spacing-preset","localId":"gsbp-e5f6g7h","styleAttributes":{"color":["#000000"]}} -->
<div class="spacing-preset gsbp-e5f6g7h"><!-- wp:greenshift-blocks/element {"id":"gsbp-e5f6g7i","inlineCssStyles":".gsbp-e5f6g7i{color:#000000;}","textContent":"XX Large","className":"spacing-preset-title","localId":"gsbp-e5f6g7i","styleAttributes":{"color":["#000000"]}} -->
<div class="spacing-preset-title gsbp-e5f6g7i">XX Large</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-e5f6g7j","inlineCssStyles":".gsbp-e5f6g7j{color:#000000;}","textContent":"5.06rem","className":"spacing-preset-value","localId":"gsbp-e5f6g7j","styleAttributes":{"color":["#000000"]}} -->
<div class="spacing-preset-value gsbp-e5f6g7j">5.06rem</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-e5f6g7k","inlineCssStyles":".gsbp-e5f6g7k{color:#000000;}","textContent":"\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d80","className":"spacing-preset-var","localId":"gsbp-e5f6g7k","styleAttributes":{"color":["#000000"]}} -->
<div class="spacing-preset-var gsbp-e5f6g7k">--wp--preset--spacing--80</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-e5f6g7l","inlineCssStyles":".gsbp-e5f6g7l{height:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d80, 5.06rem);}","type":"no","className":"preset-spacing-line","localId":"gsbp-e5f6g7l","styleAttributes":{"height":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d80, 5.06rem)"]}} -->
<div class="preset-spacing-line gsbp-e5f6g7l"></div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-f6g7h8i","inlineCssStyles":".gsbp-f6g7h8i{color:#000000;}","dynamicGClasses":[{"value":"spacing-preset","type":"local","label":"spacing-preset","localed":false,"css":"","attributes":[],"originalID":"gsbp-sp01","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"spacing-preset","localId":"gsbp-f6g7h8i","styleAttributes":{"color":["#000000"]}} -->
<div class="spacing-preset gsbp-f6g7h8i"><!-- wp:greenshift-blocks/element {"id":"gsbp-f6g7h8j","inlineCssStyles":".gsbp-f6g7h8j{color:#000000;}","textContent":"High","className":"spacing-preset-title","localId":"gsbp-f6g7h8j","styleAttributes":{"color":["#000000"]}} -->
<div class="spacing-preset-title gsbp-f6g7h8j">High</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-f6g7h8k","inlineCssStyles":".gsbp-f6g7h8k{color:#000000;}","textContent":"7.59rem","className":"spacing-preset-value","localId":"gsbp-f6g7h8k","styleAttributes":{"color":["#000000"]}} -->
<div class="spacing-preset-value gsbp-f6g7h8k">7.59rem</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-f6g7h8l","inlineCssStyles":".gsbp-f6g7h8l{color:#000000;}","textContent":"\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d90","className":"spacing-preset-var","localId":"gsbp-f6g7h8l","styleAttributes":{"color":["#000000"]}} -->
<div class="spacing-preset-var gsbp-f6g7h8l">--wp--preset--spacing--90</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-f6g7h8m","inlineCssStyles":".gsbp-f6g7h8m{height:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d90, 7.59rem);}","type":"no","className":"preset-spacing-line","localId":"gsbp-f6g7h8m","styleAttributes":{"height":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d90, 7.59rem)"]}} -->
<div class="preset-spacing-line gsbp-f6g7h8m"></div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-g7h8i9j","inlineCssStyles":".gsbp-g7h8i9j{color:#000000;}","dynamicGClasses":[{"value":"spacing-preset","type":"local","label":"spacing-preset","localed":false,"css":"","attributes":[],"originalID":"gsbp-sp01","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"spacing-preset","localId":"gsbp-g7h8i9j","styleAttributes":{"color":["#000000"]}} -->
<div class="spacing-preset gsbp-g7h8i9j"><!-- wp:greenshift-blocks/element {"id":"gsbp-g7h8i9k","inlineCssStyles":".gsbp-g7h8i9k{color:#000000;}","textContent":"Grand","className":"spacing-preset-title","localId":"gsbp-g7h8i9k","styleAttributes":{"color":["#000000"]}} -->
<div class="spacing-preset-title gsbp-g7h8i9k">Grand</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-g7h8i9l","inlineCssStyles":".gsbp-g7h8i9l{color:#000000;}","textContent":"11.39rem","className":"spacing-preset-value","localId":"gsbp-g7h8i9l","styleAttributes":{"color":["#000000"]}} -->
<div class="spacing-preset-value gsbp-g7h8i9l">11.39rem</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-g7h8i9m","inlineCssStyles":".gsbp-g7h8i9m{color:#000000;}","textContent":"\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d100","className":"spacing-preset-var","localId":"gsbp-g7h8i9m","styleAttributes":{"color":["#000000"]}} -->
<div class="spacing-preset-var gsbp-g7h8i9m">--wp--preset--spacing--100</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-g7h8i9n","inlineCssStyles":".gsbp-g7h8i9n{height:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d100, 11.39rem);}","type":"no","className":"preset-spacing-line","localId":"gsbp-g7h8i9n","styleAttributes":{"height":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d100, 11.39rem)"]}} -->
<div class="preset-spacing-line gsbp-g7h8i9n"></div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-h8i9j0k","inlineCssStyles":".gsbp-h8i9j0k{color:#000000;}","dynamicGClasses":[{"value":"spacing-preset","type":"local","label":"spacing-preset","localed":false,"css":"","attributes":[],"originalID":"gsbp-sp01","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"spacing-preset","localId":"gsbp-h8i9j0k","styleAttributes":{"color":["#000000"]}} -->
<div class="spacing-preset gsbp-h8i9j0k"><!-- wp:greenshift-blocks/element {"id":"gsbp-h8i9j0l","inlineCssStyles":".gsbp-h8i9j0l{color:#000000;}","textContent":"Huge","className":"spacing-preset-title","localId":"gsbp-h8i9j0l","styleAttributes":{"color":["#000000"]}} -->
<div class="spacing-preset-title gsbp-h8i9j0l">Huge</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-h8i9j0m","inlineCssStyles":".gsbp-h8i9j0m{color:#000000;}","textContent":"17.09rem","className":"spacing-preset-value","localId":"gsbp-h8i9j0m","styleAttributes":{"color":["#000000"]}} -->
<div class="spacing-preset-value gsbp-h8i9j0m">17.09rem</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-h8i9j0n","inlineCssStyles":".gsbp-h8i9j0n{color:#000000;}","textContent":"\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d110","className":"spacing-preset-var","localId":"gsbp-h8i9j0n","styleAttributes":{"color":["#000000"]}} -->
<div class="spacing-preset-var gsbp-h8i9j0n">--wp--preset--spacing--110</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-h8i9j0o","inlineCssStyles":".gsbp-h8i9j0o{height:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d110, 17.09rem);}","type":"no","className":"preset-spacing-line","localId":"gsbp-h8i9j0o","styleAttributes":{"height":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d110, 17.09rem)"]}} -->
<div class="preset-spacing-line gsbp-h8i9j0o"></div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-db42957","inlineCssStyles":".gsbp-db42957{color:#000000;}","dynamicGClasses":[{"value":"spacing-preset","type":"local","label":"spacing-preset","localed":false,"css":"","attributes":[],"originalID":"gsbp-sp01","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"spacing-preset","localId":"gsbp-db42957","styleAttributes":{"color":["#000000"]}} -->
<div class="spacing-preset gsbp-db42957"><!-- wp:greenshift-blocks/element {"id":"gsbp-209705f","inlineCssStyles":".gsbp-209705f{color:#000000;}","textContent":"Side space","className":"spacing-preset-title","localId":"gsbp-209705f","styleAttributes":{"color":["#000000"]}} -->
<div class="spacing-preset-title gsbp-209705f">Side space</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-28f1c22","inlineCssStyles":".gsbp-28f1c22{color:#000000;}","textContent":"min(3vw, 20px)","className":"spacing-preset-value","localId":"gsbp-28f1c22","styleAttributes":{"color":["#000000"]}} -->
<div class="spacing-preset-value gsbp-28f1c22">min(3vw, 20px)</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-0f89299","inlineCssStyles":".gsbp-0f89299{color:#000000;}","textContent":"\u002d\u002dwp\u002d\u002dcustom\u002d\u002dspacing\u002d\u002dside","className":"spacing-preset-var","localId":"gsbp-0f89299","styleAttributes":{"color":["#000000"]}} -->
<div class="spacing-preset-var gsbp-0f89299">--wp--custom--spacing--side</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-ad6422f","inlineCssStyles":".gsbp-ad6422f{height:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dspacing\u002d\u002dside, min(3vw, 20px));}","type":"no","className":"preset-spacing-line","localId":"gsbp-ad6422f","styleAttributes":{"height":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dspacing\u002d\u002dside, min(3vw, 20px))"]}} -->
<div class="preset-spacing-line gsbp-ad6422f"></div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-1955d37","anchor":"size","inlineCssStyles":".gsbp-1955d37{color:#000000;}","type":"inner","localId":"gsbp-1955d37","align":"wide","styleAttributes":{"color":["#000000"]},"metadata":{"name":"Size"}} -->
<div class="gsbp-1955d37 alignwide" id="size"><!-- wp:greenshift-blocks/element {"id":"gsbp-46f8748","inlineCssStyles":".gsbp-46f8748{color:#000000;}","dynamicGClasses":[{"value":"brand-panel-wrap","type":"local","label":"brand-panel-wrap","localed":false,"css":"","attributes":[],"originalID":"gspb-DTHotu2","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"brand-panel-wrap","localId":"gsbp-46f8748","align":"wide","styleAttributes":{"color":["#000000"]},"metadata":{"name":"Title"}} -->
<div class="brand-panel-wrap gsbp-46f8748 alignwide"><!-- wp:greenshift-blocks/element {"id":"gsbp-7d5716f","inlineCssStyles":".gsbp-7d5716f{color:#000000;}","dynamicGClasses":[{"value":"brand-panel-title","type":"local","label":"brand-panel-title","localed":false,"css":"","attributes":[],"originalID":"gsbp-7bc0611","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"textContent":"Size","tag":"h2","className":"brand-panel-title","localId":"gsbp-7d5716f","styleAttributes":{"color":["#000000"]},"isVariation":"divtext"} -->
<h2 class="brand-panel-title gsbp-7d5716f">Size</h2>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-0b720dc","inlineCssStyles":".gsbp-0b720dc{display:flex;flex-direction:column;column-gap:0px;row-gap:0px;justify-content:flex-start;color:rgba(0,0,0,1);}","type":"inner","localId":"gsbp-0b720dc","styleAttributes":{"display":["flex"],"flexDirection":["column"],"columnGap":["0px"],"rowGap":["0px"],"justifyContent":["flex-start"],"color":["rgba(0,0,0,1)"]}} -->
<div class="gsbp-0b720dc"><!-- wp:greenshift-blocks/element {"id":"gsbp-4dca2fb","inlineCssStyles":".gsbp-4dca2fb{color:#000000;}","dynamicGClasses":[{"value":"brand-panel-subtitle","type":"local","label":"brand-panel-subtitle","localed":false,"css":"","attributes":[],"originalID":"gspb-7UE8MMY","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"textContent":"Size styles","className":"brand-panel-subtitle","localId":"gsbp-4dca2fb","styleAttributes":{"color":["#000000"]}} -->
<div class="brand-panel-subtitle gsbp-4dca2fb">Size styles</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-2c5d6c5","inlineCssStyles":".gsbp-2c5d6c5{color:#000000;}","dynamicGClasses":[{"value":"brand-panel-subsub","type":"local","label":"brand-panel-subsub","localed":false,"css":"","attributes":[],"originalID":"gspb-gf0ZxC0","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"textContent":"Sized rectangles","className":"brand-panel-subsub","localId":"gsbp-2c5d6c5","styleAttributes":{"color":["#000000"]}} -->
<div class="brand-panel-subsub gsbp-2c5d6c5">Sized rectangles</div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-1649da3","inlineCssStyles":".gsbp-1649da3{color:#000000;}","dynamicGClasses":[{"value":"brand-panel-content","type":"local","label":"brand-panel-content","localed":false,"css":"","attributes":[],"originalID":"gspb-ZzWr1uD","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"brand-panel-content","localId":"gsbp-1649da3","align":"wide","styleAttributes":{"color":["#000000"]},"metadata":{"name":"Content"}} -->
<div class="brand-panel-content gsbp-1649da3 alignwide"><!-- wp:greenshift-blocks/element {"id":"gsbp-whgrid","inlineCssStyles":".gsbp-whgrid{gap:20px;display:grid;column-gap:10px;row-gap:10px;}.gsbp-whgrid\u003e*:not(style):nth-of-type(1){grid-area:1 / 1 / span 1 / span 1;}.gsbp-whgrid\u003e*:not(style):nth-of-type(2){grid-area:1 / 2 / span 1 / span 1;}.gsbp-whgrid\u003e*:not(style):nth-of-type(3){grid-area:1 / 3 / span 1 / span 1;}.gsbp-whgrid\u003e*:not(style):nth-of-type(4){grid-area:1 / 4 / span 1 / span 1;}.gsbp-whgrid\u003e*:not(style):nth-of-type(5){grid-area:1 / 5 / span 1 / span 1;}.gsbp-whgrid\u003e*:not(style):nth-of-type(6){grid-area:3 / 1 / span 1 / span 1;}.gsbp-whgrid\u003e*:not(style):nth-of-type(7){grid-area:3 / 2 / span 1 / span 1;}.gsbp-whgrid\u003e*:not(style):nth-of-type(8){grid-area:3 / 3 / span 1 / span 1;}.gsbp-whgrid\u003e*:not(style):nth-of-type(9){grid-area:3 / 4 / span 1 / span 1;}.gsbp-whgrid\u003e*:not(style):nth-of-type(10){grid-area:3 / 5 / span 1 / span 1;}.gsbp-whgrid{grid-template-columns:repeat(5, 1fr);}@media (max-width: 991.98px){.gsbp-whgrid\u003e*:not(style):nth-of-type(1){grid-area:1 / 1 / span 1 / span 1;}}@media (max-width: 991.98px){.gsbp-whgrid\u003e*:not(style):nth-of-type(2){grid-area:1 / 2 / span 1 / span 1;}}@media (max-width: 991.98px){.gsbp-whgrid\u003e*:not(style):nth-of-type(3){grid-area:2 / 1 / span 1 / span 1;}}@media (max-width: 991.98px){.gsbp-whgrid\u003e*:not(style):nth-of-type(4){grid-area:2 / 2 / span 1 / span 1;}}@media (max-width: 991.98px){.gsbp-whgrid\u003e*:not(style):nth-of-type(5){grid-area:3 / 1 / span 1 / span 1;}}@media (max-width: 991.98px){.gsbp-whgrid\u003e*:not(style):nth-of-type(6){grid-area:3 / 2 / span 1 / span 1;}}@media (max-width: 991.98px){.gsbp-whgrid\u003e*:not(style):nth-of-type(7){grid-area:4 / 1 / span 1 / span 1;}}@media (max-width: 991.98px){.gsbp-whgrid\u003e*:not(style):nth-of-type(8){grid-area:4 / 2 / span 1 / span 1;}}@media (max-width: 991.98px){.gsbp-whgrid\u003e*:not(style):nth-of-type(9){grid-area:5 / 1 / span 1 / span 1;}}@media (max-width: 991.98px){.gsbp-whgrid\u003e*:not(style):nth-of-type(10){grid-area:5 / 2 / span 1 / span 1;}}@media (max-width: 991.98px){.gsbp-whgrid{grid-template-columns:repeat(2, 1fr);}}@media (max-width: 575.98px){.gsbp-whgrid\u003e*:not(style):nth-of-type(1){grid-area:1 / 1 / span 1 / span 1;}}@media (max-width: 575.98px){.gsbp-whgrid\u003e*:not(style):nth-of-type(2){grid-area:2 / 1 / span 1 / span 1;}}@media (max-width: 575.98px){.gsbp-whgrid\u003e*:not(style):nth-of-type(3){grid-area:3 / 1 / span 1 / span 1;}}@media (max-width: 575.98px){.gsbp-whgrid\u003e*:not(style):nth-of-type(4){grid-area:4 / 1 / span 1 / span 1;}}@media (max-width: 575.98px){.gsbp-whgrid\u003e*:not(style):nth-of-type(5){grid-area:5 / 1 / span 1 / span 1;}}@media (max-width: 575.98px){.gsbp-whgrid\u003e*:not(style):nth-of-type(6){grid-area:6 / 1 / span 1 / span 1;}}@media (max-width: 575.98px){.gsbp-whgrid\u003e*:not(style):nth-of-type(7){grid-area:7 / 1 / span 1 / span 1;}}@media (max-width: 575.98px){.gsbp-whgrid\u003e*:not(style):nth-of-type(8){grid-area:8 / 1 / span 1 / span 1;}}@media (max-width: 575.98px){.gsbp-whgrid\u003e*:not(style):nth-of-type(9){grid-area:9 / 1 / span 1 / span 1;}}@media (max-width: 575.98px){.gsbp-whgrid\u003e*:not(style):nth-of-type(10){grid-area:10 / 1 / span 1 / span 1;}}@media (max-width: 575.98px){.gsbp-whgrid{grid-template-columns:repeat(1, 1fr);}}.gsbp-whgrid{\nalign-items:end;\n}","type":"inner","localId":"gsbp-whgrid","styleAttributes":{"gap":["20px"],"display":["grid"],"gridLayoutItems_Extra":10,"gridLayout_Extra":{"desktop":{"layouts":[{"w":1,"h":1,"x":0,"y":0,"i":"0","moved":false,"static":false},{"w":1,"h":1,"x":1,"y":0,"i":"1","moved":false,"static":false},{"w":1,"h":1,"x":2,"y":0,"i":"2","moved":false,"static":false},{"w":1,"h":1,"x":3,"y":0,"i":"3","moved":false,"static":false},{"w":1,"h":1,"x":4,"y":0,"i":"4","moved":false,"static":false},{"w":1,"h":1,"x":0,"y":2,"i":"5","moved":false,"static":false},{"w":1,"h":1,"x":1,"y":2,"i":"6","moved":false,"static":false},{"w":1,"h":1,"x":2,"y":2,"i":"7","moved":false,"static":false},{"w":1,"h":1,"x":3,"y":2,"i":"8","moved":false,"static":false},{"w":1,"h":1,"x":4,"y":2,"i":"9","moved":false,"static":false}],"cols":5,"allowOverlap":false,"compactType":"horizontal"},"tablet":{"layouts":[{"i":"0","x":0,"y":0,"w":1,"h":1},{"i":"1","x":1,"y":0,"w":1,"h":1},{"i":"2","x":0,"y":1,"w":1,"h":1},{"i":"3","x":1,"y":1,"w":1,"h":1},{"i":"4","x":0,"y":2,"w":1,"h":1},{"i":"5","x":1,"y":2,"w":1,"h":1},{"i":"6","x":0,"y":3,"w":1,"h":1},{"i":"7","x":1,"y":3,"w":1,"h":1},{"i":"8","x":0,"y":4,"w":1,"h":1},{"i":"9","x":1,"y":4,"w":1,"h":1}],"cols":2,"allowOverlap":false,"compactType":"horizontal"},"mobile":{"layouts":[{"i":"0","x":0,"y":0,"w":1,"h":1},{"i":"1","x":0,"y":1,"w":1,"h":1},{"i":"2","x":0,"y":2,"w":1,"h":1},{"i":"3","x":0,"y":3,"w":1,"h":1},{"i":"4","x":0,"y":4,"w":1,"h":1},{"i":"5","x":0,"y":5,"w":1,"h":1},{"i":"6","x":0,"y":6,"w":1,"h":1},{"i":"7","x":0,"y":7,"w":1,"h":1},{"i":"8","x":0,"y":8,"w":1,"h":1},{"i":"9","x":0,"y":9,"w":1,"h":1}],"cols":1,"allowOverlap":false,"compactType":"horizontal"}},"columnGap":["10px"],"rowGap":["10px"],"gridTemplateLink_Extra":false,"customCSS_Extra":"{CURRENT}{\nalign-items:end;\n}"}} -->
<div class="gsbp-whgrid"><!-- wp:greenshift-blocks/element {"id":"gsbp-wh01","inlineCssStyles":".size-square{text-align:center;display:flex;flex-direction:column;align-items:center;justify-content:flex-start;line-height:1.5em;}.size-square .size-dot{background-color:#d9e0e6;margin-bottom:20px;margin-left:auto;margin-right:auto;}.size-square .size-title{font-size:17px;font-weight:500;margin-top:10px;}.size-square .size-value{font-size:14px;line-height:20px;}.size-square .size-var{font-size:14px;opacity:0.5;}.size-square .size-border{width:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dxl, 100px);height:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dl, 74px);border-width:1px;border-style:solid;border-color:#00000029;}.size-square .size-shadow{width:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dxxl, 150px);height:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dl, 74px);}.size-square .size-transition{background-color:#e8edf1;width:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dxxl, 150px);height:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dl, 74px);}.size-square .size-transition:hover{background-color:#b0bbc9;transform:scale(1.05) rotate(10deg);}.gsbp-wh01{color:#000000;}","dynamicGClasses":[{"value":"size-square","type":"local","label":"size-square","localed":false,"css":".size-square{text-align:center;display:flex;flex-direction:column;align-items:center;justify-content:flex-start;line-height:1.5em;}","attributes":{"styleAttributes":{"textAlign":["center"],"display":["flex"],"flexDirection":["column"],"alignItems":["center"],"justifyContent":["flex-start"],"lineHeight":["1.5em"]}},"originalID":"gsbp-wh01","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[{"value":" .size-dot","attributes":{"styleAttributes":{"backgroundColor":["#d9e0e6"],"marginBottom":["20px"],"marginLeft":["auto"],"marginRight":["auto"]}},"css":".size-square .size-dot{background-color:#d9e0e6;margin-bottom:20px;margin-left:auto;margin-right:auto;}"},{"value":" .size-title","attributes":{"styleAttributes":{"fontSize":["17px"],"fontWeight":["500"],"marginTop":["10px"]}},"css":".size-square .size-title{font-size:17px;font-weight:500;margin-top:10px;}"},{"value":" .size-value","attributes":{"styleAttributes":{"fontSize":["14px"],"lineHeight":["20px"]}},"css":".size-square .size-value{font-size:14px;line-height:20px;}"},{"value":" .size-var","attributes":{"styleAttributes":{"fontSize":["14px"],"opacity":[0.5]}},"css":".size-square .size-var{font-size:14px;opacity:0.5;}"},{"value":" .size-border","attributes":{"styleAttributes":{"width":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dxl, 100px)"],"height":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dl, 74px)"],"borderWidth":["1px"],"borderStyle":["solid"],"borderColor":["#00000029"],"borderCustom_Extra":false,"borderLink_Extra":false}},"css":".size-square .size-border{width:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dxl, 100px);height:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dl, 74px);border-width:1px;border-style:solid;border-color:#00000029;}"},{"value":" .size-shadow","attributes":{"styleAttributes":{"width":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dxxl, 150px)"],"height":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dl, 74px)"]}},"css":".size-square .size-shadow{width:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dxxl, 150px);height:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dl, 74px);}"},{"value":" .size-transition","attributes":{"styleAttributes":{"backgroundColor":["#e8edf1"],"width":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dxxl, 150px)"],"height":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dl, 74px)"],"backgroundColor_hover":["#b0bbc9"],"transformLink_Extra":{"scale":true,"rotate":true},"scale_Extra_hover":["1.05"],"transform_hover":["scale(1.05) rotate(10deg)"],"rotate_Extra_hover":["10"]}},"css":".size-square .size-transition{background-color:#e8edf1;width:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dxxl, 150px);height:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dl, 74px);}.size-square .size-transition:hover{background-color:#b0bbc9;transform:scale(1.05) rotate(10deg);}"}]}],"type":"inner","className":"size-square","localId":"gsbp-wh01","styleAttributes":{"color":["#000000"]}} -->
<div class="size-square gsbp-wh01"><!-- wp:greenshift-blocks/element {"id":"gsbp-5518b97","inlineCssStyles":".gsbp-5518b97{width:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002ddot, 6px);height:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002ddot, 6px);}","type":"no","className":"size-dot","localId":"gsbp-5518b97","styleAttributes":{"width":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002ddot, 6px)"],"height":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002ddot, 6px)"]}} -->
<div class="size-dot gsbp-5518b97"></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-8e18746","inlineCssStyles":".gsbp-8e18746{color:#000000;}","textContent":"Dot","className":"size-title","localId":"gsbp-8e18746","styleAttributes":{"color":["#000000"]}} -->
<div class="size-title gsbp-8e18746">Dot</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-a5e60a8","inlineCssStyles":".gsbp-a5e60a8{color:#000000;}","textContent":"6px","className":"size-value","localId":"gsbp-a5e60a8","styleAttributes":{"color":["#000000"]}} -->
<div class="size-value gsbp-a5e60a8">6px</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-014ba4f","inlineCssStyles":".gsbp-014ba4f{color:#000000;}","textContent":"\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002ddot","className":"size-var","localId":"gsbp-014ba4f","styleAttributes":{"color":["#000000"]}} -->
<div class="size-var gsbp-014ba4f">--wp--custom--size--dot</div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-1ab6acf","inlineCssStyles":".gsbp-1ab6acf{color:#000000;}","dynamicGClasses":[{"value":"size-square","type":"local","label":"size-square","localed":false,"css":"","attributes":[],"originalID":"gsbp-wh01","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"size-square","localId":"gsbp-1ab6acf","styleAttributes":{"color":["#000000"]}} -->
<div class="size-square gsbp-1ab6acf"><!-- wp:greenshift-blocks/element {"id":"gsbp-41797de","inlineCssStyles":".gsbp-41797de{width:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dmini, 11px);height:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dmini, 11px);}","type":"no","className":"size-dot","localId":"gsbp-41797de","styleAttributes":{"width":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dmini, 11px)"],"height":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dmini, 11px)"]}} -->
<div class="size-dot gsbp-41797de"></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-91f4675","inlineCssStyles":".gsbp-91f4675{color:#000000;}","textContent":"Mini","className":"size-title","localId":"gsbp-91f4675","styleAttributes":{"color":["#000000"]}} -->
<div class="size-title gsbp-91f4675">Mini</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-bfab74d","inlineCssStyles":".gsbp-bfab74d{color:#000000;}","textContent":"11px","className":"size-value","localId":"gsbp-bfab74d","styleAttributes":{"color":["#000000"]}} -->
<div class="size-value gsbp-bfab74d">11px</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-a7a8529","inlineCssStyles":".gsbp-a7a8529{color:#000000;}","textContent":"\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dmini","className":"size-var","localId":"gsbp-a7a8529","styleAttributes":{"color":["#000000"]}} -->
<div class="size-var gsbp-a7a8529">--wp--custom--size--mini</div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-398778b","inlineCssStyles":".gsbp-398778b{color:#000000;}","dynamicGClasses":[{"value":"size-square","type":"local","label":"size-square","localed":false,"css":"","attributes":[],"originalID":"gsbp-wh01","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"size-square","localId":"gsbp-398778b","styleAttributes":{"color":["#000000"]}} -->
<div class="size-square gsbp-398778b"><!-- wp:greenshift-blocks/element {"id":"gsbp-9a74932","inlineCssStyles":".gsbp-9a74932{width:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dxs, 17px);height:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dxs, 17px);}","type":"no","className":"size-dot","localId":"gsbp-9a74932","styleAttributes":{"width":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dxs, 17px)"],"height":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dxs, 17px)"]}} -->
<div class="size-dot gsbp-9a74932"></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-735f967","inlineCssStyles":".gsbp-735f967{color:#000000;}","textContent":"X Small","className":"size-title","localId":"gsbp-735f967","styleAttributes":{"color":["#000000"]}} -->
<div class="size-title gsbp-735f967">X Small</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-895847f","inlineCssStyles":".gsbp-895847f{color:#000000;}","textContent":"17px","className":"size-value","localId":"gsbp-895847f","styleAttributes":{"color":["#000000"]}} -->
<div class="size-value gsbp-895847f">17px</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-a7a01ac","inlineCssStyles":".gsbp-a7a01ac{color:#000000;}","textContent":"\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dxs","className":"size-var","localId":"gsbp-a7a01ac","styleAttributes":{"color":["#000000"]}} -->
<div class="size-var gsbp-a7a01ac">--wp--custom--size--xs</div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-46d9cea","inlineCssStyles":".gsbp-46d9cea{color:#000000;}","dynamicGClasses":[{"value":"size-square","type":"local","label":"size-square","localed":false,"css":"","attributes":[],"originalID":"gsbp-wh01","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"size-square","localId":"gsbp-46d9cea","styleAttributes":{"color":["#000000"]}} -->
<div class="size-square gsbp-46d9cea"><!-- wp:greenshift-blocks/element {"id":"gsbp-249a729","inlineCssStyles":".gsbp-9c940dd{width:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002ds, 26px);height:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002ds, 26px);}","type":"no","className":"size-dot","localId":"gsbp-9c940dd","staticLocalId":true,"styleAttributes":{"width":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002ds, 26px)"],"height":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002ds, 26px)"]}} -->
<div class="size-dot gsbp-9c940dd"></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-10582b8","inlineCssStyles":".gsbp-10582b8{color:#000000;}","textContent":"Small","className":"size-title","localId":"gsbp-10582b8","styleAttributes":{"color":["#000000"]}} -->
<div class="size-title gsbp-10582b8">Small</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-c6c59af","inlineCssStyles":".gsbp-c6c59af{color:#000000;}","textContent":"26px","className":"size-value","localId":"gsbp-c6c59af","styleAttributes":{"color":["#000000"]}} -->
<div class="size-value gsbp-c6c59af">26px</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-c1b83a1","inlineCssStyles":".gsbp-c1b83a1{color:#000000;}","textContent":"\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dsmall","className":"size-var","localId":"gsbp-c1b83a1","styleAttributes":{"color":["#000000"]}} -->
<div class="size-var gsbp-c1b83a1">--wp--custom--size--small</div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-1439040","inlineCssStyles":".gsbp-1439040{color:#000000;}","dynamicGClasses":[{"value":"size-square","type":"local","label":"size-square","localed":false,"css":"","attributes":[],"originalID":"gsbp-wh01","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"size-square","localId":"gsbp-1439040","styleAttributes":{"color":["#000000"]}} -->
<div class="size-square gsbp-1439040"><!-- wp:greenshift-blocks/element {"id":"gsbp-d6c7e63","inlineCssStyles":".gsbp-d6c7e63{width:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dr, 40px);height:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dr, 40px);}","type":"no","className":"size-dot","localId":"gsbp-d6c7e63","styleAttributes":{"width":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dr, 40px)"],"height":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dr, 40px)"]}} -->
<div class="size-dot gsbp-d6c7e63"></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-dce3b3a","inlineCssStyles":".gsbp-dce3b3a{color:#000000;}","textContent":"Regular","className":"size-title","localId":"gsbp-dce3b3a","styleAttributes":{"color":["#000000"]}} -->
<div class="size-title gsbp-dce3b3a">Regular</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-622b602","inlineCssStyles":".gsbp-622b602{color:#000000;}","textContent":"40px","className":"size-value","localId":"gsbp-622b602","styleAttributes":{"color":["#000000"]}} -->
<div class="size-value gsbp-622b602">40px</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-ee04017","inlineCssStyles":".gsbp-ee04017{color:#000000;}","textContent":"\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dr","className":"size-var","localId":"gsbp-ee04017","styleAttributes":{"color":["#000000"]}} -->
<div class="size-var gsbp-ee04017">--wp--custom--size--r</div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-f188dcc","inlineCssStyles":".gsbp-f188dcc{color:#000000;}","dynamicGClasses":[{"value":"size-square","type":"local","label":"size-square","localed":false,"css":"","attributes":[],"originalID":"gsbp-wh01","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"size-square","localId":"gsbp-f188dcc","styleAttributes":{"color":["#000000"]}} -->
<div class="size-square gsbp-f188dcc"><!-- wp:greenshift-blocks/element {"id":"gsbp-3ef7469","inlineCssStyles":".gsbp-wh01v2n{width:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dm, 56px);height:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dm, 56px);}","type":"no","className":"size-dot","localId":"gsbp-wh01v2n","staticLocalId":true,"styleAttributes":{"width":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dm, 56px)"],"height":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dm, 56px)"]}} -->
<div class="size-dot gsbp-wh01v2n"></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-9743461","inlineCssStyles":".gsbp-9743461{color:#000000;}","textContent":"Medium","className":"size-title","localId":"gsbp-9743461","styleAttributes":{"color":["#000000"]}} -->
<div class="size-title gsbp-9743461">Medium</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-b931ead","inlineCssStyles":".gsbp-b931ead{color:#000000;}","textContent":"56px","className":"size-value","localId":"gsbp-b931ead","styleAttributes":{"color":["#000000"]}} -->
<div class="size-value gsbp-b931ead">56px</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-952e3e0","inlineCssStyles":".gsbp-952e3e0{color:#000000;}","textContent":"\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dm","className":"size-var","localId":"gsbp-952e3e0","styleAttributes":{"color":["#000000"]}} -->
<div class="size-var gsbp-952e3e0">--wp--custom--size--m</div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-f3618d0","inlineCssStyles":".gsbp-f3618d0{color:#000000;}","dynamicGClasses":[{"value":"size-square","type":"local","label":"size-square","localed":false,"css":"","attributes":[],"originalID":"gsbp-wh01","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"size-square","localId":"gsbp-f3618d0","styleAttributes":{"color":["#000000"]}} -->
<div class="size-square gsbp-f3618d0"><!-- wp:greenshift-blocks/element {"id":"gsbp-d5c84ca","inlineCssStyles":".gsbp-f5160b03{width:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dl, 74px);height:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dl, 74px);}","type":"no","className":"size-dot","localId":"gsbp-f5160b03","staticLocalId":true,"styleAttributes":{"width":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dl, 74px)"],"height":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dl, 74px)"]}} -->
<div class="size-dot gsbp-f5160b03"></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-49f3c91","inlineCssStyles":".gsbp-49f3c91{color:#000000;}","textContent":"Large","className":"size-title","localId":"gsbp-49f3c91","styleAttributes":{"color":["#000000"]}} -->
<div class="size-title gsbp-49f3c91">Large</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-ee90b9c","inlineCssStyles":".gsbp-ee90b9c{color:#000000;}","textContent":"74px","className":"size-value","localId":"gsbp-ee90b9c","styleAttributes":{"color":["#000000"]}} -->
<div class="size-value gsbp-ee90b9c">74px</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-b43fb27","inlineCssStyles":".gsbp-b43fb27{color:#000000;}","textContent":"\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dl","className":"size-var","localId":"gsbp-b43fb27","styleAttributes":{"color":["#000000"]}} -->
<div class="size-var gsbp-b43fb27">--wp--custom--size--l</div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-be3435f","inlineCssStyles":".gsbp-be3435f{color:#000000;}","dynamicGClasses":[{"value":"size-square","type":"local","label":"size-square","localed":false,"css":"","attributes":[],"originalID":"gsbp-wh01","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"size-square","localId":"gsbp-be3435f","styleAttributes":{"color":["#000000"]}} -->
<div class="size-square gsbp-be3435f"><!-- wp:greenshift-blocks/element {"id":"gsbp-7fab546","inlineCssStyles":".gsbp-e5c5e302{width:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dxl, 100px);height:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dxl, 100px);}","type":"no","className":"size-dot","localId":"gsbp-e5c5e302","staticLocalId":true,"styleAttributes":{"width":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dxl, 100px)"],"height":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dxl, 100px)"]}} -->
<div class="size-dot gsbp-e5c5e302"></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-2c96ef3","inlineCssStyles":".gsbp-2c96ef3{color:#000000;}","textContent":"X Large","className":"size-title","localId":"gsbp-2c96ef3","styleAttributes":{"color":["#000000"]}} -->
<div class="size-title gsbp-2c96ef3">X Large</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-530f831","inlineCssStyles":".gsbp-530f831{color:#000000;}","textContent":"100px","className":"size-value","localId":"gsbp-530f831","styleAttributes":{"color":["#000000"]}} -->
<div class="size-value gsbp-530f831">100px</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-d763774","inlineCssStyles":".gsbp-d763774{color:#000000;}","textContent":"\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dxl","className":"size-var","localId":"gsbp-d763774","styleAttributes":{"color":["#000000"]}} -->
<div class="size-var gsbp-d763774">--wp--custom--size--xl</div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-7862dc0","inlineCssStyles":".gsbp-7862dc0{color:#000000;}","dynamicGClasses":[{"value":"size-square","type":"local","label":"size-square","localed":false,"css":"","attributes":[],"originalID":"gsbp-wh01","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"size-square","localId":"gsbp-7862dc0","styleAttributes":{"color":["#000000"]}} -->
<div class="size-square gsbp-7862dc0"><!-- wp:greenshift-blocks/element {"id":"gsbp-24cec63","inlineCssStyles":".gsbp-24cec63{width:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dhigh, 220px);height:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dhigh, 220px);}","type":"no","className":"size-dot","localId":"gsbp-24cec63","styleAttributes":{"width":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dhigh, 220px)"],"height":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dhigh, 220px)"]}} -->
<div class="size-dot gsbp-24cec63"></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-b7365ab","inlineCssStyles":".gsbp-b7365ab{color:#000000;}","textContent":"XX Large","className":"size-title","localId":"gsbp-b7365ab","styleAttributes":{"color":["#000000"]}} -->
<div class="size-title gsbp-b7365ab">XX Large</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-c80fcf5","inlineCssStyles":".gsbp-c80fcf5{color:#000000;}","textContent":"150px","className":"size-value","localId":"gsbp-c80fcf5","styleAttributes":{"color":["#000000"]}} -->
<div class="size-value gsbp-c80fcf5">150px</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-5870e16","inlineCssStyles":".gsbp-5870e16{color:#000000;}","textContent":"\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dxxl","className":"size-var","localId":"gsbp-5870e16","styleAttributes":{"color":["#000000"]}} -->
<div class="size-var gsbp-5870e16">--wp--custom--size--xxl</div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-89336aa","inlineCssStyles":".gsbp-89336aa{color:#000000;}","dynamicGClasses":[{"value":"size-square","type":"local","label":"size-square","localed":false,"css":"","attributes":[],"originalID":"gsbp-wh01","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"size-square","localId":"gsbp-89336aa","styleAttributes":{"color":["#000000"]}} -->
<div class="size-square gsbp-89336aa"><!-- wp:greenshift-blocks/element {"id":"gsbp-83707b9","inlineCssStyles":".gsbp-7490673w{width:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dgrand, 300px);height:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dgrand, 300px);}","type":"no","className":"size-dot","localId":"gsbp-7490673w","staticLocalId":true,"styleAttributes":{"width":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dgrand, 300px)"],"height":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dgrand, 300px)"]}} -->
<div class="size-dot gsbp-7490673w"></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-e4dbb5c","inlineCssStyles":".gsbp-e4dbb5c{color:#000000;}","textContent":"High","className":"size-title","localId":"gsbp-e4dbb5c","styleAttributes":{"color":["#000000"]}} -->
<div class="size-title gsbp-e4dbb5c">High</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-5eb3a38","inlineCssStyles":".gsbp-5eb3a38{color:#000000;}","textContent":"220px","className":"size-value","localId":"gsbp-5eb3a38","styleAttributes":{"color":["#000000"]}} -->
<div class="size-value gsbp-5eb3a38">220px</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-b68aa54","inlineCssStyles":".gsbp-b68aa54{color:#000000;}","textContent":"\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dhigh","className":"size-var","localId":"gsbp-b68aa54","styleAttributes":{"color":["#000000"]}} -->
<div class="size-var gsbp-b68aa54">--wp--custom--size--high</div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-11f27cc","inlineCssStyles":".gsbp-11f27cc{font-size:20px;font-weight:600;margin-top:40px;margin-bottom:40px;}","textContent":"Extra Sizes","localId":"gsbp-11f27cc","styleAttributes":{"fontSize":["20px"],"fontWeight":["600"],"marginTop":["40px"],"marginBottom":["40px"]},"isVariation":"divtext"} -->
<div class="gsbp-11f27cc">Extra Sizes</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-ff9a446","inlineCssStyles":".gsbp-ff9a446{font-size:15px;}","textContent":"Grand:  var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dgrand, 300px)","localId":"gsbp-ff9a446","styleAttributes":{"fontSize":["15px"]},"isVariation":"divtext"} -->
<div class="gsbp-ff9a446">Grand:  var(--wp--custom--size--grand, 300px)</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-8f7b17b","inlineCssStyles":".gsbp-8f7b17b{font-size:15px;}","textContent":"Huge:  var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dhuge, 385px)","localId":"gsbp-8f7b17b","styleAttributes":{"fontSize":["15px"]},"isVariation":"divtext"} -->
<div class="gsbp-8f7b17b">Huge:  var(--wp--custom--size--huge, 385px)</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-e07944d","inlineCssStyles":".gsbp-e07944d{font-size:15px;}","textContent":"Giant:  var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dgiant, 500px)","localId":"gsbp-e07944d","styleAttributes":{"fontSize":["15px"]},"isVariation":"divtext"} -->
<div class="gsbp-e07944d">Giant:  var(--wp--custom--size--giant, 500px)</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-20be42f","inlineCssStyles":".gsbp-20be42f{font-size:15px;}","textContent":"Colossal:  var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dcolossal, 700px)","localId":"gsbp-20be42f","styleAttributes":{"fontSize":["15px"]},"isVariation":"divtext"} -->
<div class="gsbp-20be42f">Colossal:  var(--wp--custom--size--colossal, 700px)</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-c4a3063","inlineCssStyles":".gsbp-c4a3063{font-size:15px;}","textContent":"God:  var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dgod, 1000px)","localId":"gsbp-c4a3063","styleAttributes":{"fontSize":["15px"]},"isVariation":"divtext"} -->
<div class="gsbp-c4a3063">God:  var(--wp--custom--size--god, 1000px)</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-ad1dca5","inlineCssStyles":".gsbp-ad1dca5{font-size:15px;}","textContent":"Section size:  var(\u002d\u002dwp\u002d\u002dstyle\u002d\u002dglobal\u002d\u002dwide-size, 1200px)","localId":"gsbp-ad1dca5","styleAttributes":{"fontSize":["15px"]},"isVariation":"divtext"} -->
<div class="gsbp-ad1dca5">Section size:  var(--wp--style--global--wide-size, 1200px)</div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-1fcae3e","anchor":"borders","inlineCssStyles":".gsbp-1fcae3e{color:#000000;}","type":"inner","localId":"gsbp-1fcae3e","align":"wide","styleAttributes":{"color":["#000000"]},"metadata":{"name":"Borders"}} -->
<div class="gsbp-1fcae3e alignwide" id="borders"><!-- wp:greenshift-blocks/element {"id":"gsbp-f33bfac","inlineCssStyles":".gsbp-f33bfac{color:#000000;}","dynamicGClasses":[{"value":"brand-panel-wrap","type":"local","label":"brand-panel-wrap","localed":false,"css":"","attributes":[],"originalID":"gspb-DTHotu2","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"brand-panel-wrap","localId":"gsbp-f33bfac","align":"wide","styleAttributes":{"color":["#000000"]},"metadata":{"name":"Title"}} -->
<div class="brand-panel-wrap gsbp-f33bfac alignwide"><!-- wp:greenshift-blocks/element {"id":"gsbp-5b89774","inlineCssStyles":".gsbp-5b89774{color:#000000;}","dynamicGClasses":[{"value":"brand-panel-title","type":"local","label":"brand-panel-title","localed":false,"css":"","attributes":[],"originalID":"gsbp-7bc0611","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"textContent":"Border Radius","tag":"h2","className":"brand-panel-title","localId":"gsbp-5b89774","styleAttributes":{"color":["#000000"]},"isVariation":"divtext"} -->
<h2 class="brand-panel-title gsbp-5b89774">Border Radius</h2>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-0273df3","inlineCssStyles":".gsbp-0273df3{display:flex;flex-direction:column;column-gap:0px;row-gap:0px;justify-content:flex-start;color:rgba(0,0,0,1);}","type":"inner","localId":"gsbp-0273df3","styleAttributes":{"display":["flex"],"flexDirection":["column"],"columnGap":["0px"],"rowGap":["0px"],"justifyContent":["flex-start"],"color":["rgba(0,0,0,1)"]}} -->
<div class="gsbp-0273df3"><!-- wp:greenshift-blocks/element {"id":"gsbp-ca63d40","inlineCssStyles":".gsbp-ca63d40{color:#000000;}","dynamicGClasses":[{"value":"brand-panel-subtitle","type":"local","label":"brand-panel-subtitle","localed":false,"css":"","attributes":[],"originalID":"gspb-7UE8MMY","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"textContent":"Border styles","className":"brand-panel-subtitle","localId":"gsbp-ca63d40","styleAttributes":{"color":["#000000"]}} -->
<div class="brand-panel-subtitle gsbp-ca63d40">Border styles</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-e5a0ce7","inlineCssStyles":".gsbp-e5a0ce7{color:#000000;}","dynamicGClasses":[{"value":"brand-panel-subsub","type":"local","label":"brand-panel-subsub","localed":false,"css":"","attributes":[],"originalID":"gspb-gf0ZxC0","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"textContent":"Border Radius Presets","className":"brand-panel-subsub","localId":"gsbp-e5a0ce7","styleAttributes":{"color":["#000000"]}} -->
<div class="brand-panel-subsub gsbp-e5a0ce7">Border Radius Presets</div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-3619540","inlineCssStyles":".gsbp-3619540{color:#000000;}","dynamicGClasses":[{"value":"brand-panel-content","type":"local","label":"brand-panel-content","localed":false,"css":"","attributes":[],"originalID":"gspb-ZzWr1uD","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"brand-panel-content","localId":"gsbp-3619540","align":"wide","styleAttributes":{"color":["#000000"]},"metadata":{"name":"Content"}} -->
<div class="brand-panel-content gsbp-3619540 alignwide"><!-- wp:greenshift-blocks/element {"id":"gsbp-db66562","inlineCssStyles":".gsbp-db66562{gap:20px;display:grid;column-gap:10px;row-gap:30px;}.gsbp-db66562\u003e*:not(style):nth-of-type(1){grid-area:1 / 1 / span 1 / span 1;}.gsbp-db66562\u003e*:not(style):nth-of-type(2){grid-area:1 / 2 / span 1 / span 1;}.gsbp-db66562\u003e*:not(style):nth-of-type(3){grid-area:1 / 3 / span 1 / span 1;}.gsbp-db66562\u003e*:not(style):nth-of-type(4){grid-area:2 / 1 / span 1 / span 1;}.gsbp-db66562\u003e*:not(style):nth-of-type(5){grid-area:2 / 2 / span 1 / span 1;}.gsbp-db66562\u003e*:not(style):nth-of-type(6){grid-area:2 / 3 / span 1 / span 1;}.gsbp-db66562{grid-template-columns:repeat(3, 1fr);}@media (max-width: 991.98px){.gsbp-db66562\u003e*:not(style):nth-of-type(1){grid-area:1 / 1 / span 1 / span 1;}}@media (max-width: 991.98px){.gsbp-db66562\u003e*:not(style):nth-of-type(2){grid-area:1 / 2 / span 1 / span 1;}}@media (max-width: 991.98px){.gsbp-db66562\u003e*:not(style):nth-of-type(3){grid-area:2 / 1 / span 1 / span 1;}}@media (max-width: 991.98px){.gsbp-db66562\u003e*:not(style):nth-of-type(4){grid-area:2 / 2 / span 1 / span 1;}}@media (max-width: 991.98px){.gsbp-db66562\u003e*:not(style):nth-of-type(5){grid-area:3 / 1 / span 1 / span 1;}}@media (max-width: 991.98px){.gsbp-db66562\u003e*:not(style):nth-of-type(6){grid-area:3 / 2 / span 1 / span 1;}}@media (max-width: 991.98px){.gsbp-db66562{grid-template-columns:repeat(2, 1fr);}}@media (max-width: 575.98px){.gsbp-db66562\u003e*:not(style):nth-of-type(1){grid-area:1 / 1 / span 1 / span 1;}}@media (max-width: 575.98px){.gsbp-db66562\u003e*:not(style):nth-of-type(2){grid-area:2 / 1 / span 1 / span 1;}}@media (max-width: 575.98px){.gsbp-db66562\u003e*:not(style):nth-of-type(3){grid-area:3 / 1 / span 1 / span 1;}}@media (max-width: 575.98px){.gsbp-db66562\u003e*:not(style):nth-of-type(4){grid-area:4 / 1 / span 1 / span 1;}}@media (max-width: 575.98px){.gsbp-db66562\u003e*:not(style):nth-of-type(5){grid-area:5 / 1 / span 1 / span 1;}}@media (max-width: 575.98px){.gsbp-db66562\u003e*:not(style):nth-of-type(6){grid-area:6 / 1 / span 1 / span 1;}}@media (max-width: 575.98px){.gsbp-db66562{grid-template-columns:repeat(1, 1fr);}}.gsbp-db66562{\nalign-items:end;\n}","type":"inner","localId":"gsbp-db66562","styleAttributes":{"gap":["20px"],"display":["grid"],"gridLayoutItems_Extra":6,"gridLayout_Extra":{"desktop":{"layouts":[{"w":1,"h":1,"x":0,"y":0,"i":"0","moved":false,"static":false},{"w":1,"h":1,"x":1,"y":0,"i":"1","moved":false,"static":false},{"w":1,"h":1,"x":2,"y":0,"i":"2","moved":false,"static":false},{"w":1,"h":1,"x":0,"y":1,"i":"3","moved":false,"static":false},{"w":1,"h":1,"x":1,"y":1,"i":"4","moved":false,"static":false},{"w":1,"h":1,"x":2,"y":1,"i":"5","moved":false,"static":false}],"cols":3,"allowOverlap":false,"compactType":"horizontal"},"tablet":{"layouts":[{"i":"0","x":0,"y":0,"w":1,"h":1},{"i":"1","x":1,"y":0,"w":1,"h":1},{"i":"2","x":0,"y":1,"w":1,"h":1},{"i":"3","x":1,"y":1,"w":1,"h":1},{"i":"4","x":0,"y":2,"w":1,"h":1},{"i":"5","x":1,"y":2,"w":1,"h":1}],"cols":2,"allowOverlap":false,"compactType":"horizontal"},"mobile":{"layouts":[{"i":"0","x":0,"y":0,"w":1,"h":1},{"i":"1","x":0,"y":1,"w":1,"h":1},{"i":"2","x":0,"y":2,"w":1,"h":1},{"i":"3","x":0,"y":3,"w":1,"h":1},{"i":"4","x":0,"y":4,"w":1,"h":1},{"i":"5","x":0,"y":5,"w":1,"h":1}],"cols":1,"allowOverlap":false,"compactType":"horizontal"}},"columnGap":["10px"],"rowGap":["30px"],"gridTemplateLink_Extra":false,"customCSS_Extra":"{CURRENT}{\nalign-items:end;\n}"}} -->
<div class="gsbp-db66562"><!-- wp:greenshift-blocks/element {"id":"gsbp-15c5017","inlineCssStyles":".gsbp-15c5017{color:#000000;}","dynamicGClasses":[{"value":"size-square","type":"local","label":"size-square","localed":false,"css":"","attributes":[],"originalID":"gsbp-wh01","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"size-square","localId":"gsbp-15c5017","styleAttributes":{"color":["#000000"]}} -->
<div class="size-square gsbp-15c5017"><!-- wp:greenshift-blocks/element {"id":"gsbp-5c18e17","inlineCssStyles":".gsbp-5c18e17{border-bottom-left-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmini, 5px);border-bottom-right-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmini, 5px);border-top-left-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmini, 5px);border-top-right-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmini, 5px);}","type":"no","className":"size-border","localId":"gsbp-5c18e17","styleAttributes":{"borderBottomLeftRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmini, 5px)"],"borderBottomRightRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmini, 5px)"],"borderTopLeftRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmini, 5px)"],"borderTopRightRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmini, 5px)"],"borderRadiusCustom_Extra":false,"borderRadiusLink_Extra":true}} -->
<div class="size-border gsbp-5c18e17"></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-3acf7d9","inlineCssStyles":".gsbp-3acf7d9{color:#000000;}","textContent":"Mini","className":"size-title","localId":"gsbp-3acf7d9","styleAttributes":{"color":["#000000"]}} -->
<div class="size-title gsbp-3acf7d9">Mini</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-3c9cdf9","inlineCssStyles":".gsbp-3c9cdf9{color:#000000;}","textContent":"5px","className":"size-value","localId":"gsbp-3c9cdf9","styleAttributes":{"color":["#000000"]}} -->
<div class="size-value gsbp-3c9cdf9">5px</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-8b0c070","inlineCssStyles":".gsbp-8b0c070{color:#000000;}","textContent":"\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmini","className":"size-var","localId":"gsbp-8b0c070","styleAttributes":{"color":["#000000"]}} -->
<div class="size-var gsbp-8b0c070">--wp--custom--border-radius--mini</div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-a892989","inlineCssStyles":".gsbp-a892989{color:#000000;}","dynamicGClasses":[{"value":"size-square","type":"local","label":"size-square","localed":false,"css":"","attributes":[],"originalID":"gsbp-wh01","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"size-square","localId":"gsbp-a892989","styleAttributes":{"color":["#000000"]}} -->
<div class="size-square gsbp-a892989"><!-- wp:greenshift-blocks/element {"id":"gsbp-7ca9de7","inlineCssStyles":".gsbp-7ca9de7{border-bottom-left-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dsmall, 10px);border-bottom-right-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dsmall, 10px);border-top-left-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dsmall, 10px);border-top-right-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dsmall, 10px);}","type":"no","className":"size-border","localId":"gsbp-7ca9de7","styleAttributes":{"borderBottomLeftRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dsmall, 10px)"],"borderBottomRightRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dsmall, 10px)"],"borderTopLeftRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dsmall, 10px)"],"borderTopRightRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dsmall, 10px)"],"borderRadiusCustom_Extra":false,"borderRadiusLink_Extra":true}} -->
<div class="size-border gsbp-7ca9de7"></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-f5db9fb","inlineCssStyles":".gsbp-f5db9fb{color:#000000;}","textContent":"Mini","className":"size-title","localId":"gsbp-f5db9fb","styleAttributes":{"color":["#000000"]}} -->
<div class="size-title gsbp-f5db9fb">Mini</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-a03730c","inlineCssStyles":".gsbp-a03730c{color:#000000;}","textContent":"10px","className":"size-value","localId":"gsbp-a03730c","styleAttributes":{"color":["#000000"]}} -->
<div class="size-value gsbp-a03730c">10px</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-fc18cad","inlineCssStyles":".gsbp-fc18cad{color:#000000;}","textContent":"\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dsmall","className":"size-var","localId":"gsbp-fc18cad","styleAttributes":{"color":["#000000"]}} -->
<div class="size-var gsbp-fc18cad">--wp--custom--border-radius--small</div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-460ca0d","inlineCssStyles":".gsbp-460ca0d{color:#000000;}","dynamicGClasses":[{"value":"size-square","type":"local","label":"size-square","localed":false,"css":"","attributes":[],"originalID":"gsbp-wh01","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"size-square","localId":"gsbp-460ca0d","styleAttributes":{"color":["#000000"]}} -->
<div class="size-square gsbp-460ca0d"><!-- wp:greenshift-blocks/element {"id":"gsbp-2b54944","inlineCssStyles":".gsbp-2b54944{border-bottom-left-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px);border-bottom-right-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px);border-top-left-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px);border-top-right-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px);}","type":"no","className":"size-border","localId":"gsbp-2b54944","styleAttributes":{"borderBottomLeftRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px)"],"borderBottomRightRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px)"],"borderTopLeftRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px)"],"borderTopRightRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px)"],"borderRadiusCustom_Extra":false,"borderRadiusLink_Extra":true}} -->
<div class="size-border gsbp-2b54944"></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-ca3a718","inlineCssStyles":".gsbp-ca3a718{color:#000000;}","textContent":"Medium","className":"size-title","localId":"gsbp-ca3a718","styleAttributes":{"color":["#000000"]}} -->
<div class="size-title gsbp-ca3a718">Medium</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-7af52b1","inlineCssStyles":".gsbp-7af52b1{color:#000000;}","textContent":"15px","className":"size-value","localId":"gsbp-7af52b1","styleAttributes":{"color":["#000000"]}} -->
<div class="size-value gsbp-7af52b1">15px</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-0bcfda4","inlineCssStyles":".gsbp-0bcfda4{color:#000000;}","textContent":"\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium","className":"size-var","localId":"gsbp-0bcfda4","styleAttributes":{"color":["#000000"]}} -->
<div class="size-var gsbp-0bcfda4">--wp--custom--border-radius--medium</div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-abd0db7","inlineCssStyles":".gsbp-abd0db7{color:#000000;}","dynamicGClasses":[{"value":"size-square","type":"local","label":"size-square","localed":false,"css":"","attributes":[],"originalID":"gsbp-wh01","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"size-square","localId":"gsbp-abd0db7","styleAttributes":{"color":["#000000"]}} -->
<div class="size-square gsbp-abd0db7"><!-- wp:greenshift-blocks/element {"id":"gsbp-806c8ee","inlineCssStyles":".gsbp-9c940d{border-bottom-left-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dlarge, 20px);border-bottom-right-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dlarge, 20px);border-top-left-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dlarge, 20px);border-top-right-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dlarge, 20px);}","type":"no","className":"size-border","localId":"gsbp-9c940d","staticLocalId":true,"styleAttributes":{"borderBottomLeftRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dlarge, 20px)"],"borderBottomRightRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dlarge, 20px)"],"borderTopLeftRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dlarge, 20px)"],"borderTopRightRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dlarge, 20px)"],"borderRadiusCustom_Extra":false,"borderRadiusLink_Extra":true}} -->
<div class="size-border gsbp-9c940d"></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-9382af4","inlineCssStyles":".gsbp-9382af4{color:#000000;}","textContent":"Large","className":"size-title","localId":"gsbp-9382af4","styleAttributes":{"color":["#000000"]}} -->
<div class="size-title gsbp-9382af4">Large</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-3aff45a","inlineCssStyles":".gsbp-3aff45a{color:#000000;}","textContent":"20px","className":"size-value","localId":"gsbp-3aff45a","styleAttributes":{"color":["#000000"]}} -->
<div class="size-value gsbp-3aff45a">20px</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-cb6df78","inlineCssStyles":".gsbp-cb6df78{color:#000000;}","textContent":"\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dlarge","className":"size-var","localId":"gsbp-cb6df78","styleAttributes":{"color":["#000000"]}} -->
<div class="size-var gsbp-cb6df78">--wp--custom--border-radius--large</div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-0e0b289","inlineCssStyles":".gsbp-0e0b289{color:#000000;}","dynamicGClasses":[{"value":"size-square","type":"local","label":"size-square","localed":false,"css":"","attributes":[],"originalID":"gsbp-wh01","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"size-square","localId":"gsbp-0e0b289","styleAttributes":{"color":["#000000"]}} -->
<div class="size-square gsbp-0e0b289"><!-- wp:greenshift-blocks/element {"id":"gsbp-05838a4","inlineCssStyles":".gsbp-05838a4{border-bottom-left-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dxlarge, 35px);border-bottom-right-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dxlarge, 35px);border-top-left-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dxlarge, 35px);border-top-right-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dxlarge, 35px);}","type":"no","className":"size-border","localId":"gsbp-05838a4","styleAttributes":{"borderBottomLeftRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dxlarge, 35px)"],"borderBottomRightRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dxlarge, 35px)"],"borderTopLeftRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dxlarge, 35px)"],"borderTopRightRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dxlarge, 35px)"],"borderRadiusCustom_Extra":false,"borderRadiusLink_Extra":true}} -->
<div class="size-border gsbp-05838a4"></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-573a393","inlineCssStyles":".gsbp-573a393{color:#000000;}","textContent":"X Large","className":"size-title","localId":"gsbp-573a393","styleAttributes":{"color":["#000000"]}} -->
<div class="size-title gsbp-573a393">X Large</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-0217cf2","inlineCssStyles":".gsbp-0217cf2{color:#000000;}","textContent":"35px","className":"size-value","localId":"gsbp-0217cf2","styleAttributes":{"color":["#000000"]}} -->
<div class="size-value gsbp-0217cf2">35px</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-fcf8863","inlineCssStyles":".gsbp-fcf8863{color:#000000;}","textContent":"\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dxlarge","className":"size-var","localId":"gsbp-fcf8863","styleAttributes":{"color":["#000000"]}} -->
<div class="size-var gsbp-fcf8863">--wp--custom--border-radius--xlarge</div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-04bd50e","inlineCssStyles":".gsbp-04bd50e{color:#000000;}","dynamicGClasses":[{"value":"size-square","type":"local","label":"size-square","localed":false,"css":"","attributes":[],"originalID":"gsbp-wh01","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"size-square","localId":"gsbp-04bd50e","styleAttributes":{"color":["#000000"]}} -->
<div class="size-square gsbp-04bd50e"><!-- wp:greenshift-blocks/element {"id":"gsbp-8e97dde","inlineCssStyles":".gsbp-wh01v2{border-bottom-left-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dcircle, 50%) !important;border-bottom-right-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dcircle, 50%) !important;border-top-left-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dcircle, 50%) !important;border-top-right-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dcircle, 50%) !important;width:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dl, 74px) !important;}","type":"no","className":"size-border","localId":"gsbp-wh01v2","staticLocalId":true,"styleAttributes":{"borderBottomLeftRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dcircle, 50%)"],"borderBottomRightRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dcircle, 50%)"],"borderTopLeftRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dcircle, 50%)"],"borderTopRightRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dcircle, 50%)"],"borderRadiusCustom_Extra":false,"borderRadiusLink_Extra":true,"width":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dl, 74px)"]},"enableSpecificity":true} -->
<div class="size-border gsbp-wh01v2"></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-9f46849","inlineCssStyles":".gsbp-9f46849{color:#000000;}","textContent":"Circle","className":"size-title","localId":"gsbp-9f46849","styleAttributes":{"color":["#000000"]}} -->
<div class="size-title gsbp-9f46849">Circle</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-2915f0d","inlineCssStyles":".gsbp-2915f0d{color:#000000;}","textContent":"50%","className":"size-value","localId":"gsbp-2915f0d","styleAttributes":{"color":["#000000"]}} -->
<div class="size-value gsbp-2915f0d">50%</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-b409749","inlineCssStyles":".gsbp-b409749{color:#000000;}","textContent":"\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dcircle","className":"size-var","localId":"gsbp-b409749","styleAttributes":{"color":["#000000"]}} -->
<div class="size-var gsbp-b409749">--wp--custom--border-radius--circle</div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-2ca80f2","anchor":"shadows","inlineCssStyles":".gsbp-2ca80f2{color:#000000;}","type":"inner","localId":"gsbp-2ca80f2","align":"wide","styleAttributes":{"color":["#000000"]},"metadata":{"name":"Shadows"}} -->
<div class="gsbp-2ca80f2 alignwide" id="shadows"><!-- wp:greenshift-blocks/element {"id":"gsbp-5d9911d","inlineCssStyles":".gsbp-5d9911d{color:#000000;}","dynamicGClasses":[{"value":"brand-panel-wrap","type":"local","label":"brand-panel-wrap","localed":false,"css":"","attributes":[],"originalID":"gspb-DTHotu2","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"brand-panel-wrap","localId":"gsbp-5d9911d","align":"wide","styleAttributes":{"color":["#000000"]},"metadata":{"name":"Title"}} -->
<div class="brand-panel-wrap gsbp-5d9911d alignwide"><!-- wp:greenshift-blocks/element {"id":"gsbp-8b0ec8e","inlineCssStyles":".gsbp-8b0ec8e{color:#000000;}","dynamicGClasses":[{"value":"brand-panel-title","type":"local","label":"brand-panel-title","localed":false,"css":"","attributes":[],"originalID":"gsbp-7bc0611","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"textContent":"Shadows","tag":"h2","className":"brand-panel-title","localId":"gsbp-8b0ec8e","styleAttributes":{"color":["#000000"]},"isVariation":"divtext"} -->
<h2 class="brand-panel-title gsbp-8b0ec8e">Shadows</h2>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-e4148f9","inlineCssStyles":".gsbp-e4148f9{display:flex;flex-direction:column;column-gap:0px;row-gap:0px;justify-content:flex-start;color:rgba(0,0,0,1);}","type":"inner","localId":"gsbp-e4148f9","styleAttributes":{"display":["flex"],"flexDirection":["column"],"columnGap":["0px"],"rowGap":["0px"],"justifyContent":["flex-start"],"color":["rgba(0,0,0,1)"]}} -->
<div class="gsbp-e4148f9"><!-- wp:greenshift-blocks/element {"id":"gsbp-dd42e9e","inlineCssStyles":".gsbp-dd42e9e{color:#000000;}","dynamicGClasses":[{"value":"brand-panel-subtitle","type":"local","label":"brand-panel-subtitle","localed":false,"css":"","attributes":[],"originalID":"gspb-7UE8MMY","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"textContent":"Shadow styles","className":"brand-panel-subtitle","localId":"gsbp-dd42e9e","styleAttributes":{"color":["#000000"]}} -->
<div class="brand-panel-subtitle gsbp-dd42e9e">Shadow styles</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-75eb4aa","inlineCssStyles":".gsbp-75eb4aa{color:#000000;}","dynamicGClasses":[{"value":"brand-panel-subsub","type":"local","label":"brand-panel-subsub","localed":false,"css":"","attributes":[],"originalID":"gspb-gf0ZxC0","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"textContent":"Shadow Presets","className":"brand-panel-subsub","localId":"gsbp-75eb4aa","styleAttributes":{"color":["#000000"]}} -->
<div class="brand-panel-subsub gsbp-75eb4aa">Shadow Presets</div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-028156d","inlineCssStyles":".gsbp-028156d{color:#000000;}","dynamicGClasses":[{"value":"brand-panel-content","type":"local","label":"brand-panel-content","localed":false,"css":"","attributes":[],"originalID":"gspb-ZzWr1uD","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"brand-panel-content","localId":"gsbp-028156d","align":"wide","styleAttributes":{"color":["#000000"]},"metadata":{"name":"Content"}} -->
<div class="brand-panel-content gsbp-028156d alignwide"><!-- wp:greenshift-blocks/element {"id":"gsbp-ed1bde1","inlineCssStyles":".gsbp-ed1bde1{gap:20px;display:grid;column-gap:10px;row-gap:30px;}.gsbp-ed1bde1\u003e*:not(style):nth-of-type(1){grid-area:1 / 1 / span 1 / span 1;}.gsbp-ed1bde1\u003e*:not(style):nth-of-type(2){grid-area:1 / 2 / span 1 / span 1;}.gsbp-ed1bde1\u003e*:not(style):nth-of-type(3){grid-area:1 / 3 / span 1 / span 1;}.gsbp-ed1bde1\u003e*:not(style):nth-of-type(4){grid-area:2 / 1 / span 1 / span 1;}.gsbp-ed1bde1\u003e*:not(style):nth-of-type(5){grid-area:2 / 2 / span 1 / span 1;}.gsbp-ed1bde1\u003e*:not(style):nth-of-type(6){grid-area:2 / 3 / span 1 / span 1;}.gsbp-ed1bde1{grid-template-columns:repeat(3, 1fr);}@media (max-width: 991.98px){.gsbp-ed1bde1\u003e*:not(style):nth-of-type(1){grid-area:1 / 1 / span 1 / span 1;}}@media (max-width: 991.98px){.gsbp-ed1bde1\u003e*:not(style):nth-of-type(2){grid-area:1 / 2 / span 1 / span 1;}}@media (max-width: 991.98px){.gsbp-ed1bde1\u003e*:not(style):nth-of-type(3){grid-area:2 / 1 / span 1 / span 1;}}@media (max-width: 991.98px){.gsbp-ed1bde1\u003e*:not(style):nth-of-type(4){grid-area:2 / 2 / span 1 / span 1;}}@media (max-width: 991.98px){.gsbp-ed1bde1\u003e*:not(style):nth-of-type(5){grid-area:3 / 1 / span 1 / span 1;}}@media (max-width: 991.98px){.gsbp-ed1bde1\u003e*:not(style):nth-of-type(6){grid-area:3 / 2 / span 1 / span 1;}}@media (max-width: 991.98px){.gsbp-ed1bde1{grid-template-columns:repeat(2, 1fr);}}@media (max-width: 575.98px){.gsbp-ed1bde1\u003e*:not(style):nth-of-type(1){grid-area:1 / 1 / span 1 / span 1;}}@media (max-width: 575.98px){.gsbp-ed1bde1\u003e*:not(style):nth-of-type(2){grid-area:2 / 1 / span 1 / span 1;}}@media (max-width: 575.98px){.gsbp-ed1bde1\u003e*:not(style):nth-of-type(3){grid-area:3 / 1 / span 1 / span 1;}}@media (max-width: 575.98px){.gsbp-ed1bde1\u003e*:not(style):nth-of-type(4){grid-area:4 / 1 / span 1 / span 1;}}@media (max-width: 575.98px){.gsbp-ed1bde1\u003e*:not(style):nth-of-type(5){grid-area:5 / 1 / span 1 / span 1;}}@media (max-width: 575.98px){.gsbp-ed1bde1\u003e*:not(style):nth-of-type(6){grid-area:6 / 1 / span 1 / span 1;}}@media (max-width: 575.98px){.gsbp-ed1bde1{grid-template-columns:repeat(1, 1fr);}}.gsbp-ed1bde1{\nalign-items:end;\n}","type":"inner","localId":"gsbp-ed1bde1","styleAttributes":{"gap":["20px"],"display":["grid"],"gridLayoutItems_Extra":6,"gridLayout_Extra":{"desktop":{"layouts":[{"w":1,"h":1,"x":0,"y":0,"i":"0","moved":false,"static":false},{"w":1,"h":1,"x":1,"y":0,"i":"1","moved":false,"static":false},{"w":1,"h":1,"x":2,"y":0,"i":"2","moved":false,"static":false},{"w":1,"h":1,"x":0,"y":1,"i":"3","moved":false,"static":false},{"w":1,"h":1,"x":1,"y":1,"i":"4","moved":false,"static":false},{"w":1,"h":1,"x":2,"y":1,"i":"5","moved":false,"static":false}],"cols":3,"allowOverlap":false,"compactType":"horizontal"},"tablet":{"layouts":[{"i":"0","x":0,"y":0,"w":1,"h":1},{"i":"1","x":1,"y":0,"w":1,"h":1},{"i":"2","x":0,"y":1,"w":1,"h":1},{"i":"3","x":1,"y":1,"w":1,"h":1},{"i":"4","x":0,"y":2,"w":1,"h":1},{"i":"5","x":1,"y":2,"w":1,"h":1}],"cols":2,"allowOverlap":false,"compactType":"horizontal"},"mobile":{"layouts":[{"i":"0","x":0,"y":0,"w":1,"h":1},{"i":"1","x":0,"y":1,"w":1,"h":1},{"i":"2","x":0,"y":2,"w":1,"h":1},{"i":"3","x":0,"y":3,"w":1,"h":1},{"i":"4","x":0,"y":4,"w":1,"h":1},{"i":"5","x":0,"y":5,"w":1,"h":1}],"cols":1,"allowOverlap":false,"compactType":"horizontal"}},"columnGap":["10px"],"rowGap":["30px"],"gridTemplateLink_Extra":false,"customCSS_Extra":"{CURRENT}{\nalign-items:end;\n}"}} -->
<div class="gsbp-ed1bde1"><!-- wp:greenshift-blocks/element {"id":"gsbp-d013942","inlineCssStyles":".gsbp-d013942{color:#000000;}","dynamicGClasses":[{"value":"size-square","type":"local","label":"size-square","localed":false,"css":"","attributes":[],"originalID":"gsbp-wh01","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"size-square","localId":"gsbp-d013942","styleAttributes":{"color":["#000000"]}} -->
<div class="size-square gsbp-d013942"><!-- wp:greenshift-blocks/element {"id":"gsbp-513ba10","inlineCssStyles":".gsbp-513ba103{border-bottom-left-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dsmall, 10px);border-bottom-right-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dsmall, 10px);border-top-left-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dsmall, 10px);border-top-right-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dsmall, 10px);box-shadow:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dshadow\u002d\u002daccent, 0px 15px 25px 0px rgba(0, 0, 0, 0.1));}","type":"no","className":"size-shadow","localId":"gsbp-513ba103","staticLocalId":true,"styleAttributes":{"borderBottomLeftRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dsmall, 10px)"],"borderBottomRightRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dsmall, 10px)"],"borderTopLeftRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dsmall, 10px)"],"borderTopRightRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dsmall, 10px)"],"borderRadiusCustom_Extra":false,"borderRadiusLink_Extra":true,"boxShadow":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dshadow\u002d\u002daccent, 0px 15px 25px 0px rgba(0, 0, 0, 0.1))"]}} -->
<div class="size-shadow gsbp-513ba103"></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-5949cdf","inlineCssStyles":".gsbp-5949cdf{color:#000000;}","textContent":"Accent","className":"size-title","localId":"gsbp-5949cdf","styleAttributes":{"color":["#000000"]}} -->
<div class="size-title gsbp-5949cdf">Accent</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-1291f6a","inlineCssStyles":".gsbp-1291f6a{color:#000000;}","textContent":"0px 15px 25px 0px rgba(0, 0, 0, 0.1)","className":"size-value","localId":"gsbp-1291f6a","styleAttributes":{"color":["#000000"]}} -->
<div class="size-value gsbp-1291f6a">0px 15px 25px 0px rgba(0, 0, 0, 0.1)</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-c87ff92","inlineCssStyles":".gsbp-c87ff92{color:#000000;}","textContent":"\u002d\u002dwp\u002d\u002dpreset\u002d\u002dshadow\u002d\u002daccent","className":"size-var","localId":"gsbp-c87ff92","styleAttributes":{"color":["#000000"]}} -->
<div class="size-var gsbp-c87ff92">--wp--preset--shadow--accent</div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-4e965cf","inlineCssStyles":".gsbp-4e965cf{color:#000000;}","dynamicGClasses":[{"value":"size-square","type":"local","label":"size-square","localed":false,"css":"","attributes":[],"originalID":"gsbp-wh01","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"size-square","localId":"gsbp-4e965cf","styleAttributes":{"color":["#000000"]}} -->
<div class="size-square gsbp-4e965cf"><!-- wp:greenshift-blocks/element {"id":"gsbp-5917dea","inlineCssStyles":".gsbp-5917dea3{border-bottom-left-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px);border-bottom-right-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px);border-top-left-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px);border-top-right-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px);box-shadow:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dshadow\u002d\u002dmild, 0px 5px 20px 0px rgba(0, 0, 0, 0.03));}","type":"no","className":"size-shadow","localId":"gsbp-5917dea3","staticLocalId":true,"styleAttributes":{"borderBottomLeftRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px)"],"borderBottomRightRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px)"],"borderTopLeftRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px)"],"borderTopRightRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px)"],"borderRadiusCustom_Extra":false,"borderRadiusLink_Extra":true,"boxShadow":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dshadow\u002d\u002dmild, 0px 5px 20px 0px rgba(0, 0, 0, 0.03))"]}} -->
<div class="size-shadow gsbp-5917dea3"></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-22c75a9","inlineCssStyles":".gsbp-22c75a9{color:#000000;}","textContent":"Mild","className":"size-title","localId":"gsbp-22c75a9","styleAttributes":{"color":["#000000"]}} -->
<div class="size-title gsbp-22c75a9">Mild</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-1a8a919","inlineCssStyles":".gsbp-1a8a919{color:#000000;}","textContent":"0px 5px 20px 0px rgba(0, 0, 0, 0.03)","className":"size-value","localId":"gsbp-1a8a919","styleAttributes":{"color":["#000000"]}} -->
<div class="size-value gsbp-1a8a919">0px 5px 20px 0px rgba(0, 0, 0, 0.03)</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-0d823b0","inlineCssStyles":".gsbp-0d823b0{color:#000000;}","textContent":"\u002d\u002dwp\u002d\u002dpreset\u002d\u002dshadow\u002d\u002dmild","className":"size-var","localId":"gsbp-0d823b0","styleAttributes":{"color":["#000000"]}} -->
<div class="size-var gsbp-0d823b0">--wp--preset--shadow--mild</div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-10cf5ed","inlineCssStyles":".gsbp-10cf5ed{color:#000000;}","dynamicGClasses":[{"value":"size-square","type":"local","label":"size-square","localed":false,"css":"","attributes":[],"originalID":"gsbp-wh01","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"size-square","localId":"gsbp-10cf5ed","styleAttributes":{"color":["#000000"]}} -->
<div class="size-square gsbp-10cf5ed"><!-- wp:greenshift-blocks/element {"id":"gsbp-8e0c8dd","inlineCssStyles":".gsbp-8e0c8dd3{border-bottom-left-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px);border-bottom-right-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px);border-top-left-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px);border-top-right-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px);box-shadow:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dshadow\u002d\u002dsoft, 0px 15px 30px 0px rgba(119, 123, 146, 0.1));}","type":"no","className":"size-shadow","localId":"gsbp-8e0c8dd3","staticLocalId":true,"styleAttributes":{"borderBottomLeftRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px)"],"borderBottomRightRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px)"],"borderTopLeftRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px)"],"borderTopRightRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px)"],"borderRadiusCustom_Extra":false,"borderRadiusLink_Extra":true,"boxShadow":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dshadow\u002d\u002dsoft, 0px 15px 30px 0px rgba(119, 123, 146, 0.1))"]}} -->
<div class="size-shadow gsbp-8e0c8dd3"></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-adb4c4d","inlineCssStyles":".gsbp-adb4c4d{color:#000000;}","textContent":"Soft","className":"size-title","localId":"gsbp-adb4c4d","styleAttributes":{"color":["#000000"]}} -->
<div class="size-title gsbp-adb4c4d">Soft</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-a9de779","inlineCssStyles":".gsbp-a9de779{color:#000000;}","textContent":"0px 15px 30px 0px rgba(119, 123, 146, 0.1)","className":"size-value","localId":"gsbp-a9de779","styleAttributes":{"color":["#000000"]}} -->
<div class="size-value gsbp-a9de779">0px 15px 30px 0px rgba(119, 123, 146, 0.1)</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-a87369e","inlineCssStyles":".gsbp-a87369e{color:#000000;}","textContent":"\u002d\u002dwp\u002d\u002dpreset\u002d\u002dshadow\u002d\u002dsoft","className":"size-var","localId":"gsbp-a87369e","styleAttributes":{"color":["#000000"]}} -->
<div class="size-var gsbp-a87369e">--wp--preset--shadow--soft</div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-1fa3a15","inlineCssStyles":".gsbp-1fa3a15{color:#000000;}","dynamicGClasses":[{"value":"size-square","type":"local","label":"size-square","localed":false,"css":"","attributes":[],"originalID":"gsbp-wh01","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"size-square","localId":"gsbp-1fa3a15","styleAttributes":{"color":["#000000"]}} -->
<div class="size-square gsbp-1fa3a15"><!-- wp:greenshift-blocks/element {"id":"gsbp-a842da3","inlineCssStyles":".gsbp-9c940d3{border-bottom-left-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px);border-bottom-right-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px);border-top-left-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px);border-top-right-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px);box-shadow:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dshadow\u002d\u002delegant, 0px 5px 23px 0px rgba(188, 207, 219, 0.35));}","type":"no","className":"size-shadow","localId":"gsbp-9c940d3","staticLocalId":true,"styleAttributes":{"borderBottomLeftRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px)"],"borderBottomRightRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px)"],"borderTopLeftRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px)"],"borderTopRightRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px)"],"borderRadiusCustom_Extra":false,"borderRadiusLink_Extra":true,"boxShadow":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dshadow\u002d\u002delegant, 0px 5px 23px 0px rgba(188, 207, 219, 0.35))"]}} -->
<div class="size-shadow gsbp-9c940d3"></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-eabc866","inlineCssStyles":".gsbp-eabc866{color:#000000;}","textContent":"Elegant","className":"size-title","localId":"gsbp-eabc866","styleAttributes":{"color":["#000000"]}} -->
<div class="size-title gsbp-eabc866">Elegant</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-60a9601","inlineCssStyles":".gsbp-60a9601{color:#000000;}","textContent":"0px 5px 23px 0px rgba(188, 207, 219, 0.35)","className":"size-value","localId":"gsbp-60a9601","styleAttributes":{"color":["#000000"]}} -->
<div class="size-value gsbp-60a9601">0px 5px 23px 0px rgba(188, 207, 219, 0.35)</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-99da881","inlineCssStyles":".gsbp-99da881{color:#000000;}","textContent":"\u002d\u002dwp\u002d\u002dpreset\u002d\u002dshadow\u002d\u002delegant","className":"size-var","localId":"gsbp-99da881","styleAttributes":{"color":["#000000"]}} -->
<div class="size-var gsbp-99da881">--wp--preset--shadow--elegant</div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-d9b556b","inlineCssStyles":".gsbp-d9b556b{color:#000000;}","dynamicGClasses":[{"value":"size-square","type":"local","label":"size-square","localed":false,"css":"","attributes":[],"originalID":"gsbp-wh01","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"size-square","localId":"gsbp-d9b556b","styleAttributes":{"color":["#000000"]}} -->
<div class="size-square gsbp-d9b556b"><!-- wp:greenshift-blocks/element {"id":"gsbp-30797f1","inlineCssStyles":".gsbp-30797f12{border-bottom-left-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dsmall, 10px);border-bottom-right-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dsmall, 10px);border-top-left-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dsmall, 10px);border-top-right-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dsmall, 10px);box-shadow:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dshadow\u002d\u002dfocus, 0px 2px 4px 0px rgba(0, 0, 0, 0.07));}","type":"no","className":"size-shadow","localId":"gsbp-30797f12","staticLocalId":true,"styleAttributes":{"borderBottomLeftRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dsmall, 10px)"],"borderBottomRightRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dsmall, 10px)"],"borderTopLeftRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dsmall, 10px)"],"borderTopRightRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dsmall, 10px)"],"borderRadiusCustom_Extra":false,"borderRadiusLink_Extra":true,"boxShadow":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dshadow\u002d\u002dfocus, 0px 2px 4px 0px rgba(0, 0, 0, 0.07))"]}} -->
<div class="size-shadow gsbp-30797f12"></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-1de1eb2","inlineCssStyles":".gsbp-1de1eb2{color:#000000;}","textContent":"Focus","className":"size-title","localId":"gsbp-1de1eb2","styleAttributes":{"color":["#000000"]}} -->
<div class="size-title gsbp-1de1eb2">Focus</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-77cf7f4","inlineCssStyles":".gsbp-77cf7f4{color:#000000;}","textContent":"0px 2px 4px 0px rgba(0, 0, 0, 0.07)","className":"size-value","localId":"gsbp-77cf7f4","styleAttributes":{"color":["#000000"]}} -->
<div class="size-value gsbp-77cf7f4">0px 2px 4px 0px rgba(0, 0, 0, 0.07)</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-08e11f9","inlineCssStyles":".gsbp-08e11f9{color:#000000;}","textContent":"\u002d\u002dwp\u002d\u002dpreset\u002d\u002dshadow\u002d\u002dfocus","className":"size-var","localId":"gsbp-08e11f9","styleAttributes":{"color":["#000000"]}} -->
<div class="size-var gsbp-08e11f9">--wp--preset--shadow--focus</div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-d1dc2e6","inlineCssStyles":".gsbp-d1dc2e6{color:#000000;}","dynamicGClasses":[{"value":"size-square","type":"local","label":"size-square","localed":false,"css":"","attributes":[],"originalID":"gsbp-wh01","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"size-square","localId":"gsbp-d1dc2e6","styleAttributes":{"color":["#000000"]}} -->
<div class="size-square gsbp-d1dc2e6"><!-- wp:greenshift-blocks/element {"id":"gsbp-9a8519d","inlineCssStyles":".gsbp-wh01v23{border-bottom-left-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px);border-bottom-right-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px);border-top-left-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px);border-top-right-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px);box-shadow:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dshadow\u002d\u002dhighlight, 0px 32px 48px 0px rgba(0, 0, 0, 0.15));}","type":"no","className":"size-shadow","localId":"gsbp-wh01v23","staticLocalId":true,"styleAttributes":{"borderBottomLeftRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px)"],"borderBottomRightRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px)"],"borderTopLeftRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px)"],"borderTopRightRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px)"],"borderRadiusCustom_Extra":false,"borderRadiusLink_Extra":true,"boxShadow":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dshadow\u002d\u002dhighlight, 0px 32px 48px 0px rgba(0, 0, 0, 0.15))"]},"enableSpecificity":false} -->
<div class="size-shadow gsbp-wh01v23"></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-8c777e4","inlineCssStyles":".gsbp-8c777e4{color:#000000;}","textContent":"Highlight","className":"size-title","localId":"gsbp-8c777e4","styleAttributes":{"color":["#000000"]}} -->
<div class="size-title gsbp-8c777e4">Highlight</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-28e8b91","inlineCssStyles":".gsbp-28e8b91{color:#000000;}","textContent":"0px 32px 48px 0px rgba(0, 0, 0, 0.15)","className":"size-value","localId":"gsbp-28e8b91","styleAttributes":{"color":["#000000"]}} -->
<div class="size-value gsbp-28e8b91">0px 32px 48px 0px rgba(0, 0, 0, 0.15)</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-1fe56f4","inlineCssStyles":".gsbp-1fe56f4{color:#000000;}","textContent":"\u002d\u002dwp\u002d\u002dpreset\u002d\u002dshadow\u002d\u002dhighlight","className":"size-var","localId":"gsbp-1fe56f4","styleAttributes":{"color":["#000000"]}} -->
<div class="size-var gsbp-1fe56f4">--wp--preset--shadow--highlight</div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-a13f312","anchor":"transitions","inlineCssStyles":".gsbp-a13f312{color:#000000;}","type":"inner","localId":"gsbp-a13f312","align":"wide","styleAttributes":{"color":["#000000"]},"metadata":{"name":"Transitions"}} -->
<div class="gsbp-a13f312 alignwide" id="transitions"><!-- wp:greenshift-blocks/element {"id":"gsbp-e1d2391","inlineCssStyles":".gsbp-e1d2391{color:#000000;}","dynamicGClasses":[{"value":"brand-panel-wrap","type":"local","label":"brand-panel-wrap","localed":false,"css":"","attributes":[],"originalID":"gspb-DTHotu2","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"brand-panel-wrap","localId":"gsbp-e1d2391","align":"wide","styleAttributes":{"color":["#000000"]},"metadata":{"name":"Title"}} -->
<div class="brand-panel-wrap gsbp-e1d2391 alignwide"><!-- wp:greenshift-blocks/element {"id":"gsbp-cfc32fe","inlineCssStyles":".gsbp-cfc32fe{color:#000000;}","dynamicGClasses":[{"value":"brand-panel-title","type":"local","label":"brand-panel-title","localed":false,"css":"","attributes":[],"originalID":"gsbp-7bc0611","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"textContent":"Transitions","tag":"h2","className":"brand-panel-title","localId":"gsbp-cfc32fe","styleAttributes":{"color":["#000000"]},"isVariation":"divtext"} -->
<h2 class="brand-panel-title gsbp-cfc32fe">Transitions</h2>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-0cf8d30","inlineCssStyles":".gsbp-0cf8d30{display:flex;flex-direction:column;column-gap:0px;row-gap:0px;justify-content:flex-start;color:rgba(0,0,0,1);}","type":"inner","localId":"gsbp-0cf8d30","styleAttributes":{"display":["flex"],"flexDirection":["column"],"columnGap":["0px"],"rowGap":["0px"],"justifyContent":["flex-start"],"color":["rgba(0,0,0,1)"]}} -->
<div class="gsbp-0cf8d30"><!-- wp:greenshift-blocks/element {"id":"gsbp-4dc2be5","inlineCssStyles":".gsbp-4dc2be5{color:#000000;}","dynamicGClasses":[{"value":"brand-panel-subtitle","type":"local","label":"brand-panel-subtitle","localed":false,"css":"","attributes":[],"originalID":"gspb-7UE8MMY","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"textContent":"Transition styles","className":"brand-panel-subtitle","localId":"gsbp-4dc2be5","styleAttributes":{"color":["#000000"]}} -->
<div class="brand-panel-subtitle gsbp-4dc2be5">Transition styles</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-c7c5f71","inlineCssStyles":".gsbp-c7c5f71{color:#000000;}","dynamicGClasses":[{"value":"brand-panel-subsub","type":"local","label":"brand-panel-subsub","localed":false,"css":"","attributes":[],"originalID":"gspb-gf0ZxC0","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"textContent":"Transition Presets","className":"brand-panel-subsub","localId":"gsbp-c7c5f71","styleAttributes":{"color":["#000000"]}} -->
<div class="brand-panel-subsub gsbp-c7c5f71">Transition Presets</div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-9b4cd62","inlineCssStyles":".gsbp-9b4cd62{color:#000000;}","dynamicGClasses":[{"value":"brand-panel-content","type":"local","label":"brand-panel-content","localed":false,"css":"","attributes":[],"originalID":"gspb-ZzWr1uD","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"brand-panel-content","localId":"gsbp-9b4cd62","align":"wide","styleAttributes":{"color":["#000000"]},"metadata":{"name":"Content"}} -->
<div class="brand-panel-content gsbp-9b4cd62 alignwide"><!-- wp:greenshift-blocks/element {"id":"gsbp-3331f1e","inlineCssStyles":".gsbp-3331f1e{gap:20px;display:grid;column-gap:10px;row-gap:30px;}.gsbp-3331f1e\u003e*:not(style):nth-of-type(1){grid-area:1 / 1 / span 1 / span 1;}.gsbp-3331f1e\u003e*:not(style):nth-of-type(2){grid-area:1 / 2 / span 1 / span 1;}.gsbp-3331f1e\u003e*:not(style):nth-of-type(3){grid-area:1 / 3 / span 1 / span 1;}.gsbp-3331f1e\u003e*:not(style):nth-of-type(4){grid-area:2 / 1 / span 1 / span 1;}.gsbp-3331f1e\u003e*:not(style):nth-of-type(5){grid-area:2 / 2 / span 1 / span 1;}.gsbp-3331f1e\u003e*:not(style):nth-of-type(6){grid-area:2 / 3 / span 1 / span 1;}.gsbp-3331f1e{grid-template-columns:repeat(3, 1fr);}@media (max-width: 991.98px){.gsbp-3331f1e\u003e*:not(style):nth-of-type(1){grid-area:1 / 1 / span 1 / span 1;}}@media (max-width: 991.98px){.gsbp-3331f1e\u003e*:not(style):nth-of-type(2){grid-area:1 / 2 / span 1 / span 1;}}@media (max-width: 991.98px){.gsbp-3331f1e\u003e*:not(style):nth-of-type(3){grid-area:2 / 1 / span 1 / span 1;}}@media (max-width: 991.98px){.gsbp-3331f1e\u003e*:not(style):nth-of-type(4){grid-area:2 / 2 / span 1 / span 1;}}@media (max-width: 991.98px){.gsbp-3331f1e\u003e*:not(style):nth-of-type(5){grid-area:3 / 1 / span 1 / span 1;}}@media (max-width: 991.98px){.gsbp-3331f1e\u003e*:not(style):nth-of-type(6){grid-area:3 / 2 / span 1 / span 1;}}@media (max-width: 991.98px){.gsbp-3331f1e{grid-template-columns:repeat(2, 1fr);}}@media (max-width: 575.98px){.gsbp-3331f1e\u003e*:not(style):nth-of-type(1){grid-area:1 / 1 / span 1 / span 1;}}@media (max-width: 575.98px){.gsbp-3331f1e\u003e*:not(style):nth-of-type(2){grid-area:2 / 1 / span 1 / span 1;}}@media (max-width: 575.98px){.gsbp-3331f1e\u003e*:not(style):nth-of-type(3){grid-area:3 / 1 / span 1 / span 1;}}@media (max-width: 575.98px){.gsbp-3331f1e\u003e*:not(style):nth-of-type(4){grid-area:4 / 1 / span 1 / span 1;}}@media (max-width: 575.98px){.gsbp-3331f1e\u003e*:not(style):nth-of-type(5){grid-area:5 / 1 / span 1 / span 1;}}@media (max-width: 575.98px){.gsbp-3331f1e\u003e*:not(style):nth-of-type(6){grid-area:6 / 1 / span 1 / span 1;}}@media (max-width: 575.98px){.gsbp-3331f1e{grid-template-columns:repeat(1, 1fr);}}.gsbp-3331f1e{\nalign-items:end;\n}","type":"inner","localId":"gsbp-3331f1e","styleAttributes":{"gap":["20px"],"display":["grid"],"gridLayoutItems_Extra":6,"gridLayout_Extra":{"desktop":{"layouts":[{"w":1,"h":1,"x":0,"y":0,"i":"0","moved":false,"static":false},{"w":1,"h":1,"x":1,"y":0,"i":"1","moved":false,"static":false},{"w":1,"h":1,"x":2,"y":0,"i":"2","moved":false,"static":false},{"w":1,"h":1,"x":0,"y":1,"i":"3","moved":false,"static":false},{"w":1,"h":1,"x":1,"y":1,"i":"4","moved":false,"static":false},{"w":1,"h":1,"x":2,"y":1,"i":"5","moved":false,"static":false}],"cols":3,"allowOverlap":false,"compactType":"horizontal"},"tablet":{"layouts":[{"i":"0","x":0,"y":0,"w":1,"h":1},{"i":"1","x":1,"y":0,"w":1,"h":1},{"i":"2","x":0,"y":1,"w":1,"h":1},{"i":"3","x":1,"y":1,"w":1,"h":1},{"i":"4","x":0,"y":2,"w":1,"h":1},{"i":"5","x":1,"y":2,"w":1,"h":1}],"cols":2,"allowOverlap":false,"compactType":"horizontal"},"mobile":{"layouts":[{"i":"0","x":0,"y":0,"w":1,"h":1},{"i":"1","x":0,"y":1,"w":1,"h":1},{"i":"2","x":0,"y":2,"w":1,"h":1},{"i":"3","x":0,"y":3,"w":1,"h":1},{"i":"4","x":0,"y":4,"w":1,"h":1},{"i":"5","x":0,"y":5,"w":1,"h":1}],"cols":1,"allowOverlap":false,"compactType":"horizontal"}},"columnGap":["10px"],"rowGap":["30px"],"gridTemplateLink_Extra":false,"customCSS_Extra":"{CURRENT}{\nalign-items:end;\n}"}} -->
<div class="gsbp-3331f1e"><!-- wp:greenshift-blocks/element {"id":"gsbp-543600e","inlineCssStyles":".gsbp-543600e{color:#000000;}","dynamicGClasses":[{"value":"size-square","type":"local","label":"size-square","localed":false,"css":"","attributes":[],"originalID":"gsbp-wh01","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"size-square","localId":"gsbp-543600e","styleAttributes":{"color":["#000000"]}} -->
<div class="size-square gsbp-543600e"><!-- wp:greenshift-blocks/element {"id":"gsbp-37fca31","inlineCssStyles":".gsbp-513ba103l{border-bottom-left-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dsmall, 10px);border-bottom-right-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dsmall, 10px);border-top-left-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dsmall, 10px);border-top-right-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dsmall, 10px);transition:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dtransition\u002d\u002dease, all 0.5s ease);}","type":"no","className":"size-transition","localId":"gsbp-513ba103l","staticLocalId":true,"styleAttributes":{"borderBottomLeftRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dsmall, 10px)"],"borderBottomRightRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dsmall, 10px)"],"borderTopLeftRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dsmall, 10px)"],"borderTopRightRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dsmall, 10px)"],"borderRadiusCustom_Extra":false,"borderRadiusLink_Extra":true,"transition":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dtransition\u002d\u002dease, all 0.5s ease)"]}} -->
<div class="size-transition gsbp-513ba103l"></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-e519d9a","inlineCssStyles":".gsbp-e519d9a{color:#000000;}","textContent":"Ease","className":"size-title","localId":"gsbp-e519d9a","styleAttributes":{"color":["#000000"]}} -->
<div class="size-title gsbp-e519d9a">Ease</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-b225e9c","inlineCssStyles":".gsbp-b225e9c{color:#000000;}","textContent":"all 0.5s ease","className":"size-value","localId":"gsbp-b225e9c","styleAttributes":{"color":["#000000"]}} -->
<div class="size-value gsbp-b225e9c">all 0.5s ease</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-70195fb","inlineCssStyles":".gsbp-70195fb{color:#000000;}","textContent":"\u002d\u002dwp\u002d\u002dcustom\u002d\u002dtransition\u002d\u002dease","className":"size-var","localId":"gsbp-70195fb","styleAttributes":{"color":["#000000"]}} -->
<div class="size-var gsbp-70195fb">--wp--custom--transition--ease</div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-afb1b98","inlineCssStyles":".gsbp-afb1b98{color:#000000;}","dynamicGClasses":[{"value":"size-square","type":"local","label":"size-square","localed":false,"css":"","attributes":[],"originalID":"gsbp-wh01","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"size-square","localId":"gsbp-afb1b98","styleAttributes":{"color":["#000000"]}} -->
<div class="size-square gsbp-afb1b98"><!-- wp:greenshift-blocks/element {"id":"gsbp-c1c86e8","inlineCssStyles":".gsbp-5917dea3o{border-bottom-left-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px);border-bottom-right-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px);border-top-left-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px);border-top-right-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px);transition:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dtransition\u002d\u002dease-in-out, all 0.3s ease-in-out);}","type":"no","className":"size-transition","localId":"gsbp-5917dea3o","staticLocalId":true,"styleAttributes":{"borderBottomLeftRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px)"],"borderBottomRightRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px)"],"borderTopLeftRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px)"],"borderTopRightRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px)"],"borderRadiusCustom_Extra":false,"borderRadiusLink_Extra":true,"transition":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dtransition\u002d\u002dease-in-out, all 0.3s ease-in-out)"]}} -->
<div class="size-transition gsbp-5917dea3o"></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-4349449","inlineCssStyles":".gsbp-4349449{color:#000000;}","textContent":"Ease In Out","className":"size-title","localId":"gsbp-4349449","styleAttributes":{"color":["#000000"]}} -->
<div class="size-title gsbp-4349449">Ease In Out</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-4e0a9cb","inlineCssStyles":".gsbp-4e0a9cb{color:#000000;}","textContent":"all 0.3s ease-in-out","className":"size-value","localId":"gsbp-4e0a9cb","styleAttributes":{"color":["#000000"]}} -->
<div class="size-value gsbp-4e0a9cb">all 0.3s ease-in-out</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-7f9a401","inlineCssStyles":".gsbp-7f9a401{color:#000000;}","textContent":"\u002d\u002dwp\u002d\u002dcustom\u002d\u002dtransition\u002d\u002dease-in-out","className":"size-var","localId":"gsbp-7f9a401","styleAttributes":{"color":["#000000"]}} -->
<div class="size-var gsbp-7f9a401">--wp--custom--transition--ease-in-out</div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-0ae165a","inlineCssStyles":".gsbp-0ae165a{color:#000000;}","dynamicGClasses":[{"value":"size-square","type":"local","label":"size-square","localed":false,"css":"","attributes":[],"originalID":"gsbp-wh01","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"size-square","localId":"gsbp-0ae165a","styleAttributes":{"color":["#000000"]}} -->
<div class="size-square gsbp-0ae165a"><!-- wp:greenshift-blocks/element {"id":"gsbp-9bc6492","inlineCssStyles":".gsbp-8e0c8dd3k{border-bottom-left-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px);border-bottom-right-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px);border-top-left-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px);border-top-right-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px);transition:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dtransition\u002d\u002dcreative, all 0.5s cubic-bezier(0.165, 0.84, 0.44, 1));}","type":"no","className":"size-transition","localId":"gsbp-8e0c8dd3k","staticLocalId":true,"styleAttributes":{"borderBottomLeftRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px)"],"borderBottomRightRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px)"],"borderTopLeftRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px)"],"borderTopRightRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px)"],"borderRadiusCustom_Extra":false,"borderRadiusLink_Extra":true,"transition":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dtransition\u002d\u002dcreative, all 0.5s cubic-bezier(0.165, 0.84, 0.44, 1))"]}} -->
<div class="size-transition gsbp-8e0c8dd3k"></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-81a0ef8","inlineCssStyles":".gsbp-81a0ef8{color:#000000;}","textContent":"Creative","className":"size-title","localId":"gsbp-81a0ef8","styleAttributes":{"color":["#000000"]}} -->
<div class="size-title gsbp-81a0ef8">Creative</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-956849e","inlineCssStyles":".gsbp-956849e{color:#000000;}","textContent":"all 0.5s cubic-bezier(0.165, 0.84, 0.44, 1)","className":"size-value","localId":"gsbp-956849e","styleAttributes":{"color":["#000000"]}} -->
<div class="size-value gsbp-956849e">all 0.5s cubic-bezier(0.165, 0.84, 0.44, 1)</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-e4858b3","inlineCssStyles":".gsbp-e4858b3{color:#000000;}","textContent":"\u002d\u002dwp\u002d\u002dcustom\u002d\u002dtransition\u002d\u002dcreative","className":"size-var","localId":"gsbp-e4858b3","styleAttributes":{"color":["#000000"]}} -->
<div class="size-var gsbp-e4858b3">--wp--custom--transition--creative</div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-fcf2793","inlineCssStyles":".gsbp-fcf2793{color:#000000;}","dynamicGClasses":[{"value":"size-square","type":"local","label":"size-square","localed":false,"css":"","attributes":[],"originalID":"gsbp-wh01","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"size-square","localId":"gsbp-fcf2793","styleAttributes":{"color":["#000000"]}} -->
<div class="size-square gsbp-fcf2793"><!-- wp:greenshift-blocks/element {"id":"gsbp-41621b3","inlineCssStyles":".gsbp-9c940d3k{border-bottom-left-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px);border-bottom-right-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px);border-top-left-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px);border-top-right-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px);transition:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dtransition\u002d\u002dsoft, all 0.5s cubic-bezier(0.215, 0.61, 0.355, 1));}","type":"no","className":"size-transition","localId":"gsbp-9c940d3k","staticLocalId":true,"styleAttributes":{"borderBottomLeftRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px)"],"borderBottomRightRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px)"],"borderTopLeftRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px)"],"borderTopRightRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px)"],"borderRadiusCustom_Extra":false,"borderRadiusLink_Extra":true,"transition":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dtransition\u002d\u002dsoft, all 0.5s cubic-bezier(0.215, 0.61, 0.355, 1))"]}} -->
<div class="size-transition gsbp-9c940d3k"></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-77d87a5","inlineCssStyles":".gsbp-77d87a5{color:#000000;}","textContent":"Soft","className":"size-title","localId":"gsbp-77d87a5","styleAttributes":{"color":["#000000"]}} -->
<div class="size-title gsbp-77d87a5">Soft</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-6a9f87c","inlineCssStyles":".gsbp-6a9f87c{color:#000000;}","textContent":"all 0.5s cubic-bezier(0.215, 0.61, 0.355, 1)","className":"size-value","localId":"gsbp-6a9f87c","styleAttributes":{"color":["#000000"]}} -->
<div class="size-value gsbp-6a9f87c">all 0.5s cubic-bezier(0.215, 0.61, 0.355, 1)</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-8d92a40","inlineCssStyles":".gsbp-8d92a40{color:#000000;}","textContent":"\u002d\u002dwp\u002d\u002dcustom\u002d\u002dtransition\u002d\u002dsoft","className":"size-var","localId":"gsbp-8d92a40","styleAttributes":{"color":["#000000"]}} -->
<div class="size-var gsbp-8d92a40">--wp--custom--transition--soft</div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-5affd83","inlineCssStyles":".gsbp-5affd83{color:#000000;}","dynamicGClasses":[{"value":"size-square","type":"local","label":"size-square","localed":false,"css":"","attributes":[],"originalID":"gsbp-wh01","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"size-square","localId":"gsbp-5affd83","styleAttributes":{"color":["#000000"]}} -->
<div class="size-square gsbp-5affd83"><!-- wp:greenshift-blocks/element {"id":"gsbp-1a74d0f","inlineCssStyles":".gsbp-30797f12l{border-bottom-left-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dsmall, 10px);border-bottom-right-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dsmall, 10px);border-top-left-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dsmall, 10px);border-top-right-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dsmall, 10px);transition:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dtransition\u002d\u002dmild, all 0.5s cubic-bezier(0.47, 0, 0.07, 1));}","type":"no","className":"size-transition","localId":"gsbp-30797f12l","staticLocalId":true,"styleAttributes":{"borderBottomLeftRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dsmall, 10px)"],"borderBottomRightRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dsmall, 10px)"],"borderTopLeftRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dsmall, 10px)"],"borderTopRightRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dsmall, 10px)"],"borderRadiusCustom_Extra":false,"borderRadiusLink_Extra":true,"transition":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dtransition\u002d\u002dmild, all 0.5s cubic-bezier(0.47, 0, 0.07, 1))"]}} -->
<div class="size-transition gsbp-30797f12l"></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-ad0965e","inlineCssStyles":".gsbp-ad0965e{color:#000000;}","textContent":"Mild","className":"size-title","localId":"gsbp-ad0965e","styleAttributes":{"color":["#000000"]}} -->
<div class="size-title gsbp-ad0965e">Mild</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-88716a3","inlineCssStyles":".gsbp-88716a3{color:#000000;}","textContent":"all 0.5s cubic-bezier(0.47, 0, 0.07, 1)","className":"size-value","localId":"gsbp-88716a3","styleAttributes":{"color":["#000000"]}} -->
<div class="size-value gsbp-88716a3">all 0.5s cubic-bezier(0.47, 0, 0.07, 1)</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-83cfec7","inlineCssStyles":".gsbp-83cfec7{color:#000000;}","textContent":"\u002d\u002dwp\u002d\u002dcustom\u002d\u002dtransition\u002d\u002dmild","className":"size-var","localId":"gsbp-83cfec7","styleAttributes":{"color":["#000000"]}} -->
<div class="size-var gsbp-83cfec7">--wp--custom--transition--mild</div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-a357f20","inlineCssStyles":".gsbp-a357f20{color:#000000;}","dynamicGClasses":[{"value":"size-square","type":"local","label":"size-square","localed":false,"css":"","attributes":[],"originalID":"gsbp-wh01","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"size-square","localId":"gsbp-a357f20","styleAttributes":{"color":["#000000"]}} -->
<div class="size-square gsbp-a357f20"><!-- wp:greenshift-blocks/element {"id":"gsbp-1732bb6","inlineCssStyles":".gsbp-wh01v23js{border-bottom-left-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px);border-bottom-right-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px);border-top-left-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px);border-top-right-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px);transition:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dtransition\u002d\u002delegant, all 0.5s cubic-bezier(0.35, 0.11, 0.22, 1.16));}","type":"no","className":"size-transition","localId":"gsbp-wh01v23js","staticLocalId":true,"styleAttributes":{"borderBottomLeftRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px)"],"borderBottomRightRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px)"],"borderTopLeftRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px)"],"borderTopRightRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px)"],"borderRadiusCustom_Extra":false,"borderRadiusLink_Extra":true,"transition":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dtransition\u002d\u002delegant, all 0.5s cubic-bezier(0.35, 0.11, 0.22, 1.16))"]},"enableSpecificity":false} -->
<div class="size-transition gsbp-wh01v23js"></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-d12f8e3","inlineCssStyles":".gsbp-d12f8e3{color:#000000;}","textContent":"Elegant","className":"size-title","localId":"gsbp-d12f8e3","styleAttributes":{"color":["#000000"]}} -->
<div class="size-title gsbp-d12f8e3">Elegant</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-5d1047a","inlineCssStyles":".gsbp-5d1047a{color:#000000;}","textContent":"all 0.5s cubic-bezier(0.35, 0.11, 0.22, 1.16)","className":"size-value","localId":"gsbp-5d1047a","styleAttributes":{"color":["#000000"]}} -->
<div class="size-value gsbp-5d1047a">all 0.5s cubic-bezier(0.35, 0.11, 0.22, 1.16)</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-de80f39","inlineCssStyles":".gsbp-de80f39{color:#000000;}","textContent":"\u002d\u002dwp\u002d\u002dcustom\u002d\u002dtransition\u002d\u002delegant","className":"size-var","localId":"gsbp-de80f39","styleAttributes":{"color":["#000000"]}} -->
<div class="size-var gsbp-de80f39">--wp--custom--transition--elegant</div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-7018450","inlineCssStyles":".gsbp-7018450{color:#000000;}","dynamicGClasses":[{"value":"size-square","type":"local","label":"size-square","localed":false,"css":"","attributes":[],"originalID":"gsbp-wh01","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"size-square","localId":"gsbp-7018450","styleAttributes":{"color":["#000000"]}} -->
<div class="size-square gsbp-7018450"><!-- wp:greenshift-blocks/element {"id":"gsbp-38d7745","inlineCssStyles":".gsbp-wh01v23jas{border-bottom-left-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px);border-bottom-right-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px);border-top-left-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px);border-top-right-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px);transition:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dtransition\u002d\u002dsmooth, all 1s cubic-bezier(0.66,0,0.34,1));}","type":"no","className":"size-transition","localId":"gsbp-wh01v23jas","staticLocalId":true,"styleAttributes":{"borderBottomLeftRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px)"],"borderBottomRightRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px)"],"borderTopLeftRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px)"],"borderTopRightRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px)"],"borderRadiusCustom_Extra":false,"borderRadiusLink_Extra":true,"transition":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dtransition\u002d\u002dsmooth, all 1s cubic-bezier(0.66,0,0.34,1))"]},"enableSpecificity":false} -->
<div class="size-transition gsbp-wh01v23jas"></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-7ee5467","inlineCssStyles":".gsbp-7ee5467{color:#000000;}","textContent":"Smooth","className":"size-title","localId":"gsbp-7ee5467","styleAttributes":{"color":["#000000"]}} -->
<div class="size-title gsbp-7ee5467">Smooth</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-2c4857f","inlineCssStyles":".gsbp-2c4857f{color:#000000;}","textContent":"all 1s cubic-bezier(0.66,0,0.34,1)","className":"size-value","localId":"gsbp-2c4857f","styleAttributes":{"color":["#000000"]}} -->
<div class="size-value gsbp-2c4857f">all 1s cubic-bezier(0.66,0,0.34,1)</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-d542356","inlineCssStyles":".gsbp-d542356{color:#000000;}","textContent":"\u002d\u002dwp\u002d\u002dcustom\u002d\u002dtransition\u002d\u002dsmooth","className":"size-var","localId":"gsbp-d542356","styleAttributes":{"color":["#000000"]}} -->
<div class="size-var gsbp-d542356">--wp--custom--transition--smooth</div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-0f6e550","inlineCssStyles":".gsbp-0f6e550{color:#000000;}","dynamicGClasses":[{"value":"size-square","type":"local","label":"size-square","localed":false,"css":"","attributes":[],"originalID":"gsbp-wh01","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"size-square","localId":"gsbp-0f6e550","styleAttributes":{"color":["#000000"]}} -->
<div class="size-square gsbp-0f6e550"><!-- wp:greenshift-blocks/element {"id":"gsbp-baffdda","inlineCssStyles":".gsbp-wh01v23jwe{border-bottom-left-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px);border-bottom-right-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px);border-top-left-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px);border-top-right-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px);transition:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dtransition\u002d\u002daccent, all 1s cubic-bezier(0.48,0.04,0.52,0.96));}","type":"no","className":"size-transition","localId":"gsbp-wh01v23jwe","staticLocalId":true,"styleAttributes":{"borderBottomLeftRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px)"],"borderBottomRightRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px)"],"borderTopLeftRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px)"],"borderTopRightRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px)"],"borderRadiusCustom_Extra":false,"borderRadiusLink_Extra":true,"transition":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dtransition\u002d\u002daccent, all 1s cubic-bezier(0.48,0.04,0.52,0.96))"]},"enableSpecificity":false} -->
<div class="size-transition gsbp-wh01v23jwe"></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-505f58e","inlineCssStyles":".gsbp-505f58e{color:#000000;}","textContent":"Accent","className":"size-title","localId":"gsbp-505f58e","styleAttributes":{"color":["#000000"]}} -->
<div class="size-title gsbp-505f58e">Accent</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-e6ea64e","inlineCssStyles":".gsbp-e6ea64e{color:#000000;}","textContent":"all 1s cubic-bezier(0.48,0.04,0.52,0.96)","className":"size-value","localId":"gsbp-e6ea64e","styleAttributes":{"color":["#000000"]}} -->
<div class="size-value gsbp-e6ea64e">all 1s cubic-bezier(0.48,0.04,0.52,0.96)</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-4b7264d","inlineCssStyles":".gsbp-4b7264d{color:#000000;}","textContent":"\u002d\u002dwp\u002d\u002dcustom\u002d\u002dtransition\u002d\u002daccent","className":"size-var","localId":"gsbp-4b7264d","styleAttributes":{"color":["#000000"]}} -->
<div class="size-var gsbp-4b7264d">--wp--custom--transition--accent</div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-a11be37","inlineCssStyles":".gsbp-a11be37{color:#000000;}","dynamicGClasses":[{"value":"size-square","type":"local","label":"size-square","localed":false,"css":"","attributes":[],"originalID":"gsbp-wh01","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"size-square","localId":"gsbp-a11be37","styleAttributes":{"color":["#000000"]}} -->
<div class="size-square gsbp-a11be37"><!-- wp:greenshift-blocks/element {"id":"gsbp-65b9723","inlineCssStyles":".gsbp-wh01v23jrr{border-bottom-left-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px);border-bottom-right-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px);border-top-left-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px);border-top-right-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px);transition:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dtransition\u002d\u002dmotion, all 1s cubic-bezier(0.84,0,0.16,1));}","type":"no","className":"size-transition","localId":"gsbp-wh01v23jrr","staticLocalId":true,"styleAttributes":{"borderBottomLeftRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px)"],"borderBottomRightRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px)"],"borderTopLeftRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px)"],"borderTopRightRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px)"],"borderRadiusCustom_Extra":false,"borderRadiusLink_Extra":true,"transition":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dtransition\u002d\u002dmotion, all 1s cubic-bezier(0.84,0,0.16,1))"]},"enableSpecificity":false} -->
<div class="size-transition gsbp-wh01v23jrr"></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-70f01c8","inlineCssStyles":".gsbp-70f01c8{color:#000000;}","textContent":"Motion","className":"size-title","localId":"gsbp-70f01c8","styleAttributes":{"color":["#000000"]}} -->
<div class="size-title gsbp-70f01c8">Motion</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-74a020e","inlineCssStyles":".gsbp-74a020e{color:#000000;}","textContent":"all 1s cubic-bezier(0.84,0,0.16,1)","className":"size-value","localId":"gsbp-74a020e","styleAttributes":{"color":["#000000"]}} -->
<div class="size-value gsbp-74a020e">all 1s cubic-bezier(0.84,0,0.16,1)</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-5765d6a","inlineCssStyles":".gsbp-5765d6a{color:#000000;}","textContent":"\u002d\u002dwp\u002d\u002dcustom\u002d\u002dtransition\u002d\u002dmotion","className":"size-var","localId":"gsbp-5765d6a","styleAttributes":{"color":["#000000"]}} -->
<div class="size-var gsbp-5765d6a">--wp--custom--transition--motion</div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-5534b65","inlineCssStyles":".gsbp-5534b65{color:#000000;}","dynamicGClasses":[{"value":"size-square","type":"local","label":"size-square","localed":false,"css":"","attributes":[],"originalID":"gsbp-wh01","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"size-square","localId":"gsbp-5534b65","styleAttributes":{"color":["#000000"]}} -->
<div class="size-square gsbp-5534b65"><!-- wp:greenshift-blocks/element {"id":"gsbp-cc58fa1","inlineCssStyles":".gsbp-wh01v23jqw{border-bottom-left-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px);border-bottom-right-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px);border-top-left-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px);border-top-right-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px);transition:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dtransition\u002d\u002dlight, all 1s cubic-bezier(0.4,0.8,0.74,1));}","type":"no","className":"size-transition","localId":"gsbp-wh01v23jqw","staticLocalId":true,"styleAttributes":{"borderBottomLeftRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px)"],"borderBottomRightRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px)"],"borderTopLeftRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px)"],"borderTopRightRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px)"],"borderRadiusCustom_Extra":false,"borderRadiusLink_Extra":true,"transition":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dtransition\u002d\u002dlight, all 1s cubic-bezier(0.4,0.8,0.74,1))"]},"enableSpecificity":false} -->
<div class="size-transition gsbp-wh01v23jqw"></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-24063e1","inlineCssStyles":".gsbp-24063e1{color:#000000;}","textContent":"Light","className":"size-title","localId":"gsbp-24063e1","styleAttributes":{"color":["#000000"]}} -->
<div class="size-title gsbp-24063e1">Light</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-dc1d555","inlineCssStyles":".gsbp-dc1d555{color:#000000;}","textContent":"all 1s cubic-bezier(0.4,0.8,0.74,1)","className":"size-value","localId":"gsbp-dc1d555","styleAttributes":{"color":["#000000"]}} -->
<div class="size-value gsbp-dc1d555">all 1s cubic-bezier(0.4,0.8,0.74,1)</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-e4645b0","inlineCssStyles":".gsbp-e4645b0{color:#000000;}","textContent":"\u002d\u002dwp\u002d\u002dcustom\u002d\u002dtransition\u002d\u002dlight","className":"size-var","localId":"gsbp-e4645b0","styleAttributes":{"color":["#000000"]}} -->
<div class="size-var gsbp-e4645b0">--wp--custom--transition--light</div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-0c5cc78","anchor":"extra","inlineCssStyles":".gsbp-0c5cc78{color:#000000;}","type":"inner","localId":"gsbp-0c5cc78","align":"wide","styleAttributes":{"color":["#000000"]},"metadata":{"name":"Extra"}} -->
<div class="gsbp-0c5cc78 alignwide" id="extra"><!-- wp:greenshift-blocks/element {"id":"gsbp-24a9e7a","inlineCssStyles":".gsbp-24a9e7a{color:#000000;}","dynamicGClasses":[{"value":"brand-panel-wrap","type":"local","label":"brand-panel-wrap","localed":false,"css":"","attributes":[],"originalID":"gspb-DTHotu2","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"brand-panel-wrap","localId":"gsbp-24a9e7a","align":"wide","styleAttributes":{"color":["#000000"]},"metadata":{"name":"Title"}} -->
<div class="brand-panel-wrap gsbp-24a9e7a alignwide"><!-- wp:greenshift-blocks/element {"id":"gsbp-bbe767f","inlineCssStyles":".gsbp-bbe767f{color:#000000;}","dynamicGClasses":[{"value":"brand-panel-title","type":"local","label":"brand-panel-title","localed":false,"css":"","attributes":[],"originalID":"gsbp-7bc0611","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"textContent":"Extra","tag":"h2","className":"brand-panel-title","localId":"gsbp-bbe767f","styleAttributes":{"color":["#000000"]},"isVariation":"divtext"} -->
<h2 class="brand-panel-title gsbp-bbe767f">Extra</h2>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-a43bb12","inlineCssStyles":".gsbp-a43bb12{display:flex;flex-direction:column;column-gap:0px;row-gap:0px;justify-content:flex-start;color:rgba(0,0,0,1);}","type":"inner","localId":"gsbp-a43bb12","styleAttributes":{"display":["flex"],"flexDirection":["column"],"columnGap":["0px"],"rowGap":["0px"],"justifyContent":["flex-start"],"color":["rgba(0,0,0,1)"]}} -->
<div class="gsbp-a43bb12"><!-- wp:greenshift-blocks/element {"id":"gsbp-b5de3db","inlineCssStyles":".gsbp-b5de3db{color:#000000;}","dynamicGClasses":[{"value":"brand-panel-subtitle","type":"local","label":"brand-panel-subtitle","localed":false,"css":"","attributes":[],"originalID":"gspb-7UE8MMY","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"textContent":"Additional styles","className":"brand-panel-subtitle","localId":"gsbp-b5de3db","styleAttributes":{"color":["#000000"]}} -->
<div class="brand-panel-subtitle gsbp-b5de3db">Additional styles</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-2699172","inlineCssStyles":".gsbp-2699172{color:#000000;}","dynamicGClasses":[{"value":"brand-panel-subsub","type":"local","label":"brand-panel-subsub","localed":false,"css":"","attributes":[],"originalID":"gspb-gf0ZxC0","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"textContent":"Extra Presets","className":"brand-panel-subsub","localId":"gsbp-2699172","styleAttributes":{"color":["#000000"]}} -->
<div class="brand-panel-subsub gsbp-2699172">Extra Presets</div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-2e89781","inlineCssStyles":".gsbp-2e89781{color:#000000;}","dynamicGClasses":[{"value":"brand-panel-content","type":"local","label":"brand-panel-content","localed":false,"css":"","attributes":[],"originalID":"gspb-ZzWr1uD","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"brand-panel-content","localId":"gsbp-2e89781","align":"wide","styleAttributes":{"color":["#000000"]},"metadata":{"name":"Content"}} -->
<div class="brand-panel-content gsbp-2e89781 alignwide"><!-- wp:greenshift-blocks/element {"id":"gsbp-e1d8ec8","inlineCssStyles":".gsbp-e1d8ec8{border-collapse:collapse;table-layout:fixed;}.gsbp-e1d8ec8 td{padding-top:10px;padding-bottom:10px;padding-right:12px;padding-left:12px;border-style:solid;border-width:1px;border-color:#00000012;font-size:14px;}.gsbp-e1d8ec8 th{padding-top:6px;padding-bottom:6px;padding-right:12px;padding-left:12px;border-style:solid;border-width:1px;border-color:#00000012;font-size:16px;background-color:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dlightbg, #cddceb21);}.gsbp-e1d8ec8{width:100%;}","dynamicGClasses":[{"value":"table-colors","type":"local","label":"table-colors","localed":false,"css":"","attributes":[],"originalID":"gsbp-44f14a4","originalBlock":"greenshift-blocks/element","tag":"table","selectors":[]}],"tag":"table","type":"inner","className":"table-colors","localId":"gsbp-e1d8ec8","tableStyles":{"table":{"layout":"fixed","border":"collapse"},"responsive":"yes","td":{"paddingTop":["10px"],"paddingBottom":["10px"],"paddingRight":["12px"],"paddingLeft":["12px"],"borderStyle":"solid","borderWidth":"1px","borderColor":"#00000012","fontSize":["14px"]},"th":{"paddingTop":["6px"],"paddingBottom":["6px"],"paddingRight":["12px"],"paddingLeft":["12px"],"borderStyle":"solid","borderWidth":"1px","borderColor":"#00000012","fontSize":["16px"],"backgroundColor":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dlightbg, #cddceb21)"}},"styleAttributes":{"width":["100%"]}} -->
<table class="table-colors gsbp-e1d8ec8"><!-- wp:greenshift-blocks/element {"id":"gsbp-7b3afc3","tag":"tr","type":"inner","localId":"gsbp-7b3afc3"} -->
<tr><!-- wp:greenshift-blocks/element {"id":"gsbp-6ebf112","inlineCssStyles":"table td.gsbp-6ebf112{width:75px;}","tag":"td","type":"inner","localId":"gsbp-6ebf112","styleAttributes":{"width":["75px"]}} -->
<td class="gsbp-6ebf112"><!-- wp:greenshift-blocks/element {"id":"gsbp-d727d81","inlineCssStyles":".gsbp-d727d81{background-color:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dlightbox\u002d\u002dbackground-color, rgba(0, 0, 0, 0.8));}","type":"no","className":"color-table-color","localId":"gsbp-d727d81","styleAttributes":{"backgroundColor":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dlightbox\u002d\u002dbackground-color, rgba(0, 0, 0, 0.8))"]}} -->
<div class="color-table-color gsbp-d727d81"></div>
<!-- /wp:greenshift-blocks/element --></td>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-634485e","tag":"td","type":"inner","localId":"gsbp-634485e"} -->
<td><!-- wp:greenshift-blocks/element {"id":"gsbp-093d21d","inlineCssStyles":".gsbp-093d21d{color:#000000;}","textContent":"Lightbox Background","className":"color-title-table","localId":"gsbp-093d21d","styleAttributes":{"color":["#000000"]},"isVariation":"divtext"} -->
<div class="color-title-table gsbp-093d21d">Lightbox Background</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-5867640","inlineCssStyles":".gsbp-5867640{color:#000000;}","textContent":"\u002d\u002dwp\u002d\u002dcustom\u002d\u002dlightbox\u002d\u002dbackground-color","className":"color-var-table","localId":"gsbp-5867640","styleAttributes":{"color":["#000000"]},"isVariation":"divtext"} -->
<div class="color-var-table gsbp-5867640">--wp--custom--lightbox--background-color</div>
<!-- /wp:greenshift-blocks/element --></td>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-2638725","tag":"td","type":"inner","localId":"gsbp-2638725"} -->
<td><!-- wp:greenshift-blocks/element {"id":"gsbp-5a22f88","inlineCssStyles":".gsbp-5a22f88{color:#000000;}","textContent":"Lightbox Background","className":"color-table-desc","localId":"gsbp-5a22f88","styleAttributes":{"color":["#000000"]},"isVariation":"divtext"} -->
<div class="color-table-desc gsbp-5a22f88">Lightbox Background</div>
<!-- /wp:greenshift-blocks/element --></td>
<!-- /wp:greenshift-blocks/element --></tr>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-3fc15cf","tag":"tr","type":"inner","localId":"gsbp-3fc15cf"} -->
<tr><!-- wp:greenshift-blocks/element {"id":"gsbp-156eb2d","tag":"td","type":"inner","localId":"gsbp-156eb2d"} -->
<td><!-- wp:greenshift-blocks/element {"id":"gsbp-31ff865","inlineCssStyles":".gsbp-31ff865{background-color:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dlightbox\u002d\u002dclose-button\u002d\u002dbackground-color, rgba(0, 0, 0, 0.5));}","type":"no","className":"color-table-color","localId":"gsbp-31ff865","styleAttributes":{"backgroundColor":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dlightbox\u002d\u002dclose-button\u002d\u002dbackground-color, rgba(0, 0, 0, 0.5))"]}} -->
<div class="color-table-color gsbp-31ff865"></div>
<!-- /wp:greenshift-blocks/element --></td>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-91bdeb0","tag":"td","type":"inner","localId":"gsbp-91bdeb0"} -->
<td><!-- wp:greenshift-blocks/element {"id":"gsbp-9406b9e","inlineCssStyles":".gsbp-9406b9e{color:#000000;}","textContent":"Lighbox Close Button Background","className":"color-title-table","localId":"gsbp-9406b9e","styleAttributes":{"color":["#000000"]},"isVariation":"divtext"} -->
<div class="color-title-table gsbp-9406b9e">Lighbox Close Button Background</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-e0f71a2","inlineCssStyles":".gsbp-e0f71a2{color:#000000;}","textContent":"\u002d\u002dwp\u002d\u002dcustom\u002d\u002dlightbox\u002d\u002dclose-button\u002d\u002dbackground-color","className":"color-var-table","localId":"gsbp-e0f71a2","styleAttributes":{"color":["#000000"]},"isVariation":"divtext"} -->
<div class="color-var-table gsbp-e0f71a2">--wp--custom--lightbox--close-button--background-color</div>
<!-- /wp:greenshift-blocks/element --></td>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-1933ad6","tag":"td","type":"inner","localId":"gsbp-1933ad6"} -->
<td><!-- wp:greenshift-blocks/element {"id":"gsbp-5dada0b","inlineCssStyles":".gsbp-5dada0b{color:#000000;}","textContent":"Background for lightbox and sliding panel close buton","className":"color-table-desc","localId":"gsbp-5dada0b","styleAttributes":{"color":["#000000"]},"isVariation":"divtext"} -->
<div class="color-table-desc gsbp-5dada0b">Background for lightbox and sliding panel close buton</div>
<!-- /wp:greenshift-blocks/element --></td>
<!-- /wp:greenshift-blocks/element --></tr>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-63aab0e","tag":"tr","type":"inner","localId":"gsbp-63aab0e"} -->
<tr><!-- wp:greenshift-blocks/element {"id":"gsbp-459ae83","tag":"td","type":"inner","localId":"gsbp-459ae83"} -->
<td><!-- wp:greenshift-blocks/element {"id":"gsbp-1c918ad","inlineCssStyles":".gsbp-1c918ad{background-color:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dclose-button\u002d\u002dcolor, #ffffff);border-width:1px;border-style:solid;border-color:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dborder, #00000012);}","type":"no","className":"color-table-color","localId":"gsbp-1c918ad","styleAttributes":{"backgroundColor":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dclose-button\u002d\u002dcolor, #ffffff)"],"borderWidth":["1px"],"borderStyle":["solid"],"borderColor":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dborder, #00000012)"],"borderCustom_Extra":false,"borderLink_Extra":false}} -->
<div class="color-table-color gsbp-1c918ad"></div>
<!-- /wp:greenshift-blocks/element --></td>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-627cac8","tag":"td","type":"inner","localId":"gsbp-627cac8"} -->
<td><!-- wp:greenshift-blocks/element {"id":"gsbp-2cf49e8","inlineCssStyles":".gsbp-2cf49e8{color:#000000;}","textContent":"Lighbox Close button icon color","className":"color-title-table","localId":"gsbp-2cf49e8","styleAttributes":{"color":["#000000"]},"isVariation":"divtext"} -->
<div class="color-title-table gsbp-2cf49e8">Lighbox Close button icon color</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-0ce7a21","inlineCssStyles":".gsbp-0ce7a21{color:#000000;}","textContent":"\u002d\u002dwp\u002d\u002dcustom\u002d\u002dclose-button\u002d\u002dcolor","className":"color-var-table","localId":"gsbp-0ce7a21","styleAttributes":{"color":["#000000"]},"isVariation":"divtext"} -->
<div class="color-var-table gsbp-0ce7a21">--wp--custom--close-button--color</div>
<!-- /wp:greenshift-blocks/element --></td>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-1114e3c","tag":"td","type":"inner","localId":"gsbp-1114e3c"} -->
<td><!-- wp:greenshift-blocks/element {"id":"gsbp-fb487b6","inlineCssStyles":".gsbp-fb487b6{color:#000000;}","textContent":"Lighbox close button color","className":"color-table-desc","localId":"gsbp-fb487b6","styleAttributes":{"color":["#000000"]},"isVariation":"divtext"} -->
<div class="color-table-desc gsbp-fb487b6">Lighbox close button color</div>
<!-- /wp:greenshift-blocks/element --></td>
<!-- /wp:greenshift-blocks/element --></tr>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-3706c3a","tag":"tr","type":"inner","localId":"gsbp-3706c3a"} -->
<tr><!-- wp:greenshift-blocks/element {"id":"gsbp-907a3c4","tag":"td","type":"inner","localId":"gsbp-907a3c4"} -->
<td><!-- wp:greenshift-blocks/element {"id":"gsbp-a16442c","inlineCssStyles":".gsbp-a16442c{background-color:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dpanel\u002d\u002dbackground-color, #000);border-width:1px;border-style:solid;border-color:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dedges-color, #00000012);}","type":"no","className":"color-table-color","localId":"gsbp-a16442c","styleAttributes":{"backgroundColor":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dpanel\u002d\u002dbackground-color, #000)"],"borderWidth":["1px"],"borderStyle":["solid"],"borderColor":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dedges-color, #00000012)"],"borderCustom_Extra":false,"borderLink_Extra":false}} -->
<div class="color-table-color gsbp-a16442c"></div>
<!-- /wp:greenshift-blocks/element --></td>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-4c21d58","tag":"td","type":"inner","localId":"gsbp-4c21d58"} -->
<td><!-- wp:greenshift-blocks/element {"id":"gsbp-82fb78d","inlineCssStyles":".gsbp-82fb78d{color:#000000;}","textContent":"Sliding panel background","className":"color-title-table","localId":"gsbp-82fb78d","styleAttributes":{"color":["#000000"]},"isVariation":"divtext"} -->
<div class="color-title-table gsbp-82fb78d">Sliding panel background</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-22b6a05","inlineCssStyles":".gsbp-22b6a05{color:#000000;}","textContent":"\u002d\u002dwp\u002d\u002dcustom\u002d\u002dpanel\u002d\u002dbackground-color","className":"color-var-table","localId":"gsbp-22b6a05","styleAttributes":{"color":["#000000"]},"isVariation":"divtext"} -->
<div class="color-var-table gsbp-22b6a05">--wp--custom--panel--background-color</div>
<!-- /wp:greenshift-blocks/element --></td>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-16d7f2c","tag":"td","type":"inner","localId":"gsbp-16d7f2c"} -->
<td><!-- wp:greenshift-blocks/element {"id":"gsbp-2cc734f","inlineCssStyles":".gsbp-2cc734f{color:#000000;}","textContent":"Sliding panel default background color","className":"color-table-desc","localId":"gsbp-2cc734f","styleAttributes":{"color":["#000000"]},"isVariation":"divtext"} -->
<div class="color-table-desc gsbp-2cc734f">Sliding panel default background color</div>
<!-- /wp:greenshift-blocks/element --></td>
<!-- /wp:greenshift-blocks/element --></tr>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-0ebbdb7","tag":"tr","type":"inner","localId":"gsbp-0ebbdb7"} -->
<tr><!-- wp:greenshift-blocks/element {"id":"gsbp-73908c1","tag":"td","type":"inner","localId":"gsbp-73908c1"} -->
<td><!-- wp:greenshift-blocks/element {"id":"gsbp-eefe6e0","inlineCssStyles":".gsbp-eefe6e0{background-color:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dpanel\u002d\u002dcolor, #fff);border-width:1px;border-style:solid;border-color:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dedges-color, #00000012);}","type":"no","className":"color-table-color","localId":"gsbp-eefe6e0","styleAttributes":{"backgroundColor":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dpanel\u002d\u002dcolor, #fff)"],"borderWidth":["1px"],"borderStyle":["solid"],"borderColor":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dedges-color, #00000012)"],"borderCustom_Extra":false,"borderLink_Extra":false}} -->
<div class="color-table-color gsbp-eefe6e0"></div>
<!-- /wp:greenshift-blocks/element --></td>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-4315203","tag":"td","type":"inner","localId":"gsbp-4315203"} -->
<td><!-- wp:greenshift-blocks/element {"id":"gsbp-5d3f668","inlineCssStyles":".gsbp-5d3f668{color:#000000;}","textContent":"Sliding panel text color","className":"color-title-table","localId":"gsbp-5d3f668","styleAttributes":{"color":["#000000"]},"isVariation":"divtext"} -->
<div class="color-title-table gsbp-5d3f668">Sliding panel text color</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-2d361e7","inlineCssStyles":".gsbp-2d361e7{color:#000000;}","textContent":"\u002d\u002dwp\u002d\u002dcustom\u002d\u002dpanel\u002d\u002dcolor","className":"color-var-table","localId":"gsbp-2d361e7","styleAttributes":{"color":["#000000"]},"isVariation":"divtext"} -->
<div class="color-var-table gsbp-2d361e7">--wp--custom--panel--color</div>
<!-- /wp:greenshift-blocks/element --></td>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-5b45afd","tag":"td","type":"inner","localId":"gsbp-5b45afd"} -->
<td><!-- wp:greenshift-blocks/element {"id":"gsbp-9ddffcf","inlineCssStyles":".gsbp-9ddffcf{color:#000000;}","textContent":"Sliding panel Text default color","className":"color-table-desc","localId":"gsbp-9ddffcf","styleAttributes":{"color":["#000000"]},"isVariation":"divtext"} -->
<div class="color-table-desc gsbp-9ddffcf">Sliding panel Text default color</div>
<!-- /wp:greenshift-blocks/element --></td>
<!-- /wp:greenshift-blocks/element --></tr>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-87993da","tag":"tr","type":"inner","localId":"gsbp-87993da"} -->
<tr><!-- wp:greenshift-blocks/element {"id":"gsbp-a6e98c6","tag":"td","type":"inner","localId":"gsbp-a6e98c6"} -->
<td><!-- wp:greenshift-blocks/element {"id":"gsbp-c240192","inlineCssStyles":".gsbp-c240192{background-color:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dpanel\u002d\u002dcolor-a, #fff);border-width:1px;border-style:solid;border-color:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dedges-color, #00000012);}","type":"no","className":"color-table-color","localId":"gsbp-c240192","styleAttributes":{"backgroundColor":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dpanel\u002d\u002dcolor-a, #fff)"],"borderWidth":["1px"],"borderStyle":["solid"],"borderColor":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dedges-color, #00000012)"],"borderCustom_Extra":false,"borderLink_Extra":false}} -->
<div class="color-table-color gsbp-c240192"></div>
<!-- /wp:greenshift-blocks/element --></td>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-bb74ee3","tag":"td","type":"inner","localId":"gsbp-bb74ee3"} -->
<td><!-- wp:greenshift-blocks/element {"id":"gsbp-123ab97","inlineCssStyles":".gsbp-123ab97{color:#000000;}","textContent":"Sliding panel links color","className":"color-title-table","localId":"gsbp-123ab97","styleAttributes":{"color":["#000000"]},"isVariation":"divtext"} -->
<div class="color-title-table gsbp-123ab97">Sliding panel links color</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-7030a26","inlineCssStyles":".gsbp-7030a26{color:#000000;}","textContent":"\u002d\u002dwp\u002d\u002dcustom\u002d\u002dpanel\u002d\u002dcolor-a","className":"color-var-table","localId":"gsbp-7030a26","styleAttributes":{"color":["#000000"]},"isVariation":"divtext"} -->
<div class="color-var-table gsbp-7030a26">--wp--custom--panel--color-a</div>
<!-- /wp:greenshift-blocks/element --></td>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-ad74869","tag":"td","type":"inner","localId":"gsbp-ad74869"} -->
<td><!-- wp:greenshift-blocks/element {"id":"gsbp-e875b5b","inlineCssStyles":".gsbp-e875b5b{color:#000000;}","textContent":"Sliding panel Links default color","className":"color-table-desc","localId":"gsbp-e875b5b","styleAttributes":{"color":["#000000"]},"isVariation":"divtext"} -->
<div class="color-table-desc gsbp-e875b5b">Sliding panel Links default color</div>
<!-- /wp:greenshift-blocks/element --></td>
<!-- /wp:greenshift-blocks/element --></tr>
<!-- /wp:greenshift-blocks/element --></table>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-b88c20f","anchor":"extra","inlineCssStyles":".gsbp-b88c20f{color:#000000;}","type":"inner","localId":"gsbp-b88c20f","align":"wide","styleAttributes":{"color":["#000000"]},"metadata":{"name":"Extra"}} -->
<div class="gsbp-b88c20f alignwide" id="extra"><!-- wp:greenshift-blocks/element {"id":"gsbp-f0f0611","inlineCssStyles":".gsbp-f0f0611{color:#000000;}","dynamicGClasses":[{"value":"brand-panel-wrap","type":"local","label":"brand-panel-wrap","localed":false,"css":"","attributes":[],"originalID":"gspb-DTHotu2","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"brand-panel-wrap","localId":"gsbp-f0f0611","align":"wide","styleAttributes":{"color":["#000000"]},"metadata":{"name":"Title"}} -->
<div class="brand-panel-wrap gsbp-f0f0611 alignwide"><!-- wp:greenshift-blocks/element {"id":"gsbp-8adb8d3","inlineCssStyles":".gsbp-8adb8d3{color:#000000;}","dynamicGClasses":[{"value":"brand-panel-title","type":"local","label":"brand-panel-title","localed":false,"css":"","attributes":[],"originalID":"gsbp-7bc0611","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"textContent":"Components","tag":"h2","className":"brand-panel-title","localId":"gsbp-8adb8d3","styleAttributes":{"color":["#000000"]},"isVariation":"divtext"} -->
<h2 class="brand-panel-title gsbp-8adb8d3">Components</h2>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-b8a7902","inlineCssStyles":".gsbp-b8a7902{display:flex;flex-direction:column;column-gap:0px;row-gap:0px;justify-content:flex-start;color:rgba(0,0,0,1);}","type":"inner","localId":"gsbp-b8a7902","styleAttributes":{"display":["flex"],"flexDirection":["column"],"columnGap":["0px"],"rowGap":["0px"],"justifyContent":["flex-start"],"color":["rgba(0,0,0,1)"]}} -->
<div class="gsbp-b8a7902"><!-- wp:greenshift-blocks/element {"id":"gsbp-b3a2b48","inlineCssStyles":".gsbp-b3a2b48{color:#000000;}","dynamicGClasses":[{"value":"brand-panel-subtitle","type":"local","label":"brand-panel-subtitle","localed":false,"css":"","attributes":[],"originalID":"gspb-7UE8MMY","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"textContent":"Framework Components","className":"brand-panel-subtitle","localId":"gsbp-b3a2b48","styleAttributes":{"color":["#000000"]}} -->
<div class="brand-panel-subtitle gsbp-b3a2b48">Framework Components</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-7fb0ca5","inlineCssStyles":".gsbp-7fb0ca5{color:#000000;}","dynamicGClasses":[{"value":"brand-panel-subsub","type":"local","label":"brand-panel-subsub","localed":false,"css":"","attributes":[],"originalID":"gspb-gf0ZxC0","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"textContent":"Extra Presets","className":"brand-panel-subsub","localId":"gsbp-7fb0ca5","styleAttributes":{"color":["#000000"]}} -->
<div class="brand-panel-subsub gsbp-7fb0ca5">Extra Presets</div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-bcac596","inlineCssStyles":".gsbp-bcac596{color:#000000;}","dynamicGClasses":[{"value":"brand-panel-content","type":"local","label":"brand-panel-content","localed":false,"css":"","attributes":[],"originalID":"gspb-ZzWr1uD","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"brand-panel-content","localId":"gsbp-bcac596","align":"wide","styleAttributes":{"color":["#000000"]},"metadata":{"name":"Content"}} -->
<div class="brand-panel-content gsbp-bcac596 alignwide"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading" id="button-components">Button Components </h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>They has three variants: Brand Color, Secondary Color, Custom Color</p>
<!-- /wp:paragraph -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-aebdd86","inlineCssStyles":".gsbp-aebdd86{color:#000000;display:flex;flex-direction:row;column-gap:20px;row-gap:20px;}","type":"inner","localId":"gsbp-aebdd86","styleAttributes":{"color":["#000000"],"display":["flex"],"flexDirection":["row"],"columnGap":["20px"],"rowGap":["20px"]}} -->
<div class="gsbp-aebdd86"><!-- wp:greenshift-blocks/element {"id":"gsbp-1fe4d50","inlineCssStyles":".gs_button_w_icon{text-decoration:none;display:inline-block;position:relative;overflow:hidden;border-bottom-left-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dbutton\u002d\u002dborder-radius, var(\u002d\u002dwp-custom\u002d\u002dborder-radius\u002d\u002dmedium, 15px));border-bottom-right-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dbutton\u002d\u002dborder-radius, var(\u002d\u002dwp-custom\u002d\u002dborder-radius\u002d\u002dmedium, 15px));border-top-left-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dbutton\u002d\u002dborder-radius, var(\u002d\u002dwp-custom\u002d\u002dborder-radius\u002d\u002dmedium, 15px));border-top-right-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dbutton\u002d\u002dborder-radius, var(\u002d\u002dwp-custom\u002d\u002dborder-radius\u002d\u002dmedium, 15px));padding-top:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dbutton\u002d\u002dspacing\u002d\u002dvertical, var(\u002d\u002dwp-preset\u002d\u002dspacing\u002d\u002d40, 1rem));padding-bottom:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dbutton\u002d\u002dspacing\u002d\u002dvertical, var(\u002d\u002dwp-preset\u002d\u002dspacing\u002d\u002d40, 1rem));padding-right:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dbutton\u002d\u002dspacing\u002d\u002dhorizontal, var(\u002d\u002dwp-preset\u002d\u002dspacing\u002d\u002d60, 2.25rem));padding-left:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dbutton\u002d\u002dspacing\u002d\u002dhorizontal, var(\u002d\u002dwp-preset\u002d\u002dspacing\u002d\u002d60, 2.25rem));background-color:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dbutton\u002d\u002dbackground, var(\u002d\u002dwp-preset\u002d\u002dcolor\u002d\u002dbrand, #33EFAB));color:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dbutton\u002d\u002dtext, var(\u002d\u002dwp-preset\u002d\u002dcolor\u002d\u002dtext-on-brand, #000002));}.gs_button_w_icon:hover{color:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dbutton\u002d\u002dtext-hover, var(\u002d\u002dwp-preset\u002d\u002dcolor\u002d\u002dtext-on-brand-hover, #000003));}.gs_button_w_icon svg{width:0px;height:15px;fill:currentColor;transition:all 0.5s ease;transform:rotate(-45deg);margin-left:15px;}.gs_button_w_icon svg:hover{margin-left:10px;}.gs_button_w_icon .gl-button-overlay{background-color:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dbutton\u002d\u002dbackground-hover, var(\u002d\u002dwp-preset\u002d\u002dcolor\u002d\u002dbrand-hover, #7AFFCE));position:absolute;top:0px;left:0px;bottom:0px;right:0px;z-index:0;}.gs_button_w_icon:hover svg{transform:translateX(5px) scale(1.05) rotate(0deg);width:15px;}.gs_button_w_icon.gs_icon_always svg{width:15px;}.gs_button_w_icon .gl-button-flex{display:flex;flex-direction:row;align-items:center;position:relative;z-index:1;}.gs_button_w_icon.gs_button_secondary{background-color:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dbutton\u002d\u002dsecondary-background, var(\u002d\u002dwp-preset\u002d\u002dcolor\u002d\u002dsecondary, #340fa0));color:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dbutton\u002d\u002dsecondary-text, var(\u002d\u002dwp-preset\u002d\u002dcolor\u002d\u002dtext-on-secondary, #fffffc));}.gs_button_w_icon.gs_button_secondary:hover{color:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dbutton\u002d\u002dsecondary-text-hover, var(\u002d\u002dwp-preset\u002d\u002dcolor\u002d\u002dtext-on-secondary-hover, #fffffd));}.gs_button_w_icon.gs_button_secondary .gl-button-overlay{background-color:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dbutton\u002d\u002dsecondary-background-hover, var(\u002d\u002dwp-preset\u002d\u002dcolor\u002d\u002dsecondary-hover, #441999));}.gs_button_w_icon.gs_button_secondary svg.brand_svg_color{fill:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dbutton\u002d\u002dbackground-hover, var(\u002d\u002dwp-preset\u002d\u002dcolor\u002d\u002dbrand-hover, #7AFFCE));}.gs_button_w_icon.gs_button_custom_color .gl-button-overlay{background-color:#000000;}.gs_button_w_icon.gs_button_custom_color{background-color:#1A3138;color:#ffffff;}","dynamicGClasses":[{"value":"gs-parent-hover","type":"preset","label":"gs-parent-hover"},{"value":"gs_button_w_icon","type":"local","label":"gs_button_w_icon","localed":false,"css":".gs_button_w_icon{text-decoration:none;display:inline-block;position:relative;overflow:hidden;border-bottom-left-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dbutton\u002d\u002dborder-radius, var(\u002d\u002dwp-custom\u002d\u002dborder-radius\u002d\u002dmedium, 15px));border-bottom-right-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dbutton\u002d\u002dborder-radius, var(\u002d\u002dwp-custom\u002d\u002dborder-radius\u002d\u002dmedium, 15px));border-top-left-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dbutton\u002d\u002dborder-radius, var(\u002d\u002dwp-custom\u002d\u002dborder-radius\u002d\u002dmedium, 15px));border-top-right-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dbutton\u002d\u002dborder-radius, var(\u002d\u002dwp-custom\u002d\u002dborder-radius\u002d\u002dmedium, 15px));padding-top:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dbutton\u002d\u002dspacing\u002d\u002dvertical, var(\u002d\u002dwp-preset\u002d\u002dspacing\u002d\u002d40, 1rem));padding-bottom:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dbutton\u002d\u002dspacing\u002d\u002dvertical, var(\u002d\u002dwp-preset\u002d\u002dspacing\u002d\u002d40, 1rem));padding-right:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dbutton\u002d\u002dspacing\u002d\u002dhorizontal, var(\u002d\u002dwp-preset\u002d\u002dspacing\u002d\u002d60, 2.25rem));padding-left:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dbutton\u002d\u002dspacing\u002d\u002dhorizontal, var(\u002d\u002dwp-preset\u002d\u002dspacing\u002d\u002d60, 2.25rem));background-color:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dbutton\u002d\u002dbackground, var(\u002d\u002dwp-preset\u002d\u002dcolor\u002d\u002dbrand, #33EFAB));color:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dbutton\u002d\u002dtext, var(\u002d\u002dwp-preset\u002d\u002dcolor\u002d\u002dtext-on-brand, #000002));}.gs_button_w_icon:hover{color:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dbutton\u002d\u002dtext-hover, var(\u002d\u002dwp-preset\u002d\u002dcolor\u002d\u002dtext-on-brand-hover, #000003));}","attributes":{"styleAttributes":{"textDecoration":["none"],"display":["inline-block"],"position":["relative"],"overflow":["hidden"],"color_hover":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dbutton\u002d\u002dtext-hover, var(\u002d\u002dwp-preset\u002d\u002dcolor\u002d\u002dtext-on-brand-hover, #000003))"],"borderBottomLeftRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dbutton\u002d\u002dborder-radius, var(\u002d\u002dwp-custom\u002d\u002dborder-radius\u002d\u002dmedium, 15px))"],"borderBottomRightRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dbutton\u002d\u002dborder-radius, var(\u002d\u002dwp-custom\u002d\u002dborder-radius\u002d\u002dmedium, 15px))"],"borderTopLeftRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dbutton\u002d\u002dborder-radius, var(\u002d\u002dwp-custom\u002d\u002dborder-radius\u002d\u002dmedium, 15px))"],"borderTopRightRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dbutton\u002d\u002dborder-radius, var(\u002d\u002dwp-custom\u002d\u002dborder-radius\u002d\u002dmedium, 15px))"],"borderRadiusCustom_Extra":false,"borderRadiusLink_Extra":true,"paddingTop":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dbutton\u002d\u002dspacing\u002d\u002dvertical, var(\u002d\u002dwp-preset\u002d\u002dspacing\u002d\u002d40, 1rem))"],"paddingBottom":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dbutton\u002d\u002dspacing\u002d\u002dvertical, var(\u002d\u002dwp-preset\u002d\u002dspacing\u002d\u002d40, 1rem))"],"paddingRight":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dbutton\u002d\u002dspacing\u002d\u002dhorizontal, var(\u002d\u002dwp-preset\u002d\u002dspacing\u002d\u002d60, 2.25rem))"],"paddingLeft":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dbutton\u002d\u002dspacing\u002d\u002dhorizontal, var(\u002d\u002dwp-preset\u002d\u002dspacing\u002d\u002d60, 2.25rem))"],"backgroundColor":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dbutton\u002d\u002dbackground, var(\u002d\u002dwp-preset\u002d\u002dcolor\u002d\u002dbrand, #33EFAB))"],"color":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dbutton\u002d\u002dtext, var(\u002d\u002dwp-preset\u002d\u002dcolor\u002d\u002dtext-on-brand, #000002))"]}},"originalBlock":"greenshift-blocks/element","selectors":[{"value":" svg","attributes":{"styleAttributes":{"width":["0px"],"height":["15px"],"fill":["currentColor"],"marginLeft_hover":["10px"],"transition":["all 0.5s ease"],"transformLink_Extra":{"rotate":true},"rotate_Extra":["-45"],"transform":["rotate(-45deg)"],"marginLeft":["15px"]}},"css":".gs_button_w_icon svg{width:0px;height:15px;fill:currentColor;transition:all 0.5s ease;transform:rotate(-45deg);margin-left:15px;}.gs_button_w_icon svg:hover{margin-left:10px;}"},{"value":" .gl-button-overlay","attributes":{"styleAttributes":{"backgroundColor":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dbutton\u002d\u002dbackground-hover, var(\u002d\u002dwp-preset\u002d\u002dcolor\u002d\u002dbrand-hover, #7AFFCE))"],"position":["absolute"],"top":["0px"],"left":["0px"],"bottom":["0px"],"right":["0px"],"zIndex":["0"]}},"css":".gs_button_w_icon .gl-button-overlay{background-color:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dbutton\u002d\u002dbackground-hover, var(\u002d\u002dwp-preset\u002d\u002dcolor\u002d\u002dbrand-hover, #7AFFCE));position:absolute;top:0px;left:0px;bottom:0px;right:0px;z-index:0;}"},{"value":":hover svg","attributes":{"styleAttributes":{"transformLink_Extra":{"rotate":true,"scale":true,"translateX":true},"rotate_Extra":["0"],"transform":["translateX(5px) scale(1.05) rotate(0deg)"],"scale_Extra":["1.05"],"width":["15px"],"translateX_Extra":["5px"]}},"css":".gs_button_w_icon:hover svg{transform:translateX(5px) scale(1.05) rotate(0deg);width:15px;}"},{"value":".gs_icon_always svg","attributes":{"styleAttributes":{"width":["15px"]}},"css":".gs_button_w_icon.gs_icon_always svg{width:15px;}"},{"value":" .gl-button-flex","attributes":{"styleAttributes":{"display":["flex"],"flexDirection":["row"],"alignItems":["center"],"position":["relative"],"zIndex":["1"]}},"css":".gs_button_w_icon .gl-button-flex{display:flex;flex-direction:row;align-items:center;position:relative;z-index:1;}"},{"value":".gs_button_secondary","attributes":{"styleAttributes":{"backgroundColor":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dbutton\u002d\u002dsecondary-background, var(\u002d\u002dwp-preset\u002d\u002dcolor\u002d\u002dsecondary, #340fa0))"],"color":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dbutton\u002d\u002dsecondary-text, var(\u002d\u002dwp-preset\u002d\u002dcolor\u002d\u002dtext-on-secondary, #fffffc))"],"color_hover":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dbutton\u002d\u002dsecondary-text-hover, var(\u002d\u002dwp-preset\u002d\u002dcolor\u002d\u002dtext-on-secondary-hover, #fffffd))"]}},"css":".gs_button_w_icon.gs_button_secondary{background-color:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dbutton\u002d\u002dsecondary-background, var(\u002d\u002dwp-preset\u002d\u002dcolor\u002d\u002dsecondary, #340fa0));color:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dbutton\u002d\u002dsecondary-text, var(\u002d\u002dwp-preset\u002d\u002dcolor\u002d\u002dtext-on-secondary, #fffffc));}.gs_button_w_icon.gs_button_secondary:hover{color:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dbutton\u002d\u002dsecondary-text-hover, var(\u002d\u002dwp-preset\u002d\u002dcolor\u002d\u002dtext-on-secondary-hover, #fffffd));}"},{"value":".gs_button_secondary .gl-button-overlay","attributes":{"styleAttributes":{"backgroundColor":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dbutton\u002d\u002dsecondary-background-hover, var(\u002d\u002dwp-preset\u002d\u002dcolor\u002d\u002dsecondary-hover, #441999))"]}},"css":".gs_button_w_icon.gs_button_secondary .gl-button-overlay{background-color:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dbutton\u002d\u002dsecondary-background-hover, var(\u002d\u002dwp-preset\u002d\u002dcolor\u002d\u002dsecondary-hover, #441999));}"},{"value":".gs_button_secondary svg.brand_svg_color","attributes":{"styleAttributes":{"fill":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dbutton\u002d\u002dbackground-hover, var(\u002d\u002dwp-preset\u002d\u002dcolor\u002d\u002dbrand-hover, #7AFFCE))"]}},"css":".gs_button_w_icon.gs_button_secondary svg.brand_svg_color{fill:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dbutton\u002d\u002dbackground-hover, var(\u002d\u002dwp-preset\u002d\u002dcolor\u002d\u002dbrand-hover, #7AFFCE));}"},{"value":".gs_button_custom_color .gl-button-overlay","attributes":{"styleAttributes":{"backgroundColor":["#000000"]}},"css":".gs_button_w_icon.gs_button_custom_color .gl-button-overlay{background-color:#000000;}"},{"value":".gs_button_custom_color","attributes":{"styleAttributes":{"backgroundColor":["#1A3138"],"color":["#ffffff"]}},"css":".gs_button_w_icon.gs_button_custom_color{background-color:#1A3138;color:#ffffff;}"}]}],"tag":"a","type":"inner","className":"gs-parent-hover gs_button_w_icon gs_icon_always","localId":"gsbp-1fe4d50","href":"#","dynamicAttributes":[{"name":"data-type","value":"button-icon-component"}],"isVariation":"buttoncomponenticon"} -->
<a class="gs-parent-hover gs_button_w_icon gs_icon_always" href="#" data-type="button-icon-component"><!-- wp:greenshift-blocks/element {"id":"gsbp-e9805c5","inlineCssStyles":".gsbp-e9805c5{display:flex;flex-direction:row;align-items:center;position:relative;z-index:1;}","tag":"span","type":"inner","className":"","localId":"gsbp-e9805c5","styleAttributes":{"display":["flex"],"flexDirection":["row"],"alignItems":["center"],"position":["relative"],"zIndex":["1"]},"metadata":{"name":"Content Area"}} -->
<span class="gsbp-e9805c5"><!-- wp:greenshift-blocks/element {"id":"gsbp-60a5f14","textContent":"Download for Free!","tag":"span","localId":"gsbp-60a5f14"} -->
<span>Download for Free!</span>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-c3e01ba","tag":"svg","icon":{"icon":{"font":"rhicon rhi-arrow-right","svg":"","image":""},"type":"font"},"localId":"gsbp-c3e01ba"} -->
<svg viewBox="0 0 896 1024" width="896" height="1024"><path d="M436.202 76.202l-39.598 39.598c-9.372 9.372-9.372 24.568 0 33.942l310.26 310.258h-682.864c-13.254 0-24 10.746-24 24v56c0 13.254 10.746 24 24 24h682.864l-310.26 310.26c-9.372 9.372-9.372 24.568 0 33.942l39.598 39.598c9.372 9.372 24.568 9.372 33.942 0l418.828-418.828c9.372-9.372 9.372-24.568 0-33.942l-418.83-418.828c-9.372-9.374-24.568-9.374-33.94 0z" /></svg>
<!-- /wp:greenshift-blocks/element --></span>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-40eea18","inlineCssStyles":".gsbp-40eea18{transition-duration:0.8s;}.gsbp-40eea18{transition-timing-function:cubic-bezier(.77,0,.18,1);}.gsbp-40eea18{transition-property: transform;}.gs-parent-hover:hover .gsbp-40eea18{transform: translateZ(0)}.gsbp-40eea18{transform: var(\u002d\u002dgs-root-animation-transform, translate3d(-100%, 0, 0));}","tag":"span","type":"no","animation":{"duration":800,"easing":"ease-creative","type":"slide-right","onhover_active":true},"className":"gl-button-overlay","localId":"gsbp-40eea18","metadata":{"name":"Overlay"}} -->
<span data-aos-easing="ease-creative" data-aos-duration="800" class="gl-button-overlay gsbp-40eea18"></span>
<!-- /wp:greenshift-blocks/element --></a>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-6064923","inlineCssStyles":"","dynamicGClasses":[{"value":"gs-parent-hover","type":"preset","label":"gs-parent-hover"},{"value":"gs_button_w_icon","type":"local","label":"gs_button_w_icon","localed":false,"css":"","attributes":[],"originalBlock":"greenshift-blocks/element","selectors":[]}],"tag":"a","type":"inner","className":"gs-parent-hover gs_button_w_icon gs_icon_always gs_button_secondary","localId":"gsbp-6064923","href":"#","dynamicAttributes":[{"name":"data-type","value":"button-icon-component"}],"isVariation":"buttoncomponenticon"} -->
<a class="gs-parent-hover gs_button_w_icon gs_icon_always gs_button_secondary" href="#" data-type="button-icon-component"><!-- wp:greenshift-blocks/element {"id":"gsbp-5b0c026","inlineCssStyles":".gsbp-5b0c026{display:flex;flex-direction:row;align-items:center;position:relative;z-index:1;}","tag":"span","type":"inner","className":"","localId":"gsbp-5b0c026","styleAttributes":{"display":["flex"],"flexDirection":["row"],"alignItems":["center"],"position":["relative"],"zIndex":["1"]},"metadata":{"name":"Content Area"}} -->
<span class="gsbp-5b0c026"><!-- wp:greenshift-blocks/element {"id":"gsbp-121cb36","textContent":"Download for Free!","tag":"span","localId":"gsbp-121cb36"} -->
<span>Download for Free!</span>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-e7350f1","tag":"svg","icon":{"icon":{"font":"rhicon rhi-arrow-right","svg":"","image":""},"type":"font"},"localId":"gsbp-e7350f1"} -->
<svg viewBox="0 0 896 1024" width="896" height="1024"><path d="M436.202 76.202l-39.598 39.598c-9.372 9.372-9.372 24.568 0 33.942l310.26 310.258h-682.864c-13.254 0-24 10.746-24 24v56c0 13.254 10.746 24 24 24h682.864l-310.26 310.26c-9.372 9.372-9.372 24.568 0 33.942l39.598 39.598c9.372 9.372 24.568 9.372 33.942 0l418.828-418.828c9.372-9.372 9.372-24.568 0-33.942l-418.83-418.828c-9.372-9.374-24.568-9.374-33.94 0z" /></svg>
<!-- /wp:greenshift-blocks/element --></span>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-6e4da15","inlineCssStyles":".gsbp-6e4da15{transition-duration:0.8s;}.gsbp-6e4da15{transition-timing-function:cubic-bezier(.77,0,.18,1);}.gsbp-6e4da15{transition-property: transform;}.gs-parent-hover:hover .gsbp-6e4da15{transform: translateZ(0)}.gsbp-6e4da15{transform: var(\u002d\u002dgs-root-animation-transform, translate3d(-100%, 0, 0));}","tag":"span","type":"no","animation":{"duration":800,"easing":"ease-creative","type":"slide-right","onhover_active":true},"className":"gl-button-overlay","localId":"gsbp-6e4da15","metadata":{"name":"Overlay"}} -->
<span data-aos-easing="ease-creative" data-aos-duration="800" class="gl-button-overlay gsbp-6e4da15"></span>
<!-- /wp:greenshift-blocks/element --></a>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-5d19cfc","inlineCssStyles":"","dynamicGClasses":[{"value":"gs-parent-hover","type":"preset","label":"gs-parent-hover"},{"value":"gs_button_w_icon","type":"local","label":"gs_button_w_icon","localed":false,"css":"","attributes":[],"originalBlock":"greenshift-blocks/element","selectors":[]}],"tag":"a","type":"inner","className":"gs-parent-hover gs_button_w_icon gs_icon_always gs_button_custom_color","localId":"gsbp-5d19cfc","href":"#","dynamicAttributes":[{"name":"data-type","value":"button-icon-component"}],"isVariation":"buttoncomponenticon"} -->
<a class="gs-parent-hover gs_button_w_icon gs_icon_always gs_button_custom_color" href="#" data-type="button-icon-component"><!-- wp:greenshift-blocks/element {"id":"gsbp-ba28619","inlineCssStyles":".gsbp-ba28619{display:flex;flex-direction:row;align-items:center;position:relative;z-index:1;}","tag":"span","type":"inner","className":"","localId":"gsbp-ba28619","styleAttributes":{"display":["flex"],"flexDirection":["row"],"alignItems":["center"],"position":["relative"],"zIndex":["1"]},"metadata":{"name":"Content Area"}} -->
<span class="gsbp-ba28619"><!-- wp:greenshift-blocks/element {"id":"gsbp-eee0a0c","textContent":"Download for Free!","tag":"span","localId":"gsbp-eee0a0c"} -->
<span>Download for Free!</span>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-d443dd1","tag":"svg","icon":{"icon":{"font":"rhicon rhi-arrow-right","svg":"","image":""},"type":"font"},"localId":"gsbp-d443dd1"} -->
<svg viewBox="0 0 896 1024" width="896" height="1024"><path d="M436.202 76.202l-39.598 39.598c-9.372 9.372-9.372 24.568 0 33.942l310.26 310.258h-682.864c-13.254 0-24 10.746-24 24v56c0 13.254 10.746 24 24 24h682.864l-310.26 310.26c-9.372 9.372-9.372 24.568 0 33.942l39.598 39.598c9.372 9.372 24.568 9.372 33.942 0l418.828-418.828c9.372-9.372 9.372-24.568 0-33.942l-418.83-418.828c-9.372-9.374-24.568-9.374-33.94 0z" /></svg>
<!-- /wp:greenshift-blocks/element --></span>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-dd35a34","inlineCssStyles":".gsbp-dd35a34{transition-duration:0.8s;}.gsbp-dd35a34{transition-timing-function:cubic-bezier(.77,0,.18,1);}.gsbp-dd35a34{transition-property: transform;}.gs-parent-hover:hover .gsbp-dd35a34{transform: translateZ(0)}.gsbp-dd35a34{transform: var(\u002d\u002dgs-root-animation-transform, translate3d(-100%, 0, 0));}","tag":"span","type":"no","animation":{"duration":800,"easing":"ease-creative","type":"slide-right","onhover_active":true},"className":"gl-button-overlay","localId":"gsbp-dd35a34","metadata":{"name":"Overlay"}} -->
<span data-aos-easing="ease-creative" data-aos-duration="800" class="gl-button-overlay gsbp-dd35a34"></span>
<!-- /wp:greenshift-blocks/element --></a>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:paragraph -->
<p>Buttons use existed variables for colors, spacing, border, so they are inheriting variables, but you can also use specific variables special for buttons</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><em>--wp--custom--button--background</em> - brand button color<br><em>--wp--custom--button--background-hover</em> - brand hover button color<br><em>--wp--custom--button--text</em> - button text<br><em>--wp--custom--button--text-hover</em> - button text hover<br><em>--wp--custom--button--secondary</em> - secondary button color<br><em>--wp--custom--button--secondary-hover</em> - secondary hover button color<br><em>--wp--custom--button--secondary-text</em> - secondary button text<br><em>--wp--custom--button--secondary-text-hover</em> - secondary button text hover<br><em>--wp--custom--button--border-radius</em> - button border radius<br><em>--wp--custom--button--spacing--horizontal</em> - button horizontal spacing<br><em>--wp--custom--button--spacing--vertical</em> - button vertical spacing</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading" id="section-element-component">Section Element Component</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Main and central part of content layout. Use next variables</p>
<!-- /wp:paragraph -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-be06515","inlineCssStyles":".gsbp-be06515{color:#000000;font-size:15px;line-height:20px;text-align:center;border-width:1px;border-style:solid;border-color:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dborder, #00000012);padding-top:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d40, 1rem);padding-bottom:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d40, 1rem);padding-right:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d40, 1rem);padding-left:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d40, 1rem);}","type":"inner","localId":"gsbp-be06515","styleAttributes":{"color":["#000000"],"fontSize":["15px"],"lineHeight":["20px"],"textAlign":["center"],"borderWidth":["1px"],"borderStyle":["solid"],"borderColor":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dborder, #00000012)"],"borderCustom_Extra":false,"borderLink_Extra":false,"paddingTop":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d40, 1rem)"],"paddingBottom":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d40, 1rem)"],"paddingRight":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d40, 1rem)"],"paddingLeft":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d40, 1rem)"]}} -->
<div class="gsbp-be06515"><!-- wp:greenshift-blocks/element {"id":"gsbp-a32b685","inlineCssStyles":".gsbp-a32b685{color:#000000;display:flex;}.gsbp-a32b685\u003e*:not(style):nth-of-type(3n+1){width:33.33%;}@media (max-width: 991.98px){.gsbp-a32b685\u003e*:not(style):nth-of-type(3n+1){width:33.33%;}}@media (max-width: 575.98px){.gsbp-a32b685\u003e*:not(style):nth-of-type(3n+1){width:33.33%;}}.gsbp-a32b685\u003e*:not(style):nth-of-type(3n+2){width:33.33%;}@media (max-width: 991.98px){.gsbp-a32b685\u003e*:not(style):nth-of-type(3n+2){width:33.33%;}}@media (max-width: 575.98px){.gsbp-a32b685\u003e*:not(style):nth-of-type(3n+2){width:33.33%;}}.gsbp-a32b685\u003e*:not(style):nth-of-type(3n+3){width:33.33%;}@media (max-width: 991.98px){.gsbp-a32b685\u003e*:not(style):nth-of-type(3n+3){width:33.33%;}}@media (max-width: 575.98px){.gsbp-a32b685\u003e*:not(style):nth-of-type(3n+3){width:33.33%;}}.gsbp-a32b685{flex-wrap:wrap;}","type":"inner","localId":"gsbp-a32b685","styleAttributes":{"color":["#000000"],"display":["flex"],"flexColumns_Extra":3,"flexWidths_Extra":{"desktop":{"name":"33/33/33","widths":[33.33,33.33,33.33]},"tablet":{"name":"33/33/33","widths":[33.33,33.33,33.33]},"mobile":{"name":"33/33/33","widths":[33.33,33.33,33.33]}}}} -->
<div class="gsbp-a32b685"><!-- wp:greenshift-blocks/element {"id":"gsbp-a054414","inlineCssStyles":".gsbp-a054414{color:#000000;}","type":"no","localId":"gsbp-a054414","styleAttributes":{"color":["#000000"]},"isVariation":"divtext"} -->
<div class="gsbp-a054414"></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-d47a5c9","inlineCssStyles":"","textContent":"\u002d\u002dwp\u002d\u002dcustom\u002d\u002dspacing\u002d\u002dtop, 0px","className":"gsbp-d47a5c9","localId":"gsbp-d47a5c9","isVariation":"divtext"} -->
<div class="gsbp-d47a5c9">--wp--custom--spacing--top, 0px</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-53abe84","inlineCssStyles":".gsbp-53abe84{color:#000000;}","type":"no","localId":"gsbp-53abe84","styleAttributes":{"color":["#000000"]},"isVariation":"divtext"} -->
<div class="gsbp-53abe84"></div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-aeb6036","inlineCssStyles":".gsbp-aeb6036{color:#000000;display:flex;}.gsbp-aeb6036\u003e*:not(style):nth-of-type(3n+1){width:21.774193548387096%;}@media (max-width: 991.98px){.gsbp-aeb6036\u003e*:not(style):nth-of-type(3n+1){width:33.33%;}}@media (max-width: 575.98px){.gsbp-aeb6036\u003e*:not(style):nth-of-type(3n+1){width:33.33%;}}.gsbp-aeb6036\u003e*:not(style):nth-of-type(3n+2){width:56.4516129032258%;}@media (max-width: 991.98px){.gsbp-aeb6036\u003e*:not(style):nth-of-type(3n+2){width:33.33%;}}@media (max-width: 575.98px){.gsbp-aeb6036\u003e*:not(style):nth-of-type(3n+2){width:33.33%;}}.gsbp-aeb6036\u003e*:not(style):nth-of-type(3n+3){width:21.764193548387105%;}@media (max-width: 991.98px){.gsbp-aeb6036\u003e*:not(style):nth-of-type(3n+3){width:33.33%;}}@media (max-width: 575.98px){.gsbp-aeb6036\u003e*:not(style):nth-of-type(3n+3){width:33.33%;}}.gsbp-aeb6036{flex-wrap:wrap;}","type":"inner","localId":"gsbp-aeb6036","styleAttributes":{"color":["#000000"],"display":["flex"],"flexColumns_Extra":3,"flexWidths_Extra":{"desktop":{"name":"33/33/33","widths":[21.774193548387096,56.4516129032258,21.764193548387105]},"tablet":{"name":"33/33/33","widths":[33.33,33.33,33.33]},"mobile":{"name":"33/33/33","widths":[33.33,33.33,33.33]}}}} -->
<div class="gsbp-aeb6036"><!-- wp:greenshift-blocks/element {"id":"gsbp-ff55755","inlineCssStyles":"","textContent":"\u002d\u002dwp\u002d\u002dcustom\u002d\u002dspacing\u002d\u002dside, \u003cbr\u003emin(3vw, 20px)","className":"gsbp-ff55755","localId":"gsbp-ff55755","isVariation":"divtext"} -->
<div class="gsbp-ff55755">--wp--custom--spacing--side, <br>min(3vw, 20px)</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-5313a69","inlineCssStyles":".gsbp-5313a69{padding-top:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d30, 0.67rem);padding-bottom:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d40, 1rem);padding-right:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d30, 0.67rem);padding-left:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d30, 0.67rem);}","textContent":"\u002d\u002dwp\u002d\u002dstyle\u002d\u002dglobal\u002d\u002dwide-size, 1200px","localId":"gsbp-5313a69","styleAttributes":{"paddingTop":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d30, 0.67rem)"],"paddingBottom":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d40, 1rem)"],"paddingRight":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d30, 0.67rem)"],"paddingLeft":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d30, 0.67rem)"]},"isVariation":"divtext"} -->
<div class="gsbp-5313a69">--wp--style--global--wide-size, 1200px</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-3233043","inlineCssStyles":"","textContent":"\u002d\u002dwp\u002d\u002dcustom\u002d\u002dspacing\u002d\u002dside, \u003cbr\u003emin(3vw, 20px)","className":"gsbp-3233043","localId":"gsbp-3233043","isVariation":"divtext"} -->
<div class="gsbp-3233043">--wp--custom--spacing--side, <br>min(3vw, 20px)</div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-1091351","inlineCssStyles":".gsbp-1091351{color:#000000;display:flex;}.gsbp-1091351\u003e*:not(style):nth-of-type(3n+1){width:33.33%;}@media (max-width: 991.98px){.gsbp-1091351\u003e*:not(style):nth-of-type(3n+1){width:33.33%;}}@media (max-width: 575.98px){.gsbp-1091351\u003e*:not(style):nth-of-type(3n+1){width:33.33%;}}.gsbp-1091351\u003e*:not(style):nth-of-type(3n+2){width:33.33%;}@media (max-width: 991.98px){.gsbp-1091351\u003e*:not(style):nth-of-type(3n+2){width:33.33%;}}@media (max-width: 575.98px){.gsbp-1091351\u003e*:not(style):nth-of-type(3n+2){width:33.33%;}}.gsbp-1091351\u003e*:not(style):nth-of-type(3n+3){width:33.33%;}@media (max-width: 991.98px){.gsbp-1091351\u003e*:not(style):nth-of-type(3n+3){width:33.33%;}}@media (max-width: 575.98px){.gsbp-1091351\u003e*:not(style):nth-of-type(3n+3){width:33.33%;}}.gsbp-1091351{flex-wrap:wrap;}","type":"inner","localId":"gsbp-1091351","styleAttributes":{"color":["#000000"],"display":["flex"],"flexColumns_Extra":3,"flexWidths_Extra":{"desktop":{"name":"33/33/33","widths":[33.33,33.33,33.33]},"tablet":{"name":"33/33/33","widths":[33.33,33.33,33.33]},"mobile":{"name":"33/33/33","widths":[33.33,33.33,33.33]}}}} -->
<div class="gsbp-1091351"><!-- wp:greenshift-blocks/element {"id":"gsbp-efaf8a7","inlineCssStyles":".gsbp-efaf8a7{color:#000000;}","type":"no","localId":"gsbp-efaf8a7","styleAttributes":{"color":["#000000"]},"isVariation":"divtext"} -->
<div class="gsbp-efaf8a7"></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-075ab1b","inlineCssStyles":"","textContent":"\u002d\u002dwp\u002d\u002dcustom\u002d\u002dspacing\u002d\u002dbottom, 0px","className":"gsbp-075ab1b","localId":"gsbp-075ab1b","isVariation":"divtext"} -->
<div class="gsbp-075ab1b">--wp--custom--spacing--bottom, 0px</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-af97f81","inlineCssStyles":".gsbp-af97f81{color:#000000;}","type":"no","localId":"gsbp-af97f81","styleAttributes":{"color":["#000000"]},"isVariation":"divtext"} -->
<div class="gsbp-af97f81"></div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading" id="section-element-component">Card Component</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>It's used for query loop cards and info cards</p>
<!-- /wp:paragraph -->

<!-- wp:query {"queryId":22,"query":{"perPage":2,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"align":"wide"} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"layout":{"type":"grid","columnCount":4}} -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"blockGap":"0"},"border":{"width":"1px"},"elements":{"link":{"color":{"text":"var:preset|color|textcolor"}}},"color":{"background":"#fffefe"}},"textColor":"textcolor","borderColor":"card-border","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-card-border-border-color has-textcolor-color has-text-color has-background has-link-color" style="border-width:1px;background-color:#fffefe;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:post-featured-image {"isLink":true,"height":"230px"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"10px","padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:post-terms {"term":"category","separator":"  ","fontSize":"xs"} /-->

<!-- wp:post-title {"isLink":true,"style":{"typography":{"lineHeight":"1.4"}},"fontSize":"l"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"8px"}},"layout":{"type":"flex","allowOrientation":false}} -->
<div class="wp-block-group"><!-- wp:post-author {"showAvatar":false,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"},"color":{"duotone":"unset"},"elements":{"link":{"color":{"text":"var:preset|color|textcolor"}}}},"textColor":"textcolor","fontSize":"xs"} /-->

<!-- wp:paragraph {"fontSize":"s"} -->
<p class="has-s-font-size">/</p>
<!-- /wp:paragraph -->

<!-- wp:post-date {"textColor":"lightgrey","fontSize":"xs"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query -->

<!-- wp:paragraph -->
<p><em>--wp--preset--color--card-base</em> - background color of card<br><em>--wp--preset--color--card-border</em> - border color of card<br><em>--wp--preset--color--card-text</em> - text color of card<br><em>--wp--custom--card--border-radius</em> - border radius for query loop<br><em>--wp--custom--card--spacing</em> - spacing in card</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p></p>
<!-- /wp:paragraph --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:paragraph -->
<p></p>
<!-- /wp:paragraph --></div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->
<?php endif; ?>